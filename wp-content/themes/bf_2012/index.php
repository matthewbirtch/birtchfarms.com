<?php
/**
 *
 * @package WordPress
 * @subpackage bf_2012
 */

get_header(); ?>
<div id="contentwrapper">
	<div id="leftcolumn">
		<?php wp_nav_menu( array( 'theme_location' => 'subnav-news', 'menu_id' => 'subnav' ) ); ?>
		<?php get_sidebar(); ?>
	</div>
	<div id="middlecolumn">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	      <article class='post post-preview'>
          <header class='post-header'>
            <div class='post-category'>
              <?php the_category(', '); ?>
            </div>
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><h2 class='post-title'><?php the_title(); ?></h2></a>
            <time class='post-date'>
              Posted by: 
              <?php the_author(); ?>
              on
              <?php the_time('F j, Y'); ?>
            </time>
          </header>
          <div class='post-content'>
  					<?php the_excerpt();?>
          </div>
          <footer class='post-footer'>
            <div class="post-tags"><?php the_tags('Tags: ', ', '); ?></div>
          </footer>
        </article>
			<?php endwhile; else : ?>
			<h2 class="center">Not Found</h2>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>
		<?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>