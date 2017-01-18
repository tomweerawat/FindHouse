-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2017 at 10:24 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(10) NOT NULL,
  `province` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `subdistrict` varchar(30) NOT NULL,
  `house` varchar(30) DEFAULT NULL,
  `number` varchar(30) NOT NULL,
  `road` varchar(30) DEFAULT NULL,
  `zipcode` varchar(30) DEFAULT NULL,
  `lat` double NOT NULL DEFAULT '13.746533',
  `long` double NOT NULL DEFAULT '100.5328842'
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `province`, `district`, `subdistrict`, `house`, `number`, `road`, `zipcode`, `lat`, `long`) VALUES
(1, 'กระบี่', 'df', 'dfg', 'fdfdg', 'df', 'df', 'dffg', 13.746533, 100.5328842),
(2, 'กระบี่', 'df', 'dfg', 'fdfdg', 'df', 'df', 'dffg', 13.746533, 100.5328842),
(3, 'กระบี่', 'df', 'dfg', 'fdfdg', 'df', 'df', 'dffg', 13.746533, 100.5328842),
(4, 'กระบี่', 'df', 'dfg', 'fdfdg', 'df', 'df', 'dffg', 13.746533, 100.5328842),
(5, 'กระบี่', 'df', 'dfg', 'fdfdg', 'df', 'df', 'dffg', 13.746533, 100.5328842),
(6, 'กรุงเทพมหานคร', 'Sukhumvit ', 'Sukhumvit', 'Rhythm Sukhumvit 50', '1234', 'Sukhumvit 50', '14562', 13.746533, 100.5328842),
(7, 'กรุงเทพมหานคร', 'Sukhumvit ', 'Sukhumvit', 'Rhythm Sukhumvit 50', '1234', 'Sukhumvit 50', '14562', 13.746533, 100.5328842),
(8, 'กรุงเทพมหานคร', 'Sukhumvit ', 'Sukhumvit', 'Rhythm Sukhumvit 50', '1234', 'Sukhumvit 50', '14562', 13.746533, 100.5328842),
(9, 'กรุงเทพมหานคร', 'Sukhumvit ', 'Sukhumvit', 'Rhythm Sukhumvit 50', '1234', 'Sukhumvit 50', '14562', 13.746533, 100.5328842),
(10, 'กรุงเทพมหานคร', 'Sukhumvit ', 'Sukhumvit', 'Rhythm Sukhumvit 50', '1234', 'Sukhumvit 50', '14562', 13.746533, 100.5328842),
(11, 'กระบี่', 'iiuuiiui', 'iuiiui', 'iuiiuiu', 'iiiuiu', 'iiuiui', 'iuiuiuiu', 13.746533, 100.5328842),
(12, 'ตราด', 'dfgdf', 'dfd', 'dc', 'dfcdas', 'dcd', 'sds', 13.746533, 100.5328842),
(13, 'ฉะเชิงเทรา', 'ภาษีเจริญ', 'บางหว้า', 'ชุ่ม', '1234', '12334', 'ัี1123', 13.746533, 100.5328842),
(14, 'ตาก', 'ภาษีเจริญ', 'บางหว้า', 'ffdfg', '111/11', 'เพชรเกษม40', '12345', 13.746533, 100.5328842),
(15, 'กรุงเทพมหานคร', 'บางขุนเทียน', 'บางมด', 'ออริจินส์ พระราม 2', '666', 'พระราม 2', '10150', 13.517147824908387, 100.16329725541993);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`, `image`) VALUES
(1, 'admin', '1234', 'Chanchai', 'Not.jpg'),
(3, 'tomtom', '1234', 'Weerawat', 'Tom.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ci_member`
--

