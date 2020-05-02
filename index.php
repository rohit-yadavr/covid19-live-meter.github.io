<!DOCTYPE html>
<html>
<head> 
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
</head>
<body onload="fetch()">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" style="color:Red;" href="index.php"><b>GO Corona</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indialive.php">India</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="indiadaywise.php">India Day Wise</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="about.php">About Me</a>
      </li>
    </ul>
  </div>
</nav>
<br><br>
<a class="btn btn-primary" href="indialive.php" role="button">India Live</a><br><br>
<a class="btn btn-primary" href="indiadaywise.php" role="button">India Day Wise</a><br><br>


<h1> World Live Covid Meter </h1>
	<div class="table-responsive">
		<table class=" table table-bordered table-striped text-center" id="tbval">
			<tr>
				<th>Country</th>
				<th>Total Confirmed</th>
				<th>Total Recovered</th>
				<th>Total Deaths</th>
				<th>New Confirmed</th>
				<th>New Recovered</th>
				<th>New Deaths</th>
			</tr>
		</table>
	</div>
	
	
	<!-- Footer -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="indialive.php"><i class="fa fa-angle-double-right"></i>India</a></li>
						<li><a href="indiadaywise.php"><i class="fa fa-angle-double-right"></i>India Day Wise</a></li>
						<li><a href="about.php"><i class="fa fa-angle-double-right"></i>About me</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p class="h6">© All right Reserved<a class="text-green ml-2" href="about.php" target="_blank">Rohit</a></p>
				</div>
				<hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->
	
	
	
	<script>
	function fetch(){
		$.get("https://api.covid19api.com/summary",
			function (data) {
				// console.log(data['Countries'].length);
				var tbval = document.getElementById('tbval');
				for(var i=1; i<(data['Countries'].length); i++) {
					var x = tbval.insertRow();
					x.insertCell(0);
					tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
					tbval.rows[i].cells[0].style.background = '#35D6ED';
					
					x.insertCell(1);
					tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
					tbval.rows[i].cells[1].style.background = '#65DDEF';
					
					x.insertCell(2);
					tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
					tbval.rows[i].cells[2].style.background = '#7AE5F5';
					
					x.insertCell(3);
					tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
					tbval.rows[i].cells[3].style.background = '#97EBF4';
					
					x.insertCell(4);
					tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
					tbval.rows[i].cells[4].style.background = '#C9F6FF';
					
					x.insertCell(5);
					tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
					tbval.rows[i].cells[5].style.background = '#97EBF4';
					
					x.insertCell(6);
					tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
					tbval.rows[i].cells[6].style.background = '#7AE5F5';
					
					
				}
			}
		
		);
	}
	</script>
</body>
</html>