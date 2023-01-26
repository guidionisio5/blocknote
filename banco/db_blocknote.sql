-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.17-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_blocknote
CREATE DATABASE IF NOT EXISTS `db_blocknote` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_blocknote`;

-- Copiando estrutura para tabela db_blocknote.tb_anotacoes
CREATE TABLE IF NOT EXISTS `tb_anotacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anotacao` text NOT NULL,
  `descricao` text NOT NULL,
  `id_categorias` int(11) NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`id`),
  KEY `id_categorias` (`id_categorias`),
  CONSTRAINT `id_categorias` FOREIGN KEY (`id_categorias`) REFERENCES `tb_categorias` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela db_blocknote.tb_anotacoes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_anotacoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_anotacoes` ENABLE KEYS */;

-- Copiando estrutura para tabela db_blocknote.tb_cadastro
CREATE TABLE IF NOT EXISTS `tb_cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela db_blocknote.tb_cadastro: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_cadastro` DISABLE KEYS */;
INSERT INTO `tb_cadastro` (`id`, `nome`, `email`, `senha`, `imagem`, `localizacao`, `telefone`, `desc`, `data_cadastro`, `ativo`) VALUES
	(24, 'gui', 'gui@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, '2023-01-23 19:59:37', b'1'),
	(25, 'lucas', 'lucas@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, '2023-01-23 20:18:00', b'1'),
	(27, 'João Pedro Tódero Viana', 'joao@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '8a409998b659855b0a2dda48ec800b5d.png', 'São João da Boa Vista - SP', '(19) 98427-2807', 'descrição sobre o gui, ele é legal', '2023-01-24 19:18:30', b'1');
/*!40000 ALTER TABLE `tb_cadastro` ENABLE KEYS */;

-- Copiando estrutura para tabela db_blocknote.tb_categorias
CREATE TABLE IF NOT EXISTS `tb_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorias` varchar(50) NOT NULL,
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela db_blocknote.tb_categorias: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_categorias` DISABLE KEYS */;
INSERT INTO `tb_categorias` (`id`, `categorias`, `ativo`, `data_cadastro`) VALUES
	(27, 'estudos de casa', b'1', '2023-01-25 19:09:43'),
	(29, 'Treino', b'1', '2023-01-25 19:10:00'),
	(30, 'minecraft', b'1', '2023-01-25 19:10:43'),
	(31, 'adad', b'1', '2023-01-25 19:12:00'),
	(32, 'adadda', b'1', '2023-01-25 19:12:10');
/*!40000 ALTER TABLE `tb_categorias` ENABLE KEYS */;

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

-- Copiando dados para a tabela db_blocknote.tb_duvidas: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_duvidas` DISABLE KEYS */;
INSERT INTO `tb_duvidas` (`id`, `nome`, `email`, `duvida`, `ativo`, `data_cadastro`) VALUES
	(1, 'ao trem que pula', 'kleber@gmail.com', 'minha duvida é sobre o programamdor deste site pq ele é horrível mds, que cara ruim, t', b'1', '2023-01-19 19:33:45'),
	(2, 'jonas', 'jonas@gmail.com', 'minha duvida é o pq a vida é  uma loucura', b'1', '2023-01-25 19:21:29');
/*!40000 ALTER TABLE `tb_duvidas` ENABLE KEYS */;

-- Copiando estrutura para tabela db_blocknote.tb_lembretes
CREATE TABLE IF NOT EXISTS `tb_lembretes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `data_lembrete` date NOT NULL,
  `tempo` varchar(5) NOT NULL DEFAULT '',
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela db_blocknote.tb_lembretes: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_lembretes` DISABLE KEYS */;
INSERT INTO `tb_lembretes` (`id`, `titulo`, `data_lembrete`, `tempo`, `data_cadastro`, `ativo`) VALUES
	(1, 'Churrasco', '2023-02-09', '18:30', '2023-01-25 20:32:08', b'1'),
	(2, 'Festa', '2023-03-18', '20:00', '2023-01-25 20:32:30', b'1'),
	(3, 'Futebol', '2023-02-02', '17:00', '2023-01-25 20:32:57', b'1'),
	(4, 'Treino', '2023-01-28', '07:00', '2023-01-25 21:04:09', b'1');
/*!40000 ALTER TABLE `tb_lembretes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
