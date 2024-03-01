-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 09:42 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` char(10) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `mata_pelajaran` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `nip`, `ttl`, `alamat`, `mata_pelajaran`, `gambar`) VALUES
(1, 'Jian Maulana', '1234567', 'Bandung, 16 Agustus 1997', 'Kp. Bunijaya', 'pwpb', 'ismi.jpg'),
(3, 'Anisa Nurul Islami', '123458', 'Bandung, 10 Desember 1998', 'Kp. Lembur Gede', 'Matematika', 'yuli.jpg'),
(4, 'Lilis Evi Mulyani', '123458', 'Bandung, 15 September 1995', 'Kp. Pasir Nangka', 'Bahasa Indonesia', 'resti.jpg'),
(7, 'eva lestari', '12345789', 'Bandung, 04 September 2006', 'kp. cisinang', 'mata_pelajaran', 'gambar');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `mata_pelajaran` varchar(100) NOT NULL,
  `kode_mp` varchar(10) NOT NULL,
  `guru_mengajar` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `mata_pelajaran`, `kode_mp`, `guru_mengajar`, `gambar`) VALUES
(1, 'PJOK', '12344', 'Riza Azhari', 'dina.jpg'),
(2, 'PBO', '1234', 'Igusti Awaludin', 'yuli.jpg'),
(3, 'PAIBP', '1234', 'Chaliandra Al Rizki', 'resti.jpg'),
(5, 'bahasa inggris', '1234', 'Eva Lestari', 'dina.jpg'),
(6, 'bahasa indonesia', '12344', 'Lilis Evi', 'siti.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_mata_pelajaran` varchar(100) NOT NULL,
  `nilai` char(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_siswa`
--

INSERT INTO `nilai_siswa` (`id`, `nama`, `id_mata_pelajaran`, `nilai`, `gambar`) VALUES
(1, 'Ai Fitriani', 'Bahasa Sunda', '85', 'dina.jpg'),
(2, 'Dina Haryanti', 'Bahasa Sunda', '85', 'yuli.jpg'),
(3, 'Erna Winingsih', 'Bahasa Sunda', '80', 'ismi.jpd'),
(5, 'sulistiyan', 'bahasa inggris', '80', 'gambar'),
(6, 'resti silvia', 'ppkn', '87', 'gambar'),
(7, 'Ismi Rowiyah', 'pwpb', '85', 'gambar'),
(8, 'Nadia trihapsari', 'Bahasa indonesia', '88', 'dina.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_pegawai` varchar(10) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `id_pegawai`, `ttl`, `alamat`, `pekerjaan`, `gambar`) VALUES
(2, 'Feri Supriadi', '12345', 'Bandung, 19 Juni 1985', 'Gununghalu', 'Operator', 'dina.jpg'),
(3, 'cece', '123456', 'Bandung, 04 September 1960', 'kp. neglasari', 'kebersihan', '');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` char(10) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nis`, `ttl`, `alamat`, `gambar`) VALUES
(3, 'Ismi Rowiyah', '123456789', 'Bandung, 11 Oktober 2005', 'Kp. Cihanjawar', 'ismi.jpg'),
(4, 'Yulianti', '12345678', 'Bandung, 04 September 2006', 'Kp. Cihanjawar', 'yuli.jpg'),
(20, 'resti silvia', '12345678', 'Bandung, 27 November 2005', 'kp. legok kondang', 'resti.jpg'),
(21, 'Dina Haryanti', '1234567', 'Bandung, 10 Maret 2006', 'kp.paratag', 'dina.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `siswa1`
--

CREATE TABLE `siswa1` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` char(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa1`
--

INSERT INTO `siswa1` (`id`, `nama`, `nis`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Ismi Rowiyah', '1234567', 'ismi@gmail.com', 'Rekayasa Perangkat Lunak', 'ismi.jpg'),
(2, 'Dina Haryanti', '12345678', 'Dinahrynti@gmail.com', 'Rekayasa Perangkat Lunak', 'dina.jpg'),
(3, 'resti silvia', '12345678', 'resti@gmail.com', 'Rekayasa Perangkat Lunak', 'resti.jpg'),
(4, 'yulianti', '12345678', 'yulianti@gmail.com', 'Rekayasa Perangkat Lunak', 'yuli.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `siswa2`
--

CREATE TABLE `siswa2` (
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'dina', '$2y$10$Sgt2Io2K.ozk1c7Dfi0gNuYZ7XpQF6S7P6Su8FhGCGOZ5icaI7T0.'),
(2, 'ismi', '$2y$10$orP504mSQmSqVqnJSg96Mur2dOj3dlbHRCzNfl1qPQtX8QVZtFZVW'),
(3, 'yulianti', '$2y$10$0q9/NwgZRTfcjJXSRTEvPuljzW4h/V8xscb9HP2dnfEvRb7C.IvuG'),
(4, 'resti', '$2y$10$UBn3NXyYxwZHd2nd4y0iH.SKf.BS93QQc.K31jkcBe3sPrTEelYjS'),
(5, 'user', '$2y$10$PJ55GL9X1dcopcUGfws9D.Xphnk1aC5JuTZpAB4itaWgVCrwNSh46'),
(6, 'admin', '$2y$10$4IsvE3MatzdIkCrLbCRLE.yxVjQKhRAkdr2Pg547sTuQc3zBJpVdK'),
(7, 'erna', '$2y$10$AZtCz7ewtrbriMyFqlZpk.Vm1DPAgqa.e81mEuAPxG412OQXFW8Ny'),
(8, 'ayu', '$2y$10$cwLYzHKMIh66zGGvsbtzJeQ5afdTyX0eA5Vs/OES4BL8RYvgiP55K'),
(9, 'yuni', '$2y$10$jUYqX0ivNpWZsLLGa2a1i.QQloGStLVmk5085qFp/P4vYxVI6qciu'),
(10, 'sulis', '$2y$10$TNyz5VmBKBLyQQeGZPVpBu6Eg.wAT44r/bGNd4SqGClC0U0JEcY32'),
(11, 'abi', '$2y$10$UKD4uf50KQuNMgL7A2wObOCWN7u4K66kWac6b0WkEe5GuIKyaLII.'),
(12, 'iya', '$2y$10$t8mu44RczeFPD9Y6TsWw4eZtgJxtE7jkEnCw93.TwZgo9ZVnJ5eJW'),
(13, 'imi', '$2y$10$xvORF3UZD53H2dTgOdaylOXsSEpemkaDpmeYl8Xyv76C6TShTi9K2'),
(14, 'didin', '$2y$10$C/xAs2P3GalPPO2RvQxeYe7kguxML5BrNXRJG2czkAtgXYW59JFZe'),
(15, 'nana', '$2y$10$IcFOy0nQNhvWnZY4J3dhHunx8rgeJMbVhFNCh4UT0ohtH9GAgKLqi'),
(16, 'mimi', '$2y$10$U3xV93KFkGmvrTkfYJe9lOq0HSTW7UNIQ6QtBHaeQAs67pl/mdWGi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa1`
--
ALTER TABLE `siswa1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `siswa1`
--
ALTER TABLE `siswa1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
