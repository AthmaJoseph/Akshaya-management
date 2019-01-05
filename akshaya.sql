-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 01, 2019 at 07:17 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `akshaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `association`
--

CREATE TABLE IF NOT EXISTS `association` (
  `id` int(11) NOT NULL,
  `username` varchar(220) NOT NULL,
  `password` varchar(220) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `association`
--

INSERT INTO `association` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE IF NOT EXISTS `attendence` (
  `d&t` date NOT NULL,
  `centercode` varchar(220) NOT NULL,
  `atid` varchar(220) NOT NULL,
  `empid` int(11) NOT NULL,
  `logintime` datetime NOT NULL,
  `type` varchar(220) NOT NULL,
  `location` varchar(220) NOT NULL,
  `logouttime` datetime NOT NULL,
  PRIMARY KEY (`atid`),
  UNIQUE KEY `empid_2` (`empid`),
  KEY `empid` (`empid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `black_list`
--

CREATE TABLE IF NOT EXISTS `black_list` (
  `d&t` date NOT NULL,
  `centercode` varchar(220) NOT NULL,
  `bid` varchar(220) NOT NULL,
  `empid` int(11) NOT NULL,
  `reason` varchar(220) NOT NULL,
  `status` varchar(220) NOT NULL,
  PRIMARY KEY (`bid`),
  KEY `empid` (`empid`),
  KEY `empid_2` (`empid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

CREATE TABLE IF NOT EXISTS `center` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `centercode` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`id`, `centercode`) VALUES
(1, 'ks228'),
(2, 'PKD024'),
(3, 'WYD031'),
(4, 'KLM118'),
(5, 'ks2284'),
(6, 'ks2284'),
(7, 'sadx'),
(8, '111'),
(9, '33');

-- --------------------------------------------------------

--
-- Table structure for table `customer_feedback`
--

CREATE TABLE IF NOT EXISTS `customer_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer` int(11) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `customer_feedback`
--

INSERT INTO `customer_feedback` (`id`, `customer`, `feedback`, `date`) VALUES
(1, 1, 'i like it.Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2018-01-29'),
(2, 3, 'i dont like it.Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2018-01-29'),
(4, 1, 'good', '2018-12-26'),
(13, 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2018-12-27'),
(14, 1, 'efegr', '2018-12-27'),
(15, 1, 'kaddddd', '2018-12-27'),
(16, 1, '', '2018-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reg`
--

CREATE TABLE IF NOT EXISTS `customer_reg` (
  `d&t` date NOT NULL,
  `centercode` varchar(220) NOT NULL,
  `tockenid` varchar(220) NOT NULL,
  `name` varchar(220) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(220) NOT NULL,
  `housename` varchar(220) NOT NULL,
  `address` varchar(220) NOT NULL,
  `item` varchar(220) NOT NULL,
  PRIMARY KEY (`tockenid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_reg`
--

INSERT INTO `customer_reg` (`d&t`, `centercode`, `tockenid`, `name`, `mobile`, `email`, `housename`, `address`, `item`) VALUES
('2018-12-19', '112', '1', 'aa', 3333333333, '', 'frg', 'dgsfh', 'dgrth');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_tb`
--

CREATE TABLE IF NOT EXISTS `enquiry_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `question` text NOT NULL,
  `reply` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `enquiry_tb`
--

INSERT INTO `enquiry_tb` (`id`, `name`, `email`, `subject`, `question`, `reply`, `date`) VALUES
(14, 'ian', 'ian@gmail.com', 'ration card', 'what can i do for ration card ?\r\n', 'bring your old ration card copy and other informations', '2018-12-26'),
(13, 'ivan', 'ivan@gmail.com', 'adhar card', 'what can i do for taken adhar', 'Go to your nearest akshaya center', '2018-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `centercode` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `feedback` varchar(220) NOT NULL,
  `d&t` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `centercode` (`centercode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `centercode`, `name`, `feedback`, `d&t`) VALUES
(28, 'PKD024', 'sayooj', 'good', '2018-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(200) NOT NULL,
  `message` varchar(220) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `empid`, `message`, `date`) VALUES
(15, 222, 'hiii', '2018-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `staff_reg`
--

CREATE TABLE IF NOT EXISTS `staff_reg` (
  `id` int(112) NOT NULL AUTO_INCREMENT,
  `centercode` varchar(220) NOT NULL,
  `empid` varchar(200) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `place` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `salary` int(10) NOT NULL,
  `martial_status` varchar(10) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `d&t` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33335 ;

--
-- Dumping data for table `staff_reg`
--

INSERT INTO `staff_reg` (`id`, `centercode`, `empid`, `firstname`, `lastname`, `phone`, `place`, `email`, `gender`, `designation`, `grade`, `salary`, `martial_status`, `blood_group`, `qualification`, `experience`, `password`, `photo`, `d&t`) VALUES
(2, 'PKD024', '1', 'fdf', 'gfgf', '8943932518', 'ambayathode', 'athmajoseph5@gmail.com', 'male', 'Manager', 'A', 55555, 'single', 'O+', 'MCA', '3', 'ssas', 'logo.gif', '2018-12-04'),
(4, 'PKD024', '2147483647', 'Juvana s', 'Joy', '8943932518', 'ambayathode', 'athmajoseph5@gmail.com', 'male', 'office staff', 'B', 123, 'single', 'A', 'jhgjh', '6', 'ssas', 'nan.jpg', '2018-12-03'),
(5, 'PKD024', '2147483647123', 'fdf', 'joy', '8943932518', 'ambayathode', 'stimy@gmail.com', 'male', 'Manager', 'B', 55555, 'single', 'O+', 'MCA', 'mmnjjn', '333', 'me-flat.png', '2018-12-03'),
(6, 'PKD024', '2', 'fdf', 'gfgf', '8943932518', 'ambayathode', 'athmajoseph5@gmail.com', 'male', 'Manager', 'vnbvjb ', 55555, 'single', 'O+', 'MCA', '6', 'jkhjk', 'nan.jpg', '2018-12-20'),
(222, 'PKD024', '2147483645', 'Anlee', 'Mary', '9539696812', 'dsfd', 'ivan@gmail.com', 'male', 'office staff', 'B', 123, 'single', 'B+', 's', '3', 'staff', 'me-flat.png', '2018-12-28'),
(33334, 'ks22', '12345678', 'jibin', 'babu', '8943932518', 'mattanur', 'athmajoseph5@gmail.com', 'male', 'office staff', 'B', 8000, 'single', 'O-', 'DEGREE', '3', 'jj', 'Akshaya_board (1).jpg', '2019-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `tblleaves`
--

CREATE TABLE IF NOT EXISTS `tblleaves` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `LeaveType` varchar(110) NOT NULL,
  `FromDate` varchar(120) NOT NULL,
  `ToDate` varchar(120) NOT NULL,
  `Description` mediumtext NOT NULL,
  `posting_date` date NOT NULL,
  `Status` varchar(20) NOT NULL,
  `empid` int(200) DEFAULT NULL,
  `centercode` varchar(20) NOT NULL,
  PRIMARY KEY (`tid`),
  KEY `UserEmail` (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tblleaves`
--

INSERT INTO `tblleaves` (`tid`, `LeaveType`, `FromDate`, `ToDate`, `Description`, `posting_date`, `Status`, `empid`, `centercode`) VALUES
(20, 'Medical Leave test', '1/11/2017	', '31/11/2017	', 'fever', '2018-12-30', 'Approve', 222, 'PKD024'),
(21, 'Medical Leave test', '4/11/2017	', '28/11/2017	', 'cold', '2018-12-30', 'Reject', 222, 'PKD024'),
(22, 'Medical Leave test', '2019-01-01', '2019-01-05', 'Fever', '2018-12-31', 'pending', 222, 'PKD024');

-- --------------------------------------------------------

--
-- Table structure for table `vle`
--

CREATE TABLE IF NOT EXISTS `vle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(220) NOT NULL,
  `centercode` varchar(220) NOT NULL,
  `centerlocation` varchar(220) NOT NULL,
  `landmark` varchar(220) NOT NULL,
  `panchayath` varchar(220) NOT NULL,
  `block` varchar(220) NOT NULL,
  `district` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `centercode` (`centercode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `vle`
--

INSERT INTO `vle` (`id`, `name`, `centercode`, `centerlocation`, `landmark`, `panchayath`, `block`, `district`, `email`, `phone`, `mobile`, `password`, `photo`, `status`) VALUES
(1, 'kripa s', 'PKD024', 'kottiyoor', 'ambayathode', 'kotiityoor', 'iritty', 'kannur', 'kripa@gmail.com', '4902570212', '9539704539', 'kripa', 'nan.jpg', 'Approve'),
(3, 'anu', 'WYD031', 'aaaa', 'kann', 'sd', 'iritty', 'aaaa', 'ivan@gmail.com', '8943932518', '2700', 'mm', 'avatar-7.png', 'Approve'),
(6, 'ponnu', 'KLM118', 'rajapuram', 'chullikara', 'chelom', 'aaa', 'kasargod', 'stimy@gmail.com', '8943932518', '27009876', 'aa', 'nan.jpg', 'pending'),
(19, 'kripa', 'ks228', 'rajapuram', 'aaa', 'aaaa', 'aaa', 'kasargod', 'stimystephan@gmail.com', '9539696812', '9539696814', 'aa', 'mission.jpg', 'pending'),
(24, '3333333', '33', 'erfer343', 'ref3e', '234', '32', '3', 'stimy@gmail.com', 'dcfe3', '3e4r', '3er43', '', 'Reject');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`centercode`) REFERENCES `vle` (`centercode`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
