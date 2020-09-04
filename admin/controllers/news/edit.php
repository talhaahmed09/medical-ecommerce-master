<?php
	if (!empty($_POST)) {
		$news = array(
			'Id'          => intval($_POST['id']),
			'NameNews'    => escape($_POST['name']),
			'CreateDate'  => escape($_POST['date']),
			'DetailNews'  => str_replace("\r\n",'', $_POST['detail']),
			'CaptionNew'  => escape($_POST['caption']),
			'IdCatNew'    => intval($_POST['category_id']),
		);
		$nid              =  save('news', $news);
		$images_name1     =  'image1'.'-'.$nid.'news';
		$config           = array(
			'name'        => $images_name1,
			'upload_path' => 'public/upload/images/',
			'allowed_exts'=> 'jpg|jpeg|png|gif',
		); 
		$images1          = upload('image1', $config);
		if ($images1) {
			$news         = array(
				'Id'      => $nid,
				'Images1' => $images1,
			);
			save('news', $news);
		}
		header('location:admin.php?controller=news');
	}

	if (isset($_GET['nid'])) $nid = intval($_GET['nid']); else $nid = 0;
	$news    = get_a_record('news', $nid);

	$catnew = get_all('categorynews', array(
	    'select'   =>'Id,NameCategory',
	    'order_by' => 'Id'
	));
	$title  = 'Quản lý tin tức';
	require('admin/views/news/edit.php');
?>