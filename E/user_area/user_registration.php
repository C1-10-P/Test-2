<?php include('../includes/connect.php');

// include('./functions/common_function.php');
?>
<?php 
if(isset($_POST['insert_user'])){
        
    $username=$_POST['user_username'];
    $user_email=$_POST['user_email'];
    
    $user_password=$_POST['user_password'];
    $confirm_user_password=$_POST['confirm_user_password'];
    $user_address=$_POST['user_address'];
    $user_mobile=$_POST['user_mobile'];
    $confirm_user_password=$_POST['confirm_user_password'];
    $user_ip=getIPaddress();
   
//    access images

$user_image=$_FILES['user_image']['name'];
//      access image temporary name
$user_image_tmp=$_FILES['user_image']['tmp_name'];

//  check empty condition, neglect product 'required' validation
if($genre_title=='' or $genre_description=='' or $genre_keywords=='' 
    or $genre_category=='' or $genre_price=='' or $genre_image1=='' or $genre_image2==''){
        echo "<script>alert('Fill In The Required Fields')</script>";
        exit();
} else{
    move_uploaded_file($temp_image1, "./genre_images/$genre_image1");
    move_uploaded_file($temp_image2, "./genre_images/$genre_image2");
// insert query.in order from db
    $insert_query="INSERT into user_table (username,user_email,user_password,
    user_image,user_ip,user_address,user_mobile )
    values ('$username','$user_email','$user_password','$user_image',
    '$user_ip','$user_address','$user_mobile')";

    $result_query=mysqli_query($con,$insert_query);
    if($result_query){
        echo "<script>alert('User Added!')</script>";
    }

}
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration.</title>
      <!-- bootstrap CSS link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
   <div class="container-fluid">
<h2 class="text-center">User Registration</h2>
<div class="row d-flex allign-items-center justify-content-center mt-3">
    <div class="col-lg-12 col-xl-6">
        <form action="" method="post" enctype="multipart/form-data">
            <!-- username field -->


            <div class="form-outline mb-4 w-50 m-auto">
                <label for="user_username">Username</label>
                <input type="text" name="user_username" id="user_username" class="form-control" 
                placeholder="Enter Username" autocomplete="off" required>
            
            </div>
<!-- 
     field -->
<div class="form-outline mb-4 w-50 m-auto">
        <label for="user_email">User Email.</label>
        <input type="email" name="user_email" id="user_email" class="form-control" 
        placeholder="Enter Email" autocomplete="off" required>
        

    </div>
<!-- image -->
<div class="form-outline mb-4 w-50 m-auto">
        <label for="user_image">User Image.</label>
        <input type="file" name="user_image" id="user_image" class="form-control" 
        placeholder="Add image" autocomplete="off" required>
        

    </div>
<!-- password -->
<div class="form-outline mb-4 w-50 m-auto">
        <label for="user_password">Password.</label>
        <input type="password" name="user_password" id="user_password" class="form-control" 
        placeholder="Enter password" autocomplete="off" required>
        

    </div>
<!-- confirm pass -->
<div class="form-outline mb-4 w-50 m-auto">
        <label for="confirm_user_password">Confirm Password.</label>
        <input type="password" name="confirm_user_password" id="confirm_user_password" class="form-control" 
        placeholder="Confirm Password" autocomplete="off" required>
        

    </div>
<!-- address field -->
<div class="form-outline mb-4 w-50 m-auto">
        <label for="user_address">User address.</label>
        <input type="text" name="user_address" id="user_address" class="form-control" 
        placeholder="Enter address" autocomplete="off" required>
        

    </div>
    <!-- mobile  -->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="user_mobile">User mobile.</label>
        <input type="text" name="user_mobile" id="user_mobile" class="form-control" 
        placeholder="Enter mobile" autocomplete="off" required>
        

    </div>
    <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_user" class="btn btn-secondary mb-2 px-3" value="Register">
            <p class="small fw-bold mt-3">Have an account? <a href="user_login.php">Login</a></p>
    </div>
   
        </form>
    </div>
</div>

   </div> 
</body>
</html>

