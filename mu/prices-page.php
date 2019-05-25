<?php
/* Template Name: Szablon CENNIK */
get_header();
?>
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
                <?php
                $parent_category_id = 10;
                $categories = get_categories(array( 'parent' => $parent_category_id ));
                var_dump($categories);
                foreach ($categories as $category) {
                    ?>
                    <div class="row price-item">
                        <div class="col-md-9">
                            <h2 class="title"><?= $category->name ?></h2>
                            <div class="description"><?= $category->description ?></div>
                        </div>
                        <div class="col-md-3"><a class="btn btn-black-o" href="#cat-<?= $category->cat_ID ?>" data-toggle="collapse">Zobacz ceny <i class="fas fa-arrow-down"></i></a></div>
                    </div>
                    <div id="cat-<?= $category->cat_ID ?>" class="row collapse">
                        <?php
                        $posts = get_posts(array(
                            'category' => $category->cat_ID
                        ));
                        foreach ($posts as $post) {
                            ?>
                            <div class="col-md-12 price-item-list">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h3 class="service-title"><?= $post->post_title ?></h3>
                                    </div>
                                    <div class="col-md-3 price"><h3 class="service-title"><?php uslugi_cena() ?></h3></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

<script>
    $('.btn-black-o').on('click', function(){
        $(this).toggleClass('on');
        if($(this).hasClass('on')){
            $(this).find('svg').remove();
            $(this).append('<i class="fas fa-arrow-up"></i>');
        } else {
            $(this).find('svg').remove();
            $(this).append('<i class="fas fa-arrow-down"></i>');
        }
    });
</script>