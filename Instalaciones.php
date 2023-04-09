<!DOCTYPE html>
<html lang="es">

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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" onclick="ModoEditorMensaje();" id="AgregarSwitch">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Modo Editor</label>
                </div>
                <button type="button" class="btn btn-warning">Eliminar Zona</button>
                <button type="button" class="btn btn-primary" onclick="ObtenerUbicacion();">Obtener ubicacion</button>
            </div>

        </div>
        <hr>
        <!-- Mapa -->
        <div id="map" style="width: 150vh; height: 60vh;"></div>
        <!-- End Mapa -->

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
    <script src="assets/js/sweetalert2.all.min.js"></script>


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/principal.js"></script>
    <!-- Mapa para instalaciones -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <link rel="stylesheet" href="./assets/css/Mapas/tamaño_mapa.css">

    <script>
    // Buscar y cargar datos de las ubicaciones si existen
    $(document).ready(function() {

        $.ajax({
            url: "./BackEnd/LeerMysqlMapa.php",
            type: "GET",
            success: function(respuesta) {

                let Ubicacion = JSON.parse(
                    respuesta); //Almacena el resultado del json en el let json
                Ubicacion.forEach(
                    Ubi => { //Se asignan los valores obtendios en json a su respectivo input
                        var coordenadas = Ubi.Coordenada;

                    });

            },
        });
    });

    // Array donde se almacenara la informacion de los puntos manejados en el mapa
    const Datos = [];
    //    Mensaje del switch para activar y desactivar el modo edicion
    function ModoEditorMensaje() {
        const ModoEditar = document.getElementById('AgregarSwitch');
        if (ModoEditar.checked) {
            Swal.fire(
                'Modo Edicion Activado',
                'Ya puede marcar en el mapa!',
                'success'
            )
        } else {
            // ModoEditar.checked = !confirm('¿Esta seguro que no quiere guardar?');
            Swal.fire({
                title: '¿Desea guardar los cambios?',
                showDenyButton: true,
                confirmButtonText: 'Guardar',
                denyButtonText: 'Continuar',
                denyButtonColor: '#808080',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire('Guardado', '', 'success')
                    $.ajax({
                        type: "POST",
                        url: './BackEnd/CrearJsonDatos/CambiarFormatoJsonCoordenada.php',
                        data: {
                            'Datos': JSON.stringify(Datos)
                        }, //capturo array     
                        success: function(data) {
                            console.log(data);
                            // GuardarDatos(Datos);

                        }
                    });

                    



                } else if (result.isDenied) {
                    ModoEditar.checked = true;
                }
            })
        }
    }

    async function GuardarDatos(DatosGuardar) {


        var FormatoJson = {
            "type": "FeatureCollection",
            "features": [{
                "type": "Feature",
                "properties": {},
                "geometry": {
                    "coordinates": [
                        [
                            DatosGuardar
                        ]
                    ],
                    "type": "Polygon"
                }
            }]
        };

        const {
            value: titulo
        } = await Swal.fire({
            title: 'Registro',
            input: 'text',
            inputLabel: 'Nombre del area creada',
            inputPlaceholder: 'Ejemplo : Campo 1'
        })

        if (titulo) {
            console.log(titulo);
            Swal.fire(`Nombre ${titulo} Agregado`)
            $.ajax({
                type: "POST",
                url: './BackEnd/CrearJsonDatos/GuardarJson.php',
                data: {
                    'GuardarDatos': JSON.stringify(FormatoJson),
                    'Titulo': titulo
                }, //capturo array     
                success: function(data) {
                    console.log(data);

                }
            });
        }


    }


    var map = L.map('map').setView([10.688453, -71.680253], 17); //rango este ultimo 13 a 17, ubicacion
    // var marker = L.marker([10.688453, -71.680253]).addTo(map); //colocar flecha de indicacion 
    // marker.bindPopup("<b>Tu ubicacion</b>").openPopup();
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // // Poligono de ubicacion
    // var polygon = L.polygon([
    //     [10.688250, -71.681130],
    //     [10.688866, -71.682316],
    //     [10.689349, -71.682082],
    //     [10.688884, -71.680823],
    // ]).addTo(map);
    // Fin poligono ubicacion

    function ObtenerUbicacion() {
        // Ubicacon mediante gps
        function onLocationFound(e) {
            const radius = e.accuracy / 30;

            const locationMarker = L.marker(e.latlng).addTo(map)
                .bindPopup(`Ubicacion Estimada`).openPopup();

            const locationCircle = L.circle(e.latlng, radius, {
                color: 'blue',
                fillColor: '#f03',
                fillOpacity: 0,
            }).addTo(map);
        }

        function onLocationError(e) {
            alert(e.message);
        }

        map.on('locationfound', onLocationFound);
        map.on('locationerror', onLocationError);

        map.locate({
            setView: true
        });
    }



    // Agrega notificacion con la ubicacion donde se le da click
    var popup = L.popup();
    var inicial = 0;

    function onMapClick(e) {
        const ModoEditar = document.getElementById('AgregarSwitch');

        if (ModoEditar.checked) {
            var marker = L.marker(e.latlng).addTo(map);
            marker.bindPopup("<b>Punto N° " + inicial + "</b>").openPopup();
            inicial += 1;
            Datos.push(e.latlng);




        } else {

            popup
                .setLatLng(e.latlng)
                .setContent("Boton chequeado " + e.latlng.toString())
                .openOn(map);

        }


    }

    map.on('click', onMapClick);


    // Enviar datos por ajax a guardar 
    </script>

    <!-- Mapa para instalaciones -->
</body>

</html>