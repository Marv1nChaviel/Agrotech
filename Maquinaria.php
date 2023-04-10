<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>AgroTech</title>
    <meta content="" name="description">
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
            <h1>Maquinaria Registro</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Inicio</li>
                    <li class="breadcrumb-item active">Maquinaria Registro</li>
                </ol>
            </nav>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalNuevo"><i
                    class="bi bi-file-earmark-plus"></i>
                Agregar Maquina</button>
        </div>
        <!--=======Final Texto de la tabla interna =======   -->
        <!--=======Inicio TABLA--------------------------------------------------- =======   -->
        <table id="InventarioMaquina" class="responsive nowrap display" style="width:100%">
            <thead>
                <tr>
                    <!-- <th>ID_Maquinaria</th> -->
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Año</th>
                    <th>Extra</th>
                    <th>Horas Uso</th>
                    <th>Trabajador a cargo Ci</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>

            </tfoot>
        </table>

        <!-- Modal Nuevo -------------------------------------- -->
        <div class="modal fade" id="ModalNuevo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Titulo">Agregar Datos de Maquinaria</h1>

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
                                            <img src="./assets/img/tractor_icono.png" alt="" width="130" height="130">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Boton de subir foto -->
                                        <div class="file-input">
                                            <input type="file" name="file-input" id="file-input"
                                                class="file-input__input" />
                                            <label class="file-input__label" for="file-input"><i
                                                    class="bi bi-upload"></i><span>-Subir Foto</span></label>
                                        </div>
                                        <!-- Fin Boton de subir foto -->
                                    </div>
                                </div>
                                <!-- fin Columna izquierda -->
                                <div class="col-md-8 col-12">
                                    <div class="row g-3">
                                        <div class="col-md-6 col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="Marca" name="Marca"
                                                    placeholder="Marca" required>
                                                <label for="Marca">Marca</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="Modelo" name="Modelo"
                                                    placeholder="Modelo" required>
                                                <label for="Modelo">Modelo</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="Color" name="Color"
                                                    placeholder="Color" required>
                                                <label for="Color">Color</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="HorasdeUso"
                                                    name="HorasdeUso" placeholder="Horas de Uso" required>
                                                <label for="HorasdeUso">Horas de Uso</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-5">
                                            <div class="form-floating mb-3">
                                                <select class="form-select" id="Año" name="Año" aria-label="Año"
                                                    size="1" required>
                                                    <option disabled selected hidden>Año</option>
                                                    <?php 
                                                    for ($i=1990; $i < 2014; $i++) { 
                                                    ?>
                                                    <option value="<?php echo $i?>"><?php echo $i?></option>
                                                    <?php } ?>
                                                </select>
                                                <label for="Año">Año</label>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <div class="form-floating mb-3">
                                                <select class="form-select" id="Trabajador" name="Trabajador"
                                                    aria-label="Trabajador" required>
                                                    <option disabled selected hidden>Trabajador</option>
                                                </select>
                                                <label for="Trabajador">Trabajador</label>
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
        <div class="modal fade" id="ModalEditarMaquinaria" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Titulo">Editar Datos de Maquinaria</h1>

                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <p style="font-size: 1.5em; color:red"><i class="bi bi-x-circle"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Cuerpo del formulario------ -->
                        <form id="FormularioEditar">
                            <!-- Columna izquierda -->
                            <div class="row">
                                <div class="col-md-4 col-12 ">
                                    <div class="row"></div>
                                    <div class="row">
                                        <div class="img_object ">
                                            <img src="./assets/img/tractor_icono.png" alt="" width="130" height="130">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Boton de subir foto -->
                                        <div class="file-input">
                                            <input type="file" name="file-input" id="file-input"
                                                class="file-input__input" />
                                            <label class="file-input__label" for="file-input"><i
                                                    class="bi bi-upload"></i><span>-Subir Foto</span></label>
                                        </div>
                                        <!-- Fin Boton de subir foto -->
                                    </div>
                                </div>
                                <!-- fin Columna izquierda -->
                                <div class="col-md-8 col-12">
                                    <div class="row g-3">
                                        <input type="text" class="form-control" id="E_id_Maquinaria" required hidden>
                                        <div class="col-md-6 col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="E_Marca" name="Marca"
                                                    placeholder="Marca" required>
                                                <label for="Marca">Marca</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="E_Modelo" name="Modelo"
                                                    placeholder="Modelo" required>
                                                <label for="Modelo">Modelo</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="E_Color" name="Color"
                                                    placeholder="Color" required>
                                                <label for="Color">Color</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="E_HorasdeUso"
                                                    name="HorasdeUso" placeholder="Horas de Uso" required>
                                                <label for="HorasdeUso">Horas de Uso</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-5">
                                            <div class="form-floating mb-3">
                                                <select class="form-select" id="E_Año" name="E_Año" aria-label="Año"
                                                    size="1" required>
                                                    <option disabled selected hidden>Año</option>
                                                    <?php 
                                                    for ($i=1990; $i < 2014; $i++) { 
                                                    ?>
                                                    <option value="<?php echo $i?>"><?php echo $i?></option>
                                                    <?php } ?>
                                                </select>
                                                <label for="Año">Año</label>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <div class="form-floating mb-3">
                                                <select class="form-select" id="E_Trabajador" name="E_Trabajador"
                                                    aria-label="Trabajador" required>
                                                    <option disabled selected hidden>Trabajador</option>
                                                </select>
                                                <label for="Trabajador">Trabajador</label>
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
        <!--======= Final TABLA--------------------------------------------------- =======   -->
    </main><!-- End #main -->
    <!-- Pie de pagina---- -->
    <?php 
    include('./Pie_De_Pagina.php');
    ?>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.5.1.js"></script>

    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.responsive.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <!-- Consultas de los modales en este script -->
    <script src="./assets/js/Consultar_Datos_Modal.js"></script>
    <script src="./assets/js/Consulta_Modal_Editar.js"></script>


    <script>
    $(document).ready(function() {
        var Tabla = $('#InventarioMaquina').DataTable({
            ajax: {
                url: 'BackEnd/Consulta_Maquinaria.php',
                dataSrc: '',
            },
            // Aqui definimos caracteristicas de la tabla y 
            // evitamos que la columna 0 y la 10 sean buscables y no se puedan ordenar
            columnDefs: [{
                targets: [0, 6],
                searchable: false,
                orderable: false
            }, ],
            columns: [{
                    data: 'Marca'
                },
                {
                    data: 'Modelo'
                },
                {
                    data: 'Color'
                },
                {
                    data: 'Año'
                },
                {
                    data: 'Extras'
                },
                {
                    data: 'Horas_uso'
                },
                {
                    data: 'Trabajadores_ID_trabajador'
                },
                {
                    data: 'Opciones'
                },
            ],
            language: {
                url: './assets/es-ES.json'
            },
            lengthMenu: [
                [5, 10, 15, 20, 25],
                ['5 Filas', '10 Filas', '15 Filas', '20 Filas', '25 Filas']
            ],
        });

    });
    // Enviar Datos del Modal Maquinaria para guardar---------------
    $('#FormularioEnviar').submit(function(e) {
        e.preventDefault();

        const Datos = {
            Marca: $('#Marca').val(),
            Modelo: $("#Modelo").val(),
            Color: $("#Color").val(),
            HorasdeUso: $("#HorasdeUso").val(),
            Año: $("#Año").val(),
            Trabajador: $("#Trabajador").val(),
            Extras: $("#Extras").val(),
        };
        console.log(Datos);
        $.post('./BackEnd/Agregar_Maquinaria.php', Datos, function(
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
                $('#InventarioMaquina').DataTable().ajax.reload();
                //DataTable.ajax.reload();

            } else {

            }

        });

    });

    // Formulario Editar Registro ----------------------------------------
    $('#FormularioEditar').submit(function(e) {
        e.preventDefault();

        const Datos = {
            E_id_Maquinaria: $('#E_id_Maquinaria').val(),
            E_Marca: $("#E_Marca").val(),
            E_Modelo: $("#E_Modelo").val(),
            E_Color: $("#E_Color").val(),
            E_HorasdeUso: $("#E_HorasdeUso").val(),
            E_Año: $("#E_Año").val(),
            E_Trabajador: $("#E_Trabajador").val(),
        };

        $.post('./BackEnd/Editar_Maquinaria.php', Datos, function(
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
                $("#ModalEditarMaquinaria").modal('hide');

            } else {

            }

        });


        // Busca la tabla Inventario Rebaño y la recarga
        $('#InventarioMaquina').DataTable().ajax.reload();
    });
    //  Boton Eliminar Maquinaria ------------------------------------------------

    $(document).on('click', '.btnEliminar', function() {
        var id_trabajador = this.id;
        console.log(id_trabajador);
        EliminarRegistroMaquinaria(id_trabajador);
    });

    // Fin Boton Eliminar Maquinaria ------------------------------------------------

    //  Boton Editar Maquinaria ------------------------------------------------

    $(document).on('click', '.btnEditarMaquinaria', function() {
        var id_Maquinaria = this.id;
        console.log(id_Maquinaria);
        ModalEditarMaquinaria(id_Maquinaria);
    });
    </script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/principal.js"></script>

</body>

</html>