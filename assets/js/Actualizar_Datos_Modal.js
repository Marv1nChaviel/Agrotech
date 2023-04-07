// Actualizar datos en editar iNVENTARIO Rebaño-----------------------------
$('#FormularioEditar').submit(function(e) {
    e.preventDefault();

    const Datos = {
        Operacion : "EditarInventarioRebaño",
        NumeroAnimal: $("#NumeroAnimal").val(),
        TipoRebaño: $("#TipoRebaño").val(),
        Color: $("#Color").val(),
        Lote: $("#Lote").val(),
        Partos: $("#Partos").val(),
        Peso: $("#Peso").val(),
        SRaza: $("#SRaza").val(),
        SSexo: $("#SSexo").val(),
        Clasificacion: $("#Clasificacion").val(),
    };

    console.log(Datos);
    $.post('./BackEnd/Editar_Inventario_Rebaño.php', Datos, function(
        respuesta) { // metodo post del query igualmente funcional que el anterior

        //   console.log(Datos);
        if (respuesta = "Ejecutado") {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Registro Guardado',
                showConfirmButton: false,
                timer: 1500
            })
            $("#ModalEditarInventarioRebaño").modal('hide');

            //DataTable.ajax.reload();

        } else {

        }

    });
    // Busca la tabla inventario Rebaño y la recarga
    $('#Inventario_Rebaño').DataTable().ajax.reload();
});


// Fin Actualizar datos en editar INVENTARIO Rebaño----------------------------