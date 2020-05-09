<?php
if(isset($_GET['submit']))
{

    include "db.php";
    $uname=trim($_GET['username']);
    $email=trim($_GET ['email']);
    $pword=trim($_GET ['pass']);
    $query = "SELECT * FROM users WHERE username= '$uname' AND password='$pword' AND email='$email'";
    $result = mysqli_query($conn, $query);
    $row= mysqli_fetch_assoc($result);
    $count= mysqli_num_rows($result);
    if($count>0) {
        session_start();
        $_SESSION['username']= $row['username'];
        $_SESSION['email']= $row['email'];
        header('location:index.php');
    }
    else {
        echo 'Username and Password do not match';
    }

}
?>
