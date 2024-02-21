-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 03:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cleaning`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingId` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Note` text NOT NULL,
  `UserNo` int(11) NOT NULL,
  `serviceId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingId`, `Date`, `Time`, `Note`, `UserNo`, `serviceId`) VALUES
(1, '2024-02-13', '06:32:00', 'Thank you for contacting me as soon as possible', 5, 0),
(3, '2024-02-24', '07:48:00', 'I have a big house with 7 bathroom.', 6, 3),
(4, '2024-02-04', '08:55:00', 'I have a big house with 6 bathroom.', 6, 4),
(5, '2024-03-28', '08:00:00', 'call me for more details', 7, 6),
(6, '2024-04-23', '15:00:00', 'I have a small place, i love the price.', 8, 7),
(8, '2024-03-29', '16:00:00', 'Small place.', 9, 8),
(9, '2024-04-08', '09:00:00', 'I\'m moving in.', 10, 9),
(10, '2024-03-29', '09:10:00', 'Contact me for details', 11, 10),
(11, '2024-02-14', '11:59:00', '', 12, 11),
(12, '2024-02-05', '14:00:00', 'Call me for details.', 13, 12),
(13, '2024-04-10', '13:00:00', 'I will need to keep the maintnance for it after.', 14, 13),
(14, '2024-03-29', '08:00:00', 'I need it to be well done.', 15, 14),
(15, '2024-04-30', '14:00:00', 'Call me for details.', 16, 15),
(16, '2024-04-23', '09:00:00', 'I need it be done around this date.', 5, 16),
(17, '2024-05-16', '09:00:00', 'Call asap.', 18, 17),
(19, '2024-02-29', '08:37:00', 'iulyfl', 5, 19);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `UserNo` int(11) NOT NULL,
  `FirstName` varchar(250) NOT NULL,
  `LastName` varchar(250) NOT NULL,
  `EMail` varchar(250) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `ZipCode` varchar(20) NOT NULL,
  `Note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`UserNo`, `FirstName`, `LastName`, `EMail`, `Phone`, `Address`, `City`, `State`, `ZipCode`, `Note`) VALUES
