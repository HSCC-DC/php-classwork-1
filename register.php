<?php
    include ('db.php');
    $fname="";
    $lname="";
    $uname="";
    $pword="";
    $email="";
    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $uname=$_POST['uname'];
        $pword=$_POST['pword'];
        $email=$_POST['email'];
    }
    
?>
<html>
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>  </title>
    </head>
    <body>
    <h1>Register </h1><br>
        <form method="POST">
            <label>First Name: </label>
            <input type="text" name="fname"> <br>
            <label>Last Name: </label>
            <input type="text" name="lname"> <br>
            <label>Username: </label>
            <input type="text" name="uname"> <br>
            <label>Password: </label>
            <input type="password" name="pword"> <br>
            <label>Email: </label>
            <input type="email" name="email"><br>
            <input type="submit" name="submit" value="Register">
            <input type="reset" name="reset" value="Reset">
        </form>
    </body>
</htmL>