<?php

setlocale(LC_TIME, "de_DE.UTF-8"); //fÃ¼r deutsche Wochentage und Monat
setlocale(LC_TIME, "de_CH.utf8"); //fÃ¼r deutsche Wochentage und Monat

require_once("dbcontroller.php");

echo "<pre>";
echo "Working Directory: ";
echo getcwd() . "/mailer.php \n";
echo "";
echo "</pre>";

$db_handle = new DBController();

//morgiges datum rausfinden
$datetime = new DateTime('tomorrow');
$tomorrow = $datetime->format('Y-m-d');


$to = "mail@marclandolt.ch";
$subject = "Morgen hat es keinen Eintrag im Basketball Kalender";
$txt = "http://basketball.gztelli.ch/agenda.php";
$headers = "From: basketball@gztelli.ch";

//am wochenende ist frei
$frei = false;

//senden wenn entweder morgen oder abend nicht eingetragen ist.
$send = false;

$sql = "SELECT * from basketball where datum=\"".$tomorrow."\"";
echo $sql . " \n";
$faq = $db_handle->runQuery($sql);

foreach($faq as $k=>$v)
{
  if (strftime("%A", strtotime($faq[$k]["datum"]))==strftime("%A", strtotime("2017-08-26"))) $frei=true;
  if (strftime("%A", strtotime($faq[$k]["datum"]))==strftime("%A", strtotime("2017-08-27"))) $frei=true;  

  //wenn morgen leer dann senden setzen
  if ($faq[$k]["morgen"]=="")
  {
     echo "Morgen fehlt. ";
     $send = true;
  }     

  //wenn abends leer dann senden setzen
  if ($faq[$k]["abends"]=="")
  {  echo "Abend fehlt. ";
     $send = true;
  }
}


if ($send&&!$frei) mail($to,$subject,$txt,$headers);
else
{  echo "Sende nicht";
   if ($frei) echo " weil Morgen Wochenende ist";
}
?>
