

//obtener la lista de medios
jQuery(document).on('change', 'select#tipo-medio', function (e) {
    e.preventDefault();
    var tipomedioID = jQuery(this).val();
    getMediosList(tipomedioID);
});

function getMediosList(tipomedioID) {
    $.ajax({
        url: baseurl + "/reformaElectoral/getmedios",
        type: 'post',
        data: {tipomedioID: tipomedioID},
        dataType: 'json',
        beforeSend: function () {
            jQuery('select#medio').find("option:eq(0)").html("Please wait..");
        },
        complete: function () {
            // code
        },
        success: function (json) {
            var options = '';
            options +='<option value="">Seleccionar Medio</option>';
            for (var i = 0; i < json.length; i++) {
                options += '<option value="' + json[i].medio_id + '">' + json[i].medio_name + '</option>';
            }
            jQuery("select#medio").html(options);

        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
}

