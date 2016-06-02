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

$link = $_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].$_SERVER['PATH_INFO'];

?>


<!-- Start K2 Item Layout -->

	<!-- Plugins: BeforeDisplay -->
	<?php echo $this->item->event->BeforeDisplay; ?>

	<!-- K2 Plugins: K2BeforeDisplay -->
	<?php echo $this->item->event->K2BeforeDisplay; ?>
    
    <div class=" col3-3 home">
          <div class="images">
           <?php if($this->item->params->get('itemImage') && !empty($this->item->image)): ?>
	  <!-- Item Image -->
            <a href="<?php echo $this->item->imageXLarge; ?>" data-title="<?php echo $this->item->title; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" class="popup">
		  		<img src="<?php echo $this->item->image; ?>"  style="width:<?php echo $this->item->imageWidth; ?>px; height:auto;" />
		  	</a>
	  <?php endif; ?>
          </div>
        </div>
        
	   <article class="white white-bottom col3-3 auto info-box">
       <p class="small">
       <?php if($this->item->params->get('itemDateCreated')): ?>
		<!-- Date created -->
			<?php echo JHTML::_('date', $this->item->created , JText::_('F d')).', '; ?><?php echo JHTML::_('date', $this->item->created , JText::_('Y')); ?>
		<?php endif; ?>
       </p>
       <h2>
       <?php if($this->item->params->get('itemTitle')): ?>
	  <!-- Item title -->
			<?php if(isset($this->item->editLink)): ?>
			<!-- Item edit link -->
			<span class="itemEditLink">
				<a class="modal" rel="{handler:'iframe',size:{x:990,y:550}}" href="<?php echo $this->item->editLink; ?>">
					<?php echo JText::_('K2_EDIT_ITEM'); ?>
				</a>
			</span>
			<?php endif; ?>

	  	<?php echo $this->item->title; ?>

	  <?php endif; ?>
       </h2>
       
	  <!-- Plugins: BeforeDisplayContent -->
	  <?php echo $this->item->event->BeforeDisplayContent; ?>

	  <!-- K2 Plugins: K2BeforeDisplayContent -->
	  <?php echo $this->item->event->K2BeforeDisplayContent; ?>

	 

	  <?php if(!empty($this->item->fulltext)): ?>
	  <?php if($this->item->params->get('itemIntroText')): ?>
	  <!-- Item introtext -->
	  	<?php echo $this->item->introtext; ?>
	  <?php endif; ?>
	  <?php if($this->item->params->get('itemFullText')): ?>
	  <!-- Item fulltext -->
	  	<?php echo $this->item->fulltext; ?>
	  <?php endif; ?>
	  <?php else: ?>
	  <!-- Item text -->
	  	<?php echo $this->item->introtext; ?>
	  <?php endif; ?>

	  <!-- Plugins: AfterDisplayContent -->
	  <?php echo $this->item->event->AfterDisplayContent; ?>

	  <!-- K2 Plugins: K2AfterDisplayContent -->
	  <?php echo $this->item->event->K2AfterDisplayContent; ?>
      
        <?php if($this->item->params->get('itemCategory') || $this->item->params->get('itemTags') || $this->item->params->get('itemAttachments')): ?>
  <div class="bottom">
	  <?php if($this->item->params->get('itemTags') && count($this->item->tags)): ?>
	  <!-- Item tags -->
		  <p>
		    <?php foreach ($this->item->tags as $tag): ?>
		    <a href="<?php echo $tag->link; ?>"><?php echo $tag->name; ?></a>
		    <?php endforeach; ?>
		  </p>
	  <?php endif; ?>

  </div>
  <?php endif; ?>  
  
  
  <div class="blog-author-profile clearfix">
            <div class="blog-author-picture">
              <div class="images round">
              <?php if($this->item->params->get('itemAuthorImage') && !empty($this->item->author->avatar)): ?>
  	<img class="itemAuthorAvatar" src="<?php echo $this->item->author->avatar; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($this->item->author->name); ?>" />
  	<?php endif; ?>
              </div>
            </div>
            <div class="blog-author-description">
              <h3>
      	<?php echo $this->item->author->name; ?>
      </h3>
              <?php if($this->item->params->get('itemAuthorDescription') && !empty($this->item->author->profile->description)): ?>
      <p><?php echo $this->item->author->profile->description; ?></p>
      <?php endif; ?>
      
      <ul class="social-list clearfix">
            <li>
            <span>Share it:</span></li>
                <?php if($this->item->params->get('itemTwitterButton',1)): ?>
        		<!-- Twitter Button -->
                
        		<li class="itemTwitterButton">
        			<a class="twitter" href="https://twitter.com/share"  data-count="horizontal"<?php if($this->item->params->get('twitterUsername')): ?> data-via="<?php echo $this->item->params->get('twitterUsername'); ?>"<?php endif; ?>>
        			<?php //echo JText::_('K2_TWEET'); ?>
        			</a>
        			<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
        		</li>
        		<?php endif; ?>
        
        		<?php if($this->item->params->get('itemFacebookButton',1)): ?>
        		<!-- Facebook Button -->
        		<li><a class="facebook" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo $link; ?>','Facebook','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="<?php echo $link; ?>"></a></li>
        		
        		<?php endif; ?>
        
        		<?php if($this->item->params->get('itemGooglePlusOneButton',1)): ?>
        		<!-- Google +1 Button -->
        		<li><a class="gplus" onclick="window.open('https://plus.google.com/share?url=<?php echo $link; ?>','Google plus','width=585,height=666,left='+(screen.availWidth/2-292)+',top='+(screen.availHeight/2-333)+''); return false;" href="https://plus.google.com/share?url=<?php echo $link; ?>"></a></li>
        		<?php endif; ?>
                <li><a class="pinterest" href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"></a></li>
        		<li><a class="linkedin" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $link; ?>','Linkedin','width=863,height=500,left='+(screen.availWidth/2-431)+',top='+(screen.availHeight/2-250)+''); return false;" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $link; ?>"></a></li>
               
            </ul>
            
            
            
            </div>
          </div>
          
           
      

		

	  

		


  <!-- Plugins: AfterDisplayTitle -->
  <?php echo $this->item->event->AfterDisplayTitle; ?>

  <!-- K2 Plugins: K2AfterDisplayTitle -->
  <?php echo $this->item->event->K2AfterDisplayTitle; ?>

	
 <!-- Plugins: AfterDisplay -->
  <?php echo $this->item->event->AfterDisplay; ?>

  <!-- K2 Plugins: K2AfterDisplay -->
  <?php echo $this->item->event->K2AfterDisplay; ?>

  <?php if($this->item->params->get('itemComments') && ( ($this->item->params->get('comments') == '2' && !$this->user->guest) || ($this->item->params->get('comments') == '1'))): ?>
  <!-- K2 Plugins: K2CommentsBlock -->
  <?php echo $this->item->event->K2CommentsBlock; ?>
  <?php endif; ?>

 <?php if($this->item->params->get('itemComments') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2')) && empty($this->item->event->K2CommentsBlock)): ?>
  <!-- Item comments -->
  <a name="itemCommentsAnchor" id="itemCommentsAnchor"></a>

  <div class="comments">

	  <?php if($this->item->params->get('commentsFormPosition')=='above' && $this->item->params->get('itemComments') && !JRequest::getInt('print') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2' && K2HelperPermissions::canAddComment($this->item->catid)))): ?>
	  <!-- Item comments form -->
	  
	  	<?php echo $this->loadTemplate('comments_form'); ?>
	 
	  <?php endif; ?>

	  <?php if($this->item->numOfComments>0 && $this->item->params->get('itemComments') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2'))): ?>
	  <!-- Item user comments -->
	  
      <div class="comment-count">
      <h5>
	  	<span><?php echo $this->item->numOfComments; ?></span> <?php echo ($this->item->numOfComments>1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?>
	  </h5>
      </div>
      
	    <?php foreach ($this->item->comments as $key=>$comment): ?>
	    <div class="comment clearfix <?php echo (!$this->item->created_by_alias && $comment->userID==$this->item->created_by) ? " authorResponse" : ""; echo($comment->published) ? '':' unpublishedComment'; ?>">

	    	<div class="commenter-avatar">
                <div class="images round">
                <?php if($comment->userImage): ?>
				<img src="<?php echo $comment->userImage; ?>" alt="<?php echo JFilterOutput::cleanText($comment->userName); ?>" width="<?php echo $this->item->params->get('commenterImgWidth'); ?>" />
				<?php endif; ?></div>
              </div>
              
			<div class="comment-content">
                <p class="small"><?php echo JHTML::_('date', $comment->commentDate, JText::_('K2_DATE_FORMAT_LC2')); ?></p>
                <h4> 
			    <?php if(!empty($comment->userLink)): ?>
			    <a href="<?php echo JFilterOutput::cleanText($comment->userLink); ?>" title="<?php echo JFilterOutput::cleanText($comment->userName); ?>" target="_blank" rel="nofollow">
			    	<?php echo $comment->userName; ?>
			    </a>
			    <?php else: ?>
			    <?php echo $comment->userName; ?>
			    <?php endif; ?></h4>
                <p><?php echo $comment->commentText; ?></p>
              </div>	

	
				<?php if($this->inlineCommentsModeration || ($comment->published && ($this->params->get('commentsReporting')=='1' || ($this->params->get('commentsReporting')=='2' && !$this->user->guest)))): ?>
				<span class="commentToolbar">
					<?php if($this->inlineCommentsModeration): ?>
					<?php if(!$comment->published): ?>
					<a class="commentApproveLink" href="<?php echo JRoute::_('index.php?option=com_k2&view=comments&task=publish&commentID='.$comment->id.'&format=raw')?>"><?php echo JText::_('K2_APPROVE')?></a>
					<?php endif; ?>

					<a class="commentRemoveLink" href="<?php echo JRoute::_('index.php?option=com_k2&view=comments&task=remove&commentID='.$comment->id.'&format=raw')?>"><?php echo JText::_('K2_REMOVE')?></a>
					<?php endif; ?>

					<?php if($comment->published && ($this->params->get('commentsReporting')=='1' || ($this->params->get('commentsReporting')=='2' && !$this->user->guest))): ?>
					<a class="modal" rel="{handler:'iframe',size:{x:560,y:480}}" href="<?php echo JRoute::_('index.php?option=com_k2&view=comments&task=report&commentID='.$comment->id)?>"><?php echo JText::_('K2_REPORT')?></a>
					<?php endif; ?>

					<?php if($comment->reportUserLink): ?>
					<a class="k2ReportUserButton" href="<?php echo $comment->reportUserLink; ?>"><?php echo JText::_('K2_FLAG_AS_SPAMMER'); ?></a>
					<?php endif; ?>

				</span>
				<?php endif; ?>

	   </div>
	    <?php endforeach; ?>

	  <div class="itemCommentsPagination">
	  	<?php echo $this->pagination->getPagesLinks(); ?>
	  	<div class="clr"></div>
	  </div>
		<?php endif; ?>

		<?php if($this->item->params->get('commentsFormPosition')=='below' && $this->item->params->get('itemComments') && !JRequest::getInt('print') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2' && K2HelperPermissions::canAddComment($this->item->catid)))): ?>
	  <!-- Item comments form -->
	  <div class="itemCommentsForm">
	  	<?php echo $this->loadTemplate('comments_form'); ?>
	  </div>
	  <?php endif; ?>

	  <?php $user = JFactory::getUser(); if ($this->item->params->get('comments') == '2' && $user->guest): ?>
	  		<div><?php echo JText::_('K2_LOGIN_TO_POST_COMMENTS'); ?></div>
	  <?php endif; ?>

  </div>
  <?php endif; ?>
	<div class="read-more"></div>
    <?php
	 $document = JFactory::getDocument();
	 $renderer       = $document->loadRenderer('modules');
	 $position       = 'js-blogfooter';
	 $options        = array('style' => 'blogfooter');
	 echo $renderer->render($position, $options, null); 
	 ?>
 </article>
<!-- End K2 Item Layout -->
