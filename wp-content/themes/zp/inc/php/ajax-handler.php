<?
function to_html_post($posts){
    $content = '';
    foreach($posts as $post){
        $content .= '

        <div class="col-md-3 col-sm-6">
            <div class="service-item">
                <a href="' . get_permalink($post->ID) . '" class="service-item-image" style="background-image: url(' . get_the_post_thumbnail_url($post->ID, "full") . ');">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
                <h4>' . $post->post_title . '</h4>
                <div class="service-item-stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <div class="service-item-price">
                    <i class="fa fa-tags" aria-hidden="true"></i> от <span>' . $post->post_excerpt . '</span> бр
                </div>
                <a href="' . get_permalink($post->ID) . '" class="button">Подробнее</a>
            </div>

        </div>';
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
        $args = array( 'posts_per_page' => 0, 'post_type'=> 'post', 'tax_query' => array(
            array(

                'taxonomy' => 't_post',
                'field' => 'term_id',
                'terms' => array($id),
                )
            ));
    }
    else {
        $args = array( 'posts_per_page' => 0, 'post_type'=> 'post');
    }
    $posts = get_posts( $args );
    $content = to_html_post( $posts );
    die(wp_send_json(array('status' => 'success','content' => $content)));
}







function to_html_filter_args($id){
    $content = '';

    if(count($id) > 0) {
        $activeClass = "active";

        $arg = array(
            'taxonomy' => 't_post',
            'hide_empty' => true,
            'parent' => $id
            );
        $data = get_terms($arg);

        if(count($data) > 0) {
            $content .=  "<select class='main-filter' onchange='changeHandler();'>";
            $content .=  "<option class='filter-item active' value=''>Нет</option>";
            foreach ($data as $d) {
                $content .=  "<option class='filter-item {$activeClass}' value='{$d->term_id}'>{$d->name}</option>";
            }
            $content .=  "</select>";
        }

    }


    return $content;
}

add_action('wp_ajax_getMoreFilterArgs', 'getMoreFilterArgs');
add_action('wp_ajax_nopriv_getMoreFilterArgs', 'getMoreFilterArgs');

function getMoreFilterArgs()
{
    $id = $_POST['id'];
    if(empty($id)){
        wp_send_json(array('status' => 'error'));
    }

    $content = to_html_filter_args($id);

    die(wp_send_json(array('status' => 'success','content' => $content)));
}