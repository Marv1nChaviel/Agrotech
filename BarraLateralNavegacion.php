<?php 
session_start();
//Se verifica si la seccion existe actualmente de ser verdadero se muestra la pantalla si no se palsa al else ultimo
//Esto se coloca en la barra de navegacion vertical ya que es un elemento que siempre se mostrara en todas las pantallas de la app

if(isset($_SESSION['Seccion'])){
$nombre_dueño = $_SESSION['Nombre_Usuario'];

?>
<div class="cargando" id="cargando"></div>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
    <a href="Principal.php" class="logo d-flex align-items-center">
        <img src="assets/img/icon.png" alt="">
        <span class="d-none d-lg-block">AgroTech</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->



<nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">



        <!-- <li class="nav-item dropdown">

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-bell"></i>
                <span class="badge bg-primary badge-number">8</span>
            </a>

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                <li class="dropdown-header">
                    You have 4 new notifications
                    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                    <i class="bi bi-exclamation-circle text-warning"></i>
                    <div>
                        <h4>Lorem Ipsum</h4>
                        <p>Quae dolorem earum veritatis oditseno</p>
                        <p>30 min. ago</p>
                    </div>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                    <i class="bi bi-x-circle text-danger"></i>
                    <div>
                        <h4>Atque rerum nesciunt</h4>
                        <p>Quae dolorem earum veritatis oditseno</p>
                        <p>1 hr. ago</p>
                    </div>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                    <i class="bi bi-check-circle text-success"></i>
                    <div>
                        <h4>Sit rerum fuga</h4>
                        <p>Quae dolorem earum veritatis oditseno</p>
                        <p>2 hrs. ago</p>
                    </div>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                    <i class="bi bi-info-circle text-primary"></i>
                    <div>
                        <h4>Dicta reprehenderit</h4>
                        <p>Quae dolorem earum veritatis oditseno</p>
                        <p>4 hrs. ago</p>
                    </div>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>
                <li class="dropdown-footer">
                    <a href="#">Show all notifications</a>
                </li>

            </ul>

        </li> -->



        <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0"  data-bs-toggle="dropdown">

                <span class="dropdown-toggle ps-2"><?php echo $nombre_dueño; ?></span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                    <h6>¿Que Necesitas?</h6>

                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="./Configuraciones.php">
                        <i class="bi bi-person"></i>
                        <span>Configuraciones</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class="bi bi-gear"></i>
                        <span>Atencion al cliente</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="./BackEnd/Cerrar_Seccion.php">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Cerrar Cuenta</span>
                    </a>
                </li>

            </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

    </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->
<!-- ======= Barra Lateral de Navegacion ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="./Principal.php">
      <i class="bi bi-grid"></i>
      <span>Tablero Administrativo</span>
    </a>
  </li>

  <li class="nav-heading">Paginas</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="./InventarioRebaño.php">
      <i class="fa-solid fa-cow"></i>
      <span>Inventario Rebaño</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="./Trabajadores.php">
      <i class="fa-solid fa-child-reaching"></i>
      <span>Trabajadores</span>
    </a>
  </li><!-- End F.A.Q Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="./Maquinaria.php">
      <i class="fa-solid fa-gears"></i>
      <span>Maquinaria</span>
    </a>
  </li><!-- End Contact Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="./Inventario-General.php">
      <i class="fa-solid fa-list-check"></i>
      <span>Inventario General</span>
    </a>
  </li><!-- End Register Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="./Instalaciones.php">
      <i class="fa-solid fa-industry"></i>
      <span>Instalaciones</span>
    </a>
  </li><!-- End Login Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="./Campo-Potrero.php">
      <i class="fa-solid fa-tree"></i>
      <span>Campo/Potrero</span>
    </a>
  </li><!-- End Error 404 Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="./Produccion.php">
      <i class="fa-solid fa-drumstick-bite"></i>
      <span>Produccion</span>
    </a>
  </li><!-- End Blank Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="./Ingresos-Gastos.php">
      <i class="fa-solid fa-dollar-sign"></i>
      <span>Ingresos y Gastos</span>
    </a>
  </li><!-- End Blank Page Nav -->

</ul>

</aside><!--=======Final Barra Lateral de Navegacion =======   -->

<?php 
}else{
    //si la seccion no existe se manda a otra localizacion en este caso login de nuevo 
    header('Location: ../Login.php');
   exit;
} 

?>