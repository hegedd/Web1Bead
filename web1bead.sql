-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: mysql.omega:3306
-- Létrehozás ideje: 2024. Már 28. 19:13
-- Kiszolgáló verziója: 5.7.42-log
-- PHP verzió: 7.2.34-43+0~20230902.90+debian12~1.gbpc2a431

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `web1bead`
--
CREATE DATABASE IF NOT EXISTS `web1bead` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `web1bead`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `id` int(11) NOT NULL,
  `csaladi_nev` varchar(45) COLLATE utf8_hungarian_ci NOT NULL DEFAULT '',
  `uto_nev` varchar(45) COLLATE utf8_hungarian_ci NOT NULL DEFAULT '',
  `bejelentkezes` varchar(45) COLLATE utf8_hungarian_ci NOT NULL DEFAULT '',
  `jelszo` varchar(45) COLLATE utf8_hungarian_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`id`, `csaladi_nev`, `uto_nev`, `bejelentkezes`, `jelszo`) VALUES
(1, 'Családi_1', 'Utónév_1', 'Login1', 'd4b90f2dfafc736205a98bf3ae6541431bc77d8e'),
(2, 'Családi_2', 'Utónév_2', 'Login2', '6cf8efacae19431476020c1e2ebd2d8acca8f5c0'),
(3, 'Családi_3', 'Utónév_3', 'Login3', 'df4d8ad070f0d1585e172a2150038df5cc6c891a'),
(4, 'Családi_4', 'Utónév_4', 'Login4', 'b020c308c155d6bbd7eb7d27bd30c0573acbba5b'),
(5, 'Családi_5', 'Utónév_5', 'Login5', '9ab1a4743b30b5e9c037e6a645f0cfee80fb41d4'),
(6, 'Családi_6', 'Utónév_6', 'Login6', '7ca01f28594b1a06239b1d96fc716477d198470b'),
(7, 'Családi_7', 'Utónév_7', 'Login7', '41ad7e5406d8f1af2deef2ade4753009976328f8'),
(8, 'Családi_8', 'Utónév_8', 'Login8', '3a340fe3599746234ef89591e372d4dd8b590053'),
(9, 'Családi_9', 'Utónév_9', 'Login9', 'c0298f7d314ecbc5651da5679a0a240833a88238'),
(10, 'Családi_10', 'Utónév_10', 'Login10', 'a477427c183664b57f977661ac3167b64823f366'),
(11, 'Családi_11', 'Utónév_11', 'Login11', '6c7e2151d33968a02198f7e2073b1d7b9ee65ed9'),
(12, 'Családi_12', 'Utónév_12', 'Login12', '0722b3651be10eeb8df39cced958b74a98d18ce3');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `uzenet`
--

CREATE TABLE `uzenet` (
  `id` int(11) NOT NULL,
  `nev` varchar(45) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL DEFAULT 'Vendég',
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL DEFAULT '',
  `uzenet` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `uzenet`
--

INSERT INTO `uzenet` (`id`, `nev`, `email`, `uzenet`, `datum`) VALUES
(1, 'Vendég', 'mano@mano.hu', 'afsddfsa', '2022-04-23 17:53:21'),
(2, 'Vendég', 'mano@mano.hu', 'afsddfsa', '2022-04-23 17:54:05'),
(3, 'Vendég', 'hekale@freemail.hu', 'fffff', '2022-04-23 17:54:23'),
(4, 'Vendég', 'tredet@gtr.hu', 'hhhh', '2022-04-23 18:11:31'),
(5, 'Családi_1 Utónév_1', 'jztr@freemail.hu', 'ffffff', '2022-04-23 18:14:27'),
(22, 'aaaaaaa', 'aaaaa@aaaa.aa', 'aaaaaaaaaaa', '2024-03-24 12:41:13'),
(23, 'asdasd', 'fsdaree@gg.ff', 'dasd', '2024-03-24 18:09:06'),
(24, '1247457', '1414@4141.ljk', 'hjkljkh', '2024-03-24 18:14:14');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `uzenet`
--
ALTER TABLE `uzenet`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `felhasznalok`
--
ALTER TABLE `felhasznalok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT a táblához `uzenet`
--
ALTER TABLE `uzenet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
