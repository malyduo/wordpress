<?php get_header(); ?> 

<?php
if (ICL_LANGUAGE_CODE == 'pl') {
    //    counter
    $projects_label = 'zrealizowane projekty';
    $clients_label = 'zadowolonych klientów';
    $coffee_label = 'wypitych kaw';
    $experience_label = 'lat doświadczenia';
    //    services
    $services_title_our = 'Oferujemy';
    $services_title_services = 'usługi';
    //    filter
    $portfolio_all = 'Wszystkie';
    $portofilio_filter_all = 'Wszystkie';
    $portofilio_filter_web = 'Strony internetowe / sklepy';
    $portofilio_filter_logo = 'Logo';
    $portofilio_filter_other = 'Inne';
    $portoflio_title_our = 'Nasze';
    $portoflio_title_projects = 'realizacje';
} elseif (ICL_LANGUAGE_CODE == 'en') {
    //    counter
    $projects_label = 'projects completed';
    $clients_label = 'happy clients';
    $coffee_label = 'cups of coffee';
    $experience_label = 'years experience';
    //    services
    $services_title_our = 'Our';
    $services_title_services = 'services';
    //    filter
    $portfolio_all = 'All projects';
    $portofilio_filter_all = 'All';
    $portofilio_filter_web = 'Web design';
    $portofilio_filter_logo = 'Logo';
    $portofilio_filter_other = 'Other';
    $portoflio_title_our = 'Our';
    $portoflio_title_projects = 'projects';
}
?>
<section class="intro">
    <div id="particles-js"></div>
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <img class="logo img-fluid d-block mx-auto wow bounceIn" data-wow-duration="1s" src="<?php echo get_template_directory_uri(); ?>/images/logo_simple.png" alt="strony www lublin"/>
                <div id="typed-strings" class="d-none">
                    <?php if (ICL_LANGUAGE_CODE == 'pl') { ?>
                        <p>Projektujemy <strong>STRONY WWW</strong></p>
                        <p>Wykonujemy <strong>SKLEPY INTERNETOWE</strong></p>
                        <p>Oferujemy <strong>POZYCJONOWANIE</strong></p>
                        <p>Zmontuj z  <strong>NAMI</strong> coś fajnego!</p>
                    <?php } elseif (ICL_LANGUAGE_CODE == 'en') { ?>
                        <p>We design <strong>WEBSITES</strong></p>
                        <p>We make <strong>ONLINE STORES</strong></p>
                        <p>We offer <strong>SEO</strong></p>
                        <p>Let's create something <strong>Together!</strong></p>
                    <?php } ?>
                    <p><strong>MONTOWNIA STRON</strong></p>
                </div>
                <h1 class="intro-text"><span id="typed"></span></h1>
                <div class="arrow-container">
                    <a href="#shrink-menu">
                        <div class="arrow"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="shrink-menu" class="top-info">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="section-title">Potrzebujesz strony www, sklepu internetowego lub reklamy?</h2>
                <p>Napisz do nas lub skontaktuj się z nami telefonicznie.</p>
            </div>
            <div class="col-md-4 contact">
                <a href="tel:791220227"><h2 class="section-title"><i class="fas fa-mobile-alt faa-ring animated" aria-hidden="true"></i> 791 220 227</h2></a>
                <a href="mailto:biuro@montownia-stron.pl"><h2 class="section-title"><i class="fas fa-envelope faa-horizontal animated" aria-hidden="true"></i> biuro@montownia-stron.pl</h2></a>
            </div>
        </div>
    </div>
