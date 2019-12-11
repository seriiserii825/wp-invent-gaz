<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bs-invent-gaz
 */

get_header();
$term_obj = get_queried_object();
?>
<?php if($term_obj->taxonomy == 'type'): ?>
	<?php require_once __DIR__.'/template-parts/products-content.php';?>
<?php elseif($term_obj->taxonomy == 'control'): ?>
	<?php require_once __DIR__.'/template-parts/laborator-content.php';?>
<?php endif; ?>
<?php
get_footer();
