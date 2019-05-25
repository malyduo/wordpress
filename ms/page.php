<?php get_header(); ?>
<?php
if (ICL_LANGUAGE_CODE == 'pl') {
	$breadcrumb_label = 'Jesteś tutaj:';
} elseif (ICL_LANGUAGE_CODE == 'en') {
	$breadcrumb_label = 'You are here:';
}
?>
<section class="intro page">
    <div id="particles-js"></div>
</section>
<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-content">
                <h1 class="section-title"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center mt-2">
                <?= $breadcrumb_label; ?>
                <?php
                if (function_exists('bcn_display')) {
                    bcn_display();
                }
                ?>
            </div>
        </div>
    </div>
</section>
<section id="shrink-menu" class="page-content">
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

<?php get_footer(); ?>