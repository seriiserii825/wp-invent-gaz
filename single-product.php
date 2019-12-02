<?php
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
                <li><a href="<?php echo get_the_permalink(56) ?>"><?php echo get_the_title(56); ?></a></li>
                <li><span><?php the_title(); ?></span></li>
            </ul>
        </div>
    </div>
</div>

<?php if(have_posts()): ?>
	<?php while(have_posts()): ?>
		<?php the_post(); ?>
        <div class="single-product">
            <div class="container">
                <div class="single-product__wrapper">
                    <div class="single-product__img">
						<?php echo kama_thumb_img('w=396'); ?>
                    </div>
                    <div class="single-product__content">
                        <h2 class="single-product__title"><?php the_title(); ?></h2>
                        <table class="single-product__table">
                            <tr>
                                <td>Tip contor</td>
                                <td>de fiecare zi</td>
                            </tr>
                            <tr>
                                <td>Cheltuiala minimă măsurată</td>
                                <td>membranoasă</td>
                            </tr>
                            <tr>
                                <td>Fluxul măsurat maxim</td>
                                <td>0,04 m³ / h</td>
                            </tr>
                            <tr>
                                <td>Presiunea maximă de lucru</td>
                                <td>6m³ / h</td>
                            </tr>
                            <tr>
                                <td>Diametrul nominal</td>
                                <td>50kPa</td>
                            </tr>
                            <tr>
                                <td>Distanța de centru</td>
                                <td>20mm</td>
                            </tr>
                            <tr>
                                <td>Interval de interacțiune</td>
                                <td>206mm</td>
                            </tr>
                            <tr>
                                <td>Durata de viață</td>
                                <td>10 ani</td>
                            </tr>
                            <tr>
                                <td>Dimensiuni</td>
                                <td>20 de ani</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="single-product__text">
                    <h2 class="single-product__title"><?php echo carbon_get_theme_option('crb_products_specifications'.get_lang()); ?></h2>
                    <div class="single-product__column">
						<?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>
<?php get_footer(); ?>
