-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.22-MariaDB - mariadb.org binary distribution
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

-- Copiando estrutura para tabela db_blocknote.tb_cadastro
CREATE TABLE IF NOT EXISTS `tb_cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela db_blocknote.tb_cadastro: ~3 rows (aproximadamente)
INSERT INTO `tb_cadastro` (`id`, `nome`, `email`, `senha`, `data_nascimento`, `telefone`, `imagem`, `data_cadastro`, `ativo`) VALUES
	(20, 'João', 'joao@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, '2022-11-22 20:00:36', b'1'),
	(21, 'Guilherme', 'gui@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, '2022-11-22 20:19:55', b'1'),
	(22, 'Lucas', 'lucas@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, '2022-11-22 20:30:14', b'1');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
db_blocknotedb_petshopdb_petshopdb_petshopdb_academia