(1, 'Priscila', 'Fry', 'Prifry@hotmail.com', '(571) 377-9446', ' Market St', 'Reston', 'VA', '20190', 'I have a big house, give me a call i will explain everything then.Thank you'),
(2, 'Maya', 'Marysant', 'maya@hotmai.com', '(571) 377-9446', 'Dobson St', 'Herndon', 'VA', '20175', 'I havea big house with 7 bathroom.'),
(3, 'Mhatilde', 'Star', 'star@hotmail.com', '(571) 377-9446', ' Market St ', 'Reston', 'VA', '20190', 'I need a house deep cleaning, call me.'),
(4, 'Joana', 'Augustina', 'joana@hotmail.com', '(571) 377-9446', 'Market St ', 'Reston', 'VA', '20190', 'I have a one bedroom condo. Call me.'),
(5, 'Adriana', 'Fos', 'adri@hotmail.com', '(571) 377-9446', 'Cross St', 'Herdon', 'VA', '20190', 'I have a 2 bedroom condo. Call me.'),
(6, 'Jonas', 'Almeja', 'jonas@hotmail.com', '(571) 377-9446', 'Beach St', 'Washington', 'VA', '20190', 'I havea big house with 5 bathroom. Call me for details.'),
(7, 'Renata', 'Silva', 'renata@hotmail.com', '(571) 377-9446', 'Marbella St', 'Arlington', 'VA', '20190', 'I have a small house with 2 bathroom.'),
(8, 'Mara', 'Maravilha', 'mara@hotmail.com', '(571) 377-9446', 'Hope St', 'Reston', 'VA', '20190', 'I have a one bedroom condo and would like to book a regular cleaning. Call me.'),
(9, 'Angelica', 'Maranhao', 'lica@hotmail.com', '(571) 377-9446', 'Kidds St', 'Butterfield', 'VA', '20190', 'I have a 2 bedroom condo. Call me.'),
(10, 'Silvana', 'Silva', 'silvana@hotmail.com', '(571) 377-9446', ' Market St ', 'Reston', 'VA', '20190', 'I havea big house with 6 bathroom.'),
(11, 'Sabrina', 'Amarante', 'brina@hotmail.com', '(571) 377-9446', 'Lake St', 'Vienna', 'VA', '20190', 'I have a big house with 7 bedrooms. Call me as soon as possible. Thank you.'),
(12, 'Aldenora', 'Machado', 'nora@hotmail.com', '(571) 377-9446', ' Market St ', 'Reston', 'VA', '20190', 'I have a many houses that need your service. Contact me please. Thank you.'),
(14, 'Valeria', 'Machado', 'valeria@hotmail.com', '(571) 377-9446', '12001 Market St Apt 272', 'Reston', 'VA', '20190', 'I havea big house with 7 bathroom.');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceId` int(11) NOT NULL,
  `RegularCleaning` varchar(11) NOT NULL,
  `DeepCleaning` varchar(1) NOT NULL,
  `Bedrooms` int(11) NOT NULL,
  `UserNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceId`, `RegularCleaning`, `DeepCleaning`, `Bedrooms`, `UserNo`) VALUES
(4, 'no', 'y', 3, 6),
(5, 'yes', 'n', 6, 5),
(6, 'yes', 'n', 2, 7),
(7, 'yes', 'n', 2, 8),
(8, 'yes', 'n', 1, 9),
(9, 'no', 'y', 1, 10),
(10, 'yes', 'n', 2, 11),
(11, 'no', 'y', 2, 12),
(12, 'yes', 'n', 2, 13),
(13, 'no', 'y', 2, 14),
(14, 'no', 'y', 1, 15),
(15, 'yes', 'n', 2, 16),
(16, 'yes', 'n', 2, 5),
(17, '', '', 0, 18),
(19, 'yes', 'n', 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserNo` int(11) NOT NULL COMMENT 'Primary Key',
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `EMail` varchar(50) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Address` varchar(350) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `ZipCode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserNo`, `FirstName`, `LastName`, `EMail`, `Password`, `Phone`, `Address`, `City`, `State`, `ZipCode`) VALUES
(5, 'Priscila', 'Fry', 'Prifry@hotmail.com', '$2y$10$Ejp4UUr7n86x01Si2cLHb.pwJMDH14LpCY92TQfX9/gNMnKqnnOyC', '(571) 377-9446', ' Market', 'Reston', 'VA', '20190'),
(6, 'Maria', 'Fry', 'maria@hotmail.com', '$2y$10$g5WpdnR948SMCKta/DBu7.lts.TjtR7O9FkcDhJY7S0hDcNpIVRaW', '(571) 377-9446', 'Market ', 'Reston', 'VA', '20190'),
(7, 'Mickey', 'Mouse', 'mickey@hotmail.com', '$2y$10$6BDnfgIKW.5CP6/2rziMz.Uu1TkQqajrgIWFs6gSvCDj7fkBaZyka', '(571) 377-9446', ' Market St Apt ', 'Ashburn', 'VA', '20190'),
(8, 'Mini', 'Mouse', 'mini@hotmail.com', '$2y$10$0O0oee5hnAhtg66pOY5n2.fVUEJPwI8HtJTRmlXBS5PhPgQYbV7rK', '(571) 377-9446', 'Rio st', 'Springfield', 'VA', '20190'),
(9, 'Donald', 'Duck', 'donald@hotmail.com', '$2y$10$hjFPIFXyw93GUqmpvwSJtONUXH1svfOk3ij9kEABRk2pNZB.S3zKW', '(571) 377-9446', 'Disney st', 'Arlington', 'VA', '20190'),
(10, 'Gabriela', 'Morales', 'gabi@hotmail.com', '$2y$10$DEqM.5mdeQIVvJrbiqm7vO6QpZY1KF0WlYB/rd2GtMvMWecXNi44a', '(571) 377-9446', 'San Jose st', 'Tysons', 'VA', '20190'),
(11, 'Marta', 'Silva', 'marta@hotmail.com', '$2y$10$tZ4QrGfljPujWIz4NoGnVeEAtBrZUyUKnCeJiu93WuWEaGuO989te', '(571) 377-9446', 'August St', 'Herndon', 'VA', '20190'),
(12, 'Gabriel', 'Monte', 'monte@hotmail.com', '$2y$10$Iv5hQqFPni4T1VcwsYFpLOAWubJxKSRBplBHZVXtbBXfGPC.wExsO', '(571) 377-9446', 'Marke St', 'Reston', 'VA', '20190'),
(13, 'Carla', 'Perez', 'carla@hotmal.com', '$2y$10$uIeB5Nk67KPX5Q6pbFsqSeOXBotzGEMuqxs.Pp9XPGEIuyqoBJK36', '(571) 377-9446', 'Washington St', 'Herndon', 'VA', '20190'),
(14, 'Sheyla', 'Carvalho', 'sheyla@hotmail.com', '$2y$10$NSkUiI4UPr4v/sCmyUWhI.UXx.hAGMiQUSuidiZS/q3Rj.zKqGydu', '(571) 377-9446', 'Hilton St', 'Reston', 'VA', '20190'),
(15, 'Marcos', 'Silva', 'silva@hotmail.com', '$2y$10$laYuj/UKc0TDTDWRmm84P.CVPZJOBqDwZeqO3k17gTH/SJt3xeklK', '(571) 377-9446', 'David St', 'Reston', 'VA', '20190'),
(16, 'Jane', 'James', 'jane@hotmail.com', '$2y$10$gSuwkIln/QmQgV84GxtvRuLbJjECwm17guFu0abfwyHncwUe3V8p2', '(571) 377-9446', 'Market St ', 'Reston', 'VA', '20190'),
(18, 'Fernanda', 'Bravo', 'bravo@hotmail.com', '$2y$10$FOBFBGlNLw0jfqnfhqpgbOcOBZ04MarYrQPYNw9UW8OwG6rWhwDh2', '(571) 377-9446', '12001 Market St Apt 272', 'Reston', 'VA', '20190');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingId`),
  ADD KEY `userNo` (`UserNo`) USING BTREE,
  ADD KEY `serviceId` (`serviceId`) USING BTREE;

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`UserNo`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceId`),
  ADD KEY `UserNo` (`UserNo`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `UserNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserNo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`UserNo`) REFERENCES `users` (`UserNo`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_2` FOREIGN KEY (`UserNo`) REFERENCES `users` (`UserNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
