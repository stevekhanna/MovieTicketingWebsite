-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2018 at 10:13 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NewTestForMovie`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin_Account`
--

CREATE TABLE `Admin_Account` (
  `AdminID` int(5) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admin_Account`
--

INSERT INTO `Admin_Account` (`AdminID`, `First_Name`, `Last_Name`, `Username`, `Password`) VALUES
(1, 'Steve', 'Khanna', 'admin', 'admin'),
(2, 'Masroor', 'Syed', 'm.syed', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `Are_Assigned`
--

CREATE TABLE `Are_Assigned` (
  `Movie_Name` varchar(255) NOT NULL,
  `TheatreID` int(2) NOT NULL,
  `Date` date NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Buy_Tickets`
--

CREATE TABLE `Buy_Tickets` (
  `TicketID` int(6) NOT NULL,
  `CustomerID` int(5) NOT NULL,
  `Quantity` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Buy_Tickets`
--

INSERT INTO `Buy_Tickets` (`TicketID`, `CustomerID`, `Quantity`) VALUES
(34, 21, 6),
(35, 21, 6),
(36, 21, 6),
(37, 21, 6),
(38, 21, 6),
(39, 21, 6),
(40, 21, 6),
(41, 21, 6),
(42, 21, 6),
(43, 21, 6),
(44, 21, 6),
(45, 21, 6),
(46, 21, 6),
(47, 21, 6),
(48, 21, 6),
(49, 21, 6),
(50, 21, 6),
(51, 21, 6),
(52, 21, 6),
(53, 21, 6),
(54, 21, 6),
(55, 21, 6),
(56, 21, 6),
(57, 21, 6),
(58, 21, 6),
(59, 21, 6),
(60, 21, 6),
(61, 21, 6),
(62, 21, 6),
(63, 21, 6),
(64, 21, 6),
(65, 21, 6),
(66, 21, 6),
(67, 21, 6),
(68, 21, 6),
(69, 21, 6),
(70, 21, 6),
(71, 21, 6),
(72, 21, 6),
(73, 21, 6),
(74, 21, 6),
(75, 21, 6),
(76, 21, 6),
(77, 21, 6),
(78, 21, 6),
(79, 21, 6),
(80, 21, 6),
(81, 21, 6),
(82, 21, 6),
(83, 21, 6),
(84, 21, 6),
(85, 21, 6),
(86, 21, 6),
(87, 21, 6),
(88, 21, 6),
(89, 21, 6),
(90, 21, 6),
(91, 21, 6),
(92, 21, 6),
(93, 21, 6),
(94, 21, 6),
(95, 21, 6),
(96, 21, 6),
(97, 21, 6),
(98, 21, 6),
(99, 21, 6),
(100, 21, 6),
(101, 21, 6),
(102, 21, 6),
(103, 21, 6),
(104, 21, 6),
(105, 21, 6),
(106, 21, 6),
(107, 21, 6),
(108, 21, 6),
(109, 21, 6),
(110, 21, 6),
(111, 21, 6),
(112, 21, 6),
(113, 21, 6),
(114, 21, 6),
(115, 21, 6),
(116, 21, 6),
(117, 21, 6),
(118, 21, 6),
(119, 21, 6),
(120, 21, 6),
(121, 21, 6),
(122, 21, 6),
(123, 21, 6),
(124, 21, 6),
(125, 21, 6),
(126, 21, 6),
(127, 21, 6),
(128, 21, 6),
(129, 21, 6),
(130, 21, 6),
(131, 21, 6),
(132, 21, 6),
(133, 21, 6),
(134, 21, 6),
(135, 21, 6),
(136, 21, 6),
(137, 21, 6),
(138, 21, 6),
(139, 21, 6),
(140, 21, 6),
(141, 21, 6),
(142, 21, 6),
(143, 21, 6),
(144, 21, 6),
(145, 21, 6),
(146, 21, 6),
(147, 21, 6),
(148, 21, 6),
(149, 21, 6),
(150, 21, 6),
(151, 21, 6),
(152, 21, 6),
(153, 21, 6),
(154, 21, 6),
(155, 21, 6),
(156, 21, 6),
(157, 21, 6),
(158, 21, 6),
(159, 21, 6),
(160, 21, 6),
(161, 21, 6),
(162, 21, 6),
(163, 21, 6),
(164, 21, 6),
(165, 21, 6),
(166, 21, 6),
(167, 21, 6),
(168, 21, 6),
(169, 21, 6),
(170, 21, 6),
(171, 21, 6),
(172, 21, 6),
(173, 21, 6),
(174, 21, 6),
(175, 21, 6),
(176, 21, 6),
(177, 21, 6),
(178, 21, 6),
(179, 21, 6),
(180, 21, 6),
(181, 21, 6),
(182, 21, 6),
(183, 21, 6),
(184, 36, 3),
(185, 36, 3),
(186, 36, 3),
(187, 36, 3),
(188, 36, 3),
(189, 36, 3),
(190, 37, 5),
(191, 37, 5),
(192, 37, 5),
(193, 37, 5),
(194, 37, 5),
(195, 37, 5),
(196, 37, 5),
(197, 37, 5),
(198, 37, 5),
(199, 37, 5),
(200, 37, 5),
(201, 37, 5),
(202, 37, 5),
(203, 37, 5),
(204, 37, 5),
(205, 37, 5),
(206, 37, 5),
(207, 37, 5),
(208, 37, 5),
(209, 37, 5),
(210, 37, 5),
(211, 37, 5),
(212, 37, 5),
(213, 37, 5),
(214, 37, 5),
(215, 37, 5),
(216, 37, 5),
(217, 37, 5),
(218, 37, 5),
(219, 37, 5),
(220, 37, 5),
(221, 37, 5),
(222, 37, 5),
(223, 37, 5),
(224, 37, 5),
(225, 37, 5),
(226, 37, 5),
(227, 37, 5),
(228, 37, 5),
(229, 37, 5),
(230, 37, 5),
(231, 37, 5),
(232, 37, 5),
(233, 37, 5),
(234, 37, 5),
(235, 37, 5),
(236, 37, 5),
(237, 37, 5),
(238, 37, 5),
(239, 37, 5),
(240, 39, 4),
(241, 39, 4),
(242, 39, 4),
(243, 39, 4),
(244, 40, 7),
(245, 40, 7),
(246, 40, 7),
(247, 40, 7),
(248, 40, 7),
(249, 40, 7),
(250, 40, 7),
(251, 40, 7),
(252, 40, 7),
(253, 40, 7),
(254, 40, 7),
(255, 40, 7),
(256, 40, 7),
(257, 40, 7),
(258, 41, 7),
(259, 41, 7),
(260, 41, 7),
(261, 41, 7),
(262, 41, 7),
(263, 41, 7),
(264, 41, 7),
(265, 42, 6),
(266, 42, 6),
(267, 42, 6),
(268, 42, 6),
(269, 42, 6),
(270, 42, 6),
(271, 42, 6),
(272, 42, 6),
(273, 42, 6),
(274, 42, 6),
(275, 42, 6),
(276, 42, 6),
(277, 43, 8),
(278, 43, 8),
(279, 43, 8),
(280, 43, 8),
(281, 43, 8),
(282, 43, 8),
(283, 43, 8),
(284, 43, 8),
(285, 43, 8),
(286, 43, 8),
(287, 43, 8),
(288, 43, 8),
(289, 43, 8),
(290, 43, 8),
(291, 43, 8),
(292, 43, 8),
(293, 44, 5),
(294, 44, 5),
(295, 44, 5),
(296, 44, 5),
(297, 44, 5),
(298, 45, 5),
(299, 45, 5),
(300, 45, 5),
(301, 45, 5),
(302, 45, 5),
(303, 46, 13),
(304, 46, 13),
(305, 46, 13),
(306, 46, 13),
(307, 46, 13),
(308, 46, 13),
(309, 46, 13),
(310, 46, 13),
(311, 46, 13),
(312, 46, 13),
(313, 46, 13),
(314, 46, 13),
(315, 46, 13),
(316, 47, 6),
(317, 48, 6),
(318, 48, 6),
(319, 48, 6),
(320, 49, 7),
(321, 49, 7),
(322, 50, 3),
(323, 51, 4),
(324, 52, 5),
(325, 52, 5),
(326, 52, 5),
(327, 52, 5),
(328, 53, 5),
(329, 53, 5),
(330, 53, 5),
(331, 53, 5),
(332, 53, 5),
(333, 53, 5),
(334, 54, 9),
(335, 55, 5),
(336, 55, 5),
(337, 55, 5),
(338, 55, 5),
(339, 55, 5),
(340, 55, 5),
(341, 55, 5),
(342, 55, 5),
(343, 55, 5),
(344, 55, 5),
(345, 55, 5),
(346, 55, 5),
(347, 55, 5),
(348, 55, 5),
(349, 55, 5),
(350, 55, 5),
(351, 55, 5),
(352, 55, 5),
(353, 55, 5),
(354, 55, 5),
(355, 55, 5),
(356, 55, 5),
(357, 55, 5),
(358, 55, 5),
(359, 55, 5),
(360, 55, 5),
(361, 55, 5),
(362, 55, 5),
(363, 55, 5),
(364, 55, 5),
(365, 57, 7),
(366, 57, 7),
(367, 57, 7),
(368, 57, 7),
(369, 57, 7),
(370, 57, 7),
(371, 57, 7),
(372, 58, 5),
(373, 58, 5),
(374, 58, 5),
(375, 58, 5),
(376, 58, 5),
(377, 59, 9),
(378, 59, 9),
(379, 59, 9),
(380, 59, 9),
(381, 59, 9),
(382, 59, 9),
(383, 59, 9),
(384, 59, 9),
(385, 59, 9),
(386, 60, 2),
(387, 60, 2),
(389, 0, 1),
(390, 61, 2),
(391, 61, 2),
(392, 62, 2),
(393, 62, 2),
(394, 0, 2),
(395, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `CustomerID` int(5) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`CustomerID`, `Email`) VALUES
(1, 'stvkhanna@gmail.com'),
(14, 'a'),
(15, 'b'),
(16, 'a'),
(17, 'a'),
(18, 'a'),
(19, 'a'),
(20, 'a'),
(21, 'd'),
(22, 'f'),
(23, 'f'),
(24, 'f'),
(25, 'g'),
(26, 'g'),
(27, 'f'),
(28, 'f'),
(29, 'asd'),
(30, 'ad'),
(31, 'asd'),
(32, 'asd'),
(33, 'asd'),
(34, 'asd'),
(35, 'h'),
(36, 'b'),
(37, 'h'),
(38, 'h'),
(39, 'hasd'),
(40, 'hadh'),
(41, 'jjj'),
(42, 'some'),
(43, 'hashd'),
(44, 'ahsdb'),
(45, 'asda'),
(46, 'ahsdhasd'),
(47, 'hashdhashdha'),
(48, 'yasdash'),
(49, 'ahhashbnk'),
(50, 'yuashkas'),
(51, 'jasdgjahshdakjsdl'),
(52, 'ujajlns'),
(53, 'pleasework'),
(54, 'jasdm'),
(55, 'ijkjkm'),
(56, 'some'),
(57, 'uasndl'),
(58, 'haskbdkaj'),
(59, 'something'),
(60, 'some'),
(61, 'customer'),
(62, 'someemail@gmail.com'),
(63, 'test1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `For_Movie_Ticket`
--

CREATE TABLE `For_Movie_Ticket` (
  `Movie_Name` varchar(255) NOT NULL,
  `TheatreID` int(2) NOT NULL,
  `Date` date NOT NULL,
  `TicketID` int(6) NOT NULL,
  `SeatNumber` int(3) NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Member_Account`
--

CREATE TABLE `Member_Account` (
  `CustomerID` int(5) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Member_Account`
--

INSERT INTO `Member_Account` (`CustomerID`, `First_Name`, `Last_Name`, `Username`, `Password`) VALUES
(1, 'Steve', 'Khanna', 'steve.khanna', 'password'),
(63, 'Test1', 'test1Lname', 'test1', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `Movie`
--

CREATE TABLE `Movie` (
  `Name` varchar(255) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Duration` time NOT NULL,
  `Genre` varchar(15) NOT NULL,
  `ReleaseDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Movie`
--

INSERT INTO `Movie` (`Name`, `StartDate`, `EndDate`, `Duration`, `Genre`, `ReleaseDate`) VALUES
('hey', '2019-01-01', '2019-01-01', '03:00:00', 'Action', '2018-01-01'),
('Movie 1', '2018-12-01', '2108-12-20', '30:00:00', 'Action', '2018-12-01'),
('Movie 2', '2019-01-01', '2019-01-01', '01:00:00', 'Action', '2019-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

CREATE TABLE `Payment` (
  `paymentID` int(6) NOT NULL,
  `PaymentMethod` varchar(255) NOT NULL,
  `AmountPaid` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Payment`
--

INSERT INTO `Payment` (`paymentID`, `PaymentMethod`, `AmountPaid`) VALUES
(1, 'VISA', 25),
(2, 'visa', 60),
(3, 'visa', 60),
(4, 'visa', 60),
(5, 'visa', 60),
(6, 'visa', 60),
(7, 'visa', 60),
(8, 'visa', 60),
(9, 'visa', 60),
(10, 'visa', 60),
(11, 'visa', 60),
(12, 'visa', 60),
(13, 'visa', 60),
(14, 'visa', 60),
(15, 'visa', 60),
(16, 'visa', 60),
(17, 'visa', 60),
(18, 'visa', 60),
(19, 'visa', 60),
(20, 'visa', 60),
(21, 'visa', 60),
(22, 'visa', 60),
(23, 'visa', 60),
(24, 'visa', 60),
(25, 'visa', 60),
(26, 'visa', 60),
(27, 'visa', 60),
(28, 'visa', 60),
(29, 'debit', 60),
(30, 'debit', 60),
(31, 'debit', 60),
(32, 'debit', 60),
(33, 'debit', 60),
(34, 'debit', 60),
(35, 'debit', 60),
(36, 'debit', 60),
(37, 'visa', 30),
(38, 'visa', 30),
(39, 'visa', 50),
(40, 'visa', 50),
(41, 'visa', 50),
(42, 'visa', 50),
(43, 'visa', 50),
(44, 'visa', 50),
(45, 'visa', 50),
(46, 'visa', 50),
(47, 'visa', 50),
(48, 'visa', 50),
(49, 'debit', 40),
(50, 'visa', 70),
(51, 'visa', 70),
(52, 'debit', 70),
(53, 'visa', 60),
(54, 'visa', 60),
(55, 'visa', 80),
(56, 'visa', 80),
(57, 'visa', 50),
(58, 'visa', 50),
(59, 'visa', 130),
(60, 'visa', 60),
(61, 'visa', 60),
(62, 'visa', 60),
(63, 'visa', 60),
(64, 'visa', 70),
(65, 'visa', 70),
(66, 'visa', 30),
(67, 'visa', 40),
(68, 'visa', 50),
(69, 'visa', 50),
(70, 'visa', 50),
(71, 'visa', 50),
(72, 'visa', 50),
(73, 'visa', 50),
(74, 'visa', 50),
(75, 'visa', 50),
(76, 'visa', 50),
(77, 'visa', 50),
(78, 'visa', 90),
(79, 'visa', 50),
(80, 'visa', 50),
(81, 'visa', 50),
(82, 'visa', 50),
(83, 'visa', 50),
(84, 'visa', 50),
(85, 'visa', 50),
(86, 'visa', 50),
(87, 'visa', 50),
(88, 'visa', 70),
(89, 'visa', 50),
(90, 'visa', 90),
(91, 'visa', 20),
(92, 'visa', 10),
(93, 'visa', 10),
(94, 'visa', 20),
(95, 'visa', 20),
(96, 'visa', 20);

-- --------------------------------------------------------

--
-- Table structure for table `Renting`
--

CREATE TABLE `Renting` (
  `ServiceID` int(10) NOT NULL,
  `Quantity_of_Slots` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Renting_Reservation`
--

CREATE TABLE `Renting_Reservation` (
  `ServiceID` int(10) NOT NULL,
  `Date` date NOT NULL,
  `TheatreID` int(2) NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Seats`
--

CREATE TABLE `Seats` (
  `TheatreID` int(2) NOT NULL,
  `SeatNumber` int(3) NOT NULL,
  `IsTaken` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Seats`
--

INSERT INTO `Seats` (`TheatreID`, `SeatNumber`, `IsTaken`) VALUES
(4, 1, 0),
(4, 2, 0),
(4, 3, 0),
(4, 4, 0),
(4, 5, 0),
(4, 6, 0),
(4, 7, 0),
(4, 8, 0),
(4, 9, 0),
(4, 10, 0),
(4, 11, 0),
(4, 12, 0),
(4, 13, 0),
(4, 14, 0),
(4, 15, 0),
(4, 16, 0),
(4, 17, 0),
(4, 18, 0),
(4, 19, 0),
(4, 20, 0),
(4, 21, 0),
(4, 22, 0),
(4, 23, 0),
(4, 24, 0),
(4, 25, 0),
(4, 26, 0),
(4, 27, 0),
(4, 28, 0),
(4, 29, 0),
(4, 30, 0),
(4, 31, 0),
(4, 32, 0),
(4, 33, 0),
(4, 34, 0),
(4, 35, 0),
(4, 36, 0),
(4, 37, 0),
(4, 38, 0),
(4, 39, 0),
(4, 40, 0),
(4, 41, 0),
(4, 42, 0),
(4, 43, 0),
(4, 44, 0),
(4, 45, 0),
(4, 46, 0),
(4, 47, 0),
(4, 48, 0),
(4, 49, 0),
(4, 50, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Service`
--

CREATE TABLE `Service` (
  `ServiceID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Service`
--

INSERT INTO `Service` (`ServiceID`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Table structure for table `Service_Payment`
--

CREATE TABLE `Service_Payment` (
  `ServiceID` int(10) NOT NULL,
  `PaymentID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Service_Sales`
--

CREATE TABLE `Service_Sales` (
  `ServiceID` int(10) NOT NULL,
  `CustomerID` int(5) NOT NULL,
  `Quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Snacks`
--

CREATE TABLE `Snacks` (
  `ServiceID` int(10) NOT NULL,
  `Quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Snacks`
--

INSERT INTO `Snacks` (`ServiceID`, `Quantity`) VALUES
(2, 200),
(3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `Theatre`
--

CREATE TABLE `Theatre` (
  `TheatreID` int(2) NOT NULL,
  `Capacity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Theatre`
--

INSERT INTO `Theatre` (`TheatreID`, `Capacity`) VALUES
(4, 50);

-- --------------------------------------------------------

--
-- Table structure for table `Ticket`
--

CREATE TABLE `Ticket` (
  `TicketID` int(6) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Ticket`
--

INSERT INTO `Ticket` (`TicketID`, `Price`) VALUES
(1, 10),
(2, 10),
(3, 10),
(4, 10),
(5, 10),
(6, 10),
(7, 10),
(8, 10),
(9, 10),
(10, 10),
(11, 10),
(12, 10),
(13, 10),
(14, 10),
(15, 10),
(16, 10),
(17, 10),
(18, 10),
(19, 10),
(20, 10),
(21, 10),
(22, 10),
(23, 10),
(24, 10),
(25, 10),
(26, 10),
(27, 10),
(28, 10),
(29, 10),
(30, 10),
(31, 10),
(32, 10),
(33, 10),
(34, 10),
(35, 10),
(36, 10),
(37, 10),
(38, 10),
(39, 10),
(40, 10),
(41, 10),
(42, 10),
(43, 10),
(44, 10),
(45, 10),
(46, 10),
(47, 10),
(48, 10),
(49, 10),
(50, 10),
(51, 10),
(52, 10),
(53, 10),
(54, 10),
(55, 10),
(56, 10),
(57, 10),
(58, 10),
(59, 10),
(60, 10),
(61, 10),
(62, 10),
(63, 10),
(64, 10),
(65, 10),
(66, 10),
(67, 10),
(68, 10),
(69, 10),
(70, 10),
(71, 10),
(72, 10),
(73, 10),
(74, 10),
(75, 10),
(76, 10),
(77, 10),
(78, 10),
(79, 10),
(80, 10),
(81, 10),
(82, 10),
(83, 10),
(84, 10),
(85, 10),
(86, 10),
(87, 10),
(88, 10),
(89, 10),
(90, 10),
(91, 10),
(92, 10),
(93, 10),
(94, 10),
(95, 10),
(96, 10),
(97, 10),
(98, 10),
(99, 10),
(100, 10),
(101, 10),
(102, 10),
(103, 10),
(104, 10),
(105, 10),
(106, 10),
(107, 10),
(108, 10),
(109, 10),
(110, 10),
(111, 10),
(112, 10),
(113, 10),
(114, 10),
(115, 10),
(116, 10),
(117, 10),
(118, 10),
(119, 10),
(120, 10),
(121, 10),
(122, 10),
(123, 10),
(124, 10),
(125, 10),
(126, 10),
(127, 10),
(128, 10),
(129, 10),
(130, 10),
(131, 10),
(132, 10),
(133, 10),
(134, 10),
(135, 10),
(136, 10),
(137, 10),
(138, 10),
(139, 10),
(140, 10),
(141, 10),
(142, 10),
(143, 10),
(144, 10),
(145, 10),
(146, 10),
(147, 10),
(148, 10),
(149, 10),
(150, 10),
(151, 10),
(152, 10),
(153, 10),
(154, 10),
(155, 10),
(156, 10),
(157, 10),
(158, 10),
(159, 10),
(160, 10),
(161, 10),
(162, 10),
(163, 10),
(164, 10),
(165, 10),
(166, 10),
(167, 10),
(168, 10),
(169, 10),
(170, 10),
(171, 10),
(172, 10),
(173, 10),
(174, 10),
(175, 10),
(176, 10),
(177, 10),
(178, 10),
(179, 10),
(180, 10),
(181, 10),
(182, 10),
(183, 10),
(184, 10),
(185, 10),
(186, 10),
(187, 10),
(188, 10),
(189, 10),
(190, 10),
(191, 10),
(192, 10),
(193, 10),
(194, 10),
(195, 10),
(196, 10),
(197, 10),
(198, 10),
(199, 10),
(200, 10),
(201, 10),
(202, 10),
(203, 10),
(204, 10),
(205, 10),
(206, 10),
(207, 10),
(208, 10),
(209, 10),
(210, 10),
(211, 10),
(212, 10),
(213, 10),
(214, 10),
(215, 10),
(216, 10),
(217, 10),
(218, 10),
(219, 10),
(220, 10),
(221, 10),
(222, 10),
(223, 10),
(224, 10),
(225, 10),
(226, 10),
(227, 10),
(228, 10),
(229, 10),
(230, 10),
(231, 10),
(232, 10),
(233, 10),
(234, 10),
(235, 10),
(236, 10),
(237, 10),
(238, 10),
(239, 10),
(240, 10),
(241, 10),
(242, 10),
(243, 10),
(244, 10),
(245, 10),
(246, 10),
(247, 10),
(248, 10),
(249, 10),
(250, 10),
(251, 10),
(252, 10),
(253, 10),
(254, 10),
(255, 10),
(256, 10),
(257, 10),
(258, 10),
(259, 10),
(260, 10),
(261, 10),
(262, 10),
(263, 10),
(264, 10),
(265, 10),
(266, 10),
(267, 10),
(268, 10),
(269, 10),
(270, 10),
(271, 10),
(272, 10),
(273, 10),
(274, 10),
(275, 10),
(276, 10),
(277, 10),
(278, 10),
(279, 10),
(280, 10),
(281, 10),
(282, 10),
(283, 10),
(284, 10),
(285, 10),
(286, 10),
(287, 10),
(288, 10),
(289, 10),
(290, 10),
(291, 10),
(292, 10),
(293, 10),
(294, 10),
(295, 10),
(296, 10),
(297, 10),
(298, 10),
(299, 10),
(300, 10),
(301, 10),
(302, 10),
(303, 10),
(304, 10),
(305, 10),
(306, 10),
(307, 10),
(308, 10),
(309, 10),
(310, 10),
(311, 10),
(312, 10),
(313, 10),
(314, 10),
(315, 10),
(316, 10),
(317, 10),
(318, 10),
(319, 10),
(320, 10),
(321, 10),
(322, 10),
(323, 10),
(324, 10),
(325, 10),
(326, 10),
(327, 10),
(328, 10),
(329, 10),
(330, 10),
(331, 10),
(332, 10),
(333, 10),
(334, 10),
(335, 10),
(336, 10),
(337, 10),
(338, 10),
(339, 10),
(340, 10),
(341, 10),
(342, 10),
(343, 10),
(344, 10),
(345, 10),
(346, 10),
(347, 10),
(348, 10),
(349, 10),
(350, 10),
(351, 10),
(352, 10),
(353, 10),
(354, 10),
(355, 10),
(356, 10),
(357, 10),
(358, 10),
(359, 10),
(360, 10),
(361, 10),
(362, 10),
(363, 10),
(364, 10),
(365, 10),
(366, 10),
(367, 10),
(368, 10),
(369, 10),
(370, 10),
(371, 10),
(372, 10),
(373, 10),
(374, 10),
(375, 10),
(376, 10),
(377, 10),
(378, 10),
(379, 10),
(380, 10),
(381, 10),
(382, 10),
(383, 10),
(384, 10),
(385, 10),
(386, 10),
(387, 10),
(388, 10),
(389, 10),
(390, 10),
(391, 10),
(392, 10),
(393, 10),
(394, 10),
(395, 10);

-- --------------------------------------------------------

--
-- Table structure for table `Ticket_Payment`
--

CREATE TABLE `Ticket_Payment` (
  `TicketID` int(6) NOT NULL,
  `PaymentID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Ticket_Payment`
--

INSERT INTO `Ticket_Payment` (`TicketID`, `PaymentID`) VALUES
(22, 10),
(23, 10),
(24, 10),
(25, 10),
(26, 10),
(27, 10),
(28, 11),
(29, 11),
(30, 11),
(31, 11),
(32, 11),
(33, 11),
(34, 12),
(35, 12),
(36, 12),
(37, 12),
(38, 12),
(39, 12),
(40, 13),
(41, 13),
(42, 13),
(43, 13),
(44, 13),
(45, 13),
(46, 14),
(47, 14),
(48, 14),
(49, 14),
(50, 14),
(51, 14),
(52, 15),
(53, 15),
(54, 15),
(55, 15),
(56, 15),
(57, 15),
(58, 16),
(59, 16),
(60, 16),
(61, 16),
(62, 16),
(63, 16),
(64, 17),
(65, 17),
(66, 17),
(67, 17),
(68, 17),
(69, 17),
(70, 18),
(71, 18),
(72, 18),
(73, 18),
(74, 18),
(75, 18),
(76, 19),
(77, 19),
(78, 19),
(79, 19),
(80, 19),
(81, 19),
(82, 20),
(83, 20),
(84, 20),
(85, 20),
(86, 20),
(87, 20),
(88, 21),
(89, 21),
(90, 21),
(91, 21),
(92, 21),
(93, 21),
(94, 22),
(95, 22),
(96, 22),
(97, 22),
(98, 22),
(99, 22),
(100, 23),
(101, 23),
(102, 23),
(103, 23),
(104, 23),
(105, 23),
(106, 24),
(107, 24),
(108, 24),
(109, 24),
(110, 24),
(111, 24),
(112, 25),
(113, 25),
(114, 25),
(115, 25),
(116, 25),
(117, 25),
(118, 26),
(119, 26),
(120, 26),
(121, 26),
(122, 26),
(123, 26),
(124, 27),
(125, 27),
(126, 27),
(127, 27),
(128, 27),
(129, 27),
(130, 28),
(131, 28),
(132, 28),
(133, 28),
(134, 28),
(135, 28),
(136, 29),
(137, 29),
(138, 29),
(139, 29),
(140, 29),
(141, 29),
(142, 30),
(143, 30),
(144, 30),
(145, 30),
(146, 30),
(147, 30),
(148, 31),
(149, 31),
(150, 31),
(151, 31),
(152, 31),
(153, 31),
(154, 32),
(155, 32),
(156, 32),
(157, 32),
(158, 32),
(159, 32),
(160, 33),
(161, 33),
(162, 33),
(163, 33),
(164, 33),
(165, 33),
(166, 34),
(167, 34),
(168, 34),
(169, 34),
(170, 34),
(171, 34),
(172, 35),
(173, 35),
(174, 35),
(175, 35),
(176, 35),
(177, 35),
(178, 36),
(179, 36),
(180, 36),
(181, 36),
(182, 36),
(183, 36),
(184, 37),
(185, 37),
(186, 37),
(187, 38),
(188, 38),
(189, 38),
(190, 39),
(191, 39),
(192, 39),
(193, 39),
(194, 39),
(195, 40),
(196, 40),
(197, 40),
(198, 40),
(199, 40),
(200, 41),
(201, 41),
(202, 41),
(203, 41),
(204, 41),
(205, 42),
(206, 42),
(207, 42),
(208, 42),
(209, 42),
(210, 43),
(211, 43),
(212, 43),
(213, 43),
(214, 43),
(215, 44),
(216, 44),
(217, 44),
(218, 44),
(219, 44),
(220, 45),
(221, 45),
(222, 45),
(223, 45),
(224, 45),
(225, 46),
(226, 46),
(227, 46),
(228, 46),
(229, 46),
(230, 47),
(231, 47),
(232, 47),
(233, 47),
(234, 47),
(235, 48),
(236, 48),
(237, 48),
(238, 48),
(239, 48),
(240, 49),
(241, 49),
(242, 49),
(243, 49),
(244, 50),
(245, 50),
(246, 50),
(247, 50),
(248, 50),
(249, 50),
(250, 50),
(251, 51),
(252, 51),
(253, 51),
(254, 51),
(255, 51),
(256, 51),
(257, 51),
(258, 52),
(259, 52),
(260, 52),
(261, 52),
(262, 52),
(263, 52),
(264, 52),
(265, 53),
(266, 53),
(267, 53),
(268, 53),
(269, 53),
(270, 53),
(271, 54),
(272, 54),
(273, 54),
(274, 54),
(275, 54),
(276, 54),
(277, 55),
(278, 55),
(279, 55),
(280, 55),
(281, 55),
(282, 55),
(283, 55),
(284, 55),
(285, 56),
(286, 56),
(287, 56),
(288, 56),
(289, 56),
(290, 56),
(291, 56),
(292, 56),
(293, 57),
(294, 57),
(295, 57),
(296, 57),
(297, 57),
(298, 58),
(299, 58),
(300, 58),
(301, 58),
(302, 58),
(303, 59),
(304, 59),
(305, 59),
(306, 59),
(307, 59),
(308, 59),
(309, 59),
(310, 59),
(311, 59),
(312, 59),
(313, 59),
(314, 59),
(315, 59),
(316, 60),
(317, 61),
(318, 62),
(319, 63),
(320, 64),
(321, 65),
(322, 66),
(323, 67),
(324, 68),
(325, 69),
(326, 70),
(327, 71),
(328, 72),
(329, 73),
(330, 74),
(331, 75),
(332, 76),
(333, 77),
(334, 78),
(335, 79),
(336, 80),
(337, 81),
(338, 82),
(339, 82),
(340, 83),
(341, 83),
(342, 83),
(343, 83),
(344, 83),
(345, 84),
(346, 84),
(347, 84),
(348, 84),
(349, 84),
(350, 85),
(351, 85),
(352, 85),
(353, 85),
(354, 85),
(355, 86),
(356, 86),
(357, 86),
(358, 86),
(359, 86),
(360, 87),
(361, 87),
(362, 87),
(363, 87),
(364, 87),
(365, 88),
(366, 88),
(367, 88),
(368, 88),
(369, 88),
(370, 88),
(371, 88),
(372, 89),
(373, 89),
(374, 89),
(375, 89),
(376, 89),
(377, 90),
(378, 90),
(379, 90),
(380, 90),
(381, 90),
(382, 90),
(383, 90),
(384, 90),
(385, 90),
(386, 91),
(387, 91),
(388, 92),
(389, 93),
(390, 94),
(391, 94),
(392, 95),
(393, 95),
(394, 96),
(395, 96);

-- --------------------------------------------------------

--
-- Table structure for table `Timeslot`
--

CREATE TABLE `Timeslot` (
  `Date` date NOT NULL,
  `ServiceID` int(10) DEFAULT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Timeslot`
--

INSERT INTO `Timeslot` (`Date`, `ServiceID`, `StartTime`, `EndTime`) VALUES
('2018-12-06', NULL, '18:00:00', '21:00:00'),
('2019-01-01', NULL, '18:00:00', '19:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin_Account`
--
ALTER TABLE `Admin_Account`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `Are_Assigned`
--
ALTER TABLE `Are_Assigned`
  ADD PRIMARY KEY (`Movie_Name`,`TheatreID`,`Date`,`StartTime`,`EndTime`),
  ADD KEY `Movie_Name` (`Movie_Name`),
  ADD KEY `TheatreID` (`TheatreID`),
  ADD KEY `Date` (`Date`,`StartTime`,`EndTime`),
  ADD KEY `AreAssigned_StartTime` (`StartTime`),
  ADD KEY `AreAssigned_EndTime` (`EndTime`);

--
-- Indexes for table `Buy_Tickets`
--
ALTER TABLE `Buy_Tickets`
  ADD PRIMARY KEY (`TicketID`,`CustomerID`),
  ADD KEY `TicketID` (`TicketID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `For_Movie_Ticket`
--
ALTER TABLE `For_Movie_Ticket`
  ADD PRIMARY KEY (`Movie_Name`,`TheatreID`,`Date`,`TicketID`,`SeatNumber`,`StartTime`,`EndTime`),
  ADD KEY `TheatreID` (`TheatreID`),
  ADD KEY `Date` (`Date`),
  ADD KEY `TicketID` (`TicketID`),
  ADD KEY `SeatNumber` (`SeatNumber`),
  ADD KEY `StartTimeFinal` (`StartTime`),
  ADD KEY `EndTimeFinal` (`EndTime`);

--
-- Indexes for table `Member_Account`
--
ALTER TABLE `Member_Account`
  ADD PRIMARY KEY (`CustomerID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `Movie`
--
ALTER TABLE `Movie`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `Renting`
--
ALTER TABLE `Renting`
  ADD PRIMARY KEY (`ServiceID`),
  ADD KEY `ServiceID` (`ServiceID`);

--
-- Indexes for table `Renting_Reservation`
--
ALTER TABLE `Renting_Reservation`
  ADD PRIMARY KEY (`ServiceID`,`Date`,`TheatreID`,`StartTime`,`EndTime`) USING BTREE,
  ADD KEY `ServiceID` (`ServiceID`),
  ADD KEY `Date` (`Date`),
  ADD KEY `TheatreID` (`TheatreID`),
  ADD KEY `StartTimeFinal` (`StartTime`),
  ADD KEY `EndTimeFinal` (`EndTime`);

--
-- Indexes for table `Seats`
--
ALTER TABLE `Seats`
  ADD PRIMARY KEY (`TheatreID`,`SeatNumber`),
  ADD KEY `TheatreID` (`TheatreID`),
  ADD KEY `SeatNumber` (`SeatNumber`) USING BTREE;

--
-- Indexes for table `Service`
--
ALTER TABLE `Service`
  ADD PRIMARY KEY (`ServiceID`);

--
-- Indexes for table `Service_Payment`
--
ALTER TABLE `Service_Payment`
  ADD PRIMARY KEY (`ServiceID`,`PaymentID`),
  ADD KEY `ServiceID` (`ServiceID`,`PaymentID`),
  ADD KEY `ServicePayment_PaymentID` (`PaymentID`);

--
-- Indexes for table `Service_Sales`
--
ALTER TABLE `Service_Sales`
  ADD PRIMARY KEY (`ServiceID`,`CustomerID`),
  ADD KEY `ServiceID` (`ServiceID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `Snacks`
--
ALTER TABLE `Snacks`
  ADD PRIMARY KEY (`ServiceID`),
  ADD KEY `Snacks_ServiceID` (`ServiceID`);

--
-- Indexes for table `Theatre`
--
ALTER TABLE `Theatre`
  ADD PRIMARY KEY (`TheatreID`);

--
-- Indexes for table `Ticket`
--
ALTER TABLE `Ticket`
  ADD PRIMARY KEY (`TicketID`);

--
-- Indexes for table `Ticket_Payment`
--
ALTER TABLE `Ticket_Payment`
  ADD PRIMARY KEY (`TicketID`,`PaymentID`),
  ADD KEY `TicketID` (`TicketID`),
  ADD KEY `PaymentID` (`PaymentID`);

--
-- Indexes for table `Timeslot`
--
ALTER TABLE `Timeslot`
  ADD PRIMARY KEY (`Date`,`StartTime`,`EndTime`),
  ADD KEY `ServiceID` (`ServiceID`),
  ADD KEY `StartTimeFinal` (`StartTime`),
  ADD KEY `EndTimeFinal` (`EndTime`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin_Account`
--
ALTER TABLE `Admin_Account`
  MODIFY `AdminID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Are_Assigned`
--
ALTER TABLE `Are_Assigned`
  MODIFY `TheatreID` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `CustomerID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `Payment`
--
ALTER TABLE `Payment`
  MODIFY `paymentID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `Service`
--
ALTER TABLE `Service`
  MODIFY `ServiceID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Theatre`
--
ALTER TABLE `Theatre`
  MODIFY `TheatreID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Ticket`
--
ALTER TABLE `Ticket`
  MODIFY `TicketID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=396;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Are_Assigned`
--
ALTER TABLE `Are_Assigned`
  ADD CONSTRAINT `AreAssigned_Date` FOREIGN KEY (`Date`) REFERENCES `Timeslot` (`Date`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `AreAssigned_EndTime` FOREIGN KEY (`EndTime`) REFERENCES `Timeslot` (`EndTime`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `AreAssigned_MovieName` FOREIGN KEY (`Movie_Name`) REFERENCES `Movie` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `AreAssigned_StartTime` FOREIGN KEY (`StartTime`) REFERENCES `Timeslot` (`StartTime`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `AreAssigned_TheatreID` FOREIGN KEY (`TheatreID`) REFERENCES `Theatre` (`TheatreID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Buy_Tickets`
--
ALTER TABLE `Buy_Tickets`
  ADD CONSTRAINT `BuyTickets_TicketID` FOREIGN KEY (`TicketID`) REFERENCES `Ticket` (`TicketID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `For_Movie_Ticket`
--
ALTER TABLE `For_Movie_Ticket`
  ADD CONSTRAINT `FMT_Date` FOREIGN KEY (`Date`) REFERENCES `Timeslot` (`Date`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FMT_EndTime` FOREIGN KEY (`EndTime`) REFERENCES `Timeslot` (`EndTime`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FMT_SeatNumber` FOREIGN KEY (`SeatNumber`) REFERENCES `Seats` (`SeatNumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FMT_StartTime` FOREIGN KEY (`StartTime`) REFERENCES `Timeslot` (`StartTime`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FMT_TheatreID` FOREIGN KEY (`TheatreID`) REFERENCES `Theatre` (`TheatreID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Member_Account`
--
ALTER TABLE `Member_Account`
  ADD CONSTRAINT `CustomerID` FOREIGN KEY (`CustomerID`) REFERENCES `Customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Renting`
--
ALTER TABLE `Renting`
  ADD CONSTRAINT `Renting_ServiceID` FOREIGN KEY (`ServiceID`) REFERENCES `Service` (`ServiceID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Renting_Reservation`
--
ALTER TABLE `Renting_Reservation`
  ADD CONSTRAINT `RentingReservation_Date` FOREIGN KEY (`Date`) REFERENCES `Timeslot` (`Date`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `RentingReservation_EndTime` FOREIGN KEY (`EndTime`) REFERENCES `Timeslot` (`EndTime`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `RentingReservation_ServiceID` FOREIGN KEY (`ServiceID`) REFERENCES `Service` (`ServiceID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `RentingReservation_StartTime` FOREIGN KEY (`StartTime`) REFERENCES `Timeslot` (`StartTime`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `RentingReservation_TheatreID` FOREIGN KEY (`TheatreID`) REFERENCES `Theatre` (`TheatreID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Seats`
--
ALTER TABLE `Seats`
  ADD CONSTRAINT `Seat_TheatreID` FOREIGN KEY (`TheatreID`) REFERENCES `Theatre` (`TheatreID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Service_Payment`
--
ALTER TABLE `Service_Payment`
  ADD CONSTRAINT `ServicePayement_ServiceID` FOREIGN KEY (`ServiceID`) REFERENCES `Service` (`ServiceID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ServicePayment_PaymentID` FOREIGN KEY (`PaymentID`) REFERENCES `Payment` (`paymentID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Service_Sales`
--
ALTER TABLE `Service_Sales`
  ADD CONSTRAINT `ServiceSales_CustomerID` FOREIGN KEY (`CustomerID`) REFERENCES `Customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ServiceSales_ServiceID` FOREIGN KEY (`ServiceID`) REFERENCES `Service` (`ServiceID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Snacks`
--
ALTER TABLE `Snacks`
  ADD CONSTRAINT `Snack_ServiceID` FOREIGN KEY (`ServiceID`) REFERENCES `Service` (`ServiceID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Ticket_Payment`
--
ALTER TABLE `Ticket_Payment`
  ADD CONSTRAINT `TicketPayment_PaymentID` FOREIGN KEY (`PaymentID`) REFERENCES `Payment` (`paymentID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TicketPayment_TicketID` FOREIGN KEY (`TicketID`) REFERENCES `Ticket` (`TicketID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Timeslot`
--
ALTER TABLE `Timeslot`
  ADD CONSTRAINT `Timeslot_ServiceID` FOREIGN KEY (`ServiceID`) REFERENCES `Service` (`ServiceID`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
