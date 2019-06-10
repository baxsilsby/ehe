-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2019 at 05:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehe`
--

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `sekolah` varchar(100) NOT NULL,
  `pendidikan` enum('SD','SMP','SMA') NOT NULL,
  `kelas` tinyint(4) NOT NULL,
  `kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `idUser` int(11) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'nonaktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`id`, `nama`, `tempat`, `tanggal`, `sekolah`, `pendidikan`, `kelas`, `kelamin`, `alamat`, `foto`, `idUser`, `status`) VALUES
(1, 'Allyvio Yonim Mahardhika', 'jember', '2003-09-10', 'SMAN AMBULU', 'SMA', 2, '', 'Jember', '4A14_086.jpg', 1, 'aktif'),
(3, 'Candra', 'jember', '2008-05-15', 'SMPN AMBULU', 'SMP', 3, 'laki-laki', 'jember', '4A14_086.jpg', 2, 'nonaktif'),
(4, 'Dian Wiyoko', 'jember', '2017-12-20', 'SMAN AMBULU', 'SMA', 1, 'laki-laki', 'jember', '4A14_083.jpg', 2, 'aktif'),
(5, 'Susi', 'jember', '2017-12-20', 'SMAN AMBULU', 'SMA', 0, 'laki-laki', 'jember', '4A14_083.jpg', 2, 'aktif'),
(6, 'Allyvio Yonim', 'Jember', '2019-06-02', 'sd ambulu', 'SD', 5, 'laki-laki', 'JL.SRIWIJAYA 2 NO 21 SUMBERSARI, JEMBER', 'vio.jpg', 2, 'nonaktif');

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id` int(11) NOT NULL,
  `nama pelajaran` varchar(50) NOT NULL,
  `idPengajar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`id`, `nama pelajaran`, `idPengajar`) VALUES
(12, 'Bahasa Indonesia', 3),
(13, 'matematika', 3),
(14, 'Biologi', 3),
(15, 'Fisika', 4),
(16, 'Kimia', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `pendidikan` enum('SD','SMP','SMA','D3','S1','S2','S3') NOT NULL,
  `sekolah` varchar(100) NOT NULL,
  `kelamin` enum('laki-laki','perempuan') NOT NULL,
  `agama` enum('islam','katolik','kristen','hindu','budha') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id`, `nama`, `email`, `password`, `tempat`, `tanggal`, `pendidikan`, `sekolah`, `kelamin`, `agama`, `alamat`, `foto`) VALUES
(3, 'arif candra dwi susilo', 'arif1@mail.com', 'e10adc3949ba59abbe56e057f20f883e', 'jember', '1996-07-28', 'S1', 'Universitas Jember', 'laki-laki', 'islam', 'Jember', '4A14_092.jpg'),
(4, 'arif', 'arif@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'jember', '2017-12-15', 'SMA', 'SMAN AMBULU', 'laki-laki', 'islam', 'jember', '4A14_100.jpg'),
(5, 'arif Wkwkwkw', 'arif2@mail.com', '202cb962ac59075b964b07152d234b70', 'jember', '2017-12-19', 'SMA', 'SMAN AMBULU', 'laki-laki', 'islam', 'jember', '4A14_088.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `id` int(11) NOT NULL,
  `idPelajaran` int(11) NOT NULL,
  `tanggal Ujian` date NOT NULL,
  `idMurid` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian`
--

INSERT INTO `ujian` (`id`, `idPelajaran`, `tanggal Ujian`, `idMurid`, `nilai`) VALUES
(2, 12, '2017-12-20', 1, 90),
(3, 12, '2017-12-20', 3, 90),
(4, 13, '2017-12-21', 3, 87),
(5, 13, '2017-12-21', 3, 87),
(6, 13, '2017-12-22', 1, 56),
(7, 15, '2017-12-20', 3, 90);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','pengajar','user','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `level`) VALUES
(1, '', 'admin@ehe.com', 'admin', 'admin'),
(2, 'Allyvio Yonim Mahardhika', 'vio@ehe.com', 'vio', 'user'),
(3, 'Moh Alby Maulana', 'alby@ehe.com', 'alby', 'user'),
(4, 'Alfita Irhasti Salas', 'alfita@ehe.com', 'alfita', 'pengajar'),
(6, 'Muhammad Hadi Prayitno', 'hadi@ehe.com', 'hadi', 'pengajar'),
(7, 'Tesya Anggi Ningtiyas', 'tesya@ehe.com', 'tesya', 'user'),
(8, 'Nur Hidayah Monicawati', 'monic@ehe.com', 'monic', 'user'),
(9, 'titania oktavia', 'titania@ehe.com', 'tania', 'user'),
(10, 'arief febrian', 'afeb@ehe.com', 'afeb', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPengajar` (`idPengajar`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idMurid` (`idMurid`),
  ADD KEY `idPelajaran` (`idPelajaran`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE `murid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `murid`
--
ALTER TABLE `murid`
  ADD CONSTRAINT `murid_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Constraints for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD CONSTRAINT `pelajaran_ibfk_1` FOREIGN KEY (`idPengajar`) REFERENCES `pengajar` (`id`);

--
-- Constraints for table `ujian`
--
ALTER TABLE `ujian`
  ADD CONSTRAINT `ujian_ibfk_1` FOREIGN KEY (`idMurid`) REFERENCES `murid` (`id`),
  ADD CONSTRAINT `ujian_ibfk_2` FOREIGN KEY (`idPelajaran`) REFERENCES `pelajaran` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
