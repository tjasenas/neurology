<?php
/*
Template Name: Offer page
*/
get_header(); ?>

<section class="container offer-page">
    <aside class="page-side-navi">
        <?php wp_nav_menu( array(
            'theme_location'    => "side_menu",
            'menu_class'        => "side-menu",
            'container'	=> "",
            ) );
        ?>
    </aside>
    <article>
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
        ?>
        <h1 class="page-title"><?php the_title() ?></h1>
        <div class="page-content">
            <?php the_content() ?>
        </div>
        <div class="important-info">
            <?php  dynamic_sidebar( 'important_info' ); ?>
        </div>
        <div class="about-widget">
            <?php  dynamic_sidebar( 'about_doctor' ); ?>
        </div>
    </article>
</section>

<?php get_footer() ?>