-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_blocknote
CREATE DATABASE IF NOT EXISTS `db_blocknote` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_blocknote`;

-- Copiando estrutura para tabela db_blocknote.tb_anotacoes
CREATE TABLE IF NOT EXISTS `tb_anotacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `id_categorias` int(11) NOT NULL,
  `anotacao` text NOT NULL,
  `descricao` text DEFAULT NULL,
  `login_email` varchar(50) NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`id`),
  KEY `id_categorias` (`id_categorias`),
  KEY `login_email` (`login_email`),
  CONSTRAINT `id_categorias` FOREIGN KEY (`id_categorias`) REFERENCES `tb_categorias` (`id`),
  CONSTRAINT `login_email_anotacoes` FOREIGN KEY (`login_email`) REFERENCES `tb_cadastro` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela db_blocknote.tb_anotacoes: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_blocknote.tb_cadastro
CREATE TABLE IF NOT EXISTS `tb_cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `localizacao` varchar(50) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `desc` varchar(250) DEFAULT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela db_blocknote.tb_cadastro: ~3 rows (aproximadamente)
INSERT INTO `tb_cadastro` (`id`, `nome`, `email`, `senha`, `imagem`, `localizacao`, `telefone`, `desc`, `data_cadastro`, `ativo`) VALUES
	(24, 'Guilherme Botacini Dionisio', 'guidionisio5@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', '0034abb8194c6da85ebb94447c937737.png', 'São João da Boa Vista - SP', '(19) 99276-4511', 'meu deus chega!!!!!!!!!', '2023-01-23 19:59:37', b'1'),
	(25, 'lucas', 'lucas@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, '2023-01-23 20:18:00', b'1'),
	(27, 'João Pedro Tódero Viana', 'joao@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '8a409998b659855b0a2dda48ec800b5d.png', 'São João da Boa Vista - SP', '(19) 98427-2807', 'descrição sobre o gui, ele é legal', '2023-01-24 19:18:30', b'1');

-- Copiando estrutura para tabela db_blocknote.tb_categorias
CREATE TABLE IF NOT EXISTS `tb_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorias` varchar(50) NOT NULL,
  `login_email` varchar(50) NOT NULL,
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `login_email_categorias` (`login_email`),
  CONSTRAINT `login_email_categorias` FOREIGN KEY (`login_email`) REFERENCES `tb_cadastro` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela db_blocknote.tb_categorias: ~0 rows (aproximadamente)
INSERT INTO `tb_categorias` (`id`, `categorias`, `login_email`, `ativo`, `data_cadastro`) VALUES
	(36, 'estudo de casa', 'guidionisio5@gmail.com', b'1', '2023-02-04 23:56:24'),
	(40, 'jnbjnbjgrn', 'guidionisio5@gmail.com', b'1', '2023-02-05 00:28:35'),
	(41, 'gruhuehfherfh', 'guidionisio5@gmail.com', b'1', '2023-02-05 00:28:40'),
	(42, 'estudo ', 'guidionisio5@gmail.com', b'1', '2023-02-05 00:28:48'),
	(43, 'num sei', 'guidionisio5@gmail.com', b'1', '2023-02-05 00:28:56'),
	(44, 'sei la', 'guidionisio5@gmail.com', b'1', '2023-02-05 00:29:03');

-- Copiando estrutura para tabela db_blocknote.tb_duvidas
CREATE TABLE IF NOT EXISTS `tb_duvidas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `duvida` varchar(200) NOT NULL,
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela db_blocknote.tb_duvidas: ~2 rows (aproximadamente)
INSERT INTO `tb_duvidas` (`id`, `nome`, `email`, `duvida`, `ativo`, `data_cadastro`) VALUES
	(1, 'ao trem que pula', 'kleber@gmail.com', 'minha duvida é sobre o programamdor deste site pq ele é horrível mds, que cara ruim, t', b'1', '2023-01-19 19:33:45'),
	(2, 'jonas', 'jonas@gmail.com', 'minha duvida é o pq a vida é  uma loucura', b'1', '2023-01-25 19:21:29');

-- Copiando estrutura para tabela db_blocknote.tb_lembretes
CREATE TABLE IF NOT EXISTS `tb_lembretes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `data_lembrete` varchar(10) NOT NULL,
  `tempo` varchar(5) NOT NULL,
  `login_email` varchar(50) NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`id`),
  KEY `login_email_lembretes` (`login_email`),
  CONSTRAINT `login_email_lembretes` FOREIGN KEY (`login_email`) REFERENCES `tb_cadastro` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela db_blocknote.tb_lembretes: ~0 rows (aproximadamente)
INSERT INTO `tb_lembretes` (`id`, `titulo`, `data_lembrete`, `tempo`, `login_email`, `data_cadastro`, `ativo`) VALUES
	(10, 'gggggggggggggggg', '12/11/2023', '12:55', 'guidionisio5@gmail.com', '2023-02-05 00:26:08', b'1');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
