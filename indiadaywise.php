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
      <li class="nav-item">
        <a class="nav-link" href="indialive.php">India</a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="indiadaywise.php">India Day Wise</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="about.php">About Me</a>
      </li>
    </ul>
  </div>
</nav>
<br>
<a class="btn btn-primary" href="indialive.php" role="button">India Live</a>
<br>
<br>
<a class="btn btn-primary" href="index.php" role="button">World Live</a>
<br>
<br>
<h1>India Daily Covid Deatils </h1>
	<div class="table-responsive">
		<table class=" table table-bordered table-striped text-center" id="tbval">

<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coronadata = json_decode($data, true); 
/* echo "<pre>";
print_r($coronalive);
echo "</pre>";  */

$totalcount = count($coronadata['cases_time_series']);

$i=0;
while($i < $totalcount) {
	?>
	<tr>
		<td class="text-left"> <?php echo $coronadata['cases_time_series'][$i]['date']. "</br>  "; ?> </td>
	</tr>
	<tr>
		<th style="color:#fff; background: #0063B2FF;" > Total Confirmed </th>
		<th style="color:#fff; background: #0063B2FF;" > Daily Confirmed </th>
		<th style="color:#fff; background: #0063B2FF;" > Daily Recovered </th>
		<th style="color:#fff; background: #0063B2FF;" > Daily Death </th>
		<th style="color:#fff; background: #0063B2FF;" > Total Recoverd </th>
		<th style="color:#fff; background: #0063B2FF;" > Total Death </th>
	</tr>
	<tr>
		<td style=" background: #9CC3D5FF"> <?php echo $coronadata['cases_time_series'][$i]['totalconfirmed']. "</br>"; ?> </td>
		<td style=" background: #9CC3D5FF"> <?php echo $coronadata['cases_time_series'][$i]['dailyconfirmed']. "</br>"; ?> </td>
		<td style=" background: #9CC3D5FF"> <?php echo $coronadata['cases_time_series'][$i]['dailyrecovered']. "</br>"; ?> </td>
		<td style=" background: #9CC3D5FF"> <?php echo $coronadata['cases_time_series'][$i]['dailydeceased']. "</br>"; ?> </td>
		<td style=" background: #9CC3D5FF"> <?php echo $coronadata['cases_time_series'][$i]['totalrecovered']. "</br>"; ?> </td>
		<td style=" background: #9CC3D5FF"> <?php echo $coronadata['cases_time_series'][$i]['totaldeceased']. "</br>"; ?> </td>
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