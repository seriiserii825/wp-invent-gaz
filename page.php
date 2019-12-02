<?php
get_header();
?>
    <div class="container">
		<?php if ( have_posts() ): ?>
			<?php the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
		<?php endif; ?>

    </div>
<?php
get_footer();
