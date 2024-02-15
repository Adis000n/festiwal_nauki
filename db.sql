create database festiwal_nauki;

use festiwal_nauki;

CREATE TABLE pytanie (
    id_pytanie INT AUTO_INCREMENT PRIMARY KEY,
    pytanie_tresc VARCHAR(255),
    media_typ ENUM('tf','open','closed'),
    odpowiedz1 VARCHAR(255),
    odpowiedz2 VARCHAR(255),
    odpowiedz3 VARCHAR(255),
    odpowiedz4 VARCHAR(255),
    poprawna_odp VARCHAR(255)
);

CREATE TABLE klasa (
    id_klasa INT AUTO_INCREMENT PRIMARY KEY,
    nazwa VARCHAR(255),
    wynik TIME
);

INSERT INTO `pytanie` (`id_pytanie`, `pytanie_tresc`, `media_typ`, `odpowiedz1`, `odpowiedz2`, `odpowiedz3`, `odpowiedz4`, `poprawna_odp`) VALUES (NULL, 'Jaka jest stolica niemiec?', 'open', 'Berlin', NULL, NULL, NULL, NULL), (NULL, 'Jaka jest stolica polski', 'closed', 'Warszawa', 'Poznań', 'Katowice', 'Łódź', 'warszawa'), (NULL, 'Czy wiedeń jest stolicą Austrii?', 'tf', 'true', '', '', '', '');

