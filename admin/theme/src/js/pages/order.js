

$(function () {

  'use strict';
	
	
	  var options = {
          series: [70],
          chart: {
          height: 200,
          type: 'radialBar',
        },
        plotOptions: {
          radialBar: {
            hollow: {
              size: '70%',
            }
          },
        },
		 colors: ['#ee3158'],
        labels: ['Pizza'],
        };

        var chart = new ApexCharts(document.querySelector("#chart1"), options);
        chart.render();
	
	
	  var options = {
          series: [78],
          chart: {
          height: 200,
          type: 'radialBar',
        },
        plotOptions: {
          radialBar: {
            hollow: {
              size: '70%',
            }
          },
        },
		 colors: ['#7047ee'],
        labels: ['Noodels'],
        };

        var chart = new ApexCharts(document.querySelector("#chart2"), options);
        chart.render();
	
	
	  var options = {
          series: [38],
          chart: {
          height: 200,
          type: 'radialBar',
        },
        plotOptions: {
          radialBar: {
            hollow: {
              size: '70%',
            }
          },
        },
		 colors: ['#05825f'],
        labels: ['Spicy Salad'],
        };

        var chart = new ApexCharts(document.querySelector("#chart3"), options);
        chart.render();
	
	
	  var options = {
          series: [90],
          chart: {
          height: 200,
          type: 'radialBar',
        },
        plotOptions: {
          radialBar: {
            hollow: {
              size: '70%',
            }
          },
        },
		 colors: ['#ffa800'],
        labels: ['French Fries'],
        };

        var chart = new ApexCharts(document.querySelector("#chart4"), options);
        chart.render();
	
}); // End of use strict
