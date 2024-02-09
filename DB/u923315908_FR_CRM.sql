-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2024 at 04:44 PM
-- Server version: 10.6.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u923315908_FR_CRM`
--

-- --------------------------------------------------------

--
-- Table structure for table `fr_authorised_person_details`
--

CREATE TABLE `fr_authorised_person_details` (
  `ID` int(11) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Middle_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `Designation` varchar(255) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Primary_Email` varchar(255) DEFAULT NULL,
  `Secondry_Email` varchar(255) DEFAULT NULL,
  `Phone` varchar(100) DEFAULT NULL,
  `Mobile_No` varchar(100) NOT NULL,
  `Alt_Contact` varchar(255) DEFAULT NULL,
  `Property_No` varchar(100) DEFAULT NULL,
  `Street_No` varchar(100) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `U_State` varchar(255) DEFAULT NULL,
  `Postcode` varchar(20) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `Meeting_Date` date DEFAULT NULL,
  `Meeting_Time` time DEFAULT NULL,
  `Lead_Source` varchar(255) DEFAULT NULL,
  `Agent_Comments` varchar(500) DEFAULT NULL,
  `Business_Name` varchar(500) DEFAULT NULL,
  `Created_By` varchar(255) DEFAULT NULL,
  `Created_Date_Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fr_authorised_person_details`
--

