<div class="featured-product section fix">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title muc">
					<h1>Sản phẩm</h1>
				</div>
				<div class="feature-pro-slider owl-carousel">
					<?php 
						foreach ($hotproduct as $hotproduct):
					?>
					<div class="product-item fix">
						<form action="index.php?controller=cart&amp;action=update" method="post" class="intro_product"  >
							<input type="hidden" name="id" value="<?php echo $hotproduct['Id'];   ?>">
							<input type="hidden" name="name" value="<?php echo $hotproduct['Name']  ?>">
							<input type="hidden" name="price" value="<?php echo $hotproduct['Price']  ?>">
							<div class="product-img-hover">
								<a href="index.php?controller=detail-product&amp;pid=<?php echo $hotproduct['Id']; ?>" class="pro-image fix"><img class="img-responsive" src="public/upload/images/<?php echo $hotproduct['Image1']; ?>" alt="featured" /></a>
							</div>
							<div class="pro-name-price-ratting">
								<div class="pro-name">
									<a href="index.php?controller=detail-product&amp;pid=<?php echo $hotproduct['Id']; ?>"><?php echo $hotproduct['Name']; ?></a>
								</div>
								<div class="shopping">
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$<?php echo $hotproduct['Price']; ?></span></p>
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