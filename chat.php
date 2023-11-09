<<div class="tchat">
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
                    <form method="post">
                        <input type="text" name="message" id="chat"  style="width: 200px; height: 40px; background-color: #1E90FF;
                        border-style: none; border-radius: 3px;">
                        <input onclick="ajaxEnvoie()" type="submit" name="valider" >
                    </form>
                </div>

</div>