<?php
/**
 * Template Name: One column, no sidebar
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

<div class="container">
	<?php get_template_part( 'loop', 'page' ); ?>
</div>

<?php get_footer(); ?>