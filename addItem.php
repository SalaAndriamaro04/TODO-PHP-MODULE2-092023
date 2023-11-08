<?php
    include('config/app.php');
    include('fct/request.php');
    include('fct/item.php');
    include('config/bd.php');
    include('connexion.php');

    //--
//--Récupération de la valeur entrée

    $intitule=post('intitule');
    
    $query='INSERT INTO todo (intitule) VALUES (:intitule)';
    $stmt= $pdo->prepare($query);

    $intitule=post('intitule');
    $stmt->bindParam('intitule',$intitule);

    $stmt->execute();

    //--
    //-- Après Traitement de nouvel item
    header('Location:index.php')

?>