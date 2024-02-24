<?php 
/*
Plugin Name: Facturabilidad
Description: Plugin para facturación electrónica de tus ventas en linea con Woocommerce. Ofrece a tus clientes la opción de generar ellos mismos su factura electrónica y recibirla en su correo.
Version: 1.0.0
Author: Facturabilidad.com
Author URI: https://facturabilidad.com/
License: GPLv2 
 */
function activar(){
    /*global $wpdb;

    $table_name = $wpdb->prefix . 'facturabilidad';

    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE IF NOT EXIST $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        name tinytext NOT NULL,
        text text NOT NULL,
        url varchar(55) DEFAULT '' NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
    add_option( 'facturabilidad_db_version', '1.0' );*/
}

function desactivar(){
    
}

register_activation_hook( __FILE__, 'activar' );
register_deactivation_hook( __FILE__, 'desactivar' );


function enlace_ajustes( $links ) {
    $settings_link = '<a href="admin.php?page=fac-config">Ajustes</a>';
    array_push( $links, $settings_link );
    return $links;
}
add_filter( "plugin_action_links_" . plugin_basename( __FILE__ ), 'enlace_ajustes' );


add_action('admin_menu', 'fac_setup_menu');

// Añadir menu en el panel de administración
if ( ! function_exists( 'add_setup_menu' )) {
    function fac_setup_menu(){
        add_menu_page( 'Configuración', //titulo de la pagina
        'Facturabilidad', //nombre del menu
        'manage_options', //capacidad requerida para ver el menu
        'fac-config', //slug del menu
        'fac_config_page',
        null,
        59); //funcion que se ejecutara al hacer click en el menu
    }
}

if ( ! function_exists( 'fac_config_page' )) {
    function fac_config_page(){
        include plugin_dir_path(__FILE__) . 'src/admin/config.php';
    }
}


if (!function_exists ('fac_cargar_scripts')) {
    function fac_cargar_scripts() {
        wp_enqueue_script('fac-config-script', plugins_url('assets/js/config/config.js',__FILE__), array('jquery'));
    }
}

add_action('admin_enqueue_scripts', 'fac_cargar_scripts');
//remove_action('admin_enqueue_scripts', 'fac_cargar_scripts');
