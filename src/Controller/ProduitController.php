<?php

use App\Model\Repository\MarqueRepository;
use App\Model\Repository\ProduitRepository;
use App\Model\Repository\TvaRepository;

$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/init.php';
include_once $path . '/src/Model/Repository/ProduitRepository.php';
include_once $path . '/src/Model/Repository/TvaRepository.php';
include_once $path . '/src/Model/Repository/MarqueRepository.php';

$produitRepo = new ProduitRepository();
$marqRepo = new MarqueRepository();
$tvaRepo = new TvaRepository();
//je recupere le param passé ds l'URL
if ($_GET['param']) {
    $param = $_GET['param'];
}
switch ($param) {
    case 'liste':
        $produits = $produitRepo->findAll();
        include_once ROOT . 'views/produit/produit.php';
        break;
    case 'addProduit':
        $marques = $marqRepo->findAll();
        $tvas = $tvaRepo->findAll();
        if ($_POST) {
            $produitRepo->add($_POST);
            header("location: ProduitController.php?param=liste");
        }
        include_once ROOT . 'views/produit/addProduit.php';
        break;
    case 'deleteProduit':
        $id = $_GET['id'];
        $produitRepo->delete($id);
        header("location: ProduitController.php?param=liste");
        break;
        case 'showProduit':
            $id = $_GET['id'];
            $produit = $produitRepo->find($id);
            include_once ROOT . 'views/produit/showProduit.php';
            break;
}
