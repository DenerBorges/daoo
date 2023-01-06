-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jan-2023 às 16:01
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aula_04_intro_laravel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
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
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_16_132835_create_produtos_table', 1),
(6, '2022_11_21_221658_create_usuarios_table', 1),
(7, '2022_11_21_221811_create_projetos_table', 1),
(8, '2022_11_21_221834_create_recompensas_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtd_estoque` int(11) NOT NULL,
  `preco` double(8,2) NOT NULL,
  `importado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `qtd_estoque`, `preco`, `importado`, `created_at`, `updated_at`) VALUES
(111, 'Samsumg A5 - 2017', 'Samsumg A5 2017 2GB Exynos 8Core', 2, 4500.00, 0, NULL, '2022-12-18 03:08:50'),
(112, 'Notebook DELL Inspiron 15', 'I5 7600HQ 8GBMen GTX1030m SSD 1TB', 300, 8500.00, 1, NULL, '2022-12-03 23:16:25'),
(113, 'Notebook Samsumg Gamer', 'I7 10800HQ 16GB MEM NVIDIA-RTX2060m SSD 2TB', 150, 17500.00, 0, NULL, NULL),
(114, 'SSD 4TB', 'SSD SAMSUMG EVO 860 4TB', 200, 5750.00, 0, NULL, NULL),
(115, 'SSD 2TB', 'SSD SAMSUMG EVO 860 2TB', 150, 3750.00, 0, NULL, NULL),
(121, 'SSD 4TB', 'SSD WESTERN DIGITAL', 50, 4150.00, 0, NULL, NULL),
(122, 'GAINWARD PHOENIX RTX3080ti', 'GPU NVIDIA 12GB MEM GDDR6 256BITS GAINWARD PHOENIX ', 30, 14150.00, 0, NULL, NULL),
(123, 'GAINWARD PHOENIX RTX3070', 'GPU NVIDIA 8GB MEM GDDR6 256BITS GAINWARD PHOENIX ', 60, 7399.00, 0, NULL, NULL),
(124, 'ECHO DOT ALEXA', 'AMAZON ALEX ECHO DOT 3 GEN SMART SPEAKER', 1000, 200.00, 0, NULL, NULL),
(125, 'Monitor Asus BK 35\'\'', 'LED 35\" 3440x1440 Preto 1 HDMI(v1.4)', 500, 9990.00, 1, NULL, '2022-12-04 00:11:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

CREATE TABLE `projetos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nome` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_de_valor` double(8,2) NOT NULL,
  `dias_para_atingir` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`id`, `user_id`, `nome`, `meta_de_valor`, `dias_para_atingir`, `created_at`, `updated_at`) VALUES
