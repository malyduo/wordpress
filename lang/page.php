<?php get_header(); ?>

<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 content">
                <h1 class="section-title"><?php the_title(); ?></h1>
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