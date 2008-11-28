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

define('_GM_SEARCHGO',                 'Search');    // Fixes Ticket #2
define('_GM_SEARCH',                   'Address:');  // Fixes Ticket #2
define('_GM_SEARCHSHOW',               'Show Address Search form'); // Fixes Ticket #2
define('_GM_LEGENDSPECIALSHOW',        'Show Special Marker Legend'); 
define('_GM_LEGENDSPECIALCOLUMNS',     'Number of columns for Special Marker Legend');
define('_GM_LEGENDMARKERSHOW',         'Show Marker Legend'); 
define('_GM_LEGENDMARKERCOLUMNS',      'Number of columns for Marker Legend');
define('_GM_ADMIN_PINTABLE_FILENAME',  'File');
define('_GM_ADMIN_PINTABLE_NAME',      'Name');
define('_GM_ADMIN_PINTABLE_ACTIVE',    'Active');
define('_GM_ADMIN_BTN_SUBMIT',         'Submit');
define('_GM_ADMIN_PINTABLE_ALIAS_HINT','The name will be used to identify the marker.  Only active markers will be shown.');
define('_GM_ADMIN_TITLE_MARKERS',      'Edit Markers');
define('_GM_ADMIN_TITLE_MAPSETTINGS',  'Map Settings');
define('_GM_ADMIN_TITLE_EDITPINS',     'Marker Settings');
define('_GM_ADMIN_TITLE_READPINSFROMFILESYSTEM', 'Scan for new Marker image files');
define('_GM_ADMIN_LABEL_READFROMFILESYSTEM',     'With confirmation, all markers are read out of the module directory. Old markers without a image in the directory will be deleted. Prior changes on marker information will be kept.');
define('_GM_ADMIN_CONFIRM_READFROMFILESYSTEM',   'Should the markers be read out of the directories?');
define('_GM_FORCERELOAD',              'Force the reload of markers, all existing marker data will be overwritten!');
define('_GM_ADMIN_EDITPINS_SPECIAL',   'Special Markers');
define('_GM_ADMIN_EDITPINS_MARKERS',   'User Markers');
define('_GM_ADMIN_EDITEDPINSSAVED',    'Edited Markers Saved');
define('_GM_ADMIN_PINSREADFROMFILESYSTEM', 'Markers Reloaded from module directories');
define('_GM_INITIALTITLE',             'Map default Title');
define('_GM_FIELD_MAP',                'Map Display');
define('_GM_FIELD_SIDEBAR',            'Side Bar Display');
define('_GM_FIELD_LEGEND',             'Marker Legend Display');
define('_GM_FILENAME',                 'File path and name for additional markers (blank for none)');
define('_GM_FIELDSET_MAP',             'Google Map Settings');
define('_GM_FIELDSET_SIDEBAR',         'Side Bar Settings');
define('_GM_FIELDSET_SPECIALS',        'Special Marker Settings');
define('_GM_LISTHEIGHTSPECIALS',       'Special Marker list maximum height');
define('_GM_LISTHEIGHTUSER',           'Users list maximum height');
define('_GM_SHOWSPECIALSLIST',         'Show Special Marker list in sidebar');
define('_GM_SPECIAL_SHOW',             'Show Pin');
define('_GM_SPECIAL_PIN',              'Pin');
define('_GM_SPECIAL_LABEL',            'Pin Label');
define('_GM_EDIT',                     'Edit');
