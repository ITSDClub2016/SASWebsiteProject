<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!--Animate CSS-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.css">

    <!--Font Awesome-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">

    <!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!--ROBOTO FONT-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500" rel="stylesheet">

    <!--Custom JS-->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>

    <!--meta-->
    <meta name="viewport" content="width=device-width">
    
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
 
    global $page, $paged;
 
    wp_title( '|', true, 'right' );
 
    bloginfo( 'name' );
 
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
 
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );
 
    ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>
 
<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>
    
</head>
 
<body <?php body_class(); ?>>
    
    <style>
        .navbar-fixed-top{
            top: 35px;
        }
    </style>
 
    <?php $PageUrl = $_SERVER[REQUEST_URI]; ?>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><img class="header-logo" src="<?php bloginfo('template_directory'); ?>/images/logo.svg"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="<?php echo ($PageUrl == "/" ? 'active' : '')?>"><a href="/">Home</a></li>
                    <li class="<?php echo ($PageUrl == "/executives/" ? 'active' : '')?>"><a href="/executives">The Executives</a></li>
                    <li class="<?php echo ($PageUrl == "/events/" ? 'active' : '')?>"><a href="/events">Events</a></li>
                    <li class="<?php echo ($PageUrl == "/resources/" ? 'active' : '')?>"><a href="/resources">Resources</a></li>
                    <li class="dropdown <?php echo ($PageUrl == "/general-members/" || $PageUrl == "/become-an-executive/" ? 'active' : '')?>">
                        <a class="dropdown-toggle" data-toggle="dropdown">Memebership<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="<?php echo ($PageUrl == "/general-members/" ? 'active' : '')?>"><a href="/general-members">General Members</a></li>
                            <li class="<?php echo ($PageUrl == "/become-an-executive/" ? 'active' : '')?>"><a href="/become-an-executive">Become an executive</a></li>
                        </ul>
                    </li>
                    <li class="dropdown <?php echo ($PageUrl == "/meet-our-sas-ambassadors/" || $PageUrl == "/have-a-coffee-meeting/" ? 'active' : '')?>">
                        <a class="dropdown-toggle" data-toggle="dropdown">Connect<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="<?php echo ($PageUrl == "/meet-our-sas-ambassadors/" ? 'active' : '')?>"><a href="/meet-our-sas-ambassadors">Meet our SAS Ambassadors</a></li>
                            <li class="<?php echo ($PageUrl == "/have-a-coffee-meeting/" ? 'active' : '')?>"><a href="/have-a-coffee-meeting">Have a coffee meeting</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right header-icons">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <main>