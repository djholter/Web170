<?php get_header(); ?>

<div id="content">
    
<!--Beginning Loop shortened version in class-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  //start loop ?>
    <!--page content will go here-->
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_excerpt(); ?>
<?php endwhile; endif; ?>
<!--End Loop-->

<!--insert sidebar-->
    <div id="sidebar"></div>
<!--stop sidebar-->

<small>index.php</small>
    
</div> 
<!--End of Content section-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>