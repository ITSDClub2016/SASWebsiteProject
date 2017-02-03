<?php
/**
 * The loop that displays a single post.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.2
 */
?>

<div class="col-md-9">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <header>
                    <h3><?php the_title(); ?></h3>
                    <h4><?php get_field("event_date") ?></h4>
                </header>
                <hr/>

                <?php the_content(); ?>

            </article>

    <?php endwhile; // end of the loop. ?>
</div>