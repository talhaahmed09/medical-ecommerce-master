<?php
// LOAD BANNER
	$option_B 	= array(
		'where'     => 'Status = 1',
	);
	$banner = get_all('banner', $option_B);

	require ('website/views/contact/index.php');
?>