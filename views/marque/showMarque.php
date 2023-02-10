<?php
$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/init.php';

include_once ROOT . 'views/includes/header.php'; ?>

<body>
    <?php include_once ROOT . 'views/includes/navbar.php'; ?>
   <div class="container m-5">
   <h3 class="text-center">Détail de l'article</h3>
   <br>
    <p>La marque : <?= $marque->name ?></p>
    <a href="<?= URL ?>src/Controller/MarqueController.php?param=liste"><i class="fa-solid fa-left-long"></i></a>
   </div>

    <?php include_once ROOT . 'views/includes/footer.php'; ?>
</body>

</html>