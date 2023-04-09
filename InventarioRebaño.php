<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" content="notranslate>

    <title>AgroTech</title>
    <meta content="" name=" description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/icono_peque.ico" rel="icon">


    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/cargando.css">



    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>


    <!--=====Barra de navegacion lateral y cabecera======-->
    <?php include('./BarraLateralNavegacion.php'); ?>
    <!--=====Barra de navegacion lateral y cabecera======-->

    <main id="main" class="main">

        <!--=======Texto de la tabla interna =======   -->
        <div class="pagetitle">
            <h1>Inventario del Rebaño</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Inicio</li>
                    <li class="breadcrumb-item active">Inventario del Rebaño</li>
                </ol>
            </nav>
            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#ModalNuevo"><i
                    class="bi bi-file-earmark-plus"></i>
                Nuevo Registro</button>
            <button type="button" class="btn btn-success " data-bs-toggle="modal"
                data-bs-target="#ModalRegistrosGrandes"><i class="bi bi-infinity"></i>
                Registros Grandes</button>
            <button type="button" class="btn btn-primary " onclick="QR()" data-bs-toggle="modal"
                data-bs-target="#ModalQR"><i class="bi bi-qr-code-scan"></i>
                Busqueda Qr</button>
        </div>
        <!--=======Final Texto de la tabla interna =======   -->
        <!--=======Inicio TABLA--------------------------------------------------- =======   -->
        <table id="Inventario_Rebaño" class="responsive nowrap display" style="width:100%">
            <thead>
                <tr>

                    <th>N° Animal</th>
                    <th>Tipo Rebaño</th>
                    <th>Color</th>
                    <th>Lote</th>
                    <th>Partos</th>
                    <th>Peso</th>
                    <th>Raza</th>
                    <th>Sexo</th>
                    <th>Clasificacion</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot id="Inventario_Rebaño_foot">

            </tfoot>
        </table>
        <!--======= Final TABLA--------------------------------------------------- =======   -->

        <!-- Modal Nuevo -------------------------------------- -->
        <div class="modal fade" id="ModalNuevo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Titulo">Nuevo Registro</h1>

                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <p style="font-size: 1.5em; color:red"><i class="bi bi-x-circle"></i>
                        </button>
                    </div>

                    <div class="modal-body">
                        <!-- Cuerpo del formulario------ -->
                        <form class="row g-3" id="FormularioEnviar">
                            <div class="col-md-6 col-8">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="N_NumeroAnimal" name="N_NumeroAnimal"
                                        placeholder="Numero del Animal" required>
                                    <label for="floatingName">Numero del Animal</label>
                                </div>
                            </div>

                            <div class="col-md-6 col-7">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="N_TipoRebaño" name="N_TipoRebaño"
                                        aria-label="Tipo de Rebaño" required>
                                        <option value="0" disabled selected hidden>Tipo de Rebaño</option>

                                    </select>
                                    <label for="Raza">Tipo de Rebaño</label>
                                </div>
                            </div>

                            <div class="col-md-4 col-5">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="N_Color" name="N_Color"
                                        placeholder="Color" required>
                                    <label for="Color">Color</label>
                                </div>
                            </div>

                            <div class="col-md-4 col-5">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="N_Lote" name="N_Lote" aria-label="Lote" required>
                                        <option value="0" disabled selected hidden>Lote</option>
                                    </select>
                                    <label for="Lote">Lote</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-7">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="N_Partos" name="N_Partos"
                                        placeholder="Partos" required>
                                    <label for="Partos">Partos</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="N_Peso" name="N_Peso"
                                        placeholder="Peso" required>
                                    <label for="Peso">Peso</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="N_selectraza" name="N_selectraza" aria-label="Raza"
                                        required>
                                        <option value="0" disabled selected hidden>Raza</option>

                                    </select>
                                    <label for="Raza">Raza</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="N_selectsexo" name="N_selectsexo" aria-label="Sexo"
                                        required>
                                        <option disabled selected hidden>Sexo</option>
                                        <option value="H">Hembra</option>
                                        <option value="M">Macho</option>
                                    </select>
                                    <label for="Sexo">Sexo</label>
                                </div>

                            </div>
                            <div class="col-md-4 col-4">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="N_Clasificacion" name="N_Clasificacion"
                                        aria-label="Clasificacion" required>
                                        <option value="0" disabled selected hidden>Clasificacion</option>

                                    </select>
                                    <label for="Raza">Clasificacion</label>
                                </div>
                            </div>


                            <!-- FIN Cuerpo del formulario -->
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success"><i class="bi bi-check2-circle"></i>
                            Guardar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--  fin Modal Nuevo -------------------------------------- -->
        <!-- Modal Editar -------------------------------------- -->
        <div class="modal fade" id="ModalEditarInventarioRebaño" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Titulo">Editar Inventario Rebaño</h1>

                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <p style="font-size: 1.5em; color:red"><i class="bi bi-x-circle"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Cuerpo del formulario------ -->
                        <form class="row g-3" id="FormularioEditar">
                            <div class="col-md-5 col-8">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="NumeroAnimal" name="NumeroAnimal"
                                        placeholder="Numero del Animal" required>
                                    <label for="floatingName">Numero del Animal</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-4">
                                <button type="button" class="btn btn-info btnMostrarQr"><i class="bi bi-qr-code"
                                        style="font-size: 1.6em;"></i></button>
                            </div>
                            <div class="col-md-5 col-7">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="TipoRebaño" placeholder="Rebaño"
                                        required>
                                    <label for="Rebaño">Tipo de Rebaño</label>
                                </div>
                            </div>

                            <div class="col-md-4 col-5">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="Color" placeholder="Color" required>
                                    <label for="Color">Color</label>
                                </div>
                            </div>

                            <div class="col-md-4 col-5">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="Lote" name="Lote" aria-label="Lote" required>
                                        <option value="0" disabled selected hidden>Lote</option>
                                    </select>
                                    <label for="Lote">Lote</label>
                                </div>
                            </div>

                            <div class="col-md-3 col-5">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="Partos" placeholder="Partos" required>
                                    <label for="Partos">Partos</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="Peso" placeholder="Peso" required>
                                    <label for="Peso">Peso</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="SRaza" aria-label="Raza" required> 
                                        <option value="0" disabled selected hidden>Raza</option>

                                    </select>
                                    <label for="Raza">Raza</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="SSexo" aria-label="Sexo" required>
                                        <option selected>Sexo</option>
                                        <option value="H">Hembra</option>
                                        <option value="M">Macho</option>
                                    </select>
                                    <label for="Sexo">Sexo</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="Clasificacion" name="Clasificacion"
                                        aria-label="Clasificacion" required>
                                        <option value="0" disabled selected hidden>Clasificacion</option>
                                    </select>
                                    <label for="Raza">Clasificacion</label>
                                </div>
                            </div>


                        
                        <!-- FIN Cuerpo del formulario -->
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success"><i class="bi bi-check2-circle"></i>
                            Guardar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--  fin Modal Editar -------------------------------------- -->
        <?php 
    include('./Modal/Modal_QR.php');
    ?>

        <!-- Modal Mostrar Qr independiente--------------- -->

        <!-- Modal QR------------------------- -->
        <div class="modal fade" id="ModalQR_Mostrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Titulo">Qr del Animal</h1>

                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <p style="font-size: 1.5em; color:red"><i class="bi bi-x-circle"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="Mostrar_Qr_Animal"></div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Modal QR---------------------- -->

        <!-- Fin Modal Mostrar Qr independiente -------------------- -->

        
        <!-- Modal Registros Grandes------------------------- -->
        <div class="modal fade" id="ModalRegistrosGrandes" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Titulo">Datos Opcionales - Registros Grandes</h1>

                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <p style="font-size: 1.5em; color:red"><i class="bi bi-x-circle"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" id="FormularioRegistrosGrandes">
                            <div class="row">
                                <div class="col-md-3 col-3">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="N_Sexo_G" name="N_Sexo_G" aria-label="Sexo">
                                            <option selected>Sexo</option>
                                            <option value="H">Hembra</option>
                                            <option value="M">Macho</option>
                                        </select>
                                        <label for="Sexo">Sexo</label>
                                    </div>
                                </div>
                                <div class="col-md-5 col-5">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="N_TipoRebaño_G" name="N_TipoRebaño_G"
                                            aria-label="Tipo de Rebaño" required>
                                            <option class="tph" value="" disabled selected hidden>Tipo de Rebaños</option>

                                        </select>
                                        <label class="rebaño_tipo" for="Raza">Tipo de Rebaño</label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="N_Lote_G" name="N_Lote_G" aria-label="Lote"
                                            required>
                                            <option value="" disabled selected hidden>Lote</option>
                                        </select>
                                        <label for="Lote">Lote</label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="N_Clasificacion_G" name="N_Clasificacion_G"
                                            aria-label="Clasificacion" required>
                                            <option value="" disabled selected hidden>Clasificacion</option>

                                        </select>
                                        <label for="vs">Clasificacion</label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="N_Raza_G" name="N_Raza_G" aria-label="Raza"
                                            required>
                                            <option value="" disabled selected hidden>Raza</option>

                                        </select>
                                        <label for="vs">Raza</label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-4">
                                    <div class="form-floating mb-3">
                                        <input class="form-control form-control-lg" type="number" id="N_Cantidad_G"
                                            name="N_Cantidad_G" placeholder="Cantidad" required>
                                        <label for="N° Registros">N° Registros</label>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success"><i class="bi bi-check2-circle"></i>
                            Generar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Fin Modal Registros Grande---------------------- -->
        <!-- Modal Informacion Adicional------------------------- -->
        <div class="modal fade" id="ModalInformacionAdicional" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Titulo">Informacion del Animal</h1>
                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <p style="font-size: 1.5em; color:red"><i class="bi bi-x-circle"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" id="FormularioEnviar">
                            <div class="container-fluid">
                                <div class="row">
                                    <label id="NumeroAnimalInformacion"><b>N° del Animal:</b></label>
                                </div>
                                <div class="row">
                                    <label for="" id="NumeroAnimalInformacion"><b>Listado de Produccion:</b></label>
                                    <!--=======Inicio TABLA--------------------------------------------------- =======   -->
                                    <table id="Tabla_Produccion_Animal" class="responsive nowrap display"
                                        style="width:100%">
                                        <thead>
                                            <tr>

                                                <th>Fecha</th>
                                                <th>Produccion</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                        <tfoot id="Tabla_Produccion_Animal_foot">

                                        </tfoot>
                                    </table>
                                    <!--======= Final TABLA--------------------------------------------------- =======   -->
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Fin Modal Informacion Adicional---------------------- -->

    </main><!-- End #main -->

    <!-- Pie de pagina---- -->
    <?php 
    include('./Pie_De_Pagina.php');
    ?>

    <!-- Vendor JS Files -->

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.5.1.js"></script>

    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.responsive.min.js"></script>
    <!-- Consultas de los modales en este script -->
    <script src="./assets/js/Consultar_Datos_Modal.js"></script>
    <!-- otros js -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/principal.js"></script>
    <script src="assets/js/Consulta_Modal_Editar.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <!-- Iconos -->
    <script src="https://kit.fontawesome.com/76b5f911f3.js" crossorigin="anonymous"></script>

    <!-- Configuracion basica datatables  -->
    <script>
    $(document).ready(function() {
        var tabla = $('#Inventario_Rebaño').DataTable({

            ajax: {
                url: './BackEnd/Consulta_Inventario_Rebaño.php',
                dataSrc: '',
            },
            // Aqui definimos caracteristicas de la tabla y 
            // evitamos que la columna 0 y la 10 sean buscables y no se puedan ordenar
            columnDefs: [{
                targets: [4, 5, 6, 7, 8, 9],
                searchable: false,
                orderable: false
            }, ],
            columns: [{
                    data: 'Nro_animal'
                },
                {
                    data: 'Tipo_rebaño_ID_tipo_rebaño'
                },
                {
                    data: 'Color'
                },
                {
                    data: 'Lote_ID_lote'
                },
                {
                    data: 'Partos'
                },
                {
                    data: 'Peso'
                },
                {
                    data: 'ID_raza'
                },
                {
                    data: 'Sexo'
                },
                {
                    data: 'ID_clasificacion'
                },
                {
                    data: 'Opciones'
                },



            ],

            language: {
                url: './assets/es-ES.json'
            },
            lengthMenu: [
                [10, 25, 50, 100, 200, -1],
                ['10 Filas', '25 Filas', '50 Filas', '100 Filas', '200 Filas', 'Todas']
            ]


        });



    });


    // Rellenar datatables con datos mediante ajax---------------
    $('#FormularioEnviar').submit(function(e) {
        e.preventDefault();

        const Datos = {
            N_NumeroAnimal: $('#N_NumeroAnimal').val(),
            N_TipoRebaño: $("#N_TipoRebaño").val(),
            N_Color: $("#N_Color").val(),
            N_Lote: $("#N_Lote").val(),
            N_Partos: $("#N_Partos").val(),
            N_Peso: $("#N_Peso").val(),
            N_selectraza: $("#N_selectraza").val(),
            N_selectsexo: $("#N_selectsexo").val(),
            N_Clasificacion: $("#N_Clasificacion").val(),
        };

        $.post('./BackEnd/Agregar_Inventario_Rebaño.php', Datos, function(
            respuesta) { // metodo post del query igualmente funcional que el anterior

            //   console.log(Datos);
            //document.getElementById("task-form").reset();  // este y el de abajo son metodos para resetear el formulario cuando se hace un submit

            if (respuesta = "Ejecutado") {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Registro Guardado',
                    showConfirmButton: false,
                    timer: 1500
                })
                $("#ModalNuevo").modal('hide');

            } else {

            }

        });


        // Busca la tabla Inventario Rebaño y la recarga
        $('#Inventario_Rebaño').DataTable().ajax.reload();
    });

    // Insertar Registros Grandes-----------------------------
    $('#FormularioRegistrosGrandes').submit(function(e) {
        e.preventDefault();

        const Datos = {
            N_TipoRebaño: $("#N_TipoRebaño_G").val(),
            N_Lote: $("#N_Lote_G").val(),
            N_Raza: $("#N_Raza_G").val(),
            N_Sexo: $("#N_Sexo_G").val(),
            N_Clasificacion: $("#N_Clasificacion_G").val(),
            N_Cantidad: $("#N_Cantidad_G").val(),
        };

        console.log(Datos);
        $.post('./BackEnd/Agregar_Inventario_Rebaño_Registros_Grandes.php', Datos, function(
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
                $("#ModalRegistrosGrandes").modal('hide');

                //DataTable.ajax.reload();

            } else {

            }

        });
        // Busca la tabla inventario Rebaño y la recarga
        $('#Inventario_Rebaño').DataTable().ajax.reload();
    });


    // Fin insertar Registros Grandes----------------------------

   

    // Click Boton mostrar Qr de la tabla editar ------------------

    $(document).on('click', '.btnMostrarQr', function() {
        var id_animal = $('#NumeroAnimal').val();
        console.log(id_animal);
        const Datos = {
            id_animal: id_animal
        };
        $.post('./BackEnd/MostrarQr_Animal.php', Datos, function(
            respuesta) { // metodo post del query igualmente funcional que el anterior

            $('#ModalQR_Mostrar').modal('show'); //Abre modal
            $('#ModalEditar').modal('hide'); //Abre modal
            $('#Mostrar_Qr_Animal').html(respuesta);

        });
    });

    //--------------------------------------------------------------

    $(document).on('click', '.btnInformacion', function() {
        var id_animal = this.id;



        $('#NumeroAnimalInformacion').html('<b>N° del Animal: ' + id_animal + '</b>');
        //  document.querySelector('#NumeroAnimalInformacion').innerText = '<b>N° del Animal: ${id_animal}</b>';
        // Tabala de informacion adicional ---------------------------------------------

        var tabla2 = $('#Tabla_Produccion_Animal').DataTable({
            scrollY: '200px',
            scrollCollapse: true,
            searching: false,
            paging: false,
            info: false,
            destroy: true,

            ajax: {
                url: './BackEnd/Consulta_InformacionAdicional.php',
                dataSrc: '',
                data: {
                    'id_animal': id_animal
                },
                type: 'post',
            },
            // Aqui definimos caracteristicas de la tabla y 
            // evitamos que la columna 0 y la 10 sean buscables y no se puedan ordenar
            columnDefs: [{
                targets: [1],
                searchable: false,
                orderable: false
            }, ],
            columns: [{
                    data: 'Fecha'
                },
                {
                    data: 'Tipo_produccion'
                },
            ],

            language: {
                url: './assets/es-ES.json'
            },


        });
        
        $('#ModalInformacionAdicional').modal('show'); //Abre modal
        

        // Fin Tabala de informacion adicional ---------------------------------------------


    });

    // Boton Eliminar inventario ------------------------------------------------

    $(document).on('click', '.btnEliminar', function() {
        var id_animal = this.id;
        console.log(id_animal);
        EliminarRegistroInventarioRebaño(id_animal);
    });


    // Fin Boton Eliminar inventario ------------------------------------------------
    </script>



    <!--  -->

    <!-- QR IMPLEMENTACION EN BOTON QR -->
    <script src="./assets/js/html5-qrcode.min.js"></script>
    <script>
    function QR() {
        const scanner = new Html5QrcodeScanner('reader', {
            // Scanner will be initialized in DOM inside element with id of 'reader'
            qrbox: {
                width: 250,
                height: 250,
            }, // Sets dimensions of scanning box (set relative to reader element width)
            fps: 10, // Frames per second to attempt a scan
        });
        scanner.render(success, error);
        // Starts scanner
        function success(result) {

            // Opteniendo datos en modal editar

            var id_animal = result;

            const Datos = {
                id_animal: id_animal
            };
            $.post('./BackEnd/Consulta_Modal_Editar.php', Datos, function(
                respuesta) { // metodo post del query igualmente funcional que el anterior
                // console.log(id_animal);
                if (respuesta == "No") {
                    error(respuesta);
                } else {
                    $('#ModalEditar').modal('show'); //Abre modal
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
                    $('#ModalQR').modal('hide');
                    $('#ModalEditar').modal('show');

                    scanner.clear();
                    BuscarQr(result);
                }



            });
            // console.log(result);
            // Prints result as a link inside result element




        }

        function error(err) {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Error QR no Valido',
                text: "El QR que estas cargando no existe o no lo es. Elige otra por favor!",
                showConfirmButton: true,
            })
        }
    }
    </script>

    <script>

    </script>
</body>

</html>