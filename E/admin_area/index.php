<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin DashBoard</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="../style.css">
<!-- fa -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.admin_image{
    width: 10%;
    object-fit: contain;
}

</style>

<body>
<!-- navbar    -->
<div class="container-fluid p-0">
    <!-- 1st child -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
        <img src="images/logo.png" alt="" class="logo">
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item">
               <a href="" class="nav-link text-primary">Welcome Guest</a>
                </li> 
            </ul>
        </nav>

    </div>
</nav>
<!-- 2nd child -->
<div class="bg-light">
    <h3 class="text-center p-2">Manage Details.</h3>
</div>
<!-- 3rd child -->
<div class="row">
    <div class="col-md-12 bg-dark p-1 d-flex align-items-center">
    <div>
        <!-- <a href="#"><img src="images/IMG_8723.jpg" alt="" class="admin_image"></a> -->
            <p class="text-light text-center p-2">Kui</p>
    </div>
    </div>
    
</div>
<div class="button text-center">
    <button><a href="index.php?insert_product" class="nav-link text-light bg-dark my-1">Insert Products.</a></button>
    <button><a href="/" class="nav-link text-light bg-dark my-1">View Products.</a></button>
    <button><a href="insert_genre.php" class="nav-link text-light bg-dark my-1">Insert Genre.</a></button>
    <button><a href="/" class="nav-link text-light bg-dark my-1">View Genres.</a></button>
    <button><a href="index.php?insert_category" class="nav-link text-light bg-dark my-1">Insert Categories.</a></button>
    <button><a href="/" class="nav-link text-light bg-dark my-1">View Categories.</a></button>
    <button><a href="/" class="nav-link text-light bg-dark my-1">Orders.</a></button>
    <button><a href="/" class="nav-link text-light bg-dark my-1">Payments.</a></button>
    <button><a href="/" class="nav-link text-light bg-dark my-1">Logged in Users.</a></button>
    <button><a href="/" class="nav-link text-light bg-dark my-1">Logout.</a></button>
    


</div>

</div>
    
<!-- 4th child -->
<div class="container m-6 p-2">
    <?php
    if(isset($_GET['insert_category'])){

    include('insert_categories.php');
    }
    if(isset($_GET['insert_product'])){

        include('insert_products.php');
            }
    ?>
</div>

<!-- JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>