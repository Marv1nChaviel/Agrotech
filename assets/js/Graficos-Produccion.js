// Grafico Venta Leche -------------------------------------------------------------------------
    
var options = {
    series: [{
    data: [400, 430, 448, 470, 540, 580, 690]
  }],
    chart: {
    type: 'bar',
    height: 250
  },
  colors: ['#38CFFF'],
  plotOptions: {
    bar: {
      borderRadius: 4,
      horizontal: true,
    }
  },
  dataLabels: {
    enabled: false
  },
  xaxis: {
    categories: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio'],
  },
  title: {
    text: 'Produccion Leche',
    align: 'center',
    floating: true
},
  };

var chart = new ApexCharts(document.querySelector("#GraficoVentaLeche"), options);
chart.render();

// --------------------------------------------------------------------------------------

// Grafico Venta Carne -------------------------------------------------------------------------
    
var options = {
    series: [{
    data: [400, 430, 448, 470, 540, 580, 690]
  }],
    chart: {
    type: 'bar',
    height: 250
  },
  colors: ['#FF8038'],
  plotOptions: {
    bar: {
      borderRadius: 4,
      horizontal: true,
    }
  },
  dataLabels: {
    enabled: false
  },
  xaxis: {
    categories: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio'],
  },
  title: {
    text: 'Produccion Carne',
    align: 'center',
    floating: true
},
  };

var chart = new ApexCharts(document.querySelector("#GraficoVentaCarne"), options);
chart.render();

// --------------------------------------------------------------------------------------