<?php get_header(); ?> 
<?php
if (ICL_LANGUAGE_CODE == 'pl') {
    $usluga = 'Kompleksowa usługa';
    $ceny = 'Konkurencyjne ceny';
    $satysfakcja = '100% satysfakcji';
    $sztuka_tlumaczenia = 'Sztuka tłumaczenia';
} elseif (ICL_LANGUAGE_CODE == 'it') {
    $usluga = 'Servizio completo';
    $ceny = 'Prezzi competitivi';
    $satysfakcja = 'Soddisfazzione al 100%';
    $sztuka_tlumaczenia = 'Traduciamo il mondo';
} elseif (ICL_LANGUAGE_CODE == 'es') {
    $usluga = 'Servicio completo';
    $ceny = 'Precios competitivos';
    $satysfakcja = 'Satisfacción al 100%';
    $sztuka_tlumaczenia = 'Traducimos el mundo';
} elseif (ICL_LANGUAGE_CODE == 'en') {
    $usluga = 'Complex service';
    $ceny = 'Competitive prices';
    $satysfakcja = '100% satisfaction';
    $sztuka_tlumaczenia = 'Translations';
}
?>
<section class="top-info" id="top-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s">
                <h1 class="page-title text-center">Langue</h1>
                <h3 class="page-subtitle text-center"><?= $sztuka_tlumaczenia ?></h3>
            </div>
        </div>
    </div>
</section>
<section class="info" id="info">
    <div class="container">
        <div class="row">
            <div class="col-md-4 item">
                <i class="fas fa-laptop fa-4x"></i>
                <h3 class="title"><?= $usluga ?></h3>
            </div>
            <div class="col-md-4 item">
                <i class="fas fa-gift fa-4x"></i>
                <h3 class="title"><?= $ceny ?></h3>
            </div>
            <div class="col-md-4 item">
                <i class="fas fa-smile-wink fa-4x"></i>
                <h3 class="title"><?= $satysfakcja ?></h3>
            </div>
        </div>
    </div>
</section>
<section class="oferta" id="oferta">
    <div class="container">
        <div class="row">
            <div class="col-md-7 text-justify">
                <?php
                if (ICL_LANGUAGE_CODE == 'pl') {
                    $page_oferta = get_post(20);
                } elseif (ICL_LANGUAGE_CODE == 'it') {
                    $page_oferta = get_post(35);
                } elseif (ICL_LANGUAGE_CODE == 'es') {
                    $page_oferta = get_post(41);
                } elseif (ICL_LANGUAGE_CODE == 'en') {
                    $page_oferta = get_post(43);
                }
                $page_oferta_title = $page_oferta->post_title;
                $page_oferta_content = $page_oferta->post_content;
                ?>
                <h2 class="title"><?= $page_oferta_title ?></h2>
                <?= $page_oferta_content; ?>
            </div>
            <div class="col-md-5">
                <?php if (is_active_sidebar('jezyki_oferta')) { ?>
                    <?php dynamic_sidebar('jezyki_oferta'); ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="korekty" id="korekty-tekstow">
    <div class="container">
        <div class="row">
            <?php
            if (ICL_LANGUAGE_CODE == 'pl') {
                $page_korekty_tekstow = get_post(26);
            } elseif (ICL_LANGUAGE_CODE == 'it') {
                $page_korekty_tekstow = get_post(45);
            } elseif (ICL_LANGUAGE_CODE == 'es') {
                $page_korekty_tekstow = get_post(47);
            } elseif (ICL_LANGUAGE_CODE == 'en') {
                $page_korekty_tekstow = get_post(50);
            }
            $page_korekty_tekstow_content_title = $page_korekty_tekstow->post_title;
            $page_korekty_tekstow_content = $page_korekty_tekstow->post_content;
            ?>
            <div class="col-md-12">
                <h2 class="title text-center"><?= $page_korekty_tekstow_content_title ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-justify">
                <?= $page_korekty_tekstow_content; ?>
            </div>
        </div>
    </div>
</section>
<section class="contact" id="kontakt">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php if (is_active_sidebar('kontakt')) { ?>
                    <?php dynamic_sidebar('kontakt'); ?>
                <?php } ?>
                <img class="img-fluid w-75 mt-4" src="<?php echo get_template_directory_uri(); ?>/images/contact.gif" />
            </div>
            <div class="col-md-6">
                <?php if (is_active_sidebar('kontakt-form')) { ?>
                    <?php dynamic_sidebar('kontakt-form'); ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>