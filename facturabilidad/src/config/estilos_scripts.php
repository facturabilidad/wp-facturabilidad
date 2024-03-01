<?php

//encolar scripts
function fac_cargar_scripts() {
    wp_enqueue_script('fac-config-script', plugins_url('../../assets/js/config/config.js',__FILE__), array('jquery'));
}

add_action('admin_enqueue_scripts', 'fac_cargar_scripts');
//remove_action('admin_enqueue_scripts', 'fac_cargar_scripts');