-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2019 at 08:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starwar`
--

-- --------------------------------------------------------

--
-- Table structure for table `character_info`
--

CREATE TABLE `character_info` (
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `height` double NOT NULL,
  `mass` double NOT NULL,
  `hair_color` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `skin_color` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `eye_color` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `birth_year` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `character_info`
--

INSERT INTO `character_info` (`name`, `height`, `mass`, `hair_color`, `skin_color`, `eye_color`, `birth_year`, `gender`) VALUES
('Ackbar', 180, 83, 'none', 'brown mottle', 'orange', '41BBY', 'male'),
('Adi Gallia', 184, 50, 'none', 'dark', 'blue', 'unknown', 'female'),
('Anakin Skywalker', 188, 84, 'blond', 'fair', 'blue', '41.9BBY', 'male'),
('Arvel Crynyd', -1, -1, 'brown', 'fair', 'brown', 'unknown', 'male'),
('Ayla Secura', 178, 55, 'none', 'blue', 'hazel', '48BBY', 'female'),
('Bail Prestor Organa', 191, -1, 'black', 'tan', 'brown', '67BBY', 'male'),
('Barriss Offee', 166, 50, 'black', 'yellow', 'blue', '40BBY', 'female'),
('BB8', -1, -1, 'none', 'none', 'black', 'unknown', 'none'),
('Ben Quadinaros', 163, 65, 'none', 'grey, green, yellow', 'orange', 'unknown', 'male'),
('Beru Whitesun lars', 165, 75, 'brown', 'light', 'blue', '47BBY', 'female'),
('Bib Fortuna', 180, -1, 'none', 'pale', 'pink', 'unknown', 'male'),
('Biggs Darklighter', 183, 84, 'black', 'light', 'brown', '24BBY', 'male'),
('Boba Fett', 183, 78.2, 'black', 'fair', 'brown', '31.5BBY', 'male'),
('Bossk', 190, 113, 'none', 'green', 'red', '53BBY', 'male'),
('C-3PO', 167, 75, 'n/a', 'gold', 'yellow', '112BBY', 'n/a'),
('Captain Phasma', -1, -1, 'unknown', 'unknown', 'unknown', 'unknown', 'female'),
('Chewbacca', 228, 112, 'brown', 'unknown', 'blue', '200BBY', 'male'),
('Cliegg Lars', 183, -1, 'brown', 'fair', 'blue', '82BBY', 'male'),
('CordÃ©', 157, -1, 'brown', 'light', 'brown', 'unknown', 'female'),
('Darth Maul', 175, 80, 'none', 'red', 'yellow', '54BBY', 'male'),
('Darth Vader', 202, 136, 'none', 'white', 'yellow', '41.9BBY', 'male'),
('Dexter Jettster', 198, 102, 'none', 'brown', 'yellow', 'unknown', 'male'),
('Dooku', 193, 80, 'white', 'fair', 'brown', '102BBY', 'male'),
('DormÃ©', 165, -1, 'brown', 'light', 'brown', 'unknown', 'female'),
('Dud Bolt', 94, 45, 'none', 'blue, grey', 'yellow', 'unknown', 'male'),
('Eeth Koth', 171, -1, 'black', 'brown', 'brown', 'unknown', 'male'),
('Finis Valorum', 170, -1, 'blond', 'fair', 'blue', '91BBY', 'male'),
('Finn', -1, -1, 'black', 'dark', 'dark', 'unknown', 'male'),
('Gasgano', 122, -1, 'none', 'white, blue', 'black', 'unknown', 'male'),
('Greedo', 173, 74, 'n/a', 'green', 'black', '44BBY', 'male'),
('Gregar Typho', 185, 85, 'black', 'dark', 'brown', 'unknown', 'male'),
('Grievous', 216, 159, 'none', 'brown, white', 'green, yellow', 'unknown', 'male'),
('Han Solo', 180, 80, 'brown', 'fair', 'brown', '29BBY', 'male'),
('IG-88', 200, 140, 'none', 'metal', 'red', '15BBY', 'none'),
('Jabba Desilijic Tiure', 175, 1358, 'n/a', 'green-tan, brown', 'orange', '600BBY', 'hermaphrod'),
('Jango Fett', 183, 79, 'black', 'tan', 'brown', '66BBY', 'male'),
('Jar Jar Binks', 196, 66, 'none', 'orange', 'orange', '52BBY', 'male'),
('Jek Tono Porkins', 180, 110, 'brown', 'fair', 'blue', 'unknown', 'male'),
('Jocasta Nu', 167, -1, 'white', 'fair', 'blue', 'unknown', 'female'),
('Ki-Adi-Mundi', 198, 82, 'white', 'pale', 'yellow', '92BBY', 'male'),
('Kit Fisto', 196, 87, 'none', 'green', 'black', 'unknown', 'male'),
('Lama Su', 229, 88, 'none', 'grey', 'black', 'unknown', 'male'),
('Lando Calrissian', 177, 79, 'black', 'dark', 'brown', '31BBY', 'male'),
('Leia Organa', 150, 49, 'brown', 'light', 'brown', '19BBY', 'female'),
('Lobot', 175, 79, 'none', 'light', 'blue', '37BBY', 'male'),
('Luke Skywalker', 172, 77, 'blond', 'fair', 'blue', '19BBY', 'male'),
('Luminara Unduli', 170, 56.2, 'black', 'yellow', 'blue', '58BBY', 'female'),
('Mace Windu', 188, 84, 'none', 'dark', 'brown', '72BBY', 'male'),
('Mas Amedda', 196, -1, 'none', 'blue', 'blue', 'unknown', 'male'),
('Mon Mothma', 150, -1, 'auburn', 'fair', 'blue', '48BBY', 'female'),
('Nien Nunb', 160, 68, 'none', 'grey', 'black', 'unknown', 'male'),
('Nute Gunray', 191, 90, 'none', 'mottled green', 'red', 'unknown', 'male'),
('Obi-Wan Kenobi', 182, 77, 'auburn, white', 'fair', 'blue-gray', '57BBY', 'male'),
('Owen Lars', 178, 120, 'brown, grey', 'light', 'blue', '52BBY', 'male'),
('PadmÃ© Amidala', 165, 45, 'brown', 'light', 'brown', '46BBY', 'female'),
('Palpatine', 170, 75, 'grey', 'pale', 'yellow', '82BBY', 'male'),
('Plo Koon', 188, 80, 'none', 'orange', 'black', '22BBY', 'male'),
('Poe Dameron', -1, -1, 'brown', 'light', 'brown', 'unknown', 'male'),
('Poggle the Lesser', 183, 80, 'none', 'green', 'yellow', 'unknown', 'male'),
('Quarsh Panaka', 183, -1, 'black', 'dark', 'brown', '62BBY', 'male'),
('Qui-Gon Jinn', 193, 89, 'brown', 'fair', 'blue', '92BBY', 'male'),
('R2-D2', 96, 32, 'n/a', 'white, blue', 'red', '33BBY', 'n/a'),
('R4-P17', 96, -1, 'none', 'silver, red', 'red, blue', 'unknown', 'female'),
('R5-D4', 97, 32, 'n/a', 'white, red', 'red', 'unknown', 'n/a'),
('Ratts Tyerell', 79, 15, 'none', 'grey, blue', 'unknown', 'unknown', 'male'),
('Raymus Antilles', 188, 79, 'brown', 'light', 'brown', 'unknown', 'male'),
('Rey', -1, -1, 'brown', 'light', 'hazel', 'unknown', 'female'),
('Ric OliÃ©', 183, -1, 'brown', 'fair', 'blue', 'unknown', 'male'),
('Roos Tarpals', 224, 82, 'none', 'grey', 'orange', 'unknown', 'male'),
('Rugor Nass', 206, -1, 'none', 'green', 'orange', 'unknown', 'male'),
('Saesee Tiin', 188, -1, 'none', 'pale', 'orange', 'unknown', 'male'),
('San Hill', 191, -1, 'none', 'grey', 'gold', 'unknown', 'male'),
('Sebulba', 112, 40, 'none', 'grey, red', 'orange', 'unknown', 'male'),
('Shaak Ti', 178, 57, 'none', 'red, blue, white', 'black', 'unknown', 'female'),
('Shmi Skywalker', 163, -1, 'black', 'fair', 'brown', '72BBY', 'female'),
('Sly Moore', 178, 48, 'none', 'pale', 'white', 'unknown', 'female'),
('Tarfful', 234, 136, 'brown', 'brown', 'blue', 'unknown', 'male'),
('Taun We', 213, -1, 'none', 'grey', 'black', 'unknown', 'female'),
('Tion Medon', 206, 80, 'none', 'grey', 'black', 'unknown', 'male'),
('Wat Tambor', 193, 48, 'none', 'green, grey', 'unknown', 'unknown', 'male'),
('Watto', 137, -1, 'black', 'blue, grey', 'yellow', 'unknown', 'male'),
('Wedge Antilles', 170, 77, 'brown', 'fair', 'hazel', '21BBY', 'male'),
('Wicket Systri Warrick', 88, 20, 'brown', 'brown', 'brown', '8BBY', 'male'),
('Wilhuff Tarkin', 180, -1, 'auburn, grey', 'fair', 'blue', '64BBY', 'male'),
('Yarael Poof', 264, -1, 'none', 'white', 'yellow', 'unknown', 'male'),
('Yoda', 66, 17, 'white', 'green', 'brown', '896BBY', 'male'),
('Zam Wesell', 168, 55, 'blonde', 'fair, green, yellow', 'yellow', 'unknown', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `character_info`
--
ALTER TABLE `character_info`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
