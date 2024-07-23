-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/07/2024 às 05:10
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laravel`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_07_15_025322_create_users_table', 1),
(2, '2024_07_15_030208_create_sessions_table', 2),
(3, '2024_07_16_153243_create_places_table', 3),
(4, '2024_07_19_225003_create_ratings_table', 4),
(5, '2024_07_22_044700_add_description_to_places_table', 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` enum('Hotel','Restaurante','Monumento') NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `places`
--

INSERT INTO `places` (`id`, `user_id`, `title`, `type`, `image_path`, `created_at`, `updated_at`, `description`) VALUES
(3, 2, 'Hotel SQN OK', 'Monumento', '1721593466.png', '2024-07-17 00:42:23', '2024-07-22 00:24:26', 'Lorem ipsum ajsfhiashfacnbiasbcscibiasb scabsbciabciab abcsabiasbc'),
(4, 2, 'Restaurante OK', 'Restaurante', '1721167032.jpg', '2024-07-17 01:57:12', '2024-07-22 09:00:30', 'dfhhhhhhhhhhhhhh'),
(5, 3, 'Monumento Sei la do que', 'Monumento', '1721506487.jpg', '2024-07-21 00:14:47', '2024-07-21 00:14:47', 'Lorem ipsum ajsfhiashfacnbiasbcscibiasb scabsbciabciab abcsabiasbc'),
(6, 3, 'Monumento', 'Monumento', '1721506521.png', '2024-07-21 00:15:21', '2024-07-21 00:15:21', 'Lorem ipsum ajsfhiashfacnbiasbcscibiasb scabsbciabciab abcsabiasbc'),
(7, 3, 'Restaurante Sei la', 'Restaurante', '1721506596.png', '2024-07-21 00:16:36', '2024-07-21 00:16:36', 'Lorem ipsum ajsfhiashfacnbiasbcscibiasb scabsbciabciab abcsabiasbc');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `liked` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `content`, `liked`, `created_at`, `updated_at`) VALUES
(1, 2, 'O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas.', 1, '2024-07-20 18:22:38', '2024-07-22 08:12:34'),
(2, 2, 'O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas.', 1, '2024-07-20 19:06:26', '2024-07-22 10:10:12'),
(3, 2, 'O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas.', 1, '2024-07-20 19:07:57', '2024-07-22 08:12:39'),
(4, 3, 'O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas.', 1, '2024-07-20 19:08:19', '2024-07-21 00:13:21'),
(5, 3, 'O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas.', 1, '2024-07-20 19:08:25', '2024-07-20 23:50:27'),
(6, 3, 'O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas. O software poderia ser assim e assim e assado. Por causa disso e daquilo e desse outro motivo e sei la das quantas.', 1, '2024-07-20 19:08:34', '2024-07-21 06:18:25');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ZgjxrNs9Sy8eJEoyAQc2NMZWtoSilXe9NhQ9CsvX', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWm9BUElmMUtyYjRqMVFqaDVQSThvSnVpdDJhRW1QMUQ1OTVWUm5XRyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sdWdhcmVzX2NhZGFzdHJhZG9zIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1721695975);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `profile_image`, `created_at`, `updated_at`) VALUES
(1, 'carlos', '$2y$12$KHpENIh2Izi5abe3ecpT7.qyQmFFytVq/3ScZqgGIvFLAm7v/sXG.', '1721016788.png', '2024-07-15 08:13:08', '2024-07-15 08:13:08'),
(2, 'carlos.augusto', '$2y$12$xFYk5X0es0NSAhGCA0tBqevyDPYaYBLKcwaKotqAukSSMY7Sw9ica', '1721068497.jpg', '2024-07-15 22:34:57', '2024-07-22 21:34:08'),
(3, 'fulaninho', '$2y$12$QhuxIUJRZdl.KtJ5fn.WGe9LdeBkxAod.XcZznhJqx4uKx53h0FC6', '1721224097.png', '2024-07-17 17:48:17', '2024-07-17 17:48:17');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`),
  ADD KEY `places_user_id_foreign` (`user_id`);

--
-- Índices de tabela `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_user_id_foreign` (`user_id`);

--
-- Índices de tabela `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `places_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
