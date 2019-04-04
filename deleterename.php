<?php

  require 'connection.php';

  $contact_id = $_GET['delete_id'];
  $delete= "Delete from sales_product where transaction = ".$contact_id;
  if (mysqli_query($db, $delete)) {
    header('location: viewsalesproduct.php');
  }else {
    echo "Error: " . $insert_information . "<br>" . mysqli_error($db);
  }


?>