CREATE TABLE `ci_member` (
  `user_id` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(30) DEFAULT NULL,
  `telephone` varchar(10) NOT NULL,
  `regis_date` datetime NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_member`
--

INSERT INTO `ci_member` (`user_id`, `email`, `password`, `name`, `image`, `telephone`, `regis_date`, `gender`) VALUES
(1, 'tom@comsci.com', '123456', 'weerawat', NULL, '0987654321', '2016-11-23 00:00:00', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(12) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_id` int(10) NOT NULL,
  `proptype` varchar(10) CHARACTER SET tis620 NOT NULL,
  `ptype` varchar(20) CHARACTER SET tis620 NOT NULL,
  `propertyname` varchar(123) CHARACTER SET tis620 NOT NULL,
  `detail` varchar(100) CHARACTER SET tis620 NOT NULL,
  `ntype` varchar(20) CHARACTER SET tis620 NOT NULL,
  `ndetail` varchar(100) CHARACTER SET tis620 NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `rroom` int(1) NOT NULL DEFAULT '0',
  `broom` int(1) NOT NULL DEFAULT '0',
  `kroom` int(1) NOT NULL DEFAULT '0',
  `lroom` int(1) NOT NULL DEFAULT '0',
  `activation` varchar(3) CHARACTER SET tis620 DEFAULT 'No',
  `img1` varchar(100) CHARACTER SET tis620 DEFAULT NULL,
  `img2` varchar(100) CHARACTER SET tis620 DEFAULT NULL,
  `img3` varchar(100) CHARACTER SET tis620 DEFAULT NULL,
  `img4` varchar(100) CHARACTER SET tis620 DEFAULT NULL,
  `img5` varchar(100) CHARACTER SET tis620 DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `user_id`, `address_id`, `proptype`, `ptype`, `propertyname`, `detail`, `ntype`, `ndetail`, `price`, `rroom`, `broom`, `kroom`, `lroom`, `activation`, `img1`, `img2`, `img3`, `img4`, `img5`, `created`) VALUES
