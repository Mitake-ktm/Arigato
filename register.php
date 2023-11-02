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

<?php
    if (!empty($_GET)) {

        if (isset($_GET['email'])) {
            
            if (!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) 
            {
                $error_message_mail = "Le format de l'email n'est pas valide";
            }
            
        }

        if (isset($_GET['pseudo'])){

            if (strlen('pseudo') < 4 ){

                $error_message_pseudo = 'le pseudo doit etre plus long que 4 carctère';
            }
            else{
                $pdoStatement = $pdo->prepare('SELECT pseudo from utilisateur;');
                $pdoStatement->execute();
                $pseudobon = $pdoStatement->fetch();

                foreach($pseudobon as $ps)
                {
                    if($_GET['pseudo'] == $ps)
                    {
                        $error_message_pseudo = 'le pseudo doit etre plus long que 4 carctère';
                    }
                }
            }
        }

        $passwordtest = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/'; 
        if(isset($_GET['passe']))
        {
            if (!preg_match($passwordtest,$_GET['passe']))
            {
                $error_message_passe = 'le mot de passe n est pas valide';
            }
        }

        if(isset($_GET['confirm_password']))
        {
            if ($_GET['confirm_password'] != $_GET['passe'] )
            {
                $error_message_passeconfirm = 'le mot de passe doit etre identique';;
            }
        }

        if(
            !isset($error_message_mail) && 
            !isset($error_message_pseudo) && 
            !isset($error_message_passe) &&
            !isset($error_message_passeconfirm)
        ){
            $pdoStatement = $pdo->prepare('INSERT INTO utilisateur (email,mot_de_passe,pseudo) VALUES(:email,:mot_de_passe,:pseudo)');
            $pdoStatement->execute([
                ':email' => $_GET['email'],
                ':mot_de_passe' => hash('sha512', $_GET['confirm_password']),
                ':pseudo' => $_GET['pseudo'],
            ]);
        }




    }
?>
    <form method="get">
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
       <div class="erreur_php"> <p><?php 
                if(isset($error_message_mail))
                {
                    echo $error_message_mail;
                }

                if(isset($error_message_pseudo) )
                {
                    echo $error_message_pseudo;
                }

                if(isset($error_message_passe) )
                {
                    echo $error_message_passe;
                }

                if(isset($error_message_passeconfirm))
                {
                    echo $error_message_passeconfirm;
                }
                if(
                    !isset($error_message_mail) && 
                    !isset($error_message_pseudo) && 
                    !isset($error_message_passe) &&
                    !isset($error_message_passeconfirm) &&
                    !isset($_GET)
                ){
                    echo 'Le compte a bien été créé';
                }

       
            ?></p>
        </div>
        <button class="bouton_connexion">Connexion</button>

         


</form>
</div>


<?php require_once SITE_ROOT . 'partials/footer.php'; ?>
</body>
</html>