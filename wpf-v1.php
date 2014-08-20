<?php
/* 
Plugin Name:		WordPress plugin framework WPF v1
Plugin URI:			https://github.com/IT-Service-WordPress/wpf-v1
Description:		This plugin only provides a shared copy of the WPF framework (version 1) for other plugins. Use this plugin allows you to use the wordpress update mechanism to update the WPF framework.
Version:			0.1.0
Author:				Sergey S. Betke
Author URI:			http://sergey-s-betke.blogs.csm.nov.ru/about
Text Domain:		wpf-admin
Domain Path:		/languages/
GitHub Plugin URI: 	https://github.com/IT-Service-WordPress/wpf-v1
*/

use \WPF\v1 as WPF;

require_once ( 'wpf' . DIRECTORY_SEPARATOR . 'wpf_inc.php' );
WPF\Loader::_require_once( 'wpf_plugin_base.php' );
WPF\Loader::_require_once( 'wpf_plugin_part_load_admin.php' );

new WPF\Plugin\Base (
	__FILE__
	, new WPF\Plugin\Part\Load\Admin()
);

?>