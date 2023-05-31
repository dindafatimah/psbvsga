-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 05:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(255) NOT NULL,
  `nm_admin` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `nm_admin`, `username`, `password`) VALUES
(1, 'ADMIN', 'jwdb', 'vsga2021'),
(2, 'Dinda', 'gointothebeach', 'abcdfk');

-- --------------------------------------------------------

--
-- Table structure for table `tbanggota`
--

CREATE TABLE `tbanggota` (
  `idanggota` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `status` varchar(30) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbanggota`
--

INSERT INTO `tbanggota` (`idanggota`, `nama`, `jeniskelamin`, `alamat`, `status`, `foto`) VALUES
('41101', 'Bima', 'Pria', 'Jakarta', 'Diterima', ''),
('41102', 'Dewi', 'Wanita', 'Bandung', 'Diterima', ''),
('41103', 'Ezra', 'Pria', 'Surabaya', 'Diterima', ''),
('41104', 'Ekka', 'Wanita', 'Riau', 'Diterima', ''),
('41105', 'Jehan', 'Pria', 'Bali', 'Diterima', ''),
('41106', 'Via', 'Wanita', 'Medan', 'Diterima', ''),
('41107', 'Rizi', 'Pria', 'Makassar', 'Diterima', ''),
('41108', 'Citra', 'Wanita', 'Manado', 'Diterima', ''),
('41109', 'Theodore', 'Pria', 'Aceh', 'Diterima', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbbuku`
--

CREATE TABLE `tbbuku` (
  `idbuku` varchar(13) NOT NULL,
  `judulbuku` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `pengarang` varchar(40) NOT NULL,
  `penerbit` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbbuku`
--

INSERT INTO `tbbuku` (`idbuku`, `judulbuku`, `kategori`, `pengarang`, `penerbit`, `status`) VALUES
('9780062367884', 'Falling Into Place', 'Fiksi', 'Amy Zhang', 'Greenwillow Books', 'Tersedia'),
('9780143113874', 'Plato and A Platypus Walk Into A Bar', 'Filsafat', 'Thomas Cathcart', 'Penguin Books', 'Tersedia'),
('9780241184196', 'Science but Not as We Know It', 'Non-Fiksi', 'Ben gilliland', 'DK', 'Dipinjam'),
('9780552565974', 'Wonder', 'Fiksi', 'R.J Palacio', 'CORGI', 'Tersedia'),
('9781250069535', 'The Universe In Your Hand', 'Astrofisika', 'Christophe Galfard', 'Flatiron Books', 'Dipinjam'),
('9781481418782', 'We All Looked Up', 'Fiksi', 'Tommy Wallach', 'Simon & Schuster Books', 'Tersedia'),
('9781780896724', 'Lunar Cats', 'Fiksi', 'Lynne Truss', 'Century', 'Tersedia'),
('9781846559211', 'The Strange Library', 'Fiksi', 'Haruki Murakami', 'Harvill Secker', 'Dipinjam'),
('9781846682414', 'Breakfast with Socrates', 'Filsafat', 'Robert Rowland Smith', 'Profile Books', 'Dipinjam'),
('978185168779', 'How To Teach Quantum Physics to Your Dog', 'Fisika', 'Chad Orzel', 'Oneworld Publications', 'Tersedia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `tbanggota`
--
ALTER TABLE `tbanggota`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `tbbuku`
--
ALTER TABLE `tbbuku`
  ADD UNIQUE KEY `idbuku` (`idbuku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
