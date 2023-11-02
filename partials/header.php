     <div class="titre">

         <!-- PSEUDO JOUEUR CONNECTÉ -->

         <?php
            $joueurConnecte = "Aurélien" ?>
         <?php
            $pdoStatement = $pdo->prepare('SELECT * From utilisateur WHERE pseudo = :pseudo ');

            $pdoStatement->execute([
                ':pseudo' => $joueurConnecte,
            ]);
            $utilisateur = $pdoStatement->fetch();

            if ($utilisateur->pseudo == $joueurConnecte) echo "bonjour " . $joueurConnecte . " !";
            /*else echo "pas de joueur connecté";*/ ?>


         <!-- FIN PSEUDO JOUEUR CONNECTÉ -->






         <!-- Menu -->

         <p><b>Shinkei Suijaku</b></p>
         <nav>
             <ul class="menu">

                 <li <?php echo ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'index.php') ? 'class="active"' : ''; ?>>
                     <a style="text-decoration: none;" href="<?= PROJECT_FOLDER ?>index.php"><b>ACCUEIL</b></a>
                 </li>

                 <li <?php echo ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'games/memory/index.php') ? 'class="active"' : ''; ?>>
                     <a style="text-decoration: none;" href="<?= PROJECT_FOLDER ?>games/memory/index.php"><b>JEU</b></a>
                 </li>

                 <li <?php echo ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'games/memory/scores.php') ? 'class="active"' : ''; ?>>
                     <a style="text-decoration: none;" href="<?= PROJECT_FOLDER ?>games/memory/scores.php"><b>SCORES</b></a>
                 </li>

                 <li <?php echo ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'contact.php') ? 'class="active"' : ''; ?>>
                     <a style="text-decoration: none;" href="<?= PROJECT_FOLDER ?>contact.php"><b>NOUS CONTACTER</b></a>
                 </li>
             </ul>
         </nav>
     </div>

     </header>