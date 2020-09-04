<?php
	$title  =  'Quản lý dạng bào chế';
	$option =  array(
		'order_by' => 'Id ASC',
	);
	$type   =  get_all('typesproduct', $option);
	require('admin/views/typesproduct/index.php');
?>