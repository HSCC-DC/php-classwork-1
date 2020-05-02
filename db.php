<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $schema = "bdpaschools";
  $conn = mysqli_connect($servername, $username, $password, $schema);

  if($conn == false)
  {
    echo "connection failed";
  }
  /*else {
    echo "connection successful";
  }*/
 ?>
