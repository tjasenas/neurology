<?php
/*
Template Name: Page simple
*/
get_header(); ?>

<section class="container">
    <?php
        if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
    ?>
    <h1 class="page-title"><?php the_title() ?></h1>
    <div class="simple-content">
        <?php the_content() ?>
    </div>
</section>


<?php get_footer() ?>