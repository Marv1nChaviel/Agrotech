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
                                    <h5 class="card-title">Actividad Reciente <span>| Hoy</span></h5>

                                    <div class="activity">

                                        <div class="activity-item d-flex">
                                            <div class="activite-label">05-03-2023</div>
                                            <i
                                                class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                            <div class="activity-content">
                                               <b>Se agregaron al registro 10 nuevos animales</b>
                                            </div>
                                        </div><!-- End activity item-->


                                        <div class="activity-item d-flex">
                                            <div class="activite-label">02-03-2023</div>
                                            <i
                                                class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                            <div class="activity-content">
                                                <b>Se modifico datos de el animal con el codigo "2"</b>
                                            </div>
                                        </div><!-- End activity item-->

                                        <div class="activity-item d-flex">
                                            <div class="activite-label">01-03-2023</div>
                                            <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                            <div class="activity-content">
                                                <b>Faltan terminar Modificaciones en tu perfil</b>
                                            </div>
                                        </div><!-- End activity item-->

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
    </script>
</body>

</html>