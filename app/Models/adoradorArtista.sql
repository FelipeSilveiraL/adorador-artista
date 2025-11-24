-- Ajuste o schema/database se quiser
-- USE adoradorArtista;

CREATE DATABASE adoradorArtista
    DEFAULT CHARACTER SET utf8mb4
    DEFAULT COLLATE utf8mb4_unicode_ci;


-- 1) Tabela de usuários
CREATE TABLE IF NOT EXISTS `user` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `username`     VARCHAR(100) NOT NULL,
    `password`     VARCHAR(255) NOT NULL,
    `profession`   VARCHAR(150) NULL,
    `img_profile`  VARCHAR(255) NULL,
    `user_create`  INT UNSIGNED NULL,      -- quem criou este usuário (auto-relacionamento opcional)
    `date_create`  DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (`id`),
    UNIQUE KEY `uk_user_username` (`username`),

    CONSTRAINT `fk_user_user_create`
        FOREIGN KEY (`user_create`)
        REFERENCES `user`(`id`)
        ON DELETE SET NULL
        ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `user` ADD `name` VARCHAR(50) NOT NULL AFTER `id`;

------------------------------------------------

-- 2) Tabela de posts do blog
CREATE TABLE IF NOT EXISTS `blog_posts` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `title`      VARCHAR(255) NOT NULL,
    `mensage`    TEXT NOT NULL,
    `url_image`  VARCHAR(255) NULL,
    `tag`        VARCHAR(100) NULL,
    `user_create` INT UNSIGNED NULL,      -- FK para user.id
    `date_create` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (`id`),
    KEY `idx_blog_posts_user_create` (`user_create`),

    CONSTRAINT `fk_blog_posts_user`
        FOREIGN KEY (`user_create`)
        REFERENCES `user`(`id`)
        ON DELETE SET NULL
        ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

------------------------------------------------

-- 3) Tabela de visualizações (views) do blog
CREATE TABLE IF NOT EXISTS `blog_viewer` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `id_posts`   INT UNSIGNED NOT NULL,   -- FK para blog_posts.id
    `ip`         VARCHAR(45) NOT NULL,    -- suporta IPv4 e IPv6
    `date_create` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (`id`),
    KEY `idx_blog_viewer_id_posts` (`id_posts`),

    CONSTRAINT `fk_blog_viewer_posts`
        FOREIGN KEY (`id_posts`)
        REFERENCES `blog_posts`(`id`)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

------------------------------------------------

-- 4) Tabela de likes do blog
CREATE TABLE IF NOT EXISTS `blog_like` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `id_posts`   INT UNSIGNED NOT NULL,   -- FK para blog_posts.id
    `ip`         VARCHAR(45) NOT NULL,
    `date_create` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (`id`),
    KEY `idx_blog_like_id_posts` (`id_posts`),

    CONSTRAINT `fk_blog_like_posts`
        FOREIGN KEY (`id_posts`)
        REFERENCES `blog_posts`(`id`)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
