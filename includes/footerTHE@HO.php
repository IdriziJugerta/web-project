
<DOCTYPE! html>
  <html>
  
  <head>
  <title>THE@HO </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
  <link rel="stylesheet" type="text/css" href="includes\footer.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  
  </head>

  <body>
  
  <section id="footer">
      <div class="container">
      <div class="row">
      
     
  <footer class="page-footer font-small mdb-color pt-4"></footer>
  
      <!-- Footer Links -->
      <div class="container text-center text-md-left">
    
        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">
    
          <!-- Grid column -->
         
          <div class="col-md-3">
              <img src="./images/logo.png" class="footer-logo">
              
              </div>
          <!-- Grid column -->
    
          <hr class="w-100 clearfix d-md-none">
    
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Teatrot ne Tirane</h6>
            <p>
              <a href="./maps/ArtTurbina.html">ArtTurbina</a>
            </p>
            <p>
              <a href="./maps/metropol.html">Metropol</a>
            </p>
            <p>
              <a href="./maps/TK.html">Teatri Kombetar</a>
            </p>
            <p>
              <a href="./maps/TEksperimental.html">Teatri Eksperimental</a>
            </p>
          </div>
          <!-- Grid column -->
    
          <hr class="w-100 clearfix d-md-none">
    
          <!-- Grid column -->
         

          
    
          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none">
    
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p>
              <i class="fas fa-home mr-3"></i>Rruga e Barrikadave, Tirane, Shqiperi</p>
            <p>
              <i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
            <p>
              <i class="fas fa-phone mr-3"></i> + 01 2345 6678</p>
            <p>
              <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
    
        </div>
        <!-- Footer links -->
    
        <hr>
    
        <!-- Grid row -->
        <div class="row d-flex align-items-center">
    
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8">
    
            <!--Copyright-->
            <p class="text-center text-md-left">© 2020 Copyright:
             
                <strong>  Aesthetic Coders</strong>
             
            </p>
    
          </div>
          <!-- Grid column -->
    
          <!-- Grid column -->
          <div class="col-md-5 col-lg-4 ml-lg-0">
    
            <!-- Social buttons -->
            <div class="text-center text-md-right">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <a class="btn-floating btn-sm rgba-white-slight mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating btn-sm rgba-white-slight mx-1">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating btn-sm rgba-white-slight mx-1">
                    <i class="fab fa-google-plus-g"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating btn-sm rgba-white-slight mx-1">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
    
          </div>
          <!-- Grid column -->
    
        </div>
        <!-- Grid row -->
      </div>
      <!-- Footer Links -->
      <?php if((!isset($_SESSION['userId'])) ){?>
      <ul class="center">
          <li class="list-inline-item">
            <h5 class="mb-1">Register for free</h5>
          </li>
          <li class="list-inline-item">
            <a href="registration.php" class="btn btn-danger btn-rounded">Sign up!</a>
          </li>
        </ul>
      <?php } ?>
    </footer>
    <!-- Footer -->
  
  </div>
  </section>
  </body>
  </html>
  