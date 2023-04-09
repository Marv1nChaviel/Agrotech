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
                    <a><button class="btn-ingreso-1" data-bs-toggle="modal" data-bs-target="#ModalNuevoIngreso"><i
                                class="bi bi-plus-circle"></i> Ingresos</button></a>
                    <!---------------------------------->
                    <a><button class="btn-ingreso-2"><i class="bi bi-question-circle"></i></button></a>

                </div>


                <!-- Grafica de Ingresos -->


                <div>
                    <div class="graficaing" id="Ingresos"></div>

                    <script>

                    </script>
                </div>

                <!-- Tabla de ingresos  -->

                <div class="table-ingresos">
                    <table id="TablaIngresos" class="display">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Ingreso</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>


            </section>



            <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            <!-- section  Egresos -->

            <section class="egresos">

                <!-- btn- Egresos-->

                <div class="btn-Egreso">

                    <a><button class="btn-ingreso-3" data-bs-toggle="modal" data-bs-target="#ModalNuevoEgreso"><i
                                class="bi bi-dash-circle"></i> Egresos</button></a>
                    <!---------------------------------->
                    <a><button class="btn-ingreso-2"><i class="bi bi-question-circle"></i></button></a>

                </div>

                <!-- Grafica de Egresos -->

                <div>
                    <div class="graficaEg" id="Egresos"></div>

                    <script>

                    </script>
                </div>

                <!-- Tabla de Egresos -->

                <div class="table-Egresos">
                    <table id="TablaEgresos" class="display">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Egreso</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                </div>
            </section>

        </div>
        <!-- Modal Nuevo Ingreso -------------------------------------- -->
        <div class="modal fade" id="ModalNuevoIngreso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Titulo">Agregar Ingreso</h1>

                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <p style="font-size: 1.5em; color:red"><i class="bi bi-x-circle"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Cuerpo del formulario------ -->
                        <form id="FormularioEnviar">
                            <div class="row">
                                <div class="col-12">
                                <center><label for=""><b>Tipo de Ingreso:</b></label></center>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="operacion"
                                            id="flexRadioDefault1" value="Leche">
                                        <label class="form-check-label" for="flexRadioDefault1">Venta de Leche</label>
                                    </div></div>
                                <div class="col-4">
                                <div class="form-check">
                                        <input class="form-check-input" type="radio" name="operacion"
                                            id="flexRadioDefault2" value="Carne">
                                        <label class="form-check-label" for="flexRadioDefault2">Venta de Carne</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                <div class="form-check">
                                        <input class="form-check-input" type="radio" name="operacion"
                                            id="flexRadioDefault2" value="Animal" readonly>
                                        <label class="form-check-label" for="flexRadioDefault2">Venta del Animal</label>
                                    </div>
                                </div>

                                
                                    
                                    
                                </div>
                            </div>
                                    
                                   
                            
                            <div class="row">
                            <div class="col-12">
                                    <center> <label for=""><b>Datos del Animal:</b></label></center>
                                    <div class="row">
                                        <div class="col-6">
                                                <div class="input-group mb-3">
                                                <div class="form-floating">
                                                    <input type="number" class="form-control" id="Numero_Animal"
                                                        placeholder="N° Animal" required>
                                                    <label for="Numero_Animal">N° Animal</label>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group date">
                                                <input type="date" class="form-control" placeholder="Fecha"
                                                    id="Fecha_Ingreso" name="Fecha_Ingreso" required>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            
                                        <div class="form-floating">
                                                <input type="number" class="form-control" id="Produccion" name="Produccion"
                                                    placeholder="Produccion" required readonly>
                                                <label for="Produccion">Produccion</label>
                                            </div>

                                        </div>
                                        <div class="col-6">
                                        <div class="input-group mb-3">
                                                <div class="form-floating">
                                                    <input type="number" class="form-control" id="Ganancias"
                                                        placeholder="Ganancias">
                                                    <label for="Ganancias">Ganancias</label>
                                                </div>
                                                <span class="input-group-text"><i
                                                        class="bi bi-currency-dollar"></i></span>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                        <div class="form-floating">
                                                <input type="text" class="form-control" id="Descripcion" name="Descripcion"
                                                    placeholder="Descripcion" required>
                                                <label for="Descripcion">Descripcion</label>
                                            </div>

                                        </div>
                                        <div class="container">
                                            <div class="col-6">
                                                <center><a><button class="btn btn-info"
                                                            data-bs-target="#ModalBuscarProduccion"
                                                            data-bs-toggle="modal"><i class="bi bi-search"></i>
                                                            Buscar</button></a> </center>

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
        <!--  fin Modal Nuevo Ingreso -------------------------------------- -->
        <!-- Modal Buscar Produccion -------------------------------------- -->
        <div class="modal fade" id="ModalBuscarProduccion" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Titulo">Buscar por Produccion</h1>

                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <p style="font-size: 1.5em; color:red"><i class="bi bi-x-circle"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Cuerpo del formulario------ -->

                        <div class="container-fluid">
                            <label for=""><b>Selecciona el registro de Produccion:</b></label>
                            <div class="row">
                                <div class="col-4">
                                    <label for="">Fecha:</label>
                                    <select class="form-select" size="7" id="SelectFechaRegistroProduccion"
                                        aria-label="size 3 select example" require>
                                        <!-- <option selected>Selecciona el registro de Produccion</option> -->
                                        <!-- <option value="1">29/10/2022</option> -->
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="">N° Animal:</label>
                                    <select class="form-select" size="7" id="SelectAnimalRegistroProduccion"
                                        aria-label="size 3 select example" require>
                                        <!-- <option selected>Selecciona el registro de Produccion</option> -->
                                        <!-- <option value="1">25215235</option> -->
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="">Produccion:</label>
                                    <select class="form-select" size="7" id="SelectProduccionRegistroProduccion"
                                        aria-label="size 3 select example" require>
                                        <!-- <option selected>Selecciona el registro de Produccion</option> -->
                                        <!-- <option value="1">50 litros</option> -->
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button class="btn btn-success" id="btnModalCambio" data-bs-target="#ModalNuevoIngreso"
                            data-bs-toggle="modal"><i class="bi bi-check2-circle"></i>
                            Seleccionar</button>
                    </div>

                    <!-- FIN Cuerpo del formulario -->
                </div>
            </div>
        </div>
        <!--  fin Modal Buscar Produccion-------------------------------------- -->
        <!-- Modal agregar Gastooo -------------------------------------- ------->
        <div class="modal fade" id="ModalNuevoEgreso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Titulo">Agregar Egreso</h1>

                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <p style="font-size: 1.5em; color:red"><i class="bi bi-x-circle"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Cuerpo del formulario------ -->
                        <form id="FormularioEnviarGastos">
                            <div class="row">
                                <div class="col-4">
                                    <label for=""><b>Tipo de Egreso:</b></label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="operacion"
                                            id="flexRadioDefault1" value="Leche">
                                        <label class="form-check-label" for="flexRadioDefault1">Sueldo</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="operacion"
                                            id="flexRadioDefault2" value="Carne">
                                        <label class="form-check-label" for="flexRadioDefault2">Salud Animal</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="operacion"
                                            id="flexRadioDefault2" value="Animal" readonly>
                                        <label class="form-check-label" for="flexRadioDefault2">Mantenimiento</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="operacion"
                                            id="flexRadioDefault2" value="Animal" readonly>
                                        <label class="form-check-label" for="flexRadioDefault2">Otros</label>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <center> <label for=""><b>Datos del Egreso:</b></label></center>
                                    <div class="row">

                                        <div class="col-6">
                                            <div class="input-group date">
                                                <input type="date" class="form-control" placeholder="Fecha"
                                                    id="Fecha_Gasto" name="Fecha_Gasto" required>
                                            </div>
                                        </div>


                                        <div class="col-6">
                                            <input type="number" class="form-control" id="Gasto" name="Gasto"
                                                placeholder="Gasto" required>

                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="Egresos_Descripcion" name="Egresos_Descripcion"
                                                placeholder="Descripcion" required>

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
        <!--  fin Modal agregar Gastooo -------------------------------------- -->
    </main><!-- End #main -->

    <!-- Pie de pagina---- -->
    <?php 
    include('./Pie_De_Pagina.php');
    ?>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-3.5.1.js"></script>

    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.responsive.min.js"></script>


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/principal.js"></script>
    <script src="assets/js/Select_Produccion.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#TablaIngresos').DataTable({
            scrollY: '200px',
            scrollCollapse: true,
            searching: false,
            paging: false,
            info: false,

            ajax: {
                url: './BackEnd/Consulta_Ingresos.php',
                dataSrc: '',
                type: "POST",
                data: {
                    Operacion: "Ingresos"
                }
            },
            // Aqui definimos caracteristicas de la tabla y 
            columns: [{
                    data: 'Fecha'
                },
                {
                    data: 'Ingreso'
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
    $(document).ready(function() {
        $('#TablaEgresos').DataTable({
            scrollY: '200px',
            scrollCollapse: true,
            searching: false,
            paging: false,
            info: false,

            ajax: {
                url: './BackEnd/Consulta_Egresos.php',
                dataSrc: '',
                type: "POST",
                data: {
                    Operacion: "Egresos"
                }
            },
            // Aqui definimos caracteristicas de la tabla y 

            columns: [{
                    data: 'Fecha'
                },
                {
                    data: 'Egresos'
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

        // Click en boton del modal buscar registro -------------

        $('#btnModalCambio').click(function() {

            var Fecha = $('#SelectFechaRegistroProduccion').val();

            var Animal = $('#SelectAnimalRegistroProduccion').val();

            var Produccion = $('#SelectProduccionRegistroProduccion').val();

            // console.log(Fecha,Animal,Produccion);

            $('#Numero_Animal').val(Animal);
            $('#Produccion').val(Produccion);


        });
        //  Click en radio del modal ingresos------------------------------
        $('#FormularioEnviar').submit(function(e) {
            e.preventDefault();
            var RadioOpcion = document.querySelector('input[name="operacion"]:checked').value;
            var AnimalEnviar = $('#Numero_Animal').val();
            var FechaEnviar = $('#Fecha_Ingreso').val();
            var ProduccionEnviar = $('#Produccion').val();
            var Id_Produccion = $('#Produccion').val();
            var Ganancias = $('#Ganancias').val();
            var Descripcion = $('#Descripcion').val();
            console.log(Id_Produccion);

            const Datos = {
                RadioOpcion: RadioOpcion,
                Animal: AnimalEnviar,
                Fecha: FechaEnviar,
                Produccion: ProduccionEnviar,
                Ganancias: Ganancias,
                Descripcion: Descripcion
            };
            $.post('./BackEnd/Agregar_Ingresos.php', Datos, function(
                respuesta) { // metodo post del query igualmente funcional que el anterior
            if (respuesta = "Ejecutado") {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Registro Guardado',
                    showConfirmButton: false,
                    timer: 1500
                })
                $('#TablaIngresos').DataTable().ajax.reload();
                $('#ModalNuevoIngreso').modal('hide');
                //DataTable.ajax.reload();

            } else {

            }

            });
            
        });
        //  Boton enviar gastos a la db--------------
        $('#FormularioEnviarGastos').submit(function(e) {
            e.preventDefault();
            var Fecha = $('#Fecha_Gasto').val();
            var Gasto = $('#Gasto').val();
            var Descripcion = $('#Egresos_Descripcion').val();


            const Datos = {
                Fecha: Fecha,
                Gasto: Gasto,
                Descripcion: Descripcion
            };

            console.log(Datos);
            $.post('./BackEnd/Agregar_Egresos.php', Datos, function(
                respuesta) { // metodo post del query igualmente funcional que el anterior

                if (respuesta = "Ejecutado") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Registro Guardado',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $('#TablaEgresos').DataTable().ajax.reload();
                    $('#ModalNuevoEgreso').modal('hide');
                    

                    //DataTable.ajax.reload();

                } else {

                }

            });
           
        });

    });
    </script>
    <script>
    // Grafico de Ingreso ------------------------------------
    $.getJSON('./BackEnd/Consulta_Graficos_Ingresos.php', function(response) {
        chart2.updateSeries([{
            name: 'Ingresos',
            data: response
        }])
    });


    var options = {
        series: [{
            name: 'series1',
            data: []
        }],
        chart: {
            height: 200,
            type: 'area'
        },
        colors: ['#008f39'],

        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 2
        },
        xaxis: {
            categories: []
        },

    };

    var chart2 = new ApexCharts(document.querySelector("#Ingresos"), options);
    chart2.render();



    // Grafico Egresooo--------------------------------------------------------------

    $.getJSON('./BackEnd/Consulta_Graficos_Egresos.php', function(response) {
        chart3.updateSeries([{
            name: 'Gastos',
            data: response
        }])
    });


    var options = {
        series: [{
            name: 'series1',
            data: []
        }],
        chart: {
            height: 205,
            type: 'area'
        },
        colors: ['#FF0000'],

        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 2
        },
        xaxis: {
            categories: []
        },

    };

    var chart3 = new ApexCharts(document.querySelector("#Egresos"), options);
    chart3.render();
    </script>
</body>

</html>