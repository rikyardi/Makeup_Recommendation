-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 03:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matchfoundi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(2, 'admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'tiara', 'tiaramlds@gmail.com', 'b73cc56df3a976c77dc7264c71e92484');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `nama`, `foto`, `isi`, `tgl`) VALUES
(10, 'Wardah', 'WhatsApp Image 2022-01-21 at 21.11.10.jpeg', '<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:20,&quot;w&quot;:695,&quot;h&quot;:41,&quot;abs_x&quot;:225,&quot;abs_y&quot;:603}\" x=\"\">Siapa yang tak kenal dengan Brand&nbsp;<em bis_size=\"{&quot;x&quot;:229,&quot;y&quot;:22,&quot;w&quot;:41,&quot;h&quot;:15,&quot;abs_x&quot;:434,&quot;abs_y&quot;:605}\" x=\"\">&ldquo;Halal&rdquo;&nbsp;</em>ini? Selalu berusaha memberikan yang terbaik untuk para konsumen dan pelanggan setianya.</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:74,&quot;w&quot;:695,&quot;h&quot;:62,&quot;abs_x&quot;:225,&quot;abs_y&quot;:657}\" x=\"\">Sudah 25 tahun sejak 1995, Wardah selalu mengutamakan faktor halal dalam setiap produknya. Mulai dari penelitian, pengembangan hingga produksi.&nbsp;Konsisten dengan prinsip tersebut, nyatanya membuat Wardah semakin dicintai oleh masyarakat Indonesia, dan sangat dikenal dengan&nbsp;<em bis_size=\"{&quot;x&quot;:314,&quot;y&quot;:118,&quot;w&quot;:64,&quot;h&quot;:15,&quot;abs_x&quot;:519,&quot;abs_y&quot;:701}\" x=\"\">steorotype&nbsp;</em>kosmetik ataupun skincare halal<em bis_size=\"{&quot;x&quot;:563,&quot;y&quot;:118,&quot;w&quot;:3,&quot;h&quot;:15,&quot;abs_x&quot;:768,&quot;abs_y&quot;:701}\" x=\"\">.</em></p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:149,&quot;w&quot;:695,&quot;h&quot;:124,&quot;abs_x&quot;:225,&quot;abs_y&quot;:732}\" x=\"\"><br bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:151,&quot;w&quot;:0,&quot;h&quot;:15,&quot;abs_x&quot;:225,&quot;abs_y&quot;:734}\" x=\"\" />\r\nWardah merupakan brand kosmetik yang berdiri sejak tahun 1995 oleh Nurhayati Subakat dengan klaim yaitu produk halal asli Indonesia di bawah PT. Paragon Technology and Innovation (PT. PTI). Sejak awal, PT. PTI berkomitmen untuk selalu memberi manfaat bagi sekitar. Komitmen tersebut diwujudkan melalui visi perusahaan yaitu: mengembangkan Paragonian, menciptakan kebaikan untuk pelanggan, perbaikan berkesinambungan, tumbuh bersama-sama, memelihara bumi, mendukung pendidikan dan kesehatan bangsa, serta mengembangkan bisnis.</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:287,&quot;w&quot;:695,&quot;h&quot;:20,&quot;abs_x&quot;:225,&quot;abs_y&quot;:870}\" x=\"\">&nbsp;</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:321,&quot;w&quot;:695,&quot;h&quot;:20,&quot;abs_x&quot;:225,&quot;abs_y&quot;:904}\" x=\"\">&nbsp;</p>\r\n', '2022-01-27 08:47:51'),
(12, 'Emina', 'emina.jpeg', '<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:20,&quot;w&quot;:695,&quot;h&quot;:62,&quot;abs_x&quot;:225,&quot;abs_y&quot;:603}\" x=\"\"><span bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:22,&quot;w&quot;:669,&quot;h&quot;:56,&quot;abs_x&quot;:225,&quot;abs_y&quot;:605}\" x=\"\">Emina merupakan brand kosmetik lokal untuk remaja yang paling baru di produksi yaitu pada 2015 oleh perusahaan yang sama dengan Wardah dan Make Over yaitu PT. Paragon Technology and Innovation (PT. PTI) yang tengah menembus pasar global.</span></p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:95,&quot;w&quot;:695,&quot;h&quot;:187,&quot;abs_x&quot;:225,&quot;abs_y&quot;:678}\" x=\"\"><br bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:97,&quot;w&quot;:0,&quot;h&quot;:15,&quot;abs_x&quot;:225,&quot;abs_y&quot;:680}\" x=\"\" />\r\n<span bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:118,&quot;w&quot;:687,&quot;h&quot;:139,&quot;abs_x&quot;:225,&quot;abs_y&quot;:701}\" x=\"\"><span bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:118,&quot;w&quot;:664,&quot;h&quot;:35,&quot;abs_x&quot;:225,&quot;abs_y&quot;:701}\" x=\"\">EMINA hadir dengan mengedepankan kesan cute, girly, serta ditujukan untuk kalian yang baru mau belajar makeup ataupun ingin berkreasi mencoba hal baru dengan cara yang menyenangkan. </span><br bis_size=\"{&quot;x&quot;:466,&quot;y&quot;:138,&quot;w&quot;:0,&quot;h&quot;:15,&quot;abs_x&quot;:671,&quot;abs_y&quot;:721}\" x=\"\" />\r\n<br bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:159,&quot;w&quot;:0,&quot;h&quot;:15,&quot;abs_x&quot;:225,&quot;abs_y&quot;:742}\" x=\"\" />\r\n<span bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:180,&quot;w&quot;:687,&quot;h&quot;:77,&quot;abs_x&quot;:225,&quot;abs_y&quot;:763}\" x=\"\">Tidak hanya kemasannya yang menarik, karena targetnya untuk kaum muda, maka formulanya dibuat ringan, namun warnanya tetap pigmented. Kosmetik Emina cukup lengkap, mulai dari BB Cream, loose powder, eyeshadow dan lipstik dengan pilihan warna yang banyak mulai dari yang lembut hingga bold. Sehingga para remaja bisa bereksperimen dengan makeup.</span></span><br bis_size=\"{&quot;x&quot;:116,&quot;y&quot;:242,&quot;w&quot;:0,&quot;h&quot;:15,&quot;abs_x&quot;:321,&quot;abs_y&quot;:825}\" x=\"\" />\r\n&nbsp;</p>\r\n', '2022-01-27 08:37:11'),
(13, 'LT Pro', 'brand_1636806807_ltpro.png', '<p><span style=\"background-color: transparent; color: rgb(0, 0, 0); font-family: \" times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 12pt;=\"\" white-space:=\"\" pre-wrap;\"=\"\">LT Pro merupakan brand kosmetik lokal yang berfokus pada penggunaan kosmetik untuk kebutuhan remaja hingga professional yang berdiri sejak 2006 di Surabaya.</span><br></p><span id=\"docs-internal-guid-95588dff-7fff-e56c-b8fb-71ba5faf35d1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\";=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" background-color:=\"\" transparent;=\"\" font-variant-numeric:=\"\" normal;=\"\" font-variant-east-asian:=\"\" vertical-align:=\"\" baseline;=\"\" white-space:=\"\" pre-wrap;\"=\"\"><br></span><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\";=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" background-color:=\"\" transparent;=\"\" font-variant-numeric:=\"\" normal;=\"\" font-variant-east-asian:=\"\" vertical-align:=\"\" baseline;=\"\" white-space:=\"\" pre-wrap;\"=\"\">Born in 2006, LT PRO was initially conceived by PT Rembaka as a selection for professional make up artists. Since 2009, it has expanded to meet the ever growing need for personal beauty products.</span><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\";=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" background-color:=\"\" transparent;=\"\" font-variant-numeric:=\"\" normal;=\"\" font-variant-east-asian:=\"\" vertical-align:=\"\" baseline;=\"\" white-space:=\"\" pre-wrap;\"=\"\"><br></span><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\";=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" background-color:=\"\" transparent;=\"\" font-variant-numeric:=\"\" normal;=\"\" font-variant-east-asian:=\"\" vertical-align:=\"\" baseline;=\"\" white-space:=\"\" pre-wrap;\"=\"\"><br></span><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\";=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" background-color:=\"\" transparent;=\"\" font-variant-numeric:=\"\" normal;=\"\" font-variant-east-asian:=\"\" vertical-align:=\"\" baseline;=\"\" white-space:=\"\" pre-wrap;\"=\"\">In recent years, LT PRO has also been supporting the fashion industry through major fashion events like Jakarta Fashion Week, Hong Kong Fashion Week, and Tokyoâ€™s Amazon Fashion Week.</span><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\";=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" background-color:=\"\" transparent;=\"\" font-variant-numeric:=\"\" normal;=\"\" font-variant-east-asian:=\"\" vertical-align:=\"\" baseline;=\"\" white-space:=\"\" pre-wrap;\"=\"\"><br><br></span></p><br><br></span>', '2021-11-19 13:44:24'),
(14, 'Make Over', 'MO.png', '<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:20,&quot;w&quot;:712,&quot;h&quot;:62,&quot;abs_x&quot;:225,&quot;abs_y&quot;:603}\" x=\"\"><span bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:22,&quot;w&quot;:709,&quot;h&quot;:56,&quot;abs_x&quot;:225,&quot;abs_y&quot;:605}\" x=\"\"><span bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:22,&quot;w&quot;:709,&quot;h&quot;:56,&quot;abs_x&quot;:225,&quot;abs_y&quot;:605}\" x=\"\">Make Over merupakan brand kosmetik lokal dengan klaim professional cosmetics yang berdiri sejak tahun 2010 dan di bawah perusahaan yang sama dengan Wardah yaitu PT. Paragon Technology and Innovation (PT. PTI). Selain Wardah dan Emina, PT PTI juga turut melahirkan brand Make Over.&nbsp;</span></span></p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:95,&quot;w&quot;:712,&quot;h&quot;:62,&quot;abs_x&quot;:225,&quot;abs_y&quot;:678}\" x=\"\"><span bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:97,&quot;w&quot;:682,&quot;h&quot;:56,&quot;abs_x&quot;:225,&quot;abs_y&quot;:680}\" x=\"\"><span bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:97,&quot;w&quot;:682,&quot;h&quot;:56,&quot;abs_x&quot;:225,&quot;abs_y&quot;:680}\" x=\"\">Brand Make Over merupakan brand PTI yang mengusung tema luxury dengan harga yang sedikit lebih mahal dari dua produk lainnya. Hal tersebut tentunya didukung dengan kualitas dan kuantitas yang dihadirkan oleh Brand ini. Hasil pemakaian yang profesional sehingga banyak dipakai untuk acara-acara resmi atau formal.</span></span></p>\r\n', '2022-01-27 08:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kutipan` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `judul`, `kutipan`, `isi`, `tgl_isi`) VALUES
(5, 'Yuk pilih foundation yang pas buat kamu!!', 'Hello #BeautyEnthusiast ', '<p style=\"margin-left: 25px;\"><img src=\"../gambar/65ded5353c5ee48d0b7d48c591b8f430.jpg\" style=\"width: 626px; float: left;\" class=\"note-float-left\"><span comic=\"\" sans=\"\" ms\";\"=\"\" segoe=\"\" ui=\"\" symbol\";\"=\"\" style=\"text-align: right; font-family: var(--bs-font-sans-serif); font-size: 1rem;\">ï»¿</span><span comic=\"\" sans=\"\" ms\";\"=\"\" segoe=\"\" ui=\"\" symbol\";=\"\" font-size:=\"\" medium;\"=\"\" style=\"text-align: right; font-family: var(--bs-font-sans-serif); font-size: 1rem;\">Foundation tuh apasih? Dikutip dari laman Wikipedia, foundi adalah riasan cair atau bedak yang diaplikasikan pada wajah untuk menciptakan warna yang merata dan merata pada kulit, menutupi kekurangan dan, kadang-kadang, untuk mengubah warna kulit alami</span></p><p style=\"margin-left: 25px;\"><span comic=\"\" sans=\"\" ms\";\"=\"\" segoe=\"\" ui=\"\" symbol\";\"=\"\" style=\"font-family: var(--bs-font-sans-serif); font-size: 1rem; color: rgb(74, 16, 49);\"></span></p><p></p><p style=\"text-align: right; margin-left: 25px;\"><br></p><p style=\"margin-left: 25px;\"><img src=\"../gambar/38af86134b65d0f10fe33d30dd76442e.jpg\" class=\"note-float-left\" style=\"font-family: var(--bs-font-sans-serif); font-size: 1rem; float: left;\"><span comic=\"\" sans=\"\" ms\";\"=\"\" segoe=\"\" ui=\"\" symbol\";\"=\"\" style=\"font-family: var(--bs-font-sans-serif); font-size: 1rem; color: rgb(74, 16, 49);\"><div style=\"text-align: right; margin-left: 25px;\"><br></div></span></p><p style=\"text-align: right;\"><br></p><p></p><p><br></p>', '2021-10-10 13:03:45'),
(8, 'Foundation Brand ', 'Yuk kita simak dulu..', '<p style=\"margin: 10px 0px; padding: 10px 0px; color: rgb(0, 0, 0); font-family: cursive, sans-serif; font-size: medium;\"><img src=\"../gambar/140f6969d5213fd0ece03148e62e461e.jpg\" style=\"width: 626px; float: right;\" class=\"note-float-right\">Foudation hadir dari banyak banget brand lho. Brand-brand atau perusahaan yang memang memproduksi produk kosmetik.</p><p style=\"margin: 10px 0px; padding: 10px 0px; color: rgb(0, 0, 0); font-family: cursive, sans-serif; font-size: medium;\">Selain brand luar negeri yang begitu terkenal dengan kualitas dan harga mahalnya, ada juga lho brand lokal karya anak bangsa yang juga bagus bahkan ramah di kantong.</p><p style=\"margin: 10px 0px; padding: 10px 0px; color: rgb(0, 0, 0); font-family: cursive, sans-serif; font-size: medium;\"><br></p>', '2021-10-10 13:07:47');

-- --------------------------------------------------------

--
-- Table structure for table `point`
--

CREATE TABLE `point` (
  `id_point` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `point` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `point`
--

INSERT INTO `point` (`id_point`, `id_produk`, `point`) VALUES
(1, 12, 4.05555),
(2, 13, 3.7),
(3, 14, 4),
(4, 15, 3.75),
(5, 16, 3.875),
(6, 17, 3.9583333333333),
(7, 18, 3.9444333333333),
(8, 19, 4.05),
(9, 20, 3.8),
(10, 21, 3.7500166666667);

-- --------------------------------------------------------

--
-- Table structure for table `preferensi`
--

CREATE TABLE `preferensi` (
  `id_preferensi` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `preferensi`
--

INSERT INTO `preferensi` (`id_preferensi`, `id_produk`, `nilai`) VALUES
(1, 12, 0.41053085783165),
(2, 13, 0.17819713486665),
(3, 14, 0.32855709109681),
(4, 15, 0.64455940589589),
(5, 16, 0.57714114872682),
(6, 17, 0.59706400960076),
(7, 18, 0.59818526101686),
(8, 19, 0.42856732675298),
(9, 20, 0.53725988352742),
(10, 21, 0.43139337474231);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(5) NOT NULL,
  `brand` int(5) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `brand`, `foto`, `nama`, `deskripsi`, `tgl`) VALUES
(12, 10, 'wardah1.png', 'Wardah Lightening Liquid Foundation ', '<p style=\"text-align: justify;\"><strong>Variasi&nbsp;</strong></p>\r\n\r\n<p style=\"text-align: justify;\"><span style=\"color:#e74c3c;\">Light Beige&nbsp; &nbsp; &nbsp;Beige&nbsp; &nbsp; &nbsp;Ivory&nbsp; &nbsp; &nbsp;Natural</span></p>\r\n\r\n<p style=\"text-align: justify;\"><strong>Deskripsi</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">Mencerahkan dan menjadikan kulit wajah lebih halus</li>\r\n	<li style=\"text-align: justify;\">Menyamarkan tampilan pori dan garis halus</li>\r\n</ol>\r\n\r\n<p style=\"text-align: justify;\"><strong>Cara Pakai&nbsp;</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">Titikkan Wardah Lightening Liquid Concealer secukupnya pada area yang diperlukan (bawah mata/ bekas jerawat)</li>\r\n	<li style=\"text-align: justify;\">Ratakan menggunakan tangan/brush/sponge</li>\r\n	<li style=\"text-align: justify;\">Wajah cerahmu siap menjalani aktivitas<br />\r\n	&nbsp;</li>\r\n</ol>\r\n', '2022-01-12 13:41:53'),
(13, 10, 'wardah2.png', 'Wardah Everyday Luminous Liquid Foundation', '<p style=\"text-align: justify;\"><strong>Variasi</strong></p>\r\n\r\n<p style=\"text-align: justify;\"><span style=\"color:#e74c3c;\">Natural Beige&nbsp; &nbsp; &nbsp;Light Beige&nbsp; &nbsp; &nbsp;Beige&nbsp; &nbsp; &nbsp;Natural</span><br />\r\n<strong>Deskripsi</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\"><strong>Kemampuan untuk menutupi perbedaan warna wajah, noda hitam yang tinggi&nbsp;</strong><strong>namun tetap terasa ringan&nbsp;</strong></li>\r\n	<li style=\"text-align: justify;\"><strong>Kemampuan untuk menutupi perbedaan warna wajah dan noda hitam</strong></li>\r\n	<li style=\"text-align: justify;\"><strong>Hasil bebas kilap dan menghaluskan tampilan wajah sehingga pori-pori tidak terlihat</strong></li>\r\n	<li style=\"text-align: justify;\"><strong>Perlindungan dari sinar UVA dan UVB</strong></li>\r\n</ol>\r\n\r\n<p style=\"text-align: justify;\"><strong>Cara Pakai</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\"><strong>Oleskan tipis merata ke arah bawah searah bulu halus di wajah</strong></li>\r\n	<li style=\"text-align: justify;\"><strong>Gunakan kuas khusus foundation atau langsung dengan jari tangan</strong></li>\r\n	<li style=\"text-align: justify;\"><strong>Aplikasikan ke seluruh wajah, dimulai dari dahi, pipi, dan diakhiri pada bagian dagu.</strong></li>\r\n</ol>\r\n', '2022-01-12 13:41:53'),
(14, 10, 'wardah3.png', 'Wardah Exclusive Liquid Foundation', '<p style=\"text-align: justify;\"><strong>Variasi&nbsp;</strong></p>\r\n\r\n<p style=\"text-align: justify;\"><span style=\"color:#e74c3c;\">Light Beige&nbsp; &nbsp; &nbsp;Sheer pink&nbsp; &nbsp; &nbsp;Sandy Beige&nbsp; &nbsp; &nbsp;Natural&nbsp; &nbsp; &nbsp;Coffe Beige</span></p>\r\n\r\n<p style=\"text-align: justify;\"><strong>Deskripsi</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">Kemampuan untuk menutupi perbedaan warna wajah, noda hitam yang tinggi</li>\r\n	<li style=\"text-align: justify;\">Kandungan yang mampu menutupi pori-pori kulit secara menyeluruh</li>\r\n	<li style=\"text-align: justify;\">Sunscreen Gel dengan kandungan SPF 30 yang mampu melindungi kulit dari paparan sinar matahari</li>\r\n</ol>\r\n\r\n<p style=\"text-align: justify;\"><strong>Cara Pakai&nbsp;</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">Oleskan tipis merata ke arah bawah searah bulu halus di wajah</li>\r\n	<li style=\"text-align: justify;\">Gunakan kuas khusus foundation atau langsung dengan jari tangan</li>\r\n	<li style=\"text-align: justify;\">Aplikasikan ke seluruh wajah, dimulai dari dahi, pipi, dan diakhiri pada bagian dagu.<br />\r\n	&nbsp;</li>\r\n</ol>\r\n', '2022-01-12 13:41:53'),
(15, 10, 'wardah4.png', 'Wardah Colorfit Matte Foundation', '<p style=\"text-align: justify;\"><strong>Variasi</strong></p>\r\n\r\n<p style=\"text-align: justify;\"><span style=\"color:#e74c3c;\">Pink Fair&nbsp; &nbsp; &nbsp;Light Ivory&nbsp; &nbsp; &nbsp;Warm Ivory&nbsp; &nbsp; &nbsp;Neutral Beige&nbsp; &nbsp; &nbsp;Olive Beige&nbsp; &nbsp; &nbsp;Golden Sand&nbsp; &nbsp; &nbsp;Neutral Sand&nbsp; &nbsp; &nbsp; Almond</span><br />\r\n<strong>Deskripsi</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">Oil Control up to 12 Hours</li>\r\n	<li style=\"text-align: justify;\">SkinMatch Technology</li>\r\n	<li style=\"text-align: justify;\">Transferproof + SPF 30 PA++</li>\r\n</ol>\r\n\r\n<p style=\"text-align: justify;\"><strong>Cara Pakai</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">Oleskan tipis merata ke arah bawah searah bulu halus di wajah</li>\r\n	<li style=\"text-align: justify;\">Gunakan kuas khusus foundation atau langsung dengan jari tangan</li>\r\n	<li style=\"text-align: justify;\">Aplikasikan ke seluruh wajah, dimulai dari dahi, pipi, dan diakhiri pada bagian dagu.<br />\r\n	&nbsp;</li>\r\n</ol>\r\n', '2022-01-12 13:41:53'),
(16, 14, 'produkMO1.png', 'MAKE OVER Ultra Cover Liquid Matt Foundation', '<p style=\"text-align: justify;\"><strong>Variasi</strong><br />\r\n<span style=\"color:#e74c3c;\">Ochre&nbsp; &nbsp; &nbsp;Pink Shade&nbsp; &nbsp; &nbsp;Nude silk&nbsp; &nbsp; &nbsp;Amber Rose&nbsp; &nbsp; &nbsp;Cr&egrave;me rose&nbsp; &nbsp; &nbsp;Velvet nude&nbsp; &nbsp; &nbsp;Beige Blast&nbsp; &nbsp; &nbsp;Caramel&nbsp; &nbsp; &nbsp;Pearl</span><br />\r\n<strong>Deskripsi</strong></p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Make Over Ultra Cover Liquid Matt Foundation merupakan liquid foundation dengan coverage tinggi yang memberikan semi-matte/satin finish. Dengan soft focus agent, alas bedak ini akan memberikan sapuan alami dengan lembut sekaligus membantu menyamarkan noda hitam, garis halus dan kerutan. Ketika alas rias terbaik diterapkan dengan baik, riasan yang bagus akan bertahan lama.</p>\r\n\r\n<p style=\"text-align: justify;\">Benefit :</p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\">Coverage medium hingga full</li>\r\n	<li style=\"text-align: justify;\">Mudah dibaurkan</li>\r\n	<li style=\"text-align: justify;\">Semi-matte</li>\r\n	<li style=\"text-align: justify;\">Terdiri 9 pilihan shades</li>\r\n	<li style=\"text-align: justify;\">Kandungan jojoba oil untuk menjaga kelembapan kulit</li>\r\n	<li style=\"text-align: justify;\">SPF 31</li>\r\n</ul>\r\n\r\n<p style=\"text-align: justify;\"><strong>Cara Pakai</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">Aplikasikan dalam keadaan bersih</li>\r\n	<li style=\"text-align: justify;\">Kocok botol foundation terlebih dahulu</li>\r\n	<li style=\"text-align: justify;\">Titikkan produk secukupnya pada wajah</li>\r\n	<li style=\"text-align: justify;\">Ratakan produk menggunakan brush atau beauty blender dari bagian tengah wajah keluar dengan cara ditepuk perlahan hingga merata<br />\r\n	&nbsp;</li>\r\n</ol>\r\n', '2022-01-12 13:41:53'),
(17, 14, 'produkMO2.png', 'MAKE OVER Powerstay Weightless Liquid Foundation ', '<p><strong>Variasi</strong><br />\r\n<span style=\"color:#e74c3c;\">Marble&nbsp; &nbsp; &nbsp;Warm ivory&nbsp; &nbsp; &nbsp;Pink ivory</span></p>\r\n\r\n<p><span style=\"color:#e74c3c;\">Honey beige&nbsp; &nbsp; &nbsp;Natural beige&nbsp; &nbsp; &nbsp;Warm Sand</span></p>\r\n\r\n<p><span style=\"color:#e74c3c;\">Coral Sand&nbsp; &nbsp; &nbsp;Rich cocoa&nbsp; &nbsp; &nbsp;Ivory</span></p>\r\n\r\n<p><span style=\"color:#e74c3c;\">Sand&nbsp; &nbsp; &nbsp;Cr&egrave;me beige&nbsp; &nbsp; &nbsp;Warm beige</span></p>\r\n\r\n<p><span style=\"color:#e74c3c;\">Pink beige&nbsp; &nbsp; &nbsp;Cool sand&nbsp; &nbsp; Cool tan</span></p>\r\n\r\n<p><span style=\"color:#e74c3c;\">Warm marble&nbsp; &nbsp; &nbsp;Coral ivory&nbsp; &nbsp; &nbsp;Cr&egrave;me cocoa</span></p>\r\n\r\n<p><span style=\"color:#e74c3c;\">Cr&egrave;me tan&nbsp; &nbsp; &nbsp;</span><br />\r\n<strong>Deskripsi</strong></p>\r\n\r\n<p style=\"text-align: justify;\">Make Over Powerstay Weightless Liquid Foundation merupakan liquid foundation dengan medium buildable coverage yang terasa ringan dan nyaman. Foundation ini memberikan hasil matte yang tetap membuat wajah berdimensi (tidak flat) dengan Oil Absorber yang menjaga kulit dari keringat dan minyak sehingga tampilan makeup akan bertahan hingga pemakaian 12 jam. Terdiri dari 20 shades yang sesuai untuk kulit wanita Indonesia. Diformulasikan dengan SPF 30/PA+++ yang memberikan perlindungan dari sunar UV-A &amp; UV-B sehingga cocok digunakan untuk segala aktivitas.Keunggulan:</p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">Longlasting &amp; Oil Control Dapat bertahan hingga pemakaian 12 jam, membantu make up lebih tahan lama saat kondisi kulit berminyak dan berkeringat</li>\r\n	<li style=\"text-align: justify;\">Lightweight Formula yang terasa sangat ringan dan dapat menyatu dengan baik pada kulit</li>\r\n	<li style=\"text-align: justify;\">Tersedia dalam 20 varian yang sesuai untuk warna kulit wanita Indonesia&nbsp;</li>\r\n	<li style=\"text-align: justify;\">Lively Matte Finish &amp; Medium Buildable Coverage Memberikan hasil matte yang tetap membuat wajah berdimensi (tidak flat) dan coverage yang dapat di-build up, namun terlihat natural, tetap terasa ringan dan nyaman</li>\r\n	<li style=\"text-align: justify;\">SPF 30 PA+++ yang memberikan perlindungan dari sinar UV-A dan UV-B</li>\r\n</ol>\r\n\r\n<p style=\"text-align: justify;\"><strong>Cara Pakai</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">Kocok botol terlebih dahulu sebelum digunakan</li>\r\n	<li style=\"text-align: justify;\">Titikkan secukupnya pada punggung tangan</li>\r\n	<li style=\"text-align: justify;\">Ambil foundation dari punggung tangan dan titikkan pada satu bagian wajah, kemudian ratakan dari tengah ke luar</li>\r\n	<li style=\"text-align: justify;\">Ulangi untuk seluruh bagian wajah</li>\r\n	<li style=\"text-align: justify;\">Satu pump cukup untuk seluruh wajah. Tambahkan jumlah pump untuk coverage lebih</li>\r\n	<li style=\"text-align: justify;\">Untuk hasil yang lebih smooth dan natural, gunakan beauty blender</li>\r\n	<li style=\"text-align: justify;\">Untuk hasil yang lebih cover dan merata, gunakan foundation brush</li>\r\n</ol>\r\n', '2022-01-12 13:41:53'),
(18, 14, 'produkMO3.png', 'MAKE OVER Hydrastay Glow Fluid Foundation ', '<p style=\"text-align: justify;\"><strong>Variasi</strong></p>\r\n\r\n<p style=\"text-align: justify;\"><span style=\"color:#e74c3c;\">Marble&nbsp; &nbsp; &nbsp;Warm ivory&nbsp; &nbsp; &nbsp;Pink ivory&nbsp; &nbsp; &nbsp;Natural beige</span></p>\r\n\r\n<p style=\"text-align: justify;\"><span style=\"color:#e74c3c;\">Honey beige&nbsp; &nbsp; &nbsp;Coral sand&nbsp; &nbsp; &nbsp;Warm sand&nbsp; &nbsp; &nbsp;Tan</span><br />\r\n<strong>Deskripsi</strong></p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">MAKE OVER Hydrastay Glow Fluid Foundation adalah foundation yang diformulasikan khusus untuk kulit kering, mengandung Deep Hydrating Actives yang mampu menghidrasi secara intens hingga 24 jam. Memiliki medium coverage yang dapat di build hingga mencapai coverage yang tinggi. Dilengkapi dengan Water Burst Technology dengan tekstur yang sangat ringan, mudah di baurkan, dan fresh saat diratakan ke kulit menghasilkan second-skin glow finish yang nyaman digunakakan sepanjang hari bahkan setelah diaplikasikan berlayer.</p>\r\n\r\n<p style=\"text-align: justify;\">Keunggulan Lainnya :</p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">SPF 30 / PA+++</li>\r\n	<li style=\"text-align: justify;\">Dermatologically Tested&nbsp;</li>\r\n	<li style=\"text-align: justify;\">Non-Comedogenic</li>\r\n	<li style=\"text-align: justify;\">Alcohol-free</li>\r\n</ol>\r\n\r\n<p style=\"text-align: justify;\"><strong>Cara Pakai</strong></p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">Aplikasikan foundation pada wajah menggunakan jari/aplikator seperti brush atau beauty sponge</li>\r\n	<li style=\"text-align: justify;\">Untuk aplikasi menggunakan jari atau brush, ratakan foundation dengan gerakan memutar/menggeser, kemudian tap-tap agar lebih merata</li>\r\n	<li style=\"text-align: justify;\">Untuk aplikasi menggunakan beauty sponge, ratakan foundation dengan gerakan tap-tap hingga merata. Layer foundation untuk mendapatkan coverage yang lebih tinggi</li>\r\n</ol>\r\n', '2022-01-12 13:41:53'),
(19, 12, 'produkemina.png', 'Emina Bare with Me Mineral Mild Foundation', '<p style=\"text-align: justify;\"><strong>Variasi</strong></p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\"><span style=\"color:#e74c3c;\">Light&nbsp; &nbsp; &nbsp;Natural&nbsp; &nbsp; &nbsp;Caramel&nbsp; &nbsp; &nbsp;Mocca</span></p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\"><strong>Deskripsi</strong></p>\r\n\r\n<p style=\"text-align: justify;\">Emina Bare with Me Mineral Mild Foundation, foundation dengan formula ringan yang membuat wajah tampak halus dan membuat warna kulit terlihat lebih merata. Memberikan hasil semi-matte dengan tingkat coverage yang cocok untuk aktivitas sehari-hari sehingga kulit tampak natural dan tetap sehat. Dilengkapi SPF 25 PA+++ sehingga kulit terlindungi dari efek negatif sinar matahari.</p>\r\n\r\n<p style=\"text-align: justify;\"><strong>Cara Pakai</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">Kocok botol sebelum digunakan.</li>\r\n	<li style=\"text-align: justify;\">Aplikasikan foundation secukupnya pada wajah dan leher</li>\r\n	<li style=\"text-align: justify;\">Ratakan dengan jari atau spons.</li>\r\n</ol>\r\n', '2022-01-12 13:41:53'),
(20, 13, 'produkltpro1.png', 'LT PRO HD Perfect Image Foundation', '<p style=\"text-align: justify;\"><strong>Variasi</strong><br />\r\n<span style=\"color:#e74c3c;\">Fair&nbsp; &nbsp; &nbsp;Exotic&nbsp; &nbsp; &nbsp;Natural</span></p>\r\n\r\n<p style=\"text-align: justify;\"><strong>Deskripsi</strong></p>\r\n\r\n<p style=\"text-align: justify;\">Mengandung Micronized Powder, Olive Oil Decyl Ester, Squalane, dan Vitamin E, untuk perawatan yang lembut dan creamy. Alas bedak cair untuk riasan harian untuk memberikan penutup yang halus dan tampak alami.</p>\r\n\r\n<p style=\"text-align: justify;\"><strong>Cara Pakai</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">Kocok botol sebelum digunakan</li>\r\n	<li style=\"text-align: justify;\">Aplikasikan foundation secukupnya pada wajah dan leher</li>\r\n	<li style=\"text-align: justify;\">Ratakan dengan jari atau spons.<br />\r\n	&nbsp;</li>\r\n</ol>\r\n', '2022-01-12 13:41:53'),
(21, 13, 'produkltpro2.png', 'LT Pro Aquaboost Serum Foundation', '<p style=\"text-align: justify;\"><strong>Variasi&nbsp;</strong></p>\r\n\r\n<p style=\"text-align: justify;\"><span style=\"color:#e74c3c;\">Light&nbsp; &nbsp; &nbsp;Light Medium&nbsp; &nbsp; &nbsp;Medium&nbsp; &nbsp; &nbsp; Dark</span></p>\r\n\r\n<p style=\"text-align: justify;\"><strong>Deskripsi</strong></p>\r\n\r\n<p style=\"text-align: justify;\">Foundation berbentuk liquid, dilengkapi dengan perlindungan terhadap sinar UV, yang membantu menyamarkan ketidaksempurnaan kulit wajah sehingga memberikan tampilan warna kulit yang lebih merata sekaligus membantu menjaga kelembaban kulit. Foundation ini terasa ringan di kulit dan memberikan tampilan kulit wajah yang segr, natural dan sehat.</p>\r\n\r\n<p style=\"text-align: justify;\"><strong>Cara Pakai</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">Kocok dahulu sebelum digunakan.</li>\r\n	<li style=\"text-align: justify;\">Aplikasikan pada seluruh wajah menggunakan jari, kuas atau spons make up sampai merata.</li>\r\n	<li style=\"text-align: justify;\">Ulangi penggunaan untuk mendapatkan hasil coverage yang diinginkan.</li>\r\n	<li style=\"text-align: justify;\">Untuk kulit normal cenderung kering, disarankan untuk menggunakan LT PRO Aquaboost series lainnya untuk mendapatkan hasil kulit yang tampak lembab dan sehat<br />\r\n	&nbsp;</li>\r\n</ol>\r\n', '2022-01-12 13:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `id_score` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `daya_minat` int(5) NOT NULL,
  `daya_tahan` int(5) NOT NULL,
  `coverage` int(5) NOT NULL,
  `harga` int(5) NOT NULL,
  `finishing` int(5) NOT NULL,
  `jenis_kulit` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id_score`, `id_produk`, `id_user`, `daya_minat`, `daya_tahan`, `coverage`, `harga`, `finishing`, `jenis_kulit`) VALUES
(1, 12, 4, 5, 5, 5, 5, 5, 5),
(2, 19, 5, 5, 5, 5, 5, 5, 5),
(3, 16, 10, 5, 4, 4, 2, 3, 3),
(4, 21, 11, 4, 3, 3, 3, 4, 2),
(5, 12, 13, 3, 3, 5, 4, 5, 3),
(6, 16, 13, 5, 5, 5, 5, 5, 5),
(7, 12, 14, 4, 4, 5, 3, 3, 1),
(8, 13, 14, 4, 4, 2, 3, 4, 5),
(9, 16, 15, 5, 5, 5, 3, 5, 4),
(10, 20, 16, 3, 3, 3, 4, 3, 1),
(11, 19, 16, 5, 4, 4, 4, 2, 2),
(12, 21, 16, 2, 4, 4, 2, 4, 3),
(13, 16, 16, 3, 4, 3, 3, 2, 4),
(14, 17, 16, 4, 4, 5, 2, 4, 3),
(15, 18, 16, 3, 3, 4, 2, 4, 2),
(16, 12, 17, 5, 4, 4, 3, 4, 2),
(17, 13, 17, 3, 4, 3, 5, 2, 4),
(18, 19, 19, 4, 3, 3, 4, 3, 1),
(19, 16, 20, 5, 4, 4, 4, 5, 3),
(20, 19, 21, 4, 4, 4, 4, 3, 5),
(21, 19, 22, 4, 3, 4, 3, 4, 5),
(22, 19, 22, 5, 5, 5, 5, 5, 5),
(23, 12, 22, 5, 5, 5, 5, 5, 5),
(24, 13, 22, 3, 3, 3, 3, 3, 5),
(25, 14, 22, 4, 4, 4, 4, 4, 5),
(26, 15, 22, 4, 4, 4, 5, 4, 1),
(27, 20, 22, 4, 3, 3, 3, 3, 4),
(28, 21, 22, 5, 4, 4, 3, 3, 5),
(29, 16, 22, 5, 4, 3, 4, 4, 5),
(30, 17, 22, 5, 4, 5, 3, 4, 5),
(31, 18, 22, 5, 4, 3, 4, 3, 5),
(32, 12, 23, 3, 3, 3, 5, 3, 5),
(33, 12, 23, 3, 3, 3, 5, 3, 5),
(34, 14, 23, 4, 4, 3, 4, 4, 5),
(35, 19, 23, 4, 3, 5, 4, 3, 5),
(36, 12, 24, 4, 4, 4, 3, 4, 3),
(37, 19, 24, 4, 4, 5, 3, 3, 3),
(38, 13, 24, 4, 4, 3, 3, 3, 3),
(39, 14, 24, 3, 5, 3, 3, 3, 2),
(40, 15, 24, 3, 3, 3, 3, 3, 3),
(41, 21, 24, 3, 4, 3, 3, 3, 3),
(42, 17, 24, 3, 3, 5, 2, 4, 3),
(43, 18, 24, 3, 4, 4, 2, 4, 3),
(44, 17, 15, 5, 5, 5, 3, 5, 4),
(45, 18, 15, 5, 5, 5, 3, 5, 4),
(46, 18, 15, 5, 5, 5, 3, 5, 4),
(47, 18, 15, 5, 5, 5, 3, 4, 4),
(48, 12, 15, 5, 5, 5, 4, 5, 4),
(49, 13, 15, 5, 5, 5, 4, 5, 4),
(50, 14, 15, 5, 5, 5, 4, 5, 4),
(51, 15, 15, 5, 5, 5, 4, 5, 4),
(52, 19, 15, 5, 5, 5, 4, 5, 4),
(53, 20, 15, 5, 5, 5, 3, 5, 5),
(54, 21, 15, 5, 5, 5, 3, 5, 5),
(55, 15, 25, 4, 4, 4, 3, 4, 2),
(56, 16, 25, 5, 4, 5, 2, 4, 1),
(57, 20, 25, 2, 4, 5, 3, 5, 3),
(58, 21, 25, 2, 5, 5, 5, 5, 4),
(59, 16, 26, 5, 3, 3, 2, 3, 2),
(60, 19, 26, 5, 3, 4, 2, 5, 4),
(61, 20, 26, 5, 5, 5, 5, 5, 2),
(62, 15, 26, 5, 4, 4, 2, 4, 2),
(63, 15, 27, 5, 4, 5, 4, 4, 3),
(64, 17, 5, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(4, 'riky', 'riky.ardi321@gmail.com', '310fc95fb48b60b35c620af9dddc362e'),
(5, 'coba', 'coba@gmail.com', 'a3040f90cc20fa672fe31efcae41d2db'),
(9, 'tiara', 'tiara@gmail.com', 'edf2b993f24a5f014ead4d701c66953f'),
(10, 'Galen', 'galennino@gmail.com', 'b67d18a13e6528df077f3dd28029c187'),
(11, 'Lailatul Maghfiro', 'lailatulmaghfiro98@gmail.com', '2217f5c68ad5eefa729ea076c206a7c2'),
(12, 'Merry', 'marry@gmail.com', '11f1b867990a023f342874cb9c920d93'),
(13, 'Eka Merry', 'eka.heart03@gmail.com', 'b73cc56df3a976c77dc7264c71e92484'),
(14, 'Randu', 'randu@gmail.com', 'e3a467609ae131f4a6aa6f82a92a4338'),
(15, 'Kazita pradari', 'KazitaPradari44@gmail.com', '2660bf0fcaac8949a071b79f86b36159'),
(16, 'Abian Afif Haidar', 'abianhaidar@gmail.com', '205453f8a7fec8861b182a2b23825da9'),
(17, 'Eldarian Gematama', 'eldarian@gmail.com', '2a50ecb7ad1588aec49359d7cae35978'),
(18, 'Bagaskara Ruardinata', 'bagaskara@gmail.com', 'ae5b87f0db4d4b8cb1bfa9495a44960a'),
(19, 'Khairunnisa Fajriyanti', 'nisadensi18@gmail.com', '7185330c812896b63f0d534fa076fa74'),
(20, 'Dyvia', 'dyviaoliviani2@gmail.com', '5eb004f424a4f5baa6ff5e8dab52b43b'),
(21, 'Anisah', 'anisahaulia04@gmail.com', 'c013723450bdd81be80a288af7c9a6d8'),
(22, 'Janita ', 'dkm.jd12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(23, 'Amilah', 'nuramilahnuramilah@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(24, 'Andhika Hardiansyah', 'andhika1429@gmail.com', '183b262e6084e2531d3f7377953843d6'),
(25, 'Jeniffer Hala Erzhan', 'hala@gmail.com', 'e5021081a7cd13aa7f5ba3a10f20f415'),
(26, 'Shenna Artadhia', 'shenna@gmail.com', '0a32a4294b7ac7db86b97995d6e4da06'),
(27, 'Inara Syaima Caleesta', 'inarasyaima@gmail.com', 'cbfd0848538328d2566e1ac0ef4381db'),
(28, 'saya', 'saya@gmail.com', '96a0dead881b8e2368157ccb08f76d74'),
(29, 'agus', 'agus@gmail.com', '01c3c766ce47082b1b130daedd347ffd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`id_point`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `preferensi`
--
ALTER TABLE `preferensi`
  ADD PRIMARY KEY (`id_preferensi`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produk_ibfk_1` (`brand`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id_score`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `point`
--
ALTER TABLE `point`
  MODIFY `id_point` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `preferensi`
--
ALTER TABLE `preferensi`
  MODIFY `id_preferensi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `id_score` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `point`
--
ALTER TABLE `point`
  ADD CONSTRAINT `point_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`);

--
-- Constraints for table `preferensi`
--
ALTER TABLE `preferensi`
  ADD CONSTRAINT `preferensi_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`brand`) REFERENCES `brand` (`id`);

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`),
  ADD CONSTRAINT `score_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
