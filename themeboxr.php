<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.themeboxr
 *
 * @copyright   Copyright (C) 2015 Themeboxr.com . All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Joomla! System Themeboxr Plugin
 *
 * @since  1.5
 */

class PlgSystemThemeboxr extends JPlugin
{
	/**
	 * Application object.
	 *
	 * @var    JApplicationCms
	 * @since  3.2
	 */
	protected $app;



	/**
	 * Themeboxr method to run on specific joomla form render
	 * @param  [type] $form [description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	function onContentPrepareForm($form, $data){
		//try to check the form name in which form edit view you want to include the new params
		//var_dump($form->getName());
		// Add param(support Mega menu) for menu item
		if($form->getName()=='com_modules.module'){
			//var_dump($form->getName());
			JForm::addFormPath(JPATH_SITE.'/plugins/system/themeboxr/params');
			$form->loadFile('params', false);
		}
		
	}
}
