<?php
	require('website/views/templates/header.php');
	require('website/views/templates/menu.php');
?>
<div class="body">
	<div class="user">
		<div class="container">
			<div class="row">
				<?php
					require_once "user-menu.php";
					require_once "user-info.php"; 
				?>
			</div>
		</div>
	</div>
</div>

<?php
	require('website/views/templates/footer.php');
?>