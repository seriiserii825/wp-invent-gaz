<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function get_short_text_clear( $content, $count ) {
	$short_text = $content;

	return mb_substr( $short_text, 0, $count );
}

//	if ( function_exists( ‘wp_ulike’ ) ) {
//		wp_ulike( ‘get’ );
//	}

function get_short_text( $content, $count ) {
	$short_text    = $content;
	$text_ro       = '{:ro}';
	$text_ru       = '{:ru}';
	$text_en       = '{:en}';
	$pos_ro        = strpos( $short_text, $text_ro ) + 5;
	$pos_ru        = strpos( $short_text, $text_ru ) + 5;
	$pos_en        = strpos( $short_text, $text_en ) + 5;
	$short_text_ro = mb_substr( $short_text, $pos_ro, $count );
	$short_text_ru = mb_substr( $short_text, $pos_ru, $count );
	$short_text_en = mb_substr( $short_text, $pos_en, $count );
	if ( get_lang() === '_ro' ) {
		$short_text = $short_text_ro;
	} elseif ( get_lang() === '_ru' ) {
		$short_text = $short_text_ru;
	} else {
		$short_text = $short_text_en;
	}

	$short_text = str_replace( [ '<strong>', '</strong>' ], '', $short_text );

	return $short_text;
}


function getThePostThumbSrc( $width, $height ) {
	$id = get_the_ID();

	return kama_thumb_src( 'w=' . $width . ' &h=' . $height . ' &post_id=' . $id . '' );
}

function clear_phone( $phone ) {
	return str_replace( [ '(', ')', '-', '+', ' ' ], '', $phone );
}

function vardump( $var ) {
	echo '<pre>';
	var_dump( $var );
	echo '</pre>';
}

function carbon_lang() {
	$suffix = '';
	if ( ! defined( 'ICL_LANGUAGE_CODE' ) ) {
		return $suffix;
	}
	$suffix = '_' . ICL_LANGUAGE_CODE;

	return $suffix;
}

function trim_content( $content, $count ) {
	$trimmed_content = wp_trim_words( $content, $count, '<a href="' . get_permalink() . '"></a>' );

	return $trimmed_content;
}

function get_lang() {
	$suffix = '';

	if ( get_locale() == 'en_US' ) {
		$suffix = '_en';
	}
	if ( get_locale() == 'ru_RU' ) {
		$suffix = '_ru';
	}
	if ( get_locale() == 'ro_RO' ) {
		$suffix = '_ro';
	}

	return strtolower( $suffix );
}

function my_revisions_to_keep( $revisions ) {
	return 2;
}

add_filter( 'wp_revisions_to_keep', 'my_revisions_to_keep' );


function video_filter_function() {

	if ( ! check_ajax_referer( 'my_nonce' ) ) {
		wp_die();
	} else {
		$check = $_POST['check'];

		$args = array(
			'post_type'      => 'contor',
			'posts_per_page' => - 1
		);

		$query = new WP_Query( $args );

		if ( $query->have_posts() ) : while ( $query->have_posts() ): $query->the_post(); ?>
			<?php $beneficiar = carbon_get_the_post_meta( 'crb_beneficiar' ); ?>
			<?php $status = carbon_get_the_post_meta( 'crb_contor_status' ); ?>

			<?php if ( get_the_title() == $check || strpos( $beneficiar, $check ) !== false ): ?>

                <div class="check-block__item">
                    <header class="check-block__header">
                        <h4 class="check-block__title"><?php echo carbon_get_theme_option( 'crb_status_company' . get_lang() ); ?></h4>
                    </header>

                    <ul class="check-block__list">
                        <li>
                            <span class="check-block__title"><?php echo carbon_get_theme_option( 'crb_status_name' . get_lang() ); ?>:</span>
                            <span class="check-block__value"><?php echo $beneficiar; ?></span>
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
                            <span class="check-block__value"><?php the_title(); ?></span>
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

							<?php if ( $status == 'OK' ): ?>
                                <span class="check-block__value"><?php echo carbon_get_theme_option( 'crb_status_done' . get_lang() ); ?></span>
							<?php elseif ( $status == 'In Lucru' ): ?>
                                <span class="check-block__value"><?php echo carbon_get_theme_option( 'crb_status_wait' . get_lang() ); ?></span>
							<?php else: ?>
                                <span class="check-block__value"><?php echo carbon_get_theme_option( 'crb_status_bad' . get_lang() ); ?></span>
							<?php endif; ?>
                        </li>
                    </ul>
                    <div class="check-block__img">
						<?php if ( $status == 'OK' ): ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/i/checked.svg" alt="">
						<?php elseif ( $status == 'In Lucru' ): ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/i/wait.svg" alt="">
						<?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/i/error.svg" alt="">
						<?php endif; ?>
                    </div>
                </div>

			<?php else: ?>
                <h3><?php echo carbon_get_theme_option( 'crb_enter_another_data' . get_lang() ); ?></h3>
				<?php break; ?>
			<?php endif; ?>
		<?php
		endwhile;
			wp_reset_postdata();
		endif;


		die();
	}


}


add_action( 'wp_ajax_myfilter', 'video_filter_function' );
add_action( 'wp_ajax_nopriv_myfilter', 'video_filter_function' );
