-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2025 at 05:58 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` mediumint(5) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(256) NOT NULL,
  `penulis` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `posting` enum('tidak','ya') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `tanggal`, `judul`, `penulis`, `deskripsi`, `posting`) VALUES
(1, '2025-05-03', 'Naga petulang yang mengesankan vs penjual mentimun', 'asep', 'shjajsajhakhdakndabndajb\r\n\r\nlorem', 'ya'),
(2, '2025-05-03', 'bakpia', 'asep', 'lorem23', 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id_pengguna` tinyint(4) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id_pengguna`, `email`, `password`, `level`) VALUES
(1, 'dzikri@gmail.com', '0', 0),
(2, 'dzikris@gmail.com', '$2y$10$epGpAMnzWlFyiCbE6HDdJOpLiw4TfVQiq6nOpyCPvNWYdi.JZirSG', 0),
(3, 'admin@gmail.com', '$2y$12$jPZP3.92VvZUiW6g6g5blO7Q55XvIUHS1whlhwn.SsTxbeKCGkUuS', 0),
(4, 'user1@gmail.com', '$2y$12$AnWaOwdOCq6a1gQdO9mkpOdzFfyemArxDp9UhweUDXq3jTX3QE2h6', 1),
(5, 'user2@gmail.com', '$2y$12$Vd14TVBUnxI5rrIGPtmtb.rD1mdRi8vJydR0nW1DFEibZTMet4SeC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `category` enum('home','new-featured','men','women','kids','sale','snkrs') NOT NULL DEFAULT 'home',
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image_url`, `category`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Sneakers Alpha', 'assets/img/produk1.png', 'men', '149.99', 'Sneakers nyaman untuk aktivitas sehari-hari.', '2025-05-21 14:36:10', '2025-05-21 14:36:10'),
(2, 'T-Shirt Classic', 'assets/img/produk2.png', 'men', '29.99', 'Kaos katun lembut, cocok untuk tampil kasual.', '2025-05-21 14:36:10', '2025-05-21 14:36:10'),
(3, 'Dress Elegan', 'assets/img/produk1.png', 'women', '199.99', 'Dress chiffon elegan untuk acara spesial.', '2025-05-21 14:36:10', '2025-05-21 14:36:10'),
(4, 'Handbag Chic', 'assets/img/produk2.png', 'women', '249.99', 'Tas selempang dengan desain modern.', '2025-05-21 14:36:10', '2025-05-21 14:36:10'),
(5, 'Kids Hoodie', 'assets/img/produk1.png', 'kids', '39.99', 'Hoodie hangat untuk anak.', '2025-05-21 14:36:10', '2025-05-21 14:36:10'),
(6, 'Kids Sneakers', 'assets/img/produk2.png', 'kids', '59.99', 'Sneakers lucu dan nyaman untuk si kecil.', '2025-05-21 14:36:10', '2025-05-21 14:36:10'),
(7, 'Limited Edition SNKRS', 'assets/img/produk1.png', 'snkrs', '299.99', 'Edisi terbatas, koleksi eksklusif SNKRS.', '2025-05-21 14:36:10', '2025-05-21 14:36:10'),
(8, 'Sale: Sandal Beach', 'assets/img/produk2.png', 'sale', '19.99', 'Sandal simpel dengan diskon spesial.', '2025-05-21 14:36:10', '2025-05-21 14:36:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` mediumint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id_pengguna` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
