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

<!--body-->

<div class="camp">
    <div>
        <h2 class="heading">Upcoming Camps</h2>
    </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">S no.</th>
      <th scope="col">Blood Bank</th>
      <th scope="col">Address</th>
      <th scope="col">Date Start</th>
      <th scope="col">Date End</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Rotary Blood Bank</td>
      <td>Gurgaon</td>
      <td>20 May 2023</td>
      <td>31 May 2023</td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>Bharat Blood Bank</td>
      <td>Faridabad</td>
      <td>25 May 2023</td>
      <td>05 June 2023</td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>Indira Gandhi Medical College Blood Bank</td>
      <td>Shimla</td>
      <td>20 May 2023</td>
      <td>31 May 2023</td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>Red Cross blood bank</td>
      <td>Panipat</td>
      <td>20 May 2023</td>
      <td>31 May 2023</td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>Rotary Blood Bank</td>
      <td>Gurgaon</td>
      <td>20 May 2023</td>
      <td>31 May 2023</td>
    </tr>


  </tbody>
</table>

</div>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
