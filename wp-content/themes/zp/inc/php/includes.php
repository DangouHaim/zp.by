<?

function themePath () {
	return get_template_directory_uri();
}

add_action( 'wp_enqueue_scripts', 'init_page_data' );

function init_page_data () {
	wp_register_script( "template-script", get_template_directory_uri() . "/inc/js/template.js", "jquery", false, true );
	load_data();
}

function load_data () {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( "template-script" );

	/*
	if ( is_page_template( 'template-name.php' ) ) {
	    wp_enqueue_style( $handle );
	}
	*/
}