-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql8
-- Generation Time: Cze 11, 2024 at 06:49 AM
-- Wersja serwera: 8.0.33-25
-- Wersja PHP: 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `37911724_festiwal_nauki`
--
CREATE DATABASE IF NOT EXISTS `37911724_festiwal_nauki` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `37911724_festiwal_nauki`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasa`
--

CREATE TABLE `klasa` (
  `id_klasa` int NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `api_key` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `czas_kon` time DEFAULT '00:00:00',
  `czas_start` time DEFAULT NULL,
  `wynik` time DEFAULT NULL,
  `punkty` tinyint DEFAULT '0',
  `nr_pytanie` int DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `klasa`
--

INSERT INTO `klasa` (`id_klasa`, `nazwa`, `api_key`, `czas_kon`, `czas_start`, `wynik`, `punkty`, `nr_pytanie`) VALUES
(1, '10tp', '9bba6f9d76910da30a8d6ec85ae08395', '00:00:00', '09:39:23', '-09:39:23', 3, 7),
(2, '2TP', '890ddf5a071c194e166f2ffb936414f8', '08:05:06', '07:53:45', '00:11:21', 29, 49),
(5, 'test', 'bfa23e53ae33e79e824b1cb3d86fc548', '00:00:00', '14:03:47', NULL, 0, 1),
(6, 'test45', '90a568e05132729536198b5de12ed6b2', '00:00:00', '14:06:10', NULL, 0, 1),
(7, '&lt;h1&gt;LAAAAAAAAA&lt;/h1&gt;', 'c873dd7019bdb8e3de635a921c790631', '00:00:00', '14:08:57', NULL, 0, 1),
(8, 'ohhhooo', '9bcaf7c68d2cfe062930f1a7e0ec491a', '00:00:00', '14:10:30', NULL, 0, 1),
(9, '4TP', 'a9d8488b1f18e842bc1f6e265a66c5c0', '15:17:36', '15:14:59', '00:02:37', 14, 49),
(10, '    ggg', '662897048ce551dbe9ca0ef48353b97d', '00:00:00', '15:19:33', '-15:19:33', 0, 2),
(11, '3TP', '43a69ce1840bbd599b95bc8d083b93f2', '00:00:00', '20:53:06', NULL, 0, 1),
(12, '10tp1', '803c47c9840824972478a9871f26a290', '00:00:00', '21:34:57', '-21:34:57', 0, 3),
(13, 'test1', 'bc862340799532643d746853f0cde8c8', '00:00:00', '07:16:40', NULL, 0, 1),
(14, 'est', '753c6fd23b635cfa4045aeea47c23b4d', '00:00:00', '11:21:26', NULL, 0, 1),
(15, '432tp', 'f240aa24ea62c4199c276412d03460f4', '00:00:00', '22:29:49', '-22:29:49', 1, 3),
(16, 'teees', '0eb0f7cfa327be0fff0a35692b849ed7', '00:00:00', '07:19:00', NULL, 0, 1),
(17, 'testowa', '16247610112e466838e824fa0fe42dea', '00:00:00', '07:46:48', '-07:46:48', 11, 20),
(18, 'test330', '52330e46d25627bf2f301c1b03a267aa', '00:00:00', '10:54:33', NULL, 0, 1),
(19, 'test007', 'b6604b66d93168a80f29e4b03ce0cb34', '00:00:00', '10:56:41', NULL, 0, 1),
(20, '1TP', '9c538042c36beae1847673d12ea2cd0d', '14:26:56', '14:10:39', '00:16:17', 9, 49),
(21, 'Te', 'e7cbcccbe84f7b20237a603d900577ed', '00:00:00', '13:17:20', '-13:17:20', 4, 10),
(22, '21TP', 'f5fce2e7e62992335245433e3f0ff1d7', '00:00:00', '16:55:27', '-16:55:27', 1, 2),
(23, '2TP/1/2/3?', '407b492d28e8dffd51b33870da233686', '00:00:00', '16:57:25', NULL, 0, 1),
(24, 'teststtst,\\n', 'ca547da2ae2e8fcf7a951b10803f9653', '00:00:00', '16:58:58', NULL, 0, 1),
(25, 'test345', 'a9a85eaa888cbea0c95e036752e1cecf', '00:00:00', '08:37:40', '-08:37:40', 2, 5),
(26, 'testqwert', '8055cf954337ed792669fbd191bcb948', '00:00:00', '08:54:34', NULL, 0, 1),
(27, '1te', 'e177c1af98d29fbcd9f7b8b3cad8ecf2', '00:00:00', '11:28:36', '-11:28:36', 2, 5),
(28, '3TF2', 'f6a1711069de3cbf89e4016a39388670', '21:49:06', '21:29:12', '00:19:54', 17, 49),
(29, 'testtestKubiczekPozdro', '0609fa2dc58b182b4a5ffdf1d9faa862', '09:30:37', '09:04:34', '00:26:03', 44, 48),
(30, 'test122', 'd575ed9d8e896b9bd06dfb7d59ab9a4e', '00:00:00', '09:16:21', '-09:16:21', 0, 4),
(31, 'wwwwwww', 'e1e49703ac28c39240eef012bdf765ad', '00:00:00', '09:24:32', NULL, 0, 1),
(32, 'tetetetestestststs pozdro', '90413c6edd02046cfde93ebe899001ae', '00:00:00', '11:01:04', '-11:01:04', 2, 4),
(33, 'm123', '5e7da8751b89e952df60a818b1e173a6', '11:45:57', '11:19:24', '00:26:33', 38, 43),
(34, 'nicwazngeo', '9bfd9bb83bbe6bbe0b4dd4ea1307d4d2', '15:18:45', '14:17:21', '01:01:24', 36, 48),
(35, '15tp', '850b197dabbd633466013b3023e0f31e', '00:00:00', '15:19:59', '-15:19:59', 1, 2),
(36, '1TP2', '006d9aa105fda9ebd7fa80c4761755a1', '15:27:19', '15:21:09', '00:06:10', 46, 49),
(37, 'test155', 'c14dd93fb2107db7956de06f5f2f26b0', '00:00:00', '16:22:20', '-16:22:20', 2, 8),
(38, 'sdsd', '42c213c52e88a76ef0bf795f798b5477', '00:00:00', '17:19:11', '-17:19:11', 1, 4);

--
-- Wyzwalacze `klasa`
--
DELIMITER $$
CREATE TRIGGER `czas_wynik` BEFORE UPDATE ON `klasa` FOR EACH ROW BEGIN
    IF NEW.czas_start IS NOT NULL AND NEW.czas_kon IS NOT NULL THEN
        -- Calculate the difference in seconds
        SET NEW.wynik = TIMEDIFF(NEW.czas_kon, NEW.czas_start);
    ELSE
        SET NEW.wynik = '00:00:00';  -- Set to zero time if any value is NULL
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pytanie`
--

