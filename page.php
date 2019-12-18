<?php
get_header();
?>
    <div class="page-intro"
         style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/page-intro.jpg')">
        <div class="container">
            <div class="page-intro__content">
                <h3 class="page-intro__title"><?php the_title(); ?></h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="page-custom">
			<?php if ( have_posts() ): ?>
				<?php the_post(); ?>
				<?php the_content(); ?>
			<?php endif; ?>
        </div>
    </div>
<?php
get_footer();
