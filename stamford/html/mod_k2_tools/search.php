<?php
/**
 * @version		2.6.x
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2014 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;

/*
Important note:
If you wish to use the live search option, it's important that you maintain the same class names for wrapping elements, e.g. the wrapping div and form.
*/

?>

	<form action="<?php echo $action; ?>" method="get" autocomplete="off" class="search-form">

		<input type="text" value="<?php echo $text; ?>" name="searchword" maxlength="<?php echo $maxlength; ?>" size="<?php echo $width; ?>" alt="<?php echo $button_text; ?>" class="field" onblur="if(this.value=='') this.value='<?php echo $text; ?>';" onfocus="if(this.value=='<?php echo $text; ?>') this.value='';" />

		<?php if($button): ?>
		<?php if($imagebutton): ?>
		<input type="image" value="<?php echo $button_text; ?>" class="button" onclick="this.form.searchword.focus();" src="<?php echo JURI::base(true); ?>/components/com_k2/images/fugue/search.png" />
		<?php else: ?>
		<input type="submit" value="<?php echo $button_text; ?>" class="button" onclick="this.form.searchword.focus();" />
		<?php endif; ?>
		<?php endif; ?>

		<input type="hidden" name="categories" value="<?php echo $categoryFilter; ?>" />
		<?php if(!$app->getCfg('sef')): ?>
		<input type="hidden" name="option" value="com_k2" />
		<input type="hidden" name="view" value="itemlist" />
		<input type="hidden" name="task" value="search" />
		<?php endif; ?>
		<?php if($params->get('liveSearch')): ?>
		<input type="hidden" name="format" value="html" />
		<input type="hidden" name="t" value="" />
		<input type="hidden" name="tpl" value="search" />
		<?php endif; ?>
	</form>

	<?php if($params->get('liveSearch')): ?>
	<div class="k2LiveSearchResults"></div>
	<?php endif; ?>

