<?php
$pagetitle = array(
    'title' => 'Nepalese Restaurant',
);

$header = array(
    'imagesource' => 'logo.jpg',
    'imagealt' => 'logo',
	'title' => 'Nepalese Restaurant',
	'motto' => ''
);


$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'firm' => 'Dipesh Tamang.'
);

$pages = array(
	'/' => array('file' => 'home', 'text' => 'Home'),
    'about' => array('file' => 'about', 'text' => 'About'),
	'ourmenu' => array('file' => 'ourmenu', 'text' => 'Our Menu'),
    'gallery' => array('file' => 'gallery', 'text' => 'Gallery'),
	'contact' => array('file' => 'contact', 'text' => 'Contact')
    
);

$error_page = array ('file' => '404', 'text' => 'Page not found!');
?>