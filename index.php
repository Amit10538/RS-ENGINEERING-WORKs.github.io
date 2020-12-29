<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap CSS -->
    <link rel='stylesheet' href='css/bootstrap.min.css'>

    <!-- Font Awsome -->
    <link rel='stylesheet' href='css/all.min.css'>
    
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel='stylesheet' href='css/custom.css'>

    <title>RS ENGINEERING WORK'S</title>

</head>

    <body>
        <!-- Navigation Start -->
    <nav class='navbar navbar-expand-sm navbar-dark bg-dark pl-3 fixed-top'>
            <a href="index.php" class="navbar-brand"> RS ENGINEERING WORK's </a>
            <span class="navbar-text"> Goregoan(West) </span>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mymenu">
            <ul class="navbar-nav pl-5 custom-nav">
            <li class="nav-item"><a href="index.php" class="nav-link"> Home </a></li>
            <li class="nav-item"><a href="#Services" class="nav-link"> Service </a></li>
            <li class="nav-item"><a href="#Products" class="nav-link"> Products </a></li>
            <li class="nav-item"><a href="#registration" class="nav-link"> Rsegistration </a></li>
            <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link"> Login </a></li>
            <li class="nav-item"><a href="#Contact" class="nav-link"> Contact </a></li>
            </ul>
            </div>
            
        </nav> <!-- Navigation ends -->

        <!-- Start Header jumbotron -->
        <header class="jumbotron back-image" style="background-image: url(images/HOME.jpg);">
            <div class="myclass mainHeading">
            <h2 class="text-Regular text-danger font-weight-bold">Welcome to RS ENGINEERING WORK'S </h1>
            <p class="font-regular">Customer's Happiness is our Aim</p>
            <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
            <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
            </div>
        </header> 
   
   <!-- End Header Jumbotron -->

                                     <!-- HOME PAGE About -->
   <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
   <u> <h3 class="text-center">ABOUT RS ENGINEERING</h3></u> <br>
      <p >
      <b> RS Engineering Works </b>in <strong> Goregaon West Manage by <q> KISHAN BHAI </q>, RS </strong>is a top player in the category
      <strong> Kitchen Equipment Dealers </strong>in the Mumbai. This well-known establishment acts as
      a one-stop destination servicing customers both local and from other parts of Mumbai.
      Over the course of its journey, this business has established a firm foothold in it’s industry.
      The belief that customer satisfaction is as important as their products and services,
      have helped this establishment garner a vast base of customers, which continues to grow by the day.
      This business employs individuals that are dedicated towards their respective roles and put in 
      a lot of effort to achieve the common vision and larger goals of the company.
      In the near future, this business aims to expand its line of products and services
      and cater to a larger client base. In Mumbai, this establishment occupies a prominent
      location in Goregaon West. It is an effortless task in commuting to this establishment
      as there are various modes of transport readily available. 
      It is known to provide top service in the following categories:<strong> Kitchen Equipment Dealers.</strong>
      </p>

    </div>
  </div>
  <!--Introduction Section End-->
  
  <!-- Start Services -->
  <div class="container text-center border-bottom" id="Services">
    <u><h3>OUR SERVICES</h3></u><br>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="Requester/RequesterLogin.php"><i class="fas fa-tv fa-8x text-success"></i></a>
        <h4 class="mt-4">Electronic Appliances</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="Requester/RequesterLogin.php"><i class="fas fa-shopping-cart fa-8x text-primary"></i></a>
        <h4 class="mt-4">Products</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="Requester/RequesterLogin.php"><i class="fas fa-cogs fa-8x text-info"></i></a>
        <h4 class="mt-4">Fault Repair</h4>
      </div>
    </div>
  </div> 
  
  <!-- End Services -->

<!-- Start Registration Form -->

<?php  include('UserRegistration.php')?>

<!-- End Registration form -->


 <!-- Start Latest Products  -->

   <div class="jumbotron bg-dark" id="Products">
    <!-- Our Products Jumbotron -->
    <div class="container">
      <!-- Start Product Container -->
      <h1 class="text-center text-white">Latest Products</h1>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
          <!-- Start Product 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
            <a href="Requester/RequesterLogin.php">
              <img src="images/Product11.jpg" class="img-fluid" style="border-radius: 100px;"></a>
              <h5 class="card-title">Gas Stovetops</h5>
              <p class="card-text">Our list of the top ten products is here to help you 
              find the best cookware for gas stoves for your home.</p>
            </div>
          </div>
        </div>
         <!-- End Product 1st Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Product 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
            <a href="Requester/RequesterLogin.php">
              <img src="images/PatatoChips1.jpg" class="img-fluid" style="border-radius: 100px;"></a>
              <h5 class="card-title">Potato Peeler Machine</h5>
              <p class="card-text">We are one of the leading Manufacturers and Exporters
               of Potato Chips Processing Machine .</p>
            </div>
          </div>
        </div> <!-- End Produt 2nd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Product 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <a href="Requester/RequesterLogin.php">
              <img src="images/NoodleMaking.jpg" class="img-fluid" style="border-radius: 100px;"></a>
              <h5 class="card-title">Noodle Making Machine</h5>
              <p class="card-text"> Find here Noodle Machine ,As a automatic instant noodle making 
              machine supplier.</p>
            </div>
          </div>
        </div> <!-- End Product 3rd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start product 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
            
              <!--a tag is used for page redirect to page Products -->
              <a href="Requester/RequesterLogin.php">  <img src="images/IdlyStreamer.jpg"  class="img-fluid" style="border-radius: 100px;"></a>
              <h5 class="card-title">IdlyStreamer</h5>
              <p class="card-text">The Idli Steamer makes cooking easier and enables less time consumption. 
              and it is very easy to use.
            </div>
          </div>
        </div> <!-- End Product 4th Column-->
      </div> <!-- End ProductsRow-->
    </div> <!-- End Product Container -->
  </div> <!-- End Product Jumbotron -->



 <!--Start Contact Us Row-->
 <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact Us</h2> <!-- Contact Us Heading -->
    <div class="row">


 <!--Start Contact Us 1st Column-->

<?php include 'contactform.php'?>

 <!-- End Contact Us 1st Column-->

<!-- start second column -->
<div class ='col-md-4 text-center'>
<strong>Address:</strong><br>
Shop No.07,RS ENGINEERING WORK's <br>
pvt Ltd,
Laxmi Nagar,Link Road,<br> 
Goregaon(West),Mumbai-400090 <br>
Landmark:Near Vinay Canteen <br>
Phone: +91-8652765281 <br><br><br>

<!-- We can also add a link here  -->
<b>Google-map</b><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.7991748531413!2d72.82906921485268!3d19.160266087039656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!
1m2!1s0x3be7b7e060409557%3A0x285fe7ce17cae8f6!2sR.%20S.%
20Engineering%20Works!5e0!3m2!1sen!2sin!4v1606559210539!5
m2!1sen!2sin" width="200" height="180" frameborder="0" 
style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  <br>
</div> 
<!-- End Second column -->
</div>
<!--  End Contact us  -->

<!-- Start Footer-->
  
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by Amit Praapati &copy; 2020-21.
          </small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->



        </header>

        <!-- Bootstrap javascript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/all.min.js"></script>

    </body>
</html>