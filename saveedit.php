<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$data = $_POST["editval"].trim();  //das html macht noch white-spaces die müssen weg
$result = $db_handle->executeUpdate("UPDATE basketball set " . $_POST["column"] . " = '".$data."' WHERE  id=".$_POST["id"]);


$date = new DateTime();
$timestamp = $date->getTimestamp();
$query = "UPDATE basketball set " . $_POST["column"] . " = '".$data."' WHERE  id=".$_POST["id"];
$result = $db_handle->execute("INSERT into log VALUES (".$timestamp.",".$query.")";


?>
