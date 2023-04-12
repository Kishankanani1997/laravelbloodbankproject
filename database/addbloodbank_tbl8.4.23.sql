-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2023 at 01:04 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbloodbank_tbl`
--

CREATE TABLE `addbloodbank_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bbtype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addbloodbank_tbl`
--

INSERT INTO `addbloodbank_tbl` (`id`, `name`, `address`, `number`, `email`, `bbtype`, `created_at`, `updated_at`) VALUES
(1, 'PDU Hospital and Medical College, Rajkot', 'Blood Bank, P.D.U. Hospital & Medical College, Room No. 6, Ground Floor, New OPD Building, PDU Hospital and MedicalCollege, Jamnagar road, Rajkot-360001', '0281-2450385', 'info@pdu.com', 'Government', '2023-04-08 04:44:10', '2023-04-08 04:44:10'),
(2, 'Life Blood Centre (Formerly known as Rajkot Voluntary Blood Bank)', 'Life Blood Centre (Formerly known as Rajkot Voluntary Blood Bank), 24- Vijay plot, Samir Dholakiya Marg, Malaviya Road, Rajkot-360 002', '0281-2234242 2234243', 'info@life.com', 'Trust', '2023-04-08 04:44:57', '2023-04-08 04:44:57'),
(3, 'Red Cross Blood Bank, Rajkot', 'Red Cross Blood Bank, Red Cross Building, 1st Floor, Suchak road, Nr. Kundaliya College, Dist. Rajkot -360001', '0281-2466260/ 2464442', 'info@redcross.com', 'Trust', '2023-04-08 04:45:37', '2023-04-08 04:45:37'),
(4, 'Smt. S.C.Patel Field Marshal Blood Centre, Rajkot', 'Smt. S.C.Patel Field Marshal Blood Centre, (previously known as Nationality Development Foundation Blood Bank) Medicare, 3rd Floor, Vidyanagar Main Road, Rajkot-360002', '0281-2480043, 2481717', 'info@scpatel.com', 'Trust', '2023-04-08 04:46:10', '2023-04-08 04:46:10'),
(5, 'Nathani Voluntary Blood Bank, Rajkot', 'Nathani Voluntary Blood Bank & Blood Tranfusion. 11, Tejash Building,20/22, New Janpath Plot, Rajkot - 360005', '(0281) 2480659, 6522111', 'info@nathaniblood.com', 'Private', '2023-04-08 04:46:50', '2023-04-08 04:46:50'),
(6, 'Blood Bank, Jetpur Medical Foundation Trust, Jetpur', 'Blood Bank, Jetpur Medical Foundation Trust, 2nd Floor, opp. Union Bank of India, Kanakiya Plot, Jetpur, Dist. Rajkot-360370', '02823-226666', 'inf0@bbjetpur.com', 'Government', '2023-04-08 04:47:27', '2023-04-08 04:47:27'),
(7, 'Aastha Voluntary Blood Bank, Gondal', 'Aastha Medical and Education CharitbaleTrust Aastha Voluntary Blood Bank, Old Market Yard, Opp. Bus Station, ICICI Bank Building, Ta. Gondal Dist. Rajkot - 360330', '02825-220828', 'info@aasthablood.com', 'Private', '2023-04-08 04:48:09', '2023-04-08 04:48:09'),
(8, 'Jagruti Charitable Trust Blood Bank, Dhoraji', 'Jagruti Charitable Trust Blood Bank, Azad Chowk, Three Gate, Dhoraji - 360410 Dist. Rajkot', '02824-222485', 'info@jagrutiblood.com', 'Trust', '2023-04-08 04:48:51', '2023-04-08 04:48:51'),
(9, 'Jeevandeep Blood Centre', 'The Student Cultural Group of Amreli, \"jeevandeep Blood Centre 201, Westgate Plus, Nr. Raiya Circle, 150 Ft Ring Road, Rajkot', '9999999999', 'info@jeevandeep.com', 'Private', '2023-04-08 04:50:06', '2023-04-08 04:50:06'),
(10, 'Shree Swaminarayan Sankar Dham Trust Sanskar Blood Centre', 'Shree Swaminarayan Sankar Dham Trust Sanskar Blood Bank, Sanala Road,, Morbi, Morbi, Gujarat', '9714940600, 02822-225733', 'sanskarbloodbank@gmail.com', 'Trust', '2023-04-08 04:51:51', '2023-04-08 04:51:51'),
(11, 'General Hospital', 'Blood Bank, General Hospital,, Morbi, Morbi, Gujarat', '9998476158, 9825358999, 02822-230538', 'ghmorbi@yahoo.co.in', 'Government', '2023-04-08 04:52:36', '2023-04-08 04:52:36'),
(12, 'G.G.Hospital, Jamnagar', 'Blood Bank, The M.P.Shah Medical College & Guru Govindsinh Hospital,, Jamnagar, Jamnagar, Gujarat', 'Phone: 9824241055, 9375220222/ 266120', 'drjvachhani@rediffmail.com', 'Government', '2023-04-08 05:11:14', '2023-04-08 05:11:14'),
(13, 'Jamnagar Voluntary Blood Centre', 'Jamnagar Voluntary Blood Bank, 1st Floor, Shakuntla Apart. Hawai Chowk, , Jamnagar, Jamnagar, Gujarat', '9825515701, 7574867418, 9825515701', 'jvbb.1249@gmail.com', 'Trust', '2023-04-08 05:12:01', '2023-04-08 05:12:01'),
(14, 'Saraswati Voluntary Blood Centre', 'Saraswati Voluntary Blood Bank. Near Shraddha Multi Speciality Hospital, Sumer club road,, Jamnagar, Jamnagar, Gujarat', '9427394858', 'pujanagencies@yahoo.in', 'Trust', '2023-04-08 05:12:59', '2023-04-08 05:12:59'),
(15, 'Shri Jivanprakash Foundation Voluntary Blood Centre', 'Shri Jivanprakash Foundation Voluntary Blood Bank, Vikram Commercial Complex, Sardar Baug Road,, Junagadh , Junagadh, Gujarat', '9825221122, 0285-2630672/ 2631672', 'drgkgajera@gmail.com', 'Trust', '2023-04-08 05:14:05', '2023-04-08 05:14:05'),
(16, 'Navdeep Blood Centre', 'Navdeep Blood Bank, Sankalp Complex, First Floor, S.T. Road,opp Dr. Chikkhalia Hospital,, Junagadh, Junagadh, Gujarat', '9825366141, 0285-2631127', 'drnvpatel9@yahoo.in', 'Trust', '2023-04-08 05:14:37', '2023-04-08 05:14:37'),
(17, 'Blood Centre, Gmers Medical College & Hospital', 'BLOOD BANK,GMERS MEDICAL COLLEGE & HOSPITAL, NEAR MAJEVADI GATE, JUNAGADH, JUNAGADH, Junagadh, Gujarat', '9825847023, 9925328776, 9824213109', 'aha.health.junagadh@gmail.com', 'Government', '2023-04-08 05:16:11', '2023-04-08 05:16:11'),
(18, 'Life Line Blood Center', 'Akshar Plaza, 4, Second Floor, Zanzarda Cross Road, Junagadh, Gujarat, Junagadh, Junagadh, Gujarat', '9408108108', 'lifelinejunagadh@gmail.com', 'Trust', '2023-04-08 05:16:51', '2023-04-08 05:16:51'),
(19, 'Sardar Patel Voulantary Blood Centre', 'Sardar patel voulantary Blood Bank, 1st Floor Sheetal Building, Ramnagar station road,, station road, keshod., Keshod, Junagadh, Gujarat', '9827577177, 9327477177, 02871-233353', 'nitinjoshi673@gmail.com', 'Trust', '2023-04-08 05:17:39', '2023-04-08 05:17:39'),
(20, 'Bambhaniya Voluntary', 'Bambhaniya Voluntary Blood Bank Trade Centre, Kalanain Circle,, Bhavnagar, Bhavnagar, Gujarat', '9824237777, 0278-2224744/ 3004744', 'bambhaniyabloodbank@gmail.com', 'Trust', '2023-04-08 05:18:36', '2023-04-08 05:18:36'),
(21, 'Sir T. Hospital', 'Blood Bank, Sir T. General Hospital, Dr. H.L.Vaidhya Marg, Kalanaka, Bhavnagar, Bhavnagar, Gujarat', '9428106604, 0278-2423250', 'sirth_bb@yahoo.com', 'Trust', '2023-04-08 05:19:20', '2023-04-08 05:19:20'),
(22, 'Bhavnagar Blood Centre', 'Bhavnagar Blood Bank, Ofice No. 1,2,3 - Plot No. 1686, B-wing, 1st Floor, Municipal Commercial Complex, Sardar Nagar Circle, Sardarnagar,, Bhavnagar, Bhavnagar, Gujarat', '9825207660, 9909993206, 0278 - 2561526', 'bhavnagarbloodbank@yahoo.co.in', 'Trust', '2023-04-08 05:20:13', '2023-04-08 05:20:13'),
(23, 'General Hospital', 'General Hospital, Jamkhambalia\r\nBlood Bank, General Hospital, Jamkhambhalia Dist. Devbhoomi Dwarka,, Jamkhambhalia, Devbhoomi Dwarka, Gujarat', '9724849231', 'bb.health.jamkhambhalia@gmail.com', 'Government', '2023-04-08 05:21:25', '2023-04-08 05:21:25'),
(24, 'Divyajyoti Charitable Voulantary Blood Centre', 'Divyajyoti Charitable Voulantary Blood Bank. Varsing pur road, B/H Jalaramvadi, Una, Dist. Gir Somnath, Una, Gir Somnath, Gujarat', '9426713855', 'vivekraja.dvbb@gmail.com', 'Trust', '2023-04-08 05:22:14', '2023-04-08 05:22:14'),
(25, 'Navjeevan Blood Bank & Clinical Laboratory', 'Navjeevan Blood Bank & Clinical Laboratory, Nr.Bus Station, Veraval, Gir Somnath, Gujarat', '9428575353, 9824326100, 02876-221415', 'jitesh_sir@yahoo.co.in', 'Private', '2023-04-08 05:22:48', '2023-04-08 05:22:48'),
(26, 'C. U. Shah Medical College & Hospital', 'Blood Bank, C. U. Shah Medical College & General Hospital, Dudhrej road,, Surendranagar, Surendranagar, Gujarat', '02752-287041', 'bbcusmc@rediffmail.com', 'Trust', '2023-04-08 05:25:11', '2023-04-08 05:25:11'),
(27, 'General Hospital', 'Blood Bank, General Hospital,, Surendranagar, Surendranagar, Gujarat', '9727712214, 02752-222052', 'cdmo.health.surendranagar@gmail.com', 'Government', '2023-04-08 05:25:57', '2023-04-08 05:25:57'),
(28, 'Shraddha Blood Centre', 'CROSS ROAD COMPLAX, ZALA ROAD, , DHRANGADHRA, Surendranagar, Gujarat', '9426922330', 'spl9018@gmail.com', 'Private', '2023-04-08 05:26:36', '2023-04-08 05:26:36'),
(29, 'Lifeline Blood Centre', 'plot no. 2&13, 1st and 2nd floor, , beside dr. kharod surgical hospital, opp. doctor house, bus stand road, surendranagar, Surendranagar, Gujarat', '9227742777, 9979072328', 'lifelinebloodbank.snr@gmail.com', 'Private', '2023-04-08 05:27:16', '2023-04-08 05:27:16'),
(30, 'Rajabhai Patel, Ima, Gandhidham', 'Indian Medical Association Gandhidham Trust (Regd.), Rajabhai Patel Blood Bank, Gandhidham Trust, Near Gurukul Road,, Gandhidham, Kachchh, Gujarat', '9426767481, 02836-257366/ 257323', 'imabloodbank@yahoo.co.in', 'Trust', '2023-04-08 05:31:33', '2023-04-08 05:31:33'),
(31, 'G.K. General Hospital', 'Blood Bank, G.K. General Hospital,, Bhuj, Kachchh, Gujara', '9033744663, 9998055301, 9173456393', 'darshanraval901@gmail.com', 'Government', '2023-04-08 05:32:17', '2023-04-08 05:32:17'),
(32, 'Mayur Blood Centre', 'Mayur Blood Bank (Vol.) Pathology Laboratory, Azad Chowk, , Mandvi, Kachchh, Gujarat', '98254 22524, 231324', 'mayurlabmandvi@gmail.com', 'Private', '2023-04-08 05:33:10', '2023-04-08 05:33:10'),
(33, 'Jivanjyot Blood Centre', 'Jivanjyot Blood Bank, 63, A/B, Vijyanagar, New Hospital Road,, Bhuj, Kachchh, Gujarat', '9825258612, 02832-222812', 'ramnik_r_patel@yahoo.com', 'Private', '2023-04-08 05:33:43', '2023-04-08 05:33:43'),
(34, 'SHRI KUTCHI LEVA PATEL EDUCATION & MEDICAL TRUST SANCHALIT MMPJ HOSPITAL BLOOD BANK', 'DEPARTMENT OF PATHOLOGY MMPJ HOSPITAL BHUJ KUTCH GUJRAT, Kachchh, Kachchh, Gujarat', '9727588449', 'mmpjlab@gmail.com', 'Trust', '2023-04-08 05:34:25', '2023-04-08 05:34:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbloodbank_tbl`
--
ALTER TABLE `addbloodbank_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbloodbank_tbl`
--
ALTER TABLE `addbloodbank_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
