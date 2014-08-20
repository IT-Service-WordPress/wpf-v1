<?php

use \WPF\v1 as WPF;

WPF\Loader::_require_once( 'wpf_plugin_part_base.php' );
WPF\Loader::_require_once( 'wpf_compatibility_validators.php' );
WPF\Loader::_require_once( 'wpf_compatibility_version_wp.php' );
WPF\Loader::_require_once( 'wpf_compatibility_version_php.php' );
WPF\Loader::_require_once( 'wpf_textdomain_plugin.php' );
WPF\Loader::_require_once( 'wpf_textdomain_wpf.php' );
WPF\Loader::_require_once( 'wpf_plugin_component_installer.php' );
WPF\Loader::_require_once( 'wpf_setting_activepluginsetting.php' );

new WPF\TextDomain\WPF( WPF\WPF_ADMINTEXTDOMAIN );
new WPF\TextDomain\Plugin( WPF\WPF_ADMINTEXTDOMAIN, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

new WPF\Plugin\Part\Base (
	new WPF\Plugin\Component\Installer()
	, new WPF\Setting\ActivePluginSetting(
		'wpf_basepath_v1'
		, WPF\Loader::get_root_dir()
		, true
	)
	, new WPF\Compatibility\Validators (
		new WPF\Compatibility\Version\WP( '3.9.0' )
		, new WPF\Compatibility\Version\PHP( '5.5.0' )
	)
);

?>