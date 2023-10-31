<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'utils/database.php';
?>

<!DOCTYPE html>
<html lang="fr">
<?php require_once SITE_ROOT . 'partials/head.php'; ?>
<body>
<?php require_once SITE_ROOT . 'partials/header.php'; ?>

    <div class="titre_shop">
      <h1>Magasin</h1>
    </div>

    <!----------METTRRE CODE MAIN ICI ------------>

    <div class="image-container">
      <img
        src="../assets/images/Mon_fuji_carte.png"
        alt="Carpe dorée shop" />

      <img src="assets/images/Musashi_carte.png" alt="Musashi" />
      <img src="assets/images/Carte_carpe_shop.jpg" alt="Carpe Dorée" />
    </div>

    <div class="Article_shop">
      <div class="heading-container">
        <h3>Mont fuji</h3>
        <p>100 Yen</p>
      </div>

      <div class="heading-container">
        <h3>Musashi</h3>
        <p>100 Yen</p>
      </div>

      <div class="heading-container">
        <h3>Carpe Dorée</h3>
        <p>100 Yen</p>
      </div>
    </div>

    <div class="image-container">
      <img src="assets/images/Japan_Carte.jpeg" alt="Japan Carte" />
      <img src="assets/images/Temple_shinto.avif" alt="Temple Shinto" />
      <img src="assets/images/coding_carte.jpeg" alt="Coding factory logo" />
    </div>

    <div class="Article_shop">
      <div class="heading-container">
        <h3>Carte Japon</h3>
        <p>100 Yen</p>
      </div>

      <div class="heading-container">
        <h3>Temple Shinto</h3>
        <p>100 Yen</p>
      </div>

      <div class="heading-container">
        <h3>Coding factory</h3>
        <p>100 Yen</p>
      </div>
    </div>

    <?php require_once SITE_ROOT . 'partials/footer.php'; ?>
  </body>
</html>
