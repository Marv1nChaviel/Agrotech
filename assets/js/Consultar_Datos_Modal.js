// <!-- Obtener Raza -->
    
    $(document).ready(function() {
        $.ajax({
            url: './BackEnd/Consultar_Raza.php',
            type: 'GET',
            success: function(respuesta) {
                let json = JSON.parse(respuesta);
                var len = json.length;

                // $("#selectraza").empty();
                for (var i = 0; i < len; i++) {
                    var id_raza = json[i]['ID_raza'];
                    var raza = json[i]['Nombre_Raza'];

                    // console.log('Raza id de la misma es '+id_raza);

                    $("#selectraza").append("<option value='"+id_raza+"'>" + raza + "</option>");
                    $("#N_selectraza").append("<option value='"+id_raza+"'>" + raza + "</option>");
                }
            }

        })
    });

    // <!-- Consultar Tipo de Rebaño -->

    $(document).ready(function() {
        $.ajax({
            url: './BackEnd/Consultar_Tipo_Rebaño.php',
            type: 'GET',
            success: function(respuesta) {
                let json = JSON.parse(respuesta);
                var len = json.length;

                // $("#selectraza").empty();
                for (var i = 0; i < len; i++) {
                    var id_rebaño = json[i]['ID_tipo_rebaño'];
                    var tipo_rebaño = json[i]['Nombre_tipo_rebaño'];

                    // console.log('Raza id de la misma es '+id_rebaño);

                    $("#N_TipoRebaño").append("<option value='"+id_rebaño+"'>" + tipo_rebaño + "</option>");
                    $("#TipoRebaño").append("<option value='"+id_rebaño+"'>" + tipo_rebaño + "</option>");
                }
            }

        })
    });
    
    // <!-- Consultar Clafisicacion -->
 
    $(document).ready(function() {
        $.ajax({
            url: './BackEnd/Consulta_Clasificacion.php',
            type: 'GET',
            success: function(respuesta) {
                let json = JSON.parse(respuesta);
                var len = json.length;

                // $("#selectraza").empty();
                for (var i = 0; i < len; i++) {
                    var id_clasificacion = json[i]['ID_clasificacion'];
                    var clasificacion = json[i]['Clasificacion_animal'];

                    // console.log('Raza id de la misma es '+id_rebaño);

                    $("#N_Clasificacion").append("<option value='"+id_clasificacion+"'>" + clasificacion + "</option>");
                    $("#Clasificacion").append("<option value='"+id_clasificacion+"'>" + clasificacion + "</option>");
                    $("#N_Clasificacion_G").append("<option value='"+id_clasificacion+"'>" + clasificacion + "</option>");
                }
            }

        })
    });

    // <!-- Consultar lOTE -->

    $(document).ready(function() {
        $.ajax({
            url: './BackEnd/Consulta_Lote.php',
            type: 'GET',
            success: function(respuesta) {
                let json = JSON.parse(respuesta);
                var len = json.length;

                // $("#selectraza").empty();
                for (var i = 0; i < len; i++) {
                    var id_lote = json[i]['ID_lote'];
                    var lote = json[i]['Nombre_lote'];

                    // console.log('Raza id de la misma es '+id_rebaño);

                    $("#N_Lote").append("<option value='"+id_lote+"'>" + lote + "</option>");
                    $("#Lote").append("<option value='"+id_lote+"'>" + lote + "</option>");
                    $("#N_Lote_G").append("<option value='"+id_lote+"'>" + lote + "</option>");
                }
            }

        })
    });
 