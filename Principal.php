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
    <!-- <link rel="stylesheet" href="assets/css/responsive.dataTables.min.css"> -->
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
            <h1>Tablero Administrativo</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Inicio</li>
                    <li class="breadcrumb-item active">Tablero Administrativo</li>
                </ol>
            </nav>
        </div>
        <!--=======Final Texto de la tabla interna =======   -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Cartas Cantidad Ganado -->
                        <div class="col-xxl-3 col-md-3 col-sm-6 ">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Ganado <span>| Actual</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-piggy-bank"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6 id="cantganado"></h6>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- Fin Cartas Cantidad Ganado -->

                        <!-- Carta Ganancias -->
                        <div class="col-xxl-3 col-md-3 col-sm-6 ">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Ganancias <span>| Actual</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>$954,3</h6>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- Fin Carta Ganancias -->

                        <!-- Sales Card -->
                        <div class="col-xxl-3 col-md-3 col-sm-6">
                            <div class="card info-card cost-card">

                                <div class="card-body">
                                    <h5 class="card-title">Gastos <span>| Actual</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>$356,8</h6>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-3 col-md-3 col-sm-6 ">

                            <div class="card info-card customers-card">

                                <div class="card-body">
                                    <h5 class="card-title">Trabajadores <span>| Actual</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6 id="canttrabajadores"></h6>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->



                        <!-- Reports -->
                        <div class="col-12">
                            <!-- Actividad Reciente-->
                            <div class="card">
                                <!-- <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div> -->

                                <div class="card-body">
                                    <h5 class="card-title">Actividad Reciente <span>| Ultimos 10 cambios</span></h5>

                                    <div class="activity">

                                        <!--=======Inicio TABLA--------------------------------------------------- =======   -->
                                        <table id="ActividadReciente" class="" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <!-- <th>ID_Maquinaria</th> -->
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                            <tfoot>

                                            </tfoot>
                                        </table>

                                    </div>

                                </div>
                            </div><!-- End Actividad Reciente-->
                        </div><!-- End Reports -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                </div><!-- End Right side columns -->

            </div>
        </section>

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

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/76b5f911f3.js" crossorigin="anonymous"></script>

    <!-- Cargador de la pagina -->
    <script src="assets/js/principal.js"></script>
    <script>
    $(document).ready(function() {
        $.ajax({
            url: './BackEnd/Consulta_datos_panel_principal.php',
            type: 'GET',
            success: function(respuesta) {
                let json = JSON.parse(respuesta);
                console.log(json[0]['cantidad_rebaño']);
                $('#cantganado').text(json[0]['cantidad_rebaño']);
                $('#canttrabajadores').text(json[0]['cantidad_trabajadores']);
            }
        })
    });
// Tabla de pagina principal de actividad reciente inicialzacion y configuracion
    $(document).ready(function() {
        $('#ActividadReciente').DataTable({
            scrollY: '200px',
            scrollCollapse: true,
            searching: false,
            paging: false,
            info: false,
           
            ajax: {
                url: './BackEnd/Consulta_Actividad_Reciente.php',
                dataSrc: '',
            },
            // Aqui definimos caracteristicas de la tabla y 
            // evitamos que la columna 0 y la 10 sean buscables y no se puedan ordenar
            columnDefs: [{
                targets: [0],
                searchable: false,
                orderable: true
            }, ],
            columns: [
                {
                    data: 'Datos'
                },
            ],
            language: {
                url: './assets/es-ES.json'
            },
            lengthMenu: [
                [10],
                ['10 Filas']
            ],
        });

    });
    </script>
</body>

</html>