<?php
	if (!empty($_POST)) {
		if (isset($_POST['status'])) {
			$status = 1;
		} else {
			$status = 0;
		}
		$banner = array(
			'Id'            => intval($_POST['id']),
			'Time_create'   => date('Y-m-d'),
			'Status'        => $status,
		);

		$bid           = save('banner', $banner);
		$images_name1  = 'Images'.'- banner -'.$bid;
		$config  = array(
			'name'          => $images_name1,
			'upload_path'   => 'public/upload/images/',
			'allowed_exts'  => 'jpg|jpeg|png|gif',
		);
		$Images = upload('Images', $config);
		if ($Images) {
			$banner = array(
				'Id'     => $bid,
				'Images' => $Images
			);
			save('banner', $banner);
		}
		header('location: admin.php?controller=banner');

	}

	if (isset($_GET['bid'])) $bid = intval($_GET['bid']); else $bid = 0;
	$banner = get_a_record('banner', $bid);
	$title  = 'Quản lí banner quảng cáo';
	require('admin/views/banner/edit.php');

?>