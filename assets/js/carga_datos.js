function volver() {
    if (confirm("¿Está seguro que desea cancelar y reiniciar la subida?")) {
        window.location.href = 'datos.php';
    }
}
function handleFileUpload() {
    var fileInput = documento.getElementById('file');
    var file = file.Input.files[0]; //Obtener el primer archivo seleccionado

    //Verificar si se seleccionó un archivo
    if (file) {
        $('#btnGuardar').prop('disabled', false);
        $('#btnCancelar').prop('disabled', false);
    } else {
        console.log('No se seleccionó ningún archivo');

    }
}


$(document).ready(function () {
    $('#order-listing').DataTable({
        'order': [
            [0, 'asc']
        ],
        'language': {
            'url': 'lib/Spanish.json'
        }
    });
});
$(document).ready(function () {
    $('#order-listing1').DataTable({
        'order': [
            [0, 'desc']
        ],
        'language': {
            'url': 'lib/Spanish.json'
        }
    });
});
$(document).ready(function () {
    $('#order-listing-free').DataTable({
        'order': [
            [1, 'asc']
        ],
        'language': {
            'url': 'lib/Spanish.json'
        }
    });
});