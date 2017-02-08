<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Module.Custom_Extended
 *
 * @copyright   Copyright (C) 2017 janich.dk, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */
defined('_JEXEC') or die;
?>

<?php if ($moduleclass_sfx || $background_image): ?>
	<div class="custom_extended <?php echo $moduleclass_sfx; ?>" <?php if ($background_image): ?>style="background-image: url(<?php echo $background_image; ?>)"<?php endif;?>>
<?php endif; ?>

		<?php echo $html; ?>

<?php if ($moduleclass_sfx || $background_image): ?>
	</div>
<?php endif; ?>

