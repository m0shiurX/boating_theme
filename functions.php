<?php 

function boating_initialize(){
    load_theme_textdomain("boating");
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");

    register_nav_menu("top_menu", __("Top Menu", "boating"));
}
add_action("after_setup_theme", "boating_initialize");



// Adding assets
function boating_assets(){
    // wp_enqueue_style("boating", get_stylesheet_uri());
    wp_enqueue_style("bootstrap", "//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css", '', '4.5.2');
    wp_enqueue_style("boating_main", get_template_directory_uri()."/assets/main.css");
}

add_action("wp_enqueue_scripts", "boating_assets");


function boating_menu_item_class($classes, $item){
    $classes[] = "nav-item mr-3";
    return $classes;
}
add_filter( "nav_menu_css_class", "boating_menu_item_class", 10, 2 );


function boating_widgets(){
    register_sidebar([
        "name" => __("Footer Left Widget", "boating"),
        "id"   => "footer_left_widget",
        "before_widget" => '<div class="before_widget">',
        "after_widget" => '</div>',
    ]);
    register_sidebar([
        "name" => __("Footer Right Widget", "boating"),
        "id"   => "footer_right_widget",
        "before_widget" => '<div class="before_widget">',
        "after_widget" => '</div>',
    ]);
    
}

add_action("widgets_init", "boating_widgets");