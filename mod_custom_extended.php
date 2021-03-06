<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Module.Custom_Extended
 *
 * @copyright   Copyright (C) 2017 janich.dk, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */
defined('_JEXEC') or die;


require_once __DIR__ .'/helper.php';


$html   = $params->get('customhtml', '');
$css    = $params->get('customcss', '');
$js     = $params->get('customjs', '');

if ($params->get('prepare_content', 0))
{
	$html = ModCustomExtendedHelper::prepare($html);
}

if ($css)
{
	JFactory::getDocument()->addStyleDeclaration($css);
}

if ($js)
{
	JFactory::getDocument()->addScriptDeclaration($js);
}

$background_image = $params->get('backgroundimage', '');
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx', ''));

require JModuleHelper::getLayoutPath('mod_custom_extended', $params->get('layout', 'default'));
