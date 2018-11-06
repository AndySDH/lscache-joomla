<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_modules
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.core');
$text = $displayData['title'];
?>

<button data-toggle="modal" onclick="jQuery( '#collapseModal' ).modal('show')" class="btn btn-small btn-success" title="<?php echo $text; ?>">
	<span class="icon-file-minus" aria-hidden="true"></span>
	<?php echo $text; ?>
</button>