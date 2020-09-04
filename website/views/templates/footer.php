<footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <p><strong>CÁC CHÍNH SÁCH</strong></p>
						<ul>
							<li><a href="/chinh-sach-va-quy-dinh-chung.html#chinh-sach-bao-mat-thong-tin">Bảo mật thông tin khách hàng</a></li>
							<li><a href="/chinh-sach-va-quy-dinh-chung.html#hinh-thuc-thanh-toan">Hình thức thanh toán</a></li>
							<li><a href="/chinh-sach-va-quy-dinh-chung.html#chinh-sach-van-chuyen">Chính sách vận chuyển</a></li>
							<li><a href="/chinh-sach-va-quy-dinh-chung.html#chinh-sach-bao-hanh">Chính sách bảo hành và đổi trả hàng</a></li>
						</ul>
						<div class="site-info">Bản quyền thuộc Công ty Cổ phần Dược phẩm <br>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
						<p><strong>ĐĂNG KÝ VỚI BỘ CÔNG THƯƠNG</strong></p>
						<p><img src="public/images/dathongbao.png" width="300" height="114" alt="dathongbao"></p>
                    </div>
                    <div class="col-xs-12 col-sm-4">
						<p><strong>CÔNG TY CỔ PHẦN DƯỢC PHẨM</strong></p>
						<p>Địa chỉ: Lí Thường Kiệt - TP>Huế <br> Số điện thoại: 0163935485<br>Email: chanhhiep.0201@gmail.com<br>Website: <a href="">medical.com.vn</a></p>
						<p><em>Giấy chứng nhận đăng ký doanh nghiệp số 9696969 <br>do Sở kế hoạch và Đầu tư tỉnh Huế cấp lần đầu ngày 69/96/2069</em></p>
                    </div>
                </div>
            </div>
        </footer>
	</div>
	<script type="text/javascript" src="public/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="public/js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript" src="public/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="public/js/jquery.lettering.js"></script>
	<script type="text/javascript" src="public/js/jquery.textillate.js"></script>
	<script type="text/javascript" src="public/js/jquery.easing-1.3.js"></script>
	<script type="text/javascript" src="public/js/jquery.mousewheel-3.1.12.js"></script>
	<script type="text/javascript" src="public/js/jquery.jcarousellite.js"></script>
	<script type="text/javascript">
		$('#mainSlider').nivoSlider({
			directionNav: false,
			animSpeed: 500,
			slices: 18,
			pauseTime: 8000,
			pauseOnHover: false,
			controlNav: false,
		});

		$(".feature-pro-slider, .related-pro-slider, .list_newopen").owlCarousel({
			loop: true,
			nav: true,
			margin: 30,
			dots: false,
			navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			autoplay: 6000,
			loop: true,
			responsive:{
				0:{items:1,},
				480:{items:2,},
				750:{items:3,},
				950:{items:4,},
				1170:{items:4,},
			}
		});

		$(".vertical .carousel_vertical").jCarouselLite({
            btnNext: ".vertical .next",
            btnPrev: ".vertical .prev",
            vertical: true,
            auto: 5000,
            easing: "jswing",
            speed: 1000,
            visible: 3,
            scroll: 2,
            mouseWheel: true
        });

		jQuery(document).ready(function(){			
			jQuery('.slogan').textillate({ initialDelay: 2000, loop: true,  in: {effect: 'flipInY'}, out: {effect: 'flipInY'},});
		});
	</script>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>