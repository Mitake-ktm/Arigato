<div class="tchat">

<?php
    if (isset($_SESSION['userId'])){
        $userID = $_SESSION['userId'];
        $pdoStatement = $pdo->prepare('SELECT * From utilisateur WHERE id = :id ');
        $pdoStatement->execute([
            ':id' => $userID,
        ]);
        $utilisateur = $pdoStatement->fetch(); 
        }?>

<div class="tchat_head">
                <div class="connexion_logo">
                <img src="/projet/Arigato/userFiles/<?php if (isset($utilisateur->avatar)) echo $utilisateur->avatar ?>" />
                </div>
                <div class="texte_head_chat">
                    <p>Chat Global</p> 
                </div>
                <div class="gif-container" id="gif-container"></div>
            </div>

            <div class="tchat_body" id="scroll">

           <?php 

                $userID = $_SESSION['userId'];
                $pdoStatement = $pdo->prepare('SELECT id_expediteur, message,U.pseudo, date_heure_message,  
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

                            echo '<div class="droite"> <div class="bulle_droite">' . $message->message .'</div>'. '<span id="pseudo">'.$message->pseudo . '<br>' . $message->date_heure_message . '</span>' .'</div><br>';

                        }

                        if(!$message->connecte){
                            echo '<div class="gauche"> <div class="bulle_gauche">' . $message->message . '</div>'. $message->pseudo . '<br>' . $message->date_heure_message . '</div><br>';
                    
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

             <br>
             <div class="chat_bas">
                        <input type="text" name="message" id="chat"  style="width: 200px; height: 40px; background-color: #ec9224;
                        border-style: none; border-radius: 3px;">
                        <input onclick="ajaxEnvoie2()" type="button" name="valider" value="envoyer" >
                </div>   
             </div>
                                 
</div>

<script>
    
    function handleKeyPress(event) {
        // Vérifie si la touche pressée est "Entrée" (keyCode 13)
        if (event.keycode === 13) {
            // Appelle la fonction lorsque "Entrée" est pressée
            ajaxEnvoie2();
            console.log(confirm);
        }
    }

    function ajaxEnvoie2(){
        var test = document.getElementById('chat').value;
        var pseudo = document.getElementById('pseudo').innerText;
        console.log(document.getElementById('pseudo'));
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
        document.getElementById('chat').value = "";
        element = document.getElementById('scroll');
        element.scrollTop = element.scrollHeight;
      });
    
    }
</script>

<script>
    // Code JavaScript pour afficher le GIF dans la barre du titre
    var gifData = [{"id":"2ka","url":"https://cdn2.thecatapi.com/images/2ka.gif","width":50,"height":37}];
    var gifContainer = document.getElementById('gif-container');

    if (gifData.length > 0) {
        var gifImage = document.createElement('img');
        gifImage.src = gifData[0].url;
        gifImage.width = gifData[0].width;
        gifImage.height = gifData[0].height;

        gifContainer.appendChild(gifImage);
    }
</script>
