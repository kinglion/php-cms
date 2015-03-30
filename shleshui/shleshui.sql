/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50535
Source Host           : localhost:3306
Source Database       : ithhc

Target Server Type    : MYSQL
Target Server Version : 50535
File Encoding         : 65001

Date: 2015-02-04 17:43:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `hhc_city`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_city`;
CREATE TABLE `hhc_city` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `paixu` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=3242 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_city
-- ----------------------------
INSERT INTO `hhc_city` VALUES ('1', '北京市', '0', '0');
INSERT INTO `hhc_city` VALUES ('2', '天津市', '0', '0');
INSERT INTO `hhc_city` VALUES ('3', '河北省', '0', '0');
INSERT INTO `hhc_city` VALUES ('4', '山西省', '0', '0');
INSERT INTO `hhc_city` VALUES ('5', '内蒙古自治区', '0', '0');
INSERT INTO `hhc_city` VALUES ('6', '辽宁省', '0', '0');
INSERT INTO `hhc_city` VALUES ('7', '吉林省', '0', '0');
INSERT INTO `hhc_city` VALUES ('8', '黑龙江省', '0', '0');
INSERT INTO `hhc_city` VALUES ('9', '上海市', '0', '0');
INSERT INTO `hhc_city` VALUES ('10', '江苏省', '0', '0');
INSERT INTO `hhc_city` VALUES ('11', '浙江省', '0', '0');
INSERT INTO `hhc_city` VALUES ('12', '安徽省', '0', '0');
INSERT INTO `hhc_city` VALUES ('13', '福建省', '0', '0');
INSERT INTO `hhc_city` VALUES ('14', '江西省', '0', '0');
INSERT INTO `hhc_city` VALUES ('15', '山东省', '0', '500');
INSERT INTO `hhc_city` VALUES ('16', '河南省', '0', '0');
INSERT INTO `hhc_city` VALUES ('17', '湖北省', '0', '0');
INSERT INTO `hhc_city` VALUES ('18', '湖南省', '0', '0');
INSERT INTO `hhc_city` VALUES ('19', '广东省', '0', '0');
INSERT INTO `hhc_city` VALUES ('20', '广西壮族自治区', '0', '0');
INSERT INTO `hhc_city` VALUES ('21', '海南省', '0', '0');
INSERT INTO `hhc_city` VALUES ('22', '重庆市', '0', '0');
INSERT INTO `hhc_city` VALUES ('23', '四川省', '0', '0');
INSERT INTO `hhc_city` VALUES ('24', '贵州省', '0', '0');
INSERT INTO `hhc_city` VALUES ('25', '云南省', '0', '0');
INSERT INTO `hhc_city` VALUES ('26', '西藏自治区', '0', '0');
INSERT INTO `hhc_city` VALUES ('27', '陕西省', '0', '0');
INSERT INTO `hhc_city` VALUES ('28', '甘肃省', '0', '0');
INSERT INTO `hhc_city` VALUES ('29', '青海省', '0', '0');
INSERT INTO `hhc_city` VALUES ('30', '宁夏回族自治区', '0', '0');
INSERT INTO `hhc_city` VALUES ('31', '新疆维吾尔自治区', '0', '0');
INSERT INTO `hhc_city` VALUES ('32', '香港特别行政区', '0', '0');
INSERT INTO `hhc_city` VALUES ('33', '澳门特别行政区', '0', '0');
INSERT INTO `hhc_city` VALUES ('34', '台湾省', '0', '0');
INSERT INTO `hhc_city` VALUES ('35', '北京市', '1', '0');
INSERT INTO `hhc_city` VALUES ('36', '天津市', '2', '0');
INSERT INTO `hhc_city` VALUES ('37', '石家庄市', '3', '0');
INSERT INTO `hhc_city` VALUES ('38', '唐山市', '3', '0');
INSERT INTO `hhc_city` VALUES ('39', '秦皇岛市', '3', '0');
INSERT INTO `hhc_city` VALUES ('40', '邯郸市', '3', '0');
INSERT INTO `hhc_city` VALUES ('41', '邢台市', '3', '0');
INSERT INTO `hhc_city` VALUES ('42', '保定市', '3', '0');
INSERT INTO `hhc_city` VALUES ('43', '张家口市', '3', '0');
INSERT INTO `hhc_city` VALUES ('44', '承德市', '3', '0');
INSERT INTO `hhc_city` VALUES ('45', '沧州市', '3', '0');
INSERT INTO `hhc_city` VALUES ('46', '廊坊市', '3', '0');
INSERT INTO `hhc_city` VALUES ('47', '衡水市', '3', '0');
INSERT INTO `hhc_city` VALUES ('48', '太原市', '4', '0');
INSERT INTO `hhc_city` VALUES ('49', '大同市', '4', '0');
INSERT INTO `hhc_city` VALUES ('50', '阳泉市', '4', '0');
INSERT INTO `hhc_city` VALUES ('51', '长治市', '4', '0');
INSERT INTO `hhc_city` VALUES ('52', '晋城市', '4', '0');
INSERT INTO `hhc_city` VALUES ('53', '朔州市', '4', '0');
INSERT INTO `hhc_city` VALUES ('54', '晋中市', '4', '0');
INSERT INTO `hhc_city` VALUES ('55', '运城市', '4', '0');
INSERT INTO `hhc_city` VALUES ('56', '忻州市', '4', '0');
INSERT INTO `hhc_city` VALUES ('57', '临汾市', '4', '0');
INSERT INTO `hhc_city` VALUES ('58', '吕梁市', '4', '0');
INSERT INTO `hhc_city` VALUES ('59', '呼和浩特市', '5', '0');
INSERT INTO `hhc_city` VALUES ('60', '包头市', '5', '0');
INSERT INTO `hhc_city` VALUES ('61', '乌海市', '5', '0');
INSERT INTO `hhc_city` VALUES ('62', '赤峰市', '5', '0');
INSERT INTO `hhc_city` VALUES ('63', '通辽市', '5', '0');
INSERT INTO `hhc_city` VALUES ('64', '鄂尔多斯市', '5', '0');
INSERT INTO `hhc_city` VALUES ('65', '呼伦贝尔市', '5', '0');
INSERT INTO `hhc_city` VALUES ('66', '巴彦淖尔市', '5', '0');
INSERT INTO `hhc_city` VALUES ('67', '乌兰察布市', '5', '0');
INSERT INTO `hhc_city` VALUES ('68', '兴安盟', '5', '0');
INSERT INTO `hhc_city` VALUES ('69', '锡林郭勒盟', '5', '0');
INSERT INTO `hhc_city` VALUES ('70', '阿拉善盟', '5', '0');
INSERT INTO `hhc_city` VALUES ('71', '沈阳市', '6', '0');
INSERT INTO `hhc_city` VALUES ('72', '大连市', '6', '0');
INSERT INTO `hhc_city` VALUES ('73', '鞍山市', '6', '0');
INSERT INTO `hhc_city` VALUES ('74', '抚顺市', '6', '0');
INSERT INTO `hhc_city` VALUES ('75', '本溪市', '6', '0');
INSERT INTO `hhc_city` VALUES ('76', '丹东市', '6', '0');
INSERT INTO `hhc_city` VALUES ('77', '锦州市', '6', '0');
INSERT INTO `hhc_city` VALUES ('78', '营口市', '6', '0');
INSERT INTO `hhc_city` VALUES ('79', '阜新市', '6', '0');
INSERT INTO `hhc_city` VALUES ('80', '辽阳市', '6', '0');
INSERT INTO `hhc_city` VALUES ('81', '盘锦市', '6', '0');
INSERT INTO `hhc_city` VALUES ('82', '铁岭市', '6', '0');
INSERT INTO `hhc_city` VALUES ('83', '朝阳市', '6', '0');
INSERT INTO `hhc_city` VALUES ('84', '葫芦岛市', '6', '0');
INSERT INTO `hhc_city` VALUES ('85', '长春市', '7', '0');
INSERT INTO `hhc_city` VALUES ('86', '吉林市', '7', '0');
INSERT INTO `hhc_city` VALUES ('87', '四平市', '7', '0');
INSERT INTO `hhc_city` VALUES ('88', '辽源市', '7', '0');
INSERT INTO `hhc_city` VALUES ('89', '通化市', '7', '0');
INSERT INTO `hhc_city` VALUES ('90', '白山市', '7', '0');
INSERT INTO `hhc_city` VALUES ('91', '松原市', '7', '0');
INSERT INTO `hhc_city` VALUES ('92', '白城市', '7', '0');
INSERT INTO `hhc_city` VALUES ('93', '延边朝鲜族自治州', '7', '0');
INSERT INTO `hhc_city` VALUES ('94', '哈尔滨市', '8', '0');
INSERT INTO `hhc_city` VALUES ('95', '齐齐哈尔市', '8', '0');
INSERT INTO `hhc_city` VALUES ('96', '鸡西市', '8', '0');
INSERT INTO `hhc_city` VALUES ('97', '鹤岗市', '8', '0');
INSERT INTO `hhc_city` VALUES ('98', '双鸭山市', '8', '0');
INSERT INTO `hhc_city` VALUES ('99', '大庆市', '8', '0');
INSERT INTO `hhc_city` VALUES ('100', '伊春市', '8', '0');
INSERT INTO `hhc_city` VALUES ('101', '佳木斯市', '8', '0');
INSERT INTO `hhc_city` VALUES ('102', '七台河市', '8', '0');
INSERT INTO `hhc_city` VALUES ('103', '牡丹江市', '8', '0');
INSERT INTO `hhc_city` VALUES ('104', '黑河市', '8', '0');
INSERT INTO `hhc_city` VALUES ('105', '绥化市', '8', '0');
INSERT INTO `hhc_city` VALUES ('106', '大兴安岭地区', '8', '0');
INSERT INTO `hhc_city` VALUES ('107', '上海市', '9', '0');
INSERT INTO `hhc_city` VALUES ('108', '南京市', '10', '0');
INSERT INTO `hhc_city` VALUES ('109', '无锡市', '10', '0');
INSERT INTO `hhc_city` VALUES ('110', '徐州市', '10', '0');
INSERT INTO `hhc_city` VALUES ('111', '常州市', '10', '0');
INSERT INTO `hhc_city` VALUES ('112', '苏州市', '10', '0');
INSERT INTO `hhc_city` VALUES ('113', '南通市', '10', '0');
INSERT INTO `hhc_city` VALUES ('114', '连云港市', '10', '0');
INSERT INTO `hhc_city` VALUES ('115', '淮安市', '10', '0');
INSERT INTO `hhc_city` VALUES ('116', '盐城市', '10', '0');
INSERT INTO `hhc_city` VALUES ('117', '扬州市', '10', '0');
INSERT INTO `hhc_city` VALUES ('118', '镇江市', '10', '0');
INSERT INTO `hhc_city` VALUES ('119', '泰州市', '10', '0');
INSERT INTO `hhc_city` VALUES ('120', '宿迁市', '10', '0');
INSERT INTO `hhc_city` VALUES ('121', '杭州市', '11', '0');
INSERT INTO `hhc_city` VALUES ('122', '宁波市', '11', '0');
INSERT INTO `hhc_city` VALUES ('123', '温州市', '11', '0');
INSERT INTO `hhc_city` VALUES ('124', '嘉兴市', '11', '0');
INSERT INTO `hhc_city` VALUES ('125', '湖州市', '11', '0');
INSERT INTO `hhc_city` VALUES ('126', '绍兴市', '11', '0');
INSERT INTO `hhc_city` VALUES ('127', '金华市', '11', '0');
INSERT INTO `hhc_city` VALUES ('128', '衢州市', '11', '0');
INSERT INTO `hhc_city` VALUES ('129', '舟山市', '11', '0');
INSERT INTO `hhc_city` VALUES ('130', '台州市', '11', '0');
INSERT INTO `hhc_city` VALUES ('131', '丽水市', '11', '0');
INSERT INTO `hhc_city` VALUES ('132', '合肥市', '12', '0');
INSERT INTO `hhc_city` VALUES ('133', '芜湖市', '12', '0');
INSERT INTO `hhc_city` VALUES ('134', '蚌埠市', '12', '0');
INSERT INTO `hhc_city` VALUES ('135', '淮南市', '12', '0');
INSERT INTO `hhc_city` VALUES ('136', '马鞍山市', '12', '0');
INSERT INTO `hhc_city` VALUES ('137', '淮北市', '12', '0');
INSERT INTO `hhc_city` VALUES ('138', '铜陵市', '12', '0');
INSERT INTO `hhc_city` VALUES ('139', '安庆市', '12', '0');
INSERT INTO `hhc_city` VALUES ('140', '黄山市', '12', '0');
INSERT INTO `hhc_city` VALUES ('141', '滁州市', '12', '0');
INSERT INTO `hhc_city` VALUES ('142', '阜阳市', '12', '0');
INSERT INTO `hhc_city` VALUES ('143', '宿州市', '12', '0');
INSERT INTO `hhc_city` VALUES ('144', '巢湖市', '12', '0');
INSERT INTO `hhc_city` VALUES ('145', '六安市', '12', '0');
INSERT INTO `hhc_city` VALUES ('146', '亳州市', '12', '0');
INSERT INTO `hhc_city` VALUES ('147', '池州市', '12', '0');
INSERT INTO `hhc_city` VALUES ('148', '宣城市', '12', '0');
INSERT INTO `hhc_city` VALUES ('149', '福州市', '13', '0');
INSERT INTO `hhc_city` VALUES ('150', '厦门市', '13', '0');
INSERT INTO `hhc_city` VALUES ('151', '莆田市', '13', '0');
INSERT INTO `hhc_city` VALUES ('152', '三明市', '13', '0');
INSERT INTO `hhc_city` VALUES ('153', '泉州市', '13', '0');
INSERT INTO `hhc_city` VALUES ('154', '漳州市', '13', '0');
INSERT INTO `hhc_city` VALUES ('155', '南平市', '13', '0');
INSERT INTO `hhc_city` VALUES ('156', '龙岩市', '13', '0');
INSERT INTO `hhc_city` VALUES ('157', '宁德市', '13', '0');
INSERT INTO `hhc_city` VALUES ('158', '南昌市', '14', '0');
INSERT INTO `hhc_city` VALUES ('159', '景德镇市', '14', '0');
INSERT INTO `hhc_city` VALUES ('160', '萍乡市', '14', '0');
INSERT INTO `hhc_city` VALUES ('161', '九江市', '14', '0');
INSERT INTO `hhc_city` VALUES ('162', '新余市', '14', '0');
INSERT INTO `hhc_city` VALUES ('163', '鹰潭市', '14', '0');
INSERT INTO `hhc_city` VALUES ('164', '赣州市', '14', '0');
INSERT INTO `hhc_city` VALUES ('165', '吉安市', '14', '0');
INSERT INTO `hhc_city` VALUES ('166', '宜春市', '14', '0');
INSERT INTO `hhc_city` VALUES ('167', '抚州市', '14', '0');
INSERT INTO `hhc_city` VALUES ('168', '上饶市', '14', '0');
INSERT INTO `hhc_city` VALUES ('169', '济南市', '15', '0');
INSERT INTO `hhc_city` VALUES ('170', '青岛市', '15', '0');
INSERT INTO `hhc_city` VALUES ('171', '淄博市', '15', '0');
INSERT INTO `hhc_city` VALUES ('172', '枣庄市', '15', '0');
INSERT INTO `hhc_city` VALUES ('173', '东营市', '15', '0');
INSERT INTO `hhc_city` VALUES ('174', '烟台市', '15', '0');
INSERT INTO `hhc_city` VALUES ('175', '潍坊市', '15', '0');
INSERT INTO `hhc_city` VALUES ('176', '济宁市', '15', '0');
INSERT INTO `hhc_city` VALUES ('177', '泰安市', '15', '0');
INSERT INTO `hhc_city` VALUES ('178', '威海市', '15', '0');
INSERT INTO `hhc_city` VALUES ('179', '日照市', '15', '0');
INSERT INTO `hhc_city` VALUES ('180', '莱芜市', '15', '0');
INSERT INTO `hhc_city` VALUES ('181', '临沂市', '15', '0');
INSERT INTO `hhc_city` VALUES ('182', '德州市', '15', '0');
INSERT INTO `hhc_city` VALUES ('183', '聊城市', '15', '0');
INSERT INTO `hhc_city` VALUES ('184', '滨州市', '15', '1000');
INSERT INTO `hhc_city` VALUES ('185', '荷泽市', '15', '0');
INSERT INTO `hhc_city` VALUES ('186', '郑州市', '16', '0');
INSERT INTO `hhc_city` VALUES ('187', '开封市', '16', '0');
INSERT INTO `hhc_city` VALUES ('188', '洛阳市', '16', '0');
INSERT INTO `hhc_city` VALUES ('189', '平顶山市', '16', '0');
INSERT INTO `hhc_city` VALUES ('190', '安阳市', '16', '0');
INSERT INTO `hhc_city` VALUES ('191', '鹤壁市', '16', '0');
INSERT INTO `hhc_city` VALUES ('192', '新乡市', '16', '0');
INSERT INTO `hhc_city` VALUES ('193', '焦作市', '16', '0');
INSERT INTO `hhc_city` VALUES ('194', '濮阳市', '16', '0');
INSERT INTO `hhc_city` VALUES ('195', '许昌市', '16', '0');
INSERT INTO `hhc_city` VALUES ('196', '漯河市', '16', '0');
INSERT INTO `hhc_city` VALUES ('197', '三门峡市', '16', '0');
INSERT INTO `hhc_city` VALUES ('198', '南阳市', '16', '0');
INSERT INTO `hhc_city` VALUES ('199', '商丘市', '16', '0');
INSERT INTO `hhc_city` VALUES ('200', '信阳市', '16', '0');
INSERT INTO `hhc_city` VALUES ('201', '周口市', '16', '0');
INSERT INTO `hhc_city` VALUES ('202', '驻马店市', '16', '0');
INSERT INTO `hhc_city` VALUES ('203', '武汉市', '17', '0');
INSERT INTO `hhc_city` VALUES ('204', '黄石市', '17', '0');
INSERT INTO `hhc_city` VALUES ('205', '十堰市', '17', '0');
INSERT INTO `hhc_city` VALUES ('206', '宜昌市', '17', '0');
INSERT INTO `hhc_city` VALUES ('207', '襄樊市', '17', '0');
INSERT INTO `hhc_city` VALUES ('208', '鄂州市', '17', '0');
INSERT INTO `hhc_city` VALUES ('209', '荆门市', '17', '0');
INSERT INTO `hhc_city` VALUES ('210', '孝感市', '17', '0');
INSERT INTO `hhc_city` VALUES ('211', '荆州市', '17', '0');
INSERT INTO `hhc_city` VALUES ('212', '黄冈市', '17', '0');
INSERT INTO `hhc_city` VALUES ('213', '咸宁市', '17', '0');
INSERT INTO `hhc_city` VALUES ('214', '随州市', '17', '0');
INSERT INTO `hhc_city` VALUES ('215', '恩施土家族苗族自治州', '17', '0');
INSERT INTO `hhc_city` VALUES ('216', '神农架', '17', '0');
INSERT INTO `hhc_city` VALUES ('217', '长沙市', '18', '0');
INSERT INTO `hhc_city` VALUES ('218', '株洲市', '18', '0');
INSERT INTO `hhc_city` VALUES ('219', '湘潭市', '18', '0');
INSERT INTO `hhc_city` VALUES ('220', '衡阳市', '18', '0');
INSERT INTO `hhc_city` VALUES ('221', '邵阳市', '18', '0');
INSERT INTO `hhc_city` VALUES ('222', '岳阳市', '18', '0');
INSERT INTO `hhc_city` VALUES ('223', '常德市', '18', '0');
INSERT INTO `hhc_city` VALUES ('224', '张家界市', '18', '0');
INSERT INTO `hhc_city` VALUES ('225', '益阳市', '18', '0');
INSERT INTO `hhc_city` VALUES ('226', '郴州市', '18', '0');
INSERT INTO `hhc_city` VALUES ('227', '永州市', '18', '0');
INSERT INTO `hhc_city` VALUES ('228', '怀化市', '18', '0');
INSERT INTO `hhc_city` VALUES ('229', '娄底市', '18', '0');
INSERT INTO `hhc_city` VALUES ('230', '湘西土家族苗族自治州', '18', '0');
INSERT INTO `hhc_city` VALUES ('231', '广州市', '19', '0');
INSERT INTO `hhc_city` VALUES ('232', '韶关市', '19', '0');
INSERT INTO `hhc_city` VALUES ('233', '深圳市', '19', '0');
INSERT INTO `hhc_city` VALUES ('234', '珠海市', '19', '0');
INSERT INTO `hhc_city` VALUES ('235', '汕头市', '19', '0');
INSERT INTO `hhc_city` VALUES ('236', '佛山市', '19', '0');
INSERT INTO `hhc_city` VALUES ('237', '江门市', '19', '0');
INSERT INTO `hhc_city` VALUES ('238', '湛江市', '19', '0');
INSERT INTO `hhc_city` VALUES ('239', '茂名市', '19', '0');
INSERT INTO `hhc_city` VALUES ('240', '肇庆市', '19', '0');
INSERT INTO `hhc_city` VALUES ('241', '惠州市', '19', '0');
INSERT INTO `hhc_city` VALUES ('242', '梅州市', '19', '0');
INSERT INTO `hhc_city` VALUES ('243', '汕尾市', '19', '0');
INSERT INTO `hhc_city` VALUES ('244', '河源市', '19', '0');
INSERT INTO `hhc_city` VALUES ('245', '阳江市', '19', '0');
INSERT INTO `hhc_city` VALUES ('246', '清远市', '19', '0');
INSERT INTO `hhc_city` VALUES ('247', '东莞市', '19', '0');
INSERT INTO `hhc_city` VALUES ('248', '中山市', '19', '0');
INSERT INTO `hhc_city` VALUES ('249', '潮州市', '19', '0');
INSERT INTO `hhc_city` VALUES ('250', '揭阳市', '19', '0');
INSERT INTO `hhc_city` VALUES ('251', '云浮市', '19', '0');
INSERT INTO `hhc_city` VALUES ('252', '南宁市', '20', '0');
INSERT INTO `hhc_city` VALUES ('253', '柳州市', '20', '0');
INSERT INTO `hhc_city` VALUES ('254', '桂林市', '20', '0');
INSERT INTO `hhc_city` VALUES ('255', '梧州市', '20', '0');
INSERT INTO `hhc_city` VALUES ('256', '北海市', '20', '0');
INSERT INTO `hhc_city` VALUES ('257', '防城港市', '20', '0');
INSERT INTO `hhc_city` VALUES ('258', '钦州市', '20', '0');
INSERT INTO `hhc_city` VALUES ('259', '贵港市', '20', '0');
INSERT INTO `hhc_city` VALUES ('260', '玉林市', '20', '0');
INSERT INTO `hhc_city` VALUES ('261', '百色市', '20', '0');
INSERT INTO `hhc_city` VALUES ('262', '贺州市', '20', '0');
INSERT INTO `hhc_city` VALUES ('263', '河池市', '20', '0');
INSERT INTO `hhc_city` VALUES ('264', '来宾市', '20', '0');
INSERT INTO `hhc_city` VALUES ('265', '崇左市', '20', '0');
INSERT INTO `hhc_city` VALUES ('266', '海口市', '21', '0');
INSERT INTO `hhc_city` VALUES ('267', '三亚市', '21', '0');
INSERT INTO `hhc_city` VALUES ('268', '重庆市', '22', '0');
INSERT INTO `hhc_city` VALUES ('269', '成都市', '23', '0');
INSERT INTO `hhc_city` VALUES ('270', '自贡市', '23', '0');
INSERT INTO `hhc_city` VALUES ('271', '攀枝花市', '23', '0');
INSERT INTO `hhc_city` VALUES ('272', '泸州市', '23', '0');
INSERT INTO `hhc_city` VALUES ('273', '德阳市', '23', '0');
INSERT INTO `hhc_city` VALUES ('274', '绵阳市', '23', '0');
INSERT INTO `hhc_city` VALUES ('275', '广元市', '23', '0');
INSERT INTO `hhc_city` VALUES ('276', '遂宁市', '23', '0');
INSERT INTO `hhc_city` VALUES ('277', '内江市', '23', '0');
INSERT INTO `hhc_city` VALUES ('278', '乐山市', '23', '0');
INSERT INTO `hhc_city` VALUES ('279', '南充市', '23', '0');
INSERT INTO `hhc_city` VALUES ('280', '眉山市', '23', '0');
INSERT INTO `hhc_city` VALUES ('281', '宜宾市', '23', '0');
INSERT INTO `hhc_city` VALUES ('282', '广安市', '23', '0');
INSERT INTO `hhc_city` VALUES ('283', '达州市', '23', '0');
INSERT INTO `hhc_city` VALUES ('284', '雅安市', '23', '0');
INSERT INTO `hhc_city` VALUES ('285', '巴中市', '23', '0');
INSERT INTO `hhc_city` VALUES ('286', '资阳市', '23', '0');
INSERT INTO `hhc_city` VALUES ('287', '阿坝藏族羌族自治州', '23', '0');
INSERT INTO `hhc_city` VALUES ('288', '甘孜藏族自治州', '23', '0');
INSERT INTO `hhc_city` VALUES ('289', '凉山彝族自治州', '23', '0');
INSERT INTO `hhc_city` VALUES ('290', '贵阳市', '24', '0');
INSERT INTO `hhc_city` VALUES ('291', '六盘水市', '24', '0');
INSERT INTO `hhc_city` VALUES ('292', '遵义市', '24', '0');
INSERT INTO `hhc_city` VALUES ('293', '安顺市', '24', '0');
INSERT INTO `hhc_city` VALUES ('294', '铜仁地区', '24', '0');
INSERT INTO `hhc_city` VALUES ('295', '黔西南布依族苗族自治州', '24', '0');
INSERT INTO `hhc_city` VALUES ('296', '毕节地区', '24', '0');
INSERT INTO `hhc_city` VALUES ('297', '黔东南苗族侗族自治州', '24', '0');
INSERT INTO `hhc_city` VALUES ('298', '黔南布依族苗族自治州', '24', '0');
INSERT INTO `hhc_city` VALUES ('299', '昆明市', '25', '0');
INSERT INTO `hhc_city` VALUES ('300', '曲靖市', '25', '0');
INSERT INTO `hhc_city` VALUES ('301', '玉溪市', '25', '0');
INSERT INTO `hhc_city` VALUES ('302', '保山市', '25', '0');
INSERT INTO `hhc_city` VALUES ('303', '昭通市', '25', '0');
INSERT INTO `hhc_city` VALUES ('304', '丽江市', '25', '0');
INSERT INTO `hhc_city` VALUES ('305', '思茅市', '25', '0');
INSERT INTO `hhc_city` VALUES ('306', '临沧市', '25', '0');
INSERT INTO `hhc_city` VALUES ('307', '楚雄彝族自治州', '25', '0');
INSERT INTO `hhc_city` VALUES ('308', '红河哈尼族彝族自治州', '25', '0');
INSERT INTO `hhc_city` VALUES ('309', '文山壮族苗族自治州', '25', '0');
INSERT INTO `hhc_city` VALUES ('310', '西双版纳傣族自治州', '25', '0');
INSERT INTO `hhc_city` VALUES ('311', '大理白族自治州', '25', '0');
INSERT INTO `hhc_city` VALUES ('312', '德宏傣族景颇族自治州', '25', '0');
INSERT INTO `hhc_city` VALUES ('313', '怒江傈僳族自治州', '25', '0');
INSERT INTO `hhc_city` VALUES ('314', '迪庆藏族自治州', '25', '0');
INSERT INTO `hhc_city` VALUES ('315', '拉萨市', '26', '0');
INSERT INTO `hhc_city` VALUES ('316', '昌都地区', '26', '0');
INSERT INTO `hhc_city` VALUES ('317', '山南地区', '26', '0');
INSERT INTO `hhc_city` VALUES ('318', '日喀则地区', '26', '0');
INSERT INTO `hhc_city` VALUES ('319', '那曲地区', '26', '0');
INSERT INTO `hhc_city` VALUES ('320', '阿里地区', '26', '0');
INSERT INTO `hhc_city` VALUES ('321', '林芝地区', '26', '0');
INSERT INTO `hhc_city` VALUES ('322', '西安市', '27', '0');
INSERT INTO `hhc_city` VALUES ('323', '铜川市', '27', '0');
INSERT INTO `hhc_city` VALUES ('324', '宝鸡市', '27', '0');
INSERT INTO `hhc_city` VALUES ('325', '咸阳市', '27', '0');
INSERT INTO `hhc_city` VALUES ('326', '渭南市', '27', '0');
INSERT INTO `hhc_city` VALUES ('327', '延安市', '27', '0');
INSERT INTO `hhc_city` VALUES ('328', '汉中市', '27', '0');
INSERT INTO `hhc_city` VALUES ('329', '榆林市', '27', '0');
INSERT INTO `hhc_city` VALUES ('330', '安康市', '27', '0');
INSERT INTO `hhc_city` VALUES ('331', '商洛市', '27', '0');
INSERT INTO `hhc_city` VALUES ('332', '兰州市', '28', '0');
INSERT INTO `hhc_city` VALUES ('333', '嘉峪关市', '28', '0');
INSERT INTO `hhc_city` VALUES ('334', '金昌市', '28', '0');
INSERT INTO `hhc_city` VALUES ('335', '白银市', '28', '0');
INSERT INTO `hhc_city` VALUES ('336', '天水市', '28', '0');
INSERT INTO `hhc_city` VALUES ('337', '武威市', '28', '0');
INSERT INTO `hhc_city` VALUES ('338', '张掖市', '28', '0');
INSERT INTO `hhc_city` VALUES ('339', '平凉市', '28', '0');
INSERT INTO `hhc_city` VALUES ('340', '酒泉市', '28', '0');
INSERT INTO `hhc_city` VALUES ('341', '庆阳市', '28', '0');
INSERT INTO `hhc_city` VALUES ('342', '定西市', '28', '0');
INSERT INTO `hhc_city` VALUES ('343', '陇南市', '28', '0');
INSERT INTO `hhc_city` VALUES ('344', '临夏回族自治州', '28', '0');
INSERT INTO `hhc_city` VALUES ('345', '甘南藏族自治州', '28', '0');
INSERT INTO `hhc_city` VALUES ('346', '西宁市', '29', '0');
INSERT INTO `hhc_city` VALUES ('347', '海东地区', '29', '0');
INSERT INTO `hhc_city` VALUES ('348', '海北藏族自治州', '29', '0');
INSERT INTO `hhc_city` VALUES ('349', '黄南藏族自治州', '29', '0');
INSERT INTO `hhc_city` VALUES ('350', '海南藏族自治州', '29', '0');
INSERT INTO `hhc_city` VALUES ('351', '果洛藏族自治州', '29', '0');
INSERT INTO `hhc_city` VALUES ('352', '玉树藏族自治州', '29', '0');
INSERT INTO `hhc_city` VALUES ('353', '海西蒙古族藏族自治州', '29', '0');
INSERT INTO `hhc_city` VALUES ('354', '银川市', '30', '0');
INSERT INTO `hhc_city` VALUES ('355', '石嘴山市', '30', '0');
INSERT INTO `hhc_city` VALUES ('356', '吴忠市', '30', '0');
INSERT INTO `hhc_city` VALUES ('357', '固原市', '30', '0');
INSERT INTO `hhc_city` VALUES ('358', '中卫市', '30', '0');
INSERT INTO `hhc_city` VALUES ('359', '乌鲁木齐市', '31', '0');
INSERT INTO `hhc_city` VALUES ('360', '克拉玛依市', '31', '0');
INSERT INTO `hhc_city` VALUES ('361', '吐鲁番地区', '31', '0');
INSERT INTO `hhc_city` VALUES ('362', '哈密地区', '31', '0');
INSERT INTO `hhc_city` VALUES ('363', '昌吉回族自治州', '31', '0');
INSERT INTO `hhc_city` VALUES ('364', '博尔塔拉蒙古自治州', '31', '0');
INSERT INTO `hhc_city` VALUES ('365', '巴音郭楞蒙古自治州', '31', '0');
INSERT INTO `hhc_city` VALUES ('366', '阿克苏地区', '31', '0');
INSERT INTO `hhc_city` VALUES ('367', '克孜勒苏柯尔克孜自治州', '31', '0');
INSERT INTO `hhc_city` VALUES ('368', '喀什地区', '31', '0');
INSERT INTO `hhc_city` VALUES ('369', '和田地区', '31', '0');
INSERT INTO `hhc_city` VALUES ('370', '伊犁哈萨克自治州', '31', '0');
INSERT INTO `hhc_city` VALUES ('371', '塔城地区', '31', '0');
INSERT INTO `hhc_city` VALUES ('372', '阿勒泰地区', '31', '0');
INSERT INTO `hhc_city` VALUES ('373', '石河子市', '31', '0');
INSERT INTO `hhc_city` VALUES ('374', '阿拉尔市', '31', '0');
INSERT INTO `hhc_city` VALUES ('375', '图木舒克市', '31', '0');
INSERT INTO `hhc_city` VALUES ('376', '五家渠市', '31', '0');
INSERT INTO `hhc_city` VALUES ('377', '香港特别行政区', '32', '0');
INSERT INTO `hhc_city` VALUES ('378', '澳门特别行政区', '33', '0');
INSERT INTO `hhc_city` VALUES ('379', '台湾省', '34', '0');
INSERT INTO `hhc_city` VALUES ('380', '东城区', '35', '0');
INSERT INTO `hhc_city` VALUES ('381', '西城区', '35', '0');
INSERT INTO `hhc_city` VALUES ('382', '崇文区', '35', '0');
INSERT INTO `hhc_city` VALUES ('383', '宣武区', '35', '0');
INSERT INTO `hhc_city` VALUES ('384', '朝阳区', '35', '0');
INSERT INTO `hhc_city` VALUES ('385', '丰台区', '35', '0');
INSERT INTO `hhc_city` VALUES ('386', '石景山区', '35', '0');
INSERT INTO `hhc_city` VALUES ('387', '海淀区', '35', '0');
INSERT INTO `hhc_city` VALUES ('388', '门头沟区', '35', '0');
INSERT INTO `hhc_city` VALUES ('389', '房山区', '35', '0');
INSERT INTO `hhc_city` VALUES ('390', '通州区', '35', '0');
INSERT INTO `hhc_city` VALUES ('391', '顺义区', '35', '0');
INSERT INTO `hhc_city` VALUES ('392', '昌平区', '35', '0');
INSERT INTO `hhc_city` VALUES ('393', '大兴区', '35', '0');
INSERT INTO `hhc_city` VALUES ('394', '怀柔区', '35', '0');
INSERT INTO `hhc_city` VALUES ('395', '平谷区', '35', '0');
INSERT INTO `hhc_city` VALUES ('396', '密云县', '35', '0');
INSERT INTO `hhc_city` VALUES ('397', '延庆县', '35', '0');
INSERT INTO `hhc_city` VALUES ('398', '和平区', '36', '0');
INSERT INTO `hhc_city` VALUES ('399', '河东区', '36', '0');
INSERT INTO `hhc_city` VALUES ('400', '河西区', '36', '0');
INSERT INTO `hhc_city` VALUES ('401', '南开区', '36', '0');
INSERT INTO `hhc_city` VALUES ('402', '河北区', '36', '0');
INSERT INTO `hhc_city` VALUES ('403', '红桥区', '36', '0');
INSERT INTO `hhc_city` VALUES ('404', '塘沽区', '36', '0');
INSERT INTO `hhc_city` VALUES ('405', '汉沽区', '36', '0');
INSERT INTO `hhc_city` VALUES ('406', '大港区', '36', '0');
INSERT INTO `hhc_city` VALUES ('407', '东丽区', '36', '0');
INSERT INTO `hhc_city` VALUES ('408', '西青区', '36', '0');
INSERT INTO `hhc_city` VALUES ('409', '津南区', '36', '0');
INSERT INTO `hhc_city` VALUES ('410', '北辰区', '36', '0');
INSERT INTO `hhc_city` VALUES ('411', '武清区', '36', '0');
INSERT INTO `hhc_city` VALUES ('412', '宝坻区', '36', '0');
INSERT INTO `hhc_city` VALUES ('413', '宁河县', '36', '0');
INSERT INTO `hhc_city` VALUES ('414', '静海县', '36', '0');
INSERT INTO `hhc_city` VALUES ('415', '蓟县', '36', '0');
INSERT INTO `hhc_city` VALUES ('416', '长安区', '37', '0');
INSERT INTO `hhc_city` VALUES ('417', '桥东区', '37', '0');
INSERT INTO `hhc_city` VALUES ('418', '桥西区', '37', '0');
INSERT INTO `hhc_city` VALUES ('419', '新华区', '37', '0');
INSERT INTO `hhc_city` VALUES ('420', '井陉矿区', '37', '0');
INSERT INTO `hhc_city` VALUES ('421', '裕华区', '37', '0');
INSERT INTO `hhc_city` VALUES ('422', '井陉县', '37', '0');
INSERT INTO `hhc_city` VALUES ('423', '正定县', '37', '0');
INSERT INTO `hhc_city` VALUES ('424', '栾城县', '37', '0');
INSERT INTO `hhc_city` VALUES ('425', '行唐县', '37', '0');
INSERT INTO `hhc_city` VALUES ('426', '灵寿县', '37', '0');
INSERT INTO `hhc_city` VALUES ('427', '高邑县', '37', '0');
INSERT INTO `hhc_city` VALUES ('428', '深泽县', '37', '0');
INSERT INTO `hhc_city` VALUES ('429', '赞皇县', '37', '0');
INSERT INTO `hhc_city` VALUES ('430', '无极县', '37', '0');
INSERT INTO `hhc_city` VALUES ('431', '平山县', '37', '0');
INSERT INTO `hhc_city` VALUES ('432', '元氏县', '37', '0');
INSERT INTO `hhc_city` VALUES ('433', '赵县', '37', '0');
INSERT INTO `hhc_city` VALUES ('434', '辛集市', '37', '0');
INSERT INTO `hhc_city` VALUES ('435', '藁城市', '37', '0');
INSERT INTO `hhc_city` VALUES ('436', '晋州市', '37', '0');
INSERT INTO `hhc_city` VALUES ('437', '新乐市', '37', '0');
INSERT INTO `hhc_city` VALUES ('438', '鹿泉市', '37', '0');
INSERT INTO `hhc_city` VALUES ('439', '路南区', '38', '0');
INSERT INTO `hhc_city` VALUES ('440', '路北区', '38', '0');
INSERT INTO `hhc_city` VALUES ('441', '古冶区', '38', '0');
INSERT INTO `hhc_city` VALUES ('442', '开平区', '38', '0');
INSERT INTO `hhc_city` VALUES ('443', '丰南区', '38', '0');
INSERT INTO `hhc_city` VALUES ('444', '丰润区', '38', '0');
INSERT INTO `hhc_city` VALUES ('445', '滦县', '38', '0');
INSERT INTO `hhc_city` VALUES ('446', '滦南县', '38', '0');
INSERT INTO `hhc_city` VALUES ('447', '乐亭县', '38', '0');
INSERT INTO `hhc_city` VALUES ('448', '迁西县', '38', '0');
INSERT INTO `hhc_city` VALUES ('449', '玉田县', '38', '0');
INSERT INTO `hhc_city` VALUES ('450', '唐海县', '38', '0');
INSERT INTO `hhc_city` VALUES ('451', '遵化市', '38', '0');
INSERT INTO `hhc_city` VALUES ('452', '迁安市', '38', '0');
INSERT INTO `hhc_city` VALUES ('453', '海港区', '39', '0');
INSERT INTO `hhc_city` VALUES ('454', '山海关区', '39', '0');
INSERT INTO `hhc_city` VALUES ('455', '北戴河区', '39', '0');
INSERT INTO `hhc_city` VALUES ('456', '青龙满族自治县', '39', '0');
INSERT INTO `hhc_city` VALUES ('457', '昌黎县', '39', '0');
INSERT INTO `hhc_city` VALUES ('458', '抚宁县', '39', '0');
INSERT INTO `hhc_city` VALUES ('459', '卢龙县', '39', '0');
INSERT INTO `hhc_city` VALUES ('460', '邯山区', '40', '0');
INSERT INTO `hhc_city` VALUES ('461', '丛台区', '40', '0');
INSERT INTO `hhc_city` VALUES ('462', '复兴区', '40', '0');
INSERT INTO `hhc_city` VALUES ('463', '峰峰矿区', '40', '0');
INSERT INTO `hhc_city` VALUES ('464', '邯郸县', '40', '0');
INSERT INTO `hhc_city` VALUES ('465', '临漳县', '40', '0');
INSERT INTO `hhc_city` VALUES ('466', '成安县', '40', '0');
INSERT INTO `hhc_city` VALUES ('467', '大名县', '40', '0');
INSERT INTO `hhc_city` VALUES ('468', '涉县', '40', '0');
INSERT INTO `hhc_city` VALUES ('469', '磁县', '40', '0');
INSERT INTO `hhc_city` VALUES ('470', '肥乡县', '40', '0');
INSERT INTO `hhc_city` VALUES ('471', '永年县', '40', '0');
INSERT INTO `hhc_city` VALUES ('472', '邱县', '40', '0');
INSERT INTO `hhc_city` VALUES ('473', '鸡泽县', '40', '0');
INSERT INTO `hhc_city` VALUES ('474', '广平县', '40', '0');
INSERT INTO `hhc_city` VALUES ('475', '馆陶县', '40', '0');
INSERT INTO `hhc_city` VALUES ('476', '魏县', '40', '0');
INSERT INTO `hhc_city` VALUES ('477', '曲周县', '40', '0');
INSERT INTO `hhc_city` VALUES ('478', '武安市', '40', '0');
INSERT INTO `hhc_city` VALUES ('479', '桥东区', '41', '0');
INSERT INTO `hhc_city` VALUES ('480', '桥西区', '41', '0');
INSERT INTO `hhc_city` VALUES ('481', '邢台县', '41', '0');
INSERT INTO `hhc_city` VALUES ('482', '临城县', '41', '0');
INSERT INTO `hhc_city` VALUES ('483', '内丘县', '41', '0');
INSERT INTO `hhc_city` VALUES ('484', '柏乡县', '41', '0');
INSERT INTO `hhc_city` VALUES ('485', '隆尧县', '41', '0');
INSERT INTO `hhc_city` VALUES ('486', '任县', '41', '0');
INSERT INTO `hhc_city` VALUES ('487', '南和县', '41', '0');
INSERT INTO `hhc_city` VALUES ('488', '宁晋县', '41', '0');
INSERT INTO `hhc_city` VALUES ('489', '巨鹿县', '41', '0');
INSERT INTO `hhc_city` VALUES ('490', '新河县', '41', '0');
INSERT INTO `hhc_city` VALUES ('491', '广宗县', '41', '0');
INSERT INTO `hhc_city` VALUES ('492', '平乡县', '41', '0');
INSERT INTO `hhc_city` VALUES ('493', '威县', '41', '0');
INSERT INTO `hhc_city` VALUES ('494', '清河县', '41', '0');
INSERT INTO `hhc_city` VALUES ('495', '临西县', '41', '0');
INSERT INTO `hhc_city` VALUES ('496', '南宫市', '41', '0');
INSERT INTO `hhc_city` VALUES ('497', '沙河市', '41', '0');
INSERT INTO `hhc_city` VALUES ('498', '新市区', '42', '0');
INSERT INTO `hhc_city` VALUES ('499', '北市区', '42', '0');
INSERT INTO `hhc_city` VALUES ('500', '南市区', '42', '0');
INSERT INTO `hhc_city` VALUES ('501', '满城县', '42', '0');
INSERT INTO `hhc_city` VALUES ('502', '清苑县', '42', '0');
INSERT INTO `hhc_city` VALUES ('503', '涞水县', '42', '0');
INSERT INTO `hhc_city` VALUES ('504', '阜平县', '42', '0');
INSERT INTO `hhc_city` VALUES ('505', '徐水县', '42', '0');
INSERT INTO `hhc_city` VALUES ('506', '定兴县', '42', '0');
INSERT INTO `hhc_city` VALUES ('507', '唐县', '42', '0');
INSERT INTO `hhc_city` VALUES ('508', '高阳县', '42', '0');
INSERT INTO `hhc_city` VALUES ('509', '容城县', '42', '0');
INSERT INTO `hhc_city` VALUES ('510', '涞源县', '42', '0');
INSERT INTO `hhc_city` VALUES ('511', '望都县', '42', '0');
INSERT INTO `hhc_city` VALUES ('512', '安新县', '42', '0');
INSERT INTO `hhc_city` VALUES ('513', '易县', '42', '0');
INSERT INTO `hhc_city` VALUES ('514', '曲阳县', '42', '0');
INSERT INTO `hhc_city` VALUES ('515', '蠡县', '42', '0');
INSERT INTO `hhc_city` VALUES ('516', '顺平县', '42', '0');
INSERT INTO `hhc_city` VALUES ('517', '博野县', '42', '0');
INSERT INTO `hhc_city` VALUES ('518', '雄县', '42', '0');
INSERT INTO `hhc_city` VALUES ('519', '涿州市', '42', '0');
INSERT INTO `hhc_city` VALUES ('520', '定州市', '42', '0');
INSERT INTO `hhc_city` VALUES ('521', '安国市', '42', '0');
INSERT INTO `hhc_city` VALUES ('522', '高碑店市', '42', '0');
INSERT INTO `hhc_city` VALUES ('523', '桥东区', '43', '0');
INSERT INTO `hhc_city` VALUES ('524', '桥西区', '43', '0');
INSERT INTO `hhc_city` VALUES ('525', '宣化区', '43', '0');
INSERT INTO `hhc_city` VALUES ('526', '下花园区', '43', '0');
INSERT INTO `hhc_city` VALUES ('527', '宣化县', '43', '0');
INSERT INTO `hhc_city` VALUES ('528', '张北县', '43', '0');
INSERT INTO `hhc_city` VALUES ('529', '康保县', '43', '0');
INSERT INTO `hhc_city` VALUES ('530', '沽源县', '43', '0');
INSERT INTO `hhc_city` VALUES ('531', '尚义县', '43', '0');
INSERT INTO `hhc_city` VALUES ('532', '蔚县', '43', '0');
INSERT INTO `hhc_city` VALUES ('533', '阳原县', '43', '0');
INSERT INTO `hhc_city` VALUES ('534', '怀安县', '43', '0');
INSERT INTO `hhc_city` VALUES ('535', '万全县', '43', '0');
INSERT INTO `hhc_city` VALUES ('536', '怀来县', '43', '0');
INSERT INTO `hhc_city` VALUES ('537', '涿鹿县', '43', '0');
INSERT INTO `hhc_city` VALUES ('538', '赤城县', '43', '0');
INSERT INTO `hhc_city` VALUES ('539', '崇礼县', '43', '0');
INSERT INTO `hhc_city` VALUES ('540', '双桥区', '44', '0');
INSERT INTO `hhc_city` VALUES ('541', '双滦区', '44', '0');
INSERT INTO `hhc_city` VALUES ('542', '鹰手营子矿区', '44', '0');
INSERT INTO `hhc_city` VALUES ('543', '承德县', '44', '0');
INSERT INTO `hhc_city` VALUES ('544', '兴隆县', '44', '0');
INSERT INTO `hhc_city` VALUES ('545', '平泉县', '44', '0');
INSERT INTO `hhc_city` VALUES ('546', '滦平县', '44', '0');
INSERT INTO `hhc_city` VALUES ('547', '隆化县', '44', '0');
INSERT INTO `hhc_city` VALUES ('548', '丰宁满族自治县', '44', '0');
INSERT INTO `hhc_city` VALUES ('549', '宽城满族自治县', '44', '0');
INSERT INTO `hhc_city` VALUES ('550', '围场满族蒙古族自治县', '44', '0');
INSERT INTO `hhc_city` VALUES ('551', '新华区', '45', '0');
INSERT INTO `hhc_city` VALUES ('552', '运河区', '45', '0');
INSERT INTO `hhc_city` VALUES ('553', '沧县', '45', '0');
INSERT INTO `hhc_city` VALUES ('554', '青县', '45', '0');
INSERT INTO `hhc_city` VALUES ('555', '东光县', '45', '0');
INSERT INTO `hhc_city` VALUES ('556', '海兴县', '45', '0');
INSERT INTO `hhc_city` VALUES ('557', '盐山县', '45', '0');
INSERT INTO `hhc_city` VALUES ('558', '肃宁县', '45', '0');
INSERT INTO `hhc_city` VALUES ('559', '南皮县', '45', '0');
INSERT INTO `hhc_city` VALUES ('560', '吴桥县', '45', '0');
INSERT INTO `hhc_city` VALUES ('561', '献县', '45', '0');
INSERT INTO `hhc_city` VALUES ('562', '孟村回族自治县', '45', '0');
INSERT INTO `hhc_city` VALUES ('563', '泊头市', '45', '0');
INSERT INTO `hhc_city` VALUES ('564', '任丘市', '45', '0');
INSERT INTO `hhc_city` VALUES ('565', '黄骅市', '45', '0');
INSERT INTO `hhc_city` VALUES ('566', '河间市', '45', '0');
INSERT INTO `hhc_city` VALUES ('567', '安次区', '46', '0');
INSERT INTO `hhc_city` VALUES ('568', '广阳区', '46', '0');
INSERT INTO `hhc_city` VALUES ('569', '固安县', '46', '0');
INSERT INTO `hhc_city` VALUES ('570', '永清县', '46', '0');
INSERT INTO `hhc_city` VALUES ('571', '香河县', '46', '0');
INSERT INTO `hhc_city` VALUES ('572', '大城县', '46', '0');
INSERT INTO `hhc_city` VALUES ('573', '文安县', '46', '0');
INSERT INTO `hhc_city` VALUES ('574', '大厂回族自治县', '46', '0');
INSERT INTO `hhc_city` VALUES ('575', '霸州市', '46', '0');
INSERT INTO `hhc_city` VALUES ('576', '三河市', '46', '0');
INSERT INTO `hhc_city` VALUES ('577', '桃城区', '47', '0');
INSERT INTO `hhc_city` VALUES ('578', '枣强县', '47', '0');
INSERT INTO `hhc_city` VALUES ('579', '武邑县', '47', '0');
INSERT INTO `hhc_city` VALUES ('580', '武强县', '47', '0');
INSERT INTO `hhc_city` VALUES ('581', '饶阳县', '47', '0');
INSERT INTO `hhc_city` VALUES ('582', '安平县', '47', '0');
INSERT INTO `hhc_city` VALUES ('583', '故城县', '47', '0');
INSERT INTO `hhc_city` VALUES ('584', '景县', '47', '0');
INSERT INTO `hhc_city` VALUES ('585', '阜城县', '47', '0');
INSERT INTO `hhc_city` VALUES ('586', '冀州市', '47', '0');
INSERT INTO `hhc_city` VALUES ('587', '深州市', '47', '0');
INSERT INTO `hhc_city` VALUES ('588', '小店区', '48', '0');
INSERT INTO `hhc_city` VALUES ('589', '迎泽区', '48', '0');
INSERT INTO `hhc_city` VALUES ('590', '杏花岭区', '48', '0');
INSERT INTO `hhc_city` VALUES ('591', '尖草坪区', '48', '0');
INSERT INTO `hhc_city` VALUES ('592', '万柏林区', '48', '0');
INSERT INTO `hhc_city` VALUES ('593', '晋源区', '48', '0');
INSERT INTO `hhc_city` VALUES ('594', '清徐县', '48', '0');
INSERT INTO `hhc_city` VALUES ('595', '阳曲县', '48', '0');
INSERT INTO `hhc_city` VALUES ('596', '娄烦县', '48', '0');
INSERT INTO `hhc_city` VALUES ('597', '古交市', '48', '0');
INSERT INTO `hhc_city` VALUES ('598', '城区', '49', '0');
INSERT INTO `hhc_city` VALUES ('599', '矿区', '49', '0');
INSERT INTO `hhc_city` VALUES ('600', '南郊区', '49', '0');
INSERT INTO `hhc_city` VALUES ('601', '新荣区', '49', '0');
INSERT INTO `hhc_city` VALUES ('602', '阳高县', '49', '0');
INSERT INTO `hhc_city` VALUES ('603', '天镇县', '49', '0');
INSERT INTO `hhc_city` VALUES ('604', '广灵县', '49', '0');
INSERT INTO `hhc_city` VALUES ('605', '灵丘县', '49', '0');
INSERT INTO `hhc_city` VALUES ('606', '浑源县', '49', '0');
INSERT INTO `hhc_city` VALUES ('607', '左云县', '49', '0');
INSERT INTO `hhc_city` VALUES ('608', '大同县', '49', '0');
INSERT INTO `hhc_city` VALUES ('609', '城区', '50', '0');
INSERT INTO `hhc_city` VALUES ('610', '矿区', '50', '0');
INSERT INTO `hhc_city` VALUES ('611', '郊区', '50', '0');
INSERT INTO `hhc_city` VALUES ('612', '平定县', '50', '0');
INSERT INTO `hhc_city` VALUES ('613', '盂县', '50', '0');
INSERT INTO `hhc_city` VALUES ('614', '城区', '51', '0');
INSERT INTO `hhc_city` VALUES ('615', '郊区', '51', '0');
INSERT INTO `hhc_city` VALUES ('616', '长治县', '51', '0');
INSERT INTO `hhc_city` VALUES ('617', '襄垣县', '51', '0');
INSERT INTO `hhc_city` VALUES ('618', '屯留县', '51', '0');
INSERT INTO `hhc_city` VALUES ('619', '平顺县', '51', '0');
INSERT INTO `hhc_city` VALUES ('620', '黎城县', '51', '0');
INSERT INTO `hhc_city` VALUES ('621', '壶关县', '51', '0');
INSERT INTO `hhc_city` VALUES ('622', '长子县', '51', '0');
INSERT INTO `hhc_city` VALUES ('623', '武乡县', '51', '0');
INSERT INTO `hhc_city` VALUES ('624', '沁县', '51', '0');
INSERT INTO `hhc_city` VALUES ('625', '沁源县', '51', '0');
INSERT INTO `hhc_city` VALUES ('626', '潞城市', '51', '0');
INSERT INTO `hhc_city` VALUES ('627', '城区', '52', '0');
INSERT INTO `hhc_city` VALUES ('628', '沁水县', '52', '0');
INSERT INTO `hhc_city` VALUES ('629', '阳城县', '52', '0');
INSERT INTO `hhc_city` VALUES ('630', '陵川县', '52', '0');
INSERT INTO `hhc_city` VALUES ('631', '泽州县', '52', '0');
INSERT INTO `hhc_city` VALUES ('632', '高平市', '52', '0');
INSERT INTO `hhc_city` VALUES ('633', '朔城区', '53', '0');
INSERT INTO `hhc_city` VALUES ('634', '平鲁区', '53', '0');
INSERT INTO `hhc_city` VALUES ('635', '山阴县', '53', '0');
INSERT INTO `hhc_city` VALUES ('636', '应县', '53', '0');
INSERT INTO `hhc_city` VALUES ('637', '右玉县', '53', '0');
INSERT INTO `hhc_city` VALUES ('638', '怀仁县', '53', '0');
INSERT INTO `hhc_city` VALUES ('639', '榆次区', '54', '0');
INSERT INTO `hhc_city` VALUES ('640', '榆社县', '54', '0');
INSERT INTO `hhc_city` VALUES ('641', '左权县', '54', '0');
INSERT INTO `hhc_city` VALUES ('642', '和顺县', '54', '0');
INSERT INTO `hhc_city` VALUES ('643', '昔阳县', '54', '0');
INSERT INTO `hhc_city` VALUES ('644', '寿阳县', '54', '0');
INSERT INTO `hhc_city` VALUES ('645', '太谷县', '54', '0');
INSERT INTO `hhc_city` VALUES ('646', '祁县', '54', '0');
INSERT INTO `hhc_city` VALUES ('647', '平遥县', '54', '0');
INSERT INTO `hhc_city` VALUES ('648', '灵石县', '54', '0');
INSERT INTO `hhc_city` VALUES ('649', '介休市', '54', '0');
INSERT INTO `hhc_city` VALUES ('650', '盐湖区', '55', '0');
INSERT INTO `hhc_city` VALUES ('651', '临猗县', '55', '0');
INSERT INTO `hhc_city` VALUES ('652', '万荣县', '55', '0');
INSERT INTO `hhc_city` VALUES ('653', '闻喜县', '55', '0');
INSERT INTO `hhc_city` VALUES ('654', '稷山县', '55', '0');
INSERT INTO `hhc_city` VALUES ('655', '新绛县', '55', '0');
INSERT INTO `hhc_city` VALUES ('656', '绛县', '55', '0');
INSERT INTO `hhc_city` VALUES ('657', '垣曲县', '55', '0');
INSERT INTO `hhc_city` VALUES ('658', '夏县', '55', '0');
INSERT INTO `hhc_city` VALUES ('659', '平陆县', '55', '0');
INSERT INTO `hhc_city` VALUES ('660', '芮城县', '55', '0');
INSERT INTO `hhc_city` VALUES ('661', '永济市', '55', '0');
INSERT INTO `hhc_city` VALUES ('662', '河津市', '55', '0');
INSERT INTO `hhc_city` VALUES ('663', '忻府区', '56', '0');
INSERT INTO `hhc_city` VALUES ('664', '定襄县', '56', '0');
INSERT INTO `hhc_city` VALUES ('665', '五台县', '56', '0');
INSERT INTO `hhc_city` VALUES ('666', '代县', '56', '0');
INSERT INTO `hhc_city` VALUES ('667', '繁峙县', '56', '0');
INSERT INTO `hhc_city` VALUES ('668', '宁武县', '56', '0');
INSERT INTO `hhc_city` VALUES ('669', '静乐县', '56', '0');
INSERT INTO `hhc_city` VALUES ('670', '神池县', '56', '0');
INSERT INTO `hhc_city` VALUES ('671', '五寨县', '56', '0');
INSERT INTO `hhc_city` VALUES ('672', '岢岚县', '56', '0');
INSERT INTO `hhc_city` VALUES ('673', '河曲县', '56', '0');
INSERT INTO `hhc_city` VALUES ('674', '保德县', '56', '0');
INSERT INTO `hhc_city` VALUES ('675', '偏关县', '56', '0');
INSERT INTO `hhc_city` VALUES ('676', '原平市', '56', '0');
INSERT INTO `hhc_city` VALUES ('677', '尧都区', '57', '0');
INSERT INTO `hhc_city` VALUES ('678', '曲沃县', '57', '0');
INSERT INTO `hhc_city` VALUES ('679', '翼城县', '57', '0');
INSERT INTO `hhc_city` VALUES ('680', '襄汾县', '57', '0');
INSERT INTO `hhc_city` VALUES ('681', '洪洞县', '57', '0');
INSERT INTO `hhc_city` VALUES ('682', '古县', '57', '0');
INSERT INTO `hhc_city` VALUES ('683', '安泽县', '57', '0');
INSERT INTO `hhc_city` VALUES ('684', '浮山县', '57', '0');
INSERT INTO `hhc_city` VALUES ('685', '吉县', '57', '0');
INSERT INTO `hhc_city` VALUES ('686', '乡宁县', '57', '0');
INSERT INTO `hhc_city` VALUES ('687', '大宁县', '57', '0');
INSERT INTO `hhc_city` VALUES ('688', '隰县', '57', '0');
INSERT INTO `hhc_city` VALUES ('689', '永和县', '57', '0');
INSERT INTO `hhc_city` VALUES ('690', '蒲县', '57', '0');
INSERT INTO `hhc_city` VALUES ('691', '汾西县', '57', '0');
INSERT INTO `hhc_city` VALUES ('692', '侯马市', '57', '0');
INSERT INTO `hhc_city` VALUES ('693', '霍州市', '57', '0');
INSERT INTO `hhc_city` VALUES ('694', '离石区', '58', '0');
INSERT INTO `hhc_city` VALUES ('695', '文水县', '58', '0');
INSERT INTO `hhc_city` VALUES ('696', '交城县', '58', '0');
INSERT INTO `hhc_city` VALUES ('697', '兴县', '58', '0');
INSERT INTO `hhc_city` VALUES ('698', '临县', '58', '0');
INSERT INTO `hhc_city` VALUES ('699', '柳林县', '58', '0');
INSERT INTO `hhc_city` VALUES ('700', '石楼县', '58', '0');
INSERT INTO `hhc_city` VALUES ('701', '岚县', '58', '0');
INSERT INTO `hhc_city` VALUES ('702', '方山县', '58', '0');
INSERT INTO `hhc_city` VALUES ('703', '中阳县', '58', '0');
INSERT INTO `hhc_city` VALUES ('704', '交口县', '58', '0');
INSERT INTO `hhc_city` VALUES ('705', '孝义市', '58', '0');
INSERT INTO `hhc_city` VALUES ('706', '汾阳市', '58', '0');
INSERT INTO `hhc_city` VALUES ('707', '新城区', '59', '0');
INSERT INTO `hhc_city` VALUES ('708', '回民区', '59', '0');
INSERT INTO `hhc_city` VALUES ('709', '玉泉区', '59', '0');
INSERT INTO `hhc_city` VALUES ('710', '赛罕区', '59', '0');
INSERT INTO `hhc_city` VALUES ('711', '土默特左旗', '59', '0');
INSERT INTO `hhc_city` VALUES ('712', '托克托县', '59', '0');
INSERT INTO `hhc_city` VALUES ('713', '和林格尔县', '59', '0');
INSERT INTO `hhc_city` VALUES ('714', '清水河县', '59', '0');
INSERT INTO `hhc_city` VALUES ('715', '武川县', '59', '0');
INSERT INTO `hhc_city` VALUES ('716', '东河区', '60', '0');
INSERT INTO `hhc_city` VALUES ('717', '昆都仑区', '60', '0');
INSERT INTO `hhc_city` VALUES ('718', '青山区', '60', '0');
INSERT INTO `hhc_city` VALUES ('719', '石拐区', '60', '0');
INSERT INTO `hhc_city` VALUES ('720', '白云矿区', '60', '0');
INSERT INTO `hhc_city` VALUES ('721', '九原区', '60', '0');
INSERT INTO `hhc_city` VALUES ('722', '土默特右旗', '60', '0');
INSERT INTO `hhc_city` VALUES ('723', '固阳县', '60', '0');
INSERT INTO `hhc_city` VALUES ('724', '达尔罕茂明安联合旗', '60', '0');
INSERT INTO `hhc_city` VALUES ('725', '海勃湾区', '61', '0');
INSERT INTO `hhc_city` VALUES ('726', '海南区', '61', '0');
INSERT INTO `hhc_city` VALUES ('727', '乌达区', '61', '0');
INSERT INTO `hhc_city` VALUES ('728', '红山区', '62', '0');
INSERT INTO `hhc_city` VALUES ('729', '元宝山区', '62', '0');
INSERT INTO `hhc_city` VALUES ('730', '松山区', '62', '0');
INSERT INTO `hhc_city` VALUES ('731', '阿鲁科尔沁旗', '62', '0');
INSERT INTO `hhc_city` VALUES ('732', '巴林左旗', '62', '0');
INSERT INTO `hhc_city` VALUES ('733', '巴林右旗', '62', '0');
INSERT INTO `hhc_city` VALUES ('734', '林西县', '62', '0');
INSERT INTO `hhc_city` VALUES ('735', '克什克腾旗', '62', '0');
INSERT INTO `hhc_city` VALUES ('736', '翁牛特旗', '62', '0');
INSERT INTO `hhc_city` VALUES ('737', '喀喇沁旗', '62', '0');
INSERT INTO `hhc_city` VALUES ('738', '宁城县', '62', '0');
INSERT INTO `hhc_city` VALUES ('739', '敖汉旗', '62', '0');
INSERT INTO `hhc_city` VALUES ('740', '科尔沁区', '63', '0');
INSERT INTO `hhc_city` VALUES ('741', '科尔沁左翼中旗', '63', '0');
INSERT INTO `hhc_city` VALUES ('742', '科尔沁左翼后旗', '63', '0');
INSERT INTO `hhc_city` VALUES ('743', '开鲁县', '63', '0');
INSERT INTO `hhc_city` VALUES ('744', '库伦旗', '63', '0');
INSERT INTO `hhc_city` VALUES ('745', '奈曼旗', '63', '0');
INSERT INTO `hhc_city` VALUES ('746', '扎鲁特旗', '63', '0');
INSERT INTO `hhc_city` VALUES ('747', '霍林郭勒市', '63', '0');
INSERT INTO `hhc_city` VALUES ('748', '东胜区', '64', '0');
INSERT INTO `hhc_city` VALUES ('749', '达拉特旗', '64', '0');
INSERT INTO `hhc_city` VALUES ('750', '准格尔旗', '64', '0');
INSERT INTO `hhc_city` VALUES ('751', '鄂托克前旗', '64', '0');
INSERT INTO `hhc_city` VALUES ('752', '鄂托克旗', '64', '0');
INSERT INTO `hhc_city` VALUES ('753', '杭锦旗', '64', '0');
INSERT INTO `hhc_city` VALUES ('754', '乌审旗', '64', '0');
INSERT INTO `hhc_city` VALUES ('755', '伊金霍洛旗', '64', '0');
INSERT INTO `hhc_city` VALUES ('756', '海拉尔区', '65', '0');
INSERT INTO `hhc_city` VALUES ('757', '阿荣旗', '65', '0');
INSERT INTO `hhc_city` VALUES ('758', '莫力达瓦达斡尔族自治旗', '65', '0');
INSERT INTO `hhc_city` VALUES ('759', '鄂伦春自治旗', '65', '0');
INSERT INTO `hhc_city` VALUES ('760', '鄂温克族自治旗', '65', '0');
INSERT INTO `hhc_city` VALUES ('761', '陈巴尔虎旗', '65', '0');
INSERT INTO `hhc_city` VALUES ('762', '新巴尔虎左旗', '65', '0');
INSERT INTO `hhc_city` VALUES ('763', '新巴尔虎右旗', '65', '0');
INSERT INTO `hhc_city` VALUES ('764', '满洲里市', '65', '0');
INSERT INTO `hhc_city` VALUES ('765', '牙克石市', '65', '0');
INSERT INTO `hhc_city` VALUES ('766', '扎兰屯市', '65', '0');
INSERT INTO `hhc_city` VALUES ('767', '额尔古纳市', '65', '0');
INSERT INTO `hhc_city` VALUES ('768', '根河市', '65', '0');
INSERT INTO `hhc_city` VALUES ('769', '临河区', '66', '0');
INSERT INTO `hhc_city` VALUES ('770', '五原县', '66', '0');
INSERT INTO `hhc_city` VALUES ('771', '磴口县', '66', '0');
INSERT INTO `hhc_city` VALUES ('772', '乌拉特前旗', '66', '0');
INSERT INTO `hhc_city` VALUES ('773', '乌拉特中旗', '66', '0');
INSERT INTO `hhc_city` VALUES ('774', '乌拉特后旗', '66', '0');
INSERT INTO `hhc_city` VALUES ('775', '杭锦后旗', '66', '0');
INSERT INTO `hhc_city` VALUES ('776', '集宁区', '67', '0');
INSERT INTO `hhc_city` VALUES ('777', '卓资县', '67', '0');
INSERT INTO `hhc_city` VALUES ('778', '化德县', '67', '0');
INSERT INTO `hhc_city` VALUES ('779', '商都县', '67', '0');
INSERT INTO `hhc_city` VALUES ('780', '兴和县', '67', '0');
INSERT INTO `hhc_city` VALUES ('781', '凉城县', '67', '0');
INSERT INTO `hhc_city` VALUES ('782', '察哈尔右翼前旗', '67', '0');
INSERT INTO `hhc_city` VALUES ('783', '察哈尔右翼中旗', '67', '0');
INSERT INTO `hhc_city` VALUES ('784', '察哈尔右翼后旗', '67', '0');
INSERT INTO `hhc_city` VALUES ('785', '四子王旗', '67', '0');
INSERT INTO `hhc_city` VALUES ('786', '丰镇市', '67', '0');
INSERT INTO `hhc_city` VALUES ('787', '乌兰浩特市', '68', '0');
INSERT INTO `hhc_city` VALUES ('788', '阿尔山市', '68', '0');
INSERT INTO `hhc_city` VALUES ('789', '科尔沁右翼前旗', '68', '0');
INSERT INTO `hhc_city` VALUES ('790', '科尔沁右翼中旗', '68', '0');
INSERT INTO `hhc_city` VALUES ('791', '扎赉特旗', '68', '0');
INSERT INTO `hhc_city` VALUES ('792', '突泉县', '68', '0');
INSERT INTO `hhc_city` VALUES ('793', '二连浩特市', '69', '0');
INSERT INTO `hhc_city` VALUES ('794', '锡林浩特市', '69', '0');
INSERT INTO `hhc_city` VALUES ('795', '阿巴嘎旗', '69', '0');
INSERT INTO `hhc_city` VALUES ('796', '苏尼特左旗', '69', '0');
INSERT INTO `hhc_city` VALUES ('797', '苏尼特右旗', '69', '0');
INSERT INTO `hhc_city` VALUES ('798', '东乌珠穆沁旗', '69', '0');
INSERT INTO `hhc_city` VALUES ('799', '西乌珠穆沁旗', '69', '0');
INSERT INTO `hhc_city` VALUES ('800', '太仆寺旗', '69', '0');
INSERT INTO `hhc_city` VALUES ('801', '镶黄旗', '69', '0');
INSERT INTO `hhc_city` VALUES ('802', '正镶白旗', '69', '0');
INSERT INTO `hhc_city` VALUES ('803', '正蓝旗', '69', '0');
INSERT INTO `hhc_city` VALUES ('804', '多伦县', '69', '0');
INSERT INTO `hhc_city` VALUES ('805', '阿拉善左旗', '70', '0');
INSERT INTO `hhc_city` VALUES ('806', '阿拉善右旗', '70', '0');
INSERT INTO `hhc_city` VALUES ('807', '额济纳旗', '70', '0');
INSERT INTO `hhc_city` VALUES ('808', '和平区', '71', '0');
INSERT INTO `hhc_city` VALUES ('809', '沈河区', '71', '0');
INSERT INTO `hhc_city` VALUES ('810', '大东区', '71', '0');
INSERT INTO `hhc_city` VALUES ('811', '皇姑区', '71', '0');
INSERT INTO `hhc_city` VALUES ('812', '铁西区', '71', '0');
INSERT INTO `hhc_city` VALUES ('813', '苏家屯区', '71', '0');
INSERT INTO `hhc_city` VALUES ('814', '东陵区', '71', '0');
INSERT INTO `hhc_city` VALUES ('815', '新城子区', '71', '0');
INSERT INTO `hhc_city` VALUES ('816', '于洪区', '71', '0');
INSERT INTO `hhc_city` VALUES ('817', '辽中县', '71', '0');
INSERT INTO `hhc_city` VALUES ('818', '康平县', '71', '0');
INSERT INTO `hhc_city` VALUES ('819', '法库县', '71', '0');
INSERT INTO `hhc_city` VALUES ('820', '新民市', '71', '0');
INSERT INTO `hhc_city` VALUES ('821', '中山区', '72', '0');
INSERT INTO `hhc_city` VALUES ('822', '西岗区', '72', '0');
INSERT INTO `hhc_city` VALUES ('823', '沙河口区', '72', '0');
INSERT INTO `hhc_city` VALUES ('824', '甘井子区', '72', '0');
INSERT INTO `hhc_city` VALUES ('825', '旅顺口区', '72', '0');
INSERT INTO `hhc_city` VALUES ('826', '金州区', '72', '0');
INSERT INTO `hhc_city` VALUES ('827', '长海县', '72', '0');
INSERT INTO `hhc_city` VALUES ('828', '瓦房店市', '72', '0');
INSERT INTO `hhc_city` VALUES ('829', '普兰店市', '72', '0');
INSERT INTO `hhc_city` VALUES ('830', '庄河市', '72', '0');
INSERT INTO `hhc_city` VALUES ('831', '铁东区', '73', '0');
INSERT INTO `hhc_city` VALUES ('832', '铁西区', '73', '0');
INSERT INTO `hhc_city` VALUES ('833', '立山区', '73', '0');
INSERT INTO `hhc_city` VALUES ('834', '千山区', '73', '0');
INSERT INTO `hhc_city` VALUES ('835', '台安县', '73', '0');
INSERT INTO `hhc_city` VALUES ('836', '岫岩满族自治县', '73', '0');
INSERT INTO `hhc_city` VALUES ('837', '海城市', '73', '0');
INSERT INTO `hhc_city` VALUES ('838', '新抚区', '74', '0');
INSERT INTO `hhc_city` VALUES ('839', '东洲区', '74', '0');
INSERT INTO `hhc_city` VALUES ('840', '望花区', '74', '0');
INSERT INTO `hhc_city` VALUES ('841', '顺城区', '74', '0');
INSERT INTO `hhc_city` VALUES ('842', '抚顺县', '74', '0');
INSERT INTO `hhc_city` VALUES ('843', '新宾满族自治县', '74', '0');
INSERT INTO `hhc_city` VALUES ('844', '清原满族自治县', '74', '0');
INSERT INTO `hhc_city` VALUES ('845', '平山区', '75', '0');
INSERT INTO `hhc_city` VALUES ('846', '溪湖区', '75', '0');
INSERT INTO `hhc_city` VALUES ('847', '明山区', '75', '0');
INSERT INTO `hhc_city` VALUES ('848', '南芬区', '75', '0');
INSERT INTO `hhc_city` VALUES ('849', '本溪满族自治县', '75', '0');
INSERT INTO `hhc_city` VALUES ('850', '桓仁满族自治县', '75', '0');
INSERT INTO `hhc_city` VALUES ('851', '元宝区', '76', '0');
INSERT INTO `hhc_city` VALUES ('852', '振兴区', '76', '0');
INSERT INTO `hhc_city` VALUES ('853', '振安区', '76', '0');
INSERT INTO `hhc_city` VALUES ('854', '宽甸满族自治县', '76', '0');
INSERT INTO `hhc_city` VALUES ('855', '东港市', '76', '0');
INSERT INTO `hhc_city` VALUES ('856', '凤城市', '76', '0');
INSERT INTO `hhc_city` VALUES ('857', '古塔区', '77', '0');
INSERT INTO `hhc_city` VALUES ('858', '凌河区', '77', '0');
INSERT INTO `hhc_city` VALUES ('859', '太和区', '77', '0');
INSERT INTO `hhc_city` VALUES ('860', '黑山县', '77', '0');
INSERT INTO `hhc_city` VALUES ('861', '义县', '77', '0');
INSERT INTO `hhc_city` VALUES ('862', '凌海市', '77', '0');
INSERT INTO `hhc_city` VALUES ('863', '北宁市', '77', '0');
INSERT INTO `hhc_city` VALUES ('864', '站前区', '78', '0');
INSERT INTO `hhc_city` VALUES ('865', '西市区', '78', '0');
INSERT INTO `hhc_city` VALUES ('866', '鲅鱼圈区', '78', '0');
INSERT INTO `hhc_city` VALUES ('867', '老边区', '78', '0');
INSERT INTO `hhc_city` VALUES ('868', '盖州市', '78', '0');
INSERT INTO `hhc_city` VALUES ('869', '大石桥市', '78', '0');
INSERT INTO `hhc_city` VALUES ('870', '海州区', '79', '0');
INSERT INTO `hhc_city` VALUES ('871', '新邱区', '79', '0');
INSERT INTO `hhc_city` VALUES ('872', '太平区', '79', '0');
INSERT INTO `hhc_city` VALUES ('873', '清河门区', '79', '0');
INSERT INTO `hhc_city` VALUES ('874', '细河区', '79', '0');
INSERT INTO `hhc_city` VALUES ('875', '阜新蒙古族自治县', '79', '0');
INSERT INTO `hhc_city` VALUES ('876', '彰武县', '79', '0');
INSERT INTO `hhc_city` VALUES ('877', '白塔区', '80', '0');
INSERT INTO `hhc_city` VALUES ('878', '文圣区', '80', '0');
INSERT INTO `hhc_city` VALUES ('879', '宏伟区', '80', '0');
INSERT INTO `hhc_city` VALUES ('880', '弓长岭区', '80', '0');
INSERT INTO `hhc_city` VALUES ('881', '太子河区', '80', '0');
INSERT INTO `hhc_city` VALUES ('882', '辽阳县', '80', '0');
INSERT INTO `hhc_city` VALUES ('883', '灯塔市', '80', '0');
INSERT INTO `hhc_city` VALUES ('884', '双台子区', '81', '0');
INSERT INTO `hhc_city` VALUES ('885', '兴隆台区', '81', '0');
INSERT INTO `hhc_city` VALUES ('886', '大洼县', '81', '0');
INSERT INTO `hhc_city` VALUES ('887', '盘山县', '81', '0');
INSERT INTO `hhc_city` VALUES ('888', '银州区', '82', '0');
INSERT INTO `hhc_city` VALUES ('889', '清河区', '82', '0');
INSERT INTO `hhc_city` VALUES ('890', '铁岭县', '82', '0');
INSERT INTO `hhc_city` VALUES ('891', '西丰县', '82', '0');
INSERT INTO `hhc_city` VALUES ('892', '昌图县', '82', '0');
INSERT INTO `hhc_city` VALUES ('893', '调兵山市', '82', '0');
INSERT INTO `hhc_city` VALUES ('894', '开原市', '82', '0');
INSERT INTO `hhc_city` VALUES ('895', '双塔区', '83', '0');
INSERT INTO `hhc_city` VALUES ('896', '龙城区', '83', '0');
INSERT INTO `hhc_city` VALUES ('897', '朝阳县', '83', '0');
INSERT INTO `hhc_city` VALUES ('898', '建平县', '83', '0');
INSERT INTO `hhc_city` VALUES ('899', '喀喇沁左翼蒙古族自治县', '83', '0');
INSERT INTO `hhc_city` VALUES ('900', '北票市', '83', '0');
INSERT INTO `hhc_city` VALUES ('901', '凌源市', '83', '0');
INSERT INTO `hhc_city` VALUES ('902', '连山区', '84', '0');
INSERT INTO `hhc_city` VALUES ('903', '龙港区', '84', '0');
INSERT INTO `hhc_city` VALUES ('904', '南票区', '84', '0');
INSERT INTO `hhc_city` VALUES ('905', '绥中县', '84', '0');
INSERT INTO `hhc_city` VALUES ('906', '建昌县', '84', '0');
INSERT INTO `hhc_city` VALUES ('907', '兴城市', '84', '0');
INSERT INTO `hhc_city` VALUES ('908', '南关区', '85', '0');
INSERT INTO `hhc_city` VALUES ('909', '宽城区', '85', '0');
INSERT INTO `hhc_city` VALUES ('910', '朝阳区', '85', '0');
INSERT INTO `hhc_city` VALUES ('911', '二道区', '85', '0');
INSERT INTO `hhc_city` VALUES ('912', '绿园区', '85', '0');
INSERT INTO `hhc_city` VALUES ('913', '双阳区', '85', '0');
INSERT INTO `hhc_city` VALUES ('914', '农安县', '85', '0');
INSERT INTO `hhc_city` VALUES ('915', '九台市', '85', '0');
INSERT INTO `hhc_city` VALUES ('916', '榆树市', '85', '0');
INSERT INTO `hhc_city` VALUES ('917', '德惠市', '85', '0');
INSERT INTO `hhc_city` VALUES ('918', '昌邑区', '86', '0');
INSERT INTO `hhc_city` VALUES ('919', '龙潭区', '86', '0');
INSERT INTO `hhc_city` VALUES ('920', '船营区', '86', '0');
INSERT INTO `hhc_city` VALUES ('921', '丰满区', '86', '0');
INSERT INTO `hhc_city` VALUES ('922', '永吉县', '86', '0');
INSERT INTO `hhc_city` VALUES ('923', '蛟河市', '86', '0');
INSERT INTO `hhc_city` VALUES ('924', '桦甸市', '86', '0');
INSERT INTO `hhc_city` VALUES ('925', '舒兰市', '86', '0');
INSERT INTO `hhc_city` VALUES ('926', '磐石市', '86', '0');
INSERT INTO `hhc_city` VALUES ('927', '铁西区', '87', '0');
INSERT INTO `hhc_city` VALUES ('928', '铁东区', '87', '0');
INSERT INTO `hhc_city` VALUES ('929', '梨树县', '87', '0');
INSERT INTO `hhc_city` VALUES ('930', '伊通满族自治县', '87', '0');
INSERT INTO `hhc_city` VALUES ('931', '公主岭市', '87', '0');
INSERT INTO `hhc_city` VALUES ('932', '双辽市', '87', '0');
INSERT INTO `hhc_city` VALUES ('933', '龙山区', '88', '0');
INSERT INTO `hhc_city` VALUES ('934', '西安区', '88', '0');
INSERT INTO `hhc_city` VALUES ('935', '东丰县', '88', '0');
INSERT INTO `hhc_city` VALUES ('936', '东辽县', '88', '0');
INSERT INTO `hhc_city` VALUES ('937', '东昌区', '89', '0');
INSERT INTO `hhc_city` VALUES ('938', '二道江区', '89', '0');
INSERT INTO `hhc_city` VALUES ('939', '通化县', '89', '0');
INSERT INTO `hhc_city` VALUES ('940', '辉南县', '89', '0');
INSERT INTO `hhc_city` VALUES ('941', '柳河县', '89', '0');
INSERT INTO `hhc_city` VALUES ('942', '梅河口市', '89', '0');
INSERT INTO `hhc_city` VALUES ('943', '集安市', '89', '0');
INSERT INTO `hhc_city` VALUES ('944', '八道江区', '90', '0');
INSERT INTO `hhc_city` VALUES ('945', '抚松县', '90', '0');
INSERT INTO `hhc_city` VALUES ('946', '靖宇县', '90', '0');
INSERT INTO `hhc_city` VALUES ('947', '长白朝鲜族自治县', '90', '0');
INSERT INTO `hhc_city` VALUES ('948', '江源县', '90', '0');
INSERT INTO `hhc_city` VALUES ('949', '临江市', '90', '0');
INSERT INTO `hhc_city` VALUES ('950', '宁江区', '91', '0');
INSERT INTO `hhc_city` VALUES ('951', '前郭尔罗斯蒙古族自治县', '91', '0');
INSERT INTO `hhc_city` VALUES ('952', '长岭县', '91', '0');
INSERT INTO `hhc_city` VALUES ('953', '乾安县', '91', '0');
INSERT INTO `hhc_city` VALUES ('954', '扶余县', '91', '0');
INSERT INTO `hhc_city` VALUES ('955', '洮北区', '92', '0');
INSERT INTO `hhc_city` VALUES ('956', '镇赉县', '92', '0');
INSERT INTO `hhc_city` VALUES ('957', '通榆县', '92', '0');
INSERT INTO `hhc_city` VALUES ('958', '洮南市', '92', '0');
INSERT INTO `hhc_city` VALUES ('959', '大安市', '92', '0');
INSERT INTO `hhc_city` VALUES ('960', '延吉市', '93', '0');
INSERT INTO `hhc_city` VALUES ('961', '图们市', '93', '0');
INSERT INTO `hhc_city` VALUES ('962', '敦化市', '93', '0');
INSERT INTO `hhc_city` VALUES ('963', '珲春市', '93', '0');
INSERT INTO `hhc_city` VALUES ('964', '龙井市', '93', '0');
INSERT INTO `hhc_city` VALUES ('965', '和龙市', '93', '0');
INSERT INTO `hhc_city` VALUES ('966', '汪清县', '93', '0');
INSERT INTO `hhc_city` VALUES ('967', '安图县', '93', '0');
INSERT INTO `hhc_city` VALUES ('968', '道里区', '94', '0');
INSERT INTO `hhc_city` VALUES ('969', '南岗区', '94', '0');
INSERT INTO `hhc_city` VALUES ('970', '道外区', '94', '0');
INSERT INTO `hhc_city` VALUES ('971', '香坊区', '94', '0');
INSERT INTO `hhc_city` VALUES ('972', '动力区', '94', '0');
INSERT INTO `hhc_city` VALUES ('973', '平房区', '94', '0');
INSERT INTO `hhc_city` VALUES ('974', '松北区', '94', '0');
INSERT INTO `hhc_city` VALUES ('975', '呼兰区', '94', '0');
INSERT INTO `hhc_city` VALUES ('976', '依兰县', '94', '0');
INSERT INTO `hhc_city` VALUES ('977', '方正县', '94', '0');
INSERT INTO `hhc_city` VALUES ('978', '宾县', '94', '0');
INSERT INTO `hhc_city` VALUES ('979', '巴彦县', '94', '0');
INSERT INTO `hhc_city` VALUES ('980', '木兰县', '94', '0');
INSERT INTO `hhc_city` VALUES ('981', '通河县', '94', '0');
INSERT INTO `hhc_city` VALUES ('982', '延寿县', '94', '0');
INSERT INTO `hhc_city` VALUES ('983', '阿城市', '94', '0');
INSERT INTO `hhc_city` VALUES ('984', '双城市', '94', '0');
INSERT INTO `hhc_city` VALUES ('985', '尚志市', '94', '0');
INSERT INTO `hhc_city` VALUES ('986', '五常市', '94', '0');
INSERT INTO `hhc_city` VALUES ('987', '龙沙区', '95', '0');
INSERT INTO `hhc_city` VALUES ('988', '建华区', '95', '0');
INSERT INTO `hhc_city` VALUES ('989', '铁锋区', '95', '0');
INSERT INTO `hhc_city` VALUES ('990', '昂昂溪区', '95', '0');
INSERT INTO `hhc_city` VALUES ('991', '富拉尔基区', '95', '0');
INSERT INTO `hhc_city` VALUES ('992', '碾子山区', '95', '0');
INSERT INTO `hhc_city` VALUES ('993', '梅里斯达斡尔族区', '95', '0');
INSERT INTO `hhc_city` VALUES ('994', '龙江县', '95', '0');
INSERT INTO `hhc_city` VALUES ('995', '依安县', '95', '0');
INSERT INTO `hhc_city` VALUES ('996', '泰来县', '95', '0');
INSERT INTO `hhc_city` VALUES ('997', '甘南县', '95', '0');
INSERT INTO `hhc_city` VALUES ('998', '富裕县', '95', '0');
INSERT INTO `hhc_city` VALUES ('999', '克山县', '95', '0');
INSERT INTO `hhc_city` VALUES ('1000', '克东县', '95', '0');
INSERT INTO `hhc_city` VALUES ('1001', '拜泉县', '95', '0');
INSERT INTO `hhc_city` VALUES ('1002', '讷河市', '95', '0');
INSERT INTO `hhc_city` VALUES ('1003', '鸡冠区', '96', '0');
INSERT INTO `hhc_city` VALUES ('1004', '恒山区', '96', '0');
INSERT INTO `hhc_city` VALUES ('1005', '滴道区', '96', '0');
INSERT INTO `hhc_city` VALUES ('1006', '梨树区', '96', '0');
INSERT INTO `hhc_city` VALUES ('1007', '城子河区', '96', '0');
INSERT INTO `hhc_city` VALUES ('1008', '麻山区', '96', '0');
INSERT INTO `hhc_city` VALUES ('1009', '鸡东县', '96', '0');
INSERT INTO `hhc_city` VALUES ('1010', '虎林市', '96', '0');
INSERT INTO `hhc_city` VALUES ('1011', '密山市', '96', '0');
INSERT INTO `hhc_city` VALUES ('1012', '向阳区', '97', '0');
INSERT INTO `hhc_city` VALUES ('1013', '工农区', '97', '0');
INSERT INTO `hhc_city` VALUES ('1014', '南山区', '97', '0');
INSERT INTO `hhc_city` VALUES ('1015', '兴安区', '97', '0');
INSERT INTO `hhc_city` VALUES ('1016', '东山区', '97', '0');
INSERT INTO `hhc_city` VALUES ('1017', '兴山区', '97', '0');
INSERT INTO `hhc_city` VALUES ('1018', '萝北县', '97', '0');
INSERT INTO `hhc_city` VALUES ('1019', '绥滨县', '97', '0');
INSERT INTO `hhc_city` VALUES ('1020', '尖山区', '98', '0');
INSERT INTO `hhc_city` VALUES ('1021', '岭东区', '98', '0');
INSERT INTO `hhc_city` VALUES ('1022', '四方台区', '98', '0');
INSERT INTO `hhc_city` VALUES ('1023', '宝山区', '98', '0');
INSERT INTO `hhc_city` VALUES ('1024', '集贤县', '98', '0');
INSERT INTO `hhc_city` VALUES ('1025', '友谊县', '98', '0');
INSERT INTO `hhc_city` VALUES ('1026', '宝清县', '98', '0');
INSERT INTO `hhc_city` VALUES ('1027', '饶河县', '98', '0');
INSERT INTO `hhc_city` VALUES ('1028', '萨尔图区', '99', '0');
INSERT INTO `hhc_city` VALUES ('1029', '龙凤区', '99', '0');
INSERT INTO `hhc_city` VALUES ('1030', '让胡路区', '99', '0');
INSERT INTO `hhc_city` VALUES ('1031', '红岗区', '99', '0');
INSERT INTO `hhc_city` VALUES ('1032', '大同区', '99', '0');
INSERT INTO `hhc_city` VALUES ('1033', '肇州县', '99', '0');
INSERT INTO `hhc_city` VALUES ('1034', '肇源县', '99', '0');
INSERT INTO `hhc_city` VALUES ('1035', '林甸县', '99', '0');
INSERT INTO `hhc_city` VALUES ('1036', '杜尔伯特蒙古族自治县', '99', '0');
INSERT INTO `hhc_city` VALUES ('1037', '伊春区', '100', '0');
INSERT INTO `hhc_city` VALUES ('1038', '南岔区', '100', '0');
INSERT INTO `hhc_city` VALUES ('1039', '友好区', '100', '0');
INSERT INTO `hhc_city` VALUES ('1040', '西林区', '100', '0');
INSERT INTO `hhc_city` VALUES ('1041', '翠峦区', '100', '0');
INSERT INTO `hhc_city` VALUES ('1042', '新青区', '100', '0');
INSERT INTO `hhc_city` VALUES ('1043', '美溪区', '100', '0');
INSERT INTO `hhc_city` VALUES ('1044', '金山屯区', '100', '0');
INSERT INTO `hhc_city` VALUES ('1045', '五营区', '100', '0');
INSERT INTO `hhc_city` VALUES ('1046', '乌马河区', '100', '0');
INSERT INTO `hhc_city` VALUES ('1047', '汤旺河区', '100', '0');
INSERT INTO `hhc_city` VALUES ('1048', '带岭区', '100', '0');
INSERT INTO `hhc_city` VALUES ('1049', '乌伊岭区', '100', '0');
INSERT INTO `hhc_city` VALUES ('1050', '红星区', '100', '0');
INSERT INTO `hhc_city` VALUES ('1051', '上甘岭区', '100', '0');
INSERT INTO `hhc_city` VALUES ('1052', '嘉荫县', '100', '0');
INSERT INTO `hhc_city` VALUES ('1053', '铁力市', '100', '0');
INSERT INTO `hhc_city` VALUES ('1054', '永红区', '101', '0');
INSERT INTO `hhc_city` VALUES ('1055', '向阳区', '101', '0');
INSERT INTO `hhc_city` VALUES ('1056', '前进区', '101', '0');
INSERT INTO `hhc_city` VALUES ('1057', '东风区', '101', '0');
INSERT INTO `hhc_city` VALUES ('1058', '郊区', '101', '0');
INSERT INTO `hhc_city` VALUES ('1059', '桦南县', '101', '0');
INSERT INTO `hhc_city` VALUES ('1060', '桦川县', '101', '0');
INSERT INTO `hhc_city` VALUES ('1061', '汤原县', '101', '0');
INSERT INTO `hhc_city` VALUES ('1062', '抚远县', '101', '0');
INSERT INTO `hhc_city` VALUES ('1063', '同江市', '101', '0');
INSERT INTO `hhc_city` VALUES ('1064', '富锦市', '101', '0');
INSERT INTO `hhc_city` VALUES ('1065', '新兴区', '102', '0');
INSERT INTO `hhc_city` VALUES ('1066', '桃山区', '102', '0');
INSERT INTO `hhc_city` VALUES ('1067', '茄子河区', '102', '0');
INSERT INTO `hhc_city` VALUES ('1068', '勃利县', '102', '0');
INSERT INTO `hhc_city` VALUES ('1069', '东安区', '103', '0');
INSERT INTO `hhc_city` VALUES ('1070', '阳明区', '103', '0');
INSERT INTO `hhc_city` VALUES ('1071', '爱民区', '103', '0');
INSERT INTO `hhc_city` VALUES ('1072', '西安区', '103', '0');
INSERT INTO `hhc_city` VALUES ('1073', '东宁县', '103', '0');
INSERT INTO `hhc_city` VALUES ('1074', '林口县', '103', '0');
INSERT INTO `hhc_city` VALUES ('1075', '绥芬河市', '103', '0');
INSERT INTO `hhc_city` VALUES ('1076', '海林市', '103', '0');
INSERT INTO `hhc_city` VALUES ('1077', '宁安市', '103', '0');
INSERT INTO `hhc_city` VALUES ('1078', '穆棱市', '103', '0');
INSERT INTO `hhc_city` VALUES ('1079', '爱辉区', '104', '0');
INSERT INTO `hhc_city` VALUES ('1080', '嫩江县', '104', '0');
INSERT INTO `hhc_city` VALUES ('1081', '逊克县', '104', '0');
INSERT INTO `hhc_city` VALUES ('1082', '孙吴县', '104', '0');
INSERT INTO `hhc_city` VALUES ('1083', '北安市', '104', '0');
INSERT INTO `hhc_city` VALUES ('1084', '五大连池市', '104', '0');
INSERT INTO `hhc_city` VALUES ('1085', '北林区', '105', '0');
INSERT INTO `hhc_city` VALUES ('1086', '望奎县', '105', '0');
INSERT INTO `hhc_city` VALUES ('1087', '兰西县', '105', '0');
INSERT INTO `hhc_city` VALUES ('1088', '青冈县', '105', '0');
INSERT INTO `hhc_city` VALUES ('1089', '庆安县', '105', '0');
INSERT INTO `hhc_city` VALUES ('1090', '明水县', '105', '0');
INSERT INTO `hhc_city` VALUES ('1091', '绥棱县', '105', '0');
INSERT INTO `hhc_city` VALUES ('1092', '安达市', '105', '0');
INSERT INTO `hhc_city` VALUES ('1093', '肇东市', '105', '0');
INSERT INTO `hhc_city` VALUES ('1094', '海伦市', '105', '0');
INSERT INTO `hhc_city` VALUES ('1095', '呼玛县', '106', '0');
INSERT INTO `hhc_city` VALUES ('1096', '塔河县', '106', '0');
INSERT INTO `hhc_city` VALUES ('1097', '漠河县', '106', '0');
INSERT INTO `hhc_city` VALUES ('1098', '黄浦区', '107', '0');
INSERT INTO `hhc_city` VALUES ('1099', '卢湾区', '107', '0');
INSERT INTO `hhc_city` VALUES ('1100', '徐汇区', '107', '0');
INSERT INTO `hhc_city` VALUES ('1101', '长宁区', '107', '0');
INSERT INTO `hhc_city` VALUES ('1102', '静安区', '107', '0');
INSERT INTO `hhc_city` VALUES ('1103', '普陀区', '107', '0');
INSERT INTO `hhc_city` VALUES ('1104', '闸北区', '107', '0');
INSERT INTO `hhc_city` VALUES ('1105', '虹口区', '107', '0');
INSERT INTO `hhc_city` VALUES ('1106', '杨浦区', '107', '0');
INSERT INTO `hhc_city` VALUES ('1107', '闵行区', '107', '0');
INSERT INTO `hhc_city` VALUES ('1108', '宝山区', '107', '0');
INSERT INTO `hhc_city` VALUES ('1109', '嘉定区', '107', '0');
INSERT INTO `hhc_city` VALUES ('1110', '浦东新区', '107', '0');
INSERT INTO `hhc_city` VALUES ('1111', '金山区', '107', '0');
INSERT INTO `hhc_city` VALUES ('1112', '松江区', '107', '0');
INSERT INTO `hhc_city` VALUES ('1113', '青浦区', '107', '0');
INSERT INTO `hhc_city` VALUES ('1114', '南汇区', '107', '0');
INSERT INTO `hhc_city` VALUES ('1115', '奉贤区', '107', '0');
INSERT INTO `hhc_city` VALUES ('1116', '崇明县', '107', '0');
INSERT INTO `hhc_city` VALUES ('1117', '玄武区', '108', '0');
INSERT INTO `hhc_city` VALUES ('1118', '白下区', '108', '0');
INSERT INTO `hhc_city` VALUES ('1119', '秦淮区', '108', '0');
INSERT INTO `hhc_city` VALUES ('1120', '建邺区', '108', '0');
INSERT INTO `hhc_city` VALUES ('1121', '鼓楼区', '108', '0');
INSERT INTO `hhc_city` VALUES ('1122', '下关区', '108', '0');
INSERT INTO `hhc_city` VALUES ('1123', '浦口区', '108', '0');
INSERT INTO `hhc_city` VALUES ('1124', '栖霞区', '108', '0');
INSERT INTO `hhc_city` VALUES ('1125', '雨花台区', '108', '0');
INSERT INTO `hhc_city` VALUES ('1126', '江宁区', '108', '0');
INSERT INTO `hhc_city` VALUES ('1127', '六合区', '108', '0');
INSERT INTO `hhc_city` VALUES ('1128', '溧水县', '108', '0');
INSERT INTO `hhc_city` VALUES ('1129', '高淳县', '108', '0');
INSERT INTO `hhc_city` VALUES ('1130', '崇安区', '109', '0');
INSERT INTO `hhc_city` VALUES ('1131', '南长区', '109', '0');
INSERT INTO `hhc_city` VALUES ('1132', '北塘区', '109', '0');
INSERT INTO `hhc_city` VALUES ('1133', '锡山区', '109', '0');
INSERT INTO `hhc_city` VALUES ('1134', '惠山区', '109', '0');
INSERT INTO `hhc_city` VALUES ('1135', '滨湖区', '109', '0');
INSERT INTO `hhc_city` VALUES ('1136', '江阴市', '109', '0');
INSERT INTO `hhc_city` VALUES ('1137', '宜兴市', '109', '0');
INSERT INTO `hhc_city` VALUES ('1138', '鼓楼区', '110', '0');
INSERT INTO `hhc_city` VALUES ('1139', '云龙区', '110', '0');
INSERT INTO `hhc_city` VALUES ('1140', '九里区', '110', '0');
INSERT INTO `hhc_city` VALUES ('1141', '贾汪区', '110', '0');
INSERT INTO `hhc_city` VALUES ('1142', '泉山区', '110', '0');
INSERT INTO `hhc_city` VALUES ('1143', '丰县', '110', '0');
INSERT INTO `hhc_city` VALUES ('1144', '沛县', '110', '0');
INSERT INTO `hhc_city` VALUES ('1145', '铜山县', '110', '0');
INSERT INTO `hhc_city` VALUES ('1146', '睢宁县', '110', '0');
INSERT INTO `hhc_city` VALUES ('1147', '新沂市', '110', '0');
INSERT INTO `hhc_city` VALUES ('1148', '邳州市', '110', '0');
INSERT INTO `hhc_city` VALUES ('1149', '天宁区', '111', '0');
INSERT INTO `hhc_city` VALUES ('1150', '钟楼区', '111', '0');
INSERT INTO `hhc_city` VALUES ('1151', '戚墅堰区', '111', '0');
INSERT INTO `hhc_city` VALUES ('1152', '新北区', '111', '0');
INSERT INTO `hhc_city` VALUES ('1153', '武进区', '111', '0');
INSERT INTO `hhc_city` VALUES ('1154', '溧阳市', '111', '0');
INSERT INTO `hhc_city` VALUES ('1155', '金坛市', '111', '0');
INSERT INTO `hhc_city` VALUES ('1156', '沧浪区', '112', '0');
INSERT INTO `hhc_city` VALUES ('1157', '平江区', '112', '0');
INSERT INTO `hhc_city` VALUES ('1158', '金阊区', '112', '0');
INSERT INTO `hhc_city` VALUES ('1159', '虎丘区', '112', '0');
INSERT INTO `hhc_city` VALUES ('1160', '吴中区', '112', '0');
INSERT INTO `hhc_city` VALUES ('1161', '相城区', '112', '0');
INSERT INTO `hhc_city` VALUES ('1162', '常熟市', '112', '0');
INSERT INTO `hhc_city` VALUES ('1163', '张家港市', '112', '0');
INSERT INTO `hhc_city` VALUES ('1164', '昆山市', '112', '0');
INSERT INTO `hhc_city` VALUES ('1165', '吴江市', '112', '0');
INSERT INTO `hhc_city` VALUES ('1166', '太仓市', '112', '0');
INSERT INTO `hhc_city` VALUES ('1167', '崇川区', '113', '0');
INSERT INTO `hhc_city` VALUES ('1168', '港闸区', '113', '0');
INSERT INTO `hhc_city` VALUES ('1169', '海安县', '113', '0');
INSERT INTO `hhc_city` VALUES ('1170', '如东县', '113', '0');
INSERT INTO `hhc_city` VALUES ('1171', '启东市', '113', '0');
INSERT INTO `hhc_city` VALUES ('1172', '如皋市', '113', '0');
INSERT INTO `hhc_city` VALUES ('1173', '通州市', '113', '0');
INSERT INTO `hhc_city` VALUES ('1174', '海门市', '113', '0');
INSERT INTO `hhc_city` VALUES ('1175', '连云区', '114', '0');
INSERT INTO `hhc_city` VALUES ('1176', '新浦区', '114', '0');
INSERT INTO `hhc_city` VALUES ('1177', '海州区', '114', '0');
INSERT INTO `hhc_city` VALUES ('1178', '赣榆县', '114', '0');
INSERT INTO `hhc_city` VALUES ('1179', '东海县', '114', '0');
INSERT INTO `hhc_city` VALUES ('1180', '灌云县', '114', '0');
INSERT INTO `hhc_city` VALUES ('1181', '灌南县', '114', '0');
INSERT INTO `hhc_city` VALUES ('1182', '清河区', '115', '0');
INSERT INTO `hhc_city` VALUES ('1183', '楚州区', '115', '0');
INSERT INTO `hhc_city` VALUES ('1184', '淮阴区', '115', '0');
INSERT INTO `hhc_city` VALUES ('1185', '清浦区', '115', '0');
INSERT INTO `hhc_city` VALUES ('1186', '涟水县', '115', '0');
INSERT INTO `hhc_city` VALUES ('1187', '洪泽县', '115', '0');
INSERT INTO `hhc_city` VALUES ('1188', '盱眙县', '115', '0');
INSERT INTO `hhc_city` VALUES ('1189', '金湖县', '115', '0');
INSERT INTO `hhc_city` VALUES ('1190', '亭湖区', '116', '0');
INSERT INTO `hhc_city` VALUES ('1191', '盐都区', '116', '0');
INSERT INTO `hhc_city` VALUES ('1192', '响水县', '116', '0');
INSERT INTO `hhc_city` VALUES ('1193', '滨海县', '116', '0');
INSERT INTO `hhc_city` VALUES ('1194', '阜宁县', '116', '0');
INSERT INTO `hhc_city` VALUES ('1195', '射阳县', '116', '0');
INSERT INTO `hhc_city` VALUES ('1196', '建湖县', '116', '0');
INSERT INTO `hhc_city` VALUES ('1197', '东台市', '116', '0');
INSERT INTO `hhc_city` VALUES ('1198', '大丰市', '116', '0');
INSERT INTO `hhc_city` VALUES ('1199', '广陵区', '117', '0');
INSERT INTO `hhc_city` VALUES ('1200', '邗江区', '117', '0');
INSERT INTO `hhc_city` VALUES ('1201', '维扬区', '117', '0');
INSERT INTO `hhc_city` VALUES ('1202', '宝应县', '117', '0');
INSERT INTO `hhc_city` VALUES ('1203', '仪征市', '117', '0');
INSERT INTO `hhc_city` VALUES ('1204', '高邮市', '117', '0');
INSERT INTO `hhc_city` VALUES ('1205', '江都市', '117', '0');
INSERT INTO `hhc_city` VALUES ('1206', '京口区', '118', '0');
INSERT INTO `hhc_city` VALUES ('1207', '润州区', '118', '0');
INSERT INTO `hhc_city` VALUES ('1208', '丹徒区', '118', '0');
INSERT INTO `hhc_city` VALUES ('1209', '丹阳市', '118', '0');
INSERT INTO `hhc_city` VALUES ('1210', '扬中市', '118', '0');
INSERT INTO `hhc_city` VALUES ('1211', '句容市', '118', '0');
INSERT INTO `hhc_city` VALUES ('1212', '海陵区', '119', '0');
INSERT INTO `hhc_city` VALUES ('1213', '高港区', '119', '0');
INSERT INTO `hhc_city` VALUES ('1214', '兴化市', '119', '0');
INSERT INTO `hhc_city` VALUES ('1215', '靖江市', '119', '0');
INSERT INTO `hhc_city` VALUES ('1216', '泰兴市', '119', '0');
INSERT INTO `hhc_city` VALUES ('1217', '姜堰市', '119', '0');
INSERT INTO `hhc_city` VALUES ('1218', '宿城区', '120', '0');
INSERT INTO `hhc_city` VALUES ('1219', '宿豫区', '120', '0');
INSERT INTO `hhc_city` VALUES ('1220', '沭阳县', '120', '0');
INSERT INTO `hhc_city` VALUES ('1221', '泗阳县', '120', '0');
INSERT INTO `hhc_city` VALUES ('1222', '泗洪县', '120', '0');
INSERT INTO `hhc_city` VALUES ('1223', '上城区', '121', '0');
INSERT INTO `hhc_city` VALUES ('1224', '下城区', '121', '0');
INSERT INTO `hhc_city` VALUES ('1225', '江干区', '121', '0');
INSERT INTO `hhc_city` VALUES ('1226', '拱墅区', '121', '0');
INSERT INTO `hhc_city` VALUES ('1227', '西湖区', '121', '0');
INSERT INTO `hhc_city` VALUES ('1228', '滨江区', '121', '0');
INSERT INTO `hhc_city` VALUES ('1229', '萧山区', '121', '0');
INSERT INTO `hhc_city` VALUES ('1230', '余杭区', '121', '0');
INSERT INTO `hhc_city` VALUES ('1231', '桐庐县', '121', '0');
INSERT INTO `hhc_city` VALUES ('1232', '淳安县', '121', '0');
INSERT INTO `hhc_city` VALUES ('1233', '建德市', '121', '0');
INSERT INTO `hhc_city` VALUES ('1234', '富阳市', '121', '0');
INSERT INTO `hhc_city` VALUES ('1235', '临安市', '121', '0');
INSERT INTO `hhc_city` VALUES ('1236', '海曙区', '122', '0');
INSERT INTO `hhc_city` VALUES ('1237', '江东区', '122', '0');
INSERT INTO `hhc_city` VALUES ('1238', '江北区', '122', '0');
INSERT INTO `hhc_city` VALUES ('1239', '北仑区', '122', '0');
INSERT INTO `hhc_city` VALUES ('1240', '镇海区', '122', '0');
INSERT INTO `hhc_city` VALUES ('1241', '鄞州区', '122', '0');
INSERT INTO `hhc_city` VALUES ('1242', '象山县', '122', '0');
INSERT INTO `hhc_city` VALUES ('1243', '宁海县', '122', '0');
INSERT INTO `hhc_city` VALUES ('1244', '余姚市', '122', '0');
INSERT INTO `hhc_city` VALUES ('1245', '慈溪市', '122', '0');
INSERT INTO `hhc_city` VALUES ('1246', '奉化市', '122', '0');
INSERT INTO `hhc_city` VALUES ('1247', '鹿城区', '123', '0');
INSERT INTO `hhc_city` VALUES ('1248', '龙湾区', '123', '0');
INSERT INTO `hhc_city` VALUES ('1249', '瓯海区', '123', '0');
INSERT INTO `hhc_city` VALUES ('1250', '洞头县', '123', '0');
INSERT INTO `hhc_city` VALUES ('1251', '永嘉县', '123', '0');
INSERT INTO `hhc_city` VALUES ('1252', '平阳县', '123', '0');
INSERT INTO `hhc_city` VALUES ('1253', '苍南县', '123', '0');
INSERT INTO `hhc_city` VALUES ('1254', '文成县', '123', '0');
INSERT INTO `hhc_city` VALUES ('1255', '泰顺县', '123', '0');
INSERT INTO `hhc_city` VALUES ('1256', '瑞安市', '123', '0');
INSERT INTO `hhc_city` VALUES ('1257', '乐清市', '123', '0');
INSERT INTO `hhc_city` VALUES ('1258', '秀城区', '124', '0');
INSERT INTO `hhc_city` VALUES ('1259', '秀洲区', '124', '0');
INSERT INTO `hhc_city` VALUES ('1260', '嘉善县', '124', '0');
INSERT INTO `hhc_city` VALUES ('1261', '海盐县', '124', '0');
INSERT INTO `hhc_city` VALUES ('1262', '海宁市', '124', '0');
INSERT INTO `hhc_city` VALUES ('1263', '平湖市', '124', '0');
INSERT INTO `hhc_city` VALUES ('1264', '桐乡市', '124', '0');
INSERT INTO `hhc_city` VALUES ('1265', '吴兴区', '125', '0');
INSERT INTO `hhc_city` VALUES ('1266', '南浔区', '125', '0');
INSERT INTO `hhc_city` VALUES ('1267', '德清县', '125', '0');
INSERT INTO `hhc_city` VALUES ('1268', '长兴县', '125', '0');
INSERT INTO `hhc_city` VALUES ('1269', '安吉县', '125', '0');
INSERT INTO `hhc_city` VALUES ('1270', '越城区', '126', '0');
INSERT INTO `hhc_city` VALUES ('1271', '绍兴县', '126', '0');
INSERT INTO `hhc_city` VALUES ('1272', '新昌县', '126', '0');
INSERT INTO `hhc_city` VALUES ('1273', '诸暨市', '126', '0');
INSERT INTO `hhc_city` VALUES ('1274', '上虞市', '126', '0');
INSERT INTO `hhc_city` VALUES ('1275', '嵊州市', '126', '0');
INSERT INTO `hhc_city` VALUES ('1276', '婺城区', '127', '0');
INSERT INTO `hhc_city` VALUES ('1277', '金东区', '127', '0');
INSERT INTO `hhc_city` VALUES ('1278', '武义县', '127', '0');
INSERT INTO `hhc_city` VALUES ('1279', '浦江县', '127', '0');
INSERT INTO `hhc_city` VALUES ('1280', '磐安县', '127', '0');
INSERT INTO `hhc_city` VALUES ('1281', '兰溪市', '127', '0');
INSERT INTO `hhc_city` VALUES ('1282', '义乌市', '127', '0');
INSERT INTO `hhc_city` VALUES ('1283', '东阳市', '127', '0');
INSERT INTO `hhc_city` VALUES ('1284', '永康市', '127', '0');
INSERT INTO `hhc_city` VALUES ('1285', '柯城区', '128', '0');
INSERT INTO `hhc_city` VALUES ('1286', '衢江区', '128', '0');
INSERT INTO `hhc_city` VALUES ('1287', '常山县', '128', '0');
INSERT INTO `hhc_city` VALUES ('1288', '开化县', '128', '0');
INSERT INTO `hhc_city` VALUES ('1289', '龙游县', '128', '0');
INSERT INTO `hhc_city` VALUES ('1290', '江山市', '128', '0');
INSERT INTO `hhc_city` VALUES ('1291', '定海区', '129', '0');
INSERT INTO `hhc_city` VALUES ('1292', '普陀区', '129', '0');
INSERT INTO `hhc_city` VALUES ('1293', '岱山县', '129', '0');
INSERT INTO `hhc_city` VALUES ('1294', '嵊泗县', '129', '0');
INSERT INTO `hhc_city` VALUES ('1295', '椒江区', '130', '0');
INSERT INTO `hhc_city` VALUES ('1296', '黄岩区', '130', '0');
INSERT INTO `hhc_city` VALUES ('1297', '路桥区', '130', '0');
INSERT INTO `hhc_city` VALUES ('1298', '玉环县', '130', '0');
INSERT INTO `hhc_city` VALUES ('1299', '三门县', '130', '0');
INSERT INTO `hhc_city` VALUES ('1300', '天台县', '130', '0');
INSERT INTO `hhc_city` VALUES ('1301', '仙居县', '130', '0');
INSERT INTO `hhc_city` VALUES ('1302', '温岭市', '130', '0');
INSERT INTO `hhc_city` VALUES ('1303', '临海市', '130', '0');
INSERT INTO `hhc_city` VALUES ('1304', '莲都区', '131', '0');
INSERT INTO `hhc_city` VALUES ('1305', '青田县', '131', '0');
INSERT INTO `hhc_city` VALUES ('1306', '缙云县', '131', '0');
INSERT INTO `hhc_city` VALUES ('1307', '遂昌县', '131', '0');
INSERT INTO `hhc_city` VALUES ('1308', '松阳县', '131', '0');
INSERT INTO `hhc_city` VALUES ('1309', '云和县', '131', '0');
INSERT INTO `hhc_city` VALUES ('1310', '庆元县', '131', '0');
INSERT INTO `hhc_city` VALUES ('1311', '景宁畲族自治县', '131', '0');
INSERT INTO `hhc_city` VALUES ('1312', '龙泉市', '131', '0');
INSERT INTO `hhc_city` VALUES ('1313', '瑶海区', '132', '0');
INSERT INTO `hhc_city` VALUES ('1314', '庐阳区', '132', '0');
INSERT INTO `hhc_city` VALUES ('1315', '蜀山区', '132', '0');
INSERT INTO `hhc_city` VALUES ('1316', '包河区', '132', '0');
INSERT INTO `hhc_city` VALUES ('1317', '长丰县', '132', '0');
INSERT INTO `hhc_city` VALUES ('1318', '肥东县', '132', '0');
INSERT INTO `hhc_city` VALUES ('1319', '肥西县', '132', '0');
INSERT INTO `hhc_city` VALUES ('1320', '镜湖区', '133', '0');
INSERT INTO `hhc_city` VALUES ('1321', '马塘区', '133', '0');
INSERT INTO `hhc_city` VALUES ('1322', '新芜区', '133', '0');
INSERT INTO `hhc_city` VALUES ('1323', '鸠江区', '133', '0');
INSERT INTO `hhc_city` VALUES ('1324', '芜湖县', '133', '0');
INSERT INTO `hhc_city` VALUES ('1325', '繁昌县', '133', '0');
INSERT INTO `hhc_city` VALUES ('1326', '南陵县', '133', '0');
INSERT INTO `hhc_city` VALUES ('1327', '龙子湖区', '134', '0');
INSERT INTO `hhc_city` VALUES ('1328', '蚌山区', '134', '0');
INSERT INTO `hhc_city` VALUES ('1329', '禹会区', '134', '0');
INSERT INTO `hhc_city` VALUES ('1330', '淮上区', '134', '0');
INSERT INTO `hhc_city` VALUES ('1331', '怀远县', '134', '0');
INSERT INTO `hhc_city` VALUES ('1332', '五河县', '134', '0');
INSERT INTO `hhc_city` VALUES ('1333', '固镇县', '134', '0');
INSERT INTO `hhc_city` VALUES ('1334', '大通区', '135', '0');
INSERT INTO `hhc_city` VALUES ('1335', '田家庵区', '135', '0');
INSERT INTO `hhc_city` VALUES ('1336', '谢家集区', '135', '0');
INSERT INTO `hhc_city` VALUES ('1337', '八公山区', '135', '0');
INSERT INTO `hhc_city` VALUES ('1338', '潘集区', '135', '0');
INSERT INTO `hhc_city` VALUES ('1339', '凤台县', '135', '0');
INSERT INTO `hhc_city` VALUES ('1340', '金家庄区', '136', '0');
INSERT INTO `hhc_city` VALUES ('1341', '花山区', '136', '0');
INSERT INTO `hhc_city` VALUES ('1342', '雨山区', '136', '0');
INSERT INTO `hhc_city` VALUES ('1343', '当涂县', '136', '0');
INSERT INTO `hhc_city` VALUES ('1344', '杜集区', '137', '0');
INSERT INTO `hhc_city` VALUES ('1345', '相山区', '137', '0');
INSERT INTO `hhc_city` VALUES ('1346', '烈山区', '137', '0');
INSERT INTO `hhc_city` VALUES ('1347', '濉溪县', '137', '0');
INSERT INTO `hhc_city` VALUES ('1348', '铜官山区', '138', '0');
INSERT INTO `hhc_city` VALUES ('1349', '狮子山区', '138', '0');
INSERT INTO `hhc_city` VALUES ('1350', '郊区', '138', '0');
INSERT INTO `hhc_city` VALUES ('1351', '铜陵县', '138', '0');
INSERT INTO `hhc_city` VALUES ('1352', '迎江区', '139', '0');
INSERT INTO `hhc_city` VALUES ('1353', '大观区', '139', '0');
INSERT INTO `hhc_city` VALUES ('1354', '郊区', '139', '0');
INSERT INTO `hhc_city` VALUES ('1355', '怀宁县', '139', '0');
INSERT INTO `hhc_city` VALUES ('1356', '枞阳县', '139', '0');
INSERT INTO `hhc_city` VALUES ('1357', '潜山县', '139', '0');
INSERT INTO `hhc_city` VALUES ('1358', '太湖县', '139', '0');
INSERT INTO `hhc_city` VALUES ('1359', '宿松县', '139', '0');
INSERT INTO `hhc_city` VALUES ('1360', '望江县', '139', '0');
INSERT INTO `hhc_city` VALUES ('1361', '岳西县', '139', '0');
INSERT INTO `hhc_city` VALUES ('1362', '桐城市', '139', '0');
INSERT INTO `hhc_city` VALUES ('1363', '屯溪区', '140', '0');
INSERT INTO `hhc_city` VALUES ('1364', '黄山区', '140', '0');
INSERT INTO `hhc_city` VALUES ('1365', '徽州区', '140', '0');
INSERT INTO `hhc_city` VALUES ('1366', '歙县', '140', '0');
INSERT INTO `hhc_city` VALUES ('1367', '休宁县', '140', '0');
INSERT INTO `hhc_city` VALUES ('1368', '黟县', '140', '0');
INSERT INTO `hhc_city` VALUES ('1369', '祁门县', '140', '0');
INSERT INTO `hhc_city` VALUES ('1370', '琅琊区', '141', '0');
INSERT INTO `hhc_city` VALUES ('1371', '南谯区', '141', '0');
INSERT INTO `hhc_city` VALUES ('1372', '来安县', '141', '0');
INSERT INTO `hhc_city` VALUES ('1373', '全椒县', '141', '0');
INSERT INTO `hhc_city` VALUES ('1374', '定远县', '141', '0');
INSERT INTO `hhc_city` VALUES ('1375', '凤阳县', '141', '0');
INSERT INTO `hhc_city` VALUES ('1376', '天长市', '141', '0');
INSERT INTO `hhc_city` VALUES ('1377', '明光市', '141', '0');
INSERT INTO `hhc_city` VALUES ('1378', '颍州区', '142', '0');
INSERT INTO `hhc_city` VALUES ('1379', '颍东区', '142', '0');
INSERT INTO `hhc_city` VALUES ('1380', '颍泉区', '142', '0');
INSERT INTO `hhc_city` VALUES ('1381', '临泉县', '142', '0');
INSERT INTO `hhc_city` VALUES ('1382', '太和县', '142', '0');
INSERT INTO `hhc_city` VALUES ('1383', '阜南县', '142', '0');
INSERT INTO `hhc_city` VALUES ('1384', '颍上县', '142', '0');
INSERT INTO `hhc_city` VALUES ('1385', '界首市', '142', '0');
INSERT INTO `hhc_city` VALUES ('1386', '埇桥区', '143', '0');
INSERT INTO `hhc_city` VALUES ('1387', '砀山县', '143', '0');
INSERT INTO `hhc_city` VALUES ('1388', '萧县', '143', '0');
INSERT INTO `hhc_city` VALUES ('1389', '灵璧县', '143', '0');
INSERT INTO `hhc_city` VALUES ('1390', '泗县', '143', '0');
INSERT INTO `hhc_city` VALUES ('1391', '居巢区', '144', '0');
INSERT INTO `hhc_city` VALUES ('1392', '庐江县', '144', '0');
INSERT INTO `hhc_city` VALUES ('1393', '无为县', '144', '0');
INSERT INTO `hhc_city` VALUES ('1394', '含山县', '144', '0');
INSERT INTO `hhc_city` VALUES ('1395', '和县', '144', '0');
INSERT INTO `hhc_city` VALUES ('1396', '金安区', '145', '0');
INSERT INTO `hhc_city` VALUES ('1397', '裕安区', '145', '0');
INSERT INTO `hhc_city` VALUES ('1398', '寿县', '145', '0');
INSERT INTO `hhc_city` VALUES ('1399', '霍邱县', '145', '0');
INSERT INTO `hhc_city` VALUES ('1400', '舒城县', '145', '0');
INSERT INTO `hhc_city` VALUES ('1401', '金寨县', '145', '0');
INSERT INTO `hhc_city` VALUES ('1402', '霍山县', '145', '0');
INSERT INTO `hhc_city` VALUES ('1403', '谯城区', '146', '0');
INSERT INTO `hhc_city` VALUES ('1404', '涡阳县', '146', '0');
INSERT INTO `hhc_city` VALUES ('1405', '蒙城县', '146', '0');
INSERT INTO `hhc_city` VALUES ('1406', '利辛县', '146', '0');
INSERT INTO `hhc_city` VALUES ('1407', '贵池区', '147', '0');
INSERT INTO `hhc_city` VALUES ('1408', '东至县', '147', '0');
INSERT INTO `hhc_city` VALUES ('1409', '石台县', '147', '0');
INSERT INTO `hhc_city` VALUES ('1410', '青阳县', '147', '0');
INSERT INTO `hhc_city` VALUES ('1411', '宣州区', '148', '0');
INSERT INTO `hhc_city` VALUES ('1412', '郎溪县', '148', '0');
INSERT INTO `hhc_city` VALUES ('1413', '广德县', '148', '0');
INSERT INTO `hhc_city` VALUES ('1414', '泾县', '148', '0');
INSERT INTO `hhc_city` VALUES ('1415', '绩溪县', '148', '0');
INSERT INTO `hhc_city` VALUES ('1416', '旌德县', '148', '0');
INSERT INTO `hhc_city` VALUES ('1417', '宁国市', '148', '0');
INSERT INTO `hhc_city` VALUES ('1418', '鼓楼区', '149', '0');
INSERT INTO `hhc_city` VALUES ('1419', '台江区', '149', '0');
INSERT INTO `hhc_city` VALUES ('1420', '仓山区', '149', '0');
INSERT INTO `hhc_city` VALUES ('1421', '马尾区', '149', '0');
INSERT INTO `hhc_city` VALUES ('1422', '晋安区', '149', '0');
INSERT INTO `hhc_city` VALUES ('1423', '闽侯县', '149', '0');
INSERT INTO `hhc_city` VALUES ('1424', '连江县', '149', '0');
INSERT INTO `hhc_city` VALUES ('1425', '罗源县', '149', '0');
INSERT INTO `hhc_city` VALUES ('1426', '闽清县', '149', '0');
INSERT INTO `hhc_city` VALUES ('1427', '永泰县', '149', '0');
INSERT INTO `hhc_city` VALUES ('1428', '平潭县', '149', '0');
INSERT INTO `hhc_city` VALUES ('1429', '福清市', '149', '0');
INSERT INTO `hhc_city` VALUES ('1430', '长乐市', '149', '0');
INSERT INTO `hhc_city` VALUES ('1431', '思明区', '150', '0');
INSERT INTO `hhc_city` VALUES ('1432', '海沧区', '150', '0');
INSERT INTO `hhc_city` VALUES ('1433', '湖里区', '150', '0');
INSERT INTO `hhc_city` VALUES ('1434', '集美区', '150', '0');
INSERT INTO `hhc_city` VALUES ('1435', '同安区', '150', '0');
INSERT INTO `hhc_city` VALUES ('1436', '翔安区', '150', '0');
INSERT INTO `hhc_city` VALUES ('1437', '城厢区', '151', '0');
INSERT INTO `hhc_city` VALUES ('1438', '涵江区', '151', '0');
INSERT INTO `hhc_city` VALUES ('1439', '荔城区', '151', '0');
INSERT INTO `hhc_city` VALUES ('1440', '秀屿区', '151', '0');
INSERT INTO `hhc_city` VALUES ('1441', '仙游县', '151', '0');
INSERT INTO `hhc_city` VALUES ('1442', '梅列区', '152', '0');
INSERT INTO `hhc_city` VALUES ('1443', '三元区', '152', '0');
INSERT INTO `hhc_city` VALUES ('1444', '明溪县', '152', '0');
INSERT INTO `hhc_city` VALUES ('1445', '清流县', '152', '0');
INSERT INTO `hhc_city` VALUES ('1446', '宁化县', '152', '0');
INSERT INTO `hhc_city` VALUES ('1447', '大田县', '152', '0');
INSERT INTO `hhc_city` VALUES ('1448', '尤溪县', '152', '0');
INSERT INTO `hhc_city` VALUES ('1449', '沙县', '152', '0');
INSERT INTO `hhc_city` VALUES ('1450', '将乐县', '152', '0');
INSERT INTO `hhc_city` VALUES ('1451', '泰宁县', '152', '0');
INSERT INTO `hhc_city` VALUES ('1452', '建宁县', '152', '0');
INSERT INTO `hhc_city` VALUES ('1453', '永安市', '152', '0');
INSERT INTO `hhc_city` VALUES ('1454', '鲤城区', '153', '0');
INSERT INTO `hhc_city` VALUES ('1455', '丰泽区', '153', '0');
INSERT INTO `hhc_city` VALUES ('1456', '洛江区', '153', '0');
INSERT INTO `hhc_city` VALUES ('1457', '泉港区', '153', '0');
INSERT INTO `hhc_city` VALUES ('1458', '惠安县', '153', '0');
INSERT INTO `hhc_city` VALUES ('1459', '安溪县', '153', '0');
INSERT INTO `hhc_city` VALUES ('1460', '永春县', '153', '0');
INSERT INTO `hhc_city` VALUES ('1461', '德化县', '153', '0');
INSERT INTO `hhc_city` VALUES ('1462', '金门县', '153', '0');
INSERT INTO `hhc_city` VALUES ('1463', '石狮市', '153', '0');
INSERT INTO `hhc_city` VALUES ('1464', '晋江市', '153', '0');
INSERT INTO `hhc_city` VALUES ('1465', '南安市', '153', '0');
INSERT INTO `hhc_city` VALUES ('1466', '芗城区', '154', '0');
INSERT INTO `hhc_city` VALUES ('1467', '龙文区', '154', '0');
INSERT INTO `hhc_city` VALUES ('1468', '云霄县', '154', '0');
INSERT INTO `hhc_city` VALUES ('1469', '漳浦县', '154', '0');
INSERT INTO `hhc_city` VALUES ('1470', '诏安县', '154', '0');
INSERT INTO `hhc_city` VALUES ('1471', '长泰县', '154', '0');
INSERT INTO `hhc_city` VALUES ('1472', '东山县', '154', '0');
INSERT INTO `hhc_city` VALUES ('1473', '南靖县', '154', '0');
INSERT INTO `hhc_city` VALUES ('1474', '平和县', '154', '0');
INSERT INTO `hhc_city` VALUES ('1475', '华安县', '154', '0');
INSERT INTO `hhc_city` VALUES ('1476', '龙海市', '154', '0');
INSERT INTO `hhc_city` VALUES ('1477', '延平区', '155', '0');
INSERT INTO `hhc_city` VALUES ('1478', '顺昌县', '155', '0');
INSERT INTO `hhc_city` VALUES ('1479', '浦城县', '155', '0');
INSERT INTO `hhc_city` VALUES ('1480', '光泽县', '155', '0');
INSERT INTO `hhc_city` VALUES ('1481', '松溪县', '155', '0');
INSERT INTO `hhc_city` VALUES ('1482', '政和县', '155', '0');
INSERT INTO `hhc_city` VALUES ('1483', '邵武市', '155', '0');
INSERT INTO `hhc_city` VALUES ('1484', '武夷山市', '155', '0');
INSERT INTO `hhc_city` VALUES ('1485', '建瓯市', '155', '0');
INSERT INTO `hhc_city` VALUES ('1486', '建阳市', '155', '0');
INSERT INTO `hhc_city` VALUES ('1487', '新罗区', '156', '0');
INSERT INTO `hhc_city` VALUES ('1488', '长汀县', '156', '0');
INSERT INTO `hhc_city` VALUES ('1489', '永定县', '156', '0');
INSERT INTO `hhc_city` VALUES ('1490', '上杭县', '156', '0');
INSERT INTO `hhc_city` VALUES ('1491', '武平县', '156', '0');
INSERT INTO `hhc_city` VALUES ('1492', '连城县', '156', '0');
INSERT INTO `hhc_city` VALUES ('1493', '漳平市', '156', '0');
INSERT INTO `hhc_city` VALUES ('1494', '蕉城区', '157', '0');
INSERT INTO `hhc_city` VALUES ('1495', '霞浦县', '157', '0');
INSERT INTO `hhc_city` VALUES ('1496', '古田县', '157', '0');
INSERT INTO `hhc_city` VALUES ('1497', '屏南县', '157', '0');
INSERT INTO `hhc_city` VALUES ('1498', '寿宁县', '157', '0');
INSERT INTO `hhc_city` VALUES ('1499', '周宁县', '157', '0');
INSERT INTO `hhc_city` VALUES ('1500', '柘荣县', '157', '0');
INSERT INTO `hhc_city` VALUES ('1501', '福安市', '157', '0');
INSERT INTO `hhc_city` VALUES ('1502', '福鼎市', '157', '0');
INSERT INTO `hhc_city` VALUES ('1503', '东湖区', '158', '0');
INSERT INTO `hhc_city` VALUES ('1504', '西湖区', '158', '0');
INSERT INTO `hhc_city` VALUES ('1505', '青云谱区', '158', '0');
INSERT INTO `hhc_city` VALUES ('1506', '湾里区', '158', '0');
INSERT INTO `hhc_city` VALUES ('1507', '青山湖区', '158', '0');
INSERT INTO `hhc_city` VALUES ('1508', '南昌县', '158', '0');
INSERT INTO `hhc_city` VALUES ('1509', '新建县', '158', '0');
INSERT INTO `hhc_city` VALUES ('1510', '安义县', '158', '0');
INSERT INTO `hhc_city` VALUES ('1511', '进贤县', '158', '0');
INSERT INTO `hhc_city` VALUES ('1512', '昌江区', '159', '0');
INSERT INTO `hhc_city` VALUES ('1513', '珠山区', '159', '0');
INSERT INTO `hhc_city` VALUES ('1514', '浮梁县', '159', '0');
INSERT INTO `hhc_city` VALUES ('1515', '乐平市', '159', '0');
INSERT INTO `hhc_city` VALUES ('1516', '安源区', '160', '0');
INSERT INTO `hhc_city` VALUES ('1517', '湘东区', '160', '0');
INSERT INTO `hhc_city` VALUES ('1518', '莲花县', '160', '0');
INSERT INTO `hhc_city` VALUES ('1519', '上栗县', '160', '0');
INSERT INTO `hhc_city` VALUES ('1520', '芦溪县', '160', '0');
INSERT INTO `hhc_city` VALUES ('1521', '庐山区', '161', '0');
INSERT INTO `hhc_city` VALUES ('1522', '浔阳区', '161', '0');
INSERT INTO `hhc_city` VALUES ('1523', '九江县', '161', '0');
INSERT INTO `hhc_city` VALUES ('1524', '武宁县', '161', '0');
INSERT INTO `hhc_city` VALUES ('1525', '修水县', '161', '0');
INSERT INTO `hhc_city` VALUES ('1526', '永修县', '161', '0');
INSERT INTO `hhc_city` VALUES ('1527', '德安县', '161', '0');
INSERT INTO `hhc_city` VALUES ('1528', '星子县', '161', '0');
INSERT INTO `hhc_city` VALUES ('1529', '都昌县', '161', '0');
INSERT INTO `hhc_city` VALUES ('1530', '湖口县', '161', '0');
INSERT INTO `hhc_city` VALUES ('1531', '彭泽县', '161', '0');
INSERT INTO `hhc_city` VALUES ('1532', '瑞昌市', '161', '0');
INSERT INTO `hhc_city` VALUES ('1533', '渝水区', '162', '0');
INSERT INTO `hhc_city` VALUES ('1534', '分宜县', '162', '0');
INSERT INTO `hhc_city` VALUES ('1535', '月湖区', '163', '0');
INSERT INTO `hhc_city` VALUES ('1536', '余江县', '163', '0');
INSERT INTO `hhc_city` VALUES ('1537', '贵溪市', '163', '0');
INSERT INTO `hhc_city` VALUES ('1538', '章贡区', '164', '0');
INSERT INTO `hhc_city` VALUES ('1539', '赣县', '164', '0');
INSERT INTO `hhc_city` VALUES ('1540', '信丰县', '164', '0');
INSERT INTO `hhc_city` VALUES ('1541', '大余县', '164', '0');
INSERT INTO `hhc_city` VALUES ('1542', '上犹县', '164', '0');
INSERT INTO `hhc_city` VALUES ('1543', '崇义县', '164', '0');
INSERT INTO `hhc_city` VALUES ('1544', '安远县', '164', '0');
INSERT INTO `hhc_city` VALUES ('1545', '龙南县', '164', '0');
INSERT INTO `hhc_city` VALUES ('1546', '定南县', '164', '0');
INSERT INTO `hhc_city` VALUES ('1547', '全南县', '164', '0');
INSERT INTO `hhc_city` VALUES ('1548', '宁都县', '164', '0');
INSERT INTO `hhc_city` VALUES ('1549', '于都县', '164', '0');
INSERT INTO `hhc_city` VALUES ('1550', '兴国县', '164', '0');
INSERT INTO `hhc_city` VALUES ('1551', '会昌县', '164', '0');
INSERT INTO `hhc_city` VALUES ('1552', '寻乌县', '164', '0');
INSERT INTO `hhc_city` VALUES ('1553', '石城县', '164', '0');
INSERT INTO `hhc_city` VALUES ('1554', '瑞金市', '164', '0');
INSERT INTO `hhc_city` VALUES ('1555', '南康市', '164', '0');
INSERT INTO `hhc_city` VALUES ('1556', '吉州区', '165', '0');
INSERT INTO `hhc_city` VALUES ('1557', '青原区', '165', '0');
INSERT INTO `hhc_city` VALUES ('1558', '吉安县', '165', '0');
INSERT INTO `hhc_city` VALUES ('1559', '吉水县', '165', '0');
INSERT INTO `hhc_city` VALUES ('1560', '峡江县', '165', '0');
INSERT INTO `hhc_city` VALUES ('1561', '新干县', '165', '0');
INSERT INTO `hhc_city` VALUES ('1562', '永丰县', '165', '0');
INSERT INTO `hhc_city` VALUES ('1563', '泰和县', '165', '0');
INSERT INTO `hhc_city` VALUES ('1564', '遂川县', '165', '0');
INSERT INTO `hhc_city` VALUES ('1565', '万安县', '165', '0');
INSERT INTO `hhc_city` VALUES ('1566', '安福县', '165', '0');
INSERT INTO `hhc_city` VALUES ('1567', '永新县', '165', '0');
INSERT INTO `hhc_city` VALUES ('1568', '井冈山市', '165', '0');
INSERT INTO `hhc_city` VALUES ('1569', '袁州区', '166', '0');
INSERT INTO `hhc_city` VALUES ('1570', '奉新县', '166', '0');
INSERT INTO `hhc_city` VALUES ('1571', '万载县', '166', '0');
INSERT INTO `hhc_city` VALUES ('1572', '上高县', '166', '0');
INSERT INTO `hhc_city` VALUES ('1573', '宜丰县', '166', '0');
INSERT INTO `hhc_city` VALUES ('1574', '靖安县', '166', '0');
INSERT INTO `hhc_city` VALUES ('1575', '铜鼓县', '166', '0');
INSERT INTO `hhc_city` VALUES ('1576', '丰城市', '166', '0');
INSERT INTO `hhc_city` VALUES ('1577', '樟树市', '166', '0');
INSERT INTO `hhc_city` VALUES ('1578', '高安市', '166', '0');
INSERT INTO `hhc_city` VALUES ('1579', '临川区', '167', '0');
INSERT INTO `hhc_city` VALUES ('1580', '南城县', '167', '0');
INSERT INTO `hhc_city` VALUES ('1581', '黎川县', '167', '0');
INSERT INTO `hhc_city` VALUES ('1582', '南丰县', '167', '0');
INSERT INTO `hhc_city` VALUES ('1583', '崇仁县', '167', '0');
INSERT INTO `hhc_city` VALUES ('1584', '乐安县', '167', '0');
INSERT INTO `hhc_city` VALUES ('1585', '宜黄县', '167', '0');
INSERT INTO `hhc_city` VALUES ('1586', '金溪县', '167', '0');
INSERT INTO `hhc_city` VALUES ('1587', '资溪县', '167', '0');
INSERT INTO `hhc_city` VALUES ('1588', '东乡县', '167', '0');
INSERT INTO `hhc_city` VALUES ('1589', '广昌县', '167', '0');
INSERT INTO `hhc_city` VALUES ('1590', '信州区', '168', '0');
INSERT INTO `hhc_city` VALUES ('1591', '上饶县', '168', '0');
INSERT INTO `hhc_city` VALUES ('1592', '广丰县', '168', '0');
INSERT INTO `hhc_city` VALUES ('1593', '玉山县', '168', '0');
INSERT INTO `hhc_city` VALUES ('1594', '铅山县', '168', '0');
INSERT INTO `hhc_city` VALUES ('1595', '横峰县', '168', '0');
INSERT INTO `hhc_city` VALUES ('1596', '弋阳县', '168', '0');
INSERT INTO `hhc_city` VALUES ('1597', '余干县', '168', '0');
INSERT INTO `hhc_city` VALUES ('1598', '鄱阳县', '168', '0');
INSERT INTO `hhc_city` VALUES ('1599', '万年县', '168', '0');
INSERT INTO `hhc_city` VALUES ('1600', '婺源县', '168', '0');
INSERT INTO `hhc_city` VALUES ('1601', '德兴市', '168', '0');
INSERT INTO `hhc_city` VALUES ('1602', '历下区', '169', '0');
INSERT INTO `hhc_city` VALUES ('1603', '市中区', '169', '0');
INSERT INTO `hhc_city` VALUES ('1604', '槐荫区', '169', '0');
INSERT INTO `hhc_city` VALUES ('1605', '天桥区', '169', '0');
INSERT INTO `hhc_city` VALUES ('1606', '历城区', '169', '0');
INSERT INTO `hhc_city` VALUES ('1607', '长清区', '169', '0');
INSERT INTO `hhc_city` VALUES ('1608', '平阴县', '169', '0');
INSERT INTO `hhc_city` VALUES ('1609', '济阳县', '169', '0');
INSERT INTO `hhc_city` VALUES ('1610', '商河县', '169', '0');
INSERT INTO `hhc_city` VALUES ('1611', '章丘市', '169', '0');
INSERT INTO `hhc_city` VALUES ('1612', '市南区', '170', '0');
INSERT INTO `hhc_city` VALUES ('1613', '市北区', '170', '0');
INSERT INTO `hhc_city` VALUES ('1614', '四方区', '170', '0');
INSERT INTO `hhc_city` VALUES ('1615', '黄岛区', '170', '0');
INSERT INTO `hhc_city` VALUES ('1616', '崂山区', '170', '0');
INSERT INTO `hhc_city` VALUES ('1617', '李沧区', '170', '0');
INSERT INTO `hhc_city` VALUES ('1618', '城阳区', '170', '0');
INSERT INTO `hhc_city` VALUES ('1619', '胶州市', '170', '0');
INSERT INTO `hhc_city` VALUES ('1620', '即墨市', '170', '0');
INSERT INTO `hhc_city` VALUES ('1621', '平度市', '170', '0');
INSERT INTO `hhc_city` VALUES ('1622', '胶南市', '170', '0');
INSERT INTO `hhc_city` VALUES ('1623', '莱西市', '170', '0');
INSERT INTO `hhc_city` VALUES ('1624', '淄川区', '171', '0');
INSERT INTO `hhc_city` VALUES ('1625', '张店区', '171', '0');
INSERT INTO `hhc_city` VALUES ('1626', '博山区', '171', '0');
INSERT INTO `hhc_city` VALUES ('1627', '临淄区', '171', '0');
INSERT INTO `hhc_city` VALUES ('1628', '周村区', '171', '0');
INSERT INTO `hhc_city` VALUES ('1629', '桓台县', '171', '0');
INSERT INTO `hhc_city` VALUES ('1630', '高青县', '171', '0');
INSERT INTO `hhc_city` VALUES ('1631', '沂源县', '171', '0');
INSERT INTO `hhc_city` VALUES ('1632', '市中区', '172', '0');
INSERT INTO `hhc_city` VALUES ('1633', '薛城区', '172', '0');
INSERT INTO `hhc_city` VALUES ('1634', '峄城区', '172', '0');
INSERT INTO `hhc_city` VALUES ('1635', '台儿庄区', '172', '0');
INSERT INTO `hhc_city` VALUES ('1636', '山亭区', '172', '0');
INSERT INTO `hhc_city` VALUES ('1637', '滕州市', '172', '0');
INSERT INTO `hhc_city` VALUES ('1638', '东营区', '173', '0');
INSERT INTO `hhc_city` VALUES ('1639', '河口区', '173', '0');
INSERT INTO `hhc_city` VALUES ('1640', '垦利县', '173', '0');
INSERT INTO `hhc_city` VALUES ('1641', '利津县', '173', '0');
INSERT INTO `hhc_city` VALUES ('1642', '广饶县', '173', '0');
INSERT INTO `hhc_city` VALUES ('1643', '芝罘区', '174', '0');
INSERT INTO `hhc_city` VALUES ('1644', '福山区', '174', '0');
INSERT INTO `hhc_city` VALUES ('1645', '牟平区', '174', '0');
INSERT INTO `hhc_city` VALUES ('1646', '莱山区', '174', '0');
INSERT INTO `hhc_city` VALUES ('1647', '长岛县', '174', '0');
INSERT INTO `hhc_city` VALUES ('1648', '龙口市', '174', '0');
INSERT INTO `hhc_city` VALUES ('1649', '莱阳市', '174', '0');
INSERT INTO `hhc_city` VALUES ('1650', '莱州市', '174', '0');
INSERT INTO `hhc_city` VALUES ('1651', '蓬莱市', '174', '0');
INSERT INTO `hhc_city` VALUES ('1652', '招远市', '174', '0');
INSERT INTO `hhc_city` VALUES ('1653', '栖霞市', '174', '0');
INSERT INTO `hhc_city` VALUES ('1654', '海阳市', '174', '0');
INSERT INTO `hhc_city` VALUES ('1655', '潍城区', '175', '0');
INSERT INTO `hhc_city` VALUES ('1656', '寒亭区', '175', '0');
INSERT INTO `hhc_city` VALUES ('1657', '坊子区', '175', '0');
INSERT INTO `hhc_city` VALUES ('1658', '奎文区', '175', '0');
INSERT INTO `hhc_city` VALUES ('1659', '临朐县', '175', '0');
INSERT INTO `hhc_city` VALUES ('1660', '昌乐县', '175', '0');
INSERT INTO `hhc_city` VALUES ('1661', '青州市', '175', '0');
INSERT INTO `hhc_city` VALUES ('1662', '诸城市', '175', '0');
INSERT INTO `hhc_city` VALUES ('1663', '寿光市', '175', '0');
INSERT INTO `hhc_city` VALUES ('1664', '安丘市', '175', '0');
INSERT INTO `hhc_city` VALUES ('1665', '高密市', '175', '0');
INSERT INTO `hhc_city` VALUES ('1666', '昌邑市', '175', '0');
INSERT INTO `hhc_city` VALUES ('1667', '市中区', '176', '0');
INSERT INTO `hhc_city` VALUES ('1668', '任城区', '176', '0');
INSERT INTO `hhc_city` VALUES ('1669', '微山县', '176', '0');
INSERT INTO `hhc_city` VALUES ('1670', '鱼台县', '176', '0');
INSERT INTO `hhc_city` VALUES ('1671', '金乡县', '176', '0');
INSERT INTO `hhc_city` VALUES ('1672', '嘉祥县', '176', '0');
INSERT INTO `hhc_city` VALUES ('1673', '汶上县', '176', '0');
INSERT INTO `hhc_city` VALUES ('1674', '泗水县', '176', '0');
INSERT INTO `hhc_city` VALUES ('1675', '梁山县', '176', '0');
INSERT INTO `hhc_city` VALUES ('1676', '曲阜市', '176', '0');
INSERT INTO `hhc_city` VALUES ('1677', '兖州市', '176', '0');
INSERT INTO `hhc_city` VALUES ('1678', '邹城市', '176', '0');
INSERT INTO `hhc_city` VALUES ('1679', '泰山区', '177', '0');
INSERT INTO `hhc_city` VALUES ('1680', '岱岳区', '177', '0');
INSERT INTO `hhc_city` VALUES ('1681', '宁阳县', '177', '0');
INSERT INTO `hhc_city` VALUES ('1682', '东平县', '177', '0');
INSERT INTO `hhc_city` VALUES ('1683', '新泰市', '177', '0');
INSERT INTO `hhc_city` VALUES ('1684', '肥城市', '177', '0');
INSERT INTO `hhc_city` VALUES ('1685', '环翠区', '178', '0');
INSERT INTO `hhc_city` VALUES ('1686', '文登市', '178', '0');
INSERT INTO `hhc_city` VALUES ('1687', '荣成市', '178', '0');
INSERT INTO `hhc_city` VALUES ('1688', '乳山市', '178', '0');
INSERT INTO `hhc_city` VALUES ('1689', '东港区', '179', '0');
INSERT INTO `hhc_city` VALUES ('1690', '岚山区', '179', '0');
INSERT INTO `hhc_city` VALUES ('1691', '五莲县', '179', '0');
INSERT INTO `hhc_city` VALUES ('1692', '莒县', '179', '0');
INSERT INTO `hhc_city` VALUES ('1693', '莱城区', '180', '0');
INSERT INTO `hhc_city` VALUES ('1694', '钢城区', '180', '0');
INSERT INTO `hhc_city` VALUES ('1695', '兰山区', '181', '0');
INSERT INTO `hhc_city` VALUES ('1696', '罗庄区', '181', '0');
INSERT INTO `hhc_city` VALUES ('1697', '河东区', '181', '0');
INSERT INTO `hhc_city` VALUES ('1698', '沂南县', '181', '0');
INSERT INTO `hhc_city` VALUES ('1699', '郯城县', '181', '0');
INSERT INTO `hhc_city` VALUES ('1700', '沂水县', '181', '0');
INSERT INTO `hhc_city` VALUES ('1701', '苍山县', '181', '0');
INSERT INTO `hhc_city` VALUES ('1702', '费县', '181', '0');
INSERT INTO `hhc_city` VALUES ('1703', '平邑县', '181', '0');
INSERT INTO `hhc_city` VALUES ('1704', '莒南县', '181', '0');
INSERT INTO `hhc_city` VALUES ('1705', '蒙阴县', '181', '0');
INSERT INTO `hhc_city` VALUES ('1706', '临沭县', '181', '0');
INSERT INTO `hhc_city` VALUES ('1707', '德城区', '182', '0');
INSERT INTO `hhc_city` VALUES ('1708', '陵县', '182', '0');
INSERT INTO `hhc_city` VALUES ('1709', '宁津县', '182', '0');
INSERT INTO `hhc_city` VALUES ('1710', '庆云县', '182', '0');
INSERT INTO `hhc_city` VALUES ('1711', '临邑县', '182', '0');
INSERT INTO `hhc_city` VALUES ('1712', '齐河县', '182', '0');
INSERT INTO `hhc_city` VALUES ('1713', '平原县', '182', '0');
INSERT INTO `hhc_city` VALUES ('1714', '夏津县', '182', '0');
INSERT INTO `hhc_city` VALUES ('1715', '武城县', '182', '0');
INSERT INTO `hhc_city` VALUES ('1716', '乐陵市', '182', '0');
INSERT INTO `hhc_city` VALUES ('1717', '禹城市', '182', '0');
INSERT INTO `hhc_city` VALUES ('1718', '东昌府区', '183', '0');
INSERT INTO `hhc_city` VALUES ('1719', '阳谷县', '183', '0');
INSERT INTO `hhc_city` VALUES ('1720', '莘县', '183', '0');
INSERT INTO `hhc_city` VALUES ('1721', '茌平县', '183', '0');
INSERT INTO `hhc_city` VALUES ('1722', '东阿县', '183', '0');
INSERT INTO `hhc_city` VALUES ('1723', '冠县', '183', '0');
INSERT INTO `hhc_city` VALUES ('1724', '高唐县', '183', '0');
INSERT INTO `hhc_city` VALUES ('1725', '临清市', '183', '0');
INSERT INTO `hhc_city` VALUES ('1726', '滨城区', '184', '0');
INSERT INTO `hhc_city` VALUES ('1727', '惠民县', '184', '0');
INSERT INTO `hhc_city` VALUES ('1728', '阳信县', '184', '0');
INSERT INTO `hhc_city` VALUES ('1729', '无棣县', '184', '0');
INSERT INTO `hhc_city` VALUES ('1730', '沾化县', '184', '0');
INSERT INTO `hhc_city` VALUES ('1731', '博兴县', '184', '0');
INSERT INTO `hhc_city` VALUES ('1732', '邹平县', '184', '0');
INSERT INTO `hhc_city` VALUES ('1733', '牡丹区', '185', '0');
INSERT INTO `hhc_city` VALUES ('1734', '曹县', '185', '0');
INSERT INTO `hhc_city` VALUES ('1735', '单县', '185', '0');
INSERT INTO `hhc_city` VALUES ('1736', '成武县', '185', '0');
INSERT INTO `hhc_city` VALUES ('1737', '巨野县', '185', '0');
INSERT INTO `hhc_city` VALUES ('1738', '郓城县', '185', '0');
INSERT INTO `hhc_city` VALUES ('1739', '鄄城县', '185', '0');
INSERT INTO `hhc_city` VALUES ('1740', '定陶县', '185', '0');
INSERT INTO `hhc_city` VALUES ('1741', '东明县', '185', '0');
INSERT INTO `hhc_city` VALUES ('1742', '中原区', '186', '0');
INSERT INTO `hhc_city` VALUES ('1743', '二七区', '186', '0');
INSERT INTO `hhc_city` VALUES ('1744', '管城回族区', '186', '0');
INSERT INTO `hhc_city` VALUES ('1745', '金水区', '186', '0');
INSERT INTO `hhc_city` VALUES ('1746', '上街区', '186', '0');
INSERT INTO `hhc_city` VALUES ('1747', '惠济区', '186', '0');
INSERT INTO `hhc_city` VALUES ('1748', '中牟县', '186', '0');
INSERT INTO `hhc_city` VALUES ('1749', '巩义市', '186', '0');
INSERT INTO `hhc_city` VALUES ('1750', '荥阳市', '186', '0');
INSERT INTO `hhc_city` VALUES ('1751', '新密市', '186', '0');
INSERT INTO `hhc_city` VALUES ('1752', '新郑市', '186', '0');
INSERT INTO `hhc_city` VALUES ('1753', '登封市', '186', '0');
INSERT INTO `hhc_city` VALUES ('1754', '龙亭区', '187', '0');
INSERT INTO `hhc_city` VALUES ('1755', '顺河回族区', '187', '0');
INSERT INTO `hhc_city` VALUES ('1756', '鼓楼区', '187', '0');
INSERT INTO `hhc_city` VALUES ('1757', '南关区', '187', '0');
INSERT INTO `hhc_city` VALUES ('1758', '郊区', '187', '0');
INSERT INTO `hhc_city` VALUES ('1759', '杞县', '187', '0');
INSERT INTO `hhc_city` VALUES ('1760', '通许县', '187', '0');
INSERT INTO `hhc_city` VALUES ('1761', '尉氏县', '187', '0');
INSERT INTO `hhc_city` VALUES ('1762', '开封县', '187', '0');
INSERT INTO `hhc_city` VALUES ('1763', '兰考县', '187', '0');
INSERT INTO `hhc_city` VALUES ('1764', '老城区', '188', '0');
INSERT INTO `hhc_city` VALUES ('1765', '西工区', '188', '0');
INSERT INTO `hhc_city` VALUES ('1766', '廛河回族区', '188', '0');
INSERT INTO `hhc_city` VALUES ('1767', '涧西区', '188', '0');
INSERT INTO `hhc_city` VALUES ('1768', '吉利区', '188', '0');
INSERT INTO `hhc_city` VALUES ('1769', '洛龙区', '188', '0');
INSERT INTO `hhc_city` VALUES ('1770', '孟津县', '188', '0');
INSERT INTO `hhc_city` VALUES ('1771', '新安县', '188', '0');
INSERT INTO `hhc_city` VALUES ('1772', '栾川县', '188', '0');
INSERT INTO `hhc_city` VALUES ('1773', '嵩县', '188', '0');
INSERT INTO `hhc_city` VALUES ('1774', '汝阳县', '188', '0');
INSERT INTO `hhc_city` VALUES ('1775', '宜阳县', '188', '0');
INSERT INTO `hhc_city` VALUES ('1776', '洛宁县', '188', '0');
INSERT INTO `hhc_city` VALUES ('1777', '伊川县', '188', '0');
INSERT INTO `hhc_city` VALUES ('1778', '偃师市', '188', '0');
INSERT INTO `hhc_city` VALUES ('1779', '新华区', '189', '0');
INSERT INTO `hhc_city` VALUES ('1780', '卫东区', '189', '0');
INSERT INTO `hhc_city` VALUES ('1781', '石龙区', '189', '0');
INSERT INTO `hhc_city` VALUES ('1782', '湛河区', '189', '0');
INSERT INTO `hhc_city` VALUES ('1783', '宝丰县', '189', '0');
INSERT INTO `hhc_city` VALUES ('1784', '叶县', '189', '0');
INSERT INTO `hhc_city` VALUES ('1785', '鲁山县', '189', '0');
INSERT INTO `hhc_city` VALUES ('1786', '郏县', '189', '0');
INSERT INTO `hhc_city` VALUES ('1787', '舞钢市', '189', '0');
INSERT INTO `hhc_city` VALUES ('1788', '汝州市', '189', '0');
INSERT INTO `hhc_city` VALUES ('1789', '文峰区', '190', '0');
INSERT INTO `hhc_city` VALUES ('1790', '北关区', '190', '0');
INSERT INTO `hhc_city` VALUES ('1791', '殷都区', '190', '0');
INSERT INTO `hhc_city` VALUES ('1792', '龙安区', '190', '0');
INSERT INTO `hhc_city` VALUES ('1793', '安阳县', '190', '0');
INSERT INTO `hhc_city` VALUES ('1794', '汤阴县', '190', '0');
INSERT INTO `hhc_city` VALUES ('1795', '滑县', '190', '0');
INSERT INTO `hhc_city` VALUES ('1796', '内黄县', '190', '0');
INSERT INTO `hhc_city` VALUES ('1797', '林州市', '190', '0');
INSERT INTO `hhc_city` VALUES ('1798', '鹤山区', '191', '0');
INSERT INTO `hhc_city` VALUES ('1799', '山城区', '191', '0');
INSERT INTO `hhc_city` VALUES ('1800', '淇滨区', '191', '0');
INSERT INTO `hhc_city` VALUES ('1801', '浚县', '191', '0');
INSERT INTO `hhc_city` VALUES ('1802', '淇县', '191', '0');
INSERT INTO `hhc_city` VALUES ('1803', '红旗区', '192', '0');
INSERT INTO `hhc_city` VALUES ('1804', '卫滨区', '192', '0');
INSERT INTO `hhc_city` VALUES ('1805', '凤泉区', '192', '0');
INSERT INTO `hhc_city` VALUES ('1806', '牧野区', '192', '0');
INSERT INTO `hhc_city` VALUES ('1807', '新乡县', '192', '0');
INSERT INTO `hhc_city` VALUES ('1808', '获嘉县', '192', '0');
INSERT INTO `hhc_city` VALUES ('1809', '原阳县', '192', '0');
INSERT INTO `hhc_city` VALUES ('1810', '延津县', '192', '0');
INSERT INTO `hhc_city` VALUES ('1811', '封丘县', '192', '0');
INSERT INTO `hhc_city` VALUES ('1812', '长垣县', '192', '0');
INSERT INTO `hhc_city` VALUES ('1813', '卫辉市', '192', '0');
INSERT INTO `hhc_city` VALUES ('1814', '辉县市', '192', '0');
INSERT INTO `hhc_city` VALUES ('1815', '解放区', '193', '0');
INSERT INTO `hhc_city` VALUES ('1816', '中站区', '193', '0');
INSERT INTO `hhc_city` VALUES ('1817', '马村区', '193', '0');
INSERT INTO `hhc_city` VALUES ('1818', '山阳区', '193', '0');
INSERT INTO `hhc_city` VALUES ('1819', '修武县', '193', '0');
INSERT INTO `hhc_city` VALUES ('1820', '博爱县', '193', '0');
INSERT INTO `hhc_city` VALUES ('1821', '武陟县', '193', '0');
INSERT INTO `hhc_city` VALUES ('1822', '温县', '193', '0');
INSERT INTO `hhc_city` VALUES ('1823', '济源市', '193', '0');
INSERT INTO `hhc_city` VALUES ('1824', '沁阳市', '193', '0');
INSERT INTO `hhc_city` VALUES ('1825', '孟州市', '193', '0');
INSERT INTO `hhc_city` VALUES ('1826', '华龙区', '194', '0');
INSERT INTO `hhc_city` VALUES ('1827', '清丰县', '194', '0');
INSERT INTO `hhc_city` VALUES ('1828', '南乐县', '194', '0');
INSERT INTO `hhc_city` VALUES ('1829', '范县', '194', '0');
INSERT INTO `hhc_city` VALUES ('1830', '台前县', '194', '0');
INSERT INTO `hhc_city` VALUES ('1831', '濮阳县', '194', '0');
INSERT INTO `hhc_city` VALUES ('1832', '魏都区', '195', '0');
INSERT INTO `hhc_city` VALUES ('1833', '许昌县', '195', '0');
INSERT INTO `hhc_city` VALUES ('1834', '鄢陵县', '195', '0');
INSERT INTO `hhc_city` VALUES ('1835', '襄城县', '195', '0');
INSERT INTO `hhc_city` VALUES ('1836', '禹州市', '195', '0');
INSERT INTO `hhc_city` VALUES ('1837', '长葛市', '195', '0');
INSERT INTO `hhc_city` VALUES ('1838', '源汇区', '196', '0');
INSERT INTO `hhc_city` VALUES ('1839', '郾城区', '196', '0');
INSERT INTO `hhc_city` VALUES ('1840', '召陵区', '196', '0');
INSERT INTO `hhc_city` VALUES ('1841', '舞阳县', '196', '0');
INSERT INTO `hhc_city` VALUES ('1842', '临颍县', '196', '0');
INSERT INTO `hhc_city` VALUES ('1843', '市辖区', '197', '0');
INSERT INTO `hhc_city` VALUES ('1844', '湖滨区', '197', '0');
INSERT INTO `hhc_city` VALUES ('1845', '渑池县', '197', '0');
INSERT INTO `hhc_city` VALUES ('1846', '陕县', '197', '0');
INSERT INTO `hhc_city` VALUES ('1847', '卢氏县', '197', '0');
INSERT INTO `hhc_city` VALUES ('1848', '义马市', '197', '0');
INSERT INTO `hhc_city` VALUES ('1849', '灵宝市', '197', '0');
INSERT INTO `hhc_city` VALUES ('1850', '宛城区', '198', '0');
INSERT INTO `hhc_city` VALUES ('1851', '卧龙区', '198', '0');
INSERT INTO `hhc_city` VALUES ('1852', '南召县', '198', '0');
INSERT INTO `hhc_city` VALUES ('1853', '方城县', '198', '0');
INSERT INTO `hhc_city` VALUES ('1854', '西峡县', '198', '0');
INSERT INTO `hhc_city` VALUES ('1855', '镇平县', '198', '0');
INSERT INTO `hhc_city` VALUES ('1856', '内乡县', '198', '0');
INSERT INTO `hhc_city` VALUES ('1857', '淅川县', '198', '0');
INSERT INTO `hhc_city` VALUES ('1858', '社旗县', '198', '0');
INSERT INTO `hhc_city` VALUES ('1859', '唐河县', '198', '0');
INSERT INTO `hhc_city` VALUES ('1860', '新野县', '198', '0');
INSERT INTO `hhc_city` VALUES ('1861', '桐柏县', '198', '0');
INSERT INTO `hhc_city` VALUES ('1862', '邓州市', '198', '0');
INSERT INTO `hhc_city` VALUES ('1863', '梁园区', '199', '0');
INSERT INTO `hhc_city` VALUES ('1864', '睢阳区', '199', '0');
INSERT INTO `hhc_city` VALUES ('1865', '民权县', '199', '0');
INSERT INTO `hhc_city` VALUES ('1866', '睢县', '199', '0');
INSERT INTO `hhc_city` VALUES ('1867', '宁陵县', '199', '0');
INSERT INTO `hhc_city` VALUES ('1868', '柘城县', '199', '0');
INSERT INTO `hhc_city` VALUES ('1869', '虞城县', '199', '0');
INSERT INTO `hhc_city` VALUES ('1870', '夏邑县', '199', '0');
INSERT INTO `hhc_city` VALUES ('1871', '永城市', '199', '0');
INSERT INTO `hhc_city` VALUES ('1872', '浉河区', '200', '0');
INSERT INTO `hhc_city` VALUES ('1873', '平桥区', '200', '0');
INSERT INTO `hhc_city` VALUES ('1874', '罗山县', '200', '0');
INSERT INTO `hhc_city` VALUES ('1875', '光山县', '200', '0');
INSERT INTO `hhc_city` VALUES ('1876', '新县', '200', '0');
INSERT INTO `hhc_city` VALUES ('1877', '商城县', '200', '0');
INSERT INTO `hhc_city` VALUES ('1878', '固始县', '200', '0');
INSERT INTO `hhc_city` VALUES ('1879', '潢川县', '200', '0');
INSERT INTO `hhc_city` VALUES ('1880', '淮滨县', '200', '0');
INSERT INTO `hhc_city` VALUES ('1881', '息县', '200', '0');
INSERT INTO `hhc_city` VALUES ('1882', '川汇区', '201', '0');
INSERT INTO `hhc_city` VALUES ('1883', '扶沟县', '201', '0');
INSERT INTO `hhc_city` VALUES ('1884', '西华县', '201', '0');
INSERT INTO `hhc_city` VALUES ('1885', '商水县', '201', '0');
INSERT INTO `hhc_city` VALUES ('1886', '沈丘县', '201', '0');
INSERT INTO `hhc_city` VALUES ('1887', '郸城县', '201', '0');
INSERT INTO `hhc_city` VALUES ('1888', '淮阳县', '201', '0');
INSERT INTO `hhc_city` VALUES ('1889', '太康县', '201', '0');
INSERT INTO `hhc_city` VALUES ('1890', '鹿邑县', '201', '0');
INSERT INTO `hhc_city` VALUES ('1891', '项城市', '201', '0');
INSERT INTO `hhc_city` VALUES ('1892', '驿城区', '202', '0');
INSERT INTO `hhc_city` VALUES ('1893', '西平县', '202', '0');
INSERT INTO `hhc_city` VALUES ('1894', '上蔡县', '202', '0');
INSERT INTO `hhc_city` VALUES ('1895', '平舆县', '202', '0');
INSERT INTO `hhc_city` VALUES ('1896', '正阳县', '202', '0');
INSERT INTO `hhc_city` VALUES ('1897', '确山县', '202', '0');
INSERT INTO `hhc_city` VALUES ('1898', '泌阳县', '202', '0');
INSERT INTO `hhc_city` VALUES ('1899', '汝南县', '202', '0');
INSERT INTO `hhc_city` VALUES ('1900', '遂平县', '202', '0');
INSERT INTO `hhc_city` VALUES ('1901', '新蔡县', '202', '0');
INSERT INTO `hhc_city` VALUES ('1902', '江岸区', '203', '0');
INSERT INTO `hhc_city` VALUES ('1903', '江汉区', '203', '0');
INSERT INTO `hhc_city` VALUES ('1904', '硚口区', '203', '0');
INSERT INTO `hhc_city` VALUES ('1905', '汉阳区', '203', '0');
INSERT INTO `hhc_city` VALUES ('1906', '武昌区', '203', '0');
INSERT INTO `hhc_city` VALUES ('1907', '青山区', '203', '0');
INSERT INTO `hhc_city` VALUES ('1908', '洪山区', '203', '0');
INSERT INTO `hhc_city` VALUES ('1909', '东西湖区', '203', '0');
INSERT INTO `hhc_city` VALUES ('1910', '汉南区', '203', '0');
INSERT INTO `hhc_city` VALUES ('1911', '蔡甸区', '203', '0');
INSERT INTO `hhc_city` VALUES ('1912', '江夏区', '203', '0');
INSERT INTO `hhc_city` VALUES ('1913', '黄陂区', '203', '0');
INSERT INTO `hhc_city` VALUES ('1914', '新洲区', '203', '0');
INSERT INTO `hhc_city` VALUES ('1915', '黄石港区', '204', '0');
INSERT INTO `hhc_city` VALUES ('1916', '西塞山区', '204', '0');
INSERT INTO `hhc_city` VALUES ('1917', '下陆区', '204', '0');
INSERT INTO `hhc_city` VALUES ('1918', '铁山区', '204', '0');
INSERT INTO `hhc_city` VALUES ('1919', '阳新县', '204', '0');
INSERT INTO `hhc_city` VALUES ('1920', '大冶市', '204', '0');
INSERT INTO `hhc_city` VALUES ('1921', '茅箭区', '205', '0');
INSERT INTO `hhc_city` VALUES ('1922', '张湾区', '205', '0');
INSERT INTO `hhc_city` VALUES ('1923', '郧县', '205', '0');
INSERT INTO `hhc_city` VALUES ('1924', '郧西县', '205', '0');
INSERT INTO `hhc_city` VALUES ('1925', '竹山县', '205', '0');
INSERT INTO `hhc_city` VALUES ('1926', '竹溪县', '205', '0');
INSERT INTO `hhc_city` VALUES ('1927', '房县', '205', '0');
INSERT INTO `hhc_city` VALUES ('1928', '丹江口市', '205', '0');
INSERT INTO `hhc_city` VALUES ('1929', '西陵区', '206', '0');
INSERT INTO `hhc_city` VALUES ('1930', '伍家岗区', '206', '0');
INSERT INTO `hhc_city` VALUES ('1931', '点军区', '206', '0');
INSERT INTO `hhc_city` VALUES ('1932', '猇亭区', '206', '0');
INSERT INTO `hhc_city` VALUES ('1933', '夷陵区', '206', '0');
INSERT INTO `hhc_city` VALUES ('1934', '远安县', '206', '0');
INSERT INTO `hhc_city` VALUES ('1935', '兴山县', '206', '0');
INSERT INTO `hhc_city` VALUES ('1936', '秭归县', '206', '0');
INSERT INTO `hhc_city` VALUES ('1937', '长阳土家族自治县', '206', '0');
INSERT INTO `hhc_city` VALUES ('1938', '五峰土家族自治县', '206', '0');
INSERT INTO `hhc_city` VALUES ('1939', '宜都市', '206', '0');
INSERT INTO `hhc_city` VALUES ('1940', '当阳市', '206', '0');
INSERT INTO `hhc_city` VALUES ('1941', '枝江市', '206', '0');
INSERT INTO `hhc_city` VALUES ('1942', '襄城区', '207', '0');
INSERT INTO `hhc_city` VALUES ('1943', '樊城区', '207', '0');
INSERT INTO `hhc_city` VALUES ('1944', '襄阳区', '207', '0');
INSERT INTO `hhc_city` VALUES ('1945', '南漳县', '207', '0');
INSERT INTO `hhc_city` VALUES ('1946', '谷城县', '207', '0');
INSERT INTO `hhc_city` VALUES ('1947', '保康县', '207', '0');
INSERT INTO `hhc_city` VALUES ('1948', '老河口市', '207', '0');
INSERT INTO `hhc_city` VALUES ('1949', '枣阳市', '207', '0');
INSERT INTO `hhc_city` VALUES ('1950', '宜城市', '207', '0');
INSERT INTO `hhc_city` VALUES ('1951', '梁子湖区', '208', '0');
INSERT INTO `hhc_city` VALUES ('1952', '华容区', '208', '0');
INSERT INTO `hhc_city` VALUES ('1953', '鄂城区', '208', '0');
INSERT INTO `hhc_city` VALUES ('1954', '东宝区', '209', '0');
INSERT INTO `hhc_city` VALUES ('1955', '掇刀区', '209', '0');
INSERT INTO `hhc_city` VALUES ('1956', '京山县', '209', '0');
INSERT INTO `hhc_city` VALUES ('1957', '沙洋县', '209', '0');
INSERT INTO `hhc_city` VALUES ('1958', '钟祥市', '209', '0');
INSERT INTO `hhc_city` VALUES ('1959', '孝南区', '210', '0');
INSERT INTO `hhc_city` VALUES ('1960', '孝昌县', '210', '0');
INSERT INTO `hhc_city` VALUES ('1961', '大悟县', '210', '0');
INSERT INTO `hhc_city` VALUES ('1962', '云梦县', '210', '0');
INSERT INTO `hhc_city` VALUES ('1963', '应城市', '210', '0');
INSERT INTO `hhc_city` VALUES ('1964', '安陆市', '210', '0');
INSERT INTO `hhc_city` VALUES ('1965', '汉川市', '210', '0');
INSERT INTO `hhc_city` VALUES ('1966', '沙市区', '211', '0');
INSERT INTO `hhc_city` VALUES ('1967', '荆州区', '211', '0');
INSERT INTO `hhc_city` VALUES ('1968', '公安县', '211', '0');
INSERT INTO `hhc_city` VALUES ('1969', '监利县', '211', '0');
INSERT INTO `hhc_city` VALUES ('1970', '江陵县', '211', '0');
INSERT INTO `hhc_city` VALUES ('1971', '石首市', '211', '0');
INSERT INTO `hhc_city` VALUES ('1972', '洪湖市', '211', '0');
INSERT INTO `hhc_city` VALUES ('1973', '松滋市', '211', '0');
INSERT INTO `hhc_city` VALUES ('1974', '黄州区', '212', '0');
INSERT INTO `hhc_city` VALUES ('1975', '团风县', '212', '0');
INSERT INTO `hhc_city` VALUES ('1976', '红安县', '212', '0');
INSERT INTO `hhc_city` VALUES ('1977', '罗田县', '212', '0');
INSERT INTO `hhc_city` VALUES ('1978', '英山县', '212', '0');
INSERT INTO `hhc_city` VALUES ('1979', '浠水县', '212', '0');
INSERT INTO `hhc_city` VALUES ('1980', '蕲春县', '212', '0');
INSERT INTO `hhc_city` VALUES ('1981', '黄梅县', '212', '0');
INSERT INTO `hhc_city` VALUES ('1982', '麻城市', '212', '0');
INSERT INTO `hhc_city` VALUES ('1983', '武穴市', '212', '0');
INSERT INTO `hhc_city` VALUES ('1984', '咸安区', '213', '0');
INSERT INTO `hhc_city` VALUES ('1985', '嘉鱼县', '213', '0');
INSERT INTO `hhc_city` VALUES ('1986', '通城县', '213', '0');
INSERT INTO `hhc_city` VALUES ('1987', '崇阳县', '213', '0');
INSERT INTO `hhc_city` VALUES ('1988', '通山县', '213', '0');
INSERT INTO `hhc_city` VALUES ('1989', '赤壁市', '213', '0');
INSERT INTO `hhc_city` VALUES ('1990', '曾都区', '214', '0');
INSERT INTO `hhc_city` VALUES ('1991', '广水市', '214', '0');
INSERT INTO `hhc_city` VALUES ('1992', '恩施市', '215', '0');
INSERT INTO `hhc_city` VALUES ('1993', '利川市', '215', '0');
INSERT INTO `hhc_city` VALUES ('1994', '建始县', '215', '0');
INSERT INTO `hhc_city` VALUES ('1995', '巴东县', '215', '0');
INSERT INTO `hhc_city` VALUES ('1996', '宣恩县', '215', '0');
INSERT INTO `hhc_city` VALUES ('1997', '咸丰县', '215', '0');
INSERT INTO `hhc_city` VALUES ('1998', '来凤县', '215', '0');
INSERT INTO `hhc_city` VALUES ('1999', '鹤峰县', '215', '0');
INSERT INTO `hhc_city` VALUES ('2000', '仙桃市', '216', '0');
INSERT INTO `hhc_city` VALUES ('2001', '潜江市', '216', '0');
INSERT INTO `hhc_city` VALUES ('2002', '天门市', '216', '0');
INSERT INTO `hhc_city` VALUES ('2003', '神农架林区', '216', '0');
INSERT INTO `hhc_city` VALUES ('2004', '芙蓉区', '217', '0');
INSERT INTO `hhc_city` VALUES ('2005', '天心区', '217', '0');
INSERT INTO `hhc_city` VALUES ('2006', '岳麓区', '217', '0');
INSERT INTO `hhc_city` VALUES ('2007', '开福区', '217', '0');
INSERT INTO `hhc_city` VALUES ('2008', '雨花区', '217', '0');
INSERT INTO `hhc_city` VALUES ('2009', '长沙县', '217', '0');
INSERT INTO `hhc_city` VALUES ('2010', '望城县', '217', '0');
INSERT INTO `hhc_city` VALUES ('2011', '宁乡县', '217', '0');
INSERT INTO `hhc_city` VALUES ('2012', '浏阳市', '217', '0');
INSERT INTO `hhc_city` VALUES ('2013', '荷塘区', '218', '0');
INSERT INTO `hhc_city` VALUES ('2014', '芦淞区', '218', '0');
INSERT INTO `hhc_city` VALUES ('2015', '石峰区', '218', '0');
INSERT INTO `hhc_city` VALUES ('2016', '天元区', '218', '0');
INSERT INTO `hhc_city` VALUES ('2017', '株洲县', '218', '0');
INSERT INTO `hhc_city` VALUES ('2018', '攸县', '218', '0');
INSERT INTO `hhc_city` VALUES ('2019', '茶陵县', '218', '0');
INSERT INTO `hhc_city` VALUES ('2020', '炎陵县', '218', '0');
INSERT INTO `hhc_city` VALUES ('2021', '醴陵市', '218', '0');
INSERT INTO `hhc_city` VALUES ('2022', '雨湖区', '219', '0');
INSERT INTO `hhc_city` VALUES ('2023', '岳塘区', '219', '0');
INSERT INTO `hhc_city` VALUES ('2024', '湘潭县', '219', '0');
INSERT INTO `hhc_city` VALUES ('2025', '湘乡市', '219', '0');
INSERT INTO `hhc_city` VALUES ('2026', '韶山市', '219', '0');
INSERT INTO `hhc_city` VALUES ('2027', '珠晖区', '220', '0');
INSERT INTO `hhc_city` VALUES ('2028', '雁峰区', '220', '0');
INSERT INTO `hhc_city` VALUES ('2029', '石鼓区', '220', '0');
INSERT INTO `hhc_city` VALUES ('2030', '蒸湘区', '220', '0');
INSERT INTO `hhc_city` VALUES ('2031', '南岳区', '220', '0');
INSERT INTO `hhc_city` VALUES ('2032', '衡阳县', '220', '0');
INSERT INTO `hhc_city` VALUES ('2033', '衡南县', '220', '0');
INSERT INTO `hhc_city` VALUES ('2034', '衡山县', '220', '0');
INSERT INTO `hhc_city` VALUES ('2035', '衡东县', '220', '0');
INSERT INTO `hhc_city` VALUES ('2036', '祁东县', '220', '0');
INSERT INTO `hhc_city` VALUES ('2037', '耒阳市', '220', '0');
INSERT INTO `hhc_city` VALUES ('2038', '常宁市', '220', '0');
INSERT INTO `hhc_city` VALUES ('2039', '双清区', '221', '0');
INSERT INTO `hhc_city` VALUES ('2040', '大祥区', '221', '0');
INSERT INTO `hhc_city` VALUES ('2041', '北塔区', '221', '0');
INSERT INTO `hhc_city` VALUES ('2042', '邵东县', '221', '0');
INSERT INTO `hhc_city` VALUES ('2043', '新邵县', '221', '0');
INSERT INTO `hhc_city` VALUES ('2044', '邵阳县', '221', '0');
INSERT INTO `hhc_city` VALUES ('2045', '隆回县', '221', '0');
INSERT INTO `hhc_city` VALUES ('2046', '洞口县', '221', '0');
INSERT INTO `hhc_city` VALUES ('2047', '绥宁县', '221', '0');
INSERT INTO `hhc_city` VALUES ('2048', '新宁县', '221', '0');
INSERT INTO `hhc_city` VALUES ('2049', '城步苗族自治县', '221', '0');
INSERT INTO `hhc_city` VALUES ('2050', '武冈市', '221', '0');
INSERT INTO `hhc_city` VALUES ('2051', '岳阳楼区', '222', '0');
INSERT INTO `hhc_city` VALUES ('2052', '云溪区', '222', '0');
INSERT INTO `hhc_city` VALUES ('2053', '君山区', '222', '0');
INSERT INTO `hhc_city` VALUES ('2054', '岳阳县', '222', '0');
INSERT INTO `hhc_city` VALUES ('2055', '华容县', '222', '0');
INSERT INTO `hhc_city` VALUES ('2056', '湘阴县', '222', '0');
INSERT INTO `hhc_city` VALUES ('2057', '平江县', '222', '0');
INSERT INTO `hhc_city` VALUES ('2058', '汨罗市', '222', '0');
INSERT INTO `hhc_city` VALUES ('2059', '临湘市', '222', '0');
INSERT INTO `hhc_city` VALUES ('2060', '武陵区', '223', '0');
INSERT INTO `hhc_city` VALUES ('2061', '鼎城区', '223', '0');
INSERT INTO `hhc_city` VALUES ('2062', '安乡县', '223', '0');
INSERT INTO `hhc_city` VALUES ('2063', '汉寿县', '223', '0');
INSERT INTO `hhc_city` VALUES ('2064', '澧县', '223', '0');
INSERT INTO `hhc_city` VALUES ('2065', '临澧县', '223', '0');
INSERT INTO `hhc_city` VALUES ('2066', '桃源县', '223', '0');
INSERT INTO `hhc_city` VALUES ('2067', '石门县', '223', '0');
INSERT INTO `hhc_city` VALUES ('2068', '津市市', '223', '0');
INSERT INTO `hhc_city` VALUES ('2069', '永定区', '224', '0');
INSERT INTO `hhc_city` VALUES ('2070', '武陵源区', '224', '0');
INSERT INTO `hhc_city` VALUES ('2071', '慈利县', '224', '0');
INSERT INTO `hhc_city` VALUES ('2072', '桑植县', '224', '0');
INSERT INTO `hhc_city` VALUES ('2073', '资阳区', '225', '0');
INSERT INTO `hhc_city` VALUES ('2074', '赫山区', '225', '0');
INSERT INTO `hhc_city` VALUES ('2075', '南县', '225', '0');
INSERT INTO `hhc_city` VALUES ('2076', '桃江县', '225', '0');
INSERT INTO `hhc_city` VALUES ('2077', '安化县', '225', '0');
INSERT INTO `hhc_city` VALUES ('2078', '沅江市', '225', '0');
INSERT INTO `hhc_city` VALUES ('2079', '北湖区', '226', '0');
INSERT INTO `hhc_city` VALUES ('2080', '苏仙区', '226', '0');
INSERT INTO `hhc_city` VALUES ('2081', '桂阳县', '226', '0');
INSERT INTO `hhc_city` VALUES ('2082', '宜章县', '226', '0');
INSERT INTO `hhc_city` VALUES ('2083', '永兴县', '226', '0');
INSERT INTO `hhc_city` VALUES ('2084', '嘉禾县', '226', '0');
INSERT INTO `hhc_city` VALUES ('2085', '临武县', '226', '0');
INSERT INTO `hhc_city` VALUES ('2086', '汝城县', '226', '0');
INSERT INTO `hhc_city` VALUES ('2087', '桂东县', '226', '0');
INSERT INTO `hhc_city` VALUES ('2088', '安仁县', '226', '0');
INSERT INTO `hhc_city` VALUES ('2089', '资兴市', '226', '0');
INSERT INTO `hhc_city` VALUES ('2090', '芝山区', '227', '0');
INSERT INTO `hhc_city` VALUES ('2091', '冷水滩区', '227', '0');
INSERT INTO `hhc_city` VALUES ('2092', '祁阳县', '227', '0');
INSERT INTO `hhc_city` VALUES ('2093', '东安县', '227', '0');
INSERT INTO `hhc_city` VALUES ('2094', '双牌县', '227', '0');
INSERT INTO `hhc_city` VALUES ('2095', '道县', '227', '0');
INSERT INTO `hhc_city` VALUES ('2096', '江永县', '227', '0');
INSERT INTO `hhc_city` VALUES ('2097', '宁远县', '227', '0');
INSERT INTO `hhc_city` VALUES ('2098', '蓝山县', '227', '0');
INSERT INTO `hhc_city` VALUES ('2099', '新田县', '227', '0');
INSERT INTO `hhc_city` VALUES ('2100', '江华瑶族自治县', '227', '0');
INSERT INTO `hhc_city` VALUES ('2101', '鹤城区', '228', '0');
INSERT INTO `hhc_city` VALUES ('2102', '中方县', '228', '0');
INSERT INTO `hhc_city` VALUES ('2103', '沅陵县', '228', '0');
INSERT INTO `hhc_city` VALUES ('2104', '辰溪县', '228', '0');
INSERT INTO `hhc_city` VALUES ('2105', '溆浦县', '228', '0');
INSERT INTO `hhc_city` VALUES ('2106', '会同县', '228', '0');
INSERT INTO `hhc_city` VALUES ('2107', '麻阳苗族自治县', '228', '0');
INSERT INTO `hhc_city` VALUES ('2108', '新晃侗族自治县', '228', '0');
INSERT INTO `hhc_city` VALUES ('2109', '芷江侗族自治县', '228', '0');
INSERT INTO `hhc_city` VALUES ('2110', '靖州苗族侗族自治县', '228', '0');
INSERT INTO `hhc_city` VALUES ('2111', '通道侗族自治县', '228', '0');
INSERT INTO `hhc_city` VALUES ('2112', '洪江市', '228', '0');
INSERT INTO `hhc_city` VALUES ('2113', '娄星区', '229', '0');
INSERT INTO `hhc_city` VALUES ('2114', '双峰县', '229', '0');
INSERT INTO `hhc_city` VALUES ('2115', '新化县', '229', '0');
INSERT INTO `hhc_city` VALUES ('2116', '冷水江市', '229', '0');
INSERT INTO `hhc_city` VALUES ('2117', '涟源市', '229', '0');
INSERT INTO `hhc_city` VALUES ('2118', '吉首市', '230', '0');
INSERT INTO `hhc_city` VALUES ('2119', '泸溪县', '230', '0');
INSERT INTO `hhc_city` VALUES ('2120', '凤凰县', '230', '0');
INSERT INTO `hhc_city` VALUES ('2121', '花垣县', '230', '0');
INSERT INTO `hhc_city` VALUES ('2122', '保靖县', '230', '0');
INSERT INTO `hhc_city` VALUES ('2123', '古丈县', '230', '0');
INSERT INTO `hhc_city` VALUES ('2124', '永顺县', '230', '0');
INSERT INTO `hhc_city` VALUES ('2125', '龙山县', '230', '0');
INSERT INTO `hhc_city` VALUES ('2126', '东山区', '231', '0');
INSERT INTO `hhc_city` VALUES ('2127', '荔湾区', '231', '0');
INSERT INTO `hhc_city` VALUES ('2128', '越秀区', '231', '0');
INSERT INTO `hhc_city` VALUES ('2129', '海珠区', '231', '0');
INSERT INTO `hhc_city` VALUES ('2130', '天河区', '231', '0');
INSERT INTO `hhc_city` VALUES ('2131', '芳村区', '231', '0');
INSERT INTO `hhc_city` VALUES ('2132', '白云区', '231', '0');
INSERT INTO `hhc_city` VALUES ('2133', '黄埔区', '231', '0');
INSERT INTO `hhc_city` VALUES ('2134', '番禺区', '231', '0');
INSERT INTO `hhc_city` VALUES ('2135', '花都区', '231', '0');
INSERT INTO `hhc_city` VALUES ('2136', '增城市', '231', '0');
INSERT INTO `hhc_city` VALUES ('2137', '从化市', '231', '0');
INSERT INTO `hhc_city` VALUES ('2138', '武江区', '232', '0');
INSERT INTO `hhc_city` VALUES ('2139', '浈江区', '232', '0');
INSERT INTO `hhc_city` VALUES ('2140', '曲江区', '232', '0');
INSERT INTO `hhc_city` VALUES ('2141', '始兴县', '232', '0');
INSERT INTO `hhc_city` VALUES ('2142', '仁化县', '232', '0');
INSERT INTO `hhc_city` VALUES ('2143', '翁源县', '232', '0');
INSERT INTO `hhc_city` VALUES ('2144', '乳源瑶族自治县', '232', '0');
INSERT INTO `hhc_city` VALUES ('2145', '新丰县', '232', '0');
INSERT INTO `hhc_city` VALUES ('2146', '乐昌市', '232', '0');
INSERT INTO `hhc_city` VALUES ('2147', '南雄市', '232', '0');
INSERT INTO `hhc_city` VALUES ('2148', '罗湖区', '233', '0');
INSERT INTO `hhc_city` VALUES ('2149', '福田区', '233', '0');
INSERT INTO `hhc_city` VALUES ('2150', '南山区', '233', '0');
INSERT INTO `hhc_city` VALUES ('2151', '宝安区', '233', '0');
INSERT INTO `hhc_city` VALUES ('2152', '龙岗区', '233', '0');
INSERT INTO `hhc_city` VALUES ('2153', '盐田区', '233', '0');
INSERT INTO `hhc_city` VALUES ('2154', '香洲区', '234', '0');
INSERT INTO `hhc_city` VALUES ('2155', '斗门区', '234', '0');
INSERT INTO `hhc_city` VALUES ('2156', '金湾区', '234', '0');
INSERT INTO `hhc_city` VALUES ('2157', '龙湖区', '235', '0');
INSERT INTO `hhc_city` VALUES ('2158', '金平区', '235', '0');
INSERT INTO `hhc_city` VALUES ('2159', '濠江区', '235', '0');
INSERT INTO `hhc_city` VALUES ('2160', '潮阳区', '235', '0');
INSERT INTO `hhc_city` VALUES ('2161', '潮南区', '235', '0');
INSERT INTO `hhc_city` VALUES ('2162', '澄海区', '235', '0');
INSERT INTO `hhc_city` VALUES ('2163', '南澳县', '235', '0');
INSERT INTO `hhc_city` VALUES ('2164', '禅城区', '236', '0');
INSERT INTO `hhc_city` VALUES ('2165', '南海区', '236', '0');
INSERT INTO `hhc_city` VALUES ('2166', '顺德区', '236', '0');
INSERT INTO `hhc_city` VALUES ('2167', '三水区', '236', '0');
INSERT INTO `hhc_city` VALUES ('2168', '高明区', '236', '0');
INSERT INTO `hhc_city` VALUES ('2169', '蓬江区', '237', '0');
INSERT INTO `hhc_city` VALUES ('2170', '江海区', '237', '0');
INSERT INTO `hhc_city` VALUES ('2171', '新会区', '237', '0');
INSERT INTO `hhc_city` VALUES ('2172', '台山市', '237', '0');
INSERT INTO `hhc_city` VALUES ('2173', '开平市', '237', '0');
INSERT INTO `hhc_city` VALUES ('2174', '鹤山市', '237', '0');
INSERT INTO `hhc_city` VALUES ('2175', '恩平市', '237', '0');
INSERT INTO `hhc_city` VALUES ('2176', '赤坎区', '238', '0');
INSERT INTO `hhc_city` VALUES ('2177', '霞山区', '238', '0');
INSERT INTO `hhc_city` VALUES ('2178', '坡头区', '238', '0');
INSERT INTO `hhc_city` VALUES ('2179', '麻章区', '238', '0');
INSERT INTO `hhc_city` VALUES ('2180', '遂溪县', '238', '0');
INSERT INTO `hhc_city` VALUES ('2181', '徐闻县', '238', '0');
INSERT INTO `hhc_city` VALUES ('2182', '廉江市', '238', '0');
INSERT INTO `hhc_city` VALUES ('2183', '雷州市', '238', '0');
INSERT INTO `hhc_city` VALUES ('2184', '吴川市', '238', '0');
INSERT INTO `hhc_city` VALUES ('2185', '茂南区', '239', '0');
INSERT INTO `hhc_city` VALUES ('2186', '茂港区', '239', '0');
INSERT INTO `hhc_city` VALUES ('2187', '电白县', '239', '0');
INSERT INTO `hhc_city` VALUES ('2188', '高州市', '239', '0');
INSERT INTO `hhc_city` VALUES ('2189', '化州市', '239', '0');
INSERT INTO `hhc_city` VALUES ('2190', '信宜市', '239', '0');
INSERT INTO `hhc_city` VALUES ('2191', '端州区', '240', '0');
INSERT INTO `hhc_city` VALUES ('2192', '鼎湖区', '240', '0');
INSERT INTO `hhc_city` VALUES ('2193', '广宁县', '240', '0');
INSERT INTO `hhc_city` VALUES ('2194', '怀集县', '240', '0');
INSERT INTO `hhc_city` VALUES ('2195', '封开县', '240', '0');
INSERT INTO `hhc_city` VALUES ('2196', '德庆县', '240', '0');
INSERT INTO `hhc_city` VALUES ('2197', '高要市', '240', '0');
INSERT INTO `hhc_city` VALUES ('2198', '四会市', '240', '0');
INSERT INTO `hhc_city` VALUES ('2199', '惠城区', '241', '0');
INSERT INTO `hhc_city` VALUES ('2200', '惠阳区', '241', '0');
INSERT INTO `hhc_city` VALUES ('2201', '博罗县', '241', '0');
INSERT INTO `hhc_city` VALUES ('2202', '惠东县', '241', '0');
INSERT INTO `hhc_city` VALUES ('2203', '龙门县', '241', '0');
INSERT INTO `hhc_city` VALUES ('2204', '梅江区', '242', '0');
INSERT INTO `hhc_city` VALUES ('2205', '梅县', '242', '0');
INSERT INTO `hhc_city` VALUES ('2206', '大埔县', '242', '0');
INSERT INTO `hhc_city` VALUES ('2207', '丰顺县', '242', '0');
INSERT INTO `hhc_city` VALUES ('2208', '五华县', '242', '0');
INSERT INTO `hhc_city` VALUES ('2209', '平远县', '242', '0');
INSERT INTO `hhc_city` VALUES ('2210', '蕉岭县', '242', '0');
INSERT INTO `hhc_city` VALUES ('2211', '兴宁市', '242', '0');
INSERT INTO `hhc_city` VALUES ('2212', '城区', '243', '0');
INSERT INTO `hhc_city` VALUES ('2213', '海丰县', '243', '0');
INSERT INTO `hhc_city` VALUES ('2214', '陆河县', '243', '0');
INSERT INTO `hhc_city` VALUES ('2215', '陆丰市', '243', '0');
INSERT INTO `hhc_city` VALUES ('2216', '源城区', '244', '0');
INSERT INTO `hhc_city` VALUES ('2217', '紫金县', '244', '0');
INSERT INTO `hhc_city` VALUES ('2218', '龙川县', '244', '0');
INSERT INTO `hhc_city` VALUES ('2219', '连平县', '244', '0');
INSERT INTO `hhc_city` VALUES ('2220', '和平县', '244', '0');
INSERT INTO `hhc_city` VALUES ('2221', '东源县', '244', '0');
INSERT INTO `hhc_city` VALUES ('2222', '江城区', '245', '0');
INSERT INTO `hhc_city` VALUES ('2223', '阳西县', '245', '0');
INSERT INTO `hhc_city` VALUES ('2224', '阳东县', '245', '0');
INSERT INTO `hhc_city` VALUES ('2225', '阳春市', '245', '0');
INSERT INTO `hhc_city` VALUES ('2226', '清城区', '246', '0');
INSERT INTO `hhc_city` VALUES ('2227', '佛冈县', '246', '0');
INSERT INTO `hhc_city` VALUES ('2228', '阳山县', '246', '0');
INSERT INTO `hhc_city` VALUES ('2229', '连山壮族瑶族自治县', '246', '0');
INSERT INTO `hhc_city` VALUES ('2230', '连南瑶族自治县', '246', '0');
INSERT INTO `hhc_city` VALUES ('2231', '清新县', '246', '0');
INSERT INTO `hhc_city` VALUES ('2232', '英德市', '246', '0');
INSERT INTO `hhc_city` VALUES ('2233', '连州市', '246', '0');
INSERT INTO `hhc_city` VALUES ('2234', '湘桥区', '249', '0');
INSERT INTO `hhc_city` VALUES ('2235', '潮安县', '249', '0');
INSERT INTO `hhc_city` VALUES ('2236', '饶平县', '249', '0');
INSERT INTO `hhc_city` VALUES ('2237', '榕城区', '250', '0');
INSERT INTO `hhc_city` VALUES ('2238', '揭东县', '250', '0');
INSERT INTO `hhc_city` VALUES ('2239', '揭西县', '250', '0');
INSERT INTO `hhc_city` VALUES ('2240', '惠来县', '250', '0');
INSERT INTO `hhc_city` VALUES ('2241', '普宁市', '250', '0');
INSERT INTO `hhc_city` VALUES ('2242', '云城区', '251', '0');
INSERT INTO `hhc_city` VALUES ('2243', '新兴县', '251', '0');
INSERT INTO `hhc_city` VALUES ('2244', '郁南县', '251', '0');
INSERT INTO `hhc_city` VALUES ('2245', '云安县', '251', '0');
INSERT INTO `hhc_city` VALUES ('2246', '罗定市', '251', '0');
INSERT INTO `hhc_city` VALUES ('2247', '兴宁区', '252', '0');
INSERT INTO `hhc_city` VALUES ('2248', '青秀区', '252', '0');
INSERT INTO `hhc_city` VALUES ('2249', '江南区', '252', '0');
INSERT INTO `hhc_city` VALUES ('2250', '西乡塘区', '252', '0');
INSERT INTO `hhc_city` VALUES ('2251', '良庆区', '252', '0');
INSERT INTO `hhc_city` VALUES ('2252', '邕宁区', '252', '0');
INSERT INTO `hhc_city` VALUES ('2253', '武鸣县', '252', '0');
INSERT INTO `hhc_city` VALUES ('2254', '隆安县', '252', '0');
INSERT INTO `hhc_city` VALUES ('2255', '马山县', '252', '0');
INSERT INTO `hhc_city` VALUES ('2256', '上林县', '252', '0');
INSERT INTO `hhc_city` VALUES ('2257', '宾阳县', '252', '0');
INSERT INTO `hhc_city` VALUES ('2258', '横县', '252', '0');
INSERT INTO `hhc_city` VALUES ('2259', '城中区', '253', '0');
INSERT INTO `hhc_city` VALUES ('2260', '鱼峰区', '253', '0');
INSERT INTO `hhc_city` VALUES ('2261', '柳南区', '253', '0');
INSERT INTO `hhc_city` VALUES ('2262', '柳北区', '253', '0');
INSERT INTO `hhc_city` VALUES ('2263', '柳江县', '253', '0');
INSERT INTO `hhc_city` VALUES ('2264', '柳城县', '253', '0');
INSERT INTO `hhc_city` VALUES ('2265', '鹿寨县', '253', '0');
INSERT INTO `hhc_city` VALUES ('2266', '融安县', '253', '0');
INSERT INTO `hhc_city` VALUES ('2267', '融水苗族自治县', '253', '0');
INSERT INTO `hhc_city` VALUES ('2268', '三江侗族自治县', '253', '0');
INSERT INTO `hhc_city` VALUES ('2269', '秀峰区', '254', '0');
INSERT INTO `hhc_city` VALUES ('2270', '叠彩区', '254', '0');
INSERT INTO `hhc_city` VALUES ('2271', '象山区', '254', '0');
INSERT INTO `hhc_city` VALUES ('2272', '七星区', '254', '0');
INSERT INTO `hhc_city` VALUES ('2273', '雁山区', '254', '0');
INSERT INTO `hhc_city` VALUES ('2274', '阳朔县', '254', '0');
INSERT INTO `hhc_city` VALUES ('2275', '临桂县', '254', '0');
INSERT INTO `hhc_city` VALUES ('2276', '灵川县', '254', '0');
INSERT INTO `hhc_city` VALUES ('2277', '全州县', '254', '0');
INSERT INTO `hhc_city` VALUES ('2278', '兴安县', '254', '0');
INSERT INTO `hhc_city` VALUES ('2279', '永福县', '254', '0');
INSERT INTO `hhc_city` VALUES ('2280', '灌阳县', '254', '0');
INSERT INTO `hhc_city` VALUES ('2281', '龙胜各族自治县', '254', '0');
INSERT INTO `hhc_city` VALUES ('2282', '资源县', '254', '0');
INSERT INTO `hhc_city` VALUES ('2283', '平乐县', '254', '0');
INSERT INTO `hhc_city` VALUES ('2284', '荔蒲县', '254', '0');
INSERT INTO `hhc_city` VALUES ('2285', '恭城瑶族自治县', '254', '0');
INSERT INTO `hhc_city` VALUES ('2286', '万秀区', '255', '0');
INSERT INTO `hhc_city` VALUES ('2287', '蝶山区', '255', '0');
INSERT INTO `hhc_city` VALUES ('2288', '长洲区', '255', '0');
INSERT INTO `hhc_city` VALUES ('2289', '苍梧县', '255', '0');
INSERT INTO `hhc_city` VALUES ('2290', '藤县', '255', '0');
INSERT INTO `hhc_city` VALUES ('2291', '蒙山县', '255', '0');
INSERT INTO `hhc_city` VALUES ('2292', '岑溪市', '255', '0');
INSERT INTO `hhc_city` VALUES ('2293', '海城区', '256', '0');
INSERT INTO `hhc_city` VALUES ('2294', '银海区', '256', '0');
INSERT INTO `hhc_city` VALUES ('2295', '铁山港区', '256', '0');
INSERT INTO `hhc_city` VALUES ('2296', '合浦县', '256', '0');
INSERT INTO `hhc_city` VALUES ('2297', '港口区', '257', '0');
INSERT INTO `hhc_city` VALUES ('2298', '防城区', '257', '0');
INSERT INTO `hhc_city` VALUES ('2299', '上思县', '257', '0');
INSERT INTO `hhc_city` VALUES ('2300', '东兴市', '257', '0');
INSERT INTO `hhc_city` VALUES ('2301', '钦南区', '258', '0');
INSERT INTO `hhc_city` VALUES ('2302', '钦北区', '258', '0');
INSERT INTO `hhc_city` VALUES ('2303', '灵山县', '258', '0');
INSERT INTO `hhc_city` VALUES ('2304', '浦北县', '258', '0');
INSERT INTO `hhc_city` VALUES ('2305', '港北区', '259', '0');
INSERT INTO `hhc_city` VALUES ('2306', '港南区', '259', '0');
INSERT INTO `hhc_city` VALUES ('2307', '覃塘区', '259', '0');
INSERT INTO `hhc_city` VALUES ('2308', '平南县', '259', '0');
INSERT INTO `hhc_city` VALUES ('2309', '桂平市', '259', '0');
INSERT INTO `hhc_city` VALUES ('2310', '玉州区', '260', '0');
INSERT INTO `hhc_city` VALUES ('2311', '容县', '260', '0');
INSERT INTO `hhc_city` VALUES ('2312', '陆川县', '260', '0');
INSERT INTO `hhc_city` VALUES ('2313', '博白县', '260', '0');
INSERT INTO `hhc_city` VALUES ('2314', '兴业县', '260', '0');
INSERT INTO `hhc_city` VALUES ('2315', '北流市', '260', '0');
INSERT INTO `hhc_city` VALUES ('2316', '右江区', '261', '0');
INSERT INTO `hhc_city` VALUES ('2317', '田阳县', '261', '0');
INSERT INTO `hhc_city` VALUES ('2318', '田东县', '261', '0');
INSERT INTO `hhc_city` VALUES ('2319', '平果县', '261', '0');
INSERT INTO `hhc_city` VALUES ('2320', '德保县', '261', '0');
INSERT INTO `hhc_city` VALUES ('2321', '靖西县', '261', '0');
INSERT INTO `hhc_city` VALUES ('2322', '那坡县', '261', '0');
INSERT INTO `hhc_city` VALUES ('2323', '凌云县', '261', '0');
INSERT INTO `hhc_city` VALUES ('2324', '乐业县', '261', '0');
INSERT INTO `hhc_city` VALUES ('2325', '田林县', '261', '0');
INSERT INTO `hhc_city` VALUES ('2326', '西林县', '261', '0');
INSERT INTO `hhc_city` VALUES ('2327', '隆林各族自治县', '261', '0');
INSERT INTO `hhc_city` VALUES ('2328', '八步区', '262', '0');
INSERT INTO `hhc_city` VALUES ('2329', '昭平县', '262', '0');
INSERT INTO `hhc_city` VALUES ('2330', '钟山县', '262', '0');
INSERT INTO `hhc_city` VALUES ('2331', '富川瑶族自治县', '262', '0');
INSERT INTO `hhc_city` VALUES ('2332', '金城江区', '263', '0');
INSERT INTO `hhc_city` VALUES ('2333', '南丹县', '263', '0');
INSERT INTO `hhc_city` VALUES ('2334', '天峨县', '263', '0');
INSERT INTO `hhc_city` VALUES ('2335', '凤山县', '263', '0');
INSERT INTO `hhc_city` VALUES ('2336', '东兰县', '263', '0');
INSERT INTO `hhc_city` VALUES ('2337', '罗城仫佬族自治县', '263', '0');
INSERT INTO `hhc_city` VALUES ('2338', '环江毛南族自治县', '263', '0');
INSERT INTO `hhc_city` VALUES ('2339', '巴马瑶族自治县', '263', '0');
INSERT INTO `hhc_city` VALUES ('2340', '都安瑶族自治县', '263', '0');
INSERT INTO `hhc_city` VALUES ('2341', '大化瑶族自治县', '263', '0');
INSERT INTO `hhc_city` VALUES ('2342', '宜州市', '263', '0');
INSERT INTO `hhc_city` VALUES ('2343', '兴宾区', '264', '0');
INSERT INTO `hhc_city` VALUES ('2344', '忻城县', '264', '0');
INSERT INTO `hhc_city` VALUES ('2345', '象州县', '264', '0');
INSERT INTO `hhc_city` VALUES ('2346', '武宣县', '264', '0');
INSERT INTO `hhc_city` VALUES ('2347', '金秀瑶族自治县', '264', '0');
INSERT INTO `hhc_city` VALUES ('2348', '合山市', '264', '0');
INSERT INTO `hhc_city` VALUES ('2349', '江洲区', '265', '0');
INSERT INTO `hhc_city` VALUES ('2350', '扶绥县', '265', '0');
INSERT INTO `hhc_city` VALUES ('2351', '宁明县', '265', '0');
INSERT INTO `hhc_city` VALUES ('2352', '龙州县', '265', '0');
INSERT INTO `hhc_city` VALUES ('2353', '大新县', '265', '0');
INSERT INTO `hhc_city` VALUES ('2354', '天等县', '265', '0');
INSERT INTO `hhc_city` VALUES ('2355', '凭祥市', '265', '0');
INSERT INTO `hhc_city` VALUES ('2356', '秀英区', '266', '0');
INSERT INTO `hhc_city` VALUES ('2357', '龙华区', '266', '0');
INSERT INTO `hhc_city` VALUES ('2358', '琼山区', '266', '0');
INSERT INTO `hhc_city` VALUES ('2359', '美兰区', '266', '0');
INSERT INTO `hhc_city` VALUES ('2360', '五指山市', '267', '0');
INSERT INTO `hhc_city` VALUES ('2361', '琼海市', '267', '0');
INSERT INTO `hhc_city` VALUES ('2362', '儋州市', '267', '0');
INSERT INTO `hhc_city` VALUES ('2363', '文昌市', '267', '0');
INSERT INTO `hhc_city` VALUES ('2364', '万宁市', '267', '0');
INSERT INTO `hhc_city` VALUES ('2365', '东方市', '267', '0');
INSERT INTO `hhc_city` VALUES ('2366', '定安县', '267', '0');
INSERT INTO `hhc_city` VALUES ('2367', '屯昌县', '267', '0');
INSERT INTO `hhc_city` VALUES ('2368', '澄迈县', '267', '0');
INSERT INTO `hhc_city` VALUES ('2369', '临高县', '267', '0');
INSERT INTO `hhc_city` VALUES ('2370', '白沙黎族自治县', '267', '0');
INSERT INTO `hhc_city` VALUES ('2371', '昌江黎族自治县', '267', '0');
INSERT INTO `hhc_city` VALUES ('2372', '乐东黎族自治县', '267', '0');
INSERT INTO `hhc_city` VALUES ('2373', '陵水黎族自治县', '267', '0');
INSERT INTO `hhc_city` VALUES ('2374', '保亭黎族苗族自治县', '267', '0');
INSERT INTO `hhc_city` VALUES ('2375', '琼中黎族苗族自治县', '267', '0');
INSERT INTO `hhc_city` VALUES ('2376', '西沙群岛', '267', '0');
INSERT INTO `hhc_city` VALUES ('2377', '南沙群岛', '267', '0');
INSERT INTO `hhc_city` VALUES ('2378', '中沙群岛的岛礁及其海域', '267', '0');
INSERT INTO `hhc_city` VALUES ('2379', '万州区', '268', '0');
INSERT INTO `hhc_city` VALUES ('2380', '涪陵区', '268', '0');
INSERT INTO `hhc_city` VALUES ('2381', '渝中区', '268', '0');
INSERT INTO `hhc_city` VALUES ('2382', '大渡口区', '268', '0');
INSERT INTO `hhc_city` VALUES ('2383', '江北区', '268', '0');
INSERT INTO `hhc_city` VALUES ('2384', '沙坪坝区', '268', '0');
INSERT INTO `hhc_city` VALUES ('2385', '九龙坡区', '268', '0');
INSERT INTO `hhc_city` VALUES ('2386', '南岸区', '268', '0');
INSERT INTO `hhc_city` VALUES ('2387', '北碚区', '268', '0');
INSERT INTO `hhc_city` VALUES ('2388', '万盛区', '268', '0');
INSERT INTO `hhc_city` VALUES ('2389', '双桥区', '268', '0');
INSERT INTO `hhc_city` VALUES ('2390', '渝北区', '268', '0');
INSERT INTO `hhc_city` VALUES ('2391', '巴南区', '268', '0');
INSERT INTO `hhc_city` VALUES ('2392', '黔江区', '268', '0');
INSERT INTO `hhc_city` VALUES ('2393', '长寿区', '268', '0');
INSERT INTO `hhc_city` VALUES ('2394', '綦江县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2395', '潼南县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2396', '铜梁县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2397', '大足县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2398', '荣昌县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2399', '璧山县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2400', '梁平县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2401', '城口县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2402', '丰都县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2403', '垫江县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2404', '武隆县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2405', '忠县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2406', '开县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2407', '云阳县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2408', '奉节县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2409', '巫山县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2410', '巫溪县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2411', '石柱土家族自治县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2412', '秀山土家族苗族自治县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2413', '酉阳土家族苗族自治县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2414', '彭水苗族土家族自治县', '268', '0');
INSERT INTO `hhc_city` VALUES ('2415', '江津市', '268', '0');
INSERT INTO `hhc_city` VALUES ('2416', '合川市', '268', '0');
INSERT INTO `hhc_city` VALUES ('2417', '永川市', '268', '0');
INSERT INTO `hhc_city` VALUES ('2418', '南川市', '268', '0');
INSERT INTO `hhc_city` VALUES ('2419', '锦江区', '269', '0');
INSERT INTO `hhc_city` VALUES ('2420', '青羊区', '269', '0');
INSERT INTO `hhc_city` VALUES ('2421', '金牛区', '269', '0');
INSERT INTO `hhc_city` VALUES ('2422', '武侯区', '269', '0');
INSERT INTO `hhc_city` VALUES ('2423', '成华区', '269', '0');
INSERT INTO `hhc_city` VALUES ('2424', '龙泉驿区', '269', '0');
INSERT INTO `hhc_city` VALUES ('2425', '青白江区', '269', '0');
INSERT INTO `hhc_city` VALUES ('2426', '新都区', '269', '0');
INSERT INTO `hhc_city` VALUES ('2427', '温江区', '269', '0');
INSERT INTO `hhc_city` VALUES ('2428', '金堂县', '269', '0');
INSERT INTO `hhc_city` VALUES ('2429', '双流县', '269', '0');
INSERT INTO `hhc_city` VALUES ('2430', '郫县', '269', '0');
INSERT INTO `hhc_city` VALUES ('2431', '大邑县', '269', '0');
INSERT INTO `hhc_city` VALUES ('2432', '蒲江县', '269', '0');
INSERT INTO `hhc_city` VALUES ('2433', '新津县', '269', '0');
INSERT INTO `hhc_city` VALUES ('2434', '都江堰市', '269', '0');
INSERT INTO `hhc_city` VALUES ('2435', '彭州市', '269', '0');
INSERT INTO `hhc_city` VALUES ('2436', '邛崃市', '269', '0');
INSERT INTO `hhc_city` VALUES ('2437', '崇州市', '269', '0');
INSERT INTO `hhc_city` VALUES ('2438', '自流井区', '270', '0');
INSERT INTO `hhc_city` VALUES ('2439', '贡井区', '270', '0');
INSERT INTO `hhc_city` VALUES ('2440', '大安区', '270', '0');
INSERT INTO `hhc_city` VALUES ('2441', '沿滩区', '270', '0');
INSERT INTO `hhc_city` VALUES ('2442', '荣县', '270', '0');
INSERT INTO `hhc_city` VALUES ('2443', '富顺县', '270', '0');
INSERT INTO `hhc_city` VALUES ('2444', '东区', '271', '0');
INSERT INTO `hhc_city` VALUES ('2445', '西区', '271', '0');
INSERT INTO `hhc_city` VALUES ('2446', '仁和区', '271', '0');
INSERT INTO `hhc_city` VALUES ('2447', '米易县', '271', '0');
INSERT INTO `hhc_city` VALUES ('2448', '盐边县', '271', '0');
INSERT INTO `hhc_city` VALUES ('2449', '江阳区', '272', '0');
INSERT INTO `hhc_city` VALUES ('2450', '纳溪区', '272', '0');
INSERT INTO `hhc_city` VALUES ('2451', '龙马潭区', '272', '0');
INSERT INTO `hhc_city` VALUES ('2452', '泸县', '272', '0');
INSERT INTO `hhc_city` VALUES ('2453', '合江县', '272', '0');
INSERT INTO `hhc_city` VALUES ('2454', '叙永县', '272', '0');
INSERT INTO `hhc_city` VALUES ('2455', '古蔺县', '272', '0');
INSERT INTO `hhc_city` VALUES ('2456', '旌阳区', '273', '0');
INSERT INTO `hhc_city` VALUES ('2457', '中江县', '273', '0');
INSERT INTO `hhc_city` VALUES ('2458', '罗江县', '273', '0');
INSERT INTO `hhc_city` VALUES ('2459', '广汉市', '273', '0');
INSERT INTO `hhc_city` VALUES ('2460', '什邡市', '273', '0');
INSERT INTO `hhc_city` VALUES ('2461', '绵竹市', '273', '0');
INSERT INTO `hhc_city` VALUES ('2462', '涪城区', '274', '0');
INSERT INTO `hhc_city` VALUES ('2463', '游仙区', '274', '0');
INSERT INTO `hhc_city` VALUES ('2464', '三台县', '274', '0');
INSERT INTO `hhc_city` VALUES ('2465', '盐亭县', '274', '0');
INSERT INTO `hhc_city` VALUES ('2466', '安县', '274', '0');
INSERT INTO `hhc_city` VALUES ('2467', '梓潼县', '274', '0');
INSERT INTO `hhc_city` VALUES ('2468', '北川羌族自治县', '274', '0');
INSERT INTO `hhc_city` VALUES ('2469', '平武县', '274', '0');
INSERT INTO `hhc_city` VALUES ('2470', '江油市', '274', '0');
INSERT INTO `hhc_city` VALUES ('2471', '市中区', '275', '0');
INSERT INTO `hhc_city` VALUES ('2472', '元坝区', '275', '0');
INSERT INTO `hhc_city` VALUES ('2473', '朝天区', '275', '0');
INSERT INTO `hhc_city` VALUES ('2474', '旺苍县', '275', '0');
INSERT INTO `hhc_city` VALUES ('2475', '青川县', '275', '0');
INSERT INTO `hhc_city` VALUES ('2476', '剑阁县', '275', '0');
INSERT INTO `hhc_city` VALUES ('2477', '苍溪县', '275', '0');
INSERT INTO `hhc_city` VALUES ('2478', '船山区', '276', '0');
INSERT INTO `hhc_city` VALUES ('2479', '安居区', '276', '0');
INSERT INTO `hhc_city` VALUES ('2480', '蓬溪县', '276', '0');
INSERT INTO `hhc_city` VALUES ('2481', '射洪县', '276', '0');
INSERT INTO `hhc_city` VALUES ('2482', '大英县', '276', '0');
INSERT INTO `hhc_city` VALUES ('2483', '市中区', '277', '0');
INSERT INTO `hhc_city` VALUES ('2484', '东兴区', '277', '0');
INSERT INTO `hhc_city` VALUES ('2485', '威远县', '277', '0');
INSERT INTO `hhc_city` VALUES ('2486', '资中县', '277', '0');
INSERT INTO `hhc_city` VALUES ('2487', '隆昌县', '277', '0');
INSERT INTO `hhc_city` VALUES ('2488', '市中区', '278', '0');
INSERT INTO `hhc_city` VALUES ('2489', '沙湾区', '278', '0');
INSERT INTO `hhc_city` VALUES ('2490', '五通桥区', '278', '0');
INSERT INTO `hhc_city` VALUES ('2491', '金口河区', '278', '0');
INSERT INTO `hhc_city` VALUES ('2492', '犍为县', '278', '0');
INSERT INTO `hhc_city` VALUES ('2493', '井研县', '278', '0');
INSERT INTO `hhc_city` VALUES ('2494', '夹江县', '278', '0');
INSERT INTO `hhc_city` VALUES ('2495', '沐川县', '278', '0');
INSERT INTO `hhc_city` VALUES ('2496', '峨边彝族自治县', '278', '0');
INSERT INTO `hhc_city` VALUES ('2497', '马边彝族自治县', '278', '0');
INSERT INTO `hhc_city` VALUES ('2498', '峨眉山市', '278', '0');
INSERT INTO `hhc_city` VALUES ('2499', '顺庆区', '279', '0');
INSERT INTO `hhc_city` VALUES ('2500', '高坪区', '279', '0');
INSERT INTO `hhc_city` VALUES ('2501', '嘉陵区', '279', '0');
INSERT INTO `hhc_city` VALUES ('2502', '南部县', '279', '0');
INSERT INTO `hhc_city` VALUES ('2503', '营山县', '279', '0');
INSERT INTO `hhc_city` VALUES ('2504', '蓬安县', '279', '0');
INSERT INTO `hhc_city` VALUES ('2505', '仪陇县', '279', '0');
INSERT INTO `hhc_city` VALUES ('2506', '西充县', '279', '0');
INSERT INTO `hhc_city` VALUES ('2507', '阆中市', '279', '0');
INSERT INTO `hhc_city` VALUES ('2508', '东坡区', '280', '0');
INSERT INTO `hhc_city` VALUES ('2509', '仁寿县', '280', '0');
INSERT INTO `hhc_city` VALUES ('2510', '彭山县', '280', '0');
INSERT INTO `hhc_city` VALUES ('2511', '洪雅县', '280', '0');
INSERT INTO `hhc_city` VALUES ('2512', '丹棱县', '280', '0');
INSERT INTO `hhc_city` VALUES ('2513', '青神县', '280', '0');
INSERT INTO `hhc_city` VALUES ('2514', '翠屏区', '281', '0');
INSERT INTO `hhc_city` VALUES ('2515', '宜宾县', '281', '0');
INSERT INTO `hhc_city` VALUES ('2516', '南溪县', '281', '0');
INSERT INTO `hhc_city` VALUES ('2517', '江安县', '281', '0');
INSERT INTO `hhc_city` VALUES ('2518', '长宁县', '281', '0');
INSERT INTO `hhc_city` VALUES ('2519', '高县', '281', '0');
INSERT INTO `hhc_city` VALUES ('2520', '珙县', '281', '0');
INSERT INTO `hhc_city` VALUES ('2521', '筠连县', '281', '0');
INSERT INTO `hhc_city` VALUES ('2522', '兴文县', '281', '0');
INSERT INTO `hhc_city` VALUES ('2523', '屏山县', '281', '0');
INSERT INTO `hhc_city` VALUES ('2524', '广安区', '282', '0');
INSERT INTO `hhc_city` VALUES ('2525', '岳池县', '282', '0');
INSERT INTO `hhc_city` VALUES ('2526', '武胜县', '282', '0');
INSERT INTO `hhc_city` VALUES ('2527', '邻水县', '282', '0');
INSERT INTO `hhc_city` VALUES ('2528', '华蓥市', '282', '0');
INSERT INTO `hhc_city` VALUES ('2529', '通川区', '283', '0');
INSERT INTO `hhc_city` VALUES ('2530', '达县', '283', '0');
INSERT INTO `hhc_city` VALUES ('2531', '宣汉县', '283', '0');
INSERT INTO `hhc_city` VALUES ('2532', '开江县', '283', '0');
INSERT INTO `hhc_city` VALUES ('2533', '大竹县', '283', '0');
INSERT INTO `hhc_city` VALUES ('2534', '渠县', '283', '0');
INSERT INTO `hhc_city` VALUES ('2535', '万源市', '283', '0');
INSERT INTO `hhc_city` VALUES ('2536', '雨城区', '284', '0');
INSERT INTO `hhc_city` VALUES ('2537', '名山县', '284', '0');
INSERT INTO `hhc_city` VALUES ('2538', '荥经县', '284', '0');
INSERT INTO `hhc_city` VALUES ('2539', '汉源县', '284', '0');
INSERT INTO `hhc_city` VALUES ('2540', '石棉县', '284', '0');
INSERT INTO `hhc_city` VALUES ('2541', '天全县', '284', '0');
INSERT INTO `hhc_city` VALUES ('2542', '芦山县', '284', '0');
INSERT INTO `hhc_city` VALUES ('2543', '宝兴县', '284', '0');
INSERT INTO `hhc_city` VALUES ('2544', '巴州区', '285', '0');
INSERT INTO `hhc_city` VALUES ('2545', '通江县', '285', '0');
INSERT INTO `hhc_city` VALUES ('2546', '南江县', '285', '0');
INSERT INTO `hhc_city` VALUES ('2547', '平昌县', '285', '0');
INSERT INTO `hhc_city` VALUES ('2548', '雁江区', '286', '0');
INSERT INTO `hhc_city` VALUES ('2549', '安岳县', '286', '0');
INSERT INTO `hhc_city` VALUES ('2550', '乐至县', '286', '0');
INSERT INTO `hhc_city` VALUES ('2551', '简阳市', '286', '0');
INSERT INTO `hhc_city` VALUES ('2552', '汶川县', '287', '0');
INSERT INTO `hhc_city` VALUES ('2553', '理县', '287', '0');
INSERT INTO `hhc_city` VALUES ('2554', '茂县', '287', '0');
INSERT INTO `hhc_city` VALUES ('2555', '松潘县', '287', '0');
INSERT INTO `hhc_city` VALUES ('2556', '九寨沟县', '287', '0');
INSERT INTO `hhc_city` VALUES ('2557', '金川县', '287', '0');
INSERT INTO `hhc_city` VALUES ('2558', '小金县', '287', '0');
INSERT INTO `hhc_city` VALUES ('2559', '黑水县', '287', '0');
INSERT INTO `hhc_city` VALUES ('2560', '马尔康县', '287', '0');
INSERT INTO `hhc_city` VALUES ('2561', '壤塘县', '287', '0');
INSERT INTO `hhc_city` VALUES ('2562', '阿坝县', '287', '0');
INSERT INTO `hhc_city` VALUES ('2563', '若尔盖县', '287', '0');
INSERT INTO `hhc_city` VALUES ('2564', '红原县', '287', '0');
INSERT INTO `hhc_city` VALUES ('2565', '康定县', '288', '0');
INSERT INTO `hhc_city` VALUES ('2566', '泸定县', '288', '0');
INSERT INTO `hhc_city` VALUES ('2567', '丹巴县', '288', '0');
INSERT INTO `hhc_city` VALUES ('2568', '九龙县', '288', '0');
INSERT INTO `hhc_city` VALUES ('2569', '雅江县', '288', '0');
INSERT INTO `hhc_city` VALUES ('2570', '道孚县', '288', '0');
INSERT INTO `hhc_city` VALUES ('2571', '炉霍县', '288', '0');
INSERT INTO `hhc_city` VALUES ('2572', '甘孜县', '288', '0');
INSERT INTO `hhc_city` VALUES ('2573', '新龙县', '288', '0');
INSERT INTO `hhc_city` VALUES ('2574', '德格县', '288', '0');
INSERT INTO `hhc_city` VALUES ('2575', '白玉县', '288', '0');
INSERT INTO `hhc_city` VALUES ('2576', '石渠县', '288', '0');
INSERT INTO `hhc_city` VALUES ('2577', '色达县', '288', '0');
INSERT INTO `hhc_city` VALUES ('2578', '理塘县', '288', '0');
INSERT INTO `hhc_city` VALUES ('2579', '巴塘县', '288', '0');
INSERT INTO `hhc_city` VALUES ('2580', '乡城县', '288', '0');
INSERT INTO `hhc_city` VALUES ('2581', '稻城县', '288', '0');
INSERT INTO `hhc_city` VALUES ('2582', '得荣县', '288', '0');
INSERT INTO `hhc_city` VALUES ('2583', '西昌市', '289', '0');
INSERT INTO `hhc_city` VALUES ('2584', '木里藏族自治县', '289', '0');
INSERT INTO `hhc_city` VALUES ('2585', '盐源县', '289', '0');
INSERT INTO `hhc_city` VALUES ('2586', '德昌县', '289', '0');
INSERT INTO `hhc_city` VALUES ('2587', '会理县', '289', '0');
INSERT INTO `hhc_city` VALUES ('2588', '会东县', '289', '0');
INSERT INTO `hhc_city` VALUES ('2589', '宁南县', '289', '0');
INSERT INTO `hhc_city` VALUES ('2590', '普格县', '289', '0');
INSERT INTO `hhc_city` VALUES ('2591', '布拖县', '289', '0');
INSERT INTO `hhc_city` VALUES ('2592', '金阳县', '289', '0');
INSERT INTO `hhc_city` VALUES ('2593', '昭觉县', '289', '0');
INSERT INTO `hhc_city` VALUES ('2594', '喜德县', '289', '0');
INSERT INTO `hhc_city` VALUES ('2595', '冕宁县', '289', '0');
INSERT INTO `hhc_city` VALUES ('2596', '越西县', '289', '0');
INSERT INTO `hhc_city` VALUES ('2597', '甘洛县', '289', '0');
INSERT INTO `hhc_city` VALUES ('2598', '美姑县', '289', '0');
INSERT INTO `hhc_city` VALUES ('2599', '雷波县', '289', '0');
INSERT INTO `hhc_city` VALUES ('2600', '南明区', '290', '0');
INSERT INTO `hhc_city` VALUES ('2601', '云岩区', '290', '0');
INSERT INTO `hhc_city` VALUES ('2602', '花溪区', '290', '0');
INSERT INTO `hhc_city` VALUES ('2603', '乌当区', '290', '0');
INSERT INTO `hhc_city` VALUES ('2604', '白云区', '290', '0');
INSERT INTO `hhc_city` VALUES ('2605', '小河区', '290', '0');
INSERT INTO `hhc_city` VALUES ('2606', '开阳县', '290', '0');
INSERT INTO `hhc_city` VALUES ('2607', '息烽县', '290', '0');
INSERT INTO `hhc_city` VALUES ('2608', '修文县', '290', '0');
INSERT INTO `hhc_city` VALUES ('2609', '清镇市', '290', '0');
INSERT INTO `hhc_city` VALUES ('2610', '钟山区', '291', '0');
INSERT INTO `hhc_city` VALUES ('2611', '六枝特区', '291', '0');
INSERT INTO `hhc_city` VALUES ('2612', '水城县', '291', '0');
INSERT INTO `hhc_city` VALUES ('2613', '盘县', '291', '0');
INSERT INTO `hhc_city` VALUES ('2614', '红花岗区', '292', '0');
INSERT INTO `hhc_city` VALUES ('2615', '汇川区', '292', '0');
INSERT INTO `hhc_city` VALUES ('2616', '遵义县', '292', '0');
INSERT INTO `hhc_city` VALUES ('2617', '桐梓县', '292', '0');
INSERT INTO `hhc_city` VALUES ('2618', '绥阳县', '292', '0');
INSERT INTO `hhc_city` VALUES ('2619', '正安县', '292', '0');
INSERT INTO `hhc_city` VALUES ('2620', '道真仡佬族苗族自治县', '292', '0');
INSERT INTO `hhc_city` VALUES ('2621', '务川仡佬族苗族自治县', '292', '0');
INSERT INTO `hhc_city` VALUES ('2622', '凤冈县', '292', '0');
INSERT INTO `hhc_city` VALUES ('2623', '湄潭县', '292', '0');
INSERT INTO `hhc_city` VALUES ('2624', '余庆县', '292', '0');
INSERT INTO `hhc_city` VALUES ('2625', '习水县', '292', '0');
INSERT INTO `hhc_city` VALUES ('2626', '赤水市', '292', '0');
INSERT INTO `hhc_city` VALUES ('2627', '仁怀市', '292', '0');
INSERT INTO `hhc_city` VALUES ('2628', '西秀区', '293', '0');
INSERT INTO `hhc_city` VALUES ('2629', '平坝县', '293', '0');
INSERT INTO `hhc_city` VALUES ('2630', '普定县', '293', '0');
INSERT INTO `hhc_city` VALUES ('2631', '镇宁布依族苗族自治县', '293', '0');
INSERT INTO `hhc_city` VALUES ('2632', '关岭布依族苗族自治县', '293', '0');
INSERT INTO `hhc_city` VALUES ('2633', '紫云苗族布依族自治县', '293', '0');
INSERT INTO `hhc_city` VALUES ('2634', '铜仁市', '294', '0');
INSERT INTO `hhc_city` VALUES ('2635', '江口县', '294', '0');
INSERT INTO `hhc_city` VALUES ('2636', '玉屏侗族自治县', '294', '0');
INSERT INTO `hhc_city` VALUES ('2637', '石阡县', '294', '0');
INSERT INTO `hhc_city` VALUES ('2638', '思南县', '294', '0');
INSERT INTO `hhc_city` VALUES ('2639', '印江土家族苗族自治县', '294', '0');
INSERT INTO `hhc_city` VALUES ('2640', '德江县', '294', '0');
INSERT INTO `hhc_city` VALUES ('2641', '沿河土家族自治县', '294', '0');
INSERT INTO `hhc_city` VALUES ('2642', '松桃苗族自治县', '294', '0');
INSERT INTO `hhc_city` VALUES ('2643', '万山特区', '294', '0');
INSERT INTO `hhc_city` VALUES ('2644', '兴义市', '295', '0');
INSERT INTO `hhc_city` VALUES ('2645', '兴仁县', '295', '0');
INSERT INTO `hhc_city` VALUES ('2646', '普安县', '295', '0');
INSERT INTO `hhc_city` VALUES ('2647', '晴隆县', '295', '0');
INSERT INTO `hhc_city` VALUES ('2648', '贞丰县', '295', '0');
INSERT INTO `hhc_city` VALUES ('2649', '望谟县', '295', '0');
INSERT INTO `hhc_city` VALUES ('2650', '册亨县', '295', '0');
INSERT INTO `hhc_city` VALUES ('2651', '安龙县', '295', '0');
INSERT INTO `hhc_city` VALUES ('2652', '毕节市', '296', '0');
INSERT INTO `hhc_city` VALUES ('2653', '大方县', '296', '0');
INSERT INTO `hhc_city` VALUES ('2654', '黔西县', '296', '0');
INSERT INTO `hhc_city` VALUES ('2655', '金沙县', '296', '0');
INSERT INTO `hhc_city` VALUES ('2656', '织金县', '296', '0');
INSERT INTO `hhc_city` VALUES ('2657', '纳雍县', '296', '0');
INSERT INTO `hhc_city` VALUES ('2658', '威宁彝族回族苗族自治县', '296', '0');
INSERT INTO `hhc_city` VALUES ('2659', '赫章县', '296', '0');
INSERT INTO `hhc_city` VALUES ('2660', '凯里市', '297', '0');
INSERT INTO `hhc_city` VALUES ('2661', '黄平县', '297', '0');
INSERT INTO `hhc_city` VALUES ('2662', '施秉县', '297', '0');
INSERT INTO `hhc_city` VALUES ('2663', '三穗县', '297', '0');
INSERT INTO `hhc_city` VALUES ('2664', '镇远县', '297', '0');
INSERT INTO `hhc_city` VALUES ('2665', '岑巩县', '297', '0');
INSERT INTO `hhc_city` VALUES ('2666', '天柱县', '297', '0');
INSERT INTO `hhc_city` VALUES ('2667', '锦屏县', '297', '0');
INSERT INTO `hhc_city` VALUES ('2668', '剑河县', '297', '0');
INSERT INTO `hhc_city` VALUES ('2669', '台江县', '297', '0');
INSERT INTO `hhc_city` VALUES ('2670', '黎平县', '297', '0');
INSERT INTO `hhc_city` VALUES ('2671', '榕江县', '297', '0');
INSERT INTO `hhc_city` VALUES ('2672', '从江县', '297', '0');
INSERT INTO `hhc_city` VALUES ('2673', '雷山县', '297', '0');
INSERT INTO `hhc_city` VALUES ('2674', '麻江县', '297', '0');
INSERT INTO `hhc_city` VALUES ('2675', '丹寨县', '297', '0');
INSERT INTO `hhc_city` VALUES ('2676', '都匀市', '298', '0');
INSERT INTO `hhc_city` VALUES ('2677', '福泉市', '298', '0');
INSERT INTO `hhc_city` VALUES ('2678', '荔波县', '298', '0');
INSERT INTO `hhc_city` VALUES ('2679', '贵定县', '298', '0');
INSERT INTO `hhc_city` VALUES ('2680', '瓮安县', '298', '0');
INSERT INTO `hhc_city` VALUES ('2681', '独山县', '298', '0');
INSERT INTO `hhc_city` VALUES ('2682', '平塘县', '298', '0');
INSERT INTO `hhc_city` VALUES ('2683', '罗甸县', '298', '0');
INSERT INTO `hhc_city` VALUES ('2684', '长顺县', '298', '0');
INSERT INTO `hhc_city` VALUES ('2685', '龙里县', '298', '0');
INSERT INTO `hhc_city` VALUES ('2686', '惠水县', '298', '0');
INSERT INTO `hhc_city` VALUES ('2687', '三都水族自治县', '298', '0');
INSERT INTO `hhc_city` VALUES ('2688', '五华区', '299', '0');
INSERT INTO `hhc_city` VALUES ('2689', '盘龙区', '299', '0');
INSERT INTO `hhc_city` VALUES ('2690', '官渡区', '299', '0');
INSERT INTO `hhc_city` VALUES ('2691', '西山区', '299', '0');
INSERT INTO `hhc_city` VALUES ('2692', '东川区', '299', '0');
INSERT INTO `hhc_city` VALUES ('2693', '呈贡县', '299', '0');
INSERT INTO `hhc_city` VALUES ('2694', '晋宁县', '299', '0');
INSERT INTO `hhc_city` VALUES ('2695', '富民县', '299', '0');
INSERT INTO `hhc_city` VALUES ('2696', '宜良县', '299', '0');
INSERT INTO `hhc_city` VALUES ('2697', '石林彝族自治县', '299', '0');
INSERT INTO `hhc_city` VALUES ('2698', '嵩明县', '299', '0');
INSERT INTO `hhc_city` VALUES ('2699', '禄劝彝族苗族自治县', '299', '0');
INSERT INTO `hhc_city` VALUES ('2700', '寻甸回族彝族自治县', '299', '0');
INSERT INTO `hhc_city` VALUES ('2701', '安宁市', '299', '0');
INSERT INTO `hhc_city` VALUES ('2702', '麒麟区', '300', '0');
INSERT INTO `hhc_city` VALUES ('2703', '马龙县', '300', '0');
INSERT INTO `hhc_city` VALUES ('2704', '陆良县', '300', '0');
INSERT INTO `hhc_city` VALUES ('2705', '师宗县', '300', '0');
INSERT INTO `hhc_city` VALUES ('2706', '罗平县', '300', '0');
INSERT INTO `hhc_city` VALUES ('2707', '富源县', '300', '0');
INSERT INTO `hhc_city` VALUES ('2708', '会泽县', '300', '0');
INSERT INTO `hhc_city` VALUES ('2709', '沾益县', '300', '0');
INSERT INTO `hhc_city` VALUES ('2710', '宣威市', '300', '0');
INSERT INTO `hhc_city` VALUES ('2711', '红塔区', '301', '0');
INSERT INTO `hhc_city` VALUES ('2712', '江川县', '301', '0');
INSERT INTO `hhc_city` VALUES ('2713', '澄江县', '301', '0');
INSERT INTO `hhc_city` VALUES ('2714', '通海县', '301', '0');
INSERT INTO `hhc_city` VALUES ('2715', '华宁县', '301', '0');
INSERT INTO `hhc_city` VALUES ('2716', '易门县', '301', '0');
INSERT INTO `hhc_city` VALUES ('2717', '峨山彝族自治县', '301', '0');
INSERT INTO `hhc_city` VALUES ('2718', '新平彝族傣族自治县', '301', '0');
INSERT INTO `hhc_city` VALUES ('2719', '元江哈尼族彝族傣族自治县', '301', '0');
INSERT INTO `hhc_city` VALUES ('2720', '隆阳区', '302', '0');
INSERT INTO `hhc_city` VALUES ('2721', '施甸县', '302', '0');
INSERT INTO `hhc_city` VALUES ('2722', '腾冲县', '302', '0');
INSERT INTO `hhc_city` VALUES ('2723', '龙陵县', '302', '0');
INSERT INTO `hhc_city` VALUES ('2724', '昌宁县', '302', '0');
INSERT INTO `hhc_city` VALUES ('2725', '昭阳区', '303', '0');
INSERT INTO `hhc_city` VALUES ('2726', '鲁甸县', '303', '0');
INSERT INTO `hhc_city` VALUES ('2727', '巧家县', '303', '0');
INSERT INTO `hhc_city` VALUES ('2728', '盐津县', '303', '0');
INSERT INTO `hhc_city` VALUES ('2729', '大关县', '303', '0');
INSERT INTO `hhc_city` VALUES ('2730', '永善县', '303', '0');
INSERT INTO `hhc_city` VALUES ('2731', '绥江县', '303', '0');
INSERT INTO `hhc_city` VALUES ('2732', '镇雄县', '303', '0');
INSERT INTO `hhc_city` VALUES ('2733', '彝良县', '303', '0');
INSERT INTO `hhc_city` VALUES ('2734', '威信县', '303', '0');
INSERT INTO `hhc_city` VALUES ('2735', '水富县', '303', '0');
INSERT INTO `hhc_city` VALUES ('2736', '古城区', '304', '0');
INSERT INTO `hhc_city` VALUES ('2737', '玉龙纳西族自治县', '304', '0');
INSERT INTO `hhc_city` VALUES ('2738', '永胜县', '304', '0');
INSERT INTO `hhc_city` VALUES ('2739', '华坪县', '304', '0');
INSERT INTO `hhc_city` VALUES ('2740', '宁蒗彝族自治县', '304', '0');
INSERT INTO `hhc_city` VALUES ('2741', '翠云区', '305', '0');
INSERT INTO `hhc_city` VALUES ('2742', '普洱哈尼族彝族自治县', '305', '0');
INSERT INTO `hhc_city` VALUES ('2743', '墨江哈尼族自治县', '305', '0');
INSERT INTO `hhc_city` VALUES ('2744', '景东彝族自治县', '305', '0');
INSERT INTO `hhc_city` VALUES ('2745', '景谷傣族彝族自治县', '305', '0');
INSERT INTO `hhc_city` VALUES ('2746', '镇沅彝族哈尼族拉祜族自治县', '305', '0');
INSERT INTO `hhc_city` VALUES ('2747', '江城哈尼族彝族自治县', '305', '0');
INSERT INTO `hhc_city` VALUES ('2748', '孟连傣族拉祜族佤族自治县', '305', '0');
INSERT INTO `hhc_city` VALUES ('2749', '澜沧拉祜族自治县', '305', '0');
INSERT INTO `hhc_city` VALUES ('2750', '西盟佤族自治县', '305', '0');
INSERT INTO `hhc_city` VALUES ('2751', '临翔区', '306', '0');
INSERT INTO `hhc_city` VALUES ('2752', '凤庆县', '306', '0');
INSERT INTO `hhc_city` VALUES ('2753', '云县', '306', '0');
INSERT INTO `hhc_city` VALUES ('2754', '永德县', '306', '0');
INSERT INTO `hhc_city` VALUES ('2755', '镇康县', '306', '0');
INSERT INTO `hhc_city` VALUES ('2756', '双江拉祜族佤族布朗族傣族自治县', '306', '0');
INSERT INTO `hhc_city` VALUES ('2757', '耿马傣族佤族自治县', '306', '0');
INSERT INTO `hhc_city` VALUES ('2758', '沧源佤族自治县', '306', '0');
INSERT INTO `hhc_city` VALUES ('2759', '楚雄市', '307', '0');
INSERT INTO `hhc_city` VALUES ('2760', '双柏县', '307', '0');
INSERT INTO `hhc_city` VALUES ('2761', '牟定县', '307', '0');
INSERT INTO `hhc_city` VALUES ('2762', '南华县', '307', '0');
INSERT INTO `hhc_city` VALUES ('2763', '姚安县', '307', '0');
INSERT INTO `hhc_city` VALUES ('2764', '大姚县', '307', '0');
INSERT INTO `hhc_city` VALUES ('2765', '永仁县', '307', '0');
INSERT INTO `hhc_city` VALUES ('2766', '元谋县', '307', '0');
INSERT INTO `hhc_city` VALUES ('2767', '武定县', '307', '0');
INSERT INTO `hhc_city` VALUES ('2768', '禄丰县', '307', '0');
INSERT INTO `hhc_city` VALUES ('2769', '个旧市', '308', '0');
INSERT INTO `hhc_city` VALUES ('2770', '开远市', '308', '0');
INSERT INTO `hhc_city` VALUES ('2771', '蒙自县', '308', '0');
INSERT INTO `hhc_city` VALUES ('2772', '屏边苗族自治县', '308', '0');
INSERT INTO `hhc_city` VALUES ('2773', '建水县', '308', '0');
INSERT INTO `hhc_city` VALUES ('2774', '石屏县', '308', '0');
INSERT INTO `hhc_city` VALUES ('2775', '弥勒县', '308', '0');
INSERT INTO `hhc_city` VALUES ('2776', '泸西县', '308', '0');
INSERT INTO `hhc_city` VALUES ('2777', '元阳县', '308', '0');
INSERT INTO `hhc_city` VALUES ('2778', '红河县', '308', '0');
INSERT INTO `hhc_city` VALUES ('2779', '金平苗族瑶族傣族自治县', '308', '0');
INSERT INTO `hhc_city` VALUES ('2780', '绿春县', '308', '0');
INSERT INTO `hhc_city` VALUES ('2781', '河口瑶族自治县', '308', '0');
INSERT INTO `hhc_city` VALUES ('2782', '文山县', '309', '0');
INSERT INTO `hhc_city` VALUES ('2783', '砚山县', '309', '0');
INSERT INTO `hhc_city` VALUES ('2784', '西畴县', '309', '0');
INSERT INTO `hhc_city` VALUES ('2785', '麻栗坡县', '309', '0');
INSERT INTO `hhc_city` VALUES ('2786', '马关县', '309', '0');
INSERT INTO `hhc_city` VALUES ('2787', '丘北县', '309', '0');
INSERT INTO `hhc_city` VALUES ('2788', '广南县', '309', '0');
INSERT INTO `hhc_city` VALUES ('2789', '富宁县', '309', '0');
INSERT INTO `hhc_city` VALUES ('2790', '景洪市', '310', '0');
INSERT INTO `hhc_city` VALUES ('2791', '勐海县', '310', '0');
INSERT INTO `hhc_city` VALUES ('2792', '勐腊县', '310', '0');
INSERT INTO `hhc_city` VALUES ('2793', '大理市', '311', '0');
INSERT INTO `hhc_city` VALUES ('2794', '漾濞彝族自治县', '311', '0');
INSERT INTO `hhc_city` VALUES ('2795', '祥云县', '311', '0');
INSERT INTO `hhc_city` VALUES ('2796', '宾川县', '311', '0');
INSERT INTO `hhc_city` VALUES ('2797', '弥渡县', '311', '0');
INSERT INTO `hhc_city` VALUES ('2798', '南涧彝族自治县', '311', '0');
INSERT INTO `hhc_city` VALUES ('2799', '巍山彝族回族自治县', '311', '0');
INSERT INTO `hhc_city` VALUES ('2800', '永平县', '311', '0');
INSERT INTO `hhc_city` VALUES ('2801', '云龙县', '311', '0');
INSERT INTO `hhc_city` VALUES ('2802', '洱源县', '311', '0');
INSERT INTO `hhc_city` VALUES ('2803', '剑川县', '311', '0');
INSERT INTO `hhc_city` VALUES ('2804', '鹤庆县', '311', '0');
INSERT INTO `hhc_city` VALUES ('2805', '瑞丽市', '312', '0');
INSERT INTO `hhc_city` VALUES ('2806', '潞西市', '312', '0');
INSERT INTO `hhc_city` VALUES ('2807', '梁河县', '312', '0');
INSERT INTO `hhc_city` VALUES ('2808', '盈江县', '312', '0');
INSERT INTO `hhc_city` VALUES ('2809', '陇川县', '312', '0');
INSERT INTO `hhc_city` VALUES ('2810', '泸水县', '313', '0');
INSERT INTO `hhc_city` VALUES ('2811', '福贡县', '313', '0');
INSERT INTO `hhc_city` VALUES ('2812', '贡山独龙族怒族自治县', '313', '0');
INSERT INTO `hhc_city` VALUES ('2813', '兰坪白族普米族自治县', '313', '0');
INSERT INTO `hhc_city` VALUES ('2814', '香格里拉县', '314', '0');
INSERT INTO `hhc_city` VALUES ('2815', '德钦县', '314', '0');
INSERT INTO `hhc_city` VALUES ('2816', '维西傈僳族自治县', '314', '0');
INSERT INTO `hhc_city` VALUES ('2817', '城关区', '315', '0');
INSERT INTO `hhc_city` VALUES ('2818', '林周县', '315', '0');
INSERT INTO `hhc_city` VALUES ('2819', '当雄县', '315', '0');
INSERT INTO `hhc_city` VALUES ('2820', '尼木县', '315', '0');
INSERT INTO `hhc_city` VALUES ('2821', '曲水县', '315', '0');
INSERT INTO `hhc_city` VALUES ('2822', '堆龙德庆县', '315', '0');
INSERT INTO `hhc_city` VALUES ('2823', '达孜县', '315', '0');
INSERT INTO `hhc_city` VALUES ('2824', '墨竹工卡县', '315', '0');
INSERT INTO `hhc_city` VALUES ('2825', '昌都县', '316', '0');
INSERT INTO `hhc_city` VALUES ('2826', '江达县', '316', '0');
INSERT INTO `hhc_city` VALUES ('2827', '贡觉县', '316', '0');
INSERT INTO `hhc_city` VALUES ('2828', '类乌齐县', '316', '0');
INSERT INTO `hhc_city` VALUES ('2829', '丁青县', '316', '0');
INSERT INTO `hhc_city` VALUES ('2830', '察雅县', '316', '0');
INSERT INTO `hhc_city` VALUES ('2831', '八宿县', '316', '0');
INSERT INTO `hhc_city` VALUES ('2832', '左贡县', '316', '0');
INSERT INTO `hhc_city` VALUES ('2833', '芒康县', '316', '0');
INSERT INTO `hhc_city` VALUES ('2834', '洛隆县', '316', '0');
INSERT INTO `hhc_city` VALUES ('2835', '边坝县', '316', '0');
INSERT INTO `hhc_city` VALUES ('2836', '乃东县', '317', '0');
INSERT INTO `hhc_city` VALUES ('2837', '扎囊县', '317', '0');
INSERT INTO `hhc_city` VALUES ('2838', '贡嘎县', '317', '0');
INSERT INTO `hhc_city` VALUES ('2839', '桑日县', '317', '0');
INSERT INTO `hhc_city` VALUES ('2840', '琼结县', '317', '0');
INSERT INTO `hhc_city` VALUES ('2841', '曲松县', '317', '0');
INSERT INTO `hhc_city` VALUES ('2842', '措美县', '317', '0');
INSERT INTO `hhc_city` VALUES ('2843', '洛扎县', '317', '0');
INSERT INTO `hhc_city` VALUES ('2844', '加查县', '317', '0');
INSERT INTO `hhc_city` VALUES ('2845', '隆子县', '317', '0');
INSERT INTO `hhc_city` VALUES ('2846', '错那县', '317', '0');
INSERT INTO `hhc_city` VALUES ('2847', '浪卡子县', '317', '0');
INSERT INTO `hhc_city` VALUES ('2848', '日喀则市', '318', '0');
INSERT INTO `hhc_city` VALUES ('2849', '南木林县', '318', '0');
INSERT INTO `hhc_city` VALUES ('2850', '江孜县', '318', '0');
INSERT INTO `hhc_city` VALUES ('2851', '定日县', '318', '0');
INSERT INTO `hhc_city` VALUES ('2852', '萨迦县', '318', '0');
INSERT INTO `hhc_city` VALUES ('2853', '拉孜县', '318', '0');
INSERT INTO `hhc_city` VALUES ('2854', '昂仁县', '318', '0');
INSERT INTO `hhc_city` VALUES ('2855', '谢通门县', '318', '0');
INSERT INTO `hhc_city` VALUES ('2856', '白朗县', '318', '0');
INSERT INTO `hhc_city` VALUES ('2857', '仁布县', '318', '0');
INSERT INTO `hhc_city` VALUES ('2858', '康马县', '318', '0');
INSERT INTO `hhc_city` VALUES ('2859', '定结县', '318', '0');
INSERT INTO `hhc_city` VALUES ('2860', '仲巴县', '318', '0');
INSERT INTO `hhc_city` VALUES ('2861', '亚东县', '318', '0');
INSERT INTO `hhc_city` VALUES ('2862', '吉隆县', '318', '0');
INSERT INTO `hhc_city` VALUES ('2863', '聂拉木县', '318', '0');
INSERT INTO `hhc_city` VALUES ('2864', '萨嘎县', '318', '0');
INSERT INTO `hhc_city` VALUES ('2865', '岗巴县', '318', '0');
INSERT INTO `hhc_city` VALUES ('2866', '那曲县', '319', '0');
INSERT INTO `hhc_city` VALUES ('2867', '嘉黎县', '319', '0');
INSERT INTO `hhc_city` VALUES ('2868', '比如县', '319', '0');
INSERT INTO `hhc_city` VALUES ('2869', '聂荣县', '319', '0');
INSERT INTO `hhc_city` VALUES ('2870', '安多县', '319', '0');
INSERT INTO `hhc_city` VALUES ('2871', '申扎县', '319', '0');
INSERT INTO `hhc_city` VALUES ('2872', '索县', '319', '0');
INSERT INTO `hhc_city` VALUES ('2873', '班戈县', '319', '0');
INSERT INTO `hhc_city` VALUES ('2874', '巴青县', '319', '0');
INSERT INTO `hhc_city` VALUES ('2875', '尼玛县', '319', '0');
INSERT INTO `hhc_city` VALUES ('2876', '普兰县', '320', '0');
INSERT INTO `hhc_city` VALUES ('2877', '札达县', '320', '0');
INSERT INTO `hhc_city` VALUES ('2878', '噶尔县', '320', '0');
INSERT INTO `hhc_city` VALUES ('2879', '日土县', '320', '0');
INSERT INTO `hhc_city` VALUES ('2880', '革吉县', '320', '0');
INSERT INTO `hhc_city` VALUES ('2881', '改则县', '320', '0');
INSERT INTO `hhc_city` VALUES ('2882', '措勤县', '320', '0');
INSERT INTO `hhc_city` VALUES ('2883', '林芝县', '321', '0');
INSERT INTO `hhc_city` VALUES ('2884', '工布江达县', '321', '0');
INSERT INTO `hhc_city` VALUES ('2885', '米林县', '321', '0');
INSERT INTO `hhc_city` VALUES ('2886', '墨脱县', '321', '0');
INSERT INTO `hhc_city` VALUES ('2887', '波密县', '321', '0');
INSERT INTO `hhc_city` VALUES ('2888', '察隅县', '321', '0');
INSERT INTO `hhc_city` VALUES ('2889', '朗县', '321', '0');
INSERT INTO `hhc_city` VALUES ('2890', '新城区', '322', '0');
INSERT INTO `hhc_city` VALUES ('2891', '碑林区', '322', '0');
INSERT INTO `hhc_city` VALUES ('2892', '莲湖区', '322', '0');
INSERT INTO `hhc_city` VALUES ('2893', '灞桥区', '322', '0');
INSERT INTO `hhc_city` VALUES ('2894', '未央区', '322', '0');
INSERT INTO `hhc_city` VALUES ('2895', '雁塔区', '322', '0');
INSERT INTO `hhc_city` VALUES ('2896', '阎良区', '322', '0');
INSERT INTO `hhc_city` VALUES ('2897', '临潼区', '322', '0');
INSERT INTO `hhc_city` VALUES ('2898', '长安区', '322', '0');
INSERT INTO `hhc_city` VALUES ('2899', '蓝田县', '322', '0');
INSERT INTO `hhc_city` VALUES ('2900', '周至县', '322', '0');
INSERT INTO `hhc_city` VALUES ('2901', '户县', '322', '0');
INSERT INTO `hhc_city` VALUES ('2902', '高陵县', '322', '0');
INSERT INTO `hhc_city` VALUES ('2903', '王益区', '323', '0');
INSERT INTO `hhc_city` VALUES ('2904', '印台区', '323', '0');
INSERT INTO `hhc_city` VALUES ('2905', '耀州区', '323', '0');
INSERT INTO `hhc_city` VALUES ('2906', '宜君县', '323', '0');
INSERT INTO `hhc_city` VALUES ('2907', '渭滨区', '324', '0');
INSERT INTO `hhc_city` VALUES ('2908', '金台区', '324', '0');
INSERT INTO `hhc_city` VALUES ('2909', '陈仓区', '324', '0');
INSERT INTO `hhc_city` VALUES ('2910', '凤翔县', '324', '0');
INSERT INTO `hhc_city` VALUES ('2911', '岐山县', '324', '0');
INSERT INTO `hhc_city` VALUES ('2912', '扶风县', '324', '0');
INSERT INTO `hhc_city` VALUES ('2913', '眉县', '324', '0');
INSERT INTO `hhc_city` VALUES ('2914', '陇县', '324', '0');
INSERT INTO `hhc_city` VALUES ('2915', '千阳县', '324', '0');
INSERT INTO `hhc_city` VALUES ('2916', '麟游县', '324', '0');
INSERT INTO `hhc_city` VALUES ('2917', '凤县', '324', '0');
INSERT INTO `hhc_city` VALUES ('2918', '太白县', '324', '0');
INSERT INTO `hhc_city` VALUES ('2919', '秦都区', '325', '0');
INSERT INTO `hhc_city` VALUES ('2920', '杨凌区', '325', '0');
INSERT INTO `hhc_city` VALUES ('2921', '渭城区', '325', '0');
INSERT INTO `hhc_city` VALUES ('2922', '三原县', '325', '0');
INSERT INTO `hhc_city` VALUES ('2923', '泾阳县', '325', '0');
INSERT INTO `hhc_city` VALUES ('2924', '乾县', '325', '0');
INSERT INTO `hhc_city` VALUES ('2925', '礼泉县', '325', '0');
INSERT INTO `hhc_city` VALUES ('2926', '永寿县', '325', '0');
INSERT INTO `hhc_city` VALUES ('2927', '彬县', '325', '0');
INSERT INTO `hhc_city` VALUES ('2928', '长武县', '325', '0');
INSERT INTO `hhc_city` VALUES ('2929', '旬邑县', '325', '0');
INSERT INTO `hhc_city` VALUES ('2930', '淳化县', '325', '0');
INSERT INTO `hhc_city` VALUES ('2931', '武功县', '325', '0');
INSERT INTO `hhc_city` VALUES ('2932', '兴平市', '325', '0');
INSERT INTO `hhc_city` VALUES ('2933', '临渭区', '326', '0');
INSERT INTO `hhc_city` VALUES ('2934', '华县', '326', '0');
INSERT INTO `hhc_city` VALUES ('2935', '潼关县', '326', '0');
INSERT INTO `hhc_city` VALUES ('2936', '大荔县', '326', '0');
INSERT INTO `hhc_city` VALUES ('2937', '合阳县', '326', '0');
INSERT INTO `hhc_city` VALUES ('2938', '澄城县', '326', '0');
INSERT INTO `hhc_city` VALUES ('2939', '蒲城县', '326', '0');
INSERT INTO `hhc_city` VALUES ('2940', '白水县', '326', '0');
INSERT INTO `hhc_city` VALUES ('2941', '富平县', '326', '0');
INSERT INTO `hhc_city` VALUES ('2942', '韩城市', '326', '0');
INSERT INTO `hhc_city` VALUES ('2943', '华阴市', '326', '0');
INSERT INTO `hhc_city` VALUES ('2944', '宝塔区', '327', '0');
INSERT INTO `hhc_city` VALUES ('2945', '延长县', '327', '0');
INSERT INTO `hhc_city` VALUES ('2946', '延川县', '327', '0');
INSERT INTO `hhc_city` VALUES ('2947', '子长县', '327', '0');
INSERT INTO `hhc_city` VALUES ('2948', '安塞县', '327', '0');
INSERT INTO `hhc_city` VALUES ('2949', '志丹县', '327', '0');
INSERT INTO `hhc_city` VALUES ('2950', '吴旗县', '327', '0');
INSERT INTO `hhc_city` VALUES ('2951', '甘泉县', '327', '0');
INSERT INTO `hhc_city` VALUES ('2952', '富县', '327', '0');
INSERT INTO `hhc_city` VALUES ('2953', '洛川县', '327', '0');
INSERT INTO `hhc_city` VALUES ('2954', '宜川县', '327', '0');
INSERT INTO `hhc_city` VALUES ('2955', '黄龙县', '327', '0');
INSERT INTO `hhc_city` VALUES ('2956', '黄陵县', '327', '0');
INSERT INTO `hhc_city` VALUES ('2957', '汉台区', '328', '0');
INSERT INTO `hhc_city` VALUES ('2958', '南郑县', '328', '0');
INSERT INTO `hhc_city` VALUES ('2959', '城固县', '328', '0');
INSERT INTO `hhc_city` VALUES ('2960', '洋县', '328', '0');
INSERT INTO `hhc_city` VALUES ('2961', '西乡县', '328', '0');
INSERT INTO `hhc_city` VALUES ('2962', '勉县', '328', '0');
INSERT INTO `hhc_city` VALUES ('2963', '宁强县', '328', '0');
INSERT INTO `hhc_city` VALUES ('2964', '略阳县', '328', '0');
INSERT INTO `hhc_city` VALUES ('2965', '镇巴县', '328', '0');
INSERT INTO `hhc_city` VALUES ('2966', '留坝县', '328', '0');
INSERT INTO `hhc_city` VALUES ('2967', '佛坪县', '328', '0');
INSERT INTO `hhc_city` VALUES ('2968', '榆阳区', '329', '0');
INSERT INTO `hhc_city` VALUES ('2969', '神木县', '329', '0');
INSERT INTO `hhc_city` VALUES ('2970', '府谷县', '329', '0');
INSERT INTO `hhc_city` VALUES ('2971', '横山县', '329', '0');
INSERT INTO `hhc_city` VALUES ('2972', '靖边县', '329', '0');
INSERT INTO `hhc_city` VALUES ('2973', '定边县', '329', '0');
INSERT INTO `hhc_city` VALUES ('2974', '绥德县', '329', '0');
INSERT INTO `hhc_city` VALUES ('2975', '米脂县', '329', '0');
INSERT INTO `hhc_city` VALUES ('2976', '佳县', '329', '0');
INSERT INTO `hhc_city` VALUES ('2977', '吴堡县', '329', '0');
INSERT INTO `hhc_city` VALUES ('2978', '清涧县', '329', '0');
INSERT INTO `hhc_city` VALUES ('2979', '子洲县', '329', '0');
INSERT INTO `hhc_city` VALUES ('2980', '汉滨区', '330', '0');
INSERT INTO `hhc_city` VALUES ('2981', '汉阴县', '330', '0');
INSERT INTO `hhc_city` VALUES ('2982', '石泉县', '330', '0');
INSERT INTO `hhc_city` VALUES ('2983', '宁陕县', '330', '0');
INSERT INTO `hhc_city` VALUES ('2984', '紫阳县', '330', '0');
INSERT INTO `hhc_city` VALUES ('2985', '岚皋县', '330', '0');
INSERT INTO `hhc_city` VALUES ('2986', '平利县', '330', '0');
INSERT INTO `hhc_city` VALUES ('2987', '镇坪县', '330', '0');
INSERT INTO `hhc_city` VALUES ('2988', '旬阳县', '330', '0');
INSERT INTO `hhc_city` VALUES ('2989', '白河县', '330', '0');
INSERT INTO `hhc_city` VALUES ('2990', '商州区', '331', '0');
INSERT INTO `hhc_city` VALUES ('2991', '洛南县', '331', '0');
INSERT INTO `hhc_city` VALUES ('2992', '丹凤县', '331', '0');
INSERT INTO `hhc_city` VALUES ('2993', '商南县', '331', '0');
INSERT INTO `hhc_city` VALUES ('2994', '山阳县', '331', '0');
INSERT INTO `hhc_city` VALUES ('2995', '镇安县', '331', '0');
INSERT INTO `hhc_city` VALUES ('2996', '柞水县', '331', '0');
INSERT INTO `hhc_city` VALUES ('2997', '城关区', '332', '0');
INSERT INTO `hhc_city` VALUES ('2998', '七里河区', '332', '0');
INSERT INTO `hhc_city` VALUES ('2999', '西固区', '332', '0');
INSERT INTO `hhc_city` VALUES ('3000', '安宁区', '332', '0');
INSERT INTO `hhc_city` VALUES ('3001', '红古区', '332', '0');
INSERT INTO `hhc_city` VALUES ('3002', '永登县', '332', '0');
INSERT INTO `hhc_city` VALUES ('3003', '皋兰县', '332', '0');
INSERT INTO `hhc_city` VALUES ('3004', '榆中县', '332', '0');
INSERT INTO `hhc_city` VALUES ('3005', '金川区', '334', '0');
INSERT INTO `hhc_city` VALUES ('3006', '永昌县', '334', '0');
INSERT INTO `hhc_city` VALUES ('3007', '白银区', '335', '0');
INSERT INTO `hhc_city` VALUES ('3008', '平川区', '335', '0');
INSERT INTO `hhc_city` VALUES ('3009', '靖远县', '335', '0');
INSERT INTO `hhc_city` VALUES ('3010', '会宁县', '335', '0');
INSERT INTO `hhc_city` VALUES ('3011', '景泰县', '335', '0');
INSERT INTO `hhc_city` VALUES ('3012', '秦城区', '336', '0');
INSERT INTO `hhc_city` VALUES ('3013', '北道区', '336', '0');
INSERT INTO `hhc_city` VALUES ('3014', '清水县', '336', '0');
INSERT INTO `hhc_city` VALUES ('3015', '秦安县', '336', '0');
INSERT INTO `hhc_city` VALUES ('3016', '甘谷县', '336', '0');
INSERT INTO `hhc_city` VALUES ('3017', '武山县', '336', '0');
INSERT INTO `hhc_city` VALUES ('3018', '张家川回族自治县', '336', '0');
INSERT INTO `hhc_city` VALUES ('3019', '凉州区', '337', '0');
INSERT INTO `hhc_city` VALUES ('3020', '民勤县', '337', '0');
INSERT INTO `hhc_city` VALUES ('3021', '古浪县', '337', '0');
INSERT INTO `hhc_city` VALUES ('3022', '天祝藏族自治县', '337', '0');
INSERT INTO `hhc_city` VALUES ('3023', '甘州区', '338', '0');
INSERT INTO `hhc_city` VALUES ('3024', '肃南裕固族自治县', '338', '0');
INSERT INTO `hhc_city` VALUES ('3025', '民乐县', '338', '0');
INSERT INTO `hhc_city` VALUES ('3026', '临泽县', '338', '0');
INSERT INTO `hhc_city` VALUES ('3027', '高台县', '338', '0');
INSERT INTO `hhc_city` VALUES ('3028', '山丹县', '338', '0');
INSERT INTO `hhc_city` VALUES ('3029', '崆峒区', '339', '0');
INSERT INTO `hhc_city` VALUES ('3030', '泾川县', '339', '0');
INSERT INTO `hhc_city` VALUES ('3031', '灵台县', '339', '0');
INSERT INTO `hhc_city` VALUES ('3032', '崇信县', '339', '0');
INSERT INTO `hhc_city` VALUES ('3033', '华亭县', '339', '0');
INSERT INTO `hhc_city` VALUES ('3034', '庄浪县', '339', '0');
INSERT INTO `hhc_city` VALUES ('3035', '静宁县', '339', '0');
INSERT INTO `hhc_city` VALUES ('3036', '肃州区', '340', '0');
INSERT INTO `hhc_city` VALUES ('3037', '金塔县', '340', '0');
INSERT INTO `hhc_city` VALUES ('3038', '安西县', '340', '0');
INSERT INTO `hhc_city` VALUES ('3039', '肃北蒙古族自治县', '340', '0');
INSERT INTO `hhc_city` VALUES ('3040', '阿克塞哈萨克族自治县', '340', '0');
INSERT INTO `hhc_city` VALUES ('3041', '玉门市', '340', '0');
INSERT INTO `hhc_city` VALUES ('3042', '敦煌市', '340', '0');
INSERT INTO `hhc_city` VALUES ('3043', '西峰区', '341', '0');
INSERT INTO `hhc_city` VALUES ('3044', '庆城县', '341', '0');
INSERT INTO `hhc_city` VALUES ('3045', '环县', '341', '0');
INSERT INTO `hhc_city` VALUES ('3046', '华池县', '341', '0');
INSERT INTO `hhc_city` VALUES ('3047', '合水县', '341', '0');
INSERT INTO `hhc_city` VALUES ('3048', '正宁县', '341', '0');
INSERT INTO `hhc_city` VALUES ('3049', '宁县', '341', '0');
INSERT INTO `hhc_city` VALUES ('3050', '镇原县', '341', '0');
INSERT INTO `hhc_city` VALUES ('3051', '安定区', '342', '0');
INSERT INTO `hhc_city` VALUES ('3052', '通渭县', '342', '0');
INSERT INTO `hhc_city` VALUES ('3053', '陇西县', '342', '0');
INSERT INTO `hhc_city` VALUES ('3054', '渭源县', '342', '0');
INSERT INTO `hhc_city` VALUES ('3055', '临洮县', '342', '0');
INSERT INTO `hhc_city` VALUES ('3056', '漳县', '342', '0');
INSERT INTO `hhc_city` VALUES ('3057', '岷县', '342', '0');
INSERT INTO `hhc_city` VALUES ('3058', '武都区', '343', '0');
INSERT INTO `hhc_city` VALUES ('3059', '成县', '343', '0');
INSERT INTO `hhc_city` VALUES ('3060', '文县', '343', '0');
INSERT INTO `hhc_city` VALUES ('3061', '宕昌县', '343', '0');
INSERT INTO `hhc_city` VALUES ('3062', '康县', '343', '0');
INSERT INTO `hhc_city` VALUES ('3063', '西和县', '343', '0');
INSERT INTO `hhc_city` VALUES ('3064', '礼县', '343', '0');
INSERT INTO `hhc_city` VALUES ('3065', '徽县', '343', '0');
INSERT INTO `hhc_city` VALUES ('3066', '两当县', '343', '0');
INSERT INTO `hhc_city` VALUES ('3067', '临夏市', '344', '0');
INSERT INTO `hhc_city` VALUES ('3068', '临夏县', '344', '0');
INSERT INTO `hhc_city` VALUES ('3069', '康乐县', '344', '0');
INSERT INTO `hhc_city` VALUES ('3070', '永靖县', '344', '0');
INSERT INTO `hhc_city` VALUES ('3071', '广河县', '344', '0');
INSERT INTO `hhc_city` VALUES ('3072', '和政县', '344', '0');
INSERT INTO `hhc_city` VALUES ('3073', '东乡族自治县', '344', '0');
INSERT INTO `hhc_city` VALUES ('3074', '积石山保安族东乡族撒拉族自治县', '344', '0');
INSERT INTO `hhc_city` VALUES ('3075', '合作市', '345', '0');
INSERT INTO `hhc_city` VALUES ('3076', '临潭县', '345', '0');
INSERT INTO `hhc_city` VALUES ('3077', '卓尼县', '345', '0');
INSERT INTO `hhc_city` VALUES ('3078', '舟曲县', '345', '0');
INSERT INTO `hhc_city` VALUES ('3079', '迭部县', '345', '0');
INSERT INTO `hhc_city` VALUES ('3080', '玛曲县', '345', '0');
INSERT INTO `hhc_city` VALUES ('3081', '碌曲县', '345', '0');
INSERT INTO `hhc_city` VALUES ('3082', '夏河县', '345', '0');
INSERT INTO `hhc_city` VALUES ('3083', '城东区', '346', '0');
INSERT INTO `hhc_city` VALUES ('3084', '城中区', '346', '0');
INSERT INTO `hhc_city` VALUES ('3085', '城西区', '346', '0');
INSERT INTO `hhc_city` VALUES ('3086', '城北区', '346', '0');
INSERT INTO `hhc_city` VALUES ('3087', '大通回族土族自治县', '346', '0');
INSERT INTO `hhc_city` VALUES ('3088', '湟中县', '346', '0');
INSERT INTO `hhc_city` VALUES ('3089', '湟源县', '346', '0');
INSERT INTO `hhc_city` VALUES ('3090', '平安县', '347', '0');
INSERT INTO `hhc_city` VALUES ('3091', '民和回族土族自治县', '347', '0');
INSERT INTO `hhc_city` VALUES ('3092', '乐都县', '347', '0');
INSERT INTO `hhc_city` VALUES ('3093', '互助土族自治县', '347', '0');
INSERT INTO `hhc_city` VALUES ('3094', '化隆回族自治县', '347', '0');
INSERT INTO `hhc_city` VALUES ('3095', '循化撒拉族自治县', '347', '0');
INSERT INTO `hhc_city` VALUES ('3096', '门源回族自治县', '348', '0');
INSERT INTO `hhc_city` VALUES ('3097', '祁连县', '348', '0');
INSERT INTO `hhc_city` VALUES ('3098', '海晏县', '348', '0');
INSERT INTO `hhc_city` VALUES ('3099', '刚察县', '348', '0');
INSERT INTO `hhc_city` VALUES ('3100', '同仁县', '349', '0');
INSERT INTO `hhc_city` VALUES ('3101', '尖扎县', '349', '0');
INSERT INTO `hhc_city` VALUES ('3102', '泽库县', '349', '0');
INSERT INTO `hhc_city` VALUES ('3103', '河南蒙古族自治县', '349', '0');
INSERT INTO `hhc_city` VALUES ('3104', '共和县', '350', '0');
INSERT INTO `hhc_city` VALUES ('3105', '同德县', '350', '0');
INSERT INTO `hhc_city` VALUES ('3106', '贵德县', '350', '0');
INSERT INTO `hhc_city` VALUES ('3107', '兴海县', '350', '0');
INSERT INTO `hhc_city` VALUES ('3108', '贵南县', '350', '0');
INSERT INTO `hhc_city` VALUES ('3109', '玛沁县', '351', '0');
INSERT INTO `hhc_city` VALUES ('3110', '班玛县', '351', '0');
INSERT INTO `hhc_city` VALUES ('3111', '甘德县', '351', '0');
INSERT INTO `hhc_city` VALUES ('3112', '达日县', '351', '0');
INSERT INTO `hhc_city` VALUES ('3113', '久治县', '351', '0');
INSERT INTO `hhc_city` VALUES ('3114', '玛多县', '351', '0');
INSERT INTO `hhc_city` VALUES ('3115', '玉树县', '352', '0');
INSERT INTO `hhc_city` VALUES ('3116', '杂多县', '352', '0');
INSERT INTO `hhc_city` VALUES ('3117', '称多县', '352', '0');
INSERT INTO `hhc_city` VALUES ('3118', '治多县', '352', '0');
INSERT INTO `hhc_city` VALUES ('3119', '囊谦县', '352', '0');
INSERT INTO `hhc_city` VALUES ('3120', '曲麻莱县', '352', '0');
INSERT INTO `hhc_city` VALUES ('3121', '格尔木市', '353', '0');
INSERT INTO `hhc_city` VALUES ('3122', '德令哈市', '353', '0');
INSERT INTO `hhc_city` VALUES ('3123', '乌兰县', '353', '0');
INSERT INTO `hhc_city` VALUES ('3124', '都兰县', '353', '0');
INSERT INTO `hhc_city` VALUES ('3125', '天峻县', '353', '0');
INSERT INTO `hhc_city` VALUES ('3126', '兴庆区', '354', '0');
INSERT INTO `hhc_city` VALUES ('3127', '西夏区', '354', '0');
INSERT INTO `hhc_city` VALUES ('3128', '金凤区', '354', '0');
INSERT INTO `hhc_city` VALUES ('3129', '永宁县', '354', '0');
INSERT INTO `hhc_city` VALUES ('3130', '贺兰县', '354', '0');
INSERT INTO `hhc_city` VALUES ('3131', '灵武市', '354', '0');
INSERT INTO `hhc_city` VALUES ('3132', '大武口区', '355', '0');
INSERT INTO `hhc_city` VALUES ('3133', '惠农区', '355', '0');
INSERT INTO `hhc_city` VALUES ('3134', '平罗县', '355', '0');
INSERT INTO `hhc_city` VALUES ('3135', '利通区', '356', '0');
INSERT INTO `hhc_city` VALUES ('3136', '盐池县', '356', '0');
INSERT INTO `hhc_city` VALUES ('3137', '同心县', '356', '0');
INSERT INTO `hhc_city` VALUES ('3138', '青铜峡市', '356', '0');
INSERT INTO `hhc_city` VALUES ('3139', '原州区', '357', '0');
INSERT INTO `hhc_city` VALUES ('3140', '西吉县', '357', '0');
INSERT INTO `hhc_city` VALUES ('3141', '隆德县', '357', '0');
INSERT INTO `hhc_city` VALUES ('3142', '泾源县', '357', '0');
INSERT INTO `hhc_city` VALUES ('3143', '彭阳县', '357', '0');
INSERT INTO `hhc_city` VALUES ('3144', '沙坡头区', '358', '0');
INSERT INTO `hhc_city` VALUES ('3145', '中宁县', '358', '0');
INSERT INTO `hhc_city` VALUES ('3146', '海原县', '358', '0');
INSERT INTO `hhc_city` VALUES ('3147', '天山区', '359', '0');
INSERT INTO `hhc_city` VALUES ('3148', '沙依巴克区', '359', '0');
INSERT INTO `hhc_city` VALUES ('3149', '新市区', '359', '0');
INSERT INTO `hhc_city` VALUES ('3150', '水磨沟区', '359', '0');
INSERT INTO `hhc_city` VALUES ('3151', '头屯河区', '359', '0');
INSERT INTO `hhc_city` VALUES ('3152', '达坂城区', '359', '0');
INSERT INTO `hhc_city` VALUES ('3153', '东山区', '359', '0');
INSERT INTO `hhc_city` VALUES ('3154', '乌鲁木齐县', '359', '0');
INSERT INTO `hhc_city` VALUES ('3155', '独山子区', '360', '0');
INSERT INTO `hhc_city` VALUES ('3156', '克拉玛依区', '360', '0');
INSERT INTO `hhc_city` VALUES ('3157', '白碱滩区', '360', '0');
INSERT INTO `hhc_city` VALUES ('3158', '乌尔禾区', '360', '0');
INSERT INTO `hhc_city` VALUES ('3159', '吐鲁番市', '361', '0');
INSERT INTO `hhc_city` VALUES ('3160', '鄯善县', '361', '0');
INSERT INTO `hhc_city` VALUES ('3161', '托克逊县', '361', '0');
INSERT INTO `hhc_city` VALUES ('3162', '哈密市', '362', '0');
INSERT INTO `hhc_city` VALUES ('3163', '巴里坤哈萨克自治县', '362', '0');
INSERT INTO `hhc_city` VALUES ('3164', '伊吾县', '362', '0');
INSERT INTO `hhc_city` VALUES ('3165', '昌吉市', '363', '0');
INSERT INTO `hhc_city` VALUES ('3166', '阜康市', '363', '0');
INSERT INTO `hhc_city` VALUES ('3167', '米泉市', '363', '0');
INSERT INTO `hhc_city` VALUES ('3168', '呼图壁县', '363', '0');
INSERT INTO `hhc_city` VALUES ('3169', '玛纳斯县', '363', '0');
INSERT INTO `hhc_city` VALUES ('3170', '奇台县', '363', '0');
INSERT INTO `hhc_city` VALUES ('3171', '吉木萨尔县', '363', '0');
INSERT INTO `hhc_city` VALUES ('3172', '木垒哈萨克自治县', '363', '0');
INSERT INTO `hhc_city` VALUES ('3173', '博乐市', '364', '0');
INSERT INTO `hhc_city` VALUES ('3174', '精河县', '364', '0');
INSERT INTO `hhc_city` VALUES ('3175', '温泉县', '364', '0');
INSERT INTO `hhc_city` VALUES ('3176', '库尔勒市', '365', '0');
INSERT INTO `hhc_city` VALUES ('3177', '轮台县', '365', '0');
INSERT INTO `hhc_city` VALUES ('3178', '尉犁县', '365', '0');
INSERT INTO `hhc_city` VALUES ('3179', '若羌县', '365', '0');
INSERT INTO `hhc_city` VALUES ('3180', '且末县', '365', '0');
INSERT INTO `hhc_city` VALUES ('3181', '焉耆回族自治县', '365', '0');
INSERT INTO `hhc_city` VALUES ('3182', '和静县', '365', '0');
INSERT INTO `hhc_city` VALUES ('3183', '和硕县', '365', '0');
INSERT INTO `hhc_city` VALUES ('3184', '博湖县', '365', '0');
INSERT INTO `hhc_city` VALUES ('3185', '阿克苏市', '366', '0');
INSERT INTO `hhc_city` VALUES ('3186', '温宿县', '366', '0');
INSERT INTO `hhc_city` VALUES ('3187', '库车县', '366', '0');
INSERT INTO `hhc_city` VALUES ('3188', '沙雅县', '366', '0');
INSERT INTO `hhc_city` VALUES ('3189', '新和县', '366', '0');
INSERT INTO `hhc_city` VALUES ('3190', '拜城县', '366', '0');
INSERT INTO `hhc_city` VALUES ('3191', '乌什县', '366', '0');
INSERT INTO `hhc_city` VALUES ('3192', '阿瓦提县', '366', '0');
INSERT INTO `hhc_city` VALUES ('3193', '柯坪县', '366', '0');
INSERT INTO `hhc_city` VALUES ('3194', '阿图什市', '367', '0');
INSERT INTO `hhc_city` VALUES ('3195', '阿克陶县', '367', '0');
INSERT INTO `hhc_city` VALUES ('3196', '阿合奇县', '367', '0');
INSERT INTO `hhc_city` VALUES ('3197', '乌恰县', '367', '0');
INSERT INTO `hhc_city` VALUES ('3198', '喀什市', '368', '0');
INSERT INTO `hhc_city` VALUES ('3199', '疏附县', '368', '0');
INSERT INTO `hhc_city` VALUES ('3200', '疏勒县', '368', '0');
INSERT INTO `hhc_city` VALUES ('3201', '英吉沙县', '368', '0');
INSERT INTO `hhc_city` VALUES ('3202', '泽普县', '368', '0');
INSERT INTO `hhc_city` VALUES ('3203', '莎车县', '368', '0');
INSERT INTO `hhc_city` VALUES ('3204', '叶城县', '368', '0');
INSERT INTO `hhc_city` VALUES ('3205', '麦盖提县', '368', '0');
INSERT INTO `hhc_city` VALUES ('3206', '岳普湖县', '368', '0');
INSERT INTO `hhc_city` VALUES ('3207', '伽师县', '368', '0');
INSERT INTO `hhc_city` VALUES ('3208', '巴楚县', '368', '0');
INSERT INTO `hhc_city` VALUES ('3209', '塔什库尔干塔吉克自治县', '368', '0');
INSERT INTO `hhc_city` VALUES ('3210', '和田市', '369', '0');
INSERT INTO `hhc_city` VALUES ('3211', '和田县', '369', '0');
INSERT INTO `hhc_city` VALUES ('3212', '墨玉县', '369', '0');
INSERT INTO `hhc_city` VALUES ('3213', '皮山县', '369', '0');
INSERT INTO `hhc_city` VALUES ('3214', '洛浦县', '369', '0');
INSERT INTO `hhc_city` VALUES ('3215', '策勒县', '369', '0');
INSERT INTO `hhc_city` VALUES ('3216', '于田县', '369', '0');
INSERT INTO `hhc_city` VALUES ('3217', '民丰县', '369', '0');
INSERT INTO `hhc_city` VALUES ('3218', '伊宁市', '370', '0');
INSERT INTO `hhc_city` VALUES ('3219', '奎屯市', '370', '0');
INSERT INTO `hhc_city` VALUES ('3220', '伊宁县', '370', '0');
INSERT INTO `hhc_city` VALUES ('3221', '察布查尔锡伯自治县', '370', '0');
INSERT INTO `hhc_city` VALUES ('3222', '霍城县', '370', '0');
INSERT INTO `hhc_city` VALUES ('3223', '巩留县', '370', '0');
INSERT INTO `hhc_city` VALUES ('3224', '新源县', '370', '0');
INSERT INTO `hhc_city` VALUES ('3225', '昭苏县', '370', '0');
INSERT INTO `hhc_city` VALUES ('3226', '特克斯县', '370', '0');
INSERT INTO `hhc_city` VALUES ('3227', '尼勒克县', '370', '0');
INSERT INTO `hhc_city` VALUES ('3228', '塔城市', '371', '0');
INSERT INTO `hhc_city` VALUES ('3229', '乌苏市', '371', '0');
INSERT INTO `hhc_city` VALUES ('3230', '额敏县', '371', '0');
INSERT INTO `hhc_city` VALUES ('3231', '沙湾县', '371', '0');
INSERT INTO `hhc_city` VALUES ('3232', '托里县', '371', '0');
INSERT INTO `hhc_city` VALUES ('3233', '裕民县', '371', '0');
INSERT INTO `hhc_city` VALUES ('3234', '和布克赛尔蒙古自治县', '371', '0');
INSERT INTO `hhc_city` VALUES ('3235', '阿勒泰市', '372', '0');
INSERT INTO `hhc_city` VALUES ('3236', '布尔津县', '372', '0');
INSERT INTO `hhc_city` VALUES ('3237', '富蕴县', '372', '0');
INSERT INTO `hhc_city` VALUES ('3238', '福海县', '372', '0');
INSERT INTO `hhc_city` VALUES ('3239', '哈巴河县', '372', '0');
INSERT INTO `hhc_city` VALUES ('3240', '青河县', '372', '0');
INSERT INTO `hhc_city` VALUES ('3241', '吉木乃县', '372', '0');

-- ----------------------------
-- Table structure for `hhc_config`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_config`;
CREATE TABLE `hhc_config` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `k` varchar(20) NOT NULL DEFAULT '',
  `v` varchar(1000) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `k` (`k`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_config
-- ----------------------------
INSERT INTO `hhc_config` VALUES ('1', 'err_num', '5');
INSERT INTO `hhc_config` VALUES ('2', 'err_time', '600');
INSERT INTO `hhc_config` VALUES ('3', 'lang_title', '乐随贸易');
INSERT INTO `hhc_config` VALUES ('4', 'short_title', '上海乐随贸易有限公司');
INSERT INTO `hhc_config` VALUES ('5', 'icp', '沪ICP备14034501号');
INSERT INTO `hhc_config` VALUES ('6', 'tongji', '<script type=\"text/javascript\">var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");document.write(unescape(\"%3Cspan id=\'cnzz_stat_icon_1000267880\'%3E%3C/span%3E%3Cscript src=\'\" + cnzz_protocol + \"s96.cnzz.com/z_stat.php%3Fid%3D1000267880%26show%3Dpic\' type=\'text/javascript\'%3E%3C/script%3E\"));</script>');
INSERT INTO `hhc_config` VALUES ('7', 'logo', './sundry/uploads/20150203/1422928220706.gif');
INSERT INTO `hhc_config` VALUES ('8', 'kaiqi', '1');
INSERT INTO `hhc_config` VALUES ('9', 'close_tishi', '12');
INSERT INTO `hhc_config` VALUES ('10', 'logo_old_name', '1421909766907.gif');
INSERT INTO `hhc_config` VALUES ('11', 'zhuce', '1');
INSERT INTO `hhc_config` VALUES ('12', 'goumai_yzm', '1');
INSERT INTO `hhc_config` VALUES ('13', 'goumai_yzm_name', '获取验证码');
INSERT INTO `hhc_config` VALUES ('14', 'goumai_yzm_type', '0');
INSERT INTO `hhc_config` VALUES ('15', 'goumai_yzm_link', 'http://www.ithhc.cn');
INSERT INTO `hhc_config` VALUES ('16', 'close_zhuce_msg', '注册关闭了awdd');
INSERT INTO `hhc_config` VALUES ('17', 'zhuce_jiaose', '2');
INSERT INTO `hhc_config` VALUES ('18', 'youjian_zhuce', '0');
INSERT INTO `hhc_config` VALUES ('19', 'pingbi_tishi', '用户名已被注册');
INSERT INTO `hhc_config` VALUES ('20', 'short_name', '5adw');
INSERT INTO `hhc_config` VALUES ('21', 'lang_name', '20');
INSERT INTO `hhc_config` VALUES ('22', 'short_pwd', '5');
INSERT INTO `hhc_config` VALUES ('23', 'lang_pwd', '30awd');
INSERT INTO `hhc_config` VALUES ('24', 'kaitong_zhuye', '0');
INSERT INTO `hhc_config` VALUES ('25', 'zhuce_shenhe', '0');
INSERT INTO `hhc_config` VALUES ('26', 'zhuce_zhuangtai', '0');
INSERT INTO `hhc_config` VALUES ('27', 'shixi_time', '20dawd');
INSERT INTO `hhc_config` VALUES ('28', 'zhuce_leixing', '1');
INSERT INTO `hhc_config` VALUES ('29', 'lve_gao', '100');
INSERT INTO `hhc_config` VALUES ('30', 'lve_kuan', '100');
INSERT INTO `hhc_config` VALUES ('31', 'img_gao', '600');
INSERT INTO `hhc_config` VALUES ('32', 'img_kuan', '300');
INSERT INTO `hhc_config` VALUES ('33', 'img_size', '10242');
INSERT INTO `hhc_config` VALUES ('34', 'fu_size', '1024');
INSERT INTO `hhc_config` VALUES ('35', 'water_start', '0');
INSERT INTO `hhc_config` VALUES ('36', 'water_kuan', '280');
INSERT INTO `hhc_config` VALUES ('37', 'water_gao', '200');
INSERT INTO `hhc_config` VALUES ('38', 'water_img', './sundry/uploads/20140824/1408866564405.jpg');
INSERT INTO `hhc_config` VALUES ('39', 'water_op', '100');
INSERT INTO `hhc_config` VALUES ('40', 'water_weizhi', '5');
INSERT INTO `hhc_config` VALUES ('43', 'jinbi', '金币');
INSERT INTO `hhc_config` VALUES ('42', 'jifen', '积分');
INSERT INTO `hhc_config` VALUES ('41', 'water_img_o', 'delete.jpg');
INSERT INTO `hhc_config` VALUES ('44', 'jindou', '金豆');
INSERT INTO `hhc_config` VALUES ('45', 'weibo_shenhe', '0');
INSERT INTO `hhc_config` VALUES ('46', 'tuiguang_jifen', '2');
INSERT INTO `hhc_config` VALUES ('47', 'tuiguang_jindou', '0');
INSERT INTO `hhc_config` VALUES ('48', 'tuiguang_jinbi', '0');
INSERT INTO `hhc_config` VALUES ('49', 'banben', '1.02');

-- ----------------------------
-- Table structure for `hhc_custom`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_custom`;
CREATE TABLE `hhc_custom` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cn_name` varchar(20) NOT NULL DEFAULT '',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `en_name` varchar(20) NOT NULL DEFAULT '',
  `tpl` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_custom
-- ----------------------------
INSERT INTO `hhc_custom` VALUES ('3', '关于我们', '1', 'gywm', 'default');
INSERT INTO `hhc_custom` VALUES ('4', '联系地址', '1', 'lxdz', 'default');
INSERT INTO `hhc_custom` VALUES ('7', '留言反馈', '2', 'lyfk', 'default');
INSERT INTO `hhc_custom` VALUES ('9', '首页banner', '3', 'banner', '');

-- ----------------------------
-- Table structure for `hhc_danye`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_danye`;
CREATE TABLE `hhc_danye` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `k` varchar(20) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `k` (`k`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_danye
-- ----------------------------
INSERT INTO `hhc_danye` VALUES ('2', 'gywm', '1', '<p>xx</p>');
INSERT INTO `hhc_danye` VALUES ('3', 'lxdz', '联系地址', '<p>小娃儿都</p>');

-- ----------------------------
-- Table structure for `hhc_dingdan`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_dingdan`;
CREATE TABLE `hhc_dingdan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `data` text,
  `return_url` varchar(200) NOT NULL DEFAULT '',
  `fukuan` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `fukuan` (`fukuan`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_dingdan
-- ----------------------------
INSERT INTO `hhc_dingdan` VALUES ('1', '1413616412', '1', '', '', '0', '0');
INSERT INTO `hhc_dingdan` VALUES ('2', '1413616450', '1', '', '', '0', '0');
INSERT INTO `hhc_dingdan` VALUES ('3', '1413616538', '1', '{\"title\":\"u91d1u5e011u4e2a\",\"danjia\":\"1\",\"num\":1}', '', '0', '0');
INSERT INTO `hhc_dingdan` VALUES ('4', '1413616618', '1', '{\"title\":\"u91d1u5e011u4e2a\",\"danjia\":\"1\",\"num\":1}', '', '0', '0');
INSERT INTO `hhc_dingdan` VALUES ('5', '1413616716', '1', '{\"title\":\"u91d1u5e015u4e2a\",\"danjia\":\"1\",\"num\":5}', '', '0', '0');
INSERT INTO `hhc_dingdan` VALUES ('6', '1413616764', '1', '{\"title\":\"u91d1u5e015u4e2a\",\"danjia\":\"1\",\"num\":5}', '', '0', '1');
INSERT INTO `hhc_dingdan` VALUES ('7', '1413684320', '1', '{\"title\":\"u91d1u5e011u4e2a\",\"danjia\":\"1\",\"num\":1}', 'http://ithhc.cn/user.php?h=ziliao&c=jinbi', '0', '1');
INSERT INTO `hhc_dingdan` VALUES ('8', '1413684444', '1', '{\"title\":\"u91d1u5e011u4e2a\",\"danjia\":\"1\",\"num\":1}', 'http://ithhc.cn/user.php?h=ziliao&c=jinbi', '0', '1');
INSERT INTO `hhc_dingdan` VALUES ('9', '1413684562', '1', '{\"title\":\"u91d1u5e011u4e2a\",\"danjia\":\"1\",\"num\":1}', 'http://ithhc.cn/user.php?h=ziliao&c=jinbi', '0', '1');
INSERT INTO `hhc_dingdan` VALUES ('10', '1413684617', '1', '{\"title\":\"u91d1u5e011u4e2a\",\"danjia\":\"1\",\"num\":1}', 'http://ithhc.cn/user.php?h=ziliao&c=jinbi', '0', '1');
INSERT INTO `hhc_dingdan` VALUES ('11', '1413684815', '1', '{\"title\":\"u91d1u5e011u4e2a\",\"danjia\":\"1\",\"num\":1}', 'http://ithhc.cn/user.php?h=ziliao&c=jinbi', '0', '1');

-- ----------------------------
-- Table structure for `hhc_extended_settings`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_extended_settings`;
CREATE TABLE `hhc_extended_settings` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `k` varchar(30) NOT NULL DEFAULT '',
  `v` text NOT NULL,
  `ziduan_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `k` (`k`),
  KEY `ziduan_id` (`ziduan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_extended_settings
-- ----------------------------
INSERT INTO `hhc_extended_settings` VALUES ('4', 'jieshao', '公司主要代理施耐德旗下，奇胜，梅兰日兰品牌的开关、插座、断路器弱电箱等所有产品，主要是通过团购网和淘宝商城等网络销售为主，和装饰单位合作,天猫首家施耐德授权专卖店一家崇尚自由、活力的新型小企业', '5');
INSERT INTO `hhc_extended_settings` VALUES ('8', 'keywords', '乐随 施耐德 天猫 贸易 团购', '0');
INSERT INTO `hhc_extended_settings` VALUES ('9', 'description', '司主要代理施耐德旗下，奇胜，梅兰日兰品牌的开关、插座、断路器弱电箱等所有产品', '0');
INSERT INTO `hhc_extended_settings` VALUES ('10', 'is_static', '', '0');

-- ----------------------------
-- Table structure for `hhc_extended_settings_ziduan`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_extended_settings_ziduan`;
CREATE TABLE `hhc_extended_settings_ziduan` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cn_name` varchar(30) NOT NULL DEFAULT '',
  `en_name` varchar(30) NOT NULL DEFAULT '',
  `default_val` varchar(800) NOT NULL DEFAULT '',
  `tishi` varchar(300) NOT NULL DEFAULT '',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `xitong` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `guolv` tinyint(4) NOT NULL DEFAULT '0',
  `dan_type` tinyint(4) NOT NULL DEFAULT '0',
  `duo_type` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_extended_settings_ziduan
-- ----------------------------
INSERT INTO `hhc_extended_settings_ziduan` VALUES ('5', '网站介绍', 'jieshao', '', '网站右上角介绍', '1', '1', '0', '0', '');
INSERT INTO `hhc_extended_settings_ziduan` VALUES ('11', '开启伪静态', 'is_static', '开启', '', '5', '1', '0', '0', '');
INSERT INTO `hhc_extended_settings_ziduan` VALUES ('9', '网站关键词', 'keywords', '', '网站关键词 多个用英文逗号隔开', '0', '1', '0', '0', '');
INSERT INTO `hhc_extended_settings_ziduan` VALUES ('10', '网站描述', 'description', '', '网站描述', '1', '1', '0', '0', '');

-- ----------------------------
-- Table structure for `hhc_fenlei`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_fenlei`;
CREATE TABLE `hhc_fenlei` (
  `fenlei_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `moxing_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `top_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ziduan_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `fenlei_name` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`fenlei_id`),
  KEY `moxing_id` (`moxing_id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_fenlei
-- ----------------------------
INSERT INTO `hhc_fenlei` VALUES ('1', '0', '1', '0', 'dwa');
INSERT INTO `hhc_fenlei` VALUES ('2', '0', '0', '0', 'daw');
INSERT INTO `hhc_fenlei` VALUES ('3', '0', '0', '0', 'daw');
INSERT INTO `hhc_fenlei` VALUES ('4', '0', '0', '40', 'daw');
INSERT INTO `hhc_fenlei` VALUES ('5', '0', '0', '40', 'dwa');
INSERT INTO `hhc_fenlei` VALUES ('6', '0', '0', '41', 'daw');
INSERT INTO `hhc_fenlei` VALUES ('7', '0', '0', '42', 'efs');
INSERT INTO `hhc_fenlei` VALUES ('11', '0', '0', '40', 'daw');
INSERT INTO `hhc_fenlei` VALUES ('12', '0', '0', '40', 'dwa');
INSERT INTO `hhc_fenlei` VALUES ('13', '0', '0', '40', 'daw');
INSERT INTO `hhc_fenlei` VALUES ('14', '0', '0', '40', 'dwa');
INSERT INTO `hhc_fenlei` VALUES ('51', '0', '0', '77', 'xx');
INSERT INTO `hhc_fenlei` VALUES ('50', '0', '0', '77', '分类');
INSERT INTO `hhc_fenlei` VALUES ('49', '0', '0', '77', '分类');

-- ----------------------------
-- Table structure for `hhc_hdp`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_hdp`;
CREATE TABLE `hhc_hdp` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `alt` varchar(50) NOT NULL DEFAULT '',
  `con` varchar(500) NOT NULL DEFAULT '',
  `pic` varchar(200) NOT NULL DEFAULT '',
  `custom_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `paixu` smallint(5) unsigned NOT NULL DEFAULT '0',
  `xianshi` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `custom_id` (`custom_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_hdp
-- ----------------------------
INSERT INTO `hhc_hdp` VALUES ('1', '图片1', '图片1', '图片1', './sundry/uploads/20140926/1411721982224.jpg', '9', '60000', '1');

-- ----------------------------
-- Table structure for `hhc_level`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_level`;
CREATE TABLE `hhc_level` (
  `level_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `paixu` smallint(5) unsigned NOT NULL DEFAULT '0',
  `level_name` varchar(20) NOT NULL DEFAULT '',
  `level_color` varchar(7) NOT NULL DEFAULT '#000000',
  `level_class` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `xitong` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `experience` int(10) unsigned NOT NULL DEFAULT '0',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `yxys` tinyint(4) NOT NULL DEFAULT '0',
  `fbwz` tinyint(4) NOT NULL DEFAULT '0',
  `ydwz` tinyint(4) NOT NULL DEFAULT '0',
  `fbrz` tinyint(4) NOT NULL DEFAULT '0',
  `fbsp` tinyint(4) NOT NULL DEFAULT '0',
  `fbxqwb` tinyint(4) NOT NULL DEFAULT '0',
  `yxscxc` tinyint(4) NOT NULL DEFAULT '0',
  `fbpl` tinyint(4) NOT NULL DEFAULT '0',
  `wzss` tinyint(4) NOT NULL DEFAULT '0',
  `yxfznxx` tinyint(4) NOT NULL DEFAULT '0',
  `yxfyj` tinyint(4) NOT NULL DEFAULT '0',
  `yxfssjdx` tinyint(4) NOT NULL DEFAULT '0',
  `yxtjhy` tinyint(4) NOT NULL DEFAULT '0',
  `yxsygxqm` tinyint(4) NOT NULL DEFAULT '0',
  `yxjgz` tinyint(4) NOT NULL DEFAULT '0',
  `yxfbxlcs` tinyint(4) NOT NULL DEFAULT '0',
  `yxktwdzy` tinyint(4) NOT NULL DEFAULT '0',
  `yxsyejym` tinyint(4) NOT NULL DEFAULT '0',
  `ckwzwsjm` tinyint(4) NOT NULL DEFAULT '0',
  `yxscwz` tinyint(4) NOT NULL DEFAULT '0',
  `yxscpl` tinyint(4) NOT NULL DEFAULT '0',
  `yxsdyh` tinyint(4) NOT NULL DEFAULT '0',
  `fbwzyxsylj` tinyint(4) NOT NULL DEFAULT '0',
  `fbwzbxysh` tinyint(4) NOT NULL DEFAULT '0',
  `fbplbxysh` tinyint(4) NOT NULL DEFAULT '0',
  `fbwbbxysh` tinyint(4) NOT NULL DEFAULT '0',
  `jingyan` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `jifen` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `qianming` smallint(5) unsigned NOT NULL DEFAULT '0',
  `cunchu` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`level_id`),
  KEY `level_class` (`level_class`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_level
-- ----------------------------
INSERT INTO `hhc_level` VALUES ('7', '10', '平民', '#000000', '1', '1', '0', '255', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('8', '61000', '皇上', '#FF0000', '63', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('9', '60999', '丞相', '#000099', '62', '1', '0', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('10', '60998', '太尉', '#000099', '61', '1', '0', '3', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('11', '1', '囚犯', '#666666', '0', '1', '0', '4', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('12', '0', '游客', '#FF33CC', '0', '1', '0', '5', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('13', '60000', '太师', '#0000FF', '60', '0', '5000000', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('14', '58000', '太傅', '#00FF00', '59', '0', '4359523', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('15', '57999', '太保', '#00FF00', '58', '0', '3963203', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('16', '57998', '殿阁大学士', '#990000', '57', '0', '3602911', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('17', '57997', '领侍卫内', '#990000', '56', '0', '3275374', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('18', '57996', '掌銮仪卫事', '#990000', '55', '0', '2977613', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('19', '57995', '车骑大将军', '#660066', '54', '0', '2706921', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('20', '57994', '都事', '#660066', '53', '0', '2460837', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('21', '57993', '太子太师', '#660066', '52', '0', '2237125', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('22', '57992', '吏部尚书', '#FFFF00', '51', '0', '2033746', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('23', '57991', '户部尚书', '#FFFF00', '50', '0', '1848863', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('24', '57990', '礼部尚书', '#FFFF00', '49', '0', '1680782', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('25', '57989', '兵部尚书', '#FFFF00', '48', '0', '1400654', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('26', '57988', '刑部尚书', '#FFFF00', '47', '0', '1273321', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('27', '57987', '工部尚书', '#FFFF00', '46', '0', '1157565', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('28', '57986', '提督九门步军巡捕统领', '#66FFCC', '45', '0', '1052332', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('29', '57985', '内大臣', '#66FFCC', '44', '0', '876943', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('30', '57984', '将军', '#66FFCC', '43', '0', '730786', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('31', '57983', '都统', '#66FFCC', '42', '0', '670446', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('32', '57982', '提督', '#66FFCC', '41', '0', '615088', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('33', '57981', '行军总管', '#66FFCC', '40', '0', '564301', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('34', '57980', '尚书令', '#FF0066', '39', '0', '517707', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('35', '57979', '光禄大夫', '#FF0066', '38', '0', '464660', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('36', '57978', '中书令', '#FF0066', '37', '0', '431782', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('37', '57977', '廷尉', '#FF0066', '36', '0', '392529', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('38', '57976', '督察院御史', '#66FF33', '35', '0', '356845', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('39', '57975', '左右翼前锋营统领', '#66FF33', '34', '0', '324404', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('40', '57974', '八旗护军统领', '#66FF33', '33', '0', '268103', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('41', '57973', '銮仪使', '#66FF33', '32', '0', '243730', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('42', '57972', '副都统', '#66FF33', '31', '0', '221572', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('43', '57971', '总兵', '#66FF33', '30', '0', '201429', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('44', '57970', '内阁学士', '#993300', '29', '0', '183117', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('45', '57969', '翰林院掌院学士', '#993300', '28', '0', '166470', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('46', '57968', '巡抚', '#993300', '27', '0', '151337', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('47', '57967', '布政使司布政使', '#993300', '26', '0', '137579', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('48', '57966', '王府长史', '#993300', '25', '0', '125072', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('49', '57965', '五旗参领', '#993300', '24', '0', '113701', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('50', '57964', '税课大使', '#993300', '23', '0', '103365', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('51', '57963', '推官', '#993300', '22', '0', '86137', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('52', '57962', '知府', '#000000', '21', '0', '66259', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('53', '57961', '总镇', '#000000', '20', '0', '50969', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('54', '57960', '通判', '#000000', '19', '0', '39207', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('55', '57959', '参将', '#000000', '18', '0', '32805', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('56', '57958', '京兆尹', '#000000', '17', '0', '21870', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('57', '57957', '兵马指挥', '#000000', '16', '0', '14580', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('58', '57956', '游击', '#000000', '15', '0', '9720', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('59', '57955', '都司', '#000000', '14', '0', '6480', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('60', '57954', '刺史', '#000000', '13', '0', '4320', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('61', '57953', '知州', '#000000', '12', '0', '2880', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('62', '57952', '越骑校尉', '#000000', '11', '0', '1920', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('63', '57951', '太守', '#000000', '10', '0', '1280', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('64', '57950', '州同', '#000000', '9', '0', '640', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('65', '57949', '知县', '#000000', '8', '0', '320', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('66', '57948', '侍郎', '#000000', '7', '0', '160', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('67', '57947', '吏目', '#000000', '6', '0', '80', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('68', '57946', '巡检', '#000000', '5', '0', '40', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('69', '57945', '捕快', '#000000', '4', '0', '20', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('70', '57944', '衙役', '#000000', '3', '0', '10', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');
INSERT INTO `hhc_level` VALUES ('71', '57943', '门候', '#000000', '2', '0', '5', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1000', '20');

-- ----------------------------
-- Table structure for `hhc_links`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_links`;
CREATE TABLE `hhc_links` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `link` varchar(100) NOT NULL DEFAULT '',
  `paixu` smallint(5) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_links
-- ----------------------------
INSERT INTO `hhc_links` VALUES ('2', '郝海川博客', 'http://ithhc.cn', '10', '1418111289');
INSERT INTO `hhc_links` VALUES ('3', '百度一下', 'http://baidu.com', '1', '1418111303');

-- ----------------------------
-- Table structure for `hhc_lyfk`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_lyfk`;
CREATE TABLE `hhc_lyfk` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fasongzhe` varchar(100) NOT NULL DEFAULT '',
  `neirong` varchar(800) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `huifu` varchar(100) NOT NULL DEFAULT '',
  `time` varchar(20) NOT NULL DEFAULT '',
  `pic` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_lyfk
-- ----------------------------
INSERT INTO `hhc_lyfk` VALUES ('12', '咨询一下', '咨询一下。', '18611111111', '请留言。', '2015-01-22 10:09', './sundry/static_file/img/pic/1.jpg');

-- ----------------------------
-- Table structure for `hhc_mail`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_mail`;
CREATE TABLE `hhc_mail` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `k` varchar(20) NOT NULL DEFAULT '',
  `v` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `k` (`k`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_mail
-- ----------------------------
INSERT INTO `hhc_mail` VALUES ('1', 'server', 'smtp.qq.com');
INSERT INTO `hhc_mail` VALUES ('2', 'user_name', '1952143929@qq.com');
INSERT INTO `hhc_mail` VALUES ('3', 'user_pwd', 'hao11322');
INSERT INTO `hhc_mail` VALUES ('4', 'mail', '1952143929@qq.com');

-- ----------------------------
-- Table structure for `hhc_moxing`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_moxing`;
CREATE TABLE `hhc_moxing` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `pic` varchar(200) NOT NULL DEFAULT '',
  `moxing_ziduan_table_name` varchar(50) NOT NULL DEFAULT '',
  `author` varchar(10) NOT NULL DEFAULT '',
  `fabu_quanxian` tinyint(4) NOT NULL DEFAULT '0',
  `fabu_level` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `con_name` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `moxing_ziduan_table_name` (`moxing_ziduan_table_name`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_moxing
-- ----------------------------

-- ----------------------------
-- Table structure for `hhc_myform`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_myform`;
CREATE TABLE `hhc_myform` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cn_name` varchar(20) NOT NULL DEFAULT '',
  `en_name` varchar(20) NOT NULL DEFAULT '',
  `hc` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `type` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tishi` varchar(100) NOT NULL DEFAULT '',
  `xianshi` tinyint(4) NOT NULL DEFAULT '1',
  `paixu` smallint(5) unsigned NOT NULL DEFAULT '0',
  `k` varchar(20) NOT NULL DEFAULT '',
  `custom_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `list_xianshi` tinyint(4) NOT NULL DEFAULT '0',
  `defaults` varchar(500) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_myform
-- ----------------------------
INSERT INTO `hhc_myform` VALUES ('16', '用户名', 'user_name', '1', '101', '用户名称，不能超过50个字符，可以使用中文、英文、数字、除单双引号外的其他特殊字符', '1', '60000', '', '0', '0', '');
INSERT INTO `hhc_myform` VALUES ('2', '密码', 'user_pwd', '1', '102', '用户密码，不能超过50个字符，可以使用英文、数字、除单双引号外的其他特殊字符', '1', '59999', '', '0', '0', '');
INSERT INTO `hhc_myform` VALUES ('3', '确认密码', 'rep_pwd', '1', '103', '请重复输入密码', '1', '59998', '', '0', '0', '');
INSERT INTO `hhc_myform` VALUES ('4', '真实姓名/企业名称', 'username', '1', '104', '用户的真实姓名，或者企业的名称，不能超过30个字符', '0', '100', '', '0', '0', '');
INSERT INTO `hhc_myform` VALUES ('5', '性别', 'sex', '1', '105', '', '1', '100', '', '0', '0', '');
INSERT INTO `hhc_myform` VALUES ('6', '出生日期', 'birthday', '1', '106', '', '0', '100', '', '0', '1', '');
INSERT INTO `hhc_myform` VALUES ('7', '头像', 'pic', '1', '107', '', '0', '100', '', '0', '1', '');
INSERT INTO `hhc_myform` VALUES ('19', '个人简介', 'grjj', '1', '2', '个人简介，可以是一段文字,300个字符以内', '0', '0', 'reg', '0', '0', '');
INSERT INTO `hhc_myform` VALUES ('11', '标题', 'biaoti', '0', '1', '标题，不能超过100个字符', '1', '0', '', '7', '0', '');
INSERT INTO `hhc_myform` VALUES ('20', '发送者', 'fasongzhe', '0', '1', '发送消息的用户 如果未登录 则是游客', '1', '0', 'lyfk', '0', '1', '');
INSERT INTO `hhc_myform` VALUES ('21', '内容', 'neirong', '0', '2', '留言的内容', '1', '0', 'lyfk', '0', '1', '');
INSERT INTO `hhc_myform` VALUES ('22', '联系方式', 'title', '0', '1', '留言标题', '1', '0', 'lyfk', '0', '1', '');
INSERT INTO `hhc_myform` VALUES ('23', '回复', 'huifu', '0', '2', '管理员回复', '1', '0', 'lyfk', '0', '1', '');
INSERT INTO `hhc_myform` VALUES ('24', '时间', 'time', '0', '1', '', '1', '0', 'lyfk', '0', '0', '');
INSERT INTO `hhc_myform` VALUES ('25', '头像', 'pic', '0', '1', '', '1', '0', 'lyfk', '0', '0', '');

-- ----------------------------
-- Table structure for `hhc_nav`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_nav`;
CREATE TABLE `hhc_nav` (
  `nav_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nav_name` varchar(20) NOT NULL DEFAULT '',
  `nav_parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `nav_type` tinyint(4) NOT NULL DEFAULT '0',
  `nav_link` varchar(200) NOT NULL DEFAULT '',
  `nav_paixu` smallint(5) unsigned NOT NULL DEFAULT '0',
  `nav_shouye` tinyint(4) NOT NULL DEFAULT '0',
  `nav_xianshi` tinyint(4) NOT NULL DEFAULT '1',
  `nav_yincang` varchar(20) NOT NULL DEFAULT '',
  `nav_moxing` smallint(5) unsigned NOT NULL DEFAULT '0',
  `nav_dakai` tinyint(4) NOT NULL DEFAULT '0',
  `fabu` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_nav
-- ----------------------------
INSERT INTO `hhc_nav` VALUES ('25', '站点首页', '0', '100', 'index.php', '999', '0', '0', '', '0', '0', '1');
INSERT INTO `hhc_nav` VALUES ('31', '站点首页', '0', '0', 'web.php', '60000', '1', '1', '站点首页', '0', '0', '0');
INSERT INTO `hhc_nav` VALUES ('32', '新闻动态', '0', '0', 'web.php?h=index&c=news', '59555', '0', '1', '新闻动态', '0', '0', '0');
INSERT INTO `hhc_nav` VALUES ('33', '产品展示', '0', '0', 'web.php?h=index&c=product', '59444', '0', '1', '产品展示', '0', '0', '0');
INSERT INTO `hhc_nav` VALUES ('34', '留言反馈', '0', '0', 'web.php?h=index&c=comment', '55000', '0', '1', '留言反馈', '0', '0', '0');
INSERT INTO `hhc_nav` VALUES ('36', '人才招聘', '0', '0', 'web.php?h=index&c=jobs', '54000', '0', '1', '人才招聘', '0', '0', '0');
INSERT INTO `hhc_nav` VALUES ('37', '客户服务', '0', '0', 'web.php?h=index&c=user', '53000', '0', '1', '客户服务', '0', '0', '0');

-- ----------------------------
-- Table structure for `hhc_pay_type`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_pay_type`;
CREATE TABLE `hhc_pay_type` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `paixu` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `pic` varchar(100) NOT NULL DEFAULT '',
  `yingyong` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `shuoming` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_pay_type
-- ----------------------------
INSERT INTO `hhc_pay_type` VALUES ('1', '支付宝', '200', './sundry/static_file/img/alipay.gif', '1', '使用支付宝在线支付');
INSERT INTO `hhc_pay_type` VALUES ('2', '财付通', '150', './sundry/static_file/img/tenpay.gif', '0', '使用财付通在线支付');

-- ----------------------------
-- Table structure for `hhc_pic`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_pic`;
CREATE TABLE `hhc_pic` (
  `pic_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `moxing_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ziduan_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `art_id` int(10) unsigned NOT NULL DEFAULT '0',
  `pic_path` varchar(200) NOT NULL DEFAULT '',
  `pic_title` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`pic_id`),
  KEY `art_id` (`art_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_pic
-- ----------------------------

-- ----------------------------
-- Table structure for `hhc_pinglun`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_pinglun`;
CREATE TABLE `hhc_pinglun` (
  `pinglun_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `moxing_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `lanmu_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `art_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `con` text NOT NULL,
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `zhuangtai` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `hf_con` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`pinglun_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_pinglun
-- ----------------------------

-- ----------------------------
-- Table structure for `hhc_rizhi_fenzu`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_rizhi_fenzu`;
CREATE TABLE `hhc_rizhi_fenzu` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `xianshi` tinyint(4) NOT NULL DEFAULT '1',
  `paixu` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `xianshi` (`xianshi`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_rizhi_fenzu
-- ----------------------------
INSERT INTO `hhc_rizhi_fenzu` VALUES ('2', '公司新闻', '1', '1', '100');
INSERT INTO `hhc_rizhi_fenzu` VALUES ('4', '编程日志', '1', '1', '0');
INSERT INTO `hhc_rizhi_fenzu` VALUES ('5', '最新日志', '10', '1', '1');

-- ----------------------------
-- Table structure for `hhc_tuiguang_jilu`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_tuiguang_jilu`;
CREATE TABLE `hhc_tuiguang_jilu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shuoming` varchar(100) NOT NULL DEFAULT '',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_tuiguang_jilu
-- ----------------------------
INSERT INTO `hhc_tuiguang_jilu` VALUES ('1', '推荐用户 tyy 注册 获得奖励 积分+2', '1414293665', '1');
INSERT INTO `hhc_tuiguang_jilu` VALUES ('2', '推荐用户 aaaaa 注册 获得奖励 积分+2', '1414310237', '1');
INSERT INTO `hhc_tuiguang_jilu` VALUES ('3', '推荐用户 bbbbb 注册 获得奖励 积分+2', '1414310380', '1');

-- ----------------------------
-- Table structure for `hhc_user`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_user`;
CREATE TABLE `hhc_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `user_pwd` char(32) NOT NULL DEFAULT '',
  `user_integral` int(11) NOT NULL DEFAULT '0',
  `user_grade` smallint(5) unsigned NOT NULL DEFAULT '0',
  `login_ip` varchar(15) NOT NULL DEFAULT '',
  `err_num` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `rem_ip` varchar(15) NOT NULL DEFAULT '',
  `err_time` int(10) unsigned NOT NULL DEFAULT '0',
  `sex` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `pic` varchar(100) NOT NULL DEFAULT '',
  `grjj` varchar(300) NOT NULL DEFAULT '',
  `level_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `zhuye` tinyint(4) NOT NULL DEFAULT '0',
  `shenhe` tinyint(4) NOT NULL DEFAULT '0',
  `user_type` tinyint(4) NOT NULL DEFAULT '0',
  `youjian` tinyint(4) NOT NULL DEFAULT '0',
  `mail_rand` char(32) NOT NULL DEFAULT '',
  `vip` tinyint(4) NOT NULL DEFAULT '0',
  `jinbi` int(10) unsigned NOT NULL DEFAULT '0',
  `jindou` int(10) unsigned NOT NULL DEFAULT '0',
  `b_day` char(2) NOT NULL DEFAULT '',
  `b_year` char(4) NOT NULL DEFAULT '',
  `b_month` char(2) NOT NULL DEFAULT '',
  `lxdz` varchar(50) NOT NULL DEFAULT '',
  `youxiang` varchar(50) NOT NULL DEFAULT '',
  `sjhm` varchar(11) NOT NULL DEFAULT '',
  `gddh` varchar(12) NOT NULL DEFAULT '',
  `qq` varchar(15) NOT NULL DEFAULT '',
  `wangwang` varchar(50) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `yy` varchar(50) NOT NULL DEFAULT '',
  `weixin` varchar(50) NOT NULL DEFAULT '',
  `website` varchar(50) NOT NULL DEFAULT '',
  `byyx` varchar(50) NOT NULL DEFAULT '',
  `xueli` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `jyzt` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `jylx` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `zhiwei` varchar(50) NOT NULL DEFAULT '',
  `gsmc` varchar(50) NOT NULL DEFAULT '',
  `gsdz` varchar(50) NOT NULL DEFAULT '',
  `user_cunchu` float(10,2) NOT NULL DEFAULT '0.00',
  `guanli` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  KEY `user_name` (`user_name`),
  KEY `username` (`username`),
  KEY `level_id` (`level_id`),
  KEY `mail_rand` (`mail_rand`),
  KEY `vip` (`vip`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_user
-- ----------------------------
INSERT INTO `hhc_user` VALUES ('1', 'admin', '郝海川', 'c3284d0f94606de1fd2af172aba15bf3', '1016', '0', '10.1.82.82', '1', '127.0.0.1', '0', '1', './sundry/static_file/img/pic/1.jpg', '个人简介，可以是一段文字,300个字符以内 ', '2', '0', '0', '0', '0', '', '0', '3', '99', '2', '1996', '1', '山东省滨州市博兴县湖滨镇寨郝村', '2696521655@qq.com', '18615122754', '0543-2809182', '2696521655', '2696521655@qq.com', '无', '无', 'xx', 'qq', '寨郝中学1', '5', '3', '100', 'ceo', '未定', '无', '1.94', '1');

-- ----------------------------
-- Table structure for `hhc_user_chongzhi`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_user_chongzhi`;
CREATE TABLE `hhc_user_chongzhi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `xiangqing` varchar(35) NOT NULL DEFAULT '',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_user_chongzhi
-- ----------------------------
INSERT INTO `hhc_user_chongzhi` VALUES ('1', '1', '通过在线充值，充值了{5}个', '1413682328');
INSERT INTO `hhc_user_chongzhi` VALUES ('2', '1', '通过在线充值，充值了{5}个金币', '1413682360');

-- ----------------------------
-- Table structure for `hhc_user_integral`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_user_integral`;
CREATE TABLE `hhc_user_integral` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `xiangqing` varchar(35) NOT NULL DEFAULT '',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `jifen` varchar(10) DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_user_integral
-- ----------------------------
INSERT INTO `hhc_user_integral` VALUES ('1', '1', '每日登陆，奖励10积分', '0', '+10');

-- ----------------------------
-- Table structure for `hhc_user_jinbi`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_user_jinbi`;
CREATE TABLE `hhc_user_jinbi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `xiangqing` varchar(35) NOT NULL DEFAULT '',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `jinbi` varchar(10) DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_user_jinbi
-- ----------------------------

-- ----------------------------
-- Table structure for `hhc_user_jindou`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_user_jindou`;
CREATE TABLE `hhc_user_jindou` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `xiangqing` varchar(35) NOT NULL DEFAULT '',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `jinbi` varchar(10) DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_user_jindou
-- ----------------------------

-- ----------------------------
-- Table structure for `hhc_user_jingyan`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_user_jingyan`;
CREATE TABLE `hhc_user_jingyan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `jingyan` smallint(5) unsigned NOT NULL DEFAULT '0',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_user_jingyan
-- ----------------------------

-- ----------------------------
-- Table structure for `hhc_user_pic`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_user_pic`;
CREATE TABLE `hhc_user_pic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `pic` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_user_pic
-- ----------------------------

-- ----------------------------
-- Table structure for `hhc_user_rizhi`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_user_rizhi`;
CREATE TABLE `hhc_user_rizhi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `con` text NOT NULL,
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `liulan` int(10) unsigned NOT NULL DEFAULT '0',
  `zan` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `fenzu_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `zhuangtai` tinyint(4) NOT NULL DEFAULT '1',
  `tuijian` tinyint(4) NOT NULL DEFAULT '0',
  `pic` varchar(100) NOT NULL DEFAULT '',
  `zan_user` varchar(3000) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `title` (`title`),
  KEY `user_id` (`user_id`),
  KEY `fenzu_id` (`fenzu_id`),
  KEY `zhuangtai` (`zhuangtai`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_user_rizhi
-- ----------------------------

-- ----------------------------
-- Table structure for `hhc_user_xiangce`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_user_xiangce`;
CREATE TABLE `hhc_user_xiangce` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL DEFAULT '',
  `pic` varchar(100) NOT NULL DEFAULT '',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_user_xiangce
-- ----------------------------
INSERT INTO `hhc_user_xiangce` VALUES ('2', '相册名称', '', '0');
INSERT INTO `hhc_user_xiangce` VALUES ('4', '相册', './sundry/uploads/20141101/1414807582685.gif', '1');

-- ----------------------------
-- Table structure for `hhc_user_zhaopian`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_user_zhaopian`;
CREATE TABLE `hhc_user_zhaopian` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pic` varchar(100) DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `xiangce_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `chicun` float(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `xiangce_id` (`xiangce_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_user_zhaopian
-- ----------------------------
INSERT INTO `hhc_user_zhaopian` VALUES ('2', './sundry/uploads/20141031/1414747745419.jpg', '1', '0', '0.00');
INSERT INTO `hhc_user_zhaopian` VALUES ('3', './sundry/uploads/20141031/1414747797731.gif', '1', '0', '0.00');
INSERT INTO `hhc_user_zhaopian` VALUES ('6', './sundry/uploads/20141101/1414805342488.jpg', '1', '0', '1.22');
INSERT INTO `hhc_user_zhaopian` VALUES ('7', './sundry/uploads/20141101/1414805711716.gif', '1', '0', '10.69');
INSERT INTO `hhc_user_zhaopian` VALUES ('8', './sundry/uploads/20141101/1414805740801.jpg', '1', '0', '956.30');
INSERT INTO `hhc_user_zhaopian` VALUES ('9', './sundry/uploads/20141101/1414805752705.jpg', '1', '0', '984.52');
INSERT INTO `hhc_user_zhaopian` VALUES ('13', './sundry/uploads/20141101/1414807582685.gif', '1', '4', '10.69');
INSERT INTO `hhc_user_zhaopian` VALUES ('11', './sundry/uploads/20141101/1414805821456.jpg', '1', '0', '1.22');
INSERT INTO `hhc_user_zhaopian` VALUES ('14', './sundry/uploads/20141101/1414807619919.gif', '1', '4', '10.69');

-- ----------------------------
-- Table structure for `hhc_user_zhuanhuan`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_user_zhuanhuan`;
CREATE TABLE `hhc_user_zhuanhuan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `xiangqing` varchar(35) NOT NULL DEFAULT '',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_user_zhuanhuan
-- ----------------------------
INSERT INTO `hhc_user_zhuanhuan` VALUES ('1', '1', '将1金豆转换为10积分', '1413538487');
INSERT INTO `hhc_user_zhuanhuan` VALUES ('2', '1', '将3金豆转换为30积分', '1413538514');
INSERT INTO `hhc_user_zhuanhuan` VALUES ('3', '1', '将1金币转换为9金豆与10积分', '1413684599');
INSERT INTO `hhc_user_zhuanhuan` VALUES ('4', '1', '将1金币转换为9金豆与10积分', '1413684798');

-- ----------------------------
-- Table structure for `hhc_website_setup`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_website_setup`;
CREATE TABLE `hhc_website_setup` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `k` varchar(12) NOT NULL DEFAULT '',
  `v` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_website_setup
-- ----------------------------
INSERT INTO `hhc_website_setup` VALUES ('1', 'title', '网站名称');
INSERT INTO `hhc_website_setup` VALUES ('2', 'keyword', '商品');
INSERT INTO `hhc_website_setup` VALUES ('3', 'des', '商品');
INSERT INTO `hhc_website_setup` VALUES ('4', 'jieshao', '公司介绍');

-- ----------------------------
-- Table structure for `hhc_weibo`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_weibo`;
CREATE TABLE `hhc_weibo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `zan` int(10) unsigned NOT NULL DEFAULT '0',
  `shenhe` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `shenhe` (`shenhe`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_weibo
-- ----------------------------

-- ----------------------------
-- Table structure for `hhc_weibopl`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_weibopl`;
CREATE TABLE `hhc_weibopl` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(100) NOT NULL DEFAULT '',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `weibo_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `weibo_id` (`weibo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_weibopl
-- ----------------------------

-- ----------------------------
-- Table structure for `hhc_xiaoxi`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_xiaoxi`;
CREATE TABLE `hhc_xiaoxi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `con` text NOT NULL,
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `xitong` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_xiaoxi
-- ----------------------------

-- ----------------------------
-- Table structure for `hhc_yqm`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_yqm`;
CREATE TABLE `hhc_yqm` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_yqm
-- ----------------------------

-- ----------------------------
-- Table structure for `hhc_ziduan`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_ziduan`;
CREATE TABLE `hhc_ziduan` (
  `ziduan_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `moxing_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `cn_name` varchar(30) NOT NULL DEFAULT '',
  `en_name` varchar(30) NOT NULL DEFAULT '',
  `moxing_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `default_val` varchar(1000) NOT NULL DEFAULT '',
  `tishi` varchar(300) NOT NULL DEFAULT '',
  `xitong` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `html_gongneng` varchar(1000) NOT NULL DEFAULT '',
  `parent_lanmu` varchar(300) NOT NULL DEFAULT '',
  `xianshi_fangshi` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ziduan_id`),
  KEY `moxing_id` (`moxing_id`),
  KEY `xitong` (`xitong`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_ziduan
-- ----------------------------

-- ----------------------------
-- Table structure for `hhc_z_web_case`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_z_web_case`;
CREATE TABLE `hhc_z_web_case` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `pic` varchar(100) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `on_read` int(10) unsigned NOT NULL DEFAULT '0',
  `class_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_z_web_case
-- ----------------------------
INSERT INTO `hhc_z_web_case` VALUES ('4', '施耐德电气为七匹狼集团打造服装行业高效数据中心“样板工程”', './blog/box/tpl/art_empty_pic.jpg', '<p><br/></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\"><strong>中国厦门，1月7日</strong>——近日，全球领先的关键电源与制冷服务商<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气旗下的APC（以下简称APC）宣布在福建七匹狼实业股份有限公司（以下简称“七匹狼”）集团数据中心举行样板工程授牌仪式。该数据中心成功应用APC的InfraStruxure™英飞集成系统，为该数据中心提供不间断电源（UPS）、空调制冷及配套机柜、电柜等产品与服务，并提供涵盖从数据中心的设计、部署、安装到维护的全生命周期服务。该项目是APC英飞集成系统解决方案在纺织服装行业中典型的应用，同时也为其他行业用户建设新一代数据中心提供了范本。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">纺织服装行业是我国领先的传统制造工业，也是我国最先实现市场化、市场竞争比较充分的行业之一。但近年来，纺织服装企业也面临如何提高市场响应速度、业务创新能力、实现与全球互联经济更好接轨等一系列问题，而大力推进信息化建设、挖掘业务数据价值或可成为企业在行业中脱颖而出的重要工具。现在，越来越多的纺织服装企业开始转变思维模式，不仅仅把业务增长点只聚焦在生产和销售环节，而是随着企业规模的扩大，将IT支持也放到企业未来发展的优先级考虑范围，强有力的IT支撑成为帮助实现提高业务效率，加强企业供应链、后台办公人员以及物资的管理关键。<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气全球高级副总裁、APC大中华区总裁黄陈宏表示：“七匹狼作为中国民营纺织服装企业的领军企业，其数据中心的规划、建设、运营和维护都非常具有代表性，在业界也处于领先水平。我们在与七匹狼合作之初，就计划将该数据中心项目打造成具有示范效应的样板工程，这也是体现了<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气凭借在数据中心能效及整体拥有成本等方面的优势，为更多行业客户提供整体解决方案，帮助他们提升行业竞争力的能力和信心。”</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">新建的七匹狼集团数据中心位于厦门观音山商业中心，占地面积约500平米。由于该数据中心的部署将直接影响整个七匹狼集团信息网络的运营，因此在数据中心UPS选配、数据中心机房UPS供电系统选配、空调制冷系统选配、可视监控远程技术提供、安防系统搭建和数据中心机柜选配等方面都有苛刻的要求。<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气基于其业界领先的英飞解决方案，为七匹狼量身打造智能、节能且具有前瞻性的数据中心物理基础设施，并在售后服务和巡检方面给予定期支持。<br/></p><p sizset=\"8\" sizcache06686206721768578=\"0\" style=\"text-align:center;padding: 0px; margin-top: 0px; margin-bottom: 0px;\"><img title=\"news\" border=\"0\" alt=\"news\" src=\"sundry/uploads/image/20150203/1422929302639237.jpg\" style=\"border: 0px;\"/></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\"><br/>在厦门新建数据中心也是七匹狼集团发展战略中的重要举措。据七匹狼集团首席信息官陈志勇介绍，七匹狼历来重视信息化建设，但原有的数据中心人员维护成本居高不下，意外宕机时有发生，其可靠性已成为制约企业发展的因素之一。此次，七匹狼选择其长期合作伙伴<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气进行数据中心关键物理基础设施方面的合作，不仅因为十多年的良好合作关系，更是由于双方在提高能效、促进环保等理念的高度契合。新数据中心的建成，不仅能够实现降低维护成本，提高企业运营效率，还将成为七匹狼未来3至5年的业务驱动力量，并对集团规划中的大型物流园项目、灾备中心项目等提供借鉴。同时，鉴于英飞解决方案对动态负载密度的支持，新的数据中心满足云计算的需求，可以为七匹狼以及信息服务集团的客户提供云计算服务，在确保自用的需求外，还能为其他企业提供云计算及托管服务。</p><p sizset=\"9\" sizcache06686206721768578=\"0\" style=\"text-align:center;padding: 0px; margin-top: 0px; margin-bottom: 0px;\"><img title=\"news\" border=\"0\" alt=\"news\" src=\"sundry/uploads/image/20150203/1422929303805425.jpg\" style=\"border: 0px;\"/></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\"><strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气IT事业部华南大区销售总经理贾咸强将“样板工程”奖牌授予七匹狼集团信息技术与服务部经理蔡武贵</p><p><br/></p>', '1422929312', '0', '3');
INSERT INTO `hhc_z_web_case` VALUES ('5', '施耐德电气携手中粮集团，节能增效业务成功打入中国食品行业', './blog/box/tpl/art_empty_pic.jpg', '<p><br/></p><h5 style=\"padding: 0px; margin: 0px; font-weight: normal; font-size: 12px;\">项目团队克服重重挑战，提供出色的能源管理系统和节能增效解决方案</h5><p><img alt=\"news\" src=\"sundry/uploads/image/20150203/1422929413135984.jpg\" style=\"border: 0px;\"/></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">日前，凭借全球能效管理专家的品牌形象和卓越的解决方案，<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气成功地与全球500强企业中粮集团旗下中粮生化能源（公主岭）有限公司，签署了全厂能源管理系统和节能增效解决方案合同。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">合作项目的实施，标志着<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气能源管理系统和节能增效业务成功打入中国食品行业，将为整个食品行业的节能研究和实践提供宝贵的素材，同时也为能源管理系统和节能整体解决方案在中粮集团乃至食品行业进行复制奠定了坚实的基础。<br/><br/>项目包含能源管理系统和节能增效解决方案两部分。从节能增效解决方案来看，<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气作为总包商，承担工程调研、工程设计、工程执行和绩效验证等全过程交钥匙工程。主要对电站车间锅炉高压风机进行变频节能改造，同时实现供热及蒸汽凝结水系统余热综合利用。从技术层面来看，能源管理系统采用<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气PowerLogic SCADA，ION Enterprise，EOS软件，PLC 和多功能智能仪表，对全厂的水、电、汽等能源介质实行数据采集，并实现数据显示、状态监视及报警、能耗分解、能耗关键绩效指标KPI、节能目标跟踪、电能质量分析、能源分析报表和成本分摊、Dashboard 展示等主要功能。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">项目的成功实施面临重重挑战，其中一个挑战是中粮集团作为全球500 强企业，具有非常严谨的项目管理流程。<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气承揽了初步设计和施工图设计工作，同时还首次承担了专项的压力管道设计。面对压力和挑战，<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气对整个工程进行了详细周密的分析调研，并对设计图纸进行了多次修改和完善，以最大化满足客户需求，最终实现让客户更加清晰直观地体验到全球能效管理专家在技术上的优势。项目团队攻克技术上的重重困难，使项目完成后可清晰验证并衡量所节省的能源，帮助客户有效降低能耗，节约能源成本，同时也将帮助客户全面提升其企业整体能源管理的水平。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\"><strong>客户信息：<br/></strong>中粮生化能源（公主岭）有限公司系中粮集团有限公司的全资子公司，是目前国内的大型玉米深加工企业之一。公司注册资金7188 万美元，固定资产投资10.4 亿元人民币，流动资金2.4 亿元人民币，占地面积35.3 万平方米。建有年加工净化玉米60 万吨的淀粉生产装置、年产10 万吨的果葡糖浆装置、年产6.3 万吨的麦芽糖浆装置、年产5 万吨的麦芽糊精装置以及热电站、污水处理装置、铁路专用线等辅助设施。公司热电站装有三台TG-75/5.29-M40 型75t/h CFB 锅炉，一台12MW 抽背和一台6MW 抽凝发电机组。2006 年6 月项目工程全面破土动工，2007 年5 月一次性投料试车成功，并转入稳定的生产运营。</p><p><br/></p>', '1422929418', '0', '3');

-- ----------------------------
-- Table structure for `hhc_z_web_class`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_z_web_class`;
CREATE TABLE `hhc_z_web_class` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL DEFAULT '',
  `paixu` smallint(5) unsigned NOT NULL DEFAULT '0',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_z_web_class
-- ----------------------------
INSERT INTO `hhc_z_web_class` VALUES ('1', '企业新闻', '0', '1');
INSERT INTO `hhc_z_web_class` VALUES ('2', '最新上架', '0', '2');
INSERT INTO `hhc_z_web_class` VALUES ('3', '合作伙伴', '0', '3');
INSERT INTO `hhc_z_web_class` VALUES ('4', '解决方案', '0', '4');
INSERT INTO `hhc_z_web_class` VALUES ('5', '案例2', '500', '3');
INSERT INTO `hhc_z_web_class` VALUES ('6', '热门商品', '0', '2');

-- ----------------------------
-- Table structure for `hhc_z_web_config`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_z_web_config`;
CREATE TABLE `hhc_z_web_config` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `k` varchar(10) NOT NULL DEFAULT '',
  `v` varchar(500) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_z_web_config
-- ----------------------------
INSERT INTO `hhc_z_web_config` VALUES ('1', 'lxwm', '上海乐随贸易有限公司\r\n上海奉贤南桥南奉公路9241号');
INSERT INTO `hhc_z_web_config` VALUES ('2', 'gsjj', '代理施耐德旗下，奇胜，梅兰日 兰品牌的，开关、插座、断路器弱电箱等所有产品');
INSERT INTO `hhc_z_web_config` VALUES ('3', 'khal', '主要是通过团购网和淘宝商城等网络销售为主，和装饰单位合作,天猫首家施耐德授权专卖店一家崇尚自由、活力的新型小企业，虽然我们的办公环境一般，但是这里小公司才有大的发展空间。您认为自己有这个能力，有才又没有地方发挥，那您就赶紧联系我们  \r\n');
INSERT INTO `hhc_z_web_config` VALUES ('4', 'lxwm', '上海乐随贸易有限公司\r\n上海奉贤南桥南奉公路9241号');
INSERT INTO `hhc_z_web_config` VALUES ('5', 'gsjj', '代理施耐德旗下，奇胜，梅兰日 兰品牌的，开关、插座、断路器弱电箱等所有产品');

-- ----------------------------
-- Table structure for `hhc_z_web_config2`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_z_web_config2`;
CREATE TABLE `hhc_z_web_config2` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `k` varchar(10) NOT NULL DEFAULT '',
  `v` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_z_web_config2
-- ----------------------------
INSERT INTO `hhc_z_web_config2` VALUES ('1', 'rczp', '<table align=\"center\"><tbody><tr class=\"firstRow\"><td width=\"102\" valign=\"middle\" style=\"word-break: break-all;\" align=\"center\"><strong><span style=\"font-family: 宋体, Arial; font-size: 12px; line-height: 32px; text-align: center; background-color: rgb(255, 255, 255);\">职位名称</span></strong></td><td width=\"102\" valign=\"middle\" style=\"word-break: break-all;\" align=\"center\"><strong><span style=\"font-family: 宋体, Arial; font-size: 12px; line-height: 32px; text-align: center; background-color: rgb(255, 255, 255);\">职位类型</span></strong></td><td width=\"102\" valign=\"middle\" style=\"word-break: break-all;\" align=\"center\"><strong><span style=\"font-family: 宋体, Arial; font-size: 12px; line-height: 32px; text-align: center; background-color: rgb(255, 255, 255);\">工作年限</span></strong></td><td width=\"102\" valign=\"middle\" style=\"word-break: break-all;\" align=\"center\"><strong><span style=\"font-family: 宋体, Arial; font-size: 12px; line-height: 32px; text-align: center; background-color: rgb(255, 255, 255);\">工作地区</span></strong></td><td width=\"102\" valign=\"middle\" style=\"word-break: break-all;\" align=\"center\"><strong><span style=\"font-family: 宋体, Arial; font-size: 12px; line-height: 32px; text-align: center; background-color: rgb(255, 255, 255);\">发布时间</span></strong></td></tr><tr><td width=\"102\" valign=\"middle\" style=\"word-break: break-all;\" align=\"center\"><p><br/></p><p>营销人员</p></td><td width=\"102\" valign=\"middle\" align=\"center\" style=\"word-break: break-all;\"><p><br/></p><p>销售</p></td><td width=\"102\" valign=\"middle\" style=\"word-break: break-all;\" align=\"center\"><p><br/></p><p>不限</p></td><td width=\"102\" valign=\"middle\" style=\"word-break: break-all;\" align=\"center\"><p><br/></p><p>上海市</p></td><td width=\"102\" valign=\"middle\" style=\"word-break: break-all;\" align=\"center\"><p><br/></p><p>2015-01-22</p></td></tr><tr><td width=\"102\" valign=\"middle\" style=\"word-break: break-all;\" align=\"center\"><p><br/></p><p>数控操作人员</p></td><td width=\"102\" valign=\"middle\" style=\"word-break: break-all;\" align=\"center\"><p><br/></p><p>车间工人</p></td><td width=\"102\" valign=\"middle\" style=\"word-break: break-all;\" align=\"center\"><p><br/></p><p>不限</p></td><td width=\"102\" valign=\"middle\" style=\"word-break: break-all;\" align=\"center\"><p><br/></p><p>上海市</p></td><td width=\"102\" valign=\"middle\" style=\"word-break: break-all;\" align=\"center\"><p><br/></p><p>2015-01-22</p></td></tr></tbody></table><p><br/></p>');
INSERT INTO `hhc_z_web_config2` VALUES ('2', 'khfw', '<p><br/></p><p><br/><span style=\"font-size: 16px;\">联系地址</span><img src=\"sundry/uploads/image/20150122/1421892140219548.jpg\" title=\"1421892140219548.jpg\" alt=\"Conact.jpg\" style=\"float: left;\"/><span style=\"font-size: 16px;\">：上海奉贤南桥南奉公路9241号</span></p><p><span style=\"font-size: 16px;\"><br/></span></p><p><span style=\"font-size: 16px;\">联系QQ：92455466</span></p><p><span style=\"font-size: 16px;\"><br/></span></p><p>联系邮箱：92455466@qq.com</p><p><span style=\"font-size: 16px;\"><br/></span></p><p><span style=\"font-size: 16px;\">联 系 人：陈晓明</span></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p>');

-- ----------------------------
-- Table structure for `hhc_z_web_hdp`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_z_web_hdp`;
CREATE TABLE `hhc_z_web_hdp` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL DEFAULT '',
  `pic` varchar(100) NOT NULL DEFAULT '',
  `link` varchar(150) NOT NULL DEFAULT '',
  `paixu` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_z_web_hdp
-- ----------------------------
INSERT INTO `hhc_z_web_hdp` VALUES ('5', '', './sundry/uploads/20150203/1422929720590.jpg', '', '0');

-- ----------------------------
-- Table structure for `hhc_z_web_news`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_z_web_news`;
CREATE TABLE `hhc_z_web_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `on_read` int(10) unsigned NOT NULL DEFAULT '0',
  `class_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pic` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_z_web_news
-- ----------------------------
INSERT INTO `hhc_z_web_news` VALUES ('7', '施耐德电气关键电源与制冷技术盛会MIX 2012完美收官', '<p><br/></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\"><strong>中国（北京），2012年12月24日</strong>——近日，由全球领先的关键电源与制冷服务商<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气举办的MIX 2012大型巡回路演活动完美收官。今年的技术盛会以“汇聚、激发、分享”为主题，吸引了世界各地近两千名设计院规划设计工程师、机械承包商与电气承包商参与。在本次活动中，<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气分享了其在关键电源和制冷技术等领域独具前瞻性的市场洞察，为合作伙伴拓展专业知识、提高竞争优势提供了强大支持。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">如今，在激烈的市场竞争环境下，设计院规划设计工程师、机械承包商和电气承包商面临多重挑战。一方面，行业发展瞬息万变，市场上的新产品不断涌现。业内人士需紧跟市场变化，具备更多专业知识和经验，才能准确把握行业发展趋势，从纷繁的产品和解决方案中做出最佳选择。另一方面，业内人士在面对客户时，需要凭借更强的专业知识设计出最适用的解决方案和产品组合，规避潜在风险，从而帮助客户在实用性、可靠性和总体拥有成本等方面实现最佳平衡。因此，规划设计工程师、机械承包商和电气承包商需要与厂商建立更紧密的联系，从而获得有关产品、技术和行业发展趋势的最新信息，并且获得厂商更加便捷的技术支持与服务。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">为满足客户对技术知识、行业发展趋势等相关信息的需求，<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气在全球近二十个国家和地区启动了MIX 2012大型巡回路演活动，其中，大中华区辐射北京、上海、广州、武汉、成都、西安、香港和台北八大城市。<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气专家不仅就关键电源和制冷技术与参会者分享行业前沿信息、发展趋势分析及<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气的产品和解决方案，还非常针对性地与现场的规划设计工程师、机械承包商与电气承包商进行面对面沟通，帮助他们更好地了解如何应对各自挑战的解决方案。此外，<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气还向现场与会者展示了独有的工具与资源，以及在数据中心、楼宇管理、电力管理、工业管理等方面的产品和解决方案。<br/><br/><strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气全球高级副总裁、APC大中华区总裁黄陈宏表示：“MIX 2012巡回路演意在搭建一个开放性的知识、经验与思想的交流平台。作为关键电源与制冷技术的领导者，<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气致力于与行业合作伙伴更紧密的合作，深入交流，提升市场竞争力，从而为最终用户提供最为可靠、适用和有前瞻性的解决方案，并有效降低总体拥有成本。”</p><p sizset=\"8\" sizcache09021304983349749=\"0\" style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\"><img title=\"news\" border=\"0\" alt=\"news\" src=\"sundry/uploads/image/20150203/1422929246423475.jpg\" style=\"border: 0px;\"/><br/><strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气IT事业部大中华区市场及战略部副总裁 柏安泽 发表演讲</p><p sizset=\"9\" sizcache09021304983349749=\"0\" style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\"><img title=\"news\" border=\"0\" alt=\"news\" src=\"sundry/uploads/image/20150203/1422929247936758.jpg\" style=\"border: 0px;\"/><br/>活动现场</p><p><br/></p>', '1422929254', '0', '1', './blog/box/tpl/art_empty_pic.jpg');
INSERT INTO `hhc_z_web_news` VALUES ('8', '别让节日的喜庆，受电力意外的干扰-施耐德电气支招冬季家庭用电安全', '<p><br/></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\"><strong>中国（北京），2012年12月27日</strong>——现在天气渐渐进入一年中最寒冷的时节，而且随着圣诞节、元旦和春节假期的到来，不论是家中、商场还是办公楼宇用电量都大幅增加，照明时间延长，空调、电暖气等大功率电器的频繁使用都会造成整体用电负荷骤增。在用电负荷较大的情况下，用电安全隐患也会凸显。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">据消防部门统计，我国每年平均有13至16万起火灾，其中电力引发火灾占全部火灾的40%，电线老化或受潮、受热都是引发用电危险的重要原因。此外，我国的市电环境较为严苛，浪涌、尖峰电压、噪音、过载、断电或短路等常常会缩短电气设备的使用寿命，甚至引起火灾，危及人和财产的安全。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">节日的喜庆的气氛，幸福平安尤为重要。如何排除用电安全隐患，采用专业的APC浪涌保护器和Back-UPS，让潜在危险得到及时排查和有效的避免，确保我们的幸福生活免受电力意外的干扰。在此，<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气针对冬季用电安全为广大消费者支几招：</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">一、安装断路器，保护住宅免受电力起火的威胁<br/>每户住宅电力系统的核心是负荷中心，其中包括可以在过载或短路时起到保护作用的断路器。发生电气故障时，断路器能够自动切断电路，避免因危险电流引发的起火或触电。在一些住宅建筑中，由于电力可能会接触到水，因此必须具备接地故障断路器。此外，由于电线破损而引起的电弧故障也可能引发火灾，危及生命和财产安全。因此，安装电弧故障断路器以有效阻断电流，避免火灾等事故的发生十分必要。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">二、使用浪涌保护插座，保护电气设备免受浪涌，电压尖峰，谐波的影响<br/>有时，市电的电压尖峰可能会超出安全范围，转瞬之间通过线路给电脑等电气设备造成损害。作为家用电器和IT设备的最后一道安全保障，插座应该选择使用坚实材料制作而成并且性能优异的产品，既具备高阻燃性，也能够负荷大的电力负载，并具有洁净电源、短路和过载保护等功能。<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气旗下的APC一直以“创新动力，可靠为本”的理念服务全球客户，其旗下“安全之星”、“护卫之星”、“卓越之星”三大系列浪涌保护插座，专为中国市场研发而成，采用高品质的工程级材料制成，在吸收和消除电压、浪涌、电压噪音和静电干扰方面以领先的技术优势为用户创建安全洁净的电源系统。此外，全系列型号的产品均取得CCC认证，消费者尽可放心使用。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">三、配备不间断电源，保护电气设备和信息安全<br/>电压不稳或突然断电，不仅会缩短电气设备的使用寿命，还可能导致电脑等信息设备丢失重要的个人数据，甚至会对其造成直接损坏。<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气旗下的APC的后备式不间断电源可以为所连接的电器和IT设备确保供电连续性，使用户在电力不稳和断电情况发生时有效保护信息和电气设备安全。此外，具备节能模式的APC Back-UPS Pro还可以有效降低用电成本——当电脑关机、待机或进入休眠模式时，不间断电源即停止向闲置的IT外设供电。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\"><strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气建议广大消费者在定期用电安全隐患排查中，除了及时将老旧、不合格的电力设备维修和更换，选择使用高品质的电气保护设备和产品，如APC浪涌保护插座和不间断电源，也是确保冬季用电安全，生活幸福平安的有效举措。</p><p sizset=\"8\" sizcache07003114073226856=\"0\" style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\"><img title=\"news\" border=\"0\" alt=\"news\" src=\"sundry/uploads/image/20150203/1422929274442280.jpg\" style=\"border: 0px;\"/></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">浪涌保护插座P6U-CN</p><p sizset=\"9\" sizcache07003114073226856=\"0\" style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\"><img title=\"news\" border=\"0\" alt=\"news\" src=\"sundry/uploads/image/20150203/1422929275823671.jpg\" style=\"border: 0px;\"/><br/>Back-UPS Pro不间断电源</p><p><br/></p>', '1422929280', '2', '1', './blog/box/tpl/art_empty_pic.jpg');

-- ----------------------------
-- Table structure for `hhc_z_web_product`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_z_web_product`;
CREATE TABLE `hhc_z_web_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `pic` varchar(100) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `on_read` int(10) unsigned NOT NULL DEFAULT '0',
  `class_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_z_web_product
-- ----------------------------
INSERT INTO `hhc_z_web_product` VALUES ('9', 'C65系列小型断路器', './sundry/uploads/20150203/1422928706858.jpg', '<p><br/></p><p><br/></p><table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tbody><tr align=\"center\" class=\"firstRow\"><td width=\"33%\"><img src=\"sundry/uploads/image/20150203/1422928680101752.jpg\"/></td></tr></tbody></table><table cellpadding=\"5\" cellspacing=\"0\" width=\"100%\"><tbody><tr class=\"firstRow\"><td bgcolor=\"#e7e1be\" height=\"25\">&nbsp;<strong>性能描述：</strong></td></tr><tr><td style=\" padding:0 5px 0 5px;\">具丰富的产品系列，根据分断能力的不同，iC65N，iC65H，iC65L的分断能力覆盖了6~15KA的范围，额定电流1～63A，具B/C/D型脱扣曲线；可拼装丰富的电气附件、机械附件，实现功能的极大扩充和操作的便利；全系列产品可拼装剩余电流动作保护附件，实现A/AC类剩余电流动作保护功能，额定剩余动作电流包括30mA，100mA，100mA延时，300mA和300mA延时型。&nbsp;&nbsp;&nbsp;</td></tr><tr><td height=\"10\"><br/></td></tr><tr><td height=\"10\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\"><strong>&nbsp;优势：</strong></td></tr><tr><td style=\" padding:0 5px 0 5px;\">iC65系列小型断路器作为一种具有突破性意义的模数化产品诞生以来，经过不断的拓展完善，始终领先于市场，已经成为世界低压终端配电产品的典范。&nbsp;</td></tr><tr><td height=\"10\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\"><strong>&nbsp;应用范围：</strong></td></tr><tr><td style=\" padding:0 5px 0 5px;\">可广泛应用于工业、商业及民用低压终端配电的需要。</td></tr></tbody></table><p><br/></p>', '1422928706', '0', '2');
INSERT INTO `hhc_z_web_product` VALUES ('10', '国产TeSys交流接触器', './sundry/uploads/20150203/1422928795433.jpg', '<p><br/></p><table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tbody><tr align=\"center\" class=\"firstRow\"><td width=\"33%\"><img src=\"sundry/uploads/image/20150203/1422928781648187.jpg\"/></td></tr></tbody></table><table cellpadding=\"5\" cellspacing=\"0\" width=\"100%\"><tbody><tr class=\"firstRow\"><td bgcolor=\"#e7e1be\" height=\"25\">&nbsp;<strong>性能描述：</strong></td></tr><tr><td style=\" padding:0 5px 0 5px;\"><ul class=\" list-paddingleft-2\"><li><p>紧凑安装<br/>&gt; 至38A的接触器以及保护元件仅为 45mm 宽度<br/>&gt; 浪涌抑制器的安装无需工具，直接插入到接触器中，无需占用更多空间<br/>&gt; 可逆接触器仅 90mm 宽度，机械连锁不占用额外空间，安装几乎无需时间<br/>&gt; 起动器元件提供预接线模块，起动器组装快捷方便，外形美观</p></li><li><p>高度集成<br/>&gt; 至100A 接触器集成 1常开/ 1常闭辅助触点<br/>&gt; 直流线圈内置双向抑流二极管<br/>&gt; 可逆接触器组内置双向抑流二极管<br/>&gt; 创新直流低功耗接触器简化自动化系统设计</p></li><li><p>安全可靠&nbsp;<br/>&gt; 控制与保护元件的主回路、控制回路区分明显<br/>&gt; 符合安全标准的镜像触点设计，确保一亿次可靠动作<br/>&gt; 保护罩防止接触器意外接通<br/>&gt; 断路器、热继电器拨盘配置可挂锁面盖，防止意外改动</p></li><li><p>品质卓越<br/>&gt; 直流线圈具有宽范围控制电压（0.7~1.25Uc）<br/>&gt; 抗震性强<br/>&gt; 更低噪音<br/>&gt; 接线端子强度提</p></li></ul></td></tr><tr><td height=\"10\"><br/></td></tr><tr><td height=\"10\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\"><strong>&nbsp;优势：</strong></td></tr><tr><td style=\" padding:0 5px 0 5px;\"><ul class=\" list-paddingleft-2\"><li><p>TeSys D接触器安装紧凑（至38A宽度45mm），简单，符合国际标准。外观优美，并全面提升了产品卓越性能和产品操作安全性；</p></li><li><p>国产TeSysD 系列接触器从09A至620A产品线宽泛，供货快捷。</p></li></ul></td></tr><tr><td height=\"10\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\"><strong>&nbsp;应用范围：</strong></td></tr><tr><td style=\" padding:0 5px 0 5px;\"><ul class=\" list-paddingleft-2\"><li><p>TeSys D接触器设计用于各种控制系统；</p></li><li><p>能够作为各种应用情况下的电动机起动器。</p></li></ul></td></tr></tbody></table><p><br/></p><p><br/></p>', '1422928795', '0', '2');
INSERT INTO `hhc_z_web_product` VALUES ('11', 'ATS', './sundry/uploads/20150203/1422928879621.jpg', '<p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(88, 87, 87); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(88, 87, 87); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"><tbody><tr align=\"middle\" class=\"firstRow\"><td width=\"33%\" style=\"padding: 0px; margin: 0px;\"><img src=\"sundry/uploads/image/20150203/1422928844104881.jpg\" style=\"border: 0px;\"/></td></tr></tbody></table><table cellspacing=\"0\" cellpadding=\"5\" width=\"100%\"><tbody><tr class=\"firstRow\"><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\">&nbsp;<strong>性能描述：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\"><ul class=\" list-paddingleft-2\"><li><p>强大功能<br/>&gt; 主备电源自动转换功能<br/>&gt; 强制运行在主<br/>&gt; 强制运行在备<br/>&gt; 同时断开主备</p></li><li><p>全面保护<br/>&gt; 自投自复<br/>&gt; 实时监控</p></li><li><p>控制器功能<br/>&gt; BA: 市电-市电的转换<br/>&gt; UA: 市电-市电的转换<br/>市电-发电机的转换<br/>负荷卸载<br/>通信功能可选</p></li><li><p>完整解决方案<br/>&gt; 标准配置型号，定制配置型号<br/>&gt; 符合IEC和GB标准<br/>&gt; 通过CCC认证和EMC测试</p></li><li><p>额定电压: 690V</p></li><li><p>额定电流: 100A—6300A</p></li><li><p>极数:&nbsp; 3P/4P</p></li><li><p>机械寿命：5000次</p></li><li><p>最短切换时间：800 ms</p></li></ul></td></tr></tbody></table><p><br/></p>', '1422928879', '0', '2');
INSERT INTO `hhc_z_web_product` VALUES ('12', 'Masterpact MT 空气断路器', './sundry/uploads/20150203/1422928914618.jpg', '<p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(88, 87, 87); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(88, 87, 87); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"><tbody><tr align=\"middle\" class=\"firstRow\"><td width=\"33%\" style=\"padding: 0px; margin: 0px;\"><img src=\"sundry/uploads/image/20150203/1422928904838302.jpg\" style=\"border: 0px;\"/></td></tr></tbody></table><table cellspacing=\"0\" cellpadding=\"5\" width=\"100%\"><tbody><tr class=\"firstRow\"><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\">&nbsp;<strong>性能描述：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\">N1：电流等级630A至1600A，分断能力50KAN2：电流等级800A至2500A，分断能力50KAH1：电流等级800A至6300A，分断能力65KAH1b：电流等级800A至4000A，分断能力85kAH2：电流等级800A至6300A，分断能力100KAH3：电流等级800A至4000A，分断能力150KAL1：电流等级800A至2000A，分断能力150KA具有抽屉式/固定式，3/4极开关提供负荷开关、1000V、以及直流产品&nbsp;&nbsp;&nbsp;</td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><strong>&nbsp;优势：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\"><ul class=\" list-paddingleft-2\"><li><p>十四种Micrologic控制单元可以提供完备的保护，并方便用户维护与监控，多样的可选附件可以满足使用要求的变化，模块化的组件可随时在现场完成组装。</p></li></ul></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><strong>&nbsp;应用范围：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\">大市场：工业、能源及基础设施、公商建、民用住宅、数据中心<ul class=\" list-paddingleft-2\"><li><p>适用于低压配电领域内的配电线路和设备的保护与控制：<br/>&gt; N1 - 标准型，适用于分断低等级的短路电流<br/>&gt; N2 - 适用于一般的短路电流<br/>&gt; H1 - 适用于分断工业环境的高等级短路电流<br/>&gt; H1b - 适用于分断能力要求高的工业场合<br/>&gt; H2 - 高性能型，适用于可能产生非常高的短路电流的重工业领域<br/>&gt; H3 - 两台变压器并联运行的电气系统中<br/>&gt; L1 - 具有高限流能力，用以保护馈电单元或当变压器额定功率提高时提高开关柜的性能水平</p></li></ul></td></tr></tbody></table><p><br/></p>', '1422928914', '0', '2');
INSERT INTO `hhc_z_web_product` VALUES ('13', 'Compact NSX 100~630', './sundry/uploads/20150203/1422928942270.jpg', '<p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(88, 87, 87); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(88, 87, 87); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"><tbody><tr align=\"middle\" class=\"firstRow\"><td width=\"33%\" style=\"padding: 0px; margin: 0px;\"><img src=\"sundry/uploads/image/20150203/1422928934725472.jpg\" style=\"border: 0px;\"/></td></tr></tbody></table><table cellspacing=\"0\" cellpadding=\"5\" width=\"100%\"><tbody><tr class=\"firstRow\"><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\">&nbsp;<strong>性能描述：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\"><ul style=\"list-style-type: none;\" class=\" list-paddingleft-2\"><li><p>壳架电流：100A，160A，250A，400A，630A</p></li><li><p>分断等级：36KA，50KA，70KA，100KA，150KA</p></li><li><p>安装方式：固定式，插入式，抽出式</p></li><li><p>操作方式：拨动手柄，旋转手柄，延伸旋转手柄，电动操作机构</p></li></ul><p>详细情况请访问:&nbsp;&nbsp;<a href=\"http://nsx.schneider-electric.cn/nsx/index.jsp\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\"><span style=\"color:#333333\">NSX.schneider-electric.cn</span></a></p></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><strong>&nbsp;优势：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\"><ul style=\"list-style-type: none;\" class=\" list-paddingleft-2\"><li><p>新一代塑壳断路器Compact NSX，集全面的电能管理于极致保护。NSX继承了NS的所有技术特长，并且超越NS</p></li><li><p>内置双芯互感器，可以实现电力参数的精准测量。FDM121柜门显示单元可以实现数据的海量显示</p></li><li><p>“即插即用”的便捷通信网络架构技术，方便搭建复杂通信网络。全面电能管理助力节能增效</p></li></ul></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><strong>&nbsp;应用范围：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\">高端客户五大市场：工业、能源及基础设施、公商建、民用住宅、数据中心</td></tr></tbody></table><p><br/></p><div contenteditable=\"false\" style=\"width: 15px; height: 15px; position: absolute; cursor: move; top: 182px; left: 8px; -webkit-user-select: none; background-image: url(http://10.1.57.38/rsqywzym_a5/web2/sundry/plus/ue/dialogs/table/dragicon.png);\"></div>', '1422928942', '0', '2');
INSERT INTO `hhc_z_web_product` VALUES ('14', 'XB2B', './sundry/uploads/20150203/1422928981523.jpg', '<p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(88, 87, 87); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(88, 87, 87); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"><tbody><tr align=\"middle\" class=\"firstRow\"><td width=\"33%\" style=\"padding: 0px; margin: 0px;\"><img src=\"sundry/uploads/image/20150203/1422928960237707.jpg\" style=\"border: 0px;\"/></td></tr></tbody></table><table cellspacing=\"0\" cellpadding=\"5\" width=\"100%\"><tbody><tr class=\"firstRow\"><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\">&nbsp;<strong>性能描述：</strong></td><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\"><ul style=\"list-style-type: none;\" class=\" list-paddingleft-2\"><li><p>符合IEC，CCC认证标准</p></li><li><p>IP65，或IP66（带防护罩）</p></li><li><p>工作温度-25°C to +70°C</p></li><li><p>螺钉紧固接线方式</p></li><li><p>完整的产品系列</p></li><li><p>模块化的产品设计方便客户定制安装使用</p></li></ul></td><td class=\"space20\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr class=\"bottom\"><td><br/></td><td><br/></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><strong>&nbsp;优势：</strong></td><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\">坚固耐用金属系列，便于操作，安装快速简单</td><td style=\"padding: 0px 5px; margin: 0px;\"><br/></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><strong>&nbsp;应用范围：</strong></td><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\"><ul style=\"list-style-type: none;\" class=\" list-paddingleft-2\"><li><p>行业：机器制造，控制系统盘柜制造等等</p></li><li><p>下游应用：输配电盘厂，公共事业，建筑楼宇， 机场等等</p></li></ul></td><td style=\"padding: 0px 5px; margin: 0px;\"><br/></td></tr></tbody></table><p><br/></p>', '1422928981', '0', '2');
INSERT INTO `hhc_z_web_product` VALUES ('15', '国产TeSys 热过载继电器', './sundry/uploads/20150203/1422929026869.jpg', '<p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(88, 87, 87); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(88, 87, 87); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"><tbody><tr align=\"middle\" class=\"firstRow\"><td width=\"33%\" style=\"padding: 0px; margin: 0px;\"><img src=\"sundry/uploads/image/20150203/1422929011767945.jpg\" style=\"border: 0px;\"/></td></tr></tbody></table><table cellspacing=\"0\" cellpadding=\"5\" width=\"100%\"><tbody><tr class=\"firstRow\"><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\">&nbsp;<strong>性能描述：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\"><ul class=\" list-paddingleft-2\"><li><p>手动／自动复位选择开关</p></li><li><p>铅封挂勾</p></li><li><p>预接线组件</p></li><li><p>端子排用于独立导</p></li><li><p>远程电子复位</p></li><li><p>可与TeSys D接触器连接，至18.5KW宽度为45mm</p></li><li><p>脱扣等级：10A</p></li></ul></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><strong>&nbsp;优势：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\"><p>拥有手动／自动复位选择开关，LRD热过载继电器支持电动机电流最大可达150A，同时可以与TeSys D接触器一起使用，构成紧凑的起动机</p></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><strong>&nbsp;应用范围：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\"><ul class=\" list-paddingleft-2\"><li><p>设计用于保护交流电路和电动机，避免电动机过载、缺相、起动时间过长和堵转时间过长 &nbsp;</p></li></ul></td></tr></tbody></table><p><br/></p>', '1422929026', '0', '2');
INSERT INTO `hhc_z_web_product` VALUES ('16', '国产TeSys GV2电动机断路器', './sundry/uploads/20150203/1422929056468.jpg', '<p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(88, 87, 87); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(88, 87, 87); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"><tbody><tr align=\"middle\" class=\"firstRow\"><td width=\"33%\" style=\"padding: 0px; margin: 0px;\"><img src=\"sundry/uploads/image/20150203/1422929047410135.jpg\" style=\"border: 0px;\"/></td></tr></tbody></table><table cellspacing=\"0\" cellpadding=\"5\" width=\"100%\"><tbody><tr class=\"firstRow\"><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\">&nbsp;<strong>性能描述：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\"><ul class=\" list-paddingleft-2\"><li><p>当电动机断路器自行运作可手动控制（可通过按钮控制或旋钮控制），连接接接触器时可远程控制；</p></li><li><p>电动机的保护由集成热继－电磁设备的断路器提供；</p></li><li><p>所有带电部件均已防护，无法由前面板直接由手指触摸；</p></li><li><p>具有欠压脱扣模块，使得断路器可以在欠压条件下断开；</p></li><li><p>具有分励脱扣模块，该元件的断开可采用远程控制；</p></li><li><p>开放安装式和封闭式电动机断路器的操控器均可使用3个挂锁锁定在“N/C”位置。</p></li></ul></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><strong>&nbsp;优势：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\"><ul style=\"list-style-type: none;\" class=\" list-paddingleft-2\"><li><p>紧凑而简洁，TeSys GV2电动机断路器只有45mm宽，并根据控制类型，分断能力，电动机保护元件及配件等不同性能和功能进行分类。</p></li></ul><h3 class=\"title\" style=\"padding: 0px; margin: 0px; font-weight: normal; font-size: 12px;\">&nbsp;</h3></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><strong>&nbsp;应用范围：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\"><ul class=\" list-paddingleft-2\"><li><p>电动机控制与保护性能符合IEC 947-2 and IEC 947-4-1标准；</p></li><li><p>方便地安装在任何设备上，采用螺钉固定或夹紧安装在导轨上</p></li></ul></td></tr></tbody></table><p><br/></p>', '1422929056', '0', '6');
INSERT INTO `hhc_z_web_product` VALUES ('17', 'ATS48软起动器', './sundry/uploads/20150203/1422929090895.jpg', '<p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(88, 87, 87); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"><tbody><tr align=\"middle\" class=\"firstRow\"><td width=\"33%\" style=\"padding: 0px; margin: 0px;\"><img src=\"sundry/uploads/image/20150203/1422929080515004.jpg\" style=\"border: 0px;\"/></td></tr></tbody></table><table cellspacing=\"0\" cellpadding=\"5\" width=\"100%\"><tbody><tr class=\"firstRow\"><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\">&nbsp;<strong>性能描述：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\">功率：4到1，200kW电压：230... 415 V / 208... 690 V - 50/60 Hz通过ATS48的转矩控制系统（TCS专利）电机的热保护机械的保护：欠载和过载，门槛值和时间可调的欠载和过载保护转子堵转，转向监控出厂设定满足立即起动的需要通过集成显示或PowerSuite软件，简化客户设置旁路接触器控制以杜绝热量耗散双重配置（2套电机参数）诸多可配置输入/ 输出多台电机的级联软起软停Integrated集成Modbus、FIPIO、Profibus DP、DeviceNet、Ethernet&nbsp;&nbsp;&nbsp;</td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><strong>&nbsp;优势：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\"><ul style=\"list-style-type: none;\" class=\" list-paddingleft-2\"><li><p>ATS48借助其转矩控制系统（TCS）专利给您带来无尽的利益</p></li><li><p>立即起动，简易接线，扩展通讯功能，以其完备的简单理念集成于应用的核心</p></li></ul></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><strong>&nbsp;应用范围：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\"><ul class=\" list-paddingleft-2\"><li><p>专门用于楼宇HVAC应用的系列</p></li><li><p>泵</p></li><li><p>风机和高惯量机械</p></li><li><p>压缩机</p></li><li><p>传送带&nbsp;</p></li></ul></td></tr></tbody></table><p><br/></p>', '1422929090', '0', '6');
INSERT INTO `hhc_z_web_product` VALUES ('18', 'ATV71变频器', './sundry/uploads/20150203/1422929128328.jpg', '<p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(88, 87, 87); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(88, 87, 87); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"><tbody><tr align=\"middle\" class=\"firstRow\"><td width=\"33%\" style=\"padding: 0px; margin: 0px;\"><img src=\"sundry/uploads/image/20150203/1422929108734552.jpg\" style=\"border: 0px;\"/></td></tr></tbody></table><table cellspacing=\"0\" cellpadding=\"5\" width=\"100%\"><tbody><tr class=\"firstRow\"><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\">&nbsp;<strong>性能描述：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\">相同步电机与3相异步电机变频器，电机功率范围为0.37至630 kW<br/>系列说明<br/>200...240 V单相<br/>200...240 V/380...690 V 3相, 50/60 Hz<ul style=\"list-style-type: none;\" class=\" list-paddingleft-2\"><li><p>通过带或不带传感器的磁通矢量控制进行速度调节</p></li><li><p>速度范围：在带有速度反馈的闭环模式下为1至1000，在开环模式下为1至100</p></li><li><p>图形终端：纯文本，导航按钮，可配置的功能键，“简单起动”菜单...</p></li><li><p>保护电机与变频器</p></li><li><p>“断电”安全功能，ATEX安全功能</p></li><li><p>超过150种功能可供使用：PID调节器，适用于移动、提升与快速定向运动的制动器控制...</p></li><li><p>集成A类EMC滤波器</p></li><li><p>集成Modbus与CANopen</p></li><li><p>输入/输出扩展卡，编码器接口卡</p></li><li><p>通信卡：Fipio，Ethernet，Modbus Plus，Profibus DP，DeviceNet， Uni-Telway，INTERBUS</p></li><li><p>内置控制器可编程卡<br/></p></li></ul></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><strong>&nbsp;优势：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\"><p>简易精致！</p><ul style=\"list-style-type: none;\" class=\" list-paddingleft-2\"><li><p>最高可达630 kW的唯一系列，性能优越，功能先进...</p></li><li><p>对于所有通信网络、应用软件、用户…开放</p></li><li><p>ATV 71能够为您的所有特定需求提供设计精巧的解决方案<br/></p></li></ul></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><strong>&nbsp;应用范围：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\"><ul class=\" list-paddingleft-2\"><li><p>高性能应用（恒转矩）：<br/>&gt; 物料搬运<br/>&gt; 起重<br/>&gt; 木材加工机械<br/>&gt; 加工机械&nbsp;<br/>&gt; 纺织机械<br/>&gt; 包装</p></li></ul></td></tr></tbody></table><p><br/></p><div contenteditable=\"false\" style=\"width: 15px; height: 15px; position: absolute; cursor: move; top: 182px; left: 8px; -webkit-user-select: none; background-image: url(http://10.1.57.38/rsqywzym_a5/web2/sundry/plus/ue/dialogs/table/dragicon.png);\"></div>', '1422929128', '1', '6');
INSERT INTO `hhc_z_web_product` VALUES ('19', 'Climasys', './sundry/uploads/20150203/1422929159507.jpg', '<p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(88, 87, 87); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><strong>Climasys</strong></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(88, 87, 87); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"><tbody><tr align=\"middle\" class=\"firstRow\"><td width=\"33%\" style=\"padding: 0px; margin: 0px;\"><img src=\"sundry/uploads/image/20150203/1422929149923892.jpg\" style=\"border: 0px;\"/></td></tr></tbody></table><table cellspacing=\"0\" cellpadding=\"5\" width=\"100%\"><tbody><tr class=\"firstRow\"><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\">&nbsp;<strong>性能描述：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\"><ul style=\"list-style-type: none;\" class=\" list-paddingleft-2\"><li><p>快捷安装，独特的卡式安装方式</p></li><li><p>UL，CUL等权威认证</p></li><li><p>丰富的产品系列</p></li><li><p>安全可靠，适应各种环境</p></li><li><p>体积最小化，节省安装空间</p></li><li><p>新老产品更换便捷</p></li><li><p>经济型散热</p></li><li><p>确保最佳的气流量，减少压力损失</p></li><li><p>适合安装于所有类型的机柜</p></li><li><p>保养轻松</p></li><li><p>风量范围 40~850m3/h</p></li><li><p>防护等级 IP54或IP55</p></li><li><p>抗外部机械冲击能力 IK08</p></li><li><p>颜色 RAL7032</p></li><li><p>电压 230V，50Hz/60Hz</p></li><li><p>独特卡式安装，适用于材料厚度 0.8mm~4.5</p></li></ul></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><strong>&nbsp;优势：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\"><ul class=\" list-paddingleft-2\"><li><p>安装便捷，兼容性强</p></li><li><p>安全可靠，高度防护</p></li><li><p>典雅外观，功能完善</p></li><li><p>全面解决方案，满足多样化需求</p></li></ul></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><strong>&nbsp;应用范围：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\">风扇能广泛应用于自动化和工业控制以及其他基础设施</td></tr></tbody></table><p><br/></p><div contenteditable=\"false\" style=\"width: 15px; height: 15px; position: absolute; cursor: move; top: 182px; left: 8px; -webkit-user-select: none; background-image: url(http://10.1.57.38/rsqywzym_a5/web2/sundry/plus/ue/dialogs/table/dragicon.png);\"></div>', '1422929159', '0', '6');
INSERT INTO `hhc_z_web_product` VALUES ('20', 'Nautilus', './sundry/uploads/20150203/1422929211443.jpg', '<p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(88, 87, 87); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(88, 87, 87); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"><tbody><tr align=\"middle\" class=\"firstRow\"><td width=\"33%\" style=\"padding: 0px; margin: 0px;\"><img src=\"sundry/uploads/image/20150203/1422929192419947.jpg\" style=\"border: 0px;\"/></td></tr></tbody></table><table cellspacing=\"0\" cellpadding=\"5\" width=\"100%\"><tbody><tr class=\"firstRow\"><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\">&nbsp;<strong>性能描述：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\"><ul style=\"list-style-type: none;\" class=\" list-paddingleft-2\"><li><p>人性化的外型设计,简化参数设定与调整<br/>&gt; 触摸式按键<br/>&gt; 可离线/在线对所有参数编程设置<br/>&gt; 4位数字实时压力显示<br/>&gt; Bar/Psi 显示随时切换<br/>&gt; 双向的滚动菜单<br/>&gt; 两种工作模式：磁滞模式和窗口模式<br/>&gt; 开关延时：0…50s可设置<br/>&gt; 响应时间：0…500ms可设置</p></li><li><p>三种菜单模式，供用户选择<br/>&gt; 编程菜单<br/>&gt; 用户菜单<br/>&gt; 只读菜单</p></li><li><p>自诊断功能，适时传递传感器工作状态<br/>&gt; 手动<br/>&gt; 远程（可集成到自动化系统中）</p></li><li><p>可控压力范围<br/>&gt; -1~600bar</p></li><li><p>五种输出形式<br/>&gt; 4-20mA模拟量<br/>&gt; 0-10V模拟量<br/>&gt; 单段开关量+ 0-10V模拟量<br/>&gt; 单段开关量+ 4-20mA模拟量<br/>&gt; 双段开关量输出</p></li><li><p>抗水锤与过压冲击<br/>&gt; 记忆压力高峰值<br/>&gt; 抗6倍过压</p></li><li><p>保护功能<br/>&gt; 短路<br/>&gt; 极性反接<br/>&gt; 过载<br/>&gt; 接线错误</p></li></ul></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><strong>&nbsp;优势：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\">压力传感器可以通过面板设置或固定阀值，方便灵活的实现各种压力参数设置，满足用户需求</td></tr><tr><td height=\"10\" style=\"padding: 0px; margin: 0px;\"><br/></td></tr><tr><td bgcolor=\"#e7e1be\" height=\"25\" style=\"padding: 0px; margin: 0px;\"><strong>&nbsp;应用范围：</strong></td></tr><tr><td style=\"padding: 0px 5px; margin: 0px;\">压力传感器可以使用在空压机、注塑机、水处理、液压润滑机械等领域</td></tr></tbody></table><p><br/></p>', '1422929211', '1', '6');

-- ----------------------------
-- Table structure for `hhc_z_web_solution`
-- ----------------------------
DROP TABLE IF EXISTS `hhc_z_web_solution`;
CREATE TABLE `hhc_z_web_solution` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `pic` varchar(100) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `on_read` int(10) unsigned NOT NULL DEFAULT '0',
  `class_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hhc_z_web_solution
-- ----------------------------
INSERT INTO `hhc_z_web_solution` VALUES ('3', '以安全护航核电市场--施耐德电气ATV1200中压变频器助力三门核电站建设', './blog/box/tpl/art_empty_pic.jpg', '<p><br/></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\"><strong>中国三门，2013年1月23日</strong>——近日，全球能效管理专家<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气宣布为中核集团三门核电有限公司（以下简称三门核电）二期工程3、4号机组提供以ATV1200 10KV中压变频器产品为核心的能效解决方案，实现了<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气中压变频器产品在核电领域的首次应用。三门核电站是我国首个三代核电自主化依托项目，采用了全球最领先的第三代核电技术AP1000。项目中，<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气的ATV1200 10KV中压变频器产品将主要应用于海水膜反渗透升压泵的变频调速。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">发展核电来提高清洁能源的比重是我国推进能源节约和优化能源结构的重要发展战略。但是随着安全相关信息受到愈加广泛的关注，核电发展也遇到了巨大的挑战。中国政府于今年先后颁布了《核电安全规划(2011—2020年)》和《核电中长期发展规划(2011—2020年)》，均强调要把“安全第一”的方针落实到核电规划、建设、运行、退役全过程及所有相关产业。本次项目中，<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气为三门核电机组所提供的ATV1200中压变频器，采用了目前中压变频器最成熟的一种技术——‘多电平串联’来实现中压的输出，充分保障电机和设备平稳安全可靠地运行。此外，ATV1200还可有效地降低系统能耗，进而降低整个核电厂的厂用电率。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">“核电一直是<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气非常关注的领域，我们也已经具备了相应的成熟技术、产品以及解决方案。参与全球领先的核电机组的建设即是很好的证明。在本项目中，我们的ATV1200中压变频器产品的在性能和安全等层面的参数完全符合甚至超越了客户的要求，并配备了卓越的售后服务支持，充分获得了三门核电的认可。中国核电市场有着非常大的发展潜力，国家发改委在2012年末明确强调‘中国发展核电的决心不会改变’。未来，<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气会在这一领域持续投入，希望可以携手业内各界将中国建设成为全球领先的核电市场。”&nbsp;<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气高级副总裁、工业事业部负责人徐骏表示。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\"><strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气ATV1200是一款响应节能减排号召而研发的产品，已经在多个行业获得了成功应用。它由变压器柜、功率单元柜、控制柜三部分组成，输入采用24~48脉冲整流，电流谐波畸变率THDi小于2%，几乎不产生谐波；接近完美正弦波形输出——“清洁友好”的设计减少轴承、叶片的机械振动，可有效保护电机和设备。其主控制器基于DSP、FPGA、CPLD等当代最先进的电子器件，运算速度快，工作可靠。此外，ATV1200还内置了电网同步切换、PID、飞车起动、同步电机励磁控制等应用功能。</p><p sizset=\"8\" sizcache07177837409676813=\"0\" style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">中核集团三门核电工程采用美国西屋公司开发的第三代核电技术AP1000，规划建设6台125万千瓦的核电机组，总装机容量750万千瓦，分三期建设，预计2020年前全部建成，总投资超过1000亿人民币。一期工程于2009年4月19日正式开工，其1号机组是全球首台AP1000核电机组。<br/><img title=\"news\" border=\"0\" alt=\"news\" src=\"sundry/uploads/image/20150203/1422929333984136.jpg\" style=\"border: 0px;\"/></p><p><br/></p>', '1422929339', '0', '4');
INSERT INTO `hhc_z_web_solution` VALUES ('4', '功能强大的石油天然气管线管理解决方案', './blog/box/tpl/art_empty_pic.jpg', '<p><br/></p><h5 style=\"padding: 0px; margin: 0px; font-weight: normal; font-size: 12px;\">全球管线管理系统领导者Telvent，令<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气能效管理架构更可靠、更高效</h5><p><img alt=\"news\" src=\"sundry/uploads/image/20150203/1422929361171782.jpg\" style=\"border: 0px;\"/></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">将石油从延绵数千里的管道一端输送到另一端，这绝非易事。尽管环境瞬息万变、难以预知，但尽量降低风险、优化能源使用，并确保生产的稳定持续依然势在必行。我们的解决方案通过无数次实践测试和验证，旨在有效管理能源成本及远程资产。随着近日Telvent 的加入，我们的管线管理架构涵盖：<br/>&gt; 能源管理和效率<br/>&gt; 配有高级应用的管线管理SCADA 系统<br/>&gt; 远程通讯和集成的安防与安全系统<br/>&gt; 变电站电力、控制和安全<br/>&gt; 过程和能源监控与测量</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\"><strong>行业领先的管理系统引领变革之旅<br/></strong>作为世界领先的管线管理系统专家，Telvent 为石油行业带来其逾25 年的应用研发经验。这些实时的石油天然气解决方案，与<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气久经验证的集成式架构完美结合，共同助力石化行业效率提升和总拥有成本（TCO）的优化。关键在于，Telvent 管线管理解决方案能够娴熟将您的主要业务块有序结合到各个功能领域，并将其整合在一个强大的中央平台上。每个应用均提供充足的内置冗余和安全保障，确保持续的高效运营，包括：<br/>&gt; Telvent 液体管理应用套件（LMS）是一套全方位工具，用于排期和测量的实时管理。<br/>&gt; Telvent SimSuite Pipeline 是气体和液体管线实时状态建模和模拟系统，是目前世界上最为先进的管道模拟系统，拥有业内最高的可靠性。<br/>&gt; Telvent Power Optimisation 是能效管理应用套件，可为操作员和管理员提供准确的成本信息。<br/>&gt; Telvent Universal Operator Trainer 在真实环境中汇集管线管理领域的各路专家，提供培训和资质验证服务。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">Telvent 油气应用套件是对<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气能效管理架构和一体化解决方案的进一步补充，两者相辅相成。</p><p><br/></p>', '1422929365', '0', '4');
INSERT INTO `hhc_z_web_solution` VALUES ('5', '能源运营管理：StruxureWare节能增效管理软件致力于降低能耗', './blog/box/tpl/art_empty_pic.jpg', '<p><br/></p><h5 style=\"padding: 0px; margin: 0px; font-weight: normal; font-size: 12px;\">为设施经理和能源专家提供简化精炼的报告信息</h5><p><img alt=\"news\" src=\"sundry/uploads/image/20150203/1422929384100104.jpg\" style=\"border: 0px;\"/></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">许多企业组织的能耗支出可以占到运营成本的30%。因此，全面控制能源的使用成为能源和设施经理们的头等大事。企业和组织内外相关各方、高层及环保人士对于能源问题十分关注，而能源价格浮动、环境规制和积极的可持续目标又令这些企业和组织压力倍增。　<br/>　<br/>为满足数据收集和报告的需求，公司需要一套可以接受审计员、监管员、客户和股东审查的系统。这些最新应用被称为能源管理信息系统（EMIS），并有望加入诸如CRM（客户关系管理）和ERP（企业资源规划）等企业级软件应用的队伍。<br/>　<br/>通过访问这些数据，管理人员能够加深他们在能源过程上的见解，促使他们为节能增效举措设立目标，从而提高能效，并做出知情决策。<br/>　<br/><strong>StruxureWare 能源运营管理，为您提供统一的能源信息界面<br/></strong><strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气的StruxureWare™ 节能增效管理软件是一个开放式、互操作和可扩展的软件应用平台，赋予能源经理们在企业级、运营级或控制级优化能源使用的职责和能力。可定制的能源仪表盘整合了整个企业的能源信息，帮助用户基于自身能耗做出明智决策。<br/>　<br/>能源运营管理是StruxureWare 节能增效管理软件的一个应用，可以实现对不同系统数据信息的访问, 从而帮助决策者找到运营成本可削减之处。能源运营管理具有如下优势：<br/>&gt; 查看能源数据-即时访问有关能源使用、性能和异常情况的可靠数据，这些数据来源包括天气情况、仪表数据和其他软硬件的运行数据<br/>&gt; 确定基准和进行KPI分析- 通过比较不同设施找出不佳的绩效性能；建立具有指向性的能源相关KPI 指标<br/>&gt; 灵活的数据格式- 基于利益相关方的目标对能源绩效进行测量，为高层、设施经理和能源经理、建筑住户和公众提供定制报告<br/>&gt; 计算能效ROI- 比较能源使用情况的前后差异，以了解过去的节能提案帮助节省的资金，并为未来的提案做出更好的决策<br/>&gt; 环境影响报告- 以简单易懂的形式提供可持续发展目标进展报告<br/>　<br/><strong>节约成本的软件架构<br/></strong>云计算改变了业务专家操作数据的方式和包括节能业务在内的业务执行方式，从而帮助企业发展壮大。通过对能源绩效数据的优化访问，将可以简化能源管理并降低能耗。实际上，能源数据正与CRM（客户关系管理）和会计应用程序以同样的方式演进为云计算。具有节能意识的公司组织转向采取SaaS（软件即服务）解决方案，增强自身能源管理的灵活性、访问性，从而降低维护费用。能源运营管理可灵活调整以适应日益增长的面向不同建筑或建筑群的产品组合方案。随着版本的发布以及功能的不断升级，您无需再安装和升级昂贵的软件。此外，能源管理人员可以：<br/>&gt; 在世界任意角落快速访问关键任务数据24/7/365 全天候运行。<br/>&gt; 与现有软硬件集成，从而减少基础设施费用。<br/>&gt; 只对必要需求买单，从而优化能源预算和技术预算的使用。<br/><strong><br/>利用技术提高能效<br/></strong>自动化收集能源数据并生成信息精炼的能源绩效报告可以帮助设施专家和能源专家在降低能耗的工作上掌握更多的主动性。<strong><a href=\"http://www.gdschneider.com/\" target=\"_blank\" style=\"color: rgb(88, 87, 87); text-decoration: none;\">施耐德</a></strong>电气提供专业服务与支持，将能源数据展现为可行性的信息，从而真正实现节能增效和持续改进。</p><p><br/></p>', '1422929389', '0', '4');
