CREATE DATABASE IF NOT EXISTS en2portr3s
DEFAULT CHARACTER SET utf8
COLLATE utf8_general_ci;

USE en2portr3s;

CREATE TABLE IF NOT EXISTS person (
    id int(10) NOT NULL AUTO_INCREMENT,
    first_name varchar(36) NOT NULL,
    last_name varchar(64) NOT NULL,
    email varchar(64) NOT NULL,
    tel varchar(16) NOT NULL,
    address varchar(255) NOT NULL,
    birthdate Date NOT NULL,

    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS account (
    id int(10) NOT NULL AUTO_INCREMENT,
    username varchar(36) NOT NULL,
    pass varchar(64) NOT NULL,
    type varchar(64) NOT NULL,

    PRIMARY KEY (id)
);