<?php require __DIR__.'/template-parts/show-popup.php';?>
<footer class="main-footer">
    <div class="container">
        <div class="main-footer__wrap">
            <div class="main-footer__item">
                <header class="main-footer__header">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/logo-white.svg" alt=""></a>
                </header>
                <p><?php echo carbon_get_theme_option('crb_footer_text'.get_lang()); ?></p>
                <ul class="main-footer__socials">
                    <li><a href="<?php echo carbon_get_theme_option('crb_facebook'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/facebook-white.svg" alt=""></a></li>
                    <li><a href="<?php echo carbon_get_theme_option('crb_vk'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/vk-white.svg" alt=""></a></li>
                </ul>
            </div>
            <div class="main-footer__item">
                <header class="main-footer__header">
                    <h3 class="main-footer__title"><?php echo get_the_title(18); ?></h3>
                </header>
                <ul>
	                <?php
	                $phone_1 = carbon_get_theme_option('crb_phone_1');
	                $phone_1_clear = clear_phone($phone_1);
	                $phone_2 = carbon_get_theme_option('crb_phone_2');
	                $phone_2_clear = clear_phone($phone_2);
	                ?>
                    <li><a href="tel:<?php echo $phone_1_clear; ?>"><?php echo $phone_1; ?></a></li>
                    <li><a href="tel:<?php echo $phone_2_clear; ?>"><?php echo $phone_2; ?></a></li>
                    <li><span><?php echo carbon_get_theme_option('crb_address'.get_lang()); ?></span></li>
                    <li><a href="mailto:invent-in@rambler.ru"><?php echo carbon_get_theme_option('crb_mail'); ?></a></li>
                    <li><span><?php echo carbon_get_theme_option('crb_hours'.get_lang()); ?></span></li>
                </ul>
            </div>
            <div class="main-footer__item">
                <header class="main-footer__header">
                    <h3 class="main-footer__title"><?php echo carbon_get_theme_option('crb_footer_location'.get_lang()); ?></h3>
                </header>
                <div class="map">
                    <iframe width="100%" height="260" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2720.2209457416443!2d28.870090315462665!3d47.01626793656354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97c0d711c125f%3A0xc4ac363bea126a9c!2zU3RyYWRhIFV6aW5lbG9yIDExLCBDaGnImWluxIN1LCDQnNC-0LvQtNCw0LLQuNGP!5e0!3m2!1sru!2s!4v1575297305926!5m2!1sru!2s" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright"><span><?php echo carbon_get_theme_option('crb_copyright'.get_lang()); ?></span></div>
<div class="overlay" id="js-overlay"></div>
<div class="popup" id="js-popup">
    <div class="popup-wrap">
        <div class="close-popup" id="js-close-popup"></div>
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
<! -- [if lt IE 9]>
<!--<script src="assets/libs/html5shiv/es5-shim.min.js"></script>-->
<!--<script src="assets/libs/html5shiv/html5shiv.min.js"></script>-->
<!--<script src="assets/libs/html5shiv/html5shiv-printshiv.min.js"></script>-->
<!--<script src="assets/libs/html5shiv/respond.min.js"></script>-->
<! --<! [endif]-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--<script src="assets/libs/wow/wow.min.js"></script>-->
<!--<script src="assets/libs/jquery-easy-scroll/jquery.easeScroll.js"></script>-->
<!--<script src="assets/libs/slick/slick/slick.min.js"></script>-->
<!--<script src="assets/js/main.js"></script>-->
<?php wp_footer(); ?>
</body>
</html>
