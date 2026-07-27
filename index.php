<?php
require_once 'Table_produit_req.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>

</head>
<body>
    <div class="w-50 mx-auto mt-3">
        <div class="d-flex justify-content-between mb-2">
            <h2>Liste des produits</h2>
            <button type="button" onclick="window.location.href='form_ajoutproduit.php';" class="btn btn-primary"> Nouveau Produit</button>
        </div>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Designation</th>
                    <th>Quantité</th>
                    <th>Prix</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row=$req->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['designtion'];?></td>
                    <td><?= $row['quantite'];?></td>
                    <td><?= $row['prix'];?></td>
                    
                    <td>
                        <a href="Table_detail.php?id=<?= $row['id']?>" class="btn"><i class="fa-solid fa-eye"></i></a>
                        <a href="formedite_produit.php ?id=<?= $row['id']?>" class="btn"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="delete_produit.php?id=<?php echo $row['id'];?>" class="btn" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');">
                        <i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </tabl>
    </div>
</body>
</html>

