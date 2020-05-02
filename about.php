<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}



button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}


button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" style="color:Red;" href="index.php"><b>GO Corona</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indialive.php">India</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="indiadaywise.php">India Day Wise</a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="about.php">About Me</a>
      </li>
    </ul>
  </div>
</nav>
<br>
<a class="btn btn-primary" href="indialive.php" role="button">India Live</a>

<a class="btn btn-primary" href="index.php" role="button">World Live</a>

<a class="btn btn-primary" href="indiadaywise.php" role="button">India Day Wise</a>
<br>
<br>
<h1 style="text-align:center; color:Blue;">Hey!!!</h1><h1 style="text-align:center; color:Red;">I am Rohit</h1> <br>
 <h1 style="text-align:center; color:Blue;">Wooww...Came to know more About me,<br> Sorry It doesn't exist...</h1>

<div class="card">
  <img src="images/rohity.jpg" alt="rohit" style="width:100%">
  <p class="title"></p>
  <p><button></button></p>
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
