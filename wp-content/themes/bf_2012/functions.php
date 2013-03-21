<?php
/**
 * @package WordPress
 * @subpackage bf_2012
 */
	add_action( 'init', 'register_my_menus' );
	function register_my_menus() {
		register_nav_menus(
			array(
			'primary' => __( 'Privary Nav'),
			'subnav-about' => __('About Subnav'),
			'subnav-news' => __('News Subnav'),
			'subnav-products' => __('Products Subnav'),
			'subnav-events' => __('Events Subnav'),
			'subnav-activities' => __('Activities Subnav'),
			'subnav-tours' => __('Tours Subnav'),
			'subnav-local' => __('Local Attractions Subnav'),
			'subnav-footer' => __('Footer Nav')
			)
		);
	}
	
	function new_excerpt_more($more) {
	       global $post;
		return ' <a href="'. get_permalink($post->ID) . '">Read the Rest...</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
	
	function get_the_excerpt_sample($id=false) {
      global $post;

      $old_post = $post;
      if ($id != $post->ID) {
          $post = get_page($id);
      }

      if (!$excerpt = trim($post->post_excerpt)) {
          $excerpt = $post->post_content;
          $excerpt = strip_shortcodes( $excerpt );
          $excerpt = apply_filters('the_content', $excerpt);
          $excerpt = str_replace(']]>', ']]&gt;', $excerpt);
          $excerpt = strip_tags($excerpt);
          $excerpt_length = apply_filters('excerpt_length', 55);
          $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');

          $words = preg_split("/[\n\r\t ]+/", $excerpt, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
          if ( count($words) > $excerpt_length ) {
              array_pop($words);
              $excerpt = implode(' ', $words);
              $excerpt = $excerpt . $excerpt_more;
          } else {
              $excerpt = implode(' ', $words);
          }
      }

      $post = $old_post;

      return $excerpt;
  }
	
	if ( function_exists('register_sidebars') ) register_sidebars(2);
	
?>