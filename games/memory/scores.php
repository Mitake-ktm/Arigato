<?php



require_once '../../utils/common.php';

require_once SITE_ROOT . 'utils/database.php';


// Le joueur connecté (exemple)

$joueurConnecte = "slt";


$pdoStatement = $pdo->prepare('SELECT J.nom_jeu, U.pseudo, S.difficulte, S.score_partie
  FROM score as S
  LEFT JOIN utilisateur AS U
  ON S.id_joueur = U.id
  LEFT JOIN jeu AS J
  ON S.id_jeu = J.id
  WHERE S.id_jeu = 1 AND U.id = 1 AND S.difficulte = 1
  ORDER BY J.nom_jeu ASC,S.difficulte ASC,S.score_partie DESC;');
$pdoStatement->execute();
$tableau_score = $pdoStatement->fetchAll();
?>


<!DOCTYPE html>

<html lang="fr">

<?php require_once SITE_ROOT . 'partials/head.php'; ?>


<body>

  <?php require_once SITE_ROOT . 'partials/header.php'; ?>



  <main>

    <div class="Fond_tableau">

      <h1 class="titrescore"><span>Tableau Des Scores</span></h1><br>

      <div class="score">

        <table>

          <tr>

            <th>Nom de jeu</th>

            <th>Pseudo du joueur</th>

            <th>Niveau de difficulté</th>

            <th>Score du joueur</th>

          </tr>

          <?php foreach ($tableau_score as $score) : ?>

            <tr <?php if ($score->pseudo === $joueurConnecte) echo 'class="highlight"'; ?>>

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