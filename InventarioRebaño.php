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
            <tfoot>
                
            </tfoot>
        </table>
        <!--======= Final TABLA--------------------------------------------------- =======   -->

        <!-- Modal Nuevo -------------------------------------- -->
        <div class="modal fade" id="ModalNuevo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Titulo">Nuevo Registro</h1>

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
                                    <input type="text" class="form-control" id="TipoRebaño" placeholder="Rebaño">
                                    <label for="Rebaño">Tipo de Rebaño</label>
                                </div>
                            </div>

                            <div class="col-md-3 col-5">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="Color" placeholder="Color">
                                    <label for="Color">Color</label>
                                </div>
                            </div>

                            <div class="col-md-4 col-5">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="Lote" placeholder="Lote">
                                    <label for="Lote">Lote</label>
                                </div>

                            </div>
                            <div class="col-md-2 col-2">
                                <button type="button" class="btn btn-info" style="font-size: 1.6em;"><i
                                        class="bi bi-search"></i></button>
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
                                        <option value="0" disabled selected hidden>Raza</option>

                                    </select>
                                    <label for="Raza">Raza</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" aria-label="Sexo">
                                        <option selected>Sexo</option>
                                        <option value="1">Hembra</option>
                                        <option value="2">Macho</option>
                                    </select>
                                    <label for="Sexo">Sexo</label>
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
        <!--  fin Modal Nuevo -------------------------------------- -->
        <!-- Modal Editar -------------------------------------- -->
        <div class="modal fade" id="ModalEditar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
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
                                    <input type="text" class="form-control" id="TipoRebaño" placeholder="Rebaño">
                                    <label for="Rebaño">Tipo de Rebaño</label>
                                </div>
                            </div>

                            <div class="col-md-3 col-5">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="Color" placeholder="Color">
                                    <label for="Color">Color</label>
                                </div>
                            </div>

                            <div class="col-md-4 col-5">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="Lote" placeholder="Lote">
                                    <label for="Lote">Lote</label>
                                </div>

                            </div>
                            <div class="col-md-2 col-2">
                                <button type="button" class="btn btn-info" style="font-size: 1.6em;"><i
                                        class="bi bi-search"></i></button>
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
                                        <option value="1">Hembra</option>
                                        <option value="2">Macho</option>
                                    </select>
                                    <label for="Sexo">Sexo</label>
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

    <!-- Imagen de carga de la pagina -->

    <!-- Configuracion basica datatables  -->
    <script>
    $(document).ready(function() {
        $('#Inventario_Rebaño').DataTable({
            ajax: {
                url: 'BackEnd/Consulta_Inventario_Rebaño.php',
                dataSrc: '',
            },
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

    });
    </script>

    <!-- Rellenar datatables con datos mediante ajax -->
    <!-- Obtener Raza -->
    <script>
    $(document).ready(function() {
                $.ajax({
                        url: './BackEnd/Consultar_Raza.php',
                        type: 'GET',
                        success: function(respuesta) {
                            let json = JSON.parse(respuesta);
                            var len = json.length;

                            // $("#selectraza").empty();
                            for (var i = 0; i < len; i++) {
                                var raza = json[i]['Nombre_Raza'];
                                
                                $("#selectraza").append("<option value='0'>"+raza+"</option>");
                            }
                        }
                            
                        })
                });
    </script>
    <!-- Obtener Raza -->
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/principal.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
</body>

</html>