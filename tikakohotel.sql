-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2024 at 07:01 PM
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
-- Database: `tikakohotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_login`
--

CREATE TABLE `emp_login` (
  `empid` int(100) NOT NULL,
  `Emp_Email` varchar(50) NOT NULL,
  `Emp_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_login`
--

INSERT INTO `emp_login` (`empid`, `Emp_Email`, `Emp_Password`) VALUES
(1, 'Admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `RoomType` varchar(30) NOT NULL,
  `Bed` varchar(30) NOT NULL,
  `NoofRoom` int(30) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `noofdays` int(30) NOT NULL,
  `roomtotal` double(8,2) NOT NULL,
  `bedtotal` double(8,2) NOT NULL,
  `meal` varchar(30) NOT NULL,
  `mealtotal` double(8,2) NOT NULL,
  `finaltotal` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `Name`, `Email`, `RoomType`, `Bed`, `NoofRoom`, `cin`, `cout`, `noofdays`, `roomtotal`, `bedtotal`, `meal`, `mealtotal`, `finaltotal`) VALUES
(41, 'Tushar pankhaniya', 'pankhaniyatushar9@gmail.com', 'Single Room', 'Single', 1, '2022-11-09', '2022-11-10', 1, 1000.00, 10.00, 'Room only', 0.00, 1010.00),
(82, 'nisa', 'thoriq@gmail.com', 'Kamar Bawah', '', 0, '2024-09-19', '2024-09-20', 1, 300000.00, 0.00, '', 0.00, 300000.00),
(83, 'darto', 'coba@gmail.com', 'Kamar Atas', '', 0, '2024-09-19', '2024-09-20', 1, 350000.00, 0.00, '', 0.00, 350000.00),
(84, 'krisna', 'krisna@gmail.com', 'Kamar Besar', '', 0, '2024-09-18', '2024-09-20', 2, 800000.00, 0.00, '', 0.00, 800000.00),
(85, 'tukiyem', 'coba@gmail.com', 'Kamar Atas', '', 0, '2024-09-21', '2024-09-22', 1, 350000.00, 0.00, '', 0.00, 350000.00),
(86, 'tukiyem', 'coba@gmail.com', 'Kamar Atas', '', 0, '2024-09-21', '2024-09-22', 1, 350000.00, 0.00, '', 0.00, 350000.00),
(87, 'painah', 'coba@gmail.com', 'Kamar Besar', '', 0, '2024-09-27', '2024-09-30', 3, 999999.99, 0.00, '', 0.00, 999999.99),
(88, 'painah', 'coba@gmail.com', 'Kamar Bawah', '', 0, '2024-09-22', '2024-09-23', 1, 300000.00, 0.00, '', 0.00, 300000.00),
(89, 'jamal', 'coba@gmail.com', 'Kamar Atas', '', 0, '2024-09-29', '2024-09-30', 1, 350000.00, 0.00, '', 0.00, 350000.00);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(30) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`) VALUES
(4, 'Kamar Atas'),
(6, 'Kamar Bawah'),
(7, 'Kamar Besar'),
(33, 'Kamar Atas'),
(34, 'Kamar Bawah'),
(35, 'Kamar Besar');

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `RoomType` varchar(30) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `nodays` int(50) NOT NULL,
  `stat` varchar(30) NOT NULL,
  `payment_proof` varchar(255) DEFAULT NULL,
  `encrypted_data` text DEFAULT NULL,
  `hashed_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Name`, `Email`, `Country`, `Phone`, `RoomType`, `cin`, `cout`, `nodays`, `stat`, `payment_proof`, `encrypted_data`, `hashed_email`) VALUES
(82, 'nisa', 'thoriq@gmail.com', 'Armenia', '0883232311', 'Kamar Bawah', '2024-09-19', '2024-09-20', 1, 'Confirm', 'WhatsApp Image 2024-06-07 at 16.37.57_0c86686b.jpg', 'c2pEeXcyK0lDeEU0MGVMNDVQRW16S3RRMGVZeVkwNlNyWHJNQnh3akNPanRCRkJmZmdZOXVNQ3V4VDVnMSt5WXlrU0JDVysrMmxZNFlBSTFicTFTWmw0VCtFdGdGdDlrSWxSOVJRYUk0VDZrcThzYWhQNE1nTEZHVFpTdjVRcG5FSjdXZnI0VlRFa3BnRlV6NjJwejN5VVdmYVhPQnhrcEI2OGd2ckticFl0Sm04TkJuam1IME1OWFU1V2dySUtnOjq3lpKW2LDPql9jEl6ANUNo', '$2y$10$G8M.M4qI2fVAkBgtcnRbneSnO5pS8a/z3M7FNSTt0W5vH3lqEGzu6'),
(83, 'darto', 'coba@gmail.com', 'Albania', '773422', 'Kamar Atas', '2024-09-19', '2024-09-20', 1, 'Confirm', 'WhatsApp Image 2024-06-07 at 16.38.00_b5557f08.jpg', 'ZjlJQm1lTUFueXRwdlZJYXRURFdycVUzb3BxN0c2Mjk2WXhWZm1FZ3htNjl4SHZPOVNFelA4aXpzZE55OGdJTWtXc0NTVjZIVENsMlVrS0k5VXF5NElwclhrSE42RHU4ekhtN2Z2ZVlSVUJUbHU0dUtqbitXSUFvcEVmbHZYdHZ0SS9RTTZhcllYeXJyOStNdzFZeXVlN29FaHdyaFIvQTRsaFlIWWF4OWtrPTo633boBCwkBMzYn/xD6nOr4w==', '$2y$10$Zq2U7IkrdGuYJZqLgOF1/e.xhTqOwTYv20ZGg5GRqBn45oSw4ErUq'),
(84, 'krisna', 'krisna@gmail.com', 'Indonesia', '089965553555', 'Kamar Besar', '2024-09-18', '2024-09-20', 2, 'Confirm', 'WhatsApp Image 2024-06-07 at 16.37.57_47f49bc2.jpg', 'aWFzYXVIdDlGdVQxbStFamhsTTBuZExSN2YvNWc2TGMvZGVuZ1FZbmc1WXNxZjJpVkNWVlluWWdtZFk3d1JJazFTYitZV2owN3k0ZUQvSDRFNzR0R01saGtkSWEzTDg0VkV3aVFxeEpVdlJvMmwvU3Z2RHZ6bC9EL0pyZ0ljL2EyZUI3d0tnTjEzcXBxY2h4dk9wWWt0NzF4MVB6RnVHa0lLRFJ5eFNvZVh2NitKK25GY2FVeTlnUXVtbjVGRGtTOjpniPZb3V/d8KNbJgrtH0AP', '$2y$10$.IKyzJwoZcQISmHEGQEfj.u3IyLQmHyrKE60.rrfr7rsDuLamh4vG'),
(85, 'tukiyem', 'coba@gmail.com', 'France', '311344', 'Kamar Atas', '2024-09-21', '2024-09-22', 1, 'Confirm', 'WhatsApp Image 2024-06-07 at 16.37.57_0c86686b.jpg', 'R2hJUGM1U0s4aUpGZVN2cHBNY3RzV2hhZlk4SXRqTDJVNFhBMEw5eGViOVV1c3BuOXF4QnA0anBFYnJYeXFEbjM4ckVKVFVsZnE0b0xNYzlFRmRuWEdRbnZ3eXZrQUJ1Q3creVdYVlk0WVVoSXVsczJJVjBhTTkrcUZERjByL2R3Y0lxdDFYQVI5eHUrdVgrNGtzWlZWL254ay9aSTl3dy9LVG1jQmFKd3hJM1RGTUpZbU13blAwcllGbTBLVEhROjrH7AOcxfevjB09Pd64audw', '$2y$10$Tx6GoDbKZJvmeCP2Z7UoXO2dl1k/R5CVyRolOTXSjXuNh8QbsHe/u'),
(86, 'tukiyem', 'coba@gmail.com', 'France', '311344', 'Kamar Atas', '2024-09-21', '2024-09-22', 1, 'Confirm', 'WhatsApp Image 2024-06-07 at 16.37.57_0c86686b.jpg', 'ZkU0M1BqamtobjE2cFRTVDRFQk93U0FqYWN6NU93T1hUSzZ0YXBEWnRLQWhzTmkzUkVEVjlWMDZ4Vi8zUVBNdDBjOUkyekhtMHpvRGcyQUw5cGlVT1JVdnVQeDc4M0xjakxiZS9aQ0RYb3UwR1diRDNGQS9BdGNEdjdHeFlURHVkNC85MFJiMFJlNjA5LzZ2NFphV1hsZU1hb3kwTm9JTTVlalh5VmpyZGR1a0hyaDVzS01yeFk0L3lZQWREZllCOjphoEnQM7b5dVBFl9ue5Cv5', '$2y$10$xAiDBUx3e4y53D.SeSQi2ubn408Q548naD81Bt90HgUmtbpt2VGSO'),
(87, 'painah', 'coba@gmail.com', 'Finland', '55366', 'Kamar Besar', '2024-09-27', '2024-09-30', 3, 'Confirm', 'WhatsApp Image 2024-06-07 at 16.37.57_47f49bc2.jpg', 'bnArK0F0RTYzQStEMlIwampCaGxGOXNkdlovQnhzOHg0U1k0YWZOVVVmZDZHY3gzTDBGaThQUSttRmdJNEhuaTRQVTdGQVpPRVlyV2lGTksxVWJIR1ZSbXdzQnBELy9tUmJzOWI4UGo0NHlUb3dtWkRYTjNlc2dPd3RrQ2hVYUJGazdGK3gvWTF5OWZNN25rcGpZdTFiTWxjTy9NNjNoK3MybDUxZGJQWExwbXFUWHVnV1M4UTlSYldMOFZmbHE5OjoNQ1RnAxe7dxY4sXOY8e3R', '$2y$10$qzXB4R7UUcrguJLnl.4f1e2oV0rdhkghNvdRQ/pT7ZF/6QfqFDjya'),
(88, 'painah', 'coba@gmail.com', 'Finland', '55366', 'Kamar Bawah', '2024-09-22', '2024-09-23', 1, 'Confirm', 'WhatsApp Image 2024-06-07 at 16.38.00_86da46cf.jpg', 'NGdzQWZMTXdRaWtkdUllcytrRk5Lc1pOOVBaaDA0YUorYVJ5VUFEYmMrdFVlVWwxNzVld3JpOXQyLzRBUVVlZkU5U05DaDh6c0FjQUJ5QmF2TTYxbFFGQUZGRElTZHlGMGg1VEl2Wk5BUmtwUVhQbzRVaXhXMmZGUy9LOW5iYW84QWgyN3FmYUNPLy9VVWZnSnM3YUZ3ZVVjYk5GSy9Pb0xCUkYvTkQ1NHoyVHE4TXU1dk1xTzR0STM5dzVZZGlKOjpBJxv66ZUsq+2oZPcDLCFA', '$2y$10$KWxum2x3RpjDxxkgZMviY.CK0K0F5Me7.a.kN2rnHdZwaEUhXQ4/q'),
(89, 'jamal', 'coba@gmail.com', 'Grenada', '44221', 'Kamar Atas', '2024-09-29', '2024-09-30', 1, 'Confirm', 'Capture.JPG', 'OGRGTy9lMmlzUkEwUG9kQU5FMHJzRDVybEY0TVQ0WmlIYm1ZWEh6Mm52aUxpRDYrdkNPQ1JWajErYlV3WCtBKzRSdm5FRFZLMHFuU0JwOWQrc05RTS9CSyt5SG8xdTVOeGNwclhwcXBPZEJwamY4M2xaWFY4MDVDVHhFZnQrVEZFNDJ0ZXBTTC92NGdvVStvcHBWZFc0d2tXT1NpS0x5dUkyTlRKT1cyTUdnPTo6PO3vXUaLlrWPVNYm2PiSrQ==', '$2y$10$ed97mXoC7tnzv5lBgSilDOc2eP5SqAGWt8fZWZNM1A0.PnMeZL8ma'),
(90, 'krisnaaa', 'krisna@gmail.com', 'Japan', '674421', 'Kamar Besar', '2024-09-28', '2024-09-29', 1, 'NotConfirm', 'kapsters.JPG', 'ekc1RWNzRUx4blVSUTJnVncyOUVYeS9uVlFKcEk0TzlqVUlibGNtME1pZFZUYWxvcmVDU1FnZVcxMGxBb0ZUMDZudFZzTzRRTGxNdVZ3cGk1RGI2ak05N0syQU55OHltMi9jQTF3T3dMbENVVG1wanI3NVBQbWlubGNEV281aXMzcnpjYTR2ZklWSHcxL0dPNkJRQ2JuRm5Bb1E3TE80WVMvL2JuL2F6YU4vSjRKNDc5aEVsUlZRNUdObStJQkkwOjpelkNDgqlCQXpLzdfNM6tz', '$2y$10$U92WxndmjHG2gIlJFZFReePkJvwonXwLcQmSRdPBHvdQMHcpExZ.u');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `UserID` int(100) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Encrypted_Username` text DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Encrypted_Email` text DEFAULT NULL,
  `Password` varchar(50) NOT NULL,
  `Password_Hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`UserID`, `Username`, `Encrypted_Username`, `Email`, `Encrypted_Email`, `Password`, `Password_Hash`) VALUES
