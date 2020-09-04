<?php
	$lid  = intval($_GET['lid']);
	delete('admin', $lid);
	header('location:admin.php?controller=auth&action=listadmin');
?>