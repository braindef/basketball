<html>
  <head>
    <link rel="stylesheet" type="text/css" href="small-style.css" target="_blank">
    <meta charset="utf-8">
    <title>Basketball Telli</title></head>

<?php date_default_timezone_set('UTC'); ?>

<h1><font color=lightblue>Basketball Telli Kalender</font></h1>


<table border=1>
  <tr>
    <th>Datum</th>
    <th>Vorgang</th>
    <th>Name</th>
  <tr>
    <td><?php echo date("m.d.y"); ?></td>
    <td>Bringen (08:00)</td>
    <td contenteditable="true">Marc Landolt</td>
  </tr>
    <td><?php echo date("m.d.y"); ?></td>
    <td>Holen (18:00)</td>
    <td contenteditable="true">Hans Bischofsberger</td>
  </tr>
</table>

  <button id="export-btn">Export Data</button>
  <p id="export"></p>

<br><br><br><br><br><br><br><br>
[ Marc jr Landolt | eidg. Dipl. Informatiker HF | Neuenburgerstrasse 6 | 5004 Aarau | 078 674 15 32 ]




