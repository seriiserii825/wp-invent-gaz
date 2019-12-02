<?php
get_header();
?>

    <div class="error-page" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/i/404.jpg')">
        <div class="error-page__content">
            <h1 class="error-page__title"> 404</h1>
            <p class="error-page__text"><?php echo carbon_get_theme_option('crb_error'.get_lang());?></p>
            <a class="btn btn--center btn--on-dark" href="<?php echo home_url(); ?>"><?php echo carbon_get_theme_option( 'crb_to_the_main' . get_lang() ); ?></a>
        </div>
    </div>
<?php
get_footer();
