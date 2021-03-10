-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 09:31 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `ID` int(11) NOT NULL,
  `Movie_Name` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`ID`, `Movie_Name`) VALUES
(120, 'IT'),
(118, 'IT'),
(118, 'Stranger Things'),
(118, 'Black Panther'),
(118, 'Gisaengchung'),
(118, 'Ralph Breaks the Internet'),
(114, 'Bird Box'),
(114, 'Black Panther'),
(114, 'Jumanji: The Next Level'),
(114, 'Stranger Things'),
(114, 'Spider-Man: Far from Home');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `Username` varchar(50) COLLATE utf8_bin NOT NULL,
  `Movie_name` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`Username`, `Movie_name`) VALUES
('rungreuang', 'Klaus'),
('tasanawongvara', 'Ralph Breaks the Internet'),
('satara', 'Spider-Man: Homecoming');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `Movie_Name` varchar(50) COLLATE utf8_bin NOT NULL,
  `Short Story` varchar(300) COLLATE utf8_bin NOT NULL,
  `Actor` varchar(100) COLLATE utf8_bin NOT NULL,
  `Time` varchar(15) COLLATE utf8_bin NOT NULL,
  `Studio` varchar(100) COLLATE utf8_bin NOT NULL,
  `Diraction` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`Movie_Name`, `Short Story`, `Actor`, `Time`, `Studio`, `Diraction`) VALUES
('', '', '', '', '', ''),
('Bird Box', 'Five years after an ominous unseen presence drives most of society to suicide, a mother and her two children make a desperate bid to reach safety.', 'Sandra Bullock, Trevante Rhodes, John Malkovich', '2h 4min', 'Netflix', 'Susanne Bier'),
('Black Panther', 'T\'Challa, heir to the hidden but advanced kingdom of Wakanda, must step forward to lead his people into a new future and must confront a challenger from his country\'s past.', 'Chadwick Boseman, Michael B. Jordan, Lupita Nyong\'', '2h 14min', 'Marvel Studios', 'Ryan Coogler'),
('Gisaengchung', '', '', '', '', 'Bong Joon Ho'),
('IT', 'In the summer of 1989, a group of bullied kids band together to destroy a shape-shifting monster, which disguises itself as a clown and preys on the children of Derry, their small Maine town.', 'Bill Skarsg?rd, Jaeden Martell, Finn Wolfhard', '2h 15min', 'New Line Cinema, RatPac-Dune Entertainment, Vertigo Entertainment', 'Andy Muschietti'),
('Jumanji: The Next Level', 'In Jumanji: The Next Level, the gang is back but the game has changed. As they return to rescue one of their own, the players will have to brave parts unknown from arid deserts to snowy mountains, to escape the world\'s most dangerous game.', 'Dwayne Johnson, Jack Black, Kevin Hart', '2h 3min', 'Matt Tolmach Productions', 'Jake Kasdan'),
('Jumanji: Welcome to the Jungle', 'Four teenagers are sucked into a magical video game, and the only way they can escape is to work together to finish the game.', 'Dwayne Johnson, Karen Gillan, Kevin Hart', '1h 59min', 'Columbia Pictures', 'Jake Kasdan'),
('Klaus', 'A simple act of kindness always sparks another, even in a frozen, faraway place. When Smeerensburg\'s new postman, Jesper, befriends toymaker Klaus, their gifts melt an age-old feud and deliver a sleigh full of holiday traditions.', 'Jason Schwartzman, J.K. Simmons, Rashida Jones', '1h 36min', 'The SPA Studios', 'Sergio Pablos, Carlos Mart?nez L?pez'),
('Ralph Breaks the Internet', 'Six years after the events of \"Wreck-It Ralph,\" Ralph and Vanellope, now friends, discover a wi-fi router in their arcade, leading them into a new adventure.', 'John C. Reilly, Sarah Silverman, Gal Gadot', '1h 52min', 'Walt Disney Animation Studios', 'Phil Johnston, Rich Moore'),
('Spider-Man: Far from Home', 'Following the events of Avengers: Endgame (2019), Spider-Man must step up to take on new threats in a world that has changed forever.', 'Tom Holland, Samuel L. Jackson, Jake Gyllenhaal', '2h 9min', 'Marvel Studios', 'Jon Watts'),
('Spider-Man: Homecoming', 'Peter Parker balances his life as an ordinary high school student in Queens with his superhero alter-ego Spider-Man, and finds himself on the trail of a new menace prowling the skies of New York City.', 'Tom Holland, Michael Keaton, Robert Downey Jr.', '2h 13min', 'Marvel Studios', 'Jon Watts'),
('Stranger Things', 'When a young boy disappears, his mother, a police chief and his friends must confront terrifying supernatural forces in order to get him back.', 'Millie Bobby Brown, Finn Wolfhard, Winona Ryder ', '51min', '21 Laps Entertainment, Monkey Massacre, Netflix', 'Matt Duffer, Ross Duffer');

-- --------------------------------------------------------

--
-- Table structure for table `must`
--

