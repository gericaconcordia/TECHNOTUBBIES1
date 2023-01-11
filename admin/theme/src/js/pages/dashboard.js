//[Dashboard Javascript]

//Project:	CRMi - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
	  var options = {
          series: [{
          name: 'Total Orders',
          data: [44, 55, 41, 67, 22, 43, 44, 55, 41]
        }, {
          name: 'Cancle Orders',
          data: [13, 23, 20, 8, 13, 27, 8, 13, 27]
        }],
          chart: {
          type: 'bar',
          height: 148,
          stacked: true,
          toolbar: {
            show: false
          },
          zoom: {
            enabled: false
          }
        },
		dataLabels: {
  			enabled: false,
		},
		colors: ['#7047ee', '#ee3158'],
        plotOptions: {
          bar: {
            horizontal: false,
            borderRadius: 3,
			  columnWidth: '20%',
          },
        },
		grid: {
    		show: false,
		},		  
        xaxis: {
          type: 'datetime',
          categories: ['09/01/2021 GMT', '09/02/2021 GMT', '09/03/2021 GMT', '09/04/2021 GMT',
            '09/05/2021 GMT', '09/06/2021 GMT', '09/07/2021 GMT', '09/08/2021 GMT', '09/09/2021 GMT'
          ],
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
        },
        fill: {
          opacity: 1
        }
        };

        var chart = new ApexCharts(document.querySelector("#orders"), options);
        chart.render();
	
	
	
		var options = {
          series: [{
            name: "Orders Delivered",
            data: [40, 50, 38, 45, 58, 42, 32, 60, 80, 45, 30, 56,]
        }],
          chart: {
          height: 180,
          type: 'line',
          toolbar: {
            show: false
          },
          zoom: {
            enabled: false
          },
			dropShadow: {
			enabled: true,
			enabledOnSeries: undefined,
			top: 10,
			left: 0,
			blur: 5,
			color: '#7047ee',
			opacity: 0.15
			},
        },
        dataLabels: {
          enabled: false
        },
		colors: ['#7047ee'],
        stroke: {
          curve: 'smooth',
			width: 4,
        },
        grid: {
			strokeDashArray: 10,
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			axisBorder: {
				show: false,
			},
			axisTicks: {
				show: false,
			},
        },
		tooltip: {
          y: {
            formatter: function (val) {
              return val + "k"
            }
          }
        }
			
        };

        var chart = new ApexCharts(document.querySelector("#orders-delivered"), options);
        chart.render();
	
		
		var options = {
          series: [{
          name: 'This Year',
          data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
        }, {
          name: 'Last Year',
          data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
        }],
          chart: {
          type: 'bar',
          height: 220,
          toolbar: {
            show: false
          },
        },
		responsive: [{
			breakpoint: 1500,
			options: {
				 chart: {
					height: '325'
				},
			},
		},{
			breakpoint: 1365,
			options: {
				 chart: {
					height: '220'
				},
			},
		}],
        plotOptions: {
          bar: {
            horizontal: false,
            borderRadius: 3,
			columnWidth: '45%',
          },
        },
        dataLabels: {
          enabled: false
        },
		colors: ['#fc7141', '#343992'],
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
			axisBorder: {
				show: false,
			},
			axisTicks: {
				show: false,
			},
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
        },
        yaxis: {
          title: {
            text: '$ (thousands)'
          }
        },
        grid: {
			strokeDashArray: 10,
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + "k " + " thousands"
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#total-earnings"), options);
        chart.render();
	
	
	
	
		var options = {
	  chart: {
		  height: 250,
		  type: 'bar',
		  toolbar: {
			  show: false
		  },
	  },
	  plotOptions: {
		  bar: {
			  horizontal: false,
            borderRadius: 3,
			columnWidth: '45%',
		  },
	  },
	  dataLabels: {
		  enabled: false
	  },
	  stroke: {
		  show: true,
		  width: 5,
		  colors: ['transparent']
	  },
	  colors: ["#7047ee", "#ee3158"],
	  series: [{
		  name: 'In Restaurant',
		  data: [70, 45, 51, 58, 59, 58, 61]
	  }, {
		  name: 'Online Order',
		  data: [55, 71, 80, 100, 89, 98, 110]
	  },],
	  xaxis: {
		  categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Set", "Sun"],
			axisBorder: {
				show: false,
			},
			axisTicks: {
				show: false,
			},    
	  },
	  legend: {
          show: false,
        },
	  fill: {
		  opacity: 1

	  },
	  grid: {
		  strokeDashArray: 10,
	  },
	  tooltip: {
		  y: {
			  formatter: function (val) {
				  return "$" + val + "k"
			  }
		  }
	  }
	}

	var chart = new ApexCharts(
	  document.querySelector("#yearly-comparison"),
	  options
	);

	chart.render();
	
	
	var options = {
          series: [{
          data: [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 63, 53, 61, 27, 54, 43, 19, 46]
        }],
          chart: {
          type: 'area',
          height: 100,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
		  width: 0,
          curve: 'smooth'
        },
        fill: {
          opacity: 1,
        },
        yaxis: {
          min: 0
        },
        colors: ['#7047ee'],
        };

        var chart = new ApexCharts(document.querySelector("#sells-graph"), options);
        chart.render();
	
	
	var options = {
          series: [{
          data: [51, 35, 41, 35, 27, 63, 53, 61, 27, 54, 43, 19, 46, 47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62]
        }],
          chart: {
          type: 'line',
          height: 105,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
		  width: 4,
          curve: 'smooth'
        },
        fill: {
          opacity: 1,
        },
        yaxis: {
          min: 0
        },
        colors: ['#ee3158'],
        };

        var chart = new ApexCharts(document.querySelector("#new-users"), options);
        chart.render();
	
		$('.review-slider').owlCarousel({
			loop: true,
			margin: 20,
			responsiveClass: true,
			autoplay: true,
			dots: false,
			nav: true,
			responsive: {
			  0: {
				items: 1,
			  },
			  1024: {
				items: 2,
			  },
			  1600: {
				items: 2,
			  },
			  2000: {
				items: 3,
			  }
			}
		  });
	
		$('.food-slider').owlCarousel({
			loop: true,
			margin: 20,
			responsiveClass: true,
			autoplay: true,
			dots: false,
			nav: false,
			responsive: {
			  0: {
				items: 1,
			  },
			  1024: {
				items: 3,
			  },
			  1600: {
				items: 5,
			  },
			  2000: {
				items: 5,
			  }
			}
		  });
	
}); // End of use strict
