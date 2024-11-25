-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 25, 2024 at 07:22 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasien`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `idDokter` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nmDokter` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `jk` char(15) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`idDokter`, `nmDokter`, `jk`, `alamat`) VALUES
('D001', 'Dr. Sarah Johnson', 'Female', '123 Elm Street'),
('D002', 'Dr. Michael Smith', 'Male', '456 Oak Avenue'),
('D003', 'Dr. Emily Davis', 'Female', '789 Pine Road'),
('D004', 'Dr. James Brown', 'Male', '321 Maple Lane'),
('D005', 'Dr. Anna Taylor', 'Female', '654 Cedar Court');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `idKunjungan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `idPasien` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `idDokter` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `alasan` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`idKunjungan`, `idPasien`, `idDokter`, `alasan`, `waktu`) VALUES
('K001', 'P001', 'D001', 'Headache and dizziness', '2024-11-18 09:30:00'),
('K002', 'P002', 'D002', 'Fever and cough', '2024-11-18 10:00:00'),
('K003', 'P003', 'D003', 'Back pain', '2024-11-18 10:45:00'),
('K004', 'P004', 'D004', 'Skin rash', '2024-11-18 11:15:00'),
('K005', 'P005', 'D005', 'Routine check-up', '2024-11-18 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `idPasien` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nmPasien` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `jk` char(15) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`idPasien`, `nmPasien`, `jk`, `alamat`) VALUES
('P001', 'Alice Brown', 'Female', '12 Apple Street'),
('P002', 'John Doe', 'Male', '34 Banana Avenue'),
('P003', 'Sophia White', 'Female', '56 Cherry Lane'),
('P004', 'David Green', 'Male', '78 Date Road'),
('P005', 'Emma Black', 'Female', '90 Fig Court');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`idDokter`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`idKunjungan`),
  ADD KEY `idPasien` (`idPasien`),
  ADD KEY `idDokter` (`idDokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`idPasien`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD CONSTRAINT `kunjungan_ibfk_1` FOREIGN KEY (`idPasien`) REFERENCES `pasien` (`idPasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kunjungan_ibfk_2` FOREIGN KEY (`idDokter`) REFERENCES `dokter` (`idDokter`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
