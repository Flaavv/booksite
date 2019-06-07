
<?php session_start();
include("connexion.php");?>

<h1> Bienvenue, <?php echo $_SESSION['username']; ?></h1><br>
<br>
<h3><a href="?action=add" > Ajouter un livre</a><h3><br>
<h3><a href="?action=modifydelete"> Modifier / supprimer un livre</a><h3><br><hr><br><br>
<?php





if(isset($_SESSION['username'])){
    
    
    if(isset($_GET['action'])){
    if($_GET['action']=='add'){
    if(isset($_POST['submit'])){
        
        $title=$_POST['titre'];
        $author=$_POST['auteur'];
        $price=$_POST['prix'];
        $img = $_FILES['img']['name'];
        $img_tmp = $_FILES['img']['tmp_name'];

        if(!empty($img_tmp)){
            $img_name = explode('.',$img);
            $img_ext = end($img_name);
            if(in_array(strtolower($img_ext),array('jpeg', 'png','jpg'))===false){
             echo 'Le format doit être en jpg, jpeg ou png';

            }else{
                $image_size = getimagesize($img_tmp);
                if($image_size['mime']=='image/jpeg'){
                    $img_src = imagecreatefromjpeg($img_tmp);
                    
            
                
            }elseif($image_size['mime']=='image/png'){
                    $img_src = imagecreatefrompng($img_tmp);
                    
            }else{
                $img_src = false;
                echo 'Veuillez sélectionner un fichier valide';
            }

            if($img_src !== false){
                $image_width=128;
                if($image_size[0]==$image_width){
                    $image_finale = $img_src;
                }else{
                    $new_width[0] = $image_width;
                    $new_height[1] = 200;
                    $image_finale = imagecreatetruecolor($new_width[0], $new_height[1]);
                    imagecopyresampled($image_finale,$img_src,0,0,0,0,$new_width[0],$new_height[1],$image_size[0],$image_size[1]);
                }
                imagejpeg($image_finale, '../img/'.$titre.'.jpg');
                


            
            }
        }

        }else{
            echo 'veuillez selectionner une image ';?><br><?php
        }
       
       
        if($title&&$author&&$price&&$img&&$catégorie){
            $catégorie=$_POST['catégorie'];
            

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
    

    $insert = $db -> prepare("INSERT INTO products VALUES('', '$title', '$author', '$price', '$img', '$catégorie')");
    $insert -> execute();

        }else{
            echo 'remplissez tous les champs';
        }

    }
    
    

    ?>
<form action="" method="POST" enctype="multipart/form-data">

    <p>Titre du livre</p><input type="text" name="titre"/><br>
    <p>Auteur du livre</p><input type="text" name="auteur"/><br>
    <p>Prix du livre</p><input type="text" name="prix"/><br><br>
    <p>Sélectionnez une image </p><input type="file" name="img"><br><br>
    <input type="submit" name="submit" value="Envoyer"/><br><br><br>
    <p>Catégorie<p><select name ="catégorie" id="catégorie">
       
       <?php 
$select=$db->query("SELECT * FROM `catégorie`");
        $select=$db->query("INSERT INTO products VALUES('$catégorie')");
       
        while($s = $select->fetch(PDO::FETCH_OBJ)){
            
            ?><option><?php echo $s->nom; ?></option>
            
        
    }
        
    
    </select>
    
    
    

</form> 

 


    <?php
        }
    }elseif($_GET['action']=='modifydelete'){
    
    
    $select = $db -> prepare("SELECT * FROM products");
    $select -> execute();
        
    while($s=$select->fetch(PDO::FETCH_OBJ)){
            echo $s->titre;?><br><br><?php
                 
                
            

        }



    }else{
        die('Une erreur est survenue');
 
    }
}
}else{

    header('Location : ../catalogue.php');
    
}


?>

