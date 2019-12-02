<?php
/**
 * Template Name: Despre noi
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header();
?>
<div class="page-intro"
     style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/i/page-intro.jpg')">
    <div class="container">
        <div class="page-intro__content">
            <h3 class="page-intro__title"><?php the_title(); ?></h3>
            <ul class="breadcrumbs">
                <li><a href="<?php echo home_url(); ?>"><?php echo get_the_title( 12 ); ?></a></li>
                <li><span><?php the_title(); ?></span></li>
            </ul>
        </div>
    </div>
</div>

<?php if ( have_posts() ): ?>
	<?php the_post(); ?>
    <div class="section single-post page-about">
        <div class="container">
            <div class="single-post__wrap">
                <div class="single-post__item">
                    <header class="section__header">
                        <h3 class="section__subtitle"><?php echo carbon_get_the_post_meta( 'crb_single_post_subtitle' . get_lang() ); ?></h3>
                        <h2 class="section__title"><?php echo carbon_get_the_post_meta( 'crb_single_post_title' . get_lang() ); ?></h2>
                    </header>
                    <div class="single-post__content">
						<?php the_content(); ?>
                    </div>
                </div>
                <div class="single-post__item">
					<?php require __DIR__ . '/template-parts/single-post-images.php'; ?>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>

<?php get_footer(); ?>
