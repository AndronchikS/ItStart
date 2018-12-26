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
                            <ul class="main-menu">
                                <li class="menu-item"><a class="active" href="index.php#slider">Home</a></li>
                                <li class="menu-item"><a href="index.php#services">Services</a></li>
                                <li class="menu-item"><a href="index.php#about">About Us</a></li>
                                <li class="menu-item"><a href="index.php#works">Portfolio</a></li>
                                <li class="menu-item"><a href="index.php#blog">Blog</a></li>
                                <li class="menu-item"><a href="index.php#contact">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>