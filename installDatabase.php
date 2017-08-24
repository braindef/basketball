<?php
 session_start();
 setlocale(LC_TIME, "de_DE.UTF-8"); //für deutsche Wochentage und Monate

$mysql_host = "localhost";
$mysql_database = "marcland_telli";
$mysql_user = "root";
$mysql_password = "123456";

# MySQL with PDO_MYSQL  
$db = new PDO("mysql:host=$mysql_host;dbname=$mysql_database", $mysql_user, $mysql_password);

$query = file_get_contents("termine.sql");

$stmt = $db->prepare($query);

if ($stmt->execute())
     echo "Success";
else 
     echo "Fail";

?>
