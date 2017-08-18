<!--sidebar-->

<div id="sidebar">

    <!------------------ begin pge subnav ----------------->
    <div id="sub-navigation" class="widget">
        <?php if (is_page()) : ?>
        
        <h2 class="sub-navigation-title">
            <?php echo get_the_title($post->post_parent); ?>
        </h2>
        
        <ul class="sub-navigation-items">
            <?php 
            
        if ($post->post_parent) {
            wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __('')));
        } else {
            wp_list_pages(array('child_of' => $post->ID, 'title_li' => __('')));
        }
            
    ?></ul>
        
        <?php endif; ?>

        <?php if (!(is_page())) : ?>
        <h2 class="sub-navigation-title">Blog</h2>
        
        <ul class="sub-navigation-items">
            <?php wp_list_categories(array('title_li' => __(''))); ?>
        </ul>
        <?php endif; ?>

    </div>
    <!-------------------- End pge subnav ----------------->
    
    <!------------------Begin Quotes Mike ----------------->
    <?php if (get_post_meta($post->ID, 'Quote', true)) : ?> <blockquote><?php echo get_post_meta($post->ID></blockquote> 'Quote', true); ?></blockquote>
    <?php endif; ?>
    <!-------------------- End Quotes Mike----------------->
    
    
    
    <!-------------------- End pge subnav ----------------->
     <?php dynamic_sidebar(1); ?>
    <!-------------------- End pge subnav ----------------->

</div>
<!--end sidebar-->