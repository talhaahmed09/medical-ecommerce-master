<?php
	require('website/views/templates/header.php');
	require('website/views/templates/menu.php');
?>
<div class="body">
    <?php
        require ('website/views/templates/banner.php');
    ?>
    <div class="contact">
        <div class="container">
            <!---start-contact-->
        	<div class="row">
                <div class="col-md-6">
	                <div class="intro_contact">
		        		<p>Chúng tôi luôn sẵn sàng đón nhận những ý kiến đóng góp cũng như hồi đáp thắc mắc của quý khách hàng về dịch vụ của Công ty chúng tôi. Xin vui lòng liên hệ với chúng tôi nếu quý khách hàng có bất kỳ yêu cầu hoặc vấn đề cần giải quyết.</p>
		        	</div>
                    <section class="contact-infos">
                    	<p><i class="fa fa-map-marker"></i> Địa chỉ: Lô A17 Khu công nghiệp Tứ Hạ, P. Tứ Hạ, TX. Hương Trà, Thừa Thiên Huế</p>
                    	<p><i class="fa fa-envelope pr-10"></i> Điện thoại : 0543 778803</p>
                        <p><i class="fa fa-envelope pr-10"></i> Email :info@herabiopharm.com.vn</p>
                        <p><i class="fa fa-facebook pr-10"></i>  Facebook : </p>
                    </section>
                </div>
                <div class="col-md-6">
                	<div class="intro_contact">
		        		<p>Để có thể đáp ứng được các yêu cầu và các ý kiến đóng góp của Khách hàng một cách nhanh nhất, xin vui lòng điền vào mẫu dưới đây và nhấn vào nút gửi đến chúng tôi, chúng tôi sẽ liên lạc với Khách hàng trong khoảng thời gian ngắn nhất:</p>
		        	</div>
                    <div class="contact-form">
                        <form id="userForm" method="post" action="index.php?controller=contact&amp;action=index" role="form">
                            <div class="formItem">
                                <span><label>NAME</label></span>
                                <span><input name="userName" type="text" class="textbox"></span>
                            </div>
                            <div class="formItem">
                                <span><label>E-MAIL</label></span>
                                <span><input name="userEmail" type="text" class="textbox"></span>
                            </div>
                            <div class="formItem">
                                <span><label>MOBILE</label></span>
                                <span><input name="userPhone" type="text" class="textbox"></span>
                            </div>
                            <div class="formItem">
                                <span><label>SUBJECT</label></span>
                                <span><textarea name="userMsg"> </textarea></span>
                            </div>
                            <div class="formItem">
                                <span><input type="submit" class="mybutton" value="Submit"></span>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d3790.2620567804033!2d107.47874776486425!3d16.506673388611954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e2!4m3!3m2!1d16.5065195!2d107.4804159!4m3!3m2!1d16.506516599999998!2d107.48040619999999!5e0!3m2!1sen!2sus!4v1467622665163" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
<?php
	require('website/views/templates/footer.php');
?>