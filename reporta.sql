-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 01:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reporta`
--

-- --------------------------------------------------------

--
-- Table structure for table `akunperkiraan`
--

CREATE TABLE `akunperkiraan` (
  `akunPerkiraanID` int(11) NOT NULL,
  `idTipeAkun` int(11) NOT NULL,
  `kodeAkunPerkiraan` varchar(50) NOT NULL,
  `namaAkunPerkiraan` varchar(100) NOT NULL,
  `parentAkunPerkiraan` int(11) DEFAULT NULL,
  `saldoAwal` decimal(11,2) NOT NULL DEFAULT 0.00,
  `catatanAkunPerkiraan` text DEFAULT NULL,
  `createAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updateAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datapembayaran`
--

CREATE TABLE `datapembayaran` (
  `dataPembayaranID` int(11) NOT NULL,
  `idPembayaran` int(11) NOT NULL,
  `idAkunPerkiraan` int(11) NOT NULL,
  `biaya` decimal(11,2) NOT NULL,
  `catatan` text DEFAULT NULL,
  `createAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updateAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datapenerimaan`
--

CREATE TABLE `datapenerimaan` (
  `dataPenerimaanID` int(11) NOT NULL,
  `idPenerimaan` int(11) NOT NULL,
  `idAkunPerkiraan` int(11) NOT NULL,
  `biaya` decimal(11,2) NOT NULL,
  `catatan` text DEFAULT NULL,
  `createAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updateAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metodepembayaran`
--

CREATE TABLE `metodepembayaran` (
  `metodePembayaranID` int(11) NOT NULL,
  `metodePembayaranName` varchar(100) NOT NULL,
  `metodePembayaranOwner` varchar(100) NOT NULL,
  `noRek` varchar(100) DEFAULT NULL,
  `saldoAwal` decimal(11,2) NOT NULL,
  `perTanggal` date NOT NULL,
  `createAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updateAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-12-16-114501', 'App\\Database\\Migrations\\MetodePembayaran', 'default', 'App', 1672314373, 1),