(1, 2, 1, 'rent', 'town', 'lll', 'llll', 'สถานีรถไฟฟ้าเอ็มอาร์', 'llll', '99999.99', 1, 1, 1, 1, 'No', 'uploads/files/test1.jpg', NULL, NULL, NULL, NULL, '2016-11-30 14:09:22'),
(2, 2, 2, 'rent', 'town', 'lll', 'llll', 'สถานีรถไฟฟ้าเอ็มอาร์', 'llll', '99999.99', 1, 1, 1, 1, 'No', 'uploads/files/test1.jpg', NULL, NULL, NULL, NULL, '2016-11-30 15:02:46'),
(3, 2, 4, 'sale', 'condo', 'test3', 'bla bla bla', 'สถานีรถไฟฟ้าบีทีเอส', '???????', '99999.99', 1, 1, 1, 1, 'Yes', 'uploads/files/test1.jpg', 'uploads/files/108.jpg', 'uploads/files/109.jpg', 'uploads/files/110.jpg', 'uploads/files/111.jpg', '2016-11-30 16:41:42'),
(4, 16, 5, 'ขาย', 'บ้านเดี่ยว', 'testtest', 'บ้านบาๆๆๆๆ', 'สถานีรถไฟฟ้าบีทีเอส', 'dffddfgfg', '1000.00', 1, 2, 3, 4, 'No', 'uploads/files/test1.jpg', 'uploads/files/75.jpg', 'uploads/files/76.jpg', 'uploads/files/77.jpg', 'uploads/files/78.jpg', '2016-12-06 16:48:25'),
(5, 16, 11, 'sale', 'detach', 'iujuiuiui', 'iuuiiiuiu', 'สถานีรถไฟฟ้าบีทีเอส', 'iuiuiui', '0.00', 0, 0, 0, 0, 'No', 'uploads/files/test1.jpg', 'uploads/files/63.jpg', 'uploads/files/64.jpg', 'uploads/files/65.jpg', 'uploads/files/66.jpg', '2016-12-09 17:02:06'),
(6, 16, 12, 'ขาย', 'บ้านเดี่ยว', '', 'dcsd', 'สถานีรถไฟฟ้าบีทีเอส', 'dccd', '0.00', 0, 0, 0, 0, 'No', 'uploads/files/test1.jpg', NULL, NULL, NULL, NULL, '2016-12-09 17:10:27'),
(7, 16, 13, 'ขาย', 'บ้านเดี่ยว', '', 'ฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟ', 'สถานีรถไฟฟ้าเอ็มอาร์', 'หัวลำโพง', '99999.99', 1, 2, 3, 4, 'No', 'uploads/files/test1.jpg', 'uploads/files/RHYTHM-????????-50-??????-????????-50-???????-Thailand (2).jpg', 'uploads/files/RHYTHM-????????-50-??????-????????-50-???????-Thailand (3).jpg', 'uploads/files/RHYTHM-????????-50-??????-????????-50-???????-Thailand (4).jpg', 'uploads/files/RHYTHM-????????-50-??????-????????-50-???????-Thailand.jpg', '2016-12-09 17:16:24'),
(8, 16, 14, 'ให้เช่า', 'อพาร์ตเมนต์', 'rgrddf', 'fsdf', 'โรงพยาบาล', 'ddfdf', '99999.99', 4, 5, 6, 7, 'No', 'uploads/files/test1.jpg', 'uploads/files/RHYTHM-สุขุมวิท-50-ริธึ่ม-สุขุมวิท-50-คลองเตย-Thailand (2).jpg', 'uploads/files/RHYTHM-สุขุมวิท-50-ริธึ่ม-สุขุมวิท-50-คลองเตย-Thailand (3).jpg', 'uploads/files/RHYTHM-สุขุมวิท-50-ริธึ่ม-สุขุมวิท-50-คลองเตย-Thailand (4).jpg', 'uploads/files/RHYTHM-สุขุมวิท-50-ริธึ่ม-สุขุมวิท-50-คลองเตย-Thailand.jpg', '2016-12-09 17:23:22'),
(9, 16, 15, 'ขาย', 'คอนโด', 'ขายคอนโด 1นอน ออริจินส์ พระราม 2 (Origin บางมด) เพียง 5 นาทีจากเซ็นทรัลพระราม 2 ห้องใหม่ป้ายแดง', 'ขายคอนโด 1นอน ออริจินส์ พระราม 2 (Origin บางมด) เพียง 5 นาทีจากเซ็นทรัลพระราม 2 ห้องใหม่ป้ายแดง', 'สถานที่ราชการ', 'สน.บางมด', '123456.00', 1, 1, 0, 0, 'No', 'uploads/files/test1.jpg', 'uploads/files/test2.jpg', 'uploads/files/test3.jpg', 'uploads/files/test4.jpg', 'uploads/files/test5.jpg', '2016-12-21 17:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `user_id` int(11) NOT NULL,
  `unique_id` varchar(23) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `encrypted_password` varchar(256) NOT NULL,
  `salt` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`user_id`, `unique_id`, `name`, `email`, `encrypted_password`, `salt`, `created_at`) VALUES
