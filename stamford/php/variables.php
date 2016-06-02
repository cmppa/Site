<?php
/*
* @package Ether
* @copyright (C) 2014 by Joomlastars - All rights reserved!
* @license GNU General Public License, version 2 (http://www.gnu.org/licenses/gpl-2.0.html)
* @author Joomlastars <stars.joomla@gmail.com>
* @authorurl <www.joomlastars.in>
*/
?>
<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );
$path = $this->baseurl.'/templates/'.$this->template;
$app = JFactory::getApplication();

//factory
$document = JFactory::getDocument();

//General
$app->getCfg('sitename');
$siteName = $this->params->get('siteName');
$templateparams	= $app->getTemplate(true)->params;

//Logo Options
$darklogo = $this->params->get('darklogo');
$lightlogo = $this->params->get('lightlogo');
$tagline1 = $this->params->get('tagline1');
$tagline2 = $this->params->get('tagline2');

//Layout Options
$homepage_layout = $this->params->get('homepage_layout');

//Footer Information
$copyright= $this->params->get('copyright');

$showaddress= $this->params->get('showaddress');
$showphone= $this->params->get('showphone');
$showemail= $this->params->get('showemail');
$showskype= $this->params->get('showskype');

$address= $this->params->get('address');
$phone= $this->params->get('phone');
$email= $this->params->get('email');
$skype= $this->params->get('skype');


?>