<?php
	require('website/views/templates/header.php');
	require('website/views/templates/menu.php');
?>
<div class="body">
	<?php
		require ('website/views/templates/banner.php');
	?>
	<div class="transaction">
		<div class="container">
			<form action="index.php?controller=transaction&amp;action=checkout" method="post">
				<div class="row">
					<div class="col-md-6">
						<div class="muc">
							<h1>Thông tin khách hàng</h1>
						</div>
						<div class="form_transaction">
							<div class="row">
								<div class="col-md-12">
									<label class="label-control">Họ tên khách hàng</label>
									<input type="text" name="customer_name" class="form-control" value="<?php echo $user ? $user['full_name'] : '' ?>">
								</div>
								<div class="col-md-12">
									<label class="label-control">Địa chỉ giao nhận hàng</label>
									<input type="text" name="customer_address" class="form-control" value="<?php echo $user ? $user['address'] : '' ?>">
								</div>
								<div class="col-md-12">
									<label class="label-control">Email</label>
									<input type="email" name="customer_email" class="form-control" value="<?php echo $user ? $user['email'] : ''  ?>">
								</div>
								<div class="col-md-12">
									<label class="label-control">Điện thoại liên hệ</label>
									<input type="text" name="customer_phone" class="form-control" value="<?php echo $user ? $user['phone'] : ''   ?>">
								</div>
								<div class="col-md-12">
									<input type="submit" class="button_transaction" name="transaction" value="Thanh toán">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="muc">
							<h1>Danh sách mua hàng</h1>
						</div>
						<table class="table">
							<thead>
								<th>STT</th>
								<th>Tên sản phẩm</th>
								<th>Đơn giá (VNĐ)</th>
								<th>Số lượng</th>
								<th>Thành tiền</th>
							</thead>
							<tbody>
								<?php
								if (isset($_SESSION['cart'])) {
									$i = 1;
									$total = 0;
									foreach ($_SESSION['cart'] as $item):
								?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $item['name'];  ?></td>
										<td><?php echo number_format($item['price']); ?></td>
										<td><?php echo $item['quantity']; ?></td>
										<td>
											<?php
												$subtotal = $item['price'] * $item['quantity'];
												echo number_format($subtotal);
											?>
										</td>
									</tr>
								<?php	
										$i++;
										$total += $subtotal;
										endforeach;
									}else{
									 	echo "<tr><td colspan='5'>Giao dịch trống</td></tr>";
									}
								?>
							</tbody>
						</table>
						<?php
							if (isset($_SESSION['cart'])) {
						?>
								<p>Tổng tiền: <?php echo number_format($total).' VNĐ'; ?></p>
					
						<?php
							}
						?>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php
	require('website/views/templates/footer.php');
?>