<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'utils/database.php';
?>

<!DOCTYPE html>
<html lang="fr">
<?php require_once SITE_ROOT . 'partials/head.php'; ?>
<body>
<?php require_once SITE_ROOT . 'partials/header.php'; ?>

    <main>
        <div class="titre_connexion">
            <h1>Mon Compte</h1>
        </div>
        
        <div class="Formulaire_de_connexion">
            <form method="post" action="traitement.php">
                <label for="email">Changer votre mail :</label>
                <br>
                <br>
                <input type="text" name="email" id="email" placeholder="Ancien Mail" style="width: 500px; height: 40px; background-color: #272645 ;
                border-style: none; border-radius: 3px;">
                <br>
                <br>
                <input type="text" name="email" id="email" placeholder="Nouveau Mail" style="width: 500px; height: 40px; background-color: #272645 ;
                border-style: none; border-radius: 3px;">
                <br>
                <br>
                <input type="password" name="passe" id="passe" placeholder="Mot de passe" style="width: 500px; height: 40px; background-color: #272645 ;
                border-style: none; border-radius: 3px;">
                <br>
                <br>
                <button onclick="window.location.href = 'index.html'" class="bouton_connexion">Changer l'email</button>
        </form>
        </div>

                
        <div class="Formulaire_de_connexion">
            <form method="post" action="traitement.php">
                <label for="passe">Changer votre mot de passe :</label>
                <br>
                <br>
                <input type="password" name="passe" id="passe" placeholder="Ancien Mot de passe" style="width: 500px; height: 40px; background-color: #272645 ;
                border-style: none; border-radius: 3px;">
                <br>
                <br>
                <input type="password" name="passe" id="passe" placeholder="Nouveau Mot de passe" style="width: 500px; height: 40px; background-color: #272645 ;
                border-style: none; border-radius: 3px;">
                <br>
                <br>
                <input type="password" name="passe" id="passe" placeholder="Comfirmer Mot de passe" style="width: 500px; height: 40px; background-color: #272645 ;
                border-style: none; border-radius: 3px;">
                <br>
                <br>
                <button onclick="window.location.href = 'index.html'" class="bouton_connexion">Changer le mot de passe</button>
        </form>
        </div>
    </main>
    <?php require_once SITE_ROOT . 'partials/footer.php'; ?>
</body>
</html>