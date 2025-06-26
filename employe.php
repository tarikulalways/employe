<?php

/**
 * Plugin Name: Employe
 * Plugin URI: https://example.com
 * Description: A short description of the plugin
 * Version: 1.0.0
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: Tarikul
 * Author URI: https://author.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

 if(!defined('ABSPATH')){
    exit;
 }

 final class Employe{

    public static function init() {
		static $instance = false;

		if ( ! $instance ) {
			$instance = new self();
		}

		return $instance;
	}
    
    private function __construct(){
        $this->define_constant();
        $this->loade_dependency();
        $this->dispatch_hook();
    }

    public function define_constant(){
        define('EMPLOYE_DIR_PATH', plugin_dir_path(__FILE__));
        define('EMPLOYE_DIR_URL', plugin_dir_url(__FILE__));
    }
    
    public function dispatch_hook(){
        Employe\Controller\Controller::init();
        Employe\Route\Route::init();
        Employe\Model\Model::init();
        Employe\Assets::init();
    }

    public function loade_dependency(){
        require_once EMPLOYE_DIR_PATH . 'App/autoload.php';
    }
    
 }

 function run_employe(){
    Employe::init();
 }
 run_employe();