<?php
include_once("db_connect.php");
 
$stmt = $pdo->prepare("SELECT * FROM cities ORDER BY name ASC");
$stmt->execute();

//fetch state details
$stmt = $pdo->prepare("SELECT * FROM states ORDER BY name ASC");
$stmt->execute();

//fetch countries details
$stmt = $pdo->prepare("SELECT * FROM countries ORDER BY name ASC");
$stmt->execute();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home.css">

    <title>Blood Bank Management System</title>
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

<!--form-->

<div class="container" style="margin-top: 30px;">
<div class="col col-md-offset-3">
    <div class="panel panel-default">
        <div class="panel-body">
            <h2 class="text-center" style="margin-left:5vh">Search Blood Bank</h2><br/>
            <form id="demo-form">
            <div class="form-group">
            <div class="dropdown" style="margin-left:80px">

            <div class="nav">
              <ul  class="main-menu" >
                <li><a>Select State</a>
                <ul class="sub-menu">
                <li><a>Arunachal Pradesh</a>
                <ul class="super-menu">
                <li><a>Itanagar</a>
                <ul class="supersub-menu">
                <li><a href="https://goo.gl/maps/pPM5eQa2V6h64DDu5">Ramakrishna Mission Hospital Blood Bank</a></li>
                
              </ul>
                <li><a>Naharlagun</a>
                <ul class="supersub-menu">
                <li><a href="https://goo.gl/maps/tVWsGAdv95NgzU3D6">BSAP</a></li>
                <li><a href="https://goo.gl/maps/u5KGwPCn1iQJbCUk8">Arunachal State Hospital Blood Bank</a></li>
              </ul>
              </li>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>
                <li><a>Assam</a>
                <ul class="super-menu">
                <li><a>Guwahati</a>
                <ul class="supersub-menu">
                <li><a href="https://goo.gl/maps/CyjGSk2Qgwg7bRLA8">Ganga Blood Bank & Laboratory</a></li>
                <li><a href="https://goo.gl/maps/DPy4BbSNQTBVnrRv6">G. N. R. C. Hospital Blood Bank</a></li>
              </ul>
                <li><a>Silchar</a>
                <ul class="supersub-menu">
                <li><a href="https://goo.gl/maps/G3162Q6cG6bZLzZ76">Barak blood bank</a></li>
                <li><a href="https://goo.gl/maps/kdmUYuCNsWJTBWF8A">Dr.RAHUL GUPTA MEMORIAL BLOOD BANK</a></li>
              </ul>
              </li>
              <li><a>Dibrugarh</a>
                <ul class="supersub-menu">
                <li><a href="https://goo.gl/maps/BYMSpJjfK2XXXFe29">AMC Blood Bank</a></li>
                <li><a href="https://goo.gl/maps/BYqSBDEokL7QTDdD8">Aditya Diagnostic Hospital Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Bihar</a>
                <ul class="super-menu">
                <li><a>Patna</a>
                <ul class="supersub-menu">
                <li><a href="https://goo.gl/maps/ytf7NDgNosCYWFug7">Bharat Blood Bank</a></li>
                <li><a href="https://goo.gl/maps/vBFhUsatvvU46sKC9">Jeevan Rekha Blood Bank</a></li>
              </ul>
                <li><a>Gaya</a>
                <ul class="supersub-menu">
                <li><a href="https://goo.gl/maps/d7H8A98XsQmTEFe46">Bhagvan Buddha Blood bankk</a></li>
                <li><a href="https://goo.gl/maps/RbLva2UqoaPoASc68">Bhagwan Mahabir Blood Bankk</a></li>
              </ul>
              </li>
              <li><a>Bhagalpur</a>
                <ul class="supersub-menu">
                <li><a href="https://goo.gl/maps/n8xNPCCzXmng8v6V9">Kadamkunj Patho Lab</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Chhattisgarh</a>
                <ul class="super-menu">
                <li><a>Raipur</a>
                <ul class="supersub-menu">
                <li><a href="https://goo.gl/maps/e5v8yR7Xg37AhunP7">Aashirwad Blood Bank</a></li>
                <li><a href="https://goo.gl/maps/fUWardRrqC9wsRnY8">CHHATTISGARH BLOOD BANK</a></li>
              </ul>
                <li><a>Bilaspur</a>
                <ul class="supersub-menu">
                <li><a href="https://maps.app.goo.gl/tgwDL8m9947WMhuP8">Bilaspur Blood Bank</a></li>
                <li><a href="#\https://maps.app.goo.gl/cgLFn2ZwT9kHYppR8">Aashirwad Blood Bank</a></li>
              </ul>
              </li>
              <li><a>Durg</a>
                <ul class="supersub-menu">
                <li><a href="https://maps.app.goo.gl/3xV9GAR2DMzgyqxs7">JLNHRC Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Goa</a>
                <ul class="super-menu">
                <li><a>Panaji</a>
                <ul class="supersub-menu">
                <li><a href="https://maps.app.goo.gl/YtwZ8C6pzrABgmTU7">Indian Red Cross Society</a></li>
                <li><a href="https://maps.app.goo.gl/p9rY4kTGsNJLKfLA7">Goa Medical College Blood Bank</a></li>
              </ul>
                <li><a>Margao</a>
                <ul class="supersub-menu">
                <li><a href="https://maps.app.goo.gl/6v6YDurm5HyCFEGn8">Hospicio Hospital Blood Bank</a></li>
                <li><a href="https://maps.app.goo.gl/5a3WAQuMo66Jof4J9">Pathkind Labs</a></li>
              </ul>
              </li>
              <li><a>Vasco da Gama</a>
                <ul class="supersub-menu">
                <li><a href="https://maps.app.goo.gl/FxUNjNw4EG3opAyW6">Cross World Blood Bank</a></li>
                <li><a href="https://maps.app.goo.gl/vAjDsQLZwji2qJjF8">Sarvoday Charitable Trust Blood Centre</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Gujrat</a>
                <ul class="super-menu">
                <li><a>Ahmedabad</a>
                <ul class="supersub-menu">
                <li><a href="http://oo.gl/PZ7GWTqAUxBgwH9KA">Sardar Vallabhbhai Patel-Blood Bank</a></li>
                <li><a href="https://maps.app.goo.gl/9PFiQ5X4AmpwWEz19">RED CROSS BLOOD BANK</a></li>
              </ul>
                <li><a>Surat</a>
                <ul class="supersub-menu">
                <li><a href="https://maps.google.com/?cid=1853055691098586896&entry=gps">Jalaram Blood Bank</a></li>
                <li><a href="https://maps.app.goo.gl/2xSSFtQbNx6JZdwE7">Blood Centre SSG Hospital</a></li>
              </ul>
              </li>
              <li><a>Vadodara</a>
                <ul class="supersub-menu">
                <li><a href="https://maps.app.goo.gl/3pyqtePpEijcTUZu9">Divine Charitable Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Haryana</a>
                <ul class="super-menu">
                <li><a>Faridabad</a>
                <ul class="supersub-menu">
                <li><a href="https://maps.app.goo.gl/VKQjJQCfSVwNhnC36">Rotary Blood Bank Faridabad</a></li>
              </ul>
                <li><a>Gurgaon</a>
                <ul class="supersub-menu">
                <li><a href="https://maps.app.goo.gl/aLpkW6r7kAxCotxe7">Rotary Blood Bank</a></li>
                <li><a href="https://maps.app.goo.gl/6qJcqV1Qx6EiA7fJ8">Medicity Hospital Blood Bank</a></li>
              </ul>
              </li>
              <li><a>Panipat</a>
                <ul class="supersub-menu">
                <li><a href="https://maps.app.goo.gl/6rfTqqYJed1ACUMu8">Red Cross blood bank, panipat</a></li>
                <li><a href="https://maps.app.goo.gl/SpaJzb9S1tiWRYo38">Bharat Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Himachal Pradesh</a>
                <ul class="super-menu">
                <li><a>Shimla</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Dharamshala</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              <li><a>Solan</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Jharkhand</a>
                <ul class="super-menu">
                <li><a>Ranchi</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Jamshedpur</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              <li><a>Dhanbad</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Karnataka</a>
                <ul class="super-menu">
                <li><a>Bengaluru</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Mysuru</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              <li><a>Hubli-Dharwad</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Kerala</a>
                <ul class="super-menu">
                <li><a>Thiruvanthapuram</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Kochi</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              <li><a>Kozhikode</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Madhya Pradesh</a>
                <ul class="super-menu">
                <li><a>Bhopal</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Indore</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              <li><a>Jabalpur</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Maharashtra</a>
                <ul class="super-menu">
                <li><a>Mumbai</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Pune</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              <li><a>Nagpur</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Manipur</a>
                <ul class="super-menu">
                <li><a>Imphal</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Thoubal</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Meghalaya</a>
                <ul class="super-menu">
                <li><a>Shillong</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Tura</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>
                <li><a>Mizoram</a>
                <ul class="super-menu">
                <li><a>Aizawl</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Lunglei</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Nagaland</a>
                <ul class="super-menu">
                <li><a>Kohima</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Dimapur</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>
                <li><a>Odisha</a>
                <ul class="super-menu">
                <li><a>Bhubaneswar</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Cuttack</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Punjab</a>
                <ul class="super-menu">
                <li><a>Amritsar</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Ludhiana</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              <li><a>Jalandhar</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Rajasthan</a>
                <ul class="super-menu">
                <li><a>Jaipur</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Jodhpur</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              <li><a>Udaipur</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Sikkim</a>
                <ul class="super-menu">
                <li><a>Gangtok</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Namchi</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Tamil Nadu</a>
                <ul class="super-menu">
                <li><a>Chennai</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Coimbatore</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              <li><a>Madurai</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Telangana</a>
                <ul class="super-menu">
                <li><a>Hyderabad</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Warangal</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              <li><a>Karimnagar</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Tripura</a>
                <ul class="super-menu">
                <li><a>Agartala</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Dhamanagar</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Uttar Pradesh</a>
                <ul class="super-menu">
                <li><a>Lucknow</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Kanpur</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              <li><a>Varanasi</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>Uttarakhand</a>
                <ul class="super-menu">
                <li><a>Haridwar</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Roorkee</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>

                <li><a>West Bengal</a>
                <ul class="super-menu">
                <li><a>Kolkata</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
                <li><a>Asanol</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              <li><a>Siliguri</a>
                <ul class="supersub-menu">
                <li><a href="#">Rakshana Blood Bank</a></li>
                <li><a href="#">SVIMS  Blood Bank</a></li>
              </ul>
              </li>
              </ul>



              </ul>
            </li>
              </ul>
            </div>
          </div>
        </div>
       </form>
        </div>
    </div>
</div>
</div>
 
<script src="./js/custom.js" type="text/javascript"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>