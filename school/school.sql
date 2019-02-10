-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2018 at 06:12 AM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `classe` varchar(200) NOT NULL,
  `classname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `classe`, `classname`) VALUES
(1, 'الفرقة الاولى', 'ابو بكر'),
(2, 'الفرقة الاولى', 'عمر'),
(3, 'الفرقة الاولى', 'عثمان'),
(4, 'الفرقة القانية', 'عبدالله الطيب'),
(5, 'الفرقة الثانية', 'الطيب صالح'),
(6, 'الفرقة الثانية', 'مجذوب'),
(7, 'الفرقة الثالثة', 'ابن سيناء'),
(8, 'الفرقة الثالثة', 'ابن رشد'),
(9, 'الفرقة الثالثة', 'خوارزمي');

-- --------------------------------------------------------

--
-- Table structure for table `fired`
--

CREATE TABLE `fired` (
  `st-id` int(11) NOT NULL,
  `st-name` varchar(200) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gradu`
--

CREATE TABLE `gradu` (
  `st-id` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `persent` int(11) NOT NULL,
  `dept` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `manag`
--

CREATE TABLE `manag` (
  `id` int(11) NOT NULL,
  `occu` varchar(200) NOT NULL,
  `t-id` int(11) NOT NULL,
  `oc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manag`
--

INSERT INTO `manag` (`id`, `occu`, `t-id`, `oc`) VALUES
(1, 'المدير', 1, 'mn'),
(2, 'الوكيل', 16, 'bh'),
(3, 'المشرف المالي', 17, 'fs');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `st-id` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `persent` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `a-year` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `father_number` varchar(200) NOT NULL,
  `paid_fin` varchar(200) NOT NULL,
  `classname` varchar(200) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `father_name`, `father_number`, `paid_fin`, `classname`, `year`) VALUES
(1, 'ahmed mohammed', 'mohammed abdularahman', '0122303407', '350', 'A', 2015),
(2, '', '', '', '', '', 0000),
(3, '', '', '', '', '', 0000),
(4, 'hjhj', 'jhjh', 'jhjhh', 'A', '', 0000),
(5, 'rtrrrr', 'TRRRR', '555', 'A', '', 0000),
(6, 'eeeee', 'rrrrrr', 'ttttttttttttttt', '777', 'A', 2015),
(7, 'a', 'aa', 'aa', 'aa', 'B', 2015),
(8, 'bhbhh', 'vffvvf', '', '', '1', 0000);

-- --------------------------------------------------------

--
-- Table structure for table `sub-degrees`
--

CREATE TABLE `sub-degrees` (
  `st-id` int(11) NOT NULL,
  `sub-id` int(11) NOT NULL,
  `degree` int(11) NOT NULL,
  `td` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `a-year` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `master` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`, `master`) VALUES
(1, 'اللغة العربيه', ''),
(2, 'الرياضيات', ''),
(3, 'اللغة الانجليزيه', ''),
(4, 'التربية اسلامية', ''),
(5, 'الجغرافيا', ''),
(6, 'التاريخ', ''),
(7, 'الكيمياء', ''),
(8, 'الفيزياء', ''),
(9, 'الاحياء', ''),
(10, 'علوم الحاسوب', ''),
(11, 'علوم هندسية', ''),
(12, 'العلوم العسكرية', ''),
(13, 'اللغة الفرنسية', '');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `subject` int(11) NOT NULL,
  `phonenumber` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `subject`, `phonenumber`, `email`, `username`, `password`) VALUES
(1, 'احمد محمد عبدالرحمن احمد', 2, '099339775', 'alamerahmed@ahmed.com', 'ahmedmohammed', '12345678'),
(17, 'علي عثمان خيرالله فضل', 1, '0123456789', 'alai-k@gmail.com', 'alikhair', '12345678'),
(18, 'محسن محمد حسن فتاح', 3, '012345678', 'moh@gmail.com', 'mohssen', '12345678'),
(19, 'مجدي عصبة', 1, '012345678', 'majdi@gmail.com', 'majdi', '87654321'),
(20, 'عادل سعد يوسف', 1, '0112233445', 'adil@gmail.com', 'adil', '11223344'),
(21, 'مهند خالد فضل المولى', 2, '0112233445', 'mohanad@gmail.com', 'mohanad', '11223344'),
(22, 'ايهاب الصادق عيسى', 3, '0112233445', 'ehab@gmail.com', 'ehab', '11223344'),
(23, 'عمر كشكوش', 4, '0112233445', 'omer@gmail.com', 'omer', '11223344'),
(24, 'عابدين محمد خير', 4, '0112233445', 'abdeen@gmail.com', 'abdeen', '11223344'),
(25, 'ابوبكر ادم علي', 5, '0112233445', 'abobaker@gmail.com', 'abobaker', '11223344'),
(26, 'احمد محمد صالح', 5, '0112233445', 'asalih@gmail.com', 'asalih', '11223344'),
(27, 'عبدالله ايوب زكريا', 7, '0112233445', 'abdu@gmail.com', 'abdu', '11223344'),
(28, 'اواب محمد عوض', 7, '0112233445', 'owab@gmail.com', 'owab', '11223344'),
(29, 'عبدالمنعم الصديق', 8, '0112233445', 'abdused@gmail.com', 'abdused', '11223344'),
(30, 'احمد خلف الله', 8, '0112233445', 'akhalf@gmail.com', 'akhalf', '11223344'),
(31, 'عبدالواحد عبدالصمد', 9, '0112233445', 'wahid@gmail.com', 'wahid', '11223344'),
(32, 'النور سليمان', 10, '0112233445', 'noor@gmail.com', 'noor', '11223344'),
(33, 'يحي حسن موسى', 11, '0112233445', 'yhya@gmail.com', 'yhya', '11223344');

-- --------------------------------------------------------

--
-- Table structure for table `tecl`
--

CREATE TABLE `tecl` (
  `t_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tecl`
--

INSERT INTO `tecl` (`t_id`, `c_id`) VALUES
(16, 1),
(16, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manag`
--
ALTER TABLE `manag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `manag`
--
ALTER TABLE `manag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
