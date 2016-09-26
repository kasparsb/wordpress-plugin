<?php

namespace YourPluginNamespace;

class Plugin extends Base {

    public $allowed_post_types = ['post'];

    public function __construct() {
        parent::__construct();

        // All action and filter hooks goes here
        
        //add_action('admin_enqueue_scripts', [$this, 'scripts_styles']);
        add_action('wp_enqueue_scripts', [$this, 'scripts_styles']);

        // Send link to email
        add_action('wp_ajax_yourpluginname_actionname', [$this, 'do_actioname']);
        add_action('wp_ajax_nopriv_yourpluginname_actionname', [$this, 'do_actioname']);
    }

    public function scripts_styles() {
        wp_register_style('yourpluginname', plugins_url( 'build/app-'.$this->package('version').'.css' , __FILE__ ));
        wp_register_script('yourpluginname', plugins_url( 'build/app-'.$this->package('version').'.js' , __FILE__ ), ['jquery']);
        
        wp_enqueue_style('yourpluginname');
        wp_enqueue_script('yourpluginname');
    }


    public function do_actioname() {
        
        // Do some action

        exit;
    }
}