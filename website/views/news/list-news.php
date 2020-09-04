<div class="col-lg-9">
	<div class="muc">
		<h1>Tin tức</h1>
	</div>
	<div class="list_news">
		<div class="row">
			<?php 
				foreach ($news as $news):
			?>
			<div class="col-lg-12">
				<div class="detail_new">
					<div class="img-news">
                    	<a href="index.php?controller=detail-news&amp;nid=<?php echo $news['Id'];?>">
                    		<img src="public/upload/images/<?php echo $news['Images1'] ?>" alt="3 cách làm trắng da toàn thân nhanh chóng với rau củ quả" width="100%">
                    	</a>
                    </div>
                    <a href="index.php?controller=detail-news&amp;nid=<?php echo $news['Id'];?>" class="tt-news">	<?php echo $news['NameNews']; ?></a>
                    <p><?php echo $news['CaptionNew']; ?></p>
                </div>
			</div>
			<?php
				endforeach;
			?>
		</div>
	</div>
	<?php if ($total_rows > $limit) { ?>
	    <div class="text-right">
	        <?php echo $pagination; ?>
	    </div>
    <?php } ?>
	<!-- <ul class="pagination">
	  <li><a href="#">1</a></li>
	  <li class="active"><a href="#">2</a></li>
	  <li><a href="#">3</a></li>
	  <li><a href="#">4</a></li>
	  <li><a href="#">5</a></li>
	</ul> -->
</div>