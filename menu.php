<?php

function GetNav(){
    echo"
        <nav class='main-menu'>
    <a href='index.php'>
        <i class='fa fa-home fa-2x'></i>
        Accueil
    </a> 

    ";
    if (isset($_SESSION['identifiantLogin'])) {

    



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

    echo " 
    <a href='#'>
        <input type='submit' name='button1'
                class='button' value='Button1' />

            Logout

    </a>
    
    </nav>";
        }
    if(!isset($_SESSION['identifiantLogin'])) {

    




    echo "<a href='login.php'>
    <i class='fa fa-cogs fa-2x'></i>

            Connexion

    </a> </nav>";





    }
    if (isset($_SESSION['identifiantLogin'])){
        echo "<p>Tu est connecter</p>";
    }
}


if(array_key_exists('button1', $_POST)) {
            button1();
}

function button1(){
    session_abort();
}
?>