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

ALTER TABLE message
ADD isSender bool NOT NULL;

SELECT M.message,M.date_heure_message, U.pseudo, M.isSender
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










    



