G_OTS_O();
function G_OTS_O() {
Highcharts.chart('container8', {
    colors: ['rgba(0,64,255,0.7)', 'rgba(169,234,253,0.7)', 'rgba(40,203,251,0.7)', 'rgba(78,151,254,0.7)', 'rgba(78,151,254,0.7)', '#ff0066',
      '#eeaaee', '#55BF3B', '#DF5353', '#7798BF', '#aaeeee'],
    chart: {
         backgroundColor: {
         linearGradient: { x1: 0, y1: 0, x2: 1, y2: 1 },
         stops: [
            [0, '#000000'],
            [1, '#000000']
         ]
      },
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
    },
      title: {
        text: 'Reporte Tickets',
        style: {
         color: '#0080FF',
         textTransform: 'uppercase',
         fontSize: '18px'
      }
    },
     subtitle: {
        text: 'Tickets mes de Octubre',
         style: {
         color: '#0080FF',
         textTransform: 'uppercase',
         fontSize: '13px'
      }
    },
    plotOptions: {
        pie: {
            innerSize: 100,
            depth: 45
        }
    },
    series: [{
         dataLabels: {
            color: '#FFFFFF',
            fontSize: '15px'
           
         },
        name: 'Estatus',
        data: [
            ['Abierto - 5', 5],
            ['Cerrado - 1', 1]
        ]
    }]
});

}setInterval(G_OTS_O,20000);