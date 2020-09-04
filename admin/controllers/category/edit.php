<?php
	if (!empty($_POST)) {
		$category = array(
			'Id'    => intval($_POST['id']),
			'Name'  => escape($_POST['name'])
		);
		$cid        = save('categories', $category);
		header('location: admin.php?controller=category');
	}

	if (isset($_GET['cid'])) $cid = intval($_GET['cid']); else $cid = 0;
	$category = get_a_record('categories', $cid);
	$title  = 'Quản lí danh mục sản phẩm';
	require('admin/views/category/edit.php');

?>