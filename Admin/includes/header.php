
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE ?></title>

<!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="../css/all.min.css">

<!-- Custome CSS -->
<link rel="stylesheet" href="../css/custom.css">
</head>
<body>
 <!-- Top Navbar -->
 <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="RequesterProfile.php">RS ENGINEERING</a>
 </nav>


 <!-- Side Bar  Or We can Also say Start Container-->
 <div class="container-fluid mb-5 " style="margin-top:40px;">
  <div class="row">
   <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
   <!-- sidebar First Column -->
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link text-dark <?php if(PAGE == 'dashboard') { echo 'active'; } ?>" href="dashboard.php">
        <i class="fas fa-tachometer-alt"></i>
        Dashboard <span class="sr-only">(current)</span>
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-dark <?php if(PAGE == 'work') { echo 'active'; } ?>" href="work.php">
        <i class="fab fa-accessible-icon"></i>
        Work Order
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-dark <?php if(PAGE == 'request') { echo 'active'; } ?>" href="request.php">
        <i class="fas fa-align-left"></i>
        Requests
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-dark <?php if(PAGE == 'assets') { echo 'active'; } ?>" href="assets.php">
        <i class="fas fa-cart-plus"></i>
        Assets
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-dark <?php if(PAGE == 'technician') { echo 'active'; } ?>" href="technician.php">
        <i class="fas fa-cogs"></i>
        Technicians
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-dark <?php if(PAGE == 'requester') { echo 'active'; } ?>" href="requester.php">
        <i class="fas fa-users"></i>
        Requesters
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-dark <?php if(PAGE == 'sellreport') { echo 'active'; } ?>" href="soldproductreport.php">
        <i class="fas fa-th"></i>
        Sell Report
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-dark <?php if(PAGE == 'workreport') { echo 'active'; } ?>" href="workreport.php">
        <i class="fas  fa-list-alt"></i>
        Work Report
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-dark <?php if(PAGE == 'changepass') { echo 'active'; } ?>" href="changepass.php">
        <i class="fas fa-key"></i>
        Change Password
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-dark" href="../logout.php">
        <i class="fas fa-sign-out-alt"></i>
        Logout
       </a>
      </li>
     </ul>
    </div>
   </nav>