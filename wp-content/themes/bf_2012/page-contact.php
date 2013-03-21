<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div id="contentwrapper">
			<div id="leftcolumn">
				<?php wp_nav_menu( array( 'theme_location' => 'subnav-about', 'menu_id' => 'subnav' ) ); ?>
				<?php get_sidebar('gallery'); ?>
			</div>
			<div id="middlecolumn" class="narrow">
				<?php the_content(); ?>
			</div>
			<div id="rightcolumn">
				<?php get_sidebar('hours'); ?>
			</div>
		</div>
	<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>