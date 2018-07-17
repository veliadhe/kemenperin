-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 02:42 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `search`
--

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `place_id` int(10) NOT NULL,
  `place` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`place_id`, `place`, `description`) VALUES
(1, 'bogor', 'fmn mdjk ncdhvbcgvdgsh bcdhscbgdvc dbsnx jhbdc xbndbxgdyedjnwdd'),
(2, 'jakardah', 'x nmjebjsgxhebjxn ,swkljxn bvgfeghjklmnbvcxseryuijkmnhsyusb'),
(3, 'bandung', 'huhujehehegyheedbwjsj zajbzgsy');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `nama`, `alamat`) VALUES
(5, 'Azman%20Fatahillah_IPB_PKM-KC(lap%20kemajuan).pdf', 'uploads/Azman Fatahillah_IPB_PKM-KC(lap kemajuan).pdf'),
(7, 'Azman%20Fatahillah_IPB_PKM-KC(lap%20kemajuan).pdf', 'uploads/Azman Fatahillah_IPB_PKM-KC(lap kemajuan).pdf'),
(8, 'Azman%20Fatahillah_IPB_PKM-KC(lap%20kemajuan).pdf', 'uploads/Azman Fatahillah_IPB_PKM-KC(lap kemajuan).pdf.pdf'),
(9, 'Azman%20Fatahillah_IPB_PKM-KC(lap%20kemajuan).pdf', 'uploads/Azman%20Fatahillah_IPB_PKM-KC(lap%20kemajuan).pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `place_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
