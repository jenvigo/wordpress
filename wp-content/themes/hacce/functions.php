<?php
function wpb_bg() {
    $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    $color ='#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].
        $rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
    echo $color;
}
function materialwp_scripts(){
    wp_enqueue_style( 'hacce-style', get_template_directory_uri() . '/css/custom.css' );
}

add_action( 'wp_enqueue_scripts', 'materialwp_scripts' );


add_filter( 'manage_page_posts_columns', 'smashing_filter_posts_columns' );
function smashing_filter_posts_columns( $columns ) {
    $columns['imagen_contra'] = __( 'imagen contra' );
//    $columns['price'] = __( 'Price', 'smashing' );
//    $columns['area'] = __( 'Area', 'smashing' );
    return $columns;
}


// ADD NEW COLUMN
function v2008_c_head($defaults) {
    $column_name = 'imagendos';//column slug
    $column_heading = 'imagendos';//column heading
    $defaults[$column_name] = $column_heading;
    return $defaults;
}

// SHOW THE COLUMN CONTENT
function v2008_c_content($name, $post_ID) {
    $column_name = 'imagendos';//column slug
    $column_field = 'imagendos';//field slug
    if ($name == $column_name) {
        $post_meta = get_post_meta($post_ID,$column_field,true);
        if ($post_meta) {
            echo $post_meta;
        }
    }
}

// ADD STYLING FOR COLUMN
function v2008_c_style(){
    $column_name = 'imagendos';//column slug
    echo "<style>.column-$column_name{width:10%;}</style>";
}

add_filter('manage_page_posts_columns', 'v2008_c_head');
add_action('manage_page_posts_custom_column', 'v2008_c_content', 10, 2);
add_filter('admin_head', 'v2008_c_style');