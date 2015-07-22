<?php 

$con = mysqli_connect("localhost","root","root","toxin_screening", "3306", "/tmp/mysql.sock");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

else{

  //echo "connected";
}


  ?>