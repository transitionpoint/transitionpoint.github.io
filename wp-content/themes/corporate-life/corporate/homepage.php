<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
<?php include('promo.php'); ?>
    <!-- Begin of content part -->
    <div class="content">
    <!--Begin of index mainbar-->
            <div class="index_mainbar">
            <!-- Start posts -->
            <?php  query_posts('showposts=4'); ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="index_post">
                    <div class="date">
                        <div class="day"><?php the_time('d') ?></div>
                        <div class="month"><?php the_time('F') ?></div>
                        <div class="meta_comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
                    </div>
                    <div class="entry">
                        <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                        <?php the_excerpt(); ?> 
                    </div>
                </div>
             <?php endwhile; ?>   
             
            </div>
            <!--End of index mainbar-->

<?php include('sidebar_index.php'); ?>
<?php get_footer(); ?>
