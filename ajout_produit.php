<?php
$message='';
include 'connexion_bd.php';
if(isset($_POST['valider']))
{
    if(!empty($_POST['designation']) && !empty($_POST['quantite']) && !empty($_POST['prix']))
    {
        $designation = htmlspecialchars($_POST['designation']);
        $quantite =intval($_POST['quantite']);
        $prix =intval($_POST['prix']);
        try{
            $sql="INSERT INTO produits(designtion,quantite,prix) VALUES (?,?,?)";
            $req = $connexion->prepare($sql);
            $result= $req->execute([$designation,$quantite,$prix]);
            if($result==true)
            {
                header("location:index.php");
            }
            else $message = "Echec de l'insertion";
        }catch (Exception $e){
            echo "Erreur lors de l'insertion". $e->getMessage();
        }
        
    }
    else $message = "Veuillez remplir tous les champs";
}
?>
