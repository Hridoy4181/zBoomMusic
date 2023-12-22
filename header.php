<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="author" content="Hridoy">
	
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- CSS
  ================================================== -->
	  <!-- <link rel="stylesheet" href="<?php // echo esc_url( get_template_directory_uri() ); ?>/css/zerogrid.css"> -->
	<!-- <link rel="stylesheet" href="<?php // echo esc_url( get_template_directory_uri() ); ?>/css/style.css"> -->
	<!-- <link rel="stylesheet" href="<?php // echo esc_url( get_template_directory_uri() ); ?>/css/responsive.css"> -->
	<!-- <link rel="stylesheet" href="<?php // echo esc_url( get_template_directory_uri() ); ?>/css/responsiveslides.css" /> -->

	<!-- no need to take the below CSS in the function.php file -->
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

	<!--[if lt IE 8]>
	   <div style=' clear: both; text-align:center; position: relative;'>
		 <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
		   <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
		</a>
	  </div>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='.<?php esc_url( get_template_directory_uri() ); ?>//images/favicon.ico' rel='icon' type='image/x-icon'/>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	</script>

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >
<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">
		<div id="logo"><a href="<?php bloginfo( 'home' ); ?>"><img src="<?php global $zboom;
		echo $zboom['logo-upload']['url']; ?>"/></a></div>

		<!-- to get the search option (WordPress's default function) but we will not use this function in this theme -->
		<?php // get_search_form(); ?>

		<div id="search">
			<div class="button-search"></div>
			<!-- We are adding HTML form before and after the input which was already created in this theme -->
			<form method="GET" action="<?php esc_url( bloginfo( 'home' ) ); ?>">
				<!-- Adding s as name's value in the input to display the exact search result -->
				<input name="s" type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
			</form>
		</div>
	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
		<div class="menu">
			<!-- function for securing the nav menu function if it gets changed sometime -->
			<?php
			if ( function_exists( 'wp_nav_menu' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'main-menu',
					)
				);
			}

			?>

		</div>
		
		<!-- <div class="minimenu"><div>MENU</div>
			<select onchange="location=this.value">
				<option></option>
				<option value="index.html">Home</option>
				<option value="blog.html">Blog</option>
				<option value="gallery.html">Gallery</option>
				<option value="single.html">About</option>
				<option value="contact.html">Contact</option>
			</select>
		</div>		 -->
	</div>
</nav>
