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
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="headerSection">
					<h2>PHP-CRUD APP</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="nav justify-content-center nav_background navText">
					<li class="nav-item">
						<a class="nav-link active" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Create</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Read</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="#">Update</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="#">Delete</a>
					</li>
				</ul>	
			</div>
		</div>
	</div>


	<script src="js/bootstrap.js"></script>
</body>
</html>
