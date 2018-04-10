/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : yunmanke

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2015-10-15 19:12:44
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `tb_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `uid` int(11) NOT NULL auto_increment,
  `username` varchar(20) default NULL,
  `password` varchar(32) default NULL,
  `email` varchar(50) NOT NULL,
  `lastlogin` int(10) default NULL,
  `systemkey` varchar(32) default NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO tb_admin VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '8744240@qq.com', '1444906648', '21232f297a57a5a743894a0e4a801fc3');

-- ----------------------------
-- Table structure for `tb_column`
-- ----------------------------
DROP TABLE IF EXISTS `tb_column`;
CREATE TABLE `tb_column` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) default NULL,
  `picurl` varchar(100) default NULL,
  `url` varchar(100) default NULL,
  `tid` int(11) default NULL,
  `gid` int(11) default NULL,
  `top` int(11) default NULL,
  `show` int(11) default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_column
-- ----------------------------
INSERT INTO tb_column VALUES ('1', '工作台', '/themes/skin/images/icon01.png', null, '1', null, '1', '1');
INSERT INTO tb_column VALUES ('2', '客户管理', '/themes/skin/images/icon02.png', null, '1', null, '2', '1');
INSERT INTO tb_column VALUES ('3', '业务管理', '/themes/skin/images/icon03.png', null, '1', null, '3', '1');
INSERT INTO tb_column VALUES ('4', '文件管理', '/themes/skin/images/icon04.png', null, '1', null, '4', '0');
INSERT INTO tb_column VALUES ('5', '系统设置', '/themes/skin/images/icon05.png', null, '1', null, '5', '1');
INSERT INTO tb_column VALUES ('6', '客户资料管理', null, null, '2', '2', '1', '1');
INSERT INTO tb_column VALUES ('7', '客户录入', null, '/kehu/luru', '3', '6', '1', '1');
INSERT INTO tb_column VALUES ('8', '客户列表', null, '/kehu', '3', '6', '2', '1');
INSERT INTO tb_column VALUES ('9', '客户查询', null, '/kehu/select', '3', '6', '3', '1');
INSERT INTO tb_column VALUES ('10', '常用链接', null, null, '2', '1', '1', '1');
INSERT INTO tb_column VALUES ('11', '客户查询', null, '/kehu/select', '3', '10', '2', '1');
INSERT INTO tb_column VALUES ('12', '客户性质配置', null, null, '2', '5', '1', '1');
INSERT INTO tb_column VALUES ('13', '客户性质添加', null, '/config/add/1', '3', '12', '1', '1');
INSERT INTO tb_column VALUES ('14', '客户性质列表', null, '/config/index/1', '3', '12', '2', '1');
INSERT INTO tb_column VALUES ('15', '客户来源配置', null, null, '2', '5', '2', '1');
INSERT INTO tb_column VALUES ('16', '客户来源添加', null, '/config/add/2', '3', '15', '1', '1');
INSERT INTO tb_column VALUES ('17', '客户来源列表', null, '/config/index/2', '3', '15', '2', '1');
INSERT INTO tb_column VALUES ('18', '所属区域配置', null, null, '2', '5', '3', '1');
INSERT INTO tb_column VALUES ('19', '所属区域添加', null, '/config/add/3', '3', '18', '1', '1');
INSERT INTO tb_column VALUES ('20', '所属区域列表', null, '/config/index/3', '3', '18', '2', '1');
INSERT INTO tb_column VALUES ('21', '所属行业配置', null, null, '2', '5', '4', '1');
INSERT INTO tb_column VALUES ('22', '所属行业添加', null, '/config/add/5', '3', '21', '1', '1');
INSERT INTO tb_column VALUES ('23', '所属行业列表', null, '/config/index/5', '3', '21', '2', '1');
INSERT INTO tb_column VALUES ('24', '客户类型配置', null, null, '2', '5', '5', '1');
INSERT INTO tb_column VALUES ('25', '客户类型添加', null, '/config/add/4', '3', '24', '1', '1');
INSERT INTO tb_column VALUES ('26', '客户类型列表', null, '/config/index/4', '3', '24', '2', '1');
INSERT INTO tb_column VALUES ('27', '客户业务管理', null, '', '2', '3', '1', '1');
INSERT INTO tb_column VALUES ('28', '客户业务录入', null, '/yewu/add', '3', '27', '1', '1');
INSERT INTO tb_column VALUES ('29', '客户业务列表', null, '/yewu/', '3', '27', '2', '1');
INSERT INTO tb_column VALUES ('30', '客户业务查询', null, '/yewu/select', '3', '27', '3', '1');
INSERT INTO tb_column VALUES ('31', '账户设置', null, null, '2', '5', '0', '1');
INSERT INTO tb_column VALUES ('32', '密码修改', null, '/config/password', '3', '31', '1', '1');
INSERT INTO tb_column VALUES ('33', '工作台', null, '/home/right', '3', '10', '1', '1');
INSERT INTO tb_column VALUES ('34', '业务查询', null, '/yewu/select', '3', '10', '2', '1');
INSERT INTO tb_column VALUES ('35', '系统配置', null, '/sys/', '3', '10', '1', '1');

-- ----------------------------
-- Table structure for `tb_fenlei`
-- ----------------------------
DROP TABLE IF EXISTS `tb_fenlei`;
CREATE TABLE `tb_fenlei` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) default NULL,
  `fsid` int(11) default NULL,
  `top` int(11) default NULL,
  `show` int(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_fenlei
-- ----------------------------
INSERT INTO tb_fenlei VALUES ('1', '国有企业', '1', '1', '1');
INSERT INTO tb_fenlei VALUES ('2', '中外合资', '1', '2', '1');
INSERT INTO tb_fenlei VALUES ('3', '私营或个体户', '1', '3', '1');
INSERT INTO tb_fenlei VALUES ('4', '合伙企业', '1', '4', '1');
INSERT INTO tb_fenlei VALUES ('5', '外商独资', '1', '5', '1');
INSERT INTO tb_fenlei VALUES ('6', '华南', '3', '1', '1');
INSERT INTO tb_fenlei VALUES ('7', '华东', '3', '2', '1');
INSERT INTO tb_fenlei VALUES ('8', '华中', '3', '3', '1');
INSERT INTO tb_fenlei VALUES ('9', '华北', '3', '4', '1');
INSERT INTO tb_fenlei VALUES ('10', '西南', '3', '5', '1');
INSERT INTO tb_fenlei VALUES ('11', '西北', '3', '6', '1');
INSERT INTO tb_fenlei VALUES ('12', '网站广告', '2', '1', '1');
INSERT INTO tb_fenlei VALUES ('13', '展览会', '2', '2', '1');
INSERT INTO tb_fenlei VALUES ('14', '客户推荐', '2', '3', '1');
INSERT INTO tb_fenlei VALUES ('15', '电话', '2', '4', '1');
INSERT INTO tb_fenlei VALUES ('16', '邮件', '2', '5', '1');
INSERT INTO tb_fenlei VALUES ('17', '报刊广告', '2', '6', '1');
INSERT INTO tb_fenlei VALUES ('18', '黄页', '2', '7', '1');
INSERT INTO tb_fenlei VALUES ('19', '朋友介绍', '2', '8', '1');
INSERT INTO tb_fenlei VALUES ('20', '教育', '5', '1', '1');
INSERT INTO tb_fenlei VALUES ('21', '医疗卫生', '5', '2', '1');
INSERT INTO tb_fenlei VALUES ('22', '政府', '5', '3', '1');
INSERT INTO tb_fenlei VALUES ('23', '化工', '5', '4', '1');
INSERT INTO tb_fenlei VALUES ('24', '电子', '5', '5', '1');
INSERT INTO tb_fenlei VALUES ('25', '现款现货', '6', '1', '1');
INSERT INTO tb_fenlei VALUES ('26', '一个月回款', '6', '2', '1');
INSERT INTO tb_fenlei VALUES ('27', '票到付款', '6', '3', '1');
INSERT INTO tb_fenlei VALUES ('28', '预付款', '6', '4', '1');
INSERT INTO tb_fenlei VALUES ('29', '有兴趣购买的客户', '4', '2', '1');
INSERT INTO tb_fenlei VALUES ('30', '考虑、犹豫的客户', '4', '3', '1');
INSERT INTO tb_fenlei VALUES ('31', '暂时不买的客户', '4', '4', '1');
INSERT INTO tb_fenlei VALUES ('32', '肯定不买的客户', '4', '5', '1');
INSERT INTO tb_fenlei VALUES ('33', '已经报过价没有信息回馈的客户', '4', '6', '1');
INSERT INTO tb_fenlei VALUES ('34', '现有客户', '4', '1', '1');
INSERT INTO tb_fenlei VALUES ('36', '其他', '1', '6', '1');

-- ----------------------------
-- Table structure for `tb_kehu`
-- ----------------------------
DROP TABLE IF EXISTS `tb_kehu`;
CREATE TABLE `tb_kehu` (
  `id` int(11) NOT NULL auto_increment,
  `tb_khmc` varchar(255) NOT NULL,
  `tb_dwmc` varchar(255) default NULL,
  `tb_khllr` varchar(255) default NULL,
  `tb_sj` varchar(255) default NULL,
  `tb_qq` varchar(255) default NULL,
  `tb_sshy` varchar(255) default NULL,
  `tb_khdh` varchar(255) default NULL,
  `tb_email` varchar(255) default NULL,
  `tb_wfllr` varchar(255) default NULL,
  `tb_address` varchar(255) default NULL,
  `tb_khlx` int(11) default NULL,
  `tb_content` varchar(255) default NULL,
  `tb_khxz` int(11) default NULL,
  `tb_khly` int(11) default NULL,
  `tb_ssqy` int(11) default NULL,
  `tb_hy` int(11) default NULL,
  `tb_xyzt` varchar(255) default NULL,
  `tb_http` varchar(255) default NULL,
  `tb_admin` int(5) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_kehu
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_yewu`
-- ----------------------------
DROP TABLE IF EXISTS `tb_yewu`;
CREATE TABLE `tb_yewu` (
  `id` int(11) NOT NULL auto_increment,
  `cpmc` varchar(255) default NULL,
  `khid` int(11) NOT NULL,
  `ktrq` varchar(255) default NULL,
  `dqrq` varchar(255) default NULL,
  `txrq` varchar(255) default NULL,
  `cbjg` varchar(255) default NULL,
  `xsjg` varchar(255) default NULL,
  `content` varchar(255) default NULL,
  `userid` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_yewu
-- ----------------------------
