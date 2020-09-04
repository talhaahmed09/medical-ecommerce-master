<?php

	require_once 'admin/models/Slideshow.php';
	$id  = intval($_GET['id']);
	$slideshow = new Slideshow($id, '', '');
	$slideshow->deleteSlideshow();
	$_SESSION['message'] = "Xóa Slideshow này thành công.";
	header('location:admin.php?controller=slideshow');
	
?>