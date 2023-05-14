<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>

<!doctype html>
<html lang="en"> 
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
  <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="city.css">

    <title>Blood Bank Management System</title>

    <style>
    body{
        background-image:url("./assets/bg.jpg");
        background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
    }
</style>
  </head>
  <body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
   <div class="image">
   <img src="images/blood_drop_logo.jpg" alt="">
   </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle active" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Donar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="add.php">Add New</a></li>
            <li><a class="dropdown-item" href="update.php">Update Details</a></li>
            <li><a class="dropdown-item" href="display.php">All Details</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle active" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Search Blood Donar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="location.php">Location</a></li>
            <li><a class="dropdown-item" href="group.php">Blood Group</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle active" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Stock
          </a> 
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="A+.php">A+</a></li>
            <li><a class="dropdown-item" href="A-.php">A-</a></li>
            <li><a class="dropdown-item" href="B+.php">B+</a></li>
            <li><a class="dropdown-item" href="B-.php">B-</a></li>
            <li><a class="dropdown-item" href="O+.php">O+</a></li>
            <li><a class="dropdown-item" href="O-.php">O-</a></li>
            <li><a class="dropdown-item" href="AB+.php">AB+</a></li>
            <li><a class="dropdown-item" href="AB-.php">AB-</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle active" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Exit
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            <li><a class="dropdown-item" href="exit.php">Exit Application</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle active" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Blood DonationCamps
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="coming.php">Upcoming</a></li>
            <li><a class="dropdown-item" href="going.php">Ongoing</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--carousal-->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/blood_donationcover.jpeg" class="d-block w-100%" alt="...">
    </div>
  </div>
</div>

<div class="page-content jumbotron" style=" background-color: red;
  background-image: linear-gradient(to right, darkgoldenrod , purple);">
  <h4 style="color:white; font-weight:bold; font-size:30px;">Welcome to Account <?php echo $username;?></h4></div>
	</div>

  <div class="card-1">
  <div class="card-1-body">
    <h5 class="card-1-title">TYPES OF DONATION</h5>
    <p class="card-text-1">The human body contains five liters of blood, which is made of several useful components i.e. Whole blood, Platelet, and Plasma.</p>
    <p class="card-text-1">Each type of component has several medical uses and can be used for different medical treatments. your blood donation determines the best donation for you to make.</p>
    <p class="card-text-1">For plasma and platelet donation you must have donated whole blood in past two years.</p>
  </div>
</div>

<div class="blood">
  <h2>Whole Blood</h2> 
    </div>

    <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">What is it?</h5>
        <p class="card-text">Blood Collected straight from the donor after its donation usually separated into red blood cells, platelets, and plasma.</p>
        <h5 class="card-title">Who can donate?</h5>
        <p class="card-text">You need to be 18-65 years old, weigh 45kg or more and be fit and healthy.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">User For?</h5>
        <p class="card-text">Stomach disease, kidney disease, childbirth, operations, blood loss, trauma, cancer, blood diseases, haemophilia, anemia, heart disease.</p>
        <h5 class="card-title">Lasts For?</h5>
        <p class="card-text">Red cells can be stored for 42 days.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">How long does it take?</h5>
        <p class="card-text">15 minutes to donate.</p>
        <h5 class="card-title">How often can I donate?</h5>
        <p class="card-text">Every 12 weeks</p>
      </div>
    </div>
  </div>
</div>
</div>

<div class="blood">
  <h2>Plasma</h2> 
    </div>

    <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">What is it?</h5>
        <p class="card-text">The straw-coloured liquid in which red blood cells, white blood cells, and platelets float in.Contains special nutrients which can be used to create 18 different type of medical products to treat many different medical conditions.</p>
        <h5 class="card-title">Who can donate?</h5>
        <p class="card-text">You need to be 18-70 (men) or 20-70 (women) years old, weigh 50kg or more and must have given successful whole blood donation in last two years.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">User For?</h5>
        <p class="card-text">Immune system conditions, pregnancy (including anti-D injections), bleeding, shock, burns, muscle and nerve conditions, haemophilia, immunisations.</p>
        <h5 class="card-title">Lasts For?</h5>
        <p class="card-text">Plasma can last up to one year when frozen.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">How does it work?</h5>
        <p class="card-text">We collect your blood, keep plasma and return rest to you by apheresis donation.</p>
        <h5 class="card-title">How long does it take?</h5>
        <p class="card-text">15 minutes to donate.</p>
        <h5 class="card-title">How often can I donate?</h5>
        <p class="card-text">Every 2-3 weeks</p>
      </div>
    </div>
  </div>
</div>
</div>

<div class="blood">
  <h2>Platelet</h2> 
    </div>

    <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">What is it?</h5>
        <p class="card-text">The tiny 'plates' in blood that wedge together to help to clot and reduce bleeding. Always in high demand, Vital for people with low platelet count, like malaria and cancer patients.</p>
        <h5 class="card-title">Who can donate?</h5>
        <p class="card-text">You need to be 18-70 years old (men), weigh 50kg or more and have given a successful plasma donation in the past 12 months.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">User For?</h5>
        <p class="card-text">Cancer, blood diseases, haemophilia, anaemia, heart disease, stomach disease, kidney disease, childbirth, operations, blood loss, trauma, burns.</p>
        <h5 class="card-title">Lasts For?</h5>
        <p class="card-text">Just five days..</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">How does it work?</h5>
        <p class="card-text">We collect your blood, keep platelet and return rest to you by apheresis donation.</p>
        <h5 class="card-title">How long does it take?</h5>
        <p class="card-text">45 minutes to donate.</p>
        <h5 class="card-title">How often can I donate?</h5>
        <p class="card-text">Every 2 weeks</p>
      </div>
    </div>
  </div>
</div>
</div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