CREATE TABLE `must` (
  `ID` int(11) NOT NULL,
  `Payment_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `must`
--

INSERT INTO `must` (`ID`, `Payment_ID`) VALUES
(110, 4321),
(119, 4351),
(120, 5364),
(116, 5436),
(114, 6817),
(113, 6843),
(112, 7463),
(111, 9564);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `Payment_ID` int(11) NOT NULL,
  `Card_Number` varchar(10) COLLATE utf8_bin NOT NULL,
  `Package` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`Payment_ID`, `Card_Number`, `Package`) VALUES
(4321, '4136576413', 'Ultra'),
(4351, '7531465912', 'Premium'),
(5364, '6785135432', 'Premium'),
(5436, '4123547834', 'Standard'),
(6817, '6945216743', 'Ultra'),
(6843, '1565723248', 'Premium'),
(7463, '8451369144', 'Standard'),
(8761, '5678955748', 'Premium'),
(9564, '6548123654', 'Ultra'),
(9846, '5975135473', 'Standard'),
(100001, ' _Number', ''),
(100002, '', ''),
(100003, '', ''),
(100004, '', ''),
(100005, '', ''),
(100006, '', ''),
(100007, '', ''),
(100008, '', ''),
(100009, '', ''),
(100010, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `Username` varchar(50) COLLATE utf8_bin NOT NULL,
  `Picture` varchar(200) COLLATE utf8_bin NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Username`, `Picture`, `ID`) VALUES
('Arr', 'k8s5ll.png', 114),
('Fluke', 'k8s5ll.png', 113),
('New', 'k8s5ll.png', 112),
('Nut', 'k8s5ll.png', 111),
('Waen', 'k8s5ll.png', 110),
('ninploy', 'avatar.png', 117),
('rungreuang', 'avatar.png', 118),
('satara', 'avatar.png', 116),
('songkiewadthanapajalen', 'avatar.png', 120),
('tasanawongvara', 'avatar.png', 119);

-- --------------------------------------------------------

--
-- Table structure for table `type_movie`
--

CREATE TABLE `type_movie` (
  `Movie_Name` varchar(50) COLLATE utf8_bin NOT NULL,
  `Type` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `type_movie`
--

INSERT INTO `type_movie` (`Movie_Name`, `Type`) VALUES
('Bird Box', 'Drama, Horror, Sci-Fi'),
('Black Panther', 'Action, Adventure, Sci-Fi'),
('IT', 'Horror'),
('Klaus', 'Animation, Adventure, Comedy'),
('Spider-Man: Far from Home', 'Action, Adventure, Sci-Fi'),
('Spider-Man: Homecoming', 'Action, Adventure, Sci-Fi'),
('Jumanji: Welcome to the Jungle', 'Action, Adventure, Comedy'),
('Jumanji: The Next Level', 'Action, Adventure, Comedy'),
('Ralph Breaks the Internet', 'Animation, Adventure, Comedy'),
('Gisaengchung', 'Comedy, Drama, Thrille'),
('Stranger Things', 'Drama, Fantasy, Horror'),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) COLLATE utf8_bin NOT NULL,
  `Password` varchar(16) COLLATE utf8_bin NOT NULL,
  `Name` varchar(50) COLLATE utf8_bin NOT NULL,
  `Status` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Email`, `Password`, `Name`, `Status`) VALUES
(110, 'titima@gmail.com', '0123456789', 'Titima', 'admin'),
(111, 'nutchaphol@gmail.com', '0123456789', 'Nutchaphol', 'admin'),
(112, 'nichr@gmail.com', '0123456789', 'Nichr', 'admin'),
(113, 'patormpong@gmail.com', '0123456789', 'Patormpong', 'admin'),
(114, 'apirad@gmail.com', '0123456789', 'Apirad', 'admin'),
(116, 'satara@gmail.com', '1234567890', 'Satara', 'member'),
(117, 'ninploy@gmail.com', '1234567891', 'Ninploy', 'member'),
(118, 'rungreuang@gmail.com', '1234567892', 'Rungreuang', 'member'),
(119, 'tasanawongvara@gmai.com', '1234567893', 'Tasanawongvara', 'member'),
(120, 'songkiewadthanapajalen@gmail.com', '1234567894', 'Songkiewadthanapajalen', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `ID` int(11) NOT NULL,
  `Movie_name` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`ID`, `Movie_name`) VALUES
(120, 'Jumanji: Welcome to the Jungle'),
(120, 'Jumanji: Welcome to the Jungle'),
(119, 'Gisaengchung'),
(118, 'Stranger Things');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD KEY `favorite_ibfk_1` (`ID`),
  ADD KEY `Movie_Name` (`Movie_Name`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD KEY `Movie_name` (`Movie_name`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`Movie_Name`);

--
-- Indexes for table `must`
--
ALTER TABLE `must`
  ADD KEY `must_ibfk_1` (`ID`),
  ADD KEY `Payment_ID` (`Payment_ID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`Payment_ID`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`Username`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `type_movie`
--
ALTER TABLE `type_movie`
  ADD KEY `Movie_Name` (`Movie_Name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD KEY `Movie_name` (`Movie_name`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `Payment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100011;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`Movie_Name`) REFERENCES `movies` (`Movie_Name`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`Movie_name`) REFERENCES `movies` (`Movie_Name`),
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`Username`) REFERENCES `profile` (`Username`);

--
-- Constraints for table `must`
--
ALTER TABLE `must`
  ADD CONSTRAINT `must_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `must_ibfk_2` FOREIGN KEY (`Payment_ID`) REFERENCES `payments` (`Payment_ID`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `type_movie`
--
ALTER TABLE `type_movie`
  ADD CONSTRAINT `type_movie_ibfk_1` FOREIGN KEY (`Movie_Name`) REFERENCES `movies` (`Movie_Name`);

--
-- Constraints for table `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `views_ibfk_1` FOREIGN KEY (`Movie_name`) REFERENCES `movies` (`Movie_Name`),
  ADD CONSTRAINT `views_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
