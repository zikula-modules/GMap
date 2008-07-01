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

    pnModSetVar('gmap', 'googlekey',         '');
    pnModSetVar('gmap', 'Initiallat',        48.859294);
    pnModSetVar('gmap', 'initiallong',       2.343521);
    pnModSetVar('gmap', 'mapheight',         500);
    pnModSetVar('gmap', 'mapwidth',          700);
    pnModSetVar('gmap', 'initialzoomlevel',  5);
    pnModSetVar('gmap', 'initialmaptype',    'G_HYBRID_MAP');
    pnModSetVar('gmap', 'showuserlist',      0);
    pnModSetVar('gmap', 'showusersonline',   0);
    pnModSetVar('gmap', 'modulestylesheet',  'googlemap.css');

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
