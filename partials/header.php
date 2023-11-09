<div class="titre">
    <!-- PSEUDO JOUEUR CONNECTÉ -->
    <?php
    if (isset($_SESSION['userId'])) {
        $userID = $_SESSION['userId'];
        $pdoStatement = $pdo->prepare('SELECT * From utilisateur WHERE id = :id ');
        $pdoStatement->execute([
            ':id' => $userID,
        ]);
        $utilisateur = $pdoStatement->fetch();

        echo "bonjour " . $utilisateur->pseudo . " !";
    } else {
        echo "pas de joueur connecté";
    }
    ?>
    <!-- FIN PSEUDO JOUEUR CONNECTÉ -->

    <!-- Menu -->
    <p><b>Shinkei Suijaku</b></p>
    <nav>
        <ul class="menu">
            <?php
            if (isset($_SESSION['userId'])) {
            ?>
                <li <?php echo ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'index.php') ? 'class="active"' : ''; ?>>
                    <a style="text-decoration: none;" href="<?= PROJECT_FOLDER ?>index.php"><b>ACCUEIL</b></a>
                </li>
                <?php if (isset($_SESSION['userId'])) : ?>
                    <!-- Condition pour afficher "JEU" uniquement lorsque l'utilisateur est connecté -->
                    <li <?php echo ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'games/memory/index.php') ? 'class="active"' : ''; ?>>
                        <a style="text-decoration: none;" href="<?= PROJECT_FOLDER ?>games/memory/index.php"><b>JEU</b></a>
                    </li>
                <?php endif; ?>
                <li <?php echo ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'games/memory/scores.php') ? 'class="active"' : ''; ?>>
                    <a style="text-decoration: none;" href="<?= PROJECT_FOLDER ?>games/memory/scores.php"><b>SCORES</b></a>
                </li>
                <li <?php echo ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'contact.php') ? 'class="active"' : ''; ?>>
                    <a style="text-decoration: none;" href="<?= PROJECT_FOLDER ?>contact.php"><b>NOUS CONTACTER</b></a>
                </li>
                <li <?php echo ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'myAccount.php') ? 'class="active"' : ''; ?>>
                    <a style="text-decoration: none;" href="<?= PROJECT_FOLDER ?>myAccount.php"><b>MON COMPTE</b></a>
                </li>

                <li <?php echo ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'disconnect.php') ? 'class="active"' : ''; ?>>
                    <a style="text-decoration: none;" href="<?= PROJECT_FOLDER ?>disconnect.php"><b>Sayonara ! </b></a>
                </li>
            <?php
            } else {
            ?>
                <li <?php echo ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'index.php') ? 'class="active"' : ''; ?>>
                    <a style="text-decoration: none;" href="<?= PROJECT_FOLDER ?>index.php"><b>ACCUEIL</b></a>
                </li>
                <?php if (isset($_SESSION['userId'])) : ?>
                    <!-- Condition pour afficher "JEU" uniquement lorsque l'utilisateur est connecté -->
                    <li <?php echo ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'games/memory/index.php') ? 'class="active"' : ''; ?>>
                        <a style="text-decoration: none;" href="<?= PROJECT_FOLDER ?>games/memory/index.php"><b>JEU</b></a>
                    </li>
                <?php endif; ?>
                <li <?php echo ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'games/memory/scores.php') ? 'class="active"' : ''; ?>>
                    <a style="text-decoration: none;" href="<?= PROJECT_FOLDER ?>games/memory/scores.php"><b>SCORES</b></a>
                </li>
                <li <?php echo ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'contact.php') ? 'class="active"' : ''; ?>>
                    <a style="text-decoration: none;" href="<?= PROJECT_FOLDER ?>contact.php"><b>NOUS CONTACTER</b></a>

                <li <?php echo ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'register.php') ? 'class="active"' : ''; ?>>
                    <a style="text-decoration: none;" href="<?= PROJECT_FOLDER ?>register.php"><b>INSCRIPTION</b></a>
                </li>

                <li <?php echo ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'login.php') ? 'class="active"' : ''; ?>>
                    <a style="text-decoration: none;" href="<?= PROJECT_FOLDER ?>login.php"><b>CONNEXION</b></a>
                </li>
            <?php
            }
            ?>
        </ul>
    </nav>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>