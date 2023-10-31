/*Story 1*/

CREATE DATABASE arigato CHARACTER SET 'utf8';

USE arigato;

CREATE TABLE utilisateur (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(40) NOT NULL,
    mot_de_passe VARCHAR(256) NOT NULL,
    pseudo VARCHAR(20) NOT NULL,
    date_heure_inscription DATETIME NOT NULL,
    date_heure_connexion DATETIME NULL,
    PRIMARY KEY (id)
    )
    
    ENGINE = INNODB;
    
    CREATE TABLE score (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    id_joueur INT UNSIGNED NOT NULL,
    id_jeu INT UNSIGNED NOT NULL,
    difficulte INT UNSIGNED NOT NULL,
    score_partie INT UNSIGNED NOT NULL,
    date_heure_partie DATETIME NOT NULL,
    PRIMARY KEY (id)
    )
        ENGINE = INNODB;
        
    CREATE TABLE message (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    id_jeu INT UNSIGNED NOT NULL,
    id_expediteur INT UNSIGNED NOT NULL,
    message TEXT NULL,
    date_heure_message DATETIME NOT NULL,
    PRIMARY KEY (id)
    )
        ENGINE = INNODB;
        
    CREATE TABLE jeu (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nom_jeu VARCHAR(40) NOT NULL,
    PRIMARY KEY (id)
    )
        ENGINE = INNODB;



    ALTER TABLE score
    ADD FOREIGN KEY (id_joueur)
    REFERENCES utilisateur (id);

    ALTER TABLE score
    ADD FOREIGN KEY (id_jeu)
    REFERENCES jeu (id);

    ALTER TABLE message
    ADD FOREIGN KEY (id_jeu)
    REFERENCES jeu (id);

    ALTER TABLE message
    ADD FOREIGN KEY (id_expediteur)
    REFERENCES utilisateur (id);





 /*story 2*/

INSERT INTO utilisateur
VALUES (1,'slt@gmail','123456','slt','2020-10-25 09:49:10','2023-10-23'),
       (2,'bonjour@gmail','654321','bonjour','2019-11-09 15:20:28','2020-10-23'),
       (3,'ohayo@gmail','7890','ohayo','2022-04-18 04:30:29','2023-10-23'),
       (4,'salut@gmail','0987','salut','2046-09-21 18:20:26','2023-10-23'),
       (5,'bonsoir@gmail','123456789','bonsoir','2016-01-23 10:46:20','2023-10-23');


INSERT INTO score(id_joueur,id_jeu,difficulte,score_partie,date_heure_partie)
VALUES (1,1,1,10,'2020-02-01 10:22:40'),
       (2,1,3,15,'2020-02-01 10:22:40'),
       (3,1,2,12,'2020-02-01 10:22:40'),
       (4,1,2,16,'2020-02-01 10:22:40'),
       (5,1,1,11,'2020-02-01 10:22:40'),
       (1,1,1,10,'2020-02-01 10:22:40'),
       (2,1,3,15,'2020-02-01 10:22:40'),
       (3,1,2,12,'2020-02-01 10:22:40'),
       (4,1,2,16,'2020-02-01 10:22:40'),
       (5,1,1,11,'2020-02-01 10:22:40'),
       (1,1,1,10,'2020-02-01 10:22:40'),
       (2,1,3,15,'2020-02-01 10:22:40'),
       (3,1,2,12,'2020-02-01 10:22:40'),
       (4,1,2,16,'2020-02-01 10:22:40'),
       (5,1,1,11,'2020-02-01 10:22:40'),
       (1,1,1,10,'2020-02-01 10:22:40'),
       (2,1,3,15,'2020-02-01 10:22:40'),
       (3,1,2,12,'2020-02-01 10:22:40'),
       (4,1,2,16,'2020-02-01 10:22:40'),
       (5,1,1,11,'2020-02-01 10:22:40'),
       (1,1,1,10,'2020-02-01 10:22:40'),
       (2,1,3,15,'2020-02-01 10:22:40'),
       (3,1,2,12,'2020-02-01 10:22:40'),
       (4,1,2,16,'2020-02-01 10:22:40'),
       (5,1,1,11,'2020-02-01 10:22:40');



