/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : revvo_desafio

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2025-07-28 22:19:38
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `cursos`
-- ----------------------------
DROP TABLE IF EXISTS `cursos`;
CREATE TABLE `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `destaque` tinyint(1) DEFAULT 0,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp(),
  `atualizado_em` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cursos
-- ----------------------------
INSERT INTO `cursos` VALUES ('1', 'PELLENTESQUE MALESUADA', 'Curabular blandit tempus porttitor. Nulla Visae elit libero, a pharetra augue.', 'curso1.jpg', '/cursos/1', '1', '2025-07-26 22:20:09', '2025-07-26 22:20:09');
INSERT INTO `cursos` VALUES ('2', 'EGESTAS TORTOR VULPUTATE', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.', 'curso2.jpg', '/cursos/2', '1', '2025-07-26 22:20:09', '2025-07-26 22:20:09');
INSERT INTO `cursos` VALUES ('3', 'INSCREVA-SE', 'Viste elit libero, a pharetra augue.', 'curso3.jpg', '/cursos/3', '1', '2025-07-26 22:20:09', '2025-07-26 23:58:45');

-- ----------------------------
-- Table structure for `paginas`
-- ----------------------------
DROP TABLE IF EXISTS `paginas`;
CREATE TABLE `paginas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `conteudo` longtext NOT NULL,
  `meta_descricao` varchar(255) DEFAULT NULL,
  `status` enum('ativo','inativo') DEFAULT 'ativo',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of paginas
-- ----------------------------
INSERT INTO `paginas` VALUES ('1', 'Téste', 'teste', '', 'uai', 'ativo', '2025-07-28 22:13:40', '2025-07-28 22:13:40');

-- ----------------------------
-- Table structure for `slideshow`
-- ----------------------------
DROP TABLE IF EXISTS `slideshow`;
CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `imagem` varchar(255) NOT NULL,
  `link_botao` varchar(255) DEFAULT NULL,
  `texto_botao` varchar(50) DEFAULT 'VER CURSO',
  `ordem` int(11) DEFAULT 0,
  `ativo` tinyint(1) DEFAULT 1,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp(),
  `atualizado_em` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of slideshow
-- ----------------------------
INSERT INTO `slideshow` VALUES ('1', 'LOREM IPSUM', 'Aenean lacinia bibendum socis natusque persitibus nascetur ridiculus musi lekar ac, vestibulum at et', 'slide1.jpg', 'cursos/destaque', 'VER CURSO', '1', '1', '2025-07-26 22:20:09', '2025-07-26 23:05:39');
INSERT INTO `slideshow` VALUES ('2', 'CURSOS EM DESTAQUE', 'Confira nossos principais cursos disponíveis para você', 'slide2.jpg', 'cursos', 'CONHECER', '2', '1', '2025-07-26 22:20:09', '2025-07-26 23:05:42');
INSERT INTO `slideshow` VALUES ('3', 'PROMOCAO ESPECIAL', 'Aproveite nossas condicoes exclusivas por tempo limitado', 'slide3.jpg', 'promocao', 'APROVEITAR', '3', '1', '2025-07-26 22:20:09', '2025-07-28 11:47:52');

-- ----------------------------
-- Table structure for `usuarios`
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` enum('admin','usuario') DEFAULT 'usuario',
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp(),
  `atualizado_em` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'Administrador', 'admin@revvo.com', 'admin123', 'admin', '2025-07-26 22:20:09', '2025-07-26 23:44:48');
