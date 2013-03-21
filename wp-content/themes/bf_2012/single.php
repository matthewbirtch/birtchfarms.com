<?php
/**
 * The Template for displaying all single posts.
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
      <a href="blog" title="back" class="blog-back">« Back</a>
    	<?php while ( have_posts() ) : the_post(); ?>
    		<article class='post post-preview'>
          <header class='post-header'>
            <div class='post-category'>
              <?php the_category(', ') ?>
            </div>
            <h2 class='post-title'>
              <?php the_title(); ?>
            </h2>
            <time class='post-date'>
              Posted by: 
              <?php the_author(); ?>
              on
              <?php the_time('F j, Y'); ?>
            </time>
          </header>
          <div class='post-content'>
  					<?php the_content();?>
          </div>
          <footer class='post-footer'>
            <div class="post-tags"><?php the_tags('Tags: ', ', '); ?></div>
            <?php comments_template(); ?>
          </footer>
        </article>
    	<?php endwhile; // end of the loop. ?>
  	</div>
	</div>
<?php get_footer(); ?>