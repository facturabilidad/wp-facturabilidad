jQuery(document).ready(function() {
    var statusElement = jQuery('#status');
    var status = statusElement.text();
    console.log(status);

    if (status === 'Pruebas') {
        statusElement.css({
            'color': 'red',
            'font-weight': 'bold'
        });
    } else {
        statusElement.css({
            'color': 'green',
            'font-weight': 'bold'
        });
    }
});
