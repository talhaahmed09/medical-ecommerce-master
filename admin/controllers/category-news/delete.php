<?php
	$cnid  = intval($_GET['cnid']);
	delete('categorynews', $cnid);
	header('location:admin.php?controller=category-news');
?>