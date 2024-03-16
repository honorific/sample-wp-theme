<!DOCTYPE html>
<html>
<head>
	<title>
	<?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
	echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
	echo ' | ' . sprintf( __( 'Page %s', 'mytheme' ), max( $paged, $page ) );
	?>
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="header">
		<div class="wrapper">
			<div class="row">
				<nav id="desktop-nav">
					<ul>
						<li><a href="#">خانه</a></li>
						<li><a href="#">فروشگاه</a></li>
						<li><a href="#">محصولات</a></li>
						<li><a href="#">تماس با ما</a></li>
					</ul>
				</nav>
				<nav id="mobile-nav">
					<span class="mobile-nav-open"></span>
					<ul>
						<span class="mobile-nav-close"></span>
						<li><a href="#">خانه</a></li>
						<li><a href="#">فروشگاه</a></li>
						<li><a href="#">محصولات</a></li>
						<li><a href="#">تماس با ما</a></li>
					</ul>
				</nav>
				<form>
					<input type="text" name="s">
					<span class="search-icon"></span>
				</form>
				<div class="header-icons">
					<a href="#"></a>
					<a href="https://iziflor.com/my-account/"></a>
				</div>
				<div id="header-title" class="col-lg-5">
					<h1>
						<p>عزیزانتان</p>
						<p>گل دوست دارند</p>
					</h1>
					<p class="header-subtitle">از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در همان حال کار آنها به نوعی وابسته به متن می‌باشد</p>
				</div>
				<div class="stand-flower-big"></div>
				<div class="stand-flower-small"></div>
			</div>
		</div>
	</header>