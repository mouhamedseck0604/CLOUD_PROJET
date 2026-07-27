<?php
include 'connexion_bd.php';
try{
    $req=$connexion->prepare("SELECT id, designtion, quantite, prix FROM produits");
    $req->execute();
}catch(PDOException $e){
    echo "Erreure de recuperation des donnees: " . $e->getMessage();
}
?>