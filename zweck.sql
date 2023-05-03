-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 Mei 2020 pada 13.45
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zweck`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'distributor', 'distributor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `berat` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `biaya` int(20) NOT NULL,
  `status_pengiriman` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama`, `nama_pembeli`, `berat`, `alamat`, `kode_pos`, `tujuan`, `biaya`, `status_pengiriman`) VALUES
(1, 'Compass', 'bocil', 3, 'danau poso', 66598, 'jombang', 0, 'sudah diterima'),
(2, 'jasjus', 'bocil', 1, 'Jl. Buntu', 66598, 'sidoarjo', 0, 'sudah diterima'),
(3, 'baju', 'dewi', 5, 'Jl. Akherat', 66598, 'malang', 0, 'sudah diterima'),
(5, 'aaa', 'qqq', 2, 'malang', 111, 'kediri', 0, 'sudah diterima'),
(6, 'Vans', 'bocil', 5, 'Jl. Buntu', 66598, 'surabaya', 0, 'sedang diproses'),
(7, 'Sepatu', 'bocil', 4, 'surabaya', 66599, 'malang', 0, 'sedang diproses'),
(8, 'Sepatu', 'bocil', 4, 'Jl.poso', 66599, 'malang', 0, 'sedang diproses'),
(9, 'Compass', 'bambang', 12, 'surabaya', 66598, 'kediri', 0, 'sedang diproses'),
(10, 'jasjus', 'bocil', 3, 'Jl. Buntu', 66598, 'jombang', 0, 'sedang diproses'),
(11, 'celana', 'bocil', 3, 'Jl. Akherat', 66598, 'kediri', 30000, 'sedang diproses'),
(12, 'jasjus', 'bocil', 5, 'Jl.poso', 111, 'kediri', 10000, 'sedang diproses'),
(13, 'baju', 'bocil', 1, 'Jl.poso', 66598, 'jombang', 15000, 'sedang diproses'),
(14, 'jasjus', 'bocil', 5, 'Jl. Buntu', 66598, 'malang', 25000, 'sedang diproses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id_data` int(10) NOT NULL,
  `id_seller` int(10) NOT NULL,
  `id_distributor` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `distributor`
--

CREATE TABLE `distributor` (
  `id_distributor` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `telp` int(11) NOT NULL,
  `foto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `seller`
--

CREATE TABLE `seller` (
  `id_seller` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` int(13) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `seller`
--

INSERT INTO `seller` (`id_seller`, `nama`, `alamat`, `telp`, `email`) VALUES
(1, 'Kevin', 'Jl. Akherat', 2147483647, 'chandrahelmi2@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_seller` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_barang`, `id_seller`, `berat`, `harga`) VALUES
(1, 1, 0, 1, 0),
(2, 1, 0, 1212211, 0),
(3, 1212, 0, 121, 0),
(4, 1, 0, 122, 0),
(5, 12, 0, 11, 110000),
(6, 1, 0, 12, 0),
(7, 1, 0, 12, 120000),
(8, 1, 0, 121212, 1212120000),
(9, 1, 0, 99, 990000),
(10, 1, 0, 12, 120000),
(11, 1, 0, 12, 120000),
(12, 1, 0, 12, 120000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tujuan`
--

CREATE TABLE `tujuan` (
  `kota` varchar(50) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tujuan`
--

INSERT INTO `tujuan` (`kota`, `tarif`) VALUES
('malang', 5000),
('kediri', 10000),
('jombang', 15000),
('surabaya', 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
(1, 'Helmi', 'helmi@gmail.com', 'helmi', 'cf3750951241a8cf90e2a0fb0af63fe2'),
(2, 'toni', 'toni123@gmail.com', 'toni', 'aefe34008e63f1eb205dc4c4b8322253'),
(3, 'kevin', 'kevin@gmail.com', 'kevin', '9d5e3ecdeb4cdb7acfd63075ae046672'),
(4, 'hadi', 'hadi@gmail.com', 'hadi', '76671d4b83f6e6f953ea2dfb75ded921'),
(5, 'travis', 'tahuanget222@gmail.com', 'travis', '7985139ae9b6efb45373e3e36e444224'),
(6, 'ipul', 'ahmad@gmail.com', 'ipul', 'db3fd70d6207f588571a26e91d744baf'),
(7, 'dana', 'chandrahelmi2@gmail.com', 'dana', '21cb4e4be93c09542ffa73b2b5cb95ea'),
(8, 'bocil', 'bocilaw@gmail.com', 'bocill', 'bocil123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users2`
--

CREATE TABLE `users2` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users2`
--

INSERT INTO `users2` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
(1, 'helmi', 'helmi@gmail.com', 'helmi', 'helmi'),
(2, 'ipul', 'helmi@gmail.com', 'ipul', 'ipul'),
(3, 'ipul', 'helmi@gmail.com', 'ipul', 'ipul'),
(4, 'ipul', 'helmi@gmail.com', 'ipul', 'ipul'),
(5, 'ipul', 'helmi@gmail.com', 'ipul', 'ipul'),
(6, 'ipul', 'helmi@gmail.com', 'ipul', 'iupl'),
(7, 'bocil', 'helmychandra17@gmail.com', 'bocil', 'bocil12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_seller` (`id_seller`),
  ADD KEY `id_distributor` (`id_distributor`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id_distributor`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id_seller`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id_data` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distributor`
--
ALTER TABLE `distributor`
  MODIFY `id_distributor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id_seller` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users2`
--
ALTER TABLE `users2`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`id_seller`) REFERENCES `seller` (`id_seller`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_ibfk_3` FOREIGN KEY (`id_distributor`) REFERENCES `distributor` (`id_distributor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
