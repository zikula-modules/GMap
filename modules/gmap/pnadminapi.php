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


/*
 * This function synchronized the pins stored in the directory with
 * the pins sored in the modVar ('gmap','specialpinlist).
 * The function checks if there is a pin in the directory which is
 * not in the modVar. If the pin is in the modVar, the information of the
 * modVar are kept. Otherwise the new pin is added with default information.
 * This function has to be called to include new smilies which are stored in the
 * auto-directory of the module.
 *
 * It can be called out of the admininterface and is called when the module
 * is inited and upgraded
 *
 *@params $args['forcereload'] bool
 */
function gmap_adminapi_updatepins($args)
{
    ///////////////////////////////////
    // Special Marker Pins
    ///////////////////////////////////
    // Get the new array
    $new_pins = pnModAPIFunc('gmap', 'admin', 'load_pins');

    // Get the old array
    $old_pins = pnModGetVar('gmap','specialpinlist');

    //Combine old array and new array
    // First create a new array
    $specialpinlist = array();
    // Then, check if the new pin is in the old array
    // If it is included then save the old definition
    // Else save the new definition
    foreach($new_pins as $key => $new_pin) {
        if($args['forcereload'] == true) {
            $specialpinlist[$key] = $new_pin;
        } else {
            if (array_key_exists($key, $old_pins)) {
                // Store the old one
                $specialpinlist[$key] = $old_pins[$key];
            } else {
                // Store the new one
                $specialpinlist[$key] = $new_pin;
            }
        }
    }

    // Save the array
    pnModSetVar('gmap','specialpinlist', $specialpinlist);

 
    ///////////////////////////////////
    // regular Marker Pins
    ///////////////////////////////////
    // Get the new array
    $new_markers = pnModAPIFunc('gmap', 'admin', 'load_markers');   

    // Get the old array
    $old_markers = pnModGetVar('gmap','markerpinlist');

    //Combine old array and new array
    // First create a new array
    $markerpinlist = array();
    // Then, check if the new pin is in the old array
    // If it is included then save the old definition
    // Else save the new definition
    foreach($new_markers as $key => $new_marker) {
        if($args['forcereload'] == true) {
            $markerpinlist[$key] = $new_marker;
        } else {
            if (array_key_exists($key, $old_markers)) {
                // Store the old one
                $markerpinlist[$key] = $old_markers[$key];
            } else {
                // Store the new one
                $markerpinlist[$key] = $new_marker;
            }
        }
    }

    // Save the array
    pnModSetVar('gmap','markerpinlist', $markerpinlist);
 
    // Return success
    return true;

}

/**
 * get all pins in the specials pin directory
 */
function gmap_adminapi_load_pins()
{
    $imagepath = "modules/gmap/pnimages/specials/";
    $handle=opendir($imagepath);
    if($handle<>false) {
        while ($file = readdir($handle)) {
            if ($file != '.' && $file != '..' && $file != 'index.html'  && $file != 'CVS' && $file != '.svn' && !strpos($file,"shadow")) {
                if(preg_match("/(.*?)(.gif|.jpg|.jpeg|.png)$/i", $file, $matches) <> 0) {
                    $pins[$matches[1].$matches[2]] = array('name' => $matches[1],
                                                           'active'  => '1');
                }
            }
        }
    }
    return $pins;
}

/**
 * get all pins in the specials pin directory
 */
function gmap_adminapi_load_markers()
{   
    Loader::loadClass('FileUtil');
    $files = FileUtil::getFiles('modules/gmap/pnimages/', false, true, 'png', false);
    foreach($files as $file) {
        if (ereg('mm_20_', $file) || ereg('marker_', $file)) {
            $pins[$file] = array('name' => FileUtil::stripExtension($file),
                                 'active'  => '1');
        }
    }
    return $pins;
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
        $links[] = array('url' => pnModURL('gmap', 'admin', 'main'),    'text' => _GM_ADMIN_TITLE_MARKERS);
        $links[] = array('url' => pnModURL('gmap', 'admin', 'config'),  'text' => _GM_ADMIN_TITLE_MAPSETTINGS);
        $links[] = array('url' => pnModURL('gmap', 'admin', 'editmaps'),'text' => _GM_ADMIN_TITLE_EDITMAPS);
        $links[] = array('url' => pnModURL('gmap', 'admin', 'editpins'),'text' => _GM_ADMIN_TITLE_EDITPINS);
        $links[] = array('url' => pnModURL('gmap', 'admin', 'readpins'),'text' => _GM_ADMIN_TITLE_READPINSFROMFILESYSTEM);
    }
    return $links;
}
