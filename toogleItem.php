<?php
include('fct/item.php');
include('config/app.php');
include('fct/request.php');

    $items=getItems();
    $id= get('item');
    
    $items[$id]['checked'] = !$items[$id]['checked'];
    saveItems($items);

    //--
    //-- Après Traitement de nouvel item
    header('Location:index.php');

?>