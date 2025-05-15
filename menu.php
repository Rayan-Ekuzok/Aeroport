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
if(isUserLoggedIn()){
    echo " 
        <a href='#'>
        <i class='fa fa-power-off fa-2x'></i>

            Logout

    </a>
    
    </nav>";
        } 
    
if(!isUserLoggedIn()){

    echo "<a href='login.php'>
    <i class='fa fa-cogs fa-2x'></i>

            Connexion

    </a> </nav>";
}


    
    









    }
    if (isUserLoggedIn()){
        echo "<p>Tu est connecter</p>";
    }
}





?>