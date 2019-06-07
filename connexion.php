<?php
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