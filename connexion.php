<?php
// Définir les informations de connexion
$dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
$username = DB_USER;
$password = DB_PASSWORD;

try {
    // Créer la connexion
    $pdo = new PDO($dsn, $username, $password);

    //Configuration des options de PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Vous êtes maintenant connecté à la base de donnée

    //... Votre code pour exécuter des requêtes et effectuer des opérations

    
} catch (PDOException $e) {

    // En cas d'erreur de la connexion, affichage du message d'erreur
    echo "Erreur de connexion : " . $e->getMessage();
}

?>