<?php
/**
 * The template for displaying the sidebar.
 *
 * @package WordPress
 * @subpackage bf_2012
 */
?>
	<aside>
		<h3>Recent Blog Posts</h3>
		<ul id="recent_posts">
		<?php
    	$args = array( 'numberposts' => '5' );
    	$recent_posts = wp_get_recent_posts( $args );
    	foreach( $recent_posts as $recent ){
    		echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
    	}
    ?>
    </ul>
	</aside>
	<aside>
		<h3>Archives</h3>
		<ul id="archives">
			<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
		</ul>
	</aside>