-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 01:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id_mh` int(11) NOT NULL,
  `id_sv` int(11) NOT NULL,
  `point` float(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id_mh`, `id_sv`, `point`) VALUES
(4, 51800780, 6);

-- --------------------------------------------------------

--
-- Table structure for table `registermrloc`
--

CREATE TABLE `registermrloc` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `score` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registermrloc`
--

INSERT INTO `registermrloc` (`id`, `student_id`, `subject_id`, `score`) VALUES
(2, 51800781, 3, 7),
(6, 51800784, 4, 10),
(7, 51800786, 4, 8),
(8, 51800780, 12, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `birthday`, `gender`) VALUES
(51800780, 'Nguyễn Quốc Huy', '2000-05-18', 'nam'),
(51800781, 'Nguyễn Lương Lẹo ', '2022-07-30', 'nam'),
(51800784, 'Tom Thông', '2011-11-11', 'nam'),
(51800785, 'Nguyễn Văn Ba', '2022-08-01', 'nam'),
(51800786, 'Nguyễn Văn Cu', '2022-08-01', 'nam'),
(51800787, 'Nguyễn Văn Du', '2022-05-18', 'khác');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number_of_credit` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `number_of_credit`) VALUES
(3, 'Hóa', 3),
(4, 'Tin', 2),
(11, 'PHP', 3),
(12, 'Laravel', 4),
(13, 'Nodejs', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id_sv`,`id_mh`),
  ADD KEY `id_mh` (`id_mh`);

--
-- Indexes for table `registermrloc`
--
ALTER TABLE `registermrloc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk1` (`student_id`),
  ADD KEY `fk2` (`subject_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registermrloc`
--
ALTER TABLE `registermrloc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51800794;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`id_sv`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `register_ibfk_2` FOREIGN KEY (`id_mh`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registermrloc`
--
ALTER TABLE `registermrloc`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `fk2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
