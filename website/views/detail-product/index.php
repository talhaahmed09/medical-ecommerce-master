<?php
	require('website/views/templates/header.php');
	require('website/views/templates/menu.php');
?>
<div class="body">
	<?php
		require ('website/views/templates/banner.php');
	?>
	<div class="block">
		<div class="container">
			<?php 
				require('website/views/product/list-category.php'); 
				require "detail-product.php";
			?>
		</div>
	</div>
</div>
<?php
	require('website/views/templates/footer.php');
?>