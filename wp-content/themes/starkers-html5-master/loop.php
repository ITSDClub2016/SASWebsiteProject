<?php
/**
 * The loop that displays posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

<div class="col-md-9">
    <h3>Title</h3>
    <hr>

    <?php /* Display navigation to next/previous pages when applicable */ ?>
    <?php if ( $wp_query->max_num_pages > 1 ) : ?>
        <nav>
            <?php next_posts_link( __( '&larr; Older posts', 'starkers' ) ); ?>
            <?php previous_posts_link( __( 'Newer posts &rarr;', 'starkers' ) ); ?>
        </nav>
    <?php endif; ?>

    <?php /* If there are no posts to display, such as an empty archive page */ ?>
    <?php if ( ! have_posts() ) : ?>
            <h1><?php _e( 'Not Found', 'starkers' ); ?></h1>
                <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'starkers' ); ?></p>
    <?php endif; ?>

    <?php while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="col-md-12 post-in-loop no-pad">
            <h3 class="blue-text"><?php the_title(); ?></h3>
            <h4 class="blue-text"><?php echo get_field("event_date"); ?></h4>
            <p>
                <?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="btn btn-default pink" role="button">Read More</a>
        </div>
    </article>

    <?php endwhile; // End the loop. Whew. ?>

    <?php /* Display navigation to next/previous pages when applicable */ ?>
    <?php if (  $wp_query->max_num_pages > 1 ) : ?>
        <nav>
            <?php next_posts_link( __( '&larr; Older posts', 'starkers' ) ); ?>
            <?php previous_posts_link( __( 'Newer posts &rarr;', 'starkers' ) ); ?>
        </nav>
    <?php endif; ?>
</div>