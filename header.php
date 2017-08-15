<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
    
    <!-- Start Title Tag -->
    <title><?php get_Bonsai_title_tag(); ?></title>
    <!-- End Title Tag -->
    
    <!--Begin Meta-->
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
    <!--End Meta-->
    
    
    <!--Begin Styles-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?> /flexslider.css" type="text/css">
    <!--End Styles-->
    
    <!--Begin script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquiery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?> /scripts/jquery.flexslider.js"></script>
    <!--End script-->
    
    <!--Begin slider-->
    <script type="text/javascript" charset="utf-8">
        $(window).load(function() {
        $('.flexslider').flexslider();
        });
    </script>
    <!--end slier-->
    
<!--Start WP Head-->   
   <?php wp_head(); ?> 
<!--End WP Head-->
    
</head>
<body <?php body_class(); ?>>
    
<!--Begin Header -->
    <div id="header">
        <div id="spotlight">
           <img src="<?php bloginfo('template_directory'); ?>/images/home-head.png" alt="Bonsai Educational Center Welcome" width="1188" height="338">
        </div>
    </div> 
<!--End header-->
        
<!--Begin Navigation old--
    <div id="navigation">
        <ul id="navigation-items">
            <li><a href="#">About</li>
                <ul id="sub-navigation">
                    <li><a href="#">Masters</li>
                    <li><a href="#">Apprentices</li>
                    <li><a href="#">Goals</li>
                </ul>
            <li><a href="#">The Art of Bonsai</li>
                <ul id="sub-navigation">
                    <li><a href="#">Kinds</li>
                    <li><a href="#">History</li>
                    <li><a href="#">Techniques</li>
                </ul>
            <li><a href="#">Blog</li>
            <li><a href="#">Contact</li>
        </ul>
    </div>
--End Navigation old-->
        
<!--Begin Navigation-->
<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) ); ?>
<!--End Navigation-->
        
    <!--Begin Middle -->
    <div id="middle">
        