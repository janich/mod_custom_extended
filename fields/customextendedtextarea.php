<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Module.Custom_Extended
 *
 * @copyright   Copyright (C) 2017 janich.dk, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */
defined('_JEXEC') or die;


jimport('joomla.form.helper');
JFormHelper::loadFieldClass('textarea');


class JFormFieldCustomExtendedTextarea extends JFormFieldTextarea
{
	public $type = 'customextendedtextarea';

	public function getInput()
	{
		JFactory::getDocument()->addStyleDeclaration('#' . $this->id . ' { font-family: monospace; height: 200px; width: 100%; max-width: 95%; color #111; } #' . $this->id . ':active, #' . $this->id . ':focus, #' . $this->id . ':hover { color: #000; }');
		return parent::getInput();
	}
}
