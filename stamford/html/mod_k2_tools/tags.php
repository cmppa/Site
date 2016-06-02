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

?>
<p class="tags-wrapper">
	<?php foreach ($tags as $tag): ?>
	<?php if(!empty($tag->tag)): ?>
	<a href="<?php echo $tag->link; ?>" style="font-size:<?php echo $tag->size; ?>%" title="<?php echo $tag->count.' '.JText::_('K2_ITEMS_TAGGED_WITH').' '.K2HelperUtilities::cleanHtml($tag->tag); ?>">
		<?php echo $tag->tag; ?>
	</a>
	<?php endif; ?>
	<?php endforeach; ?>
</p>