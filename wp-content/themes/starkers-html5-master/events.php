<?php /* Template Name: Events */ ?>

<?php get_header(); ?>
<div class="container">
<div class="col-md-9">
    <h3>Events</h3>
    <hr>

    <?php query_posts( array('category_name' => 'events')); ?>    
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
    <?php wp_reset_query(); ?>
    </div>
    
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>