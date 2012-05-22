<?php
	if(!function_exists('getPageTitle'))
	{
		function getPageTitle($pageId)
		{
			if(!is_numeric($pageId))
			{
				return;
			}
			global $wpdb;
			$sql_query = 'SELECT DISTINCT * FROM ' . $wpdb->posts .
			' WHERE ' . $wpdb->posts . '.ID=' . $pageId;
			$posts = $wpdb->get_results($sql_query);
			if(!empty($posts))
			{
				foreach($posts as $post)
				{
					return nl2br($post->post_title);
				}
			}
		}
	}
?>
<?php
	if(!function_exists('getPageContent'))
	{
		function getPageContent($pageId)
		{
			if(!is_numeric($pageId))
			{
				return;
			}
			global $wpdb;
			$sql_query = 'SELECT DISTINCT * FROM ' . $wpdb->posts .
			' WHERE ' . $wpdb->posts . '.ID=' . $pageId;
			$posts = $wpdb->get_results($sql_query);
			if(!empty($posts))
			{
				foreach($posts as $post)
				{
					return nl2br($post->post_content);
				}
			}
		}
	}
?>
<?php
$themename = "University";
$shortname = "wpuniversity";
$options = array (
	array(	"name" => "Settings",
			"type" => "title"),
	array(	"type" => "open"),
	array(	"name" => "Primary Color:",
			"desc" => "Enter the HEX code for the color you would like to use. You can generate a HEX code <a target='_blank' href='http://www.colorpicker.com/'>here</a>",
			"id" => $shortname."_color",
			"std" => "#46b859",
			"type" => "text"),
	array(	"name" => "Page Exclude:",
			"desc" => "Enter page ID# numbers to exclude from main menu.",
			"id" => $shortname."_page",
			"std" => "888,999",
			"type" => "text"),
	array(	"name" => "Category Exclude:",
			"desc" => "Enter category ID# numbers to exclude from main menu.",
			"id" => $shortname."_cat",
			"std" => "888,999",
			"type" => "text"),	
	array(	"name" => "Featured Slider Category:",
			"desc" => "Enter category name for featured posts.",
			"id" => $shortname."_slider",
			"std" => "Featured",
			"type" => "text"),
	array(	"name" => "Home Posts Category 1:",
			"desc" => "Enter category name for posts to appear on home page.",
			"id" => $shortname."_postshome1",
			"std" => "News",
			"type" => "text"),
	array(	"name" => "Home Posts Category 2:",
			"desc" => "Enter category name for posts to appear on home page.",
			"id" => $shortname."_postshome2",
			"std" => "Sports",
			"type" => "text"),
	array(	"name" => "Home Posts Category 3:",
			"desc" => "Enter category name for posts to appear on home page.",
			"id" => $shortname."_postshome3",
			"std" => "Students",
			"type" => "text"),
	array(	"name" => "Home Posts Category 4:",
			"desc" => "Enter category name for posts to appear on home page.",
			"id" => $shortname."_postshome4",
			"std" => "",
			"type" => "text"),
	array(	"name" => "Home Posts Category 5:",
			"desc" => "Enter category name for posts to appear on home page.",
			"id" => $shortname."_postshome5",
			"std" => "",
			"type" => "text"),
	array(	"name" => "Home Posts Category 6:",
			"desc" => "Enter category name for posts to appear on home page.",
			"id" => $shortname."_postshome6",
			"std" => "",
			"type" => "text"),
	array(	"name" => "Number of Home Posts:",
			"desc" => "Enter the number of posts to appear on home page.",
			"id" => $shortname."_showhome",
			"std" => "2",
			"type" => "text"),
	array(	"name" => "Page ID for Footer Content:",
			"desc" => "Enter page ID# for the footer content. This will automatically be hidden in the navigation.",
			"id" => $shortname."_footerpage",
			"std" => "999",
			"type" => "text"),	
	array(	"name" => "Facebook:",
			"desc" => "Enter Facebook URL.",
			"id" => $shortname."_facebook",
			"std" => "",
			"type" => "text"),	
	array(	"name" => "Twitter:",
			"desc" => "Enter twitter username.",
			"id" => $shortname."_twitter",
			"std" => "",
			"type" => "text"),	
	array(	"type" => "close")
);
function mytheme_add_admin() {
    global $themename, $shortname, $options;
    if ( $_GET['page'] == basename(__FILE__) ) {
        if ( 'save' == $_REQUEST['action'] ) {
                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
                header("Location: themes.php?page=functions.php&saved=true");
                die;
        } else if( 'reset' == $_REQUEST['action'] ) {
            foreach ($options as $value) {
                delete_option( $value['id'] ); }
            header("Location: themes.php?page=functions.php&reset=true");
            die;
        }
    }
    add_menu_page($themename." Options", "".$themename." Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}
function mytheme_admin() {
    global $themename, $shortname, $options;
    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
?>
<div class="wrap">
<h2><?php echo $themename; ?> settings</h2>
<form method="post">
<?php foreach ($options as $value) { 
	switch ( $value['type'] ) {case "open":?>
        <table width="100%" border="0">
		<br />
		<?php break;case "close":?>
        </table><br />
		<?php break;case "title":?>
		<table width="100%" border="0">                
		<?php break;case 'text':?>
		<tr>
        <td width="20%"><?php echo $value['name']; ?></td>
        <td width="80%"><input style="width:200px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" /> <small><?php echo $value['desc']; ?></small></td>
        </tr>
        <tr><td colspan="2" style="margin-bottom:5px;">&nbsp;</td></tr>
		<?php break;case 'textarea':?>
        <tr>
            <td width="20%" rowspan="2" valign="middle"><?php echo $value['name']; ?></td>
            <td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:400px; height:200px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?></textarea></td>
        </tr>
        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;">&nbsp;</td></tr>
		<?php break;case 'select':?>
        <tr>
            <td width="20%" rowspan="2" valign="middle"><?php echo $value['name']; ?></td>
            <td width="80%"><select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php foreach ($value['options'] as $option) { ?><option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?></select></td>
       </tr>
       <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
       </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
		<?php break;case "checkbox":?>
            <tr>
            <td width="20%"><?php echo $value['name']; ?></td>
                <td width="80%"><? if(get_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> /> <small><?php echo $value['desc']; ?></small></td>
            </tr>
           <tr><td colspan="2" style="margin-bottom:5px;">&nbsp;</td></tr>
<?php break;} }?>
<!--</table>-->
<p class="submit">
<input name="save" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>
<?php } add_action('admin_menu', 'mytheme_add_admin'); ?>
<?php //SIDEBAR GENERATOR (FOR SIDEBAR AND FOOTER)-----------------------------------------------
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Blog Widgets',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</div></li>',
		'before_title' => '<h2 class="widgettitle"><span>',
		'after_title' => '</span></h2><div class="widgetcontent">',
));
register_sidebar(array('name'=>'Page Widgets',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</div></li>',
		'before_title' => '<h2 class="widgettitle"><span>',
		'after_title' => '</span></h2><div class="widgetcontent">',
));
register_sidebar(array('name'=>'Footer Widget',
		'before_widget' => '<div id="footerWidget" class="widget %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h2 class="widgettitle"><span>',
		'after_title' => '</span></h2><div class="widgetcontent">',
));
register_sidebar(array('name'=>'Home Page Widgets',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</div></li>',
		'before_title' => '<h2 class="widgettitle"><span>',
		'after_title' => '</span></h2><div class="widgetcontent">',
));
register_sidebar(array('name'=>'Contact Page Widgets',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</div></li>',
		'before_title' => '<h2 class="widgettitle"><span>',
		'after_title' => '</span></h2><div class="widgetcontent">',
));
//TINY URL GENERATOR-----------------------------------------------
function getTinyUrl($url) {
    $tinyurl = file_get_contents("http://tinyurl.com/api-create.php?url=".$url);
    return $tinyurl;
}?>
<?php

$key = "key";

$meta_boxes = array(

"custom_option" => array(
"name" => "custom_option",
"title" => "Custom Option",
"description" => "This is a desription of a custom post option")

);

function create_meta_box() {

global $key;

if( function_exists( 'add_meta_box' ) ) {

add_meta_box( 'new-meta-boxes', ' Custom Post Options', 'display_meta_box', 'post', 'normal', 'high' );

}

}

function display_meta_box() {

global $post, $meta_boxes, $key;
?>
<div class="form-wrap">
<?php

wp_nonce_field( plugin_basename( __FILE__ ), $key . '_wpnonce', false, true );

foreach($meta_boxes as $meta_box) {

$data = get_post_meta($post->ID, $key, true);
?>
<div class="form-field form-required">

<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>

<input type="text" name="<?php echo $meta_box[ 'name' ]; ?>" value="<?php echo htmlspecialchars( $data[ $meta_box[ 'name' ] ] ); ?>" />

<p><?php echo $meta_box[ 'description' ]; ?></p>

</div>

<?php } ?>
</div>
<?php

}

function save_meta_box( $post_id ) {

global $post, $meta_boxes, $key;

foreach( $meta_boxes as $meta_box ) {

$data[ $meta_box[ 'name' ] ] = $_POST[ $meta_box[ 'name' ] ];

}

if ( !wp_verify_nonce( $_POST[ $key . '_wpnonce' ], plugin_basename(__FILE__) ) )

return $post_id;

if ( !current_user_can( 'edit_post', $post_id ))

return $post_id;

update_post_meta( $post_id, $key, $data );
}

add_action( 'admin_menu', 'create_meta_box' );
add_action( 'save_post', 'save_meta_box' );
?>