INSERT INTO message (id_jeu,id_expediteur,message,date_heure_message)
VALUES (1,2,'bonsoir','2023-10-23 10:25:10'),
       (1,1,'bonsoir','2023-10-23 10:26:45'),
       (1,3,'bonsoir','2023-10-23 10:27:16'),
       (1,4,'bonsoir','2023-10-23 10:28:53'),
       (1,5,'bonsoir','2023-10-23 10:29:23'),
       (1,3,'bonsoir','2023-10-23 10:30:46'),
       (1,5,'bonsoir','2023-10-23 10:31:36'),
       (1,4,'bonsoir','2023-10-23 10:32:17'),
       (1,1,'bonsoir','2023-10-23 10:33:19'),
       (1,1,'bonsoir','2023-10-23 10:34:39'),
       (1,2,'bonsoir','2023-10-23 10:35:49'),
       (1,4,'bonsoir','2023-10-23 10:36:17'),
       (1,3,'bonsoir','2023-10-23 10:37:49'),
       (1,5,'bonsoir','2023-10-23 10:38:01'),
       (1,2,'bonsoir','2023-10-23 10:39:03'),
       (1,1,'bonsoir','2023-10-23 10:40:47'),
       (1,4,'bonsoir','2023-10-23 10:41:49'),
       (1,3,'bonsoir','2023-10-23 10:42:10'),
       (1,2,'bonsoir','2023-10-23 10:43:38'),
       (1,1,'bonsoir','2023-10-23 10:44:49'),
       (1,5,'bonsoir','2023-10-23 10:45:02'),
       (1,4,'bonsoir','2023-10-23 10:46:38'),
       (1,2,'bonsoir','2023-10-23 10:47:47'),
       (1,5,'bonsoir','2023-10-23 10:48:53'),
       (1,4,'bonsoir','2023-10-23 10:49:09'),
       (1,1,'bonsoir','2023-10-23 10:50:45');

INSERT INTO jeu (nom_jeu)
VALUES ('shinkei suijaku');



/*story 3*/

CREATE UNIQUE INDEX index_email
ON utilisateur(email);

CREATE UNIQUE INDEX index_pseudo
ON utilisateur(pseudo);

INSERT INTO utilisateur(email,mot_de_passe,pseudo,date_heure_inscription)
VALUES('sayonara@gmail.com','13579','sayonara','2023-10-23 00:20:20');



/*story 4*/

UPDATE utilisateur
SET mot_de_passe = "2468"
WHERE id=6;

UPDATE utilisateur
SET email = "sayonara@gmail"
WHERE id=6 AND mot_de_passe ="2468" ;



/*story 5*/

SELECT *
FROM utilisateur
WHERE email = "sayonara@gmail" AND mot_de_passe = "2468";



/*story 6*/

INSERT INTO jeu (nom_jeu)
VALUES ('shinkei suijaku');



/*story 7*/

SELECT J.nom_jeu, U.pseudo, S.difficulte, S.score_partie
FROM score as S
LEFT JOIN utilisateur AS U
ON S.id_joueur = U.id
LEFT JOIN jeu AS J
ON S.id_jeu = J.id
ORDER BY J.nom_jeu ASC,S.difficulte ASC,S.score_partie DESC;



/*story 8*/

SELECT J.nom_jeu, U.pseudo, S.difficulte, S.score_partie
FROM score as S
LEFT JOIN utilisateur AS U
ON S.id_joueur = U.id
LEFT JOIN jeu AS J
ON S.id_jeu = J.id
WHERE S.id_jeu = 1 AND U.id = 1 AND S.difficulte = 1
ORDER BY J.nom_jeu ASC,S.difficulte ASC,S.score_partie DESC;



/*story 9*/

UPDATE score
SET score_partie = 2
WHERE id_joueur = 1 AND id_jeu = 1 AND difficulte = 1;



/*story 10*/

