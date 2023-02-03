window.addEventListener('load', function() {
    // $(".cargando").fadeOut("slow");
    // Retiene la carga de la funcion Quitar Carga por 0.5s mas para que la datatables termine de cargar
    setTimeout(Quitar_Carga, 500);
  })

  function Quitar_Carga(){
    document.getElementById("cargando").classList.toggle("cargando2")
  }

  function EliminarBotonTabla(){
    Swal.fire({
      title: 'Estas Seguro?',
      text: "Estas a punto de eliminar este registro!",
      icon: 'error',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, eliminar',
      cancelButtonText: 'Cancelar',
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Eliminado!',
          'El registro se elimino por completo.',
          'success'
        )
      }
    })
  }