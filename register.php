<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'utils/database.php';
?>

<!DOCTYPE html>
<html lang="fr">
<?php require_once SITE_ROOT . 'partials/head.php'; ?>
<body>
<?php require_once SITE_ROOT . 'partials/header.php'; ?>

<link href="Arigato/assets/css/story5.css">
    
<div class="titre_connexion">
    <h1>Inscription</h1>
</div>

<div class="Formulaire_de_connexion">

<?php
    if (!empty($_POST)) {

        if (isset($_POST['email'])) {
            
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
            {
                $error_message_mail = "Le format de l'email n'est pas valide";
            }

                $pdoStatement = $pdo->prepare('SELECT email from utilisateur;');
                $pdoStatement->execute();
                $emailbon = $pdoStatement->fetchAll();

                foreach($emailbon as $ea)
                {
                    if($_POST['email'] == $ea->email)
                    {
                        $error_message_mail = 'le mail existe deja';
                    }
                }
            
        }

        if (isset($_POST['pseudo'])){

            if (strlen($_POST['pseudo']) < 4 ){

                $error_message_pseudo = 'le pseudo doit etre plus long que 4 carctère';
            }
            
            if(strlen($_POST['pseudo']) >= 4 ){
                $pdoStatement = $pdo->prepare('SELECT pseudo from utilisateur;');
                $pdoStatement->execute();
                $users = $pdoStatement->fetchAll();

                foreach($users as $user)
                {
                    if($_POST['pseudo'] == $user->pseudo)
                    {
                        $error_message_pseudo = 'le pseudo existe deja';
                    }
                }
            }
        }

        $passwordtest = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/'; 
        if(isset($_POST['passe']))
        {
            if (!preg_match($passwordtest,$_POST['passe']))
            {
                $error_message_passe = 'le mot de passe n est pas valide';
            }
        }

        if(isset($_POST['confirm_password']))
        {
            if ($_POST['confirm_password'] != $_POST['passe'] )
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
                ':email' => $_POST['email'],
                ':mot_de_passe' => hash('sha512', $_POST['confirm_password']),
                ':pseudo' => $_POST['pseudo'],
            ]);
        }




    }
?>
    <form method="POST">
        <style>
                    .passed {
            width: 12vw;
            height: 1vw;
            background-color: #ddd;
            margin-bottom: 10px;
            border-top-left-radius: 10px; 
            border-top-right-radius: 10px; 
            border-bottom-left-radius: 10px; 
            border-bottom-right-radius: 10px;
        }
        .strength-neutre {
            width: 0vw;
            height: 1vw;
            background-color: white;
            border-top-left-radius: 10px; 
            border-top-right-radius: 10px; 
            border-bottom-left-radius: 10px; 
            border-bottom-right-radius: 10px;
        }

        .strength-weak {
            width: 3vw;
            height: 1vw;
            background-color: #ff5555;
            border-top-left-radius: 10px; 
            border-top-right-radius: 10px; 
            border-bottom-left-radius: 10px; 
            border-bottom-right-radius: 10px;
        }

        .strength-medium {
            width: 6vw;
            height: 1vw;
            background-color: #ffaa00;
            border-top-left-radius: 10px; 
            border-top-right-radius: 10px; 
            border-bottom-left-radius: 10px; 
            border-bottom-right-radius: 10px;
        }

        .strength-strong {
            width: 9vw;
            height: 1vw;
            background-color: #55ff55;
            border-top-left-radius: 10px; 
            border-top-right-radius: 10px; 
            border-bottom-left-radius: 10px; 
            border-bottom-right-radius: 10px;
        }


        </style> 
        <input type="text" name="email" id="email" placeholder=Email style="width: 500px; height: 40px; background-color: #272645 ;
        border-style: none; border-radius: 3px;">
        <br>
        <br>
        <input type="text" name="pseudo" id="pseudo" placeholder=Pseudo style="width: 500px; height: 40px; background-color: #272645 ;
        border-style: none; border-radius: 3px;">
        <br>
        <br>
        <label for="password"></label>
        <input type="password" name="passe" id="passe" placeholder="Mot de passe" style="width: 500px; height: 40px; background-color: #272645 ;
        border-style: none; border-radius: 3px;" onkeyup="checkPasswordStrength()"><br>
        <br>
        <div class="passe">
        <div id="passed" ></div>
        </div>
        <p><span id="passwordStrengthText">Entrez un mot de passe</span></p>

    <script>
        function checkPasswordStrength() {
            var passed = document.getElementById("passe").value;
            var strength = 0;

            if (passed.length >= 8) {
                strength++;
            }

            if (passed.match(/[A-Z]/) && passed.match(/[0-9]/)) {
             strength++;
            }



            if (passed.match(/[\!\@\#\$\%\^\&\*\?\_\~]/)) {
                strength++;
            }

            var passed = document.getElementById("passed");
            var passwordStrengthText = document.getElementById("passwordStrengthText");

            if (strength === 0) {
                passed.className = "strength-neutre";
                passwordStrengthText.textContent = "Entrez un mot de passe";
            } else if (strength === 1) {
                passed.className = "strength-weak";
                passwordStrengthText.textContent = "Faible";
            } else if (strength === 2) {
                passed.className = "strength-medium";
                passwordStrengthText.textContent = "Moyen";
            } else if (strength === 3) {
                passed.className = "strength-strong";
                passwordStrengthText.textContent = "Fort";

            }   
    }
    </script>
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
                    isset($_POST['email']) &&
                    isset($_POST['pseudo']) &&
                    isset($_POST['passe']) &&
                    isset($_POST['confirm_password'])
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