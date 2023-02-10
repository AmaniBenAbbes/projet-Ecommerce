<?php
$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/init.php';

include_once ROOT . 'views/includes/header.php'; ?>

<body>
    <?php include_once ROOT . 'views/includes/navbar.php'; ?>
   <div class="container m-5">
   <h3 class="text-center mt-2">Détail du TVA
   <a class="btn btn-primary m-3 float-end" href="<?= URL ?>src/Controller/TvaController.php?param=liste"><i class="fas fa-undo-alt"></i></a>

   </h3>
   <br>
    <p>La TVA est de : <?= $tva->name ?></p>
    <p>Le taux est de : <?= $tva->taux ?></p>
   </div>

    <?php include_once ROOT . 'views/includes/footer.php'; ?>
</body>

</html>