<?php 

function boating_initialize(){
    load_theme_textdomain("boating");
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    
}
add_action("after_setup_theme", "boating_initialize");



// Adding assets
function boating_assets(){
    // wp_enqueue_style("boating", get_stylesheet_uri());
    wp_enqueue_style("bootstrap", "//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css", '', '4.5.2');
    wp_enqueue_style("boating_main", get_template_directory_uri()."/assets/main.css");
}

add_action("wp_enqueue_scripts", "boating_assets");

