<?php
/**
 * Template Name: Products
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header();
?>
<div class="page-intro" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/page-intro.jpg')">
    <div class="container">
        <div class="page-intro__content">
            <h3 class="page-intro__title"><?php echo get_the_title(56); ?></h3>
            <ul class="breadcrumbs">
                <li><a href="<?php echo get_the_permalink(12) ?>"><?php echo get_the_title(12); ?></a></li>
                <li><span><?php the_title();  ?></span></li>
            </ul>
        </div>
    </div>
</div>
<section class="section products">
    <div class="container">
        <header class="section__header section__header--center">
            <h3 class="section__subtitle"><?php echo carbon_get_theme_option('crb_products_block_subtitle'.get_lang()); ?></h3>
            <h2 class="section__title"><?php echo carbon_get_theme_option('crb_products_block_title'.get_lang()); ?></h2>
        </header>

        <div class="products__wrap">
		    <?php $products = new WP_Query([
			    'post_type' => 'product',
			    'posts_per_page' => 4
		    ]); ?>
		    <?php if($products->have_posts()): ?>
			    <?php while($products->have_posts()): ?>
				    <?php $products->the_post(); ?>
				    <?php
				    $terms = get_the_terms(get_the_ID(), 'type');
				    ?>

                    <div class="products__item">
                        <div class="products__img"><?php echo kama_thumb_img('w=200'); ?></div>
                        <h3 class="products__subtitle"><?php echo $terms[0]->name; ?></h3>
                        <h2 class="products__title"><?php the_title(); ?></h2>
                        <a class="btn btn--white btn--small" href="<?php the_permalink(); ?>"><?php echo carbon_get_theme_option('crb_read_more'.get_lang()); ?></a>
                    </div>
			    <?php endwhile; ?>
			    <?php wp_reset_postdata(); ?>
		    <?php endif; ?>

        </div>
    </div>
</section>
<?php get_footer(); ?>
