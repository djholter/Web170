<?php get_header(); ?>

<!--------------------------Content------------------------>
<div id="content">

    
<!----------Beginning Loop shortened version in class------>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  //start loop ?>
    
    <!--page content will go here-->
<!--<article id="post-excert-<?php the_ID(); ?>" class="post-excert"-->
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<small>Posted on <?php the_time ('F j,Y'); ?> by <?php the_author(); ?></small>
    
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail ( 'thumbnail' ); ?>"</a>
    <?php the_excerpt(); ?>
    
<p class="read-more"><a href="<?php the_permalink(); ?>">Read More &raquo;</a></p>
<?php endwhile; endif; ?>
<!--End Loop-->

<!--insert sidebar-->
    <div id="sidebar"></div>
<!--stop sidebar-->

<small>index.php</small>
    
</div> 
<!------------------------ End Content---------------------->

<?php get_sidebar(); ?>
<?php get_footer(); ?>