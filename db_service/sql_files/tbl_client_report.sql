-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Nis 2018, 12:46:42
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
-- Tablo için tablo yapısı `tbl_client_report`
--

CREATE TABLE `tbl_client_report` (
  `report_number` int(10) UNSIGNED ZEROFILL NOT NULL,
  `client_ip` varchar(20) NOT NULL COMMENT 'IP',
  `client_os` varchar(20) NOT NULL COMMENT 'Operative System',
  `client_browser` tinytext NOT NULL COMMENT 'Browser',
  `client_height` varchar(5) NOT NULL COMMENT 'Screen height',
  `client_width` varchar(5) NOT NULL COMMENT 'Screen width',
  `client_javaenabled` varchar(10) NOT NULL COMMENT 'Java enabled',
  `client_cookieenabled` varchar(10) NOT NULL COMMENT 'Cookie enabled',
  `client_language` tinytext NOT NULL COMMENT 'Language',
  `client_architecture` tinytext NOT NULL COMMENT 'Architecture',
  `client_device` tinytext NOT NULL COMMENT 'Device',
  `client_geo_country` tinytext NOT NULL COMMENT 'Country',
  `client_geo_region` tinytext NOT NULL COMMENT 'Region',
  `client_geo_continent` tinytext NOT NULL COMMENT 'Continent',
  `client_geo_city` tinytext NOT NULL COMMENT 'City',
  `client_geo_logitude` tinytext NOT NULL COMMENT 'Logitude',
  `client_geo_latitude` tinytext NOT NULL COMMENT 'Latitude',
  `client_geo_currency` tinytext NOT NULL COMMENT 'Currency',
  `client_provetor` tinytext NOT NULL COMMENT 'Provetor',
  `client_agent` tinytext NOT NULL COMMENT 'Agent',
  `client_referer` tinytext NOT NULL COMMENT 'Referer',
  `client_getdate` tinytext NOT NULL COMMENT 'Date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tbl_client_report`
--

INSERT INTO `tbl_client_report` (`report_number`, `client_ip`, `client_os`, `client_browser`, `client_height`, `client_width`, `client_javaenabled`, `client_cookieenabled`, `client_language`, `client_architecture`, `client_device`, `client_geo_country`, `client_geo_region`, `client_geo_continent`, `client_geo_city`, `client_geo_logitude`, `client_geo_latitude`, `client_geo_currency`, `client_provetor`, `client_agent`, `client_referer`, `client_getdate`) VALUES
(0000000001, '::1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018/02/01 4:17pm'),
(0000000002, '::1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018/02/01 4:17pm'),
(0000000003, '::1', '', 'Firefox', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018/02/01 4:20pm'),
(0000000004, '::1', '', 'Firefox', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018/02/01 4:20pm'),
(0000000005, '::1', '', 'Firefox', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018/02/01 4:21pm'),
(0000000006, '::1', '', 'Firefox', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018/02/01 4:27pm'),
(0000000007, '::1', 'Windows 10', 'Firefox', '', '', '', '', 'tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3', '64Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0', '', '2018/02/01 4:27pm'),
(0000000008, '::1', 'Windows 10', 'Firefox', '', '', '', '', 'tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3', '64Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0', '', '2018/02/01 4:28pm'),
(0000000009, '::1', 'Windows 10', 'Firefox', '', '', '', '', 'tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3', '64Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0', '', '2018/02/01 4:28pm'),
(0000000010, '::1', 'Windows 10', 'Firefox', '', '', '', '', 'tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3', '64Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0', '', '2018/02/01 4:30pm'),
(0000000011, '::1', 'Windows 10', 'Firefox', '', '', '', '', 'tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3', '64Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0', '', '2018/02/01 4:30pm'),
(0000000012, '::1', 'Windows 10', 'Firefox', '', '', '', '', 'tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3', '64Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0', '', '2018/02/01 4:30pm'),
(0000000013, '::1', 'Windows 10', 'Firefox', '', '', '', '', 'tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3', '64Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0', '', '2018/02/01 4:31pm'),
(0000000014, '::1', 'Windows 10', 'Firefox', '', '', '', '', 'tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3', '64Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0', '', '2018/02/01 4:31pm'),
(0000000015, '::1', 'Windows 10', 'Firefox', '', '', '', '', 'tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3', '64Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0', '', '2018/02/01 4:32pm'),
(0000000016, '::1', 'Windows 10', 'Firefox', '', '', '', '', 'tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3', '64Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0', '', '2018/02/01 4:33pm'),
(0000000017, '::1', 'Windows 10', 'Firefox', '', '', '', '', 'tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3', '64Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0', '', '2018/02/01 4:37pm'),
(0000000018, '::1', 'unknow', 'Safari', '', '', '', '', '', '32Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows; U; tr_TR) AppleWebKit/533.19.4 (KHTML, like Gecko) Dreamweaver/12.0.1.5842 Version/5.0.3 Safari/533.19.4', '', '2018/02/01 4:41pm'),
(0000000019, '::1', 'Windows 10', 'Firefox', '', '', '', '', 'tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3', '64Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0', '', '2018/02/01 4:41pm'),
(0000000020, '::1', 'Windows 10', 'Firefox', '', '', '', '', 'tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3', '64Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0', '', '2018/02/01 4:51pm'),
(0000000021, '::1', 'unknow', 'Safari', '', '', '', '', '', '32Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows; U; tr_TR) AppleWebKit/533.19.4 (KHTML, like Gecko) Dreamweaver/12.0.1.5842 Version/5.0.3 Safari/533.19.4', '', '2018/02/01 4:52pm'),
(0000000022, '::1', 'unknow', 'Safari', '', '', '', '', '', '32Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows; U; tr_TR) AppleWebKit/533.19.4 (KHTML, like Gecko) Dreamweaver/12.0.1.5842 Version/5.0.3 Safari/533.19.4', '', '2018/02/01 4:52pm'),
(0000000023, '::1', 'Windows 10', 'Firefox', '', '', '', '', 'tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3', '64Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0', '', '2018/02/01 11:21pm'),
(0000000024, '::1', 'Windows 10', 'Firefox', '', '', '', '', 'tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3', '64Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0', '', '2018/02/01 11:22pm'),
(0000000025, '::1', 'unknow', 'Safari', '', '', '', '', '', '32Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows; U; tr_TR) AppleWebKit/533.19.4 (KHTML, like Gecko) Dreamweaver/12.0.1.5842 Version/5.0.3 Safari/533.19.4', '', '2018/02/01 11:24pm'),
(0000000026, '::1', 'unknow', 'Safari', '', '', '', '', '', '32Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows; U; tr_TR) AppleWebKit/533.19.4 (KHTML, like Gecko) Dreamweaver/12.0.1.5842 Version/5.0.3 Safari/533.19.4', '', '2018/02/01 11:25pm'),
(0000000027, '::1', 'unknow', 'Safari', '', '', '', '', '', '32Bits', 'Computer', '', '', '', '', '', '', '', 'DESKTOP-K638POI', 'Mozilla/5.0 (Windows; U; tr_TR) AppleWebKit/533.19.4 (KHTML, like Gecko) Dreamweaver/12.0.1.5842 Version/5.0.3 Safari/533.19.4', '', '2018/02/01 11:25pm');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_client_report`
--
ALTER TABLE `tbl_client_report`
  ADD PRIMARY KEY (`report_number`),
  ADD UNIQUE KEY `report_number_UNIQUE` (`report_number`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_client_report`
--
ALTER TABLE `tbl_client_report`
  MODIFY `report_number` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
