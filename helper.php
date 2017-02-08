<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Module.Custom_Extended
 *
 * @copyright   Copyright (C) 2017 janich.dk, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */
defined('_JEXEC') or die;


class ModCustomExtendedHelper
{
	public static function prepare($input)
	{
		$custom = new stdClass;
		$custom->text = $input;

		JPluginHelper::importPlugin('content');

		$registry = new JObject();

		$dispatcher = JEventDispatcher::getInstance();
		$dispatcher->trigger('onContentPrepare', array('module.custom_extended', &$custom, &$registry, 0));

		return $custom->text;
	}
}
