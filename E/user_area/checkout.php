<?php include('../includes/connect.php')?>

<?php include('../includes/partials/header.php')?>
<body>
  

<!-- <h1>Books</h1> -->
<!-- navbar -->
<div class="container-fluid p-2">

<!-- first child -->
 
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="/">
        <img
          src="./admin_area/images/logo2.png"
          height="15"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">BLOG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product.php">BOOKSTORE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">CONTACT US</a>
        </li>
    
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    

      <!-- Notifications -->
      <div class="dropdown">
        <a
          class="text-reset me-3 dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-bell"></i>
          <span class="badge rounded-pill badge-notification bg-danger"></span>
        </a>
       
      </div>
      <form class="d-flex" action="search.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
     <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_genre">
      </form>
     
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- second child -->
<!-- <nav class="nav.navbar.navbar-expand-lg navbar-dark bg-success text-secondary p-1">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
            <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_area/user_login.php">Login</a>
        </li>
</ul>
</nav> -->

<!-- third child -->
<div class="bg-light">
    <h3 class="text-center">The Reads.</h3>
    <p class="text-center">One stop place for your favourite books.</p>
</div>

<!-- 4th child -->
<div class="row px-1">
<div class="col-md-12">
    <div class="row">
        <?php
        if(!isset($_SESSION['username'])){
            include('user_login.php');
        }else{
            include('./payment.php');

        }
        ?>
    </div>
</div>

</div>

<!-- last child -->


<?php include('../includes/footer.php')?>