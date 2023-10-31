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
        <div class="titre_contact">
            <h1>Nous contacter</h1>
        </div>
        <div class="contact">
        <div class="contact_three">

            <div class="contact_logo">
                 <div class="logo_mobile">
                    <i class="fa-solid fa-mobile-screen-button logo_size"></i>
                  </div>
              <p class="logo_text">0767697839</p>
            </div>

            <div class="contact_logo">
              <div class="logo_mail">
                <i class="fa-regular fa-envelope logo_size"></i>
          </div>
              <p class="logo_text">support@shinkei_suijaku.com</p>
            </div>



            <div class="contact_logo">
              <div class="logo_location">
                <i class="fa-solid fa-location-dot logo_size"></i>
            </div>
              <p class="logo_text">Paris</p>
            </div>
          </div>
      <form>
        <div class="Formulaire_de_contact">
            <div class="form_contact">
                <div class="nom_contact">
                    <input type="text" name="name" id="name" placeholder=Nom class="contact_nom">
                </div>
                <div>
                    <input type="text" name="email" id="email" placeholder=Email class="contact_mail">
                </div>
            </div>
                <div>
                <div class="sujet_contact">
                    <input class="contact_sujet" type="text" name="Sujet" id="Sujet" placeholder="Sujet">
                </div>
                <div>
                    <textarea class="contact_message" id="story" name="story" rows="5" cols="33" placeholder="Message"></textarea>
                </div>
                <button onclick="window.location.href = 'index.html'" class="bouton_contact">Envoyer</button>
            </div>
        </div>
    </form>
        </div>
    </main>
    <?php require_once SITE_ROOT . 'partials/footer.php'; ?>
</body>
</html>