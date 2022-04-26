-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 15 dec 2019 om 18:05
-- Serverversie: 5.7.19
-- PHP-versie: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameworldthijs`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

CREATE TABLE `category` (
  `categoryId` int(5) NOT NULL,
  `categoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `category`
--

INSERT INTO `category` (`categoryId`, `categoryName`) VALUES
(1, 'Consoles'),
(2, 'Games'),
(3, 'Merch');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `games`
--

CREATE TABLE `games` (
  `gameId` int(5) NOT NULL,
  `gameTitle` varchar(100) NOT NULL,
  `gamePrice` decimal(7,2) NOT NULL,
  `gameDesciption` varchar(1000) NOT NULL,
  `gameImage` varchar(100) NOT NULL,
  `categoryId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `games`
--

INSERT INTO `games` (`gameId`, `gameTitle`, `gamePrice`, `gameDesciption`, `gameImage`, `categoryId`) VALUES
(1, 'NES', '50.00', 'Nintendo Entertainment System, 8 bit video game console', 'NES.jpg', 1),
(2, 'SNES', '60.00', 'Super Nintendo Entertainment System, 16 bit video game console', 'SNES.jpg', 1),
(3, 'Nintendo 64', '50.00', 'Nintendo 64, Home game console', 'N64.jpg', 1),
(4, 'GameCube', '50.00', 'Nintendo GameCube, console released in 2001', 'Cube.jpg', 1),
(5, 'WII', '60.00', 'Motion capturing game console', 'Wii.jpg', 1),
(6, 'WII U', '30.00', 'Game Pad add-on for the WII', 'WiiU.jpg', 1),
(7, 'Nintendo Switch', '100.00', 'Next gen nintendo game console', 'Switch.jpg', 1),
(8, 'Gameboy', '80.00', 'first real nintendo hendheld', 'Gameboy.jpg', 1),
(9, 'Gameboy Color', '80.00', 'Gameboy that can display color', 'GameboyColor.jpg', 1),
(10, 'Gameboy Advance', '80.00', 'More powerfull gameboy', 'GameboyAdvance.jpg', 1),
(11, 'Nintendo DS', '60.00', '2nd generation nintendo hend held', 'nds.jpg', 1),
(12, 'Nintendo 3DS', '120.00', 'Succesor to the ds, this model can display 3d images', '3DS.jpg', 1),
(13, 'Legend Of Zelda: Breath Of The Wild', '55.00', 'Open world survival game that centers around your character Link.', 'zelda.jpg', 2),
(14, 'Mario Odyssey', '55.00', 'In this game you go on an adventure with your new friend Cappy.', 'MarioOdyssey.jpg', 2),
(15, 'Pokemon Sword', '60.00', 'The new pokemon generation, Generation 8', 'sword.jpg', 2),
(16, 'Pokemon Shield', '60.00', 'The new pokemon generation, Generation 8', 'shield.jpg', 2),
(17, 'Just Dance 2020', '45.00', 'Last game that will be coming to the WII', 'Dance.jpg', 2),
(18, 'Luigi\'s Mansion 3', '60.00', 'Luigi\'s spooky ghost adventure continues', 'Luigi.jpg', 2),
(19, 'Mario Kart 8 Deluxe', '55.00', 'What is a nintendo console without mario kart', 'MarioKart.jpg', 2),
(20, 'Super Mario Party', '55.00', 'The game that you play 5 times and then forget it, laying there in the dust', 'MarioParty.jpg', 2),
(21, 'New Super Mario Bros U Deluxe', '55.00', 'The platformer game for nintendo switch, can the title get any longer?', 'BrosDeluxe.jpg', 2),
(22, 'Super Mario Maker 2', '55.00', 'For when new super mario bros u deluxe isn\'t hard enough, in this game you can create and share your self made maps.', 'MarioMaker.jpg', 2),
(23, 'Super Smash Bros Ultimate', '55.00', 'The nintendo game in which almost all of there characters can fight against each other', 'Smash.jpg', 2),
(24, 'Mario + Rabbids Kingdom Battle', '30.00', 'A strategy game in which you control your favorite nintendo characters and some dumb rabbids', 'MarioRabbids.jpg', 2),
(25, 'Charmander Plush', '25.00', 'High quality Pokémon plush', 'Charmander.jpg', 3),
(26, 'Squirtle Plush', '25.00', 'High quality Pokémon plush', 'squitle.jpg', 3),
(27, 'Bulbasaur Plush', '25.00', 'High quality Pokémon plush', 'Bulbasaur.jpg', 3),
(28, 'Pikachu Plush', '25.00', 'High quality Pokémon plush', 'Pikachu.jpg', 3),
(29, 'Eevee Plush', '25.00', 'High quality Pokémon plush', 'eevee.png', 3),
(30, 'Magikarp Plush', '25.00', 'High quality Pokémon plush', 'Magikarp.jpg', 3),
(31, 'Scraggy Plush', '25.00', 'High quality Pokémon plush', 'scraggy.jpg', 3),
(32, 'Snorlax Plush', '25.00', 'High quality Pokémon plush', 'Snorlax.jpg', 3),
(33, 'Pichu Plush', '25.00', 'High quality Pokémon plush', 'Pichu.jpg', 3),
(34, 'Mimikyu Plush', '25.00', 'High quality Pokémon plush', 'Mimikyu.jpg', 3),
(35, 'Slowpoke Plush', '25.00', 'High quality Pokémon plush', 'Slowpoke.jpg', 3),
(36, 'Mew Plush', '25.00', 'High quality Pokémon plush', 'Mew.jpg', 3);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexen voor tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gameId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `games`
--
ALTER TABLE `games`
  MODIFY `gameId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
