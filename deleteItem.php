<?php
include('fct/item.php');
include('config/app.php');
include('fct/request.php');

//Récupère les TODO list existant
    $items=getItems();
//Récupère l'id sur le lien de méthode GET
    $id= get('item');

//Suppression TODO possédant l'id
    unset($items[$id]);
//Sauvegarde du fichier texte avec cette modification
    saveItems($items);

    //--
    //-- renvoi page après Traitement de nouvel TODO
    header('Location:index.php')

?>