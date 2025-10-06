<?php
session_start();
$servername = "localhost";
$username = "root";
$passward = "";
$databasename = "timeline";
$conn = mysqli_connect($servername,$username,$passward,$databasename);
if($conn){
  //  echo '<script>alert("connection is done")</script>';
}
else{
    echo "connection failed".mysqli_connect_error();
}
// ?>   