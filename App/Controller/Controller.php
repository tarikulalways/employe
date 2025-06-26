<?php

namespace Employe\Controller;


if(!defined('ABSPATH')){
    exit;
}

class Controller{

    public static function init(){
        static $instance = false;

        if(!$instance){
            $instance = new self();
        }

        return $instance;
    }

    private function __construct(){
        DepartmentController::init();
    }

}