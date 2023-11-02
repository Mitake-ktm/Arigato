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
        <?php
        if (!empty($_GET)) {

            if (isset($_GET['Nemail'])) {
                
                if (!filter_var($_GET['Nemail'], FILTER_VALIDATE_EMAIL)) 
                {
                    $error_message_nouveau_mail = "Le format de l'email n'est pas valide";
                }
                
            }
    
            if (isset($_GET['Nemail']) && isset($_GET['email'])){
    
                if ($_GET['Nemail'] == $_GET['email'] ){
    
                    $error_message_ancien_mail = "nouveau email identique à l'ancien";
                }
                
                $pdoStatement = $pdo->prepare('SELECT email from utilisateur;');
                $pdoStatement->execute();
                $emailbon = $pdoStatement->fetchAll();
    
                foreach($emailbon as $ea)
                {
                    if($_GET['Nemail'] == $ea)
                    {
                        $error_message_nouveau_mail = 'le mail existe deja';
                    }
                }
            }
            /*if(isset($_GET['passe']))
            {
                $passwordtest = '/^(?=.[a-z])(?=.[A-Z])(?=.[0-9])(?=.[!@#$%^&*]).{8,}$/';
                if (!preg_match($passwordtest,$_GET['passe']))
                {
                    $error_message_motdepasse = 'le mot de passe n est pas valide';
                }*/
            }
            if(
                !isset($error_message_ancien_mail) && 
                !isset($error_message_nouveau_mail) && 
                !isset($error_message_motdepasse)&&
                isset($_GET['email'])&&
                isset($_GET['Nemail'])&&
                isset($_GET['passe'])) 
                 
            {
                $pdoStatement = $pdo->prepare('UPDATE utilisateur SET email=:Nemail WHERE email=:email AND mot_de_passe=:passe');
                $pdoStatement->execute([
                    ':email' => $_GET['email'],
                    ':Nemail' => $_GET['Nemail'],
                    ':passe' => hash('sha512', $_GET['passe']),
                    
                ]);
            }
        
    
    
            
            ?>

            <form method="get">
                <label for="email">Changer votre mail :</label>
                <br>
                <br>
                <input type="text" name="email" id="email" placeholder="Ancien Mail" style="width: 500px; height: 40px; background-color: #272645 ;
                border-style: none; border-radius: 3px;">
                <br>
                <br>
                <input type="text" name="Nemail" id="email" placeholder="Nouveau Mail" style="width: 500px; height: 40px; background-color: #272645 ;
                border-style: none; border-radius: 3px;">
                <br>
                <br>
                <input type="password" name="passe" id="passe" placeholder="Mot de passe" style="width: 500px; height: 40px; background-color: #272645 ;
                border-style: none; border-radius: 3px;">
                <br>
                <br>
                <div class="erreur_php"> <p><?php 
        if(isset($error_message_ancien_mail))
                {
                    echo $error_message_ancien_mail;
                }

                if(isset($error_message_nouveau_mail))
                {
                    echo $error_message_nouveau_mail;
                }

                if(isset($error_message_motdepasse))
                {
                    echo $error_message_motdepasse;
                }
                if(
                    !isset($error_message_ancien_mail) && 
                    !isset($error_message_nouveau_mail) && 
                    !isset($error_message_motdepasse)&&
                    isset($_GET['email'])&&
                    isset($_GET['Nemail'])&&
                    isset($_GET['passe']))   
                    {
                    echo "L'email a bien été modifié";
                }
                ?></p>
                </div>
                <button class="bouton_connexion">Changer l'email</button>
        </form>
        </div>

                
        <div class="Formulaire_de_connexion">
        <?php
if (!empty($_GET)) {
    if (isset($_GET['Npasse']) && isset($_GET['passe'])){
    
        if ($_GET['Npasse'] == $_GET['passe'] ){

            $error_message_ancien_motdepasse = "nouveau mot de passe identique à l'ancien";
        }
    }
        
       
    }
    /*if(isset($_GET['Npasse']))
    {
        $passwordtest = '/^(?=.[a-z])(?=.[A-Z])(?=.[0-9])(?=.[!@#$%^&*]).{8,}$/';
        if (!preg_match($passwordtest,$_GET['Npasse']))
        {
            $error_message_nouveau_motdepasse = 'le mot de passe n est pas valide';
        }
    }*/
    if(isset($_GET['Cpasse']))
        {
            if ($_GET['Cpasse'] != $_GET['Npasse'] )
            {
                $error_message_passeconfirm = 'le mot de passe doit etre identique';;
            }
        }
    if(
        !isset($error_message_ancien_motdepasse) && 
        !isset($error_message_nouveau_motdepasse) && 
        !isset($error_message_passeconfirm)&&
        isset($_GET['passe'])&&
        isset($_GET['Npasse'])&&
        isset($_GET['Cpasse'])) 
         
    {
        $pdoStatement = $pdo->prepare('UPDATE utilisateur SET mot_de_passe=:Cpasse WHERE mot_de_passe=:passe');
        $pdoStatement->execute([
            ':passe' => hash('sha512', $_GET['passe']),
            ':Cpasse' => hash('sha512', $_GET['Cpasse']),
            
        ]);

}
?>
            <form method="get">
                <label for="passe">Changer votre mot de passe :</label>
                <br>
                <br>
                <input type="password" name="passe" id="passe" placeholder="Ancien Mot de passe" style="width: 500px; height: 40px; background-color: #272645 ;
                border-style: none; border-radius: 3px;">
                <br>
                <br>
                <input type="password" name="Npasse" id="passe" placeholder="Nouveau Mot de passe" style="width: 500px; height: 40px; background-color: #272645 ;
                border-style: none; border-radius: 3px;">
                <br>
                <br>
                <input type="password" name="Cpasse" id="passe" placeholder="Comfirmer Mot de passe" style="width: 500px; height: 40px; background-color: #272645 ;
                border-style: none; border-radius: 3px;">
                <br>
                <div class="erreur_php"> <p><?php 
                if(isset($error_message_ancien_motdepasse))
                {
                    echo $error_message_ancien_motdepasse;
                }

                if(isset($error_message_nouveau_motdepasse))
                {
                    echo $error_message_nouveau_motdepasse;
                }

                if(isset($error_message_passeconfirm))
                {
                    echo $error_message_passeconfirm;
                }
                if(
                    !isset($error_message_ancien_motdepasse) && 
                    !isset($error_message_nouveau_motdepasse) && 
                    !isset($error_message_passeconfirm)&&
                    isset($_GET['passe'])&&
                    isset($_GET['Npasse'])&&
                    isset($_GET['Cpasse']))   
                    {
                    echo "Le mot de passe a bien été modifié";
                }
                ?></p>
                </div>
                <button class="bouton_connexion">Changer le mot de passe</button>
        </form>
        </div>
    </main>
    <?php require_once SITE_ROOT . 'partials/footer.php'; ?>
</body>
</html>