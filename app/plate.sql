-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Feb 22, 2016 at 11:11 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `toxin_screening`
--

-- --------------------------------------------------------

--
-- Table structure for table `plate`
--

CREATE TABLE `plate` (
  `id` int(11) unsigned NOT NULL,
  `chemical` varchar(15) NOT NULL DEFAULT '',
  `run` int(1) NOT NULL,
  `worm_type` varchar(5) NOT NULL DEFAULT '',
  `day` int(2) NOT NULL,
  `date` date NOT NULL,
  `pharynx` varchar(48) DEFAULT NULL,
  `phototaxis` longtext,
  `thermotaxis` longtext,
  `IOL` longtext,
  `curvature` varchar(48) DEFAULT NULL,
  `eyes` varchar(48) DEFAULT NULL,
  `behavior` varchar(1) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `plateID` bigint(12) unsigned zerofill NOT NULL DEFAULT '000000000001',
  `input_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `concA` int(11) DEFAULT NULL,
  `concB` int(11) DEFAULT NULL,
  `concC` int(11) DEFAULT NULL,
  `concD` int(11) DEFAULT NULL,
  `concE` int(11) DEFAULT NULL,
  `concF` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plate`
--

INSERT INTO `plate` (`id`, `chemical`, `run`, `worm_type`, `day`, `date`, `pharynx`, `phototaxis`, `thermotaxis`, `IOL`, `curvature`, `eyes`, `behavior`, `image`, `plateID`, `input_date`, `concA`, `concB`, `concC`, `concD`, `concE`, `concF`) VALUES
(25, '1', 1, 'Full', 1, '2016-01-02', NULL, 'chemicaln_full_day_run.mat', 'thermotaxis_000000000001.mat', 'cse141lab1.pdf', NULL, NULL, NULL, NULL, 000000000001, '2016-01-03 03:34:20', 1, 2, 3, 4, 5, 6),
(35, 'one', 1, 'Full', 1, '2016-01-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000003, '2016-01-22 20:05:40', 10, 9, 8, 7, 6, 5),
(36, 'one', 1, 'Head', 1, '2016-01-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000004, '2016-01-22 20:05:40', 10, 9, 8, 7, 6, 5),
(37, 'one', 1, 'Tail', 1, '2016-01-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000005, '2016-01-22 20:05:40', 10, 9, 8, 7, 6, 5),
(38, 'two', 2, 'Full', 1, '2016-01-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000006, '2016-01-22 20:05:40', 6, 5, 10, 9, 8, 7),
(39, 'two', 2, 'Head', 1, '2016-01-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000007, '2016-01-22 20:05:40', 6, 5, 10, 9, 8, 7),
(40, 'two', 2, 'Tail', 1, '2016-01-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000008, '2016-01-22 20:05:40', 6, 5, 10, 9, 8, 7),
(44, 'test', 1, 'Full', 1, '2016-01-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000009, '2016-01-27 06:06:58', 1, 2, 3, 3, 4, 5),
(45, 'test', 1, 'Head', 1, '2016-01-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000010, '2016-01-27 06:06:58', 1, 2, 3, 3, 4, 5),
(46, 'test', 1, 'Tail', 1, '2016-01-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000011, '2016-01-27 06:06:58', 1, 2, 3, 3, 4, 5),
(47, 'no', 1, 'Full', 1, '2016-01-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000012, '2016-01-27 06:06:58', 2, 3, 4, 5, 6, 7),
(48, 'no', 1, 'Head', 1, '2016-01-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000013, '2016-01-27 06:06:58', 2, 3, 4, 5, 6, 7),
(49, 'no', 1, 'Tail', 1, '2016-01-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000014, '2016-01-27 06:06:58', 2, 3, 4, 5, 6, 7),
(50, 'Chemical B', 1, 'Full', 1, '2016-01-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000015, '2016-01-27 06:08:06', 10, 9, 8, 7, 6, 5),
(51, 'Chemical B', 1, 'Head', 1, '2016-01-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000016, '2016-01-27 06:08:06', 10, 9, 8, 7, 6, 5),
(52, 'Chemical B', 1, 'Tail', 1, '2016-01-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000017, '2016-01-27 06:08:06', 10, 9, 8, 7, 6, 5),
(53, 'Chemical B', 1, 'Full', 1, '2016-01-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000018, '2016-01-27 06:08:06', 10, 9, 8, 7, 6, 5),
(54, 'Chemical B', 1, 'Head', 1, '2016-01-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000019, '2016-01-27 06:08:06', 10, 9, 8, 7, 6, 5),
(55, 'Chemical B', 1, 'Tail', 1, '2016-01-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000020, '2016-01-27 06:08:06', 10, 9, 8, 7, 6, 5),
(56, 'Chemical A', 1, 'Full', 1, '2016-01-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000021, '2016-01-27 06:11:34', 0, 1, 2, 3, 4, 5),
(57, 'Chemical A', 1, 'Head', 1, '2016-01-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000022, '2016-01-27 06:11:34', 0, 1, 2, 3, 4, 5),
(58, 'Chemical A', 1, 'Tail', 1, '2016-01-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000023, '2016-01-27 06:11:34', 0, 1, 2, 3, 4, 5),
(59, 'Chemical B', 2, 'Full', 1, '2016-01-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000024, '2016-01-27 06:11:34', 4, 5, 0, 1, 2, 3),
(60, 'Chemical B', 2, 'Head', 1, '2016-01-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000025, '2016-01-27 06:11:34', 4, 5, 0, 1, 2, 3),
(61, 'Chemical B', 2, 'Tail', 1, '2016-01-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000026, '2016-01-27 06:11:34', 4, 5, 0, 1, 2, 3),
(62, 'chemical a', 1, 'Full', 1, '2016-02-10', '110111111111111111111111111111111111111111111111', NULL, NULL, NULL, '121111111111111111111111111111111111111111111111', '111111111111111111111111111111111111111111111121', NULL, NULL, 000000000027, '2016-02-10 20:36:43', 100, 10, 5, 4, 3, 2),
(63, 'chemical a', 1, 'Head', 1, '2016-02-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000028, '2016-02-10 20:36:43', 100, 10, 5, 4, 3, 2),
(64, 'chemical a', 1, 'Tail', 1, '2016-02-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000029, '2016-02-10 20:36:43', 100, 10, 5, 4, 3, 2),
(65, 'chemical b', 2, 'Full', 1, '2016-02-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000030, '2016-02-10 20:36:43', 3, 2, 100, 10, 5, 4),
(66, 'chemical b', 2, 'Head', 1, '2016-02-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000031, '2016-02-10 20:36:43', 3, 2, 100, 10, 5, 4),
(67, 'chemical b', 2, 'Tail', 1, '2016-02-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 000000000032, '2016-02-10 20:36:43', 3, 2, 100, 10, 5, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plate`
--
ALTER TABLE `plate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plate`
--
ALTER TABLE `plate`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;