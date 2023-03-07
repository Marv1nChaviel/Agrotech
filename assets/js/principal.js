window.addEventListener('load', function() {
    // $(".cargando").fadeOut("slow");
    // Retiene la carga de la funcion Quitar Carga por 0.5s mas para que la datatables termine de cargar
    setTimeout(Quitar_Carga, 500);
  })

  function Quitar_Carga(){
    document.getElementById("cargando").classList.toggle("cargando2")
  }

  // Boton eliminar trabajadores -------------------------------------
  function EliminarRegistroTablaTrabajadores(Cedula){
    Swal.fire({
      title: 'Estas Seguro?',
      text: "Estas a punto de eliminar este Trabajador?!",
      icon: 'error',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, eliminar',
      cancelButtonText: 'Cancelar',
    }).then((result) => {

      if (result.isConfirmed) {

        const Datos = {
        Cedula: Cedula
      };
      $.post('../BackEnd/EliminarTrabajador.php', Datos, function(respuesta) { // metodo post del query igualmente funcional que el anterior
          console.log(respuesta);
          if (respuesta == "ejecutado") {
            Swal.fire(
              'Eliminado!',
              'El Trabajador fue eliminado de la Base de Datos por completo.',
              'success'
            )
          }else{
              Swal.fire(
                  'ERROR!',
                  'El registro no se elimino.',
                  'error'
              )
          }



      });

        
      }
    })
  }

  