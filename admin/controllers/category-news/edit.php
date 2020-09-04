<?php
	if (!empty($_POST)) {
		$category = array(
			'Id'            => intval($_POST['id']),
			'NameCategory'  => escape($_POST['name'])
		);
		$cnid        = save('categorynews', $category);
		header('location: admin.php?controller=category-news');
	}

	if (isset($_GET['cnid'])) $cnid = intval($_GET['cnid']); else $cnid = 0;
	$category = get_a_record('categorynews', $cnid);
	$title  = 'Quản lí danh mục tin tức';
	require('admin/views/category-news/edit.php');

?>