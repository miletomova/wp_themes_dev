<!DOCTYPE HTML>
<!--
	Ex Machina by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Ex Machina by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/skel.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/skel-panels.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>					
		<link rel="stylesheet" href="<?= bloginfo('stylesheet_url');?>" />
		
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<?php wp_head(); ?> 
	</head>
	<body class="left-sidebar">

	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="#">Ex Machina</a></h1>
					</div>
				
				<!-- Nav -->
					<?php if (has_nav_menu('header-menu')):
						wp_nav_menu(array(	'theme_location' 	=> 'header-menu', 
											'menu_id' 			=> 'menu',
											'container' 		=> 'nav',
											'container_id' 		=> 'nav',
											));
							else:
								?>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Homepage</a></li>
							<li class="active"><a href="left-sidebar.html">Left Sidebar</a></li>
							<li><a href="right-sidebar.html">Right Sidebar</a></li>
							<li><a href="no-sidebar.html">No Sidebar</a></li>
						</ul>
					</nav>
					<?php endif; ?>

			</div>
		</div>
	<!-- Header -->
		
	<!-- Banner -->
		<div id="banner">
			<div class="container">
			</div>
		</div>
	<!-- /Banner -->

	<!-- Main -->
		<div id="page">
				