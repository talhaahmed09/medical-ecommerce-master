<div class="col-lg-9">
	<div class="muc">
		<h1>Thông tin giỏ hàng</h1>
	</div>
	<div class="cart">
		<table class="table table-striped">
			<thead>
				<th>STT</th>
				<th>Tên sản phẩm</th>
				<th>Số lượng</th>
				<th>Giá</th>
				<th>Thành tiền</th>
				<th colspan="2">Chức năng</th>
			</thead>
			<tbody>
				<?php
				if (isset($_SESSION['cart'])) {
					$i = 1;
					$total = 0;
					foreach ($_SESSION['cart'] as $item):
				?>
				<tr>
					<form action="index.php?controller=cart&amp;action=update" method="post">
						<input type="hidden" name="id" value="<?php echo $item['id']; ?>">
						<td><?php echo $i; ?></td>
						<td><?php echo $item['name']; ?></td>
						<td>
							<input type="number" min="1" name="quantity" value="<?php echo $item['quantity']; ?>">
						</td>
						<td><?php echo number_format($item['price']).' VNĐ';  ?></td>
						<td>
							<?php
								$subTotal = $item['price'] * $item['quantity'];
								$total += $subTotal;
							 	echo number_format($subTotal).' VNĐ';  
							?>
						</td>
						<td>
							<input type="submit" name="edit_cart" value="Cập nhật">
						</td>
						<td>
							<a class="deleteitem" href="index.php?controller=cart&amp;action=delete&amp;id=<?php echo $item['id']; ?>">Xóa</a>
						</td>
					</form>
				</tr>
				<?php
					endforeach;
					} else {
				?>
						<td colspan="6">Giỏ hàng của bạn rỗng</td>
				<?php
					}
				?>
			</tbody>
		</table>
		<div class="function">
			<?php
				if (isset($_SESSION['cart'])) {
			?>
				<p class="count">Thành tiền là:  <span><?php echo number_format($total); ?></span> VNĐ</p>
				<a class="btn_transaction" href="index.php?controller=transaction">Thanh toán</a>
			<?php
				}
			?>
		</div>
	</div>
</div>