-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2017 at 07:54 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

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
-- Table structure for table `dc_appearance`
--

CREATE TABLE `dc_appearance` (
  `id` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `logo` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `id_creator` int(250) NOT NULL,
  `id_modifier` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dc_appearance`
--

INSERT INTO `dc_appearance` (`id`, `name`, `logo`, `date_created`, `date_modified`, `id_creator`, `id_modifier`) VALUES
(1, 'Annisa Travel', 'logo-square.png', '0000-00-00 00:00:00', '2017-09-14 00:09:40', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dc_banner`
--

CREATE TABLE `dc_banner` (
  `id` int(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `images` text NOT NULL,
  `link` text NOT NULL,
  `lang` enum('en','id') NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `id_creator` int(250) NOT NULL,
  `id_modifier` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dc_banner`
--

INSERT INTO `dc_banner` (`id`, `title`, `description`, `images`, `link`, `lang`, `date_created`, `date_modified`, `id_creator`, `id_modifier`) VALUES
(3, 'Ways of Worshiping During Fasting', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod \r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim \r\nveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea \r\ncommodo consequat. Duis aute irure dolor in reprehenderit in voluptate \r\nvelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint \r\noccaecat cupidatat non proident, sunt in culpa qui officia deserunt \r\nmollit anim id est laborum.</p><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem \r\naccusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab\r\n illo inventore veritatis et quasi architecto beatae vitae dicta sunt \r\nexplicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut \r\nodit aut fugit, sed quia consequuntur magni dolores eos qui ratione \r\nvoluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum \r\nquia dolor sit amet, consectetur, adipisci velit, sed quia non numquam \r\neius modi tempora incidunt ut labore et dolore magnam aliquam quaerat \r\nvoluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam \r\ncorporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?\r\n Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse \r\nquam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo \r\nvoluptas nulla pariatur?</p>', '707504.jpg', '#', 'en', '0000-00-00 00:00:00', '2017-10-01 22:37:44', 0, 1),
(4, 'Lorem ipsum dolor sit amet', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem \r\naccusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab\r\n illo inventore veritatis et quasi architecto beatae vitae dicta sunt \r\nexplicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut \r\nodit aut fugit, sed quia consequuntur magni dolores eos qui ratione \r\nvoluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum \r\nquia dolor sit amet, consectetur, adipisci velit, sed quia non numquam \r\neius modi tempora incidunt ut labore et dolore magnam aliquam quaerat \r\nvoluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam \r\ncorporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?\r\n Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse \r\nquam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo \r\nvoluptas nulla pariatur</p>', '00-lede-lyon-france-travel-guide.jpg', '#', 'en', '2017-10-01 23:07:17', NULL, 1, NULL),
(5, 'Lorem ipsum dolor sit amet', '<p>lorem ipsum<br></p>', 'france-feature.jpg', '#', 'en', '2017-10-01 23:07:39', NULL, 1, NULL),
(6, 'Lorem ipsum dolor sit amet', 'lorem ipsum dolor amet<br>', 'France-Travel3.jpg', '#', 'en', '2017-10-01 23:08:05', NULL, 1, NULL),
(7, 'Kiat-kiat Beribadah Selama Berpuasa', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod \r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim \r\nveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea \r\ncommodo consequat. Duis aute irure dolor in reprehenderit in voluptate \r\nvelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint \r\noccaecat cupidatat non proident, sunt in culpa qui officia deserunt \r\nmollit anim id est laborum.</p><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem \r\naccusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab\r\n illo inventore veritatis et quasi architecto beatae vitae dicta sunt \r\nexplicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut \r\nodit aut fugit, sed quia consequuntur magni dolores eos qui ratione \r\nvoluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum \r\nquia dolor sit amet, consectetur, adipisci velit, sed quia non numquam \r\neius modi tempora incidunt ut labore et dolore magnam aliquam quaerat \r\nvoluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam \r\ncorporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?\r\n Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse \r\nquam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo \r\nvoluptas nulla pariatur?</p>', '707504.jpg', '#', 'id', '0000-00-00 00:00:00', '2017-10-01 22:37:44', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dc_contact`
--

CREATE TABLE `dc_contact` (
  `id` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `id_creator` int(250) NOT NULL,
  `id_modifier` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dc_contact`
--

INSERT INTO `dc_contact` (`id`, `name`, `email`, `subject`, `content`, `date_created`, `date_modified`, `id_creator`, `id_modifier`) VALUES
(1, 'dsa', 'dsadas@dsada.com', 'asdasd', 'dsadasda ds sad sa', '2017-04-17 00:00:00', '2017-04-17 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dc_default`
--

CREATE TABLE `dc_default` (
  `id` int(100) NOT NULL,
  `name_group` varchar(250) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `id_creator` int(250) NOT NULL,
  `id_modifier` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dc_destination`
--

CREATE TABLE `dc_destination` (
  `id` int(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `images` text NOT NULL,
  `description` text NOT NULL,
  `featured` int(1) NOT NULL,
  `lang` enum('en','id') NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `id_creator` int(250) NOT NULL,
  `id_modifier` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dc_destination`
--

INSERT INTO `dc_destination` (`id`, `title`, `images`, `description`, `featured`, `lang`, `date_created`, `date_modified`, `id_creator`, `id_modifier`) VALUES
(1, 'France', 'region-france.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod \r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim \r\nveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea \r\ncommodo consequat. Duis aute irure dolor in reprehenderit in voluptate \r\nvelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint \r\noccaecat cupidatat non proident, sunt in culpa qui officia deserunt \r\nmollit anim id est laborum</p>', 1, 'en', '2017-10-06 01:03:13', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dc_groups`
--

CREATE TABLE `dc_groups` (
  `id` int(100) NOT NULL,
  `name_group` varchar(250) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `id_creator` int(250) NOT NULL,
  `id_modifier` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dc_groups`
--

INSERT INTO `dc_groups` (`id`, `name_group`, `date_created`, `date_modified`, `id_creator`, `id_modifier`) VALUES
(1, 'Super Admin', '2017-04-13 12:29:39', NULL, 1, NULL),
(5, 'Admin', '2017-04-13 15:24:27', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dc_icons`
--

CREATE TABLE `dc_icons` (
  `id` int(100) NOT NULL,
  `name_icons` varchar(250) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `id_creator` int(250) NOT NULL,
  `id_modifier` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dc_icons`
--

INSERT INTO `dc_icons` (`id`, `name_icons`, `date_created`, `date_modified`, `id_creator`, `id_modifier`) VALUES
(1, 'fa fa-file-text', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(2, 'icon-custom-home', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(3, 'icon-custom-thumb', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(4, 'icon-custom-settings', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(5, 'fa fa-adjust', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(6, 'fa fa-anchor', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(7, 'fa fa-archive', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(8, 'fa fa-arrows', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(9, 'fa fa-arrows-h', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(10, 'fa fa-arrows-v', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(11, 'fa fa-asterisk', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(12, 'fa fa-ban', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(13, 'fa fa-bar-chart-o', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(14, 'fa fa-barcode', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(15, 'fa fa-bars', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(16, 'fa fa-beer', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(17, 'fa fa-bell', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(18, 'fa fa-bell-o', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(19, 'fa fa-bolt', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(20, 'fa fa-book', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(21, 'fa fa-bookmark', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(22, 'fa fa-bookmark-o', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(23, 'fa fa-briefcase', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(24, 'fa fa-bug', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(25, 'fa fa-building-o', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(26, 'fa fa-bullhorn', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(27, 'fa fa-bullseye', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(28, 'fa fa-calendar', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(29, 'fa fa-calendar-o', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(30, 'fa fa-camera', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(31, 'fa fa-envelope', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dc_menu`
--

CREATE TABLE `dc_menu` (
  `id` int(100) NOT NULL,
  `name_menu` varchar(1000) NOT NULL,
  `sub_menu` varchar(100) NOT NULL,
  `target` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `position` int(100) NOT NULL,
  `lang` enum('en','id') NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `id_creator` int(250) NOT NULL,
  `id_modifier` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dc_menu`
--

INSERT INTO `dc_menu` (`id`, `name_menu`, `sub_menu`, `target`, `icon`, `position`, `lang`, `date_created`, `date_modified`, `id_creator`, `id_modifier`) VALUES
(1, 'Content', '0', 'admin_content', 'icon-custom-thumb', 1, 'en', '0000-00-00 00:00:00', '2017-04-13 11:13:46', 0, 1),
(2, 'Static Page', '1', 'static_page', '', 1, 'en', '2017-04-06 10:24:25', '2017-04-06 12:29:26', 1, 1),
(3, 'Settings System', '0', 'setting_system', 'icon-custom-settings', 3, 'en', '2017-04-13 00:00:00', '0000-00-00 00:00:00', 1, 0),
(4, 'Menu', '3', 'menu', '', 1, 'en', '2017-04-13 00:00:00', '2017-04-13 00:00:00', 1, 0),
(6, 'User Accsess', '3', 'user_accsess', 'fa fa-bars', 3, 'en', '0000-00-00 00:00:00', '2017-04-13 11:15:14', 0, 1),
(7, 'User Groups', '3', 'user_groups', 'none', 4, 'en', '2017-04-13 11:15:03', NULL, 1, NULL),
(8, 'User', '3', 'user', 'none', 2, 'en', '2017-04-16 18:04:14', NULL, 1, NULL),
(9, 'Article', '1', 'article', 'none', 2, 'en', '0000-00-00 00:00:00', '2017-10-01 21:21:33', 0, 1),
(10, 'appearance', '3', 'appearance', 'none', 5, 'en', '2017-04-17 14:31:03', NULL, 1, NULL),
(11, 'Message', '0', 'message', 'fa fa-envelope', 2, 'en', '0000-00-00 00:00:00', '2017-04-17 15:58:18', 0, 1),
(12, 'Inbox', '11', 'inbox', 'none', 1, 'en', '2017-04-17 16:05:07', NULL, 1, NULL),
(13, 'Compose', '11', 'compose', 'none', 2, 'en', '2017-04-17 16:05:40', NULL, 1, NULL),
(14, 'Banner', '1', 'banner', 'none', 3, 'en', '2017-04-22 16:51:32', NULL, 1, NULL),
(23, 'Video', '1', 'video', 'none', 6, 'en', '2017-04-27 15:07:41', NULL, 1, NULL),
(24, 'Konten', '0', 'admin_content', 'icon-custom-thumb', 1, 'id', '0000-00-00 00:00:00', '2017-10-01 22:16:27', 0, 1),
(25, 'Halaman Statis', '24', 'static_page', 'none', 1, 'id', '2017-10-01 21:31:58', NULL, 1, NULL),
(26, 'Artikel', '24', 'article', 'none', 2, 'id', '0000-00-00 00:00:00', '2017-10-07 12:50:33', 0, 1),
(27, 'Banner', '24', 'banner', 'none', 3, 'id', '2017-10-01 21:32:35', NULL, 1, NULL),
(28, 'Video', '24', 'video', 'none', 4, 'id', '2017-10-01 21:32:55', NULL, 1, NULL),
(29, 'Pesan', '0', 'message', 'fa fa-envelope', 2, 'id', '0000-00-00 00:00:00', '2017-10-01 21:57:41', 0, 1),
(30, 'Pesan Masuk', '29', 'inbox', 'none', 1, 'id', '2017-10-01 21:33:56', NULL, 1, NULL),
(31, 'Tulis Pesan', '29', 'compose', 'none', 2, 'id', '2017-10-01 21:34:14', NULL, 1, NULL),
(32, 'Pengaturan Sistem', '0', 'setting_system', 'icon-custom-settings', 3, 'id', '0000-00-00 00:00:00', '2017-10-01 21:57:59', 0, 1),
(33, 'Menu', '32', 'menu', 'none', 1, 'id', '2017-10-01 21:35:16', NULL, 1, NULL),
(34, 'User', '32', 'user', 'none', 2, 'id', '2017-10-01 21:35:40', NULL, 1, NULL),
(35, 'Akses User', '32', 'user_accsess', 'none', 3, 'id', '2017-10-01 21:36:08', NULL, 1, NULL),
(36, 'Group User', '32', 'user_groups', 'none', 4, 'id', '2017-10-01 21:36:32', NULL, 1, NULL),
(37, 'Tampilan', '32', 'appearance', 'none', 5, 'id', '2017-10-01 21:37:05', NULL, 1, NULL),
(38, 'Program', '0', 'admin_program', 'fa fa-asterisk', 2, 'en', '2017-10-06 00:50:34', NULL, 1, NULL),
(39, 'Destination', '38', 'destination', 'none', 1, 'en', '2017-10-06 00:51:06', NULL, 1, NULL),
(40, 'Category Program', '38', 'category_program', 'none', 2, 'en', '2017-10-06 00:51:46', NULL, 1, NULL),
(41, 'Program', '38', 'program', 'none', 3, 'en', '2017-10-06 00:52:04', NULL, 1, NULL),
(42, 'Program', '0', 'admin_program', 'fa fa-asterisk', 2, 'id', '2017-10-06 00:50:34', NULL, 1, NULL),
(43, 'Wisata', '42', 'destination', 'none', 1, 'id', '2017-10-06 00:51:06', NULL, 1, NULL),
(44, 'Kategori Program', '42', 'category_program', 'none', 2, 'id', '2017-10-06 00:51:46', NULL, 1, NULL),
(45, 'Program', '42', 'program', 'none', 3, 'id', '2017-10-06 00:52:04', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dc_menu_accsess`
--

CREATE TABLE `dc_menu_accsess` (
  `id` int(100) NOT NULL,
  `id_menu` int(100) NOT NULL,
  `id_group` int(100) NOT NULL,
  `accsess` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dc_menu_accsess`
--

INSERT INTO `dc_menu_accsess` (`id`, `id_menu`, `id_group`, `accsess`) VALUES
(12, 1, 0, 0),
(13, 2, 0, 1),
(14, 3, 0, 0),
(15, 4, 0, 0),
(16, 6, 0, 0),
(17, 7, 0, 0),
(18, 1, 1, 1),
(19, 2, 1, 1),
(20, 3, 1, 1),
(21, 4, 1, 1),
(22, 6, 1, 1),
(23, 7, 1, 1),
(24, 1, 5, 1),
(25, 2, 5, 1),
(26, 3, 5, 0),
(27, 4, 5, 0),
(28, 6, 5, 0),
(29, 7, 5, 0),
(30, 8, 1, 1),
(31, 9, 1, 1),
(32, 9, 5, 1),
(33, 8, 5, 0),
(34, 10, 1, 1),
(35, 11, 1, 1),
(36, 12, 1, 1),
(37, 13, 1, 1),
(38, 14, 1, 1),
(39, 14, 5, 1),
(40, 10, 5, 0),
(41, 11, 5, 0),
(42, 12, 5, 0),
(43, 13, 5, 0),
(44, 15, 1, 1),
(45, 16, 1, 1),
(46, 17, 1, 1),
(47, 18, 1, 1),
(48, 19, 1, 1),
(49, 20, 1, 1),
(50, 15, 5, 0),
(51, 16, 5, 0),
(52, 17, 5, 0),
(53, 18, 5, 0),
(54, 19, 5, 0),
(55, 20, 5, 0),
(56, 21, 1, 1),
(57, 21, 5, 1),
(58, 22, 1, 1),
(59, 23, 1, 1),
(60, 22, 5, 0),
(61, 23, 5, 0),
(62, 24, 1, 1),
(63, 25, 1, 1),
(64, 26, 1, 1),
(65, 27, 1, 1),
(66, 28, 1, 1),
(67, 29, 1, 1),
(68, 30, 1, 1),
(69, 31, 1, 1),
(70, 32, 1, 1),
(71, 33, 1, 1),
(72, 34, 1, 1),
(73, 35, 1, 1),
(74, 36, 1, 1),
(75, 37, 1, 1),
(76, 38, 1, 1),
(77, 39, 1, 1),
(78, 40, 1, 1),
(79, 41, 1, 1),
(80, 42, 1, 1),
(81, 43, 1, 1),
(82, 44, 1, 1),
(83, 45, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dc_news`
--

CREATE TABLE `dc_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(225) NOT NULL,
  `images` text NOT NULL,
  `content` text NOT NULL,
  `lang` enum('en','id') NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `id_creator` int(11) NOT NULL,
  `id_modifier` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dc_program`
--

CREATE TABLE `dc_program` (
  `id` int(100) NOT NULL,
  `id_destination` int(100) NOT NULL,
  `id_program_category` int(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `itenary` text NOT NULL,
  `fasilitas` text NOT NULL,
  `price1` int(100) NOT NULL,
  `price2` int(100) NOT NULL,
  `price3` int(100) NOT NULL,
  `lang` enum('en','id') NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `id_creator` int(250) NOT NULL,
  `id_modifier` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dc_program`
--

INSERT INTO `dc_program` (`id`, `id_destination`, `id_program_category`, `title`, `itenary`, `fasilitas`, `price1`, `price2`, `price3`, `lang`, `date_created`, `date_modified`, `id_creator`, `id_modifier`) VALUES
(1, 1, 1, 'Lorem ipsum dolor', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod \r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim \r\nveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea \r\ncommodo consequat. Duis aute irure dolor in reprehenderit in voluptate \r\nvelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint \r\noccaecat cupidatat non proident, sunt in culpa qui officia deserunt \r\nmollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod \r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim \r\nveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea \r\ncommodo consequat. Duis aute irure dolor in reprehenderit in voluptate \r\nvelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint \r\noccaecat cupidatat non proident, sunt in culpa qui officia deserunt \r\nmollit anim id est laborum.</p>', 2500000, 2500000, 2500000, 'en', '2017-10-06 01:26:19', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dc_program_category`
--

CREATE TABLE `dc_program_category` (
  `id` int(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `images` text NOT NULL,
  `description` text NOT NULL,
  `lang` enum('en','id') NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `id_creator` int(250) NOT NULL,
  `id_modifier` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dc_program_category`
--

INSERT INTO `dc_program_category` (`id`, `title`, `images`, `description`, `lang`, `date_created`, `date_modified`, `id_creator`, `id_modifier`) VALUES
(1, 'Honey Moon', 'A_couple_takes_a_walk_on_tropical_beach_of_La_Digue_in_Seychelles.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod \r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim \r\nveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea \r\ncommodo consequat. Duis aute irure dolor in reprehenderit in voluptate \r\nvelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint \r\noccaecat cupidatat non proident, sunt in culpa qui officia deserunt \r\nmollit anim id est laborum</p>', 'en', '2017-10-06 01:09:18', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dc_program_day`
--

CREATE TABLE `dc_program_day` (
  `id` int(100) NOT NULL,
  `id_program` int(100) NOT NULL,
  `day` date NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `id_creator` int(250) NOT NULL,
  `id_modifier` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dc_program_day`
--

INSERT INTO `dc_program_day` (`id`, `id_program`, `day`, `date_created`, `date_modified`, `id_creator`, `id_modifier`) VALUES
(1, 1, '2017-10-31', '0000-00-00 00:00:00', '2017-10-06 02:19:16', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dc_program_images`
--

CREATE TABLE `dc_program_images` (
  `id` int(100) NOT NULL,
  `id_program` int(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `images` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `id_creator` int(250) NOT NULL,
  `id_modifier` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dc_program_images`
--

INSERT INTO `dc_program_images` (`id`, `id_program`, `title`, `images`, `date_created`, `date_modified`, `id_creator`, `id_modifier`) VALUES
(1, 1, '1', '150713155054-destination-france-lyon-super-169.jpg', '2017-10-06 01:48:43', NULL, 1, NULL),
(6, 1, '2', 'destination-france.jpg', '2017-10-06 01:59:23', NULL, 1, NULL),
(7, 1, '3', 'France-2.jpg', '2017-10-06 01:59:29', NULL, 1, NULL),
(8, 1, '4', 'region-france.jpg', '2017-10-06 01:59:36', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dc_static_content`
--

CREATE TABLE `dc_static_content` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(225) NOT NULL,
  `images` text,
  `content` text NOT NULL,
  `lang` enum('en','id') NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `id_creator` int(11) NOT NULL,
  `id_modifier` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dc_static_content`
--

INSERT INTO `dc_static_content` (`id`, `title`, `images`, `content`, `lang`, `date_created`, `date_modified`, `id_creator`, `id_modifier`) VALUES
(29, 'Corporate Travel Management', 'jamaah.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod \ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim \nveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea \ncommodo consequat. Duis aute irure dolor in reprehenderit in voluptate \nvelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint \noccaecat cupidatat non proident, sunt in culpa qui officia deserunt \nmollit anim id est laborum.</p><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem \naccusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab\n illo inventore veritatis et quasi architecto beatae vitae dicta sunt \nexplicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut \nodit aut fugit, sed quia consequuntur magni dolores eos qui ratione \nvoluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum \nquia dolor sit amet, consectetur, adipisci velit, sed quia non numquam \neius modi tempora incidunt ut labore et dolore magnam aliquam quaerat \nvoluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam \ncorporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?\n Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse \nquam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo \nvoluptas nulla pariatur?</p><p><img style="width: 450px;" src="http://localhost/annisa_travel/assets/uploads/summernote/bank_icon.png"></p><p>But I must explain to you how all this mistaken idea of denouncing \npleasure and praising pain was born and I will give you a complete \naccount of the system, and expound the actual teachings of the great \nexplorer of the truth, the master-builder of human happiness. No one \nrejects, dislikes, or avoids pleasure itself, because it is pleasure, \nbut because those who do not know how to pursue pleasure rationally \nencounter consequences that are extremely painful. Nor again is there \nanyone who loves or pursues or desires to obtain pain of itself, because\n it is pain, but because occasionally circumstances occur in which toil \nand pain can procure him some great pleasure. To take a trivial example,\n which of us ever undertakes laborious physical exercise, except to \nobtain some advantage from it? But who has any right to find fault with a\n man who chooses to enjoy a pleasure that has no annoying consequences, \nor one who avoids a pain that produces no resultant pleasure</p>', 'en', '0000-00-00 00:00:00', '2017-10-01 19:47:08', 0, 1),
(30, 'Mice', 'jamaah.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod \ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim \nveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea \ncommodo consequat. Duis aute irure dolor in reprehenderit in voluptate \nvelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint \noccaecat cupidatat non proident, sunt in culpa qui officia deserunt \nmollit anim id est laborum.</p><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem \naccusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab\n illo inventore veritatis et quasi architecto beatae vitae dicta sunt \nexplicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut \nodit aut fugit, sed quia consequuntur magni dolores eos qui ratione \nvoluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum \nquia dolor sit amet, consectetur, adipisci velit, sed quia non numquam \neius modi tempora incidunt ut labore et dolore magnam aliquam quaerat \nvoluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam \ncorporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?\n Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse \nquam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo \nvoluptas nulla pariatur</p><p><img style="width: 450px;" src="http://localhost/annisa_travel/assets/uploads/summernote/bank_icon.png"></p><p>But I must explain to you how all this mistaken idea of denouncing \npleasure and praising pain was born and I will give you a complete \naccount of the system, and expound the actual teachings of the great \nexplorer of the truth, the master-builder of human happiness. No one \nrejects, dislikes, or avoids pleasure itself, because it is pleasure, \nbut because those who do not know how to pursue pleasure rationally \nencounter consequences that are extremely painful. Nor again is there \nanyone who loves or pursues or desires to obtain pain of itself, because\n it is pain, but because occasionally circumstances occur in which toil \nand pain can procure him some great pleasure. To take a trivial example,\n which of us ever undertakes laborious physical exercise, except to \nobtain some advantage from it? But who has any right to find fault with a\n man who chooses to enjoy a pleasure that has no annoying consequences, \nor one who avoids a pain that produces no resultant pleasure</p>', 'en', '2017-10-01 20:23:24', NULL, 1, NULL),
(31, 'Extra Services', 'jamaah.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem  accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab  illo inventore veritatis et quasi architecto beatae vitae dicta sunt  explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut  odit aut fugit, sed quia consequuntur magni dolores eos qui ratione  voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum  quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam  eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat  voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam  corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?  Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse  quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo  voluptas nulla pariatur</p><p><img style="width: 450px;" src="http://localhost/annisa_travel/assets/uploads/summernote/bank_icon.png"></p><p>But I must explain to you how all this mistaken idea of denouncing  pleasure and praising pain was born and I will give you a complete  account of the system, and expound the actual teachings of the great  explorer of the truth, the master-builder of human happiness. No one  rejects, dislikes, or avoids pleasure itself, because it is pleasure,  but because those who do not know how to pursue pleasure rationally  encounter consequences that are extremely painful. Nor again is there  anyone who loves or pursues or desires to obtain pain of itself, because  it is pain, but because occasionally circumstances occur in which toil  and pain can procure him some great pleasure. To take a trivial example,  which of us ever undertakes laborious physical exercise, except to  obtain some advantage from it? But who has any right to find fault with a  man who chooses to enjoy a pleasure that has no annoying consequences,  or one who avoids a pain that produces no resultant pleasure</p>', 'en', '0000-00-00 00:00:00', '2017-10-01 20:24:45', 0, 1),
(32, 'Track record', 'jamaah.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem  accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab  illo inventore veritatis et quasi architecto beatae vitae dicta sunt  explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut  odit aut fugit, sed quia consequuntur magni dolores eos qui ratione  voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum  quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam  eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat  voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam  corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?  Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse  quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo  voluptas nulla pariatur</p><p><img style="width: 450px;" src="http://localhost/annisa_travel/assets/uploads/summernote/bank_icon.png"></p><p>But I must explain to you how all this mistaken idea of denouncing  pleasure and praising pain was born and I will give you a complete  account of the system, and expound the actual teachings of the great  explorer of the truth, the master-builder of human happiness. No one  rejects, dislikes, or avoids pleasure itself, because it is pleasure,  but because those who do not know how to pursue pleasure rationally  encounter consequences that are extremely painful. Nor again is there  anyone who loves or pursues or desires to obtain pain of itself, because  it is pain, but because occasionally circumstances occur in which toil  and pain can procure him some great pleasure. To take a trivial example,  which of us ever undertakes laborious physical exercise, except to  obtain some advantage from it? But who has any right to find fault with a  man who chooses to enjoy a pleasure that has no annoying consequences,  or one who avoids a pain that produces no resultant pleasure</p>', 'en', '0000-00-00 00:00:00', '2017-10-01 20:25:05', 0, 1),
(33, 'Manajemen Perjalanan Perusahaan', 'jamaah.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem  accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab  illo inventore veritatis et quasi architecto beatae vitae dicta sunt  explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut  odit aut fugit, sed quia consequuntur magni dolores eos qui ratione  voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum  quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam  eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat  voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam  corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?  Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse  quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo  voluptas nulla pariatur?</p><p><img style="width: 450px;" src="http://localhost/annisa_travel/assets/uploads/summernote/bank_icon.png"></p><p>But I must explain to you how all this mistaken idea of denouncing  pleasure and praising pain was born and I will give you a complete  account of the system, and expound the actual teachings of the great  explorer of the truth, the master-builder of human happiness. No one  rejects, dislikes, or avoids pleasure itself, because it is pleasure,  but because those who do not know how to pursue pleasure rationally  encounter consequences that are extremely painful. Nor again is there  anyone who loves or pursues or desires to obtain pain of itself, because  it is pain, but because occasionally circumstances occur in which toil  and pain can procure him some great pleasure. To take a trivial example,  which of us ever undertakes laborious physical exercise, except to  obtain some advantage from it? But who has any right to find fault with a  man who chooses to enjoy a pleasure that has no annoying consequences,  or one who avoids a pain that produces no resultant pleasure</p>', 'id', '0000-00-00 00:00:00', '2017-10-01 20:25:55', 0, 1),
(34, 'Mice', 'jamaah.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem  accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab  illo inventore veritatis et quasi architecto beatae vitae dicta sunt  explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut  odit aut fugit, sed quia consequuntur magni dolores eos qui ratione  voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum  quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam  eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat  voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam  corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?  Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse  quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo  voluptas nulla pariatur?</p><p><img style="width: 450px;" src="http://localhost/annisa_travel/assets/uploads/summernote/bank_icon.png"></p><p>But I must explain to you how all this mistaken idea of denouncing  pleasure and praising pain was born and I will give you a complete  account of the system, and expound the actual teachings of the great  explorer of the truth, the master-builder of human happiness. No one  rejects, dislikes, or avoids pleasure itself, because it is pleasure,  but because those who do not know how to pursue pleasure rationally  encounter consequences that are extremely painful. Nor again is there  anyone who loves or pursues or desires to obtain pain of itself, because  it is pain, but because occasionally circumstances occur in which toil  and pain can procure him some great pleasure. To take a trivial example,  which of us ever undertakes laborious physical exercise, except to  obtain some advantage from it? But who has any right to find fault with a  man who chooses to enjoy a pleasure that has no annoying consequences,  or one who avoids a pain that produces no resultant pleasure</p>', 'id', '2017-10-01 20:26:08', NULL, 1, NULL),
(35, 'Layanan Ekstra', 'jamaah.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem  accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab  illo inventore veritatis et quasi architecto beatae vitae dicta sunt  explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut  odit aut fugit, sed quia consequuntur magni dolores eos qui ratione  voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum  quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam  eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat  voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam  corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?  Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse  quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo  voluptas nulla pariatur?</p><p><img style="width: 450px;" src="http://localhost/annisa_travel/assets/uploads/summernote/bank_icon.png"></p><p>But I must explain to you how all this mistaken idea of denouncing  pleasure and praising pain was born and I will give you a complete  account of the system, and expound the actual teachings of the great  explorer of the truth, the master-builder of human happiness. No one  rejects, dislikes, or avoids pleasure itself, because it is pleasure,  but because those who do not know how to pursue pleasure rationally  encounter consequences that are extremely painful. Nor again is there  anyone who loves or pursues or desires to obtain pain of itself, because  it is pain, but because occasionally circumstances occur in which toil  and pain can procure him some great pleasure. To take a trivial example,  which of us ever undertakes laborious physical exercise, except to  obtain some advantage from it? But who has any right to find fault with a  man who chooses to enjoy a pleasure that has no annoying consequences,  or one who avoids a pain that produces no resultant pleasure</p>', 'id', '2017-10-01 20:26:18', NULL, 1, NULL),
(36, 'Rekam Jejak', 'jamaah.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem  accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab  illo inventore veritatis et quasi architecto beatae vitae dicta sunt  explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut  odit aut fugit, sed quia consequuntur magni dolores eos qui ratione  voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum  quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam  eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat  voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam  corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?  Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse  quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo  voluptas nulla pariatur?</p><p><img style="width: 450px;" src="http://localhost/annisa_travel/assets/uploads/summernote/bank_icon.png"></p><p>But I must explain to you how all this mistaken idea of denouncing  pleasure and praising pain was born and I will give you a complete  account of the system, and expound the actual teachings of the great  explorer of the truth, the master-builder of human happiness. No one  rejects, dislikes, or avoids pleasure itself, because it is pleasure,  but because those who do not know how to pursue pleasure rationally  encounter consequences that are extremely painful. Nor again is there  anyone who loves or pursues or desires to obtain pain of itself, because  it is pain, but because occasionally circumstances occur in which toil  and pain can procure him some great pleasure. To take a trivial example,  which of us ever undertakes laborious physical exercise, except to  obtain some advantage from it? But who has any right to find fault with a  man who chooses to enjoy a pleasure that has no annoying consequences,  or one who avoids a pain that produces no resultant pleasure</p>', 'id', '2017-10-01 20:26:26', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dc_user`
--

CREATE TABLE `dc_user` (
  `id` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `photo` text NOT NULL,
  `user_group` int(10) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `id_creator` int(10) NOT NULL,
  `id_modifier` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dc_user`
--

INSERT INTO `dc_user` (`id`, `username`, `password`, `email`, `first_name`, `last_name`, `photo`, `user_group`, `date_created`, `date_modified`, `id_creator`, `id_modifier`) VALUES
(1, 'admins', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'admin', 'webei', '16807164_1234243823400398_1687302977082263434_n.jpg', 1, '0000-00-00 00:00:00', '2017-04-17 00:12:22', 0, 1),
(2, 'ilhamudzakir', '81dc9bdb52d04dc20036dbd8313ed055', 'ilhamudzakir@gmail.com', 'ilham', 'mudzakir', '20161201_6435.jpg', 5, '2017-04-17 01:54:09', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dc_video`
--

CREATE TABLE `dc_video` (
  `id` int(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `images` text NOT NULL,
  `source` text NOT NULL,
  `lang` enum('en','id') NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `id_creator` int(250) NOT NULL,
  `id_modifier` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dc_appearance`
--
ALTER TABLE `dc_appearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dc_banner`
--
ALTER TABLE `dc_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dc_contact`
--
ALTER TABLE `dc_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dc_default`
--
ALTER TABLE `dc_default`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dc_destination`
--
ALTER TABLE `dc_destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dc_groups`
--
ALTER TABLE `dc_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dc_icons`
--
ALTER TABLE `dc_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dc_menu`
--
ALTER TABLE `dc_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dc_menu_accsess`
--
ALTER TABLE `dc_menu_accsess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dc_news`
--
ALTER TABLE `dc_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dc_program`
--
ALTER TABLE `dc_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dc_program_category`
--
ALTER TABLE `dc_program_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dc_program_day`
--
ALTER TABLE `dc_program_day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dc_program_images`
--
ALTER TABLE `dc_program_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dc_static_content`
--
ALTER TABLE `dc_static_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dc_user`
--
ALTER TABLE `dc_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dc_video`
--
ALTER TABLE `dc_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dc_appearance`
--
ALTER TABLE `dc_appearance`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dc_banner`
--
ALTER TABLE `dc_banner`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `dc_contact`
--
ALTER TABLE `dc_contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dc_default`
--
ALTER TABLE `dc_default`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dc_destination`
--
ALTER TABLE `dc_destination`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dc_groups`
--
ALTER TABLE `dc_groups`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dc_icons`
--
ALTER TABLE `dc_icons`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `dc_menu`
--
ALTER TABLE `dc_menu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `dc_menu_accsess`
--
ALTER TABLE `dc_menu_accsess`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `dc_news`
--
ALTER TABLE `dc_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dc_program`
--
ALTER TABLE `dc_program`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dc_program_category`
--
ALTER TABLE `dc_program_category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dc_program_day`
--
ALTER TABLE `dc_program_day`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dc_program_images`
--
ALTER TABLE `dc_program_images`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `dc_static_content`
--
ALTER TABLE `dc_static_content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `dc_user`
--
ALTER TABLE `dc_user`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dc_video`
--
ALTER TABLE `dc_video`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
