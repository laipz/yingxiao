/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : data

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2018-12-08 20:04:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for everyday
-- ----------------------------
DROP TABLE IF EXISTS `everyday`;
CREATE TABLE `everyday` (
  `pic` varchar(6) COLLATE utf8_icelandic_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `oldprice` decimal(10,2) NOT NULL,
  `describe` text COLLATE utf8_icelandic_ci,
  PRIMARY KEY (`pic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_icelandic_ci;

-- ----------------------------
-- Records of everyday
-- ----------------------------
INSERT INTO `everyday` VALUES ('1.jpg', '12.00', '652.23', '神圣联赛来了');
INSERT INTO `everyday` VALUES ('2.jpg', '22.00', '88.00', '搜索栏历史');
INSERT INTO `everyday` VALUES ('3.jpg', '22.00', '0.00', '');
INSERT INTO `everyday` VALUES ('4.jpg', '33.00', '52.00', '开始');
INSERT INTO `everyday` VALUES ('5.jpg', '3355.00', '212.00', '收款方');

-- ----------------------------
-- Table structure for tablist
-- ----------------------------
DROP TABLE IF EXISTS `tablist`;
CREATE TABLE `tablist` (
  `id` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `classname` varchar(5) COLLATE utf8_icelandic_ci DEFAULT NULL,
  `name` varchar(4) COLLATE utf8_icelandic_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_icelandic_ci;

-- ----------------------------
-- Records of tablist
-- ----------------------------
INSERT INTO `tablist` VALUES ('11', '1', 'hover', '精选热卖');
INSERT INTO `tablist` VALUES ('12', '1', null, '时尚新品');
INSERT INTO `tablist` VALUES ('13', '1', null, '畅享低价');
INSERT INTO `tablist` VALUES ('14', '1', null, '二手优品');
INSERT INTO `tablist` VALUES ('15', '1', null, '精选单品');
INSERT INTO `tablist` VALUES ('21', '2', 'hover', '精选热卖');
INSERT INTO `tablist` VALUES ('22', '2', '', '新品抢先');
INSERT INTO `tablist` VALUES ('23', '2', null, '笔记本');
INSERT INTO `tablist` VALUES ('24', '2', null, '摄影摄像');
INSERT INTO `tablist` VALUES ('25', '2', null, '智能潮品');
INSERT INTO `tablist` VALUES ('26', '2', null, 'OA配件');
INSERT INTO `tablist` VALUES ('27', '2', null, '平板专区');
INSERT INTO `tablist` VALUES ('31', '3', 'hover', '精选热卖');
INSERT INTO `tablist` VALUES ('32', '3', null, '电视');
INSERT INTO `tablist` VALUES ('33', '3', null, '洗衣机');
INSERT INTO `tablist` VALUES ('34', '3', null, '冰箱');
INSERT INTO `tablist` VALUES ('35', '3', null, '空调');
INSERT INTO `tablist` VALUES ('36', '3', null, '大屏电视');
INSERT INTO `tablist` VALUES ('37', '3', null, '音影配件');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `sysloginname` varchar(6) COLLATE utf8_icelandic_ci NOT NULL,
  `sysloginpass` varchar(15) COLLATE utf8_icelandic_ci NOT NULL,
  `sysloginmail` varchar(15) COLLATE utf8_icelandic_ci NOT NULL,
  PRIMARY KEY (`sysloginname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_icelandic_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('上课', '123', '33@qq.com');
INSERT INTO `user` VALUES ('赖沛钊', '960319', 'lpz@qq.com');
