<?php include('./includes/connect.php')?>
<?php include('./functions/common_function.php')?>

<?php include('includes/partials/header.php')?>
<body>
  

<!-- <h1>Books</h1> -->
<!-- navbar -->
<!-- cart function -->
<?php
 cart(); ?>
<div class="container-fluid p-2">

<!-- first child -->
<?php include('includes/partials/nav.php')?>
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

<!-- fourth child -->
<div class="row bg-light">
    <div class="col-md-10 bg-light">
     <!-- products -->
      <div class="row px-3 bg-light" >
     <?php
  
  get_all_products();
          get_unique_categories();
          get_unique_products();

          ?> 
        </div>
    </div>
  </div>

 </div>
<!-- 5th child -->

 <!-- <div class="col-md-2 bg-dark p-0">
  <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">  
            <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
        </li>
        <?php
  getcategories();
  ?>
        
    </ul>

    <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">  
            <a href="#" class="nav-link text-light"><h4>Products</h4></a>
        </li>
  <?php
  getproducts();
  ?>  
    </ul> -->
    

  <!-- side nav -->
    

</div>

<!-- last child -->


<?php include('includes/footer.php')?>