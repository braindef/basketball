<?php
 session_start();
 setlocale(LC_TIME, "de_DE.UTF-8"); //für deutsche Wochentage und Monate
 setlocale(LC_TIME, "de_CH.utf8"); //für deutsche Wochentage und Monate


require_once("dbcontroller.php");
$db_handle = new DBController();
$sql = "SELECT * from basketball";
$faq = $db_handle->runQuery($sql);

if(isset($_GET["monat"]))
$monat = $_GET["monat"]; 
else $monat=date(m);

if(isset($_GET["jahr"]))
$jahr = $_GET["jahr"]; 
else $jahr=date(Y);

?>
<!doctype html>
<html>
    <head>
      <title>Basketball Korb Plan Telli</title>
          <link rel="stylesheet" type="text/css" href="./style.css" target="_blank">
          <meta charset="utf-8">
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script>
		function showEdit(editableObj) {
			//$(editableObj).css("background","#0FF");
		} 
		
		function saveToDatabase(editableObj,column,id) {
			//$(editableObj).css("background","#FF url(loaderIcon.gif) no-repeat right");
			$.ajax({
				url: "saveedit.php",
				type: "POST",
				data:'column='+column+'&editval='+editableObj.innerText+'&id='+id, //was innerHTML
				success: function(data){
					//$(editableObj).css("background","#FDFDFD");
				}        
		   });
		}
		</script>
    </head>
    <body>

<div style="margin-top: 10px; margin-bottom: 10px;> <a title="Home" href="https://gztelli.ch"><img src="./gztelli.svg" alt="GZ Telli" width=300> </a> </div> 
<?php
if(!isset($_SESSION['user'])) // If session is not set then redirect to Login Page
       {
//           header("Location:login.php");  
          echo "<a href='login.php'> Login</a> "; 
       }
else
{
          //echo $_SESSION['user'];

          //echo "Login Success";

          echo '<a href=\'logout.php\'> Logout</a> <a href="./index.php">[Heute]</a>'; 
}
?>
	   <table class="tbl-qa">
		  <thead>


                          <tr> <th><a style="color:white" href="index.php<?php if ($monat==1) echo "?monat=12&jahr=".($jahr-1).'"'; 
                                                           else echo "?monat=".($monat-1)."&jahr=".$jahr.'"'; ?>> 

                                   ⇦ <?php $dateObj   = DateTime::createFromFormat('!m', $monat-1); echo $dateObj->format('F'); ?></a></th>

                               <th style="font-size: 30px; color: white;"><?php $dateObj   = DateTime::createFromFormat('!m', $monat); echo $dateObj->format('F'); echo " $jahr" ?></th>

                               <th><a style="color:white" href="index.php<?php if ($monat>11) echo "?monat=1&jahr=".($jahr+1).'"'; 
                                                           else echo "?monat=".($monat+1)."&jahr=".$jahr.'"'; ?>> 
                                     <?php $dateObj   = DateTime::createFromFormat('!m', $monat+1); echo $dateObj->format('F'); ?> ⇨</a></th>

                          </tr>

			  <tr>
				<th class="table-header hidden" width="10%">id</th>
				<th class="table-header hidden" width="10%">sql-date</th>
				<th class="table-header" style="color: white;" width="20%">Datum</th>
				<th class="table-header" style="color: white;" width="40%">Morgen bis 10:00</th>
				<th class="table-header" style="color: white;" width="40%">Abends um 18:00</th>
			  </tr>
		  </thead>
		  <tbody>
		<?php
		  foreach($faq as $k=>$v)
                  {
                    $frei=false;
                    if ($faq[$k]["datum"]>sprintf("%04d-%02d-%02d", $jahr, $monat, "0"))
                    {
                      if ($faq[$k]["datum"]<sprintf("%04d-%02d-%02d", $jahr, $monat, "32"))
                      {
		?>
			  <tr class="table-row">
				<td class="hidden"><?php echo $faq[$k]["id"]; ?></td>
				<td class="hidden"><?php echo $faq[$k]["datum"]; ?></td>

                                   <?php 
                                         if (strftime("%A", strtotime($faq[$k]["datum"]))==strftime("%A", strtotime("2017-08-26"))) $frei=true;
                                         if (strftime("%A", strtotime($faq[$k]["datum"]))==strftime("%A", strtotime("2017-08-27"))) $frei=true; ?> 

				<td class="date"  <?php if($frei) echo "style=\"background-color:#999;\""; //Samstage und Sonntage schwarz ?>
                                  <?php if ($faq[$k]["datum"]==date("Y-m-d")) echo "style=\"background-color:#0FF;\""; //aktuelles Datum Cyan farben ?> >
                                    <?php echo strftime("%A, %d. %B %Y", strtotime($faq[$k]["datum"])); //Datum mit locale de_DE.UTF8 anzeigen?>
                                </td>


<?php
//farbe 1x auswerten dann variabel für z.B. farbe
 if (isset($_SESSION['user']))
                    {
 ?>

				<td contenteditable="true"
                                  <?php if ((!$frei)&&($faq[$k]["morgen"] == "")) echo "style=\"background-color:#eab81b;\""?>
                                  <?php if ($frei) echo "style=\"background-color:#999;\""; //Samstage und Sonntage schwarz ?>
                                  <?php if ($faq[$k]["datum"]==date("Y-m-d")) echo "style=\"background-color:#0FF;\""?>

                                  onBlur="saveToDatabase(this,'morgen','<?php echo $faq[$k]["id"]; ?>')"
                                  onClick="showEdit(this);">
                                    <?php if (!$frei) echo $faq[$k]["morgen"]; ?>
                                </td>

				<td contenteditable="true"
                                  <?php if ((!$frei)&&($faq[$k]["abends"] == "")) echo "style=\"background-color:#eab81b;\""?>
                                  <?php if ($frei) echo "style=\"background-color:#999;\""; //Samstage und Sonntage schwarz ?>
                                  <?php if ($faq[$k]["datum"]==date("Y-m-d")) echo "style=\"background-color:#0FF;\""?>

                                  onBlur="saveToDatabase(this,'abends','<?php echo $faq[$k]["id"]; ?>')" onClick="showEdit(this);">
                                    <?php if (!$frei) echo $faq[$k]["abends"]; ?>
                                </td>
			  </tr>
		
 <?php
                     }
 else
                     {
   ?>

				<td
                                  <?php if ((!$frei)&&($faq[$k]["morgen"] == "")) echo "style=\"background-color:#eab81b;\""?>
                                  <?php if ($frei) echo "style=\"background-color:#999;\""; //Samstage und Sonntage schwarz ?>
                                  <?php if ($faq[$k]["datum"]==date("Y-m-d")) echo "style=\"background-color:#0FF;\""?> >
                                    <?php if (!$frei) echo $faq[$k]["morgen"]; ?>
                                </td>

				<td
                                  <?php if ((!$frei)&&($faq[$k]["abends"] == "")) echo "style=\"background-color:#eab81b;\""?>
                                  <?php if ($frei) echo "style=\"background-color:#999;\""; //Samstage und Sonntage schwarz ?>
                                  <?php if ($faq[$k]["datum"]==date("Y-m-d")) echo "style=\"background-color:#0FF;\""?> >
                                    <?php if (!$frei) echo $faq[$k]["abends"]; ?>
                                </td>
			  </tr>

 <?php
		      }
                    }
                 }
              }
   ?>


		  </tbody>
		</table>
    </body>


</html>
