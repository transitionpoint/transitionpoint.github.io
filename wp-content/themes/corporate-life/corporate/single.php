<?php get_header(); ?>

    <!-- Begin of content part -->
    <div class="content">
    	<!--Begin of mainbar-->
        <div class="mainbar">
        <!-- Start posts -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            	<div class="date">
                	<div class="day"><?php the_time('d') ?></div>
                    <div class="month"><?php the_time('F') ?></div>
                    <div class="meta_comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
                </div>
                <div class="inner_entry">
                	<h1><?php the_title(); ?></h1>
                    <?php the_content('<h5>Read More &rarr;</h5>'); ?> 
               
                <?php the_tags( '<div class="tags">Tags: ', ', ', '</div> '); ?>
                    
                </div>
            </div>
            <?php comments_template(); ?>
			<?php endwhile; else: ?>
            
            <div class="post"> 
             <div class="inner_entry">
                <h2>Not Found</h2>
                <p>Sorry, but you are looking for something that isn't here.</p>
                 </div>
             </div>
            <?php endif; ?>
            
         <!-- End of post -->
        </div> 
        <!--End of mainbar-->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
