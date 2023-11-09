<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'utils/database.php';

$message = $_POST['message'];
$id_joueur = $_SESSION['userId'];
$id_jeu = 1;

$messages = nl2br(htmlspecialchars($_POST['message']));

        $pdoStatement = $pdo->prepare('INSERT INTO message (id_jeu,id_expediteur,message) VALUE(:id_jeu,:id_expediteur,:message)');
        $pdoStatement->execute([
            ':id_jeu' => $id_jeu,
            ':message' => $message,
            ':id_expediteur' => $id_joueur,
        ]); 
?>