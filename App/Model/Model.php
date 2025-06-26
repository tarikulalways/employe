<?php

namespace Employe\Model;

if(!defined('ABSPATH')){
    exit;
}

class Model{

    public static function init(){
        static $instance = false;
        if(!$instance){
            $instance = new self();
        }
        return $instance;
    }

    private function __construct(){
        DepartmentModel::init();
    }

}