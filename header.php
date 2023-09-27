<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class('flex flex-col h-screen') ?>>
<?php wp_body_open(); ?>
    <div class="mob-wrapper">
        <div class="mob-wrapper__header">
            <h4>Navigacija</h4>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close-navi">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
        <nav class="nav-block">
            <?php wp_nav_menu( array(
                'theme_location'    => "header",
                'menu_class'        => "mob-navi",
                'container'	=> "",
                ) );
            ?>
        </nav>
    </div>
    <header class="header">
        <div class="container">
		    <?php echo get_custom_logo(); ?>
            <div class="header__actions">
                <?php wp_nav_menu( array(
                    'theme_location'    => "header", 
                    'menu_class'        => "navi", 
                    ) );
                ?>
                <a class="header__call-btn" href=""><img src="<?php echo get_template_directory_uri() ?>/assets/img/call.png" /></a>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="open-navi">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                </svg>
            </div>
        </div>
    </header>
    <main class="main">