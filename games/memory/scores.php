<?php
require_once '../../utils/common.php';
require_once SITE_ROOT . 'utils/database.php';
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
            <th>Niveau de difficulté de la partie jouée</th>
            <th>Score du joueur</th>
            <th>Date et heure de la partie</th>
          </tr>
          <tr>
            <td>shinkei_suijaku</td>
            <td>KILIAN</td>
            <td>2</td>
            <td>150</td>
            <td>05h10/19/10/23</td>
          </tr>
          <tr>
            <td>shinkei_suijaku</td>
            <td>ANTONY</td>
            <td>3</td>
            <td>300</td>
            <td>14h51/19/10/23</td>
          </tr>
          <tr>
            <td>shinkei_suijaku</td>
            <td>KÉVIN</td>
            <td>1</td>
            <td>120</td>
            <td>23h14/19/10/23</td>
          </tr>
          <tr>
            <td>shinkei_suijaku</td>
            <td>ENZO</td>
            <td>1</td>
            <td>120</td>
            <td>18h37/19/10/23</td>
          </tr>
        </table>
    </div>
</div>





    </main>
    <?php require_once SITE_ROOT . 'partials/footer.php'; ?>
</body>
</html>