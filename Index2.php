<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 04/01/2019
 * Time: 10:41
 */

session_start();

$time = 365*24*3600;

if (isset($_POST["login"]) && isset($_POST["mdp"])) {

setcookie("firstcookie", $_POST["login"], time() + $time);
setcookie("secondCookie", $_POST["mdp"], time() + $time);

}

?>

<?php echo $_COOKIE["firstcookie"];?>

<?php echo $_COOKIE["secondCookie"];?>

Aller accéder a la troisième page <a href="index3.php">Lien vers ma 3 eme page</a>