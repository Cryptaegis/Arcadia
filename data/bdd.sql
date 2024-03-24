sql
CREATE TABLE users
(
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    username varchar(255)  NOT NULL,
    password varchar(255) NOT NULL,
    admin BINARY(11) DEFAULT 0 NOT NULL 
)ENGINE = InnoDB;
CREATE TABLE observation
(
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    animal varchar(255)  NOT NULL,
    date TEXT(10) NOT NULL,
    time int(4),
    observation varchar(255)  NOT NULL,
    etat varchar(255) NOT NULL,
    amelioration varchar(255) NOT NULL 
)ENGINE = InnoDB;

CREATE TABLE alimentation
(
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    animal varchar(255)  NOT NULL,
    date TEXT(10) NOT NULL,
    time int(4),
<<<<<<< Updated upstream
    observation varchar(255)  NOT NULL,
    etat varchar(255) NOT NULL,
    amelioration varchar(255) NOT NULL 
)ENGINE = InnoDB;
=======
    nourriture varchar(255) NOT NULL,
    quantite varchar(255)  NOT NULL
    )ENGINE = InnoDB;


    CREATE TABLE comments
(
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    username varchar(255)  NOT NULL,
    visitRating int(11) NOT NULL,
    date DATETIME,
    accompagnant VARCHAR(255) NOT NULL,
    comment varchar(255)  NOT NULL,
    validate BINARY(1) DEFAULT 0 NOT NULL
    )ENGINE = InnoDB;

       CREATE TABLE services
(
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    libelle varchar(255)  NOT NULL,
    descriptionService varchar(255) NOT NULL
)ENGINE = InnoDB;

   CREATE TABLE habitat
(
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nom varchar(255)  NOT NULL,
    descriptionHabitat varchar(255) NOT NULL,
    animaux varchar(255),
    validate BINARY(1) DEFAULT 0 NOT NULL
)ENGINE = InnoDB;
    CREATE TABLE animaux
(
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    prenom varchar(255)  NOT NULL,
    race varchar(255) NOT NULL,
    habitat varchar(255) NOT NULL,
    view int(255) NULL DEFAULT 0
    )ENGINE = InnoDB;



    CREATE TABLE horaire
(
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nom varchar(255)  NOT NULL,
    jour char(3) NOT NULL,
    heureDebut time NOT NULL,
    heureFin time NOT NULL,
)ENGINE = InnoDB;

