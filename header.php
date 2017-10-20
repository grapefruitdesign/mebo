<!DOCTYPE html>
<html lang="en-US"> <!-- MASTER -->
	<head>
		<meta charset="UTF-8" >
		 <meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, target-densityDpi=device-dpi, user-scalable=no">

		<meta property="og:title" content="Mebo" >
		<meta property="og:site_name" content="Mebo" >
		<meta property="og:url" content="http://meborobot.com" >
		<meta property="og:description" content="#MEBODIDIT">
		<!-- <meta property="og:image" content="" > -->
		<meta property="og:type" content="website" >

		<!--
		// APPLE TOUCH ICONS
		<link rel="apple-touch-icon" sizes="57x57" href="site-assets/images/icons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="site-assets/images/icons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="site-assets/images/icons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="site-assets/images/icons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="site-assets/images/icons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="site-assets/images/icons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="site-assets/images/icons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="site-assets/images/icons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="site-assets/images/icons/apple-icon-180x180.png">

		// DEFAULT ICONS
		<link rel="icon" type="image/png" sizes="192x192"  href="site-assets/images/icons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="96x96" href="site-assets/images/icons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="32x32" href="site-assets/images/icons/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="site-assets/images/icons/favicons/favicon-16x16.png">

		// MS TILE ICON
		<meta name="msapplication-TileImage" content="site-assets/images/icons/ms-icon-144x144.png">
		-->
		<link rel="icon" type="image/png" sizes="16x16" href="site-assets/images/logos/favicon-16x16.png">

		<!-- <link rel="manifest" href="site-assets/images/icons/_manifest.json"> -->

		<meta name="msapplication-TileColor" content="#000">
		<meta name="theme-color" content="#000">
		<meta name="apple-mobile-web-app-status-bar-style" content="#000">

		<title>Mebo | <?php echo $page; ?></title>

		<!--[if lt IE 9]>
			<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
		<![endif]-->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
		<link href="scripts/_lib/videojs/video-js.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="scripts/css/main.css">
	<?php include_once("analyticstracking.php") ?>
	</head>

	<?php

	if (empty($template)) { $template = 'Default'; }
	function slugify($input) { return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $input))); }

	?>

	<body class="<?php echo slugify($page); ?> <?php echo slugify($template); ?>">

	<?php if (empty($_GET['target']) || strtoupper($_GET['target']) == 'FALSE') { include 'retargeting.php' ; } ?>

		<!-- NAVBAR -->
		<header id="header-main">
			<div class="logo-nav">
				<div class="header-logo">
					<a class="m-l-sm" href="./"><img src="site-assets/images/logos/mebo.png" /></a>
				</div>
				<div id="nav-menu">
					<ul class="top-nav">
						<li class="<?php echo ($template == 'Home') ? 'active' : 'inactive'; ?>"><a id="top-nav-products" href="./">Meet Mebo</a></li>
						<li class="<?php echo ($template == 'Features') ? 'active' : 'inactive'; ?>"><a id="top-nav-support" href="./features.php">Features</a></li>
						<li class="<?php echo ($template == 'Support') ? 'active' : 'inactive'; ?>"><a id="top-nav-support" href="./support.php">Support</a></li>
					</ul>
				</div>
			</div>
		</header>
