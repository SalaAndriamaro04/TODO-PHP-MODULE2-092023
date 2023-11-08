<?php
    include('config/app.php');
    include('fct/request.php');
    include('fct/item.php');

    //--
//--Récupération de la valeur entrée

    $intitule=post('intitule');
    //--
//--Sérialisation pour le stockage de donnée dans un fichier, comme .txt
    //--Récupération de la valeur entrée "intitule"
    $items = getItems();

    //c'est un tableau associatif
    $items[uniqid()]= [
        'checked' => false,
        'intitule' => $intitule
    ];
    
    saveItems($items);


    //--
    //-- Après Traitement de nouvel item
    header('Location:index.php')

?>