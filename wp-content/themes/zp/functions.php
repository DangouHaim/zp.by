<?

function themePath () {
	return get_template_directory_uri();
}

add_action( 'wp_enqueue_scripts', 'init_page_data' );

function init_page_data () {
	wp_register_style( "header-sass-style", get_template_directory_uri() . "/inc/css/header.css" );
	wp_register_style( "main-sass-style", get_template_directory_uri() . "/inc/css/main.css" );

	wp_register_style( "header-style", get_template_directory_uri() . "/css/header.min.css" );
	wp_register_style( "main-style", get_template_directory_uri() . "/css/main.min.css" );
	wp_register_style( "fonts-style", get_template_directory_uri() . "/css/fonts.min.css" );

	wp_register_script( "libs-script", get_template_directory_uri() . "/js/libs.js", "jquery", false, true );
	wp_register_script( "common-script", get_template_directory_uri() . "/js/common.js", "jquery", false, true );
	load_data();
}

function load_data () {
	wp_enqueue_style("header-sass-style");
	wp_enqueue_style("main-sass-style");

	wp_enqueue_style("header-style");
	wp_enqueue_style("main-style");
	wp_enqueue_style("fonts-style");

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( "libs-script" );
	wp_enqueue_script( "common-script" );
}

/*
$handle = 'wpdocs';
wp_register_style( $handle, get_stylesheet_directory_uri().'/relative/path/to/stylesheet.css', array(), '', true );
if ( is_page_template( 'template-name.php' ) ) {
    wp_enqueue_style( $handle );
}
*/