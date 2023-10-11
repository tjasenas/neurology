<?php
/*
Template Name: Front page
*/
get_header(); ?>

<section class="container">
    <div class="content-wrapper">
        <div class="about-person">
            <?php  dynamic_sidebar( 'about-doctor' ); ?>
        </div>
            
        <div class="cards-wrapper">
            <div class="single-card">
                <?php  dynamic_sidebar( 'sidebar-1' ); ?>
            </div>     
            <div class="single-card">
                <?php  dynamic_sidebar( 'sidebar-1' ); ?>
            </div>     
            <div class="single-card">
                <?php  dynamic_sidebar( 'sidebar-1' ); ?>
            </div>     
            <div class="single-card">
                <?php  dynamic_sidebar( 'sidebar-1' ); ?>
            </div>     
        </div>
    </div>

    <div class="block-grid">
        <div class="map">
            <h3>Klinika galite rasti</h3>
            <?php  dynamic_sidebar( 'map' ); ?>
        </div>
        <div class="contact-form">
            <h3>Susisiekime</h3>
            <?php  dynamic_sidebar( 'contact-form' ); ?>
        </div>
    </div>
</section>





<?php get_footer() ?>