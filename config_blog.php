<?php
session_start();
$connexion = @mysqli_connect("localhost", "root", "",false,0) or
 die("Échec de la connexion.");
$bd = @mysqli_select_db($connexion,"blog") or die(mysqli_error($connexion));

//echo 'Connexion bdd réussie';
require_once "smarty/libs/Smarty.class.php";
$smarty = new Smarty();
//$smarty->display('test.tpl');
$smarty->display('edition_blog.tpl');
?> 