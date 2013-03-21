<?php
/*
Template Name: Apples Page
*/
?>
<?php get_header(); ?>
	<div id="contentwrapper">
		<div id="leftcolumn">
			<?php wp_nav_menu( array( 'theme_location' => 'subnav-products', 'menu_id' => 'subnav' ) ); ?>        
			<?php get_sidebar('map'); ?>
		</div>
		<div id="middlecolumn">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
<?php get_footer(); ?>
<script>
	$(document).ready(function(){
		$('.apple_moreinfo').hide();
		$('table a').click(function(){
			//close all
			$(this).parent().parent().addClass('selected')
			$('.apple_moreinfo').hide();
			//open the one
			var e = $(this).parent().parent().next('.apple_moreinfo');
		  e.toggle();
			$(this).click(function(){
			  e.toggle();
		  });
		});
	});
</script>