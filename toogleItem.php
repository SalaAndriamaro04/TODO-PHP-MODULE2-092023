<?php
include('fct/item.php');
include('config/app.php');
include('fct/request.php');
include('config/bd.php');
include('connexion.php');

    $id= get('item');

    $query='UPDATE todo SET checked=1-checked WHERE id=:id';
    $stmt= $pdo->prepare($query);

    $stmt->bindParam('id',$id);

    $stmt->execute();

    //--
    //-- Après Traitement de nouvel item
    header('Location:index.php');

?>