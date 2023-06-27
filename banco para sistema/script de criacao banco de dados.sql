-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.33 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para octavioscom_aplicativo
CREATE DATABASE IF NOT EXISTS `octavioscom_aplicativo` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `octavioscom_aplicativo`;

-- Copiando estrutura para tabela octavioscom_aplicativo.grupo
CREATE TABLE IF NOT EXISTS `grupo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Copiando dados para a tabela octavioscom_aplicativo.grupo: ~1 rows (aproximadamente)
INSERT INTO `grupo` (`id`, `nome`) VALUES
	(1, 'Fiscal Rapido');

-- Copiando estrutura para tabela octavioscom_aplicativo.sistema
CREATE TABLE IF NOT EXISTS `sistema` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sistemas` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

-- Copiando dados para a tabela octavioscom_aplicativo.sistema: ~8 rows (aproximadamente)
INSERT INTO `sistema` (`id`, `sistemas`) VALUES
	(1, 'Gestor-Inoveh'),
	(2, 'Gestor-Pet'),
	(3, 'Gestor-Food'),
	(4, 'Gestor-Agro'),
	(5, 'Gestor-Salao'),
	(6, 'Sia'),
	(7, 'Compilart'),
	(8, 'Visual-Control');

-- Copiando estrutura para tabela octavioscom_aplicativo.tbchat
CREATE TABLE IF NOT EXISTS `tbchat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `mensagem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela octavioscom_aplicativo.tbchat: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela octavioscom_aplicativo.temp_back
CREATE TABLE IF NOT EXISTS `temp_back` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `grupo` varchar(20) NOT NULL,
  `horario` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=182 DEFAULT CHARSET=utf8mb3;

-- Copiando dados para a tabela octavioscom_aplicativo.temp_back: ~2 rows (aproximadamente)
INSERT INTO `temp_back` (`id`, `usuario`, `grupo`, `horario`) VALUES
	(180, 'pedro', 'Fiscal Rapido', '14:27:47'),
	(181, 'pedro', 'Fiscal Rapido', '14:28:04');

-- Copiando estrutura para tabela octavioscom_aplicativo.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario_id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `sistema` varchar(20) NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb3;

-- Copiando dados para a tabela octavioscom_aplicativo.usuarios: ~1 rows (aproximadamente)
INSERT INTO `usuarios` (`usuario_id`, `usuario`, `senha`, `cnpj`, `sistema`) VALUES
	(1, 'admin', '836c3e167723dd22b52de4aa271a550b', '20.949.563/0001-38', 'Administrador');

-- Copiando estrutura para tabela octavioscom_aplicativo.videos
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `grupo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3;

-- Copiando dados para a tabela octavioscom_aplicativo.videos: ~18 rows (aproximadamente)
INSERT INTO `videos` (`id`, `name`, `type`, `code`, `cnpj`, `grupo`) VALUES
	(1, 'Cadastro de Grupos', 'Gestor-Inoveh', 'zhIj-u1M-_g', '', 'Fiscal Rapido'),
	(2, 'Cadastro de Produtos', 'Gestor-Inoveh', 'wAIu4qIWTus', '', 'Fiscal Rapido'),
	(3, 'Cadastro de Participantes', 'Gestor-Inoveh', '5oVlHi4nnNw', '', 'Fiscal Rapido'),
	(4, 'EmissÃ£o de Nota Fiscal', 'Gestor-Inoveh', 'c75ZOtmgemo', '', 'Fiscal Rapido'),
	(5, 'Controle de Caixa', 'Gestor-Inoveh', 'YN9BSz8cJfw', '', 'Fiscal Rapido'),
	(6, 'Frente de Vendas Antigo', 'Gestor-Inoveh', 'DnLQfpH5nSY', '', 'Fiscal Rapido'),
	(7, 'Frente de Vendas Atual', 'Gestor-Inoveh', '7EF2Np0K3YI', '', 'Fiscal Rapido'),
	(8, 'ManutenÃ§ao de Nfces', 'Gestor-Inoveh', '7xh-VZlPs7E', '', 'Fiscal Rapido'),
	(9, 'ImportaÃ§ao de Nota', 'Gestor-Inoveh', '9cPBTDLctjE', '', 'Fiscal Rapido'),
	(10, 'ImportaÃ§ao de Nota por XML', 'Gestor-Inoveh', 'xLrDandPJn0', '', 'Fiscal Rapido'),
	(11, 'GeraÃ§ao de Sintegra', 'Gestor-Inoveh', '2QdcKW2-ICc', '', 'Fiscal Rapido'),
	(12, 'Relatorio de Saidas', 'Gestor-Inoveh', 'OurU28Cm9qI', '', 'Fiscal Rapido'),
	(13, 'Relatorio de Entradas', 'Gestor-Inoveh', 'mVTZfBit2rQ', '', 'Fiscal Rapido'),
	(14, 'Relatorio de Entradas', 'Sia', 'mVTZfBit2rQ', '', 'teste'),
	(15, 'Relatorio de Entradas', 'Gestor-Pet', 'mVTZfBit2rQ', '', 'ola'),
	(19, 'Relatorio de Entradas', 'Gestor-Food', 'mVTZfBit2rQ', '', 'ola'),
	(20, 'Relatorio de Entradas', 'Gestor-Agro', 'mVTZfBit2rQ', '', 'ola'),
	(21, 'Relatorio de Entradas', 'Gestor-Salão', 'mVTZfBit2rQ', '', 'ola');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
