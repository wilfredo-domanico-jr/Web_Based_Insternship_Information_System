-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 01:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wiis`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_archive`
--

CREATE TABLE `class_archive` (
  `id` int(11) NOT NULL,
  `adviser_ID` varchar(255) NOT NULL,
  `join_code` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `schedule` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `date_left` varchar(255) DEFAULT NULL,
  `archived` int(5) DEFAULT NULL,
  `day` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_archive`
--

INSERT INTO `class_archive` (`id`, `adviser_ID`, `join_code`, `subject`, `schedule`, `section`, `date_left`, `archived`, `day`) VALUES
(11, 'ADV252149983', 'JOIN654754660', 'PRACTICUM 2', '8:00AM - 10:00AM', 'SBIT-4A', 'April 15, 2023', 0, 'Wednesday'),
(12, 'ADV252149983', 'JOIN447810543', 'Practicum 2', '10:00 PM - 3:00 PM', 'SBIT-4F', 'May 03, 2023', 1, 'Thursday');

-- --------------------------------------------------------

--
-- Table structure for table `class_folder`
--

CREATE TABLE `class_folder` (
  `id` int(11) NOT NULL,
  `folder_class` varchar(255) NOT NULL,
  `folder_name` varchar(255) NOT NULL,
  `folder_no` varchar(255) DEFAULT NULL,
  `locked` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_folder`
--

INSERT INTO `class_folder` (`id`, `folder_class`, `folder_name`, `folder_no`, `locked`) VALUES
(14, '027570302758115318135534589056645225248587050124131945811405344799266408117438135355493475', 'Memorandum Of Agreement', 'FLDR4514967054', 0),
(15, '027570302758115318135534589056645225248587050124131945811405344799266408117438135355493475', 'Samole', 'FLDR7869678596', 1),
(16, '027570302758115318135534589056645225248587050124131945811405344799266408117438135355493475', 'Samole', 'FLDR6366216245', 1),
(19, '95716943929', 'Weekly Report', 'FLDR8205806376', 0),
(20, '95716943929', 'Weekly Report', 'FLDR1185644403', 0),
(21, '95716943929', 'Endorsement Letter', 'FLDR5149514797', 0),
(22, 'C8888L2222A5555S66666S123e1798946514815560259446783622978907836171714410950358855487325431556050602940279370225036022793', 'Endorsement Letter', 'FLDR4758071496', 0),
(24, 'C8888L2222A5555S66666S123e1798027570302758115318135534589056645225248587050124131945811405344799266408117438135355493475', 'Sample Lang', 'FLDR2599578334', 1),
(25, 'C8888L2222A5555S66666S123e1798027570302758115318135534589056645225248587050124131945811405344799266408117438135355493475', 'Weekly Report', 'FLDR7374859401', 1),
(27, 'C8888L2222A5555S66666S123e1798027570302758115318135534589056645225248587050124131945811405344799266408117438135355493475', 'Endorsement Letter', 'FLDR3460202843', 0),
(28, 'SBIT-4L', 'Weekly Report', 'FLDR3388176160', 0),
(29, 'SBIT-4L', 'Memorandum Of Agreement', 'FLDR3151961395', 1);

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `code` varchar(5) NOT NULL,
  `expire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `email`, `code`, `expire`) VALUES
(32, 'wilfredo.domanico.jr@gmail.com', '13621', 1682219744),
(33, 'wilfredo.domanico.jr@gmail.com', '86934', 1682220292),
(34, 'wilfredo.domanico.jr@gmail.com', '51010', 1682220944),
(35, 'wilfredo.domanico.jr@gmail.com', '96348', 1682221323),
(36, 'wilfredo.domanico.jr@gmail.com', '94631', 1682221382),
(37, 'wilfredo.domanico.jr@gmail.com', '14568', 1682221443),
(38, 'wilfredo.domanico.jr@gmail.com', '15825', 1682226683),
(39, 'wilfredo.domanico.jr@gmail.com', '13381', 1682226900),
(40, 'wilfredo.domanico.jr@gmail.com', '80669', 1682226975),
(41, 'wilfredo.domanico.jr@gmail.com', '22508', 1682227307),
(42, 'wilfredo.domanico.jr@gmail.com', '99719', 1682227421),
(43, 'wilfredo.domanico.jr@gmail.com', '80816', 1682227514),
(44, 'wilfredo.domanico.jr@gmail.com', '95689', 1682227586),
(45, 'wilfredo.domanico.jr@gmail.com', '88389', 1682227616),
(46, 'wilfredo.domanico.jr@gmail.com', '43787', 1682227654),
(47, 'wilfredo.domanico.jr@gmail.com', '70154', 1682227724),
(48, 'wilfredo.domanico.jr@gmail.com', '80024', 1682228429),
(49, 'wilfredo.domanico.jr@gmail.com', '72525', 1682228489),
(50, 'vxi@gmail.com', '28705', 1682229056),
(51, 'wilfredo.domanico.jr@gmail.com', '88369', 1682229095),
(52, 'wilfredo.domanico.jr@gmail.com', '80072', 1682229401),
(53, 'wilfredo.domanico.jr@gmail.com', '58419', 1682229438),
(54, 'wilfredo.domanico.jr@gmail.com', '81464', 1682229464),
(55, 'wilfredo.domanico.jr@gmail.com', '40500', 1682229645),
(56, 'wilfredo.domanico.jr@gmail.com', '28469', 1682229650),
(57, 'wilfredo.domanico.jr@gmail.com', '46621', 1682229943),
(58, 'wilfredo.domanico.jr@gmail.com', '50880', 1682264739),
(59, 'wilfredo.domanico.jr@gmail.com', '78331', 1682288370),
(60, 'wilfredo.domanico.jr@gmail.com', '42710', 1682309464),
(61, 'wilfredo.domanico.jr@gmail.com', '26127', 1682326006),
(62, 'wilfredo.domanico.jr@gmail.com', '17581', 1682326093);

-- --------------------------------------------------------

--
-- Table structure for table `company_archive`
--

CREATE TABLE `company_archive` (
  `id` int(11) NOT NULL,
  `intern` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `hours` int(200) NOT NULL,
  `date_leave` varchar(255) NOT NULL,
  `date_enter` varchar(255) DEFAULT NULL,
  `com_leave` int(5) DEFAULT NULL,
  `assigned_dept` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_archive`
--

INSERT INTO `company_archive` (`id`, `intern`, `company`, `hours`, `date_leave`, `date_enter`, `com_leave`, `assigned_dept`) VALUES
(22, 'INT399588030', 'COMPCODE838270159884', 730, '', '04-24-2023', 0, NULL),
(23, 'INT004159891', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(24, 'INT609772733', 'COMPCODE838270159884', 20, '', '05-01-2023', 0, NULL),
(25, 'INT027170163', 'COMPCODE808491720429', 0, '04-24-2023', '04-24-2023', 1, NULL),
(26, 'INT027170163', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(27, 'INT031803108', 'COMPCODE808491720429', 0, '04-24-2023', '04-24-2023', 1, NULL),
(28, 'INT033244254', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(29, 'INT035178556', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(30, 'INT036281241', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(31, 'INT053958818', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(32, 'INT078913393', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(33, 'INT084599857', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(34, 'INT091507883', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(35, 'INT094487961', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(36, 'INT098717984', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(37, 'INT099949293', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(38, 'INT101610155', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(39, 'INT105543796', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(40, 'INT105669679', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(41, 'INT115285235', 'COMPCODE838270159884', 600, '', '05-05-2023', 0, NULL),
(42, 'INT121491133', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(43, 'INT166415138', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(44, 'INT168681180', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(45, 'INT172333350', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(46, 'INT172603216', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(47, 'INT177457442', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(48, 'INT242399804', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(49, 'INT293337550', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(50, 'INT259015120', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(51, 'INT301018413', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(52, 'INT341461403', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(53, 'INT365066614', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(54, 'INT485610661', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(55, 'INT516769979', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(56, 'INT530435762', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(57, 'INT595504139', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(58, 'INT695808839', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(59, 'INT722139605', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(60, 'INT838400161', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(61, 'INT793254335', 'COMPCODE838270159884', 0, '', '04-24-2023', 0, NULL),
(62, 'INT609772733', 'COMPCODE808491720429', 20, '', '05-01-2023', 0, NULL),
(63, 'INT228900607', 'COMPCODE838270159884', 640, '', '05-02-2023', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cos_dtr`
--

CREATE TABLE `cos_dtr` (
  `dtr_id` int(11) NOT NULL,
  `dtr_file` longblob NOT NULL,
  `stud_id` varchar(200) NOT NULL,
  `date_submitted` varchar(200) NOT NULL,
  `stud_company` varchar(200) NOT NULL,
  `rendered_hours` int(50) NOT NULL,
  `dtr_status` varchar(200) NOT NULL,
  `date_from` varchar(200) NOT NULL,
  `date_to` varchar(200) NOT NULL,
  `intern_absent` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cos_dtr`
--

INSERT INTO `cos_dtr` (`dtr_id`, `dtr_file`, `stud_id`, `date_submitted`, `stud_company`, `rendered_hours`, `dtr_status`, `date_from`, `date_to`, `intern_absent`) VALUES
(3, 0x66697273742d706167652e706466, 'INT170500386', '05-18-2023', 'COM36222', 24, 'Disapproved', '2023-05-18', '2023-05-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cos_internship`
--

CREATE TABLE `cos_internship` (
  `apply_id` int(11) NOT NULL,
  `company_id` varchar(255) NOT NULL,
  `date_apply` varchar(255) NOT NULL,
  `acceptance` longblob NOT NULL,
  `cos_status` varchar(255) DEFAULT NULL,
  `cancel` int(5) DEFAULT NULL,
  `intern` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cos_internship`
--

INSERT INTO `cos_internship` (`apply_id`, `company_id`, `date_apply`, `acceptance`, `cos_status`, `cancel`, `intern`) VALUES
(4, 'COM36222', '15-05-2023', 0x526573756d652e706466, 'Approved', 0, 'INT170500386');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES
('wilfredo@gmail.com', 'wilfredo@gmail.com469cd3e4aa', '2023-04-19 09:52:02'),
('wilfredo@gmail.com', 'wilfredo@gmail.comaa598f231e', '2023-04-19 09:52:36'),
('wilfredo@gmail.com', 'wilfredo@gmail.comc8a2d696be', '2023-04-19 09:52:46'),
('wilfredo@gmail.com', 'wilfredo@gmail.coma317a47574', '2023-04-19 09:52:49'),
('wilfredo@gmail.com', 'wilfredo@gmail.comc63ed29437', '2023-04-19 09:53:04'),
('wilfredo.domanico.jr@gmail.com', 'wilfredo.domanico.jr@gmail.comc5b781bd8b', '2023-04-23 08:09:04'),
('wilfredo.domanico.jr@gmail.com', 'wilfredo.domanico.jr@gmail.com161c16a0af', '2023-04-23 08:12:14'),
('wilfredo.domanico.jr@gmail.com', 'wilfredo.domanico.jr@gmail.comdd86ef9dab', '2023-04-23 08:12:48'),
('wilfredo.domanico.jr@gmail.com', 'wilfredo.domanico.jr@gmail.combcf8df77aa', '2023-04-23 08:12:50'),
('wilfredo.domanico.jr@gmail.com', 'wilfredo.domanico.jr@gmail.com2f5405654b', '2023-04-23 08:13:01'),
('wilfredo.domanico.jr@gmail.com', 'wilfredo.domanico.jr@gmail.come71429c10e', '2023-04-23 08:13:05'),
('wilfredo.domanico.jr@gmail.com', 'wilfredo.domanico.jr@gmail.com5930efda16', '2023-04-23 10:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advfiles`
--

CREATE TABLE `tbl_advfiles` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `documents` longblob NOT NULL,
  `adviser_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_advfiles`
--

INSERT INTO `tbl_advfiles` (`id`, `class`, `documents`, `adviser_ID`) VALUES
(5, 'C8888L2222A5555S66666S123e1798647151206489463427200676756252525880104779546180715928488026590869190765989420878862166314', 0x4d656d6f72616e64756d206f662041677265656d656e742e706466, 'ADV271439332'),
(6, 'C8888L2222A5555S66666S123e1798647151206489463427200676756252525880104779546180715928488026590869190765989420878862166314', 0x524553554d452e706466, 'ADV271439332');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alerts`
--

CREATE TABLE `tbl_alerts` (
  `id` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alerts`
--

INSERT INTO `tbl_alerts` (`id`, `code`, `description`, `type`) VALUES
(1, '1123', 'You have been registered successfully', 'success'),
(2, '4568', 'Unknown error occurred while performing your request', 'danger'),
(3, '0927', 'Email address is already registered', 'warning'),
(4, '0346', 'Invalid email or password', 'danger'),
(5, '9837', 'Your profile have been updated successfully', 'success'),
(6, '9564', 'Incorrect Password', 'danger'),
(7, '7777', 'Internship Post Updated!', 'primary'),
(9, '2305', 'Certicate Sent Successfully!', 'success'),
(10, '0000', 'Class Join Success!', 'success'),
(11, '0521', 'Notification Deleted Successfully!', 'success'),
(12, '7778', 'Document Request Successful', 'success'),
(13, '9367', 'Interview Set Successfully', 'success'),
(14, '0591', 'Language was deleted successfully', 'success'),
(15, '8763', 'Section Currently have adviser', 'warning'),
(16, '6734', 'Successfully Leave Class', 'success'),
(17, '9843', 'Internship advertisement posted successfully', 'success'),
(18, '1964', 'Documents Submitted Successfully!', 'success'),
(19, '1977', 'Document Request Deleted', 'success'),
(20, '9210', 'Internship Application Sent Successfully', 'success'),
(22, '9215', 'DTR APPROVED', 'success'),
(24, '0593', 'Company Joined Successfully!', 'success'),
(26, '9522', 'Disabling Account Successfull', 'success'),
(28, '2303', 'DTR SUBMITTED SUCCESSFULLY!', 'success'),
(30, '1521', 'Class Joined Successfully!', 'success'),
(31, '1177', 'Class Code does not exist!', 'danger'),
(32, '3214', 'Company Join Code Invalid', 'danger'),
(34, '2380', 'Class Join Code Invalid!', 'warning'),
(36, '7642', 'Internship Application Declined', 'danger'),
(38, '0173', 'Internship post have been deleted', 'success'),
(40, '0369', 'Job Ad has been updated successfully', 'success'),
(41, '0001', 'Announcement Successfully Posted!', 'success'),
(42, '2974', 'An error occurred while sending your message', 'danger'),
(43, '5634', 'Your message was sent successfully', 'success'),
(44, '3091', 'You have successfully changed your password', 'success'),
(45, '3591', 'An error occurred while updating your password', 'danger'),
(46, '2290', 'Your certificate size must be less or equal to <strong>1MB</strong>', 'warning'),
(47, '2490', 'Your transcript size must be less or equal to <strong>1MB</strong>', 'warning'),
(48, '5790', 'Training information was updated', 'success'),
(49, '4474', 'Request Edited ', 'primary'),
(50, '3478', 'Your image size must be less or equal to <strong>1MB</strong>', 'warning'),
(51, '6789', 'Attachment was added successfully', 'success'),
(52, '3479', 'File must be in <strong>PDF</strong> format', 'warning'),
(53, '6784', 'Attachment was deleted successfully', 'success'),
(55, '7764', 'Attachment was updated successfully', 'success'),
(56, '9555', 'DTR has been deleted', 'success'),
(57, '9517', 'Referee have been deleted', 'success'),
(58, '9550', 'Application Canceled', 'success'),
(59, '6834', 'Successfully Leave Company', 'success'),
(60, '45', 'Document Approved', 'success'),
(61, '46', 'Document Declined', 'success'),
(62, '47rcc1', 'Folder Locked', 'success'),
(63, '49rcb2', 'Folder Unlocked', 'success'),
(64, '50rbb3', 'Folder Deleted', 'success'),
(65, 'pass_Unmatched', 'Confirmation password does not match', 'danger'),
(66, 'success_chngpass', '<center>Password Changed Successfully</center>', 'success'),
(67, 'pass_recovery', 'Account Recovered Successfully!!', 'success'),
(68, 'file_over', 'File Size Over 5MB', 'warning'),
(69, '7812', 'Intern Removed', 'success'),
(70, '3291', 'Folder Created Successfully', 'success'),
(71, '3447', 'Import Successfully!', 'success'),
(72, '8521', 'Company Added Successfully', 'success'),
(73, '9447', 'Company Activated!', 'success'),
(74, '6733', 'Application Approved', 'success'),
(75, '6744', 'Application Declined', 'success'),
(76, '4414', 'DTR Disapproved!', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alerts_cross`
--

CREATE TABLE `tbl_alerts_cross` (
  `id` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alerts_cross`
--

INSERT INTO `tbl_alerts_cross` (`id`, `code`, `heading`, `description`, `type`) VALUES
(1, '9367', 'Interview Set Successfully', '', 'success'),
(1, '9367', 'Interview Set Successfully', '', 'success'),
(1, '9367', 'Interview Set Successfully', '', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcements`
--

CREATE TABLE `tbl_announcements` (
  `post_id` int(11) NOT NULL,
  `announcement_id` varchar(50) DEFAULT NULL,
  `from_id` varchar(50) DEFAULT NULL,
  `date_post` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `post_details` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_announcements`
--

INSERT INTO `tbl_announcements` (`post_id`, `announcement_id`, `from_id`, `date_post`, `class`, `post_details`) VALUES
(29, 'ANNOUNCEMENT3329978', 'ADV462336666', 'March 12, 2023', 'C8888L2222A5555S66666S123e1798481332742038352404014659457985781142066586475610979051568273447647533467388956935972421667', NULL),
(30, 'ANNOUNCEMENT5972349', 'ADV271439332', 'March 25, 2023', 'C8888L2222A5555S66666S123e1798647151206489463427200676756252525880104779546180715928488026590869190765989420878862166314', NULL),
(31, 'ANNOUNCEMENT7012935', 'ADV271439332', 'April 05, 2023', 'C8888L2222A5555S66666S123e1798647151206489463427200676756252525880104779546180715928488026590869190765989420878862166314', NULL),
(32, 'ANNOUNCEMENT0328406', 'ADV271439332', 'April 10, 2023', 'C8888L2222A5555S66666S123e1798901016377278508394861331095432764075104740965848779263658450677706856553875367535094356473', NULL),
(33, 'ANNOUNCEMENT0189219', 'ADV271439332', 'April 13, 2023', '48877296202', NULL),
(34, 'ANNOUNCEMENT7118656', 'ADV271439332', 'April 13, 2023', '48877296202', NULL),
(37, 'ANNOUNCEMENT0020270', 'ADV252149983', 'April 14, 2023', 'C8888L2222A5555S66666S123e1798379434220452023987389706643251799637437664680437227343075389979856026704260624899656500246', '<p>Date Post :Abril 11, 2023<br><br>Sa Lahat ng Studyante ng BSIT<br><br>Sa mga STUDYANTE aking PINAAALAM sa inyo na tayo ay mag MEET ngayong araw MARTES, ABRIL 11, 2023 sa ganap na 11:00 am ng UMAGA FACE to FACE sa ROOM IC206.<br><br>Inaasahan ko po ang inyong agarang tugon at pagsunod tungkol rito.<br><br>Maraming salamat po!!!!<br><br>Isagani M. Tano, PhD-ELM, DIT<br>Associate Professor I</p>'),
(38, 'ANNOUNCEMENT9290787', 'ADV252149983', 'April 14, 2023', 'C8888L2222A5555S66666S123e1798027570302758115318135534589056645225248587050124131945811405344799266408117438135355493475', '<p>Date Post :Abril 11, 2023<br><br>Sa Lahat ng Studyante ng BSIT<br><br>Sa mga STUDYANTE aking PINAAALAM sa inyo na tayo ay mag MEET ngayong araw MARTES, ABRIL 11, 2023 sa ganap na 11:00 am ng UMAGA FACE to FACE sa ROOM IC206.<br><br>Inaasahan ko po ang inyong agarang tugon at pagsunod tungkol rito.<br><br>Maraming salamat po!!!!<br><br>Isagani M. Tano, PhD-ELM, DIT<br>Associate Professor I</p>'),
(40, 'ANNOUNCEMENT0713481', 'ADV252149983', 'April 16, 2023', '95716943929', '<p>This is an Announcement</p>\r\n<p>&nbsp;</p>'),
(42, 'ANNOUNCEMENT1599811', 'ADV-774831598', 'May 11, 2023', 'SBIT-4L', '<p>THIS IS MY ANNOUNCEMET</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apply`
--

CREATE TABLE `tbl_apply` (
  `application_id` int(11) NOT NULL,
  `internship_id` varchar(255) NOT NULL,
  `resume` longblob NOT NULL,
  `member_n` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `DATE_APPLIED` varchar(255) DEFAULT NULL,
  `endorsement` longblob DEFAULT NULL,
  `memorandum` longblob DEFAULT NULL,
  `application_status` varchar(255) DEFAULT NULL,
  `cancel` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_apply`
--

INSERT INTO `tbl_apply` (`application_id`, `internship_id`, `resume`, `member_n`, `title`, `company`, `DATE_APPLIED`, `endorsement`, `memorandum`, `application_status`, `cancel`) VALUES
(90, '9620008300', 0x526573756d652e706466, 'INT399588030', 'Programmer', 'CM702821043', '24-04-2023', 0x4150504c49434154494f4e204c45545445522e706466, NULL, 'ACCEPTED', 0),
(91, '8217628045', 0x43616d5363616e6e65722030332d32322d323032332031312e32352e706466, 'INT609772733', 'Graphic Designer Intern', 'CM702821043', '27-04-2023', 0x43616d5363616e6e65722030332d32322d323032332031312e32352e706466, NULL, 'ACCEPTED', 0),
(92, '2575886545', 0x526573756d652e706466, 'INT609772733', 'Admin Staff', 'CM702821043', '30-04-2023', 0x4170706c69636174696f6e206c65747465722e706466, NULL, 'Pending', 0),
(93, '2575886545', 0x526573756d652e706466, 'INT228900607', 'Admin Staff', 'CM702821043', '02-05-2023', 0x4150504c49434154494f4e204c45545445522e706466, NULL, 'ACCEPTED', 0),
(94, '4209501276', 0x526573756d652e706466, 'INT115285235', 'Junior Programmer', 'CM702821043', '05-05-2023', 0x4150504c49434154494f4e204c45545445522e706466, NULL, 'ACCEPTED', 0),
(95, '6120713383', 0x456e646f7273656d656e74204c65747465722e706466, 'INT154740761', '51512', 'CM989639382', '11-05-2023', 0x4170706c69636174696f6e206c65747465722e706466, NULL, 'TO BE INTERVIEWED', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_certificate`
--

CREATE TABLE `tbl_certificate` (
  `certID` int(11) NOT NULL,
  `intern_Id` varchar(255) NOT NULL,
  `compAny` varchar(255) NOT NULL,
  `certFile` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_certificate`
--

INSERT INTO `tbl_certificate` (`certID`, `intern_Id`, `compAny`, `certFile`) VALUES
(11, 'INT115285235', 'CM702821043', 0x4365727469666963617465206f6620436f6d706c6574696f6e2e706466);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

CREATE TABLE `tbl_class` (
  `class_id` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `subj` varchar(50) DEFAULT NULL,
  `prof` varchar(50) DEFAULT NULL,
  `day` varchar(50) DEFAULT NULL,
  `sched` varchar(50) DEFAULT NULL,
  `school_year` varchar(50) DEFAULT NULL,
  `class_status` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_class`
--

INSERT INTO `tbl_class` (`class_id`, `course_code`, `section`, `subj`, `prof`, `day`, `sched`, `school_year`, `class_status`) VALUES
(55, 'PRC-102', 'SBIT-4G', 'Practicum 2', NULL, 'Wednesday', NULL, NULL, NULL),
(56, 'PRC102', 'SBIT-4F', 'Practicum 2', NULL, 'Thursday', NULL, NULL, NULL),
(60, 'CC101', 'SBIT-4C', 'Practicum 2', 'ADV-774831598', 'MONDAY', '8:00 AM - 12:00 PM', '2022-2023', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class_doc`
--

CREATE TABLE `tbl_class_doc` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `file` longblob NOT NULL,
  `stud_id` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `class_no` varchar(255) DEFAULT NULL,
  `folder_num` varchar(255) DEFAULT NULL,
  `date_status` varchar(50) DEFAULT NULL,
  `late` int(5) DEFAULT NULL,
  `time_submit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_class_doc`
--

INSERT INTO `tbl_class_doc` (`id`, `title`, `date`, `file`, `stud_id`, `status`, `comment`, `class_no`, `folder_num`, `date_status`, `late`, `time_submit`) VALUES
(70, '', '01-05-2023', 0x526573756d652e706466, 'INT609772733', 'Declined', '', 'C8888L2222A5555S66666S123e1798027570302758115318135534589056645225248587050124131945811405344799266408117438135355493475', 'FLDR2599578334', '01-05-2023', 0, '01:45:pm'),
(71, '', '01-05-2023', 0x4d656d6f72616e64756d206f662041677265656d656e742e706466, 'INT609772733', 'Pending', '', 'C8888L2222A5555S66666S123e1798027570302758115318135534589056645225248587050124131945811405344799266408117438135355493475', 'FLDR7374859401', NULL, 1, '01:59:pm'),
(72, '', '01-05-2023', 0x454e444f5253454d454e54204c45545445522e706466, 'INT115285235', 'Approved', '', 'C8888L2222A5555S66666S123e1798027570302758115318135534589056645225248587050124131945811405344799266408117438135355493475', 'FLDR2599578334', '01-05-2023', 0, '02:39:pm'),
(73, '', '01-05-2023', 0x454e444f5253454d454e54204c45545445522e706466, 'INT115285235', 'Pending', '', 'C8888L2222A5555S66666S123e1798027570302758115318135534589056645225248587050124131945811405344799266408117438135355493475', 'FLDR2599578334', NULL, 1, '02:42:pm'),
(74, '', '02-05-2023', 0x454e444f5253454d454e54204c45545445522e706466, 'INT228900607', 'Approved', '', 'C8888L2222A5555S66666S123e1798027570302758115318135534589056645225248587050124131945811405344799266408117438135355493475', 'FLDR3460202843', '02-05-2023', 0, '01:13:pm'),
(75, '', '05-05-2023', 0x454e444f5253454d454e54204c45545445522e706466, 'INT115285235', 'Approved', '', 'C8888L2222A5555S66666S123e1798027570302758115318135534589056645225248587050124131945811405344799266408117438135355493475', 'FLDR3460202843', '05-05-2023', 0, '01:00:am'),
(76, '', '11-05-2023', 0x456e646f7273656d656e74204c65747465722e706466, 'INT154740761', 'Approved', '', 'SBIT-4L', 'FLDR3388176160', '11-05-2023', 0, '06:07:pm'),
(77, '', '11-05-2023', 0x4d656d6f72616e64756d206f662041677265656d656e742e706466, 'INT154740761', 'Pending', '', 'SBIT-4L', 'FLDR3151961395', NULL, 1, '06:07:pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `comment_id` int(11) NOT NULL,
  `announcement_id` varchar(50) DEFAULT NULL,
  `comment_details` varchar(255) DEFAULT NULL,
  `from_id` varchar(50) DEFAULT NULL,
  `date_post` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`comment_id`, `announcement_id`, `comment_details`, `from_id`, `date_post`, `class`) VALUES
(38, 'ANNOUNCEMENT9290787', '<p>Noted po ma\'am, thankyou po</p>', 'INT229117368', 'April 14, 2023', 'C8888L2222A5555S66666S123e1798027570302758115318135534589056645225248587050124131945811405344799266408117438135355493475'),
(39, 'ANNOUNCEMENT9290787', '<p>Good morning po mam, saang classroom po ba tayo today?</p>', 'INT229117368', 'April 14, 2023', 'C8888L2222A5555S66666S123e1798027570302758115318135534589056645225248587050124131945811405344799266408117438135355493475'),
(40, 'ANNOUNCEMENT9290787', '<p>asdasd</p>', 'ADV252149983', 'April 14, 2023', 'C8888L2222A5555S66666S123e1798027570302758115318135534589056645225248587050124131945811405344799266408117438135355493475'),
(41, 'ANNOUNCEMENT9290787', '<p>asdasd</p>', 'ADV252149983', 'April 14, 2023', 'C8888L2222A5555S66666S123e1798027570302758115318135534589056645225248587050124131945811405344799266408117438135355493475'),
(42, 'ANNOUNCEMENT9290787', '<p>Thank you po!</p>', 'INT672012715', 'April 14, 2023', 'C8888L2222A5555S66666S123e1798027570302758115318135534589056645225248587050124131945811405344799266408117438135355493475'),
(43, 'ANNOUNCEMENT9290787', '<p>Thank you po!</p>', 'INT672012715', 'April 14, 2023', 'C8888L2222A5555S66666S123e1798027570302758115318135534589056645225248587050124131945811405344799266408117438135355493475'),
(47, 'ANNOUNCEMENT1599811', '<p>THIS IS ADVISER COMMENT</p>', 'ADV-774831598', 'May 11, 2023', 'SBIT-4L'),
(48, 'ANNOUNCEMENT1599811', '<p>THIS IS INTERN COMMENT</p>', 'INT154740761', 'May 11, 2023', 'SBIT-4L'),
(49, 'ANNOUNCEMENT1599811', '<p>THIS IS INTERN COMMENT</p>', 'INT154740761', 'May 11, 2023', 'SBIT-4L');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE `tbl_countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_countries`
--

INSERT INTO `tbl_countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and Miquelon'),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Republic'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, United Republic of'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and Tobago'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caicos Islands'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emirates'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States minor outlying islands'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City State'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands (British)'),
(239, 'VI', 'Virgin Islands (U.S.)'),
(240, 'WF', 'Wallis and Futuna Islands'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'ZR', 'Zaire'),
(244, 'ZM', 'Zambia'),
(245, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_day`
--

CREATE TABLE `tbl_day` (
  `id` int(11) NOT NULL,
  `day` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_day`
--

INSERT INTO `tbl_day` (`id`, `day`) VALUES
(1, 'Monday'),
(2, 'Tuesday'),
(3, 'Wednesday'),
(4, 'Thursday'),
(5, 'Friday'),
(6, 'Saturday'),
(7, 'Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `department_id` int(5) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`department_id`, `department_name`) VALUES
(1, 'Security'),
(2, 'Administration'),
(3, 'Accounting'),
(4, 'Finance'),
(5, 'Sales'),
(6, 'Research and Development'),
(7, 'IT Management'),
(8, 'Management'),
(9, 'Customer Service'),
(10, 'Customer Support'),
(11, 'Technical Support'),
(12, 'Marketing'),
(13, 'Logistics'),
(14, 'Operations Management'),
(15, 'Risk Management'),
(16, 'Planning'),
(17, 'Human Resources'),
(18, 'Production Technology'),
(19, 'Educational Technology'),
(20, 'Quality Assurance'),
(21, 'Engineering'),
(22, 'Application Development'),
(23, 'Computer Programming'),
(24, 'Company Website'),
(25, 'Database Administrator'),
(26, 'System Administration'),
(27, 'Information Systems'),
(28, 'Office of the Secretary'),
(29, 'Helpdesk'),
(30, 'Communication');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_docreq`
--

CREATE TABLE `tbl_docreq` (
  `id` int(11) NOT NULL,
  `company_id` varchar(255) NOT NULL,
  `intern_id` varchar(255) NOT NULL,
  `files` longblob NOT NULL,
  `msg` longtext DEFAULT NULL,
  `cntrl_no` varchar(50) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `rqst_date` varchar(255) DEFAULT NULL,
  `document_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_docreq`
--

INSERT INTO `tbl_docreq` (`id`, `company_id`, `intern_id`, `files`, `msg`, `cntrl_no`, `file_name`, `rqst_date`, `document_status`) VALUES
(22, 'COMPCODE838270159884', 'INT609772733', 0x43616d5363616e6e65722030332d32322d323032332031312e32352e706466, '', 'CNTRL50971', 'Certificate of Completion', 'April 27, 2023', 'Approved'),
(23, 'COMPCODE838270159884', 'INT228900607', 0x416363657074616e63656c204c65747465722e706466, '', 'CNTRL60909', 'Acceptance Letter', 'May 02, 2023', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dtr`
--

CREATE TABLE `tbl_dtr` (
  `id` int(11) NOT NULL,
  `dtr_file` longblob NOT NULL,
  `stud_id` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `stu_company` varchar(255) DEFAULT NULL,
  `rendere_hours` int(50) DEFAULT NULL,
  `dtr_status` varchar(50) DEFAULT NULL,
  `date_from` varchar(50) DEFAULT NULL,
  `date_to` varchar(50) DEFAULT NULL,
  `intern_absent` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_internship`
--

CREATE TABLE `tbl_internship` (
  `post_id` int(50) NOT NULL,
  `company` varchar(255) NOT NULL,
  `date_posted` int(255) NOT NULL,
  `closing_date` varchar(255) NOT NULL,
  `enc_id` varchar(255) NOT NULL,
  `role_title` varchar(255) NOT NULL,
  `assign_city` varchar(255) NOT NULL,
  `req_hour` int(50) NOT NULL,
  `vacant` int(50) NOT NULL,
  `responsibility` longtext NOT NULL,
  `description` longtext NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `internship_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_internship`
--

INSERT INTO `tbl_internship` (`post_id`, `company`, `date_posted`, `closing_date`, `enc_id`, `role_title`, `assign_city`, `req_hour`, `vacant`, `responsibility`, `description`, `name`, `position`, `contact`, `internship_id`) VALUES
(3, 'CM989639382', 5, '12/12/2022', '', '51512', '12512', 251, 51251, '251', '1251', '12afs', 'Afs', 1233333333, '6120713383'),
(4, 'CM446206711', 5, '12/12/2022', '', 'Asd123123', '123', 12312, 12312, '123', '123123', 'Asd', 'Asd', 1233333331, '8370244652');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_interview`
--

CREATE TABLE `tbl_interview` (
  `id` int(11) NOT NULL,
  `portal` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `interview_from` varchar(255) NOT NULL,
  `interview_to` varchar(255) NOT NULL,
  `internship_id` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `stud_id` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `certificate` longblob DEFAULT NULL,
  `msg_read` tinyint(1) DEFAULT NULL,
  `msg_delete` tinyint(1) DEFAULT NULL,
  `jn_code` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_interview`
--

INSERT INTO `tbl_interview` (`id`, `portal`, `link`, `interview_from`, `interview_to`, `internship_id`, `title`, `date`, `stud_id`, `status`, `comments`, `company`, `certificate`, `msg_read`, `msg_delete`, `jn_code`, `class`) VALUES
(465, '', '', '', '', '', 'Your Intern <strong>Wilfredo Domanico</strong> submitted a DTR!', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(466, '', '', '', '', '', 'Your Intern <strong>Wilfredo Domanico</strong> submitted a DTR!', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_other_company`
--

CREATE TABLE `tbl_other_company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_type` varchar(255) DEFAULT NULL,
  `logo` longblob DEFAULT NULL,
  `about` longtext DEFAULT NULL,
  `member_no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_other_company`
--

INSERT INTO `tbl_other_company` (`id`, `company_name`, `company_type`, `logo`, `about`, `member_no`) VALUES
(1, 'Barangay Novaliches Proper', 'Government', 0xffd8ffe000104a46494600010100000100010000ffdb00840006060606060606070706090a090a090d0c0b0b0c0d140e0f0e0f0e141f1316131316131f1b211b191b211b312622222631382f2d2f38443d3d445651567070960106060606060606070706090a090a090d0c0b0b0c0d140e0f0e0f0e141f1316131316131f1b211b191b211b312622222631382f2d2f38443d3d44565156707096ffc2001108019a02d803012100021101031101ffc4001c0001000300030101000000000000000000000102030405060708ffda0008010100000000fcd7aa6b9d26dacd526b7beb36befbea88a5316a8ac5e5a18633ae96d2f8e74a533ce0522b4a469a658e14cf288b164a10b73745ab952da693589b4ebae9b4deda6baed34c70caf7bb3b5a74b634c21a6d6562b96b34e1e36b463498ac5aacb0c2b4ac4cc24113cdde295a8b689a5b5bce97bebbdafb5a72cb1ac5d7be94998acd328aefc9a61589d34a71b099cf3a2614532c72a456255998826d3cbdd4a45d59bda2b6be96b4edaf2349b273ca9114b69aeb9a94d2f4655b6b4a56f368b674a62a649bd695c2b9655442a11137b4f33495697bcc45a6b69bed66d7e46b6d259f1a671899d77cf3ca74bd2dc8bf131b6595f4b58ad38f48ce9379ca9c7cf3cd358ac2110bdece4cda6b4b5f5be755ae69acafb6baded6a71e6210bcd70b274be9cbe463d6e38654bf235b53388c2b9c4d99d78f8d2b0288821799b72af2a9aef7cf25d5b6baada5f5e46979ac53329ac71f93c0d2f6d6faedd970b89d6639d2dae9a4444716945af5a532e3e74815222132b5b95116936d6d5caf3113bd97bdf4d34d359ad32a2cacf1db7618c7699cef8f17a4c569bd93a533c33ad27488ce98e59c422a220999bf2a954e93a6928175ecbcef69be97d54cb2d74ae74c0f77e6a7ea1f35edf95e7f8dd664d61589df3c699e75acaca659634844082626d3cda6736bdada5d5895b499b5a74b5a6fae934cafa594e3e513c8fa7fcd3f41fc37ddf43d2f0b8395e6b18c5e2b6a5299e715b594cb0c6908998026797158b4cce974c4daf694de2d75b4ba4ded69cb839db48edbeabeabccf92e479d7498ab4cf04c1652996749b4b1c71ce0912813ce8ad6656d6d694def29bcdae895afad274ded5cb8b95b9bf48e47a7fa6f63f0f9e2f81e070f26386352d6967185295b4ce7c5cf342490439cae712bdf595a6f36696b5e6d488b5f52db4b1cb3edbe99c0ed7beeff00dff1ba7f1bf23eabafc58e3852b37bce715a675ac433e3d22048490e7a995666f7b597bda6f6bde6cbc674696d358d22d9677facf7fcff009bbd37d93d3f99e8be0fd475b9e59f1b08ce744c522915ac5631c2a00490ec2298c4af6b4ce96d2fadab6b10533be9a6d3589e5fe80fb2723e5fe2fbef84f2fd1fe94e2f8cf0df38e071f3c71c691346911956d5cca63841120039d14c93369999bce9ade5368442959d77da72a72fea3d07e80e2fc5fbaf996db775f72e1eff0044fcf1f2de3e5c7cf18952ba233a9488ae5840000e5c4652bda6564e9799b5924e75b5b7d2f34a6d97ec2f73f11f94799a7abeef99e8f89d076bec3f35659d299aea56c852b46715c73ac844820e54452657b4c4969bd937988845b6dae889cfea5f76f5fe27d27e55f25fbcff0035f23d47cde3e7ded7e7b8d1484585626b5ae748a679c01240372a99b93122d65ae5d06bb5936a63f6bed3f417c87d57c576fd5bf1dfcd5cde95ea3cbf06b6c6115b5ed5a2d4ad32a4533a4480043692266605ad112b5aeb5e496b6999cebe9bebdf7ffce8fbd7cc7a6f1dd87ca73c9da747119aad70d37e675fa614a568c694ac2401035942504a645a656d2d69175e5587dc7e95ecbf2afabfb0fe57fa3f45f3ba532b72384a4566d5b5f909cadc3cb9dc2e356b5801240680226492d6899b5eda5885ef6667d13aafd67cff00877c6f6e7703a8c95519c560b695e6f23aabf27afce938522200005d00249b24b5ad37b5ad59a5b4bab0e67d6bb4ee3ee78fcc7c3f45d0745c6e2e38b0b5eb1ae7c88ca911c9e2e74a52b150000bc204c244d895a5b5a9756f36bad4b4fe9bfa17e767e99f9bf63f46f867c93d5703c1f12229ac6dc2d30e5f1676e32297c295ac00800d26a80484c26556ecf4d536b349df0dff00487db7e0bf2de57d33e69c3f41daf89fa1faff0003f38c3ade35b39ed1c7ea8e4f0dc9b75f5a4404000b90109488250b4cb5b5a6f68be9bf3bf4efd07f3a7a6f9df87d795cb8ed3ade27e84f15e5bc57032a4431d70842b1a6158880001720209250093589b5a795c7d35e5f37bffa5fdd3adf3de27e59d57071e4765cff0075f2cfd33f18f1bd5f1b1d30995f89116ca222b1100002c80212901329bd6d6b5b3b6b7ed7b9f47e9feb9f43eabcb7c0bcd70f81c077dedbabf42f9261471d6ae59c42b9cab1100001680104812496e6f1af9f77d761af23b4effd4faef65f43e573be23f24e9faceb7831f4af47d4fa4f877577e45234af1f3ad62d8c2110000120084804c4af5737b4c3b5f3eedbb8ecbd6fd23d9fa5e7f37ca7e5bebbadeb3a6dfeb3d879ce97b2f0dd3726d08e24648a7238c88400000240000959cdfa0713abe3751d8f7ddffdbfd4f1f9fdbdfa2fcf1d6c713cefbef43f31fa9fe7ef46af4dc58471a88ac444c44000000900084c5968d67b3f554ea383caf59f67eb7e55bfb7f5bb74f1e1b6eb7d9f57c4e0f6bf148f47c7e6796c94cca4422d4400042400120812916dfdaf33b1f27cad3ebbdc7e7ae3f23d1f6be87d161c7f35d971b85e87bdf8f7cf1cfbde9d4a2211084200100090048892129267b9f7bc3f1dc1f4debbf41fe7bf09973393af63cde46bd4f37b2e278efa5fc5299cb3e4e3c6084208001000240004a536b43bfec3a4f47e87ebbf31f9cdd9ec531c70cf1f5fb797d23817be385f198410400200128120004a52b5626d6f49eefe93c6f97f9ce1779e7b8f15a679e8fa57ea9fcbbf3de1e2bb91c0cea98820004000012004a5298aa6791cfefbdcfd8fe3be77a7e470b81c4e156f8e93eb7e8df37e939797a7edbc8e3d1f1f289df8c0020000012009256d214aafbcf33b6fbf798f13bf5dd2d33e3e5d7579ddf79fe2f23d47d1bdbfcfbc4f9ce17d13c3c75996998020000004809132b5e22226fa6b6e4fa4fa7fce7e97e7fa3f31d3f0f7ec395874592feb32f2f5e7702b3ef3c7edd5fb0ecbc1e0010000904848162494cad69b696df9fec7d27cf3ed1d0f49d6759d5753c18954888be50df8d7cfe93e0f822440080164120942d0bde661626d369b5ef3ccec3b0e4f98dbbdb745d570f39994a22b088a422a09941502009412424458b696b4c4da5424e3665ad9f26b2d2bc4125f49262b15810902080804a0910265694cdad69b4d688998a5622220124ac989844cc4422082404426004c12408994da499bcda5584a2265331025322299d40844100020004c1255310994da644cccc80990804a6b14a9044a2200010008484c4c2104cac99249992c0000888ad212080020000aa6422488095a484ccc894a6d10135202b581512445a420008084c4844a009992b322529949000226b5158009b0844a1242012892000266544d804da444815055150026c2a00400000009109b013200204158001210000000000004cc89000084540026000000000000026c090800454000000001ffc4001a010100030101010000000000000000000000020304010506ffda0008010210000000000000000000000000000000000000000000000000000000000000000000000e47b200000000007211eca60000000002b511edf3900000000014c7365bb5dd60000000001567cde7dbe8eab7a000000000a7253e6f3d1f42f9000000000733e2bbc6af5fada660000000010c79e4f1f47adb26000000001455e7f36f8967afb2c0000000015d1cc3e3fd07991f635d800000000729ad83cbf43466f475cc00000000e5554b261ef36ebbe6000000003347b1c508ebd96c800000000e5109772513d5a2ce800000000a20ed497354c39d0000000219e7c4bab810980000001ca21359d974000000000cdcaa72b6d000000000193917677cf8e8000000011c7ca3043d86bb3bce4800000002bc9979ccb67a7dd7200000000394e7a3cfd3761f46fd7deb9d0000000239f1e9f261bd9777a13000000039d8ca19316ecbe2fabe87919be9ed00000001546e8f912dbcf95f63d0f3bb2f6fa000000067cbba3e4dd6be6aff004a5a326fde000000057e07af7f91553dcb1baff4fb97d99000000029f13d029f1e50aadd5ef5b8efd00000000aababc6f56193257aa3e8fa928d3a00000000a33f8fe8ce35d97df83d4e8e8000000157cdcfd49f656f7ccf4aee77a0000000238fc2dbb6cbe4c1ba50ed9d0000000391f9bd3ba5668cda15d3aba9000000038f2b0e8f57b974688bbd464000000072acd9616fa9300000000011a398f75fd000000000073848000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000001ffc4001b01010002030101000000000000000000000004050203060107ffda0008010310000000000000000000000000000000000000000000000000000000000000000000000f7d620000000000f76678ebc40000000006ec677b8c5d3e0000000001272b1b387571358000000001bac6cafa1505668f0000000003ddd7165d061cdd144c4000000003d9d7ba7acca9798afc000000000375bd86dcafab397acd60000000013257472a9ba685cb556a000000001b66ecbaeb391bf8bcad56b000000003d952575d240ae91cd576b0000000032df2f4dbf43e28a9e0e200000000276dc375fe5ed4d3c6f0000000004cdde6ab79ba6aebf48000000004bdcc64f9afc8180000000006c9daf2f34b1d3e06780000000194a91a718fe63e000000000162991b547d00000000002cb66cdf13542d6f7c0000000032b7cecaf2cf81f69f419eb00000000db6f6def965e72d85562000000007b2ec6cafe8745f50d7d4e07be000000019595cc0eb2153ede879de6b5800000019799ebcedfa1a2b9b9e729bbeb0f92687be00000004df616eedf5f3fb3e89c8d27610b57127800000016b6dce6cef2be33e8daf8df2a65d35280000001bbbbe4e2f6bbef72b19f4953c8c5b2e535800000025f75ce6786ceeeeb3b3a7a0f9b44b4830c00000012b7cbfa4703aec3a1baa591c972986522280000001633fe93c2c0cb2d7161f47cb61ef9e0000000099f64e7b92d11f1d18f61cbc0f5e78000000067d0fd1791a38317174549a24e117c000000032d9f59e7a8a3c28b6303397369b0f75800000032f7aebc81c76bb6ad85b3cc7cf76e9000000032996977aabb9cd6000000000364ff6e2861780000000000cbd7988000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000003ffc4004710000103010406050905070303050000000100020311041221310513224151611032718191142042505260a1b1c1233043d1f0243353627292e14082a21534b2637390c2f1ffda0008010100013f02ff0057e1fe87c3ef69eb3c7a2bcfa3158f1f3079d555553cd57cdaf358f1e8c7a71f3aa78aaf462b1e83f795f5878fdd1f32bf7fddee861ee3e3cd63cfa71e7e6e3cfa71e7e6e3cfa7154e3554ae554411d38f3f37c7a71e7ebda7fa0e0b038516ec91032f71bc7ee7c7a0e5e778ac901544e1f9a28e237fde78fb87974b29780391c3c53db40c771143fd4dcfa61639ee686b6ae268d1cd383438806a0122bc79f7aa855aa3408d287dd382ecd7a07902fe4ef6641978aba58e731c28460470471a2d1a2ef954dfc282a3b5c86e4195fd5539b72bf2de8a3bfdc5f1fbe088f2f8af0ffb98db8ffeab38f6f468f65fb15b47b551ff000437152fec81b1fe311579f601f44235a276fe83ee9c52ba17b1ed750b4d4153d9db6c61b559db47fe2c7f50b433fece66f363be9f4567b2d3486a88d96bcbbb865f356937ed56871fe23be0ad0cd5c9abf640af69c552a54adbaebbc331c111ee378f9be3e731af91c18c6173b804dd153e7348c887f31a9f82f21b20cf481ee62b2c31412b5f1dbabc416d2a132cec6ce678c8a3da6f0191e6b5435daedf72e2b54372d98e4f703e2715a45845ae4e743f450b755149693e8ecc7fd477f43bdd08a26beae91d758333bcf209b3ead859152cd1f1ce4776af2ab2331103a577b521afc021a5e51d5b3c207628f48c33b832d3678e877d13e17d8fedacaeac79b98711dca295b346d91b9153c2d9da01c083569e0add6733b2f306db72e6aded11456784643e81147dcbaf98d63a475d634b8f068aa8f47dbdfe8322e178e43926e84ae325abc1bf9a7e8ab0c2dbf2cf2d3b40523ac1d582091dccbcfd11b3cb1b4c92318c1ecb8e6acce79696c36bb95f41eac916a210cbc09ccd39f45a2d06cfab716d584d0f256d60b459c4b19addc7b91451f73238e495e191b0b9c770566d0806d5a5d78fb0dcbc5363644dbb1b4347018745b749b2cdb11ed3fe014363b5db8896d3239acff9772b54f068efb2b2c635a73766476a2e73dc5cf712e3bca6a8dcf88df8cd398504bae89925335688db3b3545f42711dca06cb629431f8c521a577555b6cde4efc3a872fc91f73180bdc1a08c50b6b6c6cb965a0af5a570da7760e0b5d6bb648230f96471dd7a83e0ac7606d9768baf48733b9692b679347ab67ef1e9ed16200bf1b49c7ff6ff00cab15b4d9ecf6c713b779b77b517124926a4e69a2f659fcd055bb420e6168e9dd235ec77a34a6ec0ad21ad6be2999d568a5781562b531cd8a07925f8fc31523192b0b1e2a0ab568e961bce1b4ce2331da157a2bee4b5c595a66b1277924f7ab0d8c5922a7e23bae7e9d1670679ed96f70aeaea221cc2b5416865c967c1d2d4d378a715b546e74388e88ac96999b239919d8eef051ea6d3b129d54d95fdcefeae6bc8ad0c76a9cccfa846555a26baf9853d0faa9257d8ad73022b1bdd52ddc4156966a1ed7c4e371c2ac29ba524643137ace07689e0b4a5b1d0b591c79bdb5af01ee6e87835b69d61ca215ef39216abf6bf278e86e826477d023d577615a2bfec2cfcef1f8a9ecb05a6e6b995ba6a15b8fed9681c1d740e416780cca76c32a7d16fc9496ab1ce01b4589cc2ec6fb532d13d99b582613c2371f47f251e95b255c5d11638e668ad8f8a599f236d01c0fc39285daeb3cb67ccb76e3fa809cb483f586cafe3676fb9b6497c93473de3092590869fe9dfdcb426d3ed4fe01a02cd6889488ad167f4e173a8b46cdaeb1c78e2dab0f72d2f018ed264f464c7bd68675db653da8ddf04eea952ba2d2904b1c276e3391de392db85f81a108d25c5ada3b781d01c5a439a4823221616a0ec29252f103d2e639a739d46309c1b977e3f763b69ee13e4ad9acede178789a95a0b2b5ffb3ebd16dbf60d20db546307eee3c4286d0cb15aaf83fb2da31afb27fc29e18ed3118df91c411f30ac3a324b35aefb9ed2c0d3778e29ba5e4d7b1af1f677887763ff0024fd668eb7123d077885a5e36b67648ceac8dbe3bd569923d01ce6b839a6841a829c44b8d00fd65f97dc385d38383b98e91bd34492ecb5a4d37019222848c3b8d55d3be83b7cea1f5d68277dada19c580f81525b2ee91860aecd2e9fea7e4ad10476988c520c3e454d0cb6273a199b7a271f1e639ab25bdf62bac79d659cf548ddfae0a6b4b35505a6270746d945ea7b2e1754edb8f78f8ad286b6a3c68dff00c42b5b8bacba3ebfc2faf9a0d1135e8e1e6914241f32f3aedcbc6ef0dc8baac6b69913f143574dabd5e029444f0140831cea9032e9bada54c83b06253aed4ddad39faeb453ee5ba1fe7ab3c55b1ee75a647038eb5ee1e34fa2b25a05aa064a37f5b9144436a648c203da1c5ae1cc2b4e88963bc6ccebed39b0e6beda02f6ed36b8381dfdaaf5ea078dff000dead56874d33de732a490bdb136b83479e2a72fbaa7f37ebbd31a2ecae77a2dc3fa8e03a5efae146d0706d3ccc38fae98f31be378cdae04772818d92d561929fbc7569dae7d42648745db5ed77ee64cfe854b23ec16e7c831864378f30ee0992c72b1af8dc1cd3bd48c8e5149236bbb54ba1eccfea12cf884ed0937a1230fc11d136c1f875eca14ed1f6b6e7677ff006a303c6741db82b807e20e82bb96143d1cd06975683254a67d141438e3bb82ee4d153960aa5b93f76e58935cfcc173d227b87acabf7ba322d659ec327f05f203dead7656daa2a505f1d5fc9173d918b2da2b741370fb3c959ed135864c3161cc6e2a0b4456965f8ddda37856c92d3629b5b19ac721ea9caf7f950696b34dd7ac6ee792ab256901f507d92ad5a265c5d1bcc9c8e0eff2ae44096bdae14cf0c477265804dfb8b442fe4496394960b4c55bd03e9c5bb49c31c08f92a533e8a2c304d15ccd1bc53dd78d70cb76e46edc611d6589288e27bba2adbb4b98f1af40a6fc938839369e6d2b5da03d739f6f405a26f462784fb5787c8ac705a51dac95b4eaea463cc95bb928fca22709220f1cc042dfae8cc56b8cb2b99a6ca9a1313f139f55e3277f95faaa6dae68bf15d452ce2d406bd81d4c9edc1c116dd3d6ec3b8f6ab3e91b445b326d81c7ac3b0afd93488add0ef83daa6d172345e81f7d9ec9cd165391e05089ce75da76f2ed4f0371aa3d518f72b8ebb7b21cf7f62bb4cc8400a1aa601421a039dc4e0078a2d79ebb99fdc3e88c6dfe2b7cc2e05b4a7a551d2d0d39b82262dcc77f77f8f5b77f4f0c7a005600258e0981da6831c9cd4aebb14cee0c2a924f758d612691d3b82b9159b014749bde726f6056891eecdc7bce2aa7daf8a6bdec14070e1b96b2bc9077114f92a16e31f86e3d89ae6cadf985d534268373bd928eb61970ab250685596d26db11b8fd5ccd1dc54d23a4798ad315241e937f5927b6eb6e1c47f2f2e3f9270a6e586f4e717124af46bcd634c862b34e6dd34a83d9d1748cc7dc57b3c3d69b34df5e9068b3dc804d612091bb35609bc9e5a38ec3f3e4a7617c32b0665a4286192088804171a766545e4ac66333aa6a4d1bbd5a5e1983218dbdd53e25191fcbc11c770f0a2a2c464507f77c952f90460fdc78a6b84a0b5c287784f60b4b236b47da4710c78eea28e67c4f1230d1cd29cd8edf67648d3749181e1c94974935bd7c678513a8b0a8af56b8d382a00ec710b7e5dc9a2b7b0c85553a3244537e3bd0bb47549e438f9953402b97ae79f434634400ef5192c70215c6d6acc8eee1c959e5730358fa96ee774186f3af12a7b16b06c91553d9e489d75cdc510a888450753b17ef698ed8c8fe6ac4f73b5b518b450f6956b83ed6fb77e638ad16f2df2884ee35fa2d223ab3b3b1fda9c77f155ae2be2aa47af360b73a3be7d15e88a2d65fa38602b4e28b48fd61d15cd041353028c28af37163884d73b7acf1576a16906bd974de370e0427221147a012324cb49b8e11105f9e3bd4acd5d9017ed114bdccb94673731de81ed4c2d9d8f89fc139a5b507763d3c7b3ee802e341eb46b6a470de9d18dc50d93bdae19108ed8269cdc06ffe60aef0210c0e40abbbe987682806903ad5f826a8e9bc80a2b3bdf8b5ed23b53227b736a01043056c875b0c8de58768479e69cab4dd5e213db4cb245322924346349565b1084df97adc382b69bd06adbe91c3b9581a0bad4e39065d51cc766419b4f8298b5efad361f88e554f8a952dc47cbb7ee30a0cebe69bb46d33dfeb31ba9fe543a9901a96debde9758a7c3748ff00c5c8de6383836ef052c7471206c9151dfd0d09aa20d7ba841af2cd59ac4da1d7599a386d54ad559998ea9a39e48dbecacce61f3515aa095db0ec7c13de684b3adc38ad6df8c380c48ad132d8c9d8ea037c66cde9c0071a65b966b24e6e7f1de846dbd432b532c6df6ea39554766637793f00ad536b24ab7aadd98ff35133c9ecaeae61ae73bb68aa5ad6533a94d7de6d5bbb31daab8de66055d0fc6302f7b3f92770ad789f5f5135b5c463d99a157e6eaf3cd1684ea92a85051004ed1a0e2991f9386b991d09e3d6568d2823175b8bbe01493c8f77dac86b5eaa8decae20b7fa7fca89f6563af564af35e5317b6bca23fe2052b6f9134476f884eb96901d93b8a735f1bb1c0f146e3e94143f045ce88876f09ec8670d75c1c415ab9227de06adf8a9de5ed7358703991bd596ca6f6b5ffed1c15b5f72cce1ed6ca761b34c85135d74d560f179bdfc95ea603c78a70120afa48e1ebd6e2426b2261da9b11e8d37f7212804654fd669f50280100f2c4aae3514c135c1e0de6f7a0cc2b45a36cdac7eb5c3659f172d2d68d534301db77c0266cf69069c93baddb42821826dc39b88eeaa6c509fc4aaa860a01441c14bb5bf9a6b4d552a314d7dd142ec0274ae98dc6f805159dacfb495d97804c78923bcd1418d15ba5124f41d58fe2ee90f2c382241c907d13f8faf627b1af6970c38b734db04336367b631c37b5fb0e09d619a3a970d9e2da3fe48df6e785478abc9bb4dc9603b1592e46d6d9c759acbceed2b481d65b5d5ec1d8130de99a7894ef47c3c1333ad562af2bf95509b9ad6f30bca06188c1795bfd168faa6c933faf976d17d837ad337b1b8a36d8a3c238cfc94b6b9a63c3800a593c9acd1c4dfde53f4513b865f3f307407511a6ef5f0b54cdfc435e3bd1b74ee175e4387f30aabeca8bd1051eaf20c20f1bc9bb34aad18e2e75a9eecf0aab6c645a0f1abbfe6a218dfdc01f92b956ecbeb4e58a0d3e890ee4af1150abc15e5555555544ae3d166650890b6b4ea8fa9e4a50f7938d6b99e2aed10bb5c47d15c27aa30445150abb53811d89cd2dc37f4530afb811160e23e2b669d6af2a2d1aefb4987167c8ad2115fbafe1827546580c47fb96ead28eadde18e611fde6e1bfb149fbbbce61ad4b6bcd89c2e38b7874555557a46fec415906b1e013cd79241abc5832cd5ae2baecc22b0e934c15e207593585f5c42cbd7e104d7ab24e23b444e395687b0ab4d0b4f14f18eca92232169bdb23729994daa1a9f057b59042c35371e6bc687ff00c46199e5cf736ed4d71458373ebd8aad1ccaaf4114cfa38a00920051bb574c70199e257fd5a42da55493990d4acf784d6c779bd6777276d9b91c3b55e64a8b45dba4a7ecd253b3f34744dad836aceff105490363c1eeba7b0a31b657d1ae68f927b5ec716bc5084057cc771e3ebc082b3cc278457acdc1c9ec009c31aaf27735f7a277fb5345a8622a47851175afd997e28b2738ea1ddb749f9ad4da1d9b0d39e016a78caceedaf922d60deafd3aa3bfa591ba434685b118201afb4efa04e7deece81d85442f5e0c14a664e2541a3e69af178d5c5edbdd425796d8346b7570c65dfcc067dea7d3524b83585a3fa91b5925a5cd3fdcb59c2f5381c420ea14c9a2b646c82d146c8d148a6ffeafe5f2571d1c8f63c16b867c88528f4b8e7daa9803d15c29ebd0f505a754fbc01e638a91c26889849bd4d9fc9436938eb0569bc669804c361f51f552436c656e5295f822db4d0baebc8e35c13efef88e58609d7f1153f4574f0284721c98ef05e4d2efa34732b570b3126ffc0274d517777018044939f982d9286ddeb0dd7b7292d53ca1b7df965cbb3874bf3e5e613e55057f1a11fdf1fe6df922f26a0f2f8266d35ede551ddd0db3031037b69cc2f1c280d3152410450e2fa90edde91de3b138de395397ad68a8a8a8a8a89ad41b4dd556775c76c1cf36394d65121d6c468fde135ce89f7a3c0ef6f2fc936df649db47de89d4ed4ed6c06afbb247ed0c0a75a9c055d0d47b40fcd1b4d3f0b0ed46d67734236a90a2f7939f994f3cd4f98d7161ab4e3d030e8f2f9043186c947b5b4c2a0e09f23e4a5f79776faeeaaf21273426196084801ab5c41e453a689e3ed33dc423435a1cf7a6cf34229534f826cb1498e2d7ff002e09ac8dc7aec3cbaaa588827648fd72571f4ad3e2b119b4aaf25795e550aa161ee6d554f407b8645135dc8b8ba9535579dc4ad63fdb2afbbda3e3ee8d153a29f7145454545454ff00e56bffc4002d10000103020503030501010101000000000100112131f010415161817191a120b1c13050d1e1f140607080ffda0008010100013f210a176c1fd2171f40709ba60d6cbb7ba8d906dbc0bbd15d02d29e0ddea9869dc130dbc5decae8146dee8f0bb7b617409a944c365d976f0a36f06ef54db05c0f6bbd15d0224453c5dee8b23f451846de146de10e3c5deca351d8280d4f7bbd546ca36f6bbd1326baa3d0986d842ede8ecbb623a2e11451c0ff00807d104c494e7553aa9dd3e87b273ae00919a07514090cc7b27a5ddea9e873dd3fe8f8bd139ccc784e75eff37aa0fbf794e867e0febb709e048be29f089dfbddca2fbfca24ebdaee139d7b274cf74ed4f7bb74353b90289bbf84e75539bf37729cea549cfb7c5e89c36784e4efd4ff003172a77ef29c1a4f17709f74e75bbf94fa8a04ea78bb842eef247a8e539bf9bd539dfba113767c5e89daa739f9bb94fa8d79fea7c84f17708d2a888ceefe54ee813155313d9125174493ae25d4ee9cc4a76a9cea892893aa74e75ff00fa53e91e9bbbd1709abf3772af742daee16903e3dd3eddfe66e539b7ed3dddd16cdd91cfe6ee70e9870139bbb941dc19aaaa076bb85c239fcddca7dbf2810a3f1770b8099f2bbf945f75c5dfc62e6eee53f5e15dde8b80aeef54e775c76bb8c35f77f6e5135b28db5dc26d82bbbd577c78c2706f4947fc23e9c28db10d876c436c836a3c289a78377aa8b641ad85d6d938d47851a8f06e96ea2c8516d77b271a8f08f1e0a8b6516c13efec9c6a145b20d6c8b1691e05d6d946a3c280f4f06ef5448b655b02ea836a3b04e351e2f2b750e3f488c847851a8f0a2d976f09ee138891e112351d8270a106d47b271b784e269e0ddeaa2d941b0a351d8281a2bc9428d428d94610a350a1427c0ff00883eeb4c27753be37298ee9bae33ba94d84ee83efc20f6f7615e6a77e6ee54ee83efc3f8bd139b76532fe5fcdeaac97bf9428f63f8f8e14b0a796fe7c22fbf2f76513fb1d07df87bb0a77e1eec222cbdd9441dfcdd94101e3f77610bab2766c39bf9bd54ef5ddd17df87bb08bdbb29febdd94f6175315e1eec2d3f6b972f7653f355bbdfed6b2da5e8b52d99db8bd14ff5d4efe6ece00263e1eec2736ec9cefcbdd953ba639763f8bd14dbb299f97f37aab254c57cdd84c63f6a77bbf745f7e54eebbabcd4ef77eea775777a228ba9ff0018fa0026f54603d1d95e4145b2174377aa61a0f098683c5deca2c04d7177bae81e1309fd222e15e4530b64db0f09ae135b041865ec6ef5440197b2d7f8af257926e9e1374f177b2ba04007ead8ddea810060764009b7c58bd14886b90bbd110c7f411c0e010236506c0bbd145b28b62a341e146ca2bf0308d1164dea28ff008f2c3bfa420aeef55dfd05fd1dd4eeaeef4c27fb772a77f94367e3e2f4597f595cbf9bd54e9dd3fd5a75c9eec2b876473af37728f3f283efc5dc2bfe5e8af35df9376ea7fa570f761100dcfdafd96b5e6ee57755a3f1770af365d6eff29b6ee45ca8410759bfd2c9787bb08d5be957e2e501905ddcb3bbdfed3dcf046eef244a9dd774307d7cddcaeea77e2ee30d2eff00aa7fa470387050caeff9877e713fe4d3d4307fa010c946d83a1777960e3fb7729d034bbfe20d14effb517fdb95772ae2ee1164e25550e7b288bbfe28d020795df7c076bbf09dd446cc67472420dd803e794188cdd1822eff00880d84649f038098bea17136513025fb7ed06e8cd4ceff0089b37466a7bdc28d0053df9453e0026c2eef44f83e11a047d1c27f49ff001e5fe11e91d57213dd50432940ee3b27dc5ddba37213f4e172172105750b909c6a11c794da05bd4a81f0289d73c9552192b19ddd104355e8c4fb2610e86514d03d4c9f40c24a851505a9675221fd91b9f65e66c914c826dc2a5be3cae70d13ee3038bf4c5d3ff97247e85ddeaa77f50c6775777a60e67e6ee53dcad2bc5dc206e53d97f37aa04d8a069fbf17a27e9c3a26bf2f765137283efc3dd8432fdf8bd176a6ec8be8797f37aa20e6f5ddd703cdd85c7bb2d7e6ee54a3639b6df1f1c28cc1831950dda8504bf7bb2899855f4aa494001357e37fd20346673291bad52b31a0f23f6a6648b302f3b2caaf35df9bb941e2aae1eec2375646deee54ee838d78bb84f729ee6ecaef83264735df17c2e11451fb0428518328b65792bc8a8dbc2bc82716020c2c28dbc2716c9c6de1122d976f0a2d946de102229d828dbc5e56e8b5b22d6caf2516c546de142e9c6407f0730859c34e66cea80745e0bd027ef93328b2798f2457a2786dfee844dda13b133c3d87519a68b2664c2d911d3c2836116b65792bcb0ba0516ca2d9428b6579222e116c63d05147fc1dfd2f8bf55df1ef8dcaeebbad30ef77ee83eeab9f6bb85cfe15cddca9dd3989377ec81dfdd3f5bbf7c0fb9e2ee13f5f29f7eeea753cddca04d8ba7a4f67f17a2277f7647a9e6ee57753a1bbf64565a83249e135db6f0694e71e1f250dd802c5b581e47442c40151d40366b3eaa43504ba75647f890c9a408dd83fb1bb13595ad124ea9eeee8b9f753bf37728f2bba74fbaee9e98774fd53f54e8e1df0053a7ea8a3fe1cbfc8c996a9bd43a04c995ea82e062c30d8073268ebec8fa97b0dc6ac9f58cd1051ba680854208d24189edb93835246d60a687308ac756242ef1e21a0e4bf29a1fd881032231e30388fac51ff000e581fafd90575518be1d942baa74fd13ad55d53a66c9edd3cfed123f8b737e0bc04c66998dd3a401fbd514a49be493282d20272fd3494e810d61889db40328410eaa05f429f51c4b970303c89a66ba193572e16ccebdb08e235fdaec8fa5fd2ff0040ff00885303f5060cbbad30ef77eebbab8bb8c1ecddcaef83a75dd0c2e5d774fd549661d9eec2a2bdab1fd21e37c1e7990f697a0100a8424dfe0aae8cb940a0e9e2eeccecabb4423928843870800d61fd050238d91a11050e046ea935984dded01903a7753235fa7f4c26b15c2f3479e6ee7d0c8f380f41fa07fc59607ea3a053a74e9f74e13a74fbe109d7281410213dc271afb146e8a1382055341b946a2208fd73e874293605cc2290a97830096ec1ea99240435403f2533cd38b116f64e3521bf5833c327110248b392518889e41f04481b8058c519e15a23610b34c19cdd51dc22d79881cab45a91baa13fa45d2130b271aae1e13a2718d7d10a302cb94fea3fe2cbebba74ea53f5fa1dd008294e774e77c6189439cb5e7f6a337501227e53dcc583bfa3608072b748b31e9b269c49165bdc2eb31e419384118a60e0b913d5a2238ca22ed68dc8ba3cd288327dd1090513e11c840570ea9aad4cb1cba84ca1c7503f2aa49cb51109d827449dd3d8470ee873815283e2577f59fb13e2ea13fa820dea7a7e11c900a0fc0c8ce306f50f34ca320a2e09af0d475269a6ccd2115ad324f1003650002c00d9318c4c0001249444c52653c50a0e50cbe6c6a8cfaaa3a857d8b295f80bb6a519f0c020821b0a03b3b6b323fb13a46a23741047fa13e2fe88574f59fb5bfd21ea27aa74fbc687c02540252bfab124fc4a028d43775a1f2ec7f6804c8fd495790986c32db509f348e648412166673d3355d2902907b13b9266b6fc2685a1b23d13a3d12048620ea9c8b40411832a2d198cd1ef209e258a3d0710801203009ae5e3038d518aff00a32fa4ff00e2183fa9bb34dedb04716f853c339c89951c60589cca5e06322391137fea4097514e898fd6a49320bf38e4795a51a39a06e711d0944e4be69d1d4060322110993a5013ec42e09043110707f48c00333cade5b008848872d008327ba29093d106a5be518c170d8770834ec758f8aaccb4b273be24ba20a86fb776fa3db0d078410fafef2a9347a913f67ca974241cf50291e90228ca1f215ce247d3f2a6bb56ea45eea85960e3530af84df286212a18f36f64fd1385aaaa710df94319c841cdb43d32c0882619fa04901c09cd1ab80594362f094879d4736406239afa86fe13664a7a00cea7f084603a4eefb97439e4545c003928e00601a289f88795b91883f2df6e9dd77f55e68a9df16f1a3ae31e515f3880a86695bf9c18464d422d2aa0a57e55f326dd03244342e806a83c69a6e1c36474d15478d4b4d404f84598d2f5e53de69f020ac829dd043a09ec1d6a707c726538916cc74a01d4b1145a33552fe4385585379cd31021a551b9cca9c4b054788fb83a7fa3e625e2754a3d9902b5f0e8068fcaa3fc426bdf702ea82000f6ea9bddd89c0ec6811f953f254fb86aa8c79609621c97a07fc220647c04d86fca040a818354d20ce435eb83100321d4d72c72da3b22591de5352477084a935a125af298b3b9b5c93439193a0582d1a89b572845d1393d6a99b4c1d67073401f24a2ce5a993fdb5d3e0f81fe8004fa0024870ed4388f251dc44b8fbb62ab144049e67b1f0656f25c9751ba9221fd00b383e9434eda1340d8a7dc13090cce02b98cfe7a2032695667ace085cc1fc485dd3f1bb300f840894d919794f28330a14c79cd3a7aa218c77cff0049e314cefd01d851fa223aca8c819210740c99779238210640392510517e5ecb2d967cde3f013eea40c2730058a666c46e493d5d13a9f400022d322f3d82304877fb602894e815a7d0a5c515dc6a820d794777af893c1a9422401165958dd82666bd4ec68e9d0ad6b1eb914007c2c4377e0a663e274ca024338e81728538df3b8e414e487e5f6684cc1cca1be01dd1b2f4b23b543947ab8ef82d7e2cbfc141a84ec5f05f67f94c43480ee801ae80828eb9981e89a4a09c163f21d50338033049bf222d422ced27768d549001ca4fb0546b0ccea20d1710c69f96807624503972d8f54511c98c8114c4a023079120b7664c0c968243d87dbcf5df01810c8490e5a6a98b12040cd0008311d50acc28048707a15a803ed92013b9426460f360001f016f6ff08c647305066695400647a57dace28dbbfd5cfd384c1824203df5392e1740f3391ea999ea04a032373aec6c8f80839b7445c74f5c513c1065035dbaf95de160033e8830a008c8eaf051b650b86b75014391a364d361310035536d3e4d000a30d9348df202f539a0cc8054a001cb3b002836afca0161f3984c884e50378fa0f666ec7db807c5d3a74e634b25a870a23943721d54ec1d032eba1990d2cd35e8a0234205dd914131c306a5387c8c6920104fe6133853d74a0f33de11eff09f753c83a7c08a025a0854225ddd422e06f9e7bee999a821425049ceb157855093ef97f50196ea13c9ece98259068544e613083dd90c6a6a6462b9906a3aa8966782947905296a27178a55316058b1f840990241423025a123839a1338c40883bb7390f413104ce619074623ee018bb91f9c0025e901d431aeca8c410a59f79c1d544228fba0cd59458039da7d936cc01a6c9a0dc6b420d41ea9d0d481577ba21b14ed3b6c764c9e83a30d82188b722365eee8f5c1380044857420c2c6b1964edbb428f11c73c3de115adf7e542dd50e2cc03cc90b5e5bd81f840701490fc232149264a70ee40d85068c692363a855383607d054678d7eddaa00990391f8141bfb9a2c8061e981eb2ce5c3323a2200187a179600800d6ab263d851027ec0cc04680e4e48685dc26cea16438400d448cf5c00c05107294235a8221500d1d1126e0b789ec8ce7f28b38882ceab686591ea833ec87ec7005021a3586d2b2349c0228a7f40e8dc9fb882450b62d7990807609d119d4ab28bca262b55f66d5a27508b24a1d67b230e1da1fd28c19943c9e899266776e43341ba3dab53442f4ae7f289c27a174fd0f0d440b2b2c934624bd003470cc0a041c340c6a0f85504e743f077c02669b04e481c8c847c69c1a35b059695df09b02ee1b3e5a2006c89dd713d11c4b6ebaf43e5004a6359f41451a6ab3a37a5f68431872ea3ee7210b8d210bb786e525080905cb9d8c1a3a22dda5dcf96e540980f186076402d008030abbf84ec92302b14f0df05c802d09e4f93a1392d3f1414eb450824473541b59090e6e84088e24b05f443c68b960daadaa7044baaa80881fa26a051380402cd93267fb44b027305884c4101b826eec8d8221667d8431ec86673fc5300e6bf170814133af608a280bec64810121cc1f845e80ccc83bba8a048113cbae81d3a74e89fa2e599fedd1383c4ad425172a69c8e13477ed51a115976404308601ba22221c573d50a0e1ab55d86686796b3581f6e8884633fe546914503ee2814775e841706bb61d3d9875055d154251ea37ca02763d40679ba61c091a94c39d40cc9879057a386ddb2552536603a62d4ed0cdd10e1d007a3e50435034516c94f45c80732513831ee2a53300919bad29a2d4444a4df37e8a8a0d5af542e213e0ff461a93afdc408401249661529cc0334c61bbc23f00fd4bb9234a1386ac3a074f6be254299243110f654120d508660892059454db7f7f28030bf6e1a0f52b33477023761ba818971bfe57b7a4673d81820c7c3aca224349263546d00c0fb90040d1b9089324fba20744b55498238b94ea1c33a282ce31903402c3ba28628f514997c1e14e635eaa7600a7e3c8642f1a1fbe9cd803390e861752d17b8448dce0e3e5c1104876d18203cfba3abaa756a20c08a110ce16982d3aa3e56ed691a7e066b69b22776c7b88c6c13891dc20ca14f6681874610f1c9fda309ee0f84d8d45a1d324825cbb90e9a5f700f94ef3ed7f013e18f1418e40040a681e206cf24900b1a19ead55302cf9a272daa75a771982b38a3efa090410588a1469c754f7044e4ba80a029d8bcb38708cc1c8c9476642498700c3e63453286fea2494107f79221359461cea805a038e641876e14b90c865ba20cc27707e56afe1389727d1619a710a0ecaa82f9245a123c047b2440e5d7ec36448a88498639303ee94e4be7734753088447ed090e616b11354551077064c42341cedf7f1d11404bed2d03ec80370688a09322860f843c1d41c468e88c4cd06819abca13aea60c2c73abd51878a844e241ca171013035007f744cd898a7f4074ebdda20e137c55db8089dd21fc90cec4a51084c5981d53e40c28d5d381d5614a44284103f0b395a192784650dc2d71ac0fbe229a464bf06a1912c354079282041a764dc4685203a70e21a619d9d54711301208407e74540941400c56a016479288912e4e0436063a1c053804244924c00a42bdc1da1b29dfe0136c13a42e906a4a300490e4227e4a103246839e151d16a00f904f11b207e1152759243901232a06f29c2903936608f28e6ca906a8c6c2b8d132029eefb9b7ac604a69e2b83ada14203b8c9979d02d5a8050790b0712751c02a5bd26773478910eaf944468bd00776404521d09def5512e63c4adb8f7277ae1369a9c8754da735a42316ca04ea799d119a461f04fc052ef41242eec99b211aa8df54f65dbd023a19020cabd41441e938cc3e04d458b75f647ab441b35426d84803540af167101a0d5121902fe30a9f7204e9fe83b6a85ba30f48d027bf99756f722d8d81d8687e13e8478269a83ee8a70a62781cd0b916736591000aa0297cd04296862eeea5751b3a7f18aafe40c38ea1a400745b7be6a8ecb8dfb4aaab11047c27ff612e06a3ba7c527a03685382249357df0276430011ab7a256ccdce60894020827ca0e9847f2eaf181b6c21bc5fc6e4084cc1090507a06aa518190507dcd937a406c4e4135452a416516615e8755a906d54fe7dd0489b0f481aa99a4ea312ec1d0a366154ee8531574d78421b0e64c0f90866ec953e2f664f832f3e51725c973ba64d8193264c9b64c8aa1f40eb407ec608c0890232c1de2675816d8000e553547c8900c0939fb737d174e9d3a6a8200c8aa84ba874dff00b5004d6061d17b67d1511f73aa66419352890cfbdc78cd1697a3ae7abc282a6e2079239cfa38f647e6013519a266f85b89f57fc4927d0e44d9a73aad24d2a3b21e48e8a79b28e9aa0b944b5eea250de77d0729cffc3b6236064c993264c98a77a80df7d74e9d3a7ff9a7ff00d11d3a7f53ff00f797ffc4002b1000020201040103040203010100000000011100213141516181a17191c110b1f0f120d1304050e160ffda0008010100013f102196072819a2c748caaf9094b233b010f21e21578f0615c40471e041d789a101d0062ac21238f0237a8f5426940748ca1a0f0651dbb420038f110dd740c11417447f78f1cc4402f4122015a1bd401ef759e99da0d4bb4fb3f1d4a04a45b24f378ed0de0161ac6280db2f1cf719976352cf34ddeccc00182c6eecdda7dadea5608b6085b5da5da102af410201a26ef67b5ca066cea8df74df4cc1e48379203bb21d1e3ad2140484bc85870ed2ed0de202401e808f97639e01d6046883ac123c9d67a64e9102460b0da01f4eb3d323494158f73c3e3e358b80a6c8af4bbc7686f31059e18f66fcf710d495ea006f7bacf4ced02cbc9b4dbb4fc7515b0f4a3cda5da1002d138a5e8df9dae2793516d7baeb25eccc05458c726ed3ed7530041705ec1de3b420aa806881046c9bbf5ef588503ab80dee5d67a676839037a803e79c73c4a00e058b409f67c635406b1587b032edde3b4378948475a90e32e85e792748a4de62d806fba6fa66061d06cdda7c35d6b0e2015b108b6bb4bb420e1421ee16c9be9f7092192bd40f9537d33075567283dda7e3a89781e8022eed2add0de003ad8a97bbc73dcc9475a901f9acf4ced183a8f600fb3af4ea0c121b2471dde3b4378000aba907e7cf7ac20560dea00f9e7a6768c706f250f9e71d691a05217b0318d3ec3f3c78e61474f430215c7b0fc19f3c406f4f61102a0db071faed0de022a9b2a5ef09e8fa03f33d33b45d57aa803f03857135543fe00a3fa547018f3884504fa372ea03c88cf39d4bf7af7ee12798754475f41abf373dfe6074e82bdabf2b68557fd3ed88c1a217f8ebdfb99126cf537010c9d91eabdba9fa98fb47927cdfbd7bf71b00437ffdafcb9487b66fededca97043e436c550c2eb681201a76bed8f872c8b2736c93ef59cbf4dd02533d066dfa67e51834c8d04c46cb0ad17f48f06d4d5f82c7c54512d28bcb77417abdd6e84440cf66b3dd65f9b8425d6dc0f0968c8e0f6ce04a880525a0c134e0213524ce448d5babd5eeb7cb093776cb6e4ab3b9dd99a22c840883a60af45cf086f4581a80238ac6dc288b2057623bab1bf0f796818b424c59cd672f9e519099c21e8acedca808015e181a58aa185c1d909969ed7b2c7c38b20665b92756eaf05fa6e80341ef0cb6f0d67e6e3d61c2623658568b67b200f2a559aee9638daa132851c9cba5b57badf09746fabf2159f9661313b846d8aad16cf647410dea014b80b1f0a3406605e49235cd7abfed104e47a967ed9df9709c18b081107448ace173c201b47634c0eab185c1d9088049005762307216136367bc203a836d96757859a2f723740f1e393f559db94610be8586cb0a185fd2128198ed25b2c7c310ea0e4e44acb757abdd6e80c75b91b3dd6ad77b82c6f09c8d92af45b3d91c93aacdaf6585a6d5180c116d9ddbaf57fda37cfbafbacfcc21196c8adb15e8bada02880b760171543e14dc1ec923975efc3de13164b7a967ed9df9735022c60dfdb3f2a3387e9f8bdbada126d91435057db1f0e721e5fcd7bf7bcb90c9777f6cca82db2e92aad175b4e5fc7b2c7c43ac5ddfc7abef786649cef7f6ccdda120d186cb467730b972f78cef2feacee638cef19de5fd700081de267f3ef7f972ea8f598686075f17f950fa42cbf9972f41ed34c69d40ce9eff0037f9707abdae5855edfbf6ea743e3ef885db1eff00bf7ee06f5ee11d07b59eaff2a0050434d31d5fe540381d92beff0081c049d0f2fe6f92fb809ac8befd9e7e5407087a224ed8be02f4dd05849e57df1f1188604bcd86eddd64bf5d91104d17dd9ecf3f31d8408402b149257780b75ba0010549266896742d76b9a18160b621b6fdc2f67b6156e6cb16db646a7a6ec4709039a4c9a495f016eb747480b40448480abc7c282720f7b007d6f92ffa42512483db07bbcefcb8cd1023d2cf579db95013415014b0318bb14170b780a1684724aeef1bf0e02641b6df6dde6cbe4ec84083066ad82f7cfca854468989d92be02e06e97e8f5296cde39da5ac0f361bb77592f67b21204966dbbb3d9e5f99a018562924af80bd3746d604932bdde3e25805db6d81ae6f92f67b262e649611677bcee3772c1166f464e98be02fed11a400c24c85c5e36e1424db1eec0eef165f0f680cd86752582739bcd97c9d901e8a7420c83c079602e56f1e2a80a019012c5d8a0b81ba138142c1256dbe3e1c2ce41d5bacbcdf25faec818299f6fdf3f30034b62b1d92be02dd6e801baaed2d9bc73b5c2410e17c83cb7a325ecf6421342db7766f0f2fcd403a03c213ed7c05e9ba60160dca5c5e3e201b8f56d6b9be4bfe90bc9b7347bbcf1bb84d84117a33b73c05cade17b7b58eaf1b70a1c118735f38df87324d3f5cf779b2fb8ad97a1d7d9e7e54476d34676c5f0175bc3c06372bef8f8841d8f75ef7c97ded2f507e7ef98e98096d7ed7c05d436313546fa1150ff85c707d1420b23d81808ab1e0cac57b88483a8f60256e3c4abc783001c788403a8f02209b1e2043503d8c0b1f223e19e07c73e788f27ec021578f065338f12cd0fb08c1458e907010b3ec06041063c1f8e3f1c09815e8c4600893e007e2b3d31b420be46bd4d2f1d4043205bd0b7abc768c22a636596c9af3dc6ea0b1a163daa9fb188a81d36d26ed2ed75010448d7084f8b596e8c2c3a566c9ab3a3ee1c2c167837d567a62092c1390001d5a559c75a44b6793a17578ed1de100c31b22c956571f3ac2c5044f07c8b9e9f112a961e87e81567c8da0a28ad81f0b8f8d6020462b924babc768ef1a4063293d5595d3ee2c6f7b063476a7ec620910f51b49bb4bc7509b869bd0b7ab4bb460862beed935e7b80042117b1f829fb18da10a35a6e8dda5e3a960415c125d5af72300980e1a4c88d13566b3deb0428abac1beb57d31b4658e020072d2e71d690801640f56f8e3b446b281361c16f8bc768ef111c5d640ed95ce790748e3a81a006faacf4c6d281d3cfc0b8f8d6210247b8297578ed1de0c2c670c7a65679ee112b19e32ea9be98da504bdcf0dda5daea012120b71837ab4bb4609b0adb2db26ba7dc209a1634219ea9be98da0a83a6dd1be178ea1a0ba6e014babc768ef0900e81148925dabc67bd632562cf03e39e98da3dc7b0e76e7e3484832fb0061204d80bd3fae3f1c60d7c88098161ad807e2b3e46d1a3d0d84386027a83f1c768ef1d056788790e907f8ff001424658f1085d8860fad7d1ff071fd0403e95771491cf46e02751c68fc7c75195fb5f9f0e104dead5f9f9ee100773e5cbd3c3f1f1d40d7ed42ed938bb739f2fb8ce5dbfdfcc054bd09f8f8ea2f6ed7ebe25f392dbe73e5f70833bdeadfee2d0fa7c63e3a80861a5a35d71f0a10436fb6bbf9ee0b6ee5befe7b87500fbcff007b72a0536d153ae30a11fca7ebe1c6b6732edce7cb805e8bbe5b7f7f951028e85d4bec5346a97e1c2f12c58705f73fb9c8b578d8feee195f42368bec88350a68b12d3d1f6468675169c9bf2f89b8f5da33e79df9704fb0c1b44b9c2e6381c02c1d7092e2096da45a260e78cbe219dfc86c96f9cbe6028afc02df1cedca9bd3c2f4638c2e2182dbc0bedbf0e121826c61c9fdce4932df558feefcc2d27425e18f0a721652e85f6f88dcd9c17d8df97003ab6b5673cfcb80e22e90c9a25e14869170a8b8e3e1475652f6356fcbe21e88a0102c58ce796df300d972ea8da49b7697319ca9c9c6965b6171166ce9783073c65f0e15a7adb0dab7ce5f30492b6e017fbf953004ad3a31c614050b2bf0ebe20d6391f337e5c7af3e5b7f77e60d5685d0bec525dd94ba17d978856c4a45f67f6724ee7d699f3cfcb8419427b21c12f0b98284f145c71b70a73a5e415cbe32f88c8ecf73d73cefcb87300e7a37fbdb952f4f635d7c70a685edad173c7c382d7ea6f9cf971e87edfefe65d2e93e31e143567cafd7c43b37dbf3f3dcede61279e9c316623cc46230bfe27ea208cf32ef3002c0f026dff9069fd0880d07830ad87886dff4040471e205c0f6301b0f11560781facf9e2103f008871e0cac21ee2205e3c08871e045e8ad0032b143d8c11543dc0f32ab07a03f59f3c4a631ec3ed0001501d83fbc76b9816de8afbfcf70105e0f5fa33d3e274f55ee4fb5d441b0436479b4bb420200d049fa32fcf73059c53e69be998d279259113ab4eb75d4441002f925dde3b422a3c0cbcbf3deb2a600f14f2eb3d37a403343d83c69f0d6910e072023ad71da5ac5680562cbb778cea9eb00900686e1e5f3f3a40ea816760f9acf4f882c0b19cd9edf1d47701e9425cda5da8c00238186c9be9f70907007dbf46fa7c440edeabecf8ea2036086c497df1dae6013a6093fbbe7b80282f03f359e9c000a346f28f1a7a75a4c600dc07835c76946d8d2049ed6f84f54f58d48b641040b0926f727a3260c2820404442c92c5d1bc72440cc091bb04add758e16b142a02b82bfbc76b9840d87b889c1e80fd67a7c478c672842036f07f6976b99402f457b3f9ee1b2811f87a37d38d78f6f727daea5361d23fbc76b9868bc84b87f3dcb10c17b0fd37d3e2104a87a396b4f4eb4850d00be0fe25dae66186da1f3d7ceb32043c0843347d8442cf940f8800a400e28afef1e39840e31863d9c289d3d80fd67a7c4ae3c401b7d8fd057d1cafa1fa28bea7e8a0fad2307e0b536cfcf719fd8c6c7efc7c753f3550eadf2fe7f379aebf31a93e98f6f8ea782e57db1f109f96d9df35eaffb420eccf72dfb67e632c673cf8f0ba801eb8697f51145bedaeebd5f7104e41e497dd67e5c04ba7d13e3e3a82d6cb46bafcda0f1cb23bafc0e00754dd93e6b397dcc80fbcbfb67e541697498db15e8a11019a1dafb63e1ca36f9b1ddbaf57fda0e0dc3b7b67e63e8c427236587217f580843497e01617881d36023a9bbc2f05ff78032b5ddadc95abcb311d05a2603a255c85c9db130c637422d2b092e141205000c92247758a2f8e504db0dc93eeacb6f9703619d1883d5670b983a1bb149ae8b185c40b4d2472c123c6137c381d31ae8848cb75668be7942408419ee7f6cedca849a5b8546c95568bfa41c306c0d9280750410c7d563be6b82ff00b404b35ef2fed9f98302caa73e2bd17f48025b10c7dc1585e200690eb6590136eb82ff00b40d77036c983c959f972988028100208e28e173c22cc89082c0a88a58b0b830019217624bab60609be39c3314b04e58255d82f96d608800ce41220b68a6375da9549f0895d5630b88e0d395f6c7c384ea199c927dfcbee235596e5fdb3f32c93e98db15e8ba8011a15da5ed8f8851861bd8eedd7abfed19ba6f52dfb67e636af4b11b255e8bfa4018d31a34bdb1f0a58b3ec95dd7abfed0ef195b227bacefcb8458cb7a12faaf45d4d2ba4481d563e14c0bf2fcd63e1cb6417d924f75efdcbd3a097f6cfca8dbb149f18af4505f4b94bdb1f1083a80cb627debd5f72eb3ee5fdb3f308247f4c7c7b75f41d7e6107988fd0430c10c3fe0de04847548ef48c46255fd1350f775ef7f97b4071f87d9c015e107ed7c05e837848580b6d3ef89474d75fdfbf7b4f57d8ffdcc6b6ebf7f95bcad82d863ef37ad35a817efe6e1613e83f9fc2a200807563abe3edbc0767c3ef1bcef6c2f7be4bef683d6ded7ea9e7e6101c2012bf6be02dd6e808ba1f1eef1f1184b4582f0ddbbac97b3d900d597babf67976b7a8206c46c835b2be02dd6e846012e1024b086ce764673033ae2f73ea2f67b213a92736c224e591ab8dd8856cb6c8e89076682dc8dd144d01428580382f141708eb1c00a35ad0eef92f827684b736dd1ec3ac97cbda0615b456eaf3f2844140360af1b5d8a08f1ba1c47469b65e3e1981622ed6424fbcd97b3d909b7ab6f5fbe7e6006c94dc5e36bbc05badd0b5be372040bd201286f605bcb19047a4e08ecd0c102cf4f20e9bb1090488d87b2bbc05badd33da8e99c10ddd64f08ce35ea69249610267823b40884af3625b3b0364b1b923487cf7824033a4739a086e0358c0822415853086a1411d402d61dc006c328a6fea4786748e737f3e6b25f7b4f51f6bfbc628003abf6bf6eb7800a82f1f7c7c421a87bbaf7be4bef695e73afb3cfcc60058c62fdaf80bd37421610f8fbe3e23049601635a79cdd365ecced032cbe45fb3cfcb12985e07daf80bd06f090012382c7578e7650c14efd6be79bef6855bdf5a3dde7e5c245af19fbfb75094d0f6bf9f6ea022d863535f7c44fedfcdf25fa9da029167dafef0a412eafdaf80bade21b05e3ef0fedd7cfe5ed13cf70c2aebeafe87fc6e8c17ffa021210b84f22380c09647da762029d8c6a8c07f187eea038f8207c73f6da31b8f61fd4a1a8cf07e3f2f79f9913b1e07c73f6da3e47812b71da3f135cfda685f7101a088e90f8afd6d18dc7b0fb29bbdf520fc5e3c1de040e47b87eea103802f641fa5567a6368481e86697b2f1b5440d902b5489e6af17ba3bc20d6bb30fdd679dee132085ec406f6aacd6cc6d30faed00dda58e36a8068a2ce51016f578bdd1824c3d7048764d679dd9d61b2656340db0551ba3a31b42413c0e901ecbc720690a04d14d947e2f1da2358836d5b20ab39abc768ef00c6bc209ed7e14748c14acd4003d82a17d31b4c3bf9417b2fc152a2f43a9057ad5e2f747784f233b8df759e7b8c160107d10f6aacf4c6d0ab2431c7d9436e489a149f480e6aa4718a2245679ee18254fd40fb39ad9882d6c930a01fb83003cc202282086a00c057ba3bc1b1688c9325334eb2413ac1016012444c94184409e012c45d431c512850002f082a6eb660691c8741089454365c33d8d60e1d114414511bd5e3c1de1f7fa8fea062c5ec867ae7a63680103f616f858e3a847a2f523e178ed1de15876f70fd1acf3dc28bb071820676ae7a6368c0d1ea87d978ea02013415aa3ef569768ef3400fdc31a22579dee12357d87c567a636859780003ed0fa8f528fc71f7de7a9760fc43f3a1023e444bbc361fd47cfba3f178fbef01e7c881d583e887c7e56d3d43c7d943c903d51f8e3efbc239b78875861fa38f98e3fe23f8b83d3db5347a9de17ce60fa336df6fcfcf719e7cb8090467a7e3e3a80d70b72bf5f11efcb6f9cf970fdce5fefe63349f4f8c785d407d3dcafd4273f2d77f3dcb65bedbef9f9703613e9bebe3a8d4b6d1aebf369ea060b6d7e7c381f3db7ae79dfb80b02d9f2ff007f2a0c04074f8c7851edee57ebe1c000cf9b739f2e18bcbf737f7f9809053d17e12f0a08b012dd3ef8f88088b0356dc9fdce3516776cf9e5f970ba8e4256d165c05cc8a214d191218bc2c70a2839ddb21cb7c65f10624e5ea4d9de79df9712683bab0bac7385cc01c0d20914d3d985c4681846a268473c6fc38cce52fd42f2ce5f30190407f02e7e543402e83c12bc61412f003ba3df1f10b36e75739f2e322817c36dfdfe616f0e001064140821f421025bc131471200680d62409080104b250b79be4b8109bfa84114be08a20a155b2280e602d2a4aa2d8ed0b94908c423741252251bd89f04c1d5180ecb35ade77e5c3238d0a2489209db9afb42b42d00289d30bc2ea01c04b5a7ebe1c20ea353b72df970464133e5b7f7f981a086a3c4978500c1aaf07f5f1353e6c8f39f2e323abb6dfdfe617b056e31e141243096e8969c7c28c4df393cb3e5c323b6adf7cefcb9749e746f4c785ca8cabc35d71b70a1a7f64aef8df8700bcbb6f5cfcf2e5efd1bfdfca874f87c63e3a8d7b72a31dfb7e7e7b8097ab7cbfdfccbaf16e30fa5d4c78ed40a3f2f9fc3dc7bcfd09fa3fab87f83fa89bc093f810aaffc8447011f8a571e231c788113a781011563d508c558f6071fafc72b61ee251dacf1f9afe295f804a0f01700c0062bc18b0a2fd07eb3f8a65a1e809a2c7b03282c78fc38fc70071e2743d03feb3d3e25658f6fb2041e02fc39c76b99b17a3fb7cf728bc1f27f59e9f10306383d98f8ea11062b82fde3b5cc0740a5265c67e7b809a02cec0dfd9be9f1196cb5c0f2d76d75a4b181ca24b8d71dae6040e3c9c675c7ceb03b0816315cf3a673a37a400882cab616f8d33d35a414db0df4af1d6354b58aac02d2e952e56ad543a90ca44fa33e1f7a432d8b3b07eb3d3e230b4dc9502870171fb31dae614080f47b33113a1e07eb3d3e254c9780f5d8191d42e200b9eb3bed31b653b63036c13f243e4858d3e5c10cddbd10800f610886068f2c02fba0e0428adb01649c00b5871f0ae108b57d751bc01534074c98856461e01960a1e5fbc76b981c2cb0fd19f9ee1067459d81bfb67a7c43e196d7d9f1d42996874497df1dae652c0f47056c0d703f59e9f11828823ee7518106bd8b1faed7300a50d9329658b3c0f3df5d4dd46f873f3f1a4283c7b140078f62fcc7e381b07b8848e3d8095b8f61022ffc302e3c4a3b781f99f3c42b8f54212dbc189b0997fa009411cb46e6d9ea1f597cc7eb3f0a380f3eee02dfc9c04d23d1f8f8ea0f5fba8f93dbf3f3dcbd4e7cb819c13d3f1f1d404e86b86baafc0a3cb279b11dd7bf70b073c9b7df3f2e025e7a92ff003e547a0fb35d5636ea0342ebb5f6c7c396b3dc9f35eae0373be5fdb3f3002c8bdc36c57a2827979a7b63e213b938bb1df35eae01a5bf6fed9f997270a7e2bd1456342f42f6c7c405a9a1d5ad735eae19d4b3d5b7cd67e5c6bc8eac0e98ace173008e0a52545c5636e1406192695e05cd632f871eae5b3c9cd672f98a16fc1f833b72a02484b4a069b28617101592dfff000c7c3866de52ec4f75eae2de5de036fdb3f302d64d98d92f70a3101bcedd349ca0c4f7cfd70f511922bd371ca289e482770b8125604185c2901831a14044bdc2851cfc74420856b5cf90feb1e004a3a97ff1c704e49c93624ea4b9a841e6fef09165d684bfdfcc05489cd2636c57a287411ae027db1f0e1240b352722776d0f57006ed9f2fed9f985e87a3f1e17529ad76bf5f1355b16df9f2fb80979f37df3013b1e9bebe3a80d0b3b84c05c563e1424d33ab2d7dbdf870a3659eadf759df970ec3d1f8acedca8791e9aeb8db85355e9ab97b9edf9fcde1077f272e913d3f1f1d4e43e546d49ceafcfcf70961e5cbfdc3a39ebf3f2a14261ff380f46b142143f4de08201c083d203f8a75001a01378f2f301231d20e7a018ebef00a440c6bfb8063f3deebf7b402c67dbe1c01543857ed77c75bc00b03e3ddcd037dc2f7bac97b33b436e7757ecf3f35125c0d03f6bbe374379400286171eee51c81dd7bdfe33b405efed7f7802480175afb5fb6e86f0c01a1b02c745e39d91960707835f3cdecced2c495ef47d9e7e5ed000d8ad906eaf3b72b79a282034b1d1778ae00de20b411c9aecbfc0ce90a4ef5c801fadd1b2f66768424c6b957ecff000d4200181c016b1cf15ba1bc2530800f1a7bb8631bc404ca60a26ec9a685e2f775ca993cc38894665b607d0b31236cf8a391a0b17cceb0f9431759d708529aa645445b18ba88386477d83a880104ea39df310ee6567807d928b750c5812e1b11ad0883c7b8fbdfe33b43a6ef2afd9c401a01b2bdb17c56e86f0808d0cf5eef13535dd7cf37ded0e7e5426f3e1c42302002a87e77f97b407776750be66d8ce45fcfe56f38fb58eae101115dd7cc21b875cfb3f98b81081b08be8231b050b30bfd11862579de2431cde03041ea231c77701fa023712aefdee53fecc1eef62be2048631a1959a79f89a1f93f7afcbde05556ff0d4069837a57c571d6d18bc7c7b28506d765fbd5f3ba3bc21decefdd79dee147962914fd2ab8d98da1400b4df4f6518648eefe2ff007bc070c1cfe1acc14028de87ff002b8eb68077e943d944bc7658eeb1bef7bc61500e0967edf859d664943d801eabf456d00a088c6940fa0543e16d0556a8f23d97e063589fb65eb56773aa3bc421583847eeb310c82f183f4aae3d46d1d0d473070451f6b0096ddea772b4092f5fe398ac2a19258f413186b7aefa3331a814b4596c5f631aa541bb46b21c3a72adaa42b810422552aa64cb7400b64688bbc0847e9528c21592af52fdeafe51de134e7d5eeb318d097a57b5735b31b420ce3e3ed884e5aeefdebf2f787f2e1b35e0af8808ac4087480f1ee41f8cc62b07d2be23169755f1094ec777f10d8b5097fb99543aa856e2303f6e54a87a87987fd17019d70e1143e1cc310ff1be60ef850631f79d6bab83bf301dbc3f1f1d4f868d4cbad356bbf9ee33b05eadbef9f971617b1bfdfca8068f0fc785d40b61e57ebe1c18bd56df9f2e2ddd9f2ff7f334a1e96e31e14148d7dd7ebe21dc34bb0df37eae192b576fef9f98744fa7e3c2ea0442976a06d3eebbbf7ee026f96aff001fcb8ce81c849bd31ce172a26c2ae1aeaf185c28426c52ba0635bc65f0e1275f5360f7ce5f2e03095f86fabcedca82a3760cdb178c2e208b04df201475adc4d01083729240702b9d24b0d5d04e5e00059c01a930e102d6733287a0a0648762955d649f1b0929a96f660f3719c3bd4f88495f503d3887f2053802767ee0c015a5d505a070c4c335ab180c185989606e28468d8d044390f2523d0b53e7c84305a80f2258599b2e93e31e1750e943dd12fb7c47b63dc1bb77eae0bb2416f96ffbf9841d01e9f8f0ba8471a72bf5f106e0396fcfcf7009fd9fefe65bc1e9bebe3a8542bd9a8eadf6d7e6fdc2f96f56ff007f2e5f39d1cd4bc3f1f1d47c0c6ad4bd5f6fcfe6f0be7cb9b7c38217cf6ff3d7b87e83fe882107aed1b1fa8437f03eb573bfab12b7f0205c788171e2305e0fb0800ea3d8080dc05c03fbc7e3807f11887f00804ab1e07eb3f8a01d9ea8446dee0fef1dae626e3c442ec1f61facf4f884329ea84606a056c0fef1e398d3236c8887f008c6cf6101c788836f7110362fd067f7d3e2003a83cd39c77f1a422380ebf663b5cc20f4a1cbf78f1cc14f86040bea0b004735500fe3487dbb373ee1a0e98732aa206a8072932eaa5141a84c9f51852d29876d52b8561e90019bb033e18081e8a9c5bf359030fc6ab2296498548249a414b239f139f550d0744583d106a8887fd358a3014102888058243ca083483c1881e9310a92b4902f07b18208c1340d0c0e9dc356ebee400054fa1e6135a23c01f99e9f108039dcd7b97c7508ee07b1fc4bb5cc0106c6788482ec5fa0fd67aea31763d847b02b607f31f8e57e11081b8f101157f6101c98cf0630fc061476f02727da301d3d844fc4615f844246fe00808abf021217e8c2442170ff00a23e5971c24f3f5b9ef07e2fadf32ebe8f2df7012f5edb8db9e9bebf368d567a6bafcda36feed47b8f6fcfcf71ab96e5c071f0f8c7c751d1dbb5faf8849bcf2df39f9ee33cf97fbf9809d09c68fc7c75093d76a77be5f39f9ee07f82e1184fa7c63e3a81591d3f1c7c2850164ae5aefe78710d96e5bd73cfcb8f3f025f5cedca85d10f149aeb8db852d0b183bad7c7c38d2203519372580c6c67101000a0003190f523e60b8c500f64f000134f3b73158a47811d48d6b4232896924a05b45d528e032c2af99e881f484c32463958fb7c40838d51b338033ae09b8490a8a2943d38267e66a84d0290880d84df421421670c9b2ed818da85178c22645d88c36732b6550e79c2ae0296cf97184c0068356a13197dbf3f3dcd535ee5fefe602416b8b718f0ba8695e9cafd7c43abf2f9cfcf72cfece11a47a13e3e3a9b612e575c7c4e6fb7ce7e7b8b976e600cd9d1f1f83952f1f67f8b6e142d1f96bf5bf0e067e5f39fcde231b7a73e3f369dd76a1759efe7f3796e7a7870933543fe88343d7685210afa8507d18fc11895188f3fd4623118da00fc020207e84045289b080f96a008433f0231b0f06310afc00462bfa8c557b08954251ff807cc7f7d80f7b8c59433a004f5778fb6f2b080f400f97091610c703e61cd8cf007cd7ef680101f70048e9c41403a47e78fb6f1f68701bbe613cb80d01a1bc04273b40e3a28026edbfadc0c3c49cd14068c9588bc6be5c38c02100505c9234000737885a611849bb6fa8191f0bdbfa40c5f5005e047432f3c1a9fe1fbc55663514145ab62383186565a3dc2aa2129516b0480b441da3ec0bfcb6842b7dd0263008d3a0614b4884581d802123cec20565780615b47b0768463f02047f4255043a4675e042893ef6008fae503001b781005d0c4a3ff00a04aafe84246d2a130910987fd104a11b50ff01f471c63e97b18e18f31a80fafd0e3f58fd5c7b78afa29ef05acfbc1a185af301f5f767ed2f47d57b573f6da3f5c695f11e59439b1dd47bbe5fcd7e5ef3057ba7e14e07deda0fc0b310c019740bdf24b4018c513d8508da3fbaffb0c31322acbc8b9303077af1d202a465a6ff848c0c0426c445685c2c6030d81d8d852c1e509a25b822cb50721c4ab7c42adf6fa424a997ce629c2d82b0062c96c13be20641d04286416c753864cb7abe0dccaf8f8ae7ed345bdff0016212790b7b84c0767d428d18f82fd67684728098280ea4012a697df1ea842c8473bb836b6f430c2092009270007f100910041d59c7ac3e8612f584d470c3fe908d07f171a8e3fa1c0789bd424fd1c704f780c719bcf72ff001b81d67af8fcda7b795f4be6163d74701e3d9a9817e581f7f7ee3cbf2df7cfcb80a340f4cfcfb752ea905a343d2ff2a743b25424f3c92ff3f0c293177adbd4b93f606f10291da12f1afad32426fdae49d46343d0c1d80a90139a6098d79860ccf69bc093304fcda7873d59ca1e5f239ed02fca45c085af61ccd028a008da8e36ea14ac8adb02f2fe7b86c75e6e666f4261110b0088a04b33c08d9698301b6040584464184ad0f2df9f9ee3d364c3a2f0fc7c7531f857ea685f97e7e7b9aa248e6e102c0029fa109821608da0758f2a16e3ddc140a003a021b6812cdeb1958024bd0003d608505455d6520885b68b6161c032e8445740124a2286a598824821e8dc3c086f4d3984224b7ad413796c68fb4709861ff4463e87f8e7f8831fd419edf471d69011c407d3c19ede20ebdc09df84a0b1e0cf6f7102e3c4638f027b783286dee0ccedee04245631c46370e8195c788ca21a04a6081398865f844f89289e1dd7c78103b86bb58696c73884c418b804a6186c88dcc938dc4057746c944b4c51a10468c0073535102801c1b73dc12290cc9964813c4b8636fc3a44db2e042106c0f63090ec3c184b0407b88461581041480e41e0c1c66400f601bb9002db54abb028ac1b8404001200b0ca4dfbccec7d842466bc427d3c1802f10064000ca64ed03b228c12342b4836036df1e9075e0ca6504362413ef09f5098d7aad0677310711a85881d1f28f378881b8b8f50140500a111076647d8453361ed9a1280cc4e3c42471e21efe5c0a76787b84be4c70031b83070c30ffa4303e8e33f471c709303fa5cbe607f5b809e633f4be607191ff8e024fe18cdfcbf3f9bc1c1bb72ebfb78f8ea7e6b0fe3719dcf9809e7a7013fa6a3cbf34efe7871b9edbef9f97321f63703af87e3f368cf5da852e571dc9f6e0701e233c0882b3f895edc70664c2982a0dc068606300971f952c2b194551382908bc0366290420e7572511732c044db800d7a0106023bc921a1fb3f54124c939d49fc7f6e1240b3c26ff7ff009192d3e9a88daf308209bbcbd37f3e67e16e140204a01aa713e05750063402c357f119e796fcfcf7091d4f997fa72ff1c670041ef3b798ec1192701d6cbe3a809ab1d3831040b2401e37d806f1fcaa02ab0756fa18ce8f3cb960e190d05aa9e34ea11786807008908263c987d5e7cfe6f0be6126a0008858081d9849e7fd41810ff81c71fd5fd5fd47d1bfc5f415f80fd2aac187978108902803b85f405fe0101fca8c5a2bd8c2405ff854d07fe47f951e3fa10dda316c187da57f8048d48f1011b6d9f47d6e05495f2ddc09bae5540c18623f705b06a21d904243240e0e6599cd57e330c906d89e013256bbfd891e48d1a95fba95a7711630d1c11adb17ca6bf3b13f6198a28202a04848789a1912009081a2310108700054191d760809bbfb5eb06c05068862d4074d46848207dcd950714038443c0621b03c9e8f52d080184212803a1ecc8d0c07c64a2018772bc042080b040b256b0ec8a857918842725224d993b9261c86c346099970c09824c28fc07017b198c10c508120724270c26130c3fe9e9fe771c7fc2905e02e535fa3d50fd07066f71f26036afa9b5e91457028a2768e038ce60b4078a8defb59acf91139044ab82f26d3734313a8b16045083b865010cc8954d3b7050d0c094e4ea39d2448a89c764778807238730a22bb8903f13236475043463e2bd7dbb12da5c5239bd4b670148dd8ebe5e12a5a4a5ba8221c45808b044642150a739310433a044637e20302c9245eadf30a09140012f53a7ac7611b8748ec68c51c18b820f4ec3081154d049404004800810000685ef01e1464e8bdce80704182f2f4006493c40a51da2fd8a09902db1e43198004043c9802f4401c59309100122060384db004441c120a8510cd39e1e5d010a49613c9660362c8b4e13cc261a100c04cfa183de02004243068f221ff005063fd263ea4c06510932fa1601228e0aa2a38cc1013fa8e3801acfb441254c00c5a2f235dc2301e26124530c47de1744425dfde080a1ccc8e5d70d05127b9613648015800544f0f5843fd281709d1a8315ad706a82cb569000242cb98a86ede3face28b5c8207a0dc140234a623b3b08402012278c3d0654837beba02047b6301e8b074ab407235877efe444e524810284cb02071820e8c0a418685c01052db843138b2a41e4d7eac36c80cdf38124ae4c0190633438b4ddcc3e710a4a6806cfd20857ad241484680f86b0b35e6ccf60c34a80a9ac801013cf4a2d73c801a600aa00a1019a43403030680009a06160904e0a86021842430d518210e5ca54779c051c7142dda49e05a1685602700e850fa3ff534fa1ff45ff0063808010a801a0705c10b994c6837cc21a23c8208dc1880204014681d5097909111140e9e8f485c78025387e8510622326a53221040814e83e86009832d0481a6c6ba283258001d40000e87c448bda2c839d31c4147c88bb9f752b3110c4156c02848a61f59800124040124c2ab5ac2e18eb7661698d4c1de3d08203cbe7041f98d92c1c47b9545d26aa18760c1ec311016816786c78f71014c17661ebeafd2044585717f7f6469a5206346344912e5914c0e6406a0510310051e16a955d4b5da0b81578fc6fa183cb74024915644ac254001a4a6c8f5714f74641e0192ea2fa190820184da0080101d21824400c176dc60f40a0d3c8275ad255e282824d03a01c941fde2262dd81203f515039000678107ddc030f006ff0089df4fad7348ddbee9c3fea69feb2fa084240430182310341f41c41904036bbb1013b1e9c20911b6c58eb88cd71a2802390602ac3808c15aabbdfb960fed1cf1508b054175034f4a8640063088e8e9ad8f105bda9204c070d5f1c11db014cc076d7b057695a6202abd815eda5b783604aea0fd88c7612dc6dd288b30e899fdbda044805921fd21e44a97d1253816386ad63112084b4240db71a410b9641a8175d87784c3933080d88d8e0609119f8181b380c792704ee6ac12cda1d85f164cb7118b035b7158960024e8ee4a9475a62e063212581a812c003540c3aa8b148201b4752200881900d01200c33c4512c0806d1397b384b2a060906f3883905cc60059000365b838772ac52ac2102f58638e1f4c568d8650e4c62249f05fda3ff9e00309060105db017d2b5904c8143d60568234cc2e5c04be4b35452dc1ab843dc2c0000b6afa58b2bc0fb44505020b430d7625413c96c2092cb79e2161c10c553ab38721a092d4bec442fe6c6002c41ec051846340045935dc1a0ea22e98019a45335081c5220c332813c02e479330788d85e04e14d63d547b22582128b08fd637906cfee0e8601fd6e28e36bdc466dcc93a15a4071664744001a1b85c0bf289a2a328ac0aae888e394c6528145b6fd0c291d605d49b702a8d96907d8830182dc6e88b04c83cc2c8496f2ce597173006611b2fa6b8fa1518a27d07505ac56a87d01441aa3ac2589ab24d043fe70c523a0549b61ec15f80c2e20864b12034084231b90bb0c050db21f70458d23062a440bd475003514fe86c03a83b448164f09111cf08406009a2f2457503000d6cee00ac647e098aaf58d42b6d50e900b279b846900826204ad8b0442604d044503d47e02d801b8d610382180d60a27b50871100e20f21188061b1d88d266a8281f4078034335dbd20540228650e9ad02612f04dea97a3a12eb4e006a099056b13c15b2611a344512202762260ba2beb2612442c592048011c12127d8280901c003619abcc4611a9a63930961c70984d1151e8150600e4926801a930bffa0dc99810514c1fad56e1130436509a6d102dd05d8805926010a81ac58f5171cf3b91b8ba1e7b31042eb1541e83b841a1d035d1ec811ea20222298860b468b03da878111289902cb020f447d60db20114b50b8307206500eba10da80c2dabc39ac209112363b306a0809c4033b16ee0c8b02004c4a13913b8ac11802085020c3b2805a2e2105221024602e8e4811444a871a41c22f51e83a8ec4c8e2113f1582b98181f040cafe4a6614b518082c2fdd31c22dc84855ca8288ed5a12b0351ea215c29d48aa79b56ce15a156c71834e150a0ac86f45bb8000004382427e9359704ed33c420b42227407401a93cc0e187e84445488b22306e751f445028a2c3e47fcf175f402b8f30627f7d5cb82c8dc82818440540b9a6b06adc3f1001759ec58dc412aeb0426112724343582760b9a8cad03504e2041017679950c9bc468d180e2887872b010ac2cd8295ea1104d21872f78b5112fa38a402c1cd8018bb1c13066c215842cde0830bbc78da0a09807b4d1acd020c1c7c90447267a806853ee5be6e20e98900c821d68814f228b2305f3c463c494be9b15a372742127296316b41bfabba833ab309b97258b7b024668449387a100848c8072674d2380b25e48dc93d46e0cb29ec803d8043506a20a9230090ce40037366209d6000632137f4de1fe2506204901d3393ff0038519bd214b5701a2b18075ad8c0c189e7b1035826166ab2734371508c3aa3247402ec41689e0ec5ef00010905a00169e6a54964321e8221c9145c0e500640480e2cb6102ff6d0380671cf44129e95be62d4c221e81aac077ca7887bb34b07b0f0c428e3d1430235515090429e6011d7e4fc846c21ad63d40fe0c49abb062034ec67220a0496861351bc3063c03ec6c20500502089ab1178f3c56c81920b19ee07e269a088b0e3783a2042838c872000705ac1f4c6455e557634770063a252b7a1044982225d7a8dcc722e604811c6a088453ee18c123ad6a95a43d228b64681a0ecc177087a47eef5842e08448bdbe878865c604709fe2da3586581b2ff00a0f81037e01aa1487261b0546ee39201efd616ae8735e2a43cc320018a01903d7802a287301cdedac041128108249a706892b3b470b4118b5c828770168a0d8c9ed9ccafabd750798299d9b9c3ca615b0b877d1e5230843b2400077308806150d5e83ec066150e425d860c547be3e6e2f62f0db9b30a02ec000d67b801a9100d590d3695bf61213342225b054a58275dc189db8220871c0830eda0cbd74fed01662904009b939300124b026a069ae161219e192210424c4964b0c93006f015cc02c580e288f8424e3a0a60ed910178905e22e47aed0642d1511f4718dbfeca88112105811b1bc1e60f0c00f86f6132865d771a3cc418e800902f10334b180c831310300881648804e81940067000a20c390350e56c7d503f721c0b05f62624d5c202a0e00804c6388583ec608141b03b11bc14f6d9016f4a51805001aea248c043529911186d828794872ca9098f29496770641225aacdc2d0e40b213ad188090b2fda104411e8b5bb7816471a2f29b304262a54f4ee23bd46dd8f71041a272771327f1c440236620ad346115182d050e4588cac9846405e140cf1d872238ffec0317d0af8804051046c60e2c041c03da27b7127e5646144f7bc872110204d8208c0e4582087ef036616470637e44368af28b2010c041c7c292a142406925600b72096847f9944900896cfa209660b48f81a27a8740803a0e106865054b504024bfa8e0924eae3ef0ac285fbcb9820f69869086fd57d88964a0293b5d862e99c9d70239013002486b4d88287da08849a12439003da442680bb84dd2a10954c6511f612204060a98042c6cf30808043266e8b3510d20096c042f58506087b8504850460352e46dcff00da709fe01c0c120d8246cd824841c5a1e5f92421ea1c05189bd455c9460fbabc12cf22072773597224690081008c40c4752a101200402a0072da3810c14e99870925610547bb343a184d1d90ad5820c239140e9b424b30c1e10fd045f82c418c403783883500004fa1077e0407b58803212d4043804381c4d45b85827940fc07091219c03a1ed090c8170021d98463328860d61bd4068a4009e0619b19d20e4105bbd50b12070cc3282a128a17dc009041573f5009003271ff005c8fa89b996e1b080318f4388bdf9cc21e522560290347a6a1a3ea084122320969501502ac7a61148ea63f65e8614d484b36345015d6a025e08f0121d0a50579b20324a10b9cb489ec0f950d9102d70f428c3a609b24c24ff5cc353c09d04384e44247dc7b85fc407570c8260482099ac35ca180617c81540149d3d216062cc85a1b1288dc58cf99ce4c0167d811e4e32e0d4903a10998d5dece95030412c61ca912042de28009db4212188d50852a9306f2c011129682a0243bdc1160ce9b86a4ec393f50490209041a300884001a1a6a1ff48082145088a0100812c43d43008eb98701801ea09778f31fc0353261002dc2637cdd921a907b3852c62b8a02c3ab74c1848220168000704783051c5169f5270268187e90804a034c1fed8411b1d4cf46f702219d89c78ed09112564b24e49950169af17291c420588e210f7c4792b3aa1010063fa075fa1f4835ee82fc830a008100a6d8a3685019951fedb3a6cd23486d7c659a6741c402fd91c2cee126223ed8c1c28882c208520bd4a8b8250914208d486083831c3b32836df2c0ce2bceec107a6ca244a758c7fa1c88588bc01e721e7e80810182411c1ffa0a284a3c68cc7f5101a987461bca90b23a884910b091723e4479532599133ad6910c986ba510049d0ea883c48f72485d7acc321d08a5b84522d0a88838a15270737eef2062898d0324598d4afd67200023f1d722e9aec50e0db881049b982f96e90116983bbfe550d024282012006c00c088c461b0c845ba1ea3d20241080a717ac90c185d36202401f144bc116a4d9f79a1ae66a8615a4b23b10b392d622fa04034351a013bbc9e884e0ce6da53d446639f6dc4361dbf604571aab8441e3b1464123ade1135586000045f4325a0940900d8367b37fecafe0bf828a28beabe8228a28a28a28a01f5443c780a13482694796e0c733ad82c7d8b70242d10a000351e361cc0e4526806f13606ed213859b3448751b6443402410ce34e0bbc5d70ad0f9cca50e2eb3ac9bb42a07b598dd02a5fbbd4adc14bd92bec832039261db18d8adc267eb90d04f4fd34b962cc3b1200a7708b31cf4cbf98a28a23e4068104248072082888a15f44988a28fc3e4e7cb1562bb20918c46a259b3145f4517d145145f45fc57f907f90fd0450011221140228a01f4adbe8f5c1c60110400130444ec1dc3506129003c831e4b9571d50b17098818111011a9161ca15ce03400082d00abdc23b881c692081b4174e1726a059e0eb88e6041aa9a08d3a40386c4085a6c8809a374c004009a205eaa5899837241f1399ef391e20d98f5fda7e611da25184095081f442210c5fe65ff05410180c17145f4660708e3eae31b4709335663fa3801ac08894022c10303905059345f5260c22dbd6e01e9903a808050a6340c04339c188051636266161106c48238e38e331fd06913012131c71c3ff000c7f907f106311c0440be84c3fc1430807f8578d1e3468d1f68df5868d1a3fd2a22988e13f40638ffe10fe0e3fe0fea0c7f571c079839c4dcc1f504fd5a8e13fc8a95bc5fc2be81188442542a384c3fe47fee8fe07ea7eafeafe8ff963e86e3fabfe0ffc2ff8331c6238613f57f571c7f427fe00ff0030fe0ff9331fd5c7fe571fd1c6238e13098e331c71c71c7ff09fd01ff10fa3fe0e38e38ff833bc71f31c1c98c471c7fc01319de331f31c30cfd5c27f93fabfa3fa8ff4dc7ff01c71c71c7f46638ff83fa3fa3ff23ff10ff96ff8bff5dc7f571fd5ff00907fcd7fc5ff008998e3ff0025ff00f0ae3ff49c71ff0003ff00c20ff58ffc7fffc4003b110002020102030604030507050000000001020011031221043141225051617181101391c10532b120426272e11415234052a1f133708082d1ffda0008010201013f00ff00bf84cb967bac997d26a80f283ba49ac95d2a5cd5db63ed0b7581a037077464e87c0c6309a17e26e1cdbd6f5711f945301ee86dc4bd84c869319fe19c437cb2ab7cbf598f258598dac08a7683b98c63b463b91ea4461ad3871fc55335b1cae7a3011092411c87ea6617b02218bdcc639afbf402364c7a81f9e960d8da04000a3b6ad42674d18b8bd86d9d7e94613a31615f11a8fbce1cf298cc1dcce748b8ddb1baea1e7ca3e62a4074c653a80b54262ff0ddb15da91ad3d3a899f00cb8f88039ba8faace2fb3c514e8aaa07b0980f2988c5e9dcd9749201b3e5189a3b800787499c1626af6f4da708199958e55215480b7b82665c9f2b1b64ab0b563ca7e20b5c4a64536ae8083307498a0ee572790f811aa7127f757908ece8c1949041b86b3e0dce919107b6a99b0b8e182b7e6c2f5eaadd661e93141dc84d0261bab9b93bb1b308df57b099976332a9bba8cf95f80575fcca01dbc14ce1dd73e05b17d9d2d7d684184e2c9a7a743e531883a7721162a653400f86da44c8bd00de65c2585a0bf21d3fa180b261c0c072737ef309381f22a9dba43da7f298c41dcb90db9f21075f68373ed396a3090875a1028ee0591333ebc602e3360dd0e4605dd09f01318262c1dc8630d9cf9c1d7d2fe906ce250ed4616fc8532dc443ba9e879f9748c8748239aef3181408ebbfd60e5077291d86dbf78feb17f301e3b420e91f4f71012dcf69a7b2be4d5f69a378ab308d25b19e9bafa1807ed5f7038ec3422aa0a6dc726ff0066114f6c03e061af0e6d34c0214b2a46c47edd313b915d077030b531876565b259abf1101c7908656de05db1fd7ea3e20773983f351f0a971f1ea36ac55bca264ca076d01f353f6873d1af95909f015711b21e78b48f3367fdbba58769abc6e16d46c75163ee21228340ea58aeade5b85d2b90a781da2be45ab20fa8fb88ae1b6228f87c7c3b90985ac93d0c2c2cfac2faaf430dfa7ff265076bff00d4f43e462f139f0156d44e327aef47c260c8b9901e845881d9199325d03d3a79888f7b120ed608ea3e24d4d43cfe9dc44caad509e77cbf5331b6abdafdae3e20f6c3dc78ca542c9937c4fb13d7fe44e04b60cd9785c9b9bb5f3ff910a6a4520eebd4ef63a5c54ded0d7265fb83077218c61dc3811f112175b76546f5cc930b236475d01429aa1b4478d8c6404d6f5f59955b42baff00d4c14479a74fa4e1320c9641b1b03eff00d6633a750ff49bf6eb07ec1be9dc0d32181f4e4eb5d614d42ae717c3b627f9a3f29d8d4c6f3137299c7cbd3980b03f30f153ce6364e0b33adde3a22c6f4adbdcf989fda8755c955e76226ea2cefc8f715ee47c1a64306af9960915016227e20adf21994f4985eea613ca280c28c6c0549c1bae40e349e817a1131b386405749527d88fb4c4e1d4b02289bee1672a4463c98180d88d1b8bc6752b58209e6262c7936727503b8dfa45133a6bc1917ae92262b56a3301b02075c68598ec046e2036719486a146ab928de71188b336406b40404fa89c1e63c3e4d04ff86c6bf91af97bc07b833ebd04a5dcc79758a61e46a636b4049de85cc965587945c58f2b2b15babb1caa6bc1836002df4171732ba16c66cf4f58dc40054153db5b5f5f09bab9adc4c0ecb9548ebce67e232a850969639ec4fb4e101cb95b230e9567cffa4e102e41976ecb3d57951da363d0d911c5816af7d41dc19c1e662a71e43db4a17e23a1ee0734a636465ccc39519c3302805f211f918a727cdc883978faccb8b606fd7cc44cb8f182b6c37bdffa4771950847b61b8f5132804fce5e67723ce253654d3d48f28dbf307b3c8784c3c5018b3635dd8d8bf0beb3f0f5ac43cd98fd00138d4d2d8f30e5b2b7a1e5321387263ccbc86c7cd4c43a9411fe7f2efd902c91336264c9744df3312f1612d5640d879998b88f9c8e09ed29a35b5cd21532b753f68c3b0be823adb0354b174a02473f197d9617003510b9b23dcc0958cb6c3a4e19346351e0a3ea7733220c88c8791150e12d88a373f19c31bc60751b1ff3ed6a4b74ade68473b519c4ae8c63f9a7e1e48c8e49e743de025b87c8fcbb0d1d4fca3b5ec44640dcb954380feedc1832b6eabf51a664e171a62fcedaff005330705999803d9ea4b6df4132e14c67063504d9b6f41101037e7ccfc088aa53258e4dcfb80e0426ea8f91a9c5865c2ddb2455ee2e70ae1b8805450249af6330bdf0d9518ee35af99d44d43941d6ae8cb477ea05ef7b748c8a0d81ce7cb1e115222ee0c1b5c7cc3fb48b3ca5f2a972e0ee1cc9f371ba7889847cae2514f3b20fad4c8d795918edcc0be6661dd9d6c9d8efcee22502269816010834661c48f9b317174454c46d17e3cbb84ccdc30775c8bb3a9bf59c595192e70d9c13871852842b29b3d49b263f13830f60b82e4ec8bbb1f61175b8dd745f3df71028142a2d1008e53601893b0831b7cc765b17cfd620d2008481b93423e42a0b2ad8131e4d68af5b197b7701f87e22a31b39239135ef3171dc3713897e7691942f51ccaef11f83c76cb9712df3234adc1c4e322b0a364f3514beec76815f20edd05ea040264c9adfe52f4a2ff611502a811b60636a6ad34443c1abb16c8eec7c2f6115028a027480ec3b839cfc43120387232daeb50db58e77bce2ff000e5c2e5b083a18d11fe9b9c3af049a14e250e2c9665d4629c4d443ab786f1f361c62f26545f52043c51e20570df9791ca46c3f9475330605c4b4075277dcd9e649f1f8150dce003c3f62b6f707b87222e44646e46616ecb61c9cd051f35e8665e1b0eb0b95762281be467f7562720ae7c8bd0cc7f8370a84335b9fe3de2a2ad50ee9a99716a6575d9d791fb18c8b911b1641ce626e27016c7914b85eaa2daba123a88bc463206fd6a02185820f759018511348ec93b91c8f58c8adf9941f51715556e940bf0ffce3ffc40041110002010303020403050505060700000001020300041112213105411322516150718106143291a1104252c1d120404392b1162324336282307080b2c2e1f1ffda0008010301013f00ff00cfdc563e1605052682ed44511f090a0c05bb8639fd31416b4010c4bdc92c7ebb7f2a09da9a2c034cb47e116fbeb8cfef0fd4522d04d4caa47e150bf952d9e220e480c46547b7ad4b11f354898a61f0888956535a096271f9543107b89940d839fcaace16b912385d8e34f38c76c7cf9a9edcab49b1df3fa1ab88f04d3ae28fc1852540a0aab13e88dffc4d400452f506eeb16b1f97f5356c0451470f1a94e46dc2003f9d4a8a222580cb1db8e0722af22c330f73530de8fc185411eac139dff08032c7e42a1b6b808c0f4e9b4302a70c09f6da8dc3162c548631786fbe0923b9a81c3b74f209c3da3e3e794cd38d53cc790ac231f251cfeb57cb9d5e9cd4ebb9a6f83431f88e17b6327e5484c24624d0c7b8196fa0ab6b6126f6f35c2cfcab170431ec0d5d11756f1de15c4a1fc29c71960366fd37ab1be104fd3fc5fc10caf96f449719fcb9ab4264b28e6237919dcfccb1aba1b38ab91b9a7f835b1913240001ee7dbd054406a1842ee7bb1e4d74fd29a0911f38cef86f600e76f535d55e3581952de4cc8eaed2e9f2b01b6ec3f7b7c55a40b737090b3e8d61b0de840c8ae984fdc3c175c3c323c6c3df39fe757581aaaeb934ff00058901219b8cec2b3b1a4608738f9ff25feb56058f99ce59c027b00390bf2ab4512c52273e5f3a676653b1a40f677ec163327812be578cac7ce7e82a29e16ba2f093e15dc21d73cac9164153f4abadc373c55c9dcd3fc100d440f5ac26a0a77f419c003dcd1d206d18007614ad81e1f23963ebdeac98bba8cee4fe66ad5f196070cb83db61c54090a75a752be5932003920b48bc67df715d411ed6f4c88e06a7f1934f0b96a96e63b88bc551827661e8c2ae1b24d3fc1118a306006471f3ab65c966347718f52050d5adcfd4fd6ad093862c14020163b004f19356d7281f4cce11b4b649d8301cff00dcbfad7373791392a5a1427fed38c8f704822aeb4dcac665519fc470370dc103db344785101dfbd4cd934df058079100ee49a3fbbef9fd314e709f3614a35f8638d470294194781382da802acc007f6c91b1f6356a81266325c028c81759cea5038047d2a590143839c3103b6d574e356ddc29fcc0352b51f82a37fca03d3fd0530ce9f9e3f3a6f344d81c7980a56398f9daa362b17e23aa37d277f5dc11534aada255e1c6e3d1c73fd6a3994b146e1c69f91ed570ec5886ce46df96d4c7e0c3fe74401ff0d7f55cd3fe063fc2437e548c03b77077c7aab51091f07560ec78ad7e79b1c3ae71f50d4253a74e76a6939deae9bc4093a8fc5b30f461fd698ff6b04fc02227c44a43b9cee3b8f6e314d94f2939f0fbfac6dc1fa1a91730b38ecc28063ab7c698f27f2a0def45a84985753c30fd4707fb7a9026154ea3c927fd3e00870ca7dea33895c76207e8050092e90582919d2c7819ec7d8d14b8b7568e48c842704fcf7e69e401ae40efe553f223fa7eccd67e10f8d1ad78c87fe46829214e7b0fa6d505c98d7c3915658c8c696e47c8d4d6d6a5c9866745233a655ce3db50a16591a85d41a7f8892054a90c7b25c090faaa90bf99f84a36628757014023daa34080a93b2b618fb1e1a82307319033fce8da4c20498c64c6786e4023b37a56989a42f240253dd72467e4477a78addf57868c07b73f91ce7f3a788a6e0ea5cf23b7b11dbf60ed5ebf0402846111148f30241a489884e72576a8a12ac86689b0a061f9d23b6ac76ab690c0ccf13b03fe205d883d987b1a163d37ad078a48922bd44c8741a04abd9b02ba8da4b6370f1b0cba3e93f5dc7d1b91525bc33c314d6db31006fb827f85aa584a9d90aef82a7953e87f66294648039af09fb951f3603e048b9340eb11e79c0069633a942ec48edc85ab98da308412bf238a86f648d1627230bf824c6e9edee2848f284920c25cc475c633b127b0f557aebfe1f52b1b5ead06c7649bd57ffc2292530cb246ebe4949caaeda5fbe2a5972b89816c651bf932d1144e73f03150ae48a41a5a22720641a82e155e430a132bb61757e1000e4d4ab716f6d0c9e2b3b38c9771abf207602a552c492a3e8302a29da06009f267fcbffd1ef5692c62678a4dedafc32b8e74cc06ff00e7186f735d6ed24b2745640082d839ee9c13f351570ba951c0387503ebc8a6fec0c677cfc0106e2add7715f77f121c0c06e54938c91daa39bc22580df1815d3ef93a8d89b46cf8f165941db52f7c66a68b19a9d79ab07f1c3d8b3e93263c26ce34c8bba1fcf6f91ab8b797ae747865c05b946d5a5b6cb21c15faf6afbaccdd1d9b490f6e5b56dba946eff954980e40e3903d8ee3e0071e5c7d68d18c88d5f3907f4fd8837ab55c914ab1f8056450cadb63de8a2063a78f7afb352c67a9246f1ab060400470c06462af554bb103e7572bcd48c51c303820d45d44bc22fd006b46b5759908035cc33ac30fd6992da7b690a485bc653a4e062407904ff181cfad5cc4d0c8637521972a41183b1c7c060b61346c73bea017ea295080d19420e0edee07f314469240391510c9151fd9dbf0b0cb02c52c4e8a728e01071c107bd5f5c5b8cdb889a174015815c798724e29db63eb5d36e3eedd4ad673c09518fd0826ba9db18bc421e320b0230c09c55cae549c7068c125c4ab144b9766c019c541d34dbf4b9acd648f532b65b50c34afb003e7c0ab0bbfbb5b5ac2cba84ad3305ce33a1b381ef83915d76d05feb9d47fc4202f91fe34580437cd4560fc03a5bdbadc2adc69319dc6a0701855f5a0b79331b93820aeadf49e707deae6311cd228181a8e3e556c424b1337e10e09f90a6ea7756314f0a4cd116543110a1b57638ce4014d0f52ea6048ecd285fdf72001f36daa5e9d2dbdc4715d2e95c2ea2be6f213c8c7350f4891e39e55957fe1a60253e88c71ac7b0c6f57b6ed773c49210be2292091c11c8522bacd842d60502e04480478dfbfa0ae8fd26ceea69a4b9ff7cb11c150485c9e35575f0961690dac24f99f5e9efe4f97bd75cf12dbee0bab124506ac8fe2c8de92e5ae1209633a4908d1e38565014afe95d52d91192e205c432e7481fbac3f12fd391f00806645a48126b38db9cae363c915d4622b216d38d5bd4206a00f14eb68965677121cb0f2e91df4efcd5a7510d3689540c1c26938589f8dbd8e37a1693de8568c44e13c811490cbb93821f7a8ed26b27d725be8470636d58c10d5601d5e3b67195538c373a78efdc57516783a7cececc4ac64e42eb240d8123bfbd431e831f84d1e65605df4fe35c0001aea1d31aefa9db5db30fbbc6a8d8e412bc2d7da8943df91b7962453f3625aba449e2c73daf0c01963f981e6fd37a882ddc3716ce40c8ca93d98706a4528eea46083b8feff006b853addf4a823b673ec2aceee29ecde33a14a90631dc9a754baba8e366011892cc06e00e6af3a61b192de5446114b1874c9c953c633f3a333c935ac5da3c051eec79a46267930397381f335d32e5216d0ef99348519380c0766e771d88a99a7b9d11c802a8e31beac7a9a8a32973131424ae6a42995c6f8c153c735d50dac0520880123fe041c807963e8b492aa4c96b92db1909ec4e40aea93fde2f2793390d21c1f65f28ff4ab79deda58e64386460450bb549c4c99d24e71ec6afd7170cc386dc1feff000aaccab18da4d795df639a679e0401b500472462ba54866b960c324a73f2ef5f69e043d3ece3880f279c9e3c8001fea454d1a45d46de0041c4f18cefec7fd1aa16537284103753fa03424743e6d8e41ce6ad7adcb090ae54f04eace338ef8aff00692cd74a5c2800648647d7db1d8541f683a85e5f168a18d20049c9e513dd9b6aeadf68fa740a668b12c8c0a8d041ff0031ec2acba8dc4c9d4aee57c32a0587d99f803f2a620b1c70361f21fb03118a791658429fc49ba9f6ee3fbf824545d52e6352ac55d48e1d43574796192fa1cc0158b6328da7623d0d7568248ba1c82662ce1123049ec1d40fcc0cd7528c0ead6f2c634a1f0a405b8011541cfe54b6aebe13c7323eb4f20dd4b63cba70dfbded4b336349624a700f6a13139249a697bd4927948a6392a3db1fad45d3e43d30951c92c7e67fa0a64d2c41f5a20d63200a23071f01b19beeb730cdfc0c0ed57ec2f7a15cc918f214571c1ca860d9da9a1786d12ea3fc4ca10b101b485383cfcc55d82ab04ba42eb646d206029232db7604ef57136a90363048dfdeb5d19299f3487cf1d5edf4d6f61d3d206235862de87b62af934cf27cebeb5b50cb1033f0106ba6f587b6826b39b2d0488cbee84f06ba3c0f756062621429cab633be360c3b8e6bab74c683ef93b4cb3233a488625db481a5576d8019a8fa75fde7fbc584ac6aa034b279231a47ab54cb1c47c92071d9870d458d36a04a9041070452ea668c28258ec07a9268dd426de08dc2b1424ae78c7008f9d5c4a66919a82e7caa85989c0a82d56465479007278c8c55c5bf813c9013b83dc11ffb8035a58b69ef9c7ecec7fbf0a535f65ee9e4b74c363522eaeff8763573d0faa74bba9bee45dad5dc9f2370b26d820771571075a988496cee9cab1015c49263d8034dd32e50eabd912df6e246f39f922e4d33470b111e4b03b16e47bd1356f07856ff007b90635e561f7c6ccdf21c53c859d9aa25d6c171b9a8bc18b5f8a5830ce76ce3dbe66875f9a28521b6b6863453962172ce7fea26a494c8da8924fbd020ba92793bd48a75bedff57e7fdfc1a0d835f672ea5686fed217d32782ef1ef83c60e2ba27da5fbd431c37e434f182cafc1931fcebab9ebb3bcb31ba91e12469489fc351e80e2a64b94d40c2e9fc5e53bfd6a2b4bab86d30db4ae7d1109a1d253a790fd51807c6a5b4461e237bc846c8bfad5edec97721638030000a30aaa38551d947ec8e568f7534eccc77393c9f99aec7f60a59096df1f8597f3f800ab49a4b5b88a68db0e8d953dbe46afa35f112f2dd4ac73b174df7493f7976ab4ea97cd685ed2505e3219974824af70453fda9ba886896c2d9f032a48c8c7622ae3ed5f529432c4442a7911617f51bd3caf26751e4e4fb9f53ea7ff038f80ab918ab6baf0a396293cd0c98d4be8470cbee2a0bb9acee23bbb66074303ec7bee3d0d5e0e977f89ed48b7326e6291bc9abb856fdd6f9f352d8ce8ce34f19383b71e9d8fd299590e19483e87e168ed1b0653834646f381e556c654707149249167c391973ce924533bbe35bb3606064e7ff005c7fffd9, 'ABOUT', 'COM36222');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL DEFAULT '-',
  `bdate` varchar(255) NOT NULL DEFAULT '-',
  `bmonth` varchar(255) NOT NULL DEFAULT '-',
  `byear` varchar(255) NOT NULL DEFAULT '-',
  `email` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL DEFAULT '-',
  `city` varchar(255) NOT NULL DEFAULT '-',
  `street` varchar(255) NOT NULL DEFAULT '-',
  `zip` varchar(255) NOT NULL DEFAULT '-',
  `country` varchar(255) NOT NULL DEFAULT '-',
  `phone` varchar(255) NOT NULL DEFAULT '-',
  `about` longtext DEFAULT NULL,
  `avatar` longblob DEFAULT NULL,
  `services` longtext DEFAULT NULL,
  `expertise` longtext DEFAULT NULL,
  `people` varchar(255) NOT NULL DEFAULT '-',
  `last_login` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL DEFAULT '-',
  `login` varchar(255) NOT NULL,
  `member_no` varchar(255) NOT NULL,
  `stud_company` varchar(255) NOT NULL,
  `student_classcode` varchar(100) NOT NULL,
  `student_ojthours` varchar(50) NOT NULL,
  `student_remaininghours` varchar(50) NOT NULL,
  `assig_dept` varchar(255) DEFAULT NULL,
  `stud_num` varchar(50) DEFAULT NULL,
  `stud_section` varchar(50) DEFAULT NULL,
  `ojr_prof` varchar(255) DEFAULT NULL,
  `cetificate_stats` tinyint(1) DEFAULT NULL,
  `cetificate_img` longblob DEFAULT NULL,
  `resume` longblob DEFAULT NULL,
  `disabled` tinyint(1) DEFAULT NULL,
  `cmpn_code` varchar(255) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `user_title` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `stud_department` varchar(255) DEFAULT NULL,
  `stud_supervisor` varchar(255) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `absent` int(5) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `age` varchar(50) DEFAULT NULL,
  `school_year` varchar(50) DEFAULT NULL,
  `moa` longblob DEFAULT NULL,
  `permit` longblob DEFAULT NULL,
  `new_acc` int(5) DEFAULT NULL,
  `cos_company` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`first_name`, `last_name`, `gender`, `bdate`, `bmonth`, `byear`, `email`, `education`, `city`, `street`, `zip`, `country`, `phone`, `about`, `avatar`, `services`, `expertise`, `people`, `last_login`, `role`, `website`, `login`, `member_no`, `stud_company`, `student_classcode`, `student_ojthours`, `student_remaininghours`, `assig_dept`, `stud_num`, `stud_section`, `ojr_prof`, `cetificate_stats`, `cetificate_img`, `resume`, `disabled`, `cmpn_code`, `status`, `user_title`, `title`, `stud_department`, `stud_supervisor`, `middle_name`, `absent`, `id`, `age`, `school_year`, `moa`, `permit`, `new_acc`, `cos_company`) VALUES
('Aura', 'Cueva', '-', '-', '-', '-', 'spard.admin@gmail.com', '-', 'Quezon City', '- 673 Quirino Highway, Novaliches', '-1116', '-', '-', NULL, 0x89504e470d0a1a0a0000000d49484452000001f4000001f40806000000cbd6df8a000000097048597300000ec400000ec401952b0e1b0000003374455874436f6d6d656e740078723a643a444146646d45794e3764673a332c6a3a34333534393933323037392c743a32333033313930309431f8ea0000053869545874584d4c3a636f6d2e61646f62652e786d700000000000687474703a2f2f6e732e61646f62652e636f6d2f7861702f312e302f003c783a786d706d65746120786d6c6e733a783d2761646f62653a6e733a6d6574612f273e0a20202020202020203c7264663a52444620786d6c6e733a7264663d27687474703a2f2f7777772e77332e6f72672f313939392f30322f32322d7264662d73796e7461782d6e7323273e0a0a20202020202020203c7264663a4465736372697074696f6e207264663a61626f75743d27270a2020202020202020786d6c6e733a64633d27687474703a2f2f7075726c2e6f72672f64632f656c656d656e74732f312e312f273e0a20202020202020203c64633a7469746c653e0a20202020202020203c7264663a416c743e0a20202020202020203c7264663a6c6920786d6c3a6c616e673d27782d64656661756c74273e4461726b20477265656e20616e64204c6967687420477265656e204d6f6465726e204772616469656e74204865616c74682050726f6475637473204865616c7468204c6f676f202d20313c2f7264663a6c693e0a20202020202020203c2f7264663a416c743e0a20202020202020203c2f64633a7469746c653e0a20202020202020203c2f7264663a4465736372697074696f6e3e0a0a20202020202020203c7264663a4465736372697074696f6e207264663a61626f75743d27270a2020202020202020786d6c6e733a4174747269623d27687474703a2f2f6e732e6174747269627574696f6e2e636f6d2f6164732f312e302f273e0a20202020202020203c4174747269623a4164733e0a20202020202020203c7264663a5365713e0a20202020202020203c7264663a6c69207264663a7061727365547970653d275265736f75726365273e0a20202020202020203c4174747269623a437265617465643e323032332d30332d31393c2f4174747269623a437265617465643e0a20202020202020203c4174747269623a45787449643e36383637356233662d356432382d343732622d616230632d3164383937643166316539633c2f4174747269623a45787449643e0a20202020202020203c4174747269623a466249643e3532353236353931343137393538303c2f4174747269623a466249643e0a20202020202020203c4174747269623a546f756368547970653e323c2f4174747269623a546f756368547970653e0a20202020202020203c2f7264663a6c693e0a20202020202020203c2f7264663a5365713e0a20202020202020203c2f4174747269623a4164733e0a20202020202020203c2f7264663a4465736372697074696f6e3e0a0a20202020202020203c7264663a4465736372697074696f6e207264663a61626f75743d27270a2020202020202020786d6c6e733a7064663d27687474703a2f2f6e732e61646f62652e636f6d2f7064662f312e332f273e0a20202020202020203c7064663a417574686f723e4a6179736f6e2050656c6f72696e613c2f7064663a417574686f723e0a20202020202020203c2f7264663a4465736372697074696f6e3e0a0a20202020202020203c7264663a4465736372697074696f6e207264663a61626f75743d27270a2020202020202020786d6c6e733a786d703d27687474703a2f2f6e732e61646f62652e636f6d2f7861702f312e302f273e0a20202020202020203c786d703a43726561746f72546f6f6c3e43616e76613c2f786d703a43726561746f72546f6f6c3e0a20202020202020203c2f7264663a4465736372697074696f6e3e0a20202020202020203c2f7264663a5244463e0a20202020202020203c2f783a786d706d6574613e56d124d60000492f49444154789cecdd596f1c577ac6f1a7d7eaea954d369b6cb24971696e22c54dd46ed15a6c59b267e4d81a2df64cc6c0dce423e54b24978301820001925c78061828c9456680319065328b1759a391424b2d89958b961cd916d5cd66559d5afe3f80804dc9e40ba3fa3cf59e3a754ea234bbe4080000845ad274010000e0e00874000022804007002002087400002280400700200208740000228040070020020874000022804007002002087400002280400700200208740000228040070020020874000022804007002002087400002280400700200208740000228040070020020874000022804007002002087400002280400700200208740000228040070020020874000022804007002002087400002280400700200208740000228040070020020874000022804007002002087400002280400700200208740000228040070020020874000022804007002002d2a60b00e08e72baf355c948e58c944938dff8f34c52b292522e29e552522ad1dbcf751ce9e1aef4bf4fa59d27d2ced384769e4a3b4fa5f6aed476a4c7bb9dafe7ff0cc07f043a1060764aaaa4a5625aaa66a472c651f9d9bfdb49c94a7502daf275aecde9fa37eeb4a52f1f4b5fb6a52f1f2774a7ddf9defd273e9407c414810e18964e48754b1ace4a35cbd188d509f14aa6f367613494ed7ca920bd7803f06857fafc91f4455bfaac9dd0a70fa53f3eea7c1fc0c110e8808f6a5969c492ea96a3e1ac346c753aefb8b09252d3ee7cbd18f4771f4b7f7828fdf6ab84fefb2be9d347c64a04422b519a5dea3e7f06a02f93cfc2ab99733469779e5da3bbfb4fa4dbf7a4dbf7124cd3033d22d00197e4539d009fb01d8ddb523367baa268b87d4ffaa73b09fd9960075e894007fa3490915a05693ce7a869c76beadc849fdf95fee18b849e3062012f45a003fb504c4b874bd272c9d1381db8efeeb4a5bff97d429fb74d5702040f810e743194ed74e2f34547876cd3d54092fef60f09fdeabee92a806061953bf012b5acb45971345fec4cad2358ae351cfd3499d0ed7ba62b01828340075eb05c92b6061c4dd08907de3b238e1eeed2a903cf11e888bd525a3a3ae068a3221578ad2c54de1d7574b79dd01f796f1d20d0115f9376a71b3f5c325d09fa954e48ef351cfdf57f86744b3dc045043a6267bd229dac3aaa654d5702370c65a5a315e9973c4f47cc11e888857c4a3a5e655a3daab6aa8e7e798f2e1df146a023d2ec94747ad0d1b181f01e7482ee869fed91cf1ef08833021d916425a533cf823ce3ebd1a23065c226d0116f043a2267bd229daf394cadc7ccb0e548621a06f145a02332c6739d7793eb96e94a6042911b38c41c818ed0b353d2c59aa3f58ae94a60d25336b146cc11e808b5cd67d3eb36dd59eced3c355d016016818e50aa663abb8435d9a215cfdc69f3fc1cf146a02374d62bd2a561475956afe305bf7b68ba02c02c021da161a73a5d79ab60ba1204cdc35de9f7043a628e4047280c5bd2cd3187a34cf152ffc2b6af00818ee05b2a753a73767ac35e7e71978b034894669778d9038175bee6e8cca0e92a10749fb7a54f1e489fec24f45f3ba6ab01cc20d0115857471dad964d5781b069ef4abf7e207d7c37a1cfd80a163142a023906e8e3b9a63f11b0ee8b75f49bff85342bfba6fba12c07b043a02259b946e8d3b9ae4fd72b8e8cbc7d2cf3e4de83f988e478411e8080c2b29fdb0e9682c67ba1244d5af1f487ff759427f7e62ba12c07d043a022197927ed47434cac12af0c1df7f9ed0c7774d5701b88bbdb6605c2e297d4498c3476f0c3bfa61d3519117771121043a8c4a27a45b4d47c384397c369d97feea90a3f9a2e94a007710e830eafd86a326cfcc61889d926e8c39da1e325d097070043a8c797b84ee08c1b03de4e80763ec46887023d061c446a573963910148b45e9a309473946458414972e7c57b7a4774678b902c1d3c8491f36399a17e1c4650b5f59c9ce2e7040508de5a40fc7997e47f810e8f0d5d55147155e1542c0356de90763dc78225c0874f866b9242db0080e21d12a486fd509758407810e5f1452d265064784ccb101698d13ff1012043a7c7175d4919d325d05b07fdf1f6517438403810ecf2d14a5598e424588dd1c7794e386140147a0c353e9847485a976845c292d5de5554b041c810e4f6d0f710006a261be28ad944c5701ec8d40876786b2d2e941d35500eeb932e2a8cc0d2a028a408767ced798a244b458495e65437011e8f0c488d5d91b1b889a85a274c8365d05f05d043a3c718eee1c11768505720820021dae6be4a4395e534384d5b26c3883e021d0e1ba1303742f88bef3350e7041b010e87095959456e85c1003c5b4b43560ba0ae0ff11e870d55ac57405807fce0c3aca308a2220b814e1aa2da6db1123764a3a59355d05d041a0c335e339693063ba0ac05fa7aa8e2c4652040097215cb35ca23b47fc6493d2068f9a1000043a5cb3cc6238c4d4f12a37b3308f40872b266da9c0f19288a9725a3accc12d308c40872b0e33dd8e983b49970ec30874b8623a6fba02c0acb15ce70b308540c781d9a9ce51a940dc6d56e8d2610e818e036bd2950092a4f58a78850dc670e9e1c0266cba12e0b923bced014308741cd8386743035fdb60da1d8610e838b043043af0b5114b1a644d090c20d071203c3f07be6ba968ba02c411818e0361ba1df8ae25f6658001043a0e643cc7c0057cdba8250d7050117c46a0e340c69972471f72b9ac7ef2e32b7af3e296866b03a6cbf1c422d3eef059da740108af7c4aaad085a00fef5d3dab72b9a0e57241cb4b53facd27ffa37ffce77fd3fd073ba64b73cd7cd1d1c77713a6cb408c10e8e8dba865ba0284d15b6f1cd348bdfa8defcdb59a9a6b3575fb5f7fa38f7ffeef7ad47e6ca83af74cda9d4d661eed9aae0471c1943bfa36c2743bf6696db5a5a5c5437bfef9c6da9c3efacbcb9a9e6af8589577660ba62b409c10e8e85bc362411c7a373b33a6f3dbeb5dff5edeb6f4eef7cee8f5b36b3e54e5ad5681cf08fc43a0a36f9c2c855e4d4e8ce8fb6f9fded77fb3b136a7772e9ff4a8227fb4e8d0e123021d7dc9a5782d07bd19a95775f59dfd85f97373ad66a8433d9feaec1c07f88140475f1a0c52e841a552d47b57cf2a9d4ef5fd33e65a4d7defed532e56e5afe9bce90a1017043afa42d7816ef2b6a5f7df3dab5ceee01b9bb766c675e5ad132e54e5bfe93ccfd1e10f021d7da9b3200eaf90cfe774f3fa0555caee3d445e989bd0e6fa9c6b3fcf2f87e8d0e113021d7d19e63429eca154caebe6b573ae86f973dbafada9d11872fde77a299d902638f3003e20d0d19761a6dcf112f57a551fdeb8a84ac5bb7d4f2fbf79dcb39fed9526810e1f10e8d8b7c14ca7eb005e54af5775fdbdd765dbdedeed55ca055d38b7e1e9ef705b93438ce003021dfb46778e6fab0d5574ed2fb695c9f8b39bf4eacaac6a43155f7e971b9872871f0874ec1bcfcff1a2466348d7df7f5d56d6df8d09b65f0bcf4e721c64043f10e8d8b71a2bdcf1cce1a529ddbc765e96e5ff5ddee4445d13cdbaefbfb75f1c350caf11e8d8373a7448d26ba78fe8d2c52da3359c3ab16cf4f7efc72837c2f018818e7d1b22d063efedcb27b5b5b960ba0c8d3586343a3268ba8c9eb01913bc46a0635f0658e11e6bd96c4637ae9dd77cab69ba94af05e1c6a217043abc46a0635f0659d8135bc582ad5bd72f682c601bbbb466c7552a067f3bb6625ab2fbdfd21ee88a40c7be30dd1e4f4383657d70f3a206ab25d3a5bcd4fcfc84e9127a42970e2f11e8d897a12c0b7be266716152b7ae5f50211fdc65da8b2109f43a810e0ff9b30b042263900e3d363299b4ce6fafebf0d294e952ba1aae0d68a052d49fee3d305dca2b0d671d492c428137e8d0b12f3c438f87c1c1b23eb871311461fe5c18a6dd6bdc10c343043af66580408fbc85b9097d7823b8cfcbf73233d5305d42576c9b0c2f31e58e9eb1202efacebfbea1b523b3a6cbe8cbe8c8a0f2f99c76761e9a2e654fb96467b5fb8327a62b4114d1a1a36774e7d155c8e774ebfa85d086f973d353a3a64be88a697778854047cfaa047a24354607f5a30fde0ccd8e6bafd21c1f365d4257dc18c32b4cb9a36703195e598b9acdf5796dbfb66aba0cd784e148d56a8695eef006818e9e55b85a22a358b475e5d2098d8fd54c97e2aa6a0816f231d305af3044a3676506a248585d99d1d933abca64a2f7f14fa7522a15f3baff60c774297b62ca1d5e89de271a9ea1430fb74ab9a04b6f1c8b5c57fe6de572b0039d0e1d5e618846cf8a5c2da1757c6b51a74fae982ec317e55241bfd317a6cbd8939d92b249a9bd6bba12440d43347ac2346138d5eb555dbab8158ac5626ec9e783bf7b4b392d7dd1365d05a28640474f4a5c29a173e6d48a8e1d5d345d86ef6c3bf8815ec910e8701fc3347a52e64a098dd19141bdf5c6b150acf8f64228029dcf133cc065859ed0a1075f3a9dd2e9932bda5c9f335d8a51b95cf0b7622bf32e3a3cc0308d9e14d36c2a1364d3530d5d38b7a152316fba14e3ac6cf0177c70830c2f7059a127c594e90af0328582ad7367d734d76a9a2e25302c2bf881cee7095e20d0d19302574aa0a4d3291d3fbaa88df5b9486e10731061e8d0f93cc10b5c56e809efa007c7fa6a4b278e2d8562f1970961b8c1a1438717827fe52310f20c40c62dcc4de8cca91595cb05d3a5045a28023df8252284b8acd09302816ecc48bdaa73db1b6a8c86ff78533fa4d3e1b858f32969e7a9e92a1025043abab2c3313e464ea190d3d933ab5a9c9f345d4ae864b319b5db8f4d97f14a36810e9711e8e88ae9767f595646c78e2e6a7dada5748afff9fd48a753a10874c04d043abab293a62b8887742aa5b5d5591ddf5a9465057f7394200bc3b43b37ca701b818eae720c3c9e5b5e9ad2e993cb2a146cd3a5444218029d1b65b88d4047574c0d7a677565564737e75561e5baab4211e8c12f112143a0a3ab1c9d84abac6c46ab4766b5b93ec7bbe41e09c3da835c8afddce12e021d5d5904ba2b0a859c36d7e7b5ba32138a77a5c32c0c1d3a9f2bb88d51055d59490e663988917a559bebf35a989f305d4a6c8421d0b3043a5c46a0a3ab6cf0c7c6406acd8c6b73634e638d9ae95262271481ce6c3b5c46a0a32b8b81a7679695d5cae129adadb6542e7194a929e954f0db5f3a74b88d4047570c3cdd0d0d95b57664568797a642b1202bea5261e8d0f95cc165043abaca30f0ec69616e422bcb339a680e9b2e052f08c34d15810eb711e8e82acd94fb37944b79ad2c4febc8ca8cec1caf9d05512a0453ee193e577019818eaee8d03ba6a71a5a5d99d1f454c37429e8220c8be2d27caee0b2ff030000ffffecdd79981c677d27f06f557555f7f44ccfa999916449962cebc0b2f105d8181ff1b1b139ccb18685e5d86559d88784e709090ff090cdee029bec43368b0321606212733c8100e1018ced183bb1b1c1f72159962cd9d635f73d3dd3d33d7dd6b57f8c245bf28ca68fb7eaadaafe7efe026bbaea674fa9befdde0c745a5533b7d0db5349ec3a6f33769db7056ddc963534c210e86ca193680c745a553306fab95bcfc2f9bbb660f3a6b5b24ba13a8422d0d94227c118e8b42ab54902bdbfaf0b3bb66fc4793b372391e06967611686406fc62fcae42d063aad2aca0d89bede4e6cdfb6113bb66d448aebc623230c814e241a039d5615b5167a5f6f27cedd7a16766cdfc453ce224a8f85e3d51653008b3b2b9320e178ea49aa28047aef9ae321be6d233a3bdb6497431ed3f570b4d035063a09c440a7558535cfd7f4749c0cf1aeae94ec72c84761e9728fc297650a0e063a454a226160e78e4dd8f5bacde85dd329bb1c922416922ef728cf4f21ff85e3a927a9c2d088e8ebebc21b2ed981ede76e905d0a0580ce163a3521063aad2ac8437cfd7d5db8fcb25dd87236d78bd32b743d1caf36e63989148ea79ea40a62a0a75249fcded51761eb96f5b24ba10062a053330ac7534f5239014bf44b2eda8e2b2edf159a894fe4bf785c975d425514263a09c440a755d90109f4eeae76dcf8efde88febe2ed9a55008c4621a2ccb965d06916f18e8b4aa20b4d0b76fdb88b7dd7899ec322844743d16f8407703f0778ba283814eab92fd4afcbdab2ec245179e2bb90a0a1b438fa1582ccb2ee38c98e72412039d56653b72ee9b481878c75bdf8c0d67f5ca298042cd30f87aa3e6c2279e565591d08ce8e969c7bb6fbe12a9361e9842f589c7837f629ea4efca14510c745a55c5e7b7ce96b3d7e26d375d1e9aa547144c7123f833dd83303f85a2836f4c5a95e963a0bfe1921db8f28a0bfcbb2145561896ae31d04924063aadcaaf16fa35575d888b2fdce6cfcd28f2c2d0e52e7bc229450bcf06a055957c0874863989168616ba9fbd5f147d0c745a95d7817ee5151730cc49b844085ae8442231d0695545dbbbfd29d3b912d6ade7b234122f9160a0537361a0d3aa4a1e0df465f265cce54ad8b37fc09b1b50530b7aa0fb319445cd85814eab2a7af0e2c9162a985928020076ef3b2afe06d4f4821ee816039d0463a0d3aaf296d8eb2d964c4c650a27ffff4c3a8be1b159b137a1a6d712f440e79235128c814eab5a14d8e55e285b9898cbbfe69f3fb5e7b0b89b10014824e2b24b3823063a89c640a7552d9862ae53326d8c2f13e600f0d4730c74122be8cbd6fcde8191a28f814e556974024fd9b431965e84bbc27991c55285a14ec205f92c00932d74128c814e55c936d04ab76c0763e94538abec73f9e8d32fd57f13a2652493c1ed76e7a632241a039daa926d6062dcf85c1e76159b561f1b9ac2e0c874fd37223a4d6b6b4276092b62973b89c640a7aad41be893f37994cdea67d53df8e8fefa6e44b48c6492814ecd83814e5559306bdf2d2e932f2357acadaf7ecffe016416969f384754abd6648bec12565466a093600c74aa4aad2df452c53ab9714cadfee5377beafa1cd1e9526d0c746a1e0c74aa4aba52fdcf3a8e8b89f9c2ea3fb882c79f7919b373b9ba3f4f74422a15dc59ee96ebdd1909d49c18e854955a027d7c2e0fcb6eacf9f1abfb9f6ee8f34400d016e0163ae39c4463a05355ca0eb05845b77b3a5742b1d2f85eb17bf60fe0e8e064c3d7a1e616e42e77063a89c640a7aaa55799df56ac5898cb9584ddef1f7ffe3b98a6e08de4a9a918868e584c935dc6b254263a09c640a7aacd9457fe33db71313157ffb8f9b2f74b6771e77dcf08bd26359fce8e36d9252cab8aad19886ac240a7aa4d96576e524ccce7613be2a7ed3efcc4011c1e98107e5d6a1e410d74ce7227d118e854b589157ad3e7164b2896bdeb1affde4f1e42a92ce884186a3a1d1dadb24b5816039d4463a053d5a696e9722f566ca4b3e2c6cd97b3902be0873fff9da7f7a0e80a6a0b9d3bc591680c74aac9d869d93d95f16757b7e75e18c04f7ef5982ff7a268e9ec0c66a0b3854ea231d0a92683af9af736b5508469f9f7567ae4a917f1a35f3e52d36732396e23dbec3adad9e54ecd81814e3519282c4d8ccb941d64f36798f6ee91c79f7919b7fedddd55edf7be982f616272de87aa28c8da19e8d42418e85493c1c2d2d8df9cc403548e0d4fe12ffee6e7673c3f7d6a76015ffffb7b303832e363651454bd6b3a6597f01a3c0f9d448bc92e80c2e7a9a90ad6bad51f89ea8562a9821fdff9281e7ff665bcf1c2ade8ea6c436b328e72c5c2eee78fe2e9bd470000e3536ca113d0dd9dc2cc6c467619a7b0b80e9d0463a053cdb2151b6b75d9552c191a9dc1d0e8caadf089a9391faba1a0eaee4ac92ee1356c063a09c62e77aa59d609e6569acb99980e56ab8ce4e8ea6a975dc26b30d04934063ad56c2144810e0023e369d92590643dddc10b7476b993680c74aa592664813e3ac1406f76410c7422d118e85433cb555072c3f3e88c4d701c9d80ee0085bac9d63979203c6f650a94ac139e476774922d7402742320333901b80c74f24078deca142861ea761fe5183a01a870e137451c039dea12a68971c55205e9f99cec3248b2b44fe70e5463e5838889eac740a7ba8469e91ac0563a01c3937370d9d74d11c640a7ba84a9850e00c30cf4a636399d81695a2856e4ee7048e425063ad5c57415e44334316e647c56760924d1f0f1df7fb16249aee438f6b99307c2f346a6c0e1c4380a8b91b1e3815e0e46a033cfc90b0c74aa5b98027d2157406eb128bb0c92e4440bbd6406a3cb3dc644270f30d0a96ea11b471f63b77bb31a1a5dfaddbbae1b9c6e7722c118e854b7b0053ac7d19bd3f4ec024cf395102f04a4dbdde0db9704e32345750bdbd235b6d09bd3e9bff742c99454c9a9d8ed4ea231d0a921734e4c760955e3a96bcde9f4402f99361c47fe7a74063a89c640a78664ecf0b4d2e7328b58cc976497413e5bae67261f806e77063a89c640a786cc87acdb7d7074467609e4b3e57ee785b2fc6e779d6f5f128c8f1435244c4bd7006070645a7609e4a3d189f42913e24ec807601c3dceb72f09c6478a1a321fa22e778081de6c064796ef91b11df9cbd718e8241a1f296a880d05b910b5d2577ac153340d0caffc056eb128b795ce4027d1f84851c3c2348e5e2c553035bb20bb0cf2c9e0e8ca812ebbdb9d814ea2f191a2868529d001e0f0b109d925900f4cd3c2e47466e53fb71d94256e056b84ebaf0d8500039d1a16b671f423030cf46650cdf04ab650f1a192e52555f96be1295a18e8d4b0306d2e03008718e84d61a88a9d01b3457981de12aeefc114020c746a98e92a28b8e1799416b205ccce656597411e1baa62cf01c771a5b5d2930c74122c3c6f610ab4b99075bb1fe2387ae45513e880bc6ef764b83ab6280418e824c47cc8badd0f1e1a955d0279682157407a3e57d5cf162b9694c9716ca193680c7412226c2df4978e8cc92e813cf4dcfe819a7e7e7eb1ec51252b6b0dd75f190a01063a0911b68971c552052fbc3c22bb0cf2c8ee7dc76afaf95cb102d3763caa66797195fbb993587c9c48888aab60d109d7e3f4f0e3076497401e189d48e3d8f054cd9f93d14a4f85eb7b30055cb8dec01468616ba5bf78781453332b6f3c42e1f4c0eff6d5f5b96ca102dbe773d253ec76278118e8244cd836980180bbfef559d925904013d3193cf3fcd1ba3eebba2ed2b992e08ace8c2d741289814ec2a443d6420780bd0706ebea9ea560fae9af1e6be8f30bf9322a967f63e90c741289814ec2846da6fb093f6930042818f6ec1fc06101bb00ce668b02aaa94ea7c1ed5f491c063a09634341366407b500c0d8c41ceefdcd73b2cba0062ce64bf8f19d8f0ab956be64a2e4d359e99d6ca193400c74126a2e84810e00fff2c06e8c4fcec92e83eaf4a35f3c824251dc2cf5a98c3fadf44edd97db509360a09350693bbc4d8e7ff8a707615af28ed3a4fa3cf6cc4bd8f7e290d06b562cdb9709723d86e7b7a026c24027a1c21ce853b30bf8c5bd4fc92e836a909ecfe167773fe1c9b5e77225547cf882d71edebf3214300c74126aded16043915d46dd7ef7e441ec3b28b6b547def9ce0f1ff0b4576572bee0d9b54fe8662b9d0461a09370619ded7ec2777ffa1046c6573f4b9be4fad6f7efc3e844dad37b944ddbf359efdd1c47274118e8245c98bbdd01c0342d7cf37bf7612eb328bb145ac18f7ef1886f27e6cd2f96912f999e5dbf9b4bd74810063a0917c60d664eb7982fe11b77dc2b74e63489f1ebdf3c87c79f7dd9d77b4ece17607ab4e10c27c691280c74122e1df22ef71366d259dcf6fdfb619afeac49a6d53dbdf708ee7960b7eff7755c17e3737938aef8d6f41a063a09c24027e18aae8a921bde8971af3630328deffef421d9651080038746f0837f7e58dafd2b968df1741eaee050efe2183a09c240274fccdad1794bed3b3884db7ff86fb2cb686a070e8de0b6efdf2fbb0c142b16c63c08f5feb8d0cb519362a09327d221dd316e25fb0e0ee11b77dc2bbb8ca6b467ff4020c2fc042f429d814e2230d0c913619fe9be9c978f8ee3d6dbef46a9ecdd8c673ad5234fbd883b7efca0ec325ea358b13032bb08cb1633516e5d8233dda9710c74f244d8d7a2afe4d8d014feea5b77229bf3ef44ae6675d7bf3e13e893f0caa68da1991c0ae5c6274dae630b9d0460a093276c28c844acdbfd84a9d905fcdfdbeec4d44c46762991f5839f3d8cfb1f7e5e7619ab721c1763e945cc35b8effbda84a082a8a931d0c933b311ec763f21b390c7fffbf65d181ee38e72a27df37bbfc6d3cf1d915d464dd2b91286677275effd1e53b87c8d1ac74027cf4439d001a058aae06b7f7f0f8e0c4eca2e25124a6513b7de7e375e3c3c26bb94ba944d1b43d3b9ba4f695bcf563a3588814e9e998dc08e71aba9542c7ced3bf7e0f90383b24b09b56cae88af7de71e1c1b9a925d4ac3e672250c4d67912b566afadc86164e8ca3c668f1eede2fc92e82a2c974156cd3cb8845638f9933dabdff180060fb39eb2457123ec363b3b8f5f6bb313b97935d8a30b6e362b1642257a8405114248cd5e793e82af06ca609feb2906718e8e4a96ecd4687eafd99d2417078600271d7c2395bd6010a5fccd5181b9dc45fde76172a11dd5ed7715de4cb26b285cac9256e314d85b2ccf391d49602dd64439dea14fd3e51926ac68e6163acb6aec730cb6716501c19427ced7aa806d722adc4751c5466a73170f0b0ec527c61d90e32f93232f9a5c37e5a8c1892f118e2ba8684a1415397463f37b5b87869915f06a93e0c74f2d44cc427c69daea73d01c7aca0383208a3a7177a67b7ec9202c72997509a1c876b99e849b5c82e478a62c542b1f24aaf84a62a4818316c506378099c1d47f5e1a438f254c6d16045e4a0966af4b4bf125095f40c4ae32370ede61872a886399f46717408aeb5b4db5e778ae1052c8db9e74b267a9c22fab5680e3f90f718e8e4b9992698ed7e42cf690165170b288e0cc22937b6f148d8b98e8dd2f8082a73a7aedb6f6bd161e8d1dc80a85e6f4ae4115338904eb563a093e79aa5dbddd035b4265e7bca9c6b5b288e0ec15c989750957c4eb984e2c820ec6261d93f3ffd4b50b34b2a0e2e32b8b530d58e814e9e6b9640efef4c9ef1cf2bb3d34b5df056f374a956e6668f77b1affcefbca6bd39c7d1cf64ab5e66d73bd58c814e9e8bfa8e712754134c4b5df003b072591f2a92c7a994511c1984399f5ef5677bdad9425fce65ec7aa71a31d0c917cdd04aefeda8aea5e93a0ecad313288d8fc031a37514abeb38a8a46796e60d54ca557da6b7e3cc3d1bcdaa855def5423063af9a2195ae9fd5db505935d2ca0387c6c69a2982be65c6d99acc51c8a2303303373357daeaf935dee2b61d73bd582814ebe986e86405f650c7d25e67c1a85e101588be1dcfad4b54c94c687519e1aaf6b7ec0baae560faa8a0ece7aa76a31d0c917cd70504b5f9d810e00ae65a13c358ed2d870d55dd54160cea751183a06bb587fd7b0a16b48b5f0ecd095241507af67d73b5581814ebeb05c05e908b7d21b09f357b34b45144706519e9e08f46c786b31f7ca708100d5ce3f6856dbf4327ad9f54eab60a0936fa23c314e54a09f60e5b2280c1f43253d03d709cef8ba532aa1383a84f2d4b8d0097da2fffb45d165f1bcec1228e018e8e49b288fa3d73b7e7e46ae0b333387e2f03198f369a9c16e178b284d8ca13836e4c9ae77bd9c18b7aa56d5c185ec7aa73388ee1b960227ca5bc0aeedf6ae85e9da362a73b3a8cca7a1a73a10ebec82aafb33e66c2d666166e6e094bd1dd75fcb897155d96994306c199877b85d2ebd5674dfb0143896ab60ded1d015c1f3d17d99a9edba30b31998d90cb4641bf48e4e6849f1f7756d0b5676016636e3db38feda1a97fc35b3cb1279dc5768975d060510039d7c3563c72217e8baa6fa3e066c1716611716a1e83af48e2ec4521d50d4c646d0ec5211567601566e415095d54bb518684de8c897a2b5d18e173a541be719251cac70873d3a15c7d0c957d3f66b0f2f09bb753df2ba8b5dd34465761a8581c3284f4fd4bc7cccb56d98d90c8a2303288d0d4b09f313ceea699376efb0b9c02822a90467b22405035be8e4ab28ce74dfb02625bb04004b33e3ad5c168aaa424bb6426b6985da9284aabfea4b94ebc22e1561170bb00b8b9e8f8dd7e2ac356d3834d69c27d2d5e3e278118f9538f7805e11bdb72b055ac55530e768e88e50b7fb8635c16a59ba8e036b317772e739d588436b6d836b994bffcc0de6ae636ca1d76643ac82b59a81c908f67a517dd8e54ebe9bb2a2f5020a5aa09fcea99461cea7974e780b689803c1ffef184497c6973f639e9a13039d7c17a51685aea95c722548772a8196383b0d6bd1a63ad8a18bdf1780c249496d7d5d70bfb25364bdbf2d5c63a5d7bcf723d872c1255873d626f46f3a079d7d6b0100d9990924e68ea072f8099803cf4aae32bcd46427e297dc8cf9d6cd58b7fd020040b958c0e4c011a4c74730397414bffdd90f3037392eb9d2e0b15c05f7143a507615d9a590640c7492e29a9645acd582bf44e9fcb75c8b0fff8fbf42cfba0dabfe6cf1f17f4269f79d3e54152d5acf46b4bdf3cfa0b675affab3f7def10dfcf26fbfe24355e172d48ce3d932d7f2373b063a49f13aa314f813a4defb27ff0b37fee73fa8e93395171f42fe816f7b5451f4e8675f8cd69bfe188a51fdd6af23870ee0db9ff9af98191df2b0b2f0b9a7d081bcc351d466c64027297a340b37b404f7fcef8ffdf937f0e69bdf57d767ada9a3c8dffb55388b69c155454bcbe5ef47e28db7d4f5d9f4c428bef291776061764a7055e1356219789ccbd89a1abfce9114693b061bc11bf3eb58d38f2ffce0aebac31c0062fd5bd1fec1af42df7cb1c0caa2436ded42ea962fd71de600d0b36e033effbd5fa2b377adc0cac26d63ac828e082d07a5da69f1eede2fc92e829ad31acd424a0dce6e575b2f7c233ef7dd5f60ede6731bbe96123360ecb80a6a4b0ae6d07302aa8b06fdec8b907acf17a175ad6ff85aad1d5db8f09adfc7d3bffe252a1e9c0017466daa8321cb9f837b2878d8422769a6ace02c51bafa960fe30b3fb80ba9ae1ea1d78dbffe26b47fe85668dd6709bd6ed8289a8ee4b59f40db3bff3b94b8b86ee1feb3cfc167ffe1e768ebe81276cd305bab99e8d3fc395087828763e8244da76ae3c664566a0df19624fec367bf8cab6ff9b0e7f72afcf6bb28efbbcff3fb048dd6bb05ad377e5a48ab7c2563475ec2adffed7dc8cdcd7a768fb098b56378b0188ced88c95f0c7492ea5dad192414398fe0f9575e87fff43fbf8aaefe75beddd31cdc8dfc03b7c12d067742a048894bdf8d962b3ee8cbbd66468770eb27de8bf4c4a82ff70bb2878b294c45f0dc043a33063a497559228fcdb18aaff7d4e371bcff737f8e6bdefb115fef7b825bcc22ffe0df457a231ab5a31fad377c0ab1f53b7dbd6f6e3e8daf7df2fd1879f980aff70d1ab6d29b13039da43a3b56c1e589bc6ff7dbbceb227ce22f6f43dfc62dbedd732595438fa1f0db3be0961665972254e2a2b723f1e60f4089c5a5dcbf522ae26f3ef5211cdafd8494fb07c543c514a6d94a6f2a9ce54e52155d15af33fc99a1fcce4f7e161fffcab7d01a9009545acf26c4cfbb16f6dc289ccc84ec721aa6a67ad1f6ce3f457cd7f550547941a2c574bce55defc7d4d0318c1d79495a1db2b5aa0e062d395faa480e063a496543c1fa988516c5bbe56b7d9bcec1676eff67bce9a6777b768f7a297a1cc68e2ba1b676c11a7d0170c2b98e387ede75687bc7e7a17506675df8a537bc1db9b934060fec955d8a14adaa83495b47d1e562a666c14027e9928ae3d9529beb3ef0317cfa5b3f42c79a3e4fae2f4aacef1c18dbdf027bf2109c7c780eae511229b4fdfe1f2171e9bba068c13b45eff557dd00b354c291bdcfc82e458a98028c725d7ad360a0937436149ca38b9d18d7b1a61f7f70eb1db8ee3f7e4ce875bda424da10df7503d46407acf117013bd8eb898d9d572375f39f42eb933f1fe14ccebbfc6a38b68dc37b9e945d8aef3a541b03661c6600776524f118e8245dd155b1432f4313f4ceb9ee031fc31ffef51d58bf7587980bfa2cd6bf15c6ce6be0e466e0cc8fc92ee735b4aeb3d0f68ecf2371e1dba0c4c2d1fadbf9a62bd1d6d98d171efd8dec527ce740c1941dbcde13128f814e81d0a9d90def43ddb7710b3efdad1fe1aa5b3e0cdd08f76420c56881b1ed0ac4d66c8239b43730adf5c42537a3ed1d9f879a5a23bb949a6d39ff6274af3d0bcf3f7cbfec527cd5a1da78c94cc82e837cc040a7408801d810abff7cf4b77dfcd3f8d4d7bfe7eb26317ed0ba37c0d8790dec990138b9196975a86ddd687bfbe7113fff06693588b069e705d8b8e37cec7df87e3801f992e4354d01f28e868ca3c92e853cc675e8140871c5c5bb5b33357feee2ebde8a7fff477f86b59bb77a5055b094f6dc8dd2933f816bd7ffc5a71ec6f62b91bcf613359d591e742fefdf873ff9e847d0ed64d1e246ff6097293b8687b9d14ce471d7010a84b2ab60ded1d05565b77bb2bd031ffdf2d771f1b537795c5970242eb919c6396f40fedfbe096bf2b0e7f753931d48def087d0cf8ede31b0c30b165e886d0300c4dd0abadd05743b5974390b68758b92ab13af5f5b5a1aca256cd1c640a7c098b4747419cb077a593190563b31afb4635e6dc7d7bff8055c7ced553e57289fdab90ea9f7fd9fa5d6fa533f856b79b36daeb1f36a24affe2f424f460b92df3cb6fbe4ff2e2b0626945e4ca8bd0000c335d1e566d1ed2ca0cbc922e5fab793a197ced12b3850e1587a9431d02930266c1dafc352f7674169c19cda7e3cc03b50544e9de4f6c4bea3b8f1fae60bf4131297dc0c63dbe5c83f701bac5171fb96ab1dfd68bdee93886dd825ec9a41f4d49e95ff9b55141d534a0fa6d4a5a3747558e874b2275bf01d6e38b7eadd1c2b33d0238e814e81a0697164f56e3c175b8f05b51d65e5cccba11e7b76bf4f9505979aea45ea3d5f44e5a5dfa2f0bbefc32d37d6924c5cfa2eb45cf12141d505dbc0f078d53f6b228619b51b336a370060a33d89f3aca35e95e69936d541976a639e93e3228b814ed268b104122dbd88e94928cad24b66bacacf1e1de4119927183baf416ce3eb91bfef6bb0c66bdfbb5c4df5a2f5ad9f41ac3ffa130b01e0c0e111d84efd5b0d8f6afd8857b258a72c20a9f87b5260a336c62a98af446772239d8a3324489a96641f74237532cc6b6159360e0d54dfca8a3ab5b50ba95bfe77cd2d6c63fb5bd0fec1af364d9803c0a3bb1bebdd71a1e0256d131eb076e0416b07f6dbeb31e5a66087e075bad1e7a38ac95f6ca193ef14a888e929c4f4b686aef3d0137bb07dcb7a41554543e2d27741dfb23413de9e5eb95b586deb41f2fa4f42df74a18fd505c3234f367e588ba61bb02b15e45d03036e0f069ca5f1f65e65117d6a0e7d4a0e29a5dcf07d446b531db4aa0ef24ef0bf7c50edb8b10cf942550c685a2bf4580774bd13464b2754b5c1b13c05b8e5ad578b293042d49676c4cfbf016a5bf7d2f236eb956051341d8937bc07ad6ffd63685d6749ac529e2ffdf577512a37d652551405aee3c03dadebbe0003336e0a834e0f86dd6e2cba71b850d0a29850118c2d3f324e8c9bcc44145be8e4094551a1aa09686a02aa9280a2a8affa33055aacf1bda5f71d3cd2f035a22cbeeb7ac4b6bd050b8ffd04ca0bf742db7c2912d77c1c467b8fecd2a49999cf22b39013722d4d37e0582b6ff25374750cb9dd18423760033d4afe78eb7d111d8abcb5ee7d9a8901331c7bf0536d18e8248caac697025c4d4055560e6c4d17f33259c82e229dc9a2a7b35dc8f5a2483312e8bef6a338dabe1d5b2fbd427639d23dfaacc0257e9a0645d5e05679867dda6d45da6ec58b00e2b04e867baf9a8381c6ce31a8c51ab539b6bc6d460c74aa9ba26827035c53e3a8768ea5a8400780c7761fc43bafbf5cd8f5a24a4b447383985a3dbdf745a1d78b1906cc52edaded32621871ba30822ec006ba9402fa8e8fbf772905a1359eae4d75a02b2e4c9747aa460d039d6a526d2b7c259a6e008ab817c96f9fdccb40a7aa3db5e705a1d753633a14a504d76d6c7c7cde4d62de4de265a70f066cf41e6fbdf7a939c421be45ddadda98b2f9fa8f1afe46e98c1425765a2bbcb130d6041f6bfaf41976fc227ab552d9c49163c3c2afabe906ac8ab819ed156818733a31864ec0063a9412fa941cfad41c7a1431dbd0b6aa36c0408f1cfe46e9340a34357e72429ba2887b44965a3362bbf986462750ae98881b8d4fb2a3687b7adf214fae2b3ad04fb7e026b0e02670d8e9450c0e7ad5c5a58057726851ea3b79af55a97f631d0a2e063a4155f4932d7055f56eafe798e1cdccda67f61fc29597467beff14619bd1b649720dd937b0f7a73614581a6ebb04def8fb5b5a062c269c704962682a694d2f189754b215fadb8128c2574241603bd29a9a7b5c2bd5f937a6246b0179ed8f322037d155d9d9db24b906ecfbe973dbbb6a6c77d09f4d3e5dc04726e02479d35d0e060cdab96c6b59e61639b18033d9218e84de295567802aa2a761cbb1a9aeedd3d1f7be6797cee13eff5ecfa140dcfedaf7d9ffb6a29aa0a558bc1b1e52d09b3a162ca4d61ca4e0100924ae578d7fc520b5ec32bddec3667b84712033da214a8a704b81fadf0156b5155a831ef1eb517b8c1ccaa72650b464c85a636e78bfcc09111148b254fefa1e986d4403f5dc13530e8f660103d800dac5116d17fbcf55e64033d9218e811a2aac6c99dd95435383b4179d93a07808a69e2e091619c77ee264fef1356b38b154c66cb58285ad8da9b842a786262183cb1c7a3f1f35751633128aafa9aed608362d66dc3acdd86a57521368c5809b65382e394e1229835536db8437f88298a064d6b85a17723115f8fb8de8798d61ea830578e4f18f2da137bc46e181215998289f185a59669d1b4319896b7e5a84ccfeef3aebbfdd5446e9ae4a993ef8e9ee3ef8edea577871292fa69590cf49051d538f45807e2463f12c63a18b12e686a124a407f957ebde044ef001605f9b28de1f953037cb16c6134d37ca1bef7056f96ac9d4ed375a11b27f965e9bdd28eb8d18784b11e46ac7be9bda204f3bd42cb63977bc09dbabd6a028d6eece237bf027df7f3de77a98649c97430985e7e0bd1b9bc89165d434f6b73b4c666e6b3189f98f2e96e4b070fd96678cf1d5714159a9684a62501008e5b81e39ce89e0fefbf573360a00794aa18d0631d5266a48b227a9bd733999e9de3412dc799b68363b379d867d88e742c5342d2d0d0a247ff18cd479e11bbddeb6a34c30875a09f4e550ca89a8198d60ed7b561d95958b6981deb48acff0f0000ffffedddd7731c479207e0ecee1990206576ef36f6eee94cdcc3c5feff4ffbaa904e9428d103a0873704e16730336deb1e5aa008109c695326b3eaf745e845a1209aad426557565625f2290c0d926fe8ced2df45077322fbfb893ffc6a77e2e6a8a814bd3b9a50512d2e63de389e50d9e0bf93eee1533bfbe757a2c8eca90e97a228a1e1e0afb434fc5792962d0c01023a235114d3d2f06f341cc8bf04241e0c298aed0eaf5f2c4fdc1cad1f4d282b9a552ce7a5a2cd13fff7d31fbf3077a1ccd788298eeb288997e9eed2bfb12ac00504743692f82edd59faf73ff6c9e53375cdeb3cbf3f0dbb306ef36442d3bc5d5fed715ad0c185b97bc85d9ba539adbe7c67fde7c6c9c0fa07ad6d5134a03bc3bfd370806d2e2efc1e71420c926f6869f837b695ea6d99bce6759e576fd629cdec5fbfc9c1eed98ccea7dd2e35391ca57431e373218a4ea61ab23461fafe052e06c977b434fc17d78f018480eedc20f9c68b14fbe75ca61b1f3c092fedbe7b36a3e3cb7e45585b27d3c6a97a498c35646940ea11b62e92f8de1ffbeae01202ba4383e45bef82797dcdabbb56a63f3f0e2bedbe77de3f981311554ad1faf184aa3995f112996cc8d284ef7be99f4be2650475c710d01da983f9f7ae1f433bd713d8234b37827170384ae968acef78545a54b47d6af6be73db4c366469c2f5ef836d08ea6e21a03b9024f7bc0ce6755f68b713d8534b3782b9763ac98d14b39d4f73fa30f2a348eec5db2de30d591689a2faa2999024f1322d0db0a7ee0202ba6571bce4ed60771dcc8988a6b3193d7bb5e1fa318c3a9fe6b47d6aeeb8d9878b94461e14c93db0d090a589c4c1890fd792e41e0d92fbae1f233808e85645de067322a20183804e44f4c0e37df4515a58393bbe753aa5a294bd9ffed0f1fef995284e284efcbf91efa6e1e02f4edb36870801dda2e1e03b8a223f6f90b279cdeb22b66f06b3e5322bbf7a3fbb6e65a568f3c4cecf3285d3f60b87ec957d7e2f60384240b7248e863448be75fd18c6709ab09e38b819ccb4695ed2fad1846c16a15f66a5d84b67ec3664592c1e0c83ec5c16c7772889975d3f4630c21b618e0c077f75fd08c6c4035eb7627d383ca2bdc313d78fa14d5a54f4fec8cd91b2c3514a9759bbdbe738b0dd90a5094e1fbd36f9763497333eb3b0c7eaf6a7fefe3273bc11eb272605517de56545ef3e5e3a6da2b279d2acd90b271cb75d92e190426c681245090d926f5c3f461010d02d483caef6e45af0f3ab078571658bce692615a5a22d614d5c5c346459288afe08eae11924b8efdd060474e362aff7905c34616982e584de825244ebc7cd3ba799364e0b3a14723e3dcddc34646922d4b47b14c55e2f6cb84040372c11ded37c9e288a9c5ef33acfebb71ba21bb5ac1f4f68c26ceffae042c67efa2f4ff954b7df14c531c5899f275d16f1a593246708e886c51e07f46489f7dfed47a1fbe8ebc7131aa73c2f76d93a993addcf6fe2e7c7bcffbf8778d10c91df73211708e886c591a7bfbc0cae795d84cb4d616d6c1c4f58dfd29697156d19bca54e8747cf796fb784d02bfd3611c5dedec3c14578a3cab238e69992ee8b7b3027e23fb1dfb4793215d1977c342bb43685d1ed89e3862c4d48f8fd31218efc9c0fb9404037a8fe1af5f3988a8409e9a9a0c2b8edd3299d4fe5ecf9ef9dcf689af3db4fe7d090a5094e372bdae4eb02870b0474837cfd1a4d06438a044c465996d3e3b5f7ae1f63a1bdf3199d4ee404f32b9bc75376fdd3256db348f828d62df2744ee40201dd205f072ff762b8cf719fe08f2f33d6e9eb79b2b2a2dd335eab612e0d599a0833a0630fdd24047483e2d8bfc12bada0e737c613fcf934671710db3a9de474c628bbc0a921cb229c8f7d9ae26bd6920b3933b3403eaed0a51db979f48ce78d71a3999d36a836ec9ccd282bdd5f8073c4ac214b1358a5834e08e806c59e0ddcfa9a57597fa7e39333dad93f72fd18d78cd382d62db541b5a1528a368fdd7f9cfcf070c5f523b41627094531bfab934df26d5ee40401dd90284ac8b70a7769abf32b3f3ee233d15fa6a557c1fcca3477df6af5e1539ed99845b85e9f6c0a56e8e620a01b5207747f44514489d0fdbe5f9ff038973cc9ea60ceac305c9bc351eaf4863ba9f7f7c7424e8de8e2dbdcc80902ba21be7d85726c91dad4130613fd342b9df534b769fb744aa583bf23e7862c4d84b497eedbdcc80902ba215eed13096ffbf8f6fd168d2fddedf1a64545ef8ffd0fe6444479a968e7d47ee5fe8327ee3fdafa4040071d10d00d89c89f419b0c86e26fb5fac9517ff4acace8ddc74bf60d4d743a9fe6d62fca79f044e6fef927c23f9adbf06ab1c30c02ba213eed1349ba48e66b7e71b08f9e978ade7d9c50115030bfb27736a3bcb4f7f796766fff6d246f6bb5135184d06304deaa21bea4957c29d8796c79c22f2b45ef8f2e2967703edb855229dab6d8954d4243964542ea95eed3828713047443bc19b0aaa2aae4df016c9195976fadfdac4a297a7f34a1b40833985f19a776bab23d7fb329a221cb225591930aa0ce82c89f050f3708e806f83458abb2a47c3aa1ec724c65968a9d7066b3947e7bf1c6f8cf29559d66e7d889cc85838b1965863f6c7e71541fa183aa2a2ab294b2cb11e5b329a92a8c71e3cd8287190474037c1cac4a7d3ef14c44aeda1f189ef8cb4ad17b04f36b2a45b46538f52ea921cb95aac8eb0fe589ec0fe5ae7c9c2339404037c0a715fa6daaa2f863d53e1235193d7c6a6e9fb5de334730bfcd242be97064ee1639290d596eaec6257e14ebe2fb1ce90adeaa0171205f9f4a292ab294284b291e0c28192c513ce03ba47e7f62a695ead59e3982f9d71d5ca4f4eddd012d0ff5fe6e4868c852153995791e7400bf092b7433b04237c0a733e84d554541f9ac5eb517594a4af12b08bb188d697de750eb9fa914219837b47932d57eb9ce0f0f5f68fdf374a957e333acc6bf222204741310d00d08f9eb5329456596527639aef7da0b5e13d9ff696ed4b27e3ca1498660de445654b477ae37f5fe2bb30b65aeef8d6762b6a36c0b798e340901dd000cd61ac755bbce462d1bc713a7cd48243ab9cc6834d3f7ce1e33d83f575545453aa314abf156b08fae1f02ba0118a8d75d5bb54fddaeda9face8a988de389ed085c6c01492edd3a996ab70d32ca7b557ee1ab2d4abf1cb7a359e67e46d1b3d43b0f0d10f015d330cd2f9aaf2c6aabdb2bb6a5fdfd8a1d165bf7ee4eb08e6bd1495a2bdf3fe17c13c786affb8da97ab716cb77485b9523f0474cd30489bb95ab5e7d34beba9f81f7fefbeefba713cd19a320ed5e924effd5164fa5e819b54555136bdc46a5c93108b874d4340d70c83b4b938496878ef1b8a22bbc3b0ebcd625b2753accc35da399df66a5c63bb214b14c7b474ef3e45313eda75c0e2473f0474cd30489b49969668b87cdf49e3972e8160f76c466753bb2d417d57548a767adc22e7a2214b14d5413da4fee5a660aed40f015d330cd205a2888677efd160e9aeb347586dd9a8e5c328a5e34bf34d464274312b3af54e7ff176cb694396c19dbb34bcbbecece7fb0073a57e08e89a61907e5d14c7b4b47cdff96d72599e372ea83a1a67f4e1c2dcb5a540b4773e6b9d7a7ff0c8ccad7f6dc483212d39d832f2458cd340da61246a86236bb7fb34f9c53c865c937df4c351aaa51a1be62b3ba4de4ddecbdfc6d5be7a287dccf58a0821482fbc4dcdb042ff12c7f4e46fcfe60784838b940eb032b7e66256b43a3dc0aa214b14d170f91e0d96eeb87e127142e97b610b02ba66115ee9275114d1d232cf02a2c77302fae12835da1d0c6eb773d6ecaef78fa717b477a0f74e7e1d92a53b345cbe4fe4a0d0532a2c80f442f4d108e9f63fc54952a7d8139ebfb017a331bddddcffe2df1f5f6658993b92978af61bdcf5fec3af3c1bb2107d36ee71b4ad190474ad10d035c2d7664dca4ae5a71b855547e38c76cfb067eed2f165b6f07efc874f793564b9298a221c6d6b085dd7f44240d728f8802e6c2ff1f3c2aaf3698e023826b64f677353ef1c1ab234c1b176849be0e74ccd10d0350af96b5362b5efd317f5d1b5d1aca0cd93ee179c805e7959d1ce573225ae1bb2b4c5ed74073708e87a61946914eae0947a1e77737b8fb68f2e68fdb85fb316d0ef6c92df7a339f8b862c7d7dba7f41d0c7ae2da1ce99a6c89a81990b71704a4f2bfef3a7a7ae1f01be62f76cf6459b55db0d59b411b61d654bc8594d1310d0350a29a0fb72a7f5dacb37ae1f01bea2ac14eddea86bb0dd9045b7ab8251173d0c389296d5e30e6f53a350be36e364e04dd7a9b6f7ba835d6737daacba68c8a2dba72e834c8f74da86e3befa20a06b14c20abd5e61dc637f24ada995551915d321db39ad2f9c79f166d36943169d385fba641b56e9fae04d6ae27d30f7780ff0a5a0aae91015557de1cccf8f84ee9fcf21bd06458750329b3620a06be273408fe244dc91b43656b18fcedef165460f9ef817d08970b40d29777dc21c4106f8fa95594f36f7bd4e8b611f5d86176bfe7e78fd79b4cdcf79641e9fe716dbf02635f17685ae2ad74f601cf6d1f91b8dc6b4bfcfaf218b565144aa41731adf783b773a8080ae89af83b22a4b2a8b2f2ff8f0c96834a6ddbd03d78f01733c5f917d5cad8932cf4855fe7f40dfe46b76d30504744d7c0de84444653a23f27ce5b0ea713ad707be6f8b28a5a8c8c2ecf2e7f3dc691b02ba263e7f658630d9f81e30a4f3fd02a0103e9abf06015d1f04744d7c1f94bea7037d0f189265794eaf5ebf77fd18c6a8caff6dadf9a23ffe81be10d035f13da0131115a9bf1dc976760f68341abb7e0cb8c56b8f833911513ef3e3b29c3e42983f6d4040d7228c2fccaa2ca9f27825b1827d74967cbe27a0ce7c95ae1fc33904743d10d03508693016e98c88fcdceb43da9da7d5354feb1b02a84d69cae71a249b10d0350829a0d7057299ebc730022b749e56d6fcbc27a0c8c22d84bb29a439d42404740d42fbba2cb3d4cb02b997afde5196fbbba520d1d6f6ae370d593ea7aa924a8cb54f705b9c1e788b1a84f87559a7defdf3f6ed86eb4780cff89a6e4721dc7521cea12620a06b10e260acca82aaa258fc1f0a83b43b2f3e16c4a110ee4ba165394d4140d720c4804ee4e72a1d8571bcacf976e10f0ae16e15ea1caa1b02ba06a17e5d2a55793739857067b814a3d198f60ffc6ac85264290ae16e8180ae0702ba0621177494594acaa38e6cd3e98cb677f65d3f06907f1f5775219c9f2744fa0be32e0fd3c28d441a45d1c0f52338e55bea7dd5d36352d2f876bf3e0ae1e6c32abd3f04f49e22bc42aa8a82aad29f0239df0289543e7d5895798e42b80510d0fb4334ea0983b0e6d32addc7ca6a69b23ca7d76fd65d3f861e4a5199f9f3fb614aa8b5483a21a0f785804e4444aaaaa8f4a4406e7fff108d5a1cf3a9214b91a5a45008b750c8b548bae00df68415fa9f0a8f0ae47c2bc892c6972c89aa2a14c23584b9b43f04f49eb0877e9d2fa977eca3bbe5cb0d713eb71cd60d29f7fe108d7ac257e575be14c8f9549025910f0d59aa22a7aa44215c53984bfb4340ef0983f04b3eacd25fbf5947a31647fc68c8a2bcf83db0097be8fde10df68434d1977c2990f3a9304b121fd2ed458a42b8d6b038ea0d01bd277c55deaec832f1131a1ab5b821bd200e8570dda01ea93fbcc19e42bf25eeebe4a71cd1a8c50de90d595008d71de6d37e10d07bc017e57cd28b82b042b74f7a4316e963de35643cfbc1dbeb0105718b495ead4ca733dad8dc71fd184179f642f2f97ff95929d75093d40f027a1f08e80b49df4f949efe9546f236870f7523ae6191d40f027a0f480f3523f9ea4be9055ad2487ddfbe9cec700d736a3f787b3d203dd49052540a4d45ae621fdd1ac90d59906ad703736a3f08e83d203dd45c59c86c1ff9e1f0884e4ece5c3f4610a49efbf7e576441630a7f68280de03027a3bf94ce62a466a1a581aa9ef19ab737d30a7f68380de038eadb5a3aa5264811c1ab5d821f186389f3a0c728039b51fbcbd1ef035d99ec40239eca3db21ad218b522884d30d736a3f08e83d60f075a0149599ac14e5db771b68d46298c4862c48b59b814af7eef0e67a895c3f8048652eaf400ee7d1cd92762b5f551654152884330195eedd21a077843b87fb91562087b4bb596bc2f6cfb13a37082bf4cef0e63a425aa81f690572522bb0a590f47ecb2c2555a110ce14acd0bb4354ea0883aebf224b898414c8adacc82ad89264341ad3c1878fae1fa311a5aa7adc8231582c758737d7110ae234504acce498e539bd5fdf72fd185e92d490a548658c57c930b7768780de11be22f528f34c4c811ccea39b21a5214b5d0887d30ea621fbd91da252671874ba482990931278a491b27f8e42384bb058ea0c6fae23a485f4a90be4f8af7c9eafc8490d4b21a5210b0ae1ecc1dcda1d027a4748b9eb556633f60572272767747474e2fa31bc22a1218b528a8a4cce890ce970fd6b7778731d619f472f25a4404e4a7a580a09efb34eb5f3fed8f40956e8dd21a0778441a75f5d20c73bad890b66f4e2fe3eabb244219c03985fbb4140ef00e976738a74eafa11e642a5bb5edcaf7ce53e1e7d85b47b37786b1d20dd6e4e559654325e11bd5fdf12d74484abcd2dde0d5924648c7c85157a3708e81d60b09955a6bc0be45ebe7ae7fa11bcc079ff5c4a4d87b79005ed046fad0b0c36a3b84fa69c0391249c1bb270ffa8f41db2a0dd20327580c1661ee77427f6d1f5e0fa61a42adedb3e214016b41b04f40e30d8ece05a90b4c6bc904b02ce0d59a4dc5ce833141e7783b7d601069b1d5c8f0c65794e6fdf6db87e0cd1b8366491d45bc067c8827683c8d401069b3d5c2ff540dabd1f8ef7e273afdd0809164ddde0ad758094bb3d5cafdde4189024e1b87f2ee1fae160608eed0401bd0b7c3d5ac5b131c693676bae1f412c8e0d59a434080a052e96e9066fad030c36fbb8b5ae1c8dc6f4e1f0c8f56388f48ae1397e14c2f1834c687b884c2d45d1c0f52304a92a0baa8ac2f5635cb3867df44eb8d51fa0108e27d42ab58780de128a35dce1b64a5f597bedfa114462557f804238b630d7b68737d612be1add51aa6235f96285de0da7862c4596a2108e2ba4dc5b43406f09fb3a6e95594a4af12890dbd8dc61dd5c84234e0d59ea42387e2728a086c5537b08e82d210de41ea7d43ba7d5a6049c8eaba1108e37ccb5ede18db586af46d7aaa2a0aae45120c76a3f58002e0d59ca3c47211c73c886b68780de1206190f5c56e9dc2ab6b963b14257aabe440658c3f1e0f6f0c65a421a8807555554322890e378a69a2b2e0d598a2c25854238f6b0786a0fd1a925146af051302890e378eb19571c1ab2a8aa42219c10583cb58737d612be1a792952f7ab741669640156199cdbe7da92176e83f0d416de580bd8d3e1a72a72e70572aba8746fc475bd4159e45495288493040ba87610a1dac0e062c97581dcf315f7a964eeb23ca7376f1d6e4d28452593424a680e5b9ced20a0b7803d1d9e5c17c88d4663da3f3874f6f325705d3c8842389930e7b683b7d502be16f92ab2cce9848db4fb7c2ed3ed2884130c59d15610d05bc0d72267ca69eaddf5fe30772e2fe041219c5ca85b6a076fab051468f056392c7ac28d71f3b9ba22d7e59880fe30e7b68380de0252eefcb95a8d6d6defb1693ac28dbb862c6eb336d01f027a3b08e86d20e5ce9ecbfd5254bbdfced5397dd77515d01f52eeede06db580af45195c553423ed7e3b170d595c9f7c003d30e7b68380de02be16857074e6188571b75b7969ff8638a4da3d81ac682b785b2de06b518eb2b0df1e7365d5fdd5a6dc8c4663faf0e1c8eacfe4707b20e88145543b785b0d2198cb93cfecafd25ea2fbda35cf5ebcb4fe3339dcef0ffa60ee6d0e01bd217c29caa3aad27a811c1ab55c67fbc21d0e1df8402f9c2e6a0e51aa297c258a64bb400e37c65d67b3ae402914c2f908177a358737d5100695504a5199d94bbdbbba408523db0d595008e7292ca61a43946a08691fb9cadc5e81dc6834a6ddbd032b3f8b3b9b0d59aab2a0aa40219c8fb0ddd91cde544358a1cb66b3400e69f79acd747be1a00012ec40515c7388520d6150c966b3400ee7d16bb62eda295108e7352ca69ac39b6a082977f98a2c25b25020871be36a36ea0994aaeaffafe02dccbdcd21a03785af44f994b232f9efec1ed0683436fe7338dbd8dcb1d29005857001c0dcdb18de5443f84af4439967560ae442af765fb3b0ed8042b830a028ae39bca986b08fe30f1b0572a1a7dd6d5cb083d5791850bfd41ca2540318507ea90be472a33f23f415bae9805e6629a90a8570a1c082aa19bca50690f2f14f99cd8c16c8857ca7bbe9862c4a292a32373defc10d6c79368348d50056e8fe51160ae4423d8f6eba214b9d6ab7dfef1e1cc20abd11bca52610d0bd5417c8994bdb86daa8c5e4874c5596541566b74b801facd09b41406f0029777f15e9d4d89f1dea0adde4c53a26ff7f015fd8436f066fa901a4dcfd6572c5f77ce595913f9733930d594c6754802fccc1cd20a03780af43bf99da939d4e67b4bdb3affdcfe5cc5443161b350fc017b2a4cde02d3580fd1bbf29a5a848cd048bd5b5d746fe5cae4ca5db8bd4eca904600e8baa46f0961ac00add7fa6d2b9a1356a315137804238c0a2aa1944aa26b07f1304130557a155ba9bf8fba2100eb0a86a066fa901ecdf84c1c44a707fff3098462d261ab2a0100e885014d71422d54291eb07008b4c14c88552edaebb210b0ae1e04f98879b40405f208a30904262e25ad150f6d175a7db4d5fcf0bb22053ba58f4edfffc03bf3173c5341c7ce7fa21c0b2a5bbdf519755c17ffde77fd0f77ff9fedabffbeedbfbf48ffffd6f4d4fc6d7b3176f683a9bbfa2cef39c5657175f0dab5445793ad2f568e081a2b82045d87e99e7ff01dfc34c5229ad1fcf0000000049454e44ae426082, NULL, NULL, '-', '13-05-2023 01:05 PM [CEST +02:00]', 'Admin', '-', 'admin', 'ADM836328466', '', '', '', '', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, 'Ms.', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
('Elsie', 'Isip', 'Female', '-', '-', '-', 'elsie2@gmail.com', '-', '-', '-', '-', '-', '09090909099', NULL, NULL, NULL, NULL, '-', '18-05-2023 04:05 AM [CEST +02:00]', 'Adviser', '-', 'adviser', 'ADV-774831598', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 233, NULL, NULL, NULL, NULL, NULL, NULL),
('Wilfredo', 'Domanico', 'Male', '-', '-', '-', 'wilfredo.domanico.jr@gmail.com', '-', '-', '-', '-', '-', '09095891297', NULL, NULL, NULL, NULL, '-', '18-05-2023 04:05 AM [CEST +02:00]', 'Intern', '-', 'intern', 'INT170500386', 'COM36222', '', '510', '', NULL, '19-0842', 'SBIT-4C', NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 4, 250, NULL, '2022-2023', NULL, NULL, NULL, '1'),
('DOLE', '', '-', '-', '-', '-', 'dole@gmail.com', '-', '-', '-', '-', '-', '-', NULL, NULL, NULL, NULL, '-', '13-05-2023 01:05 PM [CEST +02:00]', 'Company', '-', 'company', 'CM446206711', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'COMPCODE697355852838', 0, NULL, 'Government', NULL, NULL, NULL, NULL, 266, NULL, NULL, 0x416363657074616e63656c204c65747465722e706466, 0x526573756d652e706466, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_archive`
--
ALTER TABLE `class_archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_folder`
--
ALTER TABLE `class_folder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`),
  ADD KEY `expire` (`expire`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `company_archive`
--
ALTER TABLE `company_archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cos_dtr`
--
ALTER TABLE `cos_dtr`
  ADD PRIMARY KEY (`dtr_id`);

--
-- Indexes for table `cos_internship`
--
ALTER TABLE `cos_internship`
  ADD PRIMARY KEY (`apply_id`);

--
-- Indexes for table `tbl_advfiles`
--
ALTER TABLE `tbl_advfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_alerts`
--
ALTER TABLE `tbl_alerts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `tbl_announcements`
--
ALTER TABLE `tbl_announcements`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_apply`
--
ALTER TABLE `tbl_apply`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `tbl_certificate`
--
ALTER TABLE `tbl_certificate`
  ADD PRIMARY KEY (`certID`);

--
-- Indexes for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_class_doc`
--
ALTER TABLE `tbl_class_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_day`
--
ALTER TABLE `tbl_day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `tbl_docreq`
--
ALTER TABLE `tbl_docreq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dtr`
--
ALTER TABLE `tbl_dtr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_internship`
--
ALTER TABLE `tbl_internship`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_interview`
--
ALTER TABLE `tbl_interview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_other_company`
--
ALTER TABLE `tbl_other_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_archive`
--
ALTER TABLE `class_archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `class_folder`
--
ALTER TABLE `class_folder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `company_archive`
--
ALTER TABLE `company_archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `cos_dtr`
--
ALTER TABLE `cos_dtr`
  MODIFY `dtr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cos_internship`
--
ALTER TABLE `cos_internship`
  MODIFY `apply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_advfiles`
--
ALTER TABLE `tbl_advfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_alerts`
--
ALTER TABLE `tbl_alerts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tbl_announcements`
--
ALTER TABLE `tbl_announcements`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_apply`
--
ALTER TABLE `tbl_apply`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `tbl_certificate`
--
ALTER TABLE `tbl_certificate`
  MODIFY `certID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_class_doc`
--
ALTER TABLE `tbl_class_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `tbl_day`
--
ALTER TABLE `tbl_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `department_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_docreq`
--
ALTER TABLE `tbl_docreq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_dtr`
--
ALTER TABLE `tbl_dtr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tbl_internship`
--
ALTER TABLE `tbl_internship`
  MODIFY `post_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_interview`
--
ALTER TABLE `tbl_interview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=467;

--
-- AUTO_INCREMENT for table `tbl_other_company`
--
ALTER TABLE `tbl_other_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
