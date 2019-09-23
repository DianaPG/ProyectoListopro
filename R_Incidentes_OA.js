//G_OTS_O();
//function G_OTS_O() {
// Radialize the colors
Highcharts.setOptions({
    colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    })
});
Highcharts.chart('container16', {
    colors: ['rgba(0,64,255,0.7)', 'rgba(169,234,253,0.7)', 'rgba(40,203,251,0.7)', 'rgba(78,151,254,0.7)', 'rgba(78,151,254,0.7)', 'rgba(11, 64, 140,0.7)',
      '#eeaaee', '#55BF3B', '#DF5353', '#7798BF', '#aaeeee'],
    chart: {
        backgroundColor: {
         linearGradient: { x1: 0, y1: 0, x2: 1, y2: 1 },
         stops: [
            //[0, '#000000'],
            [0, '#0d0d0d'],
            [1, '#000000']
         ]
      },
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
     title: {
        text: 'Reporte de Incidentes',
        style: {
         color: '#0080FF',
         textTransform: 'uppercase',
         fontSize: '18px'
      }
    },
     subtitle: {
        text: 'Incidentes mes de Octubre',
         style: {
         color: '#0080FF',
         textTransform: 'uppercase',
         fontSize: '13px'
      }
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                },
                connectorColor: 'white'
            }
        }
    },
    series: [{
        name: 'Brands',
        data: [
            { name: 'Promociones', y: 7956 },
            {
                name: 'OCC',
                y: 2388,
                sliced: true,
                selected: true
            },
            { name: 'C. facturas', y: 282 },
            { name: 'Recurrencias', y: 2460 },
            { name: 'Prod. y Desc.', y: 2336 },
            { name: 'Addons', y: 1156 },
            { name: 'Alta 800s', y: 22 }
        ]
    }]
});

//}setInterval(G_OTS_O,20000);