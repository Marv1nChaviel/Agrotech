window.addEventListener('load', function() {
    // $(".cargando").fadeOut("slow");
    // Retiene la carga de la funcion Quitar Carga por 0.5s mas para que la datatables termine de cargar
    setTimeout(Quitar_Carga, 500);
  })

  function Quitar_Carga(){
    document.getElementById("cargando").classList.toggle("cargando2")
  }

  // ############################################################################################
  // ###################Botones Eliminar Datos###################################################

  // Direccion a usar para llamar a eliminar registros
  const DirEliminarRegistro ="./BackEnd/Eliminar_Registro.php";

  // Boton eliminar trabajadores -------------------------------------
  function EliminarRegistroTablaTrabajadores(id_trabajador){
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
        id_trabajador: id_trabajador
      };
      $.post(DirEliminarRegistro, Datos, function(respuesta) { // metodo post del query igualmente funcional que el anterior
          console.log(respuesta);
          if (respuesta == "Ejecutado") {
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

  // Boton eliminar Inventario Registro -------------------------------------
  function EliminarRegistroInventarioRebaño(id_Animal){
    Swal.fire({
      title: 'Estas Seguro?',
      text: "Estas a punto de eliminar este animal del registro?!",
      icon: 'error',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, eliminar',
      cancelButtonText: 'Cancelar',
    }).then((result) => {

      if (result.isConfirmed) {

        const Datos = {
          id_animal: id_Animal
      };
      $.post(DirEliminarRegistro, Datos, function(respuesta) { // metodo post del query igualmente funcional que el anterior
          console.log(respuesta);
          if (respuesta == "Ejecutado") {
            Swal.fire(
              'Eliminado!',
              'El Animal fue eliminado de la Base de Datos por completo.',
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
    // Boton eliminar Maquinaria -------------------------------------
    function EliminarRegistroMaquinaria(id_Maquinaria){
      Swal.fire({
        title: 'Estas Seguro?',
        text: "Estas a punto de eliminar esta Maquinaria del registro?!",
        icon: 'error',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: 'Cancelar',
      }).then((result) => {
  
        if (result.isConfirmed) {
  
          const Datos = {
            id_Maquinaria: id_Maquinaria
        };
        $.post(DirEliminarRegistro, Datos, function(respuesta) { // metodo post del query igualmente funcional que el anterior
            console.log(respuesta);
            if (respuesta == "Ejecutado") {
              Swal.fire(
                'Eliminado!',
                'La Maquinaria fue eliminado de la Base de Datos por completo.',
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
    // Boton eliminar Inventario General -------------------------------------
    function EliminarRegistroInventarioGeneral(id_inventario){
      Swal.fire({
        title: 'Estas Seguro?',
        text: "Estas a punto de eliminar esta informacion del registro?!",
        icon: 'error',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: 'Cancelar',
      }).then((result) => {
  
        if (result.isConfirmed) {
  
          const Datos = {
            id_inventario: id_inventario
        };
        $.post(DirEliminarRegistro, Datos, function(respuesta) { // metodo post del query igualmente funcional que el anterior
            console.log(respuesta);
            if (respuesta == "Ejecutado") {
              Swal.fire(
                'Eliminado!',
                'Eliminado de la Base de Datos por completo.',
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
    
  // ############################################################################################
  // ################### Fin Botones Eliminar Datos###################################################