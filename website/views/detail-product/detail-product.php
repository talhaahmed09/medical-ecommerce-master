<div class="col-lg-9">
	<div class="block2">
		<div class="block_product">
			<div class="header_product">
				<div class="row">
					<div class="col-lg-6">
						<div class="img_product">
							<img class="img-responsive" src="public/upload/images/<?php echo $product['Image1']; ?>">
						</div>
					</div>
					<div class="col-lg-6">
						<form action="index.php?controller=cart&amp;action=update" method="post" class="intro_product"  >
							<input type="hidden" name="id" value="<?php echo $product['Id'];   ?>">
							<input type="hidden" name="name" value="<?php echo $product['Name']  ?>">
							<input type="hidden" name="price" value="<?php echo $product['Price']  ?>">
							<h3 class="name_product"><?php echo $product['Name']; ?></h3>
							<div class="buy_product">
								<p class="price_product"><span>Giá: </span>$<?php echo $product['Price']; ?></p>
							</div>
							<div class="detail_product">
								<ul class="info_product">
									<li><p><span>Loại sản phẩm:</span>Thuốc chữa bệnh</p></li>
									<li><p><span>Dạng bào chế:</span> dạng viên</p></li>
									<li><p><span>Quy cách sản phẩm:</span> 60 viên/hộp, lọ</p></li>
									<li><p><span>Cách dùng:</span><?php echo $product['Used']; ?></p></li>
									<li><p><span>Công dụng:</span><?php echo $product['Guide']; ?></p></li>
								</ul>
							</div>
							<div class="shopping_cart">
								<div class="number">
									<label>Số lượng</label>
									<input type="number" min="1" name="quantity" value="">
								</div>
								<button type="submit" name="add_cart" class="shopping"></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="main_product">
				<div class="row">
					<div class="col-lg-12">
						<div class="description">
							<ul class="nav product-nav">
								<li class="active"><a data-toggle="tab" href="#mota">Mô tả sản phẩm</a></li>
								<li class=""><a data-toggle="tab" href="#comment">Bình luận</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content">
								<div id="mota" class="tab-pane fade active in" role="tabpanel">
									<?php echo $product['Detail']; ?>
								</div>
								<div id="comment" class="tab-pane fade" role="tabpanel">
									<div class="fb-comments" data-href="https://www.facebook.com/Herabiopharm0201/" data-width="800" data-numposts="6"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require"product-different.php"; ?>
	</div>
</div>