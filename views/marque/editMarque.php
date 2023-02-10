<?php
$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/init.php';

include_once ROOT . 'views/includes/header.php'; ?>

<body>
    <?php include_once ROOT . 'views/includes/navbar.php'; ?>

    <div class="container m-5">
        <h3 class="text-center">Modifier l'article</h3>
        <form action="<?= URL ?>src/Controller/MarqueController.php?param=editMarque&id=<?= $marque->id ?>" method="post">

            <label for="name" class="label-control">Nom de la marque</label>
            
            <input type="text" name="name" id="name" class="form-control" value ="<?= $marque->name ?>">
            
            <button type="submit" class="btn btn-outline-primary" value = "Enregistrer">Enregistrer</button>
        
        </form>
        <a href="<?= URL ?>src/Controller/MarqueController.php?param=liste"><i class="fa-solid fa-left-long"></i></a>
    </div>

    <?php include_once ROOT . 'views/includes/footer.php'; ?>
</body>

</html>