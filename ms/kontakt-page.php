<?php
/* Template Name: kontakt */
get_header();
?>

<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-content">
                <h1 class="section-title"><?php the_title(); ?></h1>
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
            <div class="col-md-12 content">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php echo do_shortcode('[google_map_easy id="1"]') ?>

<?php get_footer(); ?>