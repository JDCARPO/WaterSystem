<?php
session_start();
require 'connection.php';
	$result=mysqli_query($db,"SELECT * FROM sales_product,products,sales,customer Where sales_product.product_id = products.id and sales_product.id=sales.id and sales.customer_id=customer.id"); 
	?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	<style>

	<title>Water</title>
	<style>
		body {
			background-image: url(img/tubig.jpg);
			background-size: cover;
			color: black;
			width: 100%;
		}
	</style>
</head>
<body><br><br>
	<center>
    <div class="container">
			<h2>Sale Product Record</h2>
			<div class="container">
      <table>
      	<tr bgcolor='teal'>
      		<th>Transaction</th>
      		<th>Customer Name</th>
      		<th>product</th>
      		<th>Quantity</th>
      		<th>Unit</th>
      		<th>Price</th>
            <th colspan='2'>Action</th>
      	</tr>
	       	<?php $i=1;
      		while($information=mysqli_fetch_array($result)){
      			echo "<tr>";?>
      					<td><?php echo $information['transaction'] ?></td>
						<td><?php echo $information['firstname'] ?></td>
						<td><?php echo $information['description'] ?></td>
						<td><?php echo $information['quantity'] ?></td>
						<td><?php echo $information['unit'] ?></td>
						<td><?php echo $information['price'] ?></td>
						<td>
								<a href="deleterename.php?delete_id=<?php echo $information['transaction']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="edit_customer_record.php?edit_id=<?php echo $information['id']; ?>">Edit</i></a>
						</td>
					</tr>


					</tr>
    	<?php
    		}
      	?>
      </table>
  </div>
</div><br>
	<div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label"></label>
				<div class="col-sm-5">
					<a class="btn btn-sm btn-outline-info" href="index.php">Home</a>
					<a class="btn btn-sm btn-outline-info" href="addsales.php">Add New Sales</a>
				</div>
		</div>
	</label>

 </center>
</body>
</html>