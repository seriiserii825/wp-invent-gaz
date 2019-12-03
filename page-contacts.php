<?php
/**
 * Template Name: Contacte
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
            <h3 class="page-intro__title"><?php the_title(); ?></h3>
            <ul class="breadcrumbs">
                <li><a href="<?php echo home_url(); ?>"><?php echo get_the_title( 12 ); ?></a></li>
                <li><span><?php the_title(); ?></span></li>
            </ul>
        </div>
    </div>
</div>
<div class="contacts">
    <div class="container">
        <div class="contacts__wrap">
            <div class="details">
                <h3 class="details__title"><?php echo carbon_get_theme_option( 'crb_detalies_title' . get_lang() ); ?></h3>
                <p><?php echo carbon_get_theme_option( 'crb_detalies_text' . get_lang() ); ?></p>

				<?php
				$phone_1       = carbon_get_theme_option( 'crb_phone_1' );
				$phone_1_clear = clear_phone( $phone_1 );
				$phone_2       = carbon_get_theme_option( 'crb_phone_2' );
				$phone_2_clear = clear_phone( $phone_2 );
				$phone_3       = carbon_get_theme_option( 'crb_phone_3' );
				$phone_3_clear = clear_phone( $phone_3 );

				?>

                <ul class="details__list">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/i/phone-white.svg">
                        <a href="tel:<?php echo $phone_3_clear; ?>"><?php echo $phone_3; ?></a></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/i/mobile-white.svg"><span><a
                                    href="tel:<?php echo $phone_1_clear; ?>"><?php echo $phone_1; ?></a>, <a
                                    href="tel:<?php echo $phone_2_clear; ?>"><?php echo $phone_2; ?></a></span></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/i/map-white.svg"><span><?php echo carbon_get_theme_option('crb_address'.get_lang()); ?></span>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/i/mail-white.svg"><a
                                href="mailto:<?php echo carbon_get_theme_option('crb_mail'); ?>"><?php echo carbon_get_theme_option('crb_mail'); ?></a></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/i/clock-white.svg"><span><?php echo carbon_get_theme_option('crb_hours'.get_lang()); ?></span>
                    </li>
                </ul>
            </div>
            <div class="form">
                <header class="section__header">
                    <h2 class="section__title"><?php echo carbon_get_theme_option('crb_form_title'.get_lang()); ?></h2>
                </header>
                <?php if(get_lang() == '_ru'): ?>
	                <?php echo do_shortcode('[contact-form-7 id="60" title="Контактная форма rus"]'); ?>
                <?php else: ?>
	                <?php echo do_shortcode('[contact-form-7 id="61" title="Form ro"]'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

