-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Agu 2021 pada 04.26
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `databases`
--

CREATE TABLE `databases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `databases`
--

INSERT INTO `databases` (`id`, `kategori_id`, `user_id`, `judul`, `slug`, `excerpt`, `isi`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Expedita fugit et aspernatur et exercitationem qui et.', 'culpa-sunt-sunt-sint', 'Error recusandae aperiam et quis quo. Illum unde aut molestiae nobis incidunt. Veniam in ipsum perferendis enim est consequatur.', 'Sit dolor voluptatem error doloribus. Perferendis debitis debitis cupiditate quibusdam temporibus blanditiis. Id nihil officiis velit consectetur enim unde tempore. Perferendis voluptatem minima inventore consequatur. Sint impedit ut dolores dolorem consequatur. Blanditiis totam tempora delectus numquam. Sint ullam sed autem natus ut velit. Aliquam excepturi ut repellat voluptatum.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(2, 2, 2, 'Dolorum nesciunt dolorum aut rerum.', 'explicabo-assumenda-et-totam-officia-nostrum-quibusdam', 'Iusto temporibus assumenda voluptatem ex nam. Explicabo debitis magni voluptates itaque. Et adipisci sit cum a consequatur nesciunt.', 'Occaecati perferendis delectus omnis error dolorum quis quia officia. Quia illum voluptatem necessitatibus esse. Odio sit eligendi unde impedit omnis sed est. Perferendis unde possimus eligendi repellat quis est at eaque. Recusandae dignissimos vitae rerum sapiente. Quis quo nihil laudantium qui facere pariatur facilis.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(3, 1, 1, 'Doloribus amet odio.', 'animi-qui-id-accusantium-et-consequatur-nobis', 'Fugit non et dolores quasi repudiandae. Deleniti dolore ex incidunt voluptas necessitatibus. Enim qui maiores ut libero exercitationem nihil.', 'Dolores consequatur adipisci sed eum repudiandae impedit aliquam pariatur. Dolorum inventore est neque. Maiores suscipit error ipsam nesciunt ullam inventore id. Nobis vel excepturi qui illo exercitationem.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(4, 2, 3, 'Possimus vero ducimus.', 'officia-quas-repellendus-et-non-illo', 'Explicabo quis iure laboriosam similique. Voluptatem qui enim aspernatur dolorem beatae et. Nihil neque culpa dolore facere aut ut distinctio.', 'Ipsum quasi in doloremque aliquam. Autem aut ea recusandae voluptatum qui odio. Aut magnam et nemo et quo. Alias nisi dolorum est rerum qui. Officia magni delectus dolorem blanditiis. Assumenda dolores harum reiciendis dolore reiciendis. Eos qui sint distinctio quo. Nesciunt mollitia dolores est sint non delectus modi. Officiis rerum deserunt quam et sint. Reiciendis enim molestiae et enim fugiat minus molestiae. Aut totam amet consequuntur eos nemo ipsum omnis. Et autem id voluptatem est. Pariatur quis libero sunt soluta perferendis illo sit.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(5, 2, 1, 'Quae ex qui enim illo.', 'quaerat-cumque-reprehenderit-et-pariatur-fuga-aperiam-corrupti', 'Veritatis dolores et velit fugiat cumque est sed. Alias nihil vel pariatur excepturi. Esse assumenda eveniet iure vitae reiciendis labore. Alias architecto deserunt dicta repudiandae architecto eos.', 'Suscipit omnis officiis aperiam quo dicta. Aliquam necessitatibus explicabo sed eos. Quia numquam occaecati possimus expedita nam. Velit exercitationem et dolores dolore beatae iure. Voluptatem sed hic sed et expedita sequi. Cum maiores mollitia in repellat excepturi inventore. Officiis placeat voluptas expedita ut. Debitis odio nihil libero accusantium quia autem molestias. Rem eos qui blanditiis quas dolores aut at. Vel ut veniam assumenda unde qui deserunt. Accusantium iste ex aut animi ut et sit.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(6, 2, 2, 'Vel numquam.', 'aut-dicta-enim-itaque-cupiditate-quisquam', 'Qui quo totam sequi voluptates facere. Impedit tenetur ut occaecati hic. Eligendi et laboriosam iure aut et. In sunt aliquam velit tempora ea culpa iure.', 'Non harum aut sed qui quia iusto eveniet. Saepe quia in corporis. Voluptas incidunt voluptatibus accusantium error doloremque aut. Deserunt quos ut placeat voluptates totam. Omnis molestiae sit nulla harum alias eius.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(7, 2, 2, 'At quasi similique est quia nam.', 'atque-quidem-repellat-facere-dolore-quas-veniam-et', 'Consequatur hic est omnis doloremque dolor et voluptatem autem. Repudiandae a enim praesentium voluptatem reiciendis voluptatem non. Delectus architecto numquam nobis delectus rem inventore qui.', 'Iusto ipsum provident incidunt ducimus voluptas. Adipisci ut velit hic quas. Sint sunt quos in rem qui in. Rerum ratione non beatae et et tenetur optio. Dignissimos necessitatibus aliquam et. Laborum qui laborum eos saepe. Recusandae provident enim odio maiores illo in et.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(8, 1, 1, 'Et debitis aspernatur alias labore ut quam doloribus itaque quos.', 'sed-non-ut-exercitationem-magni-perferendis-voluptatem', 'Corporis rerum amet sit. Nemo rerum dolor deleniti rerum. Et voluptatem numquam ducimus est praesentium deserunt.', 'Nulla iste sit vitae officiis autem nihil soluta id. Ad sequi asperiores porro unde est quisquam. Nam nam quibusdam accusantium iusto sit. Voluptas qui sunt accusamus ex iste. Quaerat eaque voluptatum facilis est accusamus alias sed illo. Repellendus et aut earum atque. Aspernatur voluptatibus incidunt consequatur reprehenderit numquam et ab ducimus. Omnis provident necessitatibus mollitia sint.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(9, 1, 1, 'Est dolor dolorem ad.', 'ratione-cupiditate-corrupti-non-dicta', 'Eum dolorum unde minus excepturi. Non ipsum velit maxime nesciunt. Ut excepturi quasi dolores dicta. Molestias perspiciatis qui qui dicta.', 'Mollitia aut laudantium corrupti necessitatibus ut. Quia est occaecati incidunt perspiciatis harum velit. Itaque sit voluptatem qui deleniti quia. Cupiditate consequatur vel voluptatem quia eius ipsum. Quibusdam reiciendis enim vel atque. Aut quibusdam ut perferendis tempora cupiditate provident magni incidunt. Ut voluptas sit eius quos laborum omnis. Ea consequatur atque enim sit omnis odit possimus perspiciatis. Possimus qui reiciendis fugiat ut aperiam. Quo repellendus error aspernatur eius minima inventore. Quae aliquam commodi magnam delectus est nam est. Dicta incidunt aperiam minima illum. Consequuntur consequuntur excepturi vitae molestiae. A id corporis dolores repudiandae tenetur placeat.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(10, 2, 1, 'Sit et et nobis placeat ullam nam nesciunt sit.', 'quasi-dolor-eveniet-impedit-architecto-adipisci-libero', 'Beatae minima perferendis consequatur itaque corporis exercitationem facilis. Voluptate maxime molestiae quam quos inventore optio dolore animi. Quaerat et voluptas odio qui veritatis incidunt. Qui architecto eos nihil suscipit sit quidem.', 'Ut libero et dolores molestias ut error facere. Molestiae et harum sit vitae. Quas consequatur voluptas dolor voluptates nihil dignissimos itaque. Et blanditiis suscipit ducimus molestiae doloribus ipsum delectus ea. Praesentium et esse ab.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(11, 2, 3, 'Quo et laboriosam omnis.', 'et-id-voluptatem-similique-ut-illum-ut-quis', 'Tempora amet explicabo nostrum dolorum sed et id nihil. Exercitationem et est sed sunt provident asperiores harum. Tempore dolor quae iusto dignissimos aut voluptate. Nemo nam voluptatem amet reprehenderit quam impedit.', 'Suscipit repudiandae facere tenetur. Officiis ullam aperiam dolore nihil natus consequatur velit. Non voluptates rerum ea numquam sit eum molestias eligendi. Rerum deserunt quia consectetur officiis fugit. Est sed maxime necessitatibus provident eos maxime sequi nisi. Occaecati iste odit delectus voluptas quidem totam libero. Quo qui corrupti qui pariatur. Officia aliquam quos illo reiciendis in corrupti enim. Sit consequatur esse placeat.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(12, 1, 3, 'Dolores animi expedita.', 'veritatis-magni-voluptatum-dolores-vitae', 'Est rerum alias beatae. Quia sapiente vel quos. Molestiae et iste velit atque aut. Voluptatibus est dolore quis suscipit et.', 'Ullam corrupti ut asperiores. Dignissimos nam provident veritatis. Qui et enim sint minima necessitatibus et. Cumque deleniti ducimus id doloremque error saepe dolores. Voluptatem placeat quis itaque non mollitia. In ut quo voluptatem aut tenetur quia est. Qui sit aut quia earum. Voluptas quaerat deleniti provident enim incidunt exercitationem. Vel est molestiae quam ad. Voluptatem placeat iusto deleniti. Veritatis officiis omnis similique dolore molestiae iste sed quaerat. Quo voluptatibus placeat quidem sed.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(13, 2, 3, 'Occaecati consequatur nam vero voluptatem similique aut quod deleniti suscipit.', 'voluptas-corporis-qui-quia', 'Voluptatum eaque quo omnis enim quis expedita. Aut optio unde aliquid porro voluptas. In reiciendis est et provident ipsam voluptas. Dolorum voluptates dignissimos sint odit est nisi quibusdam.', 'Fugiat eum optio omnis voluptatem eius necessitatibus ut. Architecto excepturi omnis ipsum voluptatem voluptas. Ut eum quis velit eum aut. Voluptas illo tempora deleniti illum aut ut. Aliquam quis ratione temporibus illum voluptatum. Veniam odio qui laborum earum. Id voluptatem quod ut autem quidem eveniet voluptatem.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(14, 1, 1, 'Ut quia cumque nulla et.', 'vel-numquam-odit-ducimus-explicabo-reiciendis-voluptatum-saepe-est', 'Nisi adipisci ipsum labore consectetur. Autem magnam eveniet qui voluptatem et aperiam. Tempora iste saepe sit natus. Distinctio eligendi eum quaerat inventore non ducimus quas pariatur.', 'Deserunt excepturi molestiae qui et accusantium. Ut quo et corporis corrupti omnis velit. Est molestias magnam delectus qui saepe itaque natus quia. Omnis nobis et fugiat ratione nihil harum adipisci dolor. Tempore dolorum ullam voluptatem similique consequatur omnis ut labore.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(15, 2, 2, 'Non esse nulla aut consequatur consequatur est.', 'nesciunt-rerum-labore-autem-soluta-consectetur-quas', 'Reiciendis quibusdam labore quia. Qui voluptas enim voluptatem sunt. Sequi et cumque dolorem rem sed tenetur quos. Et ducimus deleniti quidem aspernatur ut alias atque.', 'Laborum sunt praesentium molestiae repellat tenetur molestiae voluptatem dicta. Maiores et aspernatur possimus qui est ab. Illum et voluptatem voluptas beatae corporis amet. Voluptatem distinctio in consequuntur harum repellendus. Laudantium molestiae voluptas dolor et blanditiis sed.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(16, 1, 3, 'Tempore veritatis et ab molestias ex sunt at nostrum.', 'qui-optio-tempora-quis-molestias-aliquam-vero-iure-et', 'Ut temporibus pariatur et rerum sit hic ipsum. Ea modi quam ullam.', 'Voluptatem eligendi asperiores voluptatibus eligendi asperiores perferendis. Itaque est et asperiores. Ex atque corporis odit mollitia vel. Officia molestiae aperiam eaque. Dolores aperiam officiis recusandae nam aut. Ut libero corrupti sed enim. Dolores sed velit quia voluptatem. Qui nihil aut ea eos. Vel animi vitae ipsum aut beatae. Asperiores earum accusantium omnis.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(17, 2, 3, 'Ea quaerat voluptas delectus et ut.', 'dolorum-distinctio-sequi-culpa-est-vel-beatae-repellendus', 'Modi voluptatibus repellat et et qui voluptate odit. Voluptate animi est iure assumenda. Vitae rerum vel ipsam inventore. Ipsum molestiae officiis aut id iste ut ipsa officiis.', 'Ratione molestiae et repudiandae sequi sint dolorum. Voluptatem architecto soluta fuga deserunt explicabo qui quia sit. Sit maiores qui asperiores atque ut quidem ipsam. Est quia recusandae voluptate provident error. Ipsa quo voluptas hic quae earum. Mollitia culpa vero ex sint. Quod distinctio deleniti aliquam enim et aut tempore error. Blanditiis voluptatum molestias et soluta. Error et cum aliquid ut non. Fuga minus magni saepe ducimus eaque ut. Ea quia qui iste sunt sunt adipisci.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(18, 1, 1, 'Aspernatur qui ullam voluptates.', 'libero-quidem-molestiae-eaque-aut-quo', 'Velit illo dolorem qui est doloribus ab. Corporis ab molestias explicabo qui laboriosam sapiente. Totam beatae ducimus omnis officia dicta repudiandae earum cupiditate.', 'Aut a voluptatem et aperiam quidem rerum autem. Sit eveniet doloribus dolores quam sit officia. Quas reprehenderit quibusdam vitae. Ut ipsa eos reiciendis consequuntur ut fugit consectetur. Consectetur enim vitae labore sunt veniam praesentium. Tempore eveniet quia placeat cum fuga. Saepe dignissimos doloremque quae minus molestiae asperiores pariatur. Adipisci sunt perferendis est. Repudiandae nam sint voluptas perspiciatis iusto sint. Quasi error eaque cupiditate ratione nulla. Quo animi eum porro modi dolor aperiam.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(19, 2, 2, 'Sit non.', 'qui-veritatis-aut-omnis-ratione-asperiores-odit', 'Consequatur consectetur dicta nam et sapiente ut. Enim et nihil suscipit consectetur.', 'Tempora in voluptatem velit asperiores. Exercitationem tempore nam distinctio sed aliquid. Beatae harum sint vel velit consequatur rerum. Qui qui facere sunt porro voluptas. Voluptatibus nostrum natus fugiat omnis consectetur. Consequatur nam animi reiciendis non excepturi. Aut libero minus inventore et id laboriosam. In quas atque nulla fugit totam itaque culpa. Omnis non eos doloribus tenetur qui. Ut dignissimos labore sed est vero ad fugit. Harum modi quia minima est.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(20, 2, 3, 'Magnam qui illum.', 'tempora-quo-eveniet-sed-laudantium', 'Ut voluptatem quam minima qui ipsum. Voluptatem aliquid magnam et voluptas est corporis. Rem vitae reiciendis quo aut delectus.', 'Voluptates deserunt rem debitis aut porro alias. Ab iste qui et facilis. Quis unde voluptates voluptatem quidem magni quos commodi recusandae. Rem occaecati occaecati provident est. Facere a necessitatibus dolores molestiae optio. Ea non et quia sunt delectus voluptas sequi.', NULL, '2021-08-14 18:54:56', '2021-08-14 18:54:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Pemrograman', 'Pemrograman', '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(2, 'Sosial', 'Sosial', '2021-08-14 18:54:56', '2021-08-14 18:54:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_02_060151_create_databases_table', 1),
(5, '2021_08_05_021842_create_kategoris_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'radit41', 'Genta Yessi Astuti S.I.Kom', 'efujiati@example.org', '2021-08-14 18:54:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PBlVbWSOhZ', '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(2, 'samsul.rahayu', 'Adikara Jayadi Kuswoyo S.E.', 'dadriansyah@example.com', '2021-08-14 18:54:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tXroIjY3jX', '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(3, 'irfan51', 'Bahuraksa Mansur', 'ssimbolon@example.org', '2021-08-14 18:54:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CeCRcMoORc', '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(4, 'shandayani', 'Putri Tiara Oktaviani', 'leo72@example.com', '2021-08-14 18:54:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0xRRcGMApw', '2021-08-14 18:54:56', '2021-08-14 18:54:56'),
(5, 'haryanti.rangga', 'Adiarja Langgeng Sihombing M.Ak', 'jsusanti@example.com', '2021-08-14 18:54:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FQcb8X0jzp', '2021-08-14 18:54:56', '2021-08-14 18:54:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `databases`
--
ALTER TABLE `databases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `databases_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategoris_nama_unique` (`nama`),
  ADD UNIQUE KEY `kategoris_slug_unique` (`slug`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `databases`
--
ALTER TABLE `databases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
