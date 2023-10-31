<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'utils/database.php';
?>

<!DOCTYPE html>
<html lang="fr">
<?php require_once SITE_ROOT . 'partials/head.php'; ?>
<body>
<?php require_once SITE_ROOT . 'partials/header.php'; ?>
    
<div class="titre_connexion">
    <h1>Inscription</h1>
</div>

<div class="Formulaire_de_connexion">
    <form method="post" action="traitement.php">
        <input type="text" name="email" id="email" placeholder=Email style="width: 500px; height: 40px; background-color: #272645 ;
        border-style: none; border-radius: 3px;">
        <br>
        <br>
        <input type="text" name="pseudo" id="pseudo" placeholder=Pseudo style="width: 500px; height: 40px; background-color: #272645 ;
        border-style: none; border-radius: 3px;">
        <br>
        <br>
        <input type="password" name="passe" id="passe" placeholder="Mot de passe" style="width: 500px; height: 40px; background-color: #272645 ;
        border-style: none; border-radius: 3px;">
        <br>
        <br>
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirmer le mot de passe" style="width: 500px; height: 40px; background-color: #272645 ;
        border-style: none; border-radius: 3px;">
        <br>
        <br>
        <button onclick="window.location.href = 'index.html'" class="bouton_connexion">Connexion</button>
</form>
</div>


<?php require_once SITE_ROOT . 'partials/footer.php'; ?>
</body>
</html>