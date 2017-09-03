<?
function to_html_slide($posts){
    $content = '';
    foreach($posts as $post){
        $content .= $post->post_content;
    }
    return $content;
}

add_action('wp_ajax_getByID', 'getByID');
add_action('wp_ajax_nopriv_getByID', 'getByID');


function getByID()
{
    $reset = $_POST['reset'];
    if(!$reset) {
        $id = $_POST['id'];
        if(empty($id)){
            wp_send_json(array('status' => 'error'));
        }
        $args = array( 'posts_per_page' => 0, 'post_type'=> 'slider', 'tax_query' => array(
            array(
                'operator' => 'AND',
                'taxonomy' => 't_slider',
                'field' => 'term_id',
                'terms' => array($id),
                )
            ));
    }
    else {
        $args = array( 'posts_per_page' => 0, 'post_type'=> 'slider');
    }
    $posts = get_posts( $args );
    $content = to_html_slide( $posts );
    die(wp_send_json(array('status' => 'success','content' => $content)));
}