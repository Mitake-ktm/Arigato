<?php
require_once '../../utils/common.php';
require_once SITE_ROOT . 'utils/database.php';
?>
<!DOCTYPE html>
<html lang="fr">
   <?php require_once SITE_ROOT . 'partials/head.php'; ?>
<body>
<?php require_once SITE_ROOT . 'partials/header.php'; ?>

        <div class="titre_page_de_jeu">
            <p><h1>A toi de Jouer ! Bonne Chance !</h1>
                <br>
                <h2>timer :</h2>
            
            </p>
        </div>

        <div class="table_de_jeu">

            <p>Level : 1</p>
            <!-- Table 1-->
            <table>
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

            </table>

            <p>Level : 2</p>

            <!--table 2-->

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

            <!--table 3-->

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


    <?php require_once SITE_ROOT . 'chat.php'; ?>   
    <?php require_once SITE_ROOT . 'partials/footer.php'; ?>
</body>
</html>