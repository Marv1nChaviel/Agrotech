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
         
        </tr>
      </thead>
      <tbody>
        
      </tbody>
      <tfoot>
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
          
        </tr>
      </tfoot>
    </table>

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
  
 <!-- Configuracion basica datatables  -->
  <script>
    $(document).ready(function () {
    $('#Inventario_Rebaño').DataTable({
      ajax:{
          url:'BackEnd/Consulta_Inventario_Rebaño.php',
          dataSrc:''
        },
        columns:[
          {data:'ID_animal'},
          {data:'Nro_animal'},
          {data:'Color'},
          {data:'Partos'},
          {data:'Peso'},
          {data:'ID_raza'},
          {data:'Sexo'},
          {data:'ID_clasificacion	'},
          {data:'Lote_ID_lote'},
          {data:'Tipo_rebaño_ID_tipo_rebaño'}
        ],

      language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json'
        },
        lengthMenu: [
        [ 10, 25, 50, 100, 200, -1 ],
        [ '10 Filas', '25 Filas', '50 Filas','100 Filas','200 Filas', 'Todas' ]
    ]
    
    });
    
});
  </script>

  <!-- Rellenar datatables con datos mediante ajax -->
 

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>