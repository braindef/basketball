<?php
 session_start();
 setlocale(LC_TIME, "de_DE.UTF-8"); //für deutsche Wochentage und Monate


require_once("dbcontroller.php");
$db_handle = new DBController();
$db_handle->installDatabase();


//$mysql_host = "marcland.mysql.db.internal";
//$mysql_database = "marcland_telli";
//$mysql_user = "marcland_telli";
//$mysql_password = "qayxswedc$";

# MySQL with PDO_MYSQL  
//$db = new PDO("mysql:host=$mysql_host;dbname=$mysql_database", $mysql_user, $mysql_password);

//$query = file_get_contents("termine.sql");

//$stmt = $db->prepare($query);

//if ($stmt->execute())
//     echo "Success";
//else 
//     echo "Fail";

?>
