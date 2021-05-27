<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

  
    <link href="css/bootstrap.min.css" rel="stylesheet">

  
    <link href="css/cover.css" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">


          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Home</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="admin.php">Admin</a></li>
                  <li><a href="tableform.php">Table</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">HELLO! <br><?php echo "<h1>" . $_SESSION['username'] . "</h1>"; ?></h1>
            <p class="lead">My First Web Animation</p>
            <p class="lead">
              <a href="logout.php" class="btn btn-lg btn-default">Logout</a>
            </p>
          </div>

        </div>

    </div>
    <?php
    if (isset($_SESSION['message'])) {
      echo "<div id='error_msg'>".$_SESSION['message']."</div>";
      unset($_SESSION['message']);
    }
    ?>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
