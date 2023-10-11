<?php
/*
Template Name: Contact page
*/
get_header(); ?>

<section class="container">
    <?php
        if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
    ?>
    <h1 class="page-title"><?php the_title() ?></h1>
    <div class="ct-page-grid contact-form ">
        <?php  dynamic_sidebar( 'contact-form' ); ?>
        <ul class="ct-other">
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/location.png" alt="">
                <span>Draugystės g. 17-1, LT-51229</span>
                <p>Kaunas</p>
            </li>
            <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.png" alt="">
                <span>Suskite el. laiškus adresu:</span>
                <a href="mailto:info@vastata.lt">info@vastata.lt</a>
            </li>
            <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt="">
                <span>Jai norite susisiekti telefonu:</span>
                <a href="tel:+370 615 95928">+370 615 95928</a>
            </li>
            <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/time.png" alt="">
                <span>Darbo laikas:</span>
                <p>Pir-Pen:8:00 iki 19.00 val.</p>
            </li>
        </ul>
    </div>
    <div class="contact-map">
        <?php  dynamic_sidebar( 'map' ); ?>
    </div>
</section>



<?php get_footer() ?>