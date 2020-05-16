<?php
  include("db.php");
  //Make a variable to store user id passed in URL
    $uid = $_GET["userid"];
    //generate query
      $query = "Delete FROM users where user_id =$uid ";
    //execute query
    $results = mysqli_query($conn, $query);

    header("Location: index.php");
 ?>
