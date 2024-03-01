
<?php

?>
<div class="wrap">
    <h1>Facturabilidad -Configuración</h1>
    <h2 class="nav-tab-wrapper">
        <a href="?page=fac-config&tab=general" class="nav-tab <?php echo ($_GET['tab'] == 'general' || !isset($_GET['tab'])) ? 'nav-tab-active' : ''; ?>" id="general-tab">General</a>
        <a href="?page=fac-config&tab=pruebas" class="nav-tab <?php echo ($_GET['tab'] == 'pruebas') ? 'nav-tab-active' : ''; ?>" id="pruebas-tab">Pruebas</a>
        <a href="?page=fac-config&tab=produccion" class="nav-tab <?php echo ($_GET['tab'] == 'produccion') ? 'nav-tab-active' : ''; ?>" id="produccion-tab">Producción</a>
    </h2>
    <?php
    // Check the current tab and render the corresponding content
    $current_tab = isset($_GET['tab']) ? $_GET['tab'] : 'general';
    switch ($current_tab) {
        case 'general':
            fac_render_general_tab();
            break;
        case 'pruebas':
            fac_render_pruebas_tab();
            break;
        case 'produccion':
            fac_render_produccion_tab();
            break;
    }
    ?>
</div>
<?php


// Pestaña general
function fac_render_general_tab() {
    include plugin_dir_path(__FILE__) . 'settings_general.php';
}

// pestaña pruebas
function fac_render_pruebas_tab() {
    include plugin_dir_path(__FILE__) . 'settings_pruebas.php';
}

// Pestaña producción
function fac_render_produccion_tab() {
    include plugin_dir_path(__FILE__) . 'settings_produccion.php';
}
