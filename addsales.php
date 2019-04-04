<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?
include_once("connection.php");
//	$sql = "SELECT surname FROM customer";
//	$result = mysql_query($sql);
	
//	echo"<select name='surname'>";
//	while ($ row = mysql_fetch_array(result))
//	{
//		echo "<option value='" . $row['surname'] . "'>" . $row['surname'] . "</option>";
//	}
//	echo "</select>";
//?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Data for products</title>
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body {
			background-image: url(img/tubig.jpg);
			color: black;
			width: 100%;
		}
	</style>
</head>

<body>
		<div class="container">
					<nav class="navbar navbar-expand-lg navbar-success bg-transparent">
						<img src="img/water.png" width="100" height="100" alt="img/call.png"/>&nbsp;&nbsp;&nbsp;
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item active">
										<a class="nav-link" href="water sales.php">Water purified water refilling station <span class="sr-only">(current)</span></a>
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
<br/>
	<div class="container">
		<nav aria-label="breadcrumb" role="navigation">
			<div class="col-sm-5">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="view.php">View sales</a></li>
					
				</ol>
			</div>
		</nav>
	</div>
<br/>
<?

include_once("connection.php");

if(isset($_GET['Submit'])) {	
	$id = $_GET['id'];
	$customer_id = $_GET['sales'];
	$loginId = $_SESSION['login_id'];
	
		
	$result = mysqli_query($db, "INSERT INTO `sales` (`id`, `customer_id`, `Date`) VALUES ('$id', '$customer_id', CURRENT_TIMESTAMP);");
						
	/*INSERT INTO `sales` (`id`, `customer_id`, `Date`, `login_id`) VALUES ('2', '3', CURRENT_TIMESTAMP, '2');*/
								header("Location: rename.php?id=$id");

	} 
?>
<div class="container">
	<form action="addsales.php" method="GET" >
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label">ID</label>
				<div class="col-sm-5">
					<input type="number" name="id" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<!-- <div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label">customer</label>
				
		</div> -->
		Customer
          <select name="sales"  required>
            <option  value="">Add Sales</option>
          <?
            
              $sq = "SELECT * FROM customer";
              $records=mysqli_query($db,$sq);
              while($result=mysqli_fetch_assoc($records)){

          ?>
              <option value="<?php echo $result['id'] ?>"><?php echo $result['firstname']; ?></option>
          <?php
            }
            ?>
          </select>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label"></label>
				<div class="col-sm-5">
					<button class="btn btn-outline-warningbtn btn-sm btn-outline-info" type="submit" name="Submit" value="Add">add sales</button>
					<a class="btn btn-sm btn-outline-info" href="water sales.php">view sales</a>
				</div>
		</div>
		
	</form>
</div>
</br>
	
</body>
</html>
