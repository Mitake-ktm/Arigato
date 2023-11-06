<?php



require_once '../../utils/common.php';

require_once SITE_ROOT . 'utils/database.php';


// Le joueur connecté (exemple)

$joueurConnecte = "slt";
// $pseudo_recherche = $_GET['pseudo'];

if(isset($_SESSION['userId']) && isset($_POST['pseudo']))
{
   $userID = $_SESSION['userId']; 
   $pdoStatement = $pdo->prepare('SELECT * From utilisateur WHERE id = :id');
   $pdoStatement->execute([
       ':id' => $userID,
   ]);
   $utilisateur = $pdoStatement->fetch();
}

if (isset($_POST['pseudo'])) {
  $pdoStatement = $pdo->prepare("SELECT J.nom_jeu, U.pseudo, S.difficulte, S.score_partie
  FROM score as S
  LEFT JOIN utilisateur AS U
  ON S.id_joueur = U.id
  LEFT JOIN jeu AS J
  ON S.id_jeu = J.id
  WHERE pseudo LIKE :pseudo 
  ORDER BY J.nom_jeu ASC,S.difficulte DESC,S.score_partie DESC;");
  $pdoStatement->execute([
    ':pseudo' => '%'.$_POST['pseudo'].'%'
  ]);
  $tableau_score = $pdoStatement->fetchAll();
}

else{$pdoStatement = $pdo->prepare('SELECT J.nom_jeu, U.pseudo, S.difficulte, S.score_partie
  FROM score as S
  LEFT JOIN utilisateur AS U
  ON S.id_joueur = U.id
  LEFT JOIN jeu AS J
  ON S.id_jeu = J.id
  ORDER BY J.nom_jeu ASC,S.difficulte DESC,S.score_partie DESC;');
$pdoStatement->execute();
$tableau_score = $pdoStatement->fetchAll();} 

?>



<!DOCTYPE html>

<html lang="fr">

<?php require_once SITE_ROOT . 'partials/head.php'; ?>


<body>

  <?php require_once SITE_ROOT . 'partials/header.php'; ?>



  <main>

    <div class="Fond_tableau">

      <h1 class="titrescore"><span>Tableau Des Scores</span></h1><br>

      <div class="score_recherche">
        <form method="post">
          <input class="recherche_score" type="text" name="pseudo" id="pseudo" placeholder="Pseudo">
        </form>
      </div>

      <div class="score">

        <table>

          <tr>

            <th>Nom de jeu</th>

            <th>Pseudo du joueur</th>

            <th>Niveau de difficulté</th>

            <th>Score du joueur</th>

          </tr>

          <?php foreach ($tableau_score as $score) : ?>

            <tr <?php if ($score->pseudo === $utilisateur->pseudo) echo 'class="highlight"'; ?>>

              <td><?php echo $score->nom_jeu; ?></td>

              <td><?php echo $score->pseudo; ?></td>

              <td><?php echo $score->difficulte; ?></td>

              <td><?php echo $score->score_partie; ?></td>

            </tr>
          <?php endforeach; ?>
        </table>

      </div>

    </div>

  </main>



  <?php require_once SITE_ROOT . 'partials/footer.php'; ?>

</body>



</html