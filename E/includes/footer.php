<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none fw-bold d-lg-block">
      <span>THE READS:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <!-- <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a> -->
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5 bg-dark">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>
          </h6>
          <p>
           <h4 class="class=text-reset fw-bold">Categories.</h4>
          </p>
          <div class="col-md-12 text-dark p-0">
         <a href="connect.php"> <?php
             getcategories(); ?>
          </p>
          </a>
          </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <!-- <h6 class="class=text-reset fw-bold mb-4">
          Products
          </h6> -->
          <p>
           <h4 class="class=text-reset fw-bold">Products.</h4>
          </p>
          <p>
          <div class="col-md-12 text-dark p-0">
         <a href="connect.php">
         <?php
             getproducts(); ?>
          
          </p>
         </a>
         
          </div>
        </div>

        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <!-- <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6> -->
          <p>
           <h4 class="class=text-reset fw-bold">Useful Links.</h4>
          </p>
          <p>
            <a href="#!" class="text-reset">Returns</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Your Books</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <!-- <h6 class="text-uppercase fw-bold mb-4">Contact</h6> -->
          <p>
           <h4 class="class=text-reset fw-bold">Contact us!</h4>
          </p>
          <p><i class="fas fa-home me-3"></i> KITALE, 3736-30200. KENYA</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            fadhilisam23@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> +254 740567299</p>
          <!-- <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p> -->
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 :
    <a class="text-reset fw-bold" href="">Made By Kui.</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>