<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
    
    <!--Begin Meta-->
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
    <!--End Meta-->
    
    
    <!--Begin Styles-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
    <!--End Styles-->
    
    
   <?php wp_head(); ?> 

    
    </head>
    <body <?php body_class(); ?>>
    
    <!--Begin Header -->
    <div id="header">
        <div id="spotlight">
           <img src="<?php bloginfo('template_directory'); ?>/images/home-head.png" alt="Bonsai Educational Center Welcome" width="1188" height="338">
        </div>
    <!--End header-->
        
        
    </div> 
<!--
        Begin Navigation
            <div id="navigation">
                <ul>
                    <li>
                        <a title="About Us" href="#" aria-haspopup="true">About</a>
                        <ul>
                            <li>
                                <a title="Masters" href="#">Masters</a>
                            </li>
                            <li>
                                <a title="Apprentices" href="#">Apprentices</a>
                            </li>
                            <li>
                                <a title="Goals" href="#">Goals</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a title="Aprenticeships" href="#" aria-haspopup="true">Apprenticeships</a>
                        <ul>
                            <li>
                                <a title="Applications" href="#">Applications</a>
                            </li>
                            <li>
                                <a title="Experience" href="#">Experience</a>
                            </li>
                            <li>
                                <a title="Expectations" href="#" aria-haspopup="true">Expectations</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a title="The Art of Bonsai" href="#" aria-haspopup="true">The Art of Bonsai</a>
                        <ul>
                            <li>
                                <a title="Kinds" href="#">Kinds</a>
                            </li>
                            <li>
                                <a title="History" href="#">History</a>
                            </li>
                            <li>
                                <a title="Techniques" href="#">Techniques</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a title="Workshops" href="#" aria-haspopup="true">Workshops</a>
                        <ul>
                            <li>
                                <a title="Starting" href="#">Starting</a>
                            </li>
                            <li>
                                <a title="Fertilizing" href="#">Fertilizing</a>
                            </li>
                            <li>
                                <a title="Pruning" href="#">Pruning</a>
                            </li>
                            <li>
                                <a title="Wiring" href="#">Wiring</a>
                            </li>
                            <li>
                                <a title="Rocking" href="#">Rocking</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a title="Forum" href="#">Forum</a>
                    </li>
                    <li>
                        <a title="Shop" href="#" aria-haspopup="true">Shop</a>
                        <ul>
                            <li>
                                <a title="Books &#38; DVD's" href="#">Books &#38; DVD's</a>
                            </li>
                            <li>
                                <a title="Tools" href="#">Tools</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a title="Contact Us" href="#">Contact Us</a>
                    </li>
                </ul>
            
            </div>
-->
<!--Begin Navigation-->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', ) ); ?>

<!--End Navigation-->
        
    <!--Begin Middle -->
    <div id="middle">
        