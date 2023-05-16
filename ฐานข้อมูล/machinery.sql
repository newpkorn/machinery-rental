-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 03, 2012 at 01:52 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `machinery`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_admin`
-- 

CREATE TABLE `tb_admin` (
  `adm_id` varchar(5) character set tis620 NOT NULL,
  `adm_name` varchar(50) character set tis620 NOT NULL,
  `adm_user` varchar(15) character set tis620 NOT NULL,
  `adm_pass` varchar(15) character set tis620 NOT NULL,
  `brithday` varchar(30) character set tis620 NOT NULL,
  `sex` varchar(1) character set tis620 NOT NULL,
  `address` varchar(100) character set tis620 NOT NULL,
  `phone` varchar(10) character set tis620 NOT NULL,
  `Position_id` varchar(5) character set tis620 NOT NULL,
  PRIMARY KEY  (`adm_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tb_admin`
-- 

INSERT INTO `tb_admin` VALUES ('adm01', 'admin', 'admin', 'admin', '19 march 1988', 'm', ' MSU ', '0899349394', '3');
INSERT INTO `tb_admin` VALUES ('adm02', 'Jack', 'adm02', 'adm02', '13 ธันวาคม 2529', 'm', 'Khon kaen \r\n                       \r\n                       \r\n                       \r\n             ', '0900328985', '3');
INSERT INTO `tb_admin` VALUES ('ooop', 'tt', 'tt', 'tt', 'rrr', 'm', '           rer           ', 're', 'xxx');
INSERT INTO `tb_admin` VALUES ('adm03', 'นายกมล ใจดี', 'adm03', 'adm03', '11/05/1989', 'm', 'มหาสารคาม', '0900323333', '3');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_back`
-- 

