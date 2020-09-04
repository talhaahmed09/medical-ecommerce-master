<?php
	$bid = intval($_GET['bid']);
	deletefile('banner', $bid);

	header('location: admin.php?controller=banner');

?>