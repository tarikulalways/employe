<?php

namespace Employe\Route;

use Employe\Helper;
use Employe\Controller\DepartmentController;


if(! defined('ABSPATH')){
    exit;
}

class DepartmentRoute{
    
    public static function init(){
        static $instace = false;
        if(!$instace){
            $instace = new self();
        }
        return $instace;
    }

    public function __construct(){
        add_action('rest_api_init', [$this, 'register_department_route']);
    }

    public function register_department_route(){
        register_rest_route(Helper::NAMESPACE, '/department', [
            'methods' => 'POST',
            'callback' => [DepartmentController::class, 'insert_controller'],
            'permission_callback' => '__return_true'
        ]);
    }


}