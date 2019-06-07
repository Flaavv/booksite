<style>
    h3{
        color:blue;
        
    }
    hr {
       border: none;
       border-bottom: solid 1px green;
}
</style>

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
//include('../include/connexion.php');
require_once("include/header.php");
require_once("include/slidebar.php");?><br><br><?php


$select = $db -> prepare("SELECT * FROM products");
$select -> execute();

        
    while($i=$select->fetch(PDO::FETCH_OBJ)){
            ?>
            
            <h2><?php echo $i->titre; ?>,</h2>
            <h3><?php echo $i->auteur;?>,</h3>
            <h4><?php echo $i->prix; ?>€</h4>
            <img src="img/<?php echo $i->titre; ?>.jpg"/>
            <hr>
            
            <?php
        }

require_once("include/footer.php");
?>