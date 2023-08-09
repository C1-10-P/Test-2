<?php

// include('./includes/connect.php');

// get genres by using function calls in index.php
function getgenres() {
    global $con;

    if(!isset($_GET['category'])){
      if(!isset($_GET['product'])){
    
    $select_query="SELECT * from genres order by rand() limit 0,6";
    $result_query=mysqli_query($con, $select_query);
   

   //  $row=mysqli_fetch_assoc($result_query);
   //  echo $row['genre_title'];
     while($row=mysqli_fetch_assoc($result_query)){
     $genre_id=$row['genre_id'];
     $genre_title=$row['genre_title'];
     $genre_description=$row['genre_description'];
     $genre_image1=$row['genre_image1'];
     $genre_image2=$row['genre_image2'];
     $genre_price=$row['genre_price'];
        //  echo "
        //          <div class='col-md-4 me-auto mb-2'>
        //              <div class='card' >
        //                <img src='./admin_area/images/$genre_image1' class='card-img-top' alt='$genre_title'>
        //            <div class='card-body'>
        //                 <h5 class='card-title'>$genre_title</h5>
        //               <p class='card-text'>$genre_description</p>
        //               <p class='card-text'>Ksh $genre_price</p>
        //            <a href='genre_details.php?genre_id=$genre_id' class='btn btn-primary'>Show More.</a>
        //            <a href='#' class='btn btn-success'>Add to Cart.</a>
        //          </div>
        //        </div>
        //        </div>
        //  ";
 ;
     //
     echo" <div class='card mb-3 my-3 py-2' style='max-width: 540px;'>
     <div class='row '>
       <div class='col-md-4 me-auto py-3 my-3'>
         <img src='./admin_area/images/$genre_image1' class='img-fluid rounded-start' alt='$genre_title'>
       </div>
       <div class='col-md-8'>
         <div class='card-body'>
           <h5 class='card-title'>$genre_title</h5>
           <p class='card-text'>$genre_description</p>
           <p class='card-text'><small class='text-body-secondary'>Ksh $genre_price</small></p>
           <a href='genre_details.php?genre_id=$genre_id' class='btn btn-primary'>Show More.</a>
                 <a href='index.php?add_to_cart=$genre_id' class='btn btn-success'>Add to Cart.</a>
         </div>
       </div>
     </div>
   </div>
     "; 
    }

}
    }
}
?>

<!-- // getting all products -->
<?php

function get_all_products(){
  global $con;
  if(!isset($_GET['category'])){
    if(!isset($_GET['product'])){
  
  $select_query="SELECT * from genres order by rand()";
  $result_query=mysqli_query($con, $select_query);
 
   while($row=mysqli_fetch_assoc($result_query)){
   $genre_id=$row['genre_id'];
   $genre_title=$row['genre_title'];
   $genre_description=$row['genre_description'];
   $genre_image1=$row['genre_image1'];
   $genre_image2=$row['genre_image2'];
   $genre_price=$row['genre_price'];
       echo "
       <div class='card mb-3 my-3' style='max-width: 540px;'>
       <div class='row '>
         <div class='col-md-4 me-auto py-3 my-3'>
           <img src='./admin_area/images/$genre_image1' class='img-fluid rounded-start' alt='$genre_title'>
         </div>
         <div class='col-md-8'>
           <div class='card-body'>
             <h5 class='card-title'>$genre_title</h5>
             <p class='card-text'>$genre_description</p>
             <p class='card-text'><small class='text-body-secondary'>Ksh $genre_price</small></p>
             <a href='genre_details.php?genre_id=$genre_id' class='btn btn-primary'>Show More.</a>
             <a href='index.php?add_to_cart=$genre_id' class='btn btn-success'>Add to Cart.</a>
           </div>
         </div>
       </div>
     </div>
       ";
;
   // 
  }

}
  }
}
?>
<!-- getting unique categories -->
<?php
function get_unique_categories(){
  global $con;

  if(isset($_GET['category'])){
    $category_title=$_GET['category'];
    
  $select_query="SELECT * from genres where genre_id=$category_title";
  $result_query=mysqli_query($con, $select_query);
  $no_of_rows=mysqli_num_rows($result_query);
  if($no_of_rows==0){
    echo "<h2 class='text-center text-danger'>Unavailable in stock.</h2>";
  }
   while($row=mysqli_fetch_assoc($result_query)){
   $genre_id=$row['genre_id'];
   $genre_title=$row['genre_title'];
   $genre_description=$row['genre_description'];
   $genre_image1=$row['genre_image1'];
   $genre_image2=$row['genre_image2'];
   $genre_price=$row['genre_price'];

       echo "
       <div class='card mb-3 my-3' style='max-width: 540px;'>
       <div class='row '>
         <div class='col-md-4 me-auto py-3 my-3'>
           <img src='./admin_area/images/$genre_image1' class='img-fluid rounded-start' alt='$genre_title'>
         </div>
         <div class='col-md-8'>
           <div class='card-body'>
             <h5 class='card-title'>$genre_title</h5>
             <p class='card-text'>$genre_description</p>
             <p class='card-text'><small class='text-body-secondary'>Ksh $genre_price</small></p>
             <a href='genre_details.php?genre_id=$genre_id' class='btn btn-primary'>Show More.</a>
             <a href='index.php?add_to_cart=$genre_id' class='btn btn-success'>Add to Cart.</a>
           </div>
         </div>
       </div>
     </div>
       ";
;
   // 
  }

}
}
    ?>

