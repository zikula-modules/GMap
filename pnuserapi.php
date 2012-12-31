<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

/**
 * reads all markers
 *
 *@params $args['special']  bool if true, read special markers, if false (default) read user markers
 *@returns array or markers
 */
function gmap_userapi_getall($args)
{
    $pntable = pnDBGetTables();
    $col = $pntable['googlemap_markers_column'];
    if (isset($args['special']) && $args['special'] === true) {
        $where = $col['uid'] . '<=\'0\'';
        $orderby = 'ORDER BY ' . $col['mid'];
    } else {
        $where = $col['uid'] . '>=\'1\'';
        $orderby = 'ORDER BY ' . $col['uid'];
    }
    
    $markers = DBUtil::selectObjectArray('googlemap_markers', $where, $orderby);
    return $markers;
}

function gmap_userapi_get($args)
{
    if (isset($args['objectid']) && is_numeric($args['objectid'])) {
        $args['uid'] = $args['objectid'];
        $bymarkerid = true;
    } else {
        $bymarkerid = false;
    }

    if (!isset($args['uid']) || !is_numeric($args['uid'])) {
        return LogUtil::registerError(_MODARGSERROR);
    }

    $item = array();
    if ($bymarkerid) {
        $item = DBUtil::selectObjectByID('googlemap_markers', $args['uid'], 'mid');
    } else {
        $item = DBUtil::selectObjectByID('googlemap_markers', $args['uid'], 'uid');
    }

    return $item;
}

function gmap_userapi_ismapped($args)
{
    if(pnUserLoggedIn()) {
        if (!isset($args['uid']) || empty($args['uid'])) {
            $uid = pnUserGetVar('uid');
        } else {
            $uid = $args['uid'];
        }
        
        $item = pnModAPIFunc('gmap', 'user', 'get', array('uid' => $uid));
        return (!empty($item['lat']) && !empty($item['long']));
    }
    return false;
}

function gmap_userapi_update($args)
{
    $action = $args['action'];
    unset($args['action']);
    
    if (!isset($args['icon']) || empty($args['icon'])) {
        if ($args['uid'] >= 1) {
            // user
            $args['icon'] = 'marker_point.png';
        } else {
            // poi
            $args['icon'] = 'mm_20_yellow.png';
        }
    }
    if (!isset($args['title'])) {
        if ($args['uid'] >= 1) {
            // user
            $args['title'] = pnUserGetVar('uname');;
        } else {
            // poi
            $args['title'] = '';
        }
    }

    switch ($action) {
        case 'add':
            $item = DBUtil::insertObject($args, 'googlemap_markers', 'mid');
            break;
        case 'update':
        default:
            DBUtil::updateObject($args, 'googlemap_markers', '', 'mid');
    }
    return true;
}

/**
 * form custom url string
 *
 * @return string custom url string
 */
function gmap_userapi_encodeurl($args)
{
    // check we have the required input
    if (!isset($args['modname']) || !isset($args['func']) || !isset($args['args'])) {
        return LogUtil::registerError (_MODARGSERROR);
    }

    if (!isset($args['type'])) {
        $args['type'] = 'user';
    }

    // don't display the function name if using main
    if ($args['func'] == 'main') {
        $args['func'] = '';
    }

    // create an empty string to start
    $vars = '';

    // Now add the rest of the arguments
    foreach ($args['args'] as $k => $v) {
        if (is_array($v)) {
            foreach ($v as $k2 => $w) {
                if ($w != '') {
                    $vars .= "/$k[$k2]/$w"; // &$k[$k2]=$w
                }
            }
        } elseif ($v != '') {
            $vars .= "/$k/$v"; // &$k=$v
        }
    }

    // construct the custom url part
    if (empty($args['func']) && empty($vars)) {
        return $args['modname'] . '/';
    } elseif (empty($args['func'])) {
        return $args['modname'] . '/' . $vars . '/';
    } elseif (empty($vars)) {
        return $args['modname'] . '/' . $args['func'] . '/';
    } else {
        return $args['modname'] . '/' . $args['func'] . '/' . $vars . '/';
    }
}

/**
 * decode the custom url string
 *
 * @return bool true if successful, false otherwise
 */
function gmap_userapi_decodeurl($args)
{
    // check we actually have some vars to work with...
    if (!isset($args['vars'])) {
        return LogUtil::registerError (_MODARGSERROR);
    }

    // define the available user functions
    $funcs = array('main', 'edit', 'update');
    // set the correct function name based on our input
    if (empty($args['vars'][2])) {
        pnQueryStringSetVar('func', 'main');
    } elseif (!in_array($args['vars'][2], $funcs)) {
        pnQueryStringSetVar('func', 'main');
        $nextvar = 2;
    } else {
        pnQueryStringSetVar('func', $args['vars'][2]);
        $nextvar = 3;
    }

    // Now just need to expand out the remaining parameters
    $argscount = count($args['vars']);
    for ($i = $nextvar; $i < $argscount; $i = $i + 2) {
        if (isset($args['vars'][$i])){
            pnQueryStringSetVar($args['vars'][$i], urldecode($args['vars'][$i+1]));
        }
    }

    return true;
}
