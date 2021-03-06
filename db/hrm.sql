-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 03, 2013 at 10:45 AM
-- Server version: 5.5.32-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `employee` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `punch_in` time NOT NULL,
  `punch_out` time NOT NULL,
  `note` text NOT NULL,
  `update_by` int(10) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE IF NOT EXISTS `tbl_company` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `taxID` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(5) NOT NULL,
  `country` varchar(255) NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`id`, `name`, `taxID`, `phone`, `fax`, `email`, `address1`, `address2`, `city`, `state`, `zip`, `country`, `note`) VALUES
(1, 'PT Gunung Pantara Barisan', '123', '+62 61-80017320', '+62 61-6627578', 'info@gunungpantara.com', 'Jl. Williem Iskandar', 'Komp. MMTC Blok A No. 17-18', 'Medan', 'Sumatera Utara', 20222, 'Indonesia', 'Semen Pantara');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE IF NOT EXISTS `tbl_department` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(20) NOT NULL,
  `citizen_id` varchar(16) NOT NULL,
  `driver_license` varchar(20) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middle` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `marital_status` tinyint(1) NOT NULL,
  `placeofbirth` varchar(255) NOT NULL,
  `dateofbirth` date NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `ethnic` varchar(255) NOT NULL,
  `photograph` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employee_id` (`employee_id`,`citizen_id`,`driver_license`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `employee_id`, `citizen_id`, `driver_license`, `firstname`, `middle`, `lastname`, `gender`, `marital_status`, `placeofbirth`, `dateofbirth`, `nationality`, `ethnic`, `photograph`) VALUES
