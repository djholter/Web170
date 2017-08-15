<?php get_header(); ?>

<!--Start widgets-->
<div id="widgets">
    <section class="widget-item">
    <h2>About Me:</h2>
    <?php if ( have_post() ) : while( have_post() ) : the_post(); ?>
    <?php the_content(''); ?>
    <?php endwhile; endif; ?>
    </section>
    
    <section class="widget-item">
    <h2>Latest Postings:</h2>
    <ul>
    <?php rewind_posts(); ?>
    <?php query_posts('showposts=4'); ?>
    <?php while () : the_post(); ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
    </ul>
    </section>
    
    <section class="widget-item">
    <h2>Contact Me:</h2>
        <p><strong>phone: </strong>206.555.7747<br><strong>Email: </strong><a href="mailto:djholter@gmail.com">Holter Graphics</a></p>
        <p>1071 Spring Street<br>Seattle<br>Seattle, WA 98100</p>
    </section>
</div>
    
<!--Beginning Loop shortened version in class-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  //start loop ?>
    <!--page content will go here-->
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(''); ?>
<?php endwhile; endif; ?>
<!--End Loop-->

<!--insert sidebar-->
    <div id="sidebar"></div>
<!--stop sidebar-->

<small>front-page.php</small>
    
</div> 
<!--End of Content section-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>