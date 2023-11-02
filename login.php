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
    <h1>CONNEXION</h1>
</div>

<div class="Formulaire_de_connexion">
<?php 

if (!empty($_GET)){

    if (isset($_GET['email']) && isset($_GET['passe'])) {
        $pdoStatement = $pdo->prepare('SELECT id,email,mot_de_passe,pseudo from utilisateur
        where  email = :email && mot_de_passe = :passe;');
        $pdoStatement->execute([
            ':email'=> $_GET['email'],
            ':passe'=>  hash('sha512', $_GET['passe']),
        ]);
        $user = $pdoStatement->fetch();
        
        if($user){
            $_SESSION['userId'] = $user->id;
        }

    }

}
    if(isset($_SESSION['userId']) && isset($_GET['pseudo'])){

        $message_connexion = 'connecté en tant que ' . $user->pseudo;
    }

?>
    <form method="get">
        <input type="text" name="email" id="email" placeholder=Email style="width: 500px; height: 40px; background-color: #272645 ;
        border-style: none; border-radius: 3px;">
        <br>
        <br>
        <input type="password" name="passe" id="passe" placeholder="Mot de passe" style="width: 500px; height: 40px; background-color: #272645 ;
        border-style: none; border-radius: 3px;">
        <br>
        <br>
        <div class="erreur_php">
            <p>
                <?php 
                if(isset($_SESSION['userId']) && isset($_GET['pseudo']))
                {
                    echo $message_connexion;
                }
                
                ?>
            </p>
        </div>
        <br>
        <button class="bouton_connexion">Connexion</button>
    </form>
</div>




<footer>
    <div class="footer">
    <div class="information">
    <h1>information</h1>
    <p>Comment nous contacter</p>
    <p><span class="orange">Tel :</span> 0767697839 </p>
    <p><span class="orange">Email :</span> support@shinkei_suijaku.com </p>
    <p><span class="orange">Location :</span> Paris </p>
    <a target="_blank" href="https://www.facebook.com/">
        <i class="fa-brands fa-facebook-f logo"></i>
    </a>
    <a target="_blank" href="https://twitter.com/home">
        <i class="fa-brands fa-x-twitter logo"></i>
    </a>
    <a target="_blank" href="https://google.com">
        <i class="fa-brands fa-google logo"></i>
    </a>
    <a target="_blank" href="https://www.pinterest.fr/">
        <i class="fa-brands fa-pinterest logo"></i>
    </a>
    <a target="_blank" href="https://www.instagram.com/">
        <i class="fa-brands fa-instagram logo"></i>
    </a>
    </div>
    <div class="footer_jeu">
        <h1>Shinkei Suijaku</h1>
        <ul class="orange">
            <li><a href="memory.html">Jouer !</a></li>
            <li><a href="scores.html">les scores</a></li>
            <li><a href="contact.html">Nous contacter</a></li>
        </ul>
    </div>
    </div>
    <a class="bouton_header" href="#headerroute"><i class="fa-solid fa-chevron-up"></i></a>
    <p class="footer_down">Copyright © 2023 Tous droits réservés</p>
</footer>
</body>
</html>