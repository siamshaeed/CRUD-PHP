<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$db_connect = new mysqli("localhost", "root", '', "php-crud");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD | Data insert</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php 
			if($_server['REQUESTS_METHOD']=='POST'){
				$stuName =$_post['name'];
				$stuEmail =$_post['email'];
				$stuPhone =$_post['phone'];
				$stuDepertment =$_post['depertment'];

				$sql = "INSERT INTO stuinfo(`id`, `name`, `email`, `phone`, `depertment`) VALUES ('', '$stuName', '$stuEmail', '$stuPhone', '$stuDepertment')";
			}
	 ?>
	<!-- header section start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="headerSection">
					<h2>PHP MySQL CRUD Application</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- header section end -->
	<!-- menu section start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="nav justify-content-center nav_background navText">
					<li class="nav-item">
						<a class="nav-link active" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="create.php">Create</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="read.php">Read</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="update.php">Update</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="delete.php">Delete</a>
					</li>
				</ul>	
			</div>
		</div>
	</div>
	<!-- menu section end -->
	<!--body section start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="myBody">
					<h4 class="bodyTitle">Student Registration</h4>
					<div class="regform">
						<form  method="get">
							<input class="myinput" type="text" name="name" placeholder="Enter Your Name">
							<input class="myinput" type="email" name="email" placeholder="Enter Your Email">
							<input class="myinput" type="phone" name="phone" placeholder="Enter Your phone">
							<input class="myinput" type="text" name="depertment" placeholder="Enter Your Depertment">
							<input class="regBtn" type="submit"  name="btn" value="Submit">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- menu section end -->
	<!-- footer section start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<footer class="footer">
					<div class="footerText">
						<p>Powered By <a href="https://github.com/SiamShaeed">siamshaeed</a></p>
					</div>
				</footer>
			</div>
		</div>
	</div>
	<!-- footer section end -->
	<script src="js/bootstrap.js"></script>
</body>
</html>
