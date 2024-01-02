-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Oca 2024, 00:48:47
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kurumsal-tanitim`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(255) NOT NULL,
  `ayar_favicon` varchar(255) NOT NULL,
  `ayar_telefon` varchar(50) NOT NULL,
  `ayar_mail` varchar(150) NOT NULL,
  `ayar_adres` varchar(300) NOT NULL,
  `ayar_description` varchar(300) NOT NULL,
  `ayar_keywords` varchar(300) NOT NULL,
  `ayar_copyright` varchar(255) NOT NULL,
  `ayar_facebook` varchar(255) DEFAULT NULL,
  `ayar_twitter` varchar(255) DEFAULT NULL,
  `ayar_instagram` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_favicon`, `ayar_telefon`, `ayar_mail`, `ayar_adres`, `ayar_description`, `ayar_keywords`, `ayar_copyright`, `ayar_facebook`, `ayar_twitter`, `ayar_instagram`) VALUES
(1, 'Group 15.png', 'favicon.png', '+90 535 555 55 55', 'admin@admin.com', 'Türkiye', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable.', 'admin,paneli,keywords,alanı', '© 2024 All Rights Reserved By Y.U', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(250) NOT NULL,
  `hakkimizda_icerik` text NOT NULL,
  `hakkimizda_resim` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`, `hakkimizda_resim`) VALUES
(1, 'We Are Finexo', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration\r\nin some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you\r\nare going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in\r\nthe middle of text. \r\n\r\nAll Molestiae odio earum non qui cumque provident voluptates, repellendus exercitationem, possimus at iste corrupti officiis unde alias eius ducimus reiciendis soluta eveniet. Nobis ullam ab omnis quasi expedita.                                            ', 'about-img.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `modul`
--

CREATE TABLE `modul` (
  `modul_id` int(11) NOT NULL,
  `modul_ad` varchar(100) NOT NULL,
  `modul_sira` int(11) NOT NULL,
  `modul_durum` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `modul`
--

INSERT INTO `modul` (`modul_id`, `modul_ad`, `modul_sira`, `modul_durum`) VALUES
(1, 'hakkimizda', 1, 1),
(2, 'nedenbiz', 2, 1),
(3, 'servis', 3, 1),
(4, 'takim', 4, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `nedenbiz`
--

CREATE TABLE `nedenbiz` (
  `ndn_id` int(11) NOT NULL,
  `ndn_baslik` varchar(100) NOT NULL,
  `ndn_icerik` text NOT NULL,
  `ndn_durum` tinyint(1) NOT NULL,
  `ndn_resim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `nedenbiz`
--

INSERT INTO `nedenbiz` (`ndn_id`, `ndn_baslik`, `ndn_icerik`, `ndn_durum`, `ndn_resim`) VALUES
(1, 'Expert Management', 'Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil. Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus', 1, 'w1.png'),
(2, 'Secure Investment', 'Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil. Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus', 1, 'w2.png'),
(3, 'Instant Trading', 'Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil. Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus', 1, 'w3.png'),
(4, 'Happy Customers', 'Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil. Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus', 1, 'w4.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `sayfa_id` int(11) NOT NULL,
  `sayfa_adi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`sayfa_id`, `sayfa_adi`) VALUES
(1, 'hakkimizda'),
(2, 'nedenbiz'),
(3, 'servis'),
(4, 'takim');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfa_modul`
--

CREATE TABLE `sayfa_modul` (
  `id` int(11) NOT NULL,
  `sayfa_id` int(11) NOT NULL,
  `modul_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `sayfa_modul`
--

INSERT INTO `sayfa_modul` (`id`, `sayfa_id`, `modul_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `servis`
--

CREATE TABLE `servis` (
  `servis_id` int(11) NOT NULL,
  `servis_ad` varchar(100) NOT NULL,
  `servis_aciklama` text NOT NULL,
  `servis_durum` tinyint(1) NOT NULL,
  `servis_resim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `servis`
--

INSERT INTO `servis` (`servis_id`, `servis_ad`, `servis_aciklama`, `servis_durum`, `servis_resim`) VALUES
(1, 'CURRENCY WALLET', 'fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using', 1, 's1.png'),
(2, 'SECURITY STORAGE', 'fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using', 1, 's2.png'),
(3, 'EXPERT SUPPORT', 'fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using', 1, 's3.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_baslik` varchar(250) NOT NULL,
  `slider_aciklama` text NOT NULL,
  `slider_resim` varchar(255) NOT NULL,
  `slider_durum` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_baslik`, `slider_aciklama`, `slider_resim`, `slider_durum`) VALUES
(1, 'CRYPTO CURRENCY', '1Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam\r\nfugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias,\r\nveniam, vel architecto veritatis delectus repellat modi impedit sequi.', 'slider-img.png', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `takim`
--

CREATE TABLE `takim` (
  `takim_id` int(11) NOT NULL,
  `takim_isim` varchar(250) NOT NULL,
  `takim_gorev` varchar(150) NOT NULL,
  `takim_durum` tinyint(1) NOT NULL,
  `takim_twitter` varchar(255) NOT NULL,
  `takim_instagram` varchar(255) NOT NULL,
  `takim_linkedin` varchar(255) NOT NULL,
  `takim_resim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `takim`
--

INSERT INTO `takim` (`takim_id`, `takim_isim`, `takim_gorev`, `takim_durum`, `takim_twitter`, `takim_instagram`, `takim_linkedin`, `takim_resim`) VALUES
(1, 'Joseph Brown', 'Marketing Head', 1, 'https://www.twitter.com', 'https://www.instagram.com', 'https://www.linkedin.com', 'team-1.jpg'),
(2, 'Nancy White', 'Marketing Head', 1, 'https://www.twitter.com', 'https://www.instagram.com', 'https://www.linkedin.com', 'team-2.jpg'),
(3, 'Earl Martinez', 'Marketing Head', 1, 'https://www.twitter.com', 'https://www.instagram.com', 'https://www.linkedin.com', 'team-3.jpg'),
(4, 'Josephine Allard', 'Marketing Head', 1, 'https://www.twitter.com', 'https://www.instagram.com', 'https://www.linkedin.com', 'team-4.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici`
--

CREATE TABLE `yonetici` (
  `yonetici_id` int(11) NOT NULL,
  `yonetici_adsoyad` varchar(100) NOT NULL,
  `yonetici_mail` varchar(255) NOT NULL,
  `yonetici_username` varchar(255) NOT NULL,
  `yonetici_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `yonetici`
--

INSERT INTO `yonetici` (`yonetici_id`, `yonetici_adsoyad`, `yonetici_mail`, `yonetici_username`, `yonetici_password`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin', '$2y$10$/fJaGJBqFmENSYEsZawh1OTht9/85FmbU2JFM19zy/1A2Z0UGf9NC');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`modul_id`);

--
-- Tablo için indeksler `nedenbiz`
--
ALTER TABLE `nedenbiz`
  ADD PRIMARY KEY (`ndn_id`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`sayfa_id`);

--
-- Tablo için indeksler `sayfa_modul`
--
ALTER TABLE `sayfa_modul`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sayfa_id` (`sayfa_id`),
  ADD KEY `modul_id` (`modul_id`);

--
-- Tablo için indeksler `servis`
--
ALTER TABLE `servis`
  ADD PRIMARY KEY (`servis_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `takim`
--
ALTER TABLE `takim`
  ADD PRIMARY KEY (`takim_id`);

--
-- Tablo için indeksler `yonetici`
--
ALTER TABLE `yonetici`
  ADD PRIMARY KEY (`yonetici_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayar`
--
ALTER TABLE `ayar`
  MODIFY `ayar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `hakkimizda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `modul`
--
ALTER TABLE `modul`
  MODIFY `modul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `nedenbiz`
--
ALTER TABLE `nedenbiz`
  MODIFY `ndn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `sayfa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `sayfa_modul`
--
ALTER TABLE `sayfa_modul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `servis`
--
ALTER TABLE `servis`
  MODIFY `servis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `takim`
--
ALTER TABLE `takim`
  MODIFY `takim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `yonetici`
--
ALTER TABLE `yonetici`
  MODIFY `yonetici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `sayfa_modul`
--
ALTER TABLE `sayfa_modul`
  ADD CONSTRAINT `sayfa_modul_ibfk_1` FOREIGN KEY (`sayfa_id`) REFERENCES `sayfalar` (`sayfa_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sayfa_modul_ibfk_2` FOREIGN KEY (`modul_id`) REFERENCES `modul` (`modul_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
