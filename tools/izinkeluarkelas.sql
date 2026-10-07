-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 06, 2026 at 01:24 AM
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
-- Database: `izinkeluarkelas`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `idkelas` int NOT NULL,
  `namakelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`idkelas`, `namakelas`) VALUES
(1, 'XI RPL 1'),
(2, 'XI RPL 2'),
(3, 'XI RPL 3');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `idpengajuan` int NOT NULL,
  `idsiswa` int NOT NULL,
  `iduser` int NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `waktukeluar` datetime NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`idpengajuan`, `idsiswa`, `iduser`, `alasan`, `waktukeluar`, `status`) VALUES
(4, 1, 1, 'Ke UKS', '2026-10-05 08:00:00', 'Menunggu'),
(5, 2, 1, 'Ke toilet', '2026-10-05 08:30:00', 'Disetujui'),
(6, 3, 1, 'Ke kantin', '2026-10-05 09:00:00', 'Menunggu'),
(7, 1, 1, 'Ke UKS', '2026-10-05 08:00:00', 'Menunggu'),
(8, 2, 1, 'Ke toilet', '2026-10-05 08:30:00', 'Disetujui'),
(9, 3, 1, 'Ke kantin', '2026-10-05 09:00:00', 'Menunggu'),
(10, 1, 1, 'Ke UKS', '2026-10-05 08:00:00', 'Menunggu'),
(11, 2, 1, 'Ke toilet', '2026-10-05 08:30:00', 'Disetujui'),
(12, 3, 1, 'Ke kantin', '2026-10-05 09:00:00', 'Menunggu'),
(13, 1, 1, 'Ke UKS', '2026-10-05 08:00:00', 'Menunggu'),
(14, 2, 1, 'Ke toilet', '2026-10-05 08:30:00', 'Disetujui'),
(15, 3, 1, 'Ke kantin', '2026-10-05 09:00:00', 'Menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `idsiswa` int NOT NULL,
  `iduser` int NOT NULL,
  `idkelas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`idsiswa`, `iduser`, `idkelas`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 1, 1),
(5, 2, 2),
(6, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL,
  `nohp` char(14) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nama`, `username`, `password`, `role`, `nohp`, `alamat`, `foto`) VALUES
(1, 'Ahmadi Muslim', 'ahmadiuser1', '123456', 'guru', '081234567890', 'Karang Baru', 'ahmadi.jpg'),
(2, 'Ahmadi Muslim', 'ahmadiuser2', '123456', 'guru', '081234567891', 'Karang Baru', 'ahmadi2.jpg'),
(3, 'Tasya Aulia Putri', 'tasyauser1', '123456', 'siswa', '081234567892', 'Karang Baru Aceh', 'tasya.jpg'),
(4, 'Ahmadi Muslim', 'ahmadiuser1', '123456', 'guru', '081234567890', 'Karang Baru', 'ahmadi.jpg'),
(5, 'Ahmadi Muslim', 'ahmadiuser2', '123456', 'guru', '081234567891', 'Karang Baru', 'ahmadi2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`idpengajuan`),
  ADD KEY `idsiswa` (`idsiswa`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`idsiswa`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idkelas` (`idkelas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idkelas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `idpengajuan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `idsiswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `pengajuan_ibfk_1` FOREIGN KEY (`idsiswa`) REFERENCES `siswa` (`idsiswa`),
  ADD CONSTRAINT `pengajuan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`),
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`idkelas`) REFERENCES `kelas` (`idkelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
