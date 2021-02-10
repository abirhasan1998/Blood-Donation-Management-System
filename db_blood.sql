-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 08:27 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_donar`
--

CREATE TABLE `tb_donar` (
  `Donar_Name` varchar(20) NOT NULL,
  `Donar_Id` varchar(20) NOT NULL,
  `Donar_Age` varchar(5) NOT NULL,
  `Donar_Blood_Group` varchar(10) NOT NULL,
  `Date_Of_Birth` varchar(10) NOT NULL,
  `Last_Date_Of_Donation` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Contact_No` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_donar`
--

INSERT INTO `tb_donar` (`Donar_Name`, `Donar_Id`, `Donar_Age`, `Donar_Blood_Group`, `Date_Of_Birth`, `Last_Date_Of_Donation`, `Gender`, `Address`, `Contact_No`) VALUES
('Lammim', '1', '30', 'AB-', '1985-12-03', '2003-03-31', 'male', 'Dhaka', '01923456745'),
('Alvi', '2', '20', 'A+', '11-11-1998', '11-12-2016', 'male', 'Bhola', '01725142175'),
('Kawsar', '3', '23', 'B-', '15-10-1996', '10-10-2016', 'male', 'Dhaka', '01721782804'),
('Samsun Nahar', '4', '35', '0+', '03-07-1985', '01-02-2007', 'female', 'Mirpur ', '01727740535'),
('Md.Jabbar', '5', '50', 'AB+', '05-07-1976', '03-11-2000', 'male', 'Bogra', '01727782804');

-- --------------------------------------------------------

--
-- Table structure for table `tb_employee`
--

CREATE TABLE `tb_employee` (
  `Employee_Name` varchar(30) NOT NULL,
  `Employee_Id` varchar(20) NOT NULL,
  `Employee_Age` varchar(5) NOT NULL,
  `Employee_Designation` varchar(10) NOT NULL,
  `Date_Of_Birth` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Contact_No` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_employee`
--

INSERT INTO `tb_employee` (`Employee_Name`, `Employee_Id`, `Employee_Age`, `Employee_Designation`, `Date_Of_Birth`, `Gender`, `Address`, `Contact_No`) VALUES
('Rahim', '1', '30', 'Nurse', '1987-03-31', 'male', 'Rangpur', '0177267856'),
('Suma Islam', '2', '26', 'Nurse', '01-10-1991', 'female', 'Gazipur', '01334567892'),
('Kamrul', '3', '25', 'Admin', '11-11-1992', 'male', 'Cumilla', '01883245678'),
('Shoieb', '4', '26', 'Admin ', '03-10-1993', 'male', 'Norshindi', '01772345678'),
('Saiful Islam', '5', '35', 'Doctor', '11-11-1983', 'male', 'Dhaka', '01723456789'),
('Rubayet Islam', '6', '30', 'Doctor', '05-10-1988', 'female', 'Badda', '01992345678');

-- --------------------------------------------------------

--
-- Table structure for table `tb_patient`
--

CREATE TABLE `tb_patient` (
  `Patient_Name` varchar(30) NOT NULL,
  `Patient_Id` varchar(20) NOT NULL,
  `Patient_Age` varchar(5) NOT NULL,
  `Patient_Blood_Group` varchar(20) NOT NULL,
  `Patient_Diseases` varchar(10) NOT NULL,
  `Date_Of_Birth` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Contact_No` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_patient`
--

INSERT INTO `tb_patient` (`Patient_Name`, `Patient_Id`, `Patient_Age`, `Patient_Blood_Group`, `Patient_Diseases`, `Date_Of_Birth`, `Gender`, `Address`, `Contact_No`) VALUES
('Afzal', '1', '20', 'AB-', 'virus', '1998-12-02', 'male', 'Faridpur', '01845564444'),
('Urmi', '2', '22', 'A+', 'Leucomia', '05-10-1997', 'female', 'Dhaka', '01725142177'),
('Rubel', '3', '30', 'o+', 'Tifoide', '01-16-1992', 'male', 'Rangpur', '01721782809');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_donar`
--
ALTER TABLE `tb_donar`
  ADD PRIMARY KEY (`Donar_Id`,`Contact_No`);

--
-- Indexes for table `tb_employee`
--
ALTER TABLE `tb_employee`
  ADD PRIMARY KEY (`Employee_Id`,`Contact_No`);

--
-- Indexes for table `tb_patient`
--
ALTER TABLE `tb_patient`
  ADD PRIMARY KEY (`Patient_Id`,`Contact_No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
