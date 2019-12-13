<?php
get_header();
/**
 * Template Name: Laborator
 */
?>
    <div class="page-intro"
         style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/page-intro.jpg')">
        <div class="container">
            <div class="page-intro__content">
                <h3 class="page-intro__title"><?php echo get_the_title( 210 ); ?></h3>
                <ul class="breadcrumbs">
                    <li><a href="<?php echo get_the_permalink( 12 ) ?>"><?php echo get_the_title( 12 ); ?></a></li>
                    <li><span><?php the_title(); ?></span></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="section laborator">
        <div class="container">
            <div class="laborator-intro">
                <div class="laborator-intro__item">
                    <h2 class="laborator-intro__title"><?php echo esc_html__( 'Acreditat de MOLDAC', 'bs-invent-gaz' ); ?></h2>
                    <a target="_blank" href="http://www.acreditare.md/pageview.php?l=ro&idc=175&t=/Registre-OEC-Acreditate/Registre-OEC-acreditate/">
                        <img src="<?php echo get_template_directory_uri() . '/assets/i/moldac-logotype.jpg'; ?>" alt="">
                    </a>
                </div>
                <div class="laborator-intro__item">
                    <h2 class="laborator-intro__title"><?php echo esc_html__( 'Etalonat de INM', 'bs-invent-gaz' ); ?></h2>
                    <a target="_blank" href="https://inm.md/rom">
                        <img src="<?php echo get_template_directory_uri() . '/assets/i/im.png'; ?>" alt="">
                    </a>
                </div>
            </div>

            <div class="laborator__block">
				<?php
				$terms = get_terms( array(
					'taxonomy'     => array( 'control' ), // название таксономии с WP 4.5
					'orderby'      => 'id',
					'order'        => 'ASC',
					'hide_empty'   => false,
					'hierarchical' => true,
				) );
				?>

				<?php foreach ( $terms as $term ): ?>
                    <header class="section__header">
                        <h2 class="section__title">
							<?php echo $term->name; ?>
                        </h2>
                    </header>
                    <div class="laborator__wrap">
						<?php $laborator = new WP_Query( [
							'post_type'      => 'laborator',
							'control'        => $term->slug,
							'posts_per_page' => - 1
						] ); ?>
						<?php if ( $laborator->have_posts() ): ?>
							<?php while ( $laborator->have_posts() ): ?>
								<?php $laborator->the_post(); ?>
                                <div class="laborator__item">
                                    <h2 class="laborator__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                </div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php endif; ?>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
    </section>
<?php
get_footer();
