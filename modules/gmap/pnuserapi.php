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
    if (!isset($args['uid']) || empty($args['uid'])) {
        $uid = pnUserGetVar('uid');
    } else {
        $uid = $args['uid'];
    }
    
    $item = pnModAPIFunc('gmap', 'user', 'get', array('uid' => $uid));
    return (!empty($item['lat']) && !empty($item['long']));
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

