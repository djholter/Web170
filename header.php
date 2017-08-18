<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<!--<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>-->
    
    <!-- --------------Start Title Tag ------------------->
    <title><?php get_Bonsai_title_tag(); ?></title>
    <!----------------- End Title Tag -------------------->
    
    <!-----------------Begin Meta------------------------->
<!--    <meta name="description" content="<?php echo strip_tags(get_the_excert()); ?>" />-->
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
    <!------------------End Meta-------------------------->
    
    
    <!------------------Begin Styles---------------------->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
    
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?> /flexslider.css" type="text/css">
    <!-------------------End Styles----------------------->
    
    <!------------------Begin script---------------------->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>-->
    <script src="<?php bloginfo('template_directory'); ?> /scripts/jquery.flexslider.js"></script>
    <!-------------------End script----------------------->
    
    <!-------------------Begin slider--------------------->
    <script type="text/javascript" charset="utf-8">
        $(window).load(function() {
        $('.flexslider').flexslider();
        });
    </script>
    <!--------------------end slider----------------------->
    
    <!--------------------Begin Toggle Menu---------------->
    <!--------------------End Toggle Menu------------------>
    
    <!-------------------Start WP Head--------------------->   
     <?php wp_head(); ?> 
    <!--------------------End WP Head---------------------->
    
    
</head>
<body <?php body_class(); ?>>
    
<!--Begin Header -->
    <div id="header">
        <div id="spotlight">
           <img src="<?php bloginfo('template_directory'); ?>/images/home-head.png" alt="Bonsai Educational Center Welcome" width="1188" height="338">
        </div>
<!----------------------Toggle code------------------------->
<!--        <img id="toggle" src="<?php bloginfo('template_directory'); ?>/images/img-toggle.png" width=25 height="25" alt="Toggle Menu">-->
<!--------------------- End Toggle code--------------------->
    </div> 
<!-------------------------End header----------------------->
        
<!--------------------Begin Navigation---------------------->
<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) ); ?>
<!----------------------End Navigation---------------------->
        
    <!---------------------Begin Middle -------------------->
    <div id="middle">
        