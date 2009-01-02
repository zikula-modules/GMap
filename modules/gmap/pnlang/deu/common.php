<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 *
 * @version $Id$
 */

define('_GM_VISITHOMEPAGE',            'GMap bei code.zikula.org besuchen');
define('_GM_ADDMESSAGE',               'Zusatzinfo (200 Zeichen max.)');
define('_GM_ADDSPECIALMARKER',         'Neuer Marker');
/*define('_GM_ADDSPECIALMARKER',       'POI setzen');*/
define('_GM_ADDTITLE',                 'Titel...');
define('_GM_ADDYOURCOORDS',            'Koordinaten setzen');
define('_GM_ADDYOURMARKER',            'Marker setzen');
define('_GM_ADMIN_TITLE',              'GMap - Administration');
define('_GM_ALREADYMAPPED',            'Eintrag bereits vorhanden');
define('_GM_CANNOTUPGRADEFROMPRIOR20', 'Upgrade von älteren Versionen als 2.0 ist nicht unterstützt');
define('_GM_CONFIGUPDATED',            'Configuration updated');
define('_GM_CONFIRMCHECK',             'Löschung bestätigen');
define('_GM_COORDSADDED',              'Koordinaten gesetzt...');
define('_GM_COORDSUPDATED',            'Koordinaten aktualisiert...');
define('_GM_DBCREATETABLEERROR',       'Fehler bei Anlegen der googlemap_markers-Tabelle');
define('_GM_DBDELETETABLEERROR',       'Fehler bei Löschen der googlemap_markers-Tabelle');
define('_GM_DELETEMARKER',             'Marker löschen');
define('_GM_ERRORDELETINGMARKER',      'Fehler beim Löschen des Markers');
define('_GM_GOOGLEKEY',                'GoogleMapAPI Key');
define('_GM_ICON',                     'Grafik');
define('_GM_ID',                       'ID');
define('_GM_ILLEGALLATITUDE',          'Fehler: Breitenangabe muss zwischen +180 (Norden) und -180 (Süden) sein.');
define('_GM_ILLEGALLONGITUDE',         'Fehler: Längenangabe muss zwischen +180 (Osten) und -180 (Westen) sein.');
define('_GM_ILLEGALMARKERID',          'Fehler: ungültige Marker-ID erhalten');
define('_GM_INITIALLATITUDE',          'Start-Breitengrad');
define('_GM_INITIALLONGITUDE',         'Start-Längengrad');
define('_GM_INITIALMAPTYPE',           'Startkartentyp');
define('_GM_INITIALZOOMLEVEL',         'Start-Zoomlevel');
define('_GM_LANGCODE',                 'de');
define('_GM_LATITUDE',                 'Breite');
define('_GM_LONGITUDE',                'Länge');
define('_GM_MAPHEIGHT',                'Höhe der Karte (in Pixel)');
define('_GM_MAPTYPE_MIXT',             'Hybrid');
define('_GM_MAPTYPE_PLAN',             'Karte');
define('_GM_MAPTYPE_SATELLITE',        'Satellit');
define('_GM_MAPWIDTH',                 'Breite der Karte (in Pixel)');
define('_GM_MARKERDELETED',            'Marker entfernt');
define('_GM_MARKERICON',               'Marker Icon');
define('_GM_MARKERS',                  'Marker');
define('_GM_MARKERTITLE',              'Name des Markers');
define('_GM_MESSAGE',                  'Zusatzinfo');
define('_GM_MODIFYCOORDS',             'Koordinaten anpassen');
define('_GM_MUSTCONFIRM',              'Zum Löschen des Markers muss die Bestätigungs-Checkbox angewählt sein');
define('_GM_NOGOOGLEKEY',              'Kein Google API Key installiert...');
define('_GM_NOSCRIPTWARNING',          'JavaScript muss für die Nutzung der GoogleMap aktiviert sein!');
define('_GM_NOSUCHMARKER',             'Fehler: Marker nicht gefunden');
define('_GM_OPTIONS',                  'Optionen');
define('_GM_REGISTERFORGEO',           'Registrierte Benutzer können eigene Koordinaten setzen...');
define('_GM_SAVEMARKER',               'Marker speichern');
define('_GM_SHORTMESSAGE',             'Kurzer Infotext (z.B. Name)');
define('_GM_SHOWHIDESPECIALS',         'Zeige/Verstecke alle POI');
define('_GM_SHOWHIDEUSERS',            'Zeige/Verstecke alle Benutzer');
define('_GM_SHOWUSERLIST',             'Benutzerliste neben der Karte anzeigen (Vorsicht bei vielen Benutzern!)');
define('_GM_SPECIALMARKERS',           'Besondere Marker');
define('_GM_SPECIALADDED',             'Besonderen Marker hinzugefügt');
define('_GM_TITLE',                    'GMap');
define('_GM_UNABLETORETRIEVEINFO',     'Fehler beim Lesen der Daten');
define('_GM_UPDATEERROR',              'Fehler beim Aktualisieren des Markers');
define('_GM_UPDATESPECIALMARKER',      'Update marker');
define('_GM_USERINPUTHINT',            'Längen und Breitengrade werden als Fließkommazahlen eingegeben. Die Daten für westliche Länge und südliche Breite mit negativen Vorzeichen erfassen.');
define('_GM_USERMARKERS',              'Benutzer-Marker');
define('_GM_WRONGCOORDINATES',         'Fehler: ungültige Koordinaten');
define('_GM_ZOOMIN',                   'Einzoomen');
define('_GM_ZOOMLEVEL',                'Zoomlevel');
define('_GM_ZOOMOUT',                  'Auszoomen');

