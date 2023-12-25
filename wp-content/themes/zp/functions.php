<?
session_start();

$_SESSION['blog_meta'] = array(
    'work_time' => 'Обслуживание круглосуточно',
    'address' => '123 Main Street Cityville, State 98765 Countryland',
    'phone_code' => '+375 29',
    'phone' => '111-11-11',
    'star_rating' => array(
        0 => array(
            'count' => '10',
            'description' => 'Some description',
        ),
        1 => array(
            'count' => '20',
            'description' => 'Some description',
        ),
        2 => array(
            'count' => '30',
            'description' => 'Some description',
        ),
        3 => array(
            'count' => '40',
            'description' => 'Some description',
        ),
    ),
);

require( get_template_directory() . '/inc/php/includes.php' );
require( get_template_directory() . '/inc/php/taxanomy.php' );
require( get_template_directory() . '/inc/php/metaboxes.php' );
require( get_template_directory() . '/inc/php/ajax-handler.php' );
add_theme_support( 'post-thumbnails' );