<?php include("globaloptions.php"); ?>


</div><!--end main-->

<?php get_sidebar(); ?>

<div class="clear"></div>
</div><!--end content-->
</div><!--end contentContainer-->

<div id="footerContainer">
<div id="footer">  

<div id="footerWidgets">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget') ) : endif; ?>
</div>

<? if ($wpuniversity_footerpage) { ?> 
<div id="footerPage">
		<h2><span><?php echo getPageTitle($wpuniversity_footerpage); ?></span></h2>
		<p><?php echo getPageContent($wpuniversity_footerpage); ?></p>
	<div class="clear">&nbsp;</div>
</div><!--end footerPage-->
<?php } ?>

<div class="clear"></div>
</div><!--end footer-->
</div><!--end footerContainer-->

<div id="bottomBarContainer">
	<div id="bottomBar">
		<div id="socialbuttons">
			<!--RSS-->
			<a href="<?php bloginfo('rss2_url'); ?>" title="RSS feed">RSS</a>
			
			<!--Twitter-->
			<? if ($wpuniversity_twitter) { ?> 
			| <a href="http://twitter.com/<? echo $wpuniversity_twitter; ?>" title="Follow me on Twitter"  rel="nofollow">Twitter</a>
			<? } ?>
			
			<!--Facebook-->
			<? if ($wpuniversity_facebook) { ?> 
			| <a href="<? echo $wpuniversity_facebook; ?>" title="Facebook Profile" rel="nofollow">Facebook</a>
			<? } ?>
		</div><!--end socialbuttons-->
	
		<div id="copyright">&copy; Copyright <?php echo date("Y "); bloginfo('name'); ?>. All rights reserved. </div>
	</div><!--end bottomBar-->
</div><!--end bottomBarContainer-->

<script src="<?php bloginfo('template_url'); ?>/scripts/scripts.js" type="text/javascript"></script>
<?php wp_footer(); ?>

</body>
</html>