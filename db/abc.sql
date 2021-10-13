-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 07:18 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis_berita` varchar(20) CHARACTER SET latin1 NOT NULL,
  `judul_berita` varchar(255) CHARACTER SET latin1 NOT NULL,
  `slug_berita` varchar(255) CHARACTER SET latin1 NOT NULL,
  `keywords` text CHARACTER SET latin1 DEFAULT NULL,
  `status_berita` varchar(20) CHARACTER SET latin1 NOT NULL,
  `keterangan` text CHARACTER SET latin1 NOT NULL,
  `gambar` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `judul_gambar` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `gambar` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_produk`, `judul_gambar`, `gambar`, `tanggal_update`) VALUES
(3, 7, 'Kue', '51.png', '2020-06-06 05:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `header_transaksi`
--

CREATE TABLE `header_transaksi` (
  `id_header_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `kode_transaksi` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `status_bayar` varchar(20) CHARACTER SET latin1 NOT NULL,
  `jumlah_bayar` int(11) DEFAULT NULL,
  `rekening_pembayaran` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `rekening_pelanggan` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `bukti_bayar` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `id_rekening` int(11) DEFAULT NULL,
  `tanggal_bayar` varchar(255) DEFAULT NULL,
  `nama_bank` varchar(255) DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header_transaksi`
--

INSERT INTO `header_transaksi` (`id_header_transaksi`, `id_user`, `id_pelanggan`, `nama_pelanggan`, `email`, `telepon`, `alamat`, `kode_transaksi`, `tanggal_transaksi`, `jumlah_transaksi`, `status_bayar`, `jumlah_bayar`, `rekening_pembayaran`, `rekening_pelanggan`, `bukti_bayar`, `id_rekening`, `tanggal_bayar`, `nama_bank`, `tanggal_post`, `tanggal_update`) VALUES
(1, 0, 3, 'agung', 'agung@gmail.com', '+6289697381859', '  JL Jeruk Purut jaksel no 100', '18062020D79QIIN1', '2020-06-18 00:00:00', 102500, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-18 10:51:17', '2020-06-18 08:51:17'),
(2, 0, 3, 'agung', 'agung@gmail.com', '+6289697381859', '  JL Jeruk Purut jaksel no 100', '18062020YUA6FQRP', '2020-06-18 00:00:00', 70000, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-18 11:02:17', '2020-06-18 09:02:17'),
(3, 0, 3, 'ravenclaw', 'ravenclaw@gmail.com', '+6289697381858', 'JL Bojong Raya rt 10 rw 04 no 112', '180620201C5TQQLC', '2020-06-18 00:00:00', 0, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-18 11:14:14', '2020-06-18 09:14:14'),
(4, 0, 3, 'agung', 'agung@gmail.com', '+6289697381859', '  JL Jeruk Purut jaksel no 100', '18062020FHJBCMJW', '2020-06-18 00:00:00', 146500, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-18 11:39:10', '2020-06-18 09:39:10'),
(5, 0, 4, 'kimhyunjin', 'hyunjin1504@gmail.com', '+6285812345678', '  JL Komp BTN Kresek Jakbar Rt 06 Rw 003 No 90', '19062020AQXOUVKL', '2020-06-19 00:00:00', 130000, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-19 11:20:02', '2020-06-19 09:20:02'),
(6, 0, 4, 'kimhyunjin', 'hyunjin1504@gmail.com', '+6285812345678', '  JL Komp BTN Kresek Jakbar Rt 06 Rw 003 No 90', '19062020ESQUE3ZI', '2020-06-19 00:00:00', 135000, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-19 14:34:33', '2020-06-19 12:34:33'),
(7, 0, 4, 'kimhyunjin', 'hyunjin1504@gmail.com', '+6285812345678', '  JL Komp BTN Kresek Jakbar Rt 06 Rw 003 No 90', '19062020Q8COPBXV', '2020-06-19 00:00:00', 107500, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-19 14:42:47', '2020-06-19 12:42:47'),
(8, 0, 4, 'kimhyunjin', 'hyunjin1504@gmail.com', '+6285812345678', '  JL Komp BTN Kresek Jakbar Rt 06 Rw 003 No 90', '20062020C0KDTXEW', '2020-06-20 00:00:00', 143000, 'Konfirmasi', 143000, '415167899', 'Ravenclaw', 'kue121.jpg', 2, '22-06-2020', 'Bank BRI Syariah', '2020-06-20 05:49:44', '2020-06-22 08:17:43'),
(9, 0, 1, 'ravenclaw', 'ravenclaw@gmail.com', '+6289697381858', ' JL Bojong Raya rt 10 rw 04 no 112 ', '200620205C0BRL6W', '2020-06-20 00:00:00', 141000, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-20 14:00:55', '2020-06-20 12:00:55'),
(10, 0, 5, 'eunbin', 'eunbin0601@gmail.com', '+6285921547333', '  JL Kalimati Baru Cengkareng Barat No 70 Jakarta Barat', '20062020JYM7IEU6', '2020-06-20 00:00:00', 67500, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-20 14:06:55', '2020-06-20 12:06:55'),
(11, 0, 5, 'eunbin', 'eunbin0601@gmail.com', '+6285921547333', '  JL Kalimati Baru Cengkareng Barat No 70 Jakarta Barat', '20062020YTS5ZMLE', '2020-06-20 00:00:00', 135000, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-20 14:18:26', '2020-06-20 12:18:26'),
(12, 0, 5, 'eunbin', 'eunbin0601@gmail.com', '+6285921547333', '  JL Kalimati Baru Cengkareng Barat No 70 Jakarta Barat', '20062020CPAW9ZMJ', '2020-06-20 00:00:00', 70500, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-20 14:19:09', '2020-06-20 12:19:09'),
(13, 0, 1, 'ravenclaw', 'ravenclaw@gmail.com', '+6289697381858', ' JL Bojong Raya rt 10 rw 04 no 112 ', '20062020IGOQBULS', '2020-06-20 00:00:00', 88000, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-20 15:34:06', '2020-06-20 13:34:06'),
(14, 0, 1, 'ravenclaw', 'ravenclaw@gmail.com', '+6289697381858', ' JL Bojong Raya rt 10 rw 04 no 112 ', '21062020UR6OP9BX', '2020-06-21 00:00:00', 65000, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-21 13:50:52', '2020-06-21 11:50:52'),
(15, 0, 1, 'ravenclaw', 'ravenclaw@gmail.com', '+6289697381858', 'JL Bojong Raya rt 10 rw 04 no 112 ', '27062020NNDEOTE5', '2020-06-27 00:00:00', 12000, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-27 08:29:01', '2020-06-27 06:29:01'),
(16, 0, 1, 'ravenclaw', 'ravenclaw@gmail.com', '+6289697381858', 'JL Bojong Raya rt 10 rw 04 no 112 ', '27062020GJBYVN1W', '2020-06-27 00:00:00', 13500, 'Diterima', 13500, '12345678', 'Ravenclaw', '23.jpeg', 4, '29-06-2020', 'Bank BCA Cabang Tangerang', '2020-06-27 08:32:46', '2020-06-29 08:45:46'),
(17, 0, 4, 'Kim Hyunjin', 'hyunjin1504@gmail.com', '+6285812345677', '      JL Komp BTN Kresek Jakbar Rt 06 Rw 003 No 90', '01072020X83UWNSE', '2020-07-01 00:00:00', 4500, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-01 15:04:09', '2020-07-01 13:04:09');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `slug_kategori` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nama_kategori` varchar(255) CHARACTER SET latin1 NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `slug_kategori`, `nama_kategori`, `urutan`, `tanggal_update`) VALUES
(1, 'makanan', 'Makanan', 1, '2020-06-04 10:20:32'),
(2, 'pakaian', 'Pakaian', 2, '2020-07-13 02:38:41'),
(3, 'kue-tradisional', 'Kue tradisional', 3, '2020-06-07 09:17:52'),
(6, 'snack-asin', 'Snack asin', 5, '2020-06-07 09:17:45');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `namaweb` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tagline` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `website` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `keywords` text CHARACTER SET latin1 DEFAULT NULL,
  `metatext` text CHARACTER SET latin1 DEFAULT NULL,
  `telepon` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `alamat` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `deskripsi` text CHARACTER SET latin1 DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `rekening_pembayaran` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `namaweb`, `tagline`, `email`, `website`, `keywords`, `metatext`, `telepon`, `alamat`, `facebook`, `instagram`, `deskripsi`, `logo`, `icon`, `rekening_pembayaran`, `tanggal_update`) VALUES
(1, 'WRP Shop', 'Menjual aneka kue dan pakaian', 'wahyuspacer17@gmail.com', 'www.wahyuspacer17@blogspot.com', 'WRP Shop - Toko Online                ', ' ada                ', '+6285921547322', 'Kavling DPR RT 06 RW 01 No 3 Tangerang         ', 'https://facebook.com/wrpshop', 'https://instagram.com/wrpshop', 'WRP Shop          ', 'logo14.png', 'logo_11.jpg', ' ada                ', '2020-07-15 08:29:31');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_pelanggan` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nama_pelanggan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(64) CHARACTER SET latin1 NOT NULL,
  `telepon` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `alamat` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `id_user`, `status_pelanggan`, `nama_pelanggan`, `email`, `password`, `telepon`, `alamat`, `tanggal_daftar`, `tanggal_update`) VALUES
(1, 0, 'Pending', 'ravenclaw', 'ravenclaw@gmail.com', '3b7375a688b1820b016224646365e127de125ff0', '+6289697381858', 'JL Bojong Raya rt 10 rw 04 no 112 ', '2020-06-18 05:20:43', '2020-06-18 03:20:43'),
(2, 0, 'Pending', 'ace', 'ace123@gmail.com', '30244b23e418f61c79ad38bd6a361121fc700859', '+62896973818587', ' depok', '2020-06-18 05:59:53', '2020-06-18 03:59:53'),
(3, 0, 'Pending', 'agung', 'agung@gmail.com', '3b7375a688b1820b016224646365e127de125ff0', '+6289697381859', ' JL Jeruk Purut jaksel no 100', '2020-06-18 10:50:29', '2020-06-18 08:50:29'),
(4, 0, 'Pending', 'Kim Hyunjin', 'hyunjin1504@gmail.com', '3b7375a688b1820b016224646365e127de125ff0', '+6285812345677', '      JL Komp BTN Kresek Jakbar Rt 06 Rw 003 No 90', '2020-06-19 11:18:47', '2020-06-21 05:31:07'),
(5, 0, 'Pending', 'eunbin', 'eunbin0601@gmail.com', '3b7375a688b1820b016224646365e127de125ff0', '+6285921547331', '    JL Kalimati Baru Cengkareng Barat No 70 Jakarta Barat', '2020-06-20 14:05:50', '2020-06-21 05:23:03'),
(6, 0, 'Pending', 'alvin', 'alvin@gmail.com', '59d97cb9530a12325b70e648432cc8de75741c2c', '+6285921547327', 'JL Kramat Jakpus', '2020-06-27 09:16:53', '2020-06-27 07:16:53');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kode_produk` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nama_produk` varchar(255) CHARACTER SET latin1 NOT NULL,
  `slug_produk` varchar(255) CHARACTER SET latin1 NOT NULL,
  `keterangan` text CHARACTER SET latin1 NOT NULL,
  `keywords` text CHARACTER SET latin1 DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `gambar` varchar(255) CHARACTER SET latin1 NOT NULL,
  `berat` float DEFAULT NULL,
  `ukuran` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `status_produk` varchar(20) CHARACTER SET latin1 NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_user`, `id_kategori`, `kode_produk`, `nama_produk`, `slug_produk`, `keterangan`, `keywords`, `harga`, `stok`, `gambar`, `berat`, `ukuran`, `status_produk`, `tanggal_post`, `tanggal_update`) VALUES
(19, 1, 6, 'PA111', 'Pastel', 'pastel-pa111', '<p>Pastel harga per pcs Rp 4.500,00</p>\r\n', ' Pastel  ', 4500, 40, 'Screenshot_20200715_125022.jpg', 350, '60x60', 'Publish', '2020-07-15 07:01:29', '2020-07-15 05:01:29'),
(20, 1, 3, 'LYAL29', 'Cenil Singkong', 'cenil-singkong-lyal29', '<p>Cenil Singkong per pcs Rp 5.500,00</p>\r\n', ' Cenil Singkong ', 5500, 25, 'Screenshot_20200715_125115.jpg', 350, '60x60', 'Publish', '2020-07-15 07:31:09', '2020-07-15 05:31:09'),
(21, 1, 3, 'LE1234', 'Lemper Abon', 'lemper-abon-le1234', '<p>Lemper Abon per pcs Rp 3.500,00</p>\r\n', ' Lemper Abon', 3500, 20, 'Screenshot_20200715_125238.jpg', 350, '60x60', 'Publish', '2020-07-15 07:34:03', '2020-07-15 05:34:03'),
(22, 1, 3, 'LO1234', 'Lontong Isi', 'lontong-isi-lo1234', '<p>Lontong isi harga per pcs Rp 3.500,00</p>\r\n', ' Lontong isi', 3500, 15, 'Screenshot_20200715_124647.jpg', 350, '60x60', 'Publish', '2020-07-15 07:38:53', '2020-07-15 05:38:53'),
(23, 1, 3, 'KA1002', 'Kue Bugis', 'kue-bugis-ka1002', '<p>Kue Bugis harga per pcs Rp 4.000,00</p>\r\n', ' Kue Bugis', 4000, 15, 'Screenshot_20200715_124518.jpg', 350, '120x100', 'Publish', '2020-07-15 07:40:39', '2020-07-15 05:40:39'),
(24, 1, 6, 'TH001', 'Tahu Isi', 'tahu-isi-th001', '<p>Tahu Isi harga per pcs Rp 2.500,00</p>\r\n', ' Tahu Isi', 2500, 20, 'Screenshot_20200715_124546.jpg', 100, '60x60', 'Publish', '2020-07-15 07:42:19', '2020-07-15 05:42:19'),
(25, 1, 3, 'PI001', 'Kue Pisang', 'kue-pisang-pi001', '<p>Kue Pisang harga per pcs Rp 3.000,00</p>\r\n', ' Kue Pisang', 3000, 20, 'Screenshot_20200715_124624.jpg', 100, '60x60', 'Publish', '2020-07-15 07:43:47', '2020-07-15 05:43:47'),
(26, 1, 6, 'TE002', 'Tempe mendoan', 'tempe-mendoan-te002', '<p>Tempe mendoan harga per pcs Rp 3.000,00</p>\r\n', ' Tempe mendoan', 3000, 20, 'Screenshot_20200715_124744.jpg', 100, '60x60', 'Publish', '2020-07-15 07:45:41', '2020-07-15 05:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nomor_rekening` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nama_pemilik` varchar(255) CHARACTER SET latin1 NOT NULL,
  `gambar` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `nomor_rekening`, `nama_pemilik`, `gambar`, `tanggal_post`) VALUES
(1, 'Bank BCA Cabang Tangerang', '41235678', 'Wahyu', NULL, '2020-06-21 10:17:11'),
(2, 'Bank BRI Syariah', '415167899', 'Ravenclaw', NULL, '2020-06-21 10:18:16'),
(4, 'Bank Mega', '421567899', 'Ananda Faizar', NULL, '2020-06-29 06:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `kode_transaksi` varchar(255) CHARACTER SET latin1 NOT NULL,
  `id_produk` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_pelanggan`, `kode_transaksi`, `id_produk`, `harga`, `jumlah`, `total_harga`, `tanggal_transaksi`, `tanggal_update`) VALUES
(1, 0, 3, '18062020D79QIIN1', 17, 7500, 10, 75000, '2020-06-18 00:00:00', '2020-06-18 08:51:17'),
(2, 0, 3, '18062020D79QIIN1', 15, 5500, 5, 27500, '2020-06-18 00:00:00', '2020-06-18 08:51:17'),
(3, 0, 3, '18062020YUA6FQRP', 13, 8000, 5, 40000, '2020-06-18 00:00:00', '2020-06-18 09:02:17'),
(4, 0, 3, '18062020YUA6FQRP', 14, 6000, 5, 30000, '2020-06-18 00:00:00', '2020-06-18 09:02:17'),
(5, 0, 3, '18062020FHJBCMJW', 17, 7500, 10, 75000, '2020-06-18 00:00:00', '2020-06-18 09:39:10'),
(6, 0, 3, '18062020FHJBCMJW', 12, 6500, 11, 71500, '2020-06-18 00:00:00', '2020-06-18 09:39:10'),
(7, 0, 4, '19062020AQXOUVKL', 17, 7500, 10, 75000, '2020-06-19 00:00:00', '2020-06-19 09:20:02'),
(8, 0, 4, '19062020AQXOUVKL', 15, 5500, 10, 55000, '2020-06-19 00:00:00', '2020-06-19 09:20:02'),
(9, 0, 4, '19062020ESQUE3ZI', 17, 7500, 10, 75000, '2020-06-19 00:00:00', '2020-06-19 12:34:33'),
(10, 0, 4, '19062020ESQUE3ZI', 14, 6000, 10, 60000, '2020-06-19 00:00:00', '2020-06-19 12:34:33'),
(11, 0, 4, '19062020Q8COPBXV', 13, 8000, 10, 80000, '2020-06-19 00:00:00', '2020-06-19 12:42:47'),
(12, 0, 4, '19062020Q8COPBXV', 7, 5500, 5, 27500, '2020-06-19 00:00:00', '2020-06-19 12:42:47'),
(13, 0, 4, '20062020C0KDTXEW', 17, 7500, 11, 82500, '2020-06-20 00:00:00', '2020-06-20 03:49:44'),
(14, 0, 4, '20062020C0KDTXEW', 7, 5500, 11, 60500, '2020-06-20 00:00:00', '2020-06-20 03:49:44'),
(15, 0, 1, '200620205C0BRL6W', 13, 8000, 12, 96000, '2020-06-20 00:00:00', '2020-06-20 12:00:55'),
(16, 0, 1, '200620205C0BRL6W', 10, 4500, 10, 45000, '2020-06-20 00:00:00', '2020-06-20 12:00:55'),
(17, 0, 5, '20062020JYM7IEU6', 16, 4500, 5, 22500, '2020-06-20 00:00:00', '2020-06-20 12:06:55'),
(18, 0, 5, '20062020JYM7IEU6', 10, 4500, 10, 45000, '2020-06-20 00:00:00', '2020-06-20 12:06:55'),
(19, 0, 5, '20062020YTS5ZMLE', 15, 5500, 9, 49500, '2020-06-20 00:00:00', '2020-06-20 12:18:26'),
(20, 0, 5, '20062020YTS5ZMLE', 7, 5500, 9, 49500, '2020-06-20 00:00:00', '2020-06-20 12:18:26'),
(21, 0, 5, '20062020YTS5ZMLE', 16, 4500, 8, 36000, '2020-06-20 00:00:00', '2020-06-20 12:18:26'),
(22, 0, 5, '20062020CPAW9ZMJ', 17, 7500, 7, 52500, '2020-06-20 00:00:00', '2020-06-20 12:19:09'),
(23, 0, 5, '20062020CPAW9ZMJ', 14, 6000, 3, 18000, '2020-06-20 00:00:00', '2020-06-20 12:19:09'),
(24, 0, 1, '20062020IGOQBULS', 10, 4500, 8, 36000, '2020-06-20 00:00:00', '2020-06-20 13:34:07'),
(25, 0, 1, '20062020IGOQBULS', 12, 6500, 8, 52000, '2020-06-20 00:00:00', '2020-06-20 13:34:07'),
(26, 0, 1, '21062020UR6OP9BX', 17, 7500, 5, 37500, '2020-06-21 00:00:00', '2020-06-21 11:50:52'),
(27, 0, 1, '21062020UR6OP9BX', 15, 5500, 5, 27500, '2020-06-21 00:00:00', '2020-06-21 11:50:52'),
(28, 0, 1, '27062020NNDEOTE5', 16, 4500, 1, 4500, '2020-06-27 00:00:00', '2020-06-27 06:29:02'),
(29, 0, 1, '27062020NNDEOTE5', 17, 7500, 1, 7500, '2020-06-27 00:00:00', '2020-06-27 06:29:02'),
(30, 0, 1, '27062020GJBYVN1W', 13, 8000, 1, 8000, '2020-06-27 00:00:00', '2020-06-27 06:32:47'),
(31, 0, 1, '27062020GJBYVN1W', 15, 5500, 1, 5500, '2020-06-27 00:00:00', '2020-06-27 06:32:47'),
(32, 0, 4, '01072020X83UWNSE', 16, 4500, 1, 4500, '2020-07-01 00:00:00', '2020-07-01 13:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `username` varchar(32) CHARACTER SET latin1 NOT NULL,
  `password` varchar(64) CHARACTER SET latin1 NOT NULL,
  `akses_level` varchar(20) CHARACTER SET latin1 NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `tanggal_update`) VALUES
(1, 'Wahyu', 'wahyuwahyu@gmail.com', 'wahyu', '3b7375a688b1820b016224646365e127de125ff0', 'Admin', '2020-06-03 11:55:51'),
(4, 'acegundam', 'acegundam@gmail.com', 'acegundam12', '30244b23e418f61c79ad38bd6a361121fc700859', 'Admin', '2020-06-09 01:44:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  ADD PRIMARY KEY (`id_header_transaksi`),
  ADD UNIQUE KEY `kode_transaksi` (`kode_transaksi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `kode_produk` (`kode_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`),
  ADD UNIQUE KEY `nomor_rekening` (`nomor_rekening`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  MODIFY `id_header_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
