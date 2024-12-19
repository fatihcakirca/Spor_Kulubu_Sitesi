-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 11 Haz 2022, 07:58:50
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `digerkullanici`
--

DROP TABLE IF EXISTS `digerkullanici`;
CREATE TABLE IF NOT EXISTS `digerkullanici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cinsiyet` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `odul` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `oy` bit(64) NOT NULL,
  `urun` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `digerkullanici`
--

INSERT INTO `digerkullanici` (`id`, `cinsiyet`, `odul`, `oy`, `urun`) VALUES
(2, 'erkek', 'madalya', b'0000000000000000001101100011011000110110001101100011011000110110', 'forma'),
(3, 'kadın', 'pırlanta', b'0011100000111000001110000011100000111000001110000011100000111000', 'çanta'),
(4, 'erkek', 'bilgisayar', b'0000000000110111001101110011011100110111001101110011011100110111', 'atkı'),
(5, 'erkek', 'bilgisayar', b'0000000000000000001101000011010100110110001101100011001100110100', 'çanta');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE IF NOT EXISTS `kullanici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kullaniciadi` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sifre` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `isim`, `email`, `kullaniciadi`, `sifre`) VALUES
(1, 'a', 'b', 'c', 'd'),
(2, 'ab', 'cd', 'ef', 'gh'),
(13, 'ALİ', 'ADANA', 'alikucuknane', '01'),
(12, 'Fatih', 'rghgnghhjm', 'fatihcakirca', 'karsli'),
(9, 'ali', 'adana', 'aliadana', 'adana');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `otheruser`
--

DROP TABLE IF EXISTS `otheruser`;
CREATE TABLE IF NOT EXISTS `otheruser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telno` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `otheruser`
--

INSERT INTO `otheruser` (`id`, `telno`) VALUES
(1, 45565645445),
(2, 45565645445),
(3, 456535353),
(4, 5956164615),
(5, 24544445454),
(6, 653535353),
(7, 6884545645),
(9, 758224272),
(10, 123456789),
(11, 123456789),
(12, 512545242540),
(13, 4156787162846),
(14, 46551385456),
(15, 13246878349),
(16, 4364164264205),
(17, 453418254128),
(18, 6),
(19, 4638183),
(20, 368413),
(21, 478374873);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tcno` bigint(20) NOT NULL,
  `adi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `soyadi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dogumyili` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `tcno`, `adi`, `soyadi`, `dogumyili`) VALUES
(1, 12345678911, 'dfd', 'jhj', 1988),
(2, 45454544233, 'dgfh', 'fhfgfg', 1992),
(3, 45454544233, 'dgfh', 'fhfgfg', 1992),
(4, 11109876543, 'dxgcgnghm', 'hgghkyugrth', 1996),
(5, 12121212125, 'uıu', 'ıukyu', 1999),
(6, 4535520424, 'fghgh', 'jhjkjkj', 1997),
(7, 546235454, 'nhjkh', 'mhujhvghb', 1977),
(8, 24545, 'uhygygy', 'ftrtdrtd', 1966),
(9, 52525, 'ıuku', 'yıkukıu', 2422),
(10, 455457585, 'RYHTJY', 'FHGJHK', 1997),
(11, 456564454545, 'dfghggv', 'chvgjvhhb', 1967),
(19, 784210414, 'tgmvm', 'fvfhmtgfv', 9999),
(18, 496381328438, 'ultödgc', 'ftulçjhldcföthd', 6666);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
