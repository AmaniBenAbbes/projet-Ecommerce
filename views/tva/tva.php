<?php
$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/init.php';

include_once ROOT . 'views/includes/header.php'; ?>

<body>
    <?php include_once ROOT . 'views/includes/navbar.php'; ?>
    <div class="container m-5 p-5">
        <h3 class="text-center">Liste des TVA</h3>
        <br>
        <a class="btn btn-outline-primary" href="<?= URL ?>src/Controller/TvaController.php?param=addTva">ajouter une TVA</a>
        <br>
        <br>

        <table class="table border">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Taux</th>
                    <th scope="col">action</th>
                </tr>


            </thead>
            <tbody>
                <?php foreach ($tvas as $tva) : ?>
                    <tr>
                        <td> <?= $tva->id ?></td>
                        <td> <?= $tva->name ?></td>
                        <td> <?= $tva->taux ?></td>

                        <td>
                            <a href="<?= URL ?>src/Controller/TvaController.php?param=deleteTva&id=<?= $tva->id ?>"><i class="fa-solid fa-trash"></i></a>
                            <a href="<?= URL ?>src/Controller/TvaController.php?param=showTva&id=<?= $tva->id ?>"><i class="fa-solid fa-eye"></i></a>
                            <a href="<?= URL ?>src/Controller/TvaController.php?param=editTva&id=<?= $tva->id ?>"><i class="fa-solid fa-pen"></i></a>

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