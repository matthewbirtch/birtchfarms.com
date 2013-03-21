<?php
/*
Template Name: Tours Page
*/
?>
<?php get_header(); ?>
	<div id="contentwrapper">
		<div id="leftcolumn">
			<?php wp_nav_menu( array( 'theme_location' => 'subnav-tours', 'menu_id' => 'subnav' ) ); ?>        
			<?php get_sidebar('gallery'); ?>
			<?php get_sidebar('bookwithus'); ?>
		</div>
		<div id="middlecolumn">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
<?php get_footer(); ?>