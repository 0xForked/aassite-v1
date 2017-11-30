-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 05:59 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asmith`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(225) NOT NULL,
  `category_slug` varchar(225) NOT NULL,
  `category_description` varchar(225) NOT NULL,
  `category_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`, `category_slug`, `category_description`, `category_count`) VALUES
(3, 'Uncategory', 'Uncategory', 'uncategory, merupakan sebuah kategori yang di peruntukan untuk article atau portfolio/project yang tidak memiliki kategori.', 0),
(4, 'Mobile', 'Mobile', 'Mobile, merupakan sebuah kategori yang di peruntukan untuk article atau portfolio/project yang berkaitan dengan Mobile.', 0),
(5, 'Web', 'Web', 'web, merupakan sebuah kategori yang di peruntukan untuk article atau portfolio/project yang berkaitan dengan web.', 0),
(7, 'Blow mind', 'Blow-mind', 'Blow mind merupakan kategori yang diperuntukan untuk article yang merupakan buah pikir saya mengenai hal umum yang ada.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `image_id` int(11) NOT NULL,
  `image_title` varchar(225) NOT NULL,
  `image_folder` varchar(225) NOT NULL,
  `image_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`image_id`, `image_title`, `image_folder`, `image_name`) VALUES
(1, 'Makanan', 'demopic', '1.jpg'),
(2, 'Kota', 'demopic', '2.jpg'),
(3, 'Pernak Pernik', 'demopic', '3.jpg'),
(4, 'Jembatan', 'demopic', '4.jpg'),
(5, 'Sexy', 'demopic', '5.jpg'),
(6, 'Its Me', 'demopic', '6.jpg'),
(7, 'Girl', 'demopic', '7.jpg'),
(8, 'Padang rumput', 'demopic', '8.jpg'),
(9, 'London', 'demopic', '9.jpg'),
(10, 'Home', 'demopic', '10.jpg'),
(16, 'logo', 'items', 'asmith-logo.JPG'),
(25, 'A Simple Web with CodeIgniter', 'project', 'asmith_logo.JPG'),
(27, 'bogani', 'project', '1.png'),
(28, 'coba coba', 'project', 'photo.jpg'),
(29, 'SMP Negeri 4 Manado', 'project', 'qwe.png');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `message_name` varchar(225) NOT NULL,
  `message_email` varchar(225) NOT NULL,
  `message_title` varchar(225) NOT NULL,
  `message_body` text NOT NULL,
  `message_status` varchar(225) NOT NULL DEFAULT 'unReplied',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `message_name`, `message_email`, `message_title`, `message_body`, `message_status`, `created_at`) VALUES
(10, 'Agus Adhi Sumitro', 'aasumitro@merahputih.id', 'Pesan web mas!', 'Mas saya mau pesan web.', 'unReplied', '2017-11-18 23:12:17'),
(11, 'Muh Rizal', 'muhrizal@merahputih.id', 'Mas mau tanya?', 'Mas saya mau nanya mengenai aplikasi yang kemarin, gimana yahh? ', 'isReplied', '2017-11-18 23:13:26'),
(16, 'Admin Codeinsect', 'admin@codeinsect.com', 'Dicoba mas!', 'Cuma mau nyoba mas hehe.', 'isReplied', '2017-11-18 23:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `portfolio_id` int(11) NOT NULL,
  `portfolio_author` varchar(225) NOT NULL,
  `portfolio_slug` varchar(225) NOT NULL,
  `portfolio_category` varchar(225) NOT NULL,
  `portfolio_tags` varchar(225) NOT NULL,
  `portfolio_title` varchar(225) NOT NULL,
  `portfolio_description` text NOT NULL,
  `status_headline` varchar(225) NOT NULL,
  `status_project` varchar(225) NOT NULL,
  `link_store_google` varchar(225) DEFAULT NULL,
  `link_store_apple` varchar(225) DEFAULT NULL,
  `link_url_web` varchar(225) DEFAULT NULL,
  `link_demo_web` varchar(225) DEFAULT NULL,
  `link_github` varchar(225) DEFAULT NULL,
  `user_guide` varchar(225) DEFAULT NULL,
  `portfolio_logo` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`portfolio_id`, `portfolio_author`, `portfolio_slug`, `portfolio_category`, `portfolio_tags`, `portfolio_title`, `portfolio_description`, `status_headline`, `status_project`, `link_store_google`, `link_store_apple`, `link_url_web`, `link_demo_web`, `link_github`, `user_guide`, `portfolio_logo`, `created_at`) VALUES
