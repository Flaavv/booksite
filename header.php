<?php
session_start();


    try
    {
        $db = new PDO('mysql:host=localhost;dbname=booksite', 'root', '1234512345');
        $db -> setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e){
        echo 'Une erreur est survenue';
        die();
    }
?>





<!DOCTYPE html>
<html>
    <head>
    <link type="text/css" rel="stylesheet" href="style/bootstrap.css"/>
    <meta charset="UTF8">
</head>
<header>
<br/><h1>Notre librairie en ligne</h1><br/>
    <style>
    .menu {
    border-radius: 6px;
    padding: 9px;
}
    </style>

<ul class="menu">
        <li> <a href="index.php">Acceuil</a></li>
        <li><a href="catalogue.php">Catalogue</a></li>
        <li><a href="panier.php">Panier</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="connexion.php">Connexion</a></li>



    </ul>
</header>


</html>


