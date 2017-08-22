<?php  session_start(); ?>  // session starts with the help of this function 

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

      if($user == "Ank" && $pass == "1234")  // username is  set to "Ank"  and Password   
         {                                   // is 1234 by default     

          $_SESSION['user']=$user;


         echo '<script type="text/javascript"> window.open("index.php","_self");</script>';            //  On Successful Login redirects to home.php

        }

        else
        {
            echo "invalid UserName or Password";        
        }
}
 ?>
<html>
<head>

<title> Login Page   </title>


<style>
.container {
  width: 350px;
  height: 120px;
  border-radius: 15px
  background: #eee;
  margin: 50px auto;
  padding: 20px;
}
</style>

</head>
<body>
<div class="container">
  <form action="" method="post">
    <table width="250" border="0">
      <tr>
        <td>Benutzername</td>
        <td> <input type="text" name="user" > </td>
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
</div>

</body>
</html>

