<?php
include ("connection.php");

$Id =$_GET['id'];

$query="DELETE FROM new WHERE Id='$Id'";
$data=mysqli_query($conn,$query);

if($data){
    echo "Record Deleted";
}

else{
    echo "Failed to Delete";
}
?>