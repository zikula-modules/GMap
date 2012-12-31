<?php
// $Id$
// ----------------------------------------------------------------------
// LICENSE
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License (GPL)
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// To read the license please visit http://www.gnu.org/copyleft/gpl.html
// ----------------------------------------------------------------------
// Original Author of file: Frank Schummertz
// Purpose of file:  formicula configuration pnForm handler class
// ----------------------------------------------------------------------

class gmap_admin_modifyconfighandler
{
    function initialize(&$pnRender)
    {
        $pnRender->caching = false;
        $pnRender->add_core_data();
        $maptypes = array( array('text' => _GM_MAPTYPE_MIXT,      'value' => 'G_HYBRID_MAP'),
                           array('text' => _GM_MAPTYPE_SATELLITE, 'value' => 'G_SATELLITE_MAP'),
                           array('text' => _GM_MAPTYPE_PLAN,      'value' => 'G_NORMAL_MAP'));
        $zoomlevels = array();
        for ($x = 0; $x < 20; $x++) {
            $zoomlevels[] = array('text' => $x, 'value' => $x);
        }

        $pnRender->assign('maptypes',      $maptypes);
        $pnRender->assign('zoomlevels',    $zoomlevels);

        return true;
    }


    function handleCommand(&$pnRender, &$args)
    {
        // Security check
        if (!SecurityUtil::checkPermission('gmap::', '::', ACCESS_ADMIN)) {
            return LogUtil::registerPermissionError(pnConfigGetVar('entrypoint', 'index.php'));
        }  
        if ($args['commandName'] == 'submit') {
            if (!$pnRender->pnFormIsValid()) {
                return false;
            }
            $ok = true;
            $data = $pnRender->pnFormGetValues();
            
            if($data['initiallat'] >180 || $data['initiallat'] <-180) {
                $ifield = & $pnRender->pnFormGetPluginById('initiallat');
                $ifield->setError(DataUtil::formatForDisplay(_GM_ILLEGALLATITUDE));
                $ok = false;
            }
            if($data['initiallong'] >180 || $data['initiallong'] <-180) {
                $ifield = & $pnRender->pnFormGetPluginById('initiallat');
                $ifield->setError(DataUtil::formatForDisplay(_GM_ILLEGALLONGITUDE));
                $ok = false;
            }
            
            if ($ok == false) {
                return false;
            }
            
            pnModSetVar('gmap', 'googlekey',            $data['googlekey']);
            pnModSetVar('gmap', 'initialtitle',         $data['initialtitle']);            
            pnModSetVar('gmap', 'initiallat',           $data['initiallat']);
            pnModSetVar('gmap', 'initiallong',          $data['initiallong']);
            pnModSetVar('gmap', 'mapheight',            $data['mapheight']);
            pnModSetVar('gmap', 'mapwidth',             $data['mapwidth']);
            pnModSetVar('gmap', 'initialzoomlevel',     $data['initialzoomlevel']);
            pnModSetVar('gmap', 'initialmaptype',       $data['initialmaptype']);
            pnModSetVar('gmap', 'showuserlist',         $data['showuserlist']);
            pnModSetVar('gmap', 'sidebarwidth',         $data['sidebarwidth']);
            pnModSetVar('gmap', 'listheightuser',       $data['listheightuser']);
            pnModSetVar('gmap', 'showspecialslist',     $data['showspecialslist']);
            pnModSetVar('gmap', 'listheightspecials',   $data['listheightspecials']);
            pnModSetVar('gmap', 'legendmarkershow',     $data['legendmarkershow']);
            pnModSetVar('gmap', 'legendmarkercolumns',  $data['legendmarkercolumns']);           
            pnModSetVar('gmap', 'legendspecialshow',    $data['legendspecialshow']);
            pnModSetVar('gmap', 'legendspecialcolumns', $data['legendspecialcolumns']);
            pnModSetVar('gmap', 'showsearch',           $data['showsearch']);     // Closes Ticket #2
            pnModSetVar('gmap', 'information',          $data['information']);    // Closes Ticket #8
            pnModSetVar('gmap', 'overviewmap',          $data['overviewmap']);    // Closes Ticket #8
        }
        return true;
    }

}
