<?php
session_start();
$user='Flav';
$pwd='12345';
if(isset($_POST['submit'])){

    $username=$_POST['username'];
    $password=$_POST['password'];

if($username&&$password){
if($username==$user&&$password==$pwd){
    $_SESSION['username']=$username;
    header('Location: admin.php');
}else{
    echo 'identifiants erronés';
}


    
}else{
    echo 'remplissez tous les champs';

}
}
?>





<h1>Administration - connexion</h1>

<form action="" method="POST">
<p>Pseudo: </p><input type="text" name="username" placeholer="Pseudo"/><br>
<p>Mot de passe: </p><input type="password" name="password" placeholer="Mot de passe"/><br>
<input type="submit" name="submit"/><br>
</form>