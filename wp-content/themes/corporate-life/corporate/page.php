<?php get_header(); ?>
    <!-- Begin of content part -->
    <div class="content">
    	<!--Begin of mainbar-->
        <div class="mainbar">
        <!-- Start posts -->
      	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        	<div class="page">            	
                <div class="page_entry">
                	<h1><?php the_title(); ?></h1>
                    
                     <?php the_content('<h5>Read More &rarr;</h5>'); ?> 
                    
                </div>
            </div>
         <?php endwhile; endif; ?>   
         <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
            
         <!-- End of posts -->
        </div> 
        <!--End of mainbar-->


<?php get_sidebar(); ?>

<?php get_footer(); ?>
