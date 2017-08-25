<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$data = trim($_POST["editval"]);  //das html macht noch white-spaces die müssen weg
$result = $db_handle->executeUpdate("UPDATE basketball set " . $_POST["column"] . " = '".$data."' WHERE  id=".$_POST["id"]);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$date = new DateTime();
$timestamp = $date->getTimestamp();
$result = $db_handle->executeUpdate("INSERT into log VALUES (".$timestamp.",".$query.")");
if ($result) echo "log success";
else echo "log fail";
?>



temp
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
