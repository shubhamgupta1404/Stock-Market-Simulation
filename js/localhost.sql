-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2013 at 02:36 AM
-- Server version: 5.5.28
-- PHP Version: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sms`
--
CREATE DATABASE `sms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sms`;

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `username` varchar(30) NOT NULL,
  `stock` varchar(30) NOT NULL,
  `rate` varchar(30) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `success` varchar(30) NOT NULL,
  `sl` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`username`, `stock`, `rate`, `amount`, `time`, `success`, `sl`) VALUES
('casper', 'BHARTIARTL', '330.60', '10', '2013-02-05 17:46:26', '1', 1),
('casper', 'BHARTIARTL', '200', '10', '2013-02-05 17:52:57', '1', 2),
('casper', 'INFY', '52.52', '60', '2013-02-05 18:06:11', '1', 4),
('casper', 'ACI', '6.22', '400', '2013-02-05 18:08:01', '1', 5),
('casper', 'ITC', '81.81', '78', '2013-02-05 18:08:36', '1', 6),
('casper', 'LNT', '46.00', '50', '2013-02-05 18:08:49', '1', 7),
('casper', 'NOK', '3.91', '800', '2013-02-05 18:08:59', '1', 8),
('casper', 'ITC', '81.81', '80', '2013-02-05 18:09:11', '1', 9),
('casper', 'PBR', '16.86', '600', '2013-02-05 18:09:21', '1', 10),
('casper', 'INFY', '52.52', '600', '2013-02-05 18:09:32', '1', 11),
('casper', 'BAC', '11.84', '100', '2013-02-05 18:16:23', '1', 12),
('casper', 'ACI', '6.25', '300', '2013-02-05 18:20:32', '1', 13);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `sl` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `college` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`sl`, `fname`, `lname`, `college`, `gender`, `email`, `username`, `password`) VALUES
(1, '', '', 0, '', '', '', ''),
(1, '1', '1', 1, '1', '1', '1', '1'),
(1, 'Pranjal', 'Prabhash', 0, 'Male', 'pranjal.prabhash@gmail.com', 'casper', 'pranjal'),
(1, 'fname', 'lname', 0, 'male', 'pranjal.pra', 'pranjal', 'prabhash');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE IF NOT EXISTS `sell` (
  `username` varchar(30) NOT NULL,
  `stock` varchar(30) NOT NULL,
  `rate` varchar(30) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `success` varchar(30) NOT NULL,
  `sl` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`username`, `stock`, `rate`, `amount`, `time`, `success`, `sl`) VALUES
('casper', 'BHARTIARTL', '180', '2', '2013-02-05 17:47:15', '1', 1),
('casper', 'BHARTIARTL', '330.60', '3', '2013-02-05 17:49:41', '1', 2),
('casper', 'BHARTIARTL', '400', '4', '2013-02-05 17:54:05', '1', 3),
('casper', 'ACI', '6.23', '50', '2013-02-05 18:12:33', '1', 4),
('casper', 'ACI', '6.25', '300', '2013-02-05 18:15:31', '1', 5),
('casper', 'INFY', '52.52', '50', '2013-02-05 18:17:06', '1', 6);

-- --------------------------------------------------------

--
-- Table structure for table `stock_user`
--

CREATE TABLE IF NOT EXISTS `stock_user` (
  `stock` varchar(30) NOT NULL,
  `user` varchar(50) NOT NULL,
  PRIMARY KEY (`stock`,`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_user`
--

INSERT INTO `stock_user` (`stock`, `user`) VALUES
('BAC', 'casper'),
('INFY', 'casper'),
('LNT', 'casper'),
('NOK', 'casper');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE IF NOT EXISTS `stocks` (
  `name` varchar(10) NOT NULL,
  `pretty_symbol_data` varchar(40) NOT NULL,
  `symbol_lookup_url_data` varchar(100) NOT NULL,
  `company_data` varchar(40) NOT NULL DEFAULT '',
  `exchange_data` varchar(40) NOT NULL DEFAULT ' ',
  `exchange_timezone_data` varchar(40) NOT NULL,
  `exchange_utc_offset_data` varchar(40) NOT NULL,
  `exchange_closing_data` varchar(40) NOT NULL,
  `divisor_data` varchar(40) NOT NULL,
  `currency_data` varchar(40) NOT NULL,
  `last_data` varchar(40) NOT NULL,
  `high_data` varchar(40) NOT NULL,
  `low_data` varchar(40) NOT NULL,
  `volume_data` varchar(40) NOT NULL,
  `avg_volume_data` varchar(40) NOT NULL,
  `market_cap_data` varchar(40) NOT NULL,
  `open_data` varchar(40) NOT NULL,
  `y_close_data` varchar(40) NOT NULL,
  `change_data` varchar(40) NOT NULL,
  `perc_change_data` varchar(40) NOT NULL,
  `delay_data` varchar(40) NOT NULL,
  `trade_timestamp_data` varchar(40) NOT NULL,
  `trade_date_utc_data` varchar(40) NOT NULL,
  `trade_time_utc_data` varchar(40) NOT NULL,
  `current_date_utc_data` varchar(40) NOT NULL,
  `current_time_utc_data` varchar(40) NOT NULL,
  `symbol_url_data` varchar(40) NOT NULL,
  `chart_url_data` varchar(40) NOT NULL,
  `disclaimer_url_data` varchar(40) NOT NULL,
  `ecn_url_data` varchar(40) NOT NULL,
  `isld_last_data` varchar(40) NOT NULL,
  `isld_trade_date_utc_data` varchar(40) NOT NULL,
  `isld_trade_time_utc_data` varchar(40) NOT NULL,
  `brut_last_data` varchar(40) NOT NULL,
  `brut_trade_date_utc_data` varchar(40) NOT NULL,
  `brut_trade_time_utc_data` varchar(40) NOT NULL,
  `daylight_savings_data` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`name`, `pretty_symbol_data`, `symbol_lookup_url_data`, `company_data`, `exchange_data`, `exchange_timezone_data`, `exchange_utc_offset_data`, `exchange_closing_data`, `divisor_data`, `currency_data`, `last_data`, `high_data`, `low_data`, `volume_data`, `avg_volume_data`, `market_cap_data`, `open_data`, `y_close_data`, `change_data`, `perc_change_data`, `delay_data`, `trade_timestamp_data`, `trade_date_utc_data`, `trade_time_utc_data`, `current_date_utc_data`, `current_time_utc_data`, `symbol_url_data`, `chart_url_data`, `disclaimer_url_data`, `ecn_url_data`, `isld_last_data`, `isld_trade_date_utc_data`, `isld_trade_time_utc_data`, `brut_last_data`, `brut_trade_date_utc_data`, `brut_trade_time_utc_data`, `daylight_savings_data`) VALUES
('HDFC', 'HDFC', '/finance?client=ig&q=HDFC', 'Housing Development Finance Corporation', 'NSE', '', '', '', '2', 'INR', '797.40', '800.90', '791.50', '1755998', '', '1228780.98', '791.55', '798.25', '-0.85', '-0.11', '0', '10 hours ago', '20130205', '20130205', '210608', '/finance?client=ig&q=HDFC', '/finance/chart?q=NSE:HDFC&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'HDFC'),
('HDFCBANK', 'HDFCBANK', '/finance?client=ig&q=HDFCBANK', 'HDFC Bank Limited', 'NSE', '', '', '', '2', 'INR', '644.15', '647.20', '636.35', '1865005', '', '1525389.42', '636.35', '646.90', '-2.75', '-0.43', '0', '10 hours ago', '20130205', '20130205', '210608', '/finance?client=ig&q=HDFCBANK', '/finance/chart?q=NSE:HDFCBANK&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'HDFCBANK'),
('CIPLA', 'CIPLA', '/finance?client=ig&q=CIPLA', 'Cipla Ltd', 'NSE', '', '', '', '2', 'INR', '407.30', '409.00', '398.60', '2468796', '', '327029.85', '402.95', '403.45', '+3.85', '0.95', '0', '10 hours ago', '20130205', '20130205', '210608', '/finance?client=ig&q=CIPLA', '/finance/chart?q=NSE:CIPLA&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'CIPLA'),
('BHEL', 'BHEL', '/finance?client=ig&q=BHEL', 'Bharat Heavy Electricals Limited', 'NSE', '', '', '', '2', 'INR', '211.40', '215.40', '210.70', '4654612', '', '517422.62', '215.40', '219.05', '-7.65', '-3.49', '0', '10 hours ago', '20130205', '20130205', '210608', '/finance?client=ig&q=BHEL', '/finance/chart?q=NSE:BHEL&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'BHEL'),
('SBI', 'SBI', '/finance?client=ig&q=SBI', 'Western Asset Intermediate Muni Fund Inc', 'NYSEAMEX', '', '', '', '2', 'USD', '10.66', '10.68', '10.64', '12528', '18', '149.01', '10.67', '10.61', '+0.05', '0.47', '0', '39 minutes ago', '20130205', '20130205', '210608', '/finance?client=ig&q=SBI', '/finance/chart?q=NYSEAMEX:SBI&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'SBI'),
('HEROMOTOCO', 'HEROMOTOCO', '/finance?client=ig&q=HEROMOTOCO', 'Hero Motocorp Ltd', 'NSE', '', '', '', '2', 'INR', '1791.65', '1812.00', '1781.40', '401852', '', '357770.11', '1812.00', '1817.80', '-26.15', '-1.44', '0', '10 hours ago', '20130205', '20130205', '210608', '/finance?client=ig&q=HEROMOTOCO', '/finance/chart?q=NSE:HEROMOTOCO&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'HEROMOTOCO'),
('INFY', 'INFY', '/finance?client=ig&q=INFY', 'Infosys Ltd ADR', 'NYSE', 'ET', '+05:00', '960', '2', 'USD', '52.60', '52.72', '52.17', '1786327', '2408', '30055.77', '52.42', '51.91', '+0.69', '1.33', '0', '5 minutes ago', '20130205', '20130205', '210608', '/finance?client=ig&q=INFY', '/finance/chart?q=NYSE:INFY&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'INFY'),
('ONGC', 'ONGC', '/finance?client=ig&q=ONGC', 'Oil & Natural Gas Corporation Limited', 'NSE', '', '', '', '2', 'INR', '325.70', '328.20', '323.60', '3151895', '', '2786523.23', '324.90', '325.75', '-0.05', '-0.02', '0', '10 hours ago', '20130205', '20130205', '210608', '/finance?client=ig&q=ONGC', '/finance/chart?q=NSE:ONGC&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'ONGC'),
('RIL', 'RIL', '/finance?client=ig&q=RIL', '', 'UNKNOWN EXCHANGE', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '31 Dec 1969', '', '20130205', '210608', '/finance?client=ig&q=RIL', '/images/no_chart.gif', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'RIL'),
('TATAPOWER', 'TATAPOWER', '/finance?client=ig&q=TATAPOWER', 'Tata Power Company Limited', 'NSE', '', '', '', '2', 'INR', '98.65', '101.45', '98.30', '3160620', '', '234103.59', '99.05', '100.30', '-1.65', '-1.65', '0', '10 hours ago', '20130205', '20130205', '210608', '/finance?client=ig&q=TATAPOWER', '/finance/chart?q=NSE:TATAPOWER&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'TATAPOWER'),
('HINDALCO', 'HINDALCO', '/finance?client=ig&q=HINDALCO', 'Hindalco Industries Limited', 'NSE', '', '', '', '2', 'INR', '113.50', '114.40', '111.65', '5971025', '', '217304.72', '112.00', '113.20', '+0.30', '0.27', '0', '10 hours ago', '20130205', '20130205', '210608', '/finance?client=ig&q=HINDALCO', '/finance/chart?q=NSE:HINDALCO&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'HINDALCO'),
('TATASTL', 'TATASTL', '/finance?client=ig&q=TATASTL', '', 'UNKNOWN EXCHANGE', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '31 Dec 1969', '', '20130205', '210608', '/finance?client=ig&q=TATASTL', '/images/no_chart.gif', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'TATASTL'),
('LNT', 'LNT', '/finance?client=ig&q=LNT', 'Alliant Energy Corporation', 'NYSE', 'ET', '+05:00', '960', '2', 'USD', '45.97', '46.17', '45.83', '392806', '465', '5102.09', '45.83', '45.81', '+0.16', '0.35', '0', '2 minutes ago', '20130205', '20130205', '210608', '/finance?client=ig&q=LNT', '/finance/chart?q=NYSE:LNT&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'LNT'),
('MNM', 'MNM', '/finance?client=ig&q=MNM', 'Magellan Minerals Ltd.', 'CVE', '', '', '', '2', 'CAD', '0.20', '0.20', '0.20', '62000', '89', '22.11', '0.20', '0.19', '+0.01', '5.26', '15', '1 hour ago', '20130205', '20130205', '210608', '/finance?client=ig&q=MNM', '/finance/chart?q=CVE:MNM&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'MNM'),
('TATAMOTORS', 'TATAMOTORS', '/finance?client=ig&q=TATAMOTORS', 'Tata Motors Limited', 'NSE', '', '', '', '2', 'INR', '287.20', '291.35', '285.00', '6213248', '', '916079.13', '289.00', '292.00', '-4.80', '-1.64', '0', '10 hours ago', '20130205', '20130205', '210608', '/finance?client=ig&q=TATAMOTORS', '/finance/chart?q=NSE:TATAMOTORS&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'TATAMOTORS'),
('HUL', 'HUL', '/finance?client=ig&q=HUL', '', 'ETR', '', '', '', '2', 'EUR', '14.00', '', '', '0', '', '47.77', '', '14.00', '', '', '15', '25 May 2011', '20110525', '20130205', '210608', '/finance?client=ig&q=HUL', '/finance/chart?q=ETR:HUL&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'HUL'),
('ITC', 'ITC', '/finance?client=ig&q=ITC', 'ITC Holdings Corp.', 'NYSE', 'ET', '+05:00', '960', '2', 'USD', '81.70', '82.35', '81.52', '161174', '280', '4210.04', '81.65', '81.25', '+0.45', '0.55', '0', '3 minutes ago', '20130205', '20130205', '210608', '/finance?client=ig&q=ITC', '/finance/chart?q=NYSE:ITC&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'ITC'),
('DLF', 'DLF', '/finance?client=ig&q=DLF', 'DLF Limited', 'NSE', '', '', '', '2', 'INR', '272.95', '275.40', '265.95', '9891040', '', '463623.04', '268.70', '270.95', '+2.00', '0.74', '0', '10 hours ago', '20130205', '20130205', '210608', '/finance?client=ig&q=DLF', '/finance/chart?q=NSE:DLF&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'DLF'),
('JINDAL', 'JINDAL', '/finance?client=ig&q=JINDAL', '', 'UNKNOWN EXCHANGE', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '31 Dec 1969', '', '20130205', '210608', '/finance?client=ig&q=JINDAL', '/images/no_chart.gif', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'JINDAL'),
('SUNPHARMA', 'SUNPHARMA', '/finance?client=ig&q=SUNPHARMA', 'Sun Pharmaceutical Industries Limited', 'NSE', '', '', '', '2', 'INR', '749.50', '752.00', '730.85', '2160002', '', '778602.09', '735.00', '719.70', '+29.80', '4.14', '0', '10 hours ago', '20130205', '20130205', '210608', '/finance?client=ig&q=SUNPHARMA', '/finance/chart?q=NSE:SUNPHARMA&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'SUNPHARMA'),
('GAIL', 'GAIL', '/finance?client=ig&q=GAIL', 'GAIL (India) Limited', 'NSE', '', '', '', '2', 'INR', '344.90', '346.45', '339.80', '1558848', '', '437497.84', '339.80', '339.80', '+5.10', '1.50', '0', '10 hours ago', '20130205', '20130205', '210608', '/finance?client=ig&q=GAIL', '/finance/chart?q=NSE:GAIL&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'GAIL'),
('ICICIBANK', 'ICICIBANK', '/finance?client=ig&q=ICICIBANK', 'ICICI Bank Limited', 'NSE', '', '', '', '2', 'INR', '1166.05', '1179.30', '1162.05', '2256104', '', '1344809.05', '1166.00', '1181.75', '-15.70', '-1.33', '0', '10 hours ago', '20130205', '20130205', '210608', '/finance?client=ig&q=ICICIBANK', '/finance/chart?q=NSE:ICICIBANK&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'ICICIBANK'),
('WIPRO', 'WIPRO', '/finance?client=ig&q=WIPRO', 'Wipro Limited', 'NSE', '', '', '', '2', 'INR', '407.00', '407.95', '402.60', '800826', '', '996219.45', '406.00', '408.10', '-1.10', '-0.27', '0', '10 hours ago', '20130205', '20130205', '210608', '/finance?client=ig&q=WIPRO', '/finance/chart?q=NSE:WIPRO&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'WIPRO'),
('BHARTIARTL', 'BHARTIARTL', '/finance?client=ig&q=BHARTIARTL', 'Bharti Airtel Limited', 'NSE', '', '', '', '2', 'INR', '324.75', '333.20', '322.85', '6294423', '', '1233247.89', '329.55', '331.05', '-6.30', '-1.90', '0', '10 hours ago', '20130205', '20130205', '210608', '/finance?client=ig&q=BHARTIARTL', '/finance/chart?q=NSE:BHARTIARTL&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'BHARTIARTL'),
('MARUTI', 'MARUTI', '/finance?client=ig&q=MARUTI', 'Maruti Suzuki India Ltd', 'NSE', '', '', '', '2', 'INR', '1600.35', '1610.50', '1590.00', '491977', '', '462357.20', '1593.00', '1599.40', '+0.95', '0.06', '0', '10 hours ago', '20130205', '20130205', '210608', '/finance?client=ig&q=MARUTI', '/finance/chart?q=NSE:MARUTI&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'MARUTI'),
('TCS', 'TCS', '/finance?client=ig&q=TCS', 'TECSYS Inc.', 'TSE', '', '', '', '2', 'CAD', '3.40', '3.60', '3.40', '7450', '10', '38.90', '3.51', '3.41', '-0.01', '-0.29', '15', '17 minutes ago', '20130205', '20130205', '210608', '/finance?client=ig&q=TCS', '/finance/chart?q=TSE:TCS&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'TCS'),
('NTPC', 'NTPC', '/finance?client=ig&q=NTPC', 'NTPC Limited', 'NSE', '', '', '', '2', 'INR', '155.45', '157.70', '154.00', '4038691', '', '1281757.41', '154.15', '155.55', '-0.10', '-0.06', '0', '10 hours ago', '20130205', '20130205', '210608', '/finance?client=ig&q=NTPC', '/finance/chart?q=NSE:NTPC&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'NTPC'),
('STERLITE', 'STERLITE', '/finance?client=ig&q=STERLITE', '', 'UNKNOWN EXCHANGE', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '31 Dec 1969', '', '20130205', '210608', '/finance?client=ig&q=STERLITE', '/images/no_chart.gif', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'STERLITE'),
('BAJAJAUT', 'BAJAJAUT', '/finance?client=ig&q=BAJAJAUT', '', 'UNKNOWN EXCHANGE', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '31 Dec 1969', '', '20130205', '210608', '/finance?client=ig&q=BAJAJAUT', '/images/no_chart.gif', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'BAJAJAUT'),
('COALINDIA', 'COALINDIA', '/finance?client=ig&q=COALINDIA', 'Coal India Limited', 'NSE', '', '', '', '2', 'INR', '349.40', '353.00', '345.25', '1840821', '', '2206937.68', '347.20', '350.55', '-1.15', '-0.33', '0', '10 hours ago', '20130205', '20130205', '210608', '/finance?client=ig&q=COALINDIA', '/finance/chart?q=NSE:COALINDIA&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'COALINDIA'),
('BAC', 'BAC', '/finance?client=ig&q=BAC', 'Bank of America Corp', 'NYSE', 'ET', '+05:00', '960', '2', 'USD', '11.88', '11.98', '11.56', '165350749', '159454', '128045.77', '11.59', '11.48', '+0.40', '3.48', '0', '5 minutes ago', '20130205', '20130205', '210608', '/finance?client=ig&q=BAC', '/finance/chart?q=NYSE:BAC&tlf=12', '/help/stock_disclaimer.html', '', '11.90', '20130204', '210329', '', '', '', 'false', 'BAC'),
('PBR', 'PBR', '/finance?client=ig&q=PBR', 'Petroleo Brasileiro Petrobras SA (ADR)', 'NYSE', 'ET', '+05:00', '960', '2', 'USD', '16.60', '17.20', '16.56', '63427530', '13525', '108269.32', '17.17', '18.03', '-1.43', '-7.93', '0', '5 minutes ago', '20130205', '20130205', '210608', '/finance?client=ig&q=PBR', '/finance/chart?q=NYSE:PBR&tlf=12', '/help/stock_disclaimer.html', '', '16.60', '20130204', '210128', '', '', '', 'false', 'PBR'),
('PBRA', 'PBRA', '/finance?client=ig&q=PBRA', '', 'UNKNOWN EXCHANGE', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '31 Dec 1969', '', '20130205', '210608', '/finance?client=ig&q=PBRA', '/images/no_chart.gif', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'PBRA'),
('NOK', 'NOK', '/finance?client=ig&q=NOK', 'Nokia Corporation (ADR)', 'NYSE', 'ET', '+05:00', '960', '2', 'USD', '3.95', '3.95', '3.85', '38510841', '68903', '14792.57', '3.86', '3.81', '+0.14', '3.67', '0', '5 minutes ago', '20130205', '20130205', '210608', '/finance?client=ig&q=NOK', '/finance/chart?q=NYSE:NOK&tlf=12', '/help/stock_disclaimer.html', '', '3.96', '20130204', '210208', '', '', '', 'false', 'NOK'),
('ACI', 'ACI', '/finance?client=ig&q=ACI', 'Arch Coal Inc', 'NYSE', 'ET', '+05:00', '960', '2', 'USD', '6.04', '6.71', '6.02', '33552504', '10248', '1282.15', '6.61', '6.93', '-0.89', '-12.84', '0', '4 minutes ago', '20130205', '20130205', '210608', '/finance?client=ig&q=ACI', '/finance/chart?q=NYSE:ACI&tlf=12', '/help/stock_disclaimer.html', '', '6.03', '20130204', '210305', '', '', '', 'false', 'ACI'),
('IUM', 'IUM', '/finance?client=ig&q=IUM', '', 'UNKNOWN EXCHANGE', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '31 Dec 1969', '', '20130205', '210608', '/finance?client=ig&q=IUM', '/images/no_chart.gif', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'IUM');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
