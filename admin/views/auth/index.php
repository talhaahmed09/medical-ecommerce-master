<?php
	require('admin/views/templates/header.php');
?>
	<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1" >
					<div class="login">
							<div class="login-header">
								<div class="row">
									<div class="col-md-12">
										<h3>Đăng nhập</h3>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<img class="img-responsive" src="admin/public/images/download.png" >
									</div>
								</div>
							</div>
							<div class="login-body">
								<form action="" method="post">
									<div class="row">
										<div class="col-md-12">
											<input type="text" id="username" class="form-control" value="" name="username" placeholder="Nhập tên đăng nhập...">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<input type="password" id="password" class="form-control" value="" name="password" placeholder="Mật khẩu...">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<label for="remember">
												<input type="checkbox" class="btn" name="remember" id="remember" autocomplete="off">
												Nhớ mật khẩu</label>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<input type="submit" class="btn" id="login" value="Đăng nhập" name="login">
										</div>
									</div>
									
								</form>
							</div>
					</div>
				</div>
			</div>
	</div>

<?php
	require('admin/views/templates/footer.php');
?>