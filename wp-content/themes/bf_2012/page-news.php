<?php
/*
Template Name: News Page
*/
?>
<?php get_header(); ?>
		<div id="contentwrapper">
			<div id="leftcolumn">
				<?php wp_nav_menu( array( 'theme_location' => 'subnav-news', 'menu_id' => 'subnav' ) ); ?>        
				<?php get_sidebar('newslettersignup'); ?>
			</div>
			<div id="middlecolumn" class="narrow">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
				<div id="rightcolumn">
				  <?php get_sidebar(); ?>
				</div>
		</div>
<?php get_footer(); ?>