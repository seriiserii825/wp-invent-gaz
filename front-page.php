<?php
/*
 * Template Name: Principala
 */
?>
<?php get_header(); ?>
<?php $slider = new WP_Query( [
	'post_type'      => 'slider',
	'posts_per_page' => - 1
] ); ?>

<?php if ( $slider->have_posts() ): ?>
    <div class="slider" id="js-slider">
        <div class="slider-button slider-button__left"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/i/arrow-left.svg"></div>
        <div class="slider-button slider-button__right"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/i/arrow-right.svg"></div>
        <div class="slider__wrap" id="js-slider__wrap">
			<?php while ( $slider->have_posts() ): ?>
				<?php $slider->the_post(); ?>
                <div class="slider__item">
                    <div class="slider__img"
                         style="background-image: url('<?php echo getThePostThumbSrc( 1920, 700 ); ?>"></div>
                    <div class="container">
                        <div class="slider__content">
                            <div class="slider__center">
                                <h3 class="slider__subtitle"><?php the_title(); ?></h3>
                                <h2 class="slider__title"><?php echo carbon_get_the_post_meta( 'crb_slider_title' . get_lang() ); ?></h2>
                                <p class="slider__text"><?php echo carbon_get_the_post_meta( 'crb_slider_text' . get_lang() ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
        </div>
    </div>
<?php endif; ?>

<?php $single_post = new WP_Query( ['page_id' => 8] ); ?>
<?php if ( $single_post->have_posts() ): ?>
	<?php $single_post->the_post(); ?>
    <div class="section single-post section--pb0">
        <div class="container">
            <div class="single-post__wrap">
                <div class="single-post__item">
                    <header class="section__header">
                        <h3 class="section__subtitle"><?php echo carbon_get_the_post_meta('crb_single_post_subtitle'.get_lang()); ?></h3>
                        <h2 class="section__title"><?php echo carbon_get_the_post_meta('crb_single_post_title'.get_lang()); ?></h2>
                    </header>
                    <div class="single-post__content">
                        <?php echo wpautop( carbon_get_the_post_meta( 'crb_single_post_text'.get_lang() ) ); ?>
                        <a class="btn" href="<?php the_permalink(); ?>"><?php echo carbon_get_theme_option('crb_read_more'.get_lang()); ?></a>
                    </div>
                </div>

                <div class="single-post__item">
                    <?php require __DIR__.'/template-parts/single-post-images.php';?>
                </div>
            </div>
        </div>
    </div>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php require __DIR__.'/template-parts/testimonials.php';?>

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
        <a class="btn btn--center" href="<?php echo get_the_permalink(56); ?>"> <?php echo carbon_get_theme_option('crb_read_more'.get_lang()); ?> </a>
    </div>
</section>

<?php get_footer(); ?>
