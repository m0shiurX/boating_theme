<?php get_header(); ?>
<body <?php body_class() ?>>

<?php get_template_part('intro'); ?>

    <div class="container posts">
        <?php
            while(have_posts()): the_post(); ?>
            <div <?php post_class() ?>>
                <div class="row">
                    <div class="col-12 my-3">
                        <?php
                            if(has_post_thumbnail()){
                                the_post_thumbnail("large", ["class" => "img-fluid"]);
                            }
                        
                        ?>
                    </div>
                    <div class="col-12 my-3">
                        <h1 class="text-uppercase"><?php the_title() ?></h1>
                        <h5><i> On <?php echo get_the_date(); ?></i> by <?php echo get_the_author_meta("first_name") ?></h5>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
        <?php
            endwhile;
        ?>
    </div>


<?php get_footer(); ?>