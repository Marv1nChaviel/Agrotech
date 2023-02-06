
<!-- Aqui se manda una notificacion al entrar en la pagina que no esta disponible en estos momento -->
<script>window.addEventListener('load', function() {
  
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
  })</script>

<script src="../assets/js/sweetalert2.all.min.js"></script>

