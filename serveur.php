<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'utils/database.php';

$score = $_POST['score'];
$id_joueur = $_SESSION['userId'];
$level = $_POST['level'];

$pdoStatement = $pdo->prepare('INSERT INTO score (id_joueur,id_jeu,difficulte,score_partie) 
VALUES(:id_joueur,:id_jeu,:difficulte,:score_partie)');
$pdoStatement->execute([
    ':id_joueur' => $id_joueur,
    'id_jeu' => 1,
    ':difficulte' => $level,
    ':score_partie' => $score,
]);
?>