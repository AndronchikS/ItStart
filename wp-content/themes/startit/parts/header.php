<!DOCTYPE html>
<html lang=<?php echo bloginfo('language'); ?>>
    <head>
        <!-- Meta Tags -->
        <meta charset=<?php echo bloginfo('charset'); ?>>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Carrby - Agency Template">
        <meta name="author" content="">

        <!-- Page Title -->
        <title><?php bloginfo('name');?></title>

        <!-- Favicon and Touch Icons -->
        <link href=<?php echo bloginfo('template_directory') . "/images/favicon.png" ?> rel="shortcut icon" type="image/png">
        <?php wp_head();?>
    </head>

    <body>
        <!-- Start Header -->
        <header id="header" class="header">
            <div class="navigation">
                <div class="container">
                    <nav id="flexmenu">
                        <div class="logo">
                            <a href="index.php"><img src=<?php echo bloginfo('template_directory') . "/images/logo.png" ?> alt="logo"></a>
                        </div>
                        <div class="nav-inner">
                            <div id="mobile-toggle" class="mobile-btn"></div>
                            <?php
if (has_nav_menu('menutop')) {
	wp_nav_menu(array(
		'theme_location' => 'menutop',
		'menu_class' => 'main-menu',
		'container' => false,
	));
}
?>
                        </div>
                    </nav>
                </div>
            </div>
        </header>