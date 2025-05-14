<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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




?>