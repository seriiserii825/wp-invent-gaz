<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header();
?>
<?php if ( have_posts() ): ?>
	<?php the_post(); ?>
    <?php $term = get_the_terms(get_the_ID(), 'control')[0]; ?>

    <div class="page-intro" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/page-intro.jpg')">
        <div class="container">
            <div class="page-intro__content">
                <h3 class="page-intro__title"><?php echo $term->name; ?></h3>
                <ul class="breadcrumbs">
                    <li><a href="<?php echo get_term_link( $term->term_id ) ?>"><?php echo $term->name; ?></a></li>
                    <li><span><?php the_title(); ?></span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="laborator-single">
            <h2><?php the_title(); ?></h2>
            <div class="laborator-single__img">
	            <?php echo kama_thumb_img('w=400'); ?>
            </div>
			<?php the_content(); ?>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>
