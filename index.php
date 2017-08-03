<?php get_header(); ?>



<div id="content">
    
<!--Beginning Loop-->
<?php if ( have_posts()) :while (have_posts()) : the_post(); //start the loos ?>
<h2><a href="<?php the_permalink(); //link to the page or posting ?>"><?php the _title(); //get the page or posting title?></a></h2>
<?php the_content(''); //get page or posting written content ?>
<?php endwhile; endif; //end the loop ?>
<!--End Loop-->

<!--Beginning Post and 404-->
<?php

if(have_posts()) {
    
    while(have_posts()) {
        
        the_post();
        
        the_content('');
        
    }
    
} else {
    
    echo '<p>404. Not found.</p>'
    
}

?>
<!--End Post and 404-->
    
</div> 

<?php get_footer(); ?>