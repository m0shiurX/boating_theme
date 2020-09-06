<?php get_header(); ?>
<body <?php body_class() ?>>

<?php get_template_part('intro'); ?>

    <div class="container posts">
        <?php
            while(have_posts()):
                the_post();
                ?>
            <div <?php post_class() ?>>
                <div class="row">
                    <div class="col-4">
                        <?php
                            if(has_post_thumbnail()){
                                //$thumbnail_url = get_the_post_thumbnail_url(null, 'medium' );
                                the_post_thumbnail("medium", ["class" => "img-fluid"]);
                            }
                        
                        ?>
                    </div>
                    <div class="col-8">
                        <h2> <a href="<?php the_permalink(); ?>"> <?php the_title() ?></a></h2>
                        <i><?php echo get_the_date(); ?></i>
                        <h5><?php the_author() ?></h5>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>
            </div>
        <?php
            endwhile;
        ?>
    </div>


<?php get_footer(); ?>