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
            <h1>Maquinaria Registro</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Inicio</li>
                    <li class="breadcrumb-item active">Maquinaria Registro</li>
                </ol>
            </nav>
            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#ModalNuevo"><i
                    class="bi bi-file-earmark-plus"></i>
                Agregar Maquina</button>
        </div>
        <!--=======Final Texto de la tabla interna =======   -->
        <!--=======Inicio TABLA--------------------------------------------------- =======   -->
        <table id="Inventario" class="responsive nowrap display" style="width:100%">
            <thead>
                <tr>
                    <th>ID_Maquinaria</th>
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

        <!-- Modal Editar -------------------------------------- -->
        <div class="modal fade" id="ModalEditar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Titulo">Editar Datos Trabajadores</h1>

                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <p style="font-size: 1.5em; color:red"><i class="bi bi-x-circle"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Cuerpo del formulario------ -->
                        <form>
                            <!-- Columna izquierda -->
                            <div class="row">
                                <div class="col-md-4 col-4">
                                    <div class="row"></div>
                                    <div class="row">
                                        <div class="col-md-3 col-8">
                                            <img src="./assets/img/soporte.png" alt="" width="130" height="130">
                                        </div>
                                    </div>
                                    <div class="row"></div>
                                </div>
                                <!-- fin Columna izquierda -->
                                <div class="col-md-8 col-8">
                                <div class="row g-3">
                                <div class="col-md-6 col-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="Cedula" placeholder="Cedula">
                                        <label for="Cedula">Cedula</label>
                                    </div>
                                </div>

                                <div class="col-md-6 col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="Cargo" placeholder="Cargo">
                                        <label for="Cargo">Cargo</label>
                                    </div>
                                </div>

                                <div class="col-md-6 col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="Fecha_Entrada"
                                            placeholder="Fecha Entrada">
                                        <label for="Fecha Entrada">Fecha Entrada</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="Fecha_de_Permiso"
                                            placeholder="Fecha de Permiso">
                                        <label for="Fecha de Permiso">Fecha de Permiso</label>
                                    </div>
                                </div>
                                </div>
                                </div>
                                
                            </div>
                        </form>
                        <!-- FIN Cuerpo del formulario -->
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-success"><i class="bi bi-check2-circle"></i>
                            Guardar</button>
                    </div>
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


    <script>
    $(document).ready(function() {
        $('#Inventario').DataTable({
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
                    data: 'ID_maquinaria'
                },
                {
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
    </script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/principal.js"></script>

</body>

</html>