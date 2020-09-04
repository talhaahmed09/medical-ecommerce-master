<div class="col-lg-9">
	<div class="muc">
		<h1>Tin tức</h1>
	</div>
	<div class="content_new">
		<div class="header_new">
		    <div class="img-news">
		        <img src="public/upload/images/<?php echo $news['Images1'] ?>" alt="" title="" width="240px" border="0">
		    </div>
		    <div class="info-product">
		        <ul>
		            <li class="name">
		                <h4><?php echo $news['NameNews']; ?></h4>
		            </li>
		            <li>
		                <div style="text-align: justify;"><?php echo $news['CaptionNew']; ?></div>
		            </li>
		        </ul>
		    </div>
		</div>
		<div class="main_news">
			<?php echo $news['DetailNews']; ?>
		</div>
	</div>
</div>