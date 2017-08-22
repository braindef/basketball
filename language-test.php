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
?>