<!-- getting unique product -->
<?php
function get_unique_products(){
    global $con;

    if(isset($_GET['product'])){
      $product_id=$_GET['product'];

    $select_query="SELECT * from genres where genre_id=$product_id";
    $result_query=mysqli_query($con, $select_query);
    $no_of_rows=mysqli_num_rows($result_query);
    if($no_of_rows==0){
      echo "<h2 class='text-center text-danger'>Unavailable in stock.</h2>";
    }
     while($row=mysqli_fetch_assoc($result_query)){
     $genre_id=$row['genre_id'];
     $genre_title=$row['genre_title'];
     $genre_description=$row['genre_description'];
     $genre_image1=$row['genre_image1'];
     $genre_image2=$row['genre_image2'];
     $genre_price=$row['genre_price'];

         echo "
         <div class='card mb-3 my-3' style='max-width: 540px;'>
         <div class='row '>
           <div class='col-md-4 me-auto py-3 my-3'>
             <img src='./admin_area/images/$genre_image1' class='img-fluid rounded-start' alt='$genre_title'>
           </div>
           <div class='col-md-8'>
             <div class='card-body'>
               <h5 class='card-title'>$genre_title</h5>
               <p class='card-text'>$genre_description</p>
               <p class='card-text'><small class='text-body-secondary'>Ksh $genre_price</small></p>
               <a href='genre_details.php?genre_id=$genre_id' class='btn btn-primary'>Show More.</a>
               <a href='index.php?add_to_cart=$genre_id' class='btn btn-success'>Add to Cart.</a>
             </div>
           </div>
         </div>
       </div>
         ";
 ;
     // 
    }
}
    }
    ?>

<!-- get products by using function calls in index.php -->
<?php 
function getproducts(){
    global $con;
    $select_products="SELECT * from products ";
    $result_products=mysqli_query($con, $select_products);
    $row_data=mysqli_fetch_assoc($result_products);
    // echo $row_data['product_title']
    
    while($row_data=mysqli_fetch_assoc($result_products)) {
      # code...
      $product_title=$row_data['product_title'];
      $product_id=$row_data['product_id'];
      // echo $product_title;
  
      echo "<li class='nav-item'>  
      <a href='index.php?product=$product_id' class='nav-link text-light'>$product_title</a>
      </li>";
    }
}

?>
<!-- get categories by using function calls in index.php -->
<?php 
function getcategories(){

    global $con;
    $select_categories="SELECT * from categories ";
  $result_categories=mysqli_query($con, $select_categories);
  $row_data=mysqli_fetch_assoc($result_categories);
  // echo $row_data['product_title']
  
  while($row_data=mysqli_fetch_assoc($result_categories)) {
    # code...
    $category_title=$row_data['category_title'];
    $category_id=$row_data['category_id'];
    // echo $category_title;

    echo "<li class='nav-item'>  
    <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
    </li>";
  }

}
?>

<!-- search genre-->
<?php
function search_genre(){
  global $con;

    if(isset($_GET['search_data_genre'])){
      $search_data_value=$_GET['search_data'];
      $search_query="SELECT * FROM  genres WHERE genre_keywords like '%$search_data_value%' ";
      $result_query=mysqli_query($con, $search_query);
   
  
      //  $row=mysqli_fetch_assoc($result_query);
      //  echo $row['genre_title'];

     while($row=mysqli_fetch_assoc($result_query)){
     $genre_id=$row['genre_id'];
     $genre_title=$row['genre_title'];
     $genre_description=$row['genre_description'];
     $genre_keywords=$row['genre_keywords'];
     $genre_image1=$row['genre_image1'];
     $genre_image2=$row['genre_image2'];
     $genre_price=$row['genre_price'];
         echo "
         <div class='card mb-3 my-3' style='max-width: 540px;'>
         <div class='row '>
           <div class='col-md-4 me-auto py-3 my-3'>
             <img src='./admin_area/images/$genre_image1' class='img-fluid rounded-start' alt='$genre_title'>
           </div>
           <div class='col-md-8'>
             <div class='card-body'>
               <h5 class='card-title'>$genre_title</h5>
               <p class='card-text'>$genre_description</p>
               <p class='card-text'><small class='text-body-secondary'>Ksh $genre_price</small></p>
               <a href='genre_details.php?genre_id=$genre_id' class='btn btn-primary'>Show More.</a>
               <a href='index.php?add_to_cart=$genre_id' class='btn btn-success'>Add to Cart.</a>
             </div>
           </div>
         </div>
       </div>
         ";
 ;
     // 
    }

}
}
?>

