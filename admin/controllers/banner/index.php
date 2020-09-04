<?php
	$title = 'Quản lí banner';
	$options = array(
	    'order_by' => 'Id ASC'
	);
	$banner  = get_all('banner', $options);
	require ('admin/views/banner/index.php');
?>