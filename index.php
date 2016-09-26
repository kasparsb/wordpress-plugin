<?php
/*
Plugin Name: Your plugin name
Version: 1.0
*/

include_once(plugin_dir_path(__FILE__).'base.php');
include_once(plugin_dir_path(__FILE__).'facade.php');
include_once(plugin_dir_path(__FILE__).'plugin.php');


/**
 * Define static facade to theme object
 * Visas Plugin instances metodes vari izsaukt statiski
 * YourPluginName::method_name()
 */
class YourPluginName extends YourPluginNamespace\Facade {}

// Init facade and create plugin object
YourPluginName::init('YourPluginNamespace\Plugin');