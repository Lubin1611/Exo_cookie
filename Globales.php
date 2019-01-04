<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 04/01/2019
 * Time: 10:21
 */

session_start();

$nav = $_SERVER['HTTP_USER_AGENT'];
$ip =  $_SERVER['REMOTE_ADDR'];
$nom = $_SERVER['SERVER_NAME'];

$nom = "Michel";
$prenom = "Troigros";
$age = "40";

$_SESSION["varNom"] = $nom;
$_SESSION["varPrenom"] = $prenom;
$_SESSION["varAge"] = $age;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php echo $nav ?>
<?php echo $ip ?>
<?php echo $nom ?>



Lien vers la 2 ème page <a href="Index2.php">Aller a la page 2</a>
<br><br>
<form action="Index2.php" method="post">
    <label for = "login">Entrez votre nom Utilisateur</label><input type="text" name="login" id = "login">
    <label for = "mdp">Votre mdp</label><input type="password" name="mdp" id="mdp">
    <input type="submit" value="Envoyez">
</form>

</body>
</html>