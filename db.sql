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
    czas_kon time,
    czas_start time,
    wynik TIME
);


INSERT INTO `pytanie` (`id_pytanie`, `pytanie_tresc`, `media_typ`, `odpowiedz1`, `odpowiedz2`, `odpowiedz3`, `odpowiedz4`, `poprawna_odp`) 
VALUES 
(NULL, 'Jaka jest stolica Niemiec?', 'open', 'Berlin', NULL, NULL, NULL, NULL), 
(NULL, 'Jaka jest stolica Polski?', 'closed', 'Warszawa', 'Poznań', 'Katowice', 'Łódź', 'Warszawa'), 
(NULL, 'Czy Wiedeń jest stolicą Austrii?', 'tf', 'true', '', '', '', 'true'),
(NULL, 'Które z następujących państw leży w Ameryce Południowej?', 'closed', 'Brazylia', 'Niemcy', 'Japonia', 'Rosja', 'Brazylia'),
(NULL, 'Jaką walutę używa Wielka Brytania?', 'closed', 'Funt szterling', 'Euro', 'Dolar amerykański', 'Jen japoński', 'Funt szterling'),
(NULL, 'Jaki jest największy kontynent na Ziemi?', 'open', 'Azja', NULL, NULL, NULL, NULL),
(NULL, 'Które z poniższych państw nie graniczy z Niemcami?', 'closed', 'Włochy', 'Dania', 'Francja', 'Austria', 'Włochy'),
(NULL, 'Jaka jest stolica Francji?', 'open', 'Paryż', NULL, NULL, NULL, NULL),
(NULL, 'Czy Chiny są najludniejszym krajem na świecie?', 'tf', 'true', '', '', '', 'true'),
(NULL, 'Które z tych oceanów nie otacza Afryki?', 'closed', 'Ocean Arktyczny', 'Ocean Atlantycki', 'Ocean Indyjski', 'Ocean Spokojny', 'Ocean Arktyczny'),
(NULL, 'Gdzie znajduje się Wielki Kanion?', 'open', 'USA', NULL, NULL, NULL, NULL),
(NULL, 'Czy Rzym jest stolicą Włoch?', 'tf', 'false', '', '', '', 'false'),
(NULL, 'Które państwo jest największe pod względem powierzchni na świecie?', 'closed', 'Rosja', 'Chiny', 'Stany Zjednoczone', 'Kanada', 'Rosja'),
(NULL, 'Jaka jest stolica Kanady?', 'open', 'Ottawa', NULL, NULL, NULL, NULL),
(NULL, 'Które państwo leży na Półwyspie Iberyjskim?', 'closed', 'Hiszpania', 'Włochy', 'Portugalia', 'Francja', 'Hiszpania'),
(NULL, 'Czy Tokio jest stolicą Japonii?', 'tf', 'true', '', '', '', 'true'),
(NULL, 'Jak nazywa się najwyższy szczyt Ziemi?', 'open', 'Mount Everest', NULL, NULL, NULL, NULL),
(NULL, 'Który kontynent jest najbardziej zaludniony?', 'closed', 'Azja', 'Europa', 'Afryka', 'Ameryka Południowa', 'Azja'),
(NULL, 'Jaka jest stolica Australii?', 'open', 'Canberra', NULL, NULL, NULL, NULL),
(NULL, 'Które państwo jest najmniejsze pod względem powierzchni na świecie?', 'closed', 'Watykan', 'Monako', 'San Marino', 'Nauru', 'Watykan'),
(NULL, 'Czy Islandia jest częścią Unii Europejskiej?', 'tf', 'false', '', '', '', 'false'),
(NULL, 'Jaki jest drugi największy kontynent na Ziemi?', 'open', 'Afryka', NULL, NULL, NULL, NULL),
(NULL, 'Które państwo graniczy z Polską na północy?', 'closed', 'Rosja', 'Ukraina', 'Niemcy', 'Słowacja', 'Rosja'),
(NULL, 'Jaka jest stolica Rosji?', 'open', 'Moskwa', NULL, NULL, NULL, NULL),
(NULL, 'Czy Kanada jest największym krajem na świecie pod względem powierzchni?', 'tf', 'true', '', '', '', 'true'),
(NULL, 'Które państwo jest największym eksporterem ropy naftowej na świecie?', 'closed', 'Arabia Saudyjska', 'Rosja', 'Stany Zjednoczone', 'Kanada', 'Arabia Saudyjska'),
(NULL, 'Jaki kraj jest znany jako "Kraina Kwitnącej Wiśni"?', 'open', 'Japonia', NULL, NULL, NULL, NULL),
(NULL, 'Czy Kolumbia graniczy z Brazylią?', 'tf', 'false', '', '', '', 'false'),
(NULL, 'Które państwo posiada najdłuższą linię brzegową na świecie?', 'closed', 'Kanada', 'Rosja', 'Australia', 'Brazylia', 'Kanada'),
(NULL, 'Jak nazywa się największa rzeka na świecie pod względem objętości wody?', 'open', 'Amazonka', NULL, NULL, NULL, NULL),
(NULL, 'Czy Paryż jest stolicą Belgii?', 'tf', 'false', '', '', '', 'false'),
(NULL, 'Które państwo jest najmniej zaludnione na świecie?', 'closed', 'Watykan', 'Nauru', 'Tuvalu', 'Monako', 'Nauru'),
(NULL, 'Jaki kontynent jest najmniejszy pod względem powierzchni?', 'open', 'Australia', NULL, NULL, NULL, NULL),
(NULL, 'Czy Nowy Jork jest stolicą Stanów Zjednoczonych?', 'tf', 'false', '', '', '', 'false'),
(NULL, 'Które miasto jest uważane za kolebkę renesansu?', 'closed', 'Florencja', 'Paryż', 'Rzym', 'Ateny', 'Florencja'),
(NULL, 'Jaka jest najwyższa góra w systemie górskim Himalajów?', 'open', 'Mount Everest', NULL, NULL, NULL, NULL),
(NULL, 'Czy Grenlandia jest krajem?', 'tf', 'false', '', '', '', 'false'),
(NULL, 'Które państwo posiada najwięcej wysp?', 'closed', 'Szwecja', 'Japonia', 'Indonezja', 'Nowa Zelandia', 'Indonezja'),
(NULL, 'Jaka jest stolica Chin?', 'open', 'Pekin', NULL, NULL, NULL, NULL),
(NULL, 'Czy Hawaje należą do Stanów Zjednoczonych?', 'tf', 'true', '', '', '', 'true'),
(NULL, 'Które państwo jest najbardziej uprzemysłowione na świecie?', 'closed', 'Niemcy', 'Stany Zjednoczone', 'Japonia', 'Chiny', 'Niemcy'),
(NULL, 'Jaki kontynent jest nazywany "Starożytnym Lądem"?', 'open', 'Afryka', NULL, NULL, NULL, NULL),
(NULL, 'Czy Kuba jest wyspą?', 'tf', 'true', '', '', '', 'true'),
(NULL, 'Które państwo leży na Półwyspie Skandynawskim?', 'closed', 'Norwegia', 'Finlandia', 'Szwecja', 'Dania', 'Norwegia'),
(NULL, 'Jaka jest stolica Stanów Zjednoczonych?', 'open', 'Waszyngton', NULL, NULL, NULL, NULL),
(NULL, 'Czy Egipt graniczy z Morzem Śródziemnym?', 'tf', 'true', '', '', '', 'true'),
(NULL, 'Które państwo jest największym producentem kawy na świecie?', 'closed', 'Brazylia', 'Kolumbia', 'Indie', 'Etiopia', 'Brazylia'),
(NULL, 'Jaki jest największy archipelag na świecie?', 'open', 'Indonezja', NULL, NULL, NULL, NULL);

SET SQL_SAFE_UPDATES = 0;

delimiter //
create trigger czas_wynik
before insert on klasa
for each row
begin
   
    set NEW.wynik= new.czas_kon-new.czas_start;

end//
delimiter ;
-- przykładowy insert 
-- insert into klasa values(default,"3TP","12:12:12","10:10:10",null);
-- select * from klasa;
alter table klasa add column punkty tinyint;
alter table klasa add column nr_pytanie INT;
