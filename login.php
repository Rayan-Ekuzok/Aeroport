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
  <nav class="main-menu">


    <a href="index.php">
        <i class="fa fa-home fa-2x"></i>
            Acceuille
    </a>
  


    <a href="vol.php">
        <i class="fa fa-globe fa-2x"></i>

            Vol actuelle

    </a>

    <a href="passagers.php">
        <i class="fa fa-film fa-2x"></i>

            Passagers

    </a>

    <a href="personnels.php">
        <i class="fa fa-film fa-2x"></i>

            Personnels

    </a>


    <a href="login.php">
        <i class="fa fa-cogs fa-2x"></i>

            Connexion

    </a>



    <a href="#">
          <i class="fa fa-power-off fa-2x"></i>

            Logout

    </a>                    
        </nav>
      
      
      
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


// if (!$_POST["identifiantLogin"] == null && !$_POST["PasswordLogin"] == null) {

if ( isset($_POST["identifiantLogin"]) && isset($_POST["PasswordLogin"])) {
      //if (!$_POST["identifiantLogin"] == null && !$_POST["PasswordLogin"] == null) {

        echo $_POST["identifiantLogin"];

        echo $_POST["PasswordLogin"];

        echo ". . . . Données hachées : " . hash('sha256', $_POST["PasswordLogin"].GetSalt());
        echo IsPasswordTheSameAsHash($_POST["PasswordLogin"],$_POST["identifiantLogin"]);
      
      
      
      if ( IsPasswordTheSameAsHash($_POST["PasswordLogin"],$_POST["identifiantLogin"]) == true ){
          echo "C'est bon";
          session_start();
      } else {
          echo "C'est pas bon";
      }
      }
      
      //echo password_hash($_POST["PasswordLogin"], PASSWORD_DEFAULT);

      
      
      
      
      
      
      
      
      
      
      
      
      
      

      ?>
      
      
      
      
      
      
      
      
      
      
      
      
      
    </body>
</html>