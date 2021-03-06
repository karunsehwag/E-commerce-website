<?php
session_start();
 $name=$_SESSION["name"];
if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true)){
    header("location: index.html");
    exit;
}
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Pixie - Products</title>

   
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


   
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>
    
  

   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/images/header-logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="products.php">Products
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
			 <li class="nav-item">
              <a class="nav-link"><?php echo $name; ?></a>
            </li>
			 <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
			
          </ul>
        </div>
      </div>
    </nav>

  
    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Featured Items</h1>
            </div>
          </div>
          <div class="col-md-8 col-sm-12">
            <div id="filters" class="button-group">
              <button class="btn btn-primary" data-filter="*">All Products</button>
              <button class="btn btn-primary" data-filter=".new">Newest</button>
              <button class="btn btn-primary" data-filter=".low">Low Price</button>
              <button class="btn btn-primary" data-filter=".high">Hight Price</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="featured container no-gutter">

        <div class="row posts">
            <div id="1" class="item new col-md-4">
              <a href="single-product.php">
                <div class="featured-item">
                  <img src="assets/images/product-01.jpg" alt="">
                  <h4>Proin vel ligula</h4>
                  <h6>1500</h6>
                </div>
              </a>
            </div>
            <div id="2" class="item high col-md-4">
              <a href="single-product.php">
                <div class="featured-item">
                  <img src="assets/images/product-02.jpg" alt="">
                  <h4>Erat odio rhoncus</h4>
                  <h6>2500</h6>
                </div>
              </a>
            </div>
            <div id="3" class="item low col-md-4">
              <a href="single-product.php">
                <div class="featured-item">
                  <img src="assets/images/product-03.jpg" alt="">
                  <h4>Integer vel turpis</h4>
                  <h6>2400</h6>
                </div>
              </a>
            </div>
            <div id="4" class="item low col-md-4">
              <a href="single-product.php">
                <div class="featured-item">
                  <img src="assets/images/product-04.jpg" alt="">
                  <h4>Sed purus quam</h4>
                  <h6>5500</h6>
                </div>
              </a>
            </div>
            <div id="5" class="item new high col-md-4">
              <a href="single-product.php">
                <div class="featured-item">
                  <img src="assets/images/product-05.jpg" alt="">
                  <h4>Morbi aliquet</h4>
                  <h6>3500</h6>
                </div>
              </a>
            </div>
            <div id="6" class="item new col-md-4">
              <a href="single-product.php">
                <div class="featured-item">
                  <img src="assets/images/product-06.jpg" alt="">
                  <h4>Urna ac diam</h4>
                  <h6>$65.00</h6>
                </div>
              </a>
            </div>
            <div id="7" class="item new high col-md-4">
              <a href="single-product.php">
                <div class="featured-item">
                  <img src="assets/images/product-03.jpg" alt="">
                  <h4>Proin eget imperdiet</h4>
                  <h6>4500</h6>
                </div>
              </a>
            </div>
            <div id="8" class="item low new col-md-4">
              <a href="single-product.php">
                <div class="featured-item">
                  <img src="assets/images/product-02.jpg" alt="">
                  <h4>Nullam risus nisl</h4>
                  <h6>4500</h6>
                </div>
              </a>
            </div>
            <div id="9" class="item new col-md-4">
              <a href="single-product.php">
                <div class="featured-item">
                  <img src="assets/images/product-01.jpg" alt="">
                  <h4>Cras tempus</h4>
                  <h6>1600</h6>
                </div>
              </a>
            </div>
        </div>
    </div>

    <div class="page-navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul>
              <li class="current-page"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
   
    <div class="subscribe-form">
      <div class="container">
        <div class="row">
          
         
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="logo">
              <img src="assets/images/header-logo.png" alt="">
            </div>
          </div>
          <div class="col-md-12">
            <div class="footer-menu">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">How It Works ?</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="social-icons">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
   
   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


   
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; 
      function clearField(t){                  
      if(! cleared[t.id]){                   
          cleared[t.id] = 1;  
          t.value='';         
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>