<?php
/**
 * The template for displaying the sidebar.
 *
 * @package WordPress
 * @subpackage bf_2012
 */
?>
<div id="tout_hours">
	<?php 
		$post = get_page_by_title('hours');
	  $content = apply_filters('the_content', $post->post_content);
	  echo $content;
	?>
</div>