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
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
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

<a class="btn btn-primary" href="index.php" role="button">World Live</a><br><br>
<a class="btn btn-primary" href="indiadaywise.php" role="button">India Day Wise</a><br><br>
<h1>India Live Covid Meter </h1>
	<div class="table-responsive">
		<table class=" table table-bordered table-striped text-center" id="tbval">
			<tr>
				<th>State</th>
				<th>Confirmed Cases</th>
				<th>Active Cases</th>
				<th>Recovered Cases</th>
				<th>Deaths</th>
			</tr>

<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data, true); 
/* echo "<pre>";
print_r($coronalive);
echo "</pre>";  */

$statecount = count($coronalive['statewise']);

$i=1;
while($i < $statecount) {
	?>
	<tr> 
		<td style="color: #fff; background: #2196f3"> <?php 	echo $coronalive['statewise'][$i]['state'] ?> </td>
		<td style=" background: #35D6ED"> <?php 	echo $coronalive['statewise'][$i]['confirmed'] ?> </td>
		<td style=" background: #65DDEF"> <?php 	echo $coronalive['statewise'][$i]['active'] ?> </td>
		<td style=" background: #7AE5F5"> <?php 	echo $coronalive['statewise'][$i]['recovered'] ?> </td>
		<td style=" background: #97EBF4"> <?php 	echo $coronalive['statewise'][$i]['deaths'] ?> </td>
	</tr>
<?php
	$i++; 
}

?>
 			
			
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
</body>
</html>