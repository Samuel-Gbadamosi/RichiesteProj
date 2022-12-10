--- *******************************************WARNING BEFORE RUNNING______**************************

-- Kindly load this script for operation to work and execute properly without any errors or bugs
-- JUST open a table, called aleidi,
-- executing code in SQL and you should have users as well, for login, else load scripts and register new admin then delete existing users

-- Admin could use this info to login 
--Username : test , pass : test;
-- all passwords are saved in Hash for security reasons.
--Brief Explanation of this project 
-- users will come to book a request, form datas sent to db , verify errors before inserting obviously, 
-- if success , users request will be executed, then admin could see information in the backend
-- thanks
-- Any interest of my nfts for developers
-- checkout funkydevs.com :) 
-- Support and see you in the metaspace.
-- Back to the project
--- *******************************************______**************************
--Project by Samuel Gbadamosi 
-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Creato il: Dic 07, 2022 alle 14:02
-- Versione del server: 5.7.34
-- Versione PHP: 8.0.8


-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Creato il: Dic 09, 2022 alle 08:59
-- Versione del server: 5.7.34
-- Versione PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aleide`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `comuni`
--

CREATE TABLE `comuni` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `provincia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `comuni`
--

INSERT INTO `comuni` (`id`, `nome`, `provincia_id`) VALUES
(1, 'Abbiategrasso', 1),
(2, 'Albairate', 1),
(3, 'Arconate', 1),
(4, 'Arese', 1),
(5, 'Arluno', 1),
(6, 'Assago', 1),
(7, 'Bareggio', 1),
(8, 'Basiano', 1),
(9, 'Basiglio', 1),
(10, 'Bellinzago Lombardo', 1),
(11, 'Bernate Ticino', 1),
(12, 'Besate', 1),
(13, 'Binasco', 1),
(14, 'Boffalora sopra Ticino', 1),
(15, 'Bollate', 1),
(16, 'Bresso', 1),
(17, 'Bubbiano', 1),
(18, 'Buccinasco', 1),
(19, 'Buscate', 1),
(20, 'Bussero', 1),
(21, 'Busto Garolfo', 1),
(22, 'Calvignasco', 1),
(23, 'Cambiago', 1),
(24, 'Canegrate', 1),
(25, 'Carpiano', 1),
(26, 'Carugate', 1),
(27, 'Casarile', 1),
(28, 'Casorezzo', 1),
(29, 'Cassano d\"Adda', 1),
(30, 'Cassina de\"Pecchi', 1),
(31, 'Cassinetta di Lugagnano', 1),
(32, 'Castano Primo', 1),
(33, 'Cernusco sul Naviglio', 1),
(34, 'Cerro al Lambro', 1),
(35, 'Cerro Maggiore', 1),
(36, 'Cesano Boscone', 1),
(37, 'Cesate', 1),
(38, 'Cinisello Balsamo', 1),
(39, 'Cisliano', 1),
(40, 'Cologno Monzese', 1),
(41, 'Colturano', 1),
(42, 'Corbetta', 1),
(43, 'Cormano', 1),
(44, 'Cornaredo', 1),
(45, 'Corsico', 1),
(46, 'Cuggiono', 1),
(47, 'Cusago', 1),
(48, 'Cusano Milanino', 1),
(49, 'Dairago', 1),
(50, 'Dresano', 1),
(51, 'Adrara San Martino', 2),
(52, 'Adrara San Rocco', 2),
(53, 'Albano Sant\"Alessandro', 2),
(54, 'Albino', 2),
(55, 'Almè', 2),
(56, 'Almenno San Bartolomeo', 2),
(57, 'Almenno San Salvatore', 2),
(58, 'Alzano Lombardo', 2),
(59, 'Ambivere', 2),
(60, 'Antegnate', 2),
(61, 'Arcene', 2),
(62, 'Ardesio', 2),
(63, 'Arzago d\"Adda', 2),
(64, 'Averara', 2),
(65, 'Aviatico', 2),
(66, 'Azzano San Paolo', 2),
(67, 'Azzone', 2),
(68, 'Bagnatica', 2),
(69, 'Barbata', 2),
(70, 'Bariano', 2),
(71, 'Barzana', 2),
(72, 'Bedulita', 2),
(73, 'Berbenno', 2),
(74, 'Bergamo', 2),
(75, 'Berzo San Fermo', 2),
(76, 'Bianzano', 2),
(77, 'Blello', 2),
(78, 'Bolgare', 2),
(79, 'Boltiere', 2),
(80, 'Bonate Sopra', 2),
(81, 'Bonate Sotto', 2),
(82, 'Borgo di Terzo', 2),
(83, 'Bossico', 2),
(84, 'Bottanuco', 2),
(85, 'Bracca', 2),
(86, 'Branzi', 2),
(87, 'Brembate', 2),
(88, 'Brembate di Sopra', 2),
(89, 'Brignano Gera d\"Adda', 2),
(90, 'Brumano', 2),
(91, 'Brusaporto', 2),
(92, 'Calcinate', 2),
(93, 'Calcio', 2),
(94, 'Calusco d\"Adda', 2),
(95, 'Calvenzano', 2),
(96, 'Camerata Cornello', 2),
(97, 'Canonica d\"Adda', 2),
(98, 'Capizzone', 2),
(99, 'Capriate San Gervasio', 2),
(100, 'Caprino Bergamasco', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `provincia`
--

CREATE TABLE `provincia` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `provincia`
--

INSERT INTO `provincia` (`id`, `nome`) VALUES
(1, 'Milano'),
(2, 'bergamo');

-- --------------------------------------------------------

--
-- Struttura della tabella `richiesta_table`
--

CREATE TABLE `richiesta_table` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `cognome` varchar(45) DEFAULT NULL,
  `data_di_nascita` datetime DEFAULT NULL,
  `provincia_id` int(11) DEFAULT NULL,
  `comuni_id` int(11) DEFAULT NULL,
  `richiesta` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `richiesta_table`
--

INSERT INTO `richiesta_table` (`id`, `name`, `cognome`, `data_di_nascita`, `provincia_id`, `comuni_id`, `richiesta`) VALUES
(1, 'john', 'john', '2022-12-09 14:08:49', 1, 2, 'kjhbkjhbijo'),
(2, 'james', 'moris', '2022-12-09 14:08:49', 2, 52, 'huueh9ue'),
(13, 'jessy', 'jane', '2022-12-25 00:00:00', 1, 5, '        jiojijdi');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `created_at`, `email`) VALUES
(4, 'jane', 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', '2022-11-02 12:20:57', 'test@test.com'),
(5, 'james', 'art', '$2y$10$WrcNjXDN6TxSSqzVC7SF4.SHGD.wKs/KzCUgpXft4lO.R01oYf8Om', '2022-11-21 17:14:04', 'ar@mail.com'),
(6, 'jew', 'jew', '$2y$10$fRxWFKLQW53NF/.mv/7ImuAHAoR/1E8QkqaZ8dCGVvpH/WYYs0Kte', '2022-11-21 17:51:54', 'jew@mail.com'),
(7, 'jessy', 'morgan09', '$2y$10$ZR9d1WF4ywC90Z5/7QLvf.Xp.QRcZAXP.gYnNyQnLz46dIji/A/b2', '2022-11-22 14:25:37', 'morgan@mail.com'),
(8, 'fr', 'fra', '$2y$10$Xm/jQHBnJB5CKOPMD6npDO/zdxSt9sQjxW/K9vsSl0UX809eOwBDu', '2022-11-22 15:20:06', 'fr@mail.com'),
(9, 'FunkyDev', 'test3', '$2y$10$A1Qo5MGF7EiNS6PNMjBMoeHqIt4PkR0wZhk24yZDqeasI79zx108q', '2022-11-22 15:52:35', '3bryanmorgan78@mail.com'),
(10, 'moris', 'moris009', '$2y$10$g5OJ6RAyDXNREib.qzkrrO37hhLAfL29e1xHFQz7jqUerKJ/r9nPu', '2022-11-25 11:35:36', 'mo@mail.com'),
(11, 'bryan', 'bryan009', '$2y$10$lXCery9xS9rpl8pCAkM96OYO7HR/9X6be9tqg21p4R2NWZXjRD/GO', '2022-11-29 10:59:45', 'dam@mail.com'),
(12, 'joe', 'joe', '$2y$10$aa4f2q7lhTKA5ZFFOXtZ/ujmMp29bw2dJDEFRjgPaix1n0AREiITa', '2022-11-29 11:00:35', 'joe@mail.com'),
(13, 'larry', 'larry099', '$2y$10$dOYNBK1SKwpu1rvdujefi.EqvMkBTr6HdwpLJRe5MzO6JrQk0M0N2', '2022-11-30 09:45:22', 'larry@mail.com'),
(14, 'johnson', 'john', '$2y$10$FCJWmSxGaffJbLfUhhwj8eVouIkEI57wkMVZOhKVx0ud/1IMoEIau', '2022-12-07 10:44:02', 'john@mail.com'),
(15, 'juice', 'juice', '$2y$10$8t5B5eBtpuAgOgOImKHWG.1DOCheprYW.DwXn956aIFs2.XA90rfe', '2022-12-07 17:18:09', 'juice@mail.com');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `comuni`
--
ALTER TABLE `comuni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comuni_provincia1_idx` (`provincia_id`);

--
-- Indici per le tabelle `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `richiesta_table`
--
ALTER TABLE `richiesta_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_richiesta_table_provincia_idx` (`provincia_id`),
  ADD KEY `fk_richiesta_table_comuni1_idx` (`comuni_id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `comuni`
--
ALTER TABLE `comuni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT per la tabella `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `richiesta_table`
--
ALTER TABLE `richiesta_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `comuni`
--
ALTER TABLE `comuni`
  ADD CONSTRAINT `fk_comuni_provincia1` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `richiesta_table`
--
ALTER TABLE `richiesta_table`
  ADD CONSTRAINT `fk_richiesta_table_comuni1` FOREIGN KEY (`comuni_id`) REFERENCES `comuni` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_richiesta_table_provincia` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
