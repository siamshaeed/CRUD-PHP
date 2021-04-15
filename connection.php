<!-- Database connection way : 1 -->
<?php 
$host = "localhost";
$user = "root";
$pass = "";
$database = "php-crud";
//Connection with mysql server
$db = mysqli_connect("$host", "$user", "$pass", "$database") or die('Error Database Connection');
//chack database connection
if ($db) {
	echo "Database Connection Success";
}else{
	echo "Database connection loss";
}
?>
<!-- Database connection way : 2 -->