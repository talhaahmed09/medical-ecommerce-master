<?php 
	require('website/views/templates/header.php');
	require('website/views/templates/menu.php');
	require "banner-slide.php"; 
?>

<div class="body">
	<?php	
		require "intro-copany.php";
		require "newproduct.php";
		require "service.php";
		require "newhot.php"; 
	?>
</div>

<?php require('website/views/templates/footer.php'); ?>