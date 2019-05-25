<section class="kontakt-front">
    <div class="container content">
        <div class="row">
            <div class="col-md-9">
                <h3>Chcesz umówić się na wizytę lub dowiedzieć się więcej?</h3>
            </div>
            <div class="col-md-3">
                <a href="<?php bloginfo('url'); ?>/kontakt" class="btn btn-contact faa-parent animated-hover"><i class="fas fa-phone faa-pulse"></i> Skontaktuj się z nami</a>
            </div>
        </div>
    </div>
</section>
<?=
( is_home()) ? '<div id="map"></div>' : '';
?>
<section class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-xs-12 logo">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/logo_footer.png" />
            </div>
            <div class="col-md-3 col-xs-12 content">
                <h3 class="title">Skontaktuj się z nami</h3>
                <table class="table">
                    <tbody> 
                        <tr>
                            <td class="text-right"><i class="fas fa-map-marker-alt fa-4x faa-bounce animated"></i></td>
                            <td>
                                <h3>ul. Kaczeńcowa 10/1A</h3>
                                <span>Lublin, os.Czuby</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right"><i class="fas fa-mobile-alt fa-4x faa-ring animated"></i></td>
                            <td>
                                <h3>791 244 288</h3>
                                <span>Zadzwoń i umów się na wizytę!</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3 col-xs-12 content">
                <h3 class="title">Godziny otwarcia</h3>
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-right"><i class="far fa-clock fa-4x"></i></td>
                            <td>
                                <span>Poniedziałek - Piątek</span>
                                <h3>8:00 - 18:00</h3>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right"><i class="far fa-clock fa-4x"></i></td>
                            <td>
                                <span>Sobota</span>
                                <h3>10:00 - 14:00</h3>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3 col-xs-12 content">
                <h3 class="title">Bądź na bieżąco</h3>
                <a href="https://web.facebook.com/lublin.salonkosmetyczny" class="media-link" target="_blank">
                    <img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/logo_facebook.png">
                </a>
                <a href="https://lavito.pl/montownia-urody-salon-kosmetyczny" class="media-link" target="_blank">
                    <img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/logo_lavito.png">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- BOOTSTRAP -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<!--TO TOP-->
<script src="<?php echo get_template_directory_uri(); ?>/js/totop.js"></script>

<!--PARALLAX JS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.min.js"></script>

<!--SMOOTH SCROLL-->
<script src="<?php echo get_template_directory_uri(); ?>/js/smoothscroll.min.js"></script>

<!-- PARTICLES JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/particles.min.js"></script>

<!--SLICK-->
<script defer src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>

<!--MAIN INIT-->
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkip3-bZ-sHz33uyXQ9Ki6JvU_dtdrlGA&callback=initMap"
async defer></script>
<?php wp_footer(); ?>
</body>
</html>