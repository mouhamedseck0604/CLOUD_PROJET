<?php
include 'connexion_bd.php';
if(isset($_GET['id'])){
    $id=intval($_GET['id']);
    $req=$connexion->prepare("SELECT * FROM produits where id=?");
    $req->execute([$id]);
    $row=$req->fetch(PDO::FETCH_ASSOC);
}
?>