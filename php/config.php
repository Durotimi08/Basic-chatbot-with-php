<?php
  $hostname = "localhost";
  $username = "duro";
  $password = "durotimi1";
  $dbname = "buildxai";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>