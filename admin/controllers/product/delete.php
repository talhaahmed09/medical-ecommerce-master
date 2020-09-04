<?php
	// require_once ('admin/models/products.php');
	$pid  = intval($_GET['pid']);
	deletefile('product', $pid);
	header('location:admin.php?controller=product');
?>