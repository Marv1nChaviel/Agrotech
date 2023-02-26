<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">

    <title>AgroTech</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/icono_peque.ico" rel="icon">


    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/cargando.css">
    <!-- Mapa para instalaciones -->



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
            <h1>Instalaciones</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Inicio</li>
                    <li class="breadcrumb-item active">Instalaciones</li>
                </ol>
            </nav>
        </div>
        <!--=======Final Texto de la tabla interna =======   -->
        <!-- Mapa iniciador -->
        <div class="col-md-6 col-12">
            <div class="btn-group" role="group" aria-label="Second group">
                <button type="button" class="btn btn-success">Agregar Zona</button>
                <button type="button" class="btn btn-warning">Eliminar Zona</button>
                <button type="button" class="btn btn-primary">Obtener ubicacion</button>
            </div>
        </div>
        <hr>
        <!-- Mapa -->
        <div id="map"></div>
        <!-- End Mapa -->

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
    <!-- Mapa para instalaciones -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <link rel="stylesheet" href="./assets/css/Mapas/tamaño_mapa.css">
    <script>
        var map = L.map('map').setView([10.688453, -71.680253], 17); //rango este ultimo 13 a 17, ubicacion
        // var marker = L.marker([10.688453, -71.680253]).addTo(map); //colocar flecha de indicacion 
        // marker.bindPopup("<b>Tu ubicacion</b>").openPopup();
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
        map.pm.addControls({
            position: 'topleft',
            drawCircle: false,
        });
        navigator.geolocation.getCurrentPosition((data) => console.table(data), (err) => console.error(err))
    </script>
    <!-- Mapa para instalaciones -->
</body>

</html>