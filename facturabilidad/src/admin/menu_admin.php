<?php
// Añadir menu en el panel de administración
add_action('admin_menu', 'fac_setup_menu');

    function fac_setup_menu(){
        add_menu_page( 'Configuración', //titulo de la pagina
        'Facturabilidad', //nombre del menu
        'manage_options', //capacidad requerida para ver el menu
        'fac-config', //slug del menu
        'fac_config_page',
        null,
        59); //prioridad del menu
    }
