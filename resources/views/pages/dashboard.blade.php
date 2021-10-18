@extends('layouts.mainlayout')


@section('content')
 <!--main content start-->
 @if(session('user'))
 <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart">
          
            <div class="row mt">

           
              <div class="col-md-3 mb">
                <div class="weather pn">
                  <i class="fa fa-university fa-4x"></i>
                  <h2><?php echo $number_of_spinoff; ?></h2>
                  <h4>Spinoff Companies</h4>
                </div>
              </div>
           
              <!-- /col-md-4 -->
              <div class="col-md-3 col-sm-3 mb">
                <div class="weather pn">
                  <i class="fa fa-child fa-4x"></i>
                  <h2><?php echo $number_of_startups; ?></h2>
                  <h4>Startup Companies</h4>
                </div>
              </div>

              <!-- third card -->
              <div class="col-md-3 col-sm-3 mb">
              <div class="weather pn">
                  <i class="fa fa-blind fa-4x"></i>
                  <h2><?php echo $number_section_leaders; ?></h2>
                  <h4>Project Leaders</h4>
                </div>
              </div>
              <!-- Fourth card -->
              <div class="col-md-3 col-sm-3 mb">
              <div class="weather pn">
                  <i class="fa fa-group fa-4x"></i>
                  <h2><?php echo $number_of_employees; ?></h2>
                  <h4>Total Employees</h4>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
            <div class="row">
              <!-- WEATHER PANEL -->
              <!-- <div class="col-md-6 mb">
           
                  <div class="green-panel pn">
                        <div class="green-header">
                          <h5>Spinoff Overall Performance</h5>
                        </div>
                        <canvas id="layanan" height="200" width="450" style="background-color:green;"></canvas>
                        <p>test</p>
                  </div>
              </div> -->


              <div class="col-md-6 mb">
               <!-- REVENUE PANEL -->
               <div class="green-panel pn">
                  <div class="green-header">
                    <h5>Companies Overal Performance</h5>
                  </div>
                  <canvas id="canvas" height="200" width="600" ></canvas>
                </div>
              </div>
              
            </div>
            
            
          </div>

        </div>
     
      </section>
    </section>
@endif

  }
    <!--main content end-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
    
    // first graph
    var months = <?php echo $period_x_axis; ?>;
    var perfom = <?php echo $overall_perfo_y_axis; ?>;
    var spinoffData = {
        labels: months,
        datasets: [{
            label: 'Spinoff Companies',
            backgroundColor: "pink",
            data: perfom
        }]
    };
    window.onload = function() {
        var cts = document.getElementById("layanan").getContext("2d");
        window.myBars = new Chart(cts, {
            type: 'line',
            data: spinoffData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '#c1c1c1',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                scales:{
                   xAxes:[{
                     gridLines:{
                       color:''
                     }
                   }],
                   yAxes:[{
                     gridLines:{
                       color:''
                     }
                   }]
                }
                
            }
        });
    };
    
    
    // second graph
    var year = <?php echo $period_x_axis; ?>;
    var perfomance = <?php echo $overall_perfo_y_axis; ?>;
    var barChartData = {
        labels: year,
        datasets: [{
            label: 'Startup Companies',
            backgroundColor: "pink",
            data: perfomance
        }]
    };

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'line',
            data: barChartData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '#c1c1c1',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                scales:{
                   xAxes:[{
                     gridLines:{
                       color:''
                     }
                   }],
                   yAxes:[{
                     gridLines:{
                       color:''
                     }
                   }]
                }
            
            }
        });
    };
    
    
</script>

@stop
