-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Des 2015 pada 20.01
-- Versi Server: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lintas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
`id` int(11) NOT NULL,
  `nama_lokasi` varchar(255) NOT NULL,
  `latittude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama_lokasi`, `latittude`, `longitude`) VALUES
(1, 'Jalan Kaliurang', '-7.757281', '110.382104'),
(2, 'Jalan Monjali', '-7.751952', '110.370854'),
(3, 'Jalan Gejayan', '-7.773060', '110.389578'),
(4, 'Jalan Raya Solo-Jogja Bandara', '-7.783527', '110.429755'),
(5, 'Jalan C. Simanjuntak', '-7.782473', '110.372331'),
(6, 'Jalan A.M. Sangaji', '-7.781354', '110.367171'),
(7, 'Jalan Prof. DR. Sardjito', '-7.776528', '110.372063'),
(8, 'Jalan Cik Ditiro', '-7.781723', '110.375116'),
(9, 'Jalan Colombo', '-7.776204', '110.377342'),
(10, 'Jalan Malioboro', '-7.791346', '110.365953');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
