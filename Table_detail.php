<?php
include 'detail_produit.php';
?>
<?php if($row):?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>

</head>
<body class="bg-light">
    <div class="w-50 mx-auto mt-5 bg-white">
        <div class="d-flex justify-content-between mb-2">
            <h2>Detail Produit</h2>
            <button type="button" onclick="window.location.href='index.php';" class="btn btn-primary"><i class="fa-solid fa-right-from-bracket"></i> Retour</button>
        </div>
        <div>
        <table class="table table-striped">
            <tr>
                <th>Designation</th>
                <td><?=$row['designtion'];?></td>
            </tr>
            <tr>
                <th>Quantite</th>
                <td><?=$row['quantite'];?></td>
            </tr>
            <tr>
                <th>Prix</th>
                <td><?=$row['prix'];?></td>
            </tr>
        </table>
        </div> 
    </div>
</body>
</html>
<?php endif;?>
