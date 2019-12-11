<?php $term_obj = get_queried_object();  ?>
<div class="page-intro"
     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/page-intro.jpg')">
    <div class="container">
        <div class="page-intro__content">
            <h3 class="page-intro__title"><?php echo get_the_title( 210 ); ?></h3>

            <ul class="breadcrumbs">
                <li><a href="<?php echo get_the_permalink( 12 ) ?>"><?php echo get_the_title( 12 ); ?></a></li>
                <li>
                    <span><?php echo $term_obj->name; ?></span>
                </li>
            </ul>
        </div>
    </div>
</div>

<section class="section laborator">
    <div class="container">

        <div class="laborator__block">

            <header class="section__header">
                <h2 class="section__title">
					<?php echo $term_obj->name; ?>
                </h2>
            </header>

            <div class="laborator__wrap">
				<?php $laborator = new WP_Query( [
					'post_type'      => 'laborator',
					'control'        => $term_obj->slug,
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
        </div>
    </div>
</section>