(2, '2022-12-16-115516', 'App\\Database\\Migrations\\TipeAkun', 'default', 'App', 1672314373, 1),
(3, '2022-12-16-115712', 'App\\Database\\Migrations\\AkunPerkiraan', 'default', 'App', 1672314373, 1),
(4, '2022-12-16-120341', 'App\\Database\\Migrations\\Pembayaran', 'default', 'App', 1672314373, 1),
(5, '2022-12-16-120649', 'App\\Database\\Migrations\\Penerimaan', 'default', 'App', 1672314373, 1),
(6, '2022-12-16-120805', 'App\\Database\\Migrations\\DataPembayaran', 'default', 'App', 1672314373, 1),
(7, '2022-12-16-120942', 'App\\Database\\Migrations\\DataPenerimaan', 'default', 'App', 1672314373, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `pembayaranID` int(11) NOT NULL,
  `idMetodePembayaran` int(11) NOT NULL,
  `noCek` varchar(50) DEFAULT NULL,
  `noBukti` varchar(100) NOT NULL,
  `tanggalBayar` date NOT NULL,
  `catatanPembayaran` text DEFAULT NULL,
  `penerima` varchar(100) DEFAULT NULL,
  `createAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updateAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan`
--

CREATE TABLE `penerimaan` (
  `penerimaanID` int(11) NOT NULL,
  `idMetodePembayaran` int(11) NOT NULL,
  `noCek` varchar(50) NOT NULL,
  `noBukti` varchar(100) NOT NULL,
  `tanggalBayar` date NOT NULL,
  `catatanPenerimaan` text DEFAULT NULL,
  `penerima` varchar(100) DEFAULT NULL,
  `createAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updateAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipeakun`
--

CREATE TABLE `tipeakun` (
  `tipeAkunID` int(11) NOT NULL,
  `namaTipeAkun` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `catatan` text DEFAULT NULL,
  `createAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updateAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tipeakun`
--

INSERT INTO `tipeakun` (`tipeAkunID`, `namaTipeAkun`, `alias`, `catatan`, `createAt`, `updateAt`) VALUES
(1, 'Piutang Usaha', 'AREC', NULL, '2022-12-29 11:49:38', '2022-12-29 11:49:38'),
(2, 'Persediaan', 'INTR', NULL, '2022-12-29 11:49:38', '2022-12-29 11:49:38'),
(3, 'Aset Lancar Lainnya', 'OCAS', NULL, '2022-12-29 11:49:38', '2022-12-29 11:49:38'),
(4, 'Aset Tetap', 'FASS', NULL, '2022-12-29 11:49:38', '2022-12-29 11:49:38'),
(5, 'Akumulasi Penyusutan', 'DEPR', NULL, '2022-12-29 11:49:38', '2022-12-29 11:49:38'),
(6, 'Aset Lainnya', 'OASS', NULL, '2022-12-29 11:49:38', '2022-12-29 11:49:38'),
(7, 'Utang Usaha', 'APAY', NULL, '2022-12-29 11:49:38', '2022-12-29 11:49:38'),
(8, 'Liabilitas Jangka Pendek', 'OCLY', NULL, '2022-12-29 11:49:38', '2022-12-29 11:49:38'),
(9, 'Liabilitas Jangka Panjang', 'LTLY', NULL, '2022-12-29 11:49:38', '2022-12-29 11:49:38'),
(10, 'Modal', 'EQTY', NULL, '2022-12-29 11:49:38', '2022-12-29 11:49:38'),
(11, 'Pendapatan', 'REVE', NULL, '2022-12-29 11:49:38', '2022-12-29 11:49:38'),
(12, 'Beban Pokok Penjualan', 'COGS', NULL, '2022-12-29 11:49:38', '2022-12-29 11:49:38'),
(13, 'Beban', 'EXPS', NULL, '2022-12-29 11:49:38', '2022-12-29 11:49:38'),
(14, 'Beban Lainnya', 'OEXP', NULL, '2022-12-29 11:49:38', '2022-12-29 11:49:38'),
(15, 'Pendapatan Lainnya', 'OINC', NULL, '2022-12-29 11:49:38', '2022-12-29 11:49:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akunperkiraan`
--
ALTER TABLE `akunperkiraan`
  ADD PRIMARY KEY (`akunPerkiraanID`),
  ADD KEY `akunperkiraan_idTipeAkun_foreign` (`idTipeAkun`);

--
-- Indexes for table `datapembayaran`
--
ALTER TABLE `datapembayaran`
  ADD PRIMARY KEY (`dataPembayaranID`),
  ADD KEY `datapembayaran_idPembayaran_foreign` (`idPembayaran`),
  ADD KEY `datapembayaran_idAkunPerkiraan_foreign` (`idAkunPerkiraan`);

--
-- Indexes for table `datapenerimaan`
--
ALTER TABLE `datapenerimaan`
  ADD PRIMARY KEY (`dataPenerimaanID`),
  ADD KEY `datapenerimaan_idPenerimaan_foreign` (`idPenerimaan`),
  ADD KEY `datapenerimaan_idAkunPerkiraan_foreign` (`idAkunPerkiraan`);

--
-- Indexes for table `metodepembayaran`
--
ALTER TABLE `metodepembayaran`
  ADD PRIMARY KEY (`metodePembayaranID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`pembayaranID`),
  ADD KEY `pembayaran_idMetodePembayaran_foreign` (`idMetodePembayaran`);

--
-- Indexes for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`penerimaanID`),
  ADD KEY `penerimaan_idMetodePembayaran_foreign` (`idMetodePembayaran`);

--
-- Indexes for table `tipeakun`
--
ALTER TABLE `tipeakun`
  ADD PRIMARY KEY (`tipeAkunID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akunperkiraan`
--
ALTER TABLE `akunperkiraan`
  MODIFY `akunPerkiraanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datapembayaran`
--
ALTER TABLE `datapembayaran`
  MODIFY `dataPembayaranID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `datapenerimaan`
--
ALTER TABLE `datapenerimaan`
  MODIFY `dataPenerimaanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `metodepembayaran`
--
ALTER TABLE `metodepembayaran`
  MODIFY `metodePembayaranID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `pembayaranID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penerimaan`
--
ALTER TABLE `penerimaan`
  MODIFY `penerimaanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tipeakun`
--
ALTER TABLE `tipeakun`
  MODIFY `tipeAkunID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akunperkiraan`
--
ALTER TABLE `akunperkiraan`
  ADD CONSTRAINT `akunperkiraan_idTipeAkun_foreign` FOREIGN KEY (`idTipeAkun`) REFERENCES `tipeakun` (`tipeAkunID`);

--
-- Constraints for table `datapembayaran`
--
ALTER TABLE `datapembayaran`
  ADD CONSTRAINT `datapembayaran_idAkunPerkiraan_foreign` FOREIGN KEY (`idAkunPerkiraan`) REFERENCES `akunperkiraan` (`akunPerkiraanID`),
  ADD CONSTRAINT `datapembayaran_idPembayaran_foreign` FOREIGN KEY (`idPembayaran`) REFERENCES `pembayaran` (`pembayaranID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `datapenerimaan`
--
ALTER TABLE `datapenerimaan`
  ADD CONSTRAINT `datapenerimaan_idAkunPerkiraan_foreign` FOREIGN KEY (`idAkunPerkiraan`) REFERENCES `akunperkiraan` (`akunPerkiraanID`),
  ADD CONSTRAINT `datapenerimaan_idPenerimaan_foreign` FOREIGN KEY (`idPenerimaan`) REFERENCES `penerimaan` (`penerimaanID`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_idMetodePembayaran_foreign` FOREIGN KEY (`idMetodePembayaran`) REFERENCES `metodepembayaran` (`metodePembayaranID`);

--
-- Constraints for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD CONSTRAINT `penerimaan_idMetodePembayaran_foreign` FOREIGN KEY (`idMetodePembayaran`) REFERENCES `metodepembayaran` (`metodePembayaranID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
