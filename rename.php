<?php
  session_start();
  require 'connection.php';
  if(isset($_GET['save'])){
  $id = $_GET['id'];
  $product_id = $_GET['product_id'];
  $quantity = $_GET['quantity'];
/*  $unit = $_GET['unit'];
  $price = $_GET['price'];*/

  
  
  
  
 
    $result = "INSERT INTO `sales_product` (id, `product_id`, `quantity`) VALUES ($id, '$product_id', '$quantity')";
    mysqli_query($db,$result);
    header('location: viewsalesproduct.php');


    

 }

      


?>
<style>
    body {
      background-image: url(img/tubig.jpg);
      color: black;
      width: 100%;
    }
  </style>





<!DOCTYPE html>
<html>
<head>
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
</head>
	<title>water</title>
<body>
          

      <div class="form-row">
        <div class= "col-md-6">
    <table border="2px" width="70%" style="margin: 10px 100px;" >
      <td>
  </div>
  <div class= "col-md-6">
		<h1>Water System</h1> 
</div>

<div class="form-group row">
  <form action="rename.php" method='GET'>
      <label for="colFormLabel" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-5">
          <input type="text" name="id" class="form-control" value="<?php echo $id = $_GET['id'] ?>">
        </div>
 <div class= "col-md-6">
          Product
          <select name="product_id"  required>
            <option  value="">Add Sales</option>
          <?
            
              $sq = "SELECT * FROM products";
              $records=mysqli_query($db,$sq);
              while($result=mysqli_fetch_assoc($records)){

          ?>
              <option value="<?php echo $result['id'] ?>"><?php echo $result['description']; ?></option>
          <?php
            }
            ?>
        
          </select>
 </div>
 <div class="form-group row">
      <label for="colFormLabel" class="col-sm-2 col-form-label">Quantity</label>
        <div class="col-sm-5">
          <input type="text" name="quantity" class="form-control" id="colFormLabel" required>
        </div>
        <!-- <div class= "col-md-6">
          Unit
          <select name="unit"  required>
            <option  value="">Select Unit</option>
          <?
            
              $sq = "SELECT * FROM products";
              $records=mysqli_query($db,$sq);
              while($result=mysqli_fetch_assoc($records)){
        
          ?>
              <option value="<?php echo $result['unit'] ?>"><?php echo $result['unit']; ?></option>
          <?php
            }
            ?>
        
          </select>
         </div> -->
        <!-- <div class="form-group row">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Unit</label>
        <div class="col-sm-5">
          <input type="text" name="unit" class="form-control" id="colFormLabel" required>
        </div> -->
         <!-- <div class= "col-md-6">
          Price
          <select name="price"  required>
            <option  value="">Select Price</option>
          <?
            
              $sq = "SELECT * FROM products";
              $records=mysqli_query($db,$sq);
              while($result=mysqli_fetch_assoc($records)){
         
          ?>
              <option value="<?php echo $result['price'] ?>"><?php echo $result['price']; ?></option>
          <?php
            }
            ?>
                 
          </select>
          </div> -->
        <!-- <div class="form-group row">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-5">
          <input type="text" name="price" class="form-control" id="colFormLabel" required>
        </div>
        
        <br> -->
         <div class= "col-md-6">
    			<form class="myform" method="post">
				    <input class="btn" type="submit" name ="save" id="save_btn" value="Create"/>
				    <a href ="viewsalesproduct.php"><input class="btn" type="button" id="read_btn" value="Read"/><br></a>
          </form>
  			</form>     
        </td>
      </table>
    </div>
  


    
</div>
  
  </body>
</html>

