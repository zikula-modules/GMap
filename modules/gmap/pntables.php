<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: pntables.php 191 2006-05-14 21:19:13Z chestnut $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

function gmap_pntables()
{
    // Initialise table array
    $pntable = array();

    $googlemap_markers = DBUtil::getLimitedTablename('googlemap_markers') ;
    $pntable['googlemap_markers'] = $googlemap_markers;
    $pntable['googlemap_markers_column'] = array('mid'      => 'pn_mid',
                                                 'title'    => 'pn_title',
                                                 'uid'      => 'pn_uid',
                                                 'lat'      => 'pn_latitude',
                                                 'long'     => 'pn_longitude',
                                                 'msg'      => 'pn_msg',
                                                 'icon'     => 'pn_icon');

    // column definitions
    $pntable['googlemap_markers_column_def'] =  array('mid'   => 'I        AUTOINCREMENT PRIMARY',
                                                      'title' => 'C(100)   NOTNULL DEFAULT \'\'',
                                                      'uid'   => 'I(11)    NOTNULL DEFAULT 0',
                                                      'lat'   => 'F        NOTNULL DEFAULT 0.0',
                                                      'long'  => 'F        NOTNULL DEFAULT 0.0',
                                                      'msg'   => 'C(200)   NOTNULL DEFAULT \'\'',
                                                      'icon'  => 'C(100)   NOTNULL DEFAULT \'marker_point.png\'');

    // addtitional indexes
    $pntable['googlemap_markers_column_idx'] = array ('uid' => 'uid');

    // Return the table information
    return $pntable;

}
