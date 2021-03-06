<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header();
?>
<?php if ( have_posts() ): ?>
	<?php the_post(); ?>
    <div class="page-intro"
         style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/page-intro.jpg')">
        <div class="container">
            <div class="page-intro__content">
                <ul class="breadcrumbs">
                    <li><span><?php the_title(); ?></span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="laborator-single">
            <h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>
