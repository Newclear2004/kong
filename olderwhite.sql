-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 04:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olderwhite`
--

-- --------------------------------------------------------

--
-- Table structure for table `cment`
--

CREATE TABLE `cment` (
  `idm` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `ment` varchar(500) NOT NULL,
  `datem` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cment`
--

INSERT INTO `cment` (`idm`, `idp`, `id`, `ment`, `datem`) VALUES
(20, 4, 1, 'เยียมเลย', '2023-11-15'),
(21, 7, 1, 'เยียมสุดๆ', '2023-11-15'),
(22, 10, 1, 'เยียมมากจ้า', '2023-11-15'),
(23, 4, 8, 'ชอบมาก', '2023-11-15'),
(24, 10, 8, 'ใช่เลย', '2023-11-15'),
(25, 14, 8, 'เก่งมาก\r\n', '2023-11-15'),
(26, 14, 3, 'เก่งจริงๆ', '2023-11-15'),
(27, 10, 3, 'ใช่แล้วจ้า', '2023-11-15'),
(28, 7, 3, 'ไม่จริงเลย', '2023-11-15'),
(29, 4, 3, 'ไม่ชอบ ดูแย่มาก', '2023-11-15'),
(30, 17, 9, 'จริงหรอ ? น่ากลัวมากๆ', '2023-11-15'),
(33, 17, 3, 'โอ้ แย่ๆๆๆๆๆ', '2023-11-15'),
(34, 16, 1, 'อ่อ!! แบบนี้นี่เอง', '2023-11-15'),
(35, 18, 2, 'ดีจริงๆ', '2023-11-15'),
(36, 20, 10, 'dasdasdas', '2023-11-15'),
(37, 18, 12, '5555', '2023-11-17'),
(38, 7, 12, '252555\r\n', '2023-11-17'),
(39, 25, 3, '555565', '2023-11-18'),
(44, 27, 3, '4444', '2023-11-18'),
(45, 32, 13, 'ฟหกฤฏฆ', '2023-11-18'),
(46, 32, 3, '5555', '2023-11-18'),
(47, 32, 13, 'asdasdasdasdasdxxxx', '2023-12-10'),
(48, 32, 13, '123', '2023-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `good`
--

CREATE TABLE `good` (
  `idg` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `good`
--

INSERT INTO `good` (`idg`, `idp`, `id`) VALUES
(1, 4, 2),
(7, 4, 3),
(14, 14, 9),
(16, 10, 9),
(17, 14, 1),
(18, 7, 1),
(20, 10, 1),
(21, 4, 8),
(22, 7, 8),
(23, 10, 8),
(24, 14, 8),
(25, 16, 9),
(26, 15, 9),
(27, 17, 9),
(29, 18, 2),
(31, 18, 12),
(33, 32, 3),
(34, 20, 13);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `born` date NOT NULL,
  `address` varchar(500) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `pic` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `idr` int(11) NOT NULL,
  `coin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `sex`, `born`, `address`, `mail`, `tel`, `pass`, `pic`, `status`, `idr`, `coin`) VALUES
(1, 'เกม การ์ด', 'ชาย', '2023-11-08', 'วังหิน', 'ee77@gmail.com', '0111111111', '111', '4556a070dde697e.jpg', 1, 0, 0),
(2, 'พา เพลิน', 'หญิง', '2023-11-06', 'ศรีสะเกษ', 'sa@gmail.com', '0222222222', '222', 'admin.png', 1, 2, 1000),
(3, 'admin 1', 'ชาย', '2023-11-01', '5555555', 'ds@gmail.com', '0000000000', '1', 'avatar04.png', 2, 99, 0),
(4, 'มาย เมย์', 'หญิง', '2023-11-01', 'หนองครก', 'e55e@gmail.com', '0333333333', '333', 'avatar2.png', 1, 3, 9000),
(6, 'ไข่ ไก่', 'ชาย', '2023-11-03', 'การอาชีพศรีสะเกษ', 'sss@gmail.com', '0444444444', '111', '68cf3a2c89c6ebb257dfa762e9315a44.png', 1, 0, 0),
(8, 'นาง เสือ', 'หญิง', '2023-11-24', 'หนองครก', 'yy@gmail.com', '0555555555', '555', 'm_admin2.png', 1, 0, 0),
(9, 'นาย โจ', 'หญิง', '2023-11-30', 'ศรีสะเกษ', 'd@gmail.com', '0666666666', '666', '4.png', 1, 6, 0),
(10, 'ดาว เดื่อน', 'หญิง', '2023-11-03', 'ศรีาเหดหก', 'ee7447@gmail.com', '0888888888', '888', '4.png', 1, 0, 0),
(12, 'a', 'ชาย', '2023-11-14', '000', 'a@gmail.com', '0112465546', '123', '.trashed-1698806462-IMG_20231002_093949.jpg', 1, 0, 0),
(13, 'หมอ', 'ชาย', '2004-07-28', 'ศรีสะเกษ', 'kongza@gmail.com', '0986307602', '123', 'avatar04.png', 1, 4, 49000),
(14, '87987987', 'ชาย', '2023-12-08', '654654654', '654654654654654@gmail.com', '3545464565', '00000', '4.png', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `idp` int(11) NOT NULL,
  `idr` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `top` varchar(100) NOT NULL,
  `content` varchar(500) NOT NULL,
  `picp` varchar(500) NOT NULL,
  `view` int(11) NOT NULL,
  `statusp` int(11) NOT NULL,
  `datep` date NOT NULL,
  `coinp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`idp`, `idr`, `id`, `top`, `content`, `picp`, `view`, `statusp`, `datep`, `coinp`) VALUES
(4, 2, 2, 'การย้ายผู้สูงอายุเข้าไปอยู่ภายในศูน', 'การย้ายผู้สูงอายุเข้าไปอยู่ภายในศูนย์ดูแลผู้สูงอายุไม่ใช่เรื่องที่สามารถตัดสินใจได้ง่าย ๆ ภายในระยะเวลาอันสั้น คุณต้องมีการศึกษาหาข้อมูลและเปรียบเทียบบริการต่างๆ รวมถึงใช้เวลาปรับมุมมองและทำความเข้าใจว่า การไว้วางใจให้ศูนย์ดูแลผู้สูงอายุดูแลคนที่คุณรัก\r\n', '687e625e9539662f1ce4f0325589eb99.jpg', 16, 1, '2023-11-15', 100),
(7, 1, 3, 'ปัญหาความทุกข์ยากและถูกทอดทิ้ง', 'หลายคนมักเข้าใจผิดว่า ศูนย์ดูแลผู้สูงอายุ คือบ้านพักคนชรา แต่ในความเป็นจริงแล้ว สถานที่ทั้งสองแห่งมีความแตกต่างกันอย่างสิ้นเชิง โดยบ้านพักคนชราจะเป็นสถานที่ถูกจัดตั้งขึ้นเพื่อเป็นที่พักอาศัยและให้ความคุ้มครองแก่ผู้สูงอายุที่อาจจะประสบปัญหาความทุกข์ยากและถูกทอดทิ้ง\r\n', '3b90e623b65b4bedd91ba238f680d9e8.jpg', 8, 1, '2023-11-15', 5),
(10, 1, 3, 'เรื่องอาหารและยา', 'ผู้สูงอายุจะได้รับบริการด้านสุขภาพที่ครอบคลุมตลอดระยะเวลาที่อยู่ในศูนย์ดูแลผู้สูงอายุ โดยจะได้รับการดูแลอย่างทั่วถึงตลอด 24 ชั่วโมงจากทีมแพทย์และพยาบาลผู้เชี่ยวชาญ ไม่ว่าจะเป็นการตรวจเช็คสุขภาพ การบรรเทาอาการเจ็บป่วย หรือการดูแลเรื่องอาหารและยา', '0826c97d715251254c3c32f1335d49c5.jpg', 9, 1, '2023-11-15', 5),
(14, 6, 9, 'คุณค่าของตน', '#เมื่ออายุมากขึ้น และไม่ได้รับผิดชอบในหน้าที่มากเท่าในอดีต คุณค่าและบทบาทของผู้สูงอายุจะถูกลดทอนลง จนบางครั้งกลายเป็นถูกละเลยความสำคัญ สร้างความทุกข์ใจให้กับผู้สูงอายุ บางรายอาจเกิดความน้อยใจ ซึมเศร้าลง และมีความเสี่ยงต่อภาวะซึมเศร้าสูง ดังนั้นการให้ผู้สูงอายุเข้ามามีบทบาทต่อการตัดสินใจ ในบางเรื่องก็จะช่วยให้ผู้สูงอายุเห็นคุณค่าของตนเองมากขึ้น\r\n', '79f3e745bcd65a28f80ded890ba8522c.jpg', 2, 1, '2023-11-15', 0),
(15, 6, 9, 'ปัญหาของผู้สูงอายุ', 'ปัญหาของผู้สูงอายุที่มีอาการปัสสาวะเล็ด ปัสสาวะราด กลั้นปัสสาวะไม่อยู่ สาเหตุส่วนใหญ่เกิดจากระบบของทางเดินปัสสาวะเกิดความเสื่อมจากอายุที่เพิ่มขึ้น กระเพาะปัสสาวะมีความจุลดลง ต่อมลูกหมากโตในผู้ชาย \r\n', '8aadd6d6f8f86ff1baef1ea9bc854df8.png', 0, 1, '2023-11-15', 0),
(16, 6, 9, 'ศูนย์ดูแลผู้สูงอายุ', 'หลายคนมักเข้าใจผิดว่า ศูนย์ดูแลผู้สูงอายุ คือบ้านพักคนชรา แต่ในความเป็นจริงแล้ว สถานที่ทั้งสองแห่งมีความแตกต่างกันอย่างสิ้นเชิง โดยบ้านพักคนชราจะเป็นสถานที่ถูกจัดตั้งขึ้นเพื่อเป็นที่พักอาศัยและให้ความคุ้มครองแก่ผู้สูงอายุที่อาจจะประสบปัญหาความทุกข์ยากและถูกทอดทิ้ง\r\n', '', 2, 1, '2023-11-15', 0),
(17, 6, 9, 'ปัญหาหูตึงในผู้สูงอายุ', 'ปัญหาหูตึงในผู้สูงอายุ เกิดจากความเสื่อมของประสาทหูตามวัย และสาเหตุอื่นๆ เช่น การมีเนื้องอกไปกดเส้นประสาทหูข้างใดข้างหนึ่ง เป็นต้น \r\n', '06a8f73aed415e3611757f2e8e25ecb4.jpg', 8, 1, '2023-11-15', 500),
(18, 1, 3, 'เมื่ออายุมากขึ้น!!!!', 'เมื่ออายุมากขึ้น และไม่ได้รับผิดชอบในหน้าที่มากเท่าในอดีต คุณค่าและบทบาทของผู้สูงอายุจะถูกลดทอนลง จนบางครั้งกลายเป็นถูกละเลยความสำคัญ สร้างความทุกข์ใจให้กับผู้สูงอายุ บางรายอาจเกิดความน้อยใจ ซึมเศร้าลง และมีความเสี่ยงต่อภาวะซึมเศร้าสูง ดังนั้นการให้ผู้สูงอายุเข้ามามีบทบาทต่อการตัดสินใจ ในบางเรื่องก็จะช่วยให้ผู้สูงอายุเห็นคุณค่าของตนเองมากขึ้น', '6d507f5b233c67d7a6c720b014235cd9.jpg', 1, 1, '2023-11-15', 5),
(19, 2, 3, 'ปัสสาวะเกิดความเสื่อมจากอายุที่เพิ่มขึ้น', 'ปัญหาของผู้สูงอายุที่มีอาการปัสสาวะเล็ด ปัสสาวะราด กลั้นปัสสาวะไม่อยู่ สาเหตุส่วนใหญ่เกิดจากระบบของทางเดินปัสสาวะเกิดความเสื่อมจากอายุที่เพิ่มขึ้น กระเพาะปัสสาวะมีความจุลดลง ต่อมลูกหมากโตในผู้ชาย ', '7df9757aad0f606f989af7f54589020b.jpg', 1, 1, '2023-11-15', 5),
(25, 6, 9, 'หกด', '', '', 1, 1, '2023-11-18', 0),
(27, 1, 3, 'อะไร', '', '', 1, 1, '2023-11-18', 5),
(32, 4, 13, 'หมอมาแล้ว', '', '5fc03c8bbaec95fb0b999b4b57f45f3c.png', 5, 1, '2023-11-18', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE `ques` (
  `idq` int(11) NOT NULL,
  `nameq` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`idq`, `nameq`) VALUES
(1, 'ความสวยงาม'),
(4, 'ความพึงพอใจ'),
(5, 'การให้ความรู้'),
(6, 'การบริการ');

-- --------------------------------------------------------

--
-- Table structure for table `ques_re`
--

CREATE TABLE `ques_re` (
  `idqr` int(11) NOT NULL,
  `idq` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ques_re`
--

INSERT INTO `ques_re` (`idqr`, `idq`, `id`, `score`) VALUES
(5, 1, 1, 5),
(6, 4, 1, 4),
(7, 5, 1, 2),
(8, 6, 1, 5),
(9, 1, 2, 3),
(10, 4, 2, 5),
(11, 5, 2, 1),
(12, 6, 2, 5),
(17, 1, 8, 5),
(18, 4, 8, 5),
(19, 5, 8, 5),
(20, 6, 8, 4),
(21, 1, 10, 2),
(22, 4, 10, 3),
(23, 5, 10, 5),
(24, 6, 10, 4),
(25, 1, 12, 1),
(26, 4, 12, 5),
(27, 5, 12, 5),
(28, 6, 12, 5);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `idr` int(11) NOT NULL,
  `namer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`idr`, `namer`) VALUES
(1, 'ประชาสัมพันธ์'),
(2, 'ออกกำลังกาย'),
(3, 'สมุนไพร'),
(4, 'คุยกะหมอ'),
(6, 'การดูแลตัวเอง');

-- --------------------------------------------------------

--
-- Table structure for table `slip`
--

CREATE TABLE `slip` (
  `ids` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `coins` int(11) NOT NULL,
  `pics` varchar(500) NOT NULL,
  `statuss` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `slip`
--

INSERT INTO `slip` (`ids`, `id`, `coins`, `pics`, `statuss`) VALUES
(3, 2, 100, '6a13d639fc3157b4d68f3b63878c088d.png', 1),
(4, 2, 400, '6a13d639fc3157b4d68f3b63878c088d.png', 1),
(6, 2, 1000, 'kadsjfhfsaglhljashlbkjas.png', 1),
(7, 2, 100, 'kadsjfhfsaglhljashlbkjas.png', 1),
(8, 4, 1000, 'dasdasdasdsaassdaasddasdsadasads.png', 1),
(9, 9, 500, 'ggggggggggggggggggggg.png', 1),
(10, 2, 400, 'kadsjfhfsaglhljashlbkjas.png', 1),
(11, 13, 500, 'ggggggggggggggggggggg.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cment`
--
ALTER TABLE `cment`
  ADD PRIMARY KEY (`idm`);

--
-- Indexes for table `good`
--
ALTER TABLE `good`
  ADD PRIMARY KEY (`idg`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idp`);

--
-- Indexes for table `ques`
--
ALTER TABLE `ques`
  ADD PRIMARY KEY (`idq`);

--
-- Indexes for table `ques_re`
--
ALTER TABLE `ques_re`
  ADD PRIMARY KEY (`idqr`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`idr`);

--
-- Indexes for table `slip`
--
ALTER TABLE `slip`
  ADD PRIMARY KEY (`ids`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cment`
--
ALTER TABLE `cment`
  MODIFY `idm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `good`
--
ALTER TABLE `good`
  MODIFY `idg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `ques`
--
ALTER TABLE `ques`
  MODIFY `idq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ques_re`
--
ALTER TABLE `ques_re`
  MODIFY `idqr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `idr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slip`
--
ALTER TABLE `slip`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
