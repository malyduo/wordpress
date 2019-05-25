<?php
if (ICL_LANGUAGE_CODE == 'pl') {
    $copyright = 'Wszelkie prawa zastrzeżone.';
    $company_header = 'Firma';
    $links_header = 'Skocz do';
    $contact_header = 'Kontakt';
    $contact_country = 'Polska';
} elseif (ICL_LANGUAGE_CODE == 'en') {
    $copyright = 'All rights reserved.';
    $company_header = 'About us';
    $links_header = 'Check it';
    $contact_header = 'Contact us';
    $contact_country = 'Poland';
}
?>
<section class="footer info">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo_simple.png" class="img-fluid" alt="montownia stron"/>
            </div>
            <div class="col-md-3">
                <?php if (is_active_sidebar('footer-about-sidebar')) { ?>
                    <?php dynamic_sidebar('footer-about-sidebar'); ?>
                <?php } ?>
            </div>
            <div class="col-md-3">
                <h4 class="column-title"><?= $links_header ?></h4>
                <?php
                wp_nav_menu(array(
                    'menu' => 'primary',
                    'theme_location' => 'footer-menu',
                    'depth' => 1,
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => 'list-unstyled menu-footer',
                        )
                );
                ?>
            </div>
            <div class="col-md-3">
                <h4 class="column-title"><?= $contact_header ?></h4>
                <div class="contact-item d-flex">
                    <div class="contact-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon_marker.png" />
                    </div>
                    <p>ul. Tatarakowa 2/24<br/>20-541 Lublin, <?= $contact_country ?></p>
                </div>
                <div class="contact-item d-flex">
                    <div class="contact-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon_phone.png" />
                    </div>
                    <p><a href="phone:+48791220227">+48 791 220 227</a></p>
                </div>
                <div class="contact-item d-flex">
                    <div class="contact-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon_email.png" />
                    </div>
                    <p><a href="mailto:biuro@montownia-stron.pl">biuro@montownia-stron.pl</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="footer copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-auto">
                &copy; <?= date('Y'); ?> Montownia Stron. <?= $copyright ?>
            </div>
            <div class="col-md-6 social my-auto">
                <a href="https://www.facebook.com/montownia.stron.lublin/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/montownia.stron/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- BOOTSTRAP -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" crossorigin="anonymous"></script>

<!-- TO TOP -->
<script src="<?php echo get_template_directory_uri(); ?>/js/totop.js"></script>

<!--Filterizr-->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.filterizr.min.js"></script>

<!-- SMOOTH SCROLL -->
<!--<script src="<?php echo get_template_directory_uri(); ?>/js/smoothscroll.min.js"></script>-->

<!--PARTICLES JS-->
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<!--SLICK-->
<script src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>

<!--SLICK-->
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.min.js"></script>

<!--WOW-->
<script defer src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>

<!--TYPED JS-->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>

<!--COUNTER -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.counterup.min.js"></script>

<!-- MAIN INIT -->
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>

<?php wp_footer(); ?>
</body>
</html>