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
                <div class="row"><div id="GraficoVentaLeche"> </div></div>
                <div class="row"><div id="GraficoVentaCarne"> </div></div>
            </div>
        </div>
        <!-- Modal Nueva Produccion -------------------------------------- -->
        <div class="modal fade" id="ModalProduccion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
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
                            <div class="row">
                                
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
    <script src="assets/js/Consulta_Modal_Editar.js"></script>
    <script src="assets/js/Graficos-Produccion.js"></script>

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



    //  Boton Eliminar Produccion ------------------------------------------------

    $(document).on('click', '.btnEliminar', function() {
        var id_trabajador = this.id;
        console.log(id_trabajador);
        EliminarRegistroTablaTrabajadores(id_trabajador);
    });

    // Fin Boton Eliminar Trabajador ------------------------------------------------



    // Fin Boton Editar Trabajador ------------------------------------------------
    </script>


    <!-- Rellenar datatables con datos mediante ajax -->



</body>

</html>