-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 Kas 2021, 08:28:42
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kayit`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `arac`
--

CREATE TABLE `arac` (
  `ıd` int(11) NOT NULL,
  `arac_id` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `koltuk_sayisi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `marka` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `rota_id` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `arac`
--

INSERT INTO `arac` (`ıd`, `arac_id`, `koltuk_sayisi`, `marka`, `rota_id`) VALUES
(15, '1111', '46', 'Mercedes', '9999'),
(16, '11', '101', 'FORD1', '99'),
(17, '555', '46', 'TEMSA', '207');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilet`
--

CREATE TABLE `bilet` (
  `id` int(11) NOT NULL,
  `tc_no` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `nereden` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `nereye` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `rota_id` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `arac_id` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `koltuk` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bilet`
--

INSERT INTO `bilet` (`id`, `tc_no`, `nereden`, `nereye`, `rota_id`, `arac_id`, `koltuk`, `tarih`) VALUES
(67, '111', 'edremit', 'izmir', '15', '25', '38', '18/12/2030'),
(68, '123123123', 'edirne', 'tekirdağ', '21', '81', '3', '18/12/2021'),
(69, '123123', 'edremit', 'izmir', '4545', '8008', '5', '18/12/2021'),
(70, '123123', 'edirne', 'tekirdağ', '21', '81', '5', '18/12/2021'),
(71, '123123', 'edirne', 'tekirdağ', '21', '81', '5', '18/12/2021'),
(74, '4124124', 'bolu', 'BALIKESİR', '9999', '1111', '2', '18/12/2021'),
(75, '124124', 'ankara', 'zonguldak', '207', '555', '2', '18/12/2021');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`user_id`, `user_name`, `user_password`, `email`) VALUES
(17, 'deneme', '1234csc', '123@diyar.com'),
(19, 'diyar', '1212', 'diyar@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rota`
--

CREATE TABLE `rota` (
  `ıd` int(11) NOT NULL,
  `rota_id` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `nereden` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `nereye` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `rota`
--

INSERT INTO `rota` (`ıd`, `rota_id`, `nereden`, `nereye`) VALUES
(6, '9999', 'bolu', 'BALIKESİR'),
(7, '99', 'edirne', 'tekirdağ'),
(8, '4545', 'edremit', 'izmir'),
(9, '207', 'ankara', 'zonguldak');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `arac`
--
ALTER TABLE `arac`
  ADD PRIMARY KEY (`ıd`);

--
-- Tablo için indeksler `bilet`
--
ALTER TABLE `bilet`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`user_id`);

--
-- Tablo için indeksler `rota`
--
ALTER TABLE `rota`
  ADD PRIMARY KEY (`ıd`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `arac`
--
ALTER TABLE `arac`
  MODIFY `ıd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `bilet`
--
ALTER TABLE `bilet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `rota`
--
ALTER TABLE `rota`
  MODIFY `ıd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
