<?php
  if(isset($_POST['submit']))
  {
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $uname = trim($_POST['uname']);
    $pword = trim($_POST['pword']);
    $email = trim($_POST['email']);

    $query = "INSERT into users where username, password, firstname, lastname, email
    values('$uname', '$pword', '$fname', '$lname', '$email')";

    //check to see if the fields are empty
    if(empty($fname))
    {
      $empty_error = "This field is required";
      echo "<font color='red'>" . $empty_error . "</font>";
    }
    if(empty($lname))
    {
      $empty_error = "This field is required";
      echo "<font color='red'>" . $empty_error . "</font>";
    }
    if(empty($uname))
    {
      $empty_error = "This field is required";
      echo "<font color='red'>" . $empty_error . "</font>";
    }
    if(empty($pword))
    {
      $empty_error = "This field is required";
      echo "<font color='red'>" . $empty_error . "</font>";
    }
    if(empty($email))
    {
      $empty_error = "This field is required";
      echo "<font color='red'>" . $empty_error . "</font>";
    }
    //check if password is long enough
    if(strlen($pword) <= 8)
    {
      echo "Password is too short, must be at least 8 characters long";
    }

    if(!preg_match('/[A-Za-z]/', $pword) && !preg_match('/[0-9]/', $pword))
    {
      echo "password must contain letters and numbers";
    }


  }

?>
