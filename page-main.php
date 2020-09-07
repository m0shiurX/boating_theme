<?php
/* 
* Template Name: Main Page Template
*/
?>

<?php get_header(); ?>
<body <?php body_class() ?>>

<?php get_template_part('intro'); ?>

    <div class="container my-5">
        <?php the_field("about_us"); ?>
    </div>
    <div class="container">
        <div class="row  justify-content-center">
            <h2 class="display-4"><?php the_field("services_title"); ?></h2>
        </div>
        <div class="row">
            <?php if( have_rows('services') ): ?>
                <?php while( have_rows('services') ): the_row(); ?>
                    <div class="col">
                        <h1><?php the_sub_field('heading'); ?></h1>
                        <p> <?php the_sub_field('description'); ?></p>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>


<?php get_footer(); ?>