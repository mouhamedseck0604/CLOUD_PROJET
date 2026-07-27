<?php
include 'connexion_bd.php';
if(isset($_GET['id'])){
    $id=intval($_GET['id']);
    $req=$connexion->prepare("DELETE FROM produits where id=?");
    $req->execute([$id]);
    $resultat=$req->rowCount();
    if($resultat==1){
        header("location:index.php");
    }
    else{
        echo "etudiant introuvable";
    }
}
?>
