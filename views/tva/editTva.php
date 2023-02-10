<?php
$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/init.php';

include_once ROOT . 'views/includes/header.php'; ?>

<body>
    <?php include_once ROOT . 'views/includes/navbar.php'; ?>

    <div class="container m-5">
        <h3 class="text-center m-2">Modifier la TVA
        <a class="btn btn-primary m-3 float-end" href="<?= URL ?>src/Controller/TvaController.php?param=liste"><i class="fas fa-undo-alt"></i></a>

        </h3>
        <form action="<?= URL ?>src/Controller/TvaController.php?param=editTva&id=<?= $tva->id ?>" method="post">
        <?php if ($error) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            <?php endif ?>
            <label for="name" class="label-control">La TVA</label>
            
            <input type="text" value="<?php if(isset($tva->name)) {echo $tva->name;} ?>" name="name" id="name" class="form-control" value ="<?= $tva->name ?>">
            <br>
            <label for="name" class="label-control">Le taux</label>
           
            <input type="number" step="0.001" value="<?php if(isset($tva->taux)) {echo $tva->taux;} ?>" name="taux" id="taux" class="form-control" value ="<?= $tva->taux ?>">
            <p>exemple : pour une tva de 10% entrez 10</p>
            <br>
            <button type="submit" class="btn btn-outline-primary" value = "Enregistrer">Enregistrer</button>
        
        </form>
    </div>

    <?php include_once ROOT . 'views/includes/footer.php'; ?>
</body>

</html>