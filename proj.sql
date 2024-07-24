-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 09, 2021 at 06:00 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `acc_no` varchar(12) NOT NULL,
  `acc_type` varchar(15) DEFAULT NULL,
  `balance` decimal(10,0) DEFAULT NULL,
  `ifsc` varchar(10) DEFAULT NULL,
  `cust_id` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`acc_no`),
  KEY `fka` (`cust_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acc_no`, `acc_type`, `balance`, `ifsc`, `cust_id`) VALUES
('12345678', 'SAVINGS', '160100', 'SBI1661', 'C1'),
('22345678', 'CURRENT', '423446', 'SBI1661', 'C2'),
('32345678', 'CURRENT', '50000', 'SBI1661', 'C3'),
('42345678', 'SAVINGS', '30000', 'SBI1661', 'C4'),
('52345678', 'SAVINGS', '80000', 'SBI1661', 'C5'),
('62345678', 'CURRENT', '0', 'SBI1661', 'C6'),
('72345678', 'SAVINGS', '60000', 'SBI1661', 'C7');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

DROP TABLE IF EXISTS `card`;
CREATE TABLE IF NOT EXISTS `card` (
  `card_no` int(12) NOT NULL,
  `crd_type` varchar(15) DEFAULT NULL,
  `pin` int(4) DEFAULT NULL,
  `expr_date` date DEFAULT NULL,
  `cust_id` varchar(10) DEFAULT NULL,
  `acc_no` varchar(12) NOT NULL,
  PRIMARY KEY (`card_no`,`acc_no`),
  KEY `cf1a` (`cust_id`),
  KEY `cf2a` (`acc_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`card_no`, `crd_type`, `pin`, `expr_date`, `cust_id`, `acc_no`) VALUES
(123456, 'VISA', 1234, '2020-03-22', 'C1', '12345678'),
(223456, 'VISA', 2234, '2023-05-12', 'C2', '22345678'),
(323456, 'VISA', 3234, '2025-07-22', 'C3', '32345678'),
(423456, 'VISA', 7234, '2021-09-27', 'C4', '42345678'),
(523456, 'VISA', 5234, '2027-11-05', 'C5', '52345678'),
(623456, 'VISA', 6234, '2029-12-09', 'C6', '62345678'),
(723456, 'VISA', 7234, '2022-04-10', 'C7', '72345678');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` varchar(10) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `address` varchar(25) DEFAULT NULL,
  `phno` varchar(20) DEFAULT NULL,
  `gender` char(2) DEFAULT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `name`, `address`, `phno`, `gender`) VALUES
('C1', 'DHANUSH V', 'BANGALORE', '9113551125', 'M'),
('C2', 'CHETAN', 'BANGALORE', '9113207356', 'M'),
('C3', 'HARSHA', 'BANGALORE', '9686112344', 'M'),
('C4', 'RAHUL', 'BANGALORE', '9535652311', 'M'),
('C5', 'DARSHAN', 'BANGALORE', '9591318401', 'M'),
('C6', 'DHANUSH S', 'BANGALORE', '9731320588', 'M'),
('C7', 'POORNACHANDRA', 'BANGALORE', '7829023600', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `tra_id` int(20) NOT NULL AUTO_INCREMENT,
  `tra_type` varchar(50) DEFAULT NULL,
  `tra_status` varchar(10) DEFAULT NULL,
  `tra_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `cust_id` varchar(10) DEFAULT NULL,
  `acc_no` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`tra_id`),
  KEY `tf1a` (`cust_id`),
  KEY `tf2a` (`acc_no`)
) ENGINE=MyISAM AUTO_INCREMENT=9843831 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`tra_id`, `tra_type`, `tra_status`, `tra_time`, `cust_id`, `acc_no`) VALUES
(7161399, 'transfer 20000 to 22345678', 'success', '2019-11-29 12:43:43', 'C1', '12345678'),
(4059074, 'received 20000 from 12345678', 'success', '2019-11-29 12:43:43', 'C1', '22345678'),
(1448907, 'debit 2000', 'success', '2019-11-29 12:44:00', 'C1', '12345678'),
(5031971, 'credit 490', 'success', '2019-11-29 13:36:04', 'C2', '22345678'),
(6319067, 'credit 39000', 'success', '2019-11-29 13:36:20', 'C2', '22345678'),
(3774703, 'transfer 100000 to 12345678', 'success', '2019-11-29 13:36:50', 'C2', '22345678'),
(2435740, 'received 100000 from 22345678', 'success', '2019-11-29 13:36:50', 'C2', '12345678'),
(3751465, 'transfer 100000 to 22345678', 'success', '2019-11-29 13:44:45', 'C1', '12345678'),
(5327417, 'received 100000 from 12345678', 'success', '2019-11-29 13:44:45', 'C1', '22345678'),
(8029402, 'credit 3456', 'success', '2019-11-29 18:56:35', 'C2', '22345678'),
(7518387, 'debit 2000', 'success', '2019-11-29 18:57:10', 'C2', '22345678'),
(8728395, 'transfer 100000 to 12345678', 'success', '2019-11-29 18:58:01', 'C2', '22345678'),
(2004835, 'received 100000 from 22345678', 'success', '2019-11-29 18:58:01', 'C2', '12345678'),
(2230972, 'transfer 5000 to 22345678', 'success', '2019-11-29 22:43:51', 'C1', '12345678'),
(3436690, 'received 5000 from 12345678', 'success', '2019-11-29 22:43:51', 'C1', '22345678'),
(9843830, 'debit 500', 'success', '2019-11-29 22:45:21', 'C2', '22345678'),
(6361509, 'credit 39000', 'success', '2019-11-29 22:45:36', 'C2', '22345678'),
(6478903, 'credit 500', 'success', '2019-11-30 12:03:39', 'C1', '12345678'),
(7218925, 'debit 500', 'success', '2019-11-30 00:14:17', 'C1', '12345678'),
(4238811, 'transfer 350000 to 22345678', 'success', '2019-11-30 12:29:03', 'C1', '12345678'),
(1824614, 'received 350000 from 12345678', 'success', '2019-11-30 12:29:03', 'C1', '22345678'),
(7535172, 'debit 500', 'success', '2019-12-08 15:29:55', 'C1', '12345678'),
(4840642, 'debit 10000', 'success', '2019-12-08 15:30:10', 'C1', '12345678'),
(8591081, 'credit 1000', 'success', '2019-12-08 15:30:25', 'C1', '12345678'),
(4574646, 'credit 6000', 'success', '2019-12-08 15:31:03', 'C1', '12345678'),
(8709552, 'transfer 424446 to 22345678', 'success', '2019-12-08 15:48:31', 'C2', '22345678'),
(5538538, 'received 424446 from 22345678', 'success', '2019-12-08 15:48:31', 'C2', '22345678'),
(5768551, 'transfer 424000 to 22345678', 'success', '2019-12-08 15:49:10', 'C2', '22345678'),
(2953122, 'received 424000 from 22345678', 'success', '2019-12-08 15:49:10', 'C2', '22345678'),
(9267095, 'debit 1000', 'success', '2019-12-08 15:49:33', 'C2', '22345678'),
(2476290, 'transfer 20000 to 22345678', 'success', '2019-12-08 15:49:49', 'C2', '22345678'),
(4058999, 'received 20000 from 22345678', 'success', '2019-12-08 15:49:49', 'C2', '22345678'),
(8666445, 'transfer 90000 to 12345678', 'success', '2019-12-10 19:57:45', 'C6', '62345678'),
(3373406, 'received 90000 from 62345678', 'success', '2019-12-10 19:57:45', 'C6', '12345678'),
(2235005, 'transfer 50000 to 12345678', 'success', '2019-12-10 22:26:45', 'C3', '32345678'),
(9390533, 'received 50000 from 32345678', 'success', '2019-12-10 22:26:45', 'C3', '12345678'),
(8943700, 'debit 10000', 'success', '2019-12-11 11:04:31', 'C1', '12345678'),
(2206159, 'credit 40000', 'success', '2020-07-27 20:28:43', 'C4', '42345678'),
(7521733, 'transfer 20000 to 72345678', 'success', '2020-07-27 20:29:19', 'C4', '42345678'),
(7036834, 'received 20000 from 42345678', 'success', '2020-07-27 20:29:19', 'C4', '72345678'),
(1779004, 'debit 2000', 'success', '2021-01-16 00:46:44', 'C7', '72345678'),
(2490927, 'credit 2000', 'success', '2021-01-16 01:11:37', 'C7', '72345678');

--
-- Triggers `transaction`
--
DROP TRIGGER IF EXISTS `timeset`;
DELIMITER $$
CREATE TRIGGER `timeset` AFTER INSERT ON `transaction` FOR EACH ROW INSERT INTO TRANSACTION (tra_time)
VALUES
(CURRENT_TIMESTAMP)
$$
DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
