<?php
	$title    = 'Quản lí Slideshow';
	$options = array(
	    'order_by' => 'Id ASC'
	);
	$slideshow  = get_all('banner_slide', $options);
	// print_r($slideshow);
	// die();
	require('admin/views/slideshow/index.php');
?>