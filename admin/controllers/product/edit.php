<?php
	if (!empty($_POST)) {
		$product = array(
			'Id'          => intval($_POST['id']),
			'CategoryId'  => intval($_POST['category_id']),
			'Name'        => escape($_POST['name']),
			'Price'       => escape($_POST['price']),
			'Createdate'  => date('Y-m-d'),
			'Used'       => escape($_POST['used']),
			'Guide'       => escape($_POST['guide']),
			'Detail'      => str_replace("\r\n",'', $_POST['detail'])
		);
		$pid           = save('product', $product);
		$images_name1  = 'images1'.'-'.$pid;
		$config  = array(
			'name'          => $images_name1,
			'upload_path'   => 'public/upload/images/',
			'allowed_exts'  => 'jpg|jpeg|png|gif',
		);
		$images1 = upload('image1', $config);
		if ($images1) {
			$product = array(
				'Id'     => $pid,
				'Image1' => $images1
			);
			save('product', $product);
		}
		header('Location: admin.php?controller=product');
	}
	if (isset($_GET['pid'])) $pid = intval($_GET['pid']); else $pid = 0;
	$product = get_a_record('product', $pid);
	//Category
	$categories = get_all('categories', array(
	    'select'   =>'Id,Name',
	    'order_by' => 'Id'
	));

	$types      = get_all('typesproduct', array(
		'select'   =>'Id,Name',
		'order_by' =>'Id'
	)); 

	$title   = ($pid = 0)? 'Thêm sản phẩm' : 'Sửa sản phẩm' ;
	//load view
	require('admin/views/product/edit.php');
?>