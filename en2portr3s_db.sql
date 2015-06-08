CREATE DATABASE IF NOT EXISTS en2portr3s
DEFAULT CHARACTER SET utf8
COLLATE utf8_general_ci;

USE en2portr3s;

CREATE TABLE IF NOT EXISTS person (
    id INT(10) NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(36) NOT NULL,
    last_name VARCHAR(64) NOT NULL,
    email VARCHAR(64) NOT NULL,
    phone VARCHAR(16) NOT NULL,
    address VARCHAR(255) NOT NULL,
    birthdate TIMESTAMP NOT NULL,

    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS account (
    id INT(10) NOT NULL AUTO_INCREMENT,
    username VARCHAR(36) NOT NULL,
    pass VARCHAR(32) NOT NULL,
    kind VARCHAR(24) NOT NULL,
    since TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    person_id INT(10) NOT NULL,

    PRIMARY KEY (id),
    INDEX (person_id),

    FOREIGN KEY (person_id)
    REFERENCES person(id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS comment (
    id INT(10) NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(36) NOT NULL,
    last_name VARCHAR(64) NOT NULL,
    email VARCHAR(64) NOT NULL,
    content VARCHAR(800) NOT NULL,
    status varchar (20) not null,
    since TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS buzon (
    id INT(10) NOT NULL AUTO_INCREMENT,
    content VARCHAR(800) NOT NULL,
    status varchar (20) not null,
    since TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (id)
);
