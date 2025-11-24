-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24/11/2025 às 15:36
-- Versão do servidor: 11.5.2-MariaDB
-- Versão do PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cloud110_adoradorartista`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog_like`
--

DROP TABLE IF EXISTS `blog_like`;
CREATE TABLE IF NOT EXISTS `blog_like` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_posts` int(10) UNSIGNED NOT NULL,
  `ip` varchar(45) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `idx_blog_like_id_posts` (`id_posts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog_posts`
--

DROP TABLE IF EXISTS `blog_posts`;
CREATE TABLE IF NOT EXISTS `blog_posts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `mensage` text NOT NULL,
  `url_image` varchar(255) DEFAULT NULL,
  `tag` varchar(100) DEFAULT NULL,
  `user_create` int(10) UNSIGNED DEFAULT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `idx_blog_posts_user_create` (`user_create`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog_viewer`
--

DROP TABLE IF EXISTS `blog_viewer`;
CREATE TABLE IF NOT EXISTS `blog_viewer` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_posts` int(10) UNSIGNED NOT NULL,
  `ip` varchar(45) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `idx_blog_viewer_id_posts` (`id_posts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profession` varchar(150) DEFAULT NULL,
  `img_profile` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 0 COMMENT '0 = desativado, 1 = ativado',
  `user_create` int(10) UNSIGNED DEFAULT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_user_username` (`username`),
  KEY `fk_user_user_create` (`user_create`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `profession`, `img_profile`, `active`, `user_create`, `date_create`) VALUES
(2, 'Felipe Lara', 'felipesilveiralara@gmail.com', '$2y$12$jo0CjElUDBOuu5tF/fa6tuJPU2Qc4G7e.Gi5seq.jd.2HZPPa2W7q', NULL, NULL, 0, NULL, '2025-11-24 15:04:54'),
(3, 'Adorador Artista', 'adoradorartista@gmail.com', '$2y$12$zEAhkOGFQdpmd.PUdQa6iuDOOV10KWwEx1ih4e9/pPKnImYKqoJcW', NULL, NULL, 0, NULL, '2025-11-24 15:26:51');

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `blog_like`
--
ALTER TABLE `blog_like`
  ADD CONSTRAINT `fk_blog_like_posts` FOREIGN KEY (`id_posts`) REFERENCES `blog_posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `fk_blog_posts_user` FOREIGN KEY (`user_create`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Restrições para tabelas `blog_viewer`
--
ALTER TABLE `blog_viewer`
  ADD CONSTRAINT `fk_blog_viewer_posts` FOREIGN KEY (`id_posts`) REFERENCES `blog_posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_user_create` FOREIGN KEY (`user_create`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
