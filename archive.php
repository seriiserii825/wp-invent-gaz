<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bs-invent-gaz
 */

get_header();
$term_obj = get_queried_object();
?>
    <div class="page-intro"
         style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/page-intro.jpg')">
        <div class="container">
            <div class="page-intro__content">
                <h3 class="page-intro__title"><?php echo get_the_title( 56 ); ?></h3>
                <ul class="breadcrumbs">
                    <li><a href="<?php echo get_the_permalink( 12 ) ?>"><?php echo get_the_title( 12 ); ?></a></li>
                    <li>
                        <span><?php echo $term_obj->name; ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="section products">
        <div class="container">

            <div class="products__block">
                <header class="section__header section__header--center">
                    <h2 class="section__title"><?php echo $term_obj->name; ?></h2>
                </header>
	            <?php $products = new WP_Query( [
		            'post_type'      => 'product',
		            'type'           => $term_obj->slug,
		            'posts_per_page' => -1
	            ] ); ?>
                <div class="products__wrap">
					<?php if ( $products->have_posts() ): ?>
						<?php while ( $products->have_posts() ): ?>
							<?php $products->the_post(); ?>

                            <div class="products__item">
                                <div class="products__img"><?php echo kama_thumb_img( 'w=200' ); ?></div>
                                <h2 class="products__title"><?php the_title(); ?></h2>
                                <a class="btn btn--white btn--small"
                                   href="<?php the_permalink(); ?>"><?php echo carbon_get_theme_option( 'crb_read_more' . get_lang() ); ?></a>
                            </div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
