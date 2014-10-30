/*
Navicat MySQL Data Transfer

Source Server         : Hypochondriac
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : hypochondriac

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2014-10-30 20:46:39
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
