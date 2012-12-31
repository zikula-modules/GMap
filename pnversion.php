<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

$modversion['name']         = pnVarPrepForDisplay(_GM_NAME);
$modversion['oldnames']     = array('GoogleMap');
$modversion['displayname']  = pnVarPrepForDisplay(_GM_DISPLAYNAME);
$modversion['description']  = pnVarPrepForDisplay(_GM_DESCRIPTION);
$modversion['version']      = '2.2';
$modversion['credits']      = 'pndocs/credits.txt';
$modversion['help']         = 'pndocs/help.txt';
$modversion['changelog']    = 'pndocs/changelog.txt';
$modversion['license']      = 'pndocs/license.txt';
$modversion['official']     = false;
$modversion['admin']        = 1;
$modversion['author']       = 'Frank Chestnut, Frank Schummertz';
$modversion['contact']      = 'http://dev.pnconcept.com';
$modversion['securityschema'] = array('gmap::marker'  => '::',
                                      'gmap::special' => '::');
