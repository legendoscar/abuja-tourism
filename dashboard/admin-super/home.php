<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box box box-success with-border hover:bg-white">
            <div class="inner">
              <h3 class="text-black">500</h3>
              <p class="text-black">Total Users</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="users.php" class="small-box-footer bg-green-gradient">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box box box-success with-border">
            <div class="inner">
                <h3 class="text-black">657</h3>
                <p class="text-black">Total Hotels</p>
            </div>
            <div class="icon">
              <i class="fa fa-hotel"></i>
            </div>
            <a href="hotels-list.php" class="small-box-footer bg-yellow-gradient">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box box box-success with-border">
            <div class="inner">
              <h3 class="text-black">32</h3>
              <p class="text-black">Bookings</p>
            </div>
            <div class="icon">
              <i class="fa fa-calendar-check-o"></i>
            </div>
            <a href="bookings.php" class="small-box-footer bg-green-gradient">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box box box-success with-border">
            <div class="inner">
              <h3 class="text-black">15</h3>
              <p class="text-black">Total Invoice</p>
            </div>
            <div class="icon">
              <i class="fa fa-sticky-note"></i>
            </div>
            <a href="invoice.php" class="small-box-footer bg-yellow-gradient">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Monthly Transaction Report</h3>
              <div class="box-tools pull-right">
                <form class="form-inline">
                  <div class="form-group">
                    <label>Select Year: </label>
                    <select class="form-control input-sm" id="select_year">
                      <option value="">2020</option>
                      <option value="">2021</option>
                      <option value="">2022</option>
                      <option value="">2023</option>
                      <option value="">2024</option>
                      <option value="">2025</option>
                    </select>
                  </div>
                </form>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <br>
                <div id="legend" class="text-center"></div>
                <canvas id="barChart" style="height:350px"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>

      </section>
      <!-- right col -->
    </div>
  	<?php include 'includes/footer.php'; ?>

</div>
<!-- ./wrapper -->

<!-- Chart Data -->

<!-- End Chart Data -->
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){

  var data1 = [52, 60, 55, 50]
  var data2 = [102, 70, 80,]
  var barChartCanvas = $('#barChart').get(0).getContext('2d')
  var barChart = new Chart(barChartCanvas)
  var barChartData = {
        labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [
        {
            label               : 'Less',
            fillColor           : 'rgba(210, 214, 222, 0.5)',
            strokeColor         : 'rgba(210, 214, 222, 0.5)',
            pointColor          : 'rgba(210, 214, 222, 0.5)',
            pointStrokeColor    : '#f7f7f7',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : data1
        },
        {
            label               : 'More',
            fillColor           : 'rgba(52, 228, 184, 0.8)',
            strokeColor         : '#18af87',
            pointColor          : 'rgba(52, 228, 184, 0.8)',
            pointStrokeColor    : 'rgba(52, 228, 184, 0.8)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(52, 228, 184, 0.8)',
            data                : data2
        }
        ]
    }
    barChartData.datasets[1].fillColor   = 'rgba(6, 160, 88, 0.7)'
    barChartData.datasets[1].strokeColor = 'rgba(6, 160, 88, 0.8)'
    barChartData.datasets[1].pointColor  = 'rgba(6, 160, 88, 0.8)'
  var barChartOptions                  = {
    //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
    scaleBeginAtZero        : true,
    //Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines      : true,
    //String - Colour of the grid lines
    scaleGridLineColor      : 'rgba(0,0,0,.05)',
    //Number - Width of the grid lines
    scaleGridLineWidth      : 1,
    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines  : true,
    //Boolean - If there is a stroke on each bar
    barShowStroke           : true,
    //Number - Pixel width of the bar stroke
    barStrokeWidth          : 2,
    //Number - Spacing between each of the X value sets
    barValueSpacing         : 5,
    //Number - Spacing between data sets within X values
    barDatasetSpacing       : 1,
    //String - A legend template
    legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
    //Boolean - whether to make the chart responsive
    responsive              : true,
    maintainAspectRatio     : true
  }

  barChartOptions.datasetFill = false
  var myChart = barChart.Bar(barChartData, barChartOptions)
  document.getElementById('legend').innerHTML = myChart.generateLegend();

});
</script>
<script>
  $('#select_year').change(function(){
    window.location.href = 'home.php?year='+$(this).val();
  });
</script>
</body>
</html>
