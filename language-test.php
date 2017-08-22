<?php
setlocale(LC_TIME, "C");
echo strftime("%A");
setlocale(LC_TIME, "fi_FI");
echo strftime(" in Finnish is %A,");
setlocale(LC_TIME, "fr_FR");
echo strftime(" in French %A and");
setlocale(LC_TIME, "de_DE");
echo strftime(" in German %A.\n");
setlocale(LC_TIME, "de_DE.ISO8859-1");
echo strftime(" in German %A.\n");
setlocale(LC_TIME, "de_DE.UTF-8");
echo strftime(" in German %A.\n");
echo "<br> <br> <br> <br> <br> :";
setlocale(LC_TIME, "de_DE.UTF-8");
echo strtotime("%A %d %B %Y", "2017-08-23")
?>



Code:
setlocale(LC_TIME, "C");
echo strftime("%A");
setlocale(LC_TIME, "fi_FI");
echo strftime(" in Finnish is %A,");
setlocale(LC_TIME, "fr_FR");
echo strftime(" in French %A and");
setlocale(LC_TIME, "de_DE");
echo strftime(" in German %A.\n");
setlocale(LC_TIME, "de_DE.ISO8859-1");
echo strftime(" in German %A.\n");
setlocale(LC_TIME, "de_DE.UTF-8");
echo strftime(" in German %A.\n");

Hostpoint info Blatt:
https://support.hostpoint.ch/de/01-Produkte/Webhosting/Allgemeine_Fragen_und_erste_Schritte/Wie_lauten_Datumsformat_und_Laendereinstellung_f%C3%BCr_PHP_locale