INSERT INTO message(id_jeu,id_expediteur,message,date_heure_message)
VALUES(1,4,'comment vas-tu ???','2023-10-24 9:43:50' );



/*story 11*/

SELECT M.message,M.date_heure_message, U.pseudo,(U.id = 4) as isSender
FROM message as M
LEFT JOIN utilisateur as U
ON M.id_expediteur = U.id
WHERE M.date_heure_message >= NOW() - INTERVAL 1 DAY;



/*story 12*/

INSERT INTO utilisateur
VALUES (7,'oui@gmail','123456','Thibaud','2020-10-25 09:49:10','2023-10-23'),
       (8,'non@gmail','654321','Aurélien','2019-11-09 15:20:28','2020-10-23'),
       (9,'momomo@gmail','7890','Maud','2022-04-18 04:30:29','2023-10-23');


INSERT INTO score(id_joueur,id_jeu,difficulte,score_partie,date_heure_partie)
VALUES (7,1,1,10,'2020-02-01 10:22:40'),
       (8,1,3,15,'2020-02-01 10:22:40'),
       (9,1,2,12,'2020-02-01 10:22:40');


SELECT score.id, `id_joueur`, `id_jeu`, `difficulte`, `score_partie`, `date_heure_partie` 
FROM score
LEFT JOIN utilisateur
ON score.id_joueur = utilisateur.id
WHERE pseudo LIKE '%au%' ;



/*story 13*/

    CREATE TABLE message_prive (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    personne1 INT UNSIGNED NOT NULL,
    personne2 INT UNSIGNED NOT NULL,
    message TEXT NULL,
    est_lu BOOLEAN NOT NULL,
    date_heure_envoie_M DATETIME NOT NULL,
    date_heure_lecture DATETIME NULL,
    PRIMARY KEY (id)
    )
        ENGINE = INNODB;



/*story 14*/

INSERT INTO message_prive( personne1, personne2, message, est_lu, date_heure_envoie_M, date_heure_lecture)
VALUES(1,9,'salut',1,'2023-10-24 14:00','2023-10-24 14:00'),
      (9,1,'salut mec',1,'2023-10-24 14:02', '2023-10-24 14:02'),
      (2,5,'ça fait longtemps !!',0,'2023-10-24 14:10',NULL),
      (5,6,'On se fait une partie ??',1,'2023-10-24 14:15','2023-10-24 14:15'),
      (6,5,'Vas y chaud',1,'2023-10-24 14:17','2023-10-24 14:17'),
      (3,4,'Tu es devenu meilleur',1,'2023-10-24 14:25','2023-10-24 14:25'),
      (4,3,'Merci',0,'2023-10-24 14:30',NULL),
      (8,9,'tu peux m aider ?',1,'2023-10-24 14:35', '2023-10-24 14:35'),
      (9,8,'c est quoi le pb ?',1,'2023-10-24 14:37', '2023-10-24 14:37'),
      (8,9,'j arrive pas au level 3',1,'2023-10-24 14:38', '2023-10-24 14:38'),
      (9,8,'ok je vais t expliquer',1,'2023-10-24 14:39', '2023-10-24 14:39'),
      (8,9,'Merci beaucoup',1,'2023-10-24 14:40','2023-10-24 14:40'),
      (4,2,'salut t es nouveau ?',0,'2023-10-24 14:41',NULL),
      (5,3,'Viens discord !',1,'2023-10-24 14:42', '2023-10-24 14:42'),
      (3,5,'vas y j arrive',1,'2023-10-24 14:43', '2023-10-24 14:43'),
      (5,1,'CC',0,'2023-10-24 14:45', NULL),
      (1,8,'t es bien classé toi je crois non ?',1,'2023-10-24 14:47', '2023-10-24 14:47'),
      (8,1,'cv je me débrouille quoi',1,'2023-10-24 14:48', '2023-10-24 14:48'),
      (1,8,'t es modeste',1,'2023-10-24 14:50', '2023-10-24 14:50'),
      (2,3,'salut',0,'2023-10-24 14:51', NULL);


      INSERT INTO message_prive( personne1, personne2, message, est_lu, date_heure_envoie_M, date_heure_lecture)
      VALUES(1,2,'a suprimer',1,'2023-10-24 15:13','2023-10-24 15:14');
      
      UPDATE message_prive
      SET message = 'modifier'
      WHERE id = 4;

      DELETE FROM message_prive
      WHERE id = 21;