CREATE TABLE `pytanie` (
  `id_pytanie` int NOT NULL,
  `pytanie_tresc` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `media_typ` enum('tf','open','closed') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `odpowiedz1` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `odpowiedz2` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `odpowiedz3` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `odpowiedz4` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `poprawna_odp` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pytanie`
--

INSERT INTO `pytanie` (`id_pytanie`, `pytanie_tresc`, `media_typ`, `odpowiedz1`, `odpowiedz2`, `odpowiedz3`, `odpowiedz4`, `poprawna_odp`) VALUES
(1, 'Jaki stan skupienia materii przeważa we Wszechświecie?', 'closed', 'Stały', 'Ciekły', 'Gazowy', 'Plazma', 'Plazma'),
(2, 'W którym roku nastąpił upadek muru berlińskiego? (wpisz tylko rok)', 'open', '1989', '', '', '', '1989'),
(3, 'Nazwiska ilu postaci historycznych pojawiają się w tekście polskiego hymnu?', 'closed', '5', '3', '4', '2', '3'),
(4, 'Co powstaje w wyniku fotosyntezy?', 'closed', 'woda i węglowodany', 'dwutlenek węgla i woda', 'tlen i węglowodany', 'tlen i woda', 'tlen i węglowodany'),
(5, 'Które państwo jest największym producentem kawy na świecie?', 'closed', 'Brazylia', 'Kolumbia', 'Indie', 'Etiopia', 'Brazylia'),
(6, 'Którą planetą jesteśmy w kolejności od Słońca?', 'closed', '3', '2', '4', '5', '3'),
(7, 'Która planeta ma wokół siebie charakterystyczne pierścienie?', 'closed', 'Neptun', 'Mars', 'Saturn', 'Jowisz', 'Saturn'),
(8, 'Czy DNA i RNA mają identyczną strukturę chemiczną?', 'tf', 'false', '', '', '', 'false'),
(9, 'Jaki kwas mamy w żołądku?', 'closed', 'HCl', 'H3PO4', 'HNO3', 'H2SO4', 'HCl'),
(10, 'Czym różnią się sieci LAN i WAN?', 'closed', 'Okablowaniem', 'Topologią sieci', 'Obszarem działania', 'Szybkością transmisji danych', 'Obszarem działania'),
(11, 'Różyczka to choroba zakaźna wywoływana przez:', 'closed', 'bakterie', 'pierwotniaki', 'wirusy', 'pasożyty', 'wirusy'),
(12, 'Które miasto jest stolicą Kanady?', 'open', 'Ottawa', '', '', '', 'Ottawa'),
(13, 'Jak miała na imię córka Ewy Horeszko z „Pana Tadeusza”?', 'open', 'Zosia', '', '', '', 'Zosia'),
(14, 'Czy Ludwik XIV jest znany jako \"Król Słońce\"?', 'tf', 'true', '', '', '', 'true'),
(15, 'Które zwierzęta są stało cieplne?', 'closed', 'wszystkie kręgowce', 'tylko ssaki', 'ssaki i ptaki', 'ryby, gady i ptaki', 'ssaki i ptaki'),
(16, 'Ile wynosi suma cyfr roku bitwy pod Grunwaldem?', 'open', '6', '', '', '', '6'),
(17, 'Czy Magna Carta została podpisana w 1215 roku?', 'tf', 'true', '', '', '', 'true'),
(18, 'Jaki pierwiastek odkryła Maria Skłodowska Curie?', 'closed', 'Po', 'Cu', 'Pa', 'Sn', 'Po'),
(19, 'Czy Berlin jest w tej samej strefie czasowej co Warszawa?', 'tf', 'true', '', '', '', 'true'),
(20, 'Niedobór której witaminy powoduje szkorbut, obniża odporność organizmu i osłabia naczynia krwionośne?', 'closed', 'witaminy A', 'witaminy C', 'witaminy D', 'witaminy K', 'witaminy C'),
(21, 'Jaki symbol chemiczny ma fosfor?', 'open', 'P', '', '', '', 'P'),
(22, 'Prawo udziału w referendum krajowym ma obywatel, który najpóźniej w dniu głosowania ukończył co najmniej ile lat?', 'open', '18', '', '', '', '18'),
(23, 'W którym roku wybuchła I wojna światowa? (wpisz tylko rok)', 'open', '1914', '', '', '', '1914'),
(24, 'Cukier złożony występujący powszechnie w roślinach to', 'closed', 'kolagen', 'chityna', 'celuloza', 'glikogen', 'celuloza'),
(25, 'Czy pole powierzchni figury może być liczbą ujemną?', 'tf', 'false', NULL, '', '', 'false'),
(26, 'Niedobór witaminy ... powoduje tzw. kurzą ślepotę', 'open', 'A', '', '', '', 'A'),
(27, 'Które zwierzę jest symbolem Białowieskiego Parku Narodowego?', 'open', 'żubr', '', '', '', 'żubr'),
(28, 'Jak nazywa się epoka literacka, która trwała od 1890 do 1918 roku?', 'open', 'Młoda Polska', '', '', '', 'Młoda Polska'),
(29, 'Erytrocyty to:', 'closed', 'krwinki czerwone', 'bakterie jelitowe', 'zarodniki grzybów', 'receptory wzrokowe', 'krwinki czerwone'),
(30, 'Który kraj nie jest monarchią?', 'closed', 'Szwecja', 'Finlandia', 'Dania', 'Hiszpania', 'Finlandia'),
(31, 'Czy destylacja jest metodą rozdzielania składników mieszaniny na podstawie różnic w temperaturze wrzenia?', 'tf', 'true', '', '', '', 'true'),
(32, 'Nad którą rzeką leży Paryż?', 'closed', 'Loara', 'Sekwana', 'Rodan', 'Garrona', 'Sekwana'),
(33, 'Które państwo jest najbardziej uprzemysłowione na świecie?', 'closed', 'Niemcy', 'Stany Zjednoczone', 'Japonia', 'Chiny', 'Niemcy'),
(34, 'Sukienka kosztowała 120 zł. Następnie jej cenę podniesiono o 10 procent, by po dwóch tygodniach obniżyć o 20 zł. Jaki jest teraz koszt sukienki?', 'closed', '106 zł', '112 zł', '120 zł', '132 zł', '112 zł'),
(35, 'Kto jest autorem \"Syzyfowych prac\"?', 'open', 'Stefan Żeromski', '', '', '', 'Stefan Żeromski'),
(36, 'Jakie zjawisko odpowiada za rozchodzenie się zapachu po mieszkaniu?', 'closed', 'Dyfuzja', 'Konkluzja', 'Parowanie', 'Konfuzja', 'Dyfuzja'),
(37, 'Czy Dubaj jest stolicą Zjednoczonych Emiratów Arabskich?', 'tf', 'false', '', '', '', 'false'),
(38, 'Czy wyspa Teneryfa leży na Morzu Śródziemnym?', 'tf', 'false', '', '', '', 'false'),
(39, 'Dźwięk nie rozchodzi się:', 'closed', 'cieczach', 'gazach', 'ciałach stałych', 'próżni', 'próżni'),
(40, 'Jaki związek chemiczny odpowiada za rośnięcie biszkoptu?', 'closed', 'Tlen', 'Azot', 'Powietrze', 'Dwutlenek węgla', 'Dwutlenek węgla'),
(41, 'Kto wypowiedział słynne słowa:  \"Polacy nie gęsi, iż swój język mają”?', 'closed', 'Jan Kochanowski', 'Juliusz Słowacki', 'Mikołaj Rej', 'Jan Zamoyski', 'Mikołaj Rej'),
(42, 'W którym roku Polska przystąpiła do Unii Europejskiej? (wpisz tylko rok)', 'open', '2004', '', '', '', '2004'),
(43, 'Jak nazywa się środek stylistyczny, który polega na powtórzeniu tego samego wyrazu na początku sąsiednich ze sobą wersetów?', 'closed', 'Epifora', 'Oksymoron', 'Anafora', 'Hiperbola', 'Anafora'),
(44, 'Co oznacza przysłowie: „W marcu jak w garncu”?', 'closed', 'Jest bardzo ciepło', 'Jest bardzo zimno', 'To miesiąc pogodowych niespodzianek', 'Jest bardzo mokro', 'To miesiąc pogodowych niespodzianek'),
(45, 'Teocentryzm to pogląd, który mówi, że:', 'closed', 'Bóg jest w centrum', 'Człowiek jest w centrum', 'Przyroda jest najważniejsza', 'Teologia jest najważniejsza', 'Bóg jest w centrum'),
(46, 'Czy izotopy mają tę samą liczbę neutronów?', 'tf', 'false', NULL, NULL, NULL, 'false'),
(47, 'Który kraj nie należy do Unii Europejskiej?', 'closed', 'Austria', 'Malta', 'Szwajcaria', 'Finlandia', 'Szwajcaria'),
(48, 'Jaka jest stolica Australii?', 'open', 'Canberra', NULL, NULL, NULL, NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klasa`
--
ALTER TABLE `klasa`
  ADD PRIMARY KEY (`id_klasa`);

--
-- Indeksy dla tabeli `pytanie`
--
ALTER TABLE `pytanie`
  ADD PRIMARY KEY (`id_pytanie`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klasa`
--
ALTER TABLE `klasa`
  MODIFY `id_klasa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `pytanie`
--
ALTER TABLE `pytanie`
  MODIFY `id_pytanie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