(1, '1107.1047', '1212022608850003', '', 'Samson', 'AE', 'Sinaga', 1, 1, 'Tigaraja', '1985-08-26', 'Indonesia', '', ''),
(2, '1002.1026', '1002.1026', '', 'IDWAN', '', 'NASUTION', 1, 1, 'Medan', '1984-06-01', 'Indonesia', '', ''),
(3, '1004.1024', '1004.1024', '', 'SRI ', '', 'YANI', 0, 0, 'Malaysia', '1981-06-20', 'Indonesia', '', ''),
(4, '1012.1031', '1012.1031', '', 'LIAUW', 'TJHUI', 'LIEM', 0, 1, 'Singkawang', '1971-11-12', 'Indonesia', '', ''),
(5, '1101.1032', '1101.1032', '', 'SUGIYATI', '', 'SUGIYATI', 0, 1, 'Jakarta', '1986-12-30', 'Indonesia', '', ''),
(6, '1103.1034', '1103.1034', '', 'CHAIRUL', '', 'ANWAR', 0, 1, 'Medan', '1980-03-14', 'Indonesia', '', ''),
(7, '1104.1043', '1104.1043', '', 'REWINTONI', '', 'SIANTURI', 1, 1, 'Medan', '1987-11-11', 'Indonesia', '', ''),
(8, '1105.1039', '1105.1039', '', 'PARISAL', '', 'DALIMUNTHE', 1, 1, 'Tanjung Balai', '1981-05-06', 'Indonesia', '', ''),
(9, '1107.1049', '1107.1049', '', 'RENOVARIA', '', 'DAMANIK', 0, 0, 'Parapat', '1984-04-02', 'Indonesia', '', ''),
(10, '1108.1052', '1108.1052', '', 'EDWARD', '', 'SIRAIT', 1, 0, 'Medan', '1986-02-10', 'Indonesia', '', ''),
(11, '1108.1053', '1108.1053', '', 'DESLI', '', 'FRANKI', 1, 1, 'Manado', '1971-06-28', 'Indonesia', '', ''),
(12, '1205.1055', '1205.1055', '', 'SURYANITA', '', 'Mentari', 0, 0, 'Medan', '1987-10-04', 'Indonesia', '', ''),
(13, '1205.1056', '1205.1056', '', 'BAGASTAR', '', 'NAINGGOLAN', 1, 1, 'Menda', '1971-06-15', 'Indonesia', '', ''),
(14, '1205.1057', '1205.1057', '', 'DANI', 'RIVAI', 'BATUBARA', 1, 1, 'Medan', '1981-03-09', 'Indonesia', '', ''),
(15, '1205.1058', '1205.1058', '', 'NENNY', 'FRIDA', 'R', 0, 1, 'Medan', '1979-06-26', 'Indonesia', '', ''),
(16, '1205.1059', '1205.1059', '', 'DEWI', '', 'RIBKA', 0, 0, 'Medan', '1988-01-16', 'Indonesia', '', ''),
(17, '1205.1061', '1205.1061', '', 'PASTA', '', 'DELIMA', 0, 0, 'Medan', '1988-12-20', 'Indonesia', '', ''),
(18, '1208.1063', '1208.1063', '', 'SAFRAN', '', 'S', 1, 1, 'Medan', '1978-01-02', 'Indonesia', '', ''),
(19, '1210.1066', '1210.1066', '', 'VICTOR', '', 'SIAHAAN', 1, 0, 'Medan', '1987-09-03', 'Indonesia', '', ''),
(20, '1211.1067', '1211.1067', '', 'HORAS', 'HENRY', 'SIAGIAN', 1, 0, 'Medan', '1985-11-06', 'Indonesia', '', ''),
(21, '1302.1069', '1302.1069', '', 'ANGGRIANI', '', 'A', 0, 0, 'Medan', '1986-12-17', 'Indonesia', '', ''),
(22, '1007.2020', '1007.2020', '', 'M RAJO', '', 'NASUTION', 1, 1, 'Medan', '1971-08-08', 'Indonesia', '', ''),
(23, '1105.1040', '1105.1040', '', 'ABDUL', '', 'KADIR', 1, 1, 'Batubara', '1976-02-10', 'Indonesia', '', ''),
(24, '1205.1060', '1205.1060', '', 'GOHI', 'PARULIAN', 'PANJAITAN', 1, 1, 'Batubara', '1976-07-26', 'Indonesia', '', ''),
(25, '1303.1070', '1303.1070', '', 'HENDRA', '', 'GUNAWAN', 1, 0, 'Medan', '1990-01-07', 'Indonesia', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employmentContact`
--

CREATE TABLE IF NOT EXISTS `tbl_employmentContact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_id` int(10) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(5) NOT NULL,
  `country` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `office_phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `othere_email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `emp_id` (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employmentContract`
--

CREATE TABLE IF NOT EXISTS `tbl_employmentContract` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `employee` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `details` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employee` (`employee`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employmentJob`
--

CREATE TABLE IF NOT EXISTS `tbl_employmentJob` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `employee` int(10) NOT NULL,
  `job_id` int(10) NOT NULL,
  `status_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `joined_date` date NOT NULL,
  `department` int(10) NOT NULL,
  `location` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employee` (`employee`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employmentSalary`
--

CREATE TABLE IF NOT EXISTS `tbl_employmentSalary` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `employee` int(10) NOT NULL,
  `basic_salary` double NOT NULL,
  `dearness_allowance` double NOT NULL,
  `office_allowance` double NOT NULL,
  `conveyance_allowance` double NOT NULL,
  `other_allowance` double NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employmentStatus`
--

CREATE TABLE IF NOT EXISTS `tbl_employmentStatus` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job`
--

CREATE TABLE IF NOT EXISTS `tbl_job` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `specification` varchar(255) NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_job`
--

INSERT INTO `tbl_job` (`id`, `title`, `description`, `specification`, `note`) VALUES
(1, 'Cheif Executive Officer', 'Chief Operating Office. The lader and head of the organization', '', ''),
(2, 'Accountant Manager', 'Company budgets and expenditures', '', ''),
(3, 'HR Manager', 'Deals with the labour force in the organization', '', ''),
(4, 'Purchasing Manager', 'Deals with the need and supply chain in the organization', '', ''),
(5, 'Sales Manager', 'Sales Director', '', ''),
(6, 'IT Manager', 'Information Technology Manager', '', ''),
(7, 'Accountant Supervisor', '', '', ''),
(8, 'HR Admin', '', '', ''),
(9, 'Assistance Purchasing Manager', '', 'panduan-instalasi-nixsms-center.pdf', ''),
(10, 'IT Supervisor', '', 'panduan-instalasi-nixsms-center.pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobCategory`
--

CREATE TABLE IF NOT EXISTS `tbl_jobCategory` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_jobCategory`
--

INSERT INTO `tbl_jobCategory` (`id`, `name`, `detail`) VALUES
(1, 'Craft Workers', ''),
(2, 'Laborers and Helpers', ''),
(3, 'Office and Clerical Workers', ''),
(4, 'Officials and Managers', ''),
(5, 'Operatives', ''),
(6, 'Professionals', ''),
(7, 'Sales Workers', ''),
(8, 'Service Workers', ''),
(9, 'Technical Officer', ''),
(10, 'Technicians', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kpi`
--

CREATE TABLE IF NOT EXISTS `tbl_kpi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `job_id` int(10) NOT NULL,
  `kpi` text NOT NULL,
  `weight` int(3) NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_kpi`
--

INSERT INTO `tbl_kpi` (`id`, `job_id`, `kpi`, `weight`, `note`) VALUES
(3, 10, 'Computer Skills', 70, ''),
(4, 10, 'Decision Making & Problem Solving', 30, ''),
(5, 3, 'Computer Skills', 20, ''),
(6, 3, 'Conflict Management', 80, ''),
(7, 1, 'Computer Skills', 20, 'Computer Skills'),
(8, 1, 'Conflict Management', 80, 'Conflict Management');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kpiResult`
--

CREATE TABLE IF NOT EXISTS `tbl_kpiResult` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `review_id` int(10) NOT NULL,
  `kpi_id` int(10) NOT NULL,
  `rating` int(2) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE IF NOT EXISTS `tbl_location` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `zip` int(5) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `notes` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE IF NOT EXISTS `tbl_review` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `employee` int(10) NOT NULL,
  `periode` varchar(23) NOT NULL,
  `due_date` date NOT NULL,
  `reviewer` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`id`, `employee`, `periode`, `due_date`, `reviewer`, `status`) VALUES
(1, 3, '2013-08-21 - 2013-9-20', '2013-09-25', 13, 0),
(2, 5, '2013-08-21 - 2013-9-20', '2013-09-25', 13, 0),
(3, 12, '2013-08-21 - 2013-9-20', '2013-09-25', 23, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee` int(10) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` char(80) NOT NULL,
  `role` enum('admin','superuser','user') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `employee`, `email`, `password`, `role`) VALUES
(1, 0, 'samson@sinaga.or.id', 'dacabc58debbad03c5ecef730d44e9ae9dc39dd8', 'admin'),
(2, 0, 'stanoto@gunungpantara.com', '352136bb622f4f88eef7a34365f2d6851a07ae19', 'superuser'),
(3, 0, 'victor.siahaan@gunungpantara.com', '6adfb183a4a2c94a2f92dab5ade762a47889a5a1', 'superuser'),
(4, 0, 'anton_hrd@gunungpantara.com', '14deb5e5e417133e888bf47bb6a3555c9bb7d81c', 'superuser'),
(5, 13, 'bagastar.nainggolan@gunungpantara.com', 'f89abb040d6c7a355b5dd97a5df9ffc709ed93e2', 'superuser');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