/*story 15*/

SELECT U2.pseudo as pseudo_envoyeur,U.pseudo as pseudo_receveur,M.message, M.date_heure_envoie_M, M.date_heure_lecture, M.est_lu
FROM message_prive AS M
LEFT JOIN utilisateur as U
ON M.personne2 = U.id
LEFT JOIN utilisateur as U2
ON M.personne1 = U2.id
WHERE (M.personne1 = 1 OR M.personne2 = 1) 
AND M.date_heure_envoie_M = 
(SELECT MAX(M2.date_heure_envoie_M)
        FROM message_prive as M2
        WHERE(
        (M2.personne1 = M.personne1 AND M2.personne2 = M.personne2)
        OR (M2.personne1 = M.personne2 AND M2.personne2 = M.personne1)));




/*story 16*/

SELECT U2.pseudo as pseudo_envoyeur,
U.pseudo as pseudo_receveur,M.message, 
M.date_heure_envoie_M, M.date_heure_lecture,
M.est_lu,
( SELECT COUNT(id_joueur) FROM score WHERE id_joueur = M.personne1) as partie_jouer_j1,
(SELECT COUNT(id_joueur) FROM score WHERE id_joueur = M.personne2) as partie_jouer_j2,

(SELECT nom_jeu
FROM jeu
WHERE id = (SELECT id_jeu
            FROM score
            WHERE id_joueur = M.personne1
            GROUP BY id_jeu
            ORDER BY COUNT(id) DESC
            LIMIT 1) 
            )as jeu_plus_joue_j1,

(SELECT nom_jeu
FROM jeu
WHERE id = (SELECT id_jeu
            FROM score
            WHERE id_joueur = M.personne2
            GROUP BY id_jeu
            ORDER BY COUNT(id) DESC
            LIMIT 1)
            )as jeu_plus_joue_j2

FROM message_prive AS M
LEFT JOIN utilisateur as U
ON M.personne2 = U.id
LEFT JOIN utilisateur as U2
ON M.personne1 = U2.id
WHERE (M.personne1 = 1 OR M.personne2 = 1) 
AND M.date_heure_envoie_M = 
(SELECT MAX(M2.date_heure_envoie_M)
        FROM message_prive as M2
        WHERE(
        (M2.personne1 = M.personne1 AND M2.personne2 = M.personne2)
        OR (M2.personne1 = M.personne2 AND M2.personne2 = M.personne1)));



/*story 17*/

SELECT Année, Mois, Top1, Top2, Top3, Total_parties, jeu_le_plus_joué
FROM (
    SELECT YEAR(CURRENT_TIMESTAMP) AS Année, '1' AS Mois,
    (SELECT pseudo
    FROM utilisateur
    JOIN score ON score.id_joueur = utilisateur.id
    WHERE score.score_partie = (SELECT score_partie
                              FROM score
                              WHERE score.id_joueur = utilisateur.id
                              AND MONTH(date_heure_partie) = 10
                              AND difficulte = 1
                              AND YEAR(date_heure_partie) = Année
                              ORDER BY score_partie DESC
                              LIMIT 1)
    ORDER BY score_partie DESC
    LIMIT 1) AS Top1,

    (SELECT pseudo
    FROM utilisateur
    JOIN score ON score.id_joueur = utilisateur.id
    WHERE score.score_partie = (SELECT score_partie
                              FROM score
                              WHERE score.id_joueur = utilisateur.id
                              AND MONTH(date_heure_partie) = 10
                              AND difficulte = 1
                              AND YEAR(date_heure_partie) = Année
                              ORDER BY score_partie DESC
                              LIMIT 1 OFFSET 2)
    ORDER BY score_partie DESC
    LIMIT 1) AS Top2,

    (SELECT pseudo
    FROM utilisateur
    JOIN score ON score.id_joueur = utilisateur.id
    WHERE score.score_partie = (SELECT score_partie
                              FROM score
                              WHERE score.id_joueur = utilisateur.id
                              AND MONTH(date_heure_partie) = 10
                              AND difficulte = 1
                              AND YEAR(date_heure_partie) = Année
                              ORDER BY score_partie DESC
                              LIMIT 1 OFFSET 3)
    ORDER BY score_partie DESC
    LIMIT 1) AS Top3,

    (SELECT COUNT(id_jeu)
    FROM score
    WHERE MONTH(date_heure_partie) = 10
    AND YEAR(date_heure_partie) = Année
    AND difficulte = 1) AS Total_parties,

    (SELECT nom_jeu
    FROM jeu
    WHERE id = (SELECT id_jeu
                FROM score
                WHERE MONTH(date_heure_partie) = 10
                AND YEAR(date_heure_partie) = Année
                AND difficulte = 1
                GROUP BY id_jeu
                ORDER BY COUNT(id) DESC
                LIMIT 1)
    ) AS jeu_le_plus_joué
) AS Resultats1

