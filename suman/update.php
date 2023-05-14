<?php
include("connection.php");
error_reporting(0);

$Id= $_GET['id'];


$query="SELECT * FROM new where Id='$Id'";
$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);


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
    <link rel="stylesheet" href="city.css">
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
<form action="display.php" method="POST">
    <div class="container">
        <div class=
        "title">UPDATE DETAILS</div>
        <div class="form">
            <div class="input_field">
                <label>Full Name</label>
            <input type="text" value="<?php echo $result['name']?>" class="input" name="name" Required>
            </div>
            <div class="input_field">
                <label>Blood Group</label> 
               <div class="selectbox">
               <select  name="blood"   Required>
                    <option value="">Select</option>
                    <option value="A+"  
                    <?php
                    if($result['blood']=='A+'){
                      echo "selected";
                    } 
                    ?>
                    >A+</option>
                    <option value="A-"
                    <?php
                    if($result['blood']=='A-'){
                      echo "selected";
                    } 
                    ?>
                    >A-</option>
                    <option value="B+"
                    <?php
                    if($result['blood']=='B+'){
                      echo "selected";
                    } 
                    ?>
                    >B+</option>
                    <option value="B-"
                    <?php
                    if($result['blood']=='B-'){
                      echo "selected";
                    } 
                    ?>
                    >B-</option>
                    <option value="O+"
                    <?php
                    if($result['blood']=='O+'){
                      echo "selected";
                    } 
                    ?>
                    >O+</option>
                    <option value="O-"
                    <?php
                    if($result['blood']=='O-'){
                      echo "selected";
                    } 
                    ?>
                    >O-</option>
                    <option value="AB+"
                    <?php
                    if($result['blood']=='AB+'){
                      echo "selected";
                    } 
                    ?>
                    >AB+</option>
                    <option value="AB-"
                    <?php
                    if($result['blood']=='AB-'){
                      echo "selected";
                    } 
                    ?>
                    >AB-</option>
                </select>
               </div>
                </div>
            <div class="input_field">
                <label>Gender</label> 
               <div class="selectbox">
               <select  name="gender">"Required>
                    <option value="">Select</option>
                    <option value="Male"
                    <?php
                    if($result['gender']=='Male'){
                      echo "selected";
                    } 
                    ?>
                    >Male</option>
                    <option value="Female"
                    <?php
                    if($result['gender']=='Female'){
                      echo "selected";
                    } 
                    ?>
                    >Female</option>
                    <option value="Others"
                    <?php
                    if($result['gender']=='Others'){
                      echo "selected";
                    } 
                    ?>
                    >Others</option>
                </select>
               </div>
                </div>
                <div class="input_field">
                <label>Age</label>
            <input type="text" value="<?php echo $result['age']?>" class="input" name="age" Required>
            </div>
                <div class="input_field">
                <label>Email</label>
            <input type="text" value="<?php echo $result['email']?>" class="input" name="mail" Required>
            </div>
            <div class="input_field">
                <label>Phone</label>
            <input type="text"  value="<?php echo $result['phone']?>" class="input" name="phone" Required>
            </div>
            <div class="input_field">
                <label>Address</label>
            <textarea class="textarea" name="address" Required>  <?php echo $result['address']?></textarea>
            </div>
            <div class="input_field">
                <label>Have you ever donate blood</label> 
               <div class="selectbox">
               <select  name="status"  value="<?php echo $result['status']?>" Required>
                    <option value="">Select</option>
                    <option value="Yes" <?php
                    if($result['status']=='Yes'){
                      echo "selected";
                    } 
                    ?>>Yes</option>
                    <option value="No"
                    <?php
                    if($result['status']=='No'){
                      echo "selected";
                    } 
                    ?>
                    >No</option>
                </select>
               </div>
                </div>
           
           <div class="input_field">
               <input type="submit" value="UPDATE" class="btn" name="update">
            </div>
        </div>
    </form>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>

<?php
if($_POST['update'])
{
    $fullname=$_POST['name'];
    $blood=$_POST['blood'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $email=$_POST['mail'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $donate=$_POST['status'];
   
    
     $query="UPDATE new SET  name='$fullname',blood='$blood',gender='$gender',age='$age',email='$email',phone='$phone',address='$address',status='$donate' WHERE Id='$Id'";

          $data=mysqli_query($conn,$query);

          if($data){
            echo "record updated";

            ?>

<?php 
          }
          else{
            echo "Failed";
          }
    }
?>