(5, '4911545', 'portfolio-concept-update', 'noone', 'Portfolio,Concept,Test', 'Portfolio Concept Update', '<p>This is for concept test! update</p>', 'isOrdinary', 'isConcept', 'https://play.google.com', 'https://itunes.apple.com/us/genre/ios/id36%3Fmt%3D8', 'https://asmith.my.id/project/portfolio-concept', 'https://asmith.my.id/project/portfolio-concept', 'https://github.com', NULL, '2_5.png', '2017-11-27 23:29:13'),
(6, '4911545', 'bogani-kotamobagu-directory', 'Mobile', 'City Directory,Kota Kotamobagu,Android, Java,FIrebase,Location Based Service', 'Bogani - Kotamobagu Directory', '<p>Kotamobagu Directory</p>', 'isOrdinary', 'isPublished', 'https://play.google.com/store/apps/details?id=id.my.asmith.ktg001', '', 'http://bogani.asmith.my.id', '', '', 'http://bogani.asmith.my.id/user_guide.pdf', '1.png', '2017-11-29 11:51:38'),
(7, '4911545', 'a-simple-web-with-codeigniter', 'Web', 'PHP,CodeIgniter,Web', 'A Simple Web with CodeIgniter', '<p>This is project built with CodeIgniter a PHP Framework and share for free&nbsp;as a learning material</p>', 'isOrdinary', 'isPublished', '', '', '', 'https://asmith.my.id/', 'https://github.com/aasumitro/asmith-web', NULL, 'asmith_logo.JPG', '2017-11-29 13:39:52'),
(10, '4911545', 'smp-negeri-4-manado', 'Web', 'Website,School', 'SMP Negeri 4 Manado', '<p>Smp negeri 4 manado websiter</p>', 'isOrdinary', 'isPublished', '', '', 'https://smpn4manado.sch.id', '', '', 'https://smpn4manado.sch.id/guide.pdf', 'qwe.png', '2017-11-30 04:02:37');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `posts_id` int(11) NOT NULL,
  `post_author` int(11) NOT NULL,
  `post_category` varchar(225) NOT NULL,
  `post_tag` text NOT NULL,
  `post_slug` varchar(225) NOT NULL,
  `post_title` text NOT NULL,
  `post_body` longtext NOT NULL,
  `post_image` varchar(225) NOT NULL,
  `isPublished` varchar(225) NOT NULL,
  `post_status` varchar(225) NOT NULL,
  `post_clap` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`posts_id`, `post_author`, `post_category`, `post_tag`, `post_slug`, `post_title`, `post_body`, `post_image`, `isPublished`, `post_status`, `post_clap`, `created_at`) VALUES