(1, 2, 'Quod non aut.', 4743.18, 52, '2023-01-04 23:02:17', '2023-01-04 23:02:17'),
(2, 2, 'Delectus in ex.', 2999.16, 945, '2023-01-04 23:02:17', '2023-01-04 23:02:17'),
(3, 3, 'Quia sunt id.', 1804.97, 367, '2023-01-04 23:02:18', '2023-01-04 23:02:18'),
(4, 3, 'Consequatur ad.', 1288.04, 318, '2023-01-04 23:02:19', '2023-01-04 23:02:19'),
(5, 4, 'Quidem optio.', 7520.91, 92, '2023-01-04 23:02:19', '2023-01-04 23:02:19'),
(6, 4, 'Quam corporis.', 8214.49, 985, '2023-01-04 23:02:20', '2023-01-04 23:02:20'),
(7, 5, 'Quia officiis.', 1817.95, 45, '2023-01-04 23:02:20', '2023-01-04 23:02:20'),
(8, 5, 'Aut quidem quia.', 7171.92, 751, '2023-01-04 23:02:21', '2023-01-04 23:02:21'),
(9, 6, 'Praesentium rerum.', 9622.77, 85, '2023-01-04 23:02:23', '2023-01-04 23:02:23'),
(10, 6, 'Quia est suscipit.', 8557.39, 55, '2023-01-04 23:02:24', '2023-01-04 23:02:24'),
(11, 1, 'Et commodi id aut.', 712.44, 130, '2023-01-04 23:02:25', '2023-01-04 23:02:25'),
(12, 3, 'Vitae ipsa.', 6373.26, 222, '2023-01-04 23:02:28', '2023-01-04 23:02:28'),
(13, 1, 'Placeat sint ut.', 4425.90, 468, '2023-01-04 23:02:33', '2023-01-04 23:02:33'),
(14, 3, 'Est commodi quia.', 7271.85, 678, '2023-01-04 23:02:40', '2023-01-04 23:02:40'),
(15, 2, 'Cupiditate.', 4534.17, 803, '2023-01-04 23:02:44', '2023-01-04 23:02:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `recompensas`
--

CREATE TABLE `recompensas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `projeto_id` bigint(20) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `recompensas`
--

INSERT INTO `recompensas` (`id`, `projeto_id`, `titulo`, `descricao`, `valor`, `created_at`, `updated_at`) VALUES
(1, 11, 'Possimus.', 'Et magnam nihil dolor quas provident voluptates voluptatum exercitationem sit aut occaecati qui enim culpa maiores.', 7106.90, '2023-01-04 23:02:25', '2023-01-04 23:02:25'),
(2, 11, 'Illum.', 'Cum aut deserunt quaerat ullam officiis quia aut ut eum maxime.', 5745.17, '2023-01-04 23:02:26', '2023-01-04 23:02:26'),
(3, 11, 'Et et.', 'Repellat rerum et ullam porro nisi nihil dolore asperiores necessitatibus similique et in velit assumenda.', 2885.52, '2023-01-04 23:02:26', '2023-01-04 23:02:26'),
(4, 11, 'Minima.', 'Cumque tempora occaecati qui qui possimus et molestiae aut reiciendis error nihil maxime doloremque ipsam dolores.', 6003.58, '2023-01-04 23:02:26', '2023-01-04 23:02:26'),
(5, 11, 'Provident.', 'Est aliquid et et praesentium modi aut aperiam nihil nam itaque voluptatem perferendis eius voluptatem exercitationem est et excepturi qui.', 356.18, '2023-01-04 23:02:26', '2023-01-04 23:02:26'),
(6, 11, 'Et optio.', 'Ut ullam minus soluta molestiae et ut itaque at sit quod in iste dicta labore.', 6189.30, '2023-01-04 23:02:27', '2023-01-04 23:02:27'),
(7, 11, 'Enim et.', 'Amet ut totam voluptatibus non et quam magni est consequuntur dolor odit consequatur itaque itaque ipsa doloremque unde id qui et et.', 2970.84, '2023-01-04 23:02:28', '2023-01-04 23:02:28'),
(8, 12, 'Ipsum.', 'Et esse quas optio eius eum aut velit est aliquam laboriosam qui.', 5083.36, '2023-01-04 23:02:29', '2023-01-04 23:02:29'),
(9, 12, 'Quae.', 'Sunt tempore ducimus quaerat repellendus et porro accusamus at magnam deserunt voluptatem ut excepturi ipsum repellendus quia sunt est iure.', 491.98, '2023-01-04 23:02:30', '2023-01-04 23:02:30'),
(10, 12, 'Nemo.', 'Dolorum libero aut harum quia aut corporis debitis repudiandae ut voluptatem non ut totam dolorem nam.', 5093.42, '2023-01-04 23:02:31', '2023-01-04 23:02:31'),
(11, 12, 'Et id.', 'Eum et quam tempora ut sit eum porro vitae commodi eaque sit est amet tempore corrupti id quisquam.', 2214.59, '2023-01-04 23:02:32', '2023-01-04 23:02:32'),
(12, 12, 'Occaecati.', 'Debitis doloribus repudiandae modi ex maiores deserunt soluta laudantium voluptas dolore earum.', 1933.16, '2023-01-04 23:02:32', '2023-01-04 23:02:32'),
(13, 12, 'Dolorem.', 'Similique sunt et eveniet ratione quo odio et laboriosam dolore earum asperiores velit provident perferendis qui commodi maxime nobis ducimus.', 4870.70, '2023-01-04 23:02:32', '2023-01-04 23:02:32'),
(14, 12, 'Quos quae.', 'Recusandae voluptatem ut atque voluptas sapiente est iure nemo aut excepturi aut facilis nemo voluptas consequatur labore ut doloribus enim.', 324.15, '2023-01-04 23:02:33', '2023-01-04 23:02:33'),
(15, 13, 'Et sit.', 'Ipsum odio magni eius ut sed eos ad minus molestiae voluptas aliquid enim debitis et et vel alias ut.', 7285.25, '2023-01-04 23:02:34', '2023-01-04 23:02:34'),
(16, 13, 'Omnis.', 'Corporis fugit maxime placeat officia atque ut ut eveniet assumenda autem quibusdam iusto vel ab dolor.', 2730.67, '2023-01-04 23:02:34', '2023-01-04 23:02:34'),
(17, 13, 'Ipsum qui.', 'Quis quas aspernatur adipisci in et tempora reiciendis eveniet fugiat est sint ducimus suscipit consequatur voluptatem eum omnis.', 513.56, '2023-01-04 23:02:35', '2023-01-04 23:02:35'),
(18, 13, 'Odio in.', 'Voluptatem necessitatibus facere blanditiis et a atque illo error illo eum.', 4647.17, '2023-01-04 23:02:35', '2023-01-04 23:02:35'),
(19, 13, 'Qui rem.', 'Qui ducimus in dignissimos blanditiis pariatur soluta dolores modi impedit ut tempora deleniti sunt sequi quae impedit amet.', 3534.29, '2023-01-04 23:02:35', '2023-01-04 23:02:35'),
(20, 13, 'Molestiae.', 'Vero ipsa quis magni ut culpa nihil qui dolores cum aut dignissimos fugiat hic vel nam dolore autem.', 886.56, '2023-01-04 23:02:36', '2023-01-04 23:02:36'),
(21, 13, 'Officiis.', 'Ullam architecto provident ipsum ipsam officia et ea iste beatae iure voluptatum.', 7185.08, '2023-01-04 23:02:39', '2023-01-04 23:02:39'),
(22, 14, 'Voluptate.', 'Cum quas eos tempore expedita nihil culpa impedit accusamus dicta vitae iusto blanditiis quidem incidunt sequi porro.', 6878.21, '2023-01-04 23:02:41', '2023-01-04 23:02:41'),
(23, 14, 'Similique.', 'Asperiores sunt veritatis quisquam praesentium cum delectus id dignissimos molestias eaque suscipit cum sapiente sed aut at dolores est cum repellendus perspiciatis.', 2286.98, '2023-01-04 23:02:41', '2023-01-04 23:02:41'),
(24, 14, 'Dolorem.', 'Explicabo vero tenetur cupiditate omnis quia nobis dolorem animi eos omnis rerum doloremque suscipit incidunt voluptatem consectetur voluptas ducimus modi.', 2152.57, '2023-01-04 23:02:42', '2023-01-04 23:02:42'),
(25, 14, 'Delectus.', 'Magnam nostrum nisi quisquam accusantium culpa facilis enim occaecati hic consequatur occaecati eligendi.', 8003.69, '2023-01-04 23:02:42', '2023-01-04 23:02:42'),
(26, 14, 'Odit quia.', 'Est dolores consequatur repellendus nostrum repellendus et perferendis ullam commodi.', 9908.95, '2023-01-04 23:02:42', '2023-01-04 23:02:42'),
(27, 14, 'Eveniet.', 'Quod voluptatem totam eum voluptas magnam sunt illo eveniet est dicta eius quo aut saepe porro illo.', 3046.37, '2023-01-04 23:02:43', '2023-01-04 23:02:43'),
(28, 14, 'Maiores.', 'Recusandae et temporibus provident distinctio quia officia et laborum rerum praesentium assumenda tempore.', 7616.40, '2023-01-04 23:02:43', '2023-01-04 23:02:43'),
(29, 15, 'Quis.', 'Aliquid autem ut quaerat aut illum eum officiis et aut vero assumenda.', 5970.14, '2023-01-04 23:02:44', '2023-01-04 23:02:44'),
(30, 15, 'Placeat.', 'Quia aut numquam rerum consequatur eligendi id modi sunt sint illo et quas.', 7009.84, '2023-01-04 23:02:45', '2023-01-04 23:02:45'),
(31, 15, 'Maiores.', 'Sit inventore ducimus ex et ut dolore asperiores vel impedit molestias cupiditate.', 7088.19, '2023-01-04 23:02:45', '2023-01-04 23:02:45'),
(32, 15, 'Quibusdam.', 'Quia sed dolores molestias reiciendis aut sunt sed animi praesentium a et amet.', 8547.21, '2023-01-04 23:02:45', '2023-01-04 23:02:45'),
(33, 15, 'Eum.', 'Corporis est et non eum voluptatem quibusdam enim ab assumenda corrupti.', 624.01, '2023-01-04 23:02:46', '2023-01-04 23:02:46'),
(34, 15, 'Sed illum.', 'Nam quia non ducimus sint nihil labore explicabo quos iure quos quasi nihil consequuntur qui vero perferendis rerum.', 7036.74, '2023-01-04 23:02:46', '2023-01-04 23:02:46'),
(35, 15, 'Eum quam.', 'Aut autem blanditiis sint voluptatem voluptatibus soluta quos alias distinctio facilis aut.', 9772.49, '2023-01-04 23:02:46', '2023-01-04 23:02:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idade` int(11) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `email_verified_at`, `password`, `idade`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@example.com', '2023-01-04 23:02:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 34, 1, 'eiIbuq3Wef', '2023-01-04 23:02:14', '2023-01-04 23:02:14'),
(2, 'Miss Dandre Predovic V', 'zskiles@example.net', '2023-01-04 23:02:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 67, 0, 'boVy3Jb3Jb', '2023-01-04 23:02:16', '2023-01-04 23:02:16'),
(3, 'Ms. Arvilla Becker II', 'doyle81@example.org', '2023-01-04 23:02:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 41, 0, 'VsOfBz8z6T', '2023-01-04 23:02:18', '2023-01-04 23:02:18'),
(4, 'Maiya Yost V', 'schmidt.aurore@example.net', '2023-01-04 23:02:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 69, 0, 'QXYIfgzlsI', '2023-01-04 23:02:19', '2023-01-04 23:02:19'),
(5, 'Alphonso Hackett', 'muller.amelie@example.com', '2023-01-04 23:02:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 61, 0, 'ZPxRSGMIFv', '2023-01-04 23:02:20', '2023-01-04 23:02:20'),
(6, 'Estel Fritsch I', 'lavinia98@example.net', '2023-01-04 23:02:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 19, 0, 'RGgLxhLdfU', '2023-01-04 23:02:22', '2023-01-04 23:02:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idade` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projetos_user_id_foreign` (`user_id`);

--
-- Índices para tabela `recompensas`
--
ALTER TABLE `recompensas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recompensas_projeto_id_foreign` (`projeto_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT de tabela `projetos`
--
ALTER TABLE `projetos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `recompensas`
--
ALTER TABLE `recompensas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `projetos`
--
ALTER TABLE `projetos`
  ADD CONSTRAINT `projetos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `recompensas`
--
ALTER TABLE `recompensas`
  ADD CONSTRAINT `recompensas_projeto_id_foreign` FOREIGN KEY (`projeto_id`) REFERENCES `projetos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
