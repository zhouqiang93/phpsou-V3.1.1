/*
Navicat MySQL Data Transfer

Source Server         : bendi
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : phpsou

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2014-07-09 15:28:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for phpsou_about
-- ----------------------------
DROP TABLE IF EXISTS `phpsou_about`;
CREATE TABLE `phpsou_about` (
  `about_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `content` mediumtext NOT NULL,
  `is_show` int(1) NOT NULL,
  `url` varchar(225) NOT NULL,
  `sortid` int(11) NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of phpsou_about
-- ----------------------------
INSERT INTO `phpsou_about` VALUES ('42', '网址提交', '', '1', 'http://www.phpsou.com/search/url_submit.php', '5');
INSERT INTO `phpsou_about` VALUES ('35', '官方微博', '', '1', 'http://t.qq.com/guigou', '0');
INSERT INTO `phpsou_about` VALUES ('15', '会员中心', '会员中心', '1', '../tg/', '2');
INSERT INTO `phpsou_about` VALUES ('41', '搜索风云榜', '', '1', '/top', '3');
INSERT INTO `phpsou_about` VALUES ('39', '联系方式', '<p>　　</p><p>　　业务联系QQ：568435757</p><p>　　如需二次开发，请提前准备好需求，再联系我们。</p><p>&nbsp;</p><p>&nbsp;</p>', '1', '', '0');

-- ----------------------------
-- Table structure for phpsou_admin
-- ----------------------------
DROP TABLE IF EXISTS `phpsou_admin`;
CREATE TABLE `phpsou_admin` (
  `admin_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `logintime` datetime NOT NULL,
  `lastlogintime` datetime NOT NULL,
  `loginip` varchar(20) NOT NULL,
  `lastloginip` varchar(20) NOT NULL,
  `quanxian` varchar(225) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of phpsou_admin
-- ----------------------------
INSERT INTO `phpsou_admin` VALUES ('2', 'guigou', '4eb62f5c77d54048d24a81435b9958f6', '2014-07-09 14:41:00', '2014-07-09 10:37:33', '127.0.0.1', '127.0.0.1', 'f13e6f87e27290126ef053ccc99280d9');

-- ----------------------------
-- Table structure for phpsou_keyword
-- ----------------------------
DROP TABLE IF EXISTS `phpsou_keyword`;
CREATE TABLE `phpsou_keyword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(250) NOT NULL,
  `hit` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `id` (`id`),
  KEY `url` (`keyword`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of phpsou_keyword
-- ----------------------------
INSERT INTO `phpsou_keyword` VALUES ('1', 'php', '36');
INSERT INTO `phpsou_keyword` VALUES ('2', 'ph', '1');
INSERT INTO `phpsou_keyword` VALUES ('3', 'p', '2');
INSERT INTO `phpsou_keyword` VALUES ('4', '网站', '35');
INSERT INTO `phpsou_keyword` VALUES ('5', '网', '140');
INSERT INTO `phpsou_keyword` VALUES ('6', '人才网', '1');
INSERT INTO `phpsou_keyword` VALUES ('7', '电脑', '23');
INSERT INTO `phpsou_keyword` VALUES ('8', 'qq', '1');
INSERT INTO `phpsou_keyword` VALUES ('9', 'www.236book.com', '1');
INSERT INTO `phpsou_keyword` VALUES ('10', '昆明', '1');
INSERT INTO `phpsou_keyword` VALUES ('11', '有戏', '6');
INSERT INTO `phpsou_keyword` VALUES ('12', '游戏', '1');
INSERT INTO `phpsou_keyword` VALUES ('13', '担保', '1');
INSERT INTO `phpsou_keyword` VALUES ('14', '陕西 担保', '1');
INSERT INTO `phpsou_keyword` VALUES ('15', '陕西', '1');
INSERT INTO `phpsou_keyword` VALUES ('16', '舆情', '1');
INSERT INTO `phpsou_keyword` VALUES ('17', '121212', '1');
INSERT INTO `phpsou_keyword` VALUES ('18', 'phpsou', '5');
INSERT INTO `phpsou_keyword` VALUES ('19', '', '50');
INSERT INTO `phpsou_keyword` VALUES ('20', 'siemens nx', '1');
INSERT INTO `phpsou_keyword` VALUES ('21', '百度', '6');
INSERT INTO `phpsou_keyword` VALUES ('22', '露天影院', '3');
INSERT INTO `phpsou_keyword` VALUES ('23', '云南', '4');
INSERT INTO `phpsou_keyword` VALUES ('24', '电影', '3');
INSERT INTO `phpsou_keyword` VALUES ('25', '有戏开发', '1');
INSERT INTO `phpsou_keyword` VALUES ('26', '有戏 开发', '1');
INSERT INTO `phpsou_keyword` VALUES ('27', '网站 排行', '2');
INSERT INTO `phpsou_keyword` VALUES ('28', '云南结石病', '1');
INSERT INTO `phpsou_keyword` VALUES ('29', '云南 结石病', '1');
INSERT INTO `phpsou_keyword` VALUES ('30', '新闻', '1');
INSERT INTO `phpsou_keyword` VALUES ('31', '点', '1');
INSERT INTO `phpsou_keyword` VALUES ('32', 'php分词', '1');
INSERT INTO `phpsou_keyword` VALUES ('33', 'dd', '1');
INSERT INTO `phpsou_keyword` VALUES ('34', 'dircms', '1');
INSERT INTO `phpsou_keyword` VALUES ('35', 'mymps', '1');
INSERT INTO `phpsou_keyword` VALUES ('36', 'dedecms', '1');
INSERT INTO `phpsou_keyword` VALUES ('37', 'baidu', '1');
INSERT INTO `phpsou_keyword` VALUES ('38', 'Defenes chinas', '1');
INSERT INTO `phpsou_keyword` VALUES ('39', 'Defenes ', '1');
INSERT INTO `phpsou_keyword` VALUES ('40', 'المقاتلات الصينية', '1');
INSERT INTO `phpsou_keyword` VALUES ('41', '1', '3');
INSERT INTO `phpsou_keyword` VALUES ('42', 'a', '1');
INSERT INTO `phpsou_keyword` VALUES ('43', 'hawar', '1');
INSERT INTO `phpsou_keyword` VALUES ('44', 'salam', '3');
INSERT INTO `phpsou_keyword` VALUES ('45', 's', '1');
INSERT INTO `phpsou_keyword` VALUES ('46', '我', '1');
INSERT INTO `phpsou_keyword` VALUES ('47', '31221', '2');
INSERT INTO `phpsou_keyword` VALUES ('48', 'baidu.com', '2');
INSERT INTO `phpsou_keyword` VALUES ('49', '11', '2');
INSERT INTO `phpsou_keyword` VALUES ('50', 'dj', '1');
INSERT INTO `phpsou_keyword` VALUES ('51', '微博', '4');
INSERT INTO `phpsou_keyword` VALUES ('52', 'mongol', '2');
INSERT INTO `phpsou_keyword` VALUES ('53', 'hi', '2');
INSERT INTO `phpsou_keyword` VALUES ('54', 'r', '2');
INSERT INTO `phpsou_keyword` VALUES ('55', 'rrrrr', '3');
INSERT INTO `phpsou_keyword` VALUES ('56', 'aaa', '2');
INSERT INTO `phpsou_keyword` VALUES ('57', 'hah', '1');
INSERT INTO `phpsou_keyword` VALUES ('58', '123', '6');
INSERT INTO `phpsou_keyword` VALUES ('59', 'chinaz', '1');
INSERT INTO `phpsou_keyword` VALUES ('60', 'seo', '1');
INSERT INTO `phpsou_keyword` VALUES ('61', 'www.236', '1');
INSERT INTO `phpsou_keyword` VALUES ('62', '.hk大站', '1');
INSERT INTO `phpsou_keyword` VALUES ('63', '驻马店', '1');
INSERT INTO `phpsou_keyword` VALUES ('64', '驻马店网', '2');
INSERT INTO `phpsou_keyword` VALUES ('65', 'www.cnzzla.com', '3');
INSERT INTO `phpsou_keyword` VALUES ('66', 'dsfdg', '1');
INSERT INTO `phpsou_keyword` VALUES ('67', 'toprealnews', '1');
INSERT INTO `phpsou_keyword` VALUES ('68', 'sex vode', '1');
INSERT INTO `phpsou_keyword` VALUES ('69', '7sobook.com', '2');
INSERT INTO `phpsou_keyword` VALUES ('70', '起源小说搜索', '2');
INSERT INTO `phpsou_keyword` VALUES ('71', 'i搜书', '2');
INSERT INTO `phpsou_keyword` VALUES ('72', '游戏开发', '1');
INSERT INTO `phpsou_keyword` VALUES ('73', '赤峰', '1');
INSERT INTO `phpsou_keyword` VALUES ('74', '.', '1');
INSERT INTO `phpsou_keyword` VALUES ('75', '/', '1');
INSERT INTO `phpsou_keyword` VALUES ('76', '中国', '1');
INSERT INTO `phpsou_keyword` VALUES ('77', 'dgg', '1');
INSERT INTO `phpsou_keyword` VALUES ('78', '小说', '1');
INSERT INTO `phpsou_keyword` VALUES ('79', '爱咪迪', '1');
INSERT INTO `phpsou_keyword` VALUES ('80', '南京', '1');
INSERT INTO `phpsou_keyword` VALUES ('81', 'lovemidi', '1');
INSERT INTO `phpsou_keyword` VALUES ('82', '购物', '2');
INSERT INTO `phpsou_keyword` VALUES ('83', 'circleride', '1');
INSERT INTO `phpsou_keyword` VALUES ('84', 'home', '1');
INSERT INTO `phpsou_keyword` VALUES ('85', 'hotmail', '1');
INSERT INTO `phpsou_keyword` VALUES ('86', '风云直播', '1');
INSERT INTO `phpsou_keyword` VALUES ('87', '5', '2');
INSERT INTO `phpsou_keyword` VALUES ('88', '8', '1');
INSERT INTO `phpsou_keyword` VALUES ('89', '2', '4');
INSERT INTO `phpsou_keyword` VALUES ('90', '天灭', '1');
INSERT INTO `phpsou_keyword` VALUES ('91', '中共', '2');
INSERT INTO `phpsou_keyword` VALUES ('92', 'k', '1');
INSERT INTO `phpsou_keyword` VALUES ('93', '人民网', '1');
INSERT INTO `phpsou_keyword` VALUES ('94', 'qq网', '1');
INSERT INTO `phpsou_keyword` VALUES ('95', '网12', '1');
INSERT INTO `phpsou_keyword` VALUES ('96', '网123', '1');
INSERT INTO `phpsou_keyword` VALUES ('97', 'cms', '1');
INSERT INTO `phpsou_keyword` VALUES ('98', '帝国', '1');
INSERT INTO `phpsou_keyword` VALUES ('99', '帝国cms', '1');
INSERT INTO `phpsou_keyword` VALUES ('100', 'jk,lk', '1');
INSERT INTO `phpsou_keyword` VALUES ('101', '团购', '3');
INSERT INTO `phpsou_keyword` VALUES ('102', '重庆', '6');
INSERT INTO `phpsou_keyword` VALUES ('103', 'ssdf', '1');

-- ----------------------------
-- Table structure for phpsou_links
-- ----------------------------
DROP TABLE IF EXISTS `phpsou_links`;
CREATE TABLE `phpsou_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(500) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `time` varchar(20) NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `url` (`url`(255))
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of phpsou_links
-- ----------------------------

-- ----------------------------
-- Table structure for phpsou_site
-- ----------------------------
DROP TABLE IF EXISTS `phpsou_site`;
CREATE TABLE `phpsou_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) NOT NULL,
  `site` int(1) NOT NULL DEFAULT '0' COMMENT '抓取层数',
  `y` int(1) DEFAULT '0',
  UNIQUE KEY `id` (`id`),
  KEY `url` (`url`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of phpsou_site
-- ----------------------------

-- ----------------------------
-- Table structure for phpsou_siteconfig
-- ----------------------------
DROP TABLE IF EXISTS `phpsou_siteconfig`;
CREATE TABLE `phpsou_siteconfig` (
  `config_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `url` varchar(225) NOT NULL,
  `adtitle` varchar(225) NOT NULL,
  `icp` varchar(100) NOT NULL,
  `copyright` mediumtext NOT NULL,
  `Keywords` varchar(225) NOT NULL,
  `description` mediumtext NOT NULL,
  `qq` varchar(225) NOT NULL,
  PRIMARY KEY (`config_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of phpsou_siteconfig
-- ----------------------------
INSERT INTO `phpsou_siteconfig` VALUES ('1', 'PHP开源搜索引擎', 'http://www.phpsou.com/', 'PHPSou开源搜索引擎 - 致力于为中国开源事业提供动力! Powered by PHPSou', '京ICP证050897号', '© 2014 PHPSou', '开源搜索引擎源码下载,仿百度搜索引擎,垂直搜索引擎,行业搜索引擎,站内搜索引擎,购物搜索引擎,蜘蛛爬虫,元搜索引擎,快播搜索引擎,影视视频搜索引擎源码', '开源搜索引擎论坛(www.phpsou.net)提供搜索引擎源码下载供搜索引擎爱好者,网站优化爱好者研究,利用该源码可帮助用户修改成垂直搜索引擎、行业搜索引擎、站内搜索引擎、购物搜索引擎,系统自带蜘蛛爬虫,功能强大', '568435757');

-- ----------------------------
-- Table structure for phpsou_sphinx
-- ----------------------------
DROP TABLE IF EXISTS `phpsou_sphinx`;
CREATE TABLE `phpsou_sphinx` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dizhi` varchar(225) DEFAULT NULL,
  `duankou` varchar(225) DEFAULT NULL,
  `y` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of phpsou_sphinx
-- ----------------------------
INSERT INTO `phpsou_sphinx` VALUES ('1', '127.0.0.1', '9312', '0');

-- ----------------------------
-- Table structure for phpsou_url
-- ----------------------------
DROP TABLE IF EXISTS `phpsou_url`;
CREATE TABLE `phpsou_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) NOT NULL,
  `site` int(1) NOT NULL DEFAULT '0' COMMENT '抓取层数',
  UNIQUE KEY `id` (`id`),
  KEY `url` (`url`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of phpsou_url
-- ----------------------------
