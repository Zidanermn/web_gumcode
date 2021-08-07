-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `about` (`about_id`, `keterangan`) VALUES
(1,	'Kami memiliki tim ahli yang berpengalaman, dengan latar belakang pendidikan dan keahlian di berbagai bidang siap memberikan solusi secara menyeluruh kepada bisnis anda. Kami memberikan solusi satu atap untuk semua kebutuhan IT anda, meliputi jasa pembuatan website, aplikasi (desktop, web &amp; mobile) hingga mengintegrasikan seluruh sistem di tempat anda. Kami memberikan solusi satu atap untuk semua kebutuhan IT anda, meliputi jasa pembuatan website, aplikasi (desktop, web &amp; mobile) hingga mengintegrasikan seluruh sistem di tempat anda yo. dengan memilih kami anda akan merasakan hal yang menabjubkan');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `header`;
CREATE TABLE `header` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `header` (`id`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(1,	'Kami adalah team professional yang handal dalam pembuatan Responsive Websites, Mobile Aplication, and UI/UX Design',	'1326582974.png',	'2021-07-30 05:19:44',	'2021-07-30 05:21:56');

DROP TABLE IF EXISTS `layanan`;
CREATE TABLE `layanan` (
  `layanan_id` int(20) NOT NULL AUTO_INCREMENT,
  `client` varchar(30) NOT NULL,
  `project` varchar(30) NOT NULL,
  `support` varchar(30) NOT NULL,
  `worker` varchar(30) NOT NULL,
  PRIMARY KEY (`layanan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `layanan` (`layanan_id`, `client`, `project`, `support`, `worker`) VALUES
(4,	'320',	'435',	'2663',	'17');

DROP TABLE IF EXISTS `mail`;
CREATE TABLE `mail` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`mail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `mail` (`mail_id`, `nama`, `email`, `subject`, `keterangan`) VALUES
(1,	'zidane',	'zidane@gmail.com',	'bertanya',	'halo'),
(2,	'amanda',	'amanda@gmail.com',	'mencoba',	'bagus'),
(3,	'coba',	'coba@gmail.com',	'limit',	'jadi berapa hari ?'),
(4,	'seno',	'seno@gmail.com',	'tes',	'bagaimana'),
(5,	'bagas',	'bagas@gmail.com',	'tanya',	'apakah benar'),
(6,	'Haidar',	'haidar@gmail.com',	'apps',	'appsnya jadi ?'),
(7,	'Andi',	'Andi@gmail.com',	'tanya dong',	'oh begitu ?');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2021_07_11_132619_create_portofolio_table',	2),
(5,	'2021_07_17_131046_create_portofolio_table',	3),
(6,	'2021_07_30_111103_create_header_table',	4);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `portofolio`;
CREATE TABLE `portofolio` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `portofolio` (`id`, `nama`, `jenis`, `foto`, `created_at`, `updated_at`) VALUES
(1,	'Progress Report Project',	'UI/UX Design',	'741971648.jpg',	'2021-07-17 16:44:18',	'2021-07-17 22:29:48'),
(2,	'Stock Apps',	'iOS',	'1788931470.png',	'2021-07-17 17:41:30',	'2021-07-17 22:30:29'),
(3,	'Pet Website',	'Website',	'833237131.png',	'2021-07-17 22:30:52',	'2021-07-17 22:30:52'),
(5,	'Streaming App',	'Android',	'1711387238.png',	'2021-07-17 22:55:22',	'2021-07-17 22:55:22');

DROP TABLE IF EXISTS `sosmed`;
CREATE TABLE `sosmed` (
  `sosmed_id` int(5) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `wa` varchar(100) NOT NULL,
  PRIMARY KEY (`sosmed_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `sosmed` (`sosmed_id`, `keterangan`, `instagram`, `wa`) VALUES
(1,	'Sosmed Zeeduniverse',	'https://www.instagram.com/zeed_universe/',	'https://wa.me/6285788690293?text=Isi Pesan');

DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE `subscribe` (
  `subs_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`subs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `subscribe` (`subs_id`, `email`) VALUES
(1,	'andi@gmail.com'),
(2,	'freya22@gmail.com'),
(3,	'bobon00@gmail.com');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'zidane',	'rzidane73@gmail.com',	NULL,	'$2y$10$Grf3YilK4O7TOtBBI9PlZenf/B01ini18H8eEDZVJWAiIn12dpfDC',	NULL,	'2021-07-08 05:31:59',	'2021-07-08 05:31:59');

DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `video_id` int(10) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(150) NOT NULL,
  `link` varchar(150) NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `video` (`video_id`, `keterangan`, `link`) VALUES
(1,	'Video ZeedUniverse',	'https://www.youtube.com/embed/mq508HXzccI');

-- 2021-08-07 11:57:24
