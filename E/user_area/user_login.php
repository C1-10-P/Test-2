<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login.</title>
      <!-- bootstrap CSS link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
   <div class="container-fluid">
<h2 class="text-center">User login</h2>
<div class="row d-flex allign-items-center justify-content-center mt-3">
    <div class="col-lg-12 col-xl-6">
        <form action="" method="post" enctype="multipart/form-data">
            
<!-- username field -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="user_username">Username</label>
                <input type="text" name="user_username" id="user_username" class="form-control" 
                placeholder="Enter Username" autocomplete="off" required>
            </div>

<!-- password -->
<div class="form-outline mb-4 w-50 m-auto">
        <label for="user_password">Password.</label>
        <input type="password" name="user_password" id="user_password" class="form-control" 
        placeholder="Enter password" autocomplete="off" required>
    </div>

    <!-- button -->
    <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="existing_user" class="btn btn-success mb-2 px-3" value="Login">
            <p class="small fw-bold mt-3">Don't have an Account? <a href="user_registration.php">Register</a></p>
    </div>
   
        </form>
    </div>
</div>

   </div> 
</body>
</html>

