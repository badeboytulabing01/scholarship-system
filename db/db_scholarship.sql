-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 11:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_scholarship`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `user_id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `profilestatus` int(11) NOT NULL DEFAULT 0,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `access` varchar(200) NOT NULL DEFAULT 'admin',
  `datescreate` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`user_id`, `image`, `profilestatus`, `lname`, `fname`, `mname`, `email`, `username`, `password`, `access`, `datescreate`) VALUES
(10, 'meb1 (2).jpg', 1, 'Diloy', ' steffany mave ', 'dionisio', 'mavediloy15@gmail.com', 'mave', 'b14efa516499ac783fb5f3abceccbd74', 'admin', '2023-05-30 12:28:08.378474'),
(11, '352356328_592608109643429_248162784116063015_n.jpg', 1, 'Delos Santos', 'khayla ', 'eugenio', 'Kayladelossantos99@gmail.com', 'khaylaqt', '416e96c1c47a86f6aba2dedef7260e1b', 'admin', '2023-05-30 14:29:44.592457'),
(30, 'badeboy.jpg', 1, 'icnad', 'bade boy', ' icnad ', 'webdesigner0127@gmail.com', 'badeboy', 'b8741e956996e5b498b02a5065c2b65c', 'admin', '2023-06-06 13:15:10.941711'),
(34, 'cla.jpg', 1, 'brioso', 'clarisse', 'dollentas', 'briosoclarisse16@gmail.com', 'clacla', 'ad9f91070abbb4f922601949a15050fa', 'admin', '2023-06-06 13:37:02.028090'),
(44, '1x1 JANJAN.jpg', 1, 'Paner', 'Jhon Orland', 'B', 'jhonpayatot@gmail.com', 'JanJan', '598f66f1c3eebdc15993e754c55ae69f', 'admin', '2023-06-08 18:27:55.440842');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_acdemic`
--

CREATE TABLE `tbl_acdemic` (
  `student_id` int(11) NOT NULL,
  `ap_type` varchar(200) NOT NULL,
  `lrn` varchar(200) NOT NULL,
  `year_level` varchar(50) NOT NULL,
  `school_name` varchar(250) NOT NULL,
  `gwa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_acdemic`
--

INSERT INTO `tbl_acdemic` (`student_id`, `ap_type`, `lrn`, `year_level`, `school_name`, `gwa`) VALUES
(1, 'student', '23023902930239', '2023', 'asdsda', 's1000'),
(2, 'dsaasdasd', '3455445', '2023', 'dfdsfdsfq', '90'),
(3, 'dsfgsd', 'sfsefdf', 'fasfsaad', 'fawqrefdfd', 'dfsfgvrdg'),
(4, 'sTUDENT', '2020-0005', '2023-2024', 'tHERESIAN sCHOOL oF cAVITE', '90'),
(5, 'full scholar', '202110038', '2nd year', 'Unida christian colleges', '1.00'),
(6, 'm;.jk;k', ';\'kl;k;', 'k;lk;kl', 'k;\'k;k;', '23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_annoucement`
--

