<?php get_header(); ?>

			<div class="container">
            <div class="row">
            <div class="col-md-12">

			<div class="page-header">
  <h1>
    <?php the_title(); ?>
  </h1>
</div>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>

		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
        
        </div>
        </div>
        </div>

<?php get_footer(); ?>
