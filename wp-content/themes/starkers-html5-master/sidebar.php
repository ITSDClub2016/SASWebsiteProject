<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

<div class="col-md-3">

    <h3>Upcoming Events</h3>
    <hr/>

    <?php query_posts( array(
       'category_name' => 'events',
       'posts_per_page' => 3,
    )); ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
        <h4><small><?php echo get_field("event_date"); ?></small></h4>
        <p><?php echo wp_trim_words( get_the_content(), 10, '...' ); ?></p>
        <hr>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>


    <h3>Resources</h3>
    <hr/>
    
    <?php query_posts( array(
       'category_name' => 'resources',
       'posts_per_page' => 3,
    )); ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
        <h4><small><?php echo get_field("event_date"); ?></small></h4>
        <p><?php echo wp_trim_words( get_the_content(), 10, '...' ); ?></p>
        <hr>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
    
</div>