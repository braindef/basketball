<?php
 session_start();


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
<html>
    <head>
      <title>PHP MySQL Inline Editing using jQuery Ajax</title>
		<style>
			body{ padding: 40px; margin: auto; }
			.current-row{background-color:#B24926;color:#FFF;}
			.current-col{background-color:#5d501c;color:#FFF;}
			.tbl-qa{width: 100%;font-size:0.9em;background-color: #f0f5f5; text-align:center;}
			.tbl-qa th.table-header {padding: 5px;text-align: left;padding:10px;text-align:center;}
			.tbl-qa .table-row td {padding:1px;background-color: #FDFDFD;}
                        .hidden { display: none; }
		</style>
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script>
		function showEdit(editableObj) {
			$(editableObj).css("background","#0FF");
		} 
		
		function saveToDatabase(editableObj,column,id) {
			$(editableObj).css("background","#FF url(loaderIcon.gif) no-repeat right");
                        if (editableObj.innerHTML=="<br>") { editableObj.innerHTML=""; }
			$.ajax({
				url: "saveedit.php",
				type: "POST",
				data:'column='+column+'&editval='+editableObj.innerHTML+'&id='+id,
				success: function(data){
					$(editableObj).css("background","#FDFDFD");
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

          echo "<a href='logout.php'> Logout</a> "; 
}
?>
	   <table class="tbl-qa">
		  <thead>


                          <tr> <th><a href="index.php<?php if ($monat==1) echo "?monat=12&jahr=".($jahr-1).'"'; 
                                                           else echo "?monat=".($monat-1)."&jahr=".$jahr.'"'; ?>> 

                                   ⇦ <?php $dateObj   = DateTime::createFromFormat('!m', $monat-1); echo $dateObj->format('F'); ?></a></th>

                               <th style="font-size: 30px; "><?php $dateObj   = DateTime::createFromFormat('!m', $monat); echo $dateObj->format('F'); echo " $jahr" ?></th>

                               <th><a href="index.php<?php if ($monat>11) echo "?monat=1&jahr=".($jahr+1).'"'; 
                                                           else echo "?monat=".($monat+1)."&jahr=".$jahr.'"'; ?>> 
                                     <?php $dateObj   = DateTime::createFromFormat('!m', $monat+1); echo $dateObj->format('F'); ?> ⇨</a></th>

                          </tr>

			  <tr>
				<th class="table-header hidden" width="10%">id</th>
				<th class="table-header" width="20%">Datum</th>
				<th class="table-header" width="40%">Morgen bis 10:00</th>
				<th class="table-header" width="40%">Abends um 18:00</th>
			  </tr>
		  </thead>
		  <tbody>
		<?php
		  foreach($faq as $k=>$v)
                  {
                    if ($faq[$k]["datum"]>=sprintf("%04d-%02d-%02d", $jahr, $monat, "1"))
                    {
                      if ($faq[$k]["datum"]<=sprintf("%04d-%02d-%02d", $jahr, $monat, "31"))
                      {
		?>
			  <tr class="table-row" <?php if ($faq[$k]["datum"]==date("Y-m-d")) echo "style=\"background-color:#0FF;\""?>>
				<td class="hidden"><?php echo $faq[$k]["id"]; ?></td>

				<td <?php if ($faq[$k]["datum"]==date("Y-m-d")) echo "style=\"background-color:#0FF;\""?>  ><?php setlocale(LC_TIME, "de_DE.UTF-8"); echo strftime("%A, %d. %B %Y", strtotime($faq[$k]["datum"])); ?></td>


<?php


 if (isset($_SESSION['user']))
 {
 ?>

				<td contenteditable="true"
                                  <?php if ($faq[$k]["datum"]==date("Y-m-d")) echo "style=\"background-color:#0FF;\""?>
                                  <?php if ($faq[$k]["morgen"] == "") echo "style=\"background-color:#eab81b;\""?>
                                  onBlur="saveToDatabase(this,'morgen','<?php echo $faq[$k]["id"]; ?>')"
                                  onClick="showEdit(this);">
                                    <?php echo $faq[$k]["morgen"]; ?>
                                </td>

				<td contenteditable="true"
                                  <?php if ($faq[$k]["datum"]==date("Y-m-d")) echo "style=\"background-color:#0FF;\""?>
                                  <?php if ($faq[$k]["abends"] == "") echo "style=\"background-color:#eab81b;\""?>
                                  onBlur="saveToDatabase(this,'abends','<?php echo $faq[$k]["id"]; ?>')" onClick="showEdit(this);">
                                    <?php echo $faq[$k]["abends"]; ?>
                                </td>
			  </tr>
		
 <?php

 }
 else
 {
   ?>

				<td> <?php echo $faq[$k]["morgen"]; ?></td>

				<td> <?php echo $faq[$k]["abends"]; ?></td>
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
