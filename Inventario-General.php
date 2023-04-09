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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

            <h1>Inventario General</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Inicio</li>
                    <li class="breadcrumb-item active">Inventario General</li>
                </ol>
            </nav>
            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#ModalNuevo"><i class="bi bi-file-earmark-plus"></i>
                Agregar Inventario</button>

        </div>
        <!--=======Final Texto de la tabla interna =======   -->
        <!--=======Inicio TABLA--------------------------------------------------- =======   -->
        <table id="Inventario_General" class="responsive nowrap display" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Informacion</th>
                    <th>Disponibilidad</th>
                    <th>Operador</th>
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
        <div class="modal fade" id="ModalNuevo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Titulo">Agregar Inventario</h1>

                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <p style="font-size: 1.5em; color:red"><i class="bi bi-x-circle"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Cuerpo del formulario------ -->
                        <form id="FormularioEnviar">
                            <!-- Columna izquierda -->
                            <div class="row">
                                <div class="col-md-4 col-12 ">
                                    <div class="row"></div>
                                    <div class="row">
                                        <div class="img_object ">
                                            <img src="./assets/img/inventario_icono.png" alt="" width="130" height="130">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Boton de subir foto -->
                                        <div class="file-input">
                                            <input type="file" name="file-input" id="file-input" class="file-input__input" />
                                            <label class="file-input__label" for="file-input"><i class="bi bi-upload"></i><span>-Subir Foto</span></label>
                                        </div>
                                        <!-- Fin Boton de subir foto -->
                                    </div>
                                </div>
                                <!-- fin Columna izquierda -->
                                <div class="col-md-8 col-12">
                                    <div class="row g-3">
                                        <div class="col-md-12 col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="NombreObjeto" name="NombreObjeto" placeholder="NombreObjeto" required>
                                                <label for="NombreObjeto">Nombre del Objeto</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="CantDisponible" name="CantDisponible" placeholder="CantDisponible" required>
                                                <label for="CantDisponible">N° Disponible</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="form-floating mb-3">
                                                <select class="form-select" id="Operador" name="Operador" aria-label="Operador" required>
                                                    <option disabled selected hidden>Operador</option>
                                                </select>
                                                <label for="Sexo">Operador</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="InfoObjeto" name="InfoObjeto" placeholder="InfoObjeto" required>
                                                <label for="InfoObjeto">Informacion del Objeto</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success"><i class="bi bi-check2-circle"></i>
                            Guardar</button>
                    </div>
                    </form>
                    <!-- FIN Cuerpo del formulario -->
                </div>
            </div>
        </div>
        <!--  fin Modal Nuevo -------------------------------------- -->
        <!-- Modal Editar -------------------------------------- -->
        <div class="modal fade" id="ModalEditarInventarioGeneral" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Titulo">Editar Inventario</h1>

                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <p style="font-size: 1.5em; color:red"><i class="bi bi-x-circle"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Cuerpo del formulario------ -->
                        <form id="FormularioEnviar">
                            <!-- Columna izquierda -->
                            <div class="row">
                                <div class="col-md-4 col-12 ">
                                    <div class="row"></div>
                                    <div class="row">
                                        <div class="img_object">
                                            <img src="./assets/img/inventario_icono.png" alt="" width="130" height="130">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Boton de subir foto -->
                                        <div class="file-input">
                                            <input type="file" name="file-input" id="file-input" class="file-input__input" />
                                            <label class="file-input__label" for="file-input"><i class="bi bi-upload"></i><span>-Subir Foto</span></label>
                                        </div>
                                        <!-- Fin Boton de subir foto -->
                                    </div>
                                </div>
                                <!-- fin Columna izquierda -->
                                <div class="col-md-8 col-12">
                                    <div class="row g-3">
                                        <div class="col-md-12 col-6">
                                        <input type="text" class="form-control" id="E_id_inventario" required hidden>
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="E_NombreObjeto" name="NombreObjeto" placeholder="NombreObjeto" required>
                                                <label for="NombreObjeto">Nombre del Objeto</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="E_CantDisponible" name="CantDisponible" placeholder="CantDisponible" required>
                                                <label for="CantDisponible">N° Disponible</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="form-floating mb-3">
                                                <select class="form-select" id="E_Operador" name="E_Operador" aria-label="Operador" required>
                                                    <option disabled selected hidden>Operador</option>
                                                </select>
                                                <label for="Operador">Operador</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="E_InfoObjeto" name="InfoObjeto" placeholder="InfoObjeto" required>
                                                <label for="InfoObjeto">Informacion del Objeto</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success"><i class="bi bi-check2-circle"></i>
                            Guardar</button>
                    </div>
                    </form>
                    <!-- FIN Cuerpo del formulario -->
                </div>
            </div>
        </div>
        <!--  fin Modal Editar -------------------------------------- -->


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
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/Consulta_Modal_Editar.js"></script>
    <!-- Iconos -->
    <script src="https://kit.fontawesome.com/76b5f911f3.js" crossorigin="anonymous"></script>

    <!-- Configuracion basica datatables  -->
    <script>
        $(document).ready(function() {
            var tabla = $('#Inventario_General').DataTable({

                ajax: {
                    url: './BackEnd/Consulta_Inventario_General.php',
                    dataSrc: '',
                },
                columns: [{
                        data: 'id_Inventario'
                    },
                    {
                        data: 'Nombre_item'
                    },
                    {
                        data: 'Info_item'
                    },
                    {
                        data: 'Stock'
                    },
                    {
                        data: 'Trabajador'
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
                N_NombreObjeto: $('#NombreObjeto').val(),
                N_CantDisponible: $("#CantDisponible").val(),
                N_Operador: $("#Operador").val(),
                N_InfoObjeto: $("#InfoObjeto").val(),
            };
            console.log(Datos);
            $.post('./BackEnd/Agregar_Inventario_General.php', Datos, function(
                respuesta) { // metodo post del query igualmente funcional que el anterior

                
                //document.getElementById("task-form").reset();  // este y el de abajo son metodos para resetear el formulario cuando se hace un submit

                if (respuesta = "Ejecutado") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Agregado a inventario!',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $("#ModalNuevo").modal('hide');
                    $('#Inventario_General').DataTable().ajax.reload();
                    //DataTable.ajax.reload();
                   
                } else {

                }

            });

        });

        //  Boton Eliminar inventario general ------------------------------------------------

        $(document).on('click', '.btnEliminar', function() {
            var id_inventario = this.id;
            EliminarRegistroInventarioGeneral(id_inventario);
        });

        // Fin Boton Eliminar inventario general ------------------------------------------------
        //  Boton Editar inventario general ------------------------------------------------

        $(document).on('click', '.btnEditar', function() {
            var id_inventario = this.id;
            ModalEditarInventarioGeneral(id_inventario);
        });
    </script>


    <!--  -->



</body>

</html>