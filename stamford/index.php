<?php
/*
* @package Stamford
* @copyright (C) 2016 by Joomlastars - All rights reserved!
* @license GNU General Public License, version 2 (http://www.gnu.org/licenses/gpl-2.0.html)
* @author Joomlastars <stars.joomla@gmail.com> <skype : stars.joomla>
* @authorurl <http://themeforest.net/user/joomlastars>
*/
?>
<?php ini_set("display_errors","0");
$app = JFactory::getApplication();
$menu   = $app->getMenu();
$menu1 = $menu->getActive();
$pagetitle = $menu1->title;
require("php/variables.php");
?>
<?php
$app = JFactory::getApplication();
$this->setTitle( $this->getTitle());
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$lang = JFactory::getLanguage();
?>

<!DOCTYPE html>
<!--[if lte IE 6]> <html class="no-js ie  lt-ie10 lt-ie9 lt-ie8 lt-ie7 ancient oldie" lang="en-US"> <![endif]-->
<!--[if IE 7]>     <html class="no-js ie7 lt-ie10 lt-ie9 lt-ie8 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]>     <html class="no-js ie8 lt-ie10 lt-ie9 oldie" lang="en-US"> <![endif]-->
<!--[if IE 9]>     <html class="no-js ie9 lt-ie10 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $this->language; ?>" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<jdoc:include type="head" />

<!-- CSS Files -->
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/contact.css" rel="stylesheet" type="text/css" media="screen" />
<?php
if(($lang->getTag()=='ar-AA') || ($lang->getTag()=='he-IL') || ($lang->getTag()=='fa-IR')) { ?>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/styles_rtl.css" rel="stylesheet" type="text/css" media="screen" />
<?php } else { ?>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/styles.css" rel="stylesheet" type="text/css" media="screen" />
<?php } ?>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if gt IE 8]><!-->
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/retina-responsive.css" rel="stylesheet" type="text/css" media="screen" />
<!--<![endif]-->
<!--[if !IE]> <link href="css/retina-responsive.css" rel="stylesheet" type="text/css" media="screen" /><![endif]-->
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/print.css" rel="stylesheet" type="text/css" media="print" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300,300italic,700,600,800" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Lora:400,600,400italic" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/modernizr.js" type="text/javascript"></script>
<?php 
$menu = & JSite::getMenu();
if ($menu->getActive() == $menu->getDefault($lang->getTag())) {
	?>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/condition.css" rel="stylesheet" type="text/css" />
<?php
}
?>

<!-- Custom css -->
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/custom.css" type="text/css" />
<!-- End CSS Files -->
</head>
<body class="to-right <?php echo $homepage_layout; ?> gallery-detail">
<!-- Preloader -->
<div id="preloader">
  <div class="canvas-holder">
    <canvas id="preloaderCanvas"></canvas>
  </div>
  <div id="status">
    <div class="parent">
      <div class="child">
        <p class="small">loading</p>
      </div>
    </div>
  </div>
