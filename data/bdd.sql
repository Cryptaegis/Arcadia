
CREATE TABLE  `alimentation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `animal` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL,
  `time` int DEFAULT NULL,
  `nourriture` varchar(255) NOT NULL,
  `quantite` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;



CREATE TABLE `animaux` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `race` varchar(255) NOT NULL,
  `habitat` varchar(255) NOT NULL,
  `view` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;


INSERT INTO `animaux` (`id`, `prenom`, `race`, `habitat`, `view`) VALUES
(9, 'Harry', 'lion', ' Savane', 325),
(10, 'Berny', 'girafe', ' savane', 325),
(11, 'Cus', 'zèbre', ' savane', 324),
(13, 'Daffy', 'canard', ' Marais', 324),
(14, 'hugo', 'loutre', ' Marais', 324),
(15, 'Marny', 'chimpanze', ' Jungle', 324),
(16, 'Fray', 'aigle', ' jungle', 324),
(17, 'GUMGUM', 'jaguar', ' jungle', 324),
(18, 'luny', 'cigogne', ' Marais', 324);


CREATE TABLE `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `visitRating` int NOT NULL,
  `date` datetime DEFAULT NULL,
  `accompagnant` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `validate` binary(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;



INSERT INTO `comments` (`id`, `username`, `visitRating`, `date`, `accompagnant`, `comment`, `validate`) VALUES
(15, 'Julien', 5, '2024-03-09 17:45:34', ' Olive', 'Je me sens tellement mieux depuis notre visite qui nous à rempli d&#039;émerveillement absolu! Merci Arcadia d&#039;avoir créer ce souvenir merveilleux en amoureux.', 0x31),
(16, 'Anna', 4, '2024-03-08 18:07:58', ' Frederic', 'Une experience qui en vaut le détour. Evidemment que je reviendrais. Le guide à été patient et à répondu a toutes nos question. Un grand merci !', 0x31),
(18, 'Jordan', 3, '2024-03-07 18:16:19', ' Ma soeur', 'Je n&#039;ai jamais vu ma petite soeur aussi heureuse de toute ma vie. Et ces lion majestueux. Incroyable merci!', 0x31),
(19, 'KURO', 3, '2024-03-18 06:15:42', ' Jordan', 'J&#039;aurais aimé plus de chocolat sur ma glace mais ce restaurant est incroyable. #Oasis', 0x31);



CREATE TABLE  `habitat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `descriptionHabitat` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `animaux` varchar(255) DEFAULT NULL,
  `validate` binary(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `animaux` (`animaux`)
) ENGINE=InnoDB;



INSERT INTO `habitat` (`id`, `nom`, `descriptionHabitat`, `animaux`, `validate`) VALUES
(6, 'Marais', 'Bienvenue dans la zone enchanteresse des Marais d\'/Arcadia, un écosystème captivant au cœur de notre zoo. Sous une canopée luxuriante, des roseaux élancés dansent au gré de la brise légère, créant une symphonie apaisante. Des sentiers serpentent à travers', ' cigogne\r\ncanard\r\nloutre', 0x31),
(8, 'Jungle', 'Bienvenue à Arcadia, le joyau tropical au cœur de notre zoo, où une aventure exotique vous attend parmi les murmures des feuilles et les mystères de la jungle. Sous le dôme luxuriant, une canopée verdoyante s\'/étend, abritant une multitude de plantes.', ' chimpanze \r\naigle\r\njaguar', 0x31),
(19, 'Savane', 'Découvrez la majesté et la diversité de la vie sauvage africaine dans l&#039;habitat savane, une expérience immersive au sein du prestigieux zoo ARCADIA. Cette section unique vous transporte dans les vastes plaines de la savane, recréant l&#039;habitat naturel de certaines des espèces les plus fascinantes du continent.\r\n', ' lion\r\nGirafe\r\nZèbre', 0x31);



CREATE TABLE  `horaire` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `jour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `heureDebut` time NOT NULL,
  `heureFin` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;


INSERT INTO `horaire` (`id`, `nom`, `jour`, `heureDebut`, `heureFin`) VALUES
(339, 'Zoo', 'Lundi', '10:00:00', '18:00:00'),
(340, 'Zoo', 'Mardi', '10:00:00', '18:00:00'),
(341, 'Zoo', 'Jeudi', '10:00:00', '18:00:00'),
(342, 'Zoo', 'Vendredi', '10:00:00', '18:00:00'),
(343, 'Restaurant', 'Lundi', '12:00:00', '18:00:00'),
(344, 'Restaurant', 'Mardi', '12:00:00', '18:00:00'),
(345, 'Restaurant', 'Jeudi', '12:00:00', '18:00:00'),
(346, 'Restaurant', 'Vendredi', '12:00:00', '18:00:00'),
(347, 'Train', 'Lundi', '11:00:00', '16:30:00'),
(348, 'Train', 'Mardi', '11:00:00', '16:30:00'),
(349, 'Train', 'Jeudi', '11:00:00', '16:30:00'),
(350, 'Train', 'Vendredi', '11:00:00', '16:30:00'),
(351, 'Guide', 'Lundi', '10:00:00', '16:00:00'),
(352, 'Guide', 'Mardi', '10:00:00', '16:00:00'),
(353, 'Guide', 'Jeudi', '10:00:00', '16:00:00'),
(354, 'Guide', 'Vendredi', '10:00:00', '16:00:00');



CREATE TABLE  `observation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `animal` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` tinytext NOT NULL,
  `observation` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `amelioration` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;


INSERT INTO `observation` (`id`, `animal`, `date`, `time`, `observation`, `etat`, `amelioration`) VALUES
(1, 'Lion', '1999-02-20', '07:00', '0', '0', '0'),
(2, 'Lion', '2024-02-10', '17:54', 'OO', 'OOO', 'O'),
(3, 'zebre', '2024-02-01', '12:00', 'O', 'o', 'o'),
(4, 'girafe', '2024-01-25', '10:10', '0', '0', '0'),
(5, 'Lion', '2024-02-10', '17:00', '0', '0', '0'),
(6, 'zebre', '2024-02-10', '12:00', '0', '0', '0'),
(7, 'girafe', '2024-02-10', '14:00', '0', '0', '0'),
(8, 'Lion', '2024-01-01', '12:00', '0', '0', '0'),
(9, 'zebre', '2024-01-01', '12:00', '0', '0', '0'),
(10, 'Lion', '2024-01-01', '12:00', '0', '0', '0');



CREATE TABLE `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `descriptionService` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;


INSERT INTO `services` (`id`, `libelle`, `descriptionService`) VALUES
(5, 'L&#039;oasis', 'Bienvenue au Restaurant de l&#039;Oasis, une escale gastronomique en plein cœur du Zoo Aracadia. Avec une ambiance chaleureuse et une vue panoramique sur des paysages naturels, notre restaurant vous invite à savourer une expérience culinaire inoubliable.'),
(6, 'Nos guide', 'Laissez-nous vous guider à travers une expérience inoubliable au Zoo ARCADIA avec nos services de guide personnalisés. Nos guides expérimentés sont passionnés par la vie sauvage et sont là pour enrichir votre visite en partageant des connaissances approfo'),
(7, 'Notre train ', 'Montez à bord de notre train pittoresque pour une excursion guidée passionnante à travers les merveilles de la faune et de la flore du Zoo ARCADIA. Notre train offre une manière unique et confortable d&#039;explorer les vastes étendues du zoo tout en béné');


--
-- Structure de la table `users`
--

CREATE TABLE  `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;


INSERT INTO `users` (`id`, `username`, `email`, `type`, `password`) VALUES
(2, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(4, 'admin', 'admin@gmail.com', 'user', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918'),
(5, 'admin', 'admin@gmail.com', 'admin', 'e54fc6b51915e222ba6196747a19ebb8dfa651fd2b46a385a0ded647fbfefda0'),
(7, 'veto', 'veto@gmail.com', 'vétérinaire', 'cb9bdb0732913b29123546b8f52b557a624c6902c47edd9f159694ba1202da09'),
(8, 'A', 'g@hotmail.com', 'vétérinaire', 'e54fc6b51915e222ba6196747a19ebb8dfa651fd2b46a385a0ded647fbfefda0'),
(9, 'regul', 'ravenwolf700@gmail.com', 'régulateur', 'e54fc6b51915e222ba6196747a19ebb8dfa651fd2b46a385a0ded647fbfefda0'),
(10, 'B', '789456', 'régulateur', 'e54fc6b51915e222ba6196747a19ebb8dfa651fd2b46a385a0ded647fbfefda0'),
(26, 'test', 'candelier.melissa@gmail.com', 'user', 'e54fc6b51915e222ba6196747a19ebb8dfa651fd2b46a385a0ded647fbfefda0');