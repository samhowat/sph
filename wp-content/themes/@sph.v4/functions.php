<?php

/**
 * Theme Options page setup
 *
 */
add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' ); 

function theme_options_init(){
 //register_setting( 'sample_options', 'sample_theme_options');
} 

function theme_options_add_page() {
 add_theme_page( __( 'Theme Options', '@iamsam' ), __( 'Theme Options', '@iamsam' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
} 

function theme_options_do_page() { 
	global $select_options; 
	if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false;
	?>
	
<div>
<?php screen_icon(); echo "<h2>". __( 'Custom Theme Options', 'customtheme' ) . "</h2>"; ?>
<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
<div>
<p><strong><?php _e( 'Options saved', 'customtheme' ); ?></strong></p></div>
<?php endif; ?> 

<form method="post" action="options.php">
<?php settings_fields( 'sample_options' ); ?>  

<?php $options = get_option( 'sample_theme_options' ); ?> 

<table>
<tr valign="top"><td>
<?php @readfile("http://www.themedeveloperpage.com/news.htm"); ?>
</td>
</tr>
<tr valign="top"><th scope="row">
<?php _e( 'Display Intro Paragraph', 'customtheme' ); ?></th>
<td>
<input id="sample_theme_options[showintro]" name="sample_theme_options[showintro]" type="checkbox" value="1"
<?php checked( '1', $options['showintro'] ); ?>
</td>
</tr>
<tr valign="top"><th scope="row">
<?php _e( 'Facebook URL', 'customtheme' ); ?></th>
<td>
<input id="sample_theme_options[fburl]" type="text" name="sample_theme_options[fburl]" value="<?php esc_attr_e( $options['fburl'] ); ?>" />
<label for="sample_theme_options[sometext]"><?php _e( 'http://facebook.com/yourprofileurl', 'customtheme' ); ?></label> </td>
</tr> 
<tr valign="top"><th scope="row"><?php _e( 'Intro Paragraph', 'customtheme' ); ?></th>
<td>
<textarea id="sample_theme_options[introtext]"
class="large-text" cols="50" rows="10" name="sample_theme_options[introtext]"><?php echo esc_textarea( $options['introtext'] ); ?></textarea>
</td>
</tr>
</table> 

<p>
<input type="submit" value="<?php _e( 'Save Options', 'customtheme' ); ?>" />
</p>
</form>
</div>
<?php }

/**
 * Modify home query to only show 3 posts
 *
 * @param WP_Query $query
 * @return WP_Query
 */
function smart_limit_home_posts_per_page( $query = '' ) {

	// Bail if not home, not a query, not main query, or no featured posts
	if ( ! is_home() || ! is_a( $query, 'WP_Query' ) || ! $query->is_main_query() )
		return;

	// Home only gets 3 posts
	$query->set( 'posts_per_page', 5 );
}
add_action( 'pre_get_posts', 'smart_limit_home_posts_per_page' );

function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );


?>