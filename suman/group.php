<?php
include("connection.php");
error_reporting(0);
?>

<!doctype html>
<html lang="en">
  <head> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="city.css">
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

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="total.php">Total Stock</a>
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

  <!-- Fetching data-->
  <?php
  $query="SELECT * FROM blood";
  $data=mysqli_query($conn,$query);
  
  $total=mysqli_num_rows($data);
  
  
  if($total!=0){
    ?>

    <h2 align="center"><mark>All Records</mark></h2>
    <table margin="20rem" align="center" border="3"  cellspacing="4rem" width="100%">
      <tr>
        <th width="5%">Id</th>
        <th width="20%">Name</th>
        <th width="5%">Blood</th>
        <th width="20%">Email</th>
        <th width="10%">Phone</th>
        <th width="25%">Address</th>
        <th width="20%">Action</th>
      </tr>
      <?php
   while($result=mysqli_fetch_assoc($data))
   {
    echo "<tr>
    <td>". $result['Id']."</td>
    <td>". $result['Name']."</td>
    <td>". $result['Blood']."</td>
    <td>". $result['email']."</td>
    <td>". $result['Phone']."</td>
    <td>". $result['place']."</td>

    <td><a href='update.php?id=$result[Id]'><input type='submit'value='Update' class='update'></a>

    <a href='delete.php?id=$result[Id]'><input type='submit'value='Delete' class='delete'></a>
    
    </td>

    </tr>";
  
   }
  }
  else{
    echo "No records";
  }
  ?>

</table>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
