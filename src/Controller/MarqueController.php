<?php

use App\Model\Repository\MarqueRepository;

$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/init.php';
include_once $path . '/src/Model/Repository/MarqueRepository.php';

$marqRepo = new MarqueRepository();
//je recupere le param passé ds l'URL
if($_GET['param']){
    $param = $_GET['param'];
}


switch ($param){
    //je test le param passé dans l'URL
    case 'liste':
        //param = liste donc j'affiche la liste des marque
        $marques = $marqRepo->findAll();
        include_once ROOT . 'views/marque/marque.php';
        break;
        //param = addMarque j'affiche le formulaire pr ajouter une marque
    case 'addMarque':
        if($_POST){
                $marqRepo->add($_POST);
                header("location: MarqueController.php?param=liste");
        }
        include_once ROOT . 'views/marque/addMarque.php';
        break;
    case 'deleteMarque':
        $id = $_GET['id'];
        //je recupére l'enregistrement à modifié pour completer les input du formulaire
        //la reccupéation se fait avant le modif
        $marqRepo->delete($id);
        header("location: MarqueController.php?param=liste");
        break;
    case 'showMarque':
        $id = $_GET['id'];
        $marque = $marqRepo->find($id);
        include_once ROOT . 'views/marque/showMarque.php';
        break;
    case 'editMarque':
        $id = $_GET['id'];
        $marque = $marqRepo->find($id);
        if($_POST){
            $marqRepo->edit($_POST, $id);
            header("location: MarqueController.php?param=liste");
        }
        include_once ROOT . 'views/marque/editMarque.php';
        break;
}