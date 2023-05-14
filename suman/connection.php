<?php
$servername="localhost";
$username="root";
$password="";
$dbname="suman";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn){
  // echo "Connection Successfull";
}
else{
    echo "Failed".mysqli_connect_error();
}
?>