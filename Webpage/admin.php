<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "login_register_pure_coding";

$id = "";
$fname = "";
$lname = "";
$email = "";
$username = "";
$password = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo '<p style="color:red">Connection Error</p>';
}

function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['fname'];
    $posts[2] = $_POST['lname'];
	$posts[3] = $_POST['email'];
    $posts[4] = $_POST['username'];
    $posts[5] = $_POST['password'];
    return $posts;
}

if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO users(fname, lname, email, username, password) VALUES ('$data[1]','$data[2]','$data[3]', '$data[4]', '$data[5]')";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo '<p style="color:red">Data Inserted</p>';
            }else{
                echo '<p style="color:red">Data Not Inserted</p>';
            }
        }
    } catch (Exception $ex) {
        echo '<p style="color:red">Error Insert </p>'.$ex->getMessage();
    }
}

//Search

if(isset($_POST['search']))
{
	$data = getPosts();

	$search_Query = "SELECT * FROM users WHERE id= $data[0]";

	$search_Result = mysqli_query($connect, $search_Query);

	if ($search_Result)
	{
		if (mysqli_num_rows($search_Result))
		{
			while($row = mysqli_fetch_array($search_Result))
			{
				$id = $row['id'];
				$fname = $row['fname'];
				$lname = $row['lname'];
				$email = $row['email'];
				$username = $row['username'];
				$password = $row['password'];
			}
		}else{
			echo '<p style="color:red">No Data For This ID</p>';
		}
	}else{
		echo '<p style="color:red">Result Error</p>';
	}
}

//Delete
if(isset($_POST['delete']))
{
	$data = getPosts();
	$delete_Query = "DELETE FROM users WHERE id = $data[0]";
	try{
		$delete_Result = mysqli_query($connect, $delete_Query);

		if($delete_Result)
		{
			if(mysqli_affected_rows($connect) > 0)
			{
				echo '<p style="color:red">Data Deleted</p>';
			}else{
				echo '<p style="color:red">Data Not Deleted</p>';
			}
		}
	} catch (Exception $ex) {
		echo '<p style="color:red">Error Delete </p>'.$ex->getMessage();
	}
}

//Edit
if(isset($_POST['update']))
{
	$data = getPosts();
	$update_Query = "UPDATE users SET fname='$data[1]', lname='$data[2]', email='$data[3]', username='$data[4]', password='$data[5]' WHERE id = $data[0]";
	try{
		$update_Result = mysqli_query($connect, $update_Query);

		if($update_Result)
		{
			if(mysqli_affected_rows($connect) > 0)
			{
				echo '<p style="color:red">Data Updated</p>';
			}else{
				echo '<p style="color:red">Data Not Updated</p>';
			}
		}
	} catch (Exception $ex) {
		echo '<p style="color:red">Error Update </p>'.$ex->getMessage();
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin</title>

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
              <h3 class="masthead-brand">Admin</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="HomePage.php">Home Page</a></li>
                  <li class="active"><a href="#">Admin</a></li>
                  <li><a href="tableform.php">Table</a></li>
                </ul>
              </nav>
            </div>
          </div>

	<h1 class="cover-heading">Welcome to Admin!</h1>
	<div class="container">
	<form action="admin.php" method="post">
		<input type="number" name="id" class="textInput form-control" placeholder="id" autofocus value="<?php echo $id;?>">
		<input type="text" name="fname" class="textInput form-control" placeholder="First Name" value="<?php echo $fname;?>">
		<input type="text" name="lname" class="textInput form-control" placeholder="Last Name" value="<?php echo $lname;?>">
		<input type="text" name="email" class="textInput form-control" placeholder="Email" value="<?php echo $email;?>">
		<input type="text" name="username" class="textInput form-control" placeholder="Username" value="<?php echo $username;?>">
		<input type="password" name="password" class="textInput form-control" placeholder="Password" value="<?php echo $password;?>">
		<br>
			<button class="btn btn-lg btn-primary btn-block" type="submit" name="insert" value="Add">Insert</button>

			<button class="btn btn-lg btn-primary btn-block" type="submit" name="update" value="Update">Update</button>

			<button class="btn btn-lg btn-primary btn-block" type="submit" name="delete" value="Delete">Delete</button>

			<button class="btn btn-lg btn-primary btn-block" type="submit" name="search" value="Find">Find</button>
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