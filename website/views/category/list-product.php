<div class="col-lg-9">
	<div class="muc">
		<h1>Sản phẩm</h1>
	</div>
	<div class="list_product">
		<div class="row">
			<?php
			if (isset($product)) {
				foreach ($product as $product):
			?>
			<div class="col-lg-4">
				<form action="index.php?controller=cart&amp;action=update" method="post" class="intro_product"  >
					<input type="hidden" name="id" value="<?php echo $product['Id'];   ?>">
					<input type="hidden" name="name" value="<?php echo $product['Name']  ?>">
					<input type="hidden" name="price" value="<?php echo $product['Price']  ?>">
					
					<a href="index.php?controller=detail-product&amp;pid=<?php echo $product['Id']; ?>" class="detail_product">
						<div class="thump">
							<div class="images_product">
								<img class="img-responsive" src="public/upload/images/<?php echo $product['Image1'] ?>">
							</div>
							<div class="infor_product">
								<h5><?php echo $product['Name']; ?></h5>
								<p><?php echo $product['Guide']; ?></p>
							</div>
						</div>
						<div class="name_price">
							<h3><?php echo $product['Name']; ?></h3>
							<div class="price_product">
								<p>Giá sản phẩm: <span>$<?php echo $product['Price']; ?></span></p>
							</div>
							<div class="cart">
								<button type="submit" name="add_cart" class="shopping"></button>
							</div>
						</div>
					</a>
				</form>
			</div>

			<?php
				endforeach;
			} else{
				echo "Không có sản phẩm nào";
			}
			?>
		</div>
	</div>
	<?php if ($total_rows > $limit) { ?>
	    <div class="text-right">
	        <?php echo $pagination; ?>
	    </div>
    <?php } ?>
</div>