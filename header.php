<?php
/*
 * Template Name: Главная
 */
?>
<?php if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
?>
<!DOCTYPE html>
<html lang="ru_RU">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="main-header">
    <div class="container">
        <div class="main-header__content">
            <div class="logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/logo.svg" alt=""></a></div>
            <div class="sandwitch-wrap">
                <div class="sandwitch">
                    <div class="sandwitch__line sandwitch__line--top"></div>
                    <div class="sandwitch__line sandwitch__line--middle"></div>
                    <div class="sandwitch__line sandwitch__line--bottom"></div>
                </div>
            </div>
            <ul class="main-menu" id="js-main-menu">
                <li class="current-menu-item"><a href="about.html"> Despre noi </a></li>
                <li><a href="products.html"> Produse</a></li>
                <li><a href="check-page.html"> Contra status </a></li>
                <li><a href="contacts.html"> Contacte</a></li>
            </ul>
            <div class="wpglobus-lang">
                <div class="list"><a class="wpglobus-selector-link wpglobus-current-language" href="#"><img
                                src="https://euconsult.md/wp-content/plugins/wpglobus/flags/ro.png" alt=""><span
                                class="name"> Rom & acirc;n & abreve;</span><span class="code"> RO</span></a><a
                            class="wpglobus-selector-link" href="#"><img
                                src="https://euconsult.md/wp-content/plugins/wpglobus/flags/ru.png" alt=""><span
                                class="name">&Rcy;&ucy;&scy;&scy;&kcy;&icy;&jcy;</span><span class="code"> RU</span></a><a
                            class="wpglobus-selector-link" href="#"><img
                                src="https://euconsult.md/wp-content/plugins/wpglobus/flags/us.png" alt=""><span
                                class="name"> English</span><span class="code"> EN</span></a></div>
            </div>
        </div>
    </div>
</header>
