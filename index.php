<<<<<<< HEAD
<?php
session_start();
require 'processLogin.php';?>
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD
<?php require 'processLogin.php';
 session_start();
?>
=======
<<<<<<< HEAD
>>>>>>> 1ef6232eeb94b4ba696dc470f177b56a46de572d
<?php require 'processLogin.php'; session_start();?>

<?php
session_start();
require 'processLogin.php';?>
<<<<<<< HEAD

=======
>>>>>>> 63c794c2d48f5963c78ef9992b924a23ef65c15f
>>>>>>> 64349a6196be2071711e96563dd7b5269150893c
>>>>>>> 21b826d998c75c495e14c2cd2c5792b377869f5d
<!DOCTYPE html>
>>>>>>> 1ef6232eeb94b4ba696dc470f177b56a46de572d
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">Website I Guess</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>
</nav>
  <div class="container">
      <center><h1 class="jumbotron">Welcome, <?php echo $_SESSION["username"];?></h1>
        <p><strong>Your e-mail address is:</strong> <?php echo $_SESSION["email"];?></p>
      </center>

  </div>
  </body>
</html>
