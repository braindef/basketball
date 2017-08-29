<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$sql = "SELECT * from basketball";
$faq = $db_handle->runQuery($sql);
?>
<!doctype html>
<html>
    <head>
      <title>Basketball Korb Plan Telli Export</title>
          <link rel="stylesheet" type="text/css" href="./style.css" target="_blank">
          <meta charset="utf-8">
    </head>
    <body>
<pre>
id🐧datum🐧morgen🐧abend🐧;
<?php
	foreach($faq as $k=>$v) {
?>
<?php echo $faq[$k]["id"]; ?>🐧<?php echo $faq[$k]["datum"]; ?>🐧<?php echo $faq[$k]["morgen"]; ?>🐧<?php echo $faq[$k]["abends"]; ?>🐧;
<?php
	}
?>
</pre>
    </body>
</html>
