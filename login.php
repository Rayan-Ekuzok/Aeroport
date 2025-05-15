<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="Aeroport.css" rel="stylesheet" type="text/css"/>
    </head>
  <body class="pagelogin">
  <?php
include_once 'menu.php';
GetNav();   
?>
      
      
      
      <h1> Login Page </h1>
      <form action="login.php" method="POST">
          <span id="login">
            <input type="text" placeholder="Identifiant" name="identifiantLogin">
            <input type="text" placeholder="Mots de passe" name="PasswordLogin">
            <input type="submit" placeholder="Submit">
          </span>
      </form>

      <?php
      include_once 'BDD.php';
      include_once 'doLogin.php';




if ( isset($_POST["identifiantLogin"]) && isset($_POST["PasswordLogin"])) {
      if ( IsPasswordTheSameAsHash($_POST["PasswordLogin"],$_POST["identifiantLogin"]) == true ){
          session_start();
          $_SESSION['identifiantLogin'] = getIDuserbyLoginAndPassword($_POST["identifiantLogin"],HashPassword($_POST["PasswordLogin"]))['idPers'];
          echo $_SESSION['identifiantLogin'];
          echo session_status();
      } else {
          echo "C'est pas bon";
          echo session_status();
      }
}




      
?>   
    </body>
</html>