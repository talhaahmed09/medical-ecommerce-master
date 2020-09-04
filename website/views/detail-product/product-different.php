<div class="product_different">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="muc">
					<h1>Sản phẩm khác</h1>
				</div>
				<div class="feature-pro-slider owl-carousel">
					<?php
						foreach ($product_diffent as $product_diffent):
					?>
					<div class="product-item fix">
						<form action="index.php?controller=cart&amp;action=update" method="post" class="intro_product"  >
							<input type="hidden" name="id" value="<?php echo $item['Id'];   ?>">
							<input type="hidden" name="name" value="<?php echo $item['Name']  ?>">
							<input type="hidden" name="price" value="<?php echo $item['Price']  ?>">
							<div class="product-img-hover">
								<a href="index.php?controller=detail-product&amp;pid=<?php echo $product_diffent['Id']; ?>" class="pro-image fix"><img class="img-responsive" src="public/upload/images/<?php echo $product_diffent['Image1'] ?>" alt="featured" /></a>
							</div>
							<div class="pro-name-price-ratting">
								<div class="pro-name">
									<a href="index.php?controller=detail-product&amp;pid=<?php echo $product_diffent['Id']; ?>"><?php echo $product_diffent['Name'] ?></a>
								</div>
								<div class="shopping">
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$<?php echo $product_diffent['Price']; ?></span></p>
									</div>
									<div class="cart">
										<button type="submit" name="add_cart" class="shopping"></button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<?php
						endforeach;
					?>
				</div>
			</div>
		</div>
	</div>
</div>