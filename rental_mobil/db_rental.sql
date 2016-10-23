-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2016 at 05:56 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mobil`
--

CREATE TABLE IF NOT EXISTS `tb_mobil` (
`kode_mobil` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(20) NOT NULL,
  `penumpang` int(3) NOT NULL,
  `bagasi` int(3) NOT NULL,
  `transmisi` varchar(20) NOT NULL,
  `tarif` int(20) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_mobil`
--

INSERT INTO `tb_mobil` (`kode_mobil`, `foto`, `brand`, `model`, `penumpang`, `bagasi`, `transmisi`, `tarif`, `qty`) VALUES
(3, 'avanza.png', 'Toyata', 'Avanza', 4, 2, 'Matic', 200000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mobilsewa`
--

CREATE TABLE IF NOT EXISTS `tb_mobilsewa` (
`nomor` int(11) NOT NULL,
  `tgl_sewa` varchar(20) NOT NULL,
  `tgl_kembali` varchar(20) NOT NULL,
  `qty_reserve` int(11) NOT NULL,
  `kode_mobil` int(11) NOT NULL,
  `confirmation` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_mobilsewa`
--

INSERT INTO `tb_mobilsewa` (`nomor`, `tgl_sewa`, `tgl_kembali`, `qty_reserve`, `kode_mobil`, `confirmation`, `status`) VALUES
(1, '2026-10-20', '2027-10-20', 0, 0, 'jmdicyp0', 'Active'),
(2, '2027-10-20', '2029-10-20', 1, 0, 'vt0hoqgd', 'Active'),
(3, '0000-00-00', '0000-00-00', 0, 0, 'ta4thtnb', 'Active'),
(4, '0000-00-00', '0000-00-00', 0, 0, '0jwt0vdi', 'Active'),
(5, '2027-10-20', '2029-10-20', 1, 0, 'sv5iw2f8', 'Active'),
(6, '2025-10-20', '2028-10-20', 1, 0, 'd4juedut', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyewaan`
--

CREATE TABLE IF NOT EXISTS `tb_penyewaan` (
`no_sewa` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `umur` int(3) NOT NULL,
  `tgl_sewa` varchar(20) NOT NULL,
  `tgl_kembali` varchar(20) NOT NULL,
  `result` int(11) NOT NULL,
  `kode_mobil` int(11) NOT NULL,
  `no_mobil` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `confirmation` varchar(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_penyewaan`
--

INSERT INTO `tb_penyewaan` (`no_sewa`, `nama`, `alamat`, `kota`, `email`, `telp`, `umur`, `tgl_sewa`, `tgl_kembali`, `result`, `kode_mobil`, `no_mobil`, `total`, `status`, `confirmation`) VALUES
(1, 'Dhiny', 'Banten 2', 'Palembang', 'dhiny.bieber@gmail.com', '0812674567', 20, '2027-10-20', '2029-10-20', 0, 0, 1, 0, '', 'vt0hoqgd'),
(2, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, '', '0jwt0vdi'),
(3, 'Dhiny Gray', 'Bantennnnn', 'Seoul', 'dhiny.bieber@gmail.com', '67575', 19, '2027-10-20', '2029-10-20', 0, 0, 1, 0, '', 'sv5iw2f8'),
(4, 'Gray', 'Banten 2', 'Palembang', 'dhiny.bieber@gmail.com', '0812674567', 20, '2025-10-20', '2028-10-20', 0, 0, 1, 0, '', 'd4juedut');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
 ADD PRIMARY KEY (`kode_mobil`);

--
-- Indexes for table `tb_mobilsewa`
--
ALTER TABLE `tb_mobilsewa`
 ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `tb_penyewaan`
--
ALTER TABLE `tb_penyewaan`
 ADD PRIMARY KEY (`no_sewa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
MODIFY `kode_mobil` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_mobilsewa`
--
ALTER TABLE `tb_mobilsewa`
MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_penyewaan`
--
ALTER TABLE `tb_penyewaan`
MODIFY `no_sewa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
