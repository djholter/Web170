<?php get_header(); ?>

<!-------------------- Begin Content ----------------->

<div id="content">
    
<!--Beginning Loop shortened version in class-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  //start loop ?>
    <!--------------page content will go here------------->
    
<article id="post-<?php the_ID(); ?>" class="post">
    
<h2><?php the_title(); ?></h2>
    
<small>POsted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small>

<?php the_post_thumnail( 'large' ); ?>
    
<?php the_content(''); ?></article>
    
<?php endwhile; endif; ?>

    <small>single.php</small>
</div>

<!-------------------- --End Content --------------------->

<?php get_sidebar(); ?>
<?php get_footer(); ?>