<?php
include 'edite_produit.php';
include 'update.php';
?>
<?php if($row):?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>


</head>
<body class="bg-light">
<div class="container w-25 mt-5 bg-white">
    <h2 class="text-center mb-3 text-primary"><i class="fa-solid fa-pen-to-square"></i> Modification</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="designation" class="form-label">Designation:</label>
                <input type="text" id="designation" name="designation" class="form-control" value="<?=$row['designtion']?>">
            </div>
            <div class="mb-3">
                <label for="quantite" class="form-label">Quantite:</label>
                <input type="number" name="quantite" id="quantite" class="form-control" value="<?=$row['quantite'];?>">
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">Prix:</label>
                <input type="number" name="prix" id="prix" class="form-control" value="<?= $row['prix'];?>">
            </div>
            <div class="d-flex justify-content-between mt-2">
                <div><button type="submit"  name="valider" class="btn btn-primary"><i style="color:white">Enregistrer</i></button></div>
                <div><button type="button" onclick="window.location.href='index.php'" class="btn bg-secondary"><i style="color:white">Annuler</i></button></div>
            </div>
        </form>
</div>
</body>
</html>
<?php endif;?>
