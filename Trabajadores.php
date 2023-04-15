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
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">


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
            <h1>Trabajadores Datos</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Inicio</li>
                    <li class="breadcrumb-item active">Trabajadores Datos</li>
                </ol>
            </nav>
            <button type="button" class="btn-regitros-grandes" data-bs-toggle="modal" data-bs-target="#ModalNuevo"><i
                    class="bi bi-person-add"></i>
                Nuevo Trabajador</button>
            <!-- <button type="button" class="btn btn-primary " data-bs-toggle="modal"
                data-bs-target="#ModalSalidaPermiso"><i class="bi bi-person-fill-exclamation"></i>
                Agregar Salida Permiso</button> -->
        </div>

        <!--=======Final Texto de la tabla interna =======   -->
        <!--=======Inicio TABLA--------------------------------------------------- =======   -->
        <table id="InventarioTrabajadores" class="responsive nowrap display" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Fecha Entrada</th>
                    <th>Ultimo Permiso</th>
                    <th>Sueldo</th>
                    <th>Cargo</th>
                    <th>Telefono</th>
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
                        <h1 class="modal-title fs-5" id="Titulo">Agregar Trabajadores</h1>

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
                                            <img src="./assets/img/icon-user.png" alt="" width="130" height="130">
                                        </div>
                                    </div>
                                    <div class="row">

                                        <!-- Boton de subir foto -->
                                        <div class="file-input">
                                            <!-- <input accept="image/*" type="file"  name="Foto" id="Foto"
                                                class="file-input__input" >
                                            <label class="file-input__label" for="file-input"><i
                                                    class="bi bi-upload"></i><span>-Subir Foto</span></label> -->
                                        </div>
                                        <!-- Fin Boton de subir foto -->

                                    </div>
                                </div>
                                <!-- fin Columna izquierda -->
                                <div class="col-md-8 col-12">
                                    <div class="row g-3">
                                        <div class="col-md-12 col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="NombreApellido"
                                                    name="NombreApellido" placeholder="Sueldo" required>
                                                <label for="NombreApellido">Nombre y Apellido</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="Cargo" name="Cargo"
                                                    placeholder="Cargo" required>
                                                <label for="Cargo">Cargo</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-6">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="Cedula" name="Cedula"
                                                    placeholder="Cedula" required>
                                                <label for="Cedula">Cedula</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-6">
                                            <div class="input-group mb-3">
                                                <div class="form-floating">
                                                    <input type="number" class="form-control" id="Sueldo"
                                                        placeholder="Username">
                                                    <label for="Sueldo">Sueldo</label>
                                                </div>
                                                <span class="input-group-text"><i
                                                        class="bi bi-currency-dollar"></i></span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-6">
                                            <div class="input-group date input-fecha-trabajador">
                                                <input type="date" class="form-control" id="Fecha_Entrada"
                                                    name="Fecha_Entrada"><span class="input-group-addon"><i
                                                        class="glyphicon glyphicon-th"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="Telefono" name="Telefono"
                                                    placeholder="Telefono" required>
                                                <label for="Telefono">Telefono</label>
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
        <div class="modal fade" id="ModalEditarTrabajadores" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Titulo">Agregar Trabajadores</h1>

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
                                    <div class="row">
                                    <input type="number" class="form-control" id="E_id_trabajador" name="E_id_trabajador" hidden>
                                    </div>
                                    <div class="row">
                                        <div class="img_object">
                                            <img src="./assets/img/icon-user.png" id="E_FotoTrabajadores" alt="" width="130" height="130">
                                        </div>
                                    </div>
                                    <div class="row">

                                        <!-- Boton de subir foto -->
                                        <div class="file-input">
                                            <!-- <input type="file" name="file-input" id="file-input"
                                                class="file-input__input" />
                                            <label class="file-input__label" for="file-input"><i
                                                    class="bi bi-upload"></i><span>-Subir Foto</span></label> -->
                                        </div>
                                        <!-- Fin Boton de subir foto -->

                                    </div>
                                </div>
                                <!-- fin Columna izquierda -->
                                <div class="col-md-8 col-12">
                                    <div class="row g-3">
                                        <div class="col-md-12 col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="E_NombreApellido"
                                                    name="NombreApellido" placeholder="Sueldo" required>
                                                <label for="NombreApellido">Nombre y Apellido</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="E_Cargo" name="Cargo"
                                                    placeholder="Cargo" required>
                                                <label for="Cargo">Cargo</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-6">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="E_Cedula" name="Cedula"
                                                    placeholder="Cedula" required>
                                                <label for="Cedula">Cedula</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-6">
                                            <div class="input-group mb-3">
                                                <div class="form-floating">
                                                    <input type="number" class="form-control" id="E_Sueldo"
                                                        placeholder="Username">
                                                    <label for="Sueldo">Sueldo</label>
                                                </div>
                                                <span class="input-group-text"><i
                                                        class="bi bi-currency-dollar"></i></span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-6">
                                            <div class="input-group date input-fecha-trabajador">
                                                <input type="date" class="form-control" id="E_Fecha_Entrada"
                                                    name="Fecha_Entrada"><span class="input-group-addon"><i
                                                        class="glyphicon glyphicon-th"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="E_Telefono" name="Telefono"
                                                    placeholder="Telefono" required>
                                                <label for="Telefono">Telefono</label>
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
        <!-- Modal Agregar Salida Permiso -------------------------------------- -->
        <div class="modal fade" id="ModalSalidaPermiso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Titulo">Salida de Permiso</h1>

                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <p style="font-size: 1.5em; color:red"><i class="bi bi-x-circle"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formularioSalidaPermiso">
                            <input type="number" class="form-control" id="id_trabajador_h" name="id_trabajador" hidden>
                            <div class="input-group date input-fecha-permiso">
                                <input type="date" class="form-control" id="Salida_Permiso"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-th"></i></span>
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
        <!--  fin Agregar Salida Permiso-------------------------------------- -->
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
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <!-- Iconos  -->
    <script src="https://kit.fontawesome.com/76b5f911f3.js" crossorigin="anonymous"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/principal.js"></script>
    <script src="assets/js/Consulta_Modal_Editar.js"></script>

    <script>
    $(document).ready(function() {
        $('#InventarioTrabajadores').DataTable({
            ajax: {
                url: 'BackEnd/Consulta_Trabajadores.php',
                dataSrc: '',
            },
            // Aqui definimos caracteristicas de la tabla y 
            // evitamos que la columna 0 y la 10 sean buscables y no se puedan ordenar
            columnDefs: [{
                targets: [0, 7],
                searchable: false,
                orderable: false
            }, ],
            columns: [{
                    data: 'ID_trabajador'
                },
                {
                    data: 'Ci'
                },
                {
                    data: 'Nombre'
                },
                {
                    data: 'Fecha_entrada'
                },
                {
                    data: 'Salida_permiso'
                },
                {
                    data: 'Sueldo_trabajadores'
                },
                {
                    data: 'Cargo'
                },
                {
                    data: 'Telefono'
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
    // End rellenar tablña con datos ajax

    // Submit formulario
    $('#FormularioEnviar').submit(function(e) {
        e.preventDefault();



        const Datos = {
            N_Cedula: $('#Cedula').val(),
            N_Nombre: $('#NombreApellido').val(),
            N_Cargo: $("#Cargo").val(),
            N_Fecha_Entrada: $("#Fecha_Entrada").val(),
            N_Telefono: $("#Telefono").val(),
            N_Sueldo: $("#Sueldo").val()
        };

        console.log(Datos);

        $.post('./BackEnd/Agregar_Trabajadores.php', Datos, function(
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
                $('#InventarioTrabajadores').DataTable().ajax.reload();
                //DataTable.ajax.reload();


            } else {

            }



        });

    });

    // Click Boton Agregar Permiso de Salida ------------------

    $(document).on('click', '.btnSalidaPermiso', function() {
        var id_trabajador = this.id;
        $('#id_trabajador_h').val(id_trabajador);
        $('#ModalSalidaPermiso').modal('show'); //Abre modal //Abre modal
        

    });

    // Salida de Permiso ----------------------
     // Formulario Editar Registro ------------------------------
     $('#formularioSalidaPermiso').submit(function(e) {
        e.preventDefault();

        const Datos = {
            S_id_trabajador: $('#id_trabajador_h').val(),
            S_Salida_Permiso: $("#Salida_Permiso").val(),
        };

        $.post('./BackEnd/Agregar_Salida_Permiso_Trabajadore.php', Datos, function(
            respuesta) { // metodo post del query igualmente funcional que el anterior
                console.log(Datos);
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
                
                
                $("#ModalSalidaPermiso").modal('hide');
                document.getElementsByClassName("Salida_Permiso").value = "";

            } else {

            }

        });


        // Busca la tabla Inventario Rebaño y la recarga
        $('#InventarioTrabajadores').DataTable().ajax.reload();
    });

    // Insertar Salida Permiso-----------------------------
   
    //  Boton Eliminar Trabajador ------------------------------------------------

    $(document).on('click', '.btnEliminar', function() {
        var id_trabajador = this.id;
        console.log(id_trabajador);
        EliminarRegistroTablaTrabajadores(id_trabajador);
    });

    // Fin Boton Eliminar Trabajador ------------------------------------------------

    //  Boton Editar Trabajador ------------------------------------------------

    $(document).on('click', '.btnEditarTrabajadores', function() {
        var id_trabajador = this.id;
        console.log(id_trabajador);
        ModalEditarTrabajadores(id_trabajador);
    });


    // Fin Boton Editar Trabajador ------------------------------------------------

    // Formulario Editar Registro ------------------------------
    $('#FormularioEditar').submit(function(e) {
        e.preventDefault();

        const Datos = {
            E_id_trabajador: $('#E_id_trabajador').val(),
            E_NombreApellido: $("#E_NombreApellido").val(),
            E_Cargo: $("#E_Cargo").val(),
            E_Cedula: $("#E_Cedula").val(),
            E_Sueldo: $("#E_Sueldo").val(),
            E_Fecha_Entrada: $("#E_Fecha_Entrada").val(),
            E_Telefono: $("#E_Telefono").val(),
        };

        $.post('./BackEnd/Editar_Trabajadores.php', Datos, function(
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
                $("#ModalEditarTrabajadores").modal('hide');

            } else {

            }

        });


        // Busca la tabla Inventario Rebaño y la recarga
        $('#InventarioTrabajadores').DataTable().ajax.reload();
    });
    </script>

    <script>
    $('.input-fecha-trabajador').datepicker({
        format: "yyyy-mm-dd",
        language: "es",
        orientation: "bottom auto",
        startDate: "2022-07-01"
    });

    $('.input-fecha-permiso').datepicker({
        format: "yyyy-mm-dd",
        language: "es",
        orientation: "bottom auto"
    });
    </script>

    <!-- Rellenar datatables con datos mediante ajax -->



</body>

</html>