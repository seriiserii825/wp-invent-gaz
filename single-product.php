<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header();
$term_list = get_the_terms( $post->ID, 'type' )[0];
$term_name = $term_list->name;
$term_id   = $term_list->term_id;
$term_link = get_term_link( $term_id, $taxonomy = 'type' );
?>
<div class="page-intro"
     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/page-intro.jpg')">
    <div class="container">
        <div class="page-intro__content">
            <h3 class="page-intro__title"><?php echo get_the_title( 56 ); ?></h3>
            <ul class="breadcrumbs">
                <li><a href="<?php echo get_the_permalink( 56 ) ?>"><?php echo get_the_title( 56 ); ?></a></li>
                <li><a href="<?php echo $term_link; ?>"><?php echo $term_name; ?></a></li>
                <li><span><?php the_title(); ?></span></li>
            </ul>
        </div>
    </div>
</div>

<?php if ( have_posts() ): ?>
	<?php while ( have_posts() ): ?>
		<?php the_post(); ?>
        <div class="single-product">
            <div class="container">
                <div class="single-product__wrapper">
                    <div class="single-product__img">
						<?php echo kama_thumb_img( 'w=396' ); ?>
                    </div>

                    <div class="single-product__text">
                        <h2 class="single-product__title"><?php echo carbon_get_theme_option( 'crb_products_specifications' . get_lang() ); ?></h2>
						<?php the_content(); ?>
                    </div>
                </div>

                <div class="single-product__content">
                    <h2 class="single-product__title"><?php echo esc_html__( 'Date tehnice', 'bs-invent-gaz' ); ?></h2>

                    <div class="single-product-info">
						<?php if ( carbon_get_the_post_meta( 'crb_product_volume' . get_lang() ) ): ?>
                            <div class="single-product-info__item">
                                <h3 class="single-product__subtitle"><?php echo esc_html__( 'Volumul ciclic', 'bs-invent-gaz' ); ?></h3>
                                <div class="single-product__list">
									<?php echo carbon_get_the_post_meta( 'crb_product_volume' . get_lang() ); ?>
                                </div>
                            </div>
						<?php endif; ?>

						<?php if ( carbon_get_the_post_meta( 'crb_product_manevrabilitate' . get_lang() ) ): ?>
                            <div class="single-product-info__item">
                                <h3 class="single-product__subtitle"><?php echo esc_html__( 'Manevrabilitate', 'bs-invent-gaz' ); ?></h3>
                                <div class="single-product__list">
									<?php echo carbon_get_the_post_meta( 'crb_product_manevrabilitate' . get_lang() ); ?>
                                </div>
                            </div>
						<?php endif; ?>

						<?php if ( carbon_get_the_post_meta( 'crb_product_interval_de_corectie' . get_lang() ) ): ?>
                            <div class="single-product-info__item">
                                <h3 class="single-product__subtitle"><?php echo esc_html__( 'Interval de corecție TC', 'bs-invent-gaz' ); ?></h3>
                                <div class="single-product__list">
									<?php echo carbon_get_the_post_meta( 'crb_product_interval_de_corectie' . get_lang() ); ?>
                                </div>
                            </div>
						<?php endif; ?>
                    </div>

                    <div class="single-product__files">
                        <h2 class="single-product__title"><?php echo esc_html__( 'Documentație', 'bs-invent-gaz' ); ?></h2>
						<?php $files = carbon_get_the_post_meta( 'crb_files' ); ?>
                        <ul class="single-product__list single-product__list--small">
							<?php foreach ( $files as $file ): ?>
                                <li>
                                    <span><?php echo get_the_title( $file['crb_file'] ); ?></span>
                                    <a class="single-product__file" target="_blank" href="<?php echo wp_get_attachment_url( $file['crb_file'] ); ?>">
                                        <span><?php echo esc_html__( Descarca, 'bs-invent-gaz' ); ?></span>
                                        <img src="<?php echo get_template_directory_uri().'/assets/i/file-pdf-regular.svg'; ?>" alt="">
                                    </a>
                                </li>
							<?php endforeach; ?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>
<?php get_footer(); ?>

