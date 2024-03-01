<div class="wrap">
    <form method="post" action="options.php">
        <?php
        settings_fields('fac_pruebas_options');
        do_settings_sections('fac_config_pruebas');
        ?>
        <p>
            <strong>Nota:</strong> Estas credenciales son necesarias para realizar pruebas de facturación electrónica. 
            <br>Para obtener credenciales de prueba accede a <a href="https://www.facturabilidad.com/get_test_credentials">https://www.facturabilidad.com/get_test_credentials</a> y sigue las instrucciones.
        </p>
        <?php

        submit_button('Guardar Configuración');
        ?>
    </form>
</div>

<?php

function fac_config_pruebas_callback() {
    return;
}

function api_id_pruebas_callback() {
    $texto = get_option('api_id_pruebas');
    echo '<input type="text" id="api_id_pruebas" name="api_id_pruebas" value="' . esc_attr($texto) . '" />';
}

function api_pass_pruebas_callback() {
    $texto = get_option('api_pass_pruebas');
    echo '<input type="text" id="api_pass_pruebas" name="api_pass_pruebas" value="' . esc_attr($texto) . '" />';
}

function regimen_pruebas_callback() {
    $texto = get_option('regimen_pruebas');
    echo '<input type="text" id="regimen_pruebas" name="regimen_pruebas" value="' . esc_attr($texto) . '" />';
}