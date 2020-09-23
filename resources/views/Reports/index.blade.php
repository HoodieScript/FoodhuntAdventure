@extends('layouts.default')

@section('contentmo')
<div class="w-100 bg-white container rounded p-3  mt-5">
<!-- headings -->
<div class="d-flex justify-content-between">
  <div class="p-2">
    <h2>{{ __('Reports') }}</h2>
  </div>
</div>
<!--end headings -->
<!-- row -->
<div class="row d-flex justify-content-start  pl-4 pr-4">

 <div class="col-xs-2 col-md-2 col-lg-2 pt-3 pb-3 pl-4 pr-4 m-2 rounded bg-white border-custom">

  <div class="row text-center">
  <div class="col-md-12">  
  <strong>{{ $totalAccounts }}</strong>
  </div>
  <div class="col-md-12">  
  {{ __('Accounts') }}
  </div>
  </div>
  </div>

<div class="col-xs-2 col-md-2 col-lg-2 pt-3 pb-3 pl-4 pr-4 m-2 rounded bg-white border-custom">

<div class="row d-flex text-center justify-content-center">
  <div class="col-md-12">  
  <strong>{{ $totalPlayers }}</strong>
</div>
<div class="col-md-12">  
{{ __('Players') }}
</div>
</div>
</div>
</div>
<!--
<div class="col-xs-2 col-md-2 col-lg-2 pt-3 pb-3 pl-4 pr-4 mb-2 rounded bg-white border-custom">

<div class="row d-flex text-center justify-content-center">
  <div class="col-md-12">  
  <strong>6</strong>
</div>
<div class="col-md-12">  
{{ __('Critical Age') }}
</div>
</div>
</div>
<div class="col-xs-2 col-md-2 col-lg-2 pt-3 pb-3 pl-4 pr-4 mb-2 rounded bg-white border-custom">
<div class="row d-flex text-center justify-content-center">
  <div class="col-md-12">  
   <strong>7</strong>
</div>
<div class="col-md-12">  
{{ __('Critical Places') }}
</div>
</div>
</div>
</div>
-->
<!--end row -->

<!-- row -->
<div class="row d-flex justify-content-center p-3">
<div class="col-md-6 col-lg-6 card rounded mb-2">
<div class="card-header row justify-content-between">


<label class="col-xs-6 font-weight-bold">
{{ __('Players based-age Performance') }}
</label>

<!-- drop down -->
<div class="dropdown dropleft col-xs-6">

<!--------optional paste "dropdown-toggle" to class to display arrow down------->
<button class="btn btn-sm btn-light " type="button" id="dropdownMenuButton1" data-toggle="dropdown" data-hover="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-ellipsis-v menuicon"></i>
</button>
  <!--drop down menu -->
  <div class="dropdown-menu border-0 p-0" role="tablist"  >
  <ul class="list-group" id="list-tab" role="tablist" aria-labelledby="dropdownMenuButton1">
  <li class="list-group-item list-group-item-action p-0"><a class="dropdown-item" data-toggle="tab" href="#tabs-1" role="tab">Food hunt</a></li>  
  <li class="list-group-item list-group-item-action p-0"><a class="dropdown-item" data-toggle="tab" href="#tabs-2" role="tab">Fooddrop</a></li>
  <li class="list-group-item list-group-item-action p-0"><a class="dropdown-item" data-toggle="tab" href="#tabs-3" role="tab">Spellafood</a></li>
  <!-- end drop down menu -->
    
  </ul>
  </div>

</div>
<!-- end drop down -->

</div>
<div class="card-body tab-content" id="nav-tabContent">
<!-- tab content -->
<div class="tab-pane active" id="tabs-1" role="tabpanel">
  <canvas id="canvasbar2" height="280" width="500"></canvas>

<p>Note: This chart shows the performance of the players Age of every players and will identify which age are excelled in regognizing Nutrious food in  Food Hunt Adventure mobile game </p>

<small class="text-danger">Chart on progress*</small>
	</div>
	<div class="tab-pane" id="tabs-2" role="tabpanel">
    <canvas id="canvasbar3" height="280" width="500"></canvas>

		<p>Second Panel</p>
	</div>
	<div class="tab-pane" id="tabs-3" role="tabpanel">
    <canvas id="canvasbar4" height="280" width="500"></canvas>
		<p>Third Panel</p>
	</div>
</div>
<!-- end tab content -->
</div>

<div class="col-md-6  col-lg-6 card rounded mb-2">
<div class="card-header row justify-content-between">


