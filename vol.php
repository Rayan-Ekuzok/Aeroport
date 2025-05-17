<?php
include_once 'doLogin.php';
if (isUserLoggedIn()==false){
    header("Location: login.php");
}
?>
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
  <body>
<?php
include_once 'menu.php';
GetNav();   
?>
      
      <h1>Liste des Vols</h1>
      <span id="login">
            <input type="text" placeholder="Recherche" id="BarRecherche" >
            <section class="ContenaireArticle">
            </section>
      </span>
      
      
      <?php 
      include_once 'BDD.php';
      
      $info = getInfoAllVol();
      



      ?>
      
    <br>
    <br>
    <?php
    $compteur = 0;
    if (!isset($_GET["search"]) || $_GET["search"] == "" ){
        echo "
        <form method='get' action='vol.php'>
        <table>
        <tr>";
            
        echo "<td>Id de Vol</td>
        <td>Horaire de Départ</td>
        <td>Horaire d'Arrivé</td>
        <td>Date de Départ</td>
        <td>Date d'Arrivé</td>
        <td>Depart</td>
        <td>Arrive</td>
        <td>Nom de la compagnie</td>
        <td>Id de la Porte</td>
        <td>Id de l'avion</td>
        </tr>";
            
        
        foreach ($info as $key => $value) {
            echo "<tr> ";
            $compteur ++;
            foreach ($value as $key => $value) {
                echo "<td><button name= 'search' value=".$compteur."> " .$value. " </td>";
            }
            echo "</tr>";
    } 
    }   else {
        echo "

        <table>
        <tr>";

        $info2 = getInfoPers($_GET["search"]);

        echo "<td>Id de Vol</td>
        <td>Id de Personnels</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Tâches</td>
        <td>Quantité</td>
        <td>Nom de la ressource</td>
        </tr>";



        foreach ($info2 as $key => $value) {
            echo "<tr> ";
            $compteur ++;
            foreach ($value as $key => $value) {
                echo "<td>".$value. " </td>";
            }
            echo "</tr>";
            }

    
        echo "</table>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        ///////////////////////////////////////////////////////2ème tableau

        echo "

        <table>
        <tr>";

        $info3 = getPassagerVol($_GET["search"]);

        echo "<td>ID Passagers</td>
        <td>Nom</td>
        <td>Prénom</td>
        </tr>";



        foreach ($info3 as $key => $value) {
            echo "<tr> ";
            $compteur ++;
            foreach ($value as $key => $value) {
                echo "<td>".$value. " </td>";
            }
            echo "</tr>";
            }

    
        echo "</table>";
        //////////////////////////////////////////////3
        echo "

        <table>
        <tr>";        
        echo "<br>";
        echo "<br>";
        echo "<br>";

        $info4 = getInfoAvion($_GET["search"]);

        echo "<td>ID Vol</td>
        <td>ID Avion</td>
        <td>Marque</td>
        <td>Modèle</td>
        </tr>";



        foreach ($info4 as $key => $value) {
            echo "<tr> ";
            $compteur ++;
            foreach ($value as $key => $value) {
                echo "<td>".$value. " </td>";
            }
            echo "</tr>";
            }

    
        echo "</table>";
    }
    
    echo "</table></form>";




        echo "<form method='get' action='vol.php'><button name='search' value='' id='buttontrèsimportant' >Retours</button></form>";

?>
    <style>
table {
    margin: 1em;
    border: 1px solid;
    width: 100%;
    padding:10px;
    border-spacing: 0;
    border-collapse: collapse;
}
tr{
    border: 1px solid;
}
td{
    padding: 7px;
    text-align: left;
}
tr:nth-child(even) > td{
    background-color:#cdd2e4;
}
tr:nth-child(odd) > td{
    background-color:#e8eaf5;
}
tr:first-child > td{
    background-color:#5a77b8;
}

button{
    background-color: inherit;
    box-shadow: 0 0px 0px 0 rgba(0,0,0,0), 0 0px 0px 0 rgba(0,0,0,0);
    background: none repeat scroll 0 0 transparent;
    border: medium none;
    border-spacing: 0;
    color: #000000;
    font-family: 'PT Sans Narrow',sans-serif;
    font-size: 16px;
    font-weight: normal;
    line-height: 1.42rem;
    list-style: none outside none;
    margin: 0;
    padding: 0;
    text-align: left;
    text-decoration: none;
    text-indent: 0;
}




    </style>
    </body>
</html>