(82, 4911545, '3', 'Test,Concept,Uncategory', 'test-article-edited', 'Test article edited!', '<p>This is test article with uncategory as concept test test test test test lorpem ipsum do asmet la ra do</p>', 'tag_dng_cat.png', 'isConcept', 'isArticle', 999, '2017-11-20 09:35:21'),
(83, 4911545, '3', 'Its Me, First Article, Asmith web', 'ini-saya-tak-kenal-maka-tak-sayang', 'Ini Saya, tak Kenal maka tak Sayang!', '<p>Hello gan,</p>\r\n<p>Perkenalkan nama saya Agus Adhi Sumitro saya seorang <a href=\"https://forlap.ristekdikti.go.id/mahasiswa/detail/NUNEMkZBM0ItMkJCOS00RjkyLUJDNzctQjRFNjA4MUY2RUM1\" target=\"_blank\">lulusan</a> Teknik Informatika Dari <a href=\"http://unsrat.ac.id\" target=\"blank\">Universitas Sam Ratulangi</a> Manado, saya merupakan seorang penggemar bidang pemrograman fokus saya sendiri adalah ke bagian pengembangan aplikasi berbasis perangkat seluler selain itu saya juga mempelajari pengembangan aplikasi web terkhususnya pada bagian backend. Artikel&nbsp;ini merupakan postingan pertama saya untuk website yang baru selesai saya kembangkan, sedikit info&nbsp;mengenai website ini, website ini saya kembangkan menggunakan <a href=\"https://codeigniter.com\">CodeIgniter 3.1.6</a>&nbsp;desainnya sendiri pada bagian antarmuka yang bersentuhan langsung dengan user atau bisa dikatakan yang agan/aganwati lihat ini, saya menggunakan AIR HTML5 Boostrap dan untuk antarmuka adminnya atau admin dashboardnya saya menggunakan <a href=\"https://github.com/gurayyarar/AdminBSBMaterialDesign\">Admin BSB Material Design</a> yang di kembangkan oleh Guray Yarar dan dibagikan secara open source. alasan saya mengembangkan website ini adalah untuk sarana menulis berbagai buah pikir saya maupun sarana menyimpan materi pembelajaran saya&nbsp;berdasarkan pengalaman dan masalah yang pernah saya hadapi pada dunia pemrograman.</p>\r\n<p>Sekian dari saya</br>Best regards</br><a href=\"mailto:aasumitro@gmail.com\">Agus Adhi Sumitro</a></p>', 'programmer.jpg', 'isPublished', 'isArticle', 999, '2017-11-21 01:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag_id` int(11) NOT NULL,
  `tag_title` varchar(225) NOT NULL,
  `tag_slug` varchar(225) NOT NULL,
  `tag_description` varchar(225) NOT NULL,
  `tag_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tag_id`, `tag_title`, `tag_slug`, `tag_description`, `tag_count`) VALUES
(12, 'Android App', 'Android-App', 'Android App merupakan tag yang di peruntukan untuk semua portfolio dengan kategori android.', 0),
(14, 'Web App', 'Web-App', 'Web App merupakan tag yang di peruntukan untuk semua portfolio dengan kategori web.', 0),
(15, 'Android', 'Android', 'Merupakan tag yang di peruntukan untuk article dengan kategori android atau article yang berhubungan dengan android.', 0),
(16, 'Web', 'Web', 'Merupakan tag yang di peruntukan untuk article dengan kategori web atau article yang berhubungan dengan web.', 0),
(17, 'CodeIgniter Framework', 'CodeIgniter-Framework', 'Merupakan tag yang di peruntukan untuk article atau portfolio/project dengan kategori web yang di bangun menggunakan framework codeigniter.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `full_name`, `company`, `phone`) VALUES
(123, '127.0.0.1', 'admin', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', NULL, 'admin@admin.com', NULL, NULL, NULL, 'b3ks/mdTd4SSMj0O6AG3y.', 1510841429, 1512002831, 1, 'admin', 'Asmith App', '+6280000000');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `users_username` varchar(225) NOT NULL,
  `users_name` varchar(225) NOT NULL,
  `users_email` varchar(225) NOT NULL,
  `user_number` varchar(225) NOT NULL,
  `website_name` varchar(225) NOT NULL,
  `website_description` varchar(225) NOT NULL,
  `maintenance_status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `users_id`, `users_username`, `users_name`, `users_email`, `user_number`, `website_name`, `website_description`, `maintenance_status`) VALUES
(1, 123, 'admin', 'admin', 'admin@admin.com', '+628000000', 'Its admin', 'Personal Website', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`posts_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `posts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4911546;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
