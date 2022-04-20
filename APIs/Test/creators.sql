-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 19, 2021 at 07:53 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17237698_test_api_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `creators`
--

CREATE TABLE `creators` (
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bio` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `likes` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `creators`
--

INSERT INTO `creators` (`email`, `name`, `bio`, `picture`, `likes`, `views`) VALUES
('hijinaben@gmail.com', 'Hijina Ben', 'Live in the sunshine where you belong.', 'https://res.cloudinary.com/trendbrains/image/upload/r_30/v1621071914/Yoga%20Music/Artists/05_hempxr.png', 1, 4),
('jayalkon@gmail.com', 'Mayal Kon', 'So grateful to be sharing my world with you.', 'https://res.cloudinary.com/trendbrains/image/upload/r_30/v1621071914/Yoga%20Music/Artists/02_v2s1wt.png', 4, 1),
('jones@gmail.com', 'Jones', 'So many of my smiles are because of you. yoga', 'https://res.cloudinary.com/trendbrains/image/upload/r_30/v1621071914/Yoga%20Music/Artists/01_soovbn.png', 3, 2),
('milinalondon@gmail.com', 'Milina', 'All your dreams can come true and I\'ll make sure of it.', 'https://res.cloudinary.com/trendbrains/image/upload/r_30/v1621071914/Yoga%20Music/Artists/03_jflwzs.png', 2, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creators`
--
ALTER TABLE `creators`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
