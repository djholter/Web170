<?php get_header(); ?>

<div id="content">
    
<!--Beginning Loop shortened version in class-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  //start loop ?>
    <!--page content will go here-->
<h2><?php the_title(); ?></h2>
<?php the_content(''); ?>
<?php endwhile; endif; ?>
<!--End Loop-->

<!--insert sidebar-->
    <div id="sidebar"></div>
<!--stop sidebar-->

<small>page.php</small>
    
</div> 
<!--End of Content section-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>