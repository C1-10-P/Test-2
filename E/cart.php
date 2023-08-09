<?php include('./includes/connect.php')?>
<?php include('./functions/common_function.php')?>

<?php include('includes/partials/header.php')?>
<style>
    .cart_img{
        width: 200px;
        height: 200px;
        object-fit: contain;
    }
    </style>
<body>
  

<!-- <h1>Books</h1> -->
<!-- navbar -->
<div class="container-fluid p-2">
    <?php include('includes/partials/nav.php')?>
<!-- first child -->
 
<!-- Navbar -->


<!-- Navbar -->
<!-- cart function -->
<?php cart();?>
<!-- second child -->
<nav class="nav.navbar.navbar-expand-lg navbar-dark bg-success text-secondary p-1">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
            <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_area/user_login.php">Login</a>
        </li>
</ul>
</nav>

<!-- third child -->
<div class="bg-light">
    <h3 class="text-center">The Reads.</h3>
    <p class="text-center">One stop place for your favourite books.</p>
</div>

<!-- 4th child -->
<div class="container">
    <div class="row">
        <form action="" method="post">
        <table class="table table-bordered text-center">
        
            <tbody>
                <?php 
                  global $con;
                  $ip=getIPaddress();
                  $total_price=0;
              
                  $cart_query="SELECT * from cart_details where ip_address='$ip'";
                  $result=mysqli_query($con, $cart_query);
                  $result_count=mysqli_num_rows($result);
                  if($result_count>0){
                    echo "
                    <thead>
                    <tr>
                        <th>Genre Title</th>
                        <th>Genre Image</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Remove</th>
                        <th colspan='2'>Operations</th>
                    </tr>
                </thead>
                    ";
                  while($row=mysqli_fetch_array($result)){
                    $genre_id=$row['genre_id'];
                    $select_genres="SELECT * from genres where genre_id='$genre_id'";
                    $result_genres=mysqli_query($con, $select_genres);
                    while($row_genre_price=mysqli_fetch_array($result_genres)){
              
                      $genre_price=array($row_genre_price['genre_price']);
                      $price_table=$row_genre_price['genre_price'];
                      $genre_title=$row_genre_price['genre_title'];
                      $genre_image1=$row_genre_price['genre_image1'];
                      $genre_values=array_sum($genre_price);
                      $total_price+=$genre_values;
                
                ?>
                <tr>
                    <td><?php echo $genre_title?></td>
                    <td><img src="./admin_area/images/<?php echo $genre_image1?>" alt="" class="cart_img"></td>
                    <td><input type="number" name="qty" id="" class="form-input w-60"></td> 
                    <!-- form-control/form-input. -->
                    <?php 
                    $ip=getIPaddress();
                    if(isset($_POST['update_cart'])){
                        $quantities=$_POST['qty'];
                        $update_cart="UPDATE cart_details set quantity=$quantities where ip_address='$ip'";
                        $result_cart=mysqli_query($con, $update_cart);
                        $total_price=$total_price * $quantities;
                    }
                    
                    ?>
                    <td><?php echo $price_table?></td>
                    <td><input type="checkbox" name="removeItem[]" value="<?php echo $genre_id?>"></td>
                    <td>
                       <!-- <button class="bg-info px-3 py-2 mx-3 border-0">Update</button> -->
                       <input type="submit" value="Update Cart" class="bg-info px-3 py-2 mx-3 border-0"
                       name="update_cart">
                       <!-- <button class="bg-info px-3 py-2 mx-3 border-0">Remove</button> -->
                       <input type="submit" value="Remove Cart " class="bg-info px-3 py-2 mx-3 border-0"
                       name="remove_cart">
                    </td>
                </tr>
                <?php   }}
                } 
                else{
                    echo "<h2 class='text-center text-danger'>Cart Is Empty.</h2>";
                }?>
            </tbody>
        </table>

                <!-- subtotal -->
            <div class="d-flex mb-3">
                <?php
                   $ip=getIPaddress();
                   $total_price=0;
               
                   $cart_query="SELECT * from cart_details where ip_address='$ip'";
                   $result=mysqli_query($con, $cart_query);
                   $result_count=mysqli_num_rows($result);
                   if($result_count>0){
                    echo "
                    
                    <h4 class='px-3'>Subtotal: <strong class='text-info'><?php total_cart_price(); ?>/-</strong></h4>
                    <input type='submit' value='More Books' class='bg-info px-3 py-2 mx-3 border-0'
                       name='more_books'>
                   
                    <button class='bg-success p-3 py-2 border-0'><a href='user_area/checkout.php' class='text-light text-decoration-none'>Checkout.</a></button>
                    ";
                   }
else{
    echo "
    <input type='submit' value='More Books' class='bg-info px-3 py-2 mx-3 border-0'
    name='more_books'>
    ";
   
}
 if(isset($_POST['more_books'])){
    echo "<script>window.open('index.php' , '_self')</script>";
 }               
                
                ?>


                </div>
        </div>
       
    </div>
    </form>
</div>

<!-- function to remove -->
<?php
function remove_cart(){
    global $con;
    if(isset($_POST['remove_cart'])){
        foreach($_POST['removeItem'] as $remove_id){
            echo $remove_id;
            $delete_query="DELETE from cart_details where genre_id=$remove_id";
            $run_delete=mysqli_query($con, $delete_query);
            if($run_delete){
                echo "<script>window.open('cart.php' , '_self')<\script>";
            }

        }
    }
}
echo $remove_item = remove_cart();
?>

<!-- last child -->


<?php include('includes/footer.php')?>
