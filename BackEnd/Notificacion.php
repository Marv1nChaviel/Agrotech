<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroTech</title>

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/cargando.css">


    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Aqui se manda una notificacion al entrar en la pagina que no esta disponible en estos momento -->
    <script>
    window.addEventListener('load', function() {

        Swal.fire({
            title: 'No disponible',
            text: "Esta pagina esta actualmente en mantenimiento",
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Regresar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.history.back();
            }
        })
    })
    </script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.5.1.js"></script>
    <script src="../assets/js/sweetalert2.all.min.js"></script>


</body>

</html>