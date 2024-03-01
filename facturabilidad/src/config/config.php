<?php
//path: facturabilidad/src/config/config.php

add_action('admin_init', 'fac_registra_opciones_pruebas');
add_action('admin_init', 'fac_registra_opciones_produccion');
add_action('admin_init', 'fac_registra_opciones_generales');

function fac_config_page(){
        include plugin_dir_path(__FILE__) . '../admin/config_admin.php';
}

function fac_registra_opciones_generales() {
    register_setting('fac_general_options', 'idioma');

    add_settings_section('fac_config_general',
    'Configuración General',
    'fac_config_general_callback',
    'fac_config_general');

    add_settings_field('status',
    'Estado actual del plugin',
    'status_callback',
    'fac_config_general',
    'fac_config_general');
}

function fac_registra_opciones_pruebas() {
    register_setting('fac_pruebas_options', 'api_id_pruebas');
    register_setting('fac_pruebas_options', 'api_pass_pruebas');
    register_setting('fac_pruebas_options', 'regimen_pruebas');
    
    add_settings_section('fac_config_pruebas',
    'Credenciales para uso del plugin en modo pruebas',
    'fac_config_pruebas_callback',
    'fac_config_pruebas');

    add_settings_field('api_id_pruebas',
    'Api Identificador',
    'api_id_pruebas_callback',
    'fac_config_pruebas',
    'fac_config_pruebas');

    add_settings_field('api_pass_pruebas',
    'Api Contraseña',
    'api_pass_pruebas_callback',
    'fac_config_pruebas',
    'fac_config_pruebas');

    add_settings_field('regimen_pruebas',
    'Régimen Fiscal',
    'regimen_pruebas_callback',
    'fac_config_pruebas',
    'fac_config_pruebas');
}

function fac_registra_opciones_produccion() {
    register_setting('fac_produccion_options', 'api_id_produccion');
    register_setting('fac_produccion_options', 'api_pass_produccion');
    register_setting('fac_produccion_options', 'regimen_produccion');
    
    add_settings_section('fac_config_produccion',
    'Credenciales para uso del plugin en modo productivo',
    'fac_config_produccion_callback',
    'fac_config_produccion');

    add_settings_field('api_id_produccion',
    'Api Identificador',
    'api_id_produccion_callback',
    'fac_config_produccion',
    'fac_config_produccion');

    add_settings_field('api_pass_produccion',
    'Api Contraseña',
    'api_pass_produccion_callback',
    'fac_config_produccion',
    'fac_config_produccion');

    add_settings_field('regimen_produccion',
    'Régimen Fiscal',
    'regimen_produccion_callback',
    'fac_config_produccion',
    'fac_config_produccion');
}