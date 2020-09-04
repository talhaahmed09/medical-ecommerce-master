<?php
	if (!empty($_POST)) {
		if (isset($_POST['status'])) {
			$status = 1;
		} else {
			$status = 0;
		}
		$slideshow  =  array(
			'Id'        =>  intval($_POST['id']),
			'Tittle'    =>  escape($_POST['title']),
			'Caption'   =>  escape($_POST['caption']),
			'Status'    =>  $status
		);	

		$sid  = save('banner_slide', $slideshow);
		$images_name1  = 'Images'.'-slideshow-'.$sid;
		$config  =  array(
			'name'         => $images_name1,
			'upload_path'  => 'public/upload/images/',
			'allowed_exts' => 'jpg|jpeg|png|gif'
		);
		$Images = upload('Images', $config);
		if ($Images) {
			$slideshow  = array(
				'Id'        =>  $sid,
				'Images'    =>  $Images
			);
			save('banner_slide', $slideshow);
		}
		header('location: admin.php?controller=slideshow');
	}
	if (isset($_GET['sid'])) $sid = intval($_GET['sid']); else $sid = 0;

	$slideshow  = get_a_record('banner_slide', $sid);
	$title      = 'Quản lý slideshow';
	//load view
	require('admin/views/slideshow/edit.php');
?>