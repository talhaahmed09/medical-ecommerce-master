<!-- BANNER SLIDER -->
<div class="slider-wrap">
	<?php 
		foreach ($slideshow as $slideshow):
	?>
	<div id="mainSlider" class="nivoSlider slider-image">
		<img src="public/upload/images/<?php echo $slideshow['Images']; ?>" alt="main slider" title="#htmlcaption1"/>
	</div>
	<div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
		<div class="slider-progress"></div>							
		<div class="slide1-text slide-text">
			<div class="middle-text">
				<div class="cap-title wow slideInRight" data-wow-duration=".9s" data-wow-delay="0s">
					<h1><?php echo $slideshow['Tittle']; ?></h1>
				</div>
				<div class="cap-dec wow slideInRight" data-wow-duration="1.3s" data-wow-delay="0s">
					<h2><?php echo $slideshow['Caption']; ?></h2>
				</div>
			</div>	
		</div>						
	</div>
	<?php
		endforeach;
	?>
</div>
<!-- End -->