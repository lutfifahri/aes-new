-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 04:57 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hybrid_crypto`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id_file` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `file_name_source` varchar(255) DEFAULT NULL,
  `file_name_finish` varchar(255) DEFAULT NULL,
  `file_url` varchar(255) DEFAULT NULL,
  `file_size` float DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL,
  `tgl_upload` timestamp NULL DEFAULT NULL,
  `status` enum('1','2') DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id_file`, `username`, `file_name_source`, `file_name_finish`, `file_url`, `file_size`, `password`, `tgl_upload`, `status`, `keterangan`) VALUES
(1, 'admin', '48578-testaplikasi.txt', '20665-testaplikasi.rda', 'file_encrypt/20665-testaplikasi.rda', 0.0205078, '827ccb0eea8a706c', '2024-06-08 06:55:34', '2', 'ini adalah plaintext untuk coba aplikasi'),
(2, 'admin', '45575-testaplikasi.txt', '18169-testaplikasi.rda', 'file_encrypt/18169-testaplikasi.rda', 0.0205078, '827ccb0eea8a706c', '2024-06-08 06:56:49', '1', 'ini adalah coba aplikasi untuk skripsi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `job_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_activity` datetime NOT NULL,
  `status` enum('1','2') NOT NULL,
  `Tipe` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `job_title`, `job_date`, `last_activity`, `status`, `Tipe`) VALUES
(1, 'ADMIN', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', 'ADMIN', '2024-06-19 14:56:34', '2024-06-19 21:56:34', '', ''),
(2, 'DOSEN', '827ccb0eea8a706c4c34a16891f84e7b', 'TEST', 'DOSEN', '2024-06-07 15:59:54', '2024-06-07 22:59:54', '1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
