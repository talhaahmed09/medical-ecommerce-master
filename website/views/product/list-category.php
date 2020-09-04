<div class="col-lg-3">
	<div class="category">
		<div class="muc">
			<h1>Danh mục sản phẩm</h1>
		</div>
		<ul class="choose_category">
			<?php
				foreach ($category as $category):
			?>
			<li><a href="index.php?controller=category&amp;cid=<?php echo $category['Id'];  ?>"><?php echo $category['Name']; ?></a></li>
			<?php 
				endforeach;
			?>
		</ul>
	</div>

	<div class="slide-product" style="margin-top: 10px;">
		<div class="muc">
				<h1>Sản phẩm bán chạy</h1>
		</div>
		<div class="vertical">
			<div class="carousel_vertical">
				<ul>
					<?php
						foreach ($product_slideVertical as $item) {
					?>
						<li>
							<div class="product-item fix">
								<div class="product-img-hover">
									<a href="index.php?controller=detail-product&amp;pid=<?php echo $item['Id']; ?>" class="pro-image fix"><img class="img-responsive" src="public/upload/images/<?php echo $item['Image1'];  ?>" alt="featured" /></a>
								</div>
								<div class="pro-name-price-ratting">
									<form action="index.php?controller=cart&amp;action=update" method="post" class="intro_product"  >
										<input type="hidden" name="id" value="<?php echo $item['Id'];   ?>">
										<input type="hidden" name="name" value="<?php echo $item['Name']  ?>">
										<input type="hidden" name="price" value="<?php echo $item['Price']  ?>">
										<div class="pro-name">
											<a href="index.php?controller=detail-product&amp;pid=<?php echo $item['Id']; ?>"><?php echo $item['Name'];  ?></a>
										</div>
										<div class="shopping">
											<div class="pro-price fix">
												<p><span class="old">$165</span><span class="new">$<?php echo $item['Price']; ?></span></p>
											</div>
											<div class="cart">
												<button type="submit" name="add_cart" class="shopping"></button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</li>
						
					<?php
						}
					?>
				</ul>
			</div>
			<!-- <a href="#" class="next">&rsaquo;</a> -->
	        <div class="clear"></div>
		</div>
	</div>
</div>