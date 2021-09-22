<?php 
require_once 'inc/load.php';

/* Links */
$argVar = array(

	'maps' => 'https://goo.gl/maps/yt3PPqoemfgzFXVB9',
	'email' => 'atendimento@yxe.com.br',
	'facebook' => 'https://www.facebook.com/GroupYxe',
	'instagram' => 'https://www.instagram.com/agenciayxe/',
	'youtube' => 'https://www.youtube.com/user/YxePublicidade',
	'phone' => 'tel:+552133252407',
	
	'home' => 12,
	'quem-somos' => 14,
	'trabalhe-conosco' => 18,
	'contato' => 16,

);
InfoVar::save($argVar);
?>