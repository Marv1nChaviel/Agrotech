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
            <h1>Produccion</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Inicio</li>
                    <li class="breadcrumb-item active">Produccion</li>
                </ol>
            </nav>
            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#ModalProduccion"><i
                    class="bi bi-person-add"></i>
                Nuevo Registro</button>
            
            <!-- <button type="button" class="btn btn-primary " data-bs-toggle="modal"
                data-bs-target="#ModalSalidaPermiso"><i class="bi bi-person-fill-exclamation"></i>
                Agregar Salida Permiso</button> -->
        </div>

        <!--=======Final Texto de la tabla interna =======   -->
        <div class="row">
            <div class="col-8">
                <!--=======Inicio TABLA--------------------------------------------------- =======   -->
                <table id="InventarioProduccion" class="responsive nowrap display" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha</th>
                            <th>Produccion</th>
                            <th>N° Animal</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
                <!--======= Final TABLA--------------------------------------------------- =======   -->
            </div>
            <div class="col-4">
                <div class="row">
                    <div id="GraficoVentaLeche"> </div>
                </div>
                <div class="row">
                    <div id="GraficoVentaCarne"> </div>
                </div>
            </div>
        </div>
        <!-- Modal Nueva Produccion -------------------------------------- -->
        <div class="modal fade" id="ModalProduccion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Titulo">Agregar Produccion</h1>

                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <p style="font-size: 1.5em; color:red"><i class="bi bi-x-circle"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Cuerpo del formulario------ -->
                        <form id="FormularioEnviar">
                            <!-- Columna izquierda -->
                            <div class="row">

                                <!-- fin Columna izquierda -->
                                <div class="col-md-12 col-12">
                                    <div class="row g-3">
                                        <div class="col-md-12 col-12">
                                            <div class="form-floating">
                                                <select class="form-select" id="TipoProduccion" required>
                                                    <option selected disabled> Selecciona </option>
                                                    <option value="Leche">Produccion de Leche</option>
                                                    <option value="Carne">Produccion de Carne</option>
                                                </select>
                                                <label for="TipoProduccion">Tipo de Produccion:</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-5">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="Cantidad" name="Cantidad"
                                                    placeholder="Cantidad" required>
                                                <label for="Cantidad">Cantidad</label>
                                            </div>
                                        </div>


                                        <div class="col-md-7 col-7">

                                            <div class="input-group date input-fecha-trabajador">
                                                <input type="date" class="form-control input-lg" id="Fecha_Produccion"
                                                    name="Fecha_Entrada" required><span class="input-group-addon"><i
                                                        class="glyphicon glyphicon-th"></i></span>

                                            </div>
                                        </div>
                                        <div class="col-md-8 col-8">
                                            <div class="form-floating">
                                                <select class="form-select" id="SelectAnimalProduccion" required>
                                                    <option selected disabled>Selecciona</option>

                                                </select>
                                                <label for="Telefono">Seleccion Animal</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-4">
                                            <button type="button" class="btn btn-info btnMostrarQr"><i
                                                    class="bi bi-qr-code" style="font-size: 1.6em;"></i></button>
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
            <!--  fin Modal Nueva Produccion -------------------------------------- -->
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
    <script src="assets/js/Consultar_Datos_Modal.js"></script>
    <script src="assets/js/Consulta_Modal_Editar.js"></script>

    <script>
    $(document).ready(function() {
        $('#InventarioProduccion').DataTable({
            ajax: {
                url: 'BackEnd/Consulta_Produccion.php',
                dataSrc: '',
            },
            // Aqui definimos caracteristicas de la tabla y 
            // evitamos que la columna 0 y la 10 sean buscables y no se puedan ordenar
            columns: [{
                    data: 'ID_Produccion'
                },
                {
                    data: 'Fecha'
                },
                {
                    data: 'Produccion'
                },
                {
                    data: 'Animal'
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
    // Rellenar datatables con datos mediante ajax---------------
    $('#FormularioEnviar').submit(function(e) {
        e.preventDefault();

        const Datos = {
            TipoProduccion: $('#TipoProduccion').val(),
            Cantidad: $("#Cantidad").val(),
            Fecha_Produccion: $("#Fecha_Produccion").val(),
            SelectAnimalProduccion: $("#SelectAnimalProduccion").val(),

        };

        $.post('./BackEnd/Agregar_Produccion.php', Datos, function(
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
                $("#ModalProduccion").modal('hide');
                $('#InventarioProduccion').DataTable().ajax.reload();

            } else {

            }

        });

        // Actualizar Graficos al agregar datos al formulario---------------------------------------
        $.getJSON('./BackEnd/Consulta_Graficos_Produccion_Leche.php', function(response) {
            chart.updateSeries([{
                name: 'Leche Lts',
                data: response
            }])
        });

        $.getJSON('./BackEnd/Consulta_Graficos_Produccion_Carne.php', function(response) {
            chart1.updateSeries([{
                name: 'Carne KG',
                data: response
            }])
        });

        

    });


    //  Boton Eliminar Produccion ------------------------------------------------

    $(document).on('click', '.btnEliminar', function() {
        var id_Produccion = this.id;
        console.log(id_Produccion);
        EliminarRegistroProduccion(id_Produccion);
    });

    // Fin Boton Eliminar Trabajador ------------------------------------------------



    // Fin Boton Editar Trabajador ------------------------------------------------
    </script>

    <script>
    // Grafico Venta Leche -------------------------------------------------------------------------
    $.getJSON('./BackEnd/Consulta_Graficos_Produccion_Leche.php', function(response) {
            chart.updateSeries([{
                name: 'Leche Lts',
                data: response
            }])
        });
    


        var options = {
            series: [{
                data: [222, 333, 444]
            }],
            chart: {
                type: 'bar',
                height: 250
            },
            colors: ['#38CFFF'],
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    horizontal: true,
                }
            },
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: [],
            },
            title: {
                text: 'Produccion Leche',
                align: 'center',
                floating: true
            },
        };

        var chart = new ApexCharts(document.querySelector("#GraficoVentaLeche"), options);
        chart.render();


    

    // --------------------------------------------------------------------------------------

    // Grafico Venta Carne -------------------------------------------------------------------------
           

        $.getJSON('./BackEnd/Consulta_Graficos_Produccion_Carne.php', function(response) {
            chart1.updateSeries([{
                name: 'Carne KG',
                data: response
            }])
        });

        var options = {
            series: [{
                data: [400, 430, 448, 470],
            }],
            chart: {
                type: 'bar',
                height: 250
            },
            colors: ['#FF8038'],
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    horizontal: true,
                }
            },
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: [],
            },
            title: {
                text: 'Produccion Carne',
                align: 'center',
                floating: true
            },
        };

        var chart1 = new ApexCharts(document.querySelector("#GraficoVentaCarne"), options);
        chart1.render();





    
    // --------------------------------------------------------------------------------------
    </script>


    <!-- Rellenar datatables con datos mediante ajax -->



</body>

</html>