<label class="col-xs-6 font-weight-bold">
{{ __('Players based-Location Performance ') }}
</label>

<!-- drop down -->
<div class="dropdown dropleft col-xs-6">

<!--------optional paste "dropdown-toggle" to class to display arrow down------->
<button class="btn btn-sm btn-light " type="button" id="dropdownMenuButton2" data-toggle="dropdown" data-hover="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-ellipsis-v menuicon"></i>
</button>
<!--drop down menu -->
  <div class="dropdown-menu border-0 p-0" role="tablist"  >
  <ul class="list-group" id="list-tab" role="tablist" aria-labelledby="dropdownMenuButton2">
  <li class="list-group-item list-group-item-action p-0"><a class="dropdown-item" data-toggle="tab" href="#tabs-4" role="tab">Food hunt</a></li>  
  <li class="list-group-item list-group-item-action p-0"><a class="dropdown-item" data-toggle="tab" href="#tabs-5" role="tab">Fooddrop</a></li>
  <li class="list-group-item list-group-item-action p-0"><a class="dropdown-item" data-toggle="tab" href="#tabs-6" role="tab">Spellafood</a></li>
  <!-- end drop down menu -->
    
  </ul>
  </div>

</div>
<!-- end drop down -->

</div>
<div class="card-body tab-content" id="nav-tabContent">
<!-- tab content -->
<div class="tab-pane active" id="tabs-4" role="tabpanel">
	<canvas id="canvasbar7" height="280" width="500"></canvas>
<p>Note: this chart targets the Age of every players and will identify which age are excelled in regognizing Nutrious food in  Food Hunt Adventure mobile game </p>

<small class="text-danger">Chart on progress*</small>
	</div>
	<div class="tab-pane" id="tabs-5" role="tabpanel">
    <canvas id="canvasbar5" height="280" width="500"></canvas>
		<p>Second Panel</p>
	</div>
	<div class="tab-pane" id="tabs-6" role="tabpanel">
    <canvas id="canvasbar6" height="280" width="500"></canvas>
		<p>Third Panel</p>
	</div>
</div>
<!-- end tab content -->
</div>

<!--end row -->
</div>
<!-- row -->
<div class="row p-3">
<div class="col-md-12 p-0 col-lg-12 card">
<div class="card-header ">
{{ __('Players age totality') }}
</div>

<div class="card-body">
<canvas id="canvasbar" height="280" width="600"></canvas>
<p>Note: this chart overviewed which age are mostly playing the Food hunt Adventure mobile game</p>
</div>
</div>
</div>
<!--end row -->


<script>

    
    var age = <?php echo $ages; ?>;
    
    var scorespercentage3 = <?php echo $scorespercentage3; ?>;
    var scorespercentage = <?php echo $scorespercentage; ?>;
    var scorespercentage4 = <?php echo $scorespercentage4; ?>;
    var scorespercentage7 = <?php echo $scorespercentage7; ?>;
    var scorespercentage5 = <?php echo $scorespercentage5; ?>;
    var scorespercentage6 = <?php echo $scorespercentage6; ?>;
    var data_viewer = <?php echo $viewer; ?>;
    var data_viewer3 = <?php echo $viewer3; ?>;
    var data_viewer2 = <?php echo $viewer2; ?>;
    var data_viewer4 = <?php echo $viewer4; ?>;
    var data_viewer7 = <?php echo $viewer7; ?>;
    var data_viewer5 = <?php echo $viewer5; ?>;
    var data_viewer6 = <?php echo $viewer6; ?>;
  
    function dynamicColors() {
    var r = Math.floor(Math.random() * 255);
    var g = Math.floor(Math.random() * 255);
    var b = Math.floor(Math.random() * 255);
    return "rgba(" + r + "," + g + "," + b + ", 0.5)";
}


