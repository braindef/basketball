<?php
 session_start();
 setlocale(LC_TIME, "de_DE.UTF-8"); //für deutsche Wochentage und Monate
 setlocale(LC_TIME, "de_CH.utf8"); //für deutsche Wochentage und Monate


require_once("dbcontroller.php");
$db_handle = new DBController();
$sql = "SELECT * from log";
$faq = $db_handle->runQuery($sql);

?>
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


                          <tr> <th class="table-header" >id</th>
                               <th class="table-header" >timestamp</th>
                               <th class="table-header" >ip</th>
                               <th class="table-header" >proxy</th>
                               <th class="table-header" >query</th>
                          </tr>

		  </thead>
		  <tbody>
		<?php
		  foreach($faq as $k=>$v)
                  {
		?>
			  <tr class="table-row">
				<td><?php echo $faq[$k]["id"]; ?></td>
				<td><?php echo $faq[$k]["timestamp"]; ?></td>
				<td><?php echo $faq[$k]["ip"]; ?></td>
				<td><?php echo $faq[$k]["proxy"]; ?></td>
				<td><?php echo $faq[$k]["query"]; ?></td>
			  </tr>
		
 <?php
              }
   ?>
		  </tbody>
		</table>
    </body>
</html>
