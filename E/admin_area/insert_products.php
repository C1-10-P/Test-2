<?php

include('../includes/connect.php');
if(isset($_POST['insert_product'])){
    $product_title=$_POST['product_title'];

    // select data from database
    $select_query="SELECT * from products where product_title='$product_title'";
    $result_select=mysqli_query($con, $select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
      echo "<script>alert('Product is present!')</script>";
    }
    if($product_title==''){
      echo "<script>alert('No Product added!')</script>";
    }
    else{

      $insert_query= "INSERT INTO products(product_title) VALUES ('$product_title') ";
      $result=mysqli_query($con, $insert_query);
      if($result){
        // echo "<script>alert('No Product added!')</script>";
      
      echo "<script>alert('Product Added!')</script>"; }
    }
}?>
<h2 class="text-center">Insert Products</h2>
<form action="" method="post" class="mb-2">

<div class="input-group  w-90 mb-3">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="product_title"
   placeholder="Insert Products" aria-label="Products" 
   aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">

<input type="submit" class="bg-success border-o p-2 mx-1" 
name="insert_product" value="Add." >
<!-- <button class="bg-info p-1 my-2 border-0">Insert Products</button> -->
</div>
</form>