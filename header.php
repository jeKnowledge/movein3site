<!DOCTYPE HTML>

<head>
	<title><?php bloginfo('title'); ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<script src="<?php bloginfo('template_url') ?>/scripts/prefixfree.min.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
	<header>
		<div class="container">
			<div class="logo"><a href="#"><img src="<?php bloginfo('template_url') ?>/img/logo.png"></a></div>
			<div class="fRight">
				<div class="menuTopo">
					<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
				</div>
			</div>
		</div>
	</header>
	<div class="social">
		<div class="container">
			<div class="extras fRight">
				<span class="facebook">
					<a href="https://www.facebook.com/movein3" target="_blank"><i class="fa fa-facebook-square"></i></a>
				</span>
				<span class="linkedin">
					<a href="https://www.linkedin.com/company/movein3" target="_blank"><i class="fa fa-linkedin-square"></i></a>
				</span>
				<span class="email">
					<a href="mailto:info@movein3.pt"><i class="fa fa-envelope"></i></a>
				</span>
			</div>
		</div>
	</div>
	<div class="topBar">
		<div class="container">
			<div class="logo"><img src="<?php bloginfo('template_url') ?>/img/logo.png"></div>
			<div class="fRight">
				<div class="menuTopo">
					<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
				</div>
			</div>
		</div>
	</div>