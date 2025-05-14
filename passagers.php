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
    
    

      <h1>Liste des Passagers</h1>
      <span id="login">
            <input type="text" placeholder="Recherche" id="BarRecherche" >
            <section class="ContenaireArticle">
            </section>
      </span>
      
      
      <?php 
      include_once 'BDD.php';
      
      $info = getInfoAllPassengers();
      



      ?>
      
    <br>
    <br>
        <table>
        <tr>
            <td>Id du Passagers</td>
            <td>Nom du Passagers</td>
            <td>Prenom du Passagers</td>
            <td>Id Billet</td>
            <td>Id Bagages</td>
            </tr>
                <?php


                foreach ($info as $key => $value) {
                    echo "<tr>";
                    foreach ($value as $key => $value) {
                        echo "<td> " .$value. " </td>";
                    }
                    echo "</tr>";




                }


                
                ?>
        </table>


<article>

</article>
      
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



    </style>
    </body>
</html>