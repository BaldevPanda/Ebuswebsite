-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2017 at 10:45 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` varchar(255) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `email`, `phno`, `password`) VALUES
('admin', 'admin', 'admin@gmail.com', '8658208215', 'admin'),
('admin1', 'admin1', 'aa@gmail.com', '12345', 'admin1'),
('b415022', 'Prashu', 'ddd@hhh.com', '1122334455', 'binayrandi'),
('jyoti', 'Jyoti', 'sdj@gmail.com', '8658208215', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `aid` varchar(255) NOT NULL,
  `accno` varchar(255) NOT NULL,
  `pancardno` varchar(255) NOT NULL,
  `ifsc` varchar(255) NOT NULL,
  `accname` varchar(255) NOT NULL,
  `baname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blocking`
--

CREATE TABLE `blocking` (
  `bid` varchar(255) NOT NULL,
  `seat_loc` varchar(255) NOT NULL,
  `seat_no` varchar(255) NOT NULL,
  `sleeper_loc` varchar(255) NOT NULL,
  `sleeper_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blocking`
--

INSERT INTO `blocking` (`bid`, `seat_loc`, `seat_no`, `sleeper_loc`, `sleeper_no`) VALUES
('Bi7627', '11_5', '5', '', ''),
('Bi7627', '1_4', 'V2R', '', ''),
('Bi7627', '1_5', 'V1R', '', ''),
('Bi7627', '2_1', '1L', '', ''),
('Bi7627', '2_2', '2L', '', ''),
('Bi7627', '2_4', '2R', '', ''),
('Bi7627', '2_5', '1R', '', ''),
('Bi7627', '3_1', '3L', '', ''),
('Bi7627', '3_2', '4L', '', ''),
('Bi7627', '3_4', '4R', '', ''),
('Bi7627', '3_5', '3R', '', ''),
('Bi7627', '5_5', '7R', '', ''),
('Pr1567', '1_1', '1L', '', ''),
('Pr1567', '1_4', '2R', '', ''),
('Pr1567', '1_5', '1R', '', ''),
('Pr1567', '2_1', '2L', '', ''),
('Pr1567', '2_4', '4R', '', ''),
('Pr1567', '2_5', '3R', '', ''),
('Pr1567', '5_1', '5L', '', ''),
('Pr4571', '3_4', '4R', '', ''),
('Pr4571', '3_5', '3R', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `boarding`
--

CREATE TABLE `boarding` (
  `rid` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `boarding_location` varchar(255) NOT NULL,
  `b_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boarding`
--

INSERT INTO `boarding` (`rid`, `city`, `boarding_location`, `b_time`) VALUES
('2', 'bhubaneswar', 'dsf', '00:00:05'),
('4', 'Bhubaneswar', 'Malisai', '09:30:00'),
('6', 'Bhubaneswar', 'bermunda', '19:45:00'),
('6', 'Bhubaneswar', 'khandagiri', '20:00:00'),
('8', 'Hyderabad', 'vskp status', '20:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `aid` varchar(255) NOT NULL,
  `a_date` date NOT NULL,
  `bid` varchar(255) NOT NULL,
  `rid` int(11) NOT NULL,
  `seatno` varchar(255) NOT NULL,
  `seatlocation` text NOT NULL,
  `uid` varchar(255) NOT NULL,
  `transactionid` varchar(255) NOT NULL,
  `transactionresult` varchar(255) NOT NULL,
  `transactiontime` time NOT NULL,
  `transactiontime_sec` varchar(255) NOT NULL,
  `transaction_date` text NOT NULL,
  `amount` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`aid`, `a_date`, `bid`, `rid`, `seatno`, `seatlocation`, `uid`, `transactionid`, `transactionresult`, `transactiontime`, `transactiontime_sec`, `transaction_date`, `amount`, `first_name`, `middle_name`, `last_name`, `sex`, `contact`, `age`, `email_id`) VALUES
('admin', '2017-10-29', 'My8454', 5, '7R', '5_5', 'u150925729641', 't291017150925729616', 'failure', '07:08:16', '1509257296', '29/10/17', 0, 'Mahabir', '', 'lname', 'male', 2147483647, 21, 'guno@gmail.com'),
('admin', '2017-10-29', 'SA6979', 5, '11L', '7_1', 'u150922702317', 't281017150922702379', 'failure', '11:43:43', '1509227023', '28/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, '13L', '8_1', 'u150922702317', 't281017150922702379', 'failure', '11:43:43', '1509227023', '28/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, '14L', '8_2', 'u150922702317', 't281017150922702379', 'failure', '11:43:43', '1509227023', '28/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, '17', '6_4', 'u150928070635', 't291017150928070610', 'failure', '01:38:26', '1509280706', '29/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, '1R', '2_5', 'u150922702317', 't281017150922702379', 'failure', '11:43:43', '1509227023', '28/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, '1R', '2_5', 'u150925338572', 't291017150925338515', 'failure', '06:03:05', '1509253385', '29/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, '2R', '2_4', 'u150922702317', 't281017150922702379', 'failure', '11:43:43', '1509227023', '28/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, '2R', '2_4', 'u150922918998', 't291017150922918915', 'failure', '12:19:49', '1509229189', '29/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, '2R', '2_4', 'u150925319666', 't291017150925319666', 'failure', '05:59:56', '1509253196', '29/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, '2R', '2_4', 'u150925324337', 't291017150925324364', 'failure', '06:00:43', '1509253243', '29/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, '2R', '2_4', 'u150925711026', 't291017150925711053', 'failure', '07:05:10', '1509257110', '29/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, '3R', '3_5', 'u150925424137', 't291017150925424119', 'failure', '06:17:21', '1509254241', '29/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, '4R', '3_4', 'u150925443328', 't291017150925443327', 'failure', '06:20:33', '1509254433', '29/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, '4R', '3_4', 'u150925608458', 't291017150925608447', 'failure', '06:48:04', '1509256084', '29/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, '5R', '4_5', 'u150925448873', 't291017150925448891', 'failure', '06:21:28', '1509254488', '29/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, '5R', '4_5', 'u150925819612', 't291017150925819667', 'failure', '07:23:16', '1509258196', '29/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, '5R', '4_5', 'u150926149187', 't291017150926149194', 'failure', '08:18:11', '1509261491', '29/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, '6R', '4_4', 'u150925471871', 't291017150925471846', 'failure', '06:25:18', '1509254718', '29/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, '6R', '4_4', 'u150926149187', 't291017150926149194', 'failure', '08:18:11', '1509261491', '29/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, '7R', '5_5', 'u150925476782', 't291017150925476775', 'failure', '06:26:07', '1509254767', '29/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, 'V1R', '1_5', 'u150922697059', 't281017150922697057', 'failure', '11:42:50', '1509226970', '28/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, 'V1R', '1_5', 'u150925745656', 't291017150925745685', 'failure', '07:10:56', '1509257456', '29/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-29', 'SA6979', 5, 'V2R', '1_4', 'u150922636260', 't281017150922636230', 'failure', '11:32:42', '1509226362', '28/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-30', 'SA6979', 5, '14', '5_4', 'u150939277255', 't301017150939277215', 'failure', '08:46:12', '1509392772', '30/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-30', 'SA6979', 5, '15', '5_5', 'u150939277255', 't301017150939277215', 'failure', '08:46:12', '1509392772', '30/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-30', 'SA6979', 5, '4R', '3_4', 'u150938714987', 't301017150938714973', 'failure', '07:12:29', '1509387149', '30/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-30', 'SA6979', 5, '5R', '4_5', 'u150937718029', 't301017150937718011', 'failure', '04:26:20', '1509377180', '30/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-30', 'SA6979', 6, '7R', '5_5', 'u150937675120', 't301017150937675187', 'failure', '04:19:11', '1509376751', '30/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-30', 'SA6979', 5, '7R', '5_5', 'u150937738783', 't301017150937738715', 'failure', '04:29:47', '1509377387', '30/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-30', 'SA6979', 5, '8R', '5_4', 'u150937701173', 't301017150937701192', 'failure', '04:23:31', '1509377011', '30/10/17', 0, '', '', '', '', 0, 0, ''),
('admin', '2017-10-30', 'SA6979', 5, '9R', '6_5', 'u150937760153', 't301017150937760120', 'failure', '04:33:21', '1509377601', '30/10/17', 0, 'Kaushik', '', 'lname', 'male', 2147483647, 21, 'kkaushiksubudhi@gmail.com'),
('admin', '2017-10-31', 'SA6979', 6, '1R', '2_5', 'u150939562693', 't301017150939562624', 'failure', '09:33:46', '1509395626', '30/10/17', 250, '', '', '', '', 0, 0, ''),
('admin', '2017-10-31', 'SA6979', 5, '1R', '2_5', 'u150946471629', 't311017150946471647', 'failure', '04:45:16', '1509464716', '31/10/17', 3100, '', '', '', '', 0, 0, ''),
('admin', '2017-10-31', 'SA6979', 6, '3R', '3_5', 'u150939300570', 't301017150939300532', 'failure', '08:50:05', '1509393005', '30/10/17', 250, '', '', '', '', 0, 0, ''),
('admin', '2017-10-31', 'SA6979', 6, '4R', '3_4', 'u150939307025', 't301017150939307068', 'failure', '08:51:10', '1509393070', '30/10/17', 500, '', '', '', '', 0, 0, ''),
('admin', '2017-10-31', 'SA6979', 6, '5R', '4_5', 'u150939307025', 't301017150939307068', 'failure', '08:51:10', '1509393070', '30/10/17', 500, '', '', '', '', 0, 0, ''),
('admin', '2017-10-31', 'SA6979', 5, 'V1R', '1_5', 'u150946471629', 't311017150946471647', 'failure', '04:45:16', '1509464716', '31/10/17', 3100, '', '', '', '', 0, 0, ''),
('admin', '2017-11-04', 'SA6979', 5, '2R', '2_4', 'u151042216886', 't111117151042216896', 'failure', '06:42:48', '1510422168', '11/11/17', 1500, '', '', '', '', 0, 0, ''),
('admin', '2017-11-04', 'SA6979', 5, '4R', '3_4', 'u151042211138', 't111117151042211131', 'failure', '06:41:51', '1510422111', '11/11/17', 1500, '', '', '', '', 0, 0, ''),
('admin', '2017-11-04', 'SA6979', 5, 'V2R', '1_4', 'u151042195921', 't111117151042195960', 'failure', '06:39:19', '1510421959', '11/11/17', 1600, '', '', '', '', 0, 0, ''),
('admin', '2017-11-13', 'SA6979', 5, '1R', '2_5', 'u151042800224', 't111117151042800286', 'failure', '08:20:02', '1510428002', '11/11/17', 1500, '', '', '', '', 0, 0, ''),
('admin', '2017-11-13', 'SA6979', 5, '1R', '2_5', 'u151042811310', 't111117151042811394', 'failure', '08:21:53', '1510428113', '11/11/17', 1500, '', '', '', '', 0, 0, ''),
('admin', '2017-11-13', 'SA6979', 5, '1R', '2_5', 'u151042825068', 't111117151042825028', 'failure', '08:24:10', '1510428250', '11/11/17', 1500, '', '', '', '', 0, 0, ''),
('admin', '2017-11-13', 'SA6979', 5, '2R', '2_4', 'u151042785619', 't111117151042785687', 'failure', '08:17:36', '1510427856', '11/11/17', 1500, '', '', '', '', 0, 0, ''),
('admin', '2017-11-13', 'SA6979', 6, '2R', '2_4', 'u151042852079', 't111117151042852014', 'failure', '08:28:40', '1510428520', '11/11/17', 250, 'Kaushik', '', 'lname', 'male', 2147483647, 22, 'sd@gmail.com'),
('admin', '2017-11-13', 'SA6979', 5, 'V2R', '1_4', 'u151042909445', 't111117151042909463', 'failure', '08:38:14', '1510429094', '11/11/17', 1600, '', '', '', '', 0, 0, ''),
('admin', '2017-11-13', 'SA6979', 5, 'V2R', '1_4', 'u151042946730', 't111117151042946737', 'failure', '08:44:27', '1510429467', '11/11/17', 1600, 'Kaushik', '', 'lname', 'male', 8658654, 22, 'qd@gmail.com'),
('admin', '2017-11-13', 'SA6979', 5, 'V2R', '1_4', 'u151042949947', 't111117151042949977', 'failure', '08:44:59', '1510429499', '11/11/17', 1600, '', '', '', '', 0, 0, ''),
('admin', '2017-11-13', 'SA6979', 5, 'V2R', '1_4', 'u151042955187', 't111117151042955116', 'failure', '08:45:51', '1510429551', '11/11/17', 1600, 're', '', 'lname', 'female', 3535, 3, 'we@SDJ.COM'),
('admin', '2017-11-14', 'ju2253', 4, '2', '1_4', 'u151042664827', 't111117151042664853', 'failure', '07:57:28', '1510426648', '11/11/17', 450, '', '', '', '', 0, 0, ''),
('admin', '2017-11-14', 'ju2253', 4, '9', '3_5', 'u151042667521', 't111117151042667521', 'failure', '07:57:55', '1510426675', '11/11/17', 450, '', '', '', '', 0, 0, ''),
('admin', '2017-11-14', 'SA6979', 6, '2R', '2_4', 'u151042972271', 't111117151042972297', 'failure', '08:48:42', '1510429722', '11/11/17', 250, 'SKJBJ', '', 'lname', 'male', 3454, 21, 'S@gmaj.com'),
('admin', '2017-11-14', 'SA6979', 5, 'V2R', '1_4', 'u151055872962', 't131117151055872918', 'failure', '08:38:49', '1510558729', '13/11/17', 1600, 'Kadakj`', '', 'lname', 'male', 2147483647, 21, 'kkaushiksubudhi@gmail.com'),
('admin', '2017-11-14', 'SA6979', 5, 'V2R', '1_4', 'u151055893941', 't131117151055893941', 'success', '08:42:19', '1510558939', '13/11/17', 1600, '', '', '', '', 0, 0, ''),
('admin', '2017-11-15', 'ju2253', 4, '12', '4_5', 'u151042708774', 't111117151042708799', 'failure', '08:04:47', '1510427087', '11/11/17', 450, '', '', '', '', 0, 0, ''),
('admin', '2017-11-15', 'SA6979', 6, '1R', '2_5', 'u151043283153', 't111117151043283151', 'failure', '09:40:31', '1510432831', '11/11/17', 1000, 'dsf', '', 'lname', 'male', 245645456, 21, 'sg@gm.co'),
('admin', '2017-11-15', 'SA6979', 5, '2R', '2_4', 'u151042710346', 't111117151042710365', 'failure', '08:05:03', '1510427103', '11/11/17', 1500, '', '', '', '', 0, 0, ''),
('admin', '2017-11-15', 'SA6979', 6, '2R', '2_4', 'u151043283153', 't111117151043283151', 'failure', '09:40:31', '1510432831', '11/11/17', 1000, 'dsf', '', 'lname', 'male', 245645456, 21, 'sg@gm.co'),
('admin', '2017-11-15', 'SA6979', 6, '3R', '3_5', 'u151043283153', 't111117151043283151', 'failure', '09:40:31', '1510432831', '11/11/17', 1000, 'dsf', '', 'lname', 'male', 245645456, 21, 'sg@gm.co'),
('admin', '2017-11-15', 'SA6979', 6, '4R', '3_4', 'u151043283153', 't111117151043283151', 'failure', '09:40:31', '1510432831', '11/11/17', 1000, 'dsf', '', 'lname', 'male', 245645456, 21, 'sg@gm.co'),
('admin', '2017-11-15', 'SA6979', 10, '5R', '4_5', 'u151043288593', 't111117151043288521', 'success', '09:41:25', '1510432885', '11/11/17', 250, 'sd', '', 'lname', 'female', 4464684, 2, 'kkaushiksubudhi@gmail.com'),
('admin', '2017-11-15', 'SA6979', 5, '7R', '5_5', 'u151042683147', 't111117151042683195', 'failure', '08:00:31', '1510426831', '11/11/17', 1500, '', '', '', '', 0, 0, ''),
('admin', '2017-11-15', 'SA6979', 5, 'V1R', '1_5', 'u151047745043', 't121117151047745063', 'failure', '10:04:10', '1510477450', '12/11/17', 1600, 'SSaru', '', 'lname', 'male', 76876864, 21, 'kkaushiksubudhi@gmail.com'),
('admin', '2017-11-15', 'SA6979', 5, 'V2R', '1_4', 'u151044006175', 't111117151044006132', 'success', '11:41:01', '1510440061', '11/11/17', 1600, 'Kaushik', '', 'lname', 'male', 86582018, 21, 'kkaushiksubudhi@gmail.com'),
('admin', '2017-11-16', 'SA6979', 5, '2R', '2_4', 'u151048371259', 't121117151048371276', 'failure', '11:48:32', '1510483712', '12/11/17', 1500, 'tjkj`', '', 'lname', 'male', 2147483647, 22, 'kgk@gm.cc'),
('admin', '2017-11-16', 'SA6979', 5, 'V2R', '1_4', 'u151048348312', 't121117151048348326', 'failure', '11:44:43', '1510483483', '12/11/17', 1600, '', '', '', '', 0, 0, ''),
('admin', '2017-12-10', 'SA6979', 10, '1R', '2_5', 'u151272480452', 't081217151272480454', 'success', '10:20:04', '1512724804', '08/12/17', 2500, '', '', '', '', 0, 0, 'kkaushiksubudhi@gmail.com'),
('admin', '2017-12-10', 'SA6979', 10, '2R', '2_4', 'u151272480452', 't081217151272480454', 'success', '10:20:04', '1512724804', '08/12/17', 2500, '', '', '', '', 0, 0, 'kkaushiksubudhi@gmail.com'),
('admin', '2017-12-10', 'SA6979', 10, 'V1R', '1_5', 'u151272480452', 't081217151272480454', 'success', '10:20:04', '1512724804', '08/12/17', 2500, '', '', '', '', 0, 0, 'kkaushiksubudhi@gmail.com'),
('admin', '2017-12-10', 'SA6979', 10, 'V2R', '1_4', 'u151272480452', 't081217151272480454', 'success', '10:20:04', '1512724804', '08/12/17', 2500, '', '', '', '', 0, 0, 'kkaushiksubudhi@gmail.com'),
('admin', '2017-12-10', 'SA6979', 10, 'V2R', '1_4', 'u151284324819', 't091217151284324877', 'success', '07:14:08', '1512843248', '09/12/17', 1000, '', '', '', '', 0, 0, 'domeprince@gmail.com'),
('admin', '2017-12-29', 'SA6979', 10, 'V1R', '1_5', 'u151291883750', 't101217151291883724', 'failure', '04:13:57', '1512918837', '10/12/17', 2000, '', '', '', '', 0, 0, ''),
('admin', '2017-12-29', 'SA6979', 10, 'V2R', '1_4', 'u151291883750', 't101217151291883724', 'failure', '04:13:57', '1512918837', '10/12/17', 2000, '', '', '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `bus_info`
--

CREATE TABLE `bus_info` (
  `bid` varchar(255) NOT NULL,
  `aid` varchar(255) NOT NULL,
  `busname` varchar(255) NOT NULL,
  `busnumber` varchar(255) NOT NULL,
  `phno` varchar(11) NOT NULL,
  `layout` varchar(255) NOT NULL,
  `seatcapacity` int(11) NOT NULL,
  `sleepercapcity` int(11) DEFAULT NULL,
  `bus_type` varchar(255) NOT NULL,
  `ac` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_info`
--

INSERT INTO `bus_info` (`bid`, `aid`, `busname`, `busnumber`, `phno`, `layout`, `seatcapacity`, `sleepercapcity`, `bus_type`, `ac`) VALUES
('Bi7627', 'admin1', 'Binay Travels', 'Od-15 f-2080', '7817817815', '22VL', 45, NULL, 'SEMI-SLEEPER', 'A/C'),
('gg4377', 'b415022', 'ggg', 'dxed232323', '878789774', '22VS', 41, NULL, 'SEMI-SLEEPER', 'A/C'),
('ju2253', 'admin', 'jubula BC', 'od-15-s-2080', '7894342969', '12NVS', 32, NULL, 'SLEEPER', 'NON-A/C'),
('Jy6661', 'jyoti', 'My Jyoti', 'OD-07-F7645', '8658208215', '22NVL', 41, NULL, 'SLEEPER', 'A/C'),
('My8454', 'admin', 'My-Jyoti', 'OD-14-N-1465', '1144556699', '22VL', 45, NULL, 'SEMI-SLEEPER', 'A/C'),
('Pr1567', 'admin1', 'Pradhan Bus', 'OD-07-E-7654', '9040888404', '12NVL', 35, NULL, 'SLEEPER', 'A/C'),
('Pr4571', 'admin1', 'Pradhan Bus', 'OD-07-F-7956', '9040888404', '12VL', 32, NULL, 'SLEEPER', 'A/C'),
('SA6979', 'admin', 'SARALA BUS', 'OD-07-F-6969', '8658208215', '22VL', 41, NULL, 'SLEEPER', 'A/C');

-- --------------------------------------------------------

--
-- Table structure for table `cancellation`
--

CREATE TABLE `cancellation` (
  `a_date` date NOT NULL,
  `transactionid` varchar(255) NOT NULL,
  `cancel_date` date NOT NULL,
  `cancel_time` text NOT NULL,
  `refund_status` varchar(255) NOT NULL,
  `refund_amount` varchar(255) NOT NULL,
  `refund_date` date NOT NULL,
  `bid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancellation`
--

INSERT INTO `cancellation` (`a_date`, `transactionid`, `cancel_date`, `cancel_time`, `refund_status`, `refund_amount`, `refund_date`, `bid`) VALUES
('2017-12-10', 't111117151043288521', '2017-12-10', '', 'Success', '600', '2017-12-11', '');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `rid` int(11) NOT NULL,
  `aid` text NOT NULL,
  `bid` varchar(255) NOT NULL,
  `b_start` varchar(255) NOT NULL,
  `end_to` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `vip_amount` int(11) DEFAULT NULL,
  `arrival` varchar(255) NOT NULL,
  `departure` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`rid`, `aid`, `bid`, `b_start`, `end_to`, `amount`, `vip_amount`, `arrival`, `departure`) VALUES
(10, 'admin', 'SA6979', 'BHUBANESWAR', 'BERHAMPUR', 250, 1000, '17:00', '22:00');

-- --------------------------------------------------------

--
-- Table structure for table `seat_avaibility`
--

CREATE TABLE `seat_avaibility` (
  `bid` varchar(255) NOT NULL,
  `a_date` date NOT NULL,
  `totalseats` int(11) NOT NULL,
  `seatsleft` int(11) NOT NULL,
  `totalsleeper` int(11) NOT NULL,
  `sleeperleft` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat_avaibility`
--

INSERT INTO `seat_avaibility` (`bid`, `a_date`, `totalseats`, `seatsleft`, `totalsleeper`, `sleeperleft`) VALUES
('ju2253', '2017-10-27', 32, 32, 0, 0),
('ju2253', '2017-10-28', 32, 32, 0, 0),
('ju2253', '2017-10-29', 32, 32, 0, 0),
('ju2253', '2017-10-31', 32, 32, 0, 0),
('ju2253', '2017-11-12', 32, 32, 0, 0),
('ju2253', '2017-11-13', 32, 32, 0, 0),
('ju2253', '2017-11-14', 32, 30, 0, 0),
('ju2253', '2017-11-15', 32, 31, 0, 0),
('Jy6661', '2017-12-12', 41, 41, 0, 0),
('My8454', '0000-00-00', 45, 45, 0, 0),
('My8454', '2017-10-27', 45, 45, 0, 0),
('My8454', '2017-10-28', 45, 45, 0, 0),
('My8454', '2017-10-29', 45, 44, 0, 0),
('My8454', '2017-10-30', 45, 45, 0, 0),
('My8454', '2017-10-31', 45, 45, 0, 0),
('My8454', '2017-11-02', 45, 45, 0, 0),
('My8454', '2017-11-03', 45, 45, 0, 0),
('My8454', '2017-11-04', 45, 45, 0, 0),
('My8454', '2017-11-11', 45, 45, 0, 0),
('My8454', '2017-11-13', 45, 45, 0, 0),
('My8454', '2017-11-14', 45, 45, 0, 0),
('My8454', '2017-11-15', 45, 45, 0, 0),
('My8454', '2017-11-16', 45, 45, 0, 0),
('My8454', '2017-11-17', 45, 45, 0, 0),
('My8454', '2017-11-18', 45, 45, 0, 0),
('My8454', '2017-11-22', 45, 45, 0, 0),
('My8454', '2017-11-24', 45, 45, 0, 0),
('My8454', '2017-11-26', 45, 45, 0, 0),
('My8454', '2017-11-28', 45, 45, 0, 0),
('My8454', '2017-12-01', 45, 45, 0, 0),
('My8454', '2017-12-02', 45, 45, 0, 0),
('My8454', '2017-12-03', 45, 45, 0, 0),
('My8454', '2017-12-08', 45, 45, 0, 0),
('My8454', '2017-12-09', 45, 45, 0, 0),
('My8454', '2017-12-23', 45, 45, 0, 0),
('Pr1567', '2017-10-29', 35, 32, 0, 0),
('Pr1567', '2017-10-31', 35, 32, 0, 0),
('Pr4571', '0000-00-00', 32, 30, 0, 0),
('Pr4571', '2017-10-29', 32, 30, 0, 0),
('Pr4571', '2017-10-30', 32, 30, 0, 0),
('Pr4571', '2017-10-31', 32, 30, 0, 0),
('Pr4571', '2017-11-01', 32, 32, 0, 0),
('Pr4571', '2017-11-03', 32, 32, 0, 0),
('Pr4571', '2017-11-11', 32, 32, 0, 0),
('Pr4571', '2017-11-13', 32, 32, 0, 0),
('Pr4571', '2017-11-14', 32, 32, 0, 0),
('Pr4571', '2017-11-15', 32, 32, 0, 0),
('Pr4571', '2017-11-23', 32, 32, 0, 0),
('Pr4571', '2017-12-09', 32, 32, 0, 0),
('SA6979', '0000-00-00', 41, 41, 0, 0),
('SA6979', '2017-10-27', 41, 41, 0, 0),
('SA6979', '2017-10-28', 41, 41, 0, 0),
('SA6979', '2017-10-29', 41, 33, 0, 0),
('SA6979', '2017-10-30', 41, 33, 0, 0),
('SA6979', '2017-10-31', 41, 35, 0, 0),
('SA6979', '2017-11-01', 41, 41, 0, 0),
('SA6979', '2017-11-02', 41, 41, 0, 0),
('SA6979', '2017-11-03', 41, 41, 0, 0),
('SA6979', '2017-11-04', 41, 38, 0, 0),
('SA6979', '2017-11-11', 41, 41, 0, 0),
('SA6979', '2017-11-13', 41, 41, 0, 0),
('SA6979', '2017-11-14', 41, 38, 0, 0),
('SA6979', '2017-11-15', 41, 32, 0, 0),
('SA6979', '2017-11-16', 41, 39, 0, 0),
('SA6979', '2017-11-17', 41, 41, 0, 0),
('SA6979', '2017-11-18', 41, 41, 0, 0),
('SA6979', '2017-11-22', 41, 41, 0, 0),
('SA6979', '2017-11-23', 41, 41, 0, 0),
('SA6979', '2017-11-24', 41, 41, 0, 0),
('SA6979', '2017-11-26', 41, 41, 0, 0),
('SA6979', '2017-11-28', 41, 41, 0, 0),
('SA6979', '2017-12-01', 41, 41, 0, 0),
('SA6979', '2017-12-02', 41, 41, 0, 0),
('SA6979', '2017-12-03', 41, 41, 0, 0),
('SA6979', '2017-12-08', 41, 41, 0, 0),
('SA6979', '2017-12-09', 41, 41, 0, 0),
('SA6979', '2017-12-11', 41, 36, 0, 0),
('SA6979', '2017-12-12', 41, 41, 0, 0),
('SA6979', '2017-12-13', 41, 41, 0, 0),
('SA6979', '2017-12-23', 41, 41, 0, 0),
('SA6979', '2017-12-29', 41, 39, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `uid` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `phno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`uid`, `fname`, `mname`, `lname`, `phno`, `email`, `password`) VALUES
('1', 'kaushik', '', 'subudhi', '8658208215', 'kk@gmail.com', '12345'),
('k1', 'kaushik', '', 'subudhi', '8658208215', 'kk@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `blocking`
--
ALTER TABLE `blocking`
  ADD PRIMARY KEY (`bid`,`seat_loc`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`aid`,`a_date`,`bid`,`seatno`,`uid`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `bus_info`
--
ALTER TABLE `bus_info`
  ADD PRIMARY KEY (`bid`,`aid`),
  ADD KEY `aid` (`aid`);

--
-- Indexes for table `cancellation`
--
ALTER TABLE `cancellation`
  ADD PRIMARY KEY (`transactionid`,`a_date`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`rid`,`bid`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `seat_avaibility`
--
ALTER TABLE `seat_avaibility`
  ADD PRIMARY KEY (`bid`,`a_date`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blocking`
--
ALTER TABLE `blocking`
  ADD CONSTRAINT `blocking_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `bus_info` (`bid`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `admin` (`aid`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`bid`) REFERENCES `bus_info` (`bid`);

--
-- Constraints for table `bus_info`
--
ALTER TABLE `bus_info`
  ADD CONSTRAINT `bus_info_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `admin` (`aid`);

--
-- Constraints for table `route`
--
ALTER TABLE `route`
  ADD CONSTRAINT `route_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `bus_info` (`bid`);

--
-- Constraints for table `seat_avaibility`
--
ALTER TABLE `seat_avaibility`
  ADD CONSTRAINT `seat_avaibility_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `bus_info` (`bid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
