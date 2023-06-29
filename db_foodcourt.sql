-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2023 at 02:45 PM
-- Server version: 10.9.4-MariaDB
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_foodcourt`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(10) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `kategori` enum('makanan','minuman') NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `id_otlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `menu`, `kategori`, `harga`, `stock`, `id_otlet`) VALUES
(1, 'ayam penyet', 'makanan', 18000, 100, 1),
(2, 'nasi goreng', 'makanan', 15000, 50, 2),
(3, 'Es Teh', 'minuman', 5000, 100, 1),
(4, 'Capcin', 'minuman', 8000, 100, 2),
(6, 'Dodol Bakar', 'makanan', 5000, 150, 7),
(8, 'Dodol Penyet', 'makanan', 17000, 50, 7),
(9, 'Jus Dodol', 'minuman', 12000, 100, 7);

-- --------------------------------------------------------

--
-- Table structure for table `otlet`
--

CREATE TABLE `otlet` (
  `id_otlet` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_pemilik` int(11) NOT NULL,
  `kontak` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `otlet`
--

INSERT INTO `otlet` (`id_otlet`, `nama`, `id_pemilik`, `kontak`) VALUES
(1, 'Otlet01', 1, '082196506900'),
(2, 'Otlet02', 2, '085628787875'),
(5, 'Otlet03', 6, '087672648274'),
(7, 'DodolAy', 6, '5321');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `umur` int(11) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `umur`, `jk`, `no_hp`, `alamat`) VALUES
(1, 'iqbal', 20, 'L', '082196506900', 'Kota Solok'),
(2, 'Fithree', 20, 'P', '085375787828', 'Batusangkar'),
(5, 'Ay', 20, 'L', '087657676562', 'Barulak');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `name`, `email`, `address`, `phone`) VALUES
(1, 'iqbal', 'iqbal@gmail.com', 'Kota Solok', '082196506900'),
(2, 'Libryan', 'libryan@gmail.com', 'Batusangkar', '085375787828'),
(6, 'Dodol', 'dodol@gmail.com', 'Barulak', '085375787828');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(25) NOT NULL,
  `terdaftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `level`, `terdaftar`) VALUES
('adik', 'baaec6543b233b71d88d201276a5d120', 'admin', '2023-01-23'),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2023-01-21'),
('ay', '42d74a038852aaee074a9245c49e9c8d', 'admin', '2023-01-23'),
('dodol', '876c74d2958edd5a7f3da886bfc10831', 'user', '2023-01-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_otlet` (`id_otlet`);

--
-- Indexes for table `otlet`
--
ALTER TABLE `otlet`
  ADD PRIMARY KEY (`id_otlet`),
  ADD KEY `id_pemilik` (`id_pemilik`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `otlet`
--
ALTER TABLE `otlet`
  MODIFY `id_otlet` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`id_otlet`) REFERENCES `otlet` (`id_otlet`) ON DELETE CASCADE;

--
-- Constraints for table `otlet`
--
ALTER TABLE `otlet`
  ADD CONSTRAINT `otlet_ibfk_1` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik` (`id_pemilik`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
