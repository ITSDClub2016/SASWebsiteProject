<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

<div class="container">
	<?php get_template_part( 'loop', 'page' ); ?>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
