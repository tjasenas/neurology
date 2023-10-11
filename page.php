<?php get_header(); ?>

<article class="container">
    <?php
        if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
    ?>
    <h1 class="page-title"><?php the_title() ?></h1>
    <div>
        <?php the_content() ?>
    </div>
</article>


<?php get_footer() ?>