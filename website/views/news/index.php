<?php
	require('website/views/templates/header.php');
	require('website/views/templates/menu.php');
?>
<div class="body">
	<?php
		require ('website/views/templates/banner.php');
	?>
	<div class="product">
		<div class="container">
			<div class="row">
				<?php
					require('website/views/product/list-category.php');
					require('website/views/news/list-news.php');
				?>
			</div>
		</div>
	</div>
</div>

<?php
	require('website/views/templates/footer.php');
?>