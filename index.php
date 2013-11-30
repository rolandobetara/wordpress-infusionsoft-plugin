<?php
/*
Plugin Name: Infusionsoft api
Description: This plugin use the API of infisionsoft
Version: 1.0
Author: Rolando Betara
Author URI: http://www.linkedin.com/in/rolandobetara
Plugin URI: https://www.facebook.com/media/set/?set=a.1428480594031395.1073741828.1422875287925259&type=3
*/
	
add_action('admin_menu', 'add_menu_pages');
function add_menu_pages() {
    add_menu_page('Menu Title', 'InfusionsoftAPI', 10, __FILE__,'Add_Data');
    add_submenu_page(__FILE__, 'Add New', 'Add New', 10,  __FILE__ , 'Add_Data');
    add_submenu_page(__FILE__, 'Edit', 'Edit', 10, 'Infusionsoft_Page_Edit' , 'Edit_Data');
    add_submenu_page(__FILE__, 'View', 'View', 10, 'Infusionsoft_Page_View' , 'View_Data');
    add_submenu_page(__FILE__, 'Delete', 'Delete', 10, 'Infusionsoft_Page_Delete' , 'Delete_Data');
    add_submenu_page(__FILE__, 'Setting', 'Setting', 10, 'Infusionsoft_Page_Setting' , 'api_setting_page');
}

function Add_Data() {
   require_once('/lib/infusionsoft-add.php');
}
function Edit_Data() {
   require_once('/lib/infusionsoft-edit.php');
}
function Delete_Data() {
   require_once('/lib/infusionsoft-delete.php');
}
function View_Data() {
   require_once('/lib/infusionsoft-view.php');
}


add_action('admin_init', 'add_style_script' );
function add_style_script() {
    wp_register_style( 'InfusionsoftAPI-style', plugins_url('/css/infusionsoft_style.css', __FILE__) );
    wp_enqueue_style( 'InfusionsoftAPI-style' );

    wp_register_style( 'jqpagination-style', plugins_url('/css/jqpagination.css', __FILE__) );
    wp_enqueue_style( 'jqpagination-style' );

    wp_register_script( 'InfusionsoftAPI-js', plugins_url('/js/infusionsoft.js', __FILE__) );
    wp_enqueue_script( 'InfusionsoftAPI-js' );

    wp_register_script( 'jqpagination-js', plugins_url('/js/jquery.jqpagination.min.js', __FILE__) );
    wp_enqueue_script( 'jqpagination-js' );
}


add_action('admin_init', 'APi_init');
function APi_init(){
	register_setting( 'api_setting', 'api_setting', 'API_validate' );
	add_settings_section('api_infusionsoft_setting', '', 'header_section', 'infusionsoft_apifrm');
	add_settings_field('App Name', 'App Name', 'Apps_Name', 'infusionsoft_apifrm', 'api_infusionsoft_setting');
	add_settings_field('API Key', 'API Key', 'API_Key', 'infusionsoft_apifrm', 'api_infusionsoft_setting');
}

function Apps_Name() {
		$options = get_option('api_setting');
		$appsname = $options['appsname'];
		echo '<input type="text" size="40" name="api_setting[appsname]" value="' . esc_attr( $appsname ) . '" />';
}

function API_Key() {
	$options = get_option('api_setting');
	$api_key = $options['api_key'];
	echo '<input type="text" size="40" name="api_setting[api_key]" value="' . esc_attr( $api_key ) . '" />';
}


function header_section() {
	echo '<div id="icon-options-general" class="icon32"></div>';
	echo '<h2>API Setting</h2>';
}


function API_validate($input) {
		$input['appsname'] = esc_html( $input['appsname'] );
		$input['api_key'] = esc_html( $input['api_key'] );
		return $input;
}

function api_setting_page() {
?>
<div class="wrap">
	<form method="post" action="options.php">
		<?php settings_fields( 'api_setting' ); ?>
		<?php do_settings_sections( 'infusionsoft_apifrm' ); ?>
		<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
	</form>
</div>
<?php
} ?>