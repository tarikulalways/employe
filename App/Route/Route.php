<?php

namespace Employe\Route;

if(!defined('ABSPATH')){
    exit;
}

class Route{

    public static function init(){
        static $instanc = false;
        if(!$instanc){
            $instanc = new self();
        }
        return $instanc;
    }

    private function __construct(){
        DepartmentRoute::init();
    }

}