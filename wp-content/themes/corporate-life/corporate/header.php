<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<!-- 
	Theme Name: Corporate Life
	Theme URI: http://www.getacustomdesign.com/
	Version: 1.0
	Author: Jay Hafling
	Author URI: http://www.jayhafling.com/
-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.gif" type="image/x-icon" />
<script src="<?php bloginfo('template_url'); ?>/js/muScript.js" type="text/javascript"></script>
<script type="text/javascript">
function inputcheck(obj,mode){
	if(mode=="focus"){
	obj.value=''
	obj.style.color='#000'
	}
}
</script>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body>
<div id="wrap">
	<!-- Begin of header -->
	<div class="header">
    	<div class="header_left">
    		<div class="header_right">
            	<!-- Edit width and height parametres here style="width:167px; height:27px;" -->
    			<a href="<?php echo get_option('home'); ?>/" class="logo" style="width:167px; height:27px;" title="<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.gif" alt="<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>" /></a>
                <div class="header_right_side">
                	<a href="<?php bloginfo('rss2_url'); ?>" class="rss" title="Subscribe to rss feed"><img src="<?php bloginfo('template_url'); ?>/images/icon_rss.gif" width="24" height="24" alt="Subscribe to rss feed" /></a><!-- RSS Icon -->
                    <form class="search_form" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>"><input type="text" class="search_input" value="Search" name="s" id="s" onfocus="javascript:inputcheck(this,'focus')" onblur="javascript:inputcheck(this,'blur')" /><input type="submit" class="search_submit" value=" " /></form><!-- Search form -->
                    <!-- Menu -->
                	<ul class="menu">
                    	<?php wp_list_pages('hide_empty=0&title_li='); ?>                                                      
                    </ul>
                    <!-- End of menu -->	    
                </div>
                <div class="clear"></div>
    		</div>
    	</div>
    </div>
    <!--End of header -->