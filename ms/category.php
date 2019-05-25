<?php get_header(); ?>

<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-content">
                <h1 class="section-title"><?php single_cat_title(); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center mt-2">
                Jesteś tutaj: 
                <?php
                if (function_exists('bcn_display')) {
                    bcn_display();
                }
                ?>
            </div>
        </div>
    </div>
</section>
<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-justify">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>"><h2 class="section-title uslugi-list-title"><?php the_title(); ?></h2></a>
                        <div class="news-date"><?php echo get_the_date('Y-m-d'); ?></div>
                        <?php the_excerpt(); ?>
                        <p class="text-right"><a class="btn btn-more" href="<?php the_permalink(); ?>">czytaj więcej</a></p>
                        <hr />
                    <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
            </div>
            <div class="col-md-4 text-justify">
                <div class="sidebar">
                    <?php if (is_active_sidebar('right-sidebar')) { ?>
                        <?php dynamic_sidebar('right-sidebar'); ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 pagination text-center">
                <?php
                the_posts_pagination(
                        array(
                            'mid_size' => 2,
                            'screen_reader_text' => ' ',
                            'prev_text' => __('<i class="fas fa-arrow-left"></i>', 'textdomain'),
                            'next_text' => __('<i class="fas fa-arrow-right"></i>', 'textdomain')
                        )
                );
                ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

