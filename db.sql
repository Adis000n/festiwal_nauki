create database festiwal_nauki;

use festiwal_nauki;

CREATE TABLE pytanie (
    id_pytanie INT AUTO_INCREMENT PRIMARY KEY,
    pytanie_tresc VARCHAR(255),
    media_typ ENUM('tf','open','closed'),
    odpowiedz1 VARCHAR(255),
    odpowiedz2 VARCHAR(255),
    odpowiedz3 VARCHAR(255),
    odpowiedz4 VARCHAR(255)
);

CREATE TABLE klasa (
    id_klasa INT AUTO_INCREMENT PRIMARY KEY,
    nazwa VARCHAR(255),
    wynik TIME
);

