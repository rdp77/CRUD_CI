-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2019 pada 16.43
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photograph`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `nbi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `tanggal_lahir` varchar(25) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `nohp` int(13) NOT NULL,
  `motivasi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`nbi`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `jurusan`, `fakultas`, `nohp`, `motivasi`) VALUES
(1461800115, 'Moh Ravi Dwi Putra	', 'L', '2000-01-20', 'Jl Blora no 04M', 'Informatika', 'Teknik', 2147483647, 'Hidup seperti larry'),
(1461800120, 'Ryannov R Simbolon', 'L', '2000-01-01', 'Jl Jambangan No 01C', 'Informatika', 'Teknik', 2147483647, 'Kalau lulus sim point nya harus pas'),
(1461800143, 'Dilarida Alrizeki', 'L', '2001-09-08', 'Jl Pagesangan No 02', 'Informatika', 'Teknik', 2147483647, 'Spp harus lunas'),
(1461800175, 'Abdurrahman Hanif	', 'L', '2000-03-05', 'Jl Blora no 04M', 'Informatika', 'Teknik', 2147483647, 'Tidak ada');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`nbi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
