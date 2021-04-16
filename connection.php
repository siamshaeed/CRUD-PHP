<!-- Database Connection way : 1 -->
<?php 
// $host = "localhost";
// $user = "root";
// $pass = "";
// $database = "php-crud";
// //Connection with mysql server
// $db = mysqli_connect("$host", "$user", "$pass", "$database") or die('Error Database Connection');
// //chack database connection
// if ($db) {
// 	echo "Database Connection Success";
// }else{
// 	echo "Database connection loss";
// }
?>

<!-- Database Connection way : 2 -->
<?php 
ini_set("display_error", 0);
//Create Constant
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "php-crud");
//Connection with mysql server. (Here mysqli() Function Object Oriented connection style)
$db = new mysqli (HOST, USER, PASS, DB);
?>