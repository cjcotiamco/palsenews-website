<?php
if(isset($_POST['search']))
{
	$valueToSearch = $_POST['valueToSearch'];

	$query = "SELECT * FROM users where CONCAT(id, fname, lname, email, username) LIKE '%".$valueToSearch."%'";
	$search_result = filterTable($query);
}else{
	$query = "SELECT * FROM users";
	$search_result = filterTable($query);
}
function filterTable($query)
{
	$connect = mysqli_connect("localhost", "root", "", "login_register_pure_coding");
	$filter_Result = mysqli_query($connect, $query);
	return $filter_Result;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Index</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    <link href="css/cover.css" rel="stylesheet">
    
  </head>
<body>
		<div class="site-wrapper">

      <div class="site-wrapper-inner">


	<div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Table</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="HomePage.php">Home Page</a></li>
                  <li><a href="admin.php">Admin</a></li>
                  <li class="active"><a href="#">Table</a></li>
                </ul>
              </nav>
            </div>
          </div>
	<h1 class="cover-heading">Welcome to Table Form!</h1>
	<div class="container">
	<form action="tableform.php" method="post">
		<input type="text" name="valueToSearch" class="textInput form-control" placeholder="value To Search" autofocus>
		<br>
		<button class="btn btn-lg btn-primary btn-block" type="submit" name="search">Filter</button>
		<br>
		<div class="row">
		<table class="table table-bordered">
			<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Username</th>
				<th>Password</th>
			</tr>
			</thead>

			<?php while($row = mysqli_fetch_array($search_result)):?>
			<tbody>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['fname'];?></td>
				<td><?php echo $row['lname'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['username'];?></td>
				<td><?php echo $row['password'];?></td>
			</tr>
			<?php endwhile;?>
			</tbody>
		</table>
	</div>
	</form>
</div>
</div>
</div>
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>