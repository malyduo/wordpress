<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php
            global $page, $paged;

            wp_title('|', true, 'right');

            bloginfo('name');

            $site_description = get_bloginfo('description', 'display');

            if ($site_description && ( is_home() || is_front_page() ))
                echo " | $site_description";

            if ($paged >= 2 || $page >= 2)
                echo ' | ' . sprintf(__('Page %s', 'toolbox'), max($paged, $page));
            ?></title>
        <?php wp_head(); ?>

        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&amp;subset=latin-ext" rel="stylesheet">
        
        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" />

        <!-- STYLE CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />

        <!-- FONTAWESOME -->
        <script defer src="<?php echo get_template_directory_uri(); ?>/js/fontawesome.js"></script>

        <!-- ANIMATE CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css"/>
        
        <!-- FONTAWESOME ANIMATION CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-animation.min.css"/>

        <!-- SLICK -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
    </head>

    <body id="top">
        <nav class="menu navbar navbar-expand-md fixed-top">
            <div class="container">
                <a class="navbar-brand" href="<?= bloginfo('url'); ?>">
                    <img class="logo img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <?php
                    wp_nav_menu(array(
                        'menu' => 'primary',
                        'theme_location' => 'header-menu',
                        'depth' => 2,
                        'container' => '',
                        'container_class' => '',
                        'container_id' => '',
                        'menu_class' => 'nav navbar-nav ml-auto',
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        'walker' => new wp_bootstrap_navwalker())
                    );
                    ?>
                </div>
            </div>
        </nav>
