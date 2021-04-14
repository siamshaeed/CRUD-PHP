<!-- database connection way : 1 -->
<?php 
$host = "localhost";
$user = "root";
$pass = "";
$database = "php-crud";
$db = mysqli_connect("$host", "$user", "$pass", "$database") or die('no database');
 ?>