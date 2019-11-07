-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 07:05 AM
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
-- Database: `db_oct`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `created_at`, `updated_at`, `author`) VALUES
(2, 'Totam dolores quaerat hic id enim ipsa ad.', 'Eos quam et animi aut est quos. Rem sit beatae corrupti vero provident eveniet. Nihil voluptatem quis odit expedita.', NULL, NULL, 'Karya Sirait'),
(3, 'Ratione tempore magni ullam aut magnam non quod.', 'Reprehenderit natus error aliquam voluptas dolor. Aut et sint natus eaque. Incidunt at quis quia dolores aut et. Ipsum odio qui ullam quia pariatur fuga.', NULL, NULL, 'Viktor Firmansyah'),
(4, 'Est necessitatibus non eius minima sit laudantium nemo dolorem.', 'Sed quis consequatur iste magni. Vero aut vero illum ipsum et soluta. Voluptate et est similique aut optio autem.', NULL, NULL, 'Asmianto Xanana Ardianto'),
(5, 'Ullam error enim voluptas eum accusamus.', 'Est esse veritatis et dolorum et aspernatur. Odio voluptas in autem corrupti. Accusamus nisi rerum voluptates ut.', NULL, NULL, 'Salimah Yolanda M.Farm'),
(6, 'Id ad expedita consectetur et quisquam.', 'Harum a consequuntur dolorem aut. Est ea perferendis hic aut eveniet rerum. Facere facilis maiores cumque voluptatum omnis.', NULL, NULL, 'Chelsea Puspita'),
(7, 'Excepturi esse quod cumque animi.', 'Eaque dignissimos tenetur enim quaerat quia nihil nisi. Nihil qui qui molestiae tempore modi distinctio. Iure vitae quidem itaque earum odio laudantium delectus doloribus.', NULL, NULL, 'Lanjar Mustika Wacana S.I.Kom'),
(8, 'Et quis quis omnis quis.', 'Id pariatur et quis temporibus. Aut porro aliquid excepturi quos voluptatibus et repellat dicta. Eaque repudiandae voluptatem reprehenderit sunt exercitationem in rem iusto.', NULL, NULL, 'Opung Nababan'),
(9, 'Voluptatum praesentium facere est.', 'Beatae ex itaque voluptatem. Debitis suscipit eos alias explicabo repudiandae nemo repudiandae eligendi. Ut rerum ut incidunt ut nam est. Voluptatibus eum et et vitae.', NULL, NULL, 'Balidin Gading Prabowo S.Farm'),
(10, 'Ut fuga impedit autem earum vel ut unde.', 'Laboriosam molestiae earum et. Est adipisci sit error corporis et nihil. Et libero non velit quidem.', NULL, NULL, 'Ajimat Dimaz Firgantoro S.E.I'),
(11, 'Voluptatum qui eos eum eius mollitia repudiandae.', 'Voluptatem iure veritatis et. Et praesentium est qui id non. Dolorem neque maxime molestias voluptas ipsam ipsa tempora.', NULL, NULL, 'Nasim Gangsar Utama S.Pt'),
(12, 'Est repellat autem eum sapiente.', 'Sint dolor non et est. Ut repellat non voluptate voluptatem iure voluptas. Voluptas aliquam eos voluptatem voluptas quidem sit est.', NULL, NULL, 'Amelia Usamah'),
(13, 'Ipsum ut in mollitia est.', 'Consequatur architecto vel quos velit. Unde quas voluptas ea aut et laborum.', NULL, NULL, 'Dono Saefullah'),
(14, 'Ab eos enim aspernatur alias.', 'Pariatur eum ducimus necessitatibus sit architecto rerum ipsa. Ratione dicta natus et reprehenderit dolores. Alias laborum ipsa asperiores nesciunt in animi officia.', NULL, NULL, 'Bakiono Budiyanto'),
(15, 'Nemo eos quas sint.', 'Blanditiis quis recusandae commodi quam ducimus. Aut repudiandae quae quia autem dicta numquam. Aut consequatur et quaerat.', NULL, NULL, 'Restu Jessica Palastri S.E.'),
(16, 'Sapiente iste et veniam aut.', 'Molestiae animi nobis cumque ratione dolor consequuntur laudantium. Quam eius sint deleniti. Deleniti qui dolorem et explicabo.', NULL, NULL, 'Warji Heru Tamba M.Ak'),
(17, 'Est non voluptatem quibusdam id et.', 'Quam ipsam fugiat ullam laboriosam voluptatem. Dignissimos enim accusamus facilis sunt tempora.', NULL, NULL, 'Raihan Jailani S.T.'),
(18, 'Dolores nisi porro saepe dicta natus sed assumenda.', 'Atque ipsum deleniti et minus. Ducimus consequatur voluptas et dolore doloribus qui soluta. Fuga aliquam in corporis voluptatem. Dolor sit a doloremque dolores aut quos laudantium distinctio.', NULL, NULL, 'Ciaobella Novitasari'),
(19, 'Quaerat perspiciatis porro aut iure.', 'Optio voluptas pariatur reiciendis quia ab quia minima. Cum facilis impedit sapiente impedit omnis. Sit voluptatem ullam vero aut magni labore aut.', NULL, NULL, 'Samiah Hastuti'),
(20, 'Eligendi aut voluptas vel quibusdam omnis eum eos.', 'Molestiae atque laborum at soluta in sit optio. Possimus delectus aut temporibus adipisci rerum in adipisci. Maxime laboriosam rerum autem fugiat ratione. Repellat eaque veniam occaecati ratione.', NULL, NULL, 'Hasan Wasita'),
(21, 'Facere sit rerum et enim qui facere nam.', 'Eveniet non repellat aut dolorum officia. Eos dolores dolorem earum natus exercitationem dolorem.', NULL, NULL, 'Balijan Salahudin'),
(22, 'Qui sunt sint consectetur sint.', 'Corporis explicabo et quibusdam asperiores atque quod. Laborum soluta maxime dolore a commodi et. Aut provident velit fugit. A tenetur cum magnam quis distinctio inventore culpa voluptas.', NULL, NULL, 'Cahyadi Ramadan'),
(23, 'Minima consectetur error alias magnam dolores nobis.', 'Dolorem qui aut enim porro aspernatur aut. Omnis et incidunt non velit et voluptate nihil. Magnam dolorem asperiores architecto totam. Quia est nam voluptatem sunt.', NULL, NULL, 'Tantri Andriani'),
(24, 'Est voluptatem veritatis deserunt ducimus voluptatem ut nam.', 'Perspiciatis dolorem soluta qui quos nesciunt et. Fugiat omnis quam asperiores nulla. Esse vel ipsa vel sint incidunt velit sunt. Aut quos perspiciatis enim nisi.', NULL, NULL, 'Calista Yulianti'),
(25, 'Excepturi dolores ipsa nisi sed incidunt.', 'Ut adipisci ea quod fuga incidunt. Omnis est est dolore assumenda. Dolor voluptatem dolorum cupiditate libero id quia.', NULL, NULL, 'Mala Zulaika'),
(26, 'Et eveniet est autem.', 'Quasi alias minima aut voluptatem. Repellendus nostrum distinctio eum deserunt non non. Harum exercitationem nihil dolores possimus. Quibusdam porro unde non tempore sapiente odio ex laudantium.', NULL, NULL, 'Violet Halimah'),
(27, 'Possimus labore harum qui.', 'Ut omnis eos quibusdam dolore et deserunt occaecati. Voluptatem nisi nulla tenetur doloremque omnis. Officia minima suscipit quaerat quasi consequuntur a. Possimus doloremque est iste et ut beatae.', NULL, NULL, 'Farhunnisa Haryanti'),
(28, 'Cum aperiam dolor ratione distinctio qui consectetur.', 'Aut reprehenderit ad repellendus doloremque natus maiores est. Odit fuga sunt ea fugit ducimus. Libero qui a amet officia. Voluptatem ipsum iure omnis.', NULL, NULL, 'Harja Pradana'),
(29, 'Dolorum consectetur et alias excepturi voluptatem.', 'Aut dolor repellendus odio sint consequatur veritatis et. Non autem qui quis atque et. Blanditiis pariatur deleniti sit exercitationem. Non quo incidunt debitis alias nostrum.', NULL, NULL, 'Vega Wacana'),
(30, 'Quod cum ut culpa eos et.', 'Deleniti omnis repellat est officiis. Temporibus consequatur inventore est pariatur voluptatibus non ducimus. Repellat iste vel ipsa non. Vitae id eos quos dolor dolorum sunt temporibus.', NULL, NULL, 'Bala Nababan'),
(31, 'Ab voluptatem non qui minus.', 'Eaque assumenda aperiam et est iure. Est magnam necessitatibus qui sunt. Hic sunt excepturi deleniti. Sapiente nihil quam est.', NULL, NULL, 'Caraka Prayoga'),
(32, 'Vel placeat rerum accusantium voluptas illo.', 'Odio qui quasi earum ipsum. Qui eum et quas ut omnis. Magnam neque non nam.', NULL, NULL, 'Jamal Budiman'),
(33, 'Labore aut nemo nesciunt eius laborum qui illo.', 'Est veniam maiores et est unde omnis occaecati. Officia enim doloremque unde temporibus ut minima. Voluptas aut voluptas suscipit hic mollitia ipsa.', NULL, NULL, 'Salimah Yolanda S.Gz'),
(34, 'Est quod atque quas quia officiis.', 'Asperiores ipsam beatae eaque. Asperiores nihil et ipsam voluptas aut consequatur ut. Consectetur rem voluptatem aliquid explicabo tempore labore.', NULL, NULL, 'Eva Winarsih'),
(35, 'Est quaerat minus sint.', 'Nihil consectetur eius sit ea necessitatibus a. Ad qui non qui quos in. Aut sed sapiente explicabo velit placeat. Voluptatem sunt nostrum odio et.', NULL, NULL, 'Karen Yance Purwanti S.IP'),
(36, 'Dolores voluptas repellat et incidunt.', 'Iste saepe vel voluptatem nisi adipisci ad assumenda. Reiciendis illum dolor nisi qui ut eos. Voluptatibus qui rem accusantium.', NULL, NULL, 'Melinda Puspita S.Pt'),
(37, 'Ut modi voluptatem repellendus quidem blanditiis sed eius.', 'Autem laudantium aut ex minus. Placeat dolorem ea et dolor voluptatum. Architecto quibusdam vitae molestias repellendus et perferendis qui.', NULL, NULL, 'Paramita Handayani M.TI.'),
(38, 'Voluptates veniam sit sunt nam.', 'Vel quis eum quo nisi fugiat. Repellendus nisi ut quisquam dolorem blanditiis eum possimus. Officiis quia libero et deleniti non est repellendus.', NULL, NULL, 'Gabriella Laksmiwati M.TI.'),
(39, 'Facilis cumque temporibus et suscipit.', 'Et quia consequatur non. Ut nesciunt praesentium pariatur expedita.', NULL, NULL, 'Tari Mandasari'),
(40, 'Sit voluptates enim in laudantium laborum sed eos.', 'Voluptatum sit aliquid quis voluptates et consequatur. Sint enim et nisi iusto consequatur porro modi. Deleniti nulla doloremque sit incidunt enim ut architecto.', NULL, NULL, 'Eluh Cahyono Siregar S.H.'),
(41, 'Dolor iste ex voluptatum ad.', 'Sit enim incidunt et pariatur. Quo et rerum et ut qui odit. Culpa eius mollitia iste non quam quod iusto error. Ad dolor nobis voluptas dolorum incidunt explicabo dolor. Voluptatibus id iste cum.', NULL, NULL, 'Bajragin Hutasoit'),
(42, 'Excepturi inventore rem autem cumque aut voluptas aut.', 'Ullam necessitatibus cumque qui accusantium omnis. Voluptatibus odio velit quibusdam officia quia. Fuga ratione id tempore laborum consequuntur sapiente. Debitis fuga quia quo ut sed omnis dolorem.', NULL, NULL, 'Cornelia Yolanda'),
(43, 'Molestiae iste eum reprehenderit totam delectus nihil similique.', 'Eum consequuntur tempore consectetur ullam odio atque. Numquam omnis minus accusantium quia doloremque qui. Voluptates in at aut. Voluptatem suscipit est dolorem quas a iure.', NULL, NULL, 'Emong Mustofa S.I.Kom'),
(44, 'Hic vitae ut pariatur non et dicta magni.', 'Libero blanditiis labore eaque qui voluptatem in. Doloribus quo quasi quae exercitationem aut. Non soluta aut laudantium suscipit et. Id quasi est aperiam.', NULL, NULL, 'Yono Pradipta'),
(45, 'Non commodi aspernatur voluptatibus nisi necessitatibus tenetur dignissimos eligendi.', 'Aut in similique maiores nemo repellat qui consequatur. Sed totam qui inventore cum. Et non asperiores amet eos qui. Pariatur voluptatem a quia sed. Quaerat nam ut eius consequatur.', NULL, NULL, 'Cornelia Pratiwi S.Gz'),
(46, 'Est voluptas qui consequatur vitae eum porro eligendi.', 'Nihil ut sed provident sit dolorem culpa. Voluptatem alias quos ab rerum et sit dignissimos eos. Et dolorem qui quia fugiat odit quis.', NULL, NULL, 'Sari Purnawati'),
(47, 'In eum ratione aut repellendus.', 'Reprehenderit id velit nobis beatae. Corporis est aspernatur nisi perferendis repudiandae nisi consectetur. Laborum dolorem ipsa ratione voluptas nisi.', NULL, NULL, 'Siti Sudiati M.Ak'),
(48, 'Ipsum consequuntur nemo cum.', 'Est quo illo laboriosam nihil culpa ad alias. Officiis ut impedit tenetur dolores dignissimos. Et harum ad molestiae occaecati quae modi dolorum.', NULL, NULL, 'Adinata Rafid Prasetyo'),
(49, 'Illo tenetur sunt nihil et aliquam veritatis atque.', 'Expedita enim quos aperiam esse. Qui ea est ut ut itaque in et. Velit quae cupiditate nobis qui in. Aliquid quis consequuntur debitis autem.', NULL, NULL, 'Gangsar Estiawan Prayoga'),
(50, 'Delectus minus deleniti corporis sed vitae et.', 'Voluptatibus et ea cum blanditiis. Earum magnam sequi qui qui dolores. Optio voluptatem nesciunt inventore tempora. Maiores tenetur eius nihil voluptatem cumque atque.', NULL, NULL, 'Nardi Suryono'),
(51, 'Perferendis voluptatem iusto in qui ipsum.', 'Consequuntur itaque sed excepturi provident nostrum repellendus et. Aut iusto temporibus ipsum architecto reprehenderit quis eveniet. Possimus consequatur perspiciatis inventore modi.', NULL, NULL, 'Hendra Permadi');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `judul`, `pengarang`, `penerbit`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'Hasil Edit', 'wwwwwwwwwwwwwww', 'aaaaaaaaaaaaaaa', 2010, NULL, '2019-10-29 23:04:59'),
(2, 'Aut vel quia.', 'Latika Oktaviani S.I.Kom', 'Vitae voluptatum.', 1991, NULL, NULL),
(3, 'Et consequatur est qui.', 'Balidin Mangunsong', 'Qui delectus rerum.', 2012, NULL, NULL),
(4, 'Dolor illo quia.', 'Lutfan Darman Putra', 'Sunt saepe.', 1992, NULL, NULL),
(5, 'Possimus magnam nihil.', 'Lutfan Prasasta', 'Reiciendis dolor.', 2004, NULL, NULL),
(6, 'Id laudantium.', 'Puput Indah Laksmiwati', 'Consequatur nisi.', 2013, NULL, NULL),
(7, 'Quo magnam alias et.', 'Rangga Pradipta', 'Qui perspiciatis.', 2015, NULL, NULL),
(8, 'Vel quia.', 'Jane Astuti', 'Aut aut voluptatibus.', 1978, NULL, NULL),
(9, 'Aperiam rerum.', 'Febi Purwanti', 'Quam voluptate.', 1987, NULL, NULL),
(11, 'Buku Baru', 'saya', 'orang', 2019, '2019-10-29 23:04:34', '2019-10-29 23:04:34');

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
(3, '2019_10_22_092814_create_articles_table', 2),
(4, '2019_10_22_094650_add_author_to_articles', 3),
(5, '2019_10_30_033039_create_books_table', 4);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
