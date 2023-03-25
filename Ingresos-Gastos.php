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
    <link rel="stylesheet" href="./assets/css/Ingresos-Gastos.css">

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
            <h1>Ingresos y Gastos</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Inicio</li>
                    <li class="breadcrumb-item active">Ingresos-Gastos</li>
                </ol>
            </nav>

        </div>
        <!--=======Final Texto de la tabla interna =======   -->
        <div class="container">
            <!-- section Ingresos -->

            <section class="ingresos">

                <div class="btn-ingreso">

                    <!-- Botones de Ingreso -->
                    <a><button class="btn-ingreso-1"><i class="bi bi-plus-circle"></i> Ingresos</button></a>
                    <!---------------------------------->
                    <a><button class="btn-ingreso-2"><i class="bi bi-question-circle"></i></button></a>

                </div>


                <!-- Grafica de Ingresos -->


                <div>
                    <div class="graficaing" id="reportsChart"></div>

                    <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#reportsChart"), {
                            series: [{
                                name: 'Ganancias',
                                data: [11, 32, 45, 32, 34, 52, 41]
                            }],
                            chart: {
                                height: 200,
                                type: 'area',
                                toolbar: {
                                    show: false
                                },
                            },
                            markers: {
                                size: 4
                            },
                            colors: ['#2eca6a'],
                            fill: {
                                type: "gradient",
                                gradient: {
                                    shadeIntensity: 1,
                                    opacityFrom: 0.3,
                                    opacityTo: 0.4,
                                    stops: [0, 90, 100]
                                }
                            },
                            dataLabels: {
                                enabled: false
                            },
                            stroke: {
                                curve: 'smooth',
                                width: 2
                            },
                            xaxis: {
                                type: 'datetime',
                                categories: ["2018-09-19T00:00:00.000Z",
                                    "2018-09-19T01:30:00.000Z",
                                    "2018-09-19T02:30:00.000Z",
                                    "2018-09-19T03:30:00.000Z",
                                    "2018-09-19T04:30:00.000Z",
                                    "2018-09-19T05:30:00.000Z",
                                    "2018-09-19T06:30:00.000Z"
                                ]
                            },
                            tooltip: {
                                x: {
                                    format: 'dd/MM/yy HH:mm'
                                },
                            }
                        }).render();
                    });
                    </script>
                </div>

                <!-- Tabla de ingresos  -->

                <div class="table-ingresos">
                    <table id="myIngresos" class="display">
                        <thead>
                            <tr>
                                <th>Column 1</th>
                                <th>Column 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 2</td>
                            </tr>
                            <tr>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </section>



            <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            <!-- section  Egresos -->

            <section class="egresos">

                <!-- btn- Egresos-->

                <div class="btn-Egreso">

                    <a><button class="btn-ingreso-3"><i class="bi bi-dash-circle"></i> Egresos</button></a>
                    <!---------------------------------->
                    <a><button class="btn-ingreso-2"><i class="bi bi-question-circle"></i></button></a>

                </div>

                <!-- Grafica de Egresos -->

                <div>
                    <div class="graficaEg" id="Egresos"></div>

                    <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#Egresos"), {
                            series: [{
                                name: 'Gastos',
                                data: [31, 40, 28, 51, 42, 82, 56],
                            }],
                            chart: {
                                height: 200,
                                type: 'area',
                                toolbar: {
                                    show: false
                                },
                            },
                            markers: {
                                size: 4
                            },
                            colors: ['#FF0000'],
                            fill: {
                                type: "gradient",
                                gradient: {
                                    shadeIntensity: 1,
                                    opacityFrom: 0.3,
                                    opacityTo: 0.4,
                                    stops: [0, 90, 100]
                                }
                            },
                            dataLabels: {
                                enabled: false
                            },
                            stroke: {
                                curve: 'smooth',
                                width: 2
                            },
                            xaxis: {
                                type: 'datetime',
                                categories: ["2018-09-19T00:00:00.000Z",
                                    "2018-09-19T01:30:00.000Z",
                                    "2018-09-19T02:30:00.000Z",
                                    "2018-09-19T03:30:00.000Z",
                                    "2018-09-19T04:30:00.000Z",
                                    "2018-09-19T05:30:00.000Z",
                                    "2018-09-19T06:30:00.000Z"
                                ]
                            },
                            tooltip: {
                                x: {
                                    format: 'dd/MM/yy HH:mm'
                                },
                            }
                        }).render();
                    });
                    </script>
                </div>

                <!-- Tabla de Egresos -->

                <div class="table-Egresos">
                    <table id="myEgresos" class="display">
                        <thead>
                            <tr>
                                <th>Column 1</th>
                                <th>Column 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 2</td>
                            </tr>
                            <tr>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 2</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </section>

        </div>

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
    <script src="assets/js/principal.js"></script>
    <script>
    $(document).ready(function() {
        $('#myIngresos').DataTable({
            ajax: {
                url: './BackEnd/Consulta_Inventario_Rebaño.php',
                dataSrc: '',
            },
            // Aqui definimos caracteristicas de la tabla y 
            // evitamos que la columna 0 y la 10 sean buscables y no se puedan ordenar
            columnDefs: [{
                targets: [0, 9],
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
        $('#myEgresos').DataTable({
            ajax: {
                url: './BackEnd/Consulta_Inventario_Rebaño.php',
                dataSrc: '',
            },
            // Aqui definimos caracteristicas de la tabla y 
            // evitamos que la columna 0 y la 10 sean buscables y no se puedan ordenar
            columnDefs: [{
                targets: [0, 9],
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
    </script>
</body>

</html>