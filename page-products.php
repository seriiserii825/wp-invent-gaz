<?php
/**
 * Template Name: Products
 */
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
                <li><a href="<?php echo get_the_permalink( 12 ) ?>"><?php echo get_the_title( 12 ); ?></a></li>
                <li><span><?php the_title(); ?></span></li>
            </ul>
        </div>
    </div>
</div>
<section class="section products">
    <div class="container">

        <div class="products__block">
			<?php
			$terms = get_terms( array(
				'taxonomy'     => array( 'type' ), // название таксономии с WP 4.5
				'orderby'      => 'id',
				'order'        => 'ASC',
				'hide_empty'   => true,
				'hierarchical' => true,
			) );
			?>

			<?php foreach ( $terms as $term ): ?>
                <header class="section__header section__header--center">
                    <h2 class="section__title"><?php echo $term->name; ?></h2>
                </header>
                <div class="products__wrap">
					<?php $products = new WP_Query( [
						'post_type'      => 'product',
						'type'           => $term->slug,
						'posts_per_page' => -1
					] ); ?>
					<?php if ( $products->have_posts() ): ?>
						<?php while ( $products->have_posts() ): ?>
							<?php $products->the_post(); ?>
							<?php
							$terms = get_the_terms( get_the_ID(), 'type' );
							?>

                            <a href="<?php the_permalink(); ?>" class="products__item">
                                <div class="products__img"><?php echo kama_thumb_img( 'w=200' ); ?></div>
                                <h2 class="products__title"><?php the_title(); ?></h2>
                                <button class="btn btn--white btn--small">
                                    <?php echo carbon_get_theme_option( 'crb_read_more' . get_lang() ); ?>
                                </button>
                            </a>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
                </div>
			<?php endforeach; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
