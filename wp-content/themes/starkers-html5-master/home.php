<?php /* Template Name: home */ ?>

<?php get_header();

$media_query = new WP_Query(
    array(
        'post_type' => 'attachment',
        'post_status' => 'inherit',
        'posts_per_page' => -1,
        'category_name' => 'home_slider'
    )
);
$list = array();
foreach ($media_query->posts as $post) {
    $list[] = wp_get_attachment_url($post->ID);
}
?>




    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
                $arrlength = count($list);
                for($i = 0; $i < $arrlength; $i++) :
            ?>
            
            <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>" class="<?php echo ($i==0 ? 'active' : ''); ?>"></li>
            
            <?php endfor; ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            
            <?php
                for($i = 0; $i < $arrlength; $i++) :
            ?>
            
            <div class="item <?php echo ($i==0 ? 'active' : ''); ?>">
                <img src="<?php echo $list[$i] ?>">
            </div>
            
            <?php endfor; ?>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <div class="col-sm-3 home-title">Who We Are</div>
        <div class="col-sm-9 home-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam dui quis elit porttitor sodales. Curabitur ac lorem arcu. Aliquam erat volutpat. Quisque tempus lorem a erat accumsan vulputate. Ut eget facilisis libero. Aenean id felis dictum, eleifend mauris molestie, elementum erat. Ut lectus justo, sollicitudin in elit et, mattis molestie mi. Vestibulum elementum aliquam dolor. Integer elementum nulla ut dui faucibus dapibus.</div>

        <div class="col-sm-3 home-title">Who We Do</div>
        <div class="col-sm-9 home-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam dui quis elit porttitor sodales. Curabitur ac lorem arcu. Aliquam erat volutpat. Quisque tempus lorem a erat accumsan vulputate. Ut eget facilisis libero. Aenean id felis dictum, eleifend mauris molestie, elementum erat. Ut lectus justo, sollicitudin in elit et, mattis molestie mi. Vestibulum elementum aliquam dolor. Integer elementum nulla ut dui faucibus dapibus.</div>

        <div class="col-sm-3 home-title">Purposes</div>
        <div class="col-sm-9 home-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam dui quis elit porttitor sodales. Curabitur ac lorem arcu. Aliquam erat volutpat. Quisque tempus lorem a erat accumsan vulputate. Ut eget facilisis libero. Aenean id felis dictum, eleifend mauris molestie, elementum erat. Ut lectus justo, sollicitudin in elit et, mattis molestie mi. Vestibulum elementum aliquam dolor. Integer elementum nulla ut dui faucibus dapibus.</div>

        <div class="col-sm-3 home-title">Values</div>
        <div class="col-sm-9 home-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam dui quis elit porttitor sodales. Curabitur ac lorem arcu. Aliquam erat volutpat. Quisque tempus lorem a erat accumsan vulputate. Ut eget facilisis libero. Aenean id felis dictum, eleifend mauris molestie, elementum erat. Ut lectus justo, sollicitudin in elit et, mattis molestie mi. Vestibulum elementum aliquam dolor. Integer elementum nulla ut dui faucibus dapibus.</div>
    </div>

    <div class="home-quick-link">
        <div class="col-md-6">
            <h3>Check Out Our Latest Event</h3>
            <a href="#" class="btn btn-default pink" role="button">Events</a>
        </div>
        <div class="col-md-6">
            <h3>Check Out Our Resources</h3>
            <a href="#" class="btn btn-default pink" role="button">Resources</a>
        </div>
    </div>


<?php get_footer(); ?>