-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2018 at 10:00 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaints`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `idarea` int(11) NOT NULL,
  `namaarea` varchar(255) NOT NULL,
  `idkota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`idarea`, `namaarea`, `idkota`) VALUES
(1, 'Jakarta Selatan', 1),
(2, 'Jakarta Pusat', 1),
(3, 'Jakarta Timur', 1),
(4, 'Jakarta Utara', 1),
(5, 'Jakarta Barat', 1),
(19, 'Tangerang', 1),
(37, 'cemot', 0),
(38, 'rewrwer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `idbulan` int(11) NOT NULL,
  `namabulan` varchar(255) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`idbulan`, `namabulan`, `tahun`) VALUES
(1, 'januari', 2017),
(2, 'februari', 2017),
(3, 'mart', 2017),
(4, 'april', 2017),
(5, 'mei', 2017),
(6, 'juni', 2017),
(7, 'juli', 2017),
(8, 'agus', 2017),
(9, 'sept', 2017),
(10, 'okt', 2017),
(11, 'nop', 2017),
(12, 'des', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `channel`
--

CREATE TABLE `channel` (
  `idchannel` int(11) NOT NULL,
  `nm_channel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `channel`
--

INSERT INTO `channel` (`idchannel`, `nm_channel`) VALUES
(1, 'Online Shop'),
(2, 'On Store'),
(3, 'Bazzar'),
(4, 'Chanel'),
(5, 'Reseller'),
(6, 'Coffee Shop');

-- --------------------------------------------------------

--
-- Table structure for table `complainusers`
--

CREATE TABLE `complainusers` (
  `id` int(11) NOT NULL,
  `idcustomer` int(11) NOT NULL,
  `id_portal` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `idbulan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `idkota` int(11) NOT NULL,
  `idarea` int(11) NOT NULL,
  `id_channel` int(11) NOT NULL,
  `idstore` int(11) NOT NULL,
  `resolved` varchar(255) NOT NULL,
  `Penanganan` varchar(255) NOT NULL,
  `id_tipecomplains` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `expdate` date NOT NULL,
  `datapurcase` date NOT NULL,
  `komen` varchar(255) NOT NULL,
  `id_productreview` int(11) NOT NULL,
  `id_impression` int(255) NOT NULL,
  `id_productdev` int(11) NOT NULL,
  `id_inquiry` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `createdby` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `storelocation` varchar(244) NOT NULL,
  `dateopening` date NOT NULL,
  `datedefect` date NOT NULL,
  `datereplace` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complainusers`
--

INSERT INTO `complainusers` (`id`, `idcustomer`, `id_portal`, `tanggal`, `idbulan`, `nama`, `alamat`, `telp`, `idkota`, `idarea`, `id_channel`, `idstore`, `resolved`, `Penanganan`, `id_tipecomplains`, `id_produk`, `expdate`, `datapurcase`, `komen`, `id_productreview`, `id_impression`, `id_productdev`, `id_inquiry`, `comment`, `createdby`, `tahun`, `storelocation`, `dateopening`, `datedefect`, `datereplace`) VALUES
(1, 10001, 4, '2016-12-14', 12, 'claudia peggie', '', '0817095000', 1, 1, 2, 2, 'tidak', '', 1, 2, '2017-06-18', '2017-06-15', 'Rasa sudah asam dan banyak gumpalan susu', 0, 0, 0, 0, '', 0, 0000, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(2, 10002, 4, '2017-07-19', 7, 'Ade putri nugrahani', 'Pejanten barat / Pasar minggu ', '', 1, 1, 2, 1, 'tidak', '', 0, 0, '2017-07-22', '2017-07-19', 'Rasa sudah asam ', 0, 0, 0, 0, '', 2, 2016, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(3, 10003, 4, '2017-06-15', 7, 'Citra Pangestu', '', '', 1, 1, 2, 2, 'tidak', '', 0, 2, '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, '', 2, 2017, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(4, 10004, 4, '2017-04-06', 4, 'halimlili81', '', '', 1, 4, 2, 0, 'tidak', '', 0, 0, '2017-08-06', '0000-00-00', 'hari ke 4 susu asam', 0, 0, 0, 0, '', 0, 0000, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(5, 10005, 4, '2017-05-16', 6, 'ng lydia', '', '', 0, 0, 0, 0, 'tidak', '', 0, 1, '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 'difficul to open', 0, 0000, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(6, 10006, 4, '2016-08-05', 8, 'Andhika Aulia', '', '0811120104', 0, 0, 0, 0, 'tidak', '', 0, 0, '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, '', 2, 2016, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(7, 10007, 4, '2017-06-04', 6, 'Putri WK', '', '08111008280', 0, 0, 2, 0, 'tidak', '', 0, 0, '2017-03-30', '1970-01-01', 'gumpalan susu', 0, 0, 0, 0, '', 0, 0000, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(8, 10008, 4, '2017-06-04', 6, 'Dewi (DressforCofort)', '', '', 2, 0, 2, 3, 'tidak', '', 0, 0, '1970-01-01', '1970-01-01', 'gumpalan susu', 0, 0, 0, 0, '', 0, 0000, '', '0000-00-00', '1970-01-01', '0000-00-00'),
(9, 10009, 4, '2017-02-04', 2, 'Pauline Keyzia', '', '', 0, 0, 0, 0, 'tidak', '', 1, 2, '2017-05-04', '0000-00-00', 'susu basi', 0, 0, 0, 0, '', 0, 0000, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(10, 10010, 4, '2017-02-02', 2, 'adijoyo p', '', '', 1, 1, 2, 2, 'tidak', '', 1, 1, '2017-09-02', '0000-00-00', 'bergumpal', 0, 0, 0, 0, '', 2, 0000, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(11, 10011, 4, '2017-07-18', 7, 'Nadya Fitriyani1803', '', '', 0, 0, 0, 0, 'tidak', '', 0, 0, '0000-00-00', '0000-00-00', '', 0, 0, 0, 1, 'pertanyaan pricelist', 2, 0000, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(12, 10012, 4, '2017-07-19', 7, 'Nadya Paramita', '', '', 0, 0, 0, 0, 'tidak', '', 0, 0, '0000-00-00', '0000-00-00', '', 0, 0, 0, 1, 'Pertanyaan PriceList', 0, 2017, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(13, 10013, 4, '2017-07-23', 7, 'Rara Viv Tan', '', '', 0, 0, 0, 0, 'tidak', '', 0, 0, '0000-00-00', '0000-00-00', '', 0, 0, 0, 1, 'Pertanyaan Store Hometown', 0, 0000, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(14, 10014, 4, '2017-07-22', 7, 'Vina Effendi', 'Tanjung duren', '', 1, 2, 0, 0, 'tidak', '', 0, 0, '0000-00-00', '0000-00-00', '', 0, 0, 0, 1, 'fasilitan pengantaran susu, store penjual hometown', 0, 0000, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(15, 10015, 4, '2017-07-24', 7, 'Gaby Dharmaji', '', '087808867538', 1, 0, 0, 0, 'tidak', '', 0, 0, '0000-00-00', '0000-00-00', '', 0, 0, 0, 2, 'bussiness offering', 0, 0000, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(16, 10016, 4, '2017-07-24', 7, 'Phillipian Townsend', '', '', 0, 0, 0, 0, 'tidak', '', 0, 0, '0000-00-00', '0000-00-00', '', 0, 0, 0, 1, 'question: how to buy', 0, 0000, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(17, 10017, 3, '2017-11-11', 11, 'Komalasari', 'Jl Musi No 28 Cideng ', '081932259163', 1, 2, 2, 7, 'tidak', '', 1, 1, '2017-10-01', '2017-10-21', 'Susu sudah kental, botol melembung, baunya tidak enak, rasa asam, Kental & Bewarna Kuning', 0, 0, 0, 0, '', 0, 0000, '', '2017-10-26', '2017-10-26', '2017-11-02'),
(18, 10018, 3, '2017-10-04', 3, 'DianFarah', 'Jl Ampera Raya No 60 ', '08121133426', 1, 1, 3, 0, 'tidak', '', 1, 1, '1970-01-01', '1970-01-01', 'Beli 3 botol, 1 botol susu asam ', 0, 0, 0, 0, '', 0, 0000, 'JIEXPO', '0000-00-00', '1970-01-01', '0000-00-00'),
(19, 10019, 3, '2017-12-02', 0, 'Fraysh_avohkedo', 'jl kebon nanas IIno 15 ( seberang no 28 )', '0811137797', 1, 1, 2, 4, 'tidak', '', 1, 1, '1970-01-01', '2017-10-02', 'Harsh comment on instastory, dislike the product', 0, 0, 0, 0, '', 0, 0000, 'SCBD', '0000-00-00', '1970-01-01', '1970-01-01'),
(20, 10020, 3, '2017-07-11', 0, 'amboro_adit', 'jl trikora raya no 51 komplek rajawali lama ', '083872023371', 3, 0, 2, 8, 'tidak', '', 1, 1, '2017-07-17', '1970-01-01', '', 0, 0, 0, 0, '', 0, 0000, 'Sumarecon mall bekasi ', '0000-00-00', '0000-00-00', '0000-00-00'),
(21, 10021, 3, '2017-07-30', 0, 'elyse.evgenia', '', '087882807000', 1, 1, 2, 4, 'tidak', '', 1, 1, '1970-01-01', '1970-01-01', 'Susu cepat basi ', 0, 0, 0, 0, '', 0, 0000, 'SCBD', '0000-00-00', '0000-00-00', '0000-00-00'),
(22, 10022, 3, '2017-07-04', 0, 'lollypop_1188', '', '081283811188', 1, 4, 2, 9, 'tidak', '', 1, 1, '2017-07-13', '2017-07-11', 'Bau nya seperti kelapa busuk ', 0, 0, 0, 0, '', 0, 0000, 'PIK', '0000-00-00', '0000-00-00', '0000-00-00'),
(23, 10023, 3, '2017-06-08', 0, 'morohu', '', '', 1, 3, 2, 10, 'tidak', '', 1, 1, '1970-01-01', '2017-06-04', 'Basi cepat sekali ', 0, 0, 0, 0, '', 0, 0000, 'Cibubur', '2017-06-05', '1970-01-01', '1970-01-01'),
(24, 10024, 3, '2017-03-03', 0, 'faniharis', '', '', 0, 0, 0, 0, 'tidak', '', 0, 0, '0000-00-00', '0000-00-00', 'expired dan sudah asam', 0, 0, 0, 0, '', 0, 0000, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(25, 10025, 3, '2017-05-02', 0, 'kee_nieke', '', '089617227856', 3, 0, 2, 11, 'tidak', '', 1, 2, '1970-01-01', '1970-01-01', 'rasa sudah asam setelah baru di buka', 0, 0, 0, 0, '', 0, 0000, 'Grand  bekasi ', '0000-00-00', '0000-00-00', '0000-00-00'),
(26, 10026, 4, '2017-07-07', 0, 'Ade Putri Nugrahani', '', '085692044628', 1, 1, 2, 0, 'tidak', '', 1, 1, '2017-07-22', '2017-07-19', 'Rasanya seperti sudah basi dan asam', 0, 0, 0, 0, '', 0, 0000, 'Cilandak Town', '2017-07-20', '2017-07-20', '1970-01-01'),
(27, 10027, 4, '2017-06-16', 0, 'claudiapeggie', '', '', 1, 1, 1, 2, 'tidak', '', 1, 2, '2017-07-18', '2017-07-15', 'Asam dan bergumpal', 0, 0, 0, 0, '', 0, 0000, 'Ratu Plaza (Happy Fresh) ', '2017-07-16', '1970-01-01', '1970-01-01'),
(28, 10028, 4, '2017-07-15', 0, 'Citra.p@gmail.com', '', '', 1, 1, 2, 2, 'tidak', '', 1, 2, '1970-01-01', '1970-01-01', 'Basi ', 0, 0, 0, 0, '', 0, 0000, 'Gandaria city ', '0000-00-00', '0000-00-00', '0000-00-00'),
(29, 10029, 4, '2017-05-08', 0, 'Andika Aulia', '', '08111120104', 0, 0, 0, 0, 'tidak', '', 0, 0, '0000-00-00', '0000-00-00', 'Susu basi sebelum waktu exp date yang tertera', 0, 0, 0, 0, '', 0, 0000, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(30, 10030, 4, '2017-04-06', 1, 'Catharina, Dewi', '', '', 1, 5, 2, 3, 'tidak', '', 0, 0, '1970-01-01', '1970-01-01', 'Susu bergumpal serta basi ', 0, 0, 0, 0, '', 2, 0000, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(31, 10031, 4, '2017-04-02', 1, 'keyzia', '', '08119703573', 0, 0, 2, 0, 'tidak', '', 1, 2, '2017-04-05', '2017-03-24', 'susu basi pas mau di minum', 0, 0, 0, 0, '', 2, 0000, '', '2017-04-01', '2017-04-02', '1970-01-01'),
(32, 10032, 4, '2017-02-02', 0, 'adijoyo', '', '', 1, 1, 2, 2, 'tidak', '', 1, 1, '2017-02-09', '2017-02-02', 'bergumpal', 0, 0, 0, 0, '', 2, 0000, 'Gandaria City ', '2017-02-02', '2017-02-02', '0000-00-00'),
(33, 10033, 1, '2017-11-13', 4, 'Spotten Coffee', 'Ruko Prominence', '0878-8424-49', 8, 0, 2, 0, 'tidak', '', 1, 2, '2017-11-17', '2017-08-11', 'susu basi sebelum expiry date ', 0, 0, 0, 0, '', 2, 0000, 'Khim', '2017-12-11', '2017-12-11', '2017-11-13'),
(34, 10034, 1, '2017-09-11', 9, 'Customer Adela', '', '0817-770-569', 1, 5, 2, 0, 'tidak', '', 1, 2, '2017-11-19', '2017-11-19', 'Bocor ', 0, 0, 0, 0, '', 2, 0000, '', '2017-11-19', '2017-10-11', '1970-01-01'),
(35, 10035, 1, '2017-08-11', 8, 'Liberta Gelato ', 'Gading Serpong', '0812-1071-08', 8, 0, 2, 0, 'tidak', '', 1, 5, '2017-12-11', '2017-04-11', 'Ada plastik kecil warna merah', 0, 0, 0, 0, '', 2, 0000, '', '2017-11-15', '2017-11-15', '2017-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `impression`
--

CREATE TABLE `impression` (
  `id_impression` int(11) NOT NULL,
  `nm_impression` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `impression`
--

INSERT INTO `impression` (`id_impression`, `nm_impression`) VALUES
(1, 'Creamy'),
(2, 'ASI'),
(3, 'Old Days'),
(4, 'Best Fresh Milk '),
(5, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id_inquiry` int(11) NOT NULL,
  `nm_inquiry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id_inquiry`, `nm_inquiry`) VALUES
(1, 'Demand'),
(2, 'B2B'),
(3, 'Distributor');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `idkota` int(11) NOT NULL,
  `namakota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`idkota`, `namakota`) VALUES
(1, 'Jakarta'),
(2, 'Bogor'),
(3, 'Bekasi'),
(6, 'Bandung'),
(7, 'Banten'),
(8, 'Tangerang'),
(10, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `portal`
--

CREATE TABLE `portal` (
  `idportal` int(11) NOT NULL,
  `nm_portal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portal`
--

INSERT INTO `portal` (`idportal`, `nm_portal`) VALUES
(1, 'whatsapp'),
(2, 'Facebook'),
(3, 'Instagram'),
(4, 'Email'),
(6, 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(11) NOT NULL,
  `nm_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `nm_produk`) VALUES
