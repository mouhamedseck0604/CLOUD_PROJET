<?php
require_once 'ajout_produit.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>


</head>
<body class="bg-light">
<div class="container w-25 bg-white mt-5">
    <h2 class="text-center mb-3 text-primary"><i class="fa-solid fa-user-plus"></i> Ajout Etudiant</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="designation" class="form-label">Designation:</label>
                <input type="text" id="nom" name="designation" class="form-control">
            </div>
            <div class="mb-3">
                <label for="quantite" class="form-label">Quantité:</label>
                <input type="number" name="quantite" id="quantite" class="form-control">
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">prix:</label>
                <input type="number" name="prix" id="prix" class="form-control">
            </div>
            <div><button type="submit"  name="valider" class="btn btn-primary w-100"><i style="color:white">Enregistrer</i></button></div>
            <div class="text-center">
            <i style="color:red">
            <?php
            if(!empty($message)):
                echo $message;
            endif;
            ?>
            </i>
        </form>
</div>
</body>
</html>