function poolColors(a) {
    var pool = [];
    for(i = 0; i < a; i++) {
        pool.push(dynamicColors());
    }
    return pool;
}
    var barChartData = {
        labels: age,
        datasets:   [ {
        label: "Player's age total",
        backgroundColor: 'rgb(0, 153, 204,0.3)',
        data: data_viewer 
        }]

        };

        var barChartData3 = {
         labels:  data_viewer3,
        datasets: [ 
        {
          data: scorespercentage3,
          backgroundColor:  poolColors(scorespercentage3.length),
          labels:  scorespercentage3,
        }]
    };

    var barChartData2 = {
         labels:  data_viewer2,
        datasets: [ 
        {
          data: scorespercentage,
          backgroundColor:  poolColors(scorespercentage.length),
          labels:  scorespercentage,
        }]
    };

    var barChartData4 = {
         labels:  data_viewer4,
        datasets: [ 
        {
          data: scorespercentage4,
          backgroundColor:  poolColors(scorespercentage4.length),
          labels:  scorespercentage4,
        }]
    };

    var barChartData7 = {
         labels:  data_viewer7,
        datasets: [ 
        {
          data: scorespercentage7,
          backgroundColor: poolColors(scorespercentage7.length),
          labels: scorespercentage7,
        }]
    };

    var barChartData5 = {
         labels:  data_viewer5,
        datasets: [ 
        {
          data: scorespercentage5,
          backgroundColor:  poolColors(scorespercentage5.length),
          labels:  scorespercentage5,
        }]
    };

    var barChartData6 = {
         labels:  data_viewer6,
        datasets: [ 
        {
          data: scorespercentage6,
          backgroundColor:  poolColors(scorespercentage6.length),
          labels:  scorespercentage6,
        }]
    };
    

    window.onload = function() {
        var ctx = document.getElementById("canvasbar").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            
            
            options: {

              scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },tooltips: {
                
                yAlign: 'left',
                mode: 'index',
                intersect: false,
            },
        
                elements: {
                    rectangle: {
                        borderWidth: 2,
                    }
                },
                responsive: true,
                title: {
                    display: false,
                    text: 'Age commulative data'
                },
                legend: {
                display: false,
                }
            }
        });

        var ctx3 = document.getElementById("canvasbar2").getContext("2d");
        window.myBar = new Chart(ctx3, {
            type: 'doughnut',
            data: barChartData3,

            
            options: {
      
                title: {
                    display: false,
                    text: 'Players Age performance'
                },
                layout: {
                padding: {
                left: 0,
                right: 0,
                top: 40,
                bottom: 0
                }
                },
                tooltips: {
                  
                yAlign: 'bottom',
               // mode: 'index',
                intersect: false,
                callbacks: {
                label: function(tooltipItem, data) { 
                  var indice = tooltipItem.index;                 
            return  data.datasets[0].data[indice] +'%';//data.labels[indice] +'% of players got the score of: '+data.datasets[0].data[indice] + '';
        }
            }
        },
                legend: {
                display: true,
                position: 'right' ,
                
                },
                responsive: true,
            },
            
            elements: {
            arc: {
                roundedCornersFor: 0
            },
            center: {
                // the longest text that could appear in the center
                maxText: '100%',
                text: '67%',
                fontColor: 'red',
                fontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                fontStyle: 'normal',
                fontSize: 12,

                minFontSize: 1,
                maxFontSize: 256,
            }
        }
        });

        var ctx2 = document.getElementById("canvasbar3").getContext("2d");
        window.myBar = new Chart(ctx2, {
            type: 'doughnut',
            data: barChartData2,

            
            options: {
      
                title: {
                    display: false,
                    text: 'Players Age performance'
                },
                layout: {
                padding: {
                left: 0,
                right: 0,
                top: 40,
                bottom: 0
                }
                },
                tooltips: {
                  
                yAlign: 'bottom',
               // mode: 'index',
                intersect: false,
                callbacks: {
                label: function(tooltipItem, data) { 
                  var indice = tooltipItem.index;                 
            return  data.datasets[0].data[indice] +'%'; //data.labels[indice] +'% of players got the score of: '+data.datasets[0].data[indice] + '';
        }
            }
        },
                legend: {
                display: true,
                position: 'right' ,
                
                },
                responsive: true,
            },
            
            elements: {
            arc: {
                roundedCornersFor: 0
            },
            center: {
                // the longest text that could appear in the center
                maxText: '100%',
                text: '67%',
                fontColor: 'red',
                fontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                fontStyle: 'normal',
                fontSize: 12,

                minFontSize: 1,
                maxFontSize: 256,
            }
        }
        });

        var ctx4 = document.getElementById("canvasbar4").getContext("2d");
        window.myBar = new Chart(ctx4, {
            type: 'doughnut',
            data: barChartData4,
            options: {
      
                title: {
                    display: false,
                    text: 'Players Age performance'
                },
                layout: {
                padding: {
                left: 0,
                right: 0,
                top: 40,
                bottom: 0
                }
                },
                tooltips: {
                  
                yAlign: 'bottom',
               // mode: 'index',
                intersect: false,
                callbacks: {
                label: function(tooltipItem, data) { 
                  var indice = tooltipItem.index;                 
            return  data.datasets[0].data[indice] +'%';//data.labels[indice] +'% of players got the score of: '+data.datasets[0].data[indice] + '';
        }
            }
        },
                legend: {
                display: true,
                position: 'right' ,
                
                },
                responsive: true,
            },
            
            elements: {
            arc: {
                roundedCornersFor: 0
            },
            center: {
                // the longest text that could appear in the center
                maxText: '100%',
                text: '67%',
                fontColor: 'red',
                fontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                fontStyle: 'normal',
                fontSize: 12,

                minFontSize: 1,
                maxFontSize: 256,
            }
        }
        }); 

        var ctx7 = document.getElementById("canvasbar7").getContext("2d");
        window.myBar = new Chart(ctx7, {
            type: 'doughnut',
            data: barChartData7,
            options: {
      
                title: {
                    display: false,
                    text: 'Location-based average score'
                },
                layout: {
                padding: {
                left: 0,
                right: 0,
                top: 40,
                bottom: 0
                }
                },
                tooltips: {
                  
                yAlign: 'bottom',
               // mode: 'index',
                intersect: false,
                callbacks: {
                label: function(tooltipItem, data) { 
                  var indice = tooltipItem.index;                 
            return  data.datasets[0].data[indice] +'%';//data.labels[indice] +'% of players got the score of: '+data.datasets[0].data[indice] + '';
        }
            }
        },
                legend: {
                display: true,
                position: 'right' ,
                
                },
                responsive: true,
            },
            
            elements: {
            arc: {
                roundedCornersFor: 0
            },
            center: {
                // the longest text that could appear in the center
                maxText: '100%',
                text: '67%',
                fontColor: 'red',
                fontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                fontStyle: 'normal',
                fontSize: 12,

                minFontSize: 1,
                maxFontSize: 256,
            }
        }
        }); 

        var ctx5 = document.getElementById("canvasbar5").getContext("2d");
        window.myBar = new Chart(ctx5, {
            type: 'doughnut',
            data: barChartData5,
            options: {
      
                title: {
                    display: false,
                    text: 'Location-based average score'
                },
                layout: {
                padding: {
                left: 0,
                right: 0,
                top: 40,
                bottom: 0
                }
                },
                tooltips: {
                  
                yAlign: 'bottom',
               // mode: 'index',
                intersect: false,
                callbacks: {
                label: function(tooltipItem, data) { 
                  var indice = tooltipItem.index;                 
            return  data.datasets[0].data[indice] +'%';//data.labels[indice] +'% of players got the score of: '+data.datasets[0].data[indice] + '';
        }
            }
        },
                legend: {
                display: true,
                position: 'right' ,
                
                },
                responsive: true,
            },
            
            elements: {
            arc: {
                roundedCornersFor: 0
            },
            center: {
                // the longest text that could appear in the center
                maxText: '100%',
                text: '67%',
                fontColor: 'red',
                fontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                fontStyle: 'normal',
                fontSize: 12,

                minFontSize: 1,
                maxFontSize: 256,
            }
        }
        }); 

        var ctx6 = document.getElementById("canvasbar6").getContext("2d");
        window.myBar = new Chart(ctx6, {
            type: 'doughnut',
            data: barChartData6,
            options: {
      
                title: {
                    display: false,
                    text: 'Location-based average score'
                },
                layout: {
                padding: {
                left: 0,
                right: 0,
                top: 40,
                bottom: 0
                }
                },
                tooltips: {
                  
                yAlign: 'bottom',
               // mode: 'index',
                intersect: false,
                callbacks: {
                label: function(tooltipItem, data) { 
                  var indice = tooltipItem.index;                 
            return  data.datasets[0].data[indice] +'%';//data.labels[indice] +'% of players got the score of: '+data.datasets[0].data[indice] + '';
        }
            }
        },
                legend: {
                display: true,
                position: 'right' ,
                
                },
                responsive: true,
            },
            
            elements: {
            arc: {
                roundedCornersFor: 0
            },
            center: {
                // the longest text that could appear in the center
                maxText: '100%',
                text: '67%',
                fontColor: 'red',
                fontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                fontStyle: 'normal',
                fontSize: 12,

                minFontSize: 1,
                maxFontSize: 256,
            }
        }
        }); 


    };


  


  </script>

@endsection


@section('nameandlogo')
@foreach($systemupdates as $systemdata)


<a class=" nav-link text-dark font-weight-bold"><img src="{{ asset('/uploads/dataimages/' .  $systemdata->uploadimage ) }}" class="img imagelogo">{{ $systemdata->systemname }} </a>


@endforeach
@endsection
