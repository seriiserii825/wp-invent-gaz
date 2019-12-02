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

<?php $single_post = new WP_Query( 'p=34' ); ?>
<?php if ( $single_post->have_posts() ): ?>
	<?php $single_post->the_post(); ?>
    <div class="section single-post section--pb0">
        <div class="container">
            <div class="single-post__wrap">
                <div class="single-post__item">
                    <header class="section__header">
                        <h3 class="section__subtitle"><?php echo carbon_get_the_post_meta('crb_single_post_title'.get_lang()); ?></h3>
                        <h2 class="section__title"><?php the_title(); ?></h2>
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

<?php $testimonials = carbon_get_theme_option('crb_numbers_fields'); ?>

<?php if($testimonials): ?>
<section class="section testimonials">
    <div class="container">
        <div class="testimonials__content">
            <?php foreach($testimonials as $item): ?>
                <div class="testimonials__item"><div class="testimonials__img"><img src="<?php echo $item['crb_testimonials_icon']; ?>" alt=""></div>
                    <h3 class="testimonials__title"><?php echo $item['crb_testimonials_title'.get_lang()]; ?></h3>
                    <p class="testimonials__text"><?php echo $item['crb_testimonials_text'.get_lang()]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>


<section class="section products">
    <div class="container">
        <header class="section__header section__header--center">
            <h3 class="section__subtitle"> Produsele noastre </h3>
            <h2 class="section__title"> Inovație pentru a lua produsele </h2>
        </header>
        <div class="products__wrap">
            <div class="products__item">
                <div class="products__img"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/i/products/1.jpg" alt=""></div>
                <h3 class="products__subtitle"> Convertor electronic </h3>
                <h2 class="products__title"> Corector DTC 20 B </h2><a class="btn btn--white btn--small"
                                                                       href="product.html"> Mai multe </a>
            </div>
            <div class="products__item">
                <div class="products__img"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/i/products/2.jpg" alt=""></div>
                <h3 class="products__subtitle"> Convertor electronic </h3>
                <h2 class="products__title"> Corector DTC 20 B </h2><a class="btn btn--white btn--small"
                                                                       href="product.html"> Mai multe </a>
            </div>
            <div class="products__item">
                <div class="products__img"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/i/products/3.jpg" alt=""></div>
                <h3 class="products__subtitle"> Convertor electronic </h3>
                <h2 class="products__title"> Corector DTC 20 B </h2><a class="btn btn--white btn--small"
                                                                       href="product.html"> Mai multe </a>
            </div>
            <div class="products__item">
                <div class="products__img"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/i/products/4.jpg" alt=""></div>
                <h3 class="products__subtitle"> Convertor electronic </h3>
                <h2 class="products__title"> Corector DTC 20 B </h2><a class="btn btn--white btn--small"
                                                                       href="product.html"> Mai multe </a>
            </div>
        </div>
        <a class="btn btn--center" href="product.html"> Mai multe </a>
    </div>
</section>
<div class="show-popup">
    <div class="container">
        <div class="show-popup__wrap">
            <div class="show-popup__item">
                <h2 class="show-popup__title"> Comandați un contor </h2>
                <h3 class="show-popup__subtitle"> Cum să alegeți și să cumpărați un contor de gaz adecvat </h3>
            </div>
            <div class="show-popup__item"><a class="btn btn--on-dark" href="#" id="js-show-popup"> Faceți o comandă </a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
