-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 03:52 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar`
--

CREATE TABLE `tb_daftar` (
  `id` int(11) NOT NULL,
  `no_daftar` int(10) NOT NULL,
  `no_tes` int(10) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `nama_panggilan` varchar(150) NOT NULL,
  `jk` varchar(150) NOT NULL,
  `ttl` varchar(150) NOT NULL,
  `agama` varchar(150) NOT NULL,
  `cita_cita` varchar(150) NOT NULL,
  `hoby` varchar(150) NOT NULL,
  `anak` varchar(150) NOT NULL,
  `kandung` int(11) NOT NULL,
  `tiri` int(11) NOT NULL,
  `angkat` int(11) NOT NULL,
  `bb` varchar(150) NOT NULL,
  `tb` varchar(150) NOT NULL,
  `gd` varchar(150) NOT NULL,
  `foto` varchar(191) NOT NULL,
  `penyakit` varchar(191) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `kelurahan` varchar(150) NOT NULL,
  `kecamatan` varchar(150) NOT NULL,
  `kota` varchar(150) NOT NULL,
  `prov` varchar(150) NOT NULL,
  `telp` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tinggal_dengan` varchar(150) NOT NULL,
  `nama_ayah` varchar(150) NOT NULL,
  `ttl_ayah` varchar(150) NOT NULL,
  `pekerjaan_ayah` varchar(150) NOT NULL,
  `pendidikan_ayah` varchar(150) NOT NULL,
  `kewarganegaraan_ayah` varchar(150) NOT NULL,
  `agama_ayah` varchar(150) NOT NULL,
  `hp_ayah` varchar(150) NOT NULL,
  `nama_ibu` varchar(150) NOT NULL,
  `ttl_ibu` varchar(150) NOT NULL,
  `pekerjaan_ibu` varchar(150) NOT NULL,
  `pendidikan_ibu` varchar(150) NOT NULL,
  `kewarganegaraan_ibu` varchar(150) NOT NULL,
  `agama_ibu` varchar(150) NOT NULL,
  `hp_ibu` varchar(150) NOT NULL,
  `nama_wali` varchar(150) NOT NULL,
  `ttl_wali` varchar(150) NOT NULL,
  `pekerjaan_wali` varchar(150) NOT NULL,
  `pendidikan_wali` varchar(150) NOT NULL,
  `hubungan` varchar(150) NOT NULL,
  `kewarganegaraan_wali` varchar(150) NOT NULL,
  `agama_wali` varchar(150) NOT NULL,
  `hp_wali` varchar(150) NOT NULL,
  `email_wali` varchar(150) NOT NULL,
  `pai_a` int(11) NOT NULL,
  `pai_b` int(11) NOT NULL,
  `pai_c` int(11) NOT NULL,
  `pai_d` int(11) NOT NULL,
  `pai_e` int(11) NOT NULL,
  `indo_a` int(11) NOT NULL,
  `indo_b` int(11) NOT NULL,
  `indo_c` int(11) NOT NULL,
  `indo_d` int(11) NOT NULL,
  `indo_e` int(11) NOT NULL,
  `ing_a` int(11) NOT NULL,
  `ing_b` int(11) NOT NULL,
  `ing_c` int(11) NOT NULL,
  `ing_d` int(11) NOT NULL,
  `ing_e` int(11) NOT NULL,
  `mtk_a` int(11) NOT NULL,
  `mtk_b` int(11) NOT NULL,
  `mtk_c` int(11) NOT NULL,
  `mtk_d` int(11) NOT NULL,
  `mtk_e` int(11) NOT NULL,
  `ipa_a` int(11) NOT NULL,
  `ipa_b` int(11) NOT NULL,
  `ipa_c` int(11) NOT NULL,
  `ipa_d` int(11) NOT NULL,
  `ipa_e` int(11) NOT NULL,
  `ips_a` int(11) NOT NULL,
  `ips_b` int(11) NOT NULL,
  `ips_c` int(11) NOT NULL,
  `ips_d` int(11) NOT NULL,
  `ips_e` int(11) NOT NULL,
  `prestasi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_daftar`
--

