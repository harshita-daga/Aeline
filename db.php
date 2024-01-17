<?php

  //database connection code
  $conn = mysqli_connect("localhost","root","","aeline");
  if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
  }     
?>
