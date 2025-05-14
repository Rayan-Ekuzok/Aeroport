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
  <body><div class="area"></div><nav class="main-menu">


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
    <form method="get" action="vol.php">
        <table>
        <tr>
            <td>Id de Vol</td>
            <td>Horaire de Départ</td>
            <td>Horaire d'Arrivé</td>
            <td>Date de Départ</td>
            <td>Date d'Arrivé</td>
            <td>Depart</td>
            <td>Arrive</td>
            <td>Nom de la compagnie</td>
            <td>Id de la Porte</td>
            <td>Id de l'avion</td>
            </tr>
                <?php

                $compteur = 0;
                foreach ($info as $key => $value) {
                    echo "<tr> ";
                    $compteur ++;
                    foreach ($value as $key => $value) {
                        echo "<td><button name= 'search' value=".$compteur."> " .$value. " </td>";
                    }
                    echo "</tr>";




                }


                
                ?>
        </table>
                
            </form>

      
    <style>
    
    table {
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