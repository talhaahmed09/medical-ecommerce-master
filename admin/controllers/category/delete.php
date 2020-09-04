<?php
	$cid  = intval($_GET['cid']);
	delete('categories', $cid);
	header('location:admin.php?controller=category');
?>