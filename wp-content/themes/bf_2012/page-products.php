<?php
/*
Template Name: Products Page
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
		$('.giftbasket').hide();
		$('.giftbasket').first().show();
		$('#giftbaskets_list li a').click(function(){
			$('.giftbasket').fadeOut();
			var gb = $(this).attr('href'); 
			$(gb).fadeIn();
			return false;
		});
		
		$('.wine-list-item-more').hide();
    $('.wine-list-item-more').first().show();
		$('.wine-list-item-link').first().hide();    
		$('.wine-list-item-link').click(function(){
			$('.wine-list-item-link').show();
			$(this).hide();
      $('.wine-list-item-more').slideUp(); 
      $(this).parent().children('.wine-list-item-more').first().slideDown();
      return false;
    });
	});
</script>