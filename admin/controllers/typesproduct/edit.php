<?php
	if (!empty($_POST)) {
		$type  = array(
			'Id'   => intval($_POST['id']),
			'Name' => escape($_POST['name'])
		);
		$tid  = save('typesproduct', $type);
		header('location: admin.php?controller=typesproduct');
	}
	if (isset($_GET['tid'])) $tid = $_GET['tid']; else $tid = 0;
	$type  = get_a_record('typesproduct', $tid);
	$title = 'Quản lí dạng bào chế';
	require('admin/views/typesproduct/edit.php');

?>