-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 03:20 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adoptme`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoptionrequest`
--

CREATE TABLE `adoptionrequest` (
  `id` int(12) NOT NULL,
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `adoptfor` varchar(255) NOT NULL,
  `originshelter` enum('Apollo Shelter','Ares Shelter','Athena Shelter','Persephone Shelter') NOT NULL,
  `adoptionform` text,
  `status` enum('Upload Adoption Form','Adoption Form Validation','Interview','Trial','Canceled','Adoption Success','Adoption Failed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adoptionrequest`
--

INSERT INTO `adoptionrequest` (`id`, `id_user`, `username`, `name`, `phone`, `email`, `address`, `adoptfor`, `originshelter`, `adoptionform`, `status`) VALUES
(9, 11, '', 'Nandana', '01234567890', 'Nandana@mail.com', 'Terban GK 1 No 1', 'Whitey', 'Apollo Shelter', '/images/file_1511542975.docx', 'Interview'),
(11, 16, 'rafika', 'rafika s', '08123456789', 'rafika@mail.com', 'yk', 'Cloudy', 'Apollo Shelter', '/images/file_1511607514.docx', 'Upload Adoption Form'),
(12, 16, 'rafika', 'rafika s', '08123456789', 'rafika@mail.com', 'Terban GK 1 No 1', 'Blip', 'Apollo Shelter', '/images/file_1511607881.docx', 'Adoption Failed'),
(13, 16, 'rafika', 'rafika s', '08123456789', 'rafika@mail.com', 'Terban GK 1 No 1', 'Bailey', 'Apollo Shelter', '/images/file_1511616048.docx', 'Upload Adoption Form');

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `category` enum('cat','dog') NOT NULL,
  `image` text,
  `name` varchar(255) NOT NULL,
  `age` int(2) NOT NULL,
  `shelter` enum('Apollo Shelter','Ares Shelter','Athena Shelter','Persephone Shelter') NOT NULL,
  `gender` enum('female','male') NOT NULL,
  `vaccinated` enum('Yes','No') DEFAULT NULL,
  `spayed` enum('Yes','No') DEFAULT NULL,
  `health` text,
  `story` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`id`, `category`, `image`, `name`, `age`, `shelter`, `gender`, `vaccinated`, `spayed`, `health`, `story`) VALUES
(21, 'cat', '/images/image_1511600467.jpg', 'Bailey', 60, 'Apollo Shelter', 'male', 'Yes', 'Yes', 'Healthy', 'Bailey is a gentle and affectionate 5-year-old ragdoll looking for a new home. He seems to love everyone he meets and will quickly rub on your ankles and request some attention. If you’re looking for a cuddly companion, you really need to meet this sweetie!'),
(23, 'dog', '/images/image_1511617907.JPG', 'Cotton', 7, 'Persephone Shelter', 'male', 'Yes', 'Yes', NULL, 'Cotton is a playful puppy looking for a forever home to settle into. He may be a tiny bit shy in a new place or around new people but quickly gets comfortable and will approach you for pets and love. He’s an energetic boy and would love a home where he can show off his athletic abilities. We think he would do well with kids and other animals.'),
(27, 'cat', '/images/image_1511599728.jpg', 'Cloudy', 6, 'Apollo Shelter', 'male', 'Yes', 'No', NULL, 'Cloudy is a young, affectionate, and very gentle boy looking for a new home. He hasn’t been with us long but has quickly become a volunteer favorite. He lived with another cat in the past, so we think he’d be okay with a feline sibling after proper introductions, and would likely be happy with older respectful children.'),
(28, 'dog', '/images/image_1511599002.jpg', 'Kiera', 9, 'Apollo Shelter', 'female', 'No', 'Yes', NULL, 'I am a tiny little thing, but I haven’t figured that out yet. I think I’m as big as the other dogs and I won’t hesitate to let everyone know. I am 9 years old but have the energy of a much younger dog. Let’s go on long walks together and then I’ll follow you around wherever you go.'),
(29, 'cat', '/images/image_1511613613.jpg', 'Query', 15, 'Persephone Shelter', 'female', 'Yes', 'Yes', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`) VALUES
(6, 'Why Adopt Instead of Buying A Pet', '<p>You&rsquo;ve decided to welcome a new pet in your home?&nbsp; Shelters and rescue groups have a wide selection of animals looking for new homes, from cats and dogs to birds, rabbits and small animals. Here are great reasons to adopt your new best friend:</p>\r\n\r\n<ul>\r\n	<li><strong>Adoption helps&nbsp;</strong><strong>stop pet overpopulation</strong></li>\r\n	<li><strong>Adoption saves lives</strong></li>\r\n	<li><strong>Adoption gives a second chance</strong></li>\r\n</ul>'),
(8, 'Let''s Adopt!', '<p>People who rescue animals can be reluctant to believe anyone deserves the furry creatures. Some rescue groups think potential owners shouldn&rsquo;t have full-time jobs. Others reject families with children. Some rescuers think apartment dwelling is OK for humans but not for dogs, or object to a cat&rsquo;s litter box being placed in a basement. Some say no to people who would let a dog run around the fenced backyard &ldquo;unsupervised,&rdquo; or allow a cat outside, ever.</p>'),
(9, 'Misconceptions About Adoption', '<p><strong>Myth #1: I don&rsquo;t know what I&rsquo;m getting</strong><br />\r\nThere may in fact be more information available about an adoptable pet than one from a breeder or pet store.</p>\r\n\r\n<p>Many of the pets posted on Petfinder are in foster care. Foster parents live with their charges 24-7 and can often tell you, in detail, about the pet&rsquo;s personality and habits. If the pet is at a shelter, the staff or volunteers may be able to tell you what he or she is like.</p>\r\n\r\n<p>At the very least, you can ask the staff if the pet was an owner surrender (rather than a stray) and, if so, what the former owner said about him or her. Quite often pets are given up because the owner faced financial or housing issues (more on that later). You can also ask about the health and behavioral evaluations the pet has undergone since arriving at the shelter. In contrast, pet store owners rarely have an idea of what a pet will be like in a home.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(5) NOT NULL,
  `id_user` int(11) NOT NULL,
  `bank_number` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `amount` int(20) NOT NULL,
  `image` text NOT NULL,
  `status` enum('waiting confirmation','accepted') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `id_user`, `bank_number`, `bank_name`, `amount`, `image`, `status`) VALUES
(1, 0, '123', 'lily', 120000, 'C:\\xampp\\tmp\\php608C.tmp', 'waiting confirmation'),
(2, 0, '123', 'lily', 120000, 'C:\\xampp\\tmp\\phpFDF3.tmp', 'accepted'),
(3, 0, '123', 'lily', 120000, 'C:\\xampp\\tmp\\php6475.tmp', 'waiting confirmation'),
(4, 0, '123', 'lily', 120000, '/images/image_1511489556.jpg', 'accepted'),
(5, 0, '888888', 'hhhh', 30000, '/images/image_1511504196.png', 'waiting confirmation'),
(6, 11, '999', 'jughead', 90000, '/images/image_1511584012.png', 'waiting confirmation'),
(7, 11, 'Hellyeah', 'BCA', 1000000, '/images/image_1511597675.png', 'waiting confirmation'),
(8, 11, '222576252', 'Rose', 2000000, '/images/image_1511597852.png', 'waiting confirmation'),
(9, 16, '1234567890', 'Rafika S', 150000, '/images/image_1511615036.png', 'waiting confirmation');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message`) VALUES
(1, 'me', 'me', 'me'),
(2, 'Ananda', 'Ananda@mail.com', 'cant upload the adoption form'),
(3, 'Lily', 'Lily@mail.com', 'Question'),
(4, 'rafika', 'rafika@mail.com', 'zzzzzzzzzzz');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_04_181357_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `name`, `phone`, `address`, `email`, `subject`, `message`, `location`, `image`) VALUES
(5, 'afifah', '01234567890', 'Jl. Kaliurang KM.5', 'afifah@mail.com', 'Puppies found dumped in a box!', 'There''re 5 puppies. saat ditemukan kondisinya kurang baik. mereka kehausan dan kelaparan. sekarang ada di rumah saya.', 'Jl. Kaliurang KM.4', '/images/image_1511370739.JPG'),
(6, 'rafika', '01234567771', 'Terban GK 1 No 1', 'rafika@mail.com', 'Found kitten with it''s leg broken', 'halo, kemarin aku nemuin anak kucing yang salah satu kakinya patah. udah kubawa ke dokter hewan, tapi aku ga bisa melihara kucingnya so kalau masih ada kuota di salah satu shelternya tolong dirawat di sana ya. thanks', 'Terban GK 1 No 1', '/images/image_1511371282.jpg'),
(7, 'a', 'a', 'a', 'a', 'a', 'a', 'a', '/images/image_1511416186.png'),
(8, 'wahyu', '123', 'yk', 'yk@mail.com', 'kucing terlanta', 'kakinya patah', 'jakal', '/images/image_1511504042.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('member','admin','admin pusat') COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumb` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `level`, `phonenumb`, `address`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'user', 'user', 'member', '0123', '', 'user@mail.com', '$2y$10$SwmAJNm9Adt34km7wLwHV.P2afNRVi6e.AySAk702YVUiDkmguY7G', 'ce5W8a1fExhAkziAWKJ283micfCHSuDTPWIwKRaGD7iyQQZYcu5Za2L3tCdg', '2017-11-21 06:07:28', '2017-11-21 06:07:28'),
(13, 'adminpusat', 'adminpusat', 'admin pusat', '0123', '', 'pusat@mail.com', '$2y$10$k2h4w8wS8e9CVDFo92Yv8.bbATyEQ9Dgxgg47pkbbeTlcYNUnRgkK', 'ufwsqYm5Bvm5WLG6CY7SvDTyyq6YEYxUoKo7xnWSlBjEiFbBnuAYlZWTuyVR', '2017-11-21 06:08:27', '2017-11-21 06:08:27'),
(14, 'Persephone Shelter', 'AdminRafika', 'admin', '0811111111', '', 'adminrafika@mail.com', '$2y$10$DUjsWt6xce8TbYqAw/Y7KOkHIfZMB/WTGKj/GCLbOqziHavKWXFEW', 'JasGSDsVQNwkQQJ5ZWrEzVAwYo8PDqs1mVk3FewYvskgRGifFZuNBBy7WsyQ', '2017-11-23 02:15:12', '2017-11-23 02:15:12'),
(15, 'Apollo Shelter', 'AdminAfifah', 'admin', '08222222', '', 'adminafifah@mail.com', '$2y$10$Xev3jYUHp2R0yhj3GF/08eclFIjHh89O8LLA5akNCUk83gs0RIvN2', 'QeruE69NV0juScnO7t3TX5YGt37ICSCrs0WBjm3e8PC4h2HHG0LTrL7mT7b5', '2017-11-23 02:15:42', '2017-11-23 02:15:42'),
(16, 'rafika s', 'rafika', 'member', '08123456789', 'Terban GK 1 No 1', 'rafika@mail.com', '$2y$10$b3RjOHRx7YkTegE.L/zp2ejDsO2T07wFDh1Dg4qxjA1Ag.vei7GnC', '2EVqsZONJ5ZFHLUZHkW6gFtNkXyW2bD7gQQr3tXZtxvu5Pzj31kQUkMiVVmc', '2017-11-24 07:20:18', '2017-11-24 07:20:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoptionrequest`
--
ALTER TABLE `adoptionrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adoptionrequest`
--
ALTER TABLE `adoptionrequest`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
