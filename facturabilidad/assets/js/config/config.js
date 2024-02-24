function toggleEditar() {
    var inputs = jQuery('.editable-pruebas');
    var botonGuardar = jQuery('#guardarBtn');
    var botonEditar = jQuery('#editarBtn');
    var botonCancelar = jQuery('#cancelarBtn');

    for (var i = 0; i < inputs.length; i++) {
        inputs[i].disabled = !inputs[i].disabled;
    }

    botonEditar.prop('disabled', function(i, v) { return !v; });
    botonGuardar.prop('disabled', function(i, v) { return !v; });
    botonCancelar.prop('disabled', function(i, v) { return !v; });
}