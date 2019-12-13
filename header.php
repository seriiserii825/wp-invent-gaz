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
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <?php wp_nav_menu( [
            	'theme_location'  => '',
            	'menu'            => '',
            	'container'       => '',
            	'container_class' => '',
            	'container_id'    => '',
            	'menu_class'      => 'main-menu',
            	'menu_id'         => 'js-main-menu',
            	'echo'            => true,
            	'fallback_cb'     => 'wp_page_menu',
            	'before'          => '',
            	'after'           => '',
            	'link_before'     => '',
            	'link_after'      => '',
            	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            	'depth'           => 0,
            	'walker'          => '',
            ] ); ?>
            <?php if(!dynamic_sidebar('search')): ?>
            <span>Search widget</span>
            <?php endif; ?>

            <div class="wpglobus-lang">
				<?php if ( ! dynamic_sidebar( 'language' ) ): ?>
                    <h3 style="color: red;">Language</h3>
				<?php endif; ?>
            </div>
        </div>
    </div>
</header>
