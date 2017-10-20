-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2017 at 12:30 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `annisa_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `dc_experience`
--

CREATE TABLE `dc_experience` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_program` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(255) NOT NULL,
  `your_story` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dc_experience`
--

INSERT INTO `dc_experience` (`id`, `id_member`, `id_program`, `name`, `title`, `your_story`, `images`, `date_created`) VALUES
(1, 15, 7, 'rifan syauri', 'diantara daund', 'saat aku pergi kesana aku merasa biasa saja , nothing feels.. kenpa yua ? hmmmmmm', 'o-CHILDHOOD-facebook.jpg', '2017-10-21 03:04:54'),
(2, 15, 7, 'rifan syauri', 'hulauhlasd', 'The problem in this model, is that if no records found in imagini_produse, the id_produs from $this->_table will be empty because will be replaced with the empty id_produs from imagini_produse table.', '6.jpg', '2017-10-21 03:06:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dc_experience`
--
ALTER TABLE `dc_experience`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dc_experience`
--
ALTER TABLE `dc_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
