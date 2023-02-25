<!DOCTYPE html>
<html lang="en">

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
            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#ModalRegistrosGrandes"><i
                    class="bi bi-infinity"></i>
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
                    <th>#</th>
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
                            <div class="col-md-5 col-8">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="N_NumeroAnimal" name="N_NumeroAnimal"
                                        placeholder="Numero del Animal" required>
                                    <label for="floatingName">Numero del Animal</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-4">
                                <button type="button" class="btn btn-info"><i class="bi bi-qr-code"
                                        style="font-size: 1.6em;"></i></button>
                            </div>
                            <div class="col-md-5 col-7">
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
                            <div class="col-md-3 col-5">
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
        <div class="modal fade" id="ModalEditar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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
                        <form class="row g-3">
                            <div class="col-md-5 col-8">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="NumeroAnimal"
                                        placeholder="Numero del Animal">
                                    <label for="floatingName">Numero del Animal</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-4">
                                <button type="button" class="btn btn-info"><i class="bi bi-qr-code"
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
                                    <input type="text" class="form-control" id="Color" placeholder="Color">
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
                                    <input type="number" class="form-control" id="Partos" placeholder="Partos">
                                    <label for="Partos">Partos</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="Peso" placeholder="Peso">
                                    <label for="Peso">Peso</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="selectraza" aria-label="Raza">
                                        <option value="0" selected>Raza</option>

                                    </select>
                                    <label for="Raza">Raza</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" aria-label="Sexo">
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


                        </form>
                        <!-- FIN Cuerpo del formulario -->
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success"><i class="bi bi-check2-circle"></i>
                            Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <!--  fin Modal Editar -------------------------------------- -->
        <?php 
    include('./Modal/Modal_QR.php');
    ?>


<!-- Modal Registros Grandes------------------------- -->
<div class="modal fade" id="ModalRegistrosGrandes" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Titulo">Cantidad De Registros</h1>

                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <p style="font-size: 1.5em; color:red"><i class="bi bi-x-circle"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                    <input class="form-control form-control-lg" type="number" placeholder="Cantidad">
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success"><i class="bi bi-check2-circle"></i>
                            Generar</button>
                    </div>
                </div>
            </div>
        </div>
<!-- Fin Modal Registros Grande---------------------- -->

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
<!-- Iconos -->
    <script src="https://kit.fontawesome.com/76b5f911f3.js" crossorigin="anonymous"></script>

    <!-- Configuracion basica datatables  -->
    <script>
    $(document).ready(function() {
    var tabla = $('#Inventario_Rebaño').DataTable({
      
            ajax: {
                url: 'BackEnd/Consulta_Inventario_Rebaño.php',
                dataSrc: '',
            },
            // Aqui definimos caracteristicas de la tabla y 
            // evitamos que la columna 0 y la 10 sean buscables y no se puedan ordenar
            columnDefs: [{
                targets: [0, 10],
                searchable: false,
                orderable: false
            }, ],
            columns: [{
                    data: 'ID_animal'
                },
                {
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
        
        setInterval( function () {
    tabla.ajax.reload( null, false ); // user paging is not reset on reload
}, 5000 );

    });
// Rellenar datatables con datos mediante ajax---------------
    $('#FormularioEnviar').submit(function(e) {
        e.preventDefault();
        //  var N_NumeroAnimal = $('N_NumeroAnimal').val();
        // var N_TipoRebaño = $("#N_TipoRebaño").val();
        // var N_Color = $("N_Color").val();
        // var N_Lote = $("N_Lote").val();
        // var N_Partos = $("N_Partos").val();
        // var N_Peso = $("N_Peso").val();
        // var N_selectraza = $("N_selectraza").val();
        // var N_selectsexo = $("N_selectsexo").val();

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

                //DataTable.ajax.reload();
                RecargarDataTable();
            } else {

            }



        });

    });
    </script>

    <!--  -->

    <!-- QR IMPLEMENTACION EN BOTON QR -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.4/html5-qrcode.min.js"
        integrity="sha512-k/KAe4Yff9EUdYI5/IAHlwUswqeipP+Cp5qnrsUjTPCgl51La2/JhyyjNciztD7mWNKLSXci48m7cctATKfLlQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
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

            console.log(result);
            // Prints result as a link inside result element
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Exito!',
                showConfirmButton: false,
                timer: 1000
            })
            scanner.clear();

            // Clears scanning instance

            // document.getElementById('reader').remove();
            // Removes reader element from DOM since no longer needed

            $('#ModalQR').modal('hide');
            BuscarQr(result);

           

        }

        function error(err) {
            console.error(err);
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Error',
                showConfirmButton: false,
                timer: 1000
            })
        }
    }
    </script>

    <script>
        
    </script>
</body>

</html>