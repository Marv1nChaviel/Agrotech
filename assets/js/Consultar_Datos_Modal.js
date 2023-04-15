// <!-- Obtener Raza -->

$(document).ready(function () {
  $.ajax({
    url: "./BackEnd/Consultar_Raza.php",
    type: "GET",
    success: function (respuesta) {
      let json = JSON.parse(respuesta);
      var len = json.length;

      // $("#selectraza").empty();
      for (var i = 0; i < len; i++) {
        var id_raza = json[i]["ID_raza"];
        var raza = json[i]["Nombre_Raza"];

        // console.log('Raza id de la misma es '+id_raza);

        $("#SRaza").append(
          "<option value='" + id_raza + "'>" + raza + "</option>"
        );
        $("#N_selectraza").append(
          "<option value='" + id_raza + "'>" + raza + "</option>"
        );
        $("#N_Raza_G").append(
          "<option value='" + id_raza + "'>" + raza + "</option>"
        );
      }
    },
  });
});

// <!-- Consultar Tipo de Rebaño -->

$(document).ready(function () {
  $.ajax({
    url: "./BackEnd/Consultar_Tipo_Rebaño.php",
    type: "GET",
    success: function (respuesta) {
      let json = JSON.parse(respuesta);
      var len = json.length;

      // $("#selectraza").empty();
      for (var i = 0; i < len; i++) {
        var id_rebaño = json[i]["ID_tipo_rebaño"];
        var tipo_rebaño = json[i]["Nombre_tipo_rebaño"];

        // console.log('Raza id de la misma es '+id_rebaño);

        $("#N_TipoRebaño").append(
          "<option value='" + id_rebaño + "'>" + tipo_rebaño + "</option>"
        );
        $("#TipoRebaño").append(
          "<option value='" + id_rebaño + "'>" + tipo_rebaño + "</option>"
        );
        $("#N_TipoRebaño_G").append(
          "<option value='" + id_rebaño + "'>" + tipo_rebaño + "</option>"
        );
        $("#TipoRebaño").append(
          "<option value='" + id_rebaño + "'>" + tipo_rebaño + "</option>"
        );
      }
    },
  });
});

// <!-- Consultar Clafisicacion -->

$(document).ready(function () {
  $.ajax({
    url: "./BackEnd/Consulta_Clasificacion.php",
    type: "GET",
    success: function (respuesta) {
      let json = JSON.parse(respuesta);
      var len = json.length;

      // $("#selectraza").empty();
      for (var i = 0; i < len; i++) {
        var id_clasificacion = json[i]["ID_clasificacion"];
        var clasificacion = json[i]["Clasificacion_animal"];

        // console.log('Raza id de la misma es '+id_rebaño);

        $("#N_Clasificacion").append(
          "<option value='" +
            id_clasificacion +
            "'>" +
            clasificacion +
            "</option>"
        );
        $("#Clasificacion").append(
          "<option value='" +
            id_clasificacion +
            "'>" +
            clasificacion +
            "</option>"
        );
        $("#N_Clasificacion_G").append(
          "<option value='" +
            id_clasificacion +
            "'>" +
            clasificacion +
            "</option>"
        );
      }
    },
  });
});

// <!-- Consultar lOTE -->

$(document).ready(function () {
  $.ajax({
    url: "./BackEnd/Consulta_Lote.php",
    type: "GET",
    success: function (respuesta) {
      let json = JSON.parse(respuesta);
      var len = json.length;

      // $("#selectraza").empty();
      for (var i = 0; i < len; i++) {
        var id_lote = json[i]["ID_lote"];
        var lote = json[i]["Nombre_lote"];

        // console.log('Raza id de la misma es '+id_rebaño);

        $("#N_Lote").append(
          "<option value='" + id_lote + "'>" + lote + "</option>"
        );
        $("#Lote").append(
          "<option value='" + id_lote + "'>" + lote + "</option>"
        );
        $("#N_Lote_G").append(
          "<option value='" + id_lote + "'>" + lote + "</option>"
        );
      }
    },
  });
});

// <!-- Consultar Operador -->

$(document).ready(function () {
  $.ajax({
    url: "./BackEnd/Consulta_Operador.php",
    type: "GET",
    success: function (respuesta) {
      let json = JSON.parse(respuesta);
      var len = json.length;

      // $("#selectraza").empty();
      for (var i = 0; i < len; i++) {
        var id_trabajador = json[i]["ID_trabajador"];
        var Nombre = json[i]["Nombre"];

        // console.log('Raza id de la misma es '+id_rebaño);

        $("#Operador").append(
          "<option value='" + id_trabajador + "'>" + Nombre + "</option>"
        );
        $("#Trabajador").append(
          "<option value='" + id_trabajador + "'>" + Nombre + "</option>"
        );
        $("#E_Trabajador").append(
          "<option value='" + id_trabajador + "'>" + Nombre + "</option>"
        );
        $("#E_Operador").append(
          "<option value='" + id_trabajador + "'>" + Nombre + "</option>"
        );
      }
    },
  });
});

// Consulta id animal para produccion
// <!-- Consultar Operador -->

$(document).ready(function () {
  $.ajax({
    url: "./BackEnd/Consulta_Animal_Rebaño.php",
    type: "GET",
    success: function (respuesta) {
      let json = JSON.parse(respuesta);
      var len = json.length;

      // $("#selectraza").empty();
      for (var i = 0; i < len; i++) {
        var id_Animal= json[i]["ID_animal"];
        var RazaPro= json[i]["Raza"];

        // console.log('Raza id de la misma es '+id_rebaño);

        $("#SelectAnimalProduccion").append(
          "<option value='" + id_Animal + "'>"+id_Animal+"-" + RazaPro + "</option>"
        );
        
      }
    },
  });
});