(1, '1 Liter'),
(2, '2 Liter'),
(3, '250 ml'),
(4, '500 ml'),
(5, '3 Ltr');

-- --------------------------------------------------------

--
-- Table structure for table `produkdev`
--

CREATE TABLE `produkdev` (
  `id_dev` int(11) NOT NULL,
  `nm_dev` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produkdev`
--

INSERT INTO `produkdev` (`id_dev`, `nm_dev`) VALUES
(1, 'New Packaging'),
(2, 'Flavor'),
(3, 'UHT');

-- --------------------------------------------------------

--
-- Table structure for table `produkreview`
--

CREATE TABLE `produkreview` (
  `id_rev` int(11) NOT NULL,
  `nm_review` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produkreview`
--

INSERT INTO `produkreview` (`id_rev`, `nm_review`) VALUES
(1, 'Packaging'),
(2, 'Taste'),
(3, 'Texture'),
(4, 'Aroma'),
(5, 'Color');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `idstore` int(11) NOT NULL,
  `namastore` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`idstore`, `namastore`) VALUES
(1, 'Ranch Market'),
(2, 'LotteMart'),
(3, 'Lion Superindo'),
(4, 'Grand Lucky'),
(5, 'Giant'),
(6, 'Farmers Market '),
(7, 'Indomaret'),
(8, 'Foodhall'),
(9, 'Market City'),
(10, 'SaveMax'),
(11, 'Farmers Market '),
(13, 'Test 1'),
(14, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `store2`
--

CREATE TABLE `store2` (
  `id` int(11) NOT NULL,
  `store_code` int(11) NOT NULL,
  `store` varchar(255) NOT NULL,
  `city` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `portal_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store2`
--

INSERT INTO `store2` (`id`, `store_code`, `store`, `city`, `alamat`, `portal_code`) VALUES
(1, 0, 'Store', 0, 'Alamat ', 0),
(2, 101, 'AEON CAKUNG', 0, 'Jl. Jkt Garden City, RT.8/RW.6, Cakung', 13910),
(3, 101, 'AEON INDONESIA', 0, 'Jl. BSD Raya Utama, Sampora, Cisauk', 15345),
(4, 102, 'AGROJEK INDONESIA, CV.', 0, 'Jalan Raya Kupang Indah No. 7 Dukuh Kupang, Dukuh Pakis', 0),
(5, 103, 'AKAR PANJI ULUNG, PT.', 0, 'Parkson office Jl. Boulevard CBD', 0),
(6, 104, 'AKUR PRATAMA, PT.', 0, 'Jl. Terusan Buah Batu No.12, Batununggal, Bandung', 40266),
(7, 105, 'AL FRESH, CV.', 0, 'Jl. Jend. Gatot Subroto Kav 1000, Menteng Dalam, Tebet', 0),
(8, 105, 'ALL FRESH GATOT SUBROTO', 0, 'Jl. Jend. Gatot Subroto Kav 1000, Menteng Dalam, Tebet', 0),
(9, 105, 'ALL FRESH PIK', 0, 'Jl. Pantai Indah Utara 2, Kapuk Muara, Penjaringan', 14460),
(10, 105, 'ALL FRESH PULOMAS', 0, 'Jalan Kayu Putih Raya, Korean Town Pulomas, RW 16', 13210),
(11, 105, 'ALL FRESH SIMATUPANG', 0, 'Jl. TB Simatupang No. 71, RT 10 RW 02, Cilandak Barat', 12870),
(12, 106, 'ANDHIKA SATYA NUSANTARA,', 0, 'Jl. Kunti No 117 X, Seminyak', 0),
(13, 107, 'BOGA CATUR RATA, PT.', 0, 'Jl. Kemang Raya', 0),
(14, 108, 'CARREFOUR BINTARO', 0, 'Jl. MH. Thamrin Sektor VII CBD Blok B7/A3 N0. 9, Pdk. Jaya', 15224),
(15, 108, 'CARREFOUR BLOK M', 0, 'Blok M Square Lt. 2-3, Jl. Melawai Raya No.5, Keb. Baru', 12610),
(16, 108, 'CARREFOUR CBD PLUIT', 0, 'Emporium Pluit Mall lt. LG, Jl. Pluit Selatan Raya', 14440),
(17, 108, 'CARREFOUR DUTA MERLIN', 0, 'Komp. DUta Merlin, Jl. Gajah Mada No. 3-5, Petojo Utara', 10130),
(18, 108, 'CARREFOUR KELAPA GADING', 0, 'Mall Of Indonesia, Klp. Gading Barat, Kelapa Gading', 0),
(19, 108, 'CARREFOUR KEPPEL BUBUTAN', 0, 'Jl. Bubutan No. 1-7, Bubutan', 60174),
(20, 108, 'CARREFOUR KOTA KASABLANKA', 0, 'Jl. Casablanca No. 88, Menteng Dalam, Tebet', 12870),
(21, 108, 'CARREFOUR LENMARC SURABAY', 0, 'Jl. Bukit Darmo Golf, Pradah Kali Kendal, Dukuh Pakis', 60225),
(22, 108, 'CARREFOUR MEGAMALL PLUIT', 0, 'Jl. Pluit Indah Raya, RT 15 RW 4, Pluit, Penjaringan', 14450),
(23, 108, 'CARREFOUR MT HARYONO', 0, 'Komp. Lakespra TNI AU Saryanto, Jl. Letj. MT Haryono No. 63', 12770),
(24, 108, 'CARREFOUR PERMATA HIJAU', 0, 'ITC Permata Hijau Lt. Dasar, Jl. Letj. Jend. Soepeno, Grogol', 12210),
(25, 108, 'CARREFOUR PURI INDAH', 0, 'Jl. Puri Indah Blok Q No. 1, Kembangan Selatan, Kembangan', 11610),
(26, 108, 'CARREFOUR PVJ MALL', 0, 'Paris Van Java Mall, Jl. Sukajadi No. 139, Sukajadi, Cipedes', 40162),
(27, 108, 'CARREFOUR SUPERMAL KARAWA', 0, 'Jl. Boulevar Diponegoro No. 105, Lippo Karawaci, Bencongan', 15811),
(28, 109, 'COUNTRY WOODS', 0, 'Jl. WR. Supratman, Ciputat', 0),
(29, 110, 'DAILY FOODHAL SENAYAN RES', 0, 'Jl. Patal Senayan, Kebayoran Lam', 0),
(30, 110, 'DAILY FOODHALL ANCOL MANS', 0, 'Jl. Pasir Putih II, Ancol Timur', 0),
(31, 110, 'DAILY FOODHALL BELLAGIO', 0, 'Kawasan Mega Kuningan Kav. E4 N0', 0),
(32, 110, 'DAILY FOODHALL CASABLANCA', 0, 'Jl. Puri Casablanca no.1', 0),
(33, 110, 'DAILY FOODHALL CIKARANG G', 0, 'Jl. Menteng Raya, Cibatu, Cikarang Selatan', 0),
(34, 110, 'DAILY FOODHALL FX', 0, 'Jl. Jend. Sudirman - Pintu Satu, Senayan', 0),
(35, 110, 'DAILY FOODHALL GARDENIA B', 0, 'Jl. Warung Jati No.12, Pejaten', 0),
(36, 110, 'DAILY FOODHALL ISTANA SAH', 0, 'Jl. Jend. Sudirman, RT.10/RW.11, Karet Tengsin, Tanah Abang', 0),
(37, 110, 'DAILY FOODHALL PAVILLION', 0, 'Jl. K.H. Mas Mansyur Kav.24', 0),
(38, 110, 'DAILY FOODHALL SETIABUDI', 0, 'Jl. H.R. Rasuna Said Kav. 62', 0),
(39, 110, 'DAILY FOODHALL THE MANSIO', 0, 'Jl. Trembesi Blok D4, Bandar Baru, Kemayoran', 0),
(40, 110, 'DAILY FOODHALL TMII', 0, 'Green Terrace Blok B, Jl. Raya Mabes Hankam, Pintu I TMII', 0),
(41, 111, 'EMPORIUM INDONESIA, PT', 0, 'Jl. Kuningan Mulia Lot 6B', 12980),
(42, 1, 'FM BAYWALK MALL', 0, 'Bay Walk Mall, Jl. Pluit Karang Ayu B1', 14450),
(43, 0, 'FM BINTARO XCHANGE', 0, 'Bintaro Jaya Xchange Mall, Bintaro Jaya Xchange Lantai LG 1B', 15220),
(44, 0, 'FM CIKARANG', 0, 'City Walk Lippo Cikarang, Jl. Moh. H. Thamrin Blok 1A', 17530),
(45, 0, 'FM CITRA GARDEN', 0, 'Jl. Raya Citra Garden 6', 11820),
(46, 0, 'FM ECO PLAZA TANGGERANG', 0, 'Jl. Eco Polis Citra Raya', 15710),
(47, 0, 'FM EPICENTRUM', 0, 'Epicentrum Walk Office, Jl. Rasuna Said', 12940),
(48, 0, 'FM GALAXY MALL BEKASI', 0, 'Grand Galaxy Park Mall, Jl. Pulo Sirih Utama', 17147),
(49, 0, 'FM GRAND METROPOLITAN BEK', 0, 'Grand Metropolitan Mall Bekasi Lantai LG2 No.3', 0),
(50, 0, 'FM GRAND WISATA', 0, 'Desa Lambangjaya, Jl. Celebration Boulevard Blok AA2', 17510),
(51, 0, 'FM GUNUNG SAHARI', 0, 'Jalan Bungur Besar Raya', 10610),
(52, 0, 'FM JABABEKA', 0, 'Jl. H. Usmar Ismail', 17530),
(53, 0, 'FM KALIBATA', 0, 'Kalibata City Square Lt. 1, Jl. Kalibata Raya', 12750),
(54, 0, 'FM KELAPA GADING', 0, 'Mal Kelapa Gading, Mall Kelapa Gading 1 Lantai G', 14240),
(55, 0, 'FM L\'AVENUE', 0, 'Jl. Raya Pasar Minggu Kav 16, Pancoran, Gatot Subroto', 12780),
(56, 0, 'FM ONE PARK FATMAWATI', 0, 'One Belpark Mall, Jl. RS Fatmawati', 12450),
(57, 0, 'FM PLUIT MARKET', 0, 'Jl. Pluit Raya No. 1', 0),
(58, 0, 'FM SERPONG', 0, 'Summarecon Mall Serpong, Jl. Gading Serpong Boulevard', 15810),
(59, 0, 'FM0Z INDOHYBRID APART U R', 0, '105 Boulevard Diponegoro Lippo Karawaci, Kelapa Dua', 0),
(60, 0, 'FOODHALL  BELEZA', 0, 'The Bellezza Shopping Arcade,Jalan Let. Jend. Soepeno', 12210),
(61, 0, 'FOODHALL ALAM SUTERA', 0, 'Mall Alam Sutera LG Floor A01, Jl. Jalur Sutera Barat Kav 16', 15143),
(62, 0, 'FOODHALL DEPOK MALL', 0, 'Depok Mall, JL. Margonda Raya, Pondok Cina', 16424),
(63, 0, 'FOODHALL GRAND INDONESIA', 0, 'Grand Indonesia, Jl. M.H. Thamrin', 10310),
(64, 0, 'FOODHALL KEBON JERUK', 0, 'Taman Kedoya Permai, Jl. Raya Perjuangan', 11520),
(65, 0, 'FOODHALL KELAPA GADING', 0, 'Mal Kelapa Gading, Mall Kelapa Gading 2, Lt. Dasar', 14240),
(66, 0, 'FOODHALL LIPPO MALL PURI', 0, 'Lippo Mall Puri, Blok L 6, Jl. Puri Indah Blok L 6', 0),
(67, 0, 'FOODHALL PIK', 0, 'Level Ground Floor, PIK Avenue, Jalan Pantai Indah Kapuk', 14460),
(68, 0, 'FOODHALL PLAZA INDONESIA', 0, 'Plaza Indonesia, Jalan MH Thamrin Kav. 28 - 30', 0),
(69, 0, 'FOODHALL PLAZA SENAYAN', 0, 'Plaza Senayan Lt. B 1 A, Jalan Asia Afrika', 10270),
(70, 0, 'FOODHALL PONDOK  INDAH', 0, 'Mall Pondok Indah 2, Lt. LG, Jl. Metro Pondok Indah', 12310),
(71, 0, 'FOODHALL SENAYAN CITY', 0, 'Senayan City Lower Ground Floor, Jl. Asia Afrika', 10270),
(72, 0, 'FOODHALL SUMMARECON BEKAS', 0, 'Summarecon Mall Bekasi , JL. Boulevard Ahmad Yani', 17123),
(73, 0, 'FOODHALL VILA DELIMA', 0, 'Perum Vila Delima Blok A,Jl. Karang Tengah Raya, Lebak Bulus', 12440),
(74, 0, 'FOODMART CITOS', 0, 'Cilandak Town Square, Jl. T.B. Simatupang Kav. 17', 12430),
(75, 0, 'FOODMART GOURMET', 0, 'Supermall Karawaci, Jl. Boulevard Palem Raya 105', 15810),
(76, 0, 'FOODMART MAXXBOX', 0, 'Maxx Box Lt. 1, Jl. Boulevard Jend. Sudirman, Lippo Village', 15810),
(77, 0, 'FRESH MEAT', 0, 'Jl. Boulevard Gading Serpong Blok.B2', 0),
(78, 0, 'FRESTIVE CANGGU', 0, 'Jl. Pemelisan Agung No. 20, Banjar Berawa', 0),
(79, 0, 'FRESTIVE KEROBOKAN', 0, 'Jl. Raya Kerobokan, Kerobokan Kelod, Kuta Utara', 0),
(80, 0, 'FRUIT LAND, PT.', 0, 'Komp. Plaza Pasific Blok B1 Kav No. 8, Kelapa Gading Barat', 0),
(81, 0, 'GIANT EKSPRES BANDUNG IST', 0, 'Jl. Pasirkaliki No. 121-123', 0),
(82, 0, 'GIANT EKSPRES BANDUNG PAR', 0, 'Jl. Parahyangan Kav. 2 Blok. A1', 0),
(83, 0, 'GIANT EKSPRES BANDUNG SET', 0, 'Jl. Prof. Surya Sumantri', 0),
(84, 0, 'GIANT EKSPRES BANDUNG SUC', 0, 'Jl. KH. PHH. Moestofa No. 3', 0),
(85, 0, 'GIANT EKSPRES CIKAMPEK', 0, 'Jl. Ir. H. Juanda, Cikampek, Sarimulya, Kotabaru', 0),
(86, 0, 'GIANT EKSPRES KARAWANG CE', 0, 'Ruko Karawang Plaza, JL Tuparev', 41361),
(87, 0, 'GIANT EKSTRA PURWAKARTA', 0, 'Jalan Pahlawan No. 24 - 26, Nagri Kaler, Kec. Purwakarta', 41119),
(88, 0, 'GIANT EXPRESS AR HAKIM', 0, 'Jl. Arief Rahman Hakim No. 156', 0),
(89, 0, 'GIANT EXTRA PDK TJANDRA', 0, 'Jl. Wadung Asri 1, Waru', 0),
(90, 0, 'GIANT EXTRA SBY DIPONEGOR', 0, 'Jl. Diponegoro No. 227', 0),
(91, 0, 'GIANT EXTRA SBY MASPION', 0, 'Jl. Ahmad Yani 73', 0),
(92, 0, 'GIANT EXTRA SBY RAJAWALI', 0, 'Jl. Rajawali No. 57, Kel. Perak Barat, Kec. Krembangan', 0),
(93, 0, 'GIANT EXTRA SUN CITY', 0, 'Sun CIty Mall, Jl. Pahlawan No.4 RT 03 RW 06', 0),
(94, 0, 'GIANT MALANG GAJAYANA', 0, 'Mall Olympic Garden 1st & 2nd Floor, Jl. Kawi No. 24', 0),
(95, 0, 'GIANT SAWOJAJAR', 0, 'Jl. Kawi Sawojajar', 0),
(96, 0, 'GIANT WARU', 0, 'Jl. Raya Waru No.2', 0),
(97, 0, 'GLORY RETAILINDO, PT.', 0, 'Jl. Mertha Nadi, Banjar Abian Base, Kuta', 80361),
(98, 0, 'GRACIA MITRA SELARAS, PT', 0, 'Rukan Gold Coast Blok A BGM, PIK', 14470),
(99, 0, 'GRAND LUCKY CINERE', 0, 'Living Plaza Jl. Cinere Raya', 16515),
(100, 0, 'GRAND LUCKY GRAND PARAGON', 0, 'Mall Grand Paragon Lower Ground 20, Jl. Gajah Mada', 14460),
(101, 0, 'GRAND LUCKY RADIO DALAM', 0, 'Jl. Radio Dalam Raya', 12140),
(102, 0, 'GRAND LUCKY SCBD', 0, 'SCBD Lot 12, Jl. Jend. Sudirman Kav 52-53, Senayan', 10270),
(103, 0, 'GUNUNG SEWU MANAGEMEN SER', 0, 'Jl. Jend Sudirman Kav.21', 0),
(104, 0, 'HERO BANDUNG PASKAL', 0, 'Jl. Pasir Kaliki No 25-27', 40162),
(105, 0, 'HERO BINTARO PLAZA', 0, 'Bintaro Plaza, Lt. 1, Sektor 3 A, Jl. Bintaro Utama 3', 15225),
(106, 0, 'HERO DISTRIBUTION CENTER', 0, 'J28 Fresh Conventional DC Indorama RT 001/007', 0),
(107, 0, 'HERO EMERALD BINTARO', 0, 'Jl. CBD Emerald Blok CE/B-01', 15227),
(108, 0, 'HERO GONDANGDIA', 0, 'Jl. RP. Soeroso, RT.9/RW.5, Cikini', 10330),
(109, 0, 'HERO GONDANGDIA', 0, 'Jalan RP Soeroso Cikini, Menteng', 0),
(110, 0, 'HERO KEMANG PRATAMA', 0, 'Jl. Kemang Pratama Raya', 17114),
(111, 0, 'HERO KEMANG VILLA', 0, 'Jalan Kemang Selatan I, Kemang Club Villa', 12730),
(112, 0, 'HERO KOTA WISATA', 0, 'Kantor Pemasaran Kota Wisata, Kluster Somerset Kav. 26-27', 16968),
(113, 0, 'HERO LIVING WORLD', 0, 'Living World, Jl. Kp. Marga Jaya', 15117),
(114, 0, 'HERO MALANG SAWOJAJAR', 0, 'Jl. Raya Danau Toba No.1, Sawojajar', 0),
(115, 0, 'HERO MALL CIPUTRA', 0, 'Mall Ciputra, UG/SM, Jl. Arteri S.Parman', 11470),
(116, 0, 'HERO MALL TAMAN ANGGREK', 0, 'Mal Taman Anggrek /P2 Kav 21, Jalan Let.Jend.S.Parman', 11470),
(117, 0, 'HERO PAKUBUWONO', 0, 'Jalan Pakubuwono 6 No. 68 Kebayoran Baru', 0),
(118, 0, 'HERO PERMATA HIJAU', 0, 'Jalan Nikel, Kelapa Dua', 12210),
(119, 0, 'HERO PONDOK INDAH MALL', 0, 'Pondok Indah Mall I Kav. 4 Lt. Dasar', 12310),
(120, 0, 'HERO PURI INDAH MALL', 0, 'Puri Indah mall GF, Jl. Puri Indah Raya', 11610),
(121, 0, 'HERO SARINAH', 0, 'Jl. M.H. Thamrin', 10350),
(122, 0, 'HERO SIDOARJO TMN PINANG', 0, 'Jl. Pahlawan Komp. Taman Pinang Blok A1 No. 1-6', 0),
(123, 0, 'HERO SUPERMARKET, TBK, PT', 0, 'KO. Bintaro komersial CBD sektor VII B', 0),
(124, 0, 'HERO TEROGONG', 0, 'Jl. Terogong Raya Kav. 28', 12430),
(125, 0, 'HERO TUNJUNGAN PLAZA', 0, 'Jl. Basuki Rahmad No. 8-12', 0),
(126, 0, 'HOKKY BERSAMA, PT.', 0, 'Jl. Radio Dalam Raya, Gandaria Utara, Kebayoran baru', 0),
(127, 0, 'HOKKY DARMO HARAPAN', 0, 'Jl. Raya Darmo Harapan No. 1', 0),
(128, 0, 'HOKKY FAMILI, CV.', 0, 'Anchor Plaza Graha Famili, Kel. Pradah Kalikendal', 0),
(129, 0, 'HOKKY PANGLIMA SUDIRMAN', 0, 'Taman AIS Nasution 29', 0),
(130, 0, 'HOKKY PLAZA GRAHA FAMILI', 0, 'Anchor Plaza Graha Famili, Kel. Pradah Kalikendal', 0),
(131, 0, 'HOKKY PRADANA UTAMA, PT.', 0, 'Darmo Harapan I, Tanjungsari - Sukomanunggal', 0),
(132, 0, 'HOKKY TE IT, PT.', 0, 'Living Plaza Jl. Cinere Raya', 0),
(133, 0, 'HYPERMART KARAWACI', 0, 'Supermall Karawaci, Bencongan, Karawaci', 15810),
(134, 0, 'HYPERMART KEMVILL', 0, 'Lippo Mall Kemang, Jl. Pangeran Antasari', 12150),
(135, 0, 'HYPERMART PENVILL', 0, 'Pejaten Village, Jl. Warung Jati Barat', 12510),
(136, 0, 'HYPERMART PURI INDAH', 0, 'Hypermart Puri, JL. Puri Indah Raya, Blok W', 11610),
(137, 0, 'HYPERMART ST. MORITZ', 0, 'Jl. Puri Indah Raya Blok U1, Puri Indah CBD', 11610),
(138, 0, 'INDO BUMI LESTARI, PT.', 0, 'Jl. Senayan No. 43 RT 008 RW 005, Rw. Barat, Kebayoran Baru', 12810),
(139, 0, 'INDOGROSIR CIPUTAT', 0, 'Jl. Raya Parung Ciputat No. 21, Kedaung, Swangan', 16516),
(140, 0, 'INDOMARCO PRISMATAMA, PT.', 0, 'Jl. Ancol I/9-10, Pademangan', 14430),
(141, 0, 'INDOMARCO PRISMATAMA, PT.', 0, 'Jl. Jend. A. Yani No. 806, Kiaracondong-Cicaheum', 40283),
(142, 0, 'INDOMARCO PRISMATAMA, PT.', 0, 'Jl. Raya Jemursari No. 351, Tenggilis Mejoyo, Wonocolo', 60299),
(143, 0, 'INDOMARCO PRISMATAMA, PT.', 0, 'Jl. Mengwi Singaraja No.17, Werdi Bhuwana, Mengwi', 0),
(144, 0, 'INKO JAYA RAYA, PT.', 0, 'Grand Wijaya Centre Blok H No. 43-44, Kebayoran Baru', 12140),
(145, 0, 'INTI CAKRAWALA CITRA, PT.', 0, 'Jl. Ancol I No. 9-10, Ancol Barat, Pademanget', 14430),
(146, 0, 'JASON SENOPATI', 0, 'Jalan Senopati Raya', 0),
(147, 0, 'K-MART', 0, 'Grand Wijaya Centre Blok H No. 43-44, Kebayoran Baru', 12140),
(148, 0, 'KAGE DWIJAYA, PT.', 0, '\"JL BOULEVAR ARTHA GADING, JAKARTA', 0),
(149, 0, 'KAWA MEAT SHOP', 0, 'Jl. Tomang Raya No. 25', 0),
(150, 0, 'KEM CHICKS', 0, 'Jl. Jend Sudirman Kav.52-53', 0),
(151, 0, 'KEM CHICKS KEMANG', 0, 'Jl. Kemang Raya No.3A, RT.1/RW.7, Bangka, Mampang Prpt', 0),
(152, 0, 'KEM CHICKS PACIFIC PLACE', 0, 'Pacific Place, Jl. Jend. Sudirman', 12190),
(153, 0, 'KEM CHIKS PARKSON GOURMET', 0, 'Jalan Boulevard Bintaro Jaya Blok B07/D05', 15220),
(154, 0, 'KEMCHICK DAPUR MINI', 0, 'Jl. Lebak Bulus PDK 2121 Lebak Bulus, Cilandak', 0),
(155, 0, 'LION ALAM SUTERA', 0, 'Jl. Alam Sutera Boulevard, Pakualam, Serpong Utara', 15118),
(156, 0, 'LION ANTAPANI', 0, 'Jl. Terusan Jakarta No. 225 & 227, Antapani, Ciradas', 40291),
(157, 0, 'LION ARIEF RAHMAN HAKIM', 0, 'Jalan Arief Rachman Hakim No.169 - 171, Sukolilo, Keputih', 60111),
(158, 0, 'LION BASSURA CITY', 0, 'all Bassura Lantai LG, Jl. Basuki Rahmat, Cipinang', 13410),
(159, 0, 'LION BHAYANGKARA', 0, 'Jl. Bhayangkara 33-35, Kel. Sentanan, Kec. Magersari', 0),
(160, 0, 'LION BINTARO', 0, 'Bintaro utama, Bintaro, Pesanggrahan', 12330),
(161, 0, 'LION BSD PLAZA', 0, 'Bumi Serpong Damai Plaza Sektor 4, Serpong', 0),
(162, 0, 'LION CENTRAL PARK PLAZA', 0, 'Ruko Central Park Blok AA 01, Jl. Raya Mulyosari 123-A', 0),
(163, 0, 'LION CEREWED', 0, 'Jl. Mekarsari RT 04 RW 08, Duren Jaya, Bekasi Timur', 0),
(164, 0, 'LION CIBUBUR', 0, 'Jl. Alternatif Trans Yogie Km 2-3, Cibubur', 17435),
(165, 0, 'LION CINERE MALL', 0, 'Jl. Cinere Raya, Cinere Mall, Pangkalan Jati', 12440),
(166, 0, 'LION CIPUTAT', 0, 'Jalan Wr. Supratman, Kel. Cempaka Putih, Ciputat', 0),
(167, 0, 'LION CIRENDEU', 0, 'Jl. Cirendeu Raya, Pondok Cabe, Cilandak', 12440),
(168, 0, 'LION CITRA GARDEN', 0, 'Perum Citra 2 Blok J1 No 1-2, Kel. Pegadungan', 11520),
(169, 0, 'LION CITRA RAYA', 0, 'Jl. Taman Raya Blok K.01 Kav.01, Perum. Citra Raya, Cikupa', 0),
(170, 0, 'LION CITRA RAYA(RTE)', 0, 'Jl. Taman Raya Blok K.01 Kav.01, Perum. Citra Raya, Cikupa', 0),
(171, 0, 'LION CITRALAND', 0, 'Jl. Telaga Utama D1 No. 31-32, Jeruk, Lakarsantri', 60213),
(172, 0, 'LION DAAN MOGOT', 0, 'Jl. Daan Mogot No. 61, Daan Mogot', 0),
(173, 0, 'LION DAGO', 0, 'Jl. Ir. H. Djuanda Np. 44, Dago, Citarum', 40135),
(174, 0, 'LION DELTA PLAZA', 0, 'Surabaya Plaza, Jl. Pemuda No. 31-34', 0),
(175, 0, 'LION DEPOK TOWN CENTER', 0, 'Jl. Raya Muchtar No. 1, Pancoran Mas', 0),
(176, 0, 'LION DHARMA HUSADA', 0, 'Jl. Dharma Husada No. 191', 0),
(177, 0, 'LION DUREN TIGA', 0, 'Jl. Raya Ps. Minggu RT 02 RW 07, Kel. Duren Tiga, Pancoran', 0),
(178, 0, 'LION GAS ALAM', 0, 'Jl. Putri Tunggal, Kel. Harjamukti, Kec. CImanggis', 0),
(179, 0, 'LION GRAND TARUMA KARAWAN', 0, 'Perum Grand Taruma, Jl. Raya Tol Karawang Barat, Sukamakmur', 41361),
(180, 0, 'LION GUDANG INDUK FRESH', 0, 'Karyadeka Indust. East. Kav C3, Cikarang Selatan', 0),
(181, 0, 'LION INTERCON', 0, '?Komplek Taman Kebon Jeruk Blok A2', 0),
(182, 0, 'LION JEMUR SARI', 0, 'Jl. Raya Jemur Sari No. 170', 0),
(183, 0, 'LION KALIMALANG', 0, 'Jl. Cemara Raya, Jakasampurna', 17530),
(184, 0, 'LION KENJERAN', 0, 'Komp. Pertokoan Kenjeran Indah, Jl. Ry Kenjeran No.564-572', 0),
(185, 0, 'LION KERTAJAYA', 0, 'Jl. Kertajaya Indah Timur S 104, Kel. Manyar Sabrangan', 0),
(186, 0, 'LION KINCAN', 0, 'Jl. Kincan Raya No. 22, Jatibening, Pondok Gede', 0),
(187, 0, 'LION LANGSEP', 0, 'Jl. Raya Langsep No. 3, Bareng, Klojen', 65146),
(188, 0, 'LION MAMPANG WARUNG BUNCI', 0, 'Warung Buncit City Point, Jl. Mampang Prapatan Raya', 12710),
(189, 0, 'LION MANUKAN', 0, 'Jl. Manukan Tama No, 123-124, Kel. Manukan Kulon', 0),
(190, 0, 'LION MASTRIP', 0, 'Jl. Raya Mastrip No.4, Kel. Kebraon, Kec. Karangpilang', 0),
(191, 0, 'LION MERR', 0, 'Jl. IR. Soekarno Merr, Kedung Baruk, Rungkut', 0),
(192, 0, 'LION METRO', 0, 'Metro Building, Jl. Soekarno Hatta No. 628-630, Majahlega', 40222),
(193, 0, 'LION METROPOLITAN MALL BE', 0, 'Jalan Wr. Supratman, Cempaka Putih, Ciputat', 0),
(194, 0, 'LION METROPOLITAN SQUARE', 0, 'Jl. Pelajar Pejuang No. 119', 0),
(195, 0, 'LION MOCH. RAMDAN', 0, 'Jl. Moch Ramdan No. 115, Cigelereng, Regol', 40253),
(196, 0, 'LION MUARA KARANG', 0, 'Jl. Muara Karang Elok', 14450),
(197, 0, 'LION PAHLAWAN BOGOR', 0, 'Jl. Pahlawan, Empang', 16132),
(198, 0, 'LION PAMULANG', 0, 'Jl. Pamulang Permai Blk. SH, Pamulang', 15417),
(199, 0, 'LION PAMULANG DUA', 0, 'Jl. Raya Pamulang Permai II, Pondok Benda, Pamulang', 0),
(200, 0, 'LION PANCORAN', 0, 'Jalan MT. Haryono, Tebet Barat', 12780),
(201, 0, 'LION PASAR REBO', 0, 'Gg. Balo-Balo No.57, Gedong, Ps. Rebo', 13760),
(202, 0, 'LION PIK', 0, 'Centro Metro Broadway Blok B, Pantai Indah Kapuk', 14430),
(203, 0, 'LION PINANG', 0, 'Jl. KH. Hasyim Ashari, Pinang', 0),
(204, 0, 'LION PISET SQUARE MALL', 0, 'Jl. Pelajar Pejuang 45, Turangga, Lengkong', 40263),
(205, 0, 'LION PONDOK BAMBU', 0, 'Jl. Inspeksi Saluran No.1, Kalimalang', 0),
(206, 0, 'LION PULOMAS', 0, 'Jl. Kayu Putih Raya', 13210),
(207, 0, 'LION PURI SURYA JAYA', 0, 'Jl. Taman Gerbang Utama Kav.1, Ds. Punggul, Kec. Gedangan', 0),
(208, 0, 'LION RAJAWALI', 0, 'Jl. Rajawali No. 65-75, Garuda, Andir', 40183),
(209, 0, 'LION RE MARTADINATA', 0, 'Jl. RE Martadinata 1, Ciputat', 0),
(210, 0, 'LION ROYAL SQUARE', 0, 'Jl. Menganti No. 479, Kel. Babatan, Kec. Wiyung', 0),
(211, 0, 'LION RUNGKUT', 0, 'Jl. Rungkut Mapan No. 1', 0),
(212, 0, 'LION SATELIT UTARA', 0, 'Jl. Raya Satelit Utara KM 9, Tunjungsari, Sukomanunggal', 0),
(213, 0, 'LION SEMOLOWARU', 0, 'Jl. Nginden Semolo No.98, Nginden Jangkungan, Kec. Sukolilo', 0),
(214, 0, 'LION SINGOSARI', 0, 'Jl. Raya Panglima Sudirman, Kel. Pangetan, Kec. Singosari', 0),
(215, 0, 'LION SPORT MALL KELAPA GA', 0, 'Jl. Kelapa Nias Raya HF-03, Mahaka Square LG, Kelapa Gading', 14240),
(216, 0, 'LION SULFAT', 0, 'Jl. Sulfat RT 08 RW 05, Kel. Purwantoro, Kec. Blimbing', 0),
(217, 0, 'LION SUNRISE', 0, 'Jl. Arteri Kedoya Raya Blok XX', 11520),
(218, 0, 'LION SUNTER', 0, 'Jl. Danau Sunter Utara Blok A2', 14350),
(219, 0, 'LION SUPER INDO', 0, 'Menara Bidakara 2 Lantai 19', 12810),
(220, 0, 'LION SUPER INDO', 0, 'Jl. Ir. H. Djuanda No. 44, dago', 0),
(221, 0, 'LION SUPER INDO', 0, 'Jl. Raya Tropodo No. 57, 3th Floor, Waru', 61256),
(222, 0, 'LION TAMAN HARAPAN BARU', 0, 'Plaza Taman Harapan Baru, Gd. E. Lt. Dasar', 0),
(223, 0, 'LION TERAS KOTA BSD', 0, 'Metropolitan Mall, Lt. Dasar, Jl. Raya Kalimalang, Pekayon', 15310),
(224, 0, 'LION TITANIUM SQUARE', 0, 'Jl. Raya Bogor KM 26, Pekayon, Pasar Rebo', 0),
(225, 0, 'LION TLOGOMAS', 0, 'Jl. Raya Tlogomas No. 5A, RT 001 RW 005, Kel. Tlogomas', 0),
(226, 0, 'LION TROPODO', 0, 'Jl. Tropodo No. 57, Ds. tropodo, Kec. Waru', 0),
(227, 0, 'LION UJUNG ASPAL', 0, 'Jl. Raya Hankam RT 04 RW 02, Jati Ranggin, Jati Sampurna', 0),
(228, 0, 'LION WACHID HASYIM', 0, 'Jl. Wachid Hasyim No.3, Jombang', 0),
(229, 0, 'LION WADUNG ASRI', 0, 'Jl. Wadung Asri 76, Kel. Wadung Asri, Kec. Waru', 0),
(230, 0, 'LION WIBAWA MUKTI', 0, 'Jl. WIbawa Mukti, Kel. Jatiluhur, Kec. Jatiasih', 0),
(231, 0, 'LMI BEC BDG', 0, 'Istana BEC, Jl. Purnawarman No.13-15, Babakan Ciamis', 40117),
(232, 0, 'LMI BEKASI JUNCTION', 0, 'Bekasi Junction , JL. Insinyur H. Juanda', 17113),
(233, 0, 'LMI BINTARO', 0, 'JL M.H. Thamrin CBD Area B7 / 01-06 Bintaro Jaya Sektor', 15224),
(234, 0, 'LMI FATMAWATI', 0, 'Komp. Golden Fatmawati, Jl. RS. Fatmawati', 12420),
(235, 0, 'LMI FESTIVAL CITY LINK BD', 0, 'Jl. Peta No.241, Suka Asih, Bojongloa Kaler', 40233),
(236, 0, 'LMI GANDARIA CITY', 0, 'Gandaria City Mall, Lt. LG Unit 03, Jl. Sultan Iskandar Muda', 12240),
(237, 0, 'LMI GREEN PRAMUKA', 0, 'green pramuka Square,  Jl. Ahmad. Yani kav. 49', 10570),
(238, 0, 'LMI KELAPA GADING', 0, 'Jl. Raya Boulevard Barat Kelapa Gading', 14250),
(239, 0, 'LMI KEMANG', 0, 'Jalan Kemang Raya, RT.11/RW.1, Bangka', 12730),
(240, 0, 'LMI KUNINGAN CITY', 0, 'Kuningan City Mall Lantai LG Unit 01, Jl. Prof. Dr. Satrio K', 12940),
(241, 0, 'LMI MARVELL', 0, 'Marvel City, Jalan Ngagel 123, Ngagel Wonokromo', 0),
(242, 0, 'LMI PAKUWON MALL', 0, 'Megamall Lt. LG, Jalan Puncak Lontar No. 2, Lontar', 0),
(243, 0, 'LMI RATU PLAZA', 0, 'Ratu Plaza, Ratu Plaza Lt. LG, Jl. Jend Sudirman Kav. 9', 12190),
(244, 0, 'LMI TAMAN SURYA', 0, 'Komplek Taman Surya V Blok DD-1,Jln. Satu Maret, Pegadungan', 11830),
(245, 0, 'LOKA CIBUBUR', 0, 'Jl. Alternatif Cibubur KM.3, Harjamukti, Cimanggis', 16454),
(246, 0, 'LOKA DISTRIBUTION CENTER', 0, 'Kws. Industrial Jababeka Tahap II SFB Blok MW-II Cikarang', 0),
(247, 0, 'LOKA FLAVOR BLISS', 0, 'Jl. Alam Sutera Boulevard, Alam Sutera, Serpong', 15325),
(248, 0, 'LOKA MALANG', 0, 'Malang City Point, Jl. Terusan Raya DIeng No. 32, Sukun', 65146),
(249, 0, 'LOTTE MART INDONESIA, PT.', 0, 'JL LINGKAR LUAR SELATAN KAV 5 & 6', 13830),
(250, 0, 'LOTTE SHOPPING INDONESIA,', 0, 'Jl. Lingkar Luar Selatan, Ps. Rebo', 13830),
(251, 0, 'LSI ALAM SUTERA', 0, 'Perumahan Alam Sutera Blok Sutera Niaga Kav. 2', 15325),
(252, 0, 'LSI BANDUNG', 0, 'Jl. Soekarno Hatta No.646, Cipamokolan, Rancasari', 40292),
(253, 0, 'LSI BEKASI', 0, 'Jl. Jend. Ahmad Yani, Marga Jaya', 17141),
(254, 0, 'LSI BOGOR', 0, 'Jalan KH. Sholeh Iskandar, Kedungwaringin, Tanah Sereal', 16164),
(255, 0, 'LSI CIBITUNG', 0, 'Kawasan Komersial Bekasi Fajar, Blok A Ganda Mekar, Cibitung', 17530),
(256, 0, 'LSI CIPUTAT', 0, 'Jl. Ir. H. Juanda, Ciputat', 15412),
(257, 0, 'LSI KELAPA GADING', 0, 'Jl. Raya Boulevard Barat, Kelapa Gading', 14250),
(258, 0, 'LSI LAMPUNG', 0, 'Jl. Alamsyah Ratu Prawiranegar, Hajimena, Natar', 35145),
(259, 0, 'LSI MERUYA', 0, 'Jl. Topaz BT , Meruya Utara, Kembangan', 11620),
(260, 0, 'LSI PASAR REBO', 0, 'Jl. Lingkar Luar Selatan Kav 6, Ps. Rebo', 13830),
(261, 0, 'LSI PSR REBO', 0, 'Jl. Lingkar Luar Selatan Kav 6, Ps. Rebo', 0),
(262, 0, 'LUCKY STRATEGIS, PT', 0, 'SCBD Lot 12, Jl. Jend. Sudirman Kav 52-53, Senayan', 0),
(263, 0, 'LULU GROUP RETAIL, PT.', 0, 'Gedung Maspion Lantai 15', 0),
(264, 0, 'LULU HYPERMARKET BSD', 0, 'Q-Big Mall Blok A, BSD City', 15345),
(265, 0, 'LULU HYPERMARKET CAKUNG', 0, 'Plaza Taman Modern Lt. 1, Jalan Raya Bekasi KM. 24, Cakung', 13960),
(266, 0, 'MARKET CITY MUARA KARANG', 0, 'Jl. Muara Karang Elok, Pluit', 14450),
(267, 0, 'MARKET CITY PIK', 0, 'Rukan Gold Coast Blok A BGM, PIK', 14470),
(268, 0, 'MASUYA SEJATI, PT. (DARMO', 0, 'Jl. Darmo Permai Selatan 3, Pradah Kalikendal, Dukuh Fakis', 60226),
(269, 0, 'MASUYA SEJATI, PT. (MARGO', 0, 'Jl. Raya Margorejo Indah Blok A No 136 - 146 R, Margorejo', 60283),
(270, 0, 'MATAHARI PUTRA PRIMA,TBK,', 0, 'Menara Matahari, Jl Boulevard no 7', 0),
(271, 0, 'MAXIM JAYADI ABADI, PT.', 0, 'Jl. Gajah Mada N0. 190, Glodok', 0),
(272, 0, 'MEGA MAHADANA HADIYA', 0, 'GD. TMT 1 LT 1', 12430),
(273, 0, 'MU GUNG HWA CIKARANG', 0, 'Ruko Galaria Singaraja Blok C1-3, Jl. M.H Thamrin', 0),
(274, 0, 'MU GUNG HWA DHARMAWANGSA', 0, 'Jl. Darmawangsa Raya Blok A, No. 2', 0),
(275, 0, 'MU GUNG HWA KARAWACI', 0, 'Pintu Besar Selatan Curug Neglasari, Panunggangan Barat', 0),
(276, 0, 'MU GUNG HWA SENOPATI', 0, 'Jalan Senayan Blok S No. 43, Kebayoran Baru', 0),
(277, 0, 'MULTI BUAH SUKSES, PT.', 0, 'Bintaro Jaya Sektor 9 No. 5A, Pdk. Aren', 0),
(278, 0, 'MULTI SUMBER REZEKI, PT.', 0, 'Jl. Warung Buncit Raya No. 143A RT 005 RW 002, Duren Tiga', 12760),
(279, 0, 'NEW SEOUL', 0, 'Jl. Wijaya I', 0),
(280, 0, 'PAPAYA BANDUNG, PT.', 0, 'Jl. Sukaasih No. 1 RT 2 RW 6. Gegerkalong, Sukasari', 0),
(281, 0, 'PAPAYA BEKASI', 0, 'Jl. Cempaka Raya RT 002 RW 00, Jatimulya, Tambun Selatan', 0),
(282, 0, 'PAPAYA BUMIMAS', 0, 'Jl. Terogong Raya', 12430),
(283, 0, 'PAPAYA CIKARANG', 0, 'Jl. Pajajaran No. 7', 17530),
(284, 0, 'PAPAYA CITYWALK', 0, 'Citywalk Sudirman Ground Floor 9, Jl. Kh. Mas Mansyur', 10220),
(285, 0, 'PAPAYA KUTA', 0, 'Jl. Mertha Nadi, Banjar Abian Base, Kuta', 80361),
(286, 0, 'PAPAYA MELAWAI', 0, 'Jl. Melawai Raya', 12160),
(287, 0, 'PAPAYA ONE PARK', 0, 'Jl. Kyai Moh. Syafii Hadzami', 12440),
(288, 0, 'PAPAYA RENON', 0, 'Plaza Renon Unit 1 FL 01, Jl. Raya Puputan, Renon', 0),
(289, 0, 'PEPITO EXPRESS DEWI SRI', 0, 'Jl. Dewi Sri No.20, Legian, Kuta', 80361),
(290, 0, 'PEPITO EXPRESS KARANG MAS', 0, 'Jl. Karang Mas No.89, Jimbaran, Kuta Selatan', 0),
(291, 0, 'PEPITO EXPRESS PECATU', 0, 'Jl. Raya Uluwatu, Ungasan, Kuta Selatan', 80361),
(292, 0, 'PEPITO EXPRESS SEMINYAK', 0, 'Jl. Raya Kerobokan, Kerobokan Kelod, Kuta Utara', 80361),
(293, 0, 'PEPITO EXPRESS SILIGITA', 0, 'Jl. Raya Siligita, Nusa Dua', 0),
(294, 0, 'PEPITO EXPRESS TAMAN GRIY', 0, 'Jl. Danau Batur Raya No.5b, Jimbaran, Kuta Selatan', 0),
(295, 0, 'PEPITO EXPRESS TJ. BENOA', 0, 'Jl. Pratama No.34A, Benoa, Kuta Selatan', 80361),
(296, 0, 'PEPITO EXPRESS UDAYANA', 0, 'Jalan Raya Kampus Udayana, Kuta Selatan, Jimbaran', 80361),
(297, 0, 'PEPITO EXPRESS UMALAS', 0, 'Jl. Dukuh Indah No.56, Kerobokan Kelod, Kuta Utara', 80361),
(298, 0, 'PEPITO MARKET CANGGU', 0, 'Jl. Raya Canggu, Kerobokan, Kuta Utara', 80361),
(299, 0, 'PEPITO MARKET NUSA DUA', 0, 'Jl. By Pass Ngurah Rai, Benoa, Kuta Selatan', 80363),
(300, 0, 'PEPITO MARKET PERERENAN', 0, 'Jl. By Pass Munggu, Pererenan, Mengwi', 80351),
(301, 0, 'PEPITO MARKET PETITENGET', 0, 'Jalan Petitenget No.18, Kerobokan Kelod, Kuta Utara', 80361),
(302, 0, 'PEPITO MARKET UBUD ANDONG', 0, 'Jalan Raya Andong, Petulu, Ubud, Peliatan', 80571),
(303, 0, 'PEPITO MARKET UBUD TEMBON', 0, 'Jl. Raya Tebongkang, Singakerta, Ubud', 0),
(304, 0, 'PEPITO MARKET ULUWATU', 0, 'Jl. Raya Uluwatu, Ungasan, Kuta Selatan', 80361),
(305, 0, 'PEPITO SUPERMARKET TUBAN', 0, 'Jl. Kediri No. 36A, Kuta', 80361),
(306, 0, 'POPULAR DELI CANGGU', 0, 'Jl. Subak Sari No.84, Tibubeneng, Kuta Utara', 0),
(307, 0, 'POPULAR EXPRESS SANUR TAM', 0, 'Jl. Danau Tamblingan No.114-116, Sanur', 80228),
(308, 0, 'POPULAR HAYAM WURUK', 0, 'Jl. Hayam Wuruk No.158, Panjer', 80239),
(309, 0, 'POPULAR MARKET SANUR INTA', 0, 'Jl. Cemara No.27, Sanur', 0),
(310, 0, 'RM BASUKI RAHMAT', 0, 'Jalan Basuki Rahmat No. 16-18 Tegalsari', 0),
(311, 0, 'RM DHARMAWANGSA', 0, 'Jl. Dharmawangsa VI', 12160),
(312, 0, 'RM DISTRIBUTION CENTER BA', 0, 'Jl. Lio Baru, Batu Ceper', 15122),
(313, 0, 'RM GALAXY MALL', 0, 'Jalan Dr. Ir. H. Soekarno No. 35-39', 0),
(314, 0, 'RM GRAHA FAMILY', 0, 'Jalan Bukit Darmo Boulevard No. 40', 0),
(315, 0, 'RM GRAND INDONESIA', 0, 'Grand Indonesia Shoping Town East Mall Lantai LG', 10310),
(316, 0, 'RM KEMANG', 0, 'Jl. Kemang Raya', 12730),
(317, 0, 'RM LA MAISON', 0, 'La Maison Barito, Ground Floor Jalan Barito 2', 12130),
(318, 0, 'RM LOTTE SHOPPING AVENUE', 0, 'Lotte Shopping Avenue Lantai LG Unit 21-29', 12940),
(319, 0, 'RM MALANG', 0, 'Jl. Semeru 80 RT 11 RW 07, Kel. Oro Oro Dowo, Kec. Klojen', 65115),
(320, 0, 'RM OAKWOOD', 0, 'Apartment Oakwood Premiere Cosmo', 12950),
(321, 0, 'RM PESANGGRAHAN', 0, 'Jl. Pesanggrahan Raya', 11610),
(322, 0, 'RM PONDOK INDAH', 0, 'Jl. Sultan Iskandar Muda', 12310),
(323, 0, 'RM SOUTH QUARTER', 0, 'Jl Jati Padang 6', 12430),
(324, 0, 'RM THE BREEZE', 0, 'BSD Green Office Park Jalan Grand Boulevard BSD City', 12345),
(325, 0, 'SAVEMAX CIBUBUR', 0, 'Jalan Raya Alternatif Cibubur KM. 5', 17435),
(326, 0, 'SAVEMAX SERPONG', 0, 'Gsm Savemax Hipermarket, Grand Serpong Mall Lt. LG', 15143),
(327, 0, 'SENTRAL RETAILINDO DEWATA', 0, 'Jl. Kediri No. 36A, Kuta', 80361),
(328, 0, 'SETIABUDHI JAYA ABADI, PT', 0, 'Jl. Dr. Setiabudhi No. 46, Hegarmanah, Cidadap', 0),
(329, 0, 'SUMBER AGRI SEHAT, PT. (B', 0, 'Jl. Raya Kerobokan, Kerobokan Kelod, Kuta Utara', 0),
(330, 0, 'SUMBER AGRI SEHAT, PT. (J', 0, 'Jl. Otista Raya No. 399, Jatinegara', 13330),
(331, 0, 'SUPRA BOGA LESTARI, PT', 0, 'Jl. Pesanggrahan Raya', 11610),
(332, 0, 'SWALAYAN SUKSES ABADI, PT', 0, 'Jl. Sahid Sudirman Center Lt.38', 0),
(333, 0, 'T004 INDOPLUS UTAN KAYU', 0, 'Jl. Utan Kayu 24A, Utan Kayu Utara', 0),
(334, 0, 'T039 INDOPLUS TAMAN ALFA', 0, 'Perum Taman Alfa Indah Blok J no 48-49, Petukangan Utara', 0),
(335, 0, 'T07B INDOPLUS CEMPAKA PUT', 0, 'Jl. Cempaka Putih Tengah No. 303, Cempaka Putih', 0),
(336, 0, 'T088 INDOPLUS ECO BANJAR', 0, 'Perum Banjar Wijaya Ruko Poris Plawad', 0),
(337, 0, 'T0D7 INDOHYBRID KELAPA GA', 0, 'Jl. Boulevard Barat Raya Blok I, Kelapa Gading Barat', 0),
(338, 0, 'T0KH INDOPLUS UNDAAN KULO', 0, 'Jl. Undaan Kulon No. 47, Peneleh', 0),
(339, 0, 'T33F INDOPLUS SEDATI GEDE', 0, 'Jl.Sedati Gede No. 162 A, Sedati Gede, Purworejo', 0),
(340, 0, 'T33I INDOPLUS ECO INDRAGI', 0, 'Jl. Indragiri No. 18, Darmo', 0),
(341, 0, 'T3DW INDOPLUS APT GREEN P', 0, 'Apart. Green Pramuka Tower Fino, Jl. Jen. Ahmad Yani Kav 49', 0),
(342, 0, 'T3NK INDOPOINT AMPERA', 0, 'Jl. Ampera Raya RT 015 RW 010, Ragunan, Ps. Minggu', 0),
(343, 0, 'T41Q INDOPLUS SINGGASANA', 0, 'Jl. Indrayasa No. 5, Cibaduyut, Bojongloa Kidul', 40236),
(344, 0, 'T48T INDOPLUS GURU MUGNI', 0, 'Jl. Guru Mugni No. C4 , Karet Semanggi, Setiabudi', 0),
(345, 0, 'T4LR INDOPLUS MULYOSARI 2', 0, 'Jl. Mulyosari No.234-236, Kalisari', 0),
(346, 0, 'T4S6 INDOPLUS KARET PEDUR', 0, 'Jl. Karet Pedurenan No. 68A, RT 09 RW 04, Karet Kuningan', 0),
(347, 0, 'T61H INDOHYBRID BUAH BATU', 0, 'Jl.Buah Batu No.270, Cijagra, Lengkong', 0),
(348, 0, 'T6EB INDOFRESH KEMANG SEL', 0, 'Jl. Kemang Raya No.128, RT.3/RW.2, Bangka, Mampang Prpt.', 12730),
(349, 0, 'T70E INDOPLUS SARIBUMI', 0, 'Jl. KP Binong RT 006/002', 0),
(350, 0, 'T7AP INDOPLUS MALEO', 0, 'Jl. Maleo Raya JE 5/50 RT 04 RW 10', 0),
(351, 0, 'T7U7 INDOMARET DHARMA HUS', 0, 'Jl. Dharma Husada No. 62, Mojo', 0),
(352, 0, 'T82K INDOPLUS PONDOK JATI', 0, 'Perum. Pondok Jati Blok AJ, Pagerwojo, Sidoarjo', 0),
(353, 0, 'T84K INDOPLUS PONDOK  CAN', 0, 'Perum. Pondok Taman Sari D39, Tambak Sumur, Sidoarjo', 0),
(354, 0, 'T89D INDOPLUS ECO MELATI', 0, 'Jl. Villa Melati Mas Blok C2 No. 12 RT 019 RW 08', 0),
(355, 0, 'T8MA INDOPLUS JAGAKARSA', 0, 'Jl. Jagakarsa Raya RT 009 RW 007, Jagakarsa', 0),
(356, 0, 'T8T9 INDOFRESH MANDALA RA', 0, 'Jalan Mandala Raya, RT.13/RW.5, Tomang, Grogol Petamburan', 11440),
(357, 0, 'T91T INDOHYBRID RES AREA', 0, 'Jl. KM 39 Tol Jakarta - Cikampek', 0),
(358, 0, 'T959 INDOFRESH KAMBOJA', 0, 'Jl. Kamboja Raya No. 29, Tomang', 0),
(359, 0, 'T95T INDOPLUS TAMAN KEDOY', 0, 'Jl. Kedoya Elok No 11-12, Kedoya', 0),
(360, 0, 'T978 INDOMARET HOS COKROA', 0, 'Jl. HOS Cokroaminoto RT 01 RW 01', 0),
(361, 0, 'T9IR INDOHYBRID PLUIT UTR', 0, 'Jl. Pluit Utara Raya No. 43, Pluit', 0),
(362, 0, 'T9LS INDOPLUS GELONG BARU', 0, 'Jl. Gelong Baru Raya No. 16 Tomang', 0),
(363, 0, 'T9QQ INDOPLUS ECO RYACUDU', 0, 'Jl. Mayjend Ryacucu Kel. Way Dadi, Kec. Sukarame', 0),
(364, 0, 'TB04 INDOPLUS PB SUDIRMAN', 0, 'Jl. PB Sudirman No. 137, Purworejo, Pauruan', 0),
(365, 0, 'TB40 INDOFRESH CIBUBUR SQ', 0, 'Jl. Buton Rest Area KM 10.6 Tol Jagorawi', 0),
(366, 0, 'TB77 INDOPLUS TERUSAN JAK', 0, 'Jl. Terusan Jakarta No. 108, Antapani', 40291),
(367, 0, 'TBPD INDOFRESH CMPK PTH R', 0, 'Jl. Cempaka Putih Tengah 27 No. 55, Cempaka Putih', 10510),
(368, 0, 'TC41 INDOFRESH BOULEVARD', 0, 'Jl. Boulevard Raya Blok RA27 No.27, Kelapa Gading', 14240),
(369, 0, 'TC66 INDOPLUS PERCETAKAN', 0, 'Jl. Percatakan Negara No. 232, Johar Baru', 0),
(370, 0, 'TC6K INDOHYBRID LETNAN SU', 0, 'Jl. Let. Soetopo Blok E, Lengkong Gudang Timur, Tanggerang', 0),
(371, 0, 'TC94 INDOPLUS TANJUNG DUR', 0, 'Jl. Tanjung Duren Raya No. 17 Tanjung Duren Selatan', 0),
(372, 0, 'TCCF INDOPLUS ECO VILLA C', 0, 'Komplek villa Citra Blok RC No. 3-5, Jaga Baya III, Sukabumi', 0),
(373, 0, 'TD5U INDOMARET APARTEMENT', 0, 'Apartemen Metro Sunter, Jl. Metro Kencana 5', 0),
(374, 0, 'TE35 INDOMARET GATOT SUBR', 0, 'Jl. Gatot Subroto Np. 46 C-D, Pecoh Raya, Teluk Betung', 0),
(375, 0, 'TEAH INDOPLUS ECO PONDOK', 0, 'Jl. Perum Pondok Indah, Babat Jerawat', 0),
(376, 0, 'TENO INDOPLUS TENGGILIS', 0, 'Jl. Raya Tenggilis, Tenggilis Mejoyo', 0),
(377, 0, 'TEOM INDOPOINT GREEN LAKE', 0, 'Jl. Danau Sunter Selatan No. 39 RT15 RW 16, Sunter Agung', 0),
(378, 0, 'TF3V INDOHYBRID CIPINANG', 0, 'Jl. Cipinang Raya D No. 71, Cipinang Besar Selatan', 0),
(379, 0, 'TFIN INDOMARET APT. PURI', 0, 'Jl. Pesanggrahan Raya No. 88', 0),
(380, 0, 'TGUG INDOPOINT KEMANG RAY', 0, 'Jl. Kemang Raya No. 25 RT 006 RW 005, Bangka', 0),
(381, 0, 'TH08 INDOPLUS UJUNG BERUN', 0, 'Jl. AH Nasution No. 6, Cigending, Ujungberung', 40293),
(382, 0, 'TH0E INDOPLUS APT GREEN P', 0, 'Apart. Green Pramuka Tower Fagio, Jl. Jen. Ahmad Yani Kav 49', 0),
(383, 0, 'TH3A INDOPLUS PB SUDIRMAN', 0, 'Jl. Panglima Sudirman No. 38, Purworejo, Pasuruan', 0),
(384, 0, 'TIARA DEWATA', 0, 'Jl. Mayjen Sutoyo, Tiara Dewata, Renon', 0),
(385, 0, 'TIVO INDOHYBRID CIUMBULEU', 0, 'Jl.Ciumbuleuit No.51 Rt.05 Rw.02, Hegarmanah, Cidadap', 0),
(386, 0, 'TJJE INDOPLUS SUNRISE GAR', 0, 'Sunrise Graden, Jl. Surya Sarana II No. 6, Kedoya Utara', 0),
(387, 0, 'TL3H INDOHYBRID PASKAL BA', 0, 'Jl. HOS Cokroaminoto No. 65, Kel. Arjuna, Pasir Kaliki', 0),
(388, 0, 'TL4H INDOPLUS TERUSAN JAK', 0, 'Jl. Terusan Jakarta No. 31, Kiaracondong', 40281),
(389, 0, 'TLSA INDOPOINT CENTRAL PA', 0, 'Ruko Garden Shopping Arcade Central Park, Jl. Let. S. Parman', 11440),
(390, 0, 'TLW7 INDOPLUS ECO DHARMA', 0, 'Jl. Dharma Husada Utara, Mojo', 0),
(391, 0, 'TMGE INDOHYBRID TUBAGUS I', 0, 'Jl. Tubagus Ismail No.32, Sekeloa', 0),
(392, 0, 'TNC7 INDOMARET AEROPOLIS', 0, 'Aeropolis Residence G01-G02', 0),
(393, 0, 'TNVA INDOMARET CITRA GARD', 0, 'Jl. Setia Budi, Kel. Negeri Olok Gading, Kec. Teluk Betung', 0),
(394, 0, 'TOTAL BUAH AMPERA', 0, 'Jl. Ampera Raya No. 38 RT 05 RW 10, Ragunan, Pasar Minggu', 0),
(395, 0, 'TOTAL BUAH ANGKE', 0, 'Jl. Tubagus Angke No. 22A, Wijaya Kusuma, Grogol Petamburan', 0),
(396, 0, 'TOTAL BUAH BEKASI', 0, 'Jl. Bulevard Selatan Blok TA no. 1, Summarecon Bekasi', 0),
(397, 0, 'TOTAL BUAH BINTARO', 0, 'Bintaro Jaya Sektor 9 No. 5A, Pdk. Aren', 0),
(398, 0, 'TOTAL BUAH CIKARANG', 0, 'Jl. Majapahit No. 6B, Cibatu, Cikarang Selatan', 0),
(399, 0, 'TOTAL BUAH FATMAWATI', 0, 'Jl. Rumah Sakit Fatmawati No. 57, RT 01 RW 10, Cilandak', 0),
(400, 0, 'TOTAL BUAH KALIMALANG', 0, 'Jl. Raya Kalimalang Blok Q No.2, RT 01 RW 02, Pd. Kelapa', 0),
(401, 0, 'TOTAL BUAH KLP GADING 1', 0, 'Jl. Boulevard Raya Blok L3, Kelapa Gading', 14240),
(402, 0, 'TOTAL BUAH KLP GADING 2', 0, 'Jl. Boulevard Raya Klp. Gading Blok 19 No. 1, Kelapa Gading', 0),
(403, 0, 'TOTAL BUAH RAWAMANGUN', 0, 'Jl. Waru No. 32, RT 5 RW 7, Rawamangun', 0),
(404, 0, 'TOTAL BUAH SEGAR', 0, 'Jl. Boulevard Raya Blok L3, Kelapa Gading', 14240),
(405, 0, 'TOTAL BUAH SUNTER', 0, 'Jl. Danau Sunter Utara, RT.2/RW.18, Sunter Agung', 0),
(406, 0, 'TOU8 INDO PLUS TKI II BLO', 0, 'Jl.Komplek Taman Kopo Indah 2 Blok F No.12 Kel Margahayu', 40218),
(407, 0, 'TQ59 INDOPLUS ECO RAYA NG', 0, 'Jl. Raya Nginden No.22, Batarajaya', 0),
(408, 0, 'TQ8D INDOPLUS TANJUNG DUR', 0, 'Jl. Tanjung Duren Raya No. 822 RT 001 RW 02', 0),
(409, 0, 'TQ94 INDOPLUS ECO PAKIS A', 0, 'Jl. Pakis Argosari F-22/F-23, Dukuh Pakis', 0),
(410, 0, 'TR79 INDOPLUS ARCAMANIK E', 0, 'Jl. Arcamanik Endah No. 60, Sukamiskin, Arcamanik', 40293),
(411, 0, 'TRANS RETAIL INDONESIA, P', 0, 'Jl. Lebak Bulus Raya No. 8, Gedung Carrefour Keb. Lama', 0),
(412, 0, 'TRANS RETAIL INDONESIA, P', 0, 'Jl. Sultan Agung No.283, Way Halim Permai, Way Halim', 0),
(413, 0, 'TRANSMART AMBASSADOR', 0, 'ITC Kuningan, Jl. Prof. Dr. Satrio, Lt. Basement I, Kuningan', 0),
(414, 0, 'TRANSMART BUAH BATU', 0, 'Jl. Raya Bojongsoang No. 321, Cipagalo, Bojongsoang', 40287),
(415, 0, 'TRANSMART CARREFOUR LAMPU', 0, 'Jl. Sultan Agung No.283, Way Halim Permai, Way Halim', 0),
(416, 0, 'TRANSMART CEMPAKA PUTIH', 0, 'Jl. A. Yani No. 83 RT 10 RW 07, Cempaka Putih Timur', 0),
(417, 0, 'TRANSMART CENTRAL PARK', 0, 'Central Park Mall, Jl. Letj. S. Parman No. 28, Grogol', 0),
(418, 0, 'TRANSMART CILANDAK', 0, 'Jl. Raya Cilandak Kko No. 1A, Ragunan, Ps. Minggu', 12560),
(419, 0, 'TRANSMART LEBAK BULUS', 0, 'Jl. Lebak Bulus Raya No. 8, Pondok Pinang, Kby. Lama', 12310),
(420, 0, 'TRANSMART RUNGKUT', 0, 'Jl. Raya Kali Rungkut No. 25, Kali Rungkut', 0),
(421, 0, 'TREH INDOPLUS DANAU INDAH', 0, 'Jl. Danau Indah Raya Blok A1, Sunter Agung', 0),
(422, 0, 'TS15 INDOHYBRID BOULEVARD', 0, 'Ruko Boulevard Hijau Blok A3 No. 46-47, Bekasi', 0),
(423, 0, 'TS39 INDOFRESH SETOPAN SE', 0, 'Jl. Tol Jagorawi KM 35.6 Kadumanggu Babakan Madang', 0),
(424, 0, 'TS3E INDOHYBRID TALAGA BE', 0, 'Perum Talaga Bestari Plaza D\'C Wana Kerta', 0),
(425, 0, 'TS7A INDOPLUS PRIMER JATI', 0, 'Jl. Jatinegara Timur No. 86, Bali Mester', 0),
(426, 0, 'TS9M INDOPLUS BOULEVARD U', 0, 'Jl. Kelapa Gading Boulevard, Klp. Gading Barat', 0),
(427, 0, 'TS9O INDOPLUS GRAND BOULE', 0, 'Jl. Boulevard (RukB) Blok AT 15-01 RT 001 RW 008, Tarumajaya', 0),
(428, 0, 'TSUI INDOPLUS TEBET TIMUR', 0, 'Jl. Tebet Timur Dalam 29, Tebat Timur', 0),
(429, 0, 'TSVC INDOHYBRID KEMANG RA', 0, 'Jl. Niaga Raya Blok P No. 22-22B RT 01/21 Rawalumbu', 0),
(430, 0, 'TSYK INDOPLUS PECENONGAN', 0, 'Jl. Pecenongan No. 48', 0),
(431, 0, 'TTH4 INDOPLUS BAROS 63 -', 0, 'Jl. Akses Tol Baros No. 63, Baros Kodya Cimahi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `idtahun` int(11) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`idtahun`, `tahun`) VALUES
(2017, 2017),
(2018, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `tipecomplain`
--

CREATE TABLE `tipecomplain` (
  `id` int(11) NOT NULL,
  `nm_tipecomplain` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipecomplain`
--

INSERT INTO `tipecomplain` (`id`, `nm_tipecomplain`) VALUES
(1, 'Damaged Goods'),
(2, 'Availability in store'),
(4, 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
('1', 'dedy', 'dedy@teguh.com', 'dedy\r\n', 1),
('2', 'teguh', 'teguh', 'teguh', 1),
('3', 'suci', 'suci', 'suci\r\n', 0),
('4', 'dedi.efendi', 'dedi.efendi', 'password123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idarea`);

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`idbulan`);

--
-- Indexes for table `channel`
--
ALTER TABLE `channel`
  ADD PRIMARY KEY (`idchannel`);

--
-- Indexes for table `complainusers`
--
ALTER TABLE `complainusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `impression`
--
ALTER TABLE `impression`
  ADD PRIMARY KEY (`id_impression`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id_inquiry`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`idkota`);

--
-- Indexes for table `portal`
--
ALTER TABLE `portal`
  ADD PRIMARY KEY (`idportal`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`);

--
-- Indexes for table `produkdev`
--
ALTER TABLE `produkdev`
  ADD PRIMARY KEY (`id_dev`);

--
-- Indexes for table `produkreview`
--
ALTER TABLE `produkreview`
  ADD PRIMARY KEY (`id_rev`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`idstore`);

--
-- Indexes for table `store2`
--
ALTER TABLE `store2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`idtahun`);

--
-- Indexes for table `tipecomplain`
--
ALTER TABLE `tipecomplain`
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
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `idarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `idbulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `channel`
--
ALTER TABLE `channel`
  MODIFY `idchannel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `complainusers`
--
ALTER TABLE `complainusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `impression`
--
ALTER TABLE `impression`
  MODIFY `id_impression` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id_inquiry` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `idkota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `portal`
--
ALTER TABLE `portal`
  MODIFY `idportal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `produkdev`
--
ALTER TABLE `produkdev`
  MODIFY `id_dev` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produkreview`
--
ALTER TABLE `produkreview`
  MODIFY `id_rev` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `idstore` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `store2`
--
ALTER TABLE `store2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=432;
--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `idtahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2019;
--
-- AUTO_INCREMENT for table `tipecomplain`
--
ALTER TABLE `tipecomplain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
