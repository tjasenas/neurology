    </main>

    <footer class="footer">
        <div class="container blocks-wrapper">
            <div class="footer-block">
                <?php  dynamic_sidebar( 'footer_img' ); ?>
            </div>
            <div class="footer-block">
                <h4>Navigacija</h4>
                <?php wp_nav_menu( array(
                    'theme_location'    => "footer_navi",
                    'menu_class'        => "footer-links",
                    'container'	=> "",
                    ) );
                ?>
            </div>
            <div class="footer-block">
                <h4>Naudingo nuorodos</h4>
                <?php wp_nav_menu( array(
                    'theme_location'    => "useful_links",
                    'menu_class'        => "footer-links",
                    'container'	=> "",
                    ) );
                ?>
            </div>
            <div class="footer-block">
            <h4>Kontaktai</h4>
            <?php wp_nav_menu( array(
                    'theme_location'    => "footer_contacts",
                    'menu_class'        => "footer-links",
                    'container'	=> "",
                    ) );
                ?>
            </div>
                <div class="arrow-top">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                    </svg>
                </div>
        </div>
        <div class="copyright">
        <div class="container">
                <p>neurology.lt © 2023 Visos teisės saugomos</p>
                <a class="fb" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fb.png" alt=""></a>
            </div>
        </div>
    </footer>


    <div class="overlay"></div>
    
    
    
    

<?php wp_footer() ?>
</body>
</html>