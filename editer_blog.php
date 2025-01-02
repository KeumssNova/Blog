<?php
include "config_blog.php" ;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $categorie = $_POST['categorie'];

    try { 
            $req = $connexion->prepare("INSERT INTO billet_blog (titre,contenu,categorie) VALUES (?,?,?)" );
            $req->execute([$titre,$contenu,$categorie]);

    } catch(Exception $e) {
        die("Erreur lors de l'insertion".$e->getMessage());
    }
}