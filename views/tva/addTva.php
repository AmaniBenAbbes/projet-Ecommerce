<?php
$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/init.php';

include_once ROOT . 'views/includes/header.php'; ?>

<body>
    <?php include_once ROOT . 'views/includes/navbar.php'; ?>

    <div class="container">
        <h3 class="mt-2 text-center">Ajouter une TVA
            <a class="btn btn-primary m-3 float-end" href="<?= URL ?>src/Controller/TvaController.php?param=liste"><i class="fas fa-undo-alt"></i></a>
        </h3>
        <form action="<?= URL ?>src/Controller/TvaController.php?param=addTva" method="post">
            <?php if ($error) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            <?php endif ?>
            <label for="name" class="label-control">Nom du TVA</label>

            <input type="text" value="<?php if(isset($name)){ echo $name;} ?>" name="name" id="name" class="form-control">
            <br>

            <label for="taux" class="label-control">Taux du TVA</label>

            <input type="number" step="0.001" name="taux" id="taux" class="form-control">
            <p>exemple : pour une tva de 10% entrez 10</p>
            <br>
            <button type="submit" class="btn btn-light" value="Enregistrer">Enregistrer</button>

        </form>
    </div>

    <?php include_once ROOT . 'views/includes/footer.php'; ?>
</body>

</html>