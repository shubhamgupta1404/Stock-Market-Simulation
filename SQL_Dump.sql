-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 28, 2014 at 12:12 AM
-- Server version: 5.5.34
-- PHP Version: 5.3.10-1ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `smsonline`
--
CREATE DATABASE `smsonline` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `smsonline`;

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `username` varchar(30) NOT NULL,
  `stock` varchar(30) NOT NULL,
  `rate` float NOT NULL,
  `amount` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `success` varchar(30) NOT NULL,
  `sl` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`sl`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `exchange`
--

CREATE TABLE IF NOT EXISTS `exchange` (
  `exchange` varchar(100) NOT NULL,
  `chart_interactive` text NOT NULL,
  `sensex_chart` text NOT NULL,
  `sensex` text NOT NULL,
  PRIMARY KEY (`exchange`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exchange`
--

INSERT INTO `exchange` (`exchange`, `chart_interactive`, `sensex_chart`, `sensex`) VALUES
('NSE', 'http://in.finance.yahoo.com/echarts?s=^NSEI#symbol=^nsei;range=1d;compare=;indicator=volume;charttype=area;crosshair=on;ohlcvalues=0;logscale=off;source=undefined;', 'http://ichart.finance.yahoo.com/b?s=%5ENSEI', ' '),
('NYSE', ' ', 'http://chart.finance.yahoo.com/t?s=%5eNYA&lang=en-US&region=US&width=300&height=180', ' '),
('BSE', 'http://in.finance.yahoo.com/echarts?s=^BSESN#symbol=^bsesn;range=1d;compare=;indicator=volume;charttype=area;crosshair=on;ohlcvalues=0;logscale=off;source=undefined;', 'http://chart.finance.yahoo.com/t?s=%5eBSESN&lang=en-IN&region=IN&width=300&height=180', 'http://www.bseindia.com/data/xml/sensexrss.xml');

-- --------------------------------------------------------

--
-- Table structure for table `extra`
--

CREATE TABLE IF NOT EXISTS `extra` (
  `page` varchar(50) NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`page`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extra`
--

INSERT INTO `extra` (`page`, `info`) VALUES
('contacts', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: #5e1b1f;"><strong><span style="font-size: x-large;">.</span></strong></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style="font-size: medium; font-family: helvetica;">&nbsp;&nbsp;&nbsp;</span></p>\r\n<p style="list-style-type: none;"><span style="font-size: medium; font-family: helvetica;">&nbsp;&nbsp; &nbsp;&nbsp; <strong>Gautam Bothra</strong></span></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong><span style="font-size: medium; font-family: helvetica;"><span style="font-size: medium; font-family: helvetica;">&nbsp; &nbsp; &nbsp; </span>Ashutosh Sharma</span></strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong><span style="font-size: medium; font-family: helvetica;"><span style="font-size: medium; font-family: helvetica;">&nbsp; &nbsp; &nbsp; </span>Pranjal Prabhash</span></strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style="font-size: medium; font-family: helvetica;">&nbsp;&nbsp;&nbsp;&nbsp;<em>&nbsp; For any technical query, you can write to us, </em><span style="text-decoration: underline;">acm@bits-student.org</span></span></strong></p>'),
('notices', '<p><span style="font-size: large;"><strong><span style="font-size: large;">Notices:</span></strong></span></p>\r\n<p>&nbsp;</p>\r\n<div><span style="font-size: large;">Timings and schedule for trading :</span></div>\r\n<div>&nbsp;</div>\r\n<div><strong style="font-size: large;">9 AM -3:30 PM</strong></div>\r\n<p>&nbsp;</p>\r\n<p><strong style="font-size: large;">5th March -11th March 2013</strong></p>\r\n<p>&nbsp;</p>\r\n<p><span style="font-size: large;"><em>(Excluding Saturday and Sunday)</em></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style="font-size: large;"><em>&nbsp;</em></span></p>\r\n<p><span style="font-size: large;">&nbsp;</span></p>\r\n<div><span style="font-size: large;"><strong>Top 40 % will get shortlisted for finals.</strong></span></div>\r\n<p>&nbsp;</p>'),
('rules', '<div>\r\n<p><strong>Rounds and Criteria</strong></p>\r\n<p>Every challenger is assigned Rs 1,00,000 play money in the beginning. The objective is to maximize this amount by intelligently and smartly investing in the Stock Market. Each player is pit against each other and his/her performance determines how the person is doing via-a-vis others.</p>\r\n<p><strong>Round 1:</strong> Pre APOGEE Elimination Round (throughout Feb )</p>\r\n<p>This is an online off-campus event that requires the participant to register online for the event and is provided some virtual play money. Top Rankers of the event shall be shortlisted and invited to attend the APOGEE 2013 SMS Challenge to be organized at Birla Institute of Technology and Science, Pilani in March</p>\r\n<p><strong>Round 2</strong>: in First week of March</p>\r\n<p>Through this round, players who could not get shortlisted for finals get another chance. Top 40 % to get shortlisted.</p>\r\n<p><strong>Finals</strong>: On campus APOGEE 2013 SMS Challenge</p>\r\n<p>This Round shall be held on Campus. Every participant shall be given some virtual money and he shall trade on customized stock index. The Index shall be influenced by set of Events and News Items tickering in.</p>\r\n<p>The on-campus event shall be organized on the concept of LIVE TRADING FLOOR as was prevelant before the advent of On-line technologies in the Global exchanges some decades back.</p>\r\n</div>');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `sl` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`sl`, `fname`, `lname`, `college`, `gender`, `email`, `username`, `password`) VALUES
(1, 'Pranjal', 'Prabhash', 'BITS Pilani', 'male', 'pranjal.prabhash@gmail.com', 'admin', '4627608');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE IF NOT EXISTS `sell` (
  `username` varchar(30) NOT NULL,
  `stock` varchar(30) NOT NULL,
  `rate` float NOT NULL,
  `amount` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `success` varchar(30) NOT NULL,
  `sl` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`sl`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stock_user`
--

CREATE TABLE IF NOT EXISTS `stock_user` (
  `stock` varchar(30) NOT NULL,
  `user` varchar(50) NOT NULL,
  PRIMARY KEY (`stock`,`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `daylight_savings_data` varchar(40) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`name`, `pretty_symbol_data`, `symbol_lookup_url_data`, `company_data`, `exchange_data`, `exchange_timezone_data`, `exchange_utc_offset_data`, `exchange_closing_data`, `divisor_data`, `currency_data`, `last_data`, `high_data`, `low_data`, `volume_data`, `avg_volume_data`, `market_cap_data`, `open_data`, `y_close_data`, `change_data`, `perc_change_data`, `delay_data`, `trade_timestamp_data`, `trade_date_utc_data`, `trade_time_utc_data`, `current_date_utc_data`, `current_time_utc_data`, `symbol_url_data`, `chart_url_data`, `disclaimer_url_data`, `ecn_url_data`, `isld_last_data`, `isld_trade_date_utc_data`, `isld_trade_time_utc_data`, `brut_last_data`, `brut_trade_date_utc_data`, `brut_trade_time_utc_data`, `daylight_savings_data`) VALUES
('HDFC', 'HDFC', '/finance?client=ig&q=HDFC', 'Housing Development Finance Corporation', 'NSE', '', '', '', '2', 'INR', '725.00', '733.25', '698.50', '6360989', '', '1127147.53', '700.00', '695.50', '+29.50', '4.24', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=HDFC', '/finance/chart?q=NSE:HDFC&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'HDFC'),
('CIPLA', 'CIPLA', '/finance?client=ig&q=CIPLA', 'Cipla Ltd', 'NSE', '', '', '', '2', 'INR', '417.75', '419.70', '393.00', '2873899', '', '335420.39', '397.45', '397.65', '+20.10', '5.05', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=CIPLA', '/finance/chart?q=NSE:CIPLA&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'CIPLA'),
('BHEL', 'BHEL', '/finance?client=ig&q=BHEL', 'Bharat Heavy Electricals Limited', 'NSE', '', '', '', '2', 'INR', '118.90', '120.75', '115.65', '7432063', '', '291019.64', '118.50', '117.70', '+1.20', '1.02', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=BHEL', '/finance/chart?q=NSE:BHEL&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'BHEL'),
('SBIN', 'SBIN', '/finance?client=ig&q=SBIN', 'State Bank of India', 'NSE', '', '', '', '2', 'INR', '1522.00', '1526.00', '1470.30', '2156239', '', '1041099.70', '1486.40', '1487.80', '+34.20', '2.30', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=SBIN', '/finance/chart?q=NSE:SBIN&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'SBIN'),
('HEROMOTOCO', 'HEROMOTOCO', '/finance?client=ig&q=HEROMOTOCO', 'Hero Motocorp Ltd', 'NSE', '', '', '', '2', 'INR', '2009.95', '2075.00', '1941.00', '2202945', '', '401361.88', '1971.25', '1973.30', '+36.65', '1.86', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=HEROMOTOCO', '/finance/chart?q=NSE:HEROMOTOCO&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'HEROMOTOCO'),
('INFY', 'INFY', '/finance?client=ig&q=INFY', 'Infosys Ltd ADR', 'NYSE', 'ET', '+05:00', '960', '2', 'USD', '53.97', '54.13', '53.02', '2432799', '1813', '30838.59', '53.47', '53.93', '+0.04', '0.07', '0', 'Mar 1, 2013', '20130301', '20130303', '162346', '/finance?client=ig&q=INFY', '/finance/chart?q=NYSE:INFY&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'INFY'),
('ONGC', 'ONGC', '/finance?client=ig&q=ONGC', 'Oil & Natural Gas Corporation Limited', 'NSE', '', '', '', '2', 'INR', '252.00', '255.15', '241.00', '6394037', '', '2155983.51', '250.90', '248.70', '+3.30', '1.33', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=ONGC', '/finance/chart?q=NSE:ONGC&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'ONGC'),
('RELIANCE', 'RELIANCE', '/finance?client=ig&q=RELIANCE', 'Reliance Industries Limited', 'NSE', '', '', '', '2', 'INR', '849.50', '860.00', '828.30', '4901683', '', '2744433.43', '843.80', '845.25', '+4.25', '0.50', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=RELIANCE', '/finance/chart?q=NSE:RELIANCE&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'RELIANCE'),
('HINDALCO', 'HINDALCO', '/finance?client=ig&q=HINDALCO', 'Hindalco Industries Limited', 'NSE', '', '', '', '2', 'INR', '104.50', '109.00', '101.80', '12961890', '', '189143.93', '106.40', '107.10', '-2.60', '-2.43', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=HINDALCO', '/finance/chart?q=NSE:HINDALCO&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'HINDALCO'),
('TATASTEEL', 'TATASTEEL', '/finance?client=ig&q=TATASTEEL', 'Tata Steel Limited', 'NSE', '', '', '', '2', 'INR', '271.30', '289.60', '270.00', '12193614', '', '264058.59', '280.00', '278.35', '-7.05', '-2.53', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=TATASTEEL', '/finance/chart?q=NSE:TATASTEEL&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'TATASTEEL'),
('LT', 'LT', '/finance?client=ig&q=LT', 'LAND TRANSPORTATION', 'INDEXTYO', '', '', '', '2', 'JPY', '1340.13', '1343.90', '1311.09', '0', '', '', '1311.86', '1312.72', '+27.41', '2.09', '20', 'Feb 28, 2013', '20130301', '20130303', '162346', '/finance?client=ig&q=LT', '/finance/chart?q=INDEXTYO:LT&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'LT'),
('TATAMOTORS', 'TATAMOTORS', '/finance?client=ig&q=TATAMOTORS', 'Tata Motors Limited', 'NSE', '', '', '', '2', 'INR', '298.90', '308.70', '293.50', '6378520', '', '962059.04', '308.05', '306.00', '-7.10', '-2.32', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=TATAMOTORS', '/finance/chart?q=NSE:TATAMOTORS&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'TATAMOTORS'),
('STER', 'STER', '/finance?client=ig&q=STER', 'Sterlite Industries India Limited', 'NSE', '', '', '', '2', 'INR', '90.00', '', '', '0', '', '302508.67', '', '90.30', '-0.30', '-0.33', '0', 'Aug 26, 2013', '20130826', '20130901', '090732', '/finance?client=ig&q=STER', '/finance/chart?q=NSE:STER&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'STER'),
('WIPRO', 'WIPRO', '/finance?client=ig&q=WIPRO', 'Wipro Limited', 'NSE', '', '', '', '2', 'INR', '484.00', '495.00', '468.55', '10846547', '', '1185778.08', '475.25', '473.45', '+10.55', '2.23', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=WIPRO', '/finance/chart?q=NSE:WIPRO&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'WIPRO'),
('SUNPHARMA', 'SUNPHARMA', '/finance?client=ig&q=SUNPHARMA', 'Sun Pharmaceutical Industries Limited', 'NSE', '', '', '', '2', 'INR', '522.00', '541.00', '503.00', '3273711', '', '1073500.69', '514.00', '510.65', '+11.35', '2.22', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=SUNPHARMA', '/finance/chart?q=NSE:SUNPHARMA&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'SUNPHARMA'),
('GAIL', 'GAIL', '/finance?client=ig&q=GAIL', 'GAIL (India) Limited', 'NSE', '', '', '', '2', 'INR', '294.95', '298.80', '280.00', '888590', '', '374137.42', '287.70', '288.80', '+6.15', '2.13', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=GAIL', '/finance/chart?q=NSE:GAIL&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'GAIL'),
('ICICIBANK', 'ICICIBANK', '/finance?client=ig&q=ICICIBANK', 'ICICI Bank Limited', 'NSE', '', '', '', '2', 'INR', '819.00', '827.40', '796.50', '14797397', '', '945393.07', '810.85', '807.20', '+11.80', '1.46', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=ICICIBANK', '/finance/chart?q=NSE:ICICIBANK&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'ICICIBANK'),
('JINDALSTEL', 'JINDALSTEL', '/finance?client=ig&q=JINDALSTEL', 'Jindal Steel & Power Limited', 'NSE', '', '', '', '2', 'INR', '221.05', '246.40', '217.60', '9594061', '', '206647.61', '246.00', '243.50', '-22.45', '-9.22', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=JINDALSTEL', '/finance/chart?q=NSE:JINDALSTEL&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'JINDALSTEL'),
('BHARTIARTL', 'BHARTIARTL', '/finance?client=ig&q=BHARTIARTL', 'Bharti Airtel Limited', 'NSE', '', '', '', '2', 'INR', '297.95', '302.20', '290.10', '5440350', '', '1189852.36', '302.00', '299.35', '-1.40', '-0.47', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=BHARTIARTL', '/finance/chart?q=NSE:BHARTIARTL&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'BHARTIARTL'),
('MARUTI', 'MARUTI', '/finance?client=ig&q=MARUTI', 'Maruti Suzuki India Ltd', 'NSE', '', '', '', '2', 'INR', '1248.80', '1249.00', '1225.00', '758972', '', '377237.59', '1246.00', '1250.60', '-1.80', '-0.14', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=MARUTI', '/finance/chart?q=NSE:MARUTI&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'MARUTI'),
('TCS', 'TCS', '/finance?client=ig&q=TCS', 'TECSYS Inc.', 'TSE', '', '', '', '2', 'CAD', '3.05', '3.27', '3.01', '4550', '6', '34.89', '3.27', '3.15', '-0.10', '-3.17', '15', 'Mar 1, 2013', '20130301', '20130303', '162346', '/finance?client=ig&q=TCS', '/finance/chart?q=TSE:TCS&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'TCS'),
('NTPC', 'NTPC', '/finance?client=ig&q=NTPC', 'NTPC Limited', 'NSE', '', '', '', '2', 'INR', '130.55', '131.95', '127.50', '3976338', '', '1076445.40', '129.80', '130.80', '-0.25', '-0.19', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=NTPC', '/finance/chart?q=NSE:NTPC&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'NTPC'),
('DLF', 'DLF', '/finance?client=ig&q=DLF', 'DLF Limited', 'NSE', '', '', '', '2', 'INR', '129.65', '134.75', '126.60', '8747852', '', '230837.56', '131.45', '131.40', '-1.75', '-1.33', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=DLF', '/finance/chart?q=NSE:DLF&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'DLF'),
('BAJAJ-AUTO', 'BAJAJ-AUTO', '/finance?client=ig&q=BAJAJ-AUTO', 'Bajaj Auto Ltd', 'NSE', '', '', '', '2', 'INR', '1832.00', '1850.00', '1708.25', '900898', '', '530120.38', '1740.45', '1740.45', '+91.55', '5.26', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=BAJAJ-AUTO', '/finance/chart?q=NSE:BAJAJ-AUTO&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'BAJAJ-AUTO'),
('COALINDIA', 'COALINDIA', '/finance?client=ig&q=COALINDIA', 'Coal India Limited', 'NSE', '', '', '', '2', 'INR', '254.30', '255.50', '238.20', '3474788', '', '1606251.48', '250.80', '250.30', '+4.00', '1.60', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=COALINDIA', '/finance/chart?q=NSE:COALINDIA&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'COALINDIA'),
('ITC', 'ITC', '/finance?client=ig&q=ITC', 'ITC Holdings Corp.', 'NYSE', 'ET', '+05:00', '960', '2', 'USD', '84.01', '84.81', '83.75', '365231', '256', '4389.39', '84.30', '84.52', '-0.51', '-0.60', '0', 'Mar 1, 2013', '20130301', '20130303', '162346', '/finance?client=ig&q=ITC', '/finance/chart?q=NYSE:ITC&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'false', 'ITC'),
('TATAPOWER', 'TATAPOWER', '/finance?client=ig&q=TATAPOWER', 'Tata Power Company Limited', 'NSE', '', '', '', '2', 'INR', '75.60', '76.70', '73.00', '2642357', '', '179404.26', '76.60', '76.90', '-1.30', '-1.69', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=TATAPOWER', '/finance/chart?q=NSE:TATAPOWER&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'TATAPOWER'),
('M&M', '', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('HINDUNILVR', 'HINDUNILVR', '/finance?client=ig&q=HINDUNILVR', 'Hindustan Unilever Limited', 'NSE', '', '', '', '2', 'INR', '632.50', '638.75', '600.30', '2478561', '', '1367802.07', '602.00', '607.00', '+25.50', '4.20', '0', 'Aug 30, 2013', '20130830', '20130901', '090732', '/finance?client=ig&q=HINDUNILVR', '/finance/chart?q=NSE:HINDUNILVR&tlf=12', '/help/stock_disclaimer.html', '', '', '', '', '', '', '', 'true', 'HINDUNILVR');

