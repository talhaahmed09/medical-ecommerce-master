<?php
	$tid  = intval($_GET['tid']);
	delete('typesproduct', $tid);
	header('location: admin.php?controller=typesproduct');
?>