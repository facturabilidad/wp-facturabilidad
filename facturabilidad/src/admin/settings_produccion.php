<div class="wrap">
    <form method="post" action="options.php">
        <?php
        settings_fields('fac_produccion_options');
        do_settings_sections('fac_config_produccion');
        submit_button('Guardar Configuración');
        ?>
        <p>
            <strong>Nota:</strong> Estas credenciales son necesarias para comenzar a usar el servicio en modo productivo. 
            <br>Para obtener tus credenciales inicia sesión en <a href="https://app.facturabilidad.com/v4/login">Facturabilidad.com</a>.
            <br>Si no tienes una cuenta, puedes crear una <a href="https://app.facturabilidad.com/v4/register">aquí</a>
        </p>
        <p>
            Una vez dentro de tu cuenta, ve al menú de opciones......
        </p>
    </form>
</div>

<?php

function fac_config_produccion_callback() {
    return;
}

function api_id_produccion_callback() {
    $api_id = get_option('api_id_produccion');
    echo '<input type="text" id="api_id_produccion" name="api_id_produccion" value="' . esc_attr($api_id) . '" />';
}

function api_pass_produccion_callback() {
    $api_pass = get_option('api_pass_produccion');
    echo '<input type="text" id="api_pass_produccion" name="api_pass_produccion" value="' . esc_attr($api_pass) . '" />';
}

function regimen_produccion_callback() {
    $regimen = get_option('regimen_produccion');
    echo '<input type="text" id="regimen_produccion" name="regimen_produccion" value="' . esc_attr($regimen) . '" />';
}