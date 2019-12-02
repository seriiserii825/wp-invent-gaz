<?php
get_header();
?>
    <div class="single-page">
        <div class="container">
			<?php if ( have_posts() ): ?>
				<?php the_post(); ?>
				<?php the_post_thumbnail( 'full' ); ?>
                <h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endif; ?>

        </div>
    </div>
<?php
get_footer();