<!-- view genre details -->
<?php
function view_genre_details(){
  global $con;
if(isset($_GET['genre_id'])){
    if(!isset($_GET['category'])){
      if(!isset($_GET['product'])){
        $genre_id=$_GET['genre_id'];
    
    $select_query="SELECT * from genres where genre_id=$genre_id ";
    $result_query=mysqli_query($con, $select_query);

     while($row=mysqli_fetch_assoc($result_query)){
     $genre_id=$row['genre_id'];
     $genre_title=$row['genre_title'];
     $genre_description=$row['genre_description'];
     $genre_image1=$row['genre_image1'];
     $genre_image2=$row['genre_image2'];
     
     $genre_price=$row['genre_price'];

     
         echo "
         <div class='card mb-3 my-3' style='max-width: 540px;'>
             <div class='row '>
                  <div class='col-md-4 bg-secondary me-auto py-3 my-3'>
                    <img src='./admin_area/images/$genre_image1' class='img-fluid rounded-start' alt='$genre_title'>
                  </div>
                  <div class='col-md-8'>
                    <div class='card-body'>
                      <h5 class='card-title'>$genre_title</h5>
                      <p class='card-text'>$genre_description</p>
                      <p class='card-text'><small class='text-body-secondary'>Ksh $genre_price</small></p>
                      <a href='/' class='btn btn-primary'>Go home.</a>
                      <a href='index.php?add_to_cart=$genre_id' class='btn btn-success'>Add to Cart.</a>
                    </div>
                  </div>
                </div>
       </div>

               <div class='col-md-8'>
           
                      <div class='row'>
                      <div class='col-md-12'>
                        <h4 class='text-center text-primary mb-5'>Also Available.</h4>
                      </div>
                      <div class='col-md-4 mb-6'>
                        <a href=''>
                        <img src='admin_area/images/$genre_image1' class='card-img-top' alt='$genre_title'>
                        </a>
                    </div>

                    <div class='col-md-4 mb-6'>
                        <a href=''>
                        <img src='admin_area/images/$genre_image2' class='card-img-top' alt='$genre_title'>
                        </a>
                    </div>

                    <div class='col-md-4 mb-6'>
                    <a href=''>
                    <img src='admin_area/images/$genre_image2' class='card-img-top' alt='$genre_title'>
                    </a>
                </div>
                   

        </div>     
         ";
 ;
     // 
    }

}
    }

}
}
?>

<!-- ip addresses. -->
<?php 
function getIPaddress(){
  // check if ip is from share internet/

if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
  $ip=$_SERVER['HTTP_CLIENT_IP'];

}
// IF IP IS FROM PROXY.
elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
// CHECK IF IP IS FROM REMOTE ADDRESS.
else{
  $ip=$_SERVER['REMOTE_ADDR'];
}
return $ip;


}
// $ip = getIPaddress();
// echo "User IP address is - ".$ip;

?>

<!-- add to cart function -->
<?php
function cart(){
  if(isset($_GET['add_to_cart'])){
    global $con;
    $ip = getIPaddress();
    $get_genre_id=$_GET['add_to_cart'];
    $select_query="SELECT * from cart_details where ip_address='$ip' and genre_id=$get_genre_id";
    $result_query=mysqli_query($con, $select_query);
    $no_of_rows=mysqli_num_rows($result_query);
    if($no_of_rows>0){
      echo "<script>alert('Item is present in Cart')</script>";
      echo "<script>window.open('index.php','_self')</script>";
    }else{
      $insert_query="INSERT into cart_details (genre_id,ip_address,quantity) values ($get_genre_id,'$ip',0)";
      $result_query=mysqli_query($con, $insert_query);
      if($result_query){
        echo "<script>alert('Added to Cart!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    }
  }
}
?>
<!-- display running sum of added cart items -->
<?php
  function cart_items(){
    if(isset($_GET['add_to_cart'])){
      global $con;
      $ip = getIPaddress();
     
      $select_query="SELECT * from cart_details where ip_address='$ip'";
      $result_query=mysqli_query($con, $select_query);
      $count_cart_items=mysqli_num_rows($result_query);
    
      }else{
        global $con;
        $ip = getIPaddress();
       
        $select_query="SELECT * from cart_details where ip_address='$ip'";
        $result_query=mysqli_query($con, $select_query);
        $count_cart_items=mysqli_num_rows($result_query);
       
      }
  echo  $count_cart_items;
    }
?>

<!-- display running sum of price. -->
<?php
  function total_cart_price(){
    global $con;
    $ip=getIPaddress();
    $total_price=0;

    $cart_query="SELECT * from cart_details where ip_address='$ip'";
    $result=mysqli_query($con, $cart_query);
    while($row=mysqli_fetch_array($result)){
      $genre_id=$row['genre_id'];
      $select_genres="SELECT * from genres where genre_id='$genre_id'";
      $result_genres=mysqli_query($con, $select_genres);
      while($row_genre_price=mysqli_fetch_array($result_genres)){

        $genre_price=array($row_genre_price['genre_price']);
        $genre_values=array_sum($genre_price);
        $total_price+=$genre_values;
    }
  }
  echo $total_price;
}
?>