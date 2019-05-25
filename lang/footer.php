<?php
if (ICL_LANGUAGE_CODE == 'pl') {
    $zaufali_nam = 'ZAUFALI NAM';
} elseif (ICL_LANGUAGE_CODE == 'it') {
    $zaufali_nam = 'Ci hanno scelto';
} elseif (ICL_LANGUAGE_CODE == 'es') {
    $zaufali_nam = 'Nuestros clientes';
} elseif (ICL_LANGUAGE_CODE == 'en') {
    $zaufali_nam = 'Trusted by';
}
?>
<section class="partners">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="title text-uppercase"><?= $zaufali_nam ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 items">
                <div class="partners-slider">
                    <a href="#" title=""><img class = "partners-slide img-fluid d-block mx-auto" src = "<?php echo get_template_directory_uri(); ?>/images/partners/montownia.png" /></a>
                    <a href="#" title=""><img class = "partners-slide img-fluid d-block mx-auto" src = "<?php echo get_template_directory_uri(); ?>/images/partners/montownia.png" /></a>
                    <a href="#" title=""><img class = "partners-slide img-fluid d-block mx-auto" src = "<?php echo get_template_directory_uri(); ?>/images/partners/montownia.png" /></a>
                    <a href="#" title=""><img class = "partners-slide img-fluid d-block mx-auto" src = "<?php echo get_template_directory_uri(); ?>/images/partners/montownia.png" /></a>
                    <a href="#" title=""><img class = "partners-slide img-fluid d-block mx-auto" src = "<?php echo get_template_directory_uri(); ?>/images/partners/montownia.png" /></a>
                    <a href="#" title=""><img class = "partners-slide img-fluid d-block mx-auto" src = "<?php echo get_template_directory_uri(); ?>/images/partners/montownia.png" /></a>
                    <a href="#" title=""><img class = "partners-slide img-fluid d-block mx-auto" src = "<?php echo get_template_directory_uri(); ?>/images/partners/montownia.png" /></a>
                    <a href="#" title=""><img class = "partners-slide img-fluid d-block mx-auto" src = "<?php echo get_template_directory_uri(); ?>/images/partners/montownia.png" /></a>
                    <a href="#" title=""><img class = "partners-slide img-fluid d-block mx-auto" src = "<?php echo get_template_directory_uri(); ?>/images/partners/montownia.png" /></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo do_shortcode('[google_map_easy id="1"]') ?>
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                if (ICL_LANGUAGE_CODE == 'pl') {
                    $regulamin = 74;
                } elseif (ICL_LANGUAGE_CODE == 'it') {
                    $regulamin = 76;
                } elseif (ICL_LANGUAGE_CODE == 'es') {
                    $regulamin = 78;
                } elseif (ICL_LANGUAGE_CODE == 'en') {
                    $regulamin = 80;
                }
                $page_regulamin = get_post($regulamin);
                $page_regulamin_title = $page_regulamin->post_title;
                $page_regulamin_content = $page_regulamin->post_content;
                ?>
                <a href="#" data-toggle="modal" data-target="#regModal"><?= $page_regulamin_title ?></a>
                <!-- The Modal -->
                <div class="modal fade" id="regModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title"><?= $page_regulamin_title ?></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <?= $page_regulamin_content ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 copyright">
                &copy; 2018 Langue. Wszelkie prawa zastrzeżone. Projekt i realizacja: <a href="http://montownia-stron.pl" target="_blank">Montownia-Stron</a>
            </div>
        </div>
    </div>
</section>

<!-- BOOTSTRAP -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<!-- TO TOP -->
<script src="<?php echo get_template_directory_uri(); ?>/js/totop.js"></script>

<!-- SMOOTH SCROLL -->
<script src="<?php echo get_template_directory_uri(); ?>/js/smoothscroll.min.js"></script>

<!--SLICK-->
<script src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>

<!--WOW-->
<script defer src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>

<!-- MAIN INIT -->
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>

<?php wp_footer(); ?>
</body>
</html>