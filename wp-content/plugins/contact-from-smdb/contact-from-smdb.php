<?php
/*
Plugin Name: CF7 Spam Email and Database
Plugin URI: 
Description:  Simple stop spam email and save form data in backend contact form 7 module
Version: 1.0
Author: Tushar Patel
License: 
Text Domain: contact-form-smdb
*/

/* Security check - block direct access */

if (!defined('ABSPATH')) exit('No direct script access allowed');

define( 'SMDB_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'SMDB_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
require_once( SMDB_PLUGIN_PATH . 'inc/admin-page-settings.php' );
require_once( SMDB_PLUGIN_PATH . 'inc/email-settings.php' );

add_action('plugins_loaded', 'smdb_on_plugins_loaded', 10);

function smdb_on_plugins_loaded() {
	
	global $pagenow;
	
	if(!function_exists('wpcf7_add_shortcode')) {
		
		if($pagenow != 'plugins.php') { 
			return; 
		}
		
		add_action('admin_notices', 'smdb_active_admin_notices');
		
		deactivate_plugins( plugin_basename( __FILE__ ) ); 
        
		if ( isset( $_GET['activate'] ) ) {
            unset( $_GET['activate'] );
		}
		
		wp_enqueue_script('thickbox');		
		
	}
}

function smdb_active_admin_notices() { ?>
			
	<div class="error" id="messages">
		<p>The Contact Form 7 plugin must be installed and activated for the CF7 Spam Email and Database to work. <a href="<?php echo admin_url('plugin-install.php?tab=plugin-information&plugin=contact-form-7&from=plugins&TB_iframe=true&width=600&height=550'); ?>" class="thickbox" title="Contact Form 7">Install Now.</a></p>
	</div>

	<?php 
}


register_activation_hook( __FILE__, 'smdb_on_plugin_activate' );
function smdb_on_plugin_activate(){

    global $wpdb;
    $smdb       = apply_filters( 'smdb_database', $wpdb );
    $table_name = $smdb->prefix.'smdb_forms';

    if( $smdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name ) {

        $charset_collate = $smdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
            smdb_id bigint(20) NOT NULL AUTO_INCREMENT,
            smdb_post_id bigint(20) NOT NULL,
            smdb_value longtext NOT NULL,
			smdb_ip varchar(15),
            smdb_date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
			smdb_black_ip int(2) NOT NULL,
            PRIMARY KEY  (smdb_id)
        ) $charset_collate;";

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );
    }

    $upload_dir    = wp_upload_dir();
    $smdb_dirname = $upload_dir['basedir'].'/smdb_uploads';
    if ( ! file_exists( $smdb_dirname ) ) {
        wp_mkdir_p( $smdb_dirname );
    }
	
	$role = get_role( 'administrator' );
	$role->add_cap( 'smdb_access' );

}

register_deactivation_hook( __FILE__, 'smdb_on_plugin_deactivate' );
function smdb_on_plugin_deactivate() {

	global $wp_roles;

	foreach( array_keys( $wp_roles->roles ) as $role ) {
		$wp_roles->remove_cap( $role, 'smdb_access' );
	}
}

function smdb_add_settings_link( $links ) {
  $forms_link = '<a href="admin.php?page=smdb-settings.php">Settings</a>';
  array_unshift($links, $forms_link);
  return $links;
}

$plugin = plugin_basename(__FILE__);
add_filter("plugin_action_links_$plugin", 'smdb_add_settings_link' );