</section>
<section class="services parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/services_bg.png">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title"><?= $services_title_our ?> <span><?= $services_title_services ?></span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 item">
                <a href="#">
                    <img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/services/www.png" alt="strony www lublin"/>
                    <h3 class="title">Strony WWW</h3>
                    <p class="description">Tworzenie stron internetowych dla dużych oraz małych firm. Tworzymy strony w sposób kreatywny oraz profesjonalny. Nasze strony są
                        responsywne oraz zgodne z obowiązującymi standardami. Zapoznaj się z naszą ofertą!</p>
                </a>
            </div>
            <div class="col-md-4 item">
                <a href="#">
                    <img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/services/shop.png" alt="sklepy internetowe lublin"/>
                    <h3 class="title">Sklepy internetowe</h3>
                    <p class="description">Sklep internetowy dla Twojej firmy? Z nami to proste! Dowiedz się więcej i zacznij sprzedawać swoje produkty w internecie od zaraz!</p>
                </a>
            </div>
            <div class="col-md-4 item">
                <a href="#">
                    <img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/services/seo.png" alt="pozycjonowanie lublin"/>
                    <h3 class="title">Pozycjonowanie</h3>
                    <p class="description">Wyższa pozycja Twojej strony w wyszukiwarce owocuje większą ilością potencjalnych klientów dla Twojej firmy. Nie możesz przegapić takiej okazji!</p>
                </a>
            </div>
            <div class="col-md-4 item">
                <a href="#">
                    <img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/services/graphic.png" alt="grafik lublin"/>
                    <h3 class="title">Grafika</h3>
                    <p class="description">Jeśli potrzebujesz logo lub projektu wizytówki dla Twojej firmy chętnie pomożemy Ci ją zaprojektować. Oferujemy również projekty papierów firmowych, ulotek i innych form reklamy.</p>
                </a>
            </div>
            <div class="col-md-4 item">
                <a href="#">
                    <img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/services/marketing.png" alt="marketing internetowy lublin"/>
                    <h3 class="title">Marketing internetowy</h3>
                    <p class="description">Chętnie wspomnimy o Twojej firmie w Internecie lub poprowadzimy za Ciebie kampanię reklamową.</p>
                </a>
            </div>
            <div class="col-md-4 item">
                <a href="#">
                    <img class="d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/services/repair.png" alt="serwis komputerowy lublin"/>
                    <h3 class="title">Serwis komputerowy</h3>
                    <p class="description">Kompleksowa naprawa komputerów stacjonarnych oraz laptopów w Lublinie. Stacjonarny serwis komputerowy - szybko, tanio, profesjonalnie!</p>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="portfolio">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title"><?= $portoflio_title_our ?> <span><?= $portoflio_title_projects ?></span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center filtr-menu">
                <a data-filter="all"><?= $portofilio_filter_all ?></a>
                <a data-filter="web"><?= $portofilio_filter_web ?></a>
                <a data-filter="logo"><?= $portofilio_filter_logo ?></a>
                <a data-filter="other"><?= $portofilio_filter_other ?></a>
            </div>
        </div>
        <div class="row">
            <div class="filtr-container">
                <?php
                global $post;

                $projects = get_posts(array(
                    'posts_per_page' => 11,
                    'category_name' => 'projekty'
                ));

                if ($projects) {
                    foreach ($projects as $post) :
                        $project_tags = [];
                        setup_postdata($post);
                        $post_tags = get_the_tags();
                        if ($post_tags) {
                            foreach ($post_tags as $tag) {
                                array_push($project_tags, $tag->name);
                            }
                        }
                        ?>
                        <div class="filtr-item col-md-3 p-0" data-category="<?= implode(',', $project_tags) ?>" data-sort="value">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) { ?>
                                    <img class="img-fluid" src="<?php the_post_thumbnail_url('project'); ?>" alt="projekt <?php the_title(); ?>"/>
                                <?php } ?>
                                <div class="description">
                                    <span class="title">
                                        <?php the_title(); ?>
                                        <br />
                                        <i class="fas fa-arrow-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <?php
                    endforeach;
                    wp_reset_postdata();
                }
                ?>
                <div class="filtr-item more col-md-3 p-0" data-category="all" data-sort="value">
                    <a href="">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/filtr_blank.jpg"/>
                        <div class="description">
                            <span class="title"><?= $portfolio_all ?>
                                <br />
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$years_count = (int) date(Y) - 2016;
$projects_count = count(get_posts(array('category_name' => 'projekty', 'posts_per_page' => -1)));
$coffee_count = (int) $years_count * 509;
?>
<section class="numbers">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <span class="counter"><?= $projects_count ?></span>
                <span class="description"><?= $projects_label ?></span>
            </div>
            <div class="col-md-3">
                <span class="counter">271</span>
                <span class="description"><?= $clients_label ?></span>
            </div>
            <div class="col-md-3">
                <span class="counter"><?= $coffee_count ?></span>
                <span class="description"><?= $coffee_label ?></span>
            </div>
            <div class="col-md-3">
                <span class="counter"><?= $years_count ?></span>
                <span class="description"><?= $experience_label ?></span>
            </div>
        </div>
    </div>
</section>
<?php echo do_shortcode('[google_map_easy id="1"]') ?>

<?php get_footer(); ?>
<script>
    jQuery.noConflict();

    (function ($) {
        $(document).ready(function () {
            //typed js
            var typed = new Typed('#typed', {
                stringsElement: '#typed-strings',
                loop: true,
                typeSpeed: 30,
                backSpeed: 0,
                backDelay: 3000,
            });
            //filterizr
            var filterizr = $('.filtr-container').filterizr({
                //options object
            });
        });
    })(jQuery);
</script>