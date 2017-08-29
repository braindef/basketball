<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$sql = "SELECT * from basketball";
$faq = $db_handle->runQuery($sql);
?>
id🐧datum🐧morgen🐧abend🐧;
<?php
	foreach($faq as $k=>$v) {
?>
<?php echo $faq[$k]["id"]; ?>🐧<?php echo $faq[$k]["datum"]; ?>🐧<?php echo $faq[$k]["morgen"]; ?>🐧<?php echo $faq[$k]["abends"]; ?>🐧;
<?php
	}
?>
