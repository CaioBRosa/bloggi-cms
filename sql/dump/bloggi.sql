-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Tempo de geração: 25/01/2024 às 20:17
-- Versão do servidor: 8.3.0
-- Versão do PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bloggi`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `category`
--
-- Criação: 25/01/2024 às 20:12
-- Última atualização: 25/01/2024 às 20:14
--

CREATE TABLE `category` (
  `category_id` int NOT NULL,
  `category_tag` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `category`
--

INSERT INTO `category` (`category_id`, `category_tag`) VALUES
(6, 'Programacao Web');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comment`
--
-- Criação: 25/01/2024 às 20:10
--

CREATE TABLE `comment` (
  `comment_id` int NOT NULL,
  `post_id` int DEFAULT NULL,
  `comment_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_content` text COLLATE utf8mb4_unicode_ci,
  `comment_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `levelAccess`
--
-- Criação: 25/01/2024 às 19:47
--

CREATE TABLE `levelAccess` (
  `lvlaccess_id` int NOT NULL,
  `lvlaccess_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `levelAccess`
--

INSERT INTO `levelAccess` (`lvlaccess_id`, `lvlaccess_name`) VALUES
(1, 'admin'),
(2, 'editor');

-- --------------------------------------------------------

--
-- Estrutura para tabela `post`
--
-- Criação: 25/01/2024 às 20:10
--

CREATE TABLE `post` (
  `post_id` int NOT NULL,
  `userinfo_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_content` text COLLATE utf8mb4_unicode_ci,
  `post_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `post`
--

INSERT INTO `post` (`post_id`, `userinfo_id`, `category_id`, `post_title`, `post_content`, `post_date`) VALUES
(1, 2, 6, 'Single Post of Xtra Blog HTML Template', 'This is a description of the video post. You can also have an image instead of the video. You can free download Xtra Blog Template from TemplateMo website. Phasellus maximus quis est sit amet maximus. Vestibulum vel rutrum lorem, ac sodales augue. Aliquam erat volutpat. Duis lectus orci, blandit in arcu est, elementum tincidunt lectus. Praesent vel justo tempor, varius lacus a, pharetra lacus.\r\n\r\nDuis pretium efficitur nunc. Mauris vehicula nibh nisi. Curabitur gravida neque dignissim, aliquet nulla sed, condimentum nulla. Pellentesque id venenatis quam, id cursus velit. Fusce semper tortor ac metus iaculis varius. Praesent aliquam ex vel lectus ornare tristique. Nunc et eros quis enim feugiat tincidunt et vitae dui.', '2024-01-09'),
(2, 2, 6, 'Post of Xtra Blog HTML Template', 'This is a description of the video post. You can also have an image instead of the video. You can free download Xtra Blog Template from TemplateMo website. Phasellus maximus quis est sit amet maximus. Vestibulum vel rutrum lorem, ac sodales augue. Aliquam erat volutpat. Duis lectus orci, blandit in arcu est, elementum tincidunt lectus. Praesent vel justo tempor, varius lacus a, pharetra lacus.\r\n\r\nDuis pretium efficitur nunc. Mauris vehicula nibh nisi. Curabitur gravida neque dignissim, aliquet nulla sed, condimentum nulla. Pellentesque id venenatis quam, id cursus velit. Fusce semper tortor ac metus iaculis varius. Praesent aliquam ex vel lectus ornare tristique. Nunc et eros quis enim feugiat tincidunt et vitae dui.', '2024-01-24');

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--
-- Criação: 25/01/2024 às 19:37
-- Última atualização: 25/01/2024 às 19:40
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_password`) VALUES
(1, 'admin@admin.dev', 'admin'),
(2, 'editor@edit.dev', 'editor');

-- --------------------------------------------------------

--
-- Estrutura para tabela `userInfo`
--
-- Criação: 25/01/2024 às 19:51
--

CREATE TABLE `userInfo` (
  `userinfo_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `userinfo_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userinfo_photoURL` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userinfo_birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `userInfo`
--

INSERT INTO `userInfo` (`userinfo_id`, `user_id`, `userinfo_name`, `userinfo_photoURL`, `userinfo_birth`) VALUES
(1, 1, 'Administrator', NULL, '2024-01-24'),
(2, 2, 'Editor', NULL, '2024-01-25');

-- --------------------------------------------------------

--
-- Estrutura para tabela `userLevelAccess`
--
-- Criação: 25/01/2024 às 19:53
-- Última atualização: 25/01/2024 às 19:53
--

CREATE TABLE `userLevelAccess` (
  `user_id` int NOT NULL,
  `lvlaccess_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `userLevelAccess`
--

INSERT INTO `userLevelAccess` (`user_id`, `lvlaccess_id`) VALUES
(1, 1),
(2, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Índices de tabela `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Índices de tabela `levelAccess`
--
ALTER TABLE `levelAccess`
  ADD PRIMARY KEY (`lvlaccess_id`);

--
-- Índices de tabela `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `userinfo_id` (`userinfo_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Índices de tabela `userInfo`
--
ALTER TABLE `userInfo`
  ADD PRIMARY KEY (`userinfo_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Índices de tabela `userLevelAccess`
--
ALTER TABLE `userLevelAccess`
  ADD PRIMARY KEY (`user_id`,`lvlaccess_id`),
  ADD KEY `lvlaccess_id` (`lvlaccess_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levelAccess`
--
ALTER TABLE `levelAccess`
  MODIFY `lvlaccess_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `userInfo`
--
ALTER TABLE `userInfo`
  MODIFY `userinfo_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`);

--
-- Restrições para tabelas `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`userinfo_id`) REFERENCES `userInfo` (`userinfo_id`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Restrições para tabelas `userInfo`
--
ALTER TABLE `userInfo`
  ADD CONSTRAINT `userInfo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Restrições para tabelas `userLevelAccess`
--
ALTER TABLE `userLevelAccess`
  ADD CONSTRAINT `userLevelAccess_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `userLevelAccess_ibfk_2` FOREIGN KEY (`lvlaccess_id`) REFERENCES `levelAccess` (`lvlaccess_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
