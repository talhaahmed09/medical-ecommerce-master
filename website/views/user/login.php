<?php
	if (isset($_SESSION['user_login'])) {
?>
	    <li>
	        <a href="index.php?controller=user">Xin chào
	                <?php
	                    if(isset($_COOKIE['user_login'])) {
	                        echo $_COOKIE['user_login'];
	                    } elseif (isset($_SESSION['user_login'])) {
	                        echo $_SESSION['user_login'];
	                    } 
	                ?>
	        </a>
	    </li>
        <li>
            <a href="index.php?controller=user&amp;action=logout"><i class="fa fa-fw fa-power-off"></i> Đăng xuất</a>
        </li>
<?php		
	} else{
?>
	<li><a id="loginLink" href="" data-toggle="modal" data-target="#modalLogin">Đăng nhập</a></li>
	<div id="modalLogin" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<ul class="nav nav-tabs">
						<li id="loginTabHeader" class="active"><a data-toggle="tab" href="#loginTab">Đăng nhập</a></li>
						<li id=registerTabHeader><a data-toggle="tab" href="#registerTab">Đăng ký</a></li>
					</ul>

					<div class="tab-content">
						<div id="loginTab" class="tab-pane fade in active">
							<form id="loginForm" name="loginForm" action="index.php?controller=user&amp;action=login" method="post">
								<div class="row">
									<div class="col-md-12">
										<span class="error_msg_login" style="display: none;"></span>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 left">
										<span>Tên đăng nhập *</span>
									</div>
									<div class="col-md-8">
										<input type="text" name="username" id="username" class="form-control" required>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 left">
										<span>Mật khẩu *</span>
									</div>
									<div class="col-md-8">
										<input type="password" name="password" id="password" class="form-control" required>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 left">
									</div>
									<div class="col-md-8">
										<label for="remember">
											<input type="checkbox" class="btn" name="remember" id="remember" autocomplete="off">
											Nhớ mật khẩu
										</label>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 left">
										<a href="#">Quên mật khẩu?</a>
									</div>
									<div class="col-md-8">
										<input type="submit" name="login_user" id="login_user" class="btn" value="Đăng nhập">
									</div>
								</div>
							</form>
						</div>
						<div id="registerTab" class="tab-pane fade">
							<form  id="registerForm" name="registerForm" action="index.php?controller=user&amp;action=register" method="post">
								<div class="row">
									<div class="col-md-4 left">
										<span>Tên đăng nhập *</span>
									</div>
									<div class="col-md-8">
										<input type="text" name="username" id="username" class="form-control">
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 left">
										<span>Mật khẩu *</span>
									</div>
									<div class="col-md-8">
										<input type="password" name="password" id="password" class="form-control">
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 left">
										<span>Nhập lại mật khẩu *</span>
									</div>
									<div class="col-md-8">
										<input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control">
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 left">
										<span>Email *</span>
									</div>
									<div class="col-md-8">
										<input type="email" name="email" id="email" class="form-control">
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 left">
										<span>Họ tên *</span>
									</div>
									<div class="col-md-8">
										<input type="text" name="fullName" id="fullNname" class="form-control">
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 left">
										<span>Ngày sinh *</span>
									</div>
									<div class="col-md-8">
										<div class="input-append date">
											<input type="text" name="dateOfBirth" id="dateOfBirth" class="form-control readonly" data-date-format="dd/mm/yyyy" readonly="">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-4 left">
										<span>Địa chỉ *</span>
									</div>
									<div class="col-md-8">
										<div class="input-append date">
											<input type="text" name="address" id="address" class="form-control readonly" >
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-4 left">
										<span>Số điện thoại *</span>
									</div>
									<div class="col-md-8">
										<div class="input-append date">
											<input type="text" name="phone" id="phone" class="form-control readonly">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 left">
										<span>Giới tính *</span>
									</div>
									<div class="col-md-8">
										<label for="male" class="label-control"><input type="radio" name="gender" id="male" value="1" checked="">Nam</label>
										<label for="female" class="label-control"><input type="radio" name="gender" id="female" value="0">Nữ</label>
										
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 left">
									</div>
									<div class="col-md-8">
										<input type="submit" name="register" id="register" class="btn" value="Đăng ký">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<span class="error_msg_register" style="display: none;">
										</span>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
<?php
	}
?>

