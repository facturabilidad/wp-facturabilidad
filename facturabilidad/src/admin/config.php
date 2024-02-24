
<?php
// Path: wp-content/plugins/testPlugin/src/admin/config.php

?>
<div class="wrap">
    <h1>Facturabilidad -Configuración</h1>
    <h2 class="nav-tab-wrapper">
        <a href="?page=fac-config&tab=general" class="nav-tab">General</a>
        <a href="?page=fac-config&tab=pruebas" class="nav-tab">Pruebas</a>
        <a href="?page=fac-config&tab=produccion" class="nav-tab">Producción</a>
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


// Function to render the Global tab content
function fac_render_general_tab() {
    ?>
    <p>Este es el estado general del plugin :P</p>
    <?php
}

// Function to render the Pruebas tab content
function fac_render_pruebas_tab() {
    global $protegerCampos; // Add the global variable declaration
    ?>
    <div>
        <p> >>Estado actual del plugin<< </p>
    </div>
    <form>
        <table>
            <tr>
                <td>
                    <label for="apiIdentificadorPruebas">Api Identificador:</label>
                    
                </td>
                <td>
                    <input class="editable-pruebas" disabled="true" type="text" id="apiIdentificadorPruebas" name="apiIdentificadorPruebas">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="apiPasswordPruebas">Api Contraseña:</label>
                </td>
                <td>
                    <input class="editable-pruebas" disabled="true" type="text" id="apiPasswordPruebas" name="apiPasswordPruebas">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="regimenPruebas">Régimen:</label>
                </td>
                <td>
                    <input class="editable-pruebas" disabled="true" type="text" id="regimenPruebas" name="regimenPruebas">
                </td>
            </tr>
        </table>
        
        <br>
        <button type="button" id="editarBtn" onclick="toggleEditar()">Editar</button>
        <button type="button" id="guardarBtn" disabled='true'>Guardar</button>
        <button type="button" id="cancelarBtn" disabled='true'>Cancelar</button>
    </form>
    <?php
}

// Function to render the Producción tab content
function fac_render_produccion_tab() {
    ?>
    <h2>Producción</h2>
    <!-- Add your Producción settings form here -->
    <?php
}
