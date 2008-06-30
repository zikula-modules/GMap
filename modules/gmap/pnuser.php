<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: pnuser.php 191 2006-05-14 21:19:13Z chestnut $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

/**
 * main function, show map with markers
 *
 */
function gmap_user_main()
{

    if (!SecurityUtil::checkPermission('gmap::', '::', ACCESS_OVERVIEW)) {
        return LogUtil::registerPermissionError();
    }

    $modvars = pnModGetVar('gmap');

    if (!isset($modvars['googlekey']) || empty($modvars['googlekey'])) {
        return LogUtil::registerError(_GM_NOGOOGLEKEYINSTALLED);
    }

    $pnRender = pnRender::getInstance('gmap', false);
    $pnRender->force_compile = true;

    $markers  = array();
    $specials = array();

    $canaddmarker  = SecurityUtil::checkPermission('gmap::marker' , '::', ACCESS_COMMENT);
    $canaddspecial = SecurityUtil::checkPermission('gmap::special', '::', ACCESS_COMMENT);

    PageUtil::addVar('rawtext', '<style type="text/css"> v\:* { behavior:url(#default#VML); } </style>');
    PageUtil::addVar('rawtext', '<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=' . DataUtil::formatForDisplay($modvars['googlekey']) . '" type="text/javascript"></script>');

    $markers  = pnModAPIFunc('gmap', 'user', 'getall');
    $specials = pnModAPIFunc('gmap', 'user', 'getall', array('special' => true));

    if ($canaddspecial == true) {
        Loader::loadClass('FileUtil');
        $filelist = FileUtil::getFiles('modules/gmap/pnimages/specials', false, true, 'png', false);
        asort($filelist);
        foreach($filelist as $file) {
            $dfile = DataUtil::formatForDisplay($file);
            $icons .= '<option label="'.$dfile.'" value="'.$dfile.'">'.$dfile.'</option>';
        }
        $pnRender->assign('icons', $icons);
    }

    $pnRender->assign('ismapped', pnModAPIFunc('gmap', 'user', 'ismapped'));
    $pnRender->assign('markers',  $markers);
    $pnRender->assign('specials', $specials);
    $pnRender->assign('canaddmarker',   $canaddmarker);
    $pnRender->assign('canaddspecial',  $canaddspecial);
    $pnRender->assign('modvars',  $modvars);

    return $pnRender->fetch('gmap_user_main.html');

}

/**
 * modify a personal marker
 *
 */
function gmap_user_edit()
{
    if (!SecurityUtil::checkPermission('gmap::marker', '::', ACCESS_COMMENT)) {
        return LogUtil::registerPermissionError(pnModURL('gmap', 'user', 'main'));
    }

    $item = pnModAPIFunc('gmap', 'user', 'get', array('uid' => pnUserGetVar('uid')));

    Loader::loadClass('FileUtil');
    $files = FileUtil::getFiles('modules/gmap/pnimages/', false, true, 'png', false);
    foreach($files as $file) {
        if (ereg('mm_20_', $file) || ereg('marker_', $file)) {
            $icons[$file] = $file;
        }
    
    }

    PageUtil::addVar('javascript', 'javascript/ajax/prototype.js');
    PageUtil::addVar('javascript', 'modules/gmap/pnjavascript/googlemap.js');
    $pnRender = pnRender::getInstance('gmap', false);
    $pnRender->assign($item);
    $pnRender->assign('icons', $icons);

    return $pnRender->fetch('gmap_user_edit.html');
}

/**
 * update a personal marker
 *
 */
function gmap_user_update()
{
    if (!SecurityUtil::checkPermission('gmap::marker', '::', ACCESS_COMMENT)) {
        return LogUtil::registerPermissionError(pnModURL('gmap', 'user', 'main'));
    }
    
    $item = pnModAPIFunc('gmap', 'user', 'get', array('uid' => pnUserGetVar('uid')));

    $item['long']   = FormUtil::getPassedValue('longitude', 0, 'POST');
    $item['lat']    = FormUtil::getPassedValue('latitude', 0, 'POST');
    $item['msg']    = FormUtil::getPassedValue('msg', '', 'POST');
    $item['icon']   = FormUtil::getPassedValue('icon', 'marker_point.png', 'POST');

    // Check if the guy is already mapped
    if (!isset($item['mid'])) {
        $item['action'] = 'add';
        $item['uid'] = pnUserGetVar('uid');
        $item['title'] = pnUserGetVar('uname');
    }

    $result = pnModAPIFunc('gmap', 'user', 'update', $item);

    if ($result == false) {
        LogUtil::registerError(_GM_UPDATEERROR);
    } else {
        LogUtil::registerStatus(_GM_COORDSUPDATED);
    }
    return pnRedirect(pnModURL('gmap', 'user', 'main'));

}

/**
 * save a new special marker
 *
 */
function gmap_user_add()
{
    if (!SecurityUtil::checkPermission('gmap::special', '::', ACCESS_COMMENT)) {
        return LogUtil::registerPermissionError(pnModURL('gmap', 'user', 'main'));
    }

    $item['title'] = FormUtil::getPassedValue('title', '', 'POST');
    $item['long']  = FormUtil::getPassedValue('longitude', 0, 'POST');
    $item['lat']   = FormUtil::getPassedValue('latitude', 0, 'POST');
    $item['msg']   = FormUtil::getPassedValue('msg', '', 'POST');
    $item['icon']  = FormUtil::getPassedValue('icon', 'marker_point.png', 'POST');
    $item['uid']   = -1;
    $item['action']= 'add';

    if (empty($item['long']) || empty($item['lat'])) {
        return LogUtil::registerError(_GM_WRONGCOORDINATES, null, pnModURL('gmap', 'admin', 'main'));
    }

    $result = pnModAPIFunc('gmap', 'user', 'update', $item);
    if ($result == false) {
        LogUtil::registerError(_GM_UPDATEERROR);
    } else {
        LogUtil::registerStatus(_GM_SPECIALADDED);
    }

    return pnRedirect(pnModURL('gmap', 'user', 'main'));
}
