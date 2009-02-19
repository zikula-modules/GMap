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

define('_GM_ADDMESSAGE',               'Enter your message (200 max)');
define('_GM_ADDSPECIALMARKER',         'Add a special marker');
define('_GM_ADDTITLE',                 'Title goes here...');
define('_GM_ADDYOURCOORDS',            'Add your coordinates');
define('_GM_ADDYOURMARKER',            'Add your Marker');
define('_GM_ADMIN_BTN_SUBMIT',         'Submit');
define('_GM_ADMIN_CONFIRM_READFROMFILESYSTEM',   'Should the markers be read out of the directories?');
define('_GM_ADMIN_DEFAULTMAP',         'Default Map');
define('_GM_ADMIN_EDITEDPINSSAVED',    'Edited Markers Saved');
define('_GM_ADMIN_EDITMAPS',           'Other Maps');
define('_GM_ADMIN_EDITPINS_MARKERS',   'User Markers');
define('_GM_ADMIN_EDITPINS_SPECIAL',   'Special Markers');
define('_GM_ADMIN_LABEL_READFROMFILESYSTEM', 'With confirmation, all markers are read out of the module directory. Old markers without a image in the directory will be deleted. Prior changes on marker information will be kept.');
define('_GM_ADMIN_MAP_HINT',           'Map files allow sets of markers and lines to be defined in a separate file. Each file can be called by adding the option &map=<mapname>. The path and filename are relative to: ');
define('_GM_ADMIN_MAPTABLE_FILENAME',  'File');
define('_GM_ADMIN_MAPTABLE_NAME',      'Map name');
define('_GM_ADMIN_PINSREADFROMFILESYSTEM', 'Markers Reloaded from module directories');
define('_GM_ADMIN_PINTABLE_ACTIVE',    'Active');
define('_GM_ADMIN_PINTABLE_ADD',       'Add');
define('_GM_ADMIN_PINTABLE_ALIAS_HINT','The name will be used to identify the marker.  Only active markers will be shown.');
define('_GM_ADMIN_PINTABLE_DELETE',    'Delete');
define('_GM_ADMIN_PINTABLE_FILENAME',  'File');
define('_GM_ADMIN_PINTABLE_NAME',      'Name');
define('_GM_ADMIN_TITLE_EDITMAPS',     'Map Files');
define('_GM_ADMIN_TITLE_EDITPINS',     'Marker Settings');
define('_GM_ADMIN_TITLE',              'GMap - Administration');
define('_GM_ADMIN_TITLE_MAPSETTINGS',  'Map Settings');
define('_GM_ADMIN_TITLE_MARKERS',      'Edit Markers');
define('_GM_ADMIN_TITLE_READPINSFROMFILESYSTEM', 'Scan for new Marker image files');
define('_GM_ALREADYMAPPED',            'Already mapped');
define('_GM_CANNOTUPGRADEFROMPRIOR20', 'Cannot upgrade from versions older than 2.0');
define('_GM_CONFIGUPDATED',            'Configuration updated');
define('_GM_CONFIRMCHECK',             'Check to confirm');
define('_GM_COORDSADDED',              'Coordinates added...');
define('_GM_COORDSUPDATED',            'Coordinates updated...');
define('_GM_DBCREATETABLEERROR',       'An error occured while creating the googlemap_markers-table');
define('_GM_DBDELETETABLEERROR',       'An error occured while deleting the googlemap_markers-table');
define('_GM_DELETEMARKER',             'Delete Marker');
define('_GM_EDIT',                     'Edit');
define('_GM_ERRORDELETINGMARKER',      'Error deleting marker');
define('_GM_FIELD_INFORMATION',        'Map Information (HTML Text)');
define('_GM_FIELD_LEGEND',             'Marker Legend Display');
define('_GM_FIELD_MAP',                'Map Display');
define('_GM_FIELDSET_MAP',             'Google Map Settings');
define('_GM_FIELDSET_SIDEBAR',         'Side Bar Settings');
define('_GM_FIELDSET_SPECIALS',        'Special Marker Settings');
define('_GM_FIELD_SIDEBAR',            'Side Bar Display');
define('_GM_FILENAME',                 'File path and name for additional markers (blank for none)');
define('_GM_FORCERELOAD',              'Force the reload of markers, all existing marker data will be overwritten!');
define('_GM_GOOGLEKEY',                'GoogleMap API Key');
define('_GM_ICON',                     'icon');
define('_GM_ID',                       'ID');
define('_GM_ILLEGALLATITUDE',          'Error: Latitude must be between  +180 (North) and -180 (South).');
define('_GM_ILLEGALLONGITUDE',         'Error: Longitude must be between +180 (East) und -180 (West).');
define('_GM_ILLEGALMARKERID',          'Error: illegal marker ID');
define('_GM_INITIALLATITUDE',          'Map default Latitude');
define('_GM_INITIALLONGITUDE',         'Map default Longitude');
define('_GM_INITIALMAPTYPE',           'Map default Type');
define('_GM_INITIALTITLE',             'Map default Title');
define('_GM_INITIALZOOMLEVEL',         'Map default Zoom Level');
define('_GM_LANGCODE',                 'en');
define('_GM_LATITUDE',                 'Latitude');
define('_GM_LEGENDMARKERCOLUMNS',      'Number of columns for Marker Legend');
define('_GM_LEGENDMARKERSHOW',         'Show Marker Legend'); 
define('_GM_LEGENDSPECIALCOLUMNS',     'Number of columns for Special Marker Legend');
define('_GM_LEGENDSPECIALSHOW',        'Show Special Marker Legend'); 
define('_GM_LISTHEIGHTSPECIALS',       'Special Marker list maximum height');
define('_GM_LISTHEIGHTUSER',           'Users list maximum height');
define('_GM_LOADING',                  'Loading Map...');
define('_GM_LONGITUDE',                'Longitude');
define('_GM_MAPHEIGHT',                'Map Height');
define('_GM_MAPTYPE_MIXT',             'Hybrid');
define('_GM_MAPTYPE_PLAN',             'Map');
define('_GM_MAPTYPE_SATELLITE',        'Satellite');
define('_GM_MAPWIDTH',                 'Map Width');
define('_GM_MARKERDELETED',            'Marker deleted');
define('_GM_MARKERICON',               'Marker Icon');
define('_GM_MARKERS',                  'Markers');
define('_GM_MARKERTITLE',              'Name of marker');
define('_GM_MESSAGE',                  'Message');
define('_GM_MODIFYCOORDS',             'Modify your marker');
define('_GM_MUSTCONFIRM',              'You must check the confirmation checkbox to delete the marker');
define('_GM_NOGOOGLEKEY',              'No Google API Key installed...');
define('_GM_NOSCRIPTWARNING',          'JavaScript must be enabled in order for you to use Google Maps. However, it seems JavaScript is either disabled or not supported by your browser.To view Google Maps, enable JavaScript by changing your browser options, and then try again.');
define('_GM_NOSUCHMARKER',             'error: no such marker');
define('_GM_OPTIONS',                  'Options');
define('_GM_OVERVIEWMAP',              'Display Overview Map');
define('_GM_REGISTERFORGEO',           'You must be a member to add your coordinates...');
define('_GM_SAVEMARKER',               'Save marker');
define('_GM_SEARCH',                   'Address:');  // Fixes Ticket #2
define('_GM_SEARCHGO',                 'Search');    // Fixes Ticket #2
define('_GM_SEARCHSHOW',               'Show Address Search form'); // Fixes Ticket #2
define('_GM_SHORTMESSAGE',             'Short message (100 Chars max.)');
Define('_GM_SHOWHIDESPECIALS',         'Show Hide All specials');
define('_GM_SHOWHIDEUSERS',            'Show Hide All users');
define('_GM_SHOWSPECIALSLIST',         'Show Special Marker list in sidebar');
define('_GM_SHOWUSERLIST',             'Show Users list in sidebar');
define('_GM_SIDEBARWIDTH',             'Side Bar Width');
define('_GM_SPECIALADDED',             'Special marker added');
define('_GM_SPECIAL_LABEL',            'Pin Label');
define('_GM_SPECIALMARKERS',           'Special Markers');
define('_GM_SPECIAL_PIN',              'Pin');
define('_GM_SPECIAL_SHOW',             'Show Pin');
define('_GM_TITLE',                    'GMap');
define('_GM_UNABLETORETRIEVEINFO',     'Error while retrieving your info');
define('_GM_UPDATEERROR',              'Error updating markers');
define('_GM_UPDATESPECIALMARKER',      'Update marker');
define('_GM_USERINPUTHINT',            'Longitude and latitude have to be entered as floating point numbers. For locations in the west of the zero meridian and south of the equator use negative values');
define('_GM_USERMARKERS',              'Users Markers');
define('_GM_VISITHOMEPAGE',            'Visit GMap at code.zikula.org');
define('_GM_WRONGCOORDINATES',         'Error: wrong coordinates');
define('_GM_ZOOMIN',                   'Zoom In');
define('_GM_ZOOMLEVEL',                'Zoom level');
define('_GM_ZOOMOUT',                  'Zoom Out');
