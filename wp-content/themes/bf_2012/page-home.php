<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
	<div id="contentwrapper">
		<div id="leftcolumn">
			<?php 
				get_sidebar('map'); 
				get_sidebar('video'); 
				get_sidebar('facebook')
			?>
		</div>
		<div id="middlecolumn">
		  <!-- LATEST BLOG POST -->
			<h3>Latest from the blog:</h3>
			<?php
      	$args = array( 'numberposts' => '1' );
      	$recent_posts = wp_get_recent_posts( $args );
      	foreach( $recent_posts as $recent ){
      		echo '<article><header class="post-header">';
			echo '<a href="' . get_permalink($recent["ID"]) . '" title=" ' . esc_attr($recent["post_title"]) . '">';
      		echo '<h2 class="post-title">' . $recent["post_title"] . '</h2></a>';
			echo '<time class="post-date">Posted by: ' . the_author() . ' on ';
			echo the_time("F j, Y") . '</time>';
			echo '</header>';
      		echo '<p class="post-content">' . get_the_excerpt_sample($recent["ID"]) . '</p>';
					echo '</article>';
      	}
      ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>	
		</div>
		<div id="rightcolumn">
			<?php get_sidebar('twitter') ?>
		</div>
	</div>
<?php get_footer(); ?>