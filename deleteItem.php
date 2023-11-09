<?php
include('fct/item.php');
include('config/app.php');
include('fct/request.php');
include('config/bd.php');
include('connexion.php');

//Récupère les TODO list existant
//Récupère l'id sur le lien de méthode GET
    $id= get('item');

    $query='DELETE FROM todo WHERE id=:id';
    $stmt= $pdo->prepare($query);

    $stmt->bindParam('id',$id);

    $stmt->execute();

    //--
    //-- renvoi page après Traitement de nouvel TODO
    header('Location:index.php')

?>