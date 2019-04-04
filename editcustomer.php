<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php

include_once("connection.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$firstname = $_POST['firstname'];
	$surname = $_POST['surname'];
	$contact_number = $_POST['contact_number'];
	$address = $_POST['address'];
	
	$result = mysqli_query($db, "UPDATE customer SET firstname='$firstname', surname='$surname', contact_number='$contact_number' , address='$address' WHERE id=$id");
		
		header("Location: customer.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($db, "SELECT * FROM customer WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$firstname = $res['firstname'];
	$surname = $res['surname'];
	$contact_number = $res['contact_number'];
	$address = $res['address'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Water Refilling Station</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body {
			background-image: url(img/splash.jpg);
			color: black;
			width: 100%;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-success bg-dark">
		<img src="img/water.png" width="50" height="50" alt="img/call.png"/>&nbsp;&nbsp;&nbsp;
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">water refilling station <span class="sr-only">(current)</span></a>
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
<br/>
	<div class="container">
		<nav aria-label="breadcrumb" role="navigation">
			<div class="col-sm-5">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="customer.php">View product</a></li>
					<li class="breadcrumb-item active" aria-current="page">Edit product</li>
				</ol>
			</div>
		</nav>
	</div>
<br/><br/><br/>
	<div class="container">
		<form name="form1" method="post" action="editcustomer.php">
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">Firstname</label>
					<div class="col-sm-5">
						<input type="text" name="firstname" value="<?php echo $firstname;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">Surname</label>
					<div class="col-sm-5">
						<input type="text" name="surname" value="<?php echo $surname;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">Contact Number</label>
					<div class="col-sm-5">
						<input type="number" name="contact_number" value="<?php echo $contact_number;?>" class="form-control" id="colFormLabel">
					</div>
			</div><div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">address</label>
					<div class="col-sm-5">
						<input type="text" name="address" value="<?php echo $surname;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label"></label>	
					<div class="col-sm-10">
						<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
							<button class="btn btn-outline-success" type="submit" name="update" value="Update">update</button>
					</div>
			</div>
		</form>
	</div>
</br/>
	
</body>
</html>
