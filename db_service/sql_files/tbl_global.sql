-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Nis 2018, 12:46:25
-- Sunucu sürümü: 10.1.10-MariaDB
-- PHP Sürümü: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hlasnpdb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_global`
--

CREATE TABLE `tbl_global` (
  `id` int(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dsc` varchar(100) NOT NULL,
  `value_int` int(20) NOT NULL,
  `value_var` varchar(50) NOT NULL,
  `value_bol` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tbl_global`
--

INSERT INTO `tbl_global` (`id`, `name`, `dsc`, `value_int`, `value_var`, `value_bol`) VALUES
(1, 'site_name', 'Site Name', 0, 'hlaSNPs', 0),
(2, 'site_version', 'Site Version', 0, '1.1', 0),
(3, 'search_ctr', 'Search Counter', 178, '', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_global`
--
ALTER TABLE `tbl_global`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_global`
--
ALTER TABLE `tbl_global`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
