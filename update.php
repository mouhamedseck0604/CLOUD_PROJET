<?php
include 'connexion_bd.php';
if(isset($_POST['valider']))
{
    $id=intval($_GET['id']);
    $designation=$_POST['designation'];
    $quantite=$_POST['quantite'];
    $prix=$_POST['prix'];
   

    $sql=$connexion->prepare("UPDATE produits set designtion=?, quantite=?, prix=? where id=?");
    $sql->execute([$designation,$quantite,$prix,$id]);
    header("location:index.php");
}
?>
