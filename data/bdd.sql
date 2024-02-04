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
    observation varchar(255)  NOT NULL,
    etat varchar(255) NOT NULL,
    amelioration varchar(255) NOT NULL 
)ENGINE = InnoDB;