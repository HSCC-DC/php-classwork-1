
<?php
include("db.php");
require 'processLogin.php';?>

<?php require 'processLogin.php';
 session_start();
?>

<?php require 'processLogin.php';?>

<!DOCTYPE html>

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
      <center><h1 class="jumbotron">Welcome, <?php if(isset($_SESSION["username"])){ echo $_SESSION["username"];}else{echo "Guest User";}?></h1>
        <p><strong>Your e-mail address is:</strong> <?php if(isset($_SESSION["email"])){echo $_SESSION["email"];}else{echo "guestuser@fakemail.net";}?></p>
      </center>
      <?php
      //generate query
        $query = "Select * from users";
      //execute the query
        $result = mysqli_query($conn, $query);
        ?>
        <!--Display the results-->
        <table>
          <th>First Name</th>
          <th>Last Name</th>
          <th>E-mail address</th>

         <?php
         while ($row = mysqli_fetch_assoc($result))
         {
           ?>
           <tr>
             <td><?php echo $row["first_name"];?></td>
             <td><?php echo $row["last_name"];?></td>
             <td><?php echo $row["email"];?></td>
             <td><a href="delete.php?userid=<?php echo $row['user_id'];?>">Delete</a></td>
           </tr>
          <?php
        }?>
        </table>

  </div>
  </body>
</html>
