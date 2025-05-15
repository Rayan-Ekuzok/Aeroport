<!DOCTYPE html>
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
        $_SESSION['identifiantLogin'] = getIDuserbyLoginAndPassword($_POST["identifiantLogin"],HashPassword($_POST["PasswordLogin"]))['idPers'];
        if (session_status() == 0 || session_status() == 1){
            session_start();
        }
      } else {
        logout();
        echo "C'est pas bon";
        echo session_status();
      }
        header("Location: index.php");
}




      
?>   
    </body>
</html>