<<<<<<< .mine
define('_GM_SEARCHGO',                 'Suchen');    // Fixes Ticket #2
define('_GM_SEARCH',                   'Adresse:');  // Fixes Ticket #2
define('_GM_SEARCHSHOW',               'Adressensuche anzeigen'); // Fixes Ticket #2
define('_GM_LEGENDSPECIALSHOW',        'Legende für spezielle Marker anzeigen'); 
define('_GM_LEGENDSPECIALCOLUMNS',     'Anzahl der Spalten für die Anzeige der speziellen Marker');
define('_GM_LEGENDMARKERSHOW',         'Legende für Marker anzeigen'); 
define('_GM_LEGENDMARKERCOLUMNS',      'Anzahl der Spalten für die Anzeige der Marker');
define('_GM_ADMIN_PINTABLE_FILENAME',  'Datei');
define('_GM_ADMIN_PINTABLE_ACTIVE',    'Aktiv');
define('_GM_ADMIN_BTN_SUBMIT',         'Übertragen');
define('_GM_ADMIN_PINTABLE_ALIAS_HINT','Der Name wird verwendet, um den Marker zu identifizieren. Nur aktive Marker werden angezeigt');
define('_GM_ADMIN_TITLE_MARKERS',      'Marker ändern');
define('_GM_ADMIN_TITLE_MAPSETTINGS',  'Karteneinstellungen');
define('_GM_ADMIN_TITLE_EDITPINS',     'Markereinstellungen');
define('_GM_ADMIN_TITLE_READPINSFROMFILESYSTEM', 'Suche nach Bildern für neue Marker');
define('_GM_ADMIN_LABEL_READFROMFILESYSTEM',     'Alle MArker werden nun aus dem Modulverzeichnis eingelesen. Alte Marker ohne Bild werden gelöscht. Vorhandene MArkereinstellungen bleiben erhalten.');
define('_GM_ADMIN_CONFIRM_READFROMFILESYSTEM',   'Marker neu einlesen?');
define('_GM_FORCERELOAD',              'Neueinlesen der MArker erzwingen, vorhandene Marker werden dabei überschrieben!');
define('_GM_ADMIN_EDITPINS_SPECIAL',   'Spezielle Marker');
define('_GM_ADMIN_EDITPINS_MARKERS',   'Benutzer-Marker');
define('_GM_ADMIN_EDITEDPINSSAVED',    'Geänderte Marker wurden gespeichert');
define('_GM_ADMIN_PINSREADFROMFILESYSTEM', 'Marker wurden von Dateisystem eingelesen');
define('_GM_INITIALTITLE',             'Standardkartentitel');
define('_GM_FIELD_MAP',                'Kartenanzeige');
define('_GM_FIELD_SIDEBAR',            'Anzeige der Sidebar');
define('_GM_FIELD_LEGEND',             'Anzeige der Markerlegende');
define('_GM_FILENAME',                 'Pfad und Dateiname für weitere Marker (Leer = kein weiteren Marker)');
define('_GM_FIELDSET_MAP',             'GoogleMap-Einstellungen');
define('_GM_FIELDSET_SIDEBAR',         'Sidebar-Einstellungen');
define('_GM_FIELDSET_SPECIALS',        'Einstellungen für spezielle Marker');
define('_GM_LISTHEIGHTSPECIALS',       'Max. Höhe für Liste der speziellen Marker');
define('_GM_LISTHEIGHTUSER',           'Max. Höhe für Benutzerliste');
define('_GM_SHOWSPECIALSLIST',         'Spezielle Marker in Sidebar anzeigen');
define('_GM_SPECIAL_SHOW',             'Marker anzeigen');
define('_GM_SPECIAL_PIN',              'Marker');
define('_GM_SPECIAL_LABEL',            'Markertext');
define('_GM_EDIT',                     'Ändern');
define('_GM_SIDEBARWIDTH',             'Breite der Sidebar');

