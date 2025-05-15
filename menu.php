<?php
include_once 'doLogin.php';

function GetNav(){
    echo"
        <nav class='main-menu'>
    <a href='index.php'>
        <i class='fa fa-home fa-2x'></i>
        Accueil
    </a> 

    ";
    if (isUserLoggedIn()) {

    echo " <a href='vol.php'>
        <i class='fa fa-globe fa-2x'></i>

            Vols actuels

    </a>

    <a href='passagers.php'>
        <i class='fa fa-film fa-2x'></i>

            Passagers

    </a>

    <a href='personnels.php'>
        <i class='fa fa-film fa-2x'></i>

            Personnels

    </a>";

    echo " <form method='post' style='display: inline; margin: 0;padding-left: 1.7em;'>
        <button id='buttonmoinsimportant' name='logout' type='submit' style='background-color: inherit; border: none; color: aliceblue;'>
    <p style='color: aliceblue; margin: 0;'>
        <i class='fa fa-power-off fa-2x'></i>
        Logout
    </p>
</button></form>
    
    </nav>";
        }
    
if(!isUserLoggedIn()){

    echo "<a href='login.php'>
    <i class='fa fa-cogs fa-2x'></i>

            Connexion

    </a> </nav>";
}


    
    









    

}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    logout(); 
}

function logout() {
    unset($_SESSION['identifiantLogin']);
    session_destroy();
    header("Location: index.php");

}
?>