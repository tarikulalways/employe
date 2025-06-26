<?php

namespace Employe;

class Assets{

    public static function init(){
        $self = new self();

        add_action('admin_enqueue_scripts', [$self, 'employe_admin_assets']);
    }

    public function employe_admin_assets(){
        wp_enqueue_style('admin-style', EMPLOYE_DIR_URL . 'assets/css/admin-style.css', [], '1.0.0', 'all');
    }

}