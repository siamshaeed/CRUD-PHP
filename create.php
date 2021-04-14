<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// $db = new mysqli("localhost", "root", '', "php-crud");
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
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$stuName = $_POST['mname'];
		$stuEmail = $_POST['memail'];
		$stuPhone = $_POST['mphone'];
		$stuDepertment = $_POST['mdepertment'];

		$sql = "INSERT INTO stuinfo(id, name, email, phone, depertment) VALUES ('', '$stuName', '$stuEmail', '$stuPhone', '$stuDepertment')";

		$db->query($sql);

		//For success message
		if ($db->affected_rows > 0) {
			$msg = "Successfully Insert";
		}
	};
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
						<form action="" method="post">
							<input class="myinput" type="text" name="mname" placeholder="Enter Your Name">
							<input class="myinput" type="email" name="memail" placeholder="Enter Your Email">
							<input class="myinput" type="phone" name="mphone" placeholder="Enter Your phone">
							<input class="myinput" type="text" name="mdepertment" placeholder="Enter Your Depertment">
							<input type="submit" name="sbmt" value="SUBMIT">
							<?php 
								echo $msg;
							 ?>
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
