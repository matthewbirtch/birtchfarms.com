<?php
/*
Template Name: Activities Page
*/
?>
<?php get_header(); ?>
	<div id="contentwrapper">
		<div id="leftcolumn">
			<?php wp_nav_menu( array( 'theme_location' => 'subnav-activities', 'menu_id' => 'subnav' ) ); ?>        
			<?php get_sidebar('gallery'); ?>
		</div>
		<div id="middlecolumn">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
<?php get_footer(); ?>