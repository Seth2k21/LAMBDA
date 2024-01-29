<?php
session_start();
//Connexion à la base de données
function dbConnect(){
    try{
        $db = new PDO('mysql:host=localhost;dbname=LAMBDA;charset=utf8', 'mich', '123456');
        return $db;
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
}


//Ajouter un user
function ajouteretudiants($nom, $prenoms, $datenaissance,$sexe, $adresse,$email, $numtelephone,$pass){
    $db = dbConnect();
    $req = $db->prepare('INSERT INTO etudiants(nom, prenoms, datenaissance,sexe, adresse,email, numtelephone,pass) VALUES(?,?,?,?,?,?,?,?)');
    if($req->execute(array($nom, $prenoms, $datenaissance,$sexe, $adresse,$email, $numtelephone,$pass)))
        return true;
    else
        return false;
}

function afficheEmail($email) {
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM etudiants WHERE email = ?');
    $req->execute(array($email));
    $result = $req->fetchAll();

    return $result; 
}


function affichefiliere(){
    $db = dbConnect();

    $req = $db->query('SELECT * from matiere');
    $req->execute();
    return $req;
}


function connectionadmin($email, $pass) {
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM admin WHERE email = ? AND pass = ?');
    $req->execute(array($email, $pass));
    return $req;
}


function afficheetudiants(){
    $db = dbConnect();

    $req = $db->query('SELECT * from etudiants');
    $req->execute();
    return $req;
}



function listetu($libmat){
    $db = dbConnect();

    $req = $db->prepare('SELECT * FROM etudiants   WHERE matri = ?');
    $req->execute(array($libmat));
    return $req;
}

function updateee($status, $cours, $matri){
    $db = dbConnect();
    $req = $db->prepare('UPDATE etudiants SET statuts=?, cours=? WHERE matri=?');
    
    if($req->execute(array($status, $cours, $matri)))
        return true;
    else
        return false;
}
