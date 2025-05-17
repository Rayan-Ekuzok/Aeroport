<?php










include_once 'BDD.php';


$salt = 'SelLaBaleine';

function GetSalt(){
    return 'SelLaBaleine';
}

function HashPassword($password){
    return hash('sha256', $password.GetSalt());
}

function IsPasswordTheSameAsHash($password,$identifiant){
    return HashPassword($password) == getPasswordUser($identifiant);
}

session_start();

function isUserLoggedIn() {
    if (isset($_SESSION['identifiantLogin']) && session_status() == 2){
        return true;
    }
    else {
        return false;
    }
}

function redirectIfNotLoggedIn() {
    if (!isUserLoggedIn()) {
        header("Location: login.php");
        exit();
    }
}


?>