(17, 'coba', 'dFN0UXcxYWN6YUxneHFEU0J1cElSdz09Ojr8gEiMbUuW45bxgY4A9LT+', 'coba@gmail.com', 'dnJiWG1FU2I2UDRDTW5Lb2Y4RDRUdz09OjpeO4avfxSc5NaNReq+tEjz', 'hotel', '$2y$10$Pbua81nNIz9yNpawvxLxXuC1dRRaoZMmQOF.E/ZmMEdFb50boZQT2'),
(18, 'jamil', 'MjY0OVlpQ1RxUklpUVQ1aFZHSjFZUT09OjqdS3TFzI5zMya1He3Qq1BN', 'jamil17@gmail.com', 'MThhenNRN0k2bld5aHBQOGxBdWpFcFhOWno5OXhlTVVXQXF6Qk4zaVZyRT06Opc//caIgqZXtHZHb3f+RzQ=', 'jamil', '$2y$10$3Ch1inK4DkyfLRG/WME41ewsxnobjClHBcZaWq7vbFI/rLa01nWe2'),
(19, 'thoriq', 'TGJWTkI1SWJGSGplSmd3VTZLdDlVdz09OjourojTc5zvjNlT7h36Mr+5', 'thoriq@gmail.com', 'ZVZvVmdsL3lpTlZseDBNa21XRDdCekZycmNFbktGWnkydEkyM21mQnAxST06Ot8Ajk+PdaQ7dTPDyIn4Hy0=', 'thoriq', '$2y$10$4UdbGcWca0.86KH9aNQi6.RGhT1HXtnkblX8z4JA5QuVqYfuJ2wxK'),
(20, 'krisna', 'YVRWRFArN0xTbnVPRnRBSDVPVDZyUT09OjrhFEmr5PaaWL3LgQjCG4Lv', 'krisna@gmail.com', 'VUFHVEZXOTlBTGpSWmltNDhmRGxQenJBU0Mvb2Q0SDRaRU5kaStYYnNpST06OnmP3E6M6OPiOnD2T0lfWhQ=', 'krisna', '$2y$10$3nFfVOSD9i5x5cVnQyMDOuU79QL2U621ozjr33SsJLEzLPZZNLTHq');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `work` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `work`) VALUES
(1, 'Tushar pankhaniya', 'Manager'),
(13, 'jamil', 'Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_login`
--
ALTER TABLE `emp_login`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_login`
--
ALTER TABLE `emp_login`
  MODIFY `empid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `UserID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
