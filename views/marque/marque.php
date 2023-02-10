<?php
$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/init.php';

include_once ROOT . 'views/includes/header.php'; ?>

<body>
    <?php include_once ROOT . 'views/includes/navbar.php'; ?>
    <div class="container m-5 p-5">
        <h3 class="text-center">Liste des marques</h3>
        <br>
        <a class="btn btn-outline-primary" href="<?= URL ?>src/Controller/MarqueController.php?param=addMarque">ajouter une marque</a>
        <br>
        <br>

    <table class="table border">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">action</th>


        </thead>
        <tbody>
            <?php foreach ($marques as $marque) : ?>
                <tr>
                    <td> <?= $marque->id ?></td>
                    <td> <?= $marque->name ?></td>

                    <td>
                        <a href="<?= URL ?>src/Controller/MarqueController.php?param=deleteMarque&id=<?= $marque->id ?>"><i class="fa-solid fa-trash"></i></a>
                        <a  href="<?= URL ?>src/Controller/MarqueController.php?param=showMarque&id=<?= $marque->id ?>"><i class="fa-solid fa-eye"></i></a>
                        <a href="<?= URL ?>src/Controller/MarqueController.php?param=editMarque&id=<?= $marque->id ?>"><i class="fa-solid fa-pen"></i></a>

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