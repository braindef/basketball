<?php
 session_start();
 setlocale(LC_TIME, "de_DE.UTF-8"); //für deutsche Wochentage und Monate

require_once("dbcontroller.php");
$db_handle = new DBController();
$sql = "SELECT * from basketball";
$faq = $db_handle->runQuery($sql);

