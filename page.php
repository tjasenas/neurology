<?php get_header() ?>


    
    <section class="container single-page">
        <aside class="page-side-navi">
            <?php wp_nav_menu( array(
                'theme_location'    => "side_menu",
                'menu_class'        => "side-menu",
                'container'	=> "",
                ) );
            ?>
        </aside>
        <article>
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