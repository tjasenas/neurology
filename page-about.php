<?php
/*
Template Name: Page about
*/
get_header(); ?>

<section class="container">
    <h1 class="page-title"><?php the_title() ?></h1>
    <div class="simple-content">
        <?php the_content() ?>
    </div>
</section>



<?php get_footer() ?>