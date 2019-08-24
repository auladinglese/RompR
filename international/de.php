<?php

// The first term here is the name that will appear in the drop-down list
// This has the form $langname['file_name without .php extension'] = "Display Name";
// Try to name your file as the two-letter language code so RompR can pick a suitable
// default language automatically.

$langname['de'] = "Deutsch";

$languages['de'] = array (

	// The Sources Chooser Button tooltips
	"button_local_music" => "Musik Sammlung",
	"button_file_browser" => "Datei Browser",
	"button_internet_radio" => "Internet Radio Stationen",
	"button_albumart" => "Album Art Manager",

	// Tooltips for Buttons across the top of the information panel
	"button_togglesources" => "Quellen Ansicht",
	"button_back" => "Zurück",
	"button_history" => "History",
	"button_forward" => "Vorwärts",
	"button_toggleplaylist" => "Toggle Playlist",

	// Tooltips for playlist buttons
	"button_alarm" => "Alarm Clock",
	"button_prefs" => "RompR Preferences",
	"button_clearplaylist" => "Leere Playlist",
	"button_loadplaylist" => "Lade gespeicherte Playlist",
	"button_saveplaylist" => "Sichere Playlist",

	// Tooltips for playback controls
	"button_previous" => "Vorheriger Titel",
	"button_play" => "Play/Pause",
	"button_stop" => "Stop",
	"button_stopafter" => "Stoppe nach aktuellem Titel",
	"button_next" => "Nächster Titel",
	"button_love" => "Ich liebe diesen Titel",
	"button_ban" => "Diesen Titel sperren",
	"button_volume" => "Ziehen um Lautstärke einzustellen",
	"button_closewindow" => "Fenster schließen",

	// Configuration menu entries
	"config_language" => "SPRACHE",
	"config_theme" => "AUSSEHEN",
	"config_hidealbumlist" => "Verstecke Musik Sammlung",
	"config_hidefileslist" => "Verstecke Dateiliste",
	"config_hidelastfm" => "Verstecke Last.FM Radiosender",
	"config_hideradio" => "Verstecke Radiosender",
        "config_hidepodcasts" => "Verstecke Podcasts",
        "config_hideplaylistslist" => "Verstecke gespeicherte Wiedergabelisten",
        "config_hidepluginplaylistslist" => "Verstecke personalisierte Radiosender",
	"config_hidebrowser" => "Verstecke Infofenster",
	"config_fullbio" => "Hole vollständige Biographie des Künstlers / der Künstlerin von Last.FM",
	"config_lastfmlang" => "Sprache für Last.FM und Wikipedia",
	"config_lastfmdefault" => "Standardsprache (English)",
	"config_lastfminterface" => "Sprache der RompR-Oberfläche",
	"config_lastfmbrowser" => "Browser Standardsprache",
	"config_lastfmlanguser" => "Diese spezifische Sprache:",
	"config_langinfo" => "Last.FM und Wikipedia schalten zurück zu Englisch, wenn keine Sprachinformationen in der ausgewählten Sprache vorliegen",
	"config_autoscroll" => "Auto-Scroll Playlist zum aktuellen Titel",
	"config_autocovers" => "Automatisch Cover herunterladen",
	"config_musicfolders" => "Um automatisch Coverart von Ihren Musikverzeichnissen zu nutzen, geben Sie bitte den Pfad zu Ihrer Musiksammlung in dieses Feld ein:",
	"config_crossfade" => "Crossfade Dauer (Sekunden)",
	"config_clicklabel" => "Mausklick-Verhalten bei Musikauswahl",
	"config_doubleclick" => "Doppel-Klick zum Hinzufügen, Klick zum Auswählen",
	"config_singleclick" => "Klick zum Hinzufügen, keine Auswahl",
	"config_sortbydate" => "Sortiere Alben nach Datum",
	"config_notvabydate" => "Keine Sortierung nach Datum bei 'Verschiedene Künstler'",
	"config_updateonstart" => "Musiksammlung beim Start automatisch aktualisieren",
	"config_updatenow" => "Musiksammlung jetzt aktualisieren",
	"config_rescan" => "Musiksammlung vollständig neu einlesen",
	"config_editshortcuts" => "Editiere Tastaturkürzel ...",
	"config_audiooutputs" => "Audioausgänge",
	"config_lastfmusername" => "Last.FM Benutzername",
	"config_loginbutton" => "Anmeldung",
	"config_scrobbling" => "Last.FM Scrobbling einschalten",
	"config_scrobblepercent" => "Wieviel Prozent des Titels müssen vor dem Scrobbeln abgespielt sein (Standard: 50%)",
	"config_autocorrect" => "Last.FM Autokorrektur eingeschaltet",
	"config_tagloved" => "Tagge Lieblingstitel mit:",
	"config_country" => "LAND (für Last.FM)",
	"config_fontsize" => "FONT-GRÖSSE",
	"config_fontname" => "FONT-STIL",
	"config_alarm_on" => "Wecker eingeschaltet",

	// Various buttons for the playlist dropdowns
	"button_imsure" => "Ich bin mir sicher",
	"button_save" => "Sichern",

	// General Labels and buttons in the main layout
	"label_lastfm" => "Last.FM",
	"button_searchmusic" => "Musiksammlung durchsuchen",
	"button_searchfiles" => "Dateisuche",
	"label_yourradio" => "Ihre Radio Sender",
	"label_podcasts" => "Podcasts",
	"label_somafm" => "Soma FM",
	"label_bbcradio" => "Live BBC Radio",
	"label_icecast" => "Icecast Radio",
	"label_emptyinfo" => "Dies ist das Informationsfenster. Interessante Informationen erscheinen hier sobald Sie Musik abspielen",
	"button_playlistcontrols" => "Playlist Kontrollfenster",
	"button_random" => "ZUFALLSAUSWAHL",
	"button_crossfade" => "CROSSFADE",
	"button_repeat" => "WIEDERHOLEN",
	"button_consume" => "NACH APSPIELEN LÖSCHEN",
	"label_yes" => "Ja",
	"label_no" => "Nein",
	"label_updating" => "Aktualisiere Musiksammlung",
	"label_update_error" => "Erstellen der Musiksammlung gescheitert!",
	"label_notsupported" => "Vorgang nicht unterstützt!",
	"label_playlisterror" => "Etwas ist beim Empfang der Playlist falsch gelaufen!",
	"label_mpd_no" => "MPD kann die Lautstärke nicht anpassen, wenn die Wiedergabe gestoppt ist",
	"label_downloading" => "Lade herunter...",
	"button_OK" => "OK",
	"button_cancel" => "Abbruch",
	"error_playlistname" => "Playlist Name darf keine Schrägstriche enthalten",
	"label_savedpl" => "Playlist gesichert als %s",
	"label_loadingstations" => "Lade Sender...",

	// Search Forms
	"label_searchfor" => "Suche nach",
	"label_searching" => "Suche...",
	"button_search" => "Suche",
	"label_searchresults" => "Suchergebnisse",
	"label_multiterms" => "Es können mehrere Suchbegriffe gleichzeitig benutzt werden",
	"label_limitsearch" => "Durchsuche das genannte Backend",

	// General multipurpose labels
	"label_tracks" => "Titel",
	"label_albums" => "Alben",
	"label_artists" => "Künstler/in",
	"label_track" => "Titel",
	"label_album" => "Album",
	"label_artist" => "Künstler/in",
	"label_anything" => "Irgendetwas",
	"label_genre" => "Genre",
	"label_composer" => "Komponist",
	"label_performer" => "Interpret",
	"label_rating" => "Rating",
	"label_tag" => "Tag",
	"label_discogs" => "Discogs",
	"label_musicbrainz" => "Musicbrainz",
	"label_wikipedia" => "Wikipedia",
	"label_general_error" => "Fehler. Bitte laden Sie die Seite neu und versuchen es noch einmal!",
	"label_days" => "Tage",
	"label_hours" => "Stunden",
	"label_minutes" => "Minuten",
	"label_noalbums" => "Es wurde kein entsprechendes Album gefunden",
	"label_notracks" => "Es wurden keine entsprechenden Stücke gefunden",
	"label_duration" => "Dauer",
	"label_playererror" => "Abspielfehler",
	"label_tunefailed" => "Radiosender konnte nicht empfangen werden",
	"label_noneighbours" => "Keine Nachbarn gefunden",
	"label_nofreinds" => "Sie haben 0 Freunde",
	"label_notags" => "Keine Tags gefunden",
	"label_noartists" => "Habe keine Lieblingskünstler/innen gefunden",
	"mopidy_tooold" => "Ihre Version von Mopidy ist zu alt. Bitte aktualisieren Sie auf Version %s oder neuer",
	"button_playradio" => "Abspielen",

	// Playlist and Now Playing
	"label_waitingforstation" => "Warte auf Sender Information ...",
	"label_notforradio" => "Not supported for radio streams",
	"label_incoming" => "Lade...",
	"label_addingtracks" => "Füge Titel hinzu",
	// Now Playing - [track name] by [artist] on [album]
    "label_by" => "von",
    "label_on" => "auf",
    // Now playing - 1:45 of 6:50
    "label_of" => "von",

	// Podcasts
	"podcast_rss_error" => "Fehler beim Laden des RRS Feeds",
	"podcast_remove_error" => "Podcast konnte nicht gelöscht werden",
	"podcast_general_error" => "Aktion gescheitert :-(",
	"podcast_entrybox" => "Geben Sie die URL eines Podacast RSS Feeds hier ein oder ziehen Sie das Icon hierhin",
	// Podcast tooltips
	"podcast_delete" => "Lösche diesen Podcast",
	"podcast_configure" => "Konfiguriere diesen Podcast",
	"podcast_refresh" => "Lösche diesen Podcast",
	"podcast_download_all" => "Lade alle Episoden dieses Podcasts herunter",
	"podcast_mark_all" => "Mark All Episodes as Listened",
	// Podcast display options
	"podcast_display" => "Anzeige",
	"podcast_display_all" => "Alles",
	"podcast_display_onlynew" => "Nur Neues",
	"podcast_display_unlistened" => "Neu und nicht aufgeführt",
	"podcast_display_downloadnew" => "Neu und Heruntergeladen",
	"podcast_display_downloaded" => "Nur Heruntergeladen",
	// Podcast refresh options
	"podcast_refresh" => "Aktualisiere",
	"podcast_refresh_never" => "Manuell",
	"podcast_refresh_hourly" => "Stündlich",
	"podcast_refresh_daily" => "Täglich",
	"podcast_refresh_weekly" => "Wöchentlich",
	"podcast_refresh_monthly" => "Monatlich",
	// Podcast auto expire
	"podcast_expire" => "Behalte Episoden für",
	"podcast_expire_tooltip" => "Alle Episoden älter als dieser Wert werden aus der Liste gelöscht. Änderungen an diesem Wert werden bei der nächsten Aktualisierung des Podcastsaktiv",
	"podcast_expire_never" => "Immer",
	"podcast_expire_week" => "Eine Woche",
	"podcast_expire_2week" => "Zwei Wochen",
	"podcast_expire_month" => "Ein Monat",
	"podcast_expire_2month" => "Zwei Monate",
	"podcast_expire_6month" => "Sechs Monate",
	"podcast_expire_year" => "Ein Jahr",
	// Podcast number to keep
	"podcast_keep" => "Maximale Anzahl",
	"podcast_keep_tooltip" => "Diese Liste wird immer nur so viele Einträge anzeigen wie angebenDiese Liste wird immer nur so viele Einträge anzeigen wie angegeben. Änderungen an dieser Option werden bei der nächsten Aktualisierung des Podcasts aktiv",
	"podcast_keep_0" => "Unbegrenzt",
	// Podcast other options
	"podcast_keep_downloaded" => "Halte alle heruntergeladenen Episoden",
	"podcast_kd_tooltip" => "Diese Liste wird immer nur so viele Einträge anzeigen wie angegeben. Änderungen an dieser Option werden bei der nächsten Aktualisierung des Podcasts aktiv",
	"podcast_auto_download" => "Automatisch neue Episoden herunterladen",
	"podcast_tooltip_new" => "Dies ist eine neue Episode",
	"podcast_tooltip_notnew" => "Diese Episode ist nicht neu, wurde aber bisher nicht angezeigt",
	"podcast_tooltip_downloaded" => "Diese Episode wurde herunter geladen",
	"podcast_tooltip_download" => "Laden Sie diese Episode auf Ihren Computer herunter",
	"podcast_tooltip_mark" => "Als Gehört markieren",
	"podcast_tooltip_delepisode" => "Lösche diese Episode",
	"podcast_expired" => "Diese Episode ist abgelaufen",
	// eg 2 days left to listen
	"podcast_timeleft" => "%s verbleiben zum Anhören",

	// Soma FM Chooser Panel
	"label_soma" => "Soma.FM ist ein nicht-kommerzieller Radiosender aus San Francisco",
	"label_soma_beg" => "Bitte überlegen Sie sich, ob Sie diesen Sender unterstützen wollen, falls Ihnen die Sendungen gefallen",

	// Your radio stations
	"label_radioinput" => "Geben Sie die URL",

	//Album Art Manager
	"albumart_title" => "Album Art",
	"albumart_getmissing" => "Hole fehlende Cover",
	"albumart_showall" => "Zeige alle Cover",
	"albumart_instructions" => "Klicken Sie ein Cover an, um es zu ändern oder ziehen Sie ein Bild von Ihrer Festplatte oder aus einem anderen Browserfenster hierhin",
	"albumart_onlyempty" => "Zeige nur Alben ohne Cover",
	"albumart_allartists" => "Alle Künstler/innen",
	"albumart_unused" => "Ungenutzte Bilder",
	"albumart_deleting" => "Lösche...",
	"albumart_error" => "Das hat nicht funktioniert",
	"albumart_googlesearch" => "Google Suche",
	"albumart_local" => "Lokale Bilder",
	"albumart_upload" => "Datei Upload",
	"albumart_uploadbutton" => "Upload",
	"albumart_newtab" => "Google Suche in neuer Registerkarte",
	"albumart_dragdrop" => "Sie können mit Drag & Drop Bilder von Ihrer Festplatte oder aus einem anderen Browserfenster direkt auf dieses Bild ziehen (funktioniert mit den meisten Browsern)",
	"albumart_showmore" => "Zeige mehr Resultate",
	"albumart_googleproblem" => "Es gab ein Problem. Google meldet",
	"albumart_getthese" => "Hole diese Cover",
	"albumart_deletethese" => "Lösche diese Cover",
	"albumart_nocollection" => "Bitte erstellen Sie Ihre Musiksammlung bevor Sie versuchen Cover herunterzuladen",
	"albumart_nocovercount" => "Alben ohne Cover",
	"albumart_getting" => "Hole",

	// Setup page (rompr/?setup)
	"setup_connectfail" => "RompR konnte sich nicht mit einem MPD oder Mopidy Server verbinden",
	"setup_connecterror" => "Es gab einen Fehler bei der Kommunikation mit Ihrem MPD oder Mopidy Server: ",
	"setup_request" => "Sie haben die Setup-Seite aufgerufen",
	"setup_labeladdresses" => "Bitte geben Sie die IP Adresse und den Port Ihres MPD Servers in dieser Maske ein",
	"setup_addressnote" => "Anmerkung: localhost meint in diesem Zusammenhang den Computer auf dem der Apache Webserver läuft",
	"setup_ipaddress" => "IP Adresse oder Hostname",
	"setup_port" => "Port",
	"setup_advanced" => "Fortgeschrittene Optionen",
	"setup_leaveblank" => "Lassen Sie diese Felder leer solange Sie diese nicht brauchen",
	"setup_password" => "Passwort",
	"setup_unixsocket" => "UNIX-Domain Socket",

	// Intro Window
	"intro_title" => "Information über diese Version",
	"intro_welcome" => "Willkommen zu RompR Version",
	"intro_viewingmobile" => "Sie sehen die Mobile Version von RompR. Um die Standardversion zu sehen gehen Sie zu",
	"intro_viewmobile" => "Um die Mobile Version zu sehen, gehen Sie zu",
	"intro_basicmanual" => "Das Grund-Handbuch von RompR befindet sich hier:",
	"intro_forum" => "Das Diskussionsforum ist hier:",
	"intro_mopidy" => "Wichtige Informationen für Mopidy Benutzer",
	"intro_mopidywiki" => "Wenn Sie Mopidy benutzen, lesen Sie bitte das Wiki",
	"intro_mopidyversion" => "Sie müssen Mopidy %s oder aktueller benutzen",

	// Last.FM
	"lastfm_loginwindow" => "Log In zu Last.FM",
	"lastfm_login1" => "Bitte den Button unten anklicken, um die Last.FM Website in einer neuen Registerkarte zu öffnen. Geben Sie Ihre Last.FM Login Daten ein falls nötig und geben dann RompR die Erlaubnis Ihren Account zu nutzen!",
	"lastfm_login2" => "Sie können die neue Registerkarte schließen, wenn Sie mit den Eingaben fertig sind, aber schließen Sie nicht dieses Dialogfenster!",
	"lastfm_loginbutton" => "Hier klicken, um sich anzumelden",
	"lastfm_login3" => "Nachdem Sie sich bei Last.FM angemeldet haben, den OK-Button anklicken, um den Prozess abzuschließen",
	"lastfm_loginfailed" => "Anmeldung bei Last.FM fehlgeschlagen",
	"label_loved" => "Lieblingstitel",
	"label_lovefailed" => "Markierung als Lieblingstitel fehlgeschlagen",
	"label_unloved" => "Markierung als Lieblingstitel entfernt",
	"label_unlovefailed" => "Entfernen der Lieblingstitel-Markierung fehlgeschlagen",
	"label_banned" => "Gesperrt",
	"label_banfailed" => "Sperre fehlgeschlagen",
	"label_scrobbled" => "Scrobbled",
	"label_scrobblefailed" => "Scrobble fehlgeschlagen",

	// Info Panel
	"info_gettinginfo" => "Hole Info...",
	"info_newtab" => "In neuer Registerkarte betrachten",

	// File Info panel
	"button_fileinfo" => "Info Panel (Datei Information)",
	"info_file" => "Datei:",
	"info_from_beets" => "(vom Beets Server)",
	"info_format" => "Format:",
	"info_bitrate" => "Bitrate:",
	"info_samplerate" => "Sample Rate:",
	"info_mono" => "Mono",
	"info_stereo" => "Stereo",
	"info_channels" => "Kanäle",
	"info_date" => "Datum:",
	"info_genre" => "Genre:",
	"info_performers" => "Interpreten:",
	"info_composers" => "Komponisten:",
	"info_comment" => "Kommentar:",
	"info_label" => "Label:",
	"info_disctitle" => "Disk Titel:",
	"info_encoder" => "Encoder:",
	"info_year" => "Jahr:",

	// Last.FM Info Panel
	"button_infolastfm" => "Info Panel (Last.FM)",
	"label_notrackinfo" => "Konnte keine Informationen zu diesem Titel finden",
	"label_noalbuminfo" => "Konnte keine Informationen zu diesem Album finden",
	"label_noartistinfo" => "Konnte keine Informationen zu diesem Künstler / dieser Künstlerin finden",
	"lastfm_listeners" => "Hörer/innen:",
	"lastfm_plays" => "Spielt:",
	"lastfm_yourplays" => "Sie haben abgespielt::",
	"lastfm_toptags" => "TOP TAGS:",
	"lastfm_addtags" => "TAGS hinzufügen",
	"lastfm_addtagslabel" => "Tags, Komma getrennt, hinzufügen",
	"button_add" => "Hinzufügen",
	"lastfm_yourtags" => "IHRE TAGS:",
	"lastfm_simar" => "Ähnliche Künstler/innen",
	"lastfm_removetag" => "Tag entfernen",
	"lastfm_releasedate" => "Veröffentlichungsdatum",
	"lastfm_viewtrack" => "Titel auf Last.FM ansehen",
	"lastfm_tagerror" => "Ändern der Tags fehlgeschlagen",
	"lastfm_loved" => "Lieblingstitel",
	"lastfm_lovethis" => "Lieblingsstück",
	"lastfm_unlove" => "Kein Lieblingsstück mehr",
	"lastfm_notfound" => "%s Nicht gefunden",

	// Lyrics info panel
	"button_lyrics" => "Info Panel (Liedtexte)",
	"lyrics_lyrics" => "Liedtexte",
	"lyrics_nonefound" => "Kein Liedtext gefunden",
	"lyrics_info" => "Um Liedtexte anzusehen, stellen Sie bitte sicher, dass Ihre lokalen Dateien mit Liedtexten versehen wurden",
	"lyrics_nopath" => "Um Liedtexte anzusehen, stellen Sie bitte sicher, dass Ihre lokalen Dateien mit Liedtexten versehen wurden und setzen Sie den Pfad zu Ihren Musikdateien in den Voreinstellungen",

	// For Discogs/Musicbrainz release tables. LABEL in this context means record label
	// These are all section headers and so should all be UPPER CASE, unless there's a good linguistic
	// reason not to do that
	"title_year" => "JAHR",
	"title_title" => "TITEL",
	"title_type" => "ART",
	"title_label" => "LABEL",
	"label_pages" => "SEITEN",

	// For discogs/musicbrains album info. discogs_companies means the companies involved in producing the album
	// These are all section headers and so should all be UPPER CASE, unless there's a good linguistic
	// reason not to do that
	"discogs_companies" => "PLATTENFIRMA",
	"discogs_personnel" => "BESETZUNG",
	"discogs_videos" => "VIDEOS",
	"discogs_styles" => "MUSIKRICHTUNG",
	"discogs_genres" => "GENRES",
	"discogs_tracklisting" => "TITELLISTE",
	"discogs_realname" => "RICHTIGER NAME:",
	"discogs_aliases" => "ALIAS:",
	"discogs_alsoknown" => "AUCH BEKANNT ALS:",
	"discogs_external" => "EXTERNE VERKNÜPFUNG",
	"discogs_bandmembers" => "BAND MITGLIEDER",
	"discogs_memberof" => "MITGLIED VON",
	"discogs_discography" => "%s DISCOGRAPHIE",

	// Discogs info panel
	"button_discogs" => "Info Panel (Discogs)",
	"discogs_error" => "Netzwerkfehler oder keine Antwort von Discogs",
	"discogs_nonsense" => "Konnte keine sinnvolle Antwort von Discogs bekommen",
	"discogs_noalbum" => "Konnte dieses Album nicht auf Discogs finden",
	"discogs_notrack" => "Konnte diesen Titel nicht auf Discogs finden",

	// Musicbrainz info panel
	"button_musicbrainz" => "Info Panel (Musicbrainz)",
	"musicbrainz_error" => "Keine Antwort von MusicBrainz",
	"musicbrainz_contacterror" => "Es gab einen Fehler beim Verbindungsversuch zu Musicbrainz",
	"musicbrainz_noartist" => "Konnte diesen Künstler / diese Künstlerin nicht auf Musicbrainz finden",
	"musicbrainz_noalbum" => "Konnte dieses Album nicht auf Musicbrainz finden",
	"musicbrainz_notrack" => "Konnte diesen Titel nicht auf Musicbrainz finden",
	"musicbrainz_noinfo" => "Konnte keine Information von Musicbrainz holen",
	// This is used for date ranges -  eg 2005 - Present
	"musicbrainz_now" => "Aktuell",
	"musicbrainz_origin" => "HERKUNFT",
	"musicbrainz_active" => "AKTIV",
	"musicbrainz_rating" => "BEWERTUNG",
	"musicbrainz_notes" => "ANMERKUNGEN",
	"musicbrainz_tags" => "TAGS",
	"musicbrainz_externaldiscography" => "Discographie (%s)",
	"musicbrainz_officalhomepage" => "Offizielle Homepage (%s)",
	"musicbrainz_fansite" => "Fan Site (%s)",
	"musicbrainz_lyrics" => "Liedtexte (%s)",
	"musicbrainz_social" => "Social Network",
	"musicbrainz_microblog" => "Mikroblog",
	"musicbrainz_review" => "Bewertung (%s)",
	"musicbrainz_novotes" => "(Keine Stimmen)",
	// eg: 3/5 from 15 votes
	"musicbrainz_votes" => "%s/5 von %s Bewertungen",
	"musicbrainz_appears" => "VERÖFFENTLICHT AUF",
	"musicbrainz_credits" => "CREDITS",
	"musicbrainz_status" => "STATUS",
	"musicbrainz_date" => "DATUM",
	"musicbrainz_country" => "LAND",
	"musicbrainz_disc" => "DISK",

	// SoundCloud info panel
	"button_soundcloud" => "Info Panel (SoundCloud)",
	"soundcloud_trackinfo" => "Titel Info",
	"soundcloud_plays" => "Spielt",
	"soundcloud_downloads" => "Downloads",
	"soundcloud_faves" => "Favoriten",
	// State means eg State: Finished or State: Unfinished
	"soundcloud_state" => "Status",
	"soundcloud_license" => "Lizens",
	"soundcloud_buy" => "Kaufe Titel",
	"soundcloud_view" => "Auf SoundCloud ansehen",
	"soundcloud_user" => "SoundCloud Benutzer",
	"soundcloud_fullname" => "Vollständiger Name",
	"soundcloud_Country" => "Land",
	"soundcloud_city" => "Stadt",
	"soundcloud_website" => "Website besuchen",
	"soundcloud_not" => "Dieses Fenster zeigt nur Information über Musik aus der Soundcloud",

	// Wikipedia Info Panel
	"button_wikipedia" => "Info Panel (Wikipedia)",
	"wiki_nothing" => "Nichts in der Wikipedia gefunden",
	"wiki_fail" => "Wikipedia konnte nichts in Verbindung mit '%s' finden",
	"wiki_suggest" => "Wikipedia konnte keine passenden Seiten zu '%s' finden",
	"wiki_suggest2" => "Hier sind einige Vorschläge die Wikipedia gemacht hat",

	// Keybindings editor
	"title_keybindings" => "Tastaturkürzel",
	"button_volup" => "Lauter",
	"button_voldown" => "Leiser",

	// Extras for mobile version
	"button_playlist" => "Playlist",
	"button_playman" => "Playlist Verwaltung",
	"button_mob_history" => "Info Panel History",
	"label_streamradio" => "Lokal und nationales Radio",

	// Various Plugins, Rating, and Tagging
	"stars" => "Sterne",
	"star" => "Stern",
	"label_tags" => "Tags",
	"label_oneresult" => "Suchergebnisse",
	"label_progress" => "Fortschritt",
	"label_wishlist" => "Wunschliste",
	"label_viewwishlist" => "Wunschliste ansehen",
	"label_addtow" => "Zu Wunschliste hinzugefügt",
	"label_finished" => "Abgeschlossen",
	"config_tagrat" => "Bewertungen und Tags",
	"config_synctags" => "Halte Tags synchron mit Last.FM",
	"config_loveis" => "Last.FM Lieblingslied bedeutet",
	"playlist_xstar" => "%s oder mehr Sterne",
	"playlist_5star" => "5 Stern Titel",
	"button_about" => "Über RompR",
	"label_notfound" => "Titel Nicht gefunden",
	// Eg + 3 more
	"label_moreresults" => "+ %s mehr",
	"label_tagmanager" => "Tag Verwaltung",
	"label_ratingmanager" => "Bewertungsverwaltung",
	"label_tagmanagertop" => "Drag & Drop aus der Musiksammlung um Tags zu Titeln hinzuzufügen",
	"label_ratingmanagertop" => "Drag & Drop aus der Musiksammlung um Bewertungen zu Titeln hinzuzufügen",
	"button_createtag" => "ERZEUGE TAG",

	//New in 0.52
	"config_alarm_ramp" => "Einblenden",
	"label_retrieve" => "Empfangen",

        // New in 0.60
        "spotify_error" => "Keine Antwort von Spotify",
        "spotify_noinfo" => "Konnte keine Informationen von Spotify beziehen",
        "button_infospotify" => "Info Feld (Spotify)",
        "config_icontheme" => "ICONS",
        "label_radio" => "Radio",
        "label_pop" => "Popularität",
        "label_albumsby" => "Alben von dieser Künstlerin / diesem Künstler",
        "label_singleartistradio" => "Titel nach Künstler/in",
        "label_mostplayed" => "Meist gespielt",
        "label_neverplayed" => "Nie gespielt",
        "label_radio_fartist" => "Lieblingskünstler/in Radio",
        "label_pluginplaylists" => "Eigene Radio Playlist",
        "label_recentlyadded_random" => "Kürzlich hinzugefügte Titel (Zufallsauswahl)",
        "label_recentlyadded_byalbum" => "Kürzlich hinzugefügte Alben",
        "setup_mpd" => "MPD/Mopidy Einstellungen",
        "settings_appearance" => "Erscheinungsbild",
        "settings_panels" => "Einstellungen",
        "settings_language" => "Sprache",
        "settings_interface" => "Interface",
        "label_charts" => "Deine Top 40",
        "label_choosedomains" => "Durchsuche diese Quellen:",
        "label_dragtoprio" => "(Ziehen um Reihenfolge zu ändern)",
        "button_subscribe" => "Abonnieren",
        "config_sortbycomposer" => "Benutze Komponist als Sortierfeld",
        "config_composergenre" => " .. nur wenn Genre gleich:",
        "config_displaycomposer" => "Zeige Komponist / Interpret in Aktuell läuft",
        "label_radio_mix" => "Spotify Recommendations",
        "label_gotnotracks" => "Keine Titel gefunden",
        "config_artistfirst" => "Künstler an der Spitze der Sammlung",
        "config_nosortprefixes" => "Ignoriere diese Präfixe beim Sortieren von Künstler/innen",
        "config_sortcollectionby" => "Zeige Sammling als:",
        "config_sortoptions" => "Sortierkriterien für die Sammlung",
        "button_skipforward" => "Nach vorne Springen",
        "button_skipbackward" => "Zurück Springen",
        "config_snoozetime" => "Schlummern (Minuten)",
        "config_ramptime" => "Einblenden (Sekunden)",
        "button_rateone" => "Bewertung 1 Stern",
        "button_ratetwo" => "Bewertung 2 Sterne",
        "button_ratethree" => "Bewertung 3 Sterne",
        "button_ratefour" => "Bewertung 4 Sterne",
        "button_ratefive" => "Bewertung 5 Sterne",
        "button_updatecollection" => "Aktualisiere Musik Sammlung",
        "label_favealbums" => "Lieblingsalben",
        "button_nextsource" => "Info Feld - Nächste Quelle",
        "button_now_playing" => "Jetzt läuft",
        "button_infopanel" => "Info Feld",
        "config_coversize" => "ALBUM COVER GRÖSSE",
        "podcast_sortmode" => "Sortier Reihenfolge",
        "podcast_newestfirst" => "Neuestes zuerst",
        "podcast_oldestfirst" => "Ältestes zuerst",
        "podcast_hidedescriptions" => "Verstecke Beschreibungen",

        // New in 0.64/0.65/0.70
        "label_metabackup" => "Metadaten Sicherung",
        "button_backup" => "Erzeuge Sicherung",
        "button_restore" => "Sicherung wiederherstellen",
        "button_collectioncontrols" => "Musik Sammlung Sortier Optionen",
        "label_playlistmanager" => "Playlist Manager",
        "label_playlistmanagertop" => "Drag & Drop von der Musik Sammlung um Titel zur Playlist hinzu zu fügen",
        "button_createplaylist" => "ERZEUGE PLAYLIST",
        "label_renameplaylist" => "Playlist umbenennen",
        "button_plugins" => "Alles Mögliche",
        "label_filename" => "Dateiname",
        "label_resultscollection" => "Sammlung",
        "label_resultstree" => "Verzeichnisbaum",
        "label_displayresultsas" => "Zeige Ergebnisse als:",
        "label_files" => "Dateien",
        "label_allartist" => "Alle Alben Featuring ",
        "button_findexact" => "Finde exakte Übereinstimmung",
        "label_albumartist" => "Album Künstler/in",
        "config_collectionfolders" => "Bilde Sammlung von:",
        "button_videos" => "Ähnliche Videos",
        "google_error" => "Keine Verbindung zu Google",
        "label_allrandom" => "Zufallswiedergabe aller Titel",
        "config_background" => "HINTERGRUNDBILD",
        "lastfm_error" => "Konnte keine passenden Informationen auf Last.FM finden",
        "config_skin" => "AUSSEHEN",

        // New in 0.71
        "label_albumsbyartist" => "Alben (nach Künstler/in)",
        "config_wheelspeed" => "Mausrad Geschwindigkeit",

        //CHANGED in 0.60
        "config_country" => "LAND (für Last.FM und Spotify)",
        "setup_labeladdresses" => "Bei Verbindungsproblemen IP Addresse statt 'localhost' benutzen",
        "setup_ipaddress" => "Mopidy oder MPD Server",

        "config_cdplayermode" => "CD Player Modus (Stelle Stücke nicht in die Wartechlange, starte Wiedergabe mit gewähltem Stück)",

        "label_recentlyplayed" => "Kürzlich gespielte Stücke",
        "label_simar_radio" => "Ähnliche Künstler wie",

        "label_tradsearch_header" => "Irgendetwas eingeben, wonach gesucht werden soll",
        "label_tradsearch" => "Klassische Suche mit mehreren Suchbegriffen",

        "played_never" => "Dieses Stück wurde noch nie gespielt",
        "played_once" => "Dieses Stück wurde einmal gespielt",
        "played_twice" => "Dieses Stück wurde zweimal gespielt",
        "played_n" => "Dieses Stück wurde %s Mal gespielt",
        "played_last" => "Es wurde zuletzt am %s gespielt",
        "added_on" => "Es wurde am %s zur Sammlung hinzugefügt",
        "button_infoyou" => "Überraschungsmodus",
        "discover_albums" => "Vorgeschlagene Alben",
        "discover_now" => "Vorgeschlagen auf Grund von %s",
        "config_discovembobulate" => "Überraschungsmodus beim Start ausführen",
        "label_spotify_mix" => "Spotify Wochen Mix",
        "label_spotify_dj" => "Spotify Swim",
        "label_spottery_lottery" => "Spotify Zufallsauswahl!",
        "label_dailymix" => "Dein täglicher Mix",
        "label_luckydip" => "Your Lucky Dip",
        "label_startshere" => "Deine Entdeckungsreise startet hier",
        "label_getspotify" => "Installiere Spotify, um Deine Entdeckungsreise zu beginnen",
        "because_liked" => "Dir gefiel %s, vielleicht gefällt Dir auch:",
        "because_listened" => "Ähnlich wie %s:",
        "albumart_findsmall" => "Finde kleine Coverbilder",
        "label_smartsetup" => "Bereite vor. Bitte einen kleinen Moment....",
        "button_sleep" => "Einschlaf Timer",
        "button_filter" => "Filter"

);

?>
