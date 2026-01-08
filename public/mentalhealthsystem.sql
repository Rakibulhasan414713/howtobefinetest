

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentalhealthsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(200) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Email`, `Password`) VALUES
(1, 'rakib', 'rakib3344@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `SNo` int(20) NOT NULL,
  `Country` varchar(200) NOT NULL,
  `City` varchar(500) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`SNo`, `Country`, `City`, `Date`) VALUES
(1, '1', 'Dhaka', '2025-11-13'),
(2, '1', 'Chittagong', '2025-11-13'),
(3, '1', 'Sylhet', '2025-11-13'),
(4, '1', 'Khulna', '2025-11-13'),
(5, '1', 'Rajshahi', '2025-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `ID` int(200) NOT NULL,
  `SNo` int(200) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `DocEducation` varchar(500) NOT NULL,
  `YearsofExperience` text NOT NULL,
  `HospitalAddr` varchar(700) NOT NULL,
  `ContactNumber` text NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`ID`, `SNo`, `Name`, `DocEducation`, `YearsofExperience`, `HospitalAddr`, `ContactNumber`, `Date`) VALUES
(1, 1, 'Dr Md. Rahat Hossain', 'MBBS, MD (Psychiatry)', '6', 'Square Hospital, Panthapath, Dhaka', '01712001122', '2022-03-18'),
(2, 1, 'Dr Farzana Akter', 'MBBS, FCPS (Psychiatry)', '9', 'Bangabandhu Sheikh Mujib Medical University, Shahbag, Dhaka', '01713002233', '2022-03-18'),
(3, 1, 'Dr Tanvir Ahmed', 'MBBS, MD', '7', 'Popular Diagnostic Centre, Dhanmondi, Dhaka', '01714003344', '2022-03-18'),
(4, 1, 'Dr Nusrat Jahan', 'MBBS, FCPS', '4', 'United Hospital, Gulshan, Dhaka', '01715004455', '2022-03-18'),
(5, 2, 'Dr Mahfuz Rahman', 'MBBS, MD (Psychiatry)', '12', 'Chittagong Medical College Hospital, Chattogram', '01812005566', '2022-03-20'),
(6, 2, 'Dr Sharmeen Sultana', 'MBBS, FCPS', '10', 'Evercare Hospital Chattogram, Chattogram', '01813006677', '2022-03-20'),
(7, 2, 'Dr Ibrahim Khaled', 'MBBS', '8', 'CSCR Hospital, Chawkbazar, Chattogram', '01814007788', '2022-03-20'),
(8, 2, 'Dr Nazia Hasan', 'MBBS', '5', 'Max Hospital and Diagnostic, Mehedibag, Chattogram', '01815008899', '2022-03-22'),
(9, 3, 'Dr Afsana Rahman', 'MBBS, MD (Psychiatry)', '15', 'Khulna Medical College Hospital, Khulna', '01912001133', '2022-03-22'),
(10, 3, 'Dr Md. Kamrul Islam', 'MBBS, FCPS', '11', 'Islami Bank Hospital, Sher-e-Bangla Road, Khulna', '01913002244', '2022-03-24'),
(11, 3, 'Dr Lutfur Rahman', 'MBBS', '9', 'Gazi Medical College Hospital, Sonadanga, Khulna', '01914003355', '2022-03-24'),
(12, 4, 'Dr Sabrina Yasmin', 'MBBS, MD (Psychiatry)', '8', 'Sylhet MAG Osmani Medical College Hospital, Sylhet', '01612004466', '2022-03-24'),
(13, 4, 'Dr Md. Rashed Chowdhury', 'MBBS, FCPS', '6', 'North East Medical College Hospital, Sylhet', '01613005577', '2022-03-28'),
(14, 4, 'Dr Tahmid Hasan', 'MBBS', '4', 'Jalalabad Ragib-Rabeya Medical College Hospital, Sylhet', '01614006688', '2022-03-28'),
(15, 5, 'Dr Ziaul Haque', 'MBBS, MD (Psychiatry)', '13', 'Tairunnessa Memorial Medical College Hospital, Gazipur', '01512007799', '2022-03-28'),
(16, 5, 'Dr Sumaiya Rahman', 'MBBS', '5', 'Gazipur City Hospital, Chandona Chowrasta, Gazipur', '01513008800', '2022-03-28'),
(17, 5, 'Dr Moniruzzaman', 'MBBS, FCPS', '10', 'Shaheed Tajuddin Ahmad Medical College Hospital, Gazipur', '01514009911', '2022-03-28'),
(18, 5, 'Dr Lamea Hasan', 'MBBS', '3', 'Popular Diagnostic Centre, Tongi, Gazipur', '01515001122', '2022-03-28');
-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(200) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `messages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- AUTO_INCREMENT for dumped tables
--


--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Gender`, `City`, `Email`, `Password`) VALUES
(1, 'Rakib Hasan', 'Male', 'Dhaka', 'rakib.hasan123@gmail.com', 'rakib123');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `SNo` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