(1, ' 583fd68c7752a9.8084139', 'chanchai', 'not1994-12@hotmail.com', '$2y$10$POq5X.M.DDJE6vCqU4F5Ket1pKNPYIfmEBLj2aKbDHGuUubW11IGO', '710d8236b2', '2016-12-01 14:51:40'),
(2, ' 583fdc725fca70.9612212', 'kuy', 'tomtom@gmail.com', '$2y$10$yMWpVButFHumpS58vMxiAuFhp1n6ufiQPdZ7Y3v4khKBqVjbRKRz2', 'ba9d0ed6a9', '2016-12-01 15:16:50'),
(3, ' 583fdcab5e3d25.5676468', 'kuy', 'tomtom@gmail.com', '$2y$10$JJhIlPhlS98JotprMN7lrey5ziuR0vYbfgX8GcxkTkTI2cjbVB.0C', 'cf6a3f231c', '2016-12-01 15:17:47'),
(4, '582bc9d6cf5b69.28215084', 'tomtom', 'tom@gmail.com', '$2y$10$V94TO4JXbzRmMEnbBnhuNurjWsrpF9M.esjoU.Mx93ZFgmdXs2rTq', '749bc367fd', '2016-11-16 09:52:06'),
(5, '582bcf46f10435.02804569', 'tomweerawat', 'tomweerawat@gmail.com', '$2y$10$bzX22tJkjXZ.n7xsg..RYuJ3a9WjNfnZZXneWz7zJGrrD9.KHbhwK', 'c30635fb61', '2016-11-16 10:15:19'),
(6, '5837d017c36e07.86647168', 'gg', 'ggwp@gmail.com', '$2y$10$Cds4QaPii8sDlNhRiomOhenCCJAYQbbg5dhmUojTGwNSNA5hQhmIO', '1ac9850a7e', '2016-11-25 12:45:59'),
(7, '5837d09e1f38d1.69914362', 'weerawat', 'weerawar@gmal.com', '$2y$10$ZIcyTcjwCnsNRzUwuSoRGOiAmOaT2OBn9Cdohm0jyaZv0GV.b4AXK', '0cb5124d13', '2016-11-25 12:48:14'),
(8, '5837d50adb9842.16324859', 'teerapong', 'o@gmail.com', '$2y$10$Ovpj2O8hgye7RA18k21gI.VYXkuJ333uuY4F7NBqsIW2B1BCtLiuq', '37629803ed', '2016-11-25 13:07:06'),
(9, '5837dfe6d4b7a8.56727885', 'tomcomsci', 'weerawattom@gmail.com', '$2y$10$OIWbX3SlbJePaSZU5VFNl.S0mkIo9Pb/FpV66tHaFVErTZAqQb2ou', '0b6a63765c', '2016-11-25 13:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `unique_id` varchar(23) NOT NULL,
  `first_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `last_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `encrypted_password` varchar(256) CHARACTER SET latin1 NOT NULL,
  `salt` varchar(10) NOT NULL,
  `email` text CHARACTER SET latin1 NOT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `userimage` varchar(300) DEFAULT NULL,
  `permission` varchar(10) NOT NULL DEFAULT 'user',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `unique_id`, `first_name`, `last_name`, `encrypted_password`, `salt`, `email`, `tel`, `userimage`, `permission`, `created_at`) VALUES
(1, 'admin', 'admin', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '', 'admin@findhouse.com', '1234', 'uploads/userimg/kfc.png', 'user', '2016-12-02 16:02:07'),
(2, 'tomtom', 'tom', 'weerawat', '81dc9bdb52d04dc20036dbd8313ed055', '', 'tomweerawat@gmail.com', '0892122234', 'uploads/userimg/sw3.jpg', 'user', '2016-12-02 16:02:07'),
(16, ' 5846515c941a90.2803238', 'Chanchai', 'Saekow', '$2y$10$xoNu0FLI0fUqMrDK6XIn8.NP5EBksqKAhqtPJSBJu2NcgygV59HPS', '89defa9701', 'Not1234@gmail.com', '0965645645', '/uploads/userimg/1.jpg', 'user', '2016-12-06 12:49:16'),
(17, ' 58466cd811b8f8.2387919', 'Tomtom', 'werawat', '$2y$10$dPhay.dVFKdIbsh5ATQ7l.2ahGnUz0fNHlnv5WYDEpXazYpJCtN8.', 'be057d4ca4', 'tom1234@gmail.com', '0959518332', '/uploads/userimg/131.jpg', 'admin', '2016-12-06 14:46:32'),
(6, ' 584140b68cd407.3964304', 'jjjj', 'jjjj', '$2y$10$bSLcuwI5j3x93yn5zXvCPO9grj0FeJT08ITZehKTgNYqhOIQTEJze', '2d55b1b69f', 'not1994-12@hotmail.com', '0965645645', '/uploads/userimg20.jpg', 'user', '2016-12-02 16:36:54'),
(15, ' 58414cd15a4c77.7044490', 'kuy', 'kuy', '$2y$10$v.hWUaHNFSlBM1xsD/3EJ.5BFqMJ7iNaSF6LZ.BnBZYTqQC.by6XO', 'a8a683aa8c', 'notkak@gmail.com', '0965645645', '/uploads/userimg13.jpg', 'user', '2016-12-02 17:28:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ci_member`
--
ALTER TABLE `ci_member`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ci_member`
--
ALTER TABLE `ci_member`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=729;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
