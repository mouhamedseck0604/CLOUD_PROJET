<?php
$host='localhost';
$dbname='gestion_prod';
$username='root';
$password='';
try{
    $connexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo 'Erreur : ' . $e->getMessage();
}
?>