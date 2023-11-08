<?php
include('fct/item.php');
include('config/app.php');
include('fct/request.php');

    $items=getItems();

    //Récupération valeur editItem portant le key de la valeur à modifier
    $id= post('editItem');

    $items[$id]['intitule'] = post('intitule');
    
    saveItems($items);


    //--
    //-- Après Traitement de nouvel item
    header('Location:index.php');

?>