CREATE TABLE `tb_back` (
  `leas_id` int(10) NOT NULL auto_increment,
  `emp_id` varchar(15) character set tis620 NOT NULL,
  `mem_id` varchar(15) character set tis620 NOT NULL,
  PRIMARY KEY  (`leas_id`),
  KEY `emp_id` (`emp_id`,`mem_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

-- 
-- Dumping data for table `tb_back`
-- 

INSERT INTO `tb_back` VALUES (13, 'emp01', '1212221333344');
INSERT INTO `tb_back` VALUES (12, 'emp01', '1350100125064');
INSERT INTO `tb_back` VALUES (22, 'emp01', '1409900420611');
INSERT INTO `tb_back` VALUES (11, 'emp01', '1409900420611');
INSERT INTO `tb_back` VALUES (14, 'emp01', '1309900320311');
INSERT INTO `tb_back` VALUES (15, 'emp01', '1309900456777');
INSERT INTO `tb_back` VALUES (16, 'emp01', '1309900320311');
INSERT INTO `tb_back` VALUES (21, 'emp01', '1900993292222');
INSERT INTO `tb_back` VALUES (18, 'emp01', '1409900420611');
INSERT INTO `tb_back` VALUES (19, 'emp01', '1309900320311');
INSERT INTO `tb_back` VALUES (20, 'emp02', '1340100204111');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_back_detail`
-- 

CREATE TABLE `tb_back_detail` (
  `leas_id` int(10) NOT NULL,
  `mac_id` varchar(12) NOT NULL,
  `leas_date` text NOT NULL,
  `return_date` text NOT NULL,
  `b_status` int(11) NOT NULL,
  `back_date` text NOT NULL,
  `period` int(11) NOT NULL,
  PRIMARY KEY  (`leas_id`,`mac_id`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- 
-- Dumping data for table `tb_back_detail`
-- 

INSERT INTO `tb_back_detail` VALUES (13, '25-6613-97-1', '27/05/2012', '29/05/2012', 1, '2012-05-28 14:05:10', 0);
INSERT INTO `tb_back_detail` VALUES (12, '41-0588-80-1', '28/05/2012', '31/05/2012', 1, '2012-05-28 14:05:39', 0);
INSERT INTO `tb_back_detail` VALUES (12, '82-6081-08-3', '28/05/2012', '31/05/2012', 1, '2012-05-28 14:05:47', 0);
INSERT INTO `tb_back_detail` VALUES (21, '33100', '30/05/2012', '31/05/2012', 1, '2012-05-30 01:05:00', 1);
INSERT INTO `tb_back_detail` VALUES (13, '41-6018-52-2', '27/05/2012', '29/05/2012', 1, '2012-05-28 23:05:45', 0);
INSERT INTO `tb_back_detail` VALUES (12, '12-1331-4', '28/05/2012', '31/05/2012', 1, '2012-05-28 14:05:32', 0);
INSERT INTO `tb_back_detail` VALUES (11, '31-6286-97-3', '27/05/2012', '29/05/2012', 1, '2012-05-28 13:05:53', 0);
INSERT INTO `tb_back_detail` VALUES (11, '82-6076-02-9', '27/05/2012', '29/05/2012', 1, '2012-05-28 13:05:48', 0);
INSERT INTO `tb_back_detail` VALUES (11, '64-6025-02-2', '27/05/2012', '29/05/2012', 1, '2012-05-28 13:05:46', 0);
INSERT INTO `tb_back_detail` VALUES (13, '82-6096-10-2', '27/05/2012', '29/05/2012', 1, '2012-05-28 23:05:50', 0);
INSERT INTO `tb_back_detail` VALUES (14, '82-6076-02-9', '28/05/2012', '30/05/2012', 1, '2012-05-28 14:05:12', 2);
INSERT INTO `tb_back_detail` VALUES (15, '31-6286-97-3', '28/05/2012', '30/05/2012', 2, '', 2);
INSERT INTO `tb_back_detail` VALUES (15, '82-6076-02-9', '28/05/2012', '30/05/2012', 2, '', 14);
INSERT INTO `tb_back_detail` VALUES (16, '94-0255-94-1', '28/05/2012', '30/05/2012', 1, '2012-05-28 23:05:10', 2);
INSERT INTO `tb_back_detail` VALUES (16, '82-6081-08-3', '28/05/2012', '30/05/2012', 1, '2012-05-28 23:05:04', 14);
INSERT INTO `tb_back_detail` VALUES (21, '111122', '30/05/2012', '31/05/2012', 1, '2012-05-30 01:05:53', 1);
INSERT INTO `tb_back_detail` VALUES (18, '111122', '01/06/2012', '03/06/2012', 1, '2012-05-29 00:05:27', 2);
INSERT INTO `tb_back_detail` VALUES (19, 'ww5555', '29/05/2012', '30/05/2012', 1, '2012-05-29 08:05:31', 1);
INSERT INTO `tb_back_detail` VALUES (20, '41-0588-80-1', '29/05/2012', '31/05/2012', 1, '2012-05-29 12:05:22', 2);
INSERT INTO `tb_back_detail` VALUES (22, '12-1331-4', '30/05/2012', '31/05/2012', 1, '2012-05-30 22:05:52', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_contact`
-- 

CREATE TABLE `tb_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_add` text NOT NULL,
  `contact_tel` text NOT NULL,
  `contact_mail` text NOT NULL,
  PRIMARY KEY  (`contact_id`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- 
-- Dumping data for table `tb_contact`
-- 

INSERT INTO `tb_contact` VALUES (1, 'ถ.ถีนานนท์ ต.ตลาด อ.เมือง จ.มหาสารคาม 44000 ', '0878480293', 'Webmaster : road2.46@doh.go.th หรือ frame_it3@hotmail.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_document`
-- 

CREATE TABLE `tb_document` (
  `document_id` int(11) NOT NULL auto_increment,
  `document_name` text NOT NULL,
  `document_file` text NOT NULL,
  PRIMARY KEY  (`document_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=tis620 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `tb_document`
-- 

INSERT INTO `tb_document` VALUES (2, 'หนังสือขอเช่าเครื่องจักรกล', '72712. หนังสือขอเช่าเครื่องจักรกล.doc');
INSERT INTO `tb_document` VALUES (3, 'สัญญาเช่าเครื่องจักรกล', '84523. สัญญาเช่าเครื่องจักรกล.docx');
INSERT INTO `tb_document` VALUES (6, 'ใบขอเช่าเครื่องจักรกล', '92454. ใบขอเช่าเครื่องจักรกล.doc');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_employee`
-- 

CREATE TABLE `tb_employee` (
  `emp_id` varchar(5) character set tis620 NOT NULL,
  `emp_name` text character set tis620 NOT NULL,
  `emp_user` varchar(15) character set tis620 NOT NULL,
  `emp_pass` varchar(15) character set tis620 NOT NULL,
  `brithday` text character set tis620 NOT NULL,
  `sex` varchar(1) character set tis620 NOT NULL,
  `address` varchar(100) character set tis620 NOT NULL,
  `phone` varchar(10) character set tis620 NOT NULL,
  `Position_id` varchar(5) character set tis620 NOT NULL,
  PRIMARY KEY  (`emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tb_employee`
-- 

INSERT INTO `tb_employee` VALUES ('emp01', 'นายปกรณ์ ลัม', 'emp01', 'emp01', '01/01/1968', 'w', 'มหาสารคาม', '0900328985', '1');
INSERT INTO `tb_employee` VALUES ('vvv', 'vvv', 'vvv', 'vvv', 'vv', 'm', '  กกกกกกกกกกกกก  ', '0900328985', 'vvv');
INSERT INTO `tb_employee` VALUES ('nikon', 'เด็กหญิงภรณ์ทิพย์   ภักดีศิริ', '1', '1', '14 Dec 1989', 'f', 'khjgfdg', '0867152113', '');
INSERT INTO `tb_employee` VALUES ('emp02', 'นางภรณ์ทิพย์   ภักดีศิริ', 'emp02', 'emp02', '18/05/2012', 'm', 'ขอนแก่น ', '0900009999', '1');
INSERT INTO `tb_employee` VALUES ('emp03', 'นายสมชาย เข็มกลัด', 'emp03', 'emp03', '02/05/2012', 'm', 'มหาสารคาม   ', '0900003034', '1');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_lease`
-- 

CREATE TABLE `tb_lease` (
  `leas_id` int(10) NOT NULL auto_increment,
  `emp_id` varchar(15) character set tis620 NOT NULL,
  `mem_id` varchar(15) character set tis620 NOT NULL,
  `purpose` text character set tis620 NOT NULL,
  `area` text character set tis620 NOT NULL,
  PRIMARY KEY  (`leas_id`),
  KEY `emp_id` (`emp_id`,`mem_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

-- 
-- Dumping data for table `tb_lease`
-- 

INSERT INTO `tb_lease` VALUES (12, 'emp01', '1350100125064', 'ปรับปรุงพื้นที่ทางการเกษตร', 'ต.เขวา อ.เมือง จ.มหาสารคาม');
INSERT INTO `tb_lease` VALUES (11, 'emp01', '1409900420611', 'ปรับปรุงพื้นที่ทางการเกษตร', 'บ้านหนองไห ต.โพนทอง อ.เชียงยืน จ.มหาสารคาม');
INSERT INTO `tb_lease` VALUES (13, 'emp01', '1212221333344', 'ปรับปรุงพื้นที่ทางการเกษตร', 'ต.เขวา อ.เมือง จ.มหาสารคาม');
INSERT INTO `tb_lease` VALUES (14, 'emp01', '1309900320311', 'ขุดสระน้ำ', 'อ.เมือง จ. สระบุรี');
INSERT INTO `tb_lease` VALUES (15, 'emp01', '1309900456777', 'ปรับปรุงทางเข้าบ้าน', 'บ้านหนองไห ต.โพนทอง อ.เชียงยืน จ.มหาสารคาม');
INSERT INTO `tb_lease` VALUES (16, 'emp01', '1309900320311', 'XXXX', 'yyyy');
INSERT INTO `tb_lease` VALUES (22, 'emp01', '1409900420611', 'ปรับปรุงพื้นที่ทางการเกษตร', 'อ.เมือง จ. มหาสารคาม');
INSERT INTO `tb_lease` VALUES (20, 'emp02', '1340100204111', 'ปรับปรุงถนนเข้าบ้าน', 'มหาสารคาม');
INSERT INTO `tb_lease` VALUES (21, 'emp01', '1900993292222', 'ทดสอบ', 'มหาลัย');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_lease_detail`
-- 

CREATE TABLE `tb_lease_detail` (
  `leas_id` int(10) NOT NULL,
  `mac_id` varchar(12) NOT NULL,
  `period` int(11) NOT NULL,
  `leas_date` text NOT NULL,
  `return_date` text NOT NULL,
  PRIMARY KEY  (`leas_id`,`mac_id`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- 
-- Dumping data for table `tb_lease_detail`
-- 

INSERT INTO `tb_lease_detail` VALUES (11, '64-6025-02-2', 2, '27/05/2012', '29/05/2012');
INSERT INTO `tb_lease_detail` VALUES (11, '31-6286-97-3', 2, '27/05/2012', '29/05/2012');
INSERT INTO `tb_lease_detail` VALUES (11, '82-6076-02-9', 14, '27/05/2012', '29/05/2012');
INSERT INTO `tb_lease_detail` VALUES (12, '82-6081-08-3', 3, '28/05/2012', '31/05/2012');
INSERT INTO `tb_lease_detail` VALUES (12, '12-1331-4', 3, '28/05/2012', '31/05/2012');
INSERT INTO `tb_lease_detail` VALUES (12, '41-0588-80-1', 3, '28/05/2012', '31/05/2012');
INSERT INTO `tb_lease_detail` VALUES (13, '41-6018-52-2', 14, '27/05/2012', '29/05/2012');
INSERT INTO `tb_lease_detail` VALUES (13, '25-6613-97-1', 2, '27/05/2012', '29/05/2012');
INSERT INTO `tb_lease_detail` VALUES (13, '82-6096-10-2', 14, '27/05/2012', '29/05/2012');
INSERT INTO `tb_lease_detail` VALUES (14, '82-6076-02-9', 2, '28/05/2012', '30/05/2012');
INSERT INTO `tb_lease_detail` VALUES (15, '31-6286-97-3', 2, '28/05/2012', '30/05/2012');
INSERT INTO `tb_lease_detail` VALUES (15, '82-6076-02-9', 14, '28/05/2012', '30/05/2012');
INSERT INTO `tb_lease_detail` VALUES (16, '94-0255-94-1', 2, '28/05/2012', '30/05/2012');
INSERT INTO `tb_lease_detail` VALUES (16, '82-6081-08-3', 14, '28/05/2012', '30/05/2012');
INSERT INTO `tb_lease_detail` VALUES (22, '12-1331-4', 1, '30/05/2012', '31/05/2012');
INSERT INTO `tb_lease_detail` VALUES (20, '41-0588-80-1', 2, '29/05/2012', '31/05/2012');
INSERT INTO `tb_lease_detail` VALUES (21, '111122', 1, '30/05/2012', '31/05/2012');
INSERT INTO `tb_lease_detail` VALUES (21, '33100', 1, '30/05/2012', '31/05/2012');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_machin`
-- 

CREATE TABLE `tb_machin` (
  `mac_id` varchar(12) character set tis620 NOT NULL,
  `mac_name` varchar(30) character set tis620 NOT NULL,
  `mac_licen` varchar(15) character set tis620 NOT NULL,
  `mac_brand` varchar(5) character set tis620 NOT NULL,
  `mac_type` varchar(5) character set tis620 NOT NULL,
  `mec_price` float NOT NULL,
  `mac_unit` int(11) NOT NULL,
  `mac_status` char(5) character set tis620 default NULL,
  `mac_control` varchar(2) character set tis620 NOT NULL,
  `mac_picture` text character set tis620 NOT NULL,
  PRIMARY KEY  (`mac_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tb_machin`
-- 

INSERT INTO `tb_machin` VALUES ('15-6253-02-0', 'รถพ่วง', '95-4632', '5', '5', 2049, 2, '1', '1', '1342รถพ่วง.jpg');
INSERT INTO `tb_machin` VALUES ('20-6082-01-2', 'รถยนต์นั่ง เก๋ง/ตู้', 'อห 1158', '6', '6', 23809, 3, '1', '2', '9201รถยนต์นั่ง เก๋ง ตู้.gif');
INSERT INTO `tb_machin` VALUES ('20-6176-08-5', 'รถยนต์นั่ง เก๋ง/ตู้', '41-5698', '6', '7', 28930, 3, '1', '2', '9201รถยนต์นั่ง เก๋ง ตู้.gif');
INSERT INTO `tb_machin` VALUES ('21-6263-01-5', 'รถยนต์นั่งตรวจการ', 'อษ 6326', '7', '8', 22978, 3, '1', '3', '9742รถยนต์นั่งตรวจการ.jpg');
INSERT INTO `tb_machin` VALUES ('21-6271-02-5', 'รถยนต์นั่งตรวจการ', 'อษ 6335', '7', '8', 22978, 3, '1', '3', '9742รถยนต์นั่งตรวจการ.jpg');
INSERT INTO `tb_machin` VALUES ('21-6292-06-8', 'รถยนต์นั่งตรวจการ', 'ชง 2906', '6', '9', 27968, 3, '1', '4', '9742รถยนต์นั่งตรวจการ.jpg');
INSERT INTO `tb_machin` VALUES ('21-6437-08-8', 'รถยนต์นั่งตรวจการ', 'ฌธ 7536', '7', '10', 22978, 3, '1', '5', '9742รถยนต์นั่งตรวจการ.jpg');
INSERT INTO `tb_machin` VALUES ('21-6462-10-1', 'รถยนต์นั่งตรวจการ', 'ฏฬ 3809', '7', '10', 22978, 3, '1', '6', '9742รถยนต์นั่งตรวจการ.jpg');
INSERT INTO `tb_machin` VALUES ('22-3485-91-3', 'รถบรรทุก', '6ธ-1031', '8', '11', 14686, 3, '1', '16', '5873รถบรรทุก.jpg');
INSERT INTO `tb_machin` VALUES ('23-6187-97-0', 'รถยนต์บรรทุกกะบะ', '97-9973', '7', '12', 1976, 2, '1', '1', '6226รถยนต์บรรทุกกะบะ.jpg');
INSERT INTO `tb_machin` VALUES ('23-6188-97-1', 'รถยนต์บรรทุกกะบะ', '97-9974', '7', '12', 1976, 2, '1', '7', '6226รถยนต์บรรทุกกะบะ.jpg');
INSERT INTO `tb_machin` VALUES ('23-6198-97-3', 'รถยนต์บรรทุกกะบะ', '97-2675', '7', '12', 1976, 2, '1', '8', '6226รถยนต์บรรทุกกะบะ.jpg');
INSERT INTO `tb_machin` VALUES ('23-6199-97-4', 'รถยนต์บรรทุกกะบะ', 'รฐ 6885', '7', '12', 1976, 2, '1', '10', '5106รถยนต์บรรทุกกะบะ.jpg');
INSERT INTO `tb_machin` VALUES ('25-6613-97-1', 'รถยนต์บรรทุกน้ำ', '97-2673', '8', '13', 1763, 2, '1', '11', '7333รถยนต์บรรทุกน้ำ.jpg');
INSERT INTO `tb_machin` VALUES ('25-6674-01-3', 'รถยนต์บรรทุกน้ำ', '94-4440', '8', '13', 1763, 2, '1', '12', '7333รถยนต์บรรทุกน้ำ.jpg');
INSERT INTO `tb_machin` VALUES ('31-6286-97-3', 'เครื่องบดทับสั่นสะเทือน', 'ถข 258', '10', '15', 2845, 2, '2', '13', '2573เครื่องบดทับสั่นสะเทือน.jpg');
INSERT INTO `tb_machin` VALUES ('35-6077-97-3', 'รถบดล้อยาง', 'ถข 461', '11', '16', 2782, 2, '1', '15', '7115รถบดล้อยาง.jpg');
INSERT INTO `tb_machin` VALUES ('35-6078-97-4', 'รถบดล้อยาง', 'ถข ภถต', '11', '16', 2782, 2, '1', '16', '7115รถบดล้อยาง.jpg');
INSERT INTO `tb_machin` VALUES ('41-0588-80-1', 'รถยนต์เกลี่ย', '3ต-8014', '12', '17', 562, 1, '1', '1', '');
INSERT INTO `tb_machin` VALUES ('41-6018-52-2', 'รถยนต์เกลี่ย', '4ต-8739', '8', '18', 562, 1, '1', '17', '9198รถยนต์เกลี่ย.gif');
INSERT INTO `tb_machin` VALUES ('41-5015-79-4', 'รถยนต์เกลี่ย', '3ต-4553', '13', '19', 562, 1, '1', '19', '9198รถยนต์เกลี่ย.gif');
INSERT INTO `tb_machin` VALUES ('41-6062-95-8', 'รถยนต์เกลี่ย', '4ต-8446', '1', '20', 562, 1, '1', '12', '9198รถยนต์เกลี่ย.gif');
INSERT INTO `tb_machin` VALUES ('44-7202-97-5', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'อย 4670', '8', '21', 12160, 3, '1', '21', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-7303-02-2', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'วน 1597', '14', '22', 14686, 3, '1', '22', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-7320-02-3', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'วน 1614', '14', '23', 14686, 3, '1', '23', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-7321-02-4', 'รถบรรทุกขนาด', 'วน1616', '14', '21', 14686, 3, '1', '1', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-7456-02-8', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'อษ 9718', '6', '24', 12160, 3, '1', '24', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-7457-02-9', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'อษ 9716', '6', '24', 12160, 3, '1', '1', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-8000-07-9', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'ฮค 9469', '15', '25', 12160, 3, '1', '25', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-8001-07-0', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'ฮค 9471', '15', '25', 12160, 3, '1', '26', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-8002-07-0', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'ฮค 9473', '15', '25', 12160, 3, '1', '27', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-8003-07-1', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'ฮค 9475', '15', '25', 12160, 3, '1', '28', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-8004-07-2', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'ฮค 9477', '15', '25', 12160, 3, '1', '29', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-8005-07-3', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'ฮค 9421', '15', '25', 12160, 3, '1', '30', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-8006-07-4', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'ฮค 9420', '15', '25', 12160, 3, '1', '1', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-8007-07-5', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'ฮค 9418', '15', '25', 12160, 3, '1', '31', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-8599-08-6', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'ชฬ 4541', '14', '26', 14686, 3, '1', '32', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-8954-11-6', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'ญก 4783', '6', '27', 14686, 3, '1', '33', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-8955-11-7', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'ญก 4637', '6', '27', 14686, 3, '1', '34', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-8956-11-8', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'ญก 4749', '6', '27', 14686, 3, '1', '35', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-8957-11-9', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'ญก 4696', '6', '27', 14686, 3, '1', '36', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-8958-11-0', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'ญก 4583', '6', '27', 14686, 3, '1', '37', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('44-8995-11-4', 'รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน', 'ญก 4801', '6', '27', 14686, 3, '1', '38', '1728รถบรรทุกขนาดบรรทุกไม่เกิน3ตัน.jpg');
INSERT INTO `tb_machin` VALUES ('61-6028-02-0', 'รถยนต์หัวลาก', '95-4765', '16', '28', 5124, 2, '1', '39', '8979รถยนต์หัวลาก.jpg');
INSERT INTO `tb_machin` VALUES ('64-6025-02-2', 'รถแทร็กเตอร์ตีนตะขาบ', '95-0839', '7', '29', 5679, 2, '1', '40', '8056รถแทร็กเตอร์ตีนตะขาบ.jpg');
INSERT INTO `tb_machin` VALUES ('74-6142-09-5', 'รถบรรทุกติดเครน', '98-7568', '18', '31', 3636, 2, '1', '1', '6618รถบรรทุกติดเครน.JPG');
INSERT INTO `tb_machin` VALUES ('74-6143-09-6', 'รถบรรทุกติดเครน', '98-7569', '18', '31', 3636, 2, '1', '42', '6618รถบรรทุกติดเครน.JPG');
INSERT INTO `tb_machin` VALUES ('77-6040-97-7', 'รถขุดล่องน้ำ(รถตักหน้าขุดหลัง)', 'ตฉ 534', '19', '32', 625, 1, '1', '1', '7033รถขุดล่องน้ำ(รถตักหน้าขุดหลัง).jpg');
INSERT INTO `tb_machin` VALUES ('77-6056-02-0', 'รถขุดล่องน้ำ(รถตักหน้าขุดหลัง)', 'ตฉ 2951', '19', '32', 625, 1, '1', '1', '7033รถขุดล่องน้ำ(รถตักหน้าขุดหลัง).jpg');
INSERT INTO `tb_machin` VALUES ('80-0069-95-2', 'รถยก', '4ต-8667', '20', '33', 2847, 2, '1', '43', '5437รถยก.jpg');
INSERT INTO `tb_machin` VALUES ('82-6076-02-9', 'รถขุดดิน', 'ตฉ 3040', '12', '34', 562, 1, '2', '44', '9682รถขุดดิน.jpg');
INSERT INTO `tb_machin` VALUES ('82-6081-08-3', 'รถขุดดิน', 'ตต 9251', '21', '35', 724, 1, '1', '45', '9682รถขุดดิน.jpg');
INSERT INTO `tb_machin` VALUES ('82-6096-10-2', 'รถขุดดิน', 'ตท 8611', '21', '36', 882, 1, '1', '1', '9682รถขุดดิน.jpg');
INSERT INTO `tb_machin` VALUES ('94-0255-94-1', 'เครื่องผสมคอนกรีต', '-', '22', '37', 1569, 3, '1', '1', 'เครื่องผสมคอนกรีต.jpg');
INSERT INTO `tb_machin` VALUES ('3311122', 'trt45345', '45trt', '19', '6', 666, 2, '1', '19', '');
INSERT INTO `tb_machin` VALUES ('12-1331-4', 'รถไถนา', 'FF 4565', '3', '5', 1020, 2, '1', '23', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_machinery_brand`
-- 

CREATE TABLE `tb_machinery_brand` (
  `brand_id` int(5) NOT NULL auto_increment,
  `brand_name` varchar(50) character set tis620 NOT NULL,
  PRIMARY KEY  (`brand_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

-- 
-- Dumping data for table `tb_machinery_brand`
-- 

INSERT INTO `tb_machinery_brand` VALUES (1, 'CHAMPION');
INSERT INTO `tb_machinery_brand` VALUES (2, 'FINI POLARIS');
INSERT INTO `tb_machinery_brand` VALUES (3, 'C.E.A.');
INSERT INTO `tb_machinery_brand` VALUES (4, 'DAICHI');
INSERT INTO `tb_machinery_brand` VALUES (5, 'CTV DOLL');
INSERT INTO `tb_machinery_brand` VALUES (6, 'TOYOTA');
INSERT INTO `tb_machinery_brand` VALUES (7, 'ISUZU');
INSERT INTO `tb_machinery_brand` VALUES (8, 'MITSUBISHI');
INSERT INTO `tb_machinery_brand` VALUES (9, 'BALCRANK');
INSERT INTO `tb_machinery_brand` VALUES (10, 'INGERSOLL RAND');
INSERT INTO `tb_machinery_brand` VALUES (11, 'SING THAI');
INSERT INTO `tb_machinery_brand` VALUES (12, 'KOMATSU');
INSERT INTO `tb_machinery_brand` VALUES (13, 'CATERPILLAR');
INSERT INTO `tb_machinery_brand` VALUES (14, 'FORD');
INSERT INTO `tb_machinery_brand` VALUES (15, 'CHEVROLET');
INSERT INTO `tb_machinery_brand` VALUES (16, 'VOLVO');
INSERT INTO `tb_machinery_brand` VALUES (17, 'CLARK');
INSERT INTO `tb_machinery_brand` VALUES (18, 'NISSAN');
INSERT INTO `tb_machinery_brand` VALUES (19, 'JCB');
INSERT INTO `tb_machinery_brand` VALUES (20, 'SHUTTLELIFT');
INSERT INTO `tb_machinery_brand` VALUES (21, 'HITACHI');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_machinery_control`
-- 

CREATE TABLE `tb_machinery_control` (
  `control_id` int(5) NOT NULL auto_increment,
  `control_name` varchar(50) character set tis620 NOT NULL,
  PRIMARY KEY  (`control_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=46 ;

-- 
-- Dumping data for table `tb_machinery_control`
-- 

INSERT INTO `tb_machinery_control` VALUES (1, 'อมร ไชยเวียน');
INSERT INTO `tb_machinery_control` VALUES (2, 'สินสมุทร ธรรมทินโน');
INSERT INTO `tb_machinery_control` VALUES (3, 'ทองอินทร์ จันทะ');
INSERT INTO `tb_machinery_control` VALUES (4, 'ถาวร พรมภูวงศ์');
INSERT INTO `tb_machinery_control` VALUES (5, 'สายใจ พลศรี');
INSERT INTO `tb_machinery_control` VALUES (6, 'สุดใจ บุตตะวงศ์');
INSERT INTO `tb_machinery_control` VALUES (7, 'สิทธิ เทพาศักดิ์');
INSERT INTO `tb_machinery_control` VALUES (8, 'อดุลย์ เทียมมาลา');
INSERT INTO `tb_machinery_control` VALUES (9, 'ทูลชัย ทำทอง');
INSERT INTO `tb_machinery_control` VALUES (10, 'ศิริ ภูไชยแสง');
INSERT INTO `tb_machinery_control` VALUES (11, 'ณรงค์ศักดิ์ วงศ์ศรีอาจ');
INSERT INTO `tb_machinery_control` VALUES (12, 'วิรัช แสนผุ');
INSERT INTO `tb_machinery_control` VALUES (13, 'อภิชาติ หาวิรส');
INSERT INTO `tb_machinery_control` VALUES (14, 'เสถียร เนื่องชัยยศ');
INSERT INTO `tb_machinery_control` VALUES (15, 'ประเวส โสจันทร์');
INSERT INTO `tb_machinery_control` VALUES (16, 'ณรงค์ รินทะลึก');
INSERT INTO `tb_machinery_control` VALUES (17, 'คำสิงห์ สุคำภา');
INSERT INTO `tb_machinery_control` VALUES (18, 'ไพรวรรณ นีรสิงห์');
INSERT INTO `tb_machinery_control` VALUES (19, 'สุภาพ จำปีหอม');
INSERT INTO `tb_machinery_control` VALUES (20, 'สุพจน์ คลังพระศรี');
INSERT INTO `tb_machinery_control` VALUES (21, 'มนัส พิเศก');
INSERT INTO `tb_machinery_control` VALUES (22, 'ไพฑูรย์ เนื่องยางศรี');
INSERT INTO `tb_machinery_control` VALUES (23, 'สมเกียรติ พรรณะ');
INSERT INTO `tb_machinery_control` VALUES (24, 'พิชัย พลลา');
INSERT INTO `tb_machinery_control` VALUES (25, 'วิสิทธ์ เทศพรม');
INSERT INTO `tb_machinery_control` VALUES (26, 'กมล พันเสนา');
INSERT INTO `tb_machinery_control` VALUES (27, 'จำรัส เนื่องวงศ์ษา');
INSERT INTO `tb_machinery_control` VALUES (28, 'วัน บุญเหล้า');
INSERT INTO `tb_machinery_control` VALUES (29, 'อวยชัย สิงขรอาจ');
INSERT INTO `tb_machinery_control` VALUES (30, 'สาคร จองศรีกระยอม');
INSERT INTO `tb_machinery_control` VALUES (31, 'วิทยา เทพาคำ');
INSERT INTO `tb_machinery_control` VALUES (32, 'สาย ศรีเมือง');
INSERT INTO `tb_machinery_control` VALUES (33, 'ทวีเกียรติ์ โหมดทอง');
INSERT INTO `tb_machinery_control` VALUES (34, 'มนูญ บำรุง');
INSERT INTO `tb_machinery_control` VALUES (35, 'เสนอ มาสิงห์');
INSERT INTO `tb_machinery_control` VALUES (36, 'สำรอง ตีชา');
INSERT INTO `tb_machinery_control` VALUES (37, 'ทองพันธ์ พลแสน');
INSERT INTO `tb_machinery_control` VALUES (38, 'วิชัย จำนงศรี');
INSERT INTO `tb_machinery_control` VALUES (39, 'เขียน พลเพ็ง');
INSERT INTO `tb_machinery_control` VALUES (40, 'สุรศักดิ์ อันปัญญา');
INSERT INTO `tb_machinery_control` VALUES (41, 'ไสว อุทัยคำ');
INSERT INTO `tb_machinery_control` VALUES (42, 'วรวิฒิ พันธ์โยศรี');
INSERT INTO `tb_machinery_control` VALUES (43, 'สุดสาคร ธรรมทินโน');
INSERT INTO `tb_machinery_control` VALUES (44, 'เสถียร ศักดาสะ');
INSERT INTO `tb_machinery_control` VALUES (45, 'จำเริญ ริ่มเย็น');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_machinery_status`
-- 

CREATE TABLE `tb_machinery_status` (
  `status_id` int(5) NOT NULL auto_increment,
  `status_name` varchar(50) character set tis620 NOT NULL,
  PRIMARY KEY  (`status_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `tb_machinery_status`
-- 

INSERT INTO `tb_machinery_status` VALUES (1, 'ว่าง');
INSERT INTO `tb_machinery_status` VALUES (2, 'ไม่ว่าง');
INSERT INTO `tb_machinery_status` VALUES (3, 'ส่งซ่อม');
INSERT INTO `tb_machinery_status` VALUES (4, 'อื่นๆ');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_machinery_type`
-- 

CREATE TABLE `tb_machinery_type` (
  `type_id` int(5) NOT NULL auto_increment,
  `type_name` varchar(50) character set tis620 NOT NULL,
  PRIMARY KEY  (`type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

-- 
-- Dumping data for table `tb_machinery_type`
-- 

INSERT INTO `tb_machinery_type` VALUES (1, 'HDR-6-8');
INSERT INTO `tb_machinery_type` VALUES (2, 'Unknown199');
INSERT INTO `tb_machinery_type` VALUES (3, 'SILARC401');
INSERT INTO `tb_machinery_type` VALUES (4, 'Unknown178');
INSERT INTO `tb_machinery_type` VALUES (5, 'C110302');
INSERT INTO `tb_machinery_type` VALUES (6, 'RZH113R-RBMNE');
INSERT INTO `tb_machinery_type` VALUES (7, 'COMMUTER');
INSERT INTO `tb_machinery_type` VALUES (8, 'TRIPPER SEL');
INSERT INTO `tb_machinery_type` VALUES (9, 'KUN51R-NKMSYT A1');
INSERT INTO `tb_machinery_type` VALUES (10, 'R85 HGM 9C MU7');
INSERT INTO `tb_machinery_type` VALUES (11, 'K14XDL');
INSERT INTO `tb_machinery_type` VALUES (12, 'FTR33F');
INSERT INTO `tb_machinery_type` VALUES (13, 'FK458HRGDH2');
INSERT INTO `tb_machinery_type` VALUES (14, 'FTR11L');
INSERT INTO `tb_machinery_type` VALUES (15, 'SD100D B SERIES');
INSERT INTO `tb_machinery_type` VALUES (16, 'RRT-9-10T');
INSERT INTO `tb_machinery_type` VALUES (17, 'GD605R');
INSERT INTO `tb_machinery_type` VALUES (18, 'MG431');
INSERT INTO `tb_machinery_type` VALUES (19, '120G');
INSERT INTO `tb_machinery_type` VALUES (20, '710A');
INSERT INTO `tb_machinery_type` VALUES (21, 'K64TENSRU1');
INSERT INTO `tb_machinery_type` VALUES (22, 'SUPER CAB XLT(4x4) OPEN CAB WL-T(สองประตู)');
INSERT INTO `tb_machinery_type` VALUES (23, 'DOUBLE CAB XL(4x2) (สี่ประตู)');
INSERT INTO `tb_machinery_type` VALUES (24, 'LN155R-TRMDST');
INSERT INTO `tb_machinery_type` VALUES (25, 'COLORADO S-CAB 2.5');
INSERT INTO `tb_machinery_type` VALUES (26, 'DOUBLE CAB 2.5 XL WLC (UR94)');
INSERT INTO `tb_machinery_type` VALUES (27, '2.5E(VIGO)');
INSERT INTO `tb_machinery_type` VALUES (28, 'FM12 6x4');
INSERT INTO `tb_machinery_type` VALUES (29, 'FXZ23NZPF');
INSERT INTO `tb_machinery_type` VALUES (30, 'Uknown123');
INSERT INTO `tb_machinery_type` VALUES (31, 'PKB214G');
INSERT INTO `tb_machinery_type` VALUES (32, '4CX');
INSERT INTO `tb_machinery_type` VALUES (33, 'Uknown688');
INSERT INTO `tb_machinery_type` VALUES (34, 'PC200-6');
INSERT INTO `tb_machinery_type` VALUES (35, 'ZX200LC-3');
INSERT INTO `tb_machinery_type` VALUES (36, 'ZX170W-3');
INSERT INTO `tb_machinery_type` VALUES (37, 'Uknown977');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_machinery_unit`
-- 

CREATE TABLE `tb_machinery_unit` (
  `unit_id` int(11) NOT NULL auto_increment,
  `unit_name` varchar(50) character set tis620 NOT NULL,
  PRIMARY KEY  (`unit_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `tb_machinery_unit`
-- 

INSERT INTO `tb_machinery_unit` VALUES (1, 'ชั่วโมง');
INSERT INTO `tb_machinery_unit` VALUES (2, 'วัน');
INSERT INTO `tb_machinery_unit` VALUES (3, 'เดือน');
INSERT INTO `tb_machinery_unit` VALUES (4, 'ปี');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_member`
-- 

CREATE TABLE `tb_member` (
  `mem_id` varchar(13) character set tis620 NOT NULL,
  `mem_name` varchar(50) character set tis620 NOT NULL,
  `sex` varchar(1) character set tis620 NOT NULL,
  `address` varchar(100) character set tis620 NOT NULL,
  `reg_card` varchar(13) character set tis620 NOT NULL,
  `date_issue` varchar(20) collate utf8_unicode_ci NOT NULL,
  `Birthday` varchar(50) character set tis620 NOT NULL,
  `mem_age` varchar(2) collate utf8_unicode_ci NOT NULL,
  `phone` varchar(10) character set tis620 NOT NULL,
  `date_regis` varchar(30) character set tis620 NOT NULL,
  PRIMARY KEY  (`mem_id`),
  UNIQUE KEY `reg_card` (`reg_card`,`phone`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tb_member`
-- 

INSERT INTO `tb_member` VALUES ('1409900420611', 'ศิริภูมิ สร้อยคำ', 'm', 'มหาสารคาม                                ', '1409900420611', '19/03/2010', '19 มีนาคาม 2531', '24', '0859286981', '0000-00-00');
INSERT INTO `tb_member` VALUES ('1350100125064', 'นิตยา ชูรัตน์', 'f', 'ยโสธร', '1350100125064', '24/02/2010', '25 กุมภาพันธ์ 2531', '24', '0853069500', '0000-00-00');
INSERT INTO `tb_member` VALUES ('1212221333344', 'นางอัจฉรา งามดี', 'f', '74 หมู่ 8 ต.ชุมแพ อ. ชุมแพ จังหวัดขอนแก่น', '1212221333344', '05/05/2012', '05/05/1972', '40', '0900009999', '27-May-2012');
INSERT INTO `tb_member` VALUES ('1309900320311', 'นายคมสัน แสนโพน', 'm', 'สระบุรี                      ', '1309900320311', '15/05/2011', '15/05/1990', '22', '0815468067', '28-May-2012');
INSERT INTO `tb_member` VALUES ('1090020312222', 'นายสมควร ดูดี', 'm', 'ขอนแก่น                      ', '1090020312222', '31/05/2012', '02/05/2012', '28', '0903334455', '30-May-2012');
INSERT INTO `tb_member` VALUES ('1309900456777', 'นางสาวพรชิตา ใจดี', 'f', 'ชุมแพ                      ', '1309900456777', '06/05/2008', '06/05/1987', '25', '0900340045', '28-May-2012');
INSERT INTO `tb_member` VALUES ('1340100204111', 'นางสาวตรีชฏา เพชรรัตน์', 'f', 'บ้านขามเรียง                      ', '1340100204111', '01/01/2006', '01/01/1988', '24', '0800067677', '29-May-2012');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_position`
-- 

CREATE TABLE `tb_position` (
  `pos_id` int(5) NOT NULL auto_increment,
  `name` varchar(50) character set tis620 NOT NULL,
  PRIMARY KEY  (`pos_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `tb_position`
-- 

INSERT INTO `tb_position` VALUES (1, 'นายช่าง');
INSERT INTO `tb_position` VALUES (2, 'วิศวกรณ์ชำนาญการ');
INSERT INTO `tb_position` VALUES (3, 'ผู้ดูแลระบบ');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_reserv`
-- 

CREATE TABLE `tb_reserv` (
  `res_id` int(10) NOT NULL auto_increment,
  `mem_id` varchar(15) character set tis620 NOT NULL,
  `emp_id` varchar(15) character set tis620 NOT NULL,
  `res_date` datetime NOT NULL,
  `rec_date` datetime NOT NULL,
  PRIMARY KEY  (`res_id`),
  KEY `mem_id` (`mem_id`,`emp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

-- 
-- Dumping data for table `tb_reserv`
-- 

INSERT INTO `tb_reserv` VALUES (8, '1212221333344', 'emp01', '2012-05-27 00:00:00', '2012-05-30 00:00:00');
INSERT INTO `tb_reserv` VALUES (6, '1409900420611', 'emp01', '2012-05-28 00:00:00', '2012-05-30 00:00:00');
INSERT INTO `tb_reserv` VALUES (7, '1350100125064', 'emp01', '2012-05-28 00:00:00', '2012-05-31 00:00:00');
INSERT INTO `tb_reserv` VALUES (9, '1309900320311', 'emp01', '2012-06-01 00:00:00', '2012-06-03 00:00:00');
INSERT INTO `tb_reserv` VALUES (10, '1409900420611', 'emp01', '2012-05-29 00:00:00', '2012-05-31 00:00:00');
INSERT INTO `tb_reserv` VALUES (11, '1409900420611', 'emp01', '2012-05-29 00:00:00', '2012-05-31 00:00:00');
INSERT INTO `tb_reserv` VALUES (12, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tb_reserv` VALUES (13, '1409900420611', 'emp01', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tb_reserv` VALUES (14, '1350100125064', 'emp01', '2012-05-30 00:00:00', '2012-05-31 00:00:00');
INSERT INTO `tb_reserv` VALUES (15, '1309900456777', 'emp01', '2012-05-30 00:00:00', '2012-05-31 00:00:00');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_reserv_detail`
-- 

CREATE TABLE `tb_reserv_detail` (
  `res_id` int(10) NOT NULL,
  `mac_id` varchar(12) NOT NULL,
  PRIMARY KEY  (`res_id`,`mac_id`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- 
-- Dumping data for table `tb_reserv_detail`
-- 

INSERT INTO `tb_reserv_detail` VALUES (6, '82-6081-08-3');
INSERT INTO `tb_reserv_detail` VALUES (7, '82-6081-08-3');
INSERT INTO `tb_reserv_detail` VALUES (8, '64-6025-02-2');
INSERT INTO `tb_reserv_detail` VALUES (9, '31-6286-97-3');
INSERT INTO `tb_reserv_detail` VALUES (10, '31-6286-97-3');
INSERT INTO `tb_reserv_detail` VALUES (10, '41-0588-80-1');
INSERT INTO `tb_reserv_detail` VALUES (10, '82-6076-02-9');
INSERT INTO `tb_reserv_detail` VALUES (11, '31-6286-97-3');
INSERT INTO `tb_reserv_detail` VALUES (13, '31-6286-97-3');
INSERT INTO `tb_reserv_detail` VALUES (14, '31-6286-97-3');
INSERT INTO `tb_reserv_detail` VALUES (15, '12-1331-4');
