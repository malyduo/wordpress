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

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous" />

        <!-- FONTAWESOME -->
        <script defer src="<?php echo get_template_directory_uri(); ?>/js/fontawesome.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>

        <!-- FONTAWESOME ANIMATION -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-animation.min.css">
		
		<!-- SLICK -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>

        <!-- STYLE CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    </head>

    <body>
        <nav class="navbar navbar-expand-md fixed-top">
            <a class="navbar-brand" href="tel:791244288">
                <span>Zadzwoń teraz</span>
                <h3>791 244 288</h3>
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
                    'menu_class' => 'navbar-nav ml-auto',
                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                    'walker' => new wp_bootstrap_navwalker())
                );
                ?>
            </div>
        </nav>
        <?php
        if (is_home()) {
            ?>
            <section class="header" id="particles-js">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="logo img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" />
                        </div>
                    </div>
                </div>
            </section>
            <?php } else {
            ?>
            <section class="header-page" id="particles-js">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="logo img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" />
                        </div>
                    </div>
                </div>
            </section>
        <?php }
        ?>
        