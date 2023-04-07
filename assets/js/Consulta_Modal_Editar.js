$(document).on('click', '.btnEditar', function() {
    var id_animal = this.id;


    const Datos = {
        id_animal: id_animal
    };
    $.post('./BackEnd/Consulta_Modal_Editar.php', Datos, function(
        respuesta) { // metodo post del query igualmente funcional que el anterior
        console.log(id_animal);
        $('#ModalEditarInventarioRebaño').modal('show'); //Abre modal
        let json = JSON.parse(respuesta); //Almacena el resultado del json en el let json
        json.forEach(json => { //Se asignan los valores obtendios en json a su respectivo input
            $('#NumeroAnimal').val(json.ID_animal);
            $('#TipoRebaño').val(json.Tipo_rebaño_ID_tipo_rebaño);
            $('#Color').val(json.Color);
            $('#Lote').val(json.Lote_ID_lote);
            $('#Partos').val(json.Partos);
            $('#Peso').val(json.Peso);
            $('#SRaza').val(json.Raza);
            $('#SSexo').val(json.Sexo);
            $('#Clasificacion').val(json.ID_clasificacion);


        });


    });
});



// Boton editar Trabajadores------------------------------
function ModalEditarTrabajadores(id_trabajador){
    var id_trabajador = id_trabajador;

    const Datos = {
        id_trabajador: id_trabajador
    };
    $.post('./BackEnd/Consulta_Modal_Editar.php', Datos, function(
        respuesta) { // metodo post del query igualmente funcional que el anterior
        
        $('#ModalEditarTrabajadores').modal('show'); //Abre modal
        let json = JSON.parse(respuesta); //Almacena el resultado del json en el let json
        json.forEach(json => { //Se asignan los valores obtendios en json a su respectivo input
            $('#E_id_trabajador').val(json.ID_trabajador);
            $('#E_FotoTrabajadores').attr("src", json.Imagen);
            $('#E_NombreApellido').val(json.Nombre);
            $('#E_Cargo').val(json.Cargo);
            $('#E_Cedula').val(json.Ci);
            $('#E_Sueldo').val(json.Sueldo_trabajadores);
            $('#E_Fecha_Entrada').val(json.Fecha_entrada);
            $('#E_Telefono').val(json.Telefono);


        });


    });
}

// Boton editar Maquianria------------------------------
function ModalEditarMaquinaria(id_Maquinaria){
    var id_Maquinaria = id_Maquinaria;

    const Datos = {
        id_Maquinaria: id_Maquinaria
    };
    $.post('./BackEnd/Consulta_Modal_Editar.php', Datos, function(
        respuesta) { // metodo post del query igualmente funcional que el anterior
        
        $('#ModalEditarMaquinaria').modal('show'); //Abre modal
        let json = JSON.parse(respuesta); //Almacena el resultado del json en el let json
        json.forEach(json => { //Se asignan los valores obtendios en json a su respectivo input
            $('#E_id_Maquinaria').val(json.ID_maquinaria);
            $('#E_Marca').val(json.Marca);
            $('#E_Modelo').val(json.Modelo);
            $('#E_Color').val(json.Color);
            $('#E_HorasdeUso').val(json.Horas_uso);
            $('#E_Año').val(json.Año);
            $('#E_Trabajador').val(json.Trabajadores_ID_trabajador);

        });


    });
}

// Boton editar Inventario General------------------------------
function ModalEditarInventarioGeneral(id_inventariogeneral){
    var id_inventariogeneral = id_inventariogeneral;

    const Datos = {
        id_inventariogeneral: id_inventariogeneral
    };
    $.post('./BackEnd/Consulta_Modal_Editar.php', Datos, function(
        respuesta) { // metodo post del query igualmente funcional que el anterior
        
        $('#ModalEditarInventarioGeneral').modal('show'); //Abre modal
        let json = JSON.parse(respuesta); //Almacena el resultado del json en el let json
        json.forEach(json => { //Se asignan los valores obtendios en json a su respectivo input
            $('#E_id_inventario').val(json.id_Inventario);
            $('#E_NombreObjeto').val(json.Nombre_item);
            $('#E_InfoObjeto').val(json.Info_item);
            $('#E_CantDisponible').val(json.Stock);
            $('#E_Operador').val(json.Trabajador);

        });


    });
}