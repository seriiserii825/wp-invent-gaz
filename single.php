<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header();
?>
<div class="page-intro"
     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/page-intro.jpg')">
    <div class="container">
        <div class="page-intro__content">
            <h3 class="page-intro__title"><?php echo get_the_title( 56 ); ?></h3>
            <ul class="breadcrumbs">
                <li><a href="<?php echo get_the_permalink( 56 ) ?>"><?php echo get_the_title( 56 ); ?></a></li>
                <li><span><?php the_title(); ?></span></li>
            </ul>
        </div>
    </div>
</div>

<?php if ( have_posts() ): ?>
	<?php while ( have_posts() ): ?>
		<?php the_post(); ?>
        <div class="container">
            <div class="laborator-single">
                <h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
            </div>
        </div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>
<?php get_footer(); ?>
