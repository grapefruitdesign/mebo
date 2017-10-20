<?php

$page = 'Who is Mebo';
$template = 'Home';
include('header.php');

?>

	<div class="modal fade modal-video" id="modal_youtube_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="vertical-alignment-helper">
	        <div class="modal-dialog vertical-align-center">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x close</button>
				<video
					class="video-js vjs-default-skin 16-9 vjs-big-play-centered"
					id="modal-vid-1"
					controls muted
					width="1280" height="720"
					data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://www.youtube.com/watch?v=iq8EhQWEVIo"}] }'>
				</video>
	        </div>
	    </div>
	</div>

	<section class="section-base home-sub-cover general-hero" id="home-hero" style="background-image: url('site-assets/images/homepage1_bg.jpg');">
		<div class="content bottom home-screen">
			<h2><strong>MEBO</strong> DID IT.</h2>
			<h4 class="hijinx">WHAT HIJINX WILL <br/>YOU GET INTO.</h4>
			<div href="#modal_youtube_1" data-toggle="modal" class="learn-more" style="cursor: pointer;">
				<div class="mebo-button">
					<div class="center-container">
						<h4>WATCH NOW</h4>
					</div>
				</div>
			</div>
		</div>
		<div id="mebo-angel-devil">
		  <div  alt="Mebo - your robotic alter ego" class="image" style="background-image: url('site-assets/images/homepage1_head.png');"></div>
		  <div id="crossfade">
			<img class="devil" src="site-assets/images/mebo-horns.png" alt="Image 1">
			<img src="site-assets/images/mebo-halo.png" alt="Image 2">
		  </div>
		</div>
	</section>

	<section class="section-base home-sub-cover" id="mebo-do-it" style="background-image: url('site-assets/images/homepage2_bg.jpg');">
		<div class="content right">
			<h2 class="gray">LET <strong>MEBO</strong><br />DO IT FOR YOU</h2>
			<a href="./features.php#grasp-carry" class="learn-more">
			<div class="mebo-button">
				<div class="center-container">
					<h4>LEARN MORE</h4>
				</div>
			</div>
		</a>
	</div>
	</section>

	<section class="section-base home-sub-cover" id="into-mischief" style="background-image: url('site-assets/images/homepage3_bg.jpg');">
		<div class="content left">
			<h2 class="white-text">GET INTO<br/>A LITTLE<br /><strong>MISCHIEF</strong></h2>
			<a href="./features.php#see-hear" class="learn-more">
			<div class="mebo-button">
				<div class="center-container">
					<h4>LEARN MORE</h4>
				</div>
			</div>
		</a>
	</div>
		<div class="image-right" style="background-image: url('site-assets/images/homepage3_hands.png');">
	</div>
	</section>

	<section class="section-base home-sub-cover" id="make-noise" style="background-image: url('site-assets/images/homepage4_bg.jpg');">
		<div class="content right">
			<h2>MAKE SOME<br /><strong>NOISE!</strong></h2>
			<a href="./features.php#mebo-voice" class="learn-more">
			<div class="mebo-button">
				<div class="center-container">
					<h4>LEARN MORE</h4>
				</div>
			</div>
		</a>
	</div>
	<div alt="Mebo - make some noise" class="image-left" style="background-image: url('site-assets/images/homepage4_megaphones.png');">
	</div>
	</section>

<?php include('footer.php'); ?>
