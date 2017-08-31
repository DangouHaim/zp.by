<?
function CityHtml($posts){
    $content = '';
    foreach($posts as $post){
        $content .= $post->post_content;
    }
    return $content;
}

add_action('wp_ajax_getByCity', 'getByCity');
add_action('wp_ajax_nopriv_getByCity', 'getByCity');


function getByCity()
{
    $reset = $_POST['reset'];
    if(!$reset) {
        $city = $_POST['city'];
        if(empty($city)){
            wp_send_json(array('status' => 'error'));
        }
        $args = array( 'posts_per_page' => 0, 'post_type'=> 'city_mark', 'tax_query' => array(
            array(
                'taxonomy' => 'filter_cities',
                'field' => 'term_id',
                'terms' => array($city),
                )
            ));
    }
    else {
        $args = array( 'posts_per_page' => 0, 'post_type'=> 'city_mark', 'tax_query' => array(
            array(
                'operator' => 'AND',
                'taxonomy' => 'filter_cities',
                'field' => 'term_id',
                'terms' => array(),
                )
            ));
    }
    $posts = get_posts( $args );
    $content = CityHtml( $posts );
    die(wp_send_json(array('status' => 'success','content' => $content)));
}