INSERT INTO `tb_daftar` (`id`, `no_daftar`, `no_tes`, `nama_lengkap`, `nama_panggilan`, `jk`, `ttl`, `agama`, `cita_cita`, `hoby`, `anak`, `kandung`, `tiri`, `angkat`, `bb`, `tb`, `gd`, `foto`, `penyakit`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `prov`, `telp`, `email`, `tinggal_dengan`, `nama_ayah`, `ttl_ayah`, `pekerjaan_ayah`, `pendidikan_ayah`, `kewarganegaraan_ayah`, `agama_ayah`, `hp_ayah`, `nama_ibu`, `ttl_ibu`, `pekerjaan_ibu`, `pendidikan_ibu`, `kewarganegaraan_ibu`, `agama_ibu`, `hp_ibu`, `nama_wali`, `ttl_wali`, `pekerjaan_wali`, `pendidikan_wali`, `hubungan`, `kewarganegaraan_wali`, `agama_wali`, `hp_wali`, `email_wali`, `pai_a`, `pai_b`, `pai_c`, `pai_d`, `pai_e`, `indo_a`, `indo_b`, `indo_c`, `indo_d`, `indo_e`, `ing_a`, `ing_b`, `ing_c`, `ing_d`, `ing_e`, `mtk_a`, `mtk_b`, `mtk_c`, `mtk_d`, `mtk_e`, `ipa_a`, `ipa_b`, `ipa_c`, `ipa_d`, `ipa_e`, `ips_a`, `ips_b`, `ips_c`, `ips_d`, `ips_e`, `prestasi`) VALUES
(62, 1, 1, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(64, 1, 1, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(65, 523, 523, 'a', 'a', 'Laki-laki', 'a', 'a', 'a', 'a', '1', 1, 1, 1, '1', '1', 'o', '', 'a', 'a', 'a', 'a', 'a', 'a', '000000000000', 'asdfghjk.df@sdf.fgh', 'Orang Tua', 'a', 'a', 'a', 'a', 'a', 'a', '12341234567890123', 'a', 'a', 'a', 'a', 'a', 'a', '1234567890123', 'a', 'a', 'a', 'a', 'asdfghj', 'a', 'a', 'a', 'qwerty@asdfg.sdfg', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'dfgty'),
(66, 736, 736, 'a', 'a', 'Laki-laki', 'a', 'a', 'a', 'a', '1', 1, 1, 1, '1', '1', 'o', '', 'a', 'a', 'a', 'a', 'a', 'a', '000000000000', 'asdfghjk.df@sdf.fgh', 'Orang Tua', 'a', 'a', 'a', 'a', 'a', 'a', '12341234567890123', 'a', 'a', 'a', 'a', 'a', 'a', '1234567890123', 'a', 'a', 'a', 'a', 'asdfghj', 'a', 'a', 'a', 'qwerty@asdfg.sdfg', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'dfgty'),
(67, 866, 866, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(68, 866, 866, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '0[1].jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(69, 142, 142, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '0[1].jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(70, 618, 618, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '0[1].jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(71, 92, 92, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '0[1].jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(72, 92, 92, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '0[1].jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(73, 642, 642, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(74, 642, 642, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(75, 191, 191, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(76, 897, 897, 'a', 'a', '', 'a', 'a', 'a', 'a', 'a', 0, 0, 0, 'a', 'a', 'a', '', '', 'a', 'a', 'a', 'a', 'a', 'a', 'aaaaaaaaaaaa@aaa.aaa', '', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'aaaa@gmail.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(77, 612, 612, 'a', 'a', '', 'a', 'a', 'a', 'a', 'a', 0, 0, 0, 'a', 'a', 'a', '', '', 'a', 'a', 'a', 'a', 'a', 'a', 'aaaaaaaaaaaa@aaa.aaaa', '', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'aaaa@gmail.coma', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(78, 612, 612, 'a', 'a', '', 'a', 'a', 'a', 'a', 'a', 0, 0, 0, 'a', 'a', 'a', '', '', 'a', 'a', 'a', 'a', 'a', 'a', 'aaaaaaaaaaaa@aaa.aaaa', '', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'aa', 'a', 'a', 'a', 'aaaa@gmail.coma', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(79, 612, 612, 'a', 'a', '', 'a', 'a', 'a', 'a', 'a', 0, 0, 0, 'a', 'a', 'a', '', '', 'a', 'a', 'a', 'a', 'a', 'a', 'aaaaaaaaaaaa@aaa.aaaa', '', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'aaa', 'a', 'a', 'a', 'aaaa@gmail.coma', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(80, 612, 612, 'a', 'a', '', 'a', 'a', 'a', 'a', 'a', 0, 0, 0, 'a', 'a', 'a', '', '', 'a', 'a', 'a', 'a', 'a', 'a', 'aaaaaaaaaaaa@aaa.aaaa', '', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'aaaa', 'a', 'a', 'a', 'aaaa@gmail.coma', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(81, 612, 612, 'a', 'a', '', 'a', 'a', 'a', 'a', 'a', 0, 0, 0, 'a', 'a', 'a', '', '', 'a', 'a', 'a', 'a', 'a', 'a', 'aaaaaaaaaaaa@aaa.aaaa', '', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'aaaa', 'a', 'a', 'a', 'aaaa@gmail.coma', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(82, 103, 103, 'a', 'a', 'Laki-laki', 'a', 'a', 'a', 'a', 'a', 0, 0, 0, 'a', 'a', 'a', '0[1].jpg', 'a\r\na\r\na', 'a', 'a', 'a', 'a', 'a', 'a', 'aaaaaaaaaaaa@aaa.aaaa', 'Asrama', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'aaaa@gmail.coma', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_daftar`
--
ALTER TABLE `tb_daftar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_daftar`
--
ALTER TABLE `tb_daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
