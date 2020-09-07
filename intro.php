<?php if(get_header_image()){ ?>
    <div class="container-fluid p-0">
        <img src="<?php header_image(); ?>" class="img-fluid header_image">
    </div>
<?php } ?>

<div class="container">
    <div class="jumbotron mt-3">
            <?php
                if(current_theme_supports('custom-logo')){
                    
                    the_custom_logo();
                }
            ?>
        <h3 class="display-4">
            <a href="<?php echo site_url() ?>"> <?php bloginfo("name") ?></a>
        </h3>
        <p class="lead"><?php bloginfo("description") ?></p>
        <hr class="my-2">
        <div class="navigation">
            <?php
                wp_nav_menu([
                    'theme_location' => 'top_menu',
                    'menu_class' => 'nav',
                    'menu_id' => 'top_menu',
                    'container_class' => ''
                ]);
            ?>
        </div>
    </div>
    
</div>