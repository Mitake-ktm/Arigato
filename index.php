<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'utils/database.php';
?>

<!DOCTYPE html>
<html lang="fr">
<?php require_once SITE_ROOT . 'partials/head.php'; ?>
<body>
<?php require_once SITE_ROOT . 'partials/header.php'; ?>
    <!--IMAGE MODE DE JEU -->
    <main>
      <!--Bouton-->
      <div class="image_devant">
        <h1>Bienvenue au 
            <br>Soleil Levant !</h1>
        <h2>Venez découvrir les Kana !</h2>
        <br>
        <br>
        <button class="bouton_jouer" onclick="window.location.href = 'memory';">Jouer !</button>
      </div>
      <!--FIN Bouton-->
      <div class="image-container">
        <img src="<?= PROJECT_FOLDER ?>assets/images/HIRAGANA a.png" alt="Hiragana A" />
        <img src="<?= PROJECT_FOLDER ?>assets/images/Katakana a.svg" alt="Katakana A" />
        <img
          src="<?= PROJECT_FOLDER ?>assets/images/KATAKANA ET HIRAGANA a.png"
          alt="Hiragana a et Katakana a" />
      </div>
      <!--FIN IMAGE MODE DE JEU -->

      <!-- IMAGE MODE DE JEU + texte en dessous -->
      <div class="image-container">
        <div class="heading-container">
          <span class="large-one">01</span>
          <h3>HIRAGANA</h3>
          <p>Pour travailler les hiragana !</p>
        </div>

        <div class="heading-container">
          <span class="large-one">02</span>
          <h3>HIRAGANA</h3>
          <p>Pour travailler les hiragana !</p>
        </div>

        <div class="heading-container">
          <span class="large-one">03</span>
          <h3>HIRAGANA</h3>
          <p>Pour travailler les hiragana !</p>
        </div>
      </div>
      <!-- FIN IMAGE MODE DE JEU + texte en dessous -->

      <!--STAT JOUEUR-->

      <div class="NOM">
        <div class="container">
          <!-- image gauche-->
          <img src="<?= PROJECT_FOLDER ?>assets/images/NiightCIty.png" alt="IMAGE JEU" />
          <!--FIN image gauche-->
        </div>
        <table class="table">
          <tr>
            <td>
              <img
                src="<?= PROJECT_FOLDER ?>assets/images/Parties_Jouées.png"
                alt="Image 1" />
            </td>
            <br />
            <td>
              <img
                src="<?= PROJECT_FOLDER ?>assets/images/Joueurs_Connectés.png"
                alt="Image 2" />
            </td>
            <br />
          </tr>
          <tr>
            <td>
              <img
                src="<?= PROJECT_FOLDER ?>assets/images/Temps_Record.png"
                alt="Image 3" />
            </td>
            <br />
            <td>
              <img
                src="<?= PROJECT_FOLDER ?>assets/images/Joueurs_Inscrit.png"
                alt="Image 4" />
            </td>
          </tr>
        </table>
      </div>
      x
      <!--FIN  STAT JOUEUR-->


      <div class="equipe">
        <h2><span>Notre Équipe</span></h2>
        <p>Nihon saikō no gēmu kaihatsu chīmu</p>
        <img src="assets/images/branche.jpg">
    </div>
        <div class="description">
         
          <div class="kiki infoteam">
               <div class="imagekiki">
                <img src="<?= PROJECT_FOLDER ?>assets/images/kiki.jpg">
                </div>
            <h3><span>KILIAN</span></h3>
            <p>supōtsuman</p>
            <div>
              <a href="<?= PROJECT_FOLDER ?>https://www.facebook.com/"><img src="<?= PROJECT_FOLDER ?>assets/images/facebook.jpg" alt=""></a>
              <a href="<?= PROJECT_FOLDER ?>https://twitter.com/home"><img src="<?= PROJECT_FOLDER ?>assets/images/twitter.jpg" alt=""></a>
              <a href="<?= PROJECT_FOLDER ?>https://www.pinterest.fr/"><img src="<?= PROJECT_FOLDER ?>assets/images/pinterest.jpg" alt=""></a>  
            </div>          
          </div>
    
          <div class="anto infoteam">
            <div class="imageanto">
            <img src="<?= PROJECT_FOLDER ?>assets/images/anto.jpg">
        </div>
            <h3><span>ANTONY</span></h3>
            <p>manga fan</p>
            <div>
              <a href="<?= PROJECT_FOLDER ?>https://www.facebook.com/"><img src="<?= PROJECT_FOLDER ?>assets/images/facebook.jpg" alt=""></a>
              <a href="<?= PROJECT_FOLDER ?>https://twitter.com/home"><img src="<?= PROJECT_FOLDER ?>assets/images/twitter.jpg" alt=""></a>
              <a href="<?= PROJECT_FOLDER ?>https://www.pinterest.fr/"><img src="<?= PROJECT_FOLDER ?>assets/images/pinterest.jpg" alt=""></a>  
            </div>          
          </div>
    
    
    
          <div class="kevin infoteam">
            <div class="imagekevin">
            <img src="<?= PROJECT_FOLDER ?>assets/images/kevin.jpg">
        </div>
            <h3><span>KÉVIN</span></h3>
            <p>Nihon no fan</p>
            <div>
              <a href="<?= PROJECT_FOLDER ?>https://www.facebook.com/"><img src="<?= PROJECT_FOLDER ?>assets/images/facebook.jpg" alt=""></a>
              <a href="<?= PROJECT_FOLDER ?>https://twitter.com/home"><img src="<?= PROJECT_FOLDER ?>assets/images/twitter.jpg" alt=""></a>
              <a href="<?= PROJECT_FOLDER ?>https://www.pinterest.fr/"><img src="<?= PROJECT_FOLDER ?>assets/images/pinterest.jpg" alt=""></a>  
            </div>          
          </div>
     
    
          <div class="enzo infoteam">
            <div class="imageenzo">
            <img src="<?= PROJECT_FOLDER ?>assets/images/enzo.jpg">
        </div>
            <h3><span>ENZO</span></h3>
            <p>Ikutsu ka no kizuato</p>
            <div>
              <a href="<?= PROJECT_FOLDER ?>https://www.facebook.com/"><img src="<?= PROJECT_FOLDER ?>assets/images/facebook.jpg" alt=""></a>
              <a href="<?= PROJECT_FOLDER ?>https://twitter.com/home"><img src="<?= PROJECT_FOLDER ?>assets/images/twitter.jpg" alt=""></a>
              <a href="<?= PROJECT_FOLDER ?>https://www.pinterest.fr/"><img src="<?= PROJECT_FOLDER ?>assets/images/pinterest.jpg" alt=""></a>  
            </div>
          </div>
     
    
        </div>
    </div>
    </main>

    <!--the footer-->
    <?php require_once SITE_ROOT . 'partials/footer.php'; ?>
  </body>
</html>
