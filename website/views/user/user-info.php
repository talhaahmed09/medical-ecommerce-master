<div class="col-lg-9">
	<div class="row">
		<div class="col-lg-12">
			<?php
				if (isset($_SESSION['edit_user'])) {
					echo '<span class="arlet">'.$_SESSION['edit_user'].'</span>';
					unset($_SESSION['edit_user']);
				}
			?>
		</div>
		<form action="index.php?controller=user&amp;action=edit" method="post">
			<input type="hidden" name="id" value="<?php echo $user['Id'];  ?>">
			<input type="hidden" name="password" value="<?php echo $user['password'];  ?>">
			<div class="col-lg-12">
				<label class="label-control">Họ tên</label>
				<input type="text" class="form-control" name="fullName" value="<?php echo $user['full_name'];  ?>">
			</div>
			<div class="col-lg-12">
				<label class="label-control">Email</label>
				<input type="email" class="form-control" name="email" value="<?php echo $user['email'];  ?>">
			</div>
			<div class="col-lg-12">
				<label class="label-control">Điện thoại</label>
				<input type="text" class="form-control" name="phone" value="<?php echo $user['phone'];  ?>">
			</div>
			<div class="col-lg-12">
				<label class="label-control">Địa chỉ</label>
				<input type="text" class="form-control" name="address" value="<?php echo $user['address'];  ?>">
			</div>
			<div class="col-lg-12">
				<div class="input-append date">
					<label class="label-control">Ngày sinh</label>
					<input type="text" class="form-control" name="dateOfBirth" id="dateOfBirth" data-date-format="dd/mm/yyyy" value="<?php echo date('d/m/Y', strtotime($user['date_of_birth']));  ?>">
				</div>
			</div>
			<div class="col-lg-12">
				<label class="label-control">Giới tính</label>
				<?php
					if ($user['gender'] == 1) {
				?>
						<input type="radio" name="gender" value="1" <?php echo 'checked'  ?>>Nam
						<input type="radio" name="gender" value="0">Nữ
				<?php
					} elseif ($user['gender'] == 0) {
				?>
						<input type="radio" name="gender" value="1">Nam
						<input type="radio" name="gender" value="0" <?php echo 'checked'  ?>>Nữ
				<?php
					}
				?>
			</div>
			<div class="col-lg-12">
				<input type="submit" class="btn" name="edit_user" value="Cập nhật">
			</div>
		</form>
	</div>

</div>