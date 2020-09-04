<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/nivo-slider.css" />
	<link rel="stylesheet" type="text/css" href="public/css/animate.min.css" />
	<link rel="stylesheet" type="text/css" href="public/css/owl.carousel.min.css" />
</head>
<body>
	<div class="wrapper">
		<!-- HEADER -->
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-lg- col-xs-3">
						<div class="logo">
							<a href=""></a>
						</div>
						<div class="slogan">
							<ul class="texts" style="display: none;">
								<li class="first-child last-child current">Tận tụy vì sức khỏe</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-8 col-xs-9">
						<div class="box_search">
							<div class="cart">
								<img src="public/images/cart.png">
								<span>Hiện có<a href="index.php?controller=cart">
								<?php 
									if (isset($_SESSION['cart'])) {
										echo count($_SESSION['cart']);
									} else {
										echo 0;
									}
								?>
								</a>sản phẩm</span>
							</div>
							<form action="index.php?controller=search&amp;keyword=" method="get" onsubmit="return false;" class="searchbar">
			                    <input type=search name='keyword' id='keyword' placeholder="Nhập tên sản phẩm" class="searchbox">
			                    <input type="submit" value=" " onclick="window.location.href=this.form.action + this.form.keyword.value;" class="btn_search"/>
			                </form>
						</div>
					</div>
				</div>
			</div>
		</div>