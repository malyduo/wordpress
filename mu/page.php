<?php get_header(); ?>

<section class="main-content">
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
                <h1 class="section-title"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>