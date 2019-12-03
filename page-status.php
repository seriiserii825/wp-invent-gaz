<?php
/**
 * Template Name: Status
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
<div class="check-page">
    <header class="section__header section__header--center">
        <h2 class="section__title"><?php echo carbon_get_theme_option( 'crb_status_title' . get_lang() ); ?></h2>
    </header>

    <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter" class="check-page__form">
		<?php wp_nonce_field( 'my_nonce' ); ?>
        <div class="check-page__form-item">
            <span><?php echo carbon_get_theme_option( 'crb_status_form_title' . get_lang() ); ?></span></div>
        <div class="check-page__form-item">
            <input type="text" name="check"
                   placeholder="<?php echo carbon_get_theme_option( 'crb_status_form_placeholder' . get_lang() ); ?>">
        </div>
        <div class="check-page__form-item">
            <input type="submit" class="btn btn--small"
                   value="<?php echo carbon_get_theme_option( 'crb_status_find' . get_lang() ); ?>"/>
        </div>
        <input type="hidden" name="action" value="myfilter">
    </form>

    <script type="text/javascript">
		jQuery(function ($) {
			$('#filter').submit(function () {
				var filter = $('#filter');
				$.ajax({
					url: filter.attr('action'),
					data: filter.serialize(), // form data
					type: filter.attr('method'), // POST
					beforeSend: function (xhr) {
						filter.find('button').text('Searching...'); // changing the button label
					},
                    error: function(){
						alert('ok');
                    },
					success: function (data) {
						// filter.find('button').text('SEARCH'); // changing the button label back
						$('.check-block').html(data); // insert data
					}
				});
				return false;
			});
		});
    </script>

    <div class="check-block">
        <div class="check-block__item">
            <header class="check-block__header">
                <h4 class="check-block__title"><?php echo carbon_get_theme_option( 'crb_status_company' . get_lang() ); ?></h4>
            </header>

            <ul class="check-block__list">
                <li>
                    <span class="check-block__title"><?php echo carbon_get_theme_option( 'crb_status_name' . get_lang() ); ?>:</span>
                    <span class="check-block__value">IMSP AMT Riscani</span>
                </li>
            </ul>
        </div>

        <div class="check-block__item">
            <header class="check-block__header">
                <h4 class="check-block__title"><?php echo carbon_get_theme_option( 'crb_status_contor' . get_lang() ); ?></h4>
            </header>
            <ul class="check-block__list">
                <li>
                    <span class="check-block__title"><?php echo carbon_get_theme_option( 'crb_status_number' . get_lang() ); ?>:</span>
                    <span class="check-block__value">Gas MD 1304</span>
                </li>
            </ul>
        </div>

        <div class="check-block__item">
            <header class="check-block__header">
                <h4 class="check-block__title"><?php echo carbon_get_theme_option( 'crb_status_contor_status' . get_lang() ); ?></h4>
            </header>
            <ul class="check-block__list">
                <li>
                    <span class="check-block__title"><?php echo carbon_get_theme_option( 'crb_status_status' . get_lang() ); ?>:</span>
                    <span class="check-block__value"><?php echo carbon_get_theme_option('crb_status_wait'.get_lang()); ?></span>
                </li>
            </ul>
            <div class="check-block__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/i/wait.svg" alt="">
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
