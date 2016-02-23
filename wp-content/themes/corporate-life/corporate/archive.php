<?php get_header(); ?>

    <!-- Begin of content part -->
    <div class="content">
    	<!--Begin of mainbar-->
        <div class="mainbar">
        <!-- Start posts -->
        <?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>
 	  <?php } ?>


		<div class="navigation">
                <h5 class="float-left">
                	<?php previous_posts_link('&larr; Previous Entries') ?>
                </h5>
                <h5 class="float-right">
                	<?php next_posts_link('Next Entries &rarr;') ?>
                </h5>
                <div class="clear"></div>
                
            </div>

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
	<?php else :
		
		if ( is_category() ) { // If this is a category archive
			printf("<div class='post'><div class='inner_entry'><h2>Not Found</h2><p>Sorry, but there aren't any posts in the %s category yet.</p></div></div></div>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<div class='post'><div class='inner_entry'><h2>Not Found</h2><p>Sorry, but there aren't any posts with this date.</p></div></div></div>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<div class='post'><div class='inner_entry'><h2>Not Found</h2><p>Sorry, but there aren't any posts by %s yet.</p></div></div></div>", $userdata->display_name);
		} else {
			echo("<div class='post'><div class='inner_entry'><h2>Not Found</h2><p>No posts found.</p></div></div></div>");
		}
		

	endif;
?>
<!-- End of posts -->
        </div> 
        <!--End of mainbar-->




<?php get_sidebar(); ?>

<?php get_footer(); ?>
