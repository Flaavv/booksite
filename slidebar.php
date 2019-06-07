<style>
    hr {
  border: none;
  border-bottom: 1px solid white; 

}
.slidebar{
    border-radius: 13px;
    padding: 9px;
}
</style>
<div class="slidebar">
    <h4> Derniers livres</h4><hr>


<?php

$select = $db -> prepare("SELECT * FROM products ORDER BY id  DESC LIMIT 0, 2");
$select -> execute();
        
    while($i=$select->fetch(PDO::FETCH_OBJ)){
            ?>
            <h4><?php echo $i->titre; ?>,</h4>
            <p><?php echo $i->auteur;?>,</p>
            <p><?php echo $i->prix; ?>€</p><hr>
            
            <?php
        }

?>
</div>