<?php  session_start(); ?>

<?php

if(isset($_SESSION['user']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:index.php"); 
 }

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];

      if($user == "hans" && $pass == "123456")   //bitte das produktive Passwort nicht öffentlich auf dem Github Server speichern.
         {                                     

          $_SESSION['user']=$user;


         echo '<script type="text/javascript"> window.open("index.php","_self");</script>';            //  On Successful Login redirects to home.php

        }

        else
        {
            $invalidLogin=true;        
        }
}
 ?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css" target="_blank">
    <meta charset="utf-8">
    <title> Login Page   </title>
</head>
<body>
<div class="login">
  <form action="" method="post">
    <table width="250" border="0">
      <tr>
        <td>Benutzername</td>
        <td> <input type="text" name="user" autofocus> </td>
      </tr>
        <tr>
          <td>Passwort</td>
          <td><input type="password" name="pass"></td>
          <td> <input type="submit" name="login" value="LOGIN"></td>
        </tr>
        <tr></tr>
      </table>
    </form>
Alle Aktivitäten mit IP Adresse werden gespeichert.
<?php if ($invalidLogin) echo "<font color=red>invalid Username or Password</font>" ?>
</div>

</body>
</html>

