/*
Navicat MySQL Data Transfer

Source Server         : Hypho - VM
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : hypochondriac

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2014-11-27 11:43:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for clinica
-- ----------------------------
DROP TABLE IF EXISTS `clinica`;
CREATE TABLE `clinica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `analise_clinica` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clinica
-- ----------------------------
INSERT INTO `clinica` VALUES ('2', 'Vinicius Junqueira Schettino', '21313', 'schettino@gmal.com', '1');
INSERT INTO `clinica` VALUES ('3', 'Vinicius Junqueira Schettino', '21313', 'schettino@gmal.com', '0');

-- ----------------------------
-- Table structure for consulta
-- ----------------------------
DROP TABLE IF EXISTS `consulta`;
CREATE TABLE `consulta` (
  `id`        INT(11) NOT NULL AUTO_INCREMENT,
  `data`      DATE    NOT NULL,
  `hora`      TIME         DEFAULT NULL,
  `preco`     FLOAT   NOT NULL,
  `descricao` VARCHAR(255) DEFAULT NULL,
  `medico_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `medico_id` (`medico_id`) USING BTREE,
  CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`medico_id`) REFERENCES `medico` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
)
  ENGINE =InnoDB
  AUTO_INCREMENT =2
  DEFAULT CHARSET =latin1;

-- ----------------------------
-- Records of consulta
-- ----------------------------
INSERT INTO `consulta` VALUES ('1', '2014-11-27', '20:05:00', '23', '', '2');

-- ----------------------------
-- Table structure for medico
-- ----------------------------
DROP TABLE IF EXISTS `medico`;
CREATE TABLE `medico` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `crm` varchar(255) NOT NULL,
  `clinica_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_medico_clinica` (`clinica_id`),
  CONSTRAINT `fk_medico_clinica` FOREIGN KEY (`clinica_id`) REFERENCES `clinica` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of medico
-- ----------------------------
INSERT INTO `medico` VALUES ('2', 'Jota', '', '', '', 'fas42f', null);

-- ----------------------------
-- Table structure for receita_remedio
-- ----------------------------
DROP TABLE IF EXISTS `receita_remedio`;
CREATE TABLE `receita_remedio` (
  `id`              INT(11) NOT NULL AUTO_INCREMENT,
  `medico_id`       INT(11) NOT NULL,
  `remedio_id`      INT(11) NOT NULL,
  `dose`            VARCHAR(255) DEFAULT NULL,
  `horario`         TIME         DEFAULT NULL,
  `vezes`           INT(11)      DEFAULT NULL,
  `dt_recomendacao` DATE    NOT NULL,
  `obs`             VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `remedio_id` (`remedio_id`),
  KEY `medico_id` (`medico_id`),
  CONSTRAINT `receita_remedio_ibfk_1` FOREIGN KEY (`remedio_id`) REFERENCES `remedio` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `receita_remedio_ibfk_2` FOREIGN KEY (`medico_id`) REFERENCES `medico` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
)
  ENGINE =InnoDB
  AUTO_INCREMENT =2
  DEFAULT CHARSET =latin1;

-- ----------------------------
-- Records of receita_remedio
-- ----------------------------
INSERT INTO `receita_remedio` VALUES ('1', '2', '1', '3 Comprimidos', '08:05:00', '100', '2014-11-12', 'Hoje');

-- ----------------------------
-- Table structure for remedio
-- ----------------------------
DROP TABLE IF EXISTS `remedio`;
CREATE TABLE `remedio` (
  `id`        INT(11) NOT NULL AUTO_INCREMENT,
  `nome`      VARCHAR(255) DEFAULT NULL,
  `descricao` VARCHAR(255) DEFAULT NULL,
  `preco`     FLOAT        DEFAULT NULL,
  PRIMARY KEY (`id`)
)
  ENGINE =InnoDB
  AUTO_INCREMENT =2
  DEFAULT CHARSET =latin1;

-- ----------------------------
-- Records of remedio
-- ----------------------------
INSERT INTO `remedio` VALUES ('1', 'OMEPRAZOL', 'Remédio de Dor de Cabeça', '25.75');
