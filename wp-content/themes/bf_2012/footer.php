<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage bf_2012
 */
?>
		<div class="clear"></div>
		<div id="bottomtouts">
			<div id="tout_wine"><a href="?page_id=112"></a>
					<h3>Fruit Wines</h3>
				<p>A colourful array to choose from&hellip;</p>
				<a href="?page_id=112" class="button">&gt; Learn More</a>
			</div>
			<div id="tout_pyoapples"><a href="?page_id=102"></a>
					<h3>Pick Your Own Apples</h3>
				<p>This fall, make it a family outing! Enjoy the fresh air and fresh produce picked straight form the tree and the field.</p>
				<a href="?page_id=102" class="button">&gt; Learn More</a>
			</div>
			<div id="tout_gifts"><a href="?page_id=114"></a>
					<h3>Gift Baskets</h3>
				<p>Great ideas for any occasion</p>
				<a href="?page_id=114" class="button">&gt; Learn More</a></div>
			</div>
		<div id="footer">
		  <?php wp_nav_menu( array( 'theme_location' => 'subnav-footer' ) ); ?>
		  <p class="clearBoth">&copy; 2009 Birtch Farms. All Rights Reserved.</p>
		</div>
	</div><!-- end mainwrapper -->	
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/functions.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/sorttable.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.tools.min.js"></script>
	<script>
		
		$(document).ready(function(){
			$('.mobile-menu-button').click(function(){
				$('#nav').slideToggle();
			});
		});
		$(function() {
		  $(".trigger").overlay({effect: 'apple', onClose:function() {$('#tframe').remove()}, mask: '#000'});
		});
		$(".trigger").click(function(){
		  $('.apple_overlay').prepend('<iframe id="tframe" width="640" height="390" src="http://www.youtube.com/embed/anmqOs_7Of4" frameborder="0" allowfullscreen></iframe>');
		});
	</script>
	<?php wp_footer(); ?>
	</body>
</html>