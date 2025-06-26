<?php

namespace Employe\Controller;

if(!defined('ABSPATH')){
    exit;
}

class DepartmentController{

    public static function init(){
        static $instance = false;
        if(!$instance){
            $instance = new self();
        }
        return $instance;
    }

    public static function insert_controller($request){
        return rest_ensure_response([
            'status' => 'success',
            'data' => $request->get_params()
        ]);
    }

    

}