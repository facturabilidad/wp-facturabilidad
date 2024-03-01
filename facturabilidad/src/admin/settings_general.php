<div class="wrap">
    <form method="post" action="options.php">
        <?php

        settings_fields('fac_general_options');
        do_settings_sections('fac_config_general');
        submit_button('Cambiar modo', 'primary', 'submitStatus');
        ?>
    </form>
</div>

<?php

function fac_config_general_callback() {
    return;
}

function status_callback() {
    $status = get_option('status');
    if (false === $status) {
        $status = 'Pruebas';
        update_option('status', $status);
    }

    echo '<p id="status">' . esc_html($status) . '</p>';
}