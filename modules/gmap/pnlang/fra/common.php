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

define('_GM_ADDMESSAGE',               'Message (200 max)');
define('_GM_ADDSPECIALMARKER',         'Ajouter un marqueur spécial');
define('_GM_ADDTITLE',                 'Titre du marqueur...');
define('_GM_ADDYOURCOORDS',            'Ajouter vos coordonnées');
define('_GM_ADDYOURMARKER',            'Ajouter votre Marqueur');
define('_GM_ADMIN_TITLE',              'GMap - Administration');
define('_GM_CONFIGUPDATED',            'Configuration mise à jour');
define('_GM_CONFIRMCHECK',             'Cocher pour confirmer');
define('_GM_CONTENT',                  'GMap Module Content');
define('_GM_COORDSADDED',              'Coordonnées ajoutées...');
define('_GM_COORDSUPDATED',            'Coordonnées mises à jour...');
define('_GM_DELETEMARKER',             'Supprimer un marqueur');
define('_GM_GOOGLEKEY',                'GoogleMap Clé API');
define('_GM_HOSTIPLEGENDA',            'Utilisateurs anonymes ou membres n\'ayant pas ajouté leurs coordonnées.<br />Les coordonnées sont approximatives et sont fournies par le site');
define('_GM_HOSTIPLEGENDB',            'et sa base de données.<br />Lorsque le site HostIP.info ne retourne aucune coordonnées, aucun marqueur n\'est ajouté pour l\'utilisateur.<br />Si vous constatez une erreur dans votre geo-localisation, visitez le site HostIP.info afin de proposer une correction.');
define('_GM_INITIALLATITUDE',          'Latitude initiale');
define('_GM_INITIALLONGITUDE',         'Longitude initiale');
define('_GM_INITIALMAPTYPE',           'Type de carte initial');
define('_GM_INITIALZOOMLEVEL',         'Niveau de Zoom initial');
define('_GM_LANGCODE',                 'fr');
define('_GM_LATITUDE',                 'Latitude');
define('_GM_LONGITUDE',                'Longitude');
define('_GM_MAPHEIGHT',                'Hauteur');
define('_GM_MAPTYPE_MIXT',             'Mixte');
define('_GM_MAPTYPE_PLAN',             'Plan');
define('_GM_MAPTYPE_SATELLITE',        'Satellite');
define('_GM_MAPWIDTH',                 'Largeur');
define('_GM_MARKERICON',               'Image du marqueur');
define('_GM_MARKERS',                  'Marqueurs');
define('_GM_MODIFYCOORDS',             'Modifier vos coordonnées');
define('_GM_NOGOOGLEKEY',              'Aucune clé API Google installée...');
define('_GM_NOSCRIPTWARNING',          'Le JavaScript doit être activé afin de pouvoir afficher les cartes Google. Soit le javascript est désactivé, soit votre navigateur ne supporte pas le javascript.');
define('_GM_REGISTERFORGEO',           'Vous devez être membres pour pouvoir ajouter vos coordonnées...');
define('_GM_SHORTMESSAGE',             'Court message (100 Cars max.)');
define('_GM_SHOWHIDESPECIALS',         'Afficher Masquer les speciaux');
define('_GM_SHOWHIDEUSERS',            'Afficher Masquer les utilisateurs');
define('_GM_SHOWUSERLIST',             'Afficher la liste des membres (Attention à l\'affichage si la liste est longue)');
define('_GM_SHOWUSERSONLINE',          'Afficher les utilisateurs (Anonymes inclus) en ligne (Attention: Peut ralentir considérablement l\'affichage)');
define('_GM_SPECIALMARKERS',           'Marqueurs spéciaux');
define('_GM_TITLE',                    'GMap');
define('_GM_UPDATESPECIALMARKER',      'Modifier un marqueur');
define('_GM_USERMARKERS',              'Marqueurs Membres');
define('_GM_ZOOMIN',                   'Zoom Avant');
define('_GM_ZOOMOUT',                  'Zoom Arrière');

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
