<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

function gmap_init()
{
    if (!DBUtil::createTable('googlemap_markers')) {
        return LogUtil::registerError(_GM_DBCREATETABLEERROR);
    }

    pnModSetVar('gmap', 'googlekey',            '');
    pnModSetVar('gmap', 'initiallat',           48.859294);
    pnModSetVar('gmap', 'initiallong',          2.343521);
    pnModSetVar('gmap', 'mapheight',            500);
    pnModSetVar('gmap', 'mapwidth',             700);
    pnModSetVar('gmap', 'initialzoomlevel',     5);
    pnModSetVar('gmap', 'initialmaptype',       'G_HYBRID_MAP');
    pnModSetVar('gmap', 'showuserlist',         0);
    pnModSetVar('gmap', 'showusersonline',      0);
    pnModSetVar('gmap', 'modulestylesheet',     'googlemap.css');
    pnModSetVar('gmap', 'initialtitle',         'GMap');
    pnModSetVar('gmap', 'sidebarwidth',         215);
    pnModSetVar('gmap', 'listheightuser',       100);
    pnModSetVar('gmap', 'showspecialslist',     0);
    pnModSetVar('gmap', 'listheightspecials',   400);
    pnModSetVar('gmap', 'legendmarkershow',     0);
    pnModSetVar('gmap', 'legendmarkercolumns',  4);
    pnModSetVar('gmap', 'legendspecialshow',    0);
    pnModSetVar('gmap', 'legendspecialcolumns', 4);
    pnModSetVar('gmap', 'gmapfile',             '');       // Closes Ticket #4
    pnModSetVar('gmap', 'showsearch',           0);        // Closes Ticket #2
    pnModSetVar('gmap', 'overviewmap',         '1');
    pnModSetVar('gmap', 'information',          '');
    pnModSetVar('gmap', 'maplist',             array( 'example'  => 'modules/gmap/pndocs/Example.xml',
                                                      'example2' => 'modules/gmap/pndocs/Example2.xml'
                                                    ));
    
    // Set specialpinlist and markerpinlist
    pnModAPILoad('gmap', 'admin', true);    
    pnModAPIFunc('gmap', 'admin', 'updatepins', array('forcereload' => true)); // May not be enabled to call yet.
    return true;
}





function gmap_upgrade($oldversion)
{
    switch($oldversion) {
        case 1.0:
        case 1.1:
            return LogUtil::registerError(_GM_CANNOTUPGRADEFROMPRIOR20);
        case 2.0:
            // Code to upgrade from version 2.0 goes here
            $oldvars = pnModGetVar('GoogleMap');
            foreach ($oldvars as $varname => $oldvar) {
                pnModSetVar('gmap', $varname, $oldvar);
            }
            pnModDelVar('GoogleMap');
        case 2.1:
            pnModSetVar('gmap', 'initialtitle',         'GMap');
            pnModSetVar('gmap', 'sidebarwidth',         215);
            pnModSetVar('gmap', 'listheightuser',       100);
            pnModSetVar('gmap', 'showspecialslist',     0);
            pnModSetVar('gmap', 'listheightspecials',   400);
            pnModSetVar('gmap', 'legendmarkershow',     0);
            pnModSetVar('gmap', 'legendmarkercolumns',  4);
            pnModSetVar('gmap', 'legendspecialshow',    0);
            pnModSetVar('gmap', 'legendspecialcolumns', 4);
            pnModSetVar('gmap', 'gmapfile',             '');       // Closes Ticket #4
            pnModSetVar('gmap', 'showsearch',           0);        // Closes Ticket #2
            pnModSetVar('gmap', 'overviewmap',         '1');
            pnModSetVar('gmap', 'information',          '');
            pnModSetVar('gmap', 'maplist',              array( 'example'  => 'modules/gmap/pndocs/Example.xml',
                                                               'example2' => 'modules/gmap/pndocs/Example2.xml'
                                                              ));
            
            // Set specialpinlist and markerpinlist
            pnModAPILoad('gmap', 'admin', true);
            pnModAPIFunc('gmap', 'admin', 'updatepins', array('forcereload' => false));
            break;
    }

    return true;
}

function gmap_delete()
{
    // drop the table
    if (!DBUtil::dropTable('googlemap_markers')) {
        return LogUtil::registerError(_GM_DBDELETETABLEERROR);
    }

    pnModDelVar('gmap');
    return true;
}
