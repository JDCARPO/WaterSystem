<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Water station</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body {
			background-image: url(img/tubig.jpg);
			color: teal;
			width: 100%;
		}
	</style>
</head>
<body>
	<div class="container">
					<nav class="navbar navbar-expand-lg navbar-success bg-gray">
						<img src="img/water.png" width="120" height="100" alt="img/water.png"/>&nbsp;&nbsp;&nbsp;
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item active">
										<a class="nav-link" href="index.php"><h3>My Water purified refilling station </h3><span class="sr-only">(current)</span></a>
									</li>
								</ul>
								<form class="form-inline my-2 my-lg-0">		
									<ul class="navbar-nav mr-auto">
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												profile
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="index.php">Home</a>
												
											</div>
										</li>			
									</ul>
								</form>
							</div>
					</nav>
		</div>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($db, "SELECT * FROM login");
	?>
	
	<?php	
	}
	?>
	
		<main class="bd-masthead" id="content" role="main">
    			 		<section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center"><br>
          	<hr class="my-4">
            <h2 class="section-heading">About us</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
       <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/tubig.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Production</h2>
          <p class="lead mb-0"><strong>can be produced from any natural sources like groundwater, lakes and rivers (surface waters) or seawater.</strong></p>
        </div>
      </div><br><br><br><br>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Cleanliness</h2>
          <p class="lead mb-0">A lack of clean water and adequate sanitation can lead to safety concerns, especially in war torn areas.</p>
        </div>
      </div><br><br><br><br>
     
    </div>
  </section><br>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">Developers...</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/ebal.jpg" alt="" width="65%" >
            <h5>Mary Joy Ebal.</h5>
            <p class="font-weight-light mb-0">"WEB DEVELOPER"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/jdc.jpg" alt="" width="70%" >
            <h5>JD C.</h5>
            <p class="font-weight-light mb-0">"WEB DESIGN"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/maria.jpg" alt="" width="70%">
            <h5>Paul David C.</h5>
            <p class="font-weight-light mb-0">"SEO Engine"</p>
          </div>
        </div>
      </div>
    </div>
  </section> 	
  </div>	
							
    			</div>
    			<div class="footer text-center"><br>
						<img src="img/FB.png" width="45" height="45" alt="icon/FB.png"/>
						<img src="img/GIT.png" width="35" height="35" alt="icon/GIT.png"/>
						<img src="img/GMAIL.png" width="35" height="35" alt="icon/GMAIL.png"/>
						<img src="img/T.png" width="35" height="35" alt="icon/T.png"/>
					</div>
	
</body>
</html>
