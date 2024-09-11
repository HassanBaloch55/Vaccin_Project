-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2024 at 01:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vax-registry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `image` blob DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `image`, `Name`, `Email`, `PASSWORD`) VALUES
(1, 0x48617373616e206e65772e706e67, 'Muhammad Hassan', 'Admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `booking_requests`
--

CREATE TABLE `booking_requests` (
  `id` int(11) NOT NULL,
  `Child_name` varchar(50) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `Parent_name` varchar(255) NOT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `parent_city` varchar(255) NOT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `requester_email` varchar(255) NOT NULL,
  `booking_date` datetime NOT NULL,
  `status` enum('Pending','Accepted','Rejected') DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_requests`
--

INSERT INTO `booking_requests` (`id`, `Child_name`, `birth_date`, `Parent_name`, `Phone`, `parent_city`, `hospital_name`, `requester_email`, `booking_date`, `status`) VALUES
(1, 'Ahmed Zaib', '2023-08-12', 'Muhammad Hassan', '03012545555', 'Nawab Shah', 'City Care Hospital', 'mhassanjaan55@gmail.com', '2024-12-08 00:00:00', 'Accepted'),
(2, 'Kamran Ali', '2022-07-12', 'Muhammad Hassan', '03214569878', 'karachi', 'Shifa International', ' mhassanjaan55@gmail.com', '2024-07-30 00:00:00', 'Rejected'),
(3, 'Sana Khan', '2020-12-30', 'Muhammad Hassan', '03224568569', 'karachi', 'City Care Hospital', ' mhassanjaan55@gmail.com', '2024-08-07 00:00:00', 'Accepted'),
(4, 'Ali Khan', '2022-10-12', 'Ejaz Ul Hassan', '03254589654', 'Nawab Shah', 'Ali Medical Centre', ' Ejaz@gmail.com', '2024-08-08 02:00:00', 'Accepted'),
(5, 'Mahzaib', '2024-07-12', 'Muhammad Hassan', '03332562352', 'Nawab Shah', 'Shifa International', 'Hassan@gmail.com', '2024-08-20 22:11:00', 'Accepted'),
(6, 'Hassan Ali', '2024-02-10', 'Ali Ahmed', '03124526535', 'Karachi', 'Al Shifa Hospital', 'HassanAli@gmail.com', '2024-08-22 00:00:00', 'Rejected'),
(7, 'Rehan Rafique', '2024-08-12', 'Muhammad Refique', '03125458655', 'Shahdadpur', 'Al-Shifa Hospital ', ' Rafique@gmail.com', '2024-08-25 12:37:00', 'Accepted'),
(9, 'Fida Hussain', '2024-09-01', 'Muhammad Aqil', '03014585695', 'Shahdadpur', 'Al-Shifa Hospital ', ' Fida@gmail.com', '2024-09-01 13:30:00', 'Pending'),
(10, 'Ali ', '2022-06-02', 'Hussain Ali', '03012489688', 'karachi', 'Shifa International', ' Hussan@gmail.com', '2024-09-01 13:56:00', 'Pending'),
(11, 'Ali ', '2023-03-01', 'Hussain Ali', '03012242542', 'karachi', 'Al-Shifa Hospital ', ' Hassan@gmail.com', '2024-09-02 13:25:00', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Messege` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Id`, `Name`, `Phone`, `Email`, `Messege`) VALUES
(1, 'Muhamad Hassan', '03012242542', 'hassanjaan5@outlook.com', '2asdasdasdassdaadaasdabjjmdud'),
(6, 'Dr: Ali khan', '03125486564', 'civil@gmail.com', 'Hello Dear Admin'),
(7, 'Dr: Farhat Hashami', '312245624', 'jinnah@gmail.com', 'Helo Dear Admin I have one Objection about vaccinations.');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_register`
--

CREATE TABLE `hospital_register` (
  `id` int(11) NOT NULL,
  `image` blob DEFAULT NULL,
  `owner_name` varchar(255) NOT NULL,
  `Hospital_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital_register`
--

INSERT INTO `hospital_register` (`id`, `image`, `owner_name`, `Hospital_name`, `address`, `city`, `state`, `zip_code`, `phone`, `email`, `password`, `confirm_password`) VALUES
(1, 0x313731363939383533363236342e6a706567, 'Dr: Maraiyum Qureshi', 'Al-Shifa Hospital ', 'Nazimabad Karachi', 'Karachi', 'Sindh', '74601', '+92302542587', 'Al-shifa@gmail.com', 'Shifa123', 'Shifa123'),
(2, NULL, 'Dr. Ahmed Khan', 'City Care Hospital', '	123 Shadman Road', 'Lahore', 'Punjab', '54000', '03001234567', 'ahmed.khan@citycare.pk', 'P@ssw0rd1', 'P@ssw0rd1'),
(3, NULL, 'Dr. Fatima Hussain', 'Shifa International', '456 Jinnah Avenue', 'Islamabad', 'Islamabad Capital', '44000', '03111234567', 'fatima.h@shifa.pk', 'Secur3P@ss', 'Secur3P@ss'),
(4, NULL, 'Dr. Usman Ali', 'Ali Medical Centre', '789 Gulberg Boulevard', 'Karachi', 'Sindh', '75500', '03221234567	', 'usman.ali@alimedical.pk', 'P@ssword!2', 'P@ssword!2'),
(5, NULL, 'Dr. Zainab Aslam', 'Queta General Hospital', '789 Gulberg Boulevard', 'Queta', 'Balochistan', '78500', '03221234567	', 'zainab.aslam@lgh.pk', 'G3nericP@ss', 'G3nericP@ss'),
(6, NULL, 'Dr. Imran Saeed', 'Aga Khan University', 'Stadium Road', 'Karachi', 'Sindh', '74800', '03331234567', 'imran.saeed@aku.pk', 'Univ3rsalP@ss', 'Univ3rsalP@ss'),
(7, NULL, 'Dr: Farhat Hashami', 'Jinnah national Hospital', 'Karachi cant', 'karachi', 'Sinndh', '4520', '0312245624', 'jinnah@gmail.com', 'Jinnah', 'Jinnah'),
(8, NULL, 'Dr: Farhat Hashami', 'Jinnah national Hospital ', 'Karachi cant', 'karachi', 'Sindh', '4520', '0312245624', 'jinnah@gmail.com', 'Jinnah', 'Jinnah'),
(9, NULL, 'Dr: Farhat Hashami', 'Jinnah national Hospital', 'Karachi cant', 'karachi', 'Sinndh', '4520', '0312245624', 'jinnah@gmail.com', 'Jinnah', 'Jinnah'),
(10, NULL, 'Dr: Ali khan', 'Civil Hospital ', 'Nawabshah Liyaqat markeet', 'Nawabshah', 'Sindh', '42631', '03125486564', 'civil@gmail.com', '123', '123'),
(11, 0x30372e706e67, 'Dr: Moiz Hassan', 'Al-Khudmt Hospital', 'Lahore jinnah road', 'Lahore', 'Punjab', '1256', '03025642856', 'al-khudmt@gmail.com', '1236', '1236'),
(12, NULL, 'Dr: Kaiser Khan', 'Aagha Khan Hospital', 'Karachi baldia', 'karachi', 'Sindh', '4520', '312245624', 'aaghakhan@gmail.com', '1230', '1230'),
(13, NULL, 'Dr: Kaiser Khan', 'Aagha Khan Hospital', 'Karachi baldia', 'karachi', 'Sindh', '4520', '312245624', 'aaghakhan@gmail.com', '1230', '1230'),
(15, NULL, 'Dr. Ahmed Ali ', 'Liaqt Hospital', '123 Main St', 'Karachi', 'Sindh', '74000', '0300-1234567', 'liaqt4312@gmail.com', 'password123', 'password123'),
(16, NULL, 'Dr. Iqbal', 'Sir Syed Hospital', '456 Park Ave', 'Lahore', 'Punjab', '54000', '0321-7654321', 'sirsyed4532@gmail.com', 'password123', 'password123'),
(17, 0x696d616765732e6a706567, 'Dr.Mahrang Baloch', 'Noor Hospital', 'kalat Elm St', 'Kalat ', 'Balochistan', '44000', '0345-6789123', 'noor67832@gmail.com', 'password123', 'password123'),
(18, NULL, 'Dr. Abbasi', 'Abbasi Hospital', '101 Maple Rd', 'Karachi', 'Sindh', '74000', '0301-9876543', 'abbasi@gmail.com', 'password123', 'password123'),
(19, NULL, 'Dr. Jannat', 'Jannat Hospital', '202 Oak St', 'Rawalpindi', 'Punjab', '46000', '0333-4567890', 'jannat@gmail.com', 'password123', 'password123'),
(20, NULL, 'Dr.Deen Muhammad Baloch', 'Bolan Medical Hospital', '303 Pine St', 'Bolan', 'Balochistan', '44000', '0302-2345678', 'city5608@gmail.com', 'password123', 'password123'),
(21, NULL, 'Dr. Shah', 'Child Hospital', '404 Cedar Ave', 'Faisalabad', 'Punjab', '38000', '0344-3456789', 'child1290@gmail.com', 'password123', 'password123'),
(22, NULL, 'Dr. Usman Ali baloch', 'Life Care Hospital', '505 Birch St', 'Quetta', 'Balochistan', '87300', '0311-1234567', 'lifecare90675@gmail.com', 'password123', 'password123'),
(23, NULL, 'Dr. Ali', 'Dua Hospital', '606 Walnut St', 'Peshawar', 'Khyber Pakhtunkhwa', '25000', '0300-5678901', 'dua55239@gmail.com', 'password123', 'password123'),
(24, NULL, 'Dr. Javaid', 'Javaid Hospital', '707 Chestnut St', 'Karachi', 'Sindh', '74000', '0322-6789123', 'javaid@gmail.com', 'password123', 'password123'),
(26, NULL, 'Dr. Qasim Khan', 'Qasim Hospital', '909 Fir St', 'Islamabad', 'Islamabad', '44000', '0340-3456789', 'qasim3593@gmail.com', 'password123', 'password123'),
(29, NULL, 'Dr: Ahmed Ali Baloch', 'Iqbal Hospital', 'Noshike ', 'Noshkee', 'Balochistaan', '84526', '03152142356', 'iqbal@gmail.com', '7894', '7894'),
(41, NULL, 'Dr: Abdul Hai', 'Al Hai  Center Hospital', 'Latif abad Hyerabad', 'Hyderabad', 'Sindh', '758263', '03024589654', 'AlHai@gmail.com', '1230', '1230');

-- --------------------------------------------------------

--
-- Table structure for table `newslaters`
--

CREATE TABLE `newslaters` (
  `Laters_id` int(11) NOT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newslaters`
--

INSERT INTO `newslaters` (`Laters_id`, `Email`) VALUES
(1, 'Hassan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `parents_register`
--

CREATE TABLE `parents_register` (
  `Id` int(11) NOT NULL,
  `image` blob DEFAULT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `User_Name` varchar(20) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Confirm_Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parents_register`
--

INSERT INTO `parents_register` (`Id`, `image`, `FirstName`, `LastName`, `User_Name`, `City`, `Contact`, `Email`, `Password`, `Confirm_Password`) VALUES
(1, 0x48415353414e202831292e706e67, 'Muhammad', 'Hassan', 'Hassan', 'Nawab Shah', '03012242542', 'Hassan@gmail.com', 'Hassan123', 'Hassan123'),
(2, 0x494d475f32303232303530365f3134333433302e6a7067, 'Ali', 'Hassan', 'Ali', 'karachi', '+923012242542', 'Ali@gmail.com', '123', '123'),
(4, 0x494d472d32303232303131332d5741303031382d312e6a7067, 'kamran', 'Ahmed', 'kamran', 'Hyderabad', '03012858965', 'Kamran@gmail.com', 'Kamran123', 'Kamran123');

-- --------------------------------------------------------

--
-- Table structure for table `parents_requests`
--

CREATE TABLE `parents_requests` (
  `id` int(11) NOT NULL,
  `parents_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('Ruquesting for account register','approved','denied') DEFAULT 'Ruquesting for account register',
  `request_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parents_requests`
--

INSERT INTO `parents_requests` (`id`, `parents_name`, `email`, `status`, `request_date`) VALUES
(3, 'Aslam', 'Asalam@gmail.com', '', '2024-08-28 20:49:00'),
(4, 'Muhammad Hassan', 'mhassanjaan55@gmail.com', 'denied', '2024-08-30 18:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinations_notification`
--

CREATE TABLE `vaccinations_notification` (
  `N_id` int(11) NOT NULL,
  `child_name` varchar(100) DEFAULT NULL,
  `parent_name` varchar(100) DEFAULT NULL,
  `parent_email` varchar(100) DEFAULT NULL,
  `Hospital_name` varchar(20) DEFAULT NULL,
  `vaccine_name` varchar(100) DEFAULT NULL,
  `vaccination_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vaccination_status`
--

CREATE TABLE `vaccination_status` (
  `V_id` int(11) NOT NULL,
  `Child_Reg` int(11) DEFAULT NULL,
  `Hospital_name` varchar(50) DEFAULT NULL,
  `Child_name` varchar(50) DEFAULT NULL,
  `Birth_date` date DEFAULT NULL,
  `Vaccine_name` varchar(50) DEFAULT NULL,
  `Father_name` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Parent_Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccination_status`
--

INSERT INTO `vaccination_status` (`V_id`, `Child_Reg`, `Hospital_name`, `Child_name`, `Birth_date`, `Vaccine_name`, `Father_name`, `phone`, `Email`, `City`, `Parent_Email`) VALUES
(12, 1006, 'Al- khidmat Hospital', 'Sana khan', '2021-03-20', 'Meteris', 'Jahangir', '03025642856', 'al-khudmt@gmail.com', 'Hyderabad', 'Jahangir@gmail.com'),
(28, 1009, 'Al-Shifa Hospital ', 'Ali ', '2024-08-15', 'MMR', 'Ali Khan', '03226393233', 'Al-shifa@gmail.com', 'Hyderabad', 'Ali@gmail.com'),
(30, 1010, 'Al-Shifa Hospital ', 'Fida Hussain', '2000-02-01', 'Crono virus', 'Muhammad Aqil', '03003606051', 'Al-shifa@gmail.com', 'Shahdadpur', 'Muhammad@gmail.com'),
(31, 1011, 'Al-Shifa Hospital ', 'Ejaz Ul Hassan', '2002-12-03', 'Crono virus', 'Meer Hassan', '03043945454', 'Al-shifa@gmail.com', 'Nawab Shah', 'Hassan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_date`
--

CREATE TABLE `vaccine_date` (
  `D_id` int(11) NOT NULL,
  `Child_Reg` int(11) DEFAULT NULL,
  `Child_name` varchar(20) DEFAULT NULL,
  `Father_name` varchar(20) DEFAULT NULL,
  `Parent_Email` varchar(20) DEFAULT NULL,
  `Vaccine_name` varchar(20) DEFAULT NULL,
  `Hospital_name` varchar(20) DEFAULT NULL,
  `vaccine_date` date NOT NULL,
  `Upcomming` date DEFAULT NULL,
  `Taken_dose` int(11) DEFAULT NULL,
  `Total_dose` int(11) DEFAULT NULL,
  `Hos_Email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine_date`
--

INSERT INTO `vaccine_date` (`D_id`, `Child_Reg`, `Child_name`, `Father_name`, `Parent_Email`, `Vaccine_name`, `Hospital_name`, `vaccine_date`, `Upcomming`, `Taken_dose`, `Total_dose`, `Hos_Email`) VALUES
(1, 1009, 'Ali  ', 'Ali Khan ', 'Ali@gmail.com', 'MMR', 'Al-Shifa Hospital ', '0000-00-00', '2024-10-15', 1, 2, 'Ali@gmail.com'),
(3, 1004, 'Ahmed ', 'Ahmed Ali ', 'Ahmed@gmail.com', 'Meteris', 'Al-Shifa Hospital ', '2024-09-13', '2024-10-13', 1, 2, 'Ahmed@gmail.com'),
(4, 1006, 'Sana khan ', 'Jahangir ', 'Jahangir@gmail.com', 'Meteris', 'Al-Shifa Hospital ', '2024-09-11', '2024-10-02', 1, 2, 'Jahangir@gmail.com'),
(5, 1010, 'Fida Hussain ', 'Muhammad Aqil ', 'Hassan@gmail.com', 'Crono virus', 'Al-Shifa Hospital ', '2024-09-09', '2024-10-08', 1, 2, 'Al-shifa@gmail.com'),
(6, 1011, 'Ejaz Ul Hassan ', 'Meer Hassan ', '', 'Crono virus', 'Al-Shifa Hospital ', '2024-06-05', '2024-10-02', 1, 2, 'Al-shifa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_report`
--

CREATE TABLE `vaccine_report` (
  `Rep_Id` int(11) NOT NULL,
  `Child_Reg` int(11) DEFAULT NULL,
  `Child_name` varchar(50) DEFAULT NULL,
  `Birth_date` date DEFAULT NULL,
  `Father_name` varchar(50) DEFAULT NULL,
  `F_Number` varchar(50) DEFAULT NULL,
  `F_Email` varchar(50) DEFAULT NULL,
  `Hospital_name` varchar(50) DEFAULT NULL,
  `Hos_Email` varchar(50) DEFAULT NULL,
  `Vaccine_name` varchar(50) DEFAULT NULL,
  `Vac_start_date` date DEFAULT NULL,
  `Vac_end_date` date DEFAULT NULL,
  `Total_doses` int(11) DEFAULT NULL,
  `doc_remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine_report`
--

INSERT INTO `vaccine_report` (`Rep_Id`, `Child_Reg`, `Child_name`, `Birth_date`, `Father_name`, `F_Number`, `F_Email`, `Hospital_name`, `Hos_Email`, `Vaccine_name`, `Vac_start_date`, `Vac_end_date`, `Total_doses`, `doc_remarks`) VALUES
(1, 1006, 'Sana khan', '2021-03-20', 'Jahangir', '03025642856', 'Jahangir@gmail.com', 'Al-Shifa Hospital ', '', 'Crono virus', '2024-01-04', '2024-09-05', 2, 'The child showed no immediate adverse reactions post-vaccination.\r\nThe injection site was monitored and showed no significant swelling or redness.\r\nThe child was calm and cooperative during the procedure.');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_updates`
--

CREATE TABLE `vaccine_updates` (
  `Id` int(11) NOT NULL,
  `Hospital_name` varchar(50) NOT NULL,
  `Vaccine_name` varchar(50) NOT NULL,
  `Quantity` varchar(50) NOT NULL,
  `Expire_date` date NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine_updates`
--

INSERT INTO `vaccine_updates` (`Id`, `Hospital_name`, `Vaccine_name`, `Quantity`, `Expire_date`, `Email`) VALUES
(1, 'Al-Shifa Hospital', 'MMR', '200', '2024-08-23', 'Al-shifa@gmail.com'),
(2, 'City Care Hospital', 'Haemophilus influenzae', '560', '0000-00-00', 'ahmed.khan@citycare.pk'),
(3, 'Shifa International', 'MMR vaccine', '700', '0000-00-00', 'fatima.h@shifa.pk'),
(4, 'Al- khidmat Hospital', 'Polio vaccines', '20', '2024-08-24', 'al-khudmt@gmail.com'),
(5, 'Aagha Khan Hospital', 'Rotavirus', '870', '0000-00-00', 'aaghakhan@gmail.com'),
(6, 'Iqbal Hospital', 'Diphtheria', '680', '0000-00-00', 'iqbal@gmail.com'),
(7, 'Liaqt Hospital', 'Pertussis', '800', '0000-00-00', 'liaqt4312@gmail.com'),
(8, 'Sir Syed Hospital', 'Chickenpox', '750', '0000-00-00', 'sirsyed4532@gmail.com'),
(9, 'Noor Hospital', 'Meningococcal', '780', '0000-00-00', 'noor67832@gmail.com'),
(10, 'Abbasi Hospital', 'Hepatitis B vaccine', '930', '0000-00-00', 'abbasi@gmail.com'),
(11, 'Jannat Hospital', 'Meningococcal', '830', '0000-00-00', 'jannat@gmail.com'),
(12, 'City Hospital', 'Haemophilus influenzae', '770', '0000-00-00', 'city5608@gmail.com'),
(13, 'Child Hospital', 'Polio vaccines', '600', '0000-00-00', 'child1290@gmail.com'),
(14, 'Life Care Hospital', 'Diphtheria', '900', '0000-00-00', 'lifecare90675@gmail.com'),
(15, 'Dua Hospital', 'Chickenpox', '1000', '0000-00-00', 'dua55239@gmail.com'),
(16, 'Javaid Hospital', 'Pertussis', '700', '0000-00-00', 'javaid@gmail.com'),
(17, 'Shaheen Hospital', 'MMR vaccine', '670', '0000-00-00', 'shaheen4563@gmail.com'),
(18, 'Qasim Hospital', 'Hepatitis', '700', '0000-00-00', 'qasim3593@gmail.com'),
(36, 'Shaheen Hospital', 'Polio', '300', '2024-08-01', 'mhassanjaan55@gmail.com'),
(39, 'Ali Medical Centre', 'Meteris', '230', '2025-08-22', 'hassanjaan5@outlook.com'),
(41, 'Al-Khudmt Hospital', 'Polio vaccines', '20', '2024-08-24', 'al-khudmt@gmail.com'),
(57, 'Al-Shifa Hospital ', '', '', '0000-00-00', ''),
(59, 'Al-Shifa Hospital ', '', '', '0000-00-00', 'hassanjaan5@outlook.com'),
(60, 'Al-Shifa Hospital ', '', '', '0000-00-00', 'hassanjaan5@outlook.com'),
(61, 'Al-Shifa Hospital ', '', '', '0000-00-00', ''),
(62, 'Al-Shifa Hospital ', '', '', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_requests`
--
ALTER TABLE `booking_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `hospital_register`
--
ALTER TABLE `hospital_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslaters`
--
ALTER TABLE `newslaters`
  ADD PRIMARY KEY (`Laters_id`);

--
-- Indexes for table `parents_register`
--
ALTER TABLE `parents_register`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `parents_requests`
--
ALTER TABLE `parents_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccinations_notification`
--
ALTER TABLE `vaccinations_notification`
  ADD PRIMARY KEY (`N_id`);

--
-- Indexes for table `vaccination_status`
--
ALTER TABLE `vaccination_status`
  ADD PRIMARY KEY (`V_id`),
  ADD UNIQUE KEY `Child_Reg` (`Child_Reg`);

--
-- Indexes for table `vaccine_date`
--
ALTER TABLE `vaccine_date`
  ADD PRIMARY KEY (`D_id`);

--
-- Indexes for table `vaccine_report`
--
ALTER TABLE `vaccine_report`
  ADD PRIMARY KEY (`Rep_Id`);

--
-- Indexes for table `vaccine_updates`
--
ALTER TABLE `vaccine_updates`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_requests`
--
ALTER TABLE `booking_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hospital_register`
--
ALTER TABLE `hospital_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `newslaters`
--
ALTER TABLE `newslaters`
  MODIFY `Laters_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parents_register`
--
ALTER TABLE `parents_register`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `parents_requests`
--
ALTER TABLE `parents_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vaccinations_notification`
--
ALTER TABLE `vaccinations_notification`
  MODIFY `N_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vaccination_status`
--
ALTER TABLE `vaccination_status`
  MODIFY `V_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `vaccine_date`
--
ALTER TABLE `vaccine_date`
  MODIFY `D_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vaccine_report`
--
ALTER TABLE `vaccine_report`
  MODIFY `Rep_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vaccine_updates`
--
ALTER TABLE `vaccine_updates`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
