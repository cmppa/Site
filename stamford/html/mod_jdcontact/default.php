<?php

/*------------------------------------------------------------------------
# J DContact
# ------------------------------------------------------------------------
# author                Md. Shaon Bahadur
# copyright             Copyright (C) 2013 j-download.com. All Rights Reserved.
# @license -            http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites:             http://www.j-download.com
# Technical Support:    http://www.j-download.com/request-for-quotation.html
-------------------------------------------------------------------------*/

defined('_JEXEC') or die('Restricted access');

    $showdepartment  	     =        $params->get( 'showdepartment', '1' );
    $showsendcopy            =        $params->get( 'showsendcopy', '1' );
    $humantestpram           =        $params->get( 'humantestpram', '1' );
    $sales_address           =        $params->get( 'sales_address', 'sales@yourdomain.com' );
    $support_address         =        $params->get( 'support_address', 'support@yourdomain.com' );
    $billing_address         =        $params->get( 'billing_address', 'billing@yourdomain.com' );
    $backgroundcolor         =        $params->get( 'backgroundcolor', '#FFEFD5' );
    $wrp_width               =        $params->get( 'wrp_width', '320px' );
    $inputfield_width        =        $params->get( 'inputfield_width', '300px' );
    $inputfield_border       =        $params->get( 'inputfield_border', '#CCCCCC' );
    $result                  =        '';
    $name                    =        '';
    $email                   =        '';
    $phno                    =        '';
    $subject                 =        '';
    $msg                     =        '';
    $selfcopy                =        '';
    $sucs                    =        '';
    $varone                  =        rand(5, 15);
    $vartwo                  =        rand(5, 15);
    $sum_rand                =        $varone+$vartwo;

?>
     <script src="modules/mod_jdcontact/tmpl/lib/jquery-1.4.4.js"></script>
        <form class="form-part" name="contactform" id="form" method="post" action="index.php">
             <?php if($showdepartment=='1') : ?>
              <label><?php echo JText::_('MOD_JDCONTACT_DEPARTMENT'); ?></label>
              <select style="width: <?php echo $inputfield_width; ?>;border:1px solid <?php echo $inputfield_border; ?>;" name="dept" class="text">
              	<option value="sales"><?php echo JText::_('MOD_JDCONTACT_SALES'); ?></option>
              	<option value="support"><?php echo JText::_('MOD_JDCONTACT_SUPPORT'); ?></option>
              	<option value="billing"><?php echo JText::_('MOD_JDCONTACT_BILLING'); ?></option>
              </select>
            <?php endif; ?>
            <input class="text" name="name" type="text" value="<?php echo $name; ?>" title="<?php echo JText::_('MOD_JDCONTACT_NAME'); ?>" />
            
            <input class="text" name="email" type="text" value="<?php echo $email; ?>" title="<?php echo JText::_('MOD_JDCONTACT_EMAIL'); ?>" />
            
            <textarea cols="40" rows="2" class="text" name="msg" title="<?php echo JText::_('MOD_JDCONTACT_MESSAGE'); ?>"><?php echo $msg; ?></textarea>
           <br />
            <?php if($humantestpram=='1') : ?>
                <label for='message'><?php echo JText::_('MOD_JDCONTACT_HUMANTEST'); ?></label>
                <?php echo '<b>'.$varone.'+'.$vartwo.'=</b>'; ?>
                <input id="human_test" name="human_test" size="3" type="text" class="text"><br>
                <input type="hidden" id="sum_test" name="sum_test" value="<?php echo $sum_rand; ?>" />
            <?php endif; ?>
            
             <?php if($showsendcopy=='1') : ?>
                <input type="checkbox"  name="selfcopy" <?php if($selfcopy == "yes") echo "checked='checked'"; ?> value="yes" />
                <label class="sendcopy"><?php echo JText::_('MOD_JDCONTACT_SELFCOPY'); ?></label>
            <?php endif; ?>
            <br /><br />
            <input type="hidden" name="browser_check" value="false" />
            <div class="input-wrapper clearfix" style="float:right;">
                        <input type="submit" class="send-btn" name="submit" value="<?php echo JText::_('MOD_JDCONTACT_SUBMIT'); ?>" id="submit" />					
            </div>
                        <div id="result"><?php if($result) echo "<div class='message'>".$result."</div>"; ?></div>
        </form>

        <script type="text/javascript">
	    document.contactform.browser_check.value = "true";
	    $("#submit").click(function(){
		$('#result').html('<img src="modules/mod_jdcontact/tmpl/images/loader.gif" class="loading-img" alt="loader image">').fadeIn();
		var input_data = $('#form').serialize();
				$.ajax({
				   type: "POST",
				   url:  "<?php echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
				   data: input_data,
				   success: function(msg){
					   $('.loading-img').remove(); //Removing the loader image because the validation is finished
					   $('<div class="message">').html(msg).appendTo('div#result').hide().fadeIn('slow'); //Appending the output of the php validation in the html div

                        if(msg=='<?php echo JText::_("MOD_JDCONTACT_SUCCESSMSG"); ?>'){
                          $('#form').each (function(){
                            this.reset();
                          });
                       }
				   }
				});
			return false;
	    });
	    </script>
