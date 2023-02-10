<?php
$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/init.php';

include_once ROOT . 'views/includes/header.php'; ?>

<body>
    <?php include_once ROOT . 'views/includes/navbar.php'; ?>
    <div class="container m-5 p-5">
        <h3 class="text-center">Liste des produits</h3>
        <br>
        <a class="btn btn-outline-primary" href="<?= URL ?>src/Controller/ProduitController.php?param=addProduit">ajouter un produit</a>
        <br>
        <br>

        <table class="table border">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Reférence</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Marque</th>
                    <th scope="col">Image</th>
                    <th scope="col">action</th>
                </tr>


            </thead>
            <tbody>
                <?php foreach ($produits as $produit) : ?>
                    <tr>
                        <td> <?= $produit->id ?></td>
                        <td> <?= $produit->name ?></td>
                        <td> <?= $produit->ref ?></td>
                        <td> <?= $produit->prix_unit ?></td>
                        <td> <?= $produit->quantity ?></td>
                        <td> <?= $produit->marque_id ?></td>
                        <td> <?= $produit->image ?></td>

                        <td>
                            <a href="<?= URL ?>src/Controller/ProduitController.php?param=deleteProduit&id=<?= $produit->id ?>"><i class="fa-solid fa-trash"></i></a>
                            <a href="<?= URL ?>src/Controller/ProduitController.php?param=showProdui&id=<?= $produit->id ?>"><i class="fa-solid fa-eye"></i></a>
                            <a href="<?= URL ?>src/Controller/ProduitController.php?param=editProdui&id=<?= $produit->id ?>"><i class="fa-solid fa-pen"></i></a>

                        </td>

                    </tr>
                <?php endforeach ?>
                </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    <?php include_once ROOT . 'views/includes/footer.php'; ?>
</body>

</html>