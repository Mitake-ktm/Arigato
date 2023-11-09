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

           <?php 

                $userID = $_SESSION['userId'];
                $pdoStatement = $pdo->prepare('SELECT id_expediteur, message,U.pseudo,  
                CASE 
                    WHEN M.id_expediteur = '.$userID.'   THEN true
                    ELSE false
                END AS connecte
                from message AS M
                LEFT JOIN utilisateur AS U
                ON M.id_expediteur = U.id
                WHERE date_heure_message >= NOW() - INTERVAL 1 DAY
                ORDER BY date_heure_message ASC');
                $pdoStatement->execute([]);
                $messages = $pdoStatement->fetchall();
            ?>

                <?php
                    // Afficher les messages dans le chat
                    foreach ($messages as $message) {

                        if($message->connecte){

                            echo '<div class="droite"> <div class="bulle_droite">' . $message->message .'</div>'. '<span id="pseudo">'.$message->pseudo. '</span>' .'</div><br>';

                        }

                        if(!$message->connecte){
                            echo '<div class="gauche"> <div class="bulle_gauche">' . $message->message . '</div>'. $message->pseudo.'</div><br>';
                    
                        }
                           
                    }
                    ?>

                    <div id="nouveau_message">

                    </div>
                </div>
                <!--
                <div class="gauche">
                <div id="messages" class="bulle_gauche">
                
            </div>
            </div>

                <div class="droite">
                <div class="bulle_droite">
                    Hello !!
                </div>
            </div>
             -->
             <div class="chat_bas">
                        <input type="text" name="message" id="chat"  style="width: 200px; height: 40px; background-color: #1E90FF;
                        border-style: none; border-radius: 3px;">
                        <input onclick="ajaxEnvoie2()" type="button" name="valider" value="envoyer" >
                </div>   
             </div>
                                 
</div>

<script>
    function ajaxEnvoie2(){
        var test = document.getElementById('chat').value;
        var pseudo = document.getElementById('pseudo').innerText;
        console.log(test);
        let request =
      $.ajax({
        type: "POST",             //Méthode à employer POST ou GET 
        url: "../../message.php",  //Cible du script coté serveur à appeler 
        data: {'message': test}
     })
      request.done(function (output) {
        document.getElementById('nouveau_message').innerHTML +=
        `<div class="droite"> <div class="bulle_droite"> ${test}</div>${pseudo}</div>`;
        //Code à jouer en cas d'éxécution sans erreur du script du PHP
      });
    }
</script>