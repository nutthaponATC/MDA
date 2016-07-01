-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `mda`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `data_mda`
-- 

CREATE TABLE `data_mda` (
  `id` int(11) NOT NULL auto_increment,
  `id_mda` varchar(25) collate utf8_unicode_ci NOT NULL,
  `id_type` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `detail` varchar(1000) collate utf8_unicode_ci default NULL,
  `brand` varchar(1000) collate utf8_unicode_ci default NULL,
  `amount` int(11) default NULL,
  `price` decimal(10,2) default NULL,
  `total_price` decimal(10,2) default NULL,
  `applications` varchar(500) collate utf8_unicode_ci default NULL,
  `note` varchar(1000) collate utf8_unicode_ci default NULL,
  `date_in` text collate utf8_unicode_ci,
  `company` varchar(500) collate utf8_unicode_ci default NULL,
  `address` varchar(500) collate utf8_unicode_ci default NULL,
  `tel` varchar(20) collate utf8_unicode_ci default NULL,
  `fax` varchar(20) collate utf8_unicode_ci default NULL,
  `web` varchar(500) collate utf8_unicode_ci default NULL,
  `picture` varchar(500) collate utf8_unicode_ci default NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=139 ;

-- 
-- dump ตาราง `data_mda`
-- 

INSERT INTO `data_mda` VALUES (1, 'ATS-56-02-001-01/02', 2, 2556, 'ตู้คอนเทนเนอร์', '-', 2, 70000.00, 140000.00, 'รั้วหน้าโรงเรียน', '-', '15 Nov 56', '-', '-', '-', '-', '-', '', 0);
INSERT INTO `data_mda` VALUES (2, 'ATS-56-02-002-01/01', 2, 2556, 'งานปรับปรุงอาคาร ATS', '-', 1, 3737857.50, 3737857.50, 'สนามเด็กเล่นอนุบาล', '-', '30 Apr 57', 'หจก. ธนกฤต ดีไซน์', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (3, 'ATS-56-02-003-01/01', 2, 2556, 'งานจัดทำโครงหลังคาสนามกีฬา', '-', 1, 1286149.17, 1286149.17, '-', 'เอกสารรวมอยู่ในปี 57', '30 Apr 57', 'บจก. เอ็ม เอส ที', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (4, 'ATS-57-02-001-01/01', 2, 2557, 'งานจัดทำเกล็ดสนามเด็กเล่นอนุบาล', '-', 1, 40500.00, 40500.00, 'สนามเด็กเล่นอนุบาล', '-', '7 May 57', 'นายสมชัย สืบดี', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (5, 'ATS-57-02-002-01/01', 2, 2557, 'งานจัดทำป้ายหินอ่อน (แดงอินเดียน่า)', '-', 1, 49604.00, 49604.00, 'รั้วหน้าโรงเรียน', 'เอกสารไม่ครบ', '11 May 57', 'นายธวัชชัย ท้าวครุฑ', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (6, 'ATS-57-02-003-01/01', 2, 2557, 'งานจัดทำรั้วสแตนเลส ราวบันไดสแตนเลส ส่วนอนุบาล', '-', 1, 52640.00, 52640.00, 'ห้องเรียนอนุบาล', 'ขาดเอกสาร', '12 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (7, 'ATS-57-02-004-01/01', 2, 2557, 'งานปูหญ้าเทียม', '-', 1, 55250.00, 55250.00, 'สนามเด็กเล่นอนุบาล', '-', '16 May 57', 'เอ ที โอ สปอร์ต', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (8, 'ATS-57-02-005-01/01', 2, 2557, 'งานปรับปรุงอาคารสามัญชั้นล่าง และเทพื้น Topping อาคาร (ยอดเต็ม 3,500,000 บาท)', '-', 1, 875000.00, 875000.00, '-', 'เอกสารอยู่กับ ปี 56', '20 May 57', 'หจก.ธนกฤต ดีไซน์', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (9, 'ATS-57-02-006-01/01', 2, 2557, 'งานปรับปรุงห้องเรียนอนุบาล', '-', 1, 680000.00, 680000.00, '-', '-', '21 May 57', 'หจก.ธนกฤต ดีไซน์', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (10, 'ATS-57-02-007-01/01', 2, 2557, 'งานจัดทำโลโก้โรงเรียน  และชื่อโรงเรียนสแตนเลส', '-', 1, 57000.00, 57000.00, 'บริเวณด้านหน้าตึกโรงเรียน', 'เอกสารไม่ครบ', '28 May 57', 'นายธวัชชัย ท้าวครุฑ', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (11, 'ATS-57-02-008-01/01', 2, 2557, 'งานทาสีอาคารภายนอกและภายใน (ค่าแรง รวมค่าสี)', '-', 1, 100000.00, 100000.00, '-', 'ขาดเอกสาร', '30 May 57', 'นายจรัส ศรีสวรรค์/', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (12, 'ATS-57-02-009-01/01', 2, 2557, 'งานถมหินลูกรัง', '-', 1, 650000.00, 650000.00, '-', 'เอกสารไม่ครบ', '9 Jun 57', 'คุณไอลดา ทองเป้อ', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (13, 'ATS-57-02-010-01/01', 2, 2557, 'สีทาอาคาร', '-', 1, 117380.00, 117380.00, '-', '-', '9 Jun 57', 'คุณธัญญพัทธ์ รุจิระจารุโรจน์', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (14, 'ATS-57-02-011-01/01', 2, 2557, 'งานออกแบบอาคารเรียน (ยอดสุทธิ 150,000 บาท)', '-', 1, 45000.00, 45000.00, '-', '-', '12 Jun 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (15, 'ATS-57-02-012-01/01', 2, 2557, 'งานจัดทำรั้วสแตนเลส บริเวณสระว่ายน้ำ', '-', 1, 12320.00, 12320.00, 'ส่วนสระว่ายน้ำ', 'ขาดเอกสาร', '2 Jul 57', 'คุณกิตติราช ราชกร', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (16, 'ATS-57-02-013-01/01', 2, 2557, 'งานติดตั้งกระจกกลม', '-', 1, 18000.00, 18000.00, 'ข้างห้องผู้จัดการ', '-', '2 Jul 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (17, 'ATS-57-02-014-01/01', 2, 2557, 'งานจัดทำรางน้ำฝนและเหล็กครอบกันน้ำฝน', '-', 1, 11000.00, 11000.00, '-', '-', '8 Jul 57', 'คุณชัยณรงค์ เงินทวีคูณ', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (18, 'ATS-57-02-015-01/01', 2, 2557, 'งานจัดทำหลังคาคลุมสนามกีฬา (เอ็ม เอส ที เอ็นจิเนียริ่ง)', '-', 1, 1983211.70, 1983211.70, '-', '-', '16 Aug 57', 'บจก. เอ็ม เอส ที', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (19, 'ATS-57-02-016-01/01', 2, 2557, 'งานปรับปรุงหลังคาเมทัลชีทเก่า (สระว่ายน้ำ) มาส่วนรับประทานอาหารและปรับปรุงพื้นตัวหนอน', '-', 1, 133430.00, 133430.00, '-', '-', '6 Nov 57', 'หจก.ธนกฤต ดีไซน์', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (20, 'ATS-57-02-017-01/01', 2, 2557, 'งานปรับปรุงสนามกีฬา (ยอดเต็ม 3,700,000 บาท)  (ธนกฤต ดีไซน์)', '-', 1, 3145000.00, 3145000.00, '-', 'ขาดเอกสาร จ่ายงวดที่ 2 / 3', '17 Nov 57', 'หจก.ธนกฤต ดีไซน์', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (21, 'ATS-57-02-018-01/01', 2, 2557, 'งานปูหญ้าเทียม', '-', 1, 31500.00, 31500.00, 'สนามเด็กเล่น (ส่วนสนามกีฬา)', '-', '2 Mar 58', 'บจก. เอ ที โอ สปอร์ต', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (22, 'ATS-57-02-019-01/01', 2, 2557, 'งานจัดทำรั้วสแตนเลส ประตูสแตนเลส', '-', 1, 70000.00, 70000.00, 'บริเวณห้องเรียนอนุบาล', '-', '10 Apr 58', 'คุณกิตติราช ราชกร', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (24, 'ATS-56-04-002-01/02', 4, 2556, 'เครื่องปรับอากาศ', 'ยี่ห้อ Walltype AE185A / RE185A 18399 BTU ROTARY 220V เบอร์ 5 รีโมทไร้สาย', 2, 18430.00, 36860.00, 'ห้อง ผจก. และ ผอ.', '-', '14 Mar 57', 'นายกิตติ อภัยจิตต์', '-', '080 071 9145', '-', 'Email : kservice99@gmail.com', 'Jellyfish.jpg', 0);
INSERT INTO `data_mda` VALUES (25, 'ATS-56-04-003-01/52', 4, 2556, 'เครื่องปรับอากาศ ชนิดแขวน', 'ยี่ห้อ Staraire เบอร์ 5 รุ่นตั้งพื้น/แขวนใต้ฝ้า', 52, 35998.56, 1871925.00, 'ห้องเรียน', 'เอกสารไม่ครบ', '2 Apr 57', 'นายกิตติ อภัยจิตต์', '-', '080 071 9145', '-', 'Email : kservice99@gmail.com', '', 1);
INSERT INTO `data_mda` VALUES (138, 'ats-58-02-001-01/02', 11, 2559, 'ประเภท', '-', 2, 3.00, 6.00, '-', '-', '2016-04-09', 'บริษัท', '10/90', '0806074810', '02124334', 'www', '', 1);
INSERT INTO `data_mda` VALUES (27, 'ATS-56-04-004-01/01', 4, 2556, 'งานติดตั้งระบบไฟฟ้า และสถาปัตย์', '-', 1, 160000.00, 160000.00, '-', '-', '25 Apr 57', 'หจก.ธนกฤต ดีไซน์', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (28, 'ATS-57-04-001-01/12', 4, 2557, 'เครื่องปรับอากาศ (รวมค่าติดตั้ง)', 'ยี่ห้อ Star aire  ขนาด 25000 BTU.', 12, 31000.00, 372000.00, 'ห้องเรียนอนุบาล / ห้องประชุม', '-', '28 May 58', 'บี พี แอร์', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (29, 'ATS-56-05-001-01/01', 5, 2556, 'เครื่องปริ้นเตอร์', 'ยี่ห้อ Epson', 1, 5300.00, 5300.00, 'ห้องคอมพิวเตอร์ระดับมัธยม', 'ปี 57 ย้ายมาธุรการ จัดซื้อตอนครูปราณี ออยมาทำไม่มีเอกสาร', '12 Sep 56', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (30, 'ATS-57-05-001-01/05', 5, 2557, 'โทรทัศน์ 40 นิ้ว', 'ยี่ห้อ Samsung รุ่น 40 EI-15000', 5, 10700.00, 53500.00, 'ห้องวิทย์ 1 ห้องอนุบาล 4 เครื่อง', '-', '15 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (31, 'ATS-57-05-002-01/04', 5, 2557, 'เครื่องเสียงห้องเรียน', '-', 4, 7935.25, 31741.00, 'ห้องเรียนอนุบาล อ.1/1 / อ.1/2 / อ.2 / อ.3', '-', '15 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (32, 'ATS-57-05-003-01/01', 5, 2557, 'ชุดลำโพง (งานภาคสนาม)', '-', 1, 5800.00, 5800.00, 'ใช้งานภาคสนาม นร.อนุบาล', '-', '22 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (33, 'ATS-57-05-004-01/05', 5, 2557, 'กล้องจุลทรรศน์ตาเดียว', '-', 5, 6200.00, 31000.00, 'ห้องปฏิบัติการวิทยาศาสตร์', 'ขาดเอกสาร', '6 Jun 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (34, 'ATS-57-05-005-01/02', 5, 2557, 'เครื่องเสียงห้องเรียน (ลำโพง แอมป์ สายไฟ ขาแขวนโทรทัศน์)', '-', 2, 9905.00, 19810.00, 'ป.1 IEP / ม.1 IEP / ห้องสมุด / นาฏศิลป์', '-', '24 Jul 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (35, 'ATS-57-05-006-01/04', 5, 2557, 'โทรทัศน์ 40 นิ้ว', 'ยี่ห้อ Samsung รุ่น 40 EI-15000', 4, 10400.00, 41600.00, 'ป.1 IEP / ม.1 IEP / ห้องสมุด / นาฏศิลป์', '-', '31 Jul 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (36, 'ATS-56-06-001-01/', 6, 2556, 'โต๊ะ เก้าอี้ (ห้องเรียน)', '-', 1, 157906.01, 157906.01, 'ห้องเรียน', 'จัดซื้อตอนครูปราณีทำ ตอนออยมาไม่มีเอกสาร', '31 May 56', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (37, 'ATS-56-06-002-01/03', 6, 2556, 'ลำโพง 8 นิ้ว 50 W', '-', 3, 4936.67, 14810.00, 'ห้องเรียนอนุบาล', '-', '15 Mar 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (38, 'ATS-57-06-001-01/06', 6, 2557, 'โต๊ะพับเอนกประสงค์', 'ยี่ห้อ โฟเมก้า ขนาด 180*75', 6, 2290.00, 13740.00, 'ห้องปฏิบัติการวิทยาศาสตร์', '-', '16 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (39, 'ATS-57-06-002-01/50', 6, 2557, 'เก้าอี้พลาสติก 5 ขา', 'ยี่ห้อ Furniture รุ่น CH-61 สีขาว', 50, 111.00, 5550.00, 'ห้องปฏิบัติการวิทยาศาสตร์', '-', '16 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (40, 'ATS-57-06-003-01/03', 6, 2557, 'โต๊ะไม้ (สำหรับนั่งอ่านหนังสือ)', 'ไม้ยางพารา สีม่วง-ขาว', 3, 2000.00, 6000.00, 'ห้องสมุด', '-', '24 Sep 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (41, 'ATS-57-06-004-01/12', 6, 2557, 'เก้าอี้ไม้  (สำหรับนั่งอ่านหนังสือ)', 'ไม้ยางพารา สีม่วง-ขาว', 12, 400.00, 4800.00, 'ห้องสมุด', '-', '24 Sep 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (42, 'บันทึกทะเบียนในปี 57', 0, 0, 'ครุภัณฑ์สำนักงาน (เพอร์เฟ็ค)', '-', 1, 332264.53, 332264.53, 'ห้องอำนวยการ,ห้องประชุม,ห้องผู้บริหาร', 'ตกลงซื้อ จ่ายค่ามัดจำ 40%', '21 Feb 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (43, 'ATS-57-07-001-01/01', 7, 2557, 'ชุดเครื่องเล่นเด็กอนุบาล (ชุดใหญ่)', '-', 1, 505000.00, 505000.00, 'สนามเด็กเล่น หน้าห้องเรียนอนุบาล', 'ขาดเอกสาร', '20 May 58', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (44, 'ATS-57-07-002-01/07', 7, 2557, 'เก้าอี้ทำงาน บุหนังเทียม รหัส TD/H', 'PVN412+ไฮโดรลิค', 7, 8350.00, 58450.00, '-', 'ตรวจสอบอีกครั้ง จากของที่มีอยู่จริง', '27 May 57', 'บจก. เพอร์เฟ็ค', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (45, 'ATS-57-07-003-01/21', 7, 2557, 'เก้าอี้ทำงาน บุหนังเทียม รหัส TD/L', 'PVN412+ไฮโดรลิค', 21, 5300.00, 111300.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (46, 'ATS-57-07-004-01/07', 7, 2557, 'เก้าอี้ทำงาน บุหนังเทียม รหัส TD/M', 'PVN412+ไฮโดรลิค', 7, 6350.00, 44450.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (47, 'ATS-57-07-005-01/02', 7, 2557, 'เก้าอี้ทำงาน รหัส LG12/H', 'บุหนัง PU สีดำ MF-001+ไฮโดรลิค แขน V29', 2, 3000.00, 6000.00, 'ห้องผู้บริหาร ', '-', '27 May 57', '-', '-', '-', '-', '-', 'Koala.jpg', 1);
INSERT INTO `data_mda` VALUES (48, 'ATS-57-07-006-01/04', 7, 2557, 'เก้าอี้ทำงาน รหัส LG12/M', 'บุหนัง PU สีดำ MF-001+ไฮโดรลิค แขน V29', 4, 16600.00, 66400.00, 'ห้องผู้บริหาร ', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (49, 'ATS-57-07-007-01/31', 7, 2557, 'ขายึดพาร์ติชั่น รหัส T-FOOT', 'สีเทา ซีรี่ส์ 4 Meeting Room', 31, 400.00, 12400.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (50, 'ATS-57-07-008-01/04', 7, 2557, 'โซฟา 1 ที่นั่ง P19/1', 'บุหนังเทียม PVN412', 4, 5800.00, 23200.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (51, 'ATS-57-07-009-01/04', 7, 2557, 'โซฟา 3 ที่นั่ง P19/3', 'บุหนังเทียม PVN412', 4, 11000.00, 44000.00, 'ห้องผู้บริหาร ', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (52, 'ATS-57-07-010-01/02', 7, 2557, 'ตู้ไซด์บอร์ดเตี้ย รหัส ES13-1', 'ขนาด 230*50*75 สี V29/ข้างดำด้าน', 2, 59000.00, 118000.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (53, 'ATS-57-07-011-01/10', 7, 2557, 'ตู้ลิ้นชัก มีล้อ', 'ขนาด 41.6*50*65 ท็อป+หน้าบาน G43/ข้างสี G41', 10, 5550.00, 55500.00, 'ห้องอำนวยการ', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (54, 'ATS-57-07-012-01/10', 7, 2557, 'ตู้เอกสารเตี้ย รหัส 840-OP', 'ขนาด 80*40*83  ท็อป+หน้าบานG43/ข้างG41', 10, 5250.00, 52500.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (55, 'ATS-57-07-013-01/07', 7, 2557, 'ตู้เอกสารบานเปิด', 'ขนาด 80*40*200 ท็อป+หน้าบาน G43/Body G41', 7, 12500.00, 87500.00, 'ห้องอำนวยการ', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (56, 'ATS-57-07-014-01/08', 7, 2557, 'ตู้เอกสารบานเปิด รหัส 15-GOP', 'ขนาด 80*40*157 ท็อป+หน้าบานG43/ข้างG41', 8, 11000.00, 88000.00, 'ห้องผู้บริหาร ระดับกลาง', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (57, 'ATS-57-07-015-01/06', 7, 2557, 'โต๊ะกลางท็อปกระจก รหัส T-10', 'ขนาด 60*60*42 ขอบดำ V5/ขาชุป', 6, 5000.00, 30000.00, 'ห้องผู้บริหาร ', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (58, 'ATS-57-07-016-01/02', 7, 2557, 'โต๊ะกลางท็อปกระจก รหัส T-11', 'ขนาด 90*60*42 ขอบดำ V5/ขาชุป', 2, 6750.00, 13500.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (59, 'ATS-57-07-017-01/01', 7, 2557, 'โต๊ะคอมฯ ขาเหล็ก รหัส PLS 80', 'ขนาด 80*60*75 สี G43/G18+KB-02', 1, 6800.00, 6800.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (60, 'ATS-57-07-018-01/01', 7, 2557, 'โต๊ะต่อข้าง รหัส ES13CRL', 'ขนาด 120*55*75 สี V29/ข้างดำด้าน', 1, 27500.00, 27500.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (61, 'ATS-57-07-019-01/01', 7, 2557, 'โต๊ะต่อข้าง รหัส ES13CRR', 'ขนาด 120*55*75 สี V29/ข้างดำด้าน', 1, 27500.00, 27500.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (62, 'ATS-57-07-020-01/04', 7, 2557, 'โต๊ะต่อข้างขวา รหัส PLS1-04', 'ขนาด 100*48*75 สี G43/G18', 4, 5800.00, 23200.00, 'ห้องผู้บริหาร ระดับกลาง', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (63, 'ATS-57-07-021-01/06', 7, 2557, 'โต๊ะต่อข้างซ้าย รหัส PLS1-40', 'ขนาด 100*48*75 สี G43/G18', 6, 5800.00, 34800.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (64, 'ATS-57-07-022-01/01', 7, 2557, 'โต๊ะทำงาน รหัส ES-13/L', 'ขนาด 200*100*75 สี V29/ข้างดำด้าน', 1, 78000.00, 78000.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (65, 'ATS-57-07-023-01/01', 7, 2557, 'โต๊ะทำงาน รหัส ES-13/R', 'ขนาด 200*100*75 สี V29/ข้างดำด้าน', 1, 78000.00, 78000.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (66, 'ATS-57-07-024-01/10', 7, 2557, 'โต๊ะทำงาน รหัส PLS2000-60/D', 'ขนาด 200*60*75 สี G43/ขาดำ G18', 10, 14400.00, 144000.00, 'ห้องผู้บริหาร ระดับกลาง', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (67, 'ATS-57-07-025-01/01', 7, 2557, 'โต๊ะประชุม รหัส PTS 180', 'ขนาด 180*90*75 สี G43/G18', 1, 13000.00, 13000.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (68, 'ATS-57-07-026-01/09', 7, 2557, 'พาร์ติชั่น ทึบ', 'ขนาด 100*180 บุผ้า CAT14+กล่องไฟล่าง', 9, 7950.00, 71550.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (69, 'ATS-57-07-027-01/06', 7, 2557, 'พาร์ติชั่นครึ่ง กระจกลาย 4PLF1210/U', 'ขนาด 100*120 บุผ้า CAT14+กล่องไฟล่าง (กระจกลาย)', 6, 7400.00, 44400.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (70, 'ATS-57-07-028-01/04', 7, 2557, 'พาร์ติชั่นครึ่งทึบ กระจกลาย', 'ขนาด 100*180 บุผ้า CAT14+กล่องไฟล่าง(กระจกลายเก่า)', 4, 9350.00, 37400.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (71, 'ATS-57-07-029-01/18', 7, 2557, 'พาร์ติชั่นทึบ 4PF1210/U', 'ขนาด 100*120 บุผ้า CAT14+กล่องไฟล่าง', 18, 6200.00, 111600.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (72, 'ATS-57-07-030-01/10', 7, 2557, 'รางร้อยสายไฟ  รหัส PPS-75', 'ขนาด 78*8*12.5 สีดำ', 10, 750.00, 7500.00, 'ห้องผู้บริหาร ระดับกลาง', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (73, 'ATS-57-07-031-01/02', 7, 2557, 'เสา 2 ทาง  รหัส POST', 'สูง 180 ซีรี่ส์ 4', 2, 2250.00, 4500.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (74, 'ATS-57-07-032-01/01', 7, 2557, 'เสา 2 ทาง  รหัส POST', 'สูง 120 ซีรี่ส์ 4', 1, 1500.00, 1500.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (75, 'ATS-57-07-033-01/01', 7, 2557, 'เสา 3 ทาง  รหัส POST', 'สูง 180 ซีรี่ส์ 4', 1, 1850.00, 1850.00, '-', '-', '27 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (76, 'ATS-57-07-034-01/02', 7, 2557, 'ชุดโต๊ะ เก้าอี้ (นั่งอ่านหนังสือ)', 'รุ่น TC-148', 2, 8132.00, 16264.00, 'ห้องสมุด', '-', '10 Sep 57', 'โลหะประทีป', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (77, 'ATS-57-07-035-01/01', 7, 2557, 'ชั้นหนังสือเตี้ยแบบ 1 ด้าน 2 ช่วง', 'รุ่น BS-S-12', 1, 6291.60, 6291.60, 'ห้องสมุด', '-', '10 Sep 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (78, 'ATS-57-07-036-01/03', 7, 2557, 'ชั้นหนังสือสูงแบบ 2 ด้าน 2 ช่วง', 'รุ่น MB-S-22', 3, 13674.60, 41023.80, 'ห้องสมุด', '-', '10 Sep 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (79, 'ATS-57-07-037-01/01', 7, 2557, 'บันไดแบบ 3 ขั้น', 'รุ่น KS-3', 1, 2824.80, 2824.80, 'ห้องสมุด', '-', '10 Sep 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (80, 'ATS-57-07-038-01/20', 7, 2557, 'เก้าอี้ไม้ม้านั่งยาว พนักพิงสแตนเลส', '-', 20, 6500.00, 130000.00, 'ให้ผู้ปกครองนั่งรอรับนักเรียน', '-', '2 Jul 57', 'กิตติราช ราชกร', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (81, 'ATS-57-07-039-01/01', 7, 2557, 'ตู้คอนเทนเนอร์', 'ขนาด 9*3  มีแอร์ สีขาว', 1, 166000.00, 166000.00, 'บริเวณด้านข้างสนามกีฬาอเนกประสงค์', '-', '29 Sep 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (82, 'ATS-56-09-001-01/11', 9, 2556, 'คอมพิวเตอร์ พีซี (แบบประกอบ) จัดซื้อ 11 ชุด', 'CPU INTEL I3 4130 / MAINBOARD GIGABYTE B85M / RAM DDR3 ADATA 4G/1600 / HDD WE 500GB SATA3 / DVDRW SAMSUNG 24X SATA BLACK / MONITOR LED BENQ 17''SQUARE / CASSE 550 W / KEYBOARD / MOUSE MICROSOFT USB.', 1, 14500.00, 14500.00, 'ห้องอำนวยการ', 'ทำบาร์โค้ดแล้ว', '26 Nov 56', 'M&D COMPUTER CO.,LTD.', 'PANTIP PLAZA ROOM 328-329 FLOOR3 PETBUREE RD. BANGKOK', '083-0511-509', '02-256-0830', 'WWW.MDCOMPUTER.CO.TH', '', 1);
INSERT INTO `data_mda` VALUES (83, 'ATS-56-09-002-01/01', 9, 2556, 'เครื่องบันทึกเสียง', 'ยี่ห้อ โซนี่', 1, 2900.00, 2900.00, 'งานธุรการ', '-', '26 Nov 56', 'โจว แอ็คเซสโซรี่', 'อาคารหลักสี่พลาซ่า ห้องเลขที่ B-31 ชั้น 2', '02 576 0392 / 086 70', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (84, 'ATS-56-09-003-01/01', 9, 2556, 'สว่านไร้สาย', 'DEWALT DCD710 SA-KR 10.8 V', 1, 5422.30, 5422.30, 'งานอาคารสถานที่ฯ', '-', '11 Dec 56', 'Home Pro', 'สุวรรณภูมิ', '01 831 6000', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (85, 'ATS-56-09-004-01/01', 9, 2556, 'กล่องเครื่องมือเหล็ก', 'MATALL รุ่น 3 Step', 1, 775.30, 775.30, 'งานอาคารสถานที่ฯ', '-', '11 Dec 56', 'Home Pro', 'สุวรรณภูมิ', '01 831 6000', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (86, 'ATS-56-09-005-01/01', 9, 2556, 'ไขควง ชุด 6 ตัว', 'STANLEY 92-002', 1, 716.83, 716.83, 'งานอาคารสถานที่ฯ', '-', '11 Dec 56', 'Home Pro', 'สุวรรณภูมิ', '01 831 6000', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (87, 'ATS-56-09-006-01/01', 9, 2556, 'ประแจแหวนข้าง ปากตายทรงญี่ปุ่น', '22MM SOLO', 1, 150.35, 150.35, 'งานอาคารสถานที่ฯ', '-', '11 Dec 56', 'Home Pro', 'สุวรรณภูมิ', '01 831 6000', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (88, 'ATS-56-09-007-01/01', 9, 2556, 'ประแจแหวนข้าง ปากตายทรงญี่ปุ่น', '19MM SOLO', 1, 115.43, 115.43, 'งานอาคารสถานที่ฯ', '-', '11 Dec 56', 'Home Pro', 'สุวรรณภูมิ', '01 831 6000', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (89, 'ATS-56-09-008-01/01', 9, 2556, 'ไขควง หัวแบน', 'WEE GRIP 6''', 1, 62.08, 62.08, 'งานอาคารสถานที่ฯ', '-', '11 Dec 56', 'Home Pro', 'สุวรรณภูมิ', '01 831 6000', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (90, 'ATS-56-09-009-01/01', 9, 2556, 'ไขควง หัวแบน', 'WEE GRIP 10''', 1, 72.75, 72.75, 'งานอาคารสถานที่ฯ', '-', '11 Dec 56', 'Home Pro', 'สุวรรณภูมิ', '01 831 6000', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (91, 'ATS-56-09-010-01/01', 9, 2556, 'ไขควง หัวแฉก', 'WEE GRIP 6''', 1, 61.11, 61.11, 'งานอาคารสถานที่ฯ', '-', '11 Dec 56', 'Home Pro', 'สุวรรณภูมิ', '01 831 6000', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (92, 'ATS-56-09-011-01/01', 9, 2556, 'ไขควง หัวแฉก', 'WEE GRIP 4''', 1, 43.65, 43.65, 'งานอาคารสถานที่ฯ', '-', '11 Dec 56', 'Home Pro', 'สุวรรณภูมิ', '01 831 6000', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (93, 'ATS-56-09-012-01/01', 9, 2556, 'ประแจแหวนข้าง ปากตาย 6 ตัวต่อชุด', 'SOLO NO.806', 1, 436.50, 436.50, 'งานอาคารสถานที่ฯ', '-', '11 Dec 56', 'Home Pro', 'สุวรรณภูมิ', '01 831 6000', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (94, 'ATS-56-09-013-01/01', 9, 2556, 'ประแจแหวน', 'MATALL DT0465', 1, 319.13, 319.13, 'งานอาคารสถานที่ฯ', '-', '11 Dec 56', 'Home Pro', 'สุวรรณภูมิ', '01 831 6000', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (95, 'ATS-56-09-014-01/01', 9, 2556, 'คอมพิวเตอร์ Note book', 'ยี่ห้อ DELL Inspiron  รุ่น 3537- W 560703 TH-BLACK', 1, 17990.00, 17990.00, 'งานเลขาฯ', '-', '15 Jan 57', 'บจก. คอมเซเว่น อินเตอร์เนชั่นแนล', '2545 ถ.เพชรบุรี แขวง/เขตสวนหลวง กรุงเทพฯ 10250', '02 762 7474', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (96, 'ATS-56-09-016-01/01', 9, 2556, 'เครื่องปริ้นเตอร์', 'ยี่ห้อ Epson Tank L210 (Psc ) New', 1, 4790.00, 4790.00, 'งานธุรการ', '-', '15 Jan 57', 'บจก. คอมเซเว่น อินเตอร์เนชั่นแนล', '2545 ถ.เพชรบุรี แขวง/เขตสวนหลวง กรุงเทพฯ 10250', '02 762 7474', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (97, 'ATS-56-09-017-01/01', 9, 2556, 'HUB 24 PORT', 'ยี่ห้อ TP LINK (SG 1024) GIGA BIT HUB 24 PORT', 1, 3820.00, 3820.00, 'งานธุรการ', '-', '15 Jan 57', 'บจก. แอดไวซ์ โฮล ดิ้งส์', 'สาขา 00085 โครงการไอที พลาซ่า สำโรง ห้องเลขที่ M054-M057 R013 ชั้น 4', '02 547 0000', '02 547 0088', '-', '', 1);
INSERT INTO `data_mda` VALUES (98, 'ATS-56-09-018-01/01', 9, 2556, 'ระบบบริหารสถานศึกษา SISA 2', 'รุ่น SISA2', 1, 275000.00, 275000.00, 'สำนักอำนวยการ', '-', '27 Mar 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (99, 'ATS-56-09-019-01/04', 9, 2556, 'เครื่องสำรองไฟฟ้า', '-', 4, 1765.50, 7062.00, 'การเงิน/บุคคล/ทะเบียน/ผู้อำนวยการ', '-', '28 Mar 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (100, 'ATS-56-09-020-01/01', 9, 2556, 'เครื่องคีย์ระบบโทรศัพท์ PANASONIC', 'ยี่ห้อ PANASONIC', 1, 2600.00, 2600.00, 'สำนักอำนวยการ', '-', '3 Apr 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (101, 'ATS-56-09-021-01/01', 9, 2556, 'ติดตั้งเดินระบบสายแลน สายอินเตอร์เน็ต', '-', 1, 105000.00, 105000.00, '-', '-', '11 Apr 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (102, 'ATS-56-09-022-01/01', 9, 2556, 'เครื่องพิมพ์ดอตเมทริค', 'ยี่ห้อ EPSON', 1, 6800.00, 6800.00, 'สำนักอำนวยการ (งานการเงิน)', '-', '11 Apr 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (103, 'ATS-56-09-023-01/10', 9, 2556, 'วิทยุสื่อสาร (พร้อมอุปกรณ์เสริม)', 'ยี่ห้อ Icom (จีน)รุ่น IC-V82 สีดา', 10, 1926.00, 19260.00, 'งานบริการ (รายชื่อผู้ใช้แต่ละเครื่องในเอกสาร)', '-', '2 Dec 56', 'ร้าน เมย์ คอม', 'อุดมสุข ซอย 10 แขวง/เขตบางนา กรุงเทพฯ 10260', '01 747 4775', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (104, 'ATS-57-09-001-01/01', 9, 2557, 'เครื่องเซิร์ฟเวอร์ (ใช้ร่วมกับระบบ SISA2)', '-', 1, 86777.00, 86777.00, 'ห้องอำนวยการ', '-', '18 Jun 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (105, 'ATS-57-09-002-01/01', 9, 2557, 'เครื่องเซิร์ฟเวอร์พร้อมติดตั้ง (VMWARE,DHCP,DNP)', '-', 1, 210959.06, 210959.06, 'ห้องอำนวยการ', '-', '21 Mar 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (106, 'ATS-57-09-003-01/04', 9, 2557, 'พัดลมสนามเด็กเล่นอนุบาล', '-', 4, 900.00, 3600.00, 'สนามเด็กเล่นอนุบาล', '-', '29 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (107, 'ATS-57-09-004-01/01', 9, 2557, 'เครื่องสำรองไฟฟ้า อุปกรณ์กระจายสัญญาณ Internet', '-', 1, 45860.20, 45860.20, 'ห้องอำนวยการ', '-', '1 Jul 57', 'โกไอทีโซลูชั่น', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (108, 'ATS-57-09-005-01/01', 9, 2557, 'เครื่องสแกนลายนิ้วมือ', '-', 1, 16799.00, 16799.00, 'ห้องอำนวยการ', '-', '20 Aug 57', 'โกรทมอร์ คอร์ปอเรชั่น', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (109, 'ATS-57-09-006-01/01', 9, 2557, 'Card Wireless และ Router', '-', 1, 38862.40, 38862.40, 'ห้องอำนวยการ', '-', '2 Sep 57', 'โกไอทีโซลูชั่น', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (110, 'ATS-57-09-007-01/01', 9, 2557, 'โปรเจคเตอร์ พอยเตอร์และสาย HDML', '-', 1, 21132.50, 21132.50, 'ห้องประชุม', '-', '18 Dec 57', 'โกรทมอร์ คอร์ปอเรชั่น', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (111, 'ATS-57-09-008-01/01', 9, 2557, 'พัดลมเป่าเครื่องเซิร์ฟเวอร์', '-', 1, 1123.00, 1123.00, 'ห้องอำนวยการ', '-', '25 Jul 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (112, 'ATS-57-09-009-01/01', 9, 2557, 'กล้องถ่ายรูป', '-', 1, 24000.00, 24000.00, 'งานนวัตกรรมและเทคโนโลยี', '-', '20 Aug 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (113, 'ATS-57-09-010-01/', 9, 2557, 'กล้องวงจรปิด', '-', 1, 111800.00, 111800.00, '-', '-', '19 Jan 58', 'คณะบุคคลทรัพย์รุ่งโรจน์ฯ', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (114, 'ATS-57-09-011-01/01', 9, 2557, 'เครื่องพิมพ์ใบเสร็จรับเงิน / สลิปเงินเดือน', '-', 1, 7690.00, 7690.00, 'งานการเงิน', '-', '8 Apr 58', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (116, 'ATS-56- 10-002-01/01', 10, 2556, 'ตบแต่งภายใน (ยอดรวม 310,000 บาท)', '-', 1, 310000.00, 310000.00, 'ห้องอำนวยการ', '-', '29 Apr 57', 'สมเกียรติ รถแก้ว ', '-', '-', '-', '-', 'Koala.jpg', 1);
INSERT INTO `data_mda` VALUES (117, 'ATS-56- 10-003-01/01', 10, 2556, 'ติดตั้งม่านสำนักอำนวยการ (ม่านทานตะวัน)', '-', 1, 37800.00, 37800.00, 'ห้องอำนวยการ', 'ขาดเอกสาร', '28 May 57', 'ร้านม่านทานตะวัน', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (118, 'ATS-57- 10-001-01/24', 10, 2557, 'ติดตั้งม่านห้องเรียน (ม่านทานตะวัน)', '-', 24, 10500.00, 252000.00, 'ห้องเรียน', '-', '4 Dec 57', 'ร้านม่านทานตะวัน', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (119, 'ATS-56-11-001-01/01', 11, 2556, 'สว่านไร้สาย', '-', 1, 5422.30, 5422.30, 'งานอาคารสถานที่ฯ', 'ขาดเอกสาร', '11 Dec 56', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (120, 'ATS-56-11-002-01/03', 11, 2556, 'ถังน้ำ', 'ความจุ 3,000 ลิตร', 3, 9500.00, 28500.00, '-', '-', '23 Dec 56', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (121, 'ATS-56-11-003-01/01', 11, 2556, 'ตู้เชื่อมไฟฟ้า', 'ยี่ห้อ WELPRO รุ่น Welarc 200 200A', 1, 13000.00, 13000.00, 'งานอาคารสถานที่ฯ', '-', '13 Feb 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (122, 'ATS-56-11-004-01/03', 11, 2556, 'ค่าบันได ', '-', 3, 1975.00, 5925.00, 'งานอาคารสถานที่ฯ', '-', '17 Feb 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (123, 'ATS-56-11-005-01/02', 11, 2556, 'ตู้เย็น 6 คิว ', '-', 2, 5690.00, 11380.00, 'ห้องอำนวยการ,ห้องอาหาร ผอ.', 'ขาดเอกสาร', '3 Apr 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (124, 'ATS-56-11-006-01/02', 11, 2556, 'รถเข็นปูน', '-', 2, 1850.00, 3700.00, 'งานอาคารสถานที่ฯ', 'ขาดเอกสาร', '2 Dec 56', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (125, 'ATS-57-11-001-01/108', 11, 2557, 'ถาดหลุมสแตนเลส', 'ขนาด 32 ซม.', 108, 133.08, 14373.00, 'งานโภชนาการ', '-', '16 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (126, 'ATS-57-11-002-01/04', 11, 2557, 'คูลเลอร์น้ำสแตนเลส', 'ยี่ห้อหัวม้าลาย ขนาด 24 ซม.', 4, 1664.00, 6656.00, 'นักเรียนอนุบาล', '-', '16 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (127, 'ATS-57-11-003-01/75', 11, 2557, 'แก้วน้ำเมลานีน ถ้วยซุป ส้อม ช้อนซุป', 'ยี่ห้อ ซุปเปอร์แวร์', 75, 152.00, 11400.00, 'นักเรียนอนุบาล', '-', '17 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (128, 'ATS-56-11-004-01/75', 11, 2556, 'ถาดหลุมเมลานีน อนุบาล (จน. 75 ใบๆละ 169.53 )', 'ยี่ห้อ ซุปเปอร์แวร์ ขนาด 9.5 นิ้ว', 75, 170.00, 12750.00, 'นักเรียนอนุบาล', '-', '17 May 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (129, 'ATS-56-11-005-01/01', 11, 2556, 'เครื่องตัดไฟ (ตัดไฟตู้น้ำเย็น)', 'ยี่ห้อ เซฟ ที คัด', 1, 2600.00, 2600.00, 'โรงอาหาร ชั้นล่าง', 'ขาดเอกสาร', '26 Nov 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (130, 'ATS-56-11-006-01/01', 11, 2556, 'เครื่องทำน้ำเย็น', 'จำนวน 4 หัวก๊อก ยี่ห้อ MAXCOOL', 1, 18500.00, 18500.00, 'โรงอาหาร ชั้นล่าง', '-', '9 Dec 57', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (131, 'ไม่บันทึกทะเบียนทรัพย์สิน', 0, 0, 'โทรศัพท์พื้นฐาน', '-', 1, 410.00, 0.00, '-', '-', '28 Nov 56', 'พาวเวอร์บาย (ดร.ภูษิตย์ จัดซื้อมาให้)', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (132, 'ไม่บันทึกทะเบียนทรัพย์สิน', 0, 0, 'ชุดครุย', 'สถาบันราชภัฏ ธนบุรี', 1, 1100.00, 0.00, '-', '-', '17 Jan 57', 'ผู้อำนวยการเป็นคนสั่งตัดเอง', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (133, 'ATS-56-12-001-01/01', 12, 2556, 'รถตู้ (ทะเบียน ฮก 4547 กท)', 'ยี่ห้อ NISSAN รุ่น URVAN  สีขาว', 1, 350000.00, 350000.00, '-', '-', '1 Nov 56', 'ซื้อมาจากวิทยาลัยอรรถวิทย์พณิชยการ', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (134, 'ATS-56-12-002-01/01', 12, 2556, 'รถกะบะ (ทะเบียน บพ 8133 กท)', 'ยี่ห้อ ISUZU รุ่น.....  สีฟ้า', 1, 300000.00, 300000.00, '-', '-', '1 Nov 56', 'ซื้อมาจากวิทยาลัยอรรถวิทย์พณิชยการ', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (135, 'ATS-57-12-001-01/01', 12, 2557, 'รถมอเตอร์ไซค์', 'ยี่ห้อ YAMAHA สีขาว-น้ำเงิน  รุ่น 1 EP401  สีขาว', 1, 40000.00, 40000.00, '-', '-', '1 Nov 56', '-', '-', '-', '-', '-', '', 1);
INSERT INTO `data_mda` VALUES (137, 'ATS-59-11-001-01/01', 11, 2559, 'คอมพิวเตอร์ (ชนิดตั้งโต๊ะ)', 'CPU INTEL i3 4130 Ram 4G MONITOR LED BENQ', NULL, NULL, NULL, 'ผู้จัดการ', NULL, '26 พ.ย. 2556', 'M&D COMPUTER', NULL, '02-256-0830', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `lent_return`
-- 

CREATE TABLE `lent_return` (
  `id` int(11) NOT NULL auto_increment,
  `id_data_mda` int(11) NOT NULL,
  `id_mda` varchar(25) collate utf8_unicode_ci NOT NULL,
  `name_mda` varchar(1000) collate utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `name_user` varchar(50) collate utf8_unicode_ci NOT NULL,
  `date_lent` varchar(20) collate utf8_unicode_ci NOT NULL,
  `date_return` varchar(20) collate utf8_unicode_ci default NULL,
  `year` varchar(10) collate utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

-- 
-- dump ตาราง `lent_return`
-- 

INSERT INTO `lent_return` VALUES (19, 138, 'ats-58-02-001-01/02', 'ประเภท', 3, 'Punyada', '2016-04-09', '2016-04-09', '2559', 1);
INSERT INTO `lent_return` VALUES (20, 117, 'ATS-56-', 'ติดตั้งม่านสำนักอำนวยการ', 2, 'Punyada', '2016-04-09', '2016-04-09', '2559', 1);
INSERT INTO `lent_return` VALUES (21, 1, 'ATS-56-02-001-01/02', 'ตู้คอนเทนเนอร์', 2, 'Punyada', '2017-05-09', '2017-05-09', '2560', 1);
INSERT INTO `lent_return` VALUES (18, 137, 'ATS-59-11-001-01/01', 'คอมพิวเตอร์', 3, 'Punyada', '2016-04-09', '2016-04-13', '2559', 1);
INSERT INTO `lent_return` VALUES (22, 138, 'ats-58-02-001-01/02', 'ประเภท', 3, 'Punyada', '2016-04-13', '2016-04-13', '2559', 1);
INSERT INTO `lent_return` VALUES (23, 137, 'ATS-59-11-001-01/01', 'คอมพิวเตอร์', 3, 'Punyada', '2016-04-13', '2016-04-13', '2559', 1);
INSERT INTO `lent_return` VALUES (24, 138, 'ats-58-02-001-01/02', 'ประเภท', 3, 'Punyada', '2016-04-13', '2016-04-16', '2016', 1);
INSERT INTO `lent_return` VALUES (25, 137, 'ATS-59-11-001-01/01', 'คอมพิวเตอร์', 3, 'Punyada', '2016-04-13', '2016-04-13', '2559', 1);
INSERT INTO `lent_return` VALUES (26, 137, 'ATS-59-11-001-01/01', 'คอมพิวเตอร์', 3, 'Punyada', '2016-04-16', '2016-04-16', '2559', 1);
INSERT INTO `lent_return` VALUES (27, 115, 'ATS-56-', 'ซิงค์', 3, 'Punyada', '2016-04-16', '2016-04-16', '2559', 1);
INSERT INTO `lent_return` VALUES (28, 36, 'ATS-56-06-001-01/', 'โต๊ะ', 3, 'Punyada', '2016-04-16', '2016-04-16', '2559', 1);
INSERT INTO `lent_return` VALUES (29, 37, 'ATS-56-06-002-01/03', 'ลำโพง', 3, 'Punyada', '2016-04-16', '2016-04-16', '2559', 1);
INSERT INTO `lent_return` VALUES (33, 37, 'ATS-56-06-002-01/03', 'ลำโพง', 2, 'test', '2016-04-17', '2016-04-17', '2559', 1);
INSERT INTO `lent_return` VALUES (32, 84, 'ATS-56-09-003-01/01', 'สว่านไร้สาย', 3, 'Punyada', '2016-04-16', '2016-04-16', '2559', 1);
INSERT INTO `lent_return` VALUES (34, 29, 'ATS-56-05-001-01/01', 'เครื่องปริ้นเตอร์', 7, 'Dr.Somsak', '2016-04-17', '2016-04-17', '2559', 1);
INSERT INTO `lent_return` VALUES (35, 95, 'ATS-56-09-014-01/01', 'คอมพิวเตอร์', 1, 'Nutthapon', '2016-04-17', '2016-04-17', '2559', 1);
INSERT INTO `lent_return` VALUES (36, 1, 'ATS-56-02-001-01/02', 'ตู้คอนเทนเนอร์', 42, 'Punyada', '2016-04-28', '-', '2559', 2);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `maintenance`
-- 

CREATE TABLE `maintenance` (
  `id` int(11) NOT NULL auto_increment,
  `id_data_mda` int(11) NOT NULL,
  `id_mda` varchar(50) collate utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `supervisor` varchar(200) collate utf8_unicode_ci default NULL,
  `detail` varchar(500) collate utf8_unicode_ci default NULL,
  `date_send` varchar(50) collate utf8_unicode_ci NOT NULL,
  `date_return` varchar(50) collate utf8_unicode_ci default NULL,
  `company` varchar(200) collate utf8_unicode_ci default NULL,
  `outgoings` decimal(10,2) default NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

-- 
-- dump ตาราง `maintenance`
-- 

INSERT INTO `maintenance` VALUES (4, 137, 'ATS-59-11-001-01/01', 11, 2559, 'นัท', 'เปิดไม่ติด', '2016-04-15', '-', 'ณัฐพล', 2000.00, 1);
INSERT INTO `maintenance` VALUES (3, 137, 'ATS-59-11-001-01/01', 11, 2559, 'testname', 'detail', '', '2016-04-15', 'ณัฐพล', 2000.00, 1);
INSERT INTO `maintenance` VALUES (5, 137, 'ATS-59-11-001-01/01', 11, 2559, 'นัท2', 'detail2', '2016-04-12', '2016-04-15', 'ณัฐพล2', 2002.00, 1);
INSERT INTO `maintenance` VALUES (6, 53, 'ATS-57-07-011-01/10', 7, 2557, 'นัท2', 'detail2', '2016-04-12', '2016-04-16', 'ณัฐพล2', 2003.00, 1);
INSERT INTO `maintenance` VALUES (7, 29, 'ATS-56-05-001-01/01', 5, 2556, 'testname', 'ทดสอบ', '2016-04-15', '2016-04-16', 'ณัฐพล', 2003.00, 1);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `type`
-- 

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `detail` varchar(50) collate utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- dump ตาราง `type`
-- 

INSERT INTO `type` VALUES (1, '-');
INSERT INTO `type` VALUES (2, 'อาคารและส่วนปรับปรุง');
INSERT INTO `type` VALUES (3, '-');
INSERT INTO `type` VALUES (4, 'ระบบไฟฟ้าและเครื่องปรับอากาศ');
INSERT INTO `type` VALUES (5, 'อุปกรณ์การเรียน');
INSERT INTO `type` VALUES (6, 'ครุภัณฑ์การเรียน');
INSERT INTO `type` VALUES (7, 'ครุภัณฑ์สำนักงาน');
INSERT INTO `type` VALUES (8, 'อุปกรณ์สำนักงาน');
INSERT INTO `type` VALUES (9, '-');
INSERT INTO `type` VALUES (10, 'เครื่องตกแต่ง');
INSERT INTO `type` VALUES (11, 'เครื่องมือเครื่องใช้สำนักงาน');
INSERT INTO `type` VALUES (12, 'รถยนต์');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `user_mda`
-- 

CREATE TABLE `user_mda` (
  `user_id` int(11) NOT NULL auto_increment,
  `username` varchar(30) collate utf8_unicode_ci NOT NULL,
  `password` varchar(30) collate utf8_unicode_ci NOT NULL,
  `name` varchar(50) collate utf8_unicode_ci NOT NULL,
  `dep` varchar(30) collate utf8_unicode_ci NOT NULL,
  `date` varchar(20) collate utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

-- 
-- dump ตาราง `user_mda`
-- 

INSERT INTO `user_mda` VALUES (1, 'admin1', 'admin1234', 'Nutthapon', 'IT', '2016-01-12', 2);
INSERT INTO `user_mda` VALUES (2, 'test1', '1234', 'Teacher', 'teacher', '2016-02-17', 1);
INSERT INTO `user_mda` VALUES (3, 'test2', '1234', 'Punyada', 'Finance', '2016-02-17', 3);
INSERT INTO `user_mda` VALUES (4, 'test3', '1234', 'Dr.Somsak', 'Manager', '2016-02-22', 4);
INSERT INTO `user_mda` VALUES (5, 'nut', '1234', 'ณัฐพล', 'IT', '2016-04-17', 1);
INSERT INTO `user_mda` VALUES (6, 'new', '1234', 'test_new', 'com', '2016-04-23', 1);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `year`
-- 

CREATE TABLE `year` (
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- dump ตาราง `year`
-- 

INSERT INTO `year` VALUES (2556);
INSERT INTO `year` VALUES (2557);
INSERT INTO `year` VALUES (2558);
INSERT INTO `year` VALUES (2559);
INSERT INTO `year` VALUES (2560);
INSERT INTO `year` VALUES (2561);
