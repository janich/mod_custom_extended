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
JFormHelper::loadFieldClass('editor');


class JFormFieldCustomExtendedEditor extends JFormFieldEditor
{
	public $type = 'customextendededitor';

	public function getInput()
	{
		JFactory::getDocument()->addStyleDeclaration('textarea + .CodeMirror { max-width: 95%; min-height: 400px } textarea + .CodeMirror.CodeMirror-fullscreen { max-width: none; }');
		return parent::getInput();
	}
}
