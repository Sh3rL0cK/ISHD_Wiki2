<?php include("globaloptions.php"); ?>	

<div id="sidebar">

<ul>
        <?php 
		if($post->post_parent)
  		$children = wp_list_pages("title_li=&sort_column=menu_order&child_of=".$post->post_parent."&echo=0");
  		else
  		$children = wp_list_pages("title_li=&sort_column=menu_order&child_of=".$post->ID."&echo=0");
  		if ($children) { ?>
  		<li class="widget">
  		<h2 class="widgettitle"><span>Related Pages</span></h2>
  		<div class="widgetcontent">
  		<ul id="subnav">
  		<?php echo $children; ?>
  		</ul>
  		</div>
  		</li>
  		<?php } ?>

<?php if (is_front_page()) { ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Page Widgets') ) : endif; ?>
<?php } ?>

<?php if (is_page("Contact")) { ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Contact Page Widgets') ) : endif; ?>
<?php } ?>

<?php if (is_page() && !is_page("Contact") || is_404()) { ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Page Widgets') ) : endif; ?>
<?php } ?>

<?php if (is_single() || is_category() || is_tag() || is_search() || is_archive()) { ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Widgets') ) : endif; ?>
<?php } ?>

</ul>

</div><!--end sidebar-->