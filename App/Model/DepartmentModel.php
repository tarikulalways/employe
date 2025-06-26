<?php

namespace Employe\Model;

if(!defined('ABSPATH')){
    exit;
}

class DepartmentModel{

    public static function init(){
        static $instance = false;
        if(!$instance){
            $instance = new self();
        }
        return $instance;
    }

    private function __construct(){
        
    }

}