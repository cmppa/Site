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


	<?php if($params->get('itemPreText')): ?>
	<p class="modulePretext"><?php echo $params->get('itemPreText'); ?></p>
	<?php endif; ?>

	<?php if(count($items)): ?>
    <?php foreach ($items as $key=>$item):	?>
    <div class="element blog-teaser clearfix col3-3 half blog">

      <!-- Plugins: BeforeDisplay -->
      <?php echo $item->event->BeforeDisplay; ?>

      <!-- K2 Plugins: K2BeforeDisplay -->
      <?php echo $item->event->K2BeforeDisplay; ?>

      <a href="<?php echo $item->link; ?>">
                <div class="col2-3 half <?php echo ($key%2) ? "alignright" : ""; if(count($items)==$key+1) echo ' lastItem'; ?>">
                  <div class="images">
                  <?php if($params->get('itemImage') || $params->get('itemIntroText')): ?>
	      <?php if($params->get('itemImage') && isset($item->image)): ?>
	      	<img src="<?php echo $item->image; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($item->title); ?>"/>
	      <?php endif; ?>
      <?php endif; ?>
                  </div>
                </div>
                <div class="col1-3 white <?php echo ($key%2) ? "white-left" : "white-right"; if(count($items)==$key+1) echo ' lastItem'; ?> half">
                  <p class="small">
                  <?php if($params->get('itemDateCreated')): ?>
      <?php echo JHTML::_('date', $item->created, JText::_('F d')).','; ?><?php echo JHTML::_('date', $item->created, JText::_('Y')); ?>
      <?php endif; ?></p>
                  <?php if($params->get('itemTitle')): ?>
                  <h3><?php echo $item->title; ?></h3>
                   <?php endif; ?>
                   
                   <a class="moduleItemReadMore" href="<?php echo $item->link; ?>">
                   <div class="bottom">
                   <p><?php echo JText::_('K2_READ_MORE'); ?> <span class="arrow">→</span></p>
                   </div>
                   </a>
                </div>
                </a>
                
         <!-- Plugins: AfterDisplayTitle -->
      <?php echo $item->event->AfterDisplayTitle; ?>

      <!-- K2 Plugins: K2AfterDisplayTitle -->
      <?php echo $item->event->K2AfterDisplayTitle; ?>

      <!-- Plugins: BeforeDisplayContent -->
      <?php echo $item->event->BeforeDisplayContent; ?>

      <!-- K2 Plugins: K2BeforeDisplayContent -->
      <?php echo $item->event->K2BeforeDisplayContent; ?>

      

     <!-- Plugins: AfterDisplayContent -->
      <?php echo $item->event->AfterDisplayContent; ?>

      <!-- K2 Plugins: K2AfterDisplayContent -->
      <?php echo $item->event->K2AfterDisplayContent; ?>

      

   		
      <!-- Plugins: AfterDisplay -->
      <?php echo $item->event->AfterDisplay; ?>

      <!-- K2 Plugins: K2AfterDisplay -->
      <?php echo $item->event->K2AfterDisplay; ?>
    </div>
    <?php endforeach; ?>
  <?php endif; ?>

