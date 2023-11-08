<?php
include('fct/item.php');
include('config/app.php');
include('fct/request.php');
include('config/bd.php');
include('connexion.php');

#TODO à supprimer

    //Récupération valeur editItem portant le key de la valeur à modifier
    $id= post('editItem');

    $query='UPDATE todo SET intitule=:intitule WHERE id=:id';
    $stmt= $pdo->prepare($query);

    $stmt->bindParam('intitule',post('intitule'));
    $stmt->bindParam('id',$id);

    $stmt->execute();

    //--
    //-- Après Traitement de nouvel item
    header('Location:index.php');

?>