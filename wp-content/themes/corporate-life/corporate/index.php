<?php get_header(); ?>

    <!-- Begin of content part -->
    <div class="content">
    	<!--Begin of mainbar-->
        <div class="mainbar">
        <!-- Start posts -->
        <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
        	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            	<div class="date">
                	<div class="day"><?php the_time('d') ?></div>
                    <div class="month"><?php the_time('F') ?></div>
                    <div class="meta_comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
                </div>
                <div class="inner_entry">
                	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    
                    <?php the_content('<h5>Read More &rarr;</h5>'); ?>                    
                </div>
            </div>
        <?php endwhile; ?>   
            <div class="navigation">
                <h5 class="float-left">
                	<?php previous_posts_link('&larr; Previous Entries') ?>
                </h5>
                <h5 class="float-right">
                	<?php next_posts_link('Next Entries &rarr;') ?>
                </h5>
                <div class="clear"></div>
                
            </div>
         <?php else : ?>  
         <div class="post"> 
             <div class="inner_entry">
                <h2>Not Found</h2>
                <p>Sorry, but you are looking for something that isn't here.</p>
             </div>
         </div>
        <?php endif; ?>
         <!-- End of posts -->
        </div> 
        <!--End of mainbar-->


<?php get_sidebar(); ?>

<?php get_footer(); ?>
