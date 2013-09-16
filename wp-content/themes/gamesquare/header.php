<!DOCTYPE html>
<html>
	<head>
		<title> 
			<?php
				wp_title('|', true, 'right');
				bloginfo('name');  
			?>
		</title>

		
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/style.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/skeleton.css">
		<?php wp_head(); ?>  <!-- 1. check if theme supports the hook, 2. bring in information we can define. 3. plugins usually need this to install stuff --> 

	</head>

	<body>
		<div class="container">
			<header>			
				<div class="five columns clearfix logo">
					<a href="<?php echo get_option ('home'); ?>"> <img src="<?php bloginfo('template_url');?>/img/logo.png" title="<?php bloginfo('title')?>"/> </a>
				</div> 
				<div class="main-nav sixteen columns" id="show-nav"><a href="#">Toggle Navigiation</a></div>
				<div class="sixteen columns nav-bar"> 
					<?php wp_nav_menu( array('container_class' => 'main-nav', 'container' => 'nav')); ?>
				</div> 
			</header> 

