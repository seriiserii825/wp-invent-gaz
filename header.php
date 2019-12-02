<?php
/*
 * Template Name: Главная
 */
?>
<?php if ( ! defined( 'ABSPATH' ) ) {
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
            <div class="logo">
				<?php the_custom_logo(); ?>
            </div>
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
				<?php if ( ! dynamic_sidebar( 'language' ) ): ?>
                    <h3 style="color: red;">Language</h3>
				<?php endif; ?>
            </div>
        </div>
    </div>
</header>
