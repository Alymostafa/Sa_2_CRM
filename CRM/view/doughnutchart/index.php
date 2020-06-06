<!DOCTYPE html>
<html>
<head>
	<title>Doughnut Chart using Chart.js with PHP/MySQLi</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- ChartJS -->
	<script src="chart.js/Chart.js"></script>
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Pie Chart</h1>
	<div class="row">
		<div class="col-md-3">
			<form method="POST" action="addproduct.php">
				<div class="form-group">
					<label>Category:</label>
					<select class="form-control" name="category">
          
          </select>
				</div>
				<div class="form-group">
					<label>Product Name:</label>
					<input type="text" class="form-control" name="pname">
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</form>
		</div>
		<div class="col-md-9">
			<div class="box box-success">
            <div class="box-header with-border">
            	<?php
            	 //set timezone
					     //date_default_timezone_set('Asia/Manila');
					     $year = date('Y');
            	?>
              <h3 class="box-title">Phone Brands</h3>

            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
		</div>
	</div>
</div>
<?php include('data.php'); ?>
<script>
  $(function () {
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : <?php echo $rate_1; ?>,
        color    : '#f56954',
        highlight: '#f56954',
        label    : '1'
      },
      {
        value    : <?php echo $rate_2; ?>,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : '2'
      },
      {
        value    : <?php echo $rate_3; ?>,
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : '3'
      },
      {
        value    : <?php echo $rate_4; ?>,
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : '4'
      },
      {
        value    : <?php echo $rate_5; ?>,
        color    : '#3c8dbc',
        highlight: '#3c8dbc',
        label    : '5'
      }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)

  })
</script>
</body>
</html>