INSERT INTO `fr_authorised_person_details` (`ID`, `Title`, `First_Name`, `Middle_Name`, `Last_Name`, `Designation`, `Gender`, `DOB`, `Primary_Email`, `Secondry_Email`, `Phone`, `Mobile_No`, `Alt_Contact`, `Property_No`, `Street_No`, `City`, `U_State`, `Postcode`, `Country`, `Meeting_Date`, `Meeting_Time`, `Lead_Source`, `Agent_Comments`, `Business_Name`, `Created_By`, `Created_Date_Time`) VALUES
(23, 'Mr.', 'fsd', 'vb', 'vb', 'Manager', 'M', '2023-11-03', 'test3@gmail.com', 'test3@gmail.com', '6341245678', '', '9641245678', 'jgjuh67', 'sad', 'dsf', 'fsdaf', 'fsd', 'India', '2023-11-11', '17:54:00', 'Manully Dialed', ' new comment 2', 'frteam4', 'akram', '2023-11-30 09:14:26'),
(24, 'Mr.', 'fsd', 'vb', 'vb', 'Owner/Director/Partner', 'M', '2023-11-09', 'test6@gmail.com', 'test6@gmail.com', '4612456786', '', '5368987395', 'jgjuh67', 'sad', 'dsf', 'fsdaf', 'fsd', 'India', '2023-11-15', '17:57:00', 'Social Media', 'comment 2', 'car', 'akram', '2023-11-30 09:13:54'),
(25, 'Mr.', 'Kamal', '', 'Singh', 'Owner/Director/Partner', 'M', '1982-12-25', 'mail@nomail.com', '', '1111111111', '', '', '1', 'Bristol Rd', 'Bristol', 'Avon', 'BS4 3TH', 'United Kingdom', '2023-12-05', '11:20:00', 'Manually Dailed', 'Interested for website development', 'ABC Ltd', 'akram', '2023-12-04 17:24:20'),
(26, 'Mr.', 'Deepkar', 'sdfs', 'Kumar', 'Owner/Director/Partner', 'M', '2023-11-29', 'deepak@fr.com', '', '8555566662', '', '', '', 'sdfdsa', 'sdfds', 'sdfd', '124578', 'India', '2023-12-21', '09:48:00', 'Manually Dailed', 'meeting comments 1', 'Ahimsa London', 'akram', '2023-12-05 09:47:06'),
(32, 'Mr.', 'test1', '', 'test1', 'Owner/Director/Partner', '', '0000-00-00', 'abcj@test.in', '', '8547896658', '', '', '', '', '', '', '', '', '2023-12-14', '22:02:00', 'WhatsApp Campaign', 'Test1', 'Check123', 'Vishesh', '2023-12-08 10:21:09'),
(33, 'Mr.', 'shivam', '', 'm', 'Owner/Director/Partner', 'M', '2023-12-01', 'shivam_silent@gmail.com', '', '', '', '', '', '', '', '', '', '', '2023-12-08', '15:22:00', 'Email Campaign', 'dgdf', 'shivam_silent', 'akram', '2023-12-08 10:24:08'),
(38, 'Mr.', 'asdas', '', 'asdasd', 'Owner/Director/Partner', 'M', '0000-00-00', 'tettet@hh.ok', '', '', '', '', '', '', '', '', '', '', '2023-12-15', '03:44:00', 'Manully Dialed', 'dasdaq', 'tetyshshus', 'leadagent1', '2023-12-09 15:46:50'),
(39, 'Mr.', 'sdfs', '', 'asdawdwq', 'Owner/Director/Partner', 'M', '0000-00-00', 'sdfsdkj@jhsd.ik', '', '', '', '', '', '', '', '', '', '', '2023-12-14', '03:46:00', 'Manully Dialed', 'fwef', 'cjsioudhnw', 'qualityagent1', '2023-12-09 15:48:28'),
(40, 'Mr.', 'sdafwqd', '', 'qwqwewrd', 'Owner/Director/Partner', '', '0000-00-00', 'sdgskn@kjhsdkj.ok', '', '', '', '', '', '', '', '', '', '', '2023-12-09', '04:06:00', 'Manully Dialed', 'sdfgewt', 'sdgklj', 'qualityagent1', '2023-12-09 16:06:05'),
(41, 'Mr.', 'Dev', '', 'Dev', 'Manager', '', '0000-00-00', 'akram.sm@fastranking.co.uk', '', '1245896325', '', '', '', '', '', '', '124578', 'India', '2023-12-12', '04:24:00', 'Auto-Dialer', 'dfgergwer', 'Hilton Lodge Limited', 'akram', '2023-12-12 16:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `fr_business_details`
--

CREATE TABLE `fr_business_details` (
  `ID` int(11) NOT NULL,
  `Business_Name` varchar(255) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `Phone_No` varchar(255) DEFAULT NULL,
  `Website` varchar(300) DEFAULT NULL,
  `Email_Id` varchar(255) DEFAULT NULL,
  `Business_Address_1` varchar(300) DEFAULT NULL,
  `Business_Address_2` varchar(300) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `U_State` varchar(255) DEFAULT NULL,
  `Postcode` varchar(20) DEFAULT NULL,
  `Countery` varchar(255) DEFAULT NULL,
  `Owner` varchar(255) DEFAULT NULL,
  `Created_By` varchar(255) DEFAULT NULL,
  `Created_Date_Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fr_business_details`
--

INSERT INTO `fr_business_details` (`ID`, `Business_Name`, `Category`, `Phone_No`, `Website`, `Email_Id`, `Business_Address_1`, `Business_Address_2`, `City`, `U_State`, `Postcode`, `Countery`, `Owner`, `Created_By`, `Created_Date_Time`) VALUES
(22, 'frteam4', 'Builders', '6581245678', 'abc@gmail.com', 'test3@gmail.com', 'sad', 'frteam4', 'dsf', 'fsdaf', 'fsd', 'India', 'fsd', 'akram', '2023-11-30 09:14:26'),
(23, 'car', 'Electricians', '9874563215', 'xyz.com', 'test6@gmail.com', 'sad', 'car', 'dsf', 'fsdaf', 'fsd', 'India', 'fsd', 'akram', '2023-11-30 09:13:54'),
(24, 'ABC Ltd', 'Other', 'www.google.com', '1111111111', 'mail@nomail.com', '1', 'Bristol Rd', 'Bristol', 'Avon', 'BS4 3TH', 'Avon', 'Kamal', 'akram', '2023-12-04 17:24:20'),
(25, 'Ahimsa London', 'Dentists', 'deepak.com', '8555566662', 'deepak@fr.com', 'sdfsa', 'sdaf', 'sdfads', 'dfasdf', '124578', 'India', 'Deepkar', 'akram', '2023-12-05 09:47:07'),
(31, 'Check123', 'Electricians', '8877455589', '', 'abcj@test.in', '', '', '', '', '', '', 'test1', 'Vishesh', '2023-12-08 10:21:09'),
(32, 'shivam_silent', 'Doors and Widnows', '3454656478', '', 'shivam_silent@gmail.com', '', '', '', '', '', '', 'shivam', 'akram', '2023-12-08 10:24:08'),
(37, 'tetyshshus', 'Bakery', '8555447879', '', 'tettet@hh.ok', '', '', '', '', '', '', 'asdas', 'leadagent1', '2023-12-09 15:46:50'),
(38, 'cjsioudhnw', '', '8555478965', '', 'sdfsdkj@jhsd.ik', '', '', '', '', '', '', 'sdfs', 'qualityagent1', '2023-12-09 15:48:28'),
(39, 'sdgklj', 'Bakery', '8957895878', '', 'sdgskn@kjhsdkj.ok', '', '', '', '', '', '', 'sdafwqd', 'qualityagent1', '2023-12-09 16:06:05'),
(40, 'Hilton Lodge Limited', 'Electricians', '1245896325', 'www.coulonstone.com', 'akram.sm@fastranking.co.uk', '', '', '', '', '124578', 'India', 'Dev', 'akram', '2023-12-12 16:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `fr_department`
--

CREATE TABLE `fr_department` (
  `Id` int(11) NOT NULL,
  `Department_Name` varchar(255) DEFAULT NULL,
  `Parent_Department` varchar(255) DEFAULT NULL,
  `D_Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fr_department`
--

INSERT INTO `fr_department` (`Id`, `Department_Name`, `Parent_Department`, `D_Status`) VALUES
(6, 'HR', 'IT/Tech', 'Active'),
(7, 'TL', 'IT/Tech', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `fr_followup_comments`
--

CREATE TABLE `fr_followup_comments` (
  `Id` int(11) NOT NULL,
  `Comments` varchar(500) DEFAULT NULL,
  `Created_By` varchar(255) DEFAULT NULL,
  `Followup_Id` varchar(30) DEFAULT NULL,
  `Created_Date_Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fr_followup_comments`
--

INSERT INTO `fr_followup_comments` (`Id`, `Comments`, `Created_By`, `Followup_Id`, `Created_Date_Time`) VALUES
(24, 'Follow up comments 1', 'akram', '8', '2023-11-30 09:16:34'),
(25, 'Follow up comments 2', 'akram', '8', '2023-11-30 16:27:39'),
(26, ' jwvdhBDKwdkbw', 'akram', '9', '2023-12-04 17:13:37'),
(27, '', 'akram', '9', '2023-12-04 17:15:04'),
(28, '', 'akram', '9', '2023-12-04 17:15:26'),
(29, 'Test', 'akram', '10', '2023-12-05 09:36:47'),
(30, 'test 2', 'akram', '11', '2023-12-05 09:37:56'),
(31, 'test 3', 'akram', '13', '2023-12-05 09:39:25'),
(32, 'test 3', 'akram', '13', '2023-12-05 09:39:47'),
(33, '', 'akram', '11', '2023-12-05 09:42:43'),
(34, 'sdfwe', 'qualityagent1', '14', '2023-12-09 16:04:47'),
(38, 'asfdqwcdqw\r\ndq\r\nwd\r\nqw\r\ndq', 'akram', '10', '2023-12-12 16:07:56'),
(39, 'sdfsdjhdkjv\r\nsjdhfskdjhiuwebnviuhiewrfwe', 'akram', '13', '2023-12-12 16:08:43'),
(40, 'xvsdsdfsdf', 'akram', '13', '2023-12-12 16:26:09'),
(41, 'following up', 'akram', 'individualfutures@hotmail.co.u', '2023-12-13 11:25:33'),
(42, 'following up', 'akram', 'individualsdfsadfsafutures@hot', '2023-12-13 11:25:45'),
(43, 'following up', 'akram', 'individualsdfsadfsafutures@hot', '2023-12-13 12:53:13'),
(44, 'following up', 'akram', 'individualsdfsadfsafutures@hot', '2023-12-13 12:53:48'),
(45, 'sdfafd', 'akram', 'fastranking09@gmail.com', '2023-12-13 12:54:31'),
(46, 'sdfafd', 'akram', 'fastsadfsdafdsaanking09@gmail.', '2023-12-13 12:54:43'),
(47, 'sdfafd', 'akram', 'fastsadfsdafdsaanking09@gmail.', '2023-12-13 12:55:30'),
(48, 'sdfafd', 'akram', 'fastsadfsd254afdsaanking09@gma', '2023-12-13 12:55:44'),
(49, 'ERG3W', 'akram', 'welfkhoewiudhtciou2H@JKHDSFK.I', '2023-12-13 12:58:03'),
(50, 'sdfafd', 'akram', 'fastsadfsd254afdsaanking09@gma', '2023-12-13 13:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `fr_follow_up`
--

CREATE TABLE `fr_follow_up` (
  `Id` int(11) NOT NULL,
  `Tile` varchar(20) DEFAULT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `RPC_Verification` varchar(255) DEFAULT NULL,
  `Business_Name` varchar(255) DEFAULT NULL,
  `Email_Id` varchar(255) DEFAULT NULL,
  `Phone_No` varchar(255) DEFAULT NULL,
  `Website` varchar(255) DEFAULT NULL,
  `Mobile_No` varchar(100) NOT NULL,
  `Business_Address_1` varchar(500) DEFAULT NULL,
  `Business_Address_2` varchar(500) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `Postcode` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `Follow_Up_Status` varchar(255) DEFAULT NULL,
  `Follow_Up_Source` varchar(255) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `Follow_Up_Date` date DEFAULT NULL,
  `Follow_Up_Time` time DEFAULT NULL,
  `Agent_Comments` varchar(255) DEFAULT NULL,
  `Created_Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Created_By` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fr_follow_up`
--

INSERT INTO `fr_follow_up` (`Id`, `Tile`, `First_Name`, `Last_Name`, `RPC_Verification`, `Business_Name`, `Email_Id`, `Phone_No`, `Website`, `Mobile_No`, `Business_Address_1`, `Business_Address_2`, `City`, `State`, `Postcode`, `Country`, `Follow_Up_Status`, `Follow_Up_Source`, `Category`, `Follow_Up_Date`, `Follow_Up_Time`, `Agent_Comments`, `Created_Date_Time`, `Created_By`) VALUES
(8, 'Mr.', 'sdjbisuhf', 'jiheniurhf', 'sdjbisuhf', 'jfdsnvie', 'sdfjh@ca.in', '8555566662', 'iunhfjiwn', '', 'wdiuhne892hiuhd', 'IWHEFI', 'EHFNIUWHDIUHWED', 'iejnfiewj', 'ihfweiuhf', 'ihfiuwhf', 'Follow Up', 'Website', 'Monumental Masons and Memorials', '2023-11-30', '21:14:00', 'asdqwqx qzxqwd\r\nsdfiwjoefw\r\nefwef', '2023-12-12 16:03:57', 'akram'),
(9, 'Mr.', 'Kamal', 'Singh', 'RPC Verified', 'ABC Ltd', 'mail@nomail.com', '1111111111', 'www.google.com', '', '1', 'Bristol Rd', 'Bristol', 'Avon', 'BS4 3TH', 'Avon', 'Meeting Booked', 'Manually Dailed', 'Other', '2023-12-05', '11:15:00', 'asdqwd\r\nasdqw\r\naswdq', '2023-12-12 16:05:42', 'akram'),
(10, 'Mr.', 'Suraj', 'Kumar', 'RPC Verified', 'Suraj Textiles', 'suraj@fr.com', '1245693254', 'suraj.com', '', '', '', '', '', '124578', 'India', 'Follow Up', 'Auto Dialer', 'Bakery', '2023-12-31', '09:34:00', 'asfdqwcdqw\r\ndq\r\nwd\r\nqw\r\ndq', '2023-12-12 16:07:56', 'akram'),
(11, 'Mr.', 'Deepkar', 'Kumar', 'RPC Not Verified', 'Ahimsa London', 'deepak@fr.com', '8555566662', 'deepak.com', '', '', '', '', '', '124578', 'India', 'Meeting Booked', 'Manually Dailed', 'Dentists', '2023-12-30', '12:59:00', '', '2023-12-05 09:42:44', 'akram'),
(13, 'Mr.', 'Dev', 'Dev', 'RPC Not Verified', 'Hilton Lodge Limited', 'akram.sm@fastranking.co.uk', '1245896325', 'www.coulonstone.com', '', '', '', '', '', '124578', 'India', 'Meeting Booked', 'Auto Dialer', 'Electricians', '2023-12-12', '12:59:00', 'xvsdsdfsdf', '2023-12-12 16:26:10', 'akram'),
(14, 'Mr.', 'skjhkKJSDHIFJ', 'KJBDSHJH', 'RPC Verified', 'dfjkjjkjkedji', 'kjdg@jkhewkf.in', '9658745896', '', '', 'sdjh', 'jkhbdijf', 'jkhsijewbf', 'jksjef', '87984sdc', 'dsfkjl', 'Follow Up', 'Auto Dialer', 'Electricians', '2023-12-09', '04:02:00', 'sdfwe', '2023-12-09 16:04:47', 'qualityagent1'),
(24, 'Mr.', 'David', 'Rudkin', 'RPC Verified', 'Hilton Lodge Limited', 'fastsadfsd254afdsaanking09@gmail.com', '1186390011', '', '', '', '', '', '', '', '', 'Follow Up', 'Manually Dailed', '', '0000-00-00', '00:00:00', 'sdfafd', '2023-12-13 13:56:05', 'akram');

-- --------------------------------------------------------

--
-- Table structure for table `fr_mail`
--

CREATE TABLE `fr_mail` (
  `Id` int(11) NOT NULL,
  `Full_Name` varchar(255) DEFAULT NULL,
  `Contact_Number` varchar(255) DEFAULT NULL,
  `Email_Id` varchar(300) DEFAULT NULL,
  `Email_Type` varchar(255) DEFAULT NULL,
  `Created_By` varchar(255) DEFAULT NULL,
  `Created_Date_Time` timestamp NOT NULL DEFAULT current_timestamp(),
  `Email_Status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fr_mail`
--

INSERT INTO `fr_mail` (`Id`, `Full_Name`, `Contact_Number`, `Email_Id`, `Email_Type`, `Created_By`, `Created_Date_Time`, `Email_Status`) VALUES
(9, 'Kamal Singh', '9874569856', 'kama@fr.com', 'Company Profile', 'akram', '2023-12-04 17:08:51', ''),
(10, 'PAUL BAILE', '1457854125', 'paul@fe.com', 'Company Profile', 'akram', '2023-12-05 09:29:21', ''),
(11, 'Ramesh Kumar', '8547985698', 'ratrtat@ttyw.in', 'Company Profile', 'qualityagent1', '2023-12-09 16:02:47', ''),
(12, 'sgfuisebhrkjsdyviqkejbrl', '5465465464', 'sdjhfuise@iuhdiuf.in', 'Company Profile', 'akram', '2023-12-09 16:13:24', ''),
(13, 'Jemas Rock', '8745896587', 'james@test.uk', 'Company Profile', 'khambok', '2023-12-12 16:48:16', 'Sent'),
(14, 'smith', '1388777878', 'alpine@alpinewindows.co.uk', 'Company Profile', 'akram', '2023-12-13 11:23:27', '');

-- --------------------------------------------------------

--
-- Table structure for table `fr_meeting_comments`
--

CREATE TABLE `fr_meeting_comments` (
  `Id` int(11) NOT NULL,
  `Comments` varchar(500) DEFAULT NULL,
  `Created_By` varchar(200) DEFAULT NULL,
  `Followup_Id` varchar(200) DEFAULT NULL,
  `Created_Date_Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fr_meeting_comments`
--

INSERT INTO `fr_meeting_comments` (`Id`, `Comments`, `Created_By`, `Followup_Id`, `Created_Date_Time`) VALUES
(17, 'Comment1', 'akram', 'test6@gmail.com', '2023-11-30 09:13:11'),
(18, 'new comment 1', 'akram', 'test3@gmail.com', '2023-11-30 09:13:39'),
(19, 'comment 2', 'akram', 'test6@gmail.com', '2023-11-30 09:13:54'),
(20, ' new comment 2', 'akram', 'test3@gmail.com', '2023-11-30 09:14:26'),
(21, 'Interested for website development', 'akram', 'mail@nomail.com', '2023-12-04 17:24:20'),
(22, 'meeting comments 1', 'akram', 'deepak@fr.com', '2023-12-05 09:47:07'),
(23, 'Test1', 'Vishesh', 'abcj@test.in', '2023-12-08 10:04:57'),
(24, 'Test1', 'Vishesh', 'abcj@test.in', '2023-12-08 10:08:20'),
(25, 'Test1', 'Vishesh', 'abcj@test.in', '2023-12-08 10:10:02'),
(26, 'abc', 'akram', 'sssss@gmail.com', '2023-12-08 10:10:17'),
(27, 'Test1', 'Vishesh', 'abcj@test.in', '2023-12-08 10:17:49'),
(28, 'Test1', 'Vishesh', 'abcj@test.in', '2023-12-08 10:21:09'),
(29, 'dgdf', 'akram', 'shivam_silent@gmail.com', '2023-12-08 10:24:08'),
(34, 'dasdaq', 'leadagent1', 'tettet@hh.ok', '2023-12-09 15:46:50'),
(35, 'fwef', 'qualityagent1', 'sdfsdkj@jhsd.ik', '2023-12-09 15:48:28'),
(36, 'sdfgewt', 'qualityagent1', 'sdgskn@kjhsdkj.ok', '2023-12-09 16:06:05'),
(37, 'dfgergwer', 'akram', 'akram.sm@fastranking.co.uk', '2023-12-12 16:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `fr_meeting_details`
--

CREATE TABLE `fr_meeting_details` (
  `Meeting_Id` int(100) NOT NULL,
  `Consultation_Status` varchar(255) DEFAULT NULL,
  `Consultation_Comments` varchar(500) DEFAULT NULL,
  `Consultation_Date` date DEFAULT NULL,
  `Conducted_By` varchar(255) DEFAULT NULL,
  `Service_Offered` varchar(255) DEFAULT NULL,
  `Price_Offered` varchar(255) DEFAULT NULL,
  `Contract_Duration` varchar(255) DEFAULT NULL,
  `Sale_Date` date DEFAULT NULL,
  `Contract_Signed_Date` date DEFAULT NULL,
  `Contract_Start_Date` date DEFAULT NULL,
  `Contract_End_Date` date DEFAULT NULL,
  `Invoice_Frequency` varchar(255) DEFAULT NULL,
  `Number_Of_Installments` varchar(255) DEFAULT NULL,
  `Mode_Of_Payments` varchar(255) DEFAULT NULL,
  `Invoice_Date` date DEFAULT NULL,
  `Owner` varchar(255) DEFAULT NULL,
  `Created_Date_Time` timestamp NOT NULL DEFAULT current_timestamp(),
  `Created_By` varchar(255) DEFAULT NULL,
  `Meet_Status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fr_meeting_follow_up`
--

CREATE TABLE `fr_meeting_follow_up` (
  `Id` int(11) NOT NULL,
  `Business_Name` varchar(500) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `Phone_No` varchar(30) DEFAULT NULL,
  `Website` varchar(500) DEFAULT NULL,
  `Email_Id` varchar(255) DEFAULT NULL,
  `Business_Address_1` varchar(500) DEFAULT NULL,
  `Business_Address_2` varchar(500) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `Postcode` varchar(50) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Middle_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `Designation` varchar(255) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Mobile_No` varchar(255) DEFAULT NULL,
  `Secondary_Email` varchar(255) DEFAULT NULL,
  `Alt_Contact_No` varchar(255) DEFAULT NULL,
  `Lead_Source` varchar(255) DEFAULT NULL,
  `Meeting_Date` date DEFAULT NULL,
  `Meeting_Time` time DEFAULT NULL,
  `Agent_Comment` varchar(500) DEFAULT NULL,
  `Consultation_Status` varchar(255) DEFAULT NULL,
  `Consultation_Comments` varchar(500) DEFAULT NULL,
  `Consultation_Date` date DEFAULT NULL,
  `Conducted_By` varchar(255) DEFAULT NULL,
  `Follow_Up_Date` date DEFAULT NULL,
  `Follow_Up_Time` time DEFAULT NULL,
  `Follow_Comments` varchar(500) DEFAULT NULL,
  `Created_Date_Time` timestamp NOT NULL DEFAULT current_timestamp(),
  `Meeting_Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fr_meeting_saledone`
--

CREATE TABLE `fr_meeting_saledone` (
  `Id` int(11) NOT NULL,
  `Business_Name` varchar(500) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `Phone_No` varchar(30) DEFAULT NULL,
  `Website` varchar(500) DEFAULT NULL,
  `Email_Id` varchar(255) DEFAULT NULL,
  `Business_Address_1` varchar(255) DEFAULT NULL,
  `Business_Address_2` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `Postcode` varchar(50) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Middle_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `Designation` varchar(255) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Mobile_No` varchar(255) DEFAULT NULL,
  `Secondry_Email` varchar(255) DEFAULT NULL,
  `Alt_Contact_No` varchar(255) DEFAULT NULL,
  `Lead_Source` varchar(255) DEFAULT NULL,
  `Meeting_Date` date DEFAULT NULL,
  `Meeting_Time` time DEFAULT NULL,
  `Agent_Comments` varchar(500) DEFAULT NULL,
  `Consultation_Status` varchar(255) DEFAULT NULL,
  `Consultation_Comments` varchar(500) DEFAULT NULL,
  `Consultation_Date` date DEFAULT NULL,
  `Conducted_By` varchar(255) DEFAULT NULL,
  `Sale_Date` date DEFAULT NULL,
  `Contract_Sent_Date` date DEFAULT NULL,
  `Contract_Signed_Date` date DEFAULT NULL,
  `Contract_Start_Date` date DEFAULT NULL,
  `Contract_End_Date` date DEFAULT NULL,
  `Project_Deadline` date DEFAULT NULL,
  `Sale_Comments` varchar(500) DEFAULT NULL,
  `Created_Date_Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fr_quality_approve_distribute`
--

CREATE TABLE `fr_quality_approve_distribute` (
  `Q_ID` int(11) NOT NULL,
  `Agent_Name` varchar(255) DEFAULT NULL,
  `Created_By` varchar(200) NOT NULL,
  `QA_Status` varchar(255) DEFAULT NULL,
  `Audit_Result` varchar(255) DEFAULT NULL,
  `Business_Name` varchar(255) DEFAULT NULL,
  `Coustomer_Name` varchar(255) DEFAULT NULL,
  `Website` varchar(255) DEFAULT NULL,
  `Phone_No` varchar(100) NOT NULL,
  `Email_Id` varchar(255) DEFAULT NULL,
  `Mobile_No` varchar(255) DEFAULT NULL,
  `Designation` varchar(255) DEFAULT NULL,
  `Lead_Source` varchar(255) DEFAULT NULL,
  `Meeting_Date` date DEFAULT NULL,
  `Meeting_Time` time DEFAULT NULL,
  `Comments` text DEFAULT NULL,
  `QC1` varchar(100) DEFAULT NULL,
  `QC2` varchar(100) DEFAULT NULL,
  `QC3` varchar(100) DEFAULT NULL,
  `QC4` varchar(100) DEFAULT NULL,
  `QC5` varchar(100) DEFAULT NULL,
  `QC6` varchar(100) DEFAULT NULL,
  `QC7` varchar(100) DEFAULT NULL,
  `QC8` varchar(100) DEFAULT NULL,
  `QC9` varchar(100) DEFAULT NULL,
  `QC10` varchar(100) DEFAULT NULL,
  `QC11` varchar(100) DEFAULT NULL,
  `QC12` varchar(100) DEFAULT NULL,
  `QC13` varchar(100) DEFAULT NULL,
  `QC14` varchar(100) DEFAULT NULL,
  `QC15` varchar(100) DEFAULT NULL,
  `QC16` varchar(100) DEFAULT NULL,
  `QC17` varchar(100) DEFAULT NULL,
  `Quality_Approve_Date` timestamp NULL DEFAULT current_timestamp(),
  `QA_Comments` text DEFAULT NULL,
  `Assigned_Agents` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fr_quality_comments`
--

CREATE TABLE `fr_quality_comments` (
  `Id` int(11) NOT NULL,
  `Comments` text DEFAULT NULL,
  `Created_By` varchar(255) DEFAULT NULL,
  `QA_ID` varchar(255) DEFAULT NULL,
  `Created_Date_Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fr_quality_comments`
--

INSERT INTO `fr_quality_comments` (`Id`, `Comments`, `Created_By`, `QA_ID`, `Created_Date_Time`) VALUES
(2, 'Approved', 'qualityagent1', '1', '2023-12-12 10:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `fr_send_proposal`
--

CREATE TABLE `fr_send_proposal` (
  `Id` int(11) NOT NULL,
  `Business_Name` varchar(500) DEFAULT NULL,
  `Category` varchar(200) DEFAULT NULL,
  `Phone_No` varchar(255) DEFAULT NULL,
  `Website` varchar(500) DEFAULT NULL,
  `Email_Id` varchar(500) DEFAULT NULL,
  `Business_Address_1` varchar(500) DEFAULT NULL,
  `Business_Address_2` varchar(500) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `Postcode` varchar(100) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Middle_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `Designation` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Mobile_No` varchar(100) DEFAULT NULL,
  `Secondry_Email` varchar(255) DEFAULT NULL,
  `Alt_Contact_No` varchar(500) DEFAULT NULL,
  `Lead_Source` varchar(255) DEFAULT NULL,
  `Meeting_Date` date DEFAULT NULL,
  `Meeting_Time` time DEFAULT NULL,
  `Agent_Comments` varchar(500) DEFAULT NULL,
  `Consultant_Status` varchar(255) DEFAULT NULL,
  `Consultation_Comments` varchar(500) DEFAULT NULL,
  `Consultation_Date` date DEFAULT NULL,
  `Conducted_By` varchar(255) DEFAULT NULL,
  `Services_Owned` varchar(255) DEFAULT NULL,
  `Price` varchar(255) DEFAULT NULL,
  `Vat` varchar(50) DEFAULT NULL,
  `Sub_Total` varchar(255) DEFAULT NULL,
  `Final_Amount` varchar(255) DEFAULT NULL,
  `Payment_Type` varchar(255) DEFAULT NULL,
  `Proposal_Comments` varchar(500) DEFAULT NULL,
  `Created_Date_Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fr_send_proposal`
--

INSERT INTO `fr_send_proposal` (`Id`, `Business_Name`, `Category`, `Phone_No`, `Website`, `Email_Id`, `Business_Address_1`, `Business_Address_2`, `City`, `State`, `Postcode`, `Country`, `First_Name`, `Middle_Name`, `Last_Name`, `Designation`, `Gender`, `DOB`, `Mobile_No`, `Secondry_Email`, `Alt_Contact_No`, `Lead_Source`, `Meeting_Date`, `Meeting_Time`, `Agent_Comments`, `Consultant_Status`, `Consultation_Comments`, `Consultation_Date`, `Conducted_By`, `Services_Owned`, `Price`, `Vat`, `Sub_Total`, `Final_Amount`, `Payment_Type`, `Proposal_Comments`, `Created_Date_Time`) VALUES
(7, 'frteam4', 'Builders', '6581245678', 'abc@gmail.com', 'test3@gmail.com', 'sad', 'frteam4', 'dsf', 'fsdaf', 'fsd', 'India', 'fsd', 'vb', 'vb', 'Manager', 'M', '2023-11-03', '6941245678', '', '9641245678', 'Manully Dialed', '2023-11-11', '17:54:00', ' new comment 2', 'Scheduled', 'consultation comment 1', '2023-12-05', 'akram', 'Web Development Only', '500', '20%', '600.00', '1320.00', 'One Off', 'erwe', '2023-12-09 16:20:06'),
(8, 'frteam4', 'Builders', '6581245678', 'abc@gmail.com', 'test3@gmail.com', 'sad', 'frteam4', 'dsf', 'fsdaf', 'fsd', 'India', 'fsd', 'vb', 'vb', 'Manager', 'M', '2023-11-03', '6941245678', '', '9641245678', 'Manully Dialed', '2023-11-11', '17:54:00', ' new comment 2', 'Scheduled', 'consultation comment 1', '2023-12-05', 'akram', 'SMO Only', '600', '20%', '720.00', '1320.00', 'One Off', 'werwer', '2023-12-09 16:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `fr_user_details`
--

CREATE TABLE `fr_user_details` (
  `Tile` varchar(50) DEFAULT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Middle_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Date_Of_Joining` date DEFAULT NULL,
  `User_Name` varchar(255) DEFAULT NULL,
  `U_Password` varchar(255) DEFAULT NULL,
  `Cfm_Password` varchar(255) DEFAULT NULL,
  `User_Type` varchar(255) DEFAULT NULL,
  `Email_Id` varchar(500) DEFAULT NULL,
  `Mobile_No` varchar(100) DEFAULT NULL,
  `Date_Of_Birth` date DEFAULT NULL,
  `Reporting_to` varchar(255) DEFAULT NULL,
  `Employee_Id` varchar(255) DEFAULT NULL,
  `U_Status` varchar(255) DEFAULT NULL,
  `Created_Date` date DEFAULT NULL,
  `Designation` varchar(255) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `Role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fr_user_details`
--

INSERT INTO `fr_user_details` (`Tile`, `First_Name`, `Middle_Name`, `Last_Name`, `Gender`, `Date_Of_Joining`, `User_Name`, `U_Password`, `Cfm_Password`, `User_Type`, `Email_Id`, `Mobile_No`, `Date_Of_Birth`, `Reporting_to`, `Employee_Id`, `U_Status`, `Created_Date`, `Designation`, `Department`, `Role`) VALUES
('Mr', 'rajeev', '', 'Verma', 'Male', '2023-10-24', 'rajeev', 'FR@rjcrm2023$', 'FR@rjcrm2023$', 'Quality', 'rajeev', '1234567899', '2023-10-19', 'List', '1001', 'Active', '2023-10-23', 'List', 'List', 'List'),
('', 'Tejasvi1', NULL, NULL, NULL, NULL, 'Tejasvi1', 'Tej@2023#$', 'Tej@2023#$', 'Agent', 'Tejasvi1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'Kritan', NULL, NULL, NULL, NULL, 'Kritan', 'Kritan@2023$#', 'Kritan@2023$#', 'Agent', 'Kritan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'Adarsh', NULL, NULL, NULL, NULL, 'Adarsh', 'Ad@2023#!', 'Ad@2023#!', 'Agent', 'Adarsh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'Vishesh', NULL, NULL, NULL, NULL, 'Vishesh', 'vishesH@2023#', 'vishesH@2023#', 'Agent', 'Vishesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'Ankit', NULL, NULL, NULL, NULL, 'Ankit', 'AKT@2023$', 'AKT@2023$', 'Agent', 'Ankit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'Ankush', NULL, NULL, NULL, NULL, 'Ankush', 'Kush@Ank#$', 'Kush@Ank#$', 'Ahent', 'Ankush', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'ankita', NULL, NULL, NULL, NULL, 'ankita', 'ankiT@2023$!', 'ankiT@2023$!', 'Agent', 'ankita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'sunny', NULL, NULL, NULL, NULL, 'sunny', 'SUN@2023$#', 'SUN@2023$#', 'Agent', 'sunny', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'nancy', NULL, NULL, NULL, NULL, 'nancy', 'N@ncy2023$', 'N@ncy2023$', 'Agent', 'nancy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'catherine\r\n\r\n', NULL, NULL, NULL, NULL, 'catherine\r\n\r\n', 'c@therine2023#!\r\n', 'c@therine2023#!\r\n', 'Agent', 'catherine\r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'franklin', NULL, NULL, NULL, NULL, 'franklin', 'fr@nklin2023!*', 'fr@nklin2023!*', 'Agent', 'franklin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'khambok', NULL, NULL, NULL, NULL, 'khambok', 'KH@mbok$2023!', 'KH@mbok$2023!', 'Agent', 'khambok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'Tamal', NULL, NULL, NULL, NULL, 'Tamal', 'T@mal$2023#', 'T@mal$2023#\r\n', 'Agent', 'Tamal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'Avishek', NULL, NULL, NULL, NULL, 'Avishek', 'Avish@k$2023', 'Avish@k$2023', 'Agent', 'Avishek', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'akram', NULL, NULL, NULL, NULL, 'akram', 'FR@akram2023#', 'FR@akram2023#', 'Sales Agent', 'akram', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'Quality2', 'Quality2', 'Quality2', NULL, NULL, 'Quality2', 'quality123', 'quality123', 'Quality', 'Quality2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'leadgenagent1', NULL, NULL, NULL, NULL, 'leadagent1', 'crm@123', 'crm@123', 'Agent', 'leadagent1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'leadgenagent2', NULL, NULL, NULL, NULL, 'leadagent2', 'crm@123', 'crm@123', 'Agent', 'leadagent2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'qualityagent1', NULL, NULL, NULL, NULL, 'qualityagent1', 'crm@123', 'crm@123', 'Quality', 'qualityagent1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'qualityagent2', NULL, NULL, NULL, NULL, 'qualityagent2', 'crm@123', 'crm@123', 'Quality', 'qualityagent2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'salesagent1', NULL, NULL, NULL, NULL, 'salesagent1', 'crm@123', 'crm@123', 'Sales Agent', 'salesagent1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'salesagent2', NULL, NULL, NULL, NULL, 'salesagent2', 'crm@123', 'crm@123', 'Sales Agent', 'salesagent2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quality_approve`
--

CREATE TABLE `quality_approve` (
  `Q_ID` int(11) NOT NULL,
  `Agent_Name` varchar(255) DEFAULT NULL,
  `Created_By` varchar(200) NOT NULL,
  `QA_Status` varchar(255) DEFAULT NULL,
  `Audit_Result` varchar(100) DEFAULT NULL,
  `Business_Name` varchar(255) DEFAULT NULL,
  `Coustomer_Name` varchar(255) DEFAULT NULL,
  `Website` varchar(255) DEFAULT NULL,
  `Phone_No` varchar(200) NOT NULL,
  `Email_Id` varchar(255) DEFAULT NULL,
  `Mobile_No` varchar(200) NOT NULL,
  `Designation` varchar(255) DEFAULT NULL,
  `Lead_Source` varchar(255) DEFAULT NULL,
  `Meeting_Date` date DEFAULT NULL,
  `Meeting_Time` time DEFAULT NULL,
  `Comments` varchar(500) DEFAULT NULL,
  `QC1` varchar(20) DEFAULT NULL,
  `QC2` varchar(20) DEFAULT NULL,
  `QC3` varchar(20) DEFAULT NULL,
  `QC4` varchar(20) DEFAULT NULL,
  `QC5` varchar(20) DEFAULT NULL,
  `QC6` varchar(20) DEFAULT NULL,
  `QC7` varchar(20) DEFAULT NULL,
  `QC8` varchar(20) DEFAULT NULL,
  `QC9` varchar(20) DEFAULT NULL,
  `QC10` varchar(20) DEFAULT NULL,
  `QC11` varchar(20) DEFAULT NULL,
  `QC12` varchar(20) DEFAULT NULL,
  `QC13` varchar(20) DEFAULT NULL,
  `QC14` varchar(20) DEFAULT NULL,
  `QC15` varchar(20) DEFAULT NULL,
  `QC16` varchar(20) DEFAULT NULL,
  `QC17` varchar(20) DEFAULT NULL,
  `Quality_Approve_Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `QA_Comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quality_pending_distribute`
--

CREATE TABLE `quality_pending_distribute` (
  `Id` int(11) NOT NULL,
  `Created_Date_Time` timestamp NOT NULL DEFAULT current_timestamp(),
  `Created_By` varchar(255) DEFAULT NULL,
  `Business_Name` varchar(255) DEFAULT NULL,
  `Meeting_Date` date DEFAULT NULL,
  `Meeting_Time` time DEFAULT NULL,
  `Coustomer_Name` varchar(255) DEFAULT NULL,
  `Phone_No` varchar(255) DEFAULT NULL,
  `Mobile_No` varchar(255) DEFAULT NULL,
  `Email_Id` varchar(255) DEFAULT NULL,
  `Website` varchar(255) DEFAULT NULL,
  `Agent_Comments` text DEFAULT NULL,
  `Agent_Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quality_pending_distribute`
--

INSERT INTO `quality_pending_distribute` (`Id`, `Created_Date_Time`, `Created_By`, `Business_Name`, `Meeting_Date`, `Meeting_Time`, `Coustomer_Name`, `Phone_No`, `Mobile_No`, `Email_Id`, `Website`, `Agent_Comments`, `Agent_Name`) VALUES
(17, '2023-12-08 10:21:09', 'akram', 'frteam4', '2023-11-11', '17:54:00', 'fsd', '6581245678', '6941245678', 'test3@gmail.com', 'abc@gmail.com', ' new comment 2', 'rajeev'),
(18, '2023-12-08 10:21:10', 'akram', 'car', '2023-11-15', '17:57:00', 'fsd', '9874563215', '2524567583', 'test6@gmail.com', 'xyz.com', 'comment 2', 'Quality2'),
(19, '2023-12-08 10:21:10', 'akram', 'ABC Ltd', '2023-12-05', '11:20:00', 'Kamal', 'www.google.com', '7777777777', 'mail@nomail.com', '1111111111', 'Interested for website development', 'rajeev'),
(20, '2023-12-08 10:21:10', 'akram', 'Ahimsa London', '2023-12-21', '09:48:00', 'Deepkar', 'deepak.com', '7845784578', 'deepak@fr.com', '8555566662', 'meeting comments 1', 'Quality2'),
(21, '2023-12-08 10:21:10', 'Vishesh', 'Check123', '2023-12-14', '22:02:00', 'test1', '8877455589', '', 'abcj@test.in', '', 'Test1', 'rajeev'),
(27, '2023-12-08 10:24:08', 'akram', 'shivam_silent', '2023-12-08', '15:22:00', 'shivam', '3454656478', '7234434553', 'shivam_silent@gmail.com', '', 'dgdf', 'Quality2'),
(51, '2023-12-09 16:06:05', 'qualityagent1', 'sdgklj', '2023-12-09', '04:06:00', 'sdafwqd', '8555447879', '7458965878', 'tettet@hh.ok', '', 'sdfgewt', 'rajeev'),
(59, '2023-12-12 16:26:27', 'qualityagent1', 'cjsioudhnw', '2023-12-14', '03:46:00', 'sdfs', '8555478965', '7888589658', 'sdfsdkj@jhsd.ik', '', 'fwef', 'qualityagent2'),
(60, '2023-12-12 16:26:27', 'qualityagent1', 'sdgklj', '2023-12-09', '04:06:00', 'sdafwqd', '8957895878', '7458965878', 'sdgskn@kjhsdkj.ok', '', 'sdfgewt', 'rajeev'),
(61, '2023-12-12 16:26:27', 'akram', 'Hilton Lodge Limited', '2023-12-12', '04:24:00', 'Dev', '1245896325', '7521111235', 'akram.sm@fastranking.co.uk', 'www.coulonstone.com', 'dfgergwer', 'Quality2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fr_authorised_person_details`
--
ALTER TABLE `fr_authorised_person_details`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Primary_Email` (`Primary_Email`);

--
-- Indexes for table `fr_business_details`
--
ALTER TABLE `fr_business_details`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email_Id` (`Email_Id`);

--
-- Indexes for table `fr_department`
--
ALTER TABLE `fr_department`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fr_followup_comments`
--
ALTER TABLE `fr_followup_comments`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fr_follow_up`
--
ALTER TABLE `fr_follow_up`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email_Id_2` (`Email_Id`);

--
-- Indexes for table `fr_mail`
--
ALTER TABLE `fr_mail`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email_Id` (`Email_Id`);

--
-- Indexes for table `fr_meeting_comments`
--
ALTER TABLE `fr_meeting_comments`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fr_meeting_details`
--
ALTER TABLE `fr_meeting_details`
  ADD PRIMARY KEY (`Meeting_Id`);

--
-- Indexes for table `fr_meeting_follow_up`
--
ALTER TABLE `fr_meeting_follow_up`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fr_meeting_saledone`
--
ALTER TABLE `fr_meeting_saledone`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fr_quality_approve_distribute`
--
ALTER TABLE `fr_quality_approve_distribute`
  ADD PRIMARY KEY (`Q_ID`),
  ADD UNIQUE KEY `Email_Id` (`Email_Id`);

--
-- Indexes for table `fr_quality_comments`
--
ALTER TABLE `fr_quality_comments`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fr_send_proposal`
--
ALTER TABLE `fr_send_proposal`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fr_user_details`
--
ALTER TABLE `fr_user_details`
  ADD UNIQUE KEY `Email_Id` (`Email_Id`),
  ADD UNIQUE KEY `Mobile_No` (`Mobile_No`),
  ADD UNIQUE KEY `Employee_Id` (`Employee_Id`);

--
-- Indexes for table `quality_approve`
--
ALTER TABLE `quality_approve`
  ADD PRIMARY KEY (`Q_ID`),
  ADD UNIQUE KEY `Email_Id` (`Email_Id`);

--
-- Indexes for table `quality_pending_distribute`
--
ALTER TABLE `quality_pending_distribute`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email_Id` (`Email_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fr_authorised_person_details`
--
ALTER TABLE `fr_authorised_person_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `fr_business_details`
--
ALTER TABLE `fr_business_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `fr_department`
--
ALTER TABLE `fr_department`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fr_followup_comments`
--
ALTER TABLE `fr_followup_comments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `fr_follow_up`
--
ALTER TABLE `fr_follow_up`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `fr_mail`
--
ALTER TABLE `fr_mail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `fr_meeting_comments`
--
ALTER TABLE `fr_meeting_comments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `fr_meeting_details`
--
ALTER TABLE `fr_meeting_details`
  MODIFY `Meeting_Id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fr_meeting_follow_up`
--
ALTER TABLE `fr_meeting_follow_up`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fr_meeting_saledone`
--
ALTER TABLE `fr_meeting_saledone`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fr_quality_comments`
--
ALTER TABLE `fr_quality_comments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fr_send_proposal`
--
ALTER TABLE `fr_send_proposal`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quality_approve`
--
ALTER TABLE `quality_approve`
  MODIFY `Q_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quality_pending_distribute`
--
ALTER TABLE `quality_pending_distribute`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
