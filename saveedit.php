<?php
require_once("dbcontroller.php");
$db_handle = new DBController();

$data = trim($_POST["editval"]);  //das html macht noch white-spaces die müssen weg
$query = "UPDATE basketball set " . $_POST["column"] . " = '".$data."' WHERE  id=".$_POST["id"];
$result = $db_handle->executeUpdate($query);

$date = new DateTime();
$timestamp = $date->getTimestamp();

$log = "INSERT INTO log (timestamp,ip, proxy, query) VALUES (\"".$timestamp."\",\"".$_SERVER['REMOTE_ADDR']."\",\"".$_SERVER['HTTP_X_FORWARDED_FOR']."\",\"".$query."\")";

if ($db_handle->query($log) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $log . "<br>" . $conn->error;
}

$db_handle->close();
?>


