<?php 
/*
Plugin Name: Facturabilidad
Description: Plugin para facturación electrónica de tus ventas en linea con Woocommerce. Ofrece a tus clientes la opción de generar ellos mismos su factura electrónica y recibirla en su correo.
Version: 1.0.0
Author: Facturabilidad.com
Author URI: https://facturabilidad.com/
License: GPLv2 
 */
// Path: facturabilidad/facturabilidad.php
include_once plugin_dir_path(__FILE__) . 'src/admin/menu_admin.php';
include_once plugin_dir_path(__FILE__) . 'src/config/estilos_scripts.php';
include_once plugin_dir_path(__FILE__) . 'src/config/config.php';

function activar(){
    //verificar instalacion de Woocommerce
    if ( ! is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
        wp_die('El plugin de Facturabilidad requiere que
        Woocommerce esté instalado y activado. Por favor instala Woocommerce y activalo
        para poder usar el plugin de Facturabilidad.');
    }
}
register_activation_hook( __FILE__, 'activar' );

// link de ajustes en tarjeta del plugin
function enlace_ajustes( $links ) {
    $settings_link = '<a href="admin.php?page=fac-config">Ajustes</a>';
    array_push( $links, $settings_link );
    return $links;
}
add_filter( "plugin_action_links_" . plugin_basename( __FILE__ ), 'enlace_ajustes' );
