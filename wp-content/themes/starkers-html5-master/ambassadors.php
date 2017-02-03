<?php /* Template Name: Ambassadors */ ?>

<?php get_header(); ?>
<div class="container">
    <div class="col-md-9">
        <h3>Meet Our SAS Ambassadors</h3>
        <hr>


        <?php query_posts( array('category_name' => 'ambassadors')); ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <div class="col-md-3 no-pad">

                <div class="member-img" style="background-image: url(<?php echo get_field('img'); ?>)"></div>

            </div>
            <div class="col-md-9 no-pad">
                <h3><?php echo get_field('name'); ?></h3>
                <h4><?php echo get_field('position'); ?></h4>
                <?php echo get_field('description'); ?>
            </div>
            <div class="col-md-12 no-pad">
                <hr/>
            </div>

        <?php endwhile;?>
        <?php wp_reset_query(); ?>
        
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>