</div>
<div id="wrap">
  <header class="clearfix">
    <div class="container">
      <div class="logo-wrapper">
        <h1 id="logo"><a href="index.php">
          <?php if($homepage_layout=='light') {
				if($this->params->get('lightlogo')==NULL) { ?>
          <img src="templates/stamford/images/bg-logo-light.png" alt="Stamford">
          <?php } else { ?>
          <img src="<?php echo $lightlogo; ?>" alt="Stamford">
          <?php } ?>
          <?php } else { 
			if($this->params->get('darklogo')==NULL) { ?>
          <img src="templates/stamford/images/bg-logo.png" alt="Stamford">
          <?php } else { ?>
          <img src="<?php echo $darklogo; ?>" alt="Stamford">
          <?php } ?>
          <?php } ?>
          </a></h1>
        <div class="tagline"><span><?php echo $tagline1; ?> <br />
          <?php echo $tagline2; ?></span></div>
      </div>
      <?php if($this->countModules('js-language')) { ?>
      <jdoc:include type="modules" name="js-language" style="nomoduletablediv" />
      <?php } ?>
      <?php if($this->countModules('js-menu')) { ?>
      <div id="menu-button">
        <div class="centralizer">
          <div class="cursor"><span class="hide">Menu</span>
            <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
            <div id="menu-close-button">&times;</div>
          </div>
        </div>
      </div>
      <!-- start main nav -->
      <nav id="main-nav">
        <jdoc:include type="modules" name="js-menu" style="nomoduletablediv" />
        <jdoc:include type="modules" name="js-social" style="nomoduletablediv" />
      </nav>
      <!-- end main nav -->
      <?php } ?>
    </div>
  </header>
  <!-- end header -->
  <div class="content-wrapper">
    <div id="content">
      <div class="container clearfix">
        <?php if ($menu->getActive() != $menu->getDefault($lang->getTag())) { ?>
        <jdoc:include type="component" />
        <?php } ?>
        <div id="container" class="clearfix">
          <?php if($this->countModules('js-home')) { ?>
          <jdoc:include type="modules" name="js-home" style="nomoduletable" />
          <?php } ?>
          <?php if($this->countModules('js-about')) { ?>
          <jdoc:include type="modules" name="js-about" style="nomoduletable" />
          <?php } ?>
          <?php if($this->countModules('js-services')) { ?>
          <jdoc:include type="modules" name="js-services" style="nomoduletable" />
          <?php } ?>
          <?php if($this->countModules('js-portfolio')) { ?>
          <jdoc:include type="modules" name="js-portfolio" style="nomoduletable" />
          <?php } ?>
          <?php if($this->countModules('js-germany')) { ?>
          <jdoc:include type="modules" name="js-germany" style="nomoduletable" />
          <?php } ?>
          <?php if($this->countModules('js-sweden')) { ?>
          <jdoc:include type="modules" name="js-sweden" style="nomoduletable" />
          <?php } ?>
          <?php if($this->countModules('js-norway')) { ?>
          <jdoc:include type="modules" name="js-norway" style="nomoduletable" />
          <?php } ?>
          <?php if($this->countModules('js-blog')) { ?>
          <jdoc:include type="modules" name="js-blog" style="nomodulediv" />
          <?php } ?>
          <?php if($this->countModules('js-poland')) { ?>
          <jdoc:include type="modules" name="js-poland" style="nomoduletable" />
          <?php } ?>
          <?php if($this->countModules('js-gallery')) { ?>
          <jdoc:include type="modules" name="js-gallery" style="nomoduletable" />
          <?php } ?>
          <?php if($this->countModules('js-contact')) { ?>
          <jdoc:include type="modules" name="js-contact" style="nomoduletable" />
          <?php } ?>
          <?php if($this->countModules('js-contactform')) { ?>
          <div class="element clearfix col2-3 contact">
            <?php if($this->countModules('js-map')) { ?>
            <jdoc:include type="modules" name="js-map" style="xhtml" />
            <?php } ?>
            <?php if($this->countModules('js-contactform')) { ?>
            <div class="col1-3 white white-right">
              <jdoc:include type="modules" name="js-contactform" style="nomoduletable" />
            </div>
            <?php } } ?>
          </div>
        </div>
        <!-- end #container --> 
      </div>
      <!-- end .container --> 
    </div>
    <!-- end content --> 
  </div>
  <!-- end content-wrapper --> 
</div>
<!-- end wrap -->
<footer class="clearfix">
  <div class="container">
    <p class="alignleft"><?php echo $copyright; ?></p>
    <p class="alignright">
      <?php if($showaddress=='1') { echo $address; } ?>
      <?php if($showphone=='1') { ?>
      <span class="padding">&middot;</span> <?php echo $phone; } ?>
      <?php if($showemail=='1') { ?>
      <span class="padding">&middot;</span> <a href="mailto:<?php echo $email; ?>" title="Write Email"><?php echo $email; ?></a>
      <?php } ?>
      <?php if($showskype=='1') { ?>
      <span class="padding">&middot;</span> <?php echo $skype; } ?> </p>
  </div>
</footer>

<!-- JavaScript Files
================================================== --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery-1.11.1.min.js" type="text/javascript"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery-easing-1.3.js" type="text/javascript"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/retina.min.js" type="text/javascript"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.touchSwipe.min.js" type="text/javascript"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.isotope2.min.js" type="text/javascript"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.ba-bbq.min.js" type="text/javascript"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.isotope.load.js" type="text/javascript"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/SmoothScroll.js" type="text/javascript"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/preloader.js" type="text/javascript"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/image-hover.js" type="text/javascript"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.hoverIntent.minified.js" type="text/javascript"></script> 
<script defer src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.flexslider-min.js"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/input.fields.js" type="text/javascript"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/responsive-nav.js" type="text/javascript"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.lazyload.js"></script>
</body>
</html>
