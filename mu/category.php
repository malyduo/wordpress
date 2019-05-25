<?php get_header(); ?>

<section class="o-salonie">
    <div class="container content">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    Jesteś tutaj: 
                    <?php
                    if (function_exists('bcn_display')) {
                        bcn_display();
                    }
                    ?>
                </div>
                <h1 class="section-title"><?php single_cat_title(); ?></h1>
            </div>
        </div>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <div class="row">
                    <div class="col-md-12 uslugi-list-item">
                        <h2 class="uslugi-list-title"><?php the_title(); ?> <span><?php uslugi_cena() ?></span></h2>
                        <?php the_content(); ?>
                        <a class="btn btn-uslugi-more faa-parent animated-hover" href="<?php the_permalink(); ?>"><i class="fas fa-info-circle faa-pulse"></i> Więcej na temat zabiegu</a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>