UNION

SELECT Année, Mois, Top1, Top2, Top3, Total_parties, jeu_le_plus_joué
FROM (
    SELECT YEAR(CURRENT_TIMESTAMP) AS Année, '2' AS Mois,
    (SELECT pseudo
    FROM utilisateur
    JOIN score ON score.id_joueur = utilisateur.id
    WHERE score.score_partie = (SELECT score_partie
                              FROM score
                              WHERE score.id_joueur = utilisateur.id
                              AND MONTH(date_heure_partie) = 2
                              AND difficulte = 1
                              AND YEAR(date_heure_partie) = Année
                              ORDER BY score_partie DESC
                              LIMIT 1)
    ORDER BY score_partie DESC
    LIMIT 1) AS Top1,

    (SELECT pseudo
    FROM utilisateur
    JOIN score ON score.id_joueur = utilisateur.id
    WHERE score.score_partie = (SELECT score_partie
                              FROM score
                              WHERE score.id_joueur = utilisateur.id
                              AND MONTH(date_heure_partie) = 2
                              AND difficulte = 1
                              AND YEAR(date_heure_partie) = Année
                              ORDER BY score_partie DESC
                              LIMIT 1 OFFSET 2)
    ORDER BY score_partie DESC
    LIMIT 1) AS Top2,

    (SELECT pseudo
    FROM utilisateur
    JOIN score ON score.id_joueur = utilisateur.id
    WHERE score.score_partie = (SELECT score_partie
                              FROM score
                              WHERE score.id_joueur = utilisateur.id
                              AND MONTH(date_heure_partie) = 2
                              AND difficulte = 1
                              AND YEAR(date_heure_partie) = Année
                              ORDER BY score_partie DESC
                              LIMIT 1 OFFSET 3)
    ORDER BY score_partie DESC
    LIMIT 1) AS Top3,

    (SELECT COUNT(id_jeu)
    FROM score
    WHERE MONTH(date_heure_partie) = 2
    AND YEAR(date_heure_partie) = Année
    AND difficulte = 1) AS Total_parties,

    (SELECT nom_jeu
    FROM jeu
    WHERE id = (SELECT id_jeu
                FROM score
                WHERE MONTH(date_heure_partie) = 2
                AND YEAR(date_heure_partie) = Année
                AND difficulte = 1
                GROUP BY id_jeu
                ORDER BY COUNT(id) DESC
                LIMIT 1)
    ) AS jeu_le_plus_joué
) AS Resultats2;


/*Données dynamique pour la page d'accueil*/

SELECT COUNT(id) AS parties_jouees FROM score;

SELECT COUNT(id) AS nombre_de_joueur_inscrit
FROM utilisateur;


SELECT score_partie AS temps_records
FROM score
ORDER BY score_partie DESC
LIMIT 1;

SELECT COUNT(id) AS joueurconnect
FROM utilisateur
WHERE date_heure_connexion >= NOW() - INTERVAL 30 MINUTE;