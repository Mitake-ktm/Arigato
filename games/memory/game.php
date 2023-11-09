<?php
require_once '../../utils/common.php';
require_once SITE_ROOT . 'utils/database.php';
?>
<!DOCTYPE html>
<html lang="fr">
<?php require_once SITE_ROOT . 'partials/head.php'; ?>

<body>
  <?php require_once SITE_ROOT . 'partials/header.php'; ?>

  <div class="game">
    <div class="controls">
      <button>Début</button>
      <div class="stats">
        <div class="moves">0 mouvement</div>
        <div class="timer">time: 0 sec</div>
      </div>
    </div>
    <div class="board-container">
      <div id="level" class="board"></div>
      <div class="win">Tu as gagné!</div>
    </div>
  </div>

  <?php require_once SITE_ROOT . 'chat.php'; ?>
  <script src="../../assets/js/script.js" defer></script>
  
</body>
</html>