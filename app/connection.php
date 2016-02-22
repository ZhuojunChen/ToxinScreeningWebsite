<?php 

$con = mysqli_connect("localhost","root","root","toxin_screening", "8889", "/Applications/MAMP/tmp/mysql/mysql.sock");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

else{

  //echo "connected";
}


  ?>