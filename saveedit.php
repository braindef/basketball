<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$data = trim($_POST["editval"]);  //das html macht noch white-spaces die müssen weg
$query = "UPDATE basketball set " . $_POST["column"] . " = '".$data."' WHERE  id=".$_POST["id"];
$result = $db_handle->executeUpdate($query);

// Check connection
if ($db_handle->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$date = new DateTime();
$timestamp = $date->getTimestamp();

$log = "INSERT INTO log (timestamp,ip, proxy, query)
VALUES (\"".$timestamp."\",\"".$_SERVER['REMOTE_ADDR']."\",\"".$_SERVER['HTTP_X_FORWARDED_FOR']."\",\"".$query."\")";

if ($db_handle->query($log) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $log . "<br>" . $conn->error;
}


//$date = new DateTime();
//$timestamp = $date->getTimestamp();
//$result = $db_handle->executeUpdate("INSERT into log (timestamp, ip, proxy, qurey) VALUES (".$timestamp.",".$_SERVER['REMOTE_ADDR'].",".$_SERVER['HTTP_X_FORWARDED_FOR'].",".$query.")");
//if ($result) echo "log success";
//else echo "log fail";
$db_handle->close();
?>


