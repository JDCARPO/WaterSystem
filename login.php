<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>water information system</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body {
			background-image: url(img/tubig.jpg);
			background-size: cover;
			color: black;
			width: 100%;
		}
	</style>
</head>
<body>
		<div class="container">
					<nav class="navbar navbar-light bg-transparent">
					<a class="navbar-brand" href="login.php">
							<img src="img/water.png" width="150" height="120" class="d-inline-block align-top" alt="">
							 <h4>My Water</h4>
					</a>
					</nav>
		</div>
	<div class="container"><br/>
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($db, $_POST['username']);
	$pass = mysqli_real_escape_string($db, $_POST['password']);


	if($user == "" || $pass == "") {
		echo "<br/>";
	} else {
		$result = mysqli_query($db, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
					or die("Could not execute the select query.");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
		} else {
			header('Location: login.php');
		}

		if(isset($_SESSION['valid'])) {
			header('Location: index.php');			
		}
	}
} else {
?>

	<main class="bd-masthead" id="content" role="main">
  				
							<div class="col-md-8 order-md-2 text-center text-md-left pr-md-2">
							<strong><fieldset  style="width:100%" ><legend>Log-In here</legend>
								<form name="form1" method="post" action=""><br/>
									<div class="container">
							
										<div class="row">
											<div class="col-md-6 mb-3">
												<label for="validationServer01">username</label>
													<input type="text" name="username" class="form-control is-valid" id="validationServer01"  required>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6 mb-3">
												<label for="validationServer01">password</label>
													<input type="password" name="password" class="form-control is-valid" id="validationServer01"  required>
											</div>
										</div>
										<button class="btn btn-outline-success" type="submit" name="submit" value="Submit">log in</button><br/><br/>
								</form>
								</fieldset></strong>
      					</div>
    				</div>

<?php
}
?>
</div><br/><br/>

				 <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5"><strong>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</strong></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>+63-9215289760</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href=https://gmail.com/jdcarpo1998@gmail.com">jdcarpo1998@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

					<div class="footer text-center"><br>
						<img src="img/FB.png" width="60" height="60" alt="icon/FB.png"/>
						<img src="img/GIT.png" width="50" height="50" alt="icon/GIT.png"/>
						<img src="img/GMAIL.png" width="46" height="46" alt="icon/GMAIL.png"/>
						<img src="img/T.png" width="46" height="46" alt="icon/T.png"/>
						
		
					</div>
	
</body>
</html>
