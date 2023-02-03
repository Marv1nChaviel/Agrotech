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
            <h1>Trabajadores Datos</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Inicio</li>
                    <li class="breadcrumb-item active">Trabajadores Datos</li>
                </ol>
            </nav>
        </div>
        <!--=======Final Texto de la tabla interna =======   -->
        <!--=======Inicio TABLA--------------------------------------------------- =======   -->
        <table id="Inventario" class="responsive nowrap display" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cedula</th>
                    <th>Fecha Entrada</th>
                    <th>Salida_permiso</th>
                    <th>Sueldo_trabajadores</th>
                    <th>Cargo</th>
                    <th>Telefono</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>1</td>
                    <td>256</td>
                    <td>xxxxx</td>
                    <td>2011-04-25</td>
                    <td>5</td>
                    <td>0</td>
                    <td>265kg</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#ModalEditar"><i class="bi bi-pencil"></i></button>
                        <button type="button" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Cedula</th>
                    <th>Fecha Entrada</th>
                    <th>Salida_permiso</th>
                    <th>Sueldo_trabajadores</th>
                    <th>Cargo</th>
                    <th>Telefono</th>
                    <th>Opciones</th>
                </tr>
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
                                            <img src="./assets/img/soporte.png" alt="" width="100" height="100">
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

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; AGROTECH <strong><span>2023</span></strong>. All Rights Reserved
        </div>
        <div class="credits">

            Design by: Marvin Chaviel, Jose Lopez, Cesar Sanchez</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.5.1.js"></script>

    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.responsive.min.js"></script>


    <script>
    $(document).ready(function() {
        $('#Inventario').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json'
            },
            lengthMenu: [
                [10, 25, 50, 100, 200, -1],
                ['10 Filas', '25 Filas', '50 Filas', '100 Filas', '200 Filas', 'Todas']
            ],
        });

    });
    </script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/principal.js"></script>

</body>

</html>