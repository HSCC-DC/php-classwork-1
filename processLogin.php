<?php
if(isset($_GET['submit']))
{
    $uname=$_GET ['username'];
    $email=$_GET ['email'];
    $pword=$_GET ['pass'];
    $query = "SELECT * FROM users WHERE username= '$uname' AND pass='$pword' AND email='$email'";
    $result = mysqli_query($conn, $query);
    $row= mysqli_feth_assoc($result);
    $count= mysql_num_rows($result);
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
