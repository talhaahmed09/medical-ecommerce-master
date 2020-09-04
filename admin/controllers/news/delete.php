<?php
	$nid       = intval($_GET['nid']);
	deletefile('news', $nid);
	header('location: admin.php?controller=news')
?>