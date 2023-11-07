<?php
require_once '../../utils/common.php';
require_once SITE_ROOT . 'utils/database.php';
?>
<!DOCTYPE html>
<html lang="fr">
   <?php require_once SITE_ROOT . 'partials/head.php'; ?>
<body>
<?php require_once SITE_ROOT . 'partials/header.php'; ?>


     <div class="haut_page_jeu"> 
            <div class="titre_page_de_jeu">
                <p><h1>A toi de Jouer ! Bonne Chance !</h1>
            </div>
     </div>

     <div class="choisir_la_difficulte_et_le_theme">
        <form method="post" id="filter">
                <label for="theme">Choisir votre thème</label>
                <br>
                <select name="theme" id="theme">
                    <option value="hiragana">hiragana</option>
                    <option value="katakana">katakana</option>
                    <option value="kana">kana</option>
                </select>
                <br>
                <br>
                <label for="difficulte">Choisir votre difficulté</label>
                <br>
                <select name="difficulte" id="difficulte">
                    <option value="facile">facile</option>
                    <option value="moyen">moyen</option>
                    <option value="difficile">difficile</option>
                </select>
                <br>
                <br>
                <input type="submit" value="Jouer" src="game.php">
        </form>

                
            </div>
       
<!--
        <div class="table_de_jeu">
            <p>Level : 1</p>
            <table >
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                </tr>

                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td> 
                </tr>

              <div id="level_1" class="image-aligner">

              </div>

            </table>

            <p>Level : 2</p>

            

            <table>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                </tr>

                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td> 
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                </tr>
            </table>

            

            <p>Level : 3</p>

            <table>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                </tr>

                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td> 
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                </tr>

                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td> 
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td> 
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/dos des cartes.jpg" alt="carte_retiurnée">
                    </td>
                </tr>
            </table>
        </div>
-->


        
    <?php require_once SITE_ROOT . 'partials/footer.php'; ?>
    <script src="../../assets/js/script.js"></script>
</body>
</html>

