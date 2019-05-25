<?php get_header(); ?> 

<section class="o-salonie">
    <div class="container content">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title">O nas</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>
                    Montownia Urody to przede wszystkim wysoki poziom usług połączony z miłą atmosferą i pięknym wnętrzem. W naszym salonie Klienci czują się swobodnie, a dzięki doskonałej obsłudze wiedzą, że efekty wykonywanych zabiegów będą zadowalające. Każdy z Państwa może liczyć na profesjonalne doradztwo z zakresu wykonywanych usług. Pracujemy z zachowaniem wszelkich zasad higieny.
                </p>
                <p>
                    W naszej szerokiej ofercie znadziecie Państwo między innymi takie zabiegi jak depilacja woskiem, manicure oraz pedicure oraz zabiegi oczyszczającej.
                </p>
                <br />
                <p><img width="300" src="<?php echo get_template_directory_uri(); ?>/images/karta.png" class="img-fluid"></p>
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri(); ?>/images/salon.jpg" alt="salon kosmetyczny lublin" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>
<section class="uslugi parallax" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/bg_uslugi.jpg">
    <div class="container content">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title">Zabiegi kosmetyczne</h2>
                <p>
                    Oferujemy zabiegi kosmetyczne wykonane przez profesjonalne kosmetyczki z użyciem wysokiej jakości produktów. Nie zwlekaj, zapisz się na zabieg już dzisiaj za pomocą telefonu lub online!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 uslugi-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/uslugi/manicure.png" alt="manicure lublin" class="img-fluid d-block mx-auto">
                <h3 class="text-center title">Manicure</h3>
                <p>
                    Zabieg kosmetyczny, któremu poddawane są paznokcie u rąk. Manicure stosują osoby, które pragną mieć ładniejsze paznokcie. Zabieg polega nie tylko na malowaniu, ale też na wyrównywaniu skórek i pielęgnowaniu płytki paznokci.
                </p>
            </div>
            <div class="col-md-4 uslugi-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/uslugi/pedicure.png" alt="pedicure lublin" class="img-fluid d-block mx-auto">
                <h3 class="text-center title">Pedicure</h3>
                <p>
                    Zabieg kosmetyczny, któremu poddawane są paznokcie u stóp oraz stopy.
                </p>
            </div>
            <div class="col-md-4 uslugi-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/uslugi/eye.png" alt="rzesy lublin" class="img-fluid d-block mx-auto">
                <h3 class="text-center title">Rzęsy</h3>
                <p>
                    Przedłużanie rzęs to sposób na stosunkowo trwałe przedłużenie, zagęszczenie i pogrubienie naturalnych rzęs.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-2 uslugi-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/uslugi/face.png" alt="zabiegi na twarz lublin" class="img-fluid d-block mx-auto">
                <h3 class="text-center title">Zabiegi na twarz</h3>
                <p>
                    Zabiegi mające na celu zwiększanie za pomocą środków kosmetycznych atrakcyjności fizycznej.
                </p>
            </div>
            <div class="col-md-4 uslugi-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/uslugi/waxing.png" alt="depilacja lublin" class="img-fluid d-block mx-auto">
                <h3 class="text-center title">Depilacja</h3>
                <p>
                    Usuwanie owłosienia poprzez wyrywanie go.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="https://lavito.pl/montownia-urody-salon-kosmetyczny" target="_blank" class="btn btn-service faa-parent animated-hover"><i class="fas fa-user-plus faa-pulse"></i> Zapisz się online</a>
                <a href="<?php bloginfo('url'); ?>/cennik/" class="btn btn-service faa-parent animated-hover"><i class="far fa-question-circle faa-pulse"></i> Więcej o zabiegach</a>
            </div>
        </div>
    </div>
</section>
<section class="reviews-front">
    <div class="container content">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title text-center">Poznaj opinie naszych klientów</h3>
				<?php 
				if(is_user_logged_in()){
					if ( is_active_sidebar( 'opinie' ) ) { ?>
							<?php dynamic_sidebar( 'opinie' ); ?>
				<?php }
				}?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>