<?php





function getLiaison(){
    return mysqli_connect("mysql-rayanfellous.alwaysdata.net","413147","LeSelLaBaleine55","rayanfellous_aeroportbdd");
}


function getInfoAllVol(){
    $sqlVols = "select idVol, horaireDepart, horaireArrive, dateDepart, dateArrive, depart, arrive, nom, idPorte, idAvion from vols, destinationaeroport, compagnieaerienne WHERE vols.idDestination = destinationaeroport.idDestination And vols.idComp = compagnieaerienne.idComp;";
    $leFlux = mysqli_query(getLiaison(), $sqlVols);
    $MaListe = mysqli_fetch_all($leFlux);
    return $MaListe;
}


function getInfoAllPassengers(){
    $sqlPass = "select passagers.idPassager, nom, prenom, billet.idBillet, idBagages from passagers, billet, bagages where passagers.idPassager = billet.idPassager and billet.idBillet = bagages.idBillet;";
    $leFlux = mysqli_query(getLiaison(), $sqlPass);
    $MaListe = mysqli_fetch_all($leFlux);
    return $MaListe;
}

function getInfoAllPersonnels(){
    $sqlPass = "select idPers, nom, prenom from personnels;";
    $leFlux = mysqli_query(getLiaison(), $sqlPass);
    $MaListe = mysqli_fetch_all($leFlux);
    return $MaListe;
}

function getUserInformation($identifiant){
   $sqlPers = "SELECT * FROM personnels WHERE login ='".$identifiant."';";
   $leFlux = mysqli_query(getLiaison(), $sqlPers);
   $MaListe = mysqli_fetch_assoc($leFlux);
   return $MaListe;
}

function getPasswordUser($identifiant){
   $sqlPers = "SELECT mdp FROM personnels WHERE login ='".$identifiant."';";
   $leFlux = mysqli_query(getLiaison(), $sqlPers);
   $MaListe = mysqli_fetch_assoc($leFlux);
   if (isset($MaListe['mdp'])) {
        return $MaListe['mdp'];      
   }
   return false;
}

function getInfoPers($identifiant){
    $sqlPers = "SELECT idVol, personnels.idPers, nom, prenom, libelleTache, quantite, nomRessource FROM personnels, assigner, taches, designer, ressources WHERE personnels.idPers = assigner.idPers AND assigner.idTache = taches.idTache AND taches.idTache = designer.idTache and designer.idRessource = ressources.idRessource AND idVol =".$identifiant.";";
    $leFlux = mysqli_query(getLiaison(), $sqlPers);
    $MaListe = mysqli_fetch_all($leFlux);
    return $MaListe;
}

function getPassagerVol($identifiant){
    $sqlPers = "select passagers.idPassager, nom, prenom from billet, passagers WHERE billet.idPassager = passagers.idPassager and idVol =".$identifiant.";";
    $leFlux = mysqli_query(getLiaison(), $sqlPers);
    $MaListe = mysqli_fetch_all($leFlux);
    return $MaListe;
}

function getInfoAvion($identifiant){
    $sqlPers = "select idVol, avion.idAvion, marque, modele from vols, avion where vols.idAvion = avion.idAvion and idVol = ".$identifiant.";";
    $leFlux = mysqli_query(getLiaison(), $sqlPers);
    $MaListe = mysqli_fetch_all($leFlux);
    return $MaListe;
}


function getIDuserbyLoginAndPassword($identifiant,$Password){
    $sqlPers = "select idPers From personnels Where login ='".$identifiant."' AND mdp = '".$Password."';";
    $leFlux = mysqli_query(getLiaison(), $sqlPers);
    $MaListe = mysqli_fetch_assoc($leFlux);
    return $MaListe;
}

function getNamePreNameByID($identifiant){
    $sqlPers = "select personnels.nom, personnels.prenom From personnels Where personnels.idPers = '".$identifiant.";";
    $leFlux = mysqli_query(getLiaison(), $sqlPers);
    $MaListe = mysqli_fetch_assoc($leFlux);
    return $MaListe;
}


?>
