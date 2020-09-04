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
					
				?>
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-12">
							<?php
								if (isset($_SESSION['change_password_user'])) {
									echo '<span class="arlet">'.$_SESSION['change_password_user'].'</span>';
									unset($_SESSION['change_password_user']);
								}
							?>
						</div>
						<form action="index.php?controller=user&amp;action=changePassword" method="post">
							<input type="hidden" name="id" value="<?php echo $user['Id'];  ?>">
							<input type="hidden" name="password" value="<?php echo $user['password'];  ?>">
							<div class="col-lg-12">
								<label class="label-control">Mật khẩu hiện tại</label>
								<input type="password" class="form-control" name="old_password" value="">
							</div>
							<div class="col-lg-12">
								<label class="label-control">Mật khẩu mới</label>
								<input type="password" class="form-control" name="new_password" value="">
							</div>
							<div class="col-lg-12">
								<label class="label-control">Nhập lại mật khẩu mới</label>
								<input type="password" class="form-control" name="confirm_new_password" value="">
							</div>
							<div class="col-lg-12">
								<input type="submit" class="btn" name="edit_password_user" value="Cập nhật">
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<?php
	require('website/views/templates/footer.php');
?>

