<?php
 /* @package WordPress
 * @subpackage bf_2012
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8" >
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="<?php
		  if( is_front_page() ) {
  		  echo bloginfo('description'); 
    	} else {
    	  if ( have_posts() && (is_single() || is_page()) ) : while(have_posts()) : the_post();
    		   $meta = str_replace(array("\n", "\r", "\t"), " ", strip_tags(get_the_excerpt()));
    		   echo apply_filters('the_excerpt_rss', $meta);
    		endwhile;
    		elseif ( is_category() || is_tag() ) :
    		   if ( is_category() ) :
    		      echo "Posts related to Category: " . single_cat_title("", FALSE);
    		   elseif ( is_tag() ) :
    		      echo "Posts related to Tag: " . single_tag_title("", FALSE);
    		   endif;
    		else:
    		   echo bloginfo('description'); 
    		endif;
    	}
  	?>" />
		<meta name="Keywords" content="birtch, farm, ontario, woodstock, canada, apple, picking, pumpkin, pick, orchard, gift, baskets, wine, winery, fruit wine, fruit, woodstock, innerkip, southwestern, fall, family, kids, events, country, award winning, tours, school, children playground, motorcoach" />
		<!-- Mobile viewport optimized: j.mp/bplateviewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta property="fb:admins" content="578475556, 598308581" />
		<meta property="og:locality" content="Woodstock" />
		<meta property="og:region" content="ON" />
		<meta property="og:postal-code" content="N4S7W2" />
		<meta property="og:country-name" content="CAN" />
		<meta property="og:title" content="Birtch Farms & Estate Winery" />
		<meta property="og:type" content="company"/>
		<meta property="og:url" content="http://www.birtchfarms.com/" />
		<meta property="og:image" content="http://www.birtchfarms.com/assets/images/logo.gif" />
		<meta property="og:site_name" content="BirtchFarms" />
		<meta property="og:description" content="Birtch Farms, in Woodstock, Ontario, offers apple picking and pumpkin picking, a children's playground and a small corn maze, an estate winery featuring fruit wines and gift baskets made from locally grown products, with tours, tastings and motorcoach programs."/>
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="alternate" type="application/rss+xml" title="RSS" href="http://twitter.com/statuses/user_timeline/46693237.rss" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />		
		<script src="<?php echo get_template_directory_uri(); ?>/javascripts/modernizr.custom.77728.js"></script>
		<script src="http://use.typekit.com/nba2pxy.js" type="text/javascript"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<?php
			wp_head();
		?>
		<script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-3323495-2']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
	</head>
	<?php if(is_page()) { $page_slug = 'page-'.$post->post_name; } ?>
	<body <?php body_class($page_slug); ?> >
	<div id="fb-root"></div>
	<div class="apple_overlay" id="video_overlay"><a href="#" class="close"></a></div>
	<div id="mainwrapper">
		<div id="header">
			<div id="logo"><a href="<?php echo get_settings('home'); ?>">Birtch Farms &amp; Estate Winery</a></div>
			<div id="contactinfo">R.R. 7 Woodstock, Ontario N4S 7W2<br />
				519.469.3040 &bull; FAX: 519.469.3588<br />
				<a href="mailto:in%66%6f@bir%74c%68%66arm%73%2ec%6f%6d">info@birtchfarms.com</a><br />
				<a href="?page_id=65" class="button">&gt; View Hours</a> </div>
			<a class="mobile-menu-button">Menu</a>
			<div class="clear"></div>
		</div>
		<div id="nav" class="main_nav"> 
		  <div id="search"><?php get_search_form(); ?></div>
		  <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		  <div class="clear"></div>
		</div>
			<div id="headerimage">
				<h1 class="mainheading">
					<?php 
						if(is_single()) { 
							echo 'Blog';
						} else if(is_page()){ 
							the_title();
						} else if(is_search()){
						  echo 'Search Results';
						} else {
						  echo 'Blog';
						}
					?>
				</h1>
			</div>
		
		