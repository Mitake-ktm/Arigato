<div class="tchat">
<div class="tchat_head">
                <div class="connexion_logo">
                    <img src="<?= PROJECT_FOLDER ?>assets/images/anto.jpg" alt="pp_anto">
                </div>
                <div class="texte_head_chat">
                    <p>Chat Global</p>
                </div>
            </div>

            <div class="tchat_body">

                 <div class="gauche">
                <div id="messages" class="bulle_gauche">
                
            </div>
            </div>

                <div class="droite">
                <div class="bulle_droite">
                    Hello !!
                </div>
            </div>

                </div>
                <div class="chat_bas">
                    <form method="POST">
                        <input type="text" name="message" id="chat"  style="width: 200px; height: 40px; background-color: #1E90FF;
                        border-style: none; border-radius: 3px;">
                        <input onclick="ajaxEnvoie()" type="button" name="valider" value="envoyer" >
                    </form>
                </div>        
                
</div>

<script>
    function ajaxEnvoie(){
        var test = document.getElementById('chat').value;
        console.log(test);
        let request =
      $.ajax({
        type: "POST",             //Méthode à employer POST ou GET 
        url: "../../message.php",  //Cible du script coté serveur à appeler 
        data: {'message': test}
      });
      request.done(function (output) {
        //Code à jouer en cas d'éxécution sans erreur du script du PHP
      });
    }
</script>