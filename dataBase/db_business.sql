-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-08-25 02:11:02
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_business`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(4) NOT NULL COMMENT '自动编号',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '管理员账号',
  `pwd` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '管理员密码'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `name`, `pwd`) VALUES
(1, 'tm', '96e79218965eb72c92a549dd5a330112'),
(3, 'mr', 'fdb390e945559e74475ed8c8bbb48ca5');

-- --------------------------------------------------------

--
-- 表的结构 `tb_class`
--

CREATE TABLE `tb_class` (
  `id` int(4) NOT NULL COMMENT '自动编号',
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '类型名称',
  `supid` int(2) NOT NULL COMMENT '父类ID'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `tb_class`
--

INSERT INTO `tb_class` (`id`, `name`, `supid`) VALUES
(1, '电子类', 0),
(2, '家具类', 0),
(23, '语言类', 0),
(18, '书籍类', 0),
(21, '电器类', 0),
(22, '电脑', 0),
(24, '英语', 0),
(25, '笔记本', 0),
(26, '床', 0),
(27, '放到', 0),
(33, '地方', 2),
(31, '地方', 1),
(32, '复方法', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tb_commo`
--

CREATE TABLE `tb_commo` (
  `id` int(4) NOT NULL COMMENT '自动编号',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品名称',
  `pics` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pics/null.jpg' COMMENT '商品图片',
  `info` mediumtext COLLATE utf8_unicode_ci NOT NULL COMMENT '商品介绍',
  `addtime` date NOT NULL COMMENT '添加时间',
  `area` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品产地',
  `model` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品型号',
  `class` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品类型',
  `brand` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '品牌',
  `stocks` int(4) NOT NULL DEFAULT '1' COMMENT '商品库存',
  `sell` int(4) NOT NULL DEFAULT '0' COMMENT '销售量',
  `m_price` float NOT NULL COMMENT '市场价格',
  `v_price` float NOT NULL COMMENT '会员价格',
  `fold` float NOT NULL DEFAULT '9' COMMENT '打折率',
  `isnew` int(1) NOT NULL DEFAULT '1' COMMENT '是否新品',
  `isnom` int(1) NOT NULL DEFAULT '0' COMMENT '是否推荐'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `tb_commo`
--

INSERT INTO `tb_commo` (`id`, `name`, `pics`, `info`, `addtime`, `area`, `model`, `class`, `brand`, `stocks`, `sell`, `m_price`, `v_price`, `fold`, `isnew`, `isnom`) VALUES
(24, '自行车', 'pics/1241341777.jpg', '凤凰牌山地越野自行车男女学生成人都可以用', '2009-05-03', '中国', '0001-05', '2', '越野', 10, 1, 388, 349.2, 9, 1, 0),
(23, '数码相机', 'pics/1241341731.jpg', '佳能PowerShot SX620 HS数码相机高清旅游相机迷你照相机', '2009-05-03', '中国', '003-0122', '1', '佳和', 3, 3, 1888, 1699.2, 9, 1, 1),
(21, '家庭影院', 'pics/1241341632.jpg', '3D智能投影仪 1080p高清4K无屏电视', '2009-05-03', '中国', '002-0001', '2', '创维', 1, 1, 4888, 4399.2, 9, 1, 1),
(20, '液晶显示器', 'pics/1241341592.jpg', '暂无介绍', '2009-05-03', '中国', '0001-01', '2', '神州', 112, 9, 5888, 5299.2, 9, 1, 1),
(26, '冠琴超薄女表', 'pics/冠琴超薄男表钢带防水女表潮流学生韩版简约休闲大气女士石英手表.png', '冠琴超薄男表钢带防水女表潮流学生韩版简约休闲大气女士石英手表', '2018-08-17', '中国', '0012211', '手表', '冠琴', 1, 0, 1999, 289, 9, 1, 1),
(27, '李宁男子漫威系列高帮 帆布板鞋运动鞋', 'pics/李宁男子漫威系列高帮 帆布板鞋运动鞋 ALAK089.jpg', '李宁男子漫威系列高帮 帆布板鞋运动鞋ALAK089', '2018-08-17', '中国', 'ALAK089', '鞋', '李宁', 99, 4, 199, 99, 10, 1, 1),
(28, 'Canon佳能EOS M50(15-45)摄影旅游佳能微单电相机', 'pics/Canon佳能EOS M50(15-45)摄影旅游佳能微单电相机.jpg', 'Canon佳能EOS M50(15-45)摄影旅游佳能微单电相机', '2018-08-09', '日本', 'EOS M50(15-45)', '照相机', 'Canon佳能', 1, 0, 8999, 4199, 9, 0, 1),
(29, '超多维SuperD裸眼悬浮3d BOX游戏影院智能高科技一体机vr虚拟现实', 'pics/超多维SuperD裸眼悬浮3d BOX游戏影院智能高科技一体机vr虚拟现实.jpg', '超多维SuperD裸眼悬浮3d BOX游戏影院智能高科技一体机vr虚拟现实', '2018-08-17', '美国', '0000', 'VR', '超多维', 20, 1, 199999, 129999, 8, 1, 0),
(30, '苹果专用无线蓝牙耳机iphone 7手机6可接听电话x无限i7带麦plus i7s', 'pics/苹果专用无线蓝牙耳机iphone 7手机6可接听电话x无限i7带麦plus i7s一对ip双耳5.0耳塞式商务开车真i8运动8p.jpg', '苹果专用无线蓝牙耳机iphone 7手机6可接听电话x无限i7带麦plus i7s一对ip双耳5.0耳塞式商务开车真i8运动8p', '2018-08-17', '美国', '0000', '耳机', 'iphone ', 999, 145, 99, 24, 10, 0, 0),
(31, '法国原瓶原装进口红酒路易拉菲传说干红葡萄酒2支装正品保证', 'pics/法国原瓶原装进口红酒路易拉菲传说干红葡萄酒2支装正品保证.jpg', '法国原瓶原装进口红酒路易拉菲传说干红葡萄酒2支装正品保证', '2018-08-17', '法国', '0000', '红酒', '拉菲', 10, 1, 860, 266, 9, 1, 0),
(32, 'deli得力木尚复印纸白纸70g办公用品纸整箱8包装A4打印单包批发', 'pics/deli得力木尚复印纸白纸70g办公用品纸整箱8包装A4打印单包批发.jpg', 'deli得力木尚复印纸白纸70g办公用品纸整箱8包装A4打印单包批发', '2018-08-17', '中国', '0000', '复印纸', 'deli得力木尚', 666, 17, 199, 99, 10, 1, 0),
(33, 'Herman Miller SAYL 座椅 畅销款', 'pics/Herman Miller SAYL 座椅 畅销款.jpg', 'Herman Miller SAYL 座椅 畅销款', '2018-08-17', '中国', '0000', '椅子', 'Herman Miller SAYL', 66, 4, 499, 280, 9, 1, 1),
(34, '迅达CT1609小型侧吸式抽油烟机710mm宽强劲脱排吸油烟机', 'pics/迅达CT1609小型侧吸式抽油烟机710mm宽强劲脱排吸油烟机.jpg', '迅达CT1609小型侧吸式抽油烟机710mm宽强劲脱排吸油烟机', '2018-08-07', '中国', 'CT1609', '油烟机', '迅达', 999, 46, 4888, 2455, 9, 1, 1),
(35, 'SUPOR苏泊尔 SWF17C05B电热水壶304不锈钢烧水壶家用', 'pics/SUPOR苏泊尔 SWF17C05B电热水壶304不锈钢烧水壶家用.jpg', 'SUPOR苏泊尔 SWF17C05B电热水壶304不锈钢烧水壶家用', '2018-08-21', '中国', '苏泊尔', '电器', 'SUPOR苏泊尔', 999, 56, 455, 999, 8, 1, 1),
(36, '匹克篮球鞋霍华德三代战靴高帮碳纤维抗扭转球鞋运动男鞋E74003A', 'pics/匹克篮球鞋霍华德三代战靴高帮碳纤维抗扭转球鞋运动男鞋E74003A.jpg', '匹克篮球鞋霍华德三代战靴高帮碳纤维抗扭转球鞋运动男鞋E74003A', '2018-08-21', '中国', 'E74003A', '鞋子', '匹克', 56, 4, 449, 219, 10, 1, 1),
(37, 'Swarovski华洛世奇黑水晶天鹅项链女吊坠锁骨链项链5347329', 'pics/Swarovski华洛世奇黑水晶天鹅项链女吊坠锁骨链项链5347329.jpg', 'Swarovski华洛世奇黑水晶天鹅项链女吊坠锁骨链项链5347329', '2018-08-21', '美国', '5347329', '项链', 'Swarovski华洛世奇', 24, 3, 14666, 4999, 9, 1, 1),
(38, '【保税直发】Kose高丝 雪肌精化妆水爽肤水美白滋润保湿淡斑200ml', 'pics/【保税直发】Kose高丝 雪肌精化妆水爽肤水美白滋润保湿淡斑200ml.jpg', '【保税直发】Kose高丝 雪肌精化妆水爽肤水美白滋润保湿淡斑200ml', '2018-08-21', '美国', '111111', '护肤品化妆水爽肤水', 'Kose高丝', 400, 124, 577, 249, 9, 1, 1),
(39, '劳力士集团新品帝舵手表男碧湾系列青铜型机械男表M79250BM-0001', 'pics/劳力士集团新品帝舵手表男碧湾系列青铜型机械男表M79250BM-0001.jpg', '劳力士集团新品帝舵手表男碧湾系列青铜型机械男表M79250BM-0001', '2018-08-21', '美国', 'M79250BM-0001', '手表', '劳力士', 99, 4, 49999, 124999, 9, 1, 1),
(40, '【店庆预售】sk-iisk2神仙水小灯泡大红瓶skii护肤套装补水美白B', 'pics/【店庆预售】sk-iisk2神仙水小灯泡大红瓶skii护肤套装补水美白B.png', '【店庆预售】sk-iisk2神仙水小灯泡大红瓶skii护肤套装补水美白B', '2018-08-22', '美国', 'sk-iisk2', '护肤品护肤套装', 'skin2', 155, 9, 3888, 3355, 9, 0, 1),
(41, '【官方正品】纪梵希口红小羊皮 半哑光唇膏豆沙色正品滋润304 306', 'pics/【官方正品】纪梵希口红小羊皮 半哑光唇膏豆沙色正品滋润304 306.png', '【官方正品】纪梵希口红小羊皮 半哑光唇膏豆沙色正品滋润304 306', '2018-08-22', '韩国', '304/306', '化妆品/口红', '纪梵希', 888, 179, 299, 199, 9, 1, 0),
(42, '【无极六档】红心家用蒸汽挂烫机RH2021 挂式蒸汽熨斗 手持式烫斗', 'pics/【无极六档】红心家用蒸汽挂烫机RH2021 挂式蒸汽熨斗 手持式烫斗.jpg', '【无极六档】红心家用蒸汽挂烫机RH2021 挂式蒸汽熨斗 手持式烫斗', '2018-08-22', '中国', 'RH2021 ', '电器/蒸汽挂烫机', '红心', 1, 0, 4888, 2499, 9, 1, 0),
(43, 'Haier-海尔 BCD-572WDENU1 572升WIFI智能变频风冷无霜对开门冰箱', 'pics/Haier-海尔 BCD-572WDENU1 572升WIFI智能变频风冷无霜对开门冰箱.jpg', 'Haier-海尔 BCD-572WDENU1 572升WIFI智能变频风冷无霜对开门冰箱', '2018-08-22', '中国', 'BCD-572WDENU1', '电器/冰箱', 'Haier/海尔', 477, 56, 10888, 6999, 9, 1, 1),
(44, 'HP惠普 Envy X360 15-bp101TX 15.6英寸轻薄翻转笔记本 4G独显', 'pics/HP惠普 Envy X360 15-bp101TX 15.6英寸轻薄翻转笔记本 4G独显.jpg', 'HP惠普 Envy X360 15-bp101TX 15.6英寸轻薄翻转笔记本 4G独显', '2018-08-01', '美国', 'Envy/X360/15-bp101TX', '笔记本电脑/电脑', 'HP/惠普', 266, 13, 8999, 6999, 9.5, 1, 0),
(45, 'LA MER海蓝之谜浓缩修护精华露 精华液 强韧肤质', 'pics/LA MER海蓝之谜浓缩修护精华露 精华液 强韧肤质.png', 'LA MER海蓝之谜浓缩修护精华露 精华液 强韧肤质', '2018-08-01', '美国', '11111', '护肤品/精华露/精华液', 'LA MER海蓝之谜', 1, 0, 488, 245, 9, 1, 0),
(46, 'rastar星辉宝马mini升级版折叠三轮车带遮阳伞安全护栏可折叠', 'pics/rastar星辉宝马mini升级版折叠三轮车带遮阳伞安全护栏可折叠.jpg', 'rastar星辉宝马mini升级版折叠三轮车带遮阳伞安全护栏可折叠', '2018-08-22', '中国', 'mini', '车/三轮车', 'rastar星辉宝马', 1, 0, 5888, 4233, 9, 1, 0),
(47, 'S10声卡套装手机直播喊麦通用麦克风电脑台式机主播设备全套触手苹果安卓电容麦全民k歌神器唱歌录音', 'pics/S10声卡套装手机直播喊麦通用麦克风电脑台式机主播设备全套触手苹果安卓电容麦全民k歌神器唱歌录音家用话筒.jpg', 'S10声卡套装手机直播喊麦通用麦克风电脑台式机主播设备全套触手苹果安卓电容麦全民k歌神器唱歌录音家用话筒', '2018-08-22', '中国', '无', '麦克风', '无', 1, 0, 499, 266, 9, 1, 0),
(48, 'TREK崔克MARLIN 6铝合金越野山地自行车山地车', 'pics/TREK崔克MARLIN 6铝合金越野山地自行车山地车.jpg', 'TREK崔克MARLIN 6铝合金越野山地自行车山地车', '2018-08-22', '中国', 'MARLIN', '自行车', 'TREK崔克', 100, 21, 7899, 4666, 9, 1, 0),
(49, '不锈钢筷子勺子套装便携式餐具三件套装学生创意可爱筷子盒长柄', 'pics/不锈钢筷子勺子套装便携式餐具三件套装学生创意可爱筷子盒长柄.jpg', '不锈钢筷子勺子套装便携式餐具三件套装学生创意可爱筷子盒长柄', '2018-08-22', '中国', '无', '餐具/筷子勺子', '无', 99, 19, 29.8, 9.9, 9, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tb_form`
--

CREATE TABLE `tb_form` (
  `id` int(4) NOT NULL COMMENT '自动编号',
  `formid` varchar(125) COLLATE utf8_unicode_ci NOT NULL COMMENT '订单号',
  `commo_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品id',
  `commo_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品名称',
  `commo_pics` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pics/null.jpg' COMMENT '商品图片',
  `commo_num` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品数量',
  `agoprice` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品单价',
  `fold` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '打折率',
  `total` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '消费总额',
  `vendee` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '消费者',
  `taker` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '收货人姓名',
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT '送货地址',
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '联系电话',
  `code` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '邮编',
  `pay_method` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '付款方式',
  `del_method` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '送货方式',
  `formtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '订单日期',
  `state` int(1) NOT NULL COMMENT '订单状态'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `tb_form`
--

INSERT INTO `tb_form` (`id`, `formid`, `commo_id`, `commo_name`, `commo_pics`, `commo_num`, `agoprice`, `fold`, `total`, `vendee`, `taker`, `address`, `tel`, `code`, `pay_method`, `del_method`, `formtime`, `state`) VALUES
(1, '1298613711', '20,21', '液晶显示器,家庭影院', 'pics/null.jpg', '1,1', '5299.2,4399.2', '9,9', '9698.4', 'mr', 'sdf', 'wewewewe', 'wwewe', '130025', '银行转账', '平邮', '2011-02-25 06:01:51', 0),
(42, '1529221696', '24,23', '自行车,数码相机', 'pics/null.jpg', '1,1', '349.2,1699.2', '9,9', '2048.4', '123', '糖糖', '湖南长沙', '12234567891', '414000', '银行转账', '平邮', '2018-06-16 23:48:16', 0),
(41, '1529214950', '23', '数码相机', 'pics/null.jpg', '1', '1699.2', '9', '1699.2', '123', '笑笑', '上海', '12345678910', '410000', '银行转账', '平邮', '2018-06-16 21:55:50', 1),
(40, '1529214862', '20', '液晶显示器', 'pics/null.jpg', '2', '5299.2', '9', '10598.4', '123', '大大', '衡阳', '12345678910', '414011', '银行转账', '送货上门', '2018-06-16 21:54:22', 0),
(39, '1529131345', '21', '家庭影院', 'pics/null.jpg', '1', '4399.2', '9', '4399.2', 'tang', '静静', '湖南工学院', '12345678910', '414000', '银行转账', '快递', '2018-06-15 22:42:25', 0),
(38, '1529052339', '23', '数码相机', 'pics/null.jpg', '1', '1699.2', '9', '1699.2', 'tang', 'jing', '000', '11', '123456', '银行转账', '平邮', '2018-06-15 00:45:39', 0),
(43, '1535093103', '21', '家庭影院', 'pics/1241341632.jpg', '2', '4399.2', '9', '8798.4', 'tang', '111', '1234', '12345678910', '111111', '银行转账', '平邮', '2018-08-23 22:45:03', 0),
(44, '1535093237', '23', '数码相机', 'pics/1241341731.jpg', '1', '1699.2', '9', '1699.2', 'tang', '方', '湖南岳阳', '12345678910', '123456', '银行转账', '平邮', '2018-08-23 22:47:17', 0),
(45, '1535093603', '24,49', '自行车,不锈钢筷子勺子套装便携式餐具三件套装学生创意可爱筷子盒长柄', 'pics/1241341777.jpg,pics/不锈钢筷子勺子套装便携式餐具三件套装学生创意可爱筷子盒长柄.jpg', '1,1', '349.2,9.9', '9,9', '359.1', 'tang', '唐', '哆啦咪', '12345678910', '123456', '银行转账', '平邮', '2018-08-23 22:53:23', 0),
(46, '1535093707', '23,43', '数码相机,Haier-海尔 BCD-572WDENU1 572升WIFI智能变频风冷无霜对开门冰箱', 'pics/null.jpg', '1,1', '1699.2,6999', '9,9', '8698.2', '123', '666', '111', '123456789', '123456', '银行转账', '平邮', '2018-08-23 22:55:07', 0),
(47, '1535094548', '20', '液晶显示器', 'pics/null.jpg', '2', '5299.2', '9', '10598.4', '123', '23', '属性', '21212', '222222', '银行转账', '平邮', '2018-08-23 23:09:08', 0),
(48, '1535095057', '39', '劳力士集团新品帝舵手表男碧湾系列青铜型机械男表M79250BM-0001', 'pics/劳力士集团新品帝舵手表男碧湾系列青铜型机械男表M79250BM-0001.jpg', '1', '124999', '9', '124999', '123', '玩玩', '北京', '12345678910', '123456', '银行转账', '平邮', '2018-08-23 23:17:37', 0);

-- --------------------------------------------------------

--
-- 表的结构 `tb_links`
--

CREATE TABLE `tb_links` (
  `id` int(4) NOT NULL COMMENT '自动编号',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '链接名称',
  `url` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT '链接网址'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `tb_links`
--

INSERT INTO `tb_links` (`id`, `name`, `url`) VALUES
(5, '编 程 词 典 网', 'http://www.mrbccd.com'),
(6, '编 程 体 验 网', 'http://www.bcty365.com');

-- --------------------------------------------------------

--
-- 表的结构 `tb_opinion`
--

CREATE TABLE `tb_opinion` (
  `id` int(4) NOT NULL COMMENT '自动编号',
  `content` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT '评论内容',
  `userid` int(4) NOT NULL COMMENT '用户id',
  `commoid` int(4) NOT NULL COMMENT '商品id',
  `otime` datetime NOT NULL COMMENT '评论时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `tb_public`
--

CREATE TABLE `tb_public` (
  `id` int(4) NOT NULL COMMENT '自动编号',
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '公告标题',
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL COMMENT '公告内容',
  `addtime` date NOT NULL COMMENT '公告时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `tb_public`
--

INSERT INTO `tb_public` (`id`, `title`, `content`, `addtime`) VALUES
(12, '五一大酬宾', '五一即将来临，为此，本网站所有商品让利销售，从1折打起，欢迎订购', '2008-04-23'),
(11, '欢迎新老朋友光临', '热烈欢迎新老朋友光临。本公司从今日起开始了网上购物业务，希望您能满意', '2008-04-23'),
(14, '买100送100', '买100送100，只要您购买的商品够100累计达到100元，将有机会赢取价值100元的精美礼物，满1000则赢取1000.机会难得', '2008-04-23'),
(15, '新增项目', '本公司新增加了一些商品类别', '2008-04-23');

-- --------------------------------------------------------

--
-- 表的结构 `tb_system`
--

CREATE TABLE `tb_system` (
  `id` int(8) NOT NULL,
  `merid` varchar(50) NOT NULL,
  `meracct` varchar(50) NOT NULL,
  `bq` varchar(50) NOT NULL,
  `icp` varchar(30) NOT NULL,
  `mark` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `tb_system`
--

INSERT INTO `tb_system` (`id`, `merid`, `meracct`, `bq`, `icp`, `mark`) VALUES
(1, '4200EC20001266', '4200220309000154130', '吉林省明日科技有限公司', '吉ICP备06005695', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(4) NOT NULL COMMENT '自动编号',
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户名称',
  `password` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户密码',
  `question` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT '密码保护',
  `answer` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT '问题答案',
  `realname` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT '真实姓名',
  `card` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT '身份证号',
  `tel` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT '手机',
  `phone` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT '座机',
  `Email` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Email',
  `QQ` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT 'QQ',
  `code` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT '邮编',
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT '地址',
  `addtime` datetime NOT NULL COMMENT '注册日期',
  `isfreeze` int(1) NOT NULL DEFAULT '0' COMMENT '是否冻结',
  `shopping` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '购物车信息',
  `consume` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `password`, `question`, `answer`, `realname`, `card`, `tel`, `phone`, `Email`, `QQ`, `code`, `address`, `addtime`, `isfreeze`, `shopping`, `consume`) VALUES
(1, 'jing', '123456', '123456', '123456', '静', '220322821103653', '13604338784', '0431-12345678', 'pp@sina.com', '334', '130025', '长春市', '2010-11-16 01:36:53', 1, '', 4399.2),
(2, 'tang', '123456', '123456', '123456', '潘攀', '111111111111111111', '22222222222', '0431-1111111', 'pp@sina.com', '22222222', '130025', '北京市', '2010-12-06 05:14:10', 0, '43,1@49,1@40,1@48,1', 21354.3),
(17, '7777', '123456', '', '', '', '', '12345678910', '', '', '', '', '', '2018-08-23 08:37:30', 0, '', 0),
(16, '多多', '123456', '', '', '', '', '12345678910', '', '', '', '', '', '2018-06-07 09:09:15', 0, '24,1', 0),
(14, 'zz', '123456', '', '', '', '', '12345678910', '', '', '', '', '', '2018-05-28 07:34:37', 0, '', 0),
(15, '999', '123456', '', '', '', '', '12345678910', '', '', '', '', '', '2018-05-28 07:55:45', 0, '', 0),
(7, '123', '123456', '', '', '', '', '12345678910', '', '', '', '', '', '2018-05-28 06:53:10', 0, '43,1@39,1', 158642),
(5, 'leonsk', 'e10adc3949ba59abbe56e057f20f883e', '123', '123', 'leon', '', '13000000000', '', 'keephonest@126.com', '40605000', '130000', '长春市东盛路1111号', '2011-05-28 10:19:06', 0, '', 349.2),
(13, 'z', '123456', '', '', '', '', '12345678910', '', '', '', '', '', '2018-05-28 07:28:49', 0, '', 0),
(12, 'zzz', '123456', '', '', '', '', '12345678910', '', '', '', '', '', '2018-05-28 07:27:50', 0, '', 0),
(8, 'fang', '123456', '', '', '', '', '12345678910', '', '', '', '', '', '2018-05-28 06:55:55', 0, '', 0),
(9, '22', '123456', '', '', '', '', '12345678910', '', '', '', '', '', '2018-05-28 07:02:15', 0, '', 0),
(10, 'mm', '123456', '', '', '', '', '12345678910', '', '', '', '', '', '2018-05-28 07:07:59', 0, '', 0),
(11, '方', '123456', '为什么？', '', '因为', '', '12345678910', '', '1111111@111.aa', '', '', 'sasaa', '2018-05-28 07:26:19', 0, '', 0),
(18, '', '', '', '', '', '', '', '', '', '', '', '', '2018-08-23 08:37:54', 0, '', 0),
(19, '111', '123456', '', '', '', '', '12345678910', '', '', '', '', '', '2018-08-23 08:42:02', 0, '', 0),
(20, '1111', '123456', '', '', '', '', '12345678910', '', '', '', '', '', '2018-08-23 08:45:20', 0, '', 0),
(21, '566', '123456', '', '', '', '', '12345678910', '', '', '', '', '', '2018-08-23 08:47:52', 0, '', 0),
(22, '123456', '123456', '', '', '', '', '12345678910', '', '', '', '', '', '2018-08-23 08:52:49', 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_class`
--
ALTER TABLE `tb_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_commo`
--
ALTER TABLE `tb_commo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_form`
--
ALTER TABLE `tb_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_links`
--
ALTER TABLE `tb_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_opinion`
--
ALTER TABLE `tb_opinion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_public`
--
ALTER TABLE `tb_public`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_system`
--
ALTER TABLE `tb_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '自动编号', AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `tb_class`
--
ALTER TABLE `tb_class`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '自动编号', AUTO_INCREMENT=34;
--
-- 使用表AUTO_INCREMENT `tb_commo`
--
ALTER TABLE `tb_commo`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '自动编号', AUTO_INCREMENT=50;
--
-- 使用表AUTO_INCREMENT `tb_form`
--
ALTER TABLE `tb_form`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '自动编号', AUTO_INCREMENT=49;
--
-- 使用表AUTO_INCREMENT `tb_links`
--
ALTER TABLE `tb_links`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '自动编号', AUTO_INCREMENT=10;
--
-- 使用表AUTO_INCREMENT `tb_opinion`
--
ALTER TABLE `tb_opinion`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '自动编号';
--
-- 使用表AUTO_INCREMENT `tb_public`
--
ALTER TABLE `tb_public`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '自动编号', AUTO_INCREMENT=17;
--
-- 使用表AUTO_INCREMENT `tb_system`
--
ALTER TABLE `tb_system`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '自动编号', AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
