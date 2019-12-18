<?php

require_once('collection/sortby/base.php');

class sortby_tag extends sortby_base {

	public function root_sort_query() {
		global $prefs;
		$sflag = $this->filter_root_on_why();
		$qstring =
		"SELECT DISTINCT Name, Tagindex
			FROM Tagtable
			JOIN TagListtable USING (Tagindex)
			JOIN Tracktable USING (TTindex)
		WHERE
			Uri IS NOT NULL
			AND Hidden = 0
			".track_date_check($prefs['collectionrange'], $this->why)."
			".$sflag."
		ORDER BY Name ASC";
		$result = generic_sql_query($qstring, false, PDO::FETCH_ASSOC);
		foreach ($result as $tag) {
			yield $tag;
		}
	}

	public function album_sort_query($unused) {
		global $prefs;
		$sflag = $this->filter_album_on_why();
		$qstring =
		"SELECT Albumtable.*, Artisttable.Artistname
			FROM Albumtable
			JOIN Artisttable ON (Albumtable.AlbumArtistindex = Artisttable.Artistindex)
			WHERE Albumindex IN
				(SELECT DISTINCT Albumindex FROM
				Tracktable JOIN TagListtable USING (TTindex)
				WHERE Tagindex = ".$this->who." AND ";
		$qstring .= "Tracktable.Uri IS NOT NULL AND Tracktable.Hidden = 0 ".
		track_date_check($prefs['collectionrange'], $this->why)." ".
		$sflag.")";
		$qstring .= " ORDER BY ";
		$qstring .= " CASE WHEN Albumname LIKE '".get_int_text('label_allartist')."%' THEN 1 ELSE 2 END,";
		if ($prefs['sortbydate']) {
			if ($prefs['notvabydate']) {
				$qstring .= " CASE WHEN Artisttable.Artistname = 'Various Artists' THEN LOWER(Albumname) ELSE Year END,";
			} else {
				$qstring .= ' Year,';
			}
		}
		$qstring .= ' LOWER(Albumname)';
		$result = generic_sql_query($qstring, false, PDO::FETCH_ASSOC);
		foreach ($result as $album) {
			$album['why'] = $this->why;
			$album['id'] = $this->why.'album'.$album['Albumindex'].'_'.$this->who;
			$album['class'] = 'album';
			yield $album;
		}
	}

	public function output_root_list() {
		global $divtype;
		$count = 0;
		foreach ($this->root_sort_query() as $tag) {
			print artistHeader($this->why.'tag'.$tag['Tagindex'], $tag['Name']);
			$count++;
			$divtype = ($divtype == "album1") ? "album2" : "album1";
		}
		return $count;
	}

	public function output_root_fragment($tagindex) {
		global $divtype;
		logger::log('SORTBY_TAG','Generating tag fragment',$this->why,'tag',$tagindex);
		$singleheader = $this->initial_root_insert();
		foreach ($this->root_sort_query() as $tag) {
			if ($tag['Tagindex'] != $tagindex) {
				$singleheader['type'] = 'insertAfter';
				$singleheader['where'] = $this->why.'tag'.$tag['Tagindex'];
			} else {
				$singleheader['html'] = artistHeader($this->why.'tag'.$tag['Tagindex'], $tag['Name']);
				$singleheader['id'] = $this->why.'tag'.$tagindex;
				return $singleheader;
			}
			$divtype = ($divtype == "album1") ? "album2" : "album1";
		}
		logger::error('SORTBY_TAG','Did not find position for',$this->why,'tag',$tagindex);
	}

	public function output_album_list($unused = false, $do_controlheader = true) {
		logger::log("SORTBY_TAG", "Generating albums for",$this->why,$this->what,$this->who);
		$count = 0;
		if ($do_controlheader) {
			print albumControlHeader(false, $this->why, 'album', $this->who, $this->getTagName());
		}
		foreach ($this->album_sort_query($unused) as $album) {
			print albumHeader($album);
			$count++;
		}
		if ($count == 0 && $this->why != 'a') {
			noAlbumsHeader();
		}
		return $count;
	}

	public function output_album_fragment($albumindex, $unused = true, $do_controlheader = true) {
		logger::log("SORTBY_TAG", "Generating album header fragment",$this->why,'album',$albumindex,$this->who);
		$singleheader = $this->initial_album_insert($this->why);
		foreach ($this->album_sort_query($unused) as $album) {
			if ($album['Albumindex'] != $albumindex) {
				$singleheader['where'] = $this->why.'album'.$album['Albumindex'].'_'.$this->who;
				$singleheader['type'] = 'insertAfter';
			} else {
				$singleheader['html'] = albumHeader($album);
				$singleheader['id'] = $this->why.'album'.$albumindex.'_'.$this->who;
				return $singleheader;
			}
		}
	}

	private function getTagName() {
		return simple_query('Name', 'Tagtable', 'Tagindex', $this->who,'');
	}

	public function filter_track_on_why() {
		$retval = '';
		switch ($this->why) {
			case 'a':
				// Tracks from Collection //
				$retval = "AND isSearchResult < 2 AND isAudiobook = 0";
				break;

			case 'b':
				// Tracks from Search Results //
				$retval = "AND isSearchResult > 0";
				break;

			case 'r':
				// Only Tracks with Ratings //
				$retval = "AND isSearchResult < 2 AND (LinkChecked = 0 OR LinkChecked = 2) AND r.TTindex IS NOT NULL";
				break;

			case 't':
				// Only Tracks with Tags //
				$retval = "AND isSearchResult < 2 AND (LinkChecked = 0 OR LinkChecked = 2) AND tl.TTindex IS NOT NULL";
				break;

			case 'y':
				// Only Tracks with Tags and Ratings //
				$retval = "AND isSearchResult < 2 AND (LinkChecked = 0 OR LinkChecked = 2) AND tl.TTindex IS NOT NULL AND r.TTindex IS NOT NULL";
				break;

			case 'u':
				// Only Tracks with Tags or Ratings //
				$retval = "AND isSearchResult < 2 AND (LinkChecked = 0 OR LinkChecked = 2) AND (tl.TTindex IS NOT NULL OR r.TTindex IS NOT NULL)";
				break;

			case 'z':
				// Audiobooks //
				$retval = "AND isSearchResult < 2 AND isAudiobook > 0";
				break;

			default:
				logger::error('SORTBY', 'Unknown WHY :',$this->why);
				break;
		}
		if ($this->when) {
			$retval .= " AND Tagindex = ".$this->when;
		}
		return $retval;
	}

	public function get_modified_root_items() {
		global $returninfo;
		$result = generic_sql_query(
			"SELECT DISTINCT Tagindex FROM Albumtable
			JOIN Tracktable USING (Albumindex)
			JOIN TagListtable USING (TTindex)
			WHERE justUpdated = 1 ".$this->filter_root_on_why());
		foreach ($result as $mod) {
			$returninfo['modifiedartists'][] = $this->output_root_fragment($mod['Tagindex']);
		}
		$result = generic_sql_query(
			"SELECT Tagindex FROM Tagtable WHERE Tagindex NOT IN
			 	(SELECT DISTINCT Tagindex FROM TagListtable)");
		foreach ($result as $mod) {
			$returninfo['deletedartists'][] = $this->why.'tag'.$mod['Tagindex'];
		}
	}

	public function get_modified_albums() {
		global $returninfo;
		$result = generic_sql_query('SELECT Albumindex FROM Albumtable WHERE justUpdated = 1');
		foreach ($result as $mod) {
			foreach ($this->root_sort_query() as $tag) {
				if ($this->album_tag_trackcount($mod['Albumindex'], $tag['Tagindex']) == 0) {
					$returninfo['deletedalbums'][] = $this->why.'album'.$mod['Albumindex'].'_'.$tag['Tagindex'];
				} else {
					$lister = new sortby_tag($this->why.'tag'.$tag['Tagindex']);
					$r = $lister->output_album_fragment($mod['Albumindex']);
					$lister = new sortby_tag($this->why.'album'.$mod['Albumindex'].'_'.$tag['Tagindex']);
					$r['tracklist'] = $lister->output_track_list(true);
					$returninfo['modifiedalbums'][] = $r;
				}
			}
		}
	}

	private function album_tag_trackcount($albumindex, $tagindex) {
		$qstring =
		"SELECT COUNT(TTindex) AS num
		FROM Tracktable JOIN TagListtable USING (TTindex)
		WHERE Albumindex = ".$albumindex." AND Tagindex = ".$tagindex.
		" AND Hidden = 0 AND Uri IS NOT NULL ".
		$this->filter_track_on_why();
		return generic_sql_query($qstring, false, null, 'num', 0);
	}

	public function initial_album_insert() {
		return array (
			'type' => 'insertAtStart',
			'where' => $this->why.'tag'.$this->who,
			'why' => $this->why
		);
	}

}

?>