// Consulta datos de select de modal Registro de Produccion ----------------------------------------

$(document).ready(function () {
    /* --variables para llamar a los select por el id */
    let $Fecha = document.getElementById('SelectFechaRegistroProduccion')
    let $Animal = document.getElementById('SelectAnimalRegistroProduccion')
    let $Producion = document.getElementById('SelectProduccionRegistroProduccion')

    function cargarFechas() {
        $.ajax({
            url: 'BackEnd/ConsultaSelectRegistroProduccion/Consulta_Select_Fecha.php',
            type: 'GET',
            success: function(response) {
                const Fechas = JSON.parse(response);
                let template = ''
    
                Fechas.forEach(Fecha => {
                    template += `<option value="${Fecha.FechaJson}">${Fecha.FechaJson}</option>`;
                })

                $Fecha.innerHTML = template;
            }
        })
    }
    cargarFechas()

    function CargarAnimales(Datos) {
        $.ajax({
            url: 'BackEnd/ConsultaSelectRegistroProduccion/Consulta_Select_Fecha.php',
            type: 'POST',
            data: Datos,
            success: function(response) {
                const respuestas = JSON.parse(response);
                let template = ''
    
                respuestas.forEach(respuesta => {
                    template += `<option value="${respuesta.Animal}">${respuesta.Animal}</option>`;
                })

                $Animal.innerHTML = template;
            }
        })
    }
    $Fecha.addEventListener('change', () => {
        const FechaSeleccionada = $Fecha.value

        const Datos = {
            'Fecha': FechaSeleccionada
        }
    
        CargarAnimales(Datos)

        $Producion.innerHTML = ''
        
    })

    function CargarProduccion(Datos) {
        $.ajax({
            url: 'BackEnd/ConsultaSelectRegistroProduccion/Consulta_Produccion.php',
            type: 'POST',
            data: Datos,
            success: function(response) {
                const respuestas = JSON.parse(response);
                let template = ''
    
                respuestas.forEach(respuesta => {
                    template += `<option  value="${respuesta.Produccion}">${respuesta.Produccion}</option>`;
                })

                $Producion.innerHTML = template;
            }
        })
    }
    $Animal.addEventListener('change', () => {
        const Animal = $Animal.value
        const Fecha = $Fecha.value
        const Datos = {
            'Animal': Animal,
            'Fecha': Fecha,
        }
        
        CargarProduccion(Datos)
    })
})
