<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div id="contentwrapper">
	<div id="leftcolumn">
		<?php get_sidebar(); ?>
	</div>
	<div id="middlecolumn">
	  <?php if ( have_posts() ) : ?>
				<header class="page-header">
					<h3 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyeleven' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article class='post post-preview'>
            <header class='post-header'>
              <div class='post-category'>
                <?php the_category(', '); ?>
              </div>
              <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><h2 class='post-title'><?php the_title(); ?></h2></a>
              <time class='post-date'>
                <?php the_time('F j, Y'); ?>
              </time>
            </header>
            <div class='post-content'>
    					<?php the_excerpt();?>
    					<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">» Read more</a></p>
            </div>
            <footer class='post-footer'>
              <div class="post-tags"><?php the_tags('Tags: ', ', '); ?></div>
            </footer>
          </article>

				<?php endwhile; ?>
			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
</div>
<?php get_footer(); ?>