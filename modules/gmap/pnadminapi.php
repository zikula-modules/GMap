<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

function gmap_adminapi_delete($args)
{
    if(!isset($args['mid']) || !is_numeric($args['mid'])) {
        return LogUtil::registerError(_MODARGSERROR);
    }

    $res = DBUtil::deleteObjectById('googlemap_markers', $args['mid'], 'mid');
    return true;
}

/**
 * get available admin panel links
 *
 * @author Mark West
 * @return array array of admin links
 */
function gmap_adminapi_getlinks()
{
    $links = array();
    if (SecurityUtil::checkPermission('gmap::', '::', ACCESS_ADMIN)) {
        $links[] = array('url' => pnModURL('gmap', 'admin', 'main'), 'text' => _GM_MARKERS);
        $links[] = array('url' => pnModURL('gmap', 'admin', 'config'), 'text' => _MODIFYCONFIG);
    }
    return $links;
}
