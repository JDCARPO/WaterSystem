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
	
	$description = $_POST['description'];
	$price = $_POST['price'];
	$unit = $_POST['unit'];
	
	$result = mysqli_query($db, "UPDATE products SET description='$description', price='$price', unit='$unit' WHERE id=$id");
		
		header("Location: view.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($db, "SELECT * FROM products WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$description = $res['description'];
	$price = $res['price'];
	$unit = $res['unit'];
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
					<li class="breadcrumb-item"><a href="view.php">View product</a></li>
					<li class="breadcrumb-item active" aria-current="page">Edit product</li>
				</ol>
			</div>
		</nav>
	</div>
<br/><br/><br/>
	<div class="container">
		<form name="form1" method="post" action="edit.php">
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">description</label>
					<div class="col-sm-5">
						<input type="text" name="description" value="<?php echo $description;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">price</label>
					<div class="col-sm-5">
						<input type="text" name="price" value="<?php echo $price;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">unit</label>
					<div class="col-sm-5">
						<input type="text" name="unit" value="<?php echo $unit;?>" class="form-control" id="colFormLabel">
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
