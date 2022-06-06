CREATE DATABASE hotel;

USE hotel,

CREATE TABLE klant(
    klant_code INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) UNIQUE,
    password VARCHAR(255) NOT NULL,
    klant_naam VARCHAR(255) NOT NULL,
    adres VARCHAR(255),
    plaats VARCHAR(255),
    postcode VARCHAR(255),
    telefoon VARCHAR(255) NOT NULL,
    PRIMARY KEY (klant_code)
);

CREATE TABLE kamers(
    kamer_code INT NOT NULL AUTO_INCREMENT,
    eigenschappen VARCHAR(255) NOT NULL,
    prijs_per_dag decimal(10,2) NOT NULL,
    PRIMARY KEY (kamer_code)
);

CREATE TABLE reservering(
    reserverings_code INT NOT NULL,
    van date NOT NULL,
    tot date NOT NULL,
    klant_code INT NOT NULL,
    kamer_code INT NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (reserverings_code),
    FOREIGN KEY (klant_code) REFERENCES klant(klant_code) ON DELETE CASCADE,
    FOREIGN KEY (kamer_code) REFERENCES kamers(kamer_code) ON DELETE CASCADE
);

CREATE TABLE overzicht(
    overzicht_code INT NOT NULL AUTO_INCREMENT,
    klant_code INT NOT NULL,
    kamer_code int NOT NULL,
    periode date NOT NULL,
    PRIMARY KEY (overzicht_code),
    FOREIGN KEY (klant_code) REFERENCES klant(klant_code) ON DELETE CASCADE,
    FOREIGN KEY (kamer_code) REFERENCES kamers(kamer_code) ON DELETE CASCADE
);

CREATE TABLE medewerker(
    medewerker_code INT NOT NULL AUTO_INCREMENT,
    medewerker_naam VARCHAR(255),
    username VARCHAR(255) UNIQUE,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (medewerker_code)
);