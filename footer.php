<!--
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<img src="site-assets/images/mebo-retailbox.jpg" width="100%"></div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<section class="connect-base white retailers">
	<div class="connect-container">
	<h2 class="blue-main where-to-buy">WHERE TO BUY</h2>
		<div class="companies">
		 <ul>
<?php

$retailer_logos = array(
	array(
		'retailer' => 'site-assets/images/logos/target.svg',
		'link' => 'http://www.target.com'
	),
	array(
		'retailer' => 'site-assets/images/logos/toysrus.svg',
		'link' => 'https://www.toysrus.com/product/index.jsp?productId=91846186'
	),
	array(
		'retailer' => 'site-assets/images/logos/amazon.svg',
		'link' => 'https://www.walmart.com/ip/Mebo-Robot-With-5-Axis-Precision-Controlled-Arm/654964036',
		'isAmazon' => 'amazon-retailer'
	),
	array(
		'retailer' => 'site-assets/images/logos/walmart.svg',
		'link' => 'http://www.walmart.com'
	)

);

shuffle($retailer_logos);

foreach ($retailer_logos as $index => $box) {
	?><li class="col-xs-6 col-sm-6 col-md-6" id=<?php echo $box['isAmazon'] ?>><a target="_blank" href="<?php echo $box['link']; ?>" ><img class="img-responsive" src="<?php echo $box['retailer']; ?>"></a></li>
<?php } ?>
</ul>
		</div>
	</div>
</section>
</div>
-->

<section class="section-base" id="home-mebodidit">
	<div class="connect-container">
		<h2>#MEBODIDIT</h2>
			<script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
		 <link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
		 <ul class="juicer-feed" data-feed-id="mymebo" data-style="slider"></ul>
	</div>
</section>

<section class="connect-base" id="">
			<div class="row">
				<div class="connect-container">
				<h2 class="connect-social-text">Connect With Us</h2>
				<div class="icon-container">
				<?php

				$icon_suffix = '';
				if ($page == 'Hover Racer') { $icon_suffix = '_red'; }
				if ($page == 'Pro Series') { $icon_suffix = '_gray'; }

				?>
					<ul>
					  <li><a target="_blank" href="https://www.instagram.com/mymebo/">
						<img src="site-assets/images/logos/instagram<?php echo $icon_suffix; ?>.svg">
					  </a></li>
					  <li><a target="_blank"href="https://www.facebook.com/MyMebo">
						<img src="site-assets/images/logos/facebook<?php echo $icon_suffix; ?>.svg">
					  </a></li>
					  <li><a target="_blank"href="https://twitter.com/offclskyrocket">
						<img src="site-assets/images/logos/twitter<?php echo $icon_suffix; ?>.svg">
					  </a></li>
					</ul>
				</div>
				<div class="skyrocket-connect-logo">
					<img src="site-assets/images/logos/skyrocket.png">
				</div>
				<div class="legal">
					<p>© 2017 Skyrocket LLC, Los Angeles, CA 90066 USA. All Rights Reserved. MEBO and Skyrocket and their respective logos are trademarks and/or registered trademarks of Skyrocket Toys LLC. All other trademarks, logos and copyrights are the property of their respective owners, and there is no relationship express or implied with Skyrocket LLC.</p>
				</div>
			</div>
		</section>

		<script src="https://code.jquery.com/jquery-3.1.0.min.js"
				integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
				crossorigin="anonymous">
		</script>

		<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
				integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
				crossorigin="anonymous"></script>

		<!-- <script src="scripts/js/_lib/modernizr/modernizr-custom.js"></script> -->
		<!-- <script src="scripts/js/_lib/tweenjs/tween.js"></script> -->
		<!-- <script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js"></script>
		<script src="scripts/_lib/videojs/video.js"></script>
		<script src="scripts/_lib/videojs/Youtube.js"></script>
		<script src="scripts/js/modules/resize-video.js"></script>
		<script src="scripts/js/modules/modal.js"></script>
		<script src="scripts/js/nav.js"></script>
		<!--<script src="scripts/js/main.js"></script>-->


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<?php

		switch($page) {
			case 'Home':

				break;

		}

		switch($template) {
			case 'Show':
				?><script src="scripts/js/show.js"></script><?php
				break;
			case 'Support':
				?><script src="scripts/js/support.js"></script><?php
				break;
		}

		?>

	</body>

</html>