CREATE TABLE `tbl_annoucement` (
  `annouce_id` int(11) NOT NULL,
  `annoucement` longtext NOT NULL,
  `annouce_date` date NOT NULL DEFAULT current_timestamp(),
  `announcestatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_annoucement`
--

INSERT INTO `tbl_annoucement` (`annouce_id`, `annoucement`, `annouce_date`, `announcestatus`) VALUES
(1, '', '2023-05-30', ''),
(2, '                      \r\n       The application starts NOW until August 15, 2023. Check the completeness of your documents because only those with complete documents with at least 1.75 GWA are allowed to proceed to the Online Application.\r\nHIIII PEladsadasdas\r\n', '2023-05-30', 'annouce');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_card`
--

CREATE TABLE `tbl_card` (
  `student_id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_card`
--

INSERT INTO `tbl_card` (`student_id`, `fname`, `name`) VALUES
(1, '20230606045848_life1 back.docx', 'life1 back.docx'),
(2, '20230606050649_KHAYLA.pdf', 'KHAYLA.pdf'),
(3, '20230606074845_life1 back (1).docx', 'life1 back (1).docx'),
(4, '20230615034736_UBUNTU-BASIC-COMMANDS.pdf', 'UBUNTU-BASIC-COMMANDS.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_charts`
--

CREATE TABLE `tbl_charts` (
  `charid` int(11) NOT NULL,
  `monthly` varchar(200) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_father`
--

CREATE TABLE `tbl_father` (
  `student_id` int(11) NOT NULL,
  `f_lastname` varchar(200) NOT NULL,
  `f_firstname` varchar(200) NOT NULL,
  `f_middle` varchar(50) NOT NULL,
  `f_ext_name` varchar(50) NOT NULL,
  `f_add` varchar(200) NOT NULL,
  `f_highest` varchar(300) NOT NULL,
  `f_occ` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_father`
--

INSERT INTO `tbl_father` (`student_id`, `f_lastname`, `f_firstname`, `f_middle`, `f_ext_name`, `f_add`, `f_highest`, `f_occ`) VALUES
(1, '       Juan ', '       dela cruz', '       i', '       none', '       di matagpuan st', '       elementary', '       farmer'),
(2, 'dfgrfedfh', 'erfgghtyr', 'gjjbjgu', 'hhh', 'f', 'ghjfy', 'tyvghc'),
(3, 'dILOY', 'jOHN eRICSON', 'cUSTODIO', 'none', '198 PANAMITAN KAWIT cAVITE', 'cOLLEGE', 'none'),
(4, 'PaÑer', 'Orlando', 'cillio', 'na', 'blk2 lot 25 greenplain greentown mambog 2 bacoor city, cavite', 'high school graduate', 'tricycle driver'),
(5, 'dfdf', 'dsdfdf', 'dff', 'dff', 'dfdfdfdf', 'dfdfdf', 'dfdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_legal_guardian`
--

CREATE TABLE `tbl_legal_guardian` (
  `student_id` int(11) NOT NULL,
  `l_lastname` varchar(200) NOT NULL,
  `l_firstname` varchar(200) NOT NULL,
  `l_middle` varchar(200) NOT NULL,
  `l_ext_name` varchar(250) NOT NULL,
  `l_add` varchar(200) NOT NULL,
  `l_occ` varchar(50) NOT NULL,
  `l_siblings` varchar(300) NOT NULL,
  `l_income` varchar(250) NOT NULL,
  `l_beneficiary` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_legal_guardian`
--

INSERT INTO `tbl_legal_guardian` (`student_id`, `l_lastname`, `l_firstname`, `l_middle`, `l_ext_name`, `l_add`, `l_occ`, `l_siblings`, `l_income`, `l_beneficiary`) VALUES
(1, '     erwin', '     icnad', 'sdadas', '       i', '       i', '     driver', '4', '     20,000', 'yes'),
(2, 'dgdsgvcfvdsgsd', 'dgszrfsageswz', 'sdgzfsfs', 'sdfdfsf', 'gsdzsdgvsdg', 'dsgvd', 'dsgvdvsdf', 'ssdfdbxd', 'yes'),
(3, 'dILOY', 'lORENA', 'dIONISIO', 'nONE', '198 PANAMITAN kAWIT cAVITE', 'nONE', '1', '5000', 'no'),
(4, 'paÑer', 'anselma', 'baldugo', 'na', 'BLK2 LOT 35 GREENPLAIN GREENTOWN MAMBOG 2 BACOOR CITY, CAVITE', 'none', 'none', 'less than 50k', 'no'),
(5, ';;k;k;k', ';k;k;', ';k;k;', ';k;k', ';k;k;k', ';k;k;', ';;k;k;', ';k;k', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mother`
--

CREATE TABLE `tbl_mother` (
  `student_id` int(11) NOT NULL,
  `m_lastname` varchar(200) NOT NULL,
  `m_firstname` varchar(200) NOT NULL,
  `m_middle` varchar(200) NOT NULL,
  `m_ext_name` varchar(50) NOT NULL,
  `m_add` varchar(200) NOT NULL,
  `m_highest` varchar(50) NOT NULL,
  `m_occ` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_mother`
--

INSERT INTO `tbl_mother` (`student_id`, `m_lastname`, `m_firstname`, `m_middle`, `m_ext_name`, `m_add`, `m_highest`, `m_occ`) VALUES
(1, '      anna', '      dela cruzS', '       i', '      non', '      bacoor', '       elementary', '      house wife'),
(2, 'fd', 'jhdfk', 'dgdfgd', 'dfsfd', 'gfdghghrf', 'fdgedsfedg', 'sgdfdvdftrdgv'),
(3, 'dILOY', 'lORENA', 'dIONISIO', 'none', '198 PANAMITAN kAWIT cAVITE', 'hIGH sCHOOL', 'nONE'),
(4, 'PaÑer', 'Anselma', 'baldugo', 'na', 'blk2 lot 35 greenplain greentown mambog 2 bacoor city, cavite', 'High school graduate', 'None'),
(5, 'sdk;lskd;', ';k;k;', 'lkjklhjkhk', 'khkhk', 'khkhk', 'lkjljlj', 's;ldjlj');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_other_info`
--

CREATE TABLE `tbl_other_info` (
  `student_id` int(11) NOT NULL,
  `financial` varchar(50) NOT NULL,
  `type_of_scholar` varchar(200) NOT NULL,
  `agency` varchar(200) NOT NULL,
  `indigenous` varchar(200) DEFAULT NULL,
  `specify_member` varchar(50) NOT NULL,
  `solo_parent` varchar(250) DEFAULT NULL,
  `type_disability` varchar(50) NOT NULL,
  `please_specify` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_other_info`
--

INSERT INTO `tbl_other_info` (`student_id`, `financial`, `type_of_scholar`, `agency`, `indigenous`, `specify_member`, `solo_parent`, `type_disability`, `please_specify`) VALUES
(1, 'yes', 'SEMI SCHOLARSHIP', 'kjjkjkj', 'indigenous', '', 'solo_parent', 'ghdfhfjfg', 'jhhjhljknlk'),
(2, 'yes', 'FULL SCHOLARSHIP', 'ghihlgh', 'none', '', 'none', '', ''),
(3, 'yes', 'FULL SCHOLARSHIP', 'ched', 'none', '', 'none', '', ''),
(4, 'yes', 'FULL SCHOLARSHIP', 'Cvsu', 'none', '', 'none', '', ''),
(5, 'yes', 'l\'l\'l\'l\'l', 'l\'l\'l\'l\'', 'indigenous', ';', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prof_income`
--

CREATE TABLE `tbl_prof_income` (
  `student_id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_prof_income`
--

INSERT INTO `tbl_prof_income` (`student_id`, `fname`, `name`) VALUES
(1, '20230606045848_JAN JAN.pdf', 'JAN JAN.pdf'),
(2, '20230606050649_KHAYLA.pdf', 'KHAYLA.pdf'),
(3, '20230606074845_calling card.pdf.docx', 'calling card.pdf.docx'),
(4, '20230615034736_JANJAN BOOTSTRAP.pdf', 'JANJAN BOOTSTRAP.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_requirements`
--

CREATE TABLE `tbl_requirements` (
  `requirements_id` int(11) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `fname` text DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `submit_status` varchar(50) NOT NULL DEFAULT 'pending',
  `datesubmit` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_requirements`
--

INSERT INTO `tbl_requirements` (`requirements_id`, `student_id`, `fname`, `name`, `submit_status`, `datesubmit`) VALUES
(1, '4', '20230615055129_FITT.pdf', 'FITT.pdf', 'approved', '2023-06-15 11:51:29.955215'),
(2, '4', '20230615093128_ACTIVITY KAY SIR BENNNNNNNNNNNNNNNNNNN.docx', 'ACTIVITY KAY SIR BENNNNNNNNNNNNNNNNNNN.docx', 'approved', '2023-06-15 15:31:28.987704'),
(3, '3', '20230615093630_DILOY_STEFFANY MAVE_DIONISIO 2022-2023 SECOND.pdf', 'DILOY_STEFFANY MAVE_DIONISIO 2022-2023 SECOND.pdf', 'approved', '2023-06-15 15:36:30.043353'),
(4, '4', '20230615095911_group6-bida-bida-eme.docx', 'group6-bida-bida-eme.docx', 'approved', '2023-06-15 15:59:11.970563');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scholar`
--

CREATE TABLE `tbl_scholar` (
  `scholar_id` int(11) NOT NULL,
  `first` varchar(200) NOT NULL,
  `second` varchar(200) NOT NULL,
  `third` varchar(250) NOT NULL,
  `Frequirements` varchar(200) NOT NULL,
  `Srequirements` varchar(300) NOT NULL,
  `Trequirements` varchar(300) NOT NULL,
  `Forequirements` varchar(250) NOT NULL,
  `Fifrequirements` varchar(250) NOT NULL,
  `Sixfrequirements` varchar(250) NOT NULL,
  `Sevenrequirements` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_scholar`
--

INSERT INTO `tbl_scholar` (`scholar_id`, `first`, `second`, `third`, `Frequirements`, `Srequirements`, `Trequirements`, `Forequirements`, `Fifrequirements`, `Sixfrequirements`, `Sevenrequirements`, `status`) VALUES
(1, 'ss', 'ss', '', '', '', '', '', '', '', '', ''),
(2, '       100 THOUSAND MONTHLY ALLOWANCE', '      5 THOUSAND BOOK ALLOWANCE', '      5 THOUSAND TRANSPORT ALLOWANCE', '      SENIOR HIGH SCHOOL GRADUATE', '      GWA: 1.01-1.40', '      FORM 137', '      GOOD MORAL', '      CARD', '      1X1 AND 2X2 PICTURES (FORMAL)', '      HAHA', 'full'),
(3, ' 10 THOUSAND MONTHLY ALLOWANCE', '   2 THOUSAND BOOK ALLOWANCE', '   2 THOUSAND TRANSPORT ALLOWANCE', '   SENIOR HIGH SCHOOL GRADUATE', '   GWA: 1.41-1.75', '   FORM 137ff', '   GOOD MORAL', '   CARDff', '   1X1 AND 2X2 PICTURES (FORMAL)', '   DIPLOMA', 'semi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signature`
--

CREATE TABLE `tbl_signature` (
  `student_id` int(11) NOT NULL,
  `signature` varchar(200) NOT NULL,
  `iheard` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_signature`
--

INSERT INTO `tbl_signature` (`student_id`, `signature`, `iheard`) VALUES
(1, '647ea0e865351.png', 0),
(2, '647ea2c900739.png', 0),
(3, '647ec8bd119a3.png', 0),
(4, '648a6db8ace8c.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_info`
--

CREATE TABLE `tbl_student_info` (
  `student_id` int(11) NOT NULL,
  `s_lastname` varchar(200) NOT NULL,
  `s_first_name` varchar(200) NOT NULL,
  `s_middlename` varchar(200) NOT NULL,
  `s_extname` varchar(50) NOT NULL,
  `s_bday` varchar(50) NOT NULL,
  `s_pday` varchar(50) NOT NULL,
  `s_sex` varchar(100) NOT NULL,
  `s_civiStatus` varchar(250) NOT NULL,
  `s_province` varchar(250) NOT NULL,
  `s_street` varchar(250) NOT NULL,
  `s_town` varchar(250) NOT NULL,
  `s_district` varchar(100) NOT NULL,
  `s_zipcode` varchar(50) NOT NULL,
  `s_mobile` varchar(50) NOT NULL,
  `s_email` varchar(200) NOT NULL,
  `s_citizin` varchar(200) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `dateapply` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `access` varchar(50) NOT NULL DEFAULT 'student',
  `applay_status` varchar(200) NOT NULL,
  `payment_status` varchar(50) NOT NULL DEFAULT 'process',
  `s_applicant_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_student_info`
--

INSERT INTO `tbl_student_info` (`student_id`, `s_lastname`, `s_first_name`, `s_middlename`, `s_extname`, `s_bday`, `s_pday`, `s_sex`, `s_civiStatus`, `s_province`, `s_street`, `s_town`, `s_district`, `s_zipcode`, `s_mobile`, `s_email`, `s_citizin`, `pass`, `username`, `dateapply`, `status`, `access`, `applay_status`, `payment_status`, `s_applicant_type`) VALUES
(1, 'tulabing', 'bade boy', 'i', 'na', '1999-01-21', 'cotabato', 'male', 'single', 'davao', 'pulang lupa dos', 'city', 'city', '17401', '09099898989', 'webdesigner0127@gmail.com', 'filipino', '99270ccb7cfdce489820994b4cb9debe', 'cvsuimus001', '2023-06-06', 'pending', 'student', '', 'process', 'FULL SCHOLARSHIP'),
(2, 'Delos Santos', 'Khayla', 'eugenio', 'none', '2023-06-06', 'kawit cavite', 'female', 'single', 'Cavite', 'brgy dyan lang', 'bacoor', '2', '4102', '0941425647', 'webdesigner0127@gmail.com', 'filipino', 'bb5d62e7fe92a6486783fa446eccd4b5', 'SCH2023002', '2023-06-06', 'approved', 'student', '', 'fully paid', 'FULL SCHOLARSHIP'),
(3, 'diloy', 'Steffany MAve', 'dionisio', 'none', '2002-11-15', 'nOVELETA, cAVITE', 'fEMALE', 'sINGLE', 'cAVITE', '198 pANAMITAN ', 'kaWIT', 'cAVITE', '4104', '09350290343', 'steffanymavediloy15@gmail.com', 'fILIPINO', '06f38490c233dda8b7fcc0cb4a5fc573', 'cvsuimus003', '2023-06-06', 'approved', 'student', '', 'process', 'FULL SCHOLARSHIP'),
(4, 'Paner', 'JanJan', 'bascuguin', 'na', '2003-07-30', 'Lemery Batangas ', 'male', 'Single', 'Cavite', 'Mambog 2', 'Bacoor city', '2nd district', '4102', '09610771876', 'jhonpayatot@gmail.com', 'FIlipino', '74ee3efbf944d54b8a6c94fe07414679', 'cvsuimus004', '2023-06-15', 'approved', 'student', '', 'process', 'FULL SCHOLARSHIP');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_submit_card`
--

CREATE TABLE `tbl_submit_card` (
  `card_id` int(11) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `submit_status` varchar(50) NOT NULL DEFAULT 'pending',
  `datesubmit` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `student_recive` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_submit_card`
--

INSERT INTO `tbl_submit_card` (`card_id`, `student_id`, `fname`, `name`, `submit_status`, `datesubmit`, `student_recive`) VALUES
(1, '4', '20230615055129_JANJAN BOOTSTRAP.pdf', 'JANJAN BOOTSTRAP.pdf', 'approved', '2023-06-15 11:51:29.966714', 'pending'),
(2, '4', '20230615093128_FABAYOS ACTUAL DELIVERY ( UPDATED ).docx', 'FABAYOS ACTUAL DELIVERY ( UPDATED ).docx', 'approved', '2023-06-15 15:31:28.999031', 'pending'),
(3, '3', '20230615093630_ScholarshipManagementSystem_Brioso-Cualizares-DelosSantos-Diloy-Paner-Tulabing.pdf', 'ScholarshipManagementSystem_Brioso-Cualizares-DelosSantos-Diloy-Paner-Tulabing.pdf', 'approved', '2023-06-15 15:36:30.059591', 'pending'),
(4, '4', '20230615095911_FABAYOS IV INSERTION ( UPDATED).docx', 'FABAYOS IV INSERTION ( UPDATED).docx', 'approved', '2023-06-15 15:59:11.984730', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_two_by_two`
--

CREATE TABLE `tbl_two_by_two` (
  `student_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_two_by_two`
--

INSERT INTO `tbl_two_by_two` (`student_id`, `image`, `name`) VALUES
(1, '647ea0e863aeb.jpg', ''),
(2, '647ea2c8f28fb.jpg', ''),
(3, '647ec8bd1016c.jpg', ''),
(4, '648a6db8aa0bb.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `student_id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`student_id`, `fname`, `name`) VALUES
(1, '20230602172439_bade.pdf', 'bade.pdf'),
(2, '20230606045848_KHAYLA.pdf', 'KHAYLA.pdf'),
(3, '20230606050649_KHAYLA.pdf', 'KHAYLA_2.pdf'),
(4, '20230606074845_back.docx', 'back.docx'),
(5, '20230615034736_JAJAN NEW.pdf', 'JAJAN NEW.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_acdemic`
--
ALTER TABLE `tbl_acdemic`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_annoucement`
--
ALTER TABLE `tbl_annoucement`
  ADD PRIMARY KEY (`annouce_id`);

--
-- Indexes for table `tbl_card`
--
ALTER TABLE `tbl_card`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_charts`
--
ALTER TABLE `tbl_charts`
  ADD PRIMARY KEY (`charid`);

--
-- Indexes for table `tbl_father`
--
ALTER TABLE `tbl_father`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_legal_guardian`
--
ALTER TABLE `tbl_legal_guardian`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_mother`
--
ALTER TABLE `tbl_mother`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_other_info`
--
ALTER TABLE `tbl_other_info`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_prof_income`
--
ALTER TABLE `tbl_prof_income`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_requirements`
--
ALTER TABLE `tbl_requirements`
  ADD PRIMARY KEY (`requirements_id`);

--
-- Indexes for table `tbl_scholar`
--
ALTER TABLE `tbl_scholar`
  ADD PRIMARY KEY (`scholar_id`);

--
-- Indexes for table `tbl_signature`
--
ALTER TABLE `tbl_signature`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_student_info`
--
ALTER TABLE `tbl_student_info`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_submit_card`
--
ALTER TABLE `tbl_submit_card`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `tbl_two_by_two`
--
ALTER TABLE `tbl_two_by_two`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_acdemic`
--
ALTER TABLE `tbl_acdemic`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_annoucement`
--
ALTER TABLE `tbl_annoucement`
  MODIFY `annouce_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_card`
--
ALTER TABLE `tbl_card`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_charts`
--
ALTER TABLE `tbl_charts`
  MODIFY `charid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_father`
--
ALTER TABLE `tbl_father`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_legal_guardian`
--
ALTER TABLE `tbl_legal_guardian`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_mother`
--
ALTER TABLE `tbl_mother`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_other_info`
--
ALTER TABLE `tbl_other_info`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_prof_income`
--
ALTER TABLE `tbl_prof_income`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_requirements`
--
ALTER TABLE `tbl_requirements`
  MODIFY `requirements_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_scholar`
--
ALTER TABLE `tbl_scholar`
  MODIFY `scholar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_signature`
--
ALTER TABLE `tbl_signature`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_student_info`
--
ALTER TABLE `tbl_student_info`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_submit_card`
--
ALTER TABLE `tbl_submit_card`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_two_by_two`
--
ALTER TABLE `tbl_two_by_two`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
