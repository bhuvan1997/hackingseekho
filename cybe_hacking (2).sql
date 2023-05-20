-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 04:12 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybe_hacking`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_district_state`
--

CREATE TABLE `m_district_state` (
  `id` int(3) NOT NULL,
  `state_id` varchar(8) DEFAULT NULL,
  `district_name` varchar(26) DEFAULT NULL,
  `state_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_district_state`
--

INSERT INTO `m_district_state` (`id`, `state_id`, `district_name`, `state_name`) VALUES
(1, '37', 'Kargil', 'Ladakh'),
(2, '37', 'Leh', 'Ladakh'),
(3, '36', 'Lakshadweep', 'Lakshadweep'),
(4, '35', 'Daman', 'Daman & Diu'),
(5, '35', 'Diu', 'Daman & Diu'),
(6, '34', 'Dadra Nagar Haveli', 'Dadar & Nagar Haveli'),
(7, '33', 'Nicobar', 'Andaman & Nicobar Islands'),
(8, '33', 'North Middle Andaman', 'Andaman & Nicobar Islands'),
(9, '33', 'South Andaman', 'Andaman & Nicobar Islands'),
(10, '32', 'East Sikkim', 'Sikkim'),
(11, '32', 'North Sikkim', 'Sikkim'),
(12, '32', 'South Sikkim', 'Sikkim'),
(13, '32', 'West Sikkim', 'Sikkim'),
(14, '31', 'Dimapur', 'Nagaland'),
(15, '31', 'Kiphire', 'Nagaland'),
(16, '31', 'Kohima', 'Nagaland'),
(17, '31', 'Longleng', 'Nagaland'),
(18, '31', 'Mokokchung', 'Nagaland'),
(19, '31', 'Mon', 'Nagaland'),
(20, '31', 'Noklak', 'Nagaland'),
(21, '31', 'Peren', 'Nagaland'),
(22, '31', 'Phek', 'Nagaland'),
(23, '31', 'Tuensang', 'Nagaland'),
(24, '31', 'Wokha', 'Nagaland'),
(25, '31', 'Zunheboto', 'Nagaland'),
(26, '30', 'North Goa', 'Goa'),
(27, '30', 'South Goa', 'Goa'),
(28, '29', 'Anjaw', 'Arunachal Pradesh'),
(29, '29', 'Central Siang', 'Arunachal Pradesh'),
(30, '29', 'Changlang', 'Arunachal Pradesh'),
(31, '29', 'Dibang Valley', 'Arunachal Pradesh'),
(32, '29', 'East Kameng', 'Arunachal Pradesh'),
(33, '29', 'East Siang', 'Arunachal Pradesh'),
(34, '29', 'Kamle', 'Arunachal Pradesh'),
(35, '29', 'Kra Daadi', 'Arunachal Pradesh'),
(36, '29', 'Kurung Kumey', 'Arunachal Pradesh'),
(37, '29', 'Lepa Rada', 'Arunachal Pradesh'),
(38, '29', 'Lohit', 'Arunachal Pradesh'),
(39, '29', 'Longding', 'Arunachal Pradesh'),
(40, '29', 'Lower Dibang Valley', 'Arunachal Pradesh'),
(41, '29', 'Lower Siang', 'Arunachal Pradesh'),
(42, '29', 'Lower Subansiri', 'Arunachal Pradesh'),
(43, '29', 'Namsai', 'Arunachal Pradesh'),
(44, '29', 'Pakke Kessang', 'Arunachal Pradesh'),
(45, '29', 'Papum Pare', 'Arunachal Pradesh'),
(46, '29', 'Shi Yomi', 'Arunachal Pradesh'),
(47, '29', 'Tawang', 'Arunachal Pradesh'),
(48, '29', 'Tirap', 'Arunachal Pradesh'),
(49, '29', 'Upper Siang', 'Arunachal Pradesh'),
(50, '29', 'Upper Subansiri', 'Arunachal Pradesh'),
(51, '29', 'West Kameng', 'Arunachal Pradesh'),
(52, '29', 'West Siang', 'Arunachal Pradesh'),
(53, '28', 'Bilaspur', 'Himachal Pradesh'),
(54, '28', 'Chamba', 'Himachal Pradesh'),
(55, '28', 'Hamirpur', 'Himachal Pradesh'),
(56, '28', 'Kangra', 'Himachal Pradesh'),
(57, '28', 'Kinnaur', 'Himachal Pradesh'),
(58, '28', 'Kullu', 'Himachal Pradesh'),
(59, '28', 'Lahaul Spiti', 'Himachal Pradesh'),
(60, '28', 'Mandi', 'Himachal Pradesh'),
(61, '28', 'Shimla', 'Himachal Pradesh'),
(62, '28', 'Sirmaur', 'Himachal Pradesh'),
(63, '28', 'Solan', 'Himachal Pradesh'),
(64, '28', 'Una', 'Himachal Pradesh'),
(65, '27', 'Adilabad', 'Telangana'),
(66, '27', 'Bhadradri Kothagudem', 'Telangana'),
(67, '27', 'Hyderabad', 'Telangana'),
(68, '27', 'Jagtial', 'Telangana'),
(69, '27', 'Jangaon', 'Telangana'),
(70, '27', 'Jayashankar', 'Telangana'),
(71, '27', 'Jogulamba', 'Telangana'),
(72, '27', 'Kamareddy', 'Telangana'),
(73, '27', 'Karimnagar', 'Telangana'),
(74, '27', 'Khammam', 'Telangana'),
(75, '27', 'Komaram Bheem', 'Telangana'),
(76, '27', 'Mahabubabad', 'Telangana'),
(77, '27', 'Mahbubnagar', 'Telangana'),
(78, '27', 'Mancherial', 'Telangana'),
(79, '27', 'Medak', 'Telangana'),
(80, '27', 'Medchal', 'Telangana'),
(81, '27', 'Mulugu', 'Telangana'),
(82, '27', 'Nagarkurnool', 'Telangana'),
(83, '27', 'Nalgonda', 'Telangana'),
(84, '27', 'Narayanpet', 'Telangana'),
(85, '27', 'Nirmal', 'Telangana'),
(86, '27', 'Nizamabad', 'Telangana'),
(87, '27', 'Peddapalli', 'Telangana'),
(88, '27', 'Rajanna Sircilla', 'Telangana'),
(89, '27', 'Ranga Reddy', 'Telangana'),
(90, '27', 'Sangareddy', 'Telangana'),
(91, '27', 'Siddipet', 'Telangana'),
(92, '27', 'Suryapet', 'Telangana'),
(93, '27', 'Vikarabad', 'Telangana'),
(94, '27', 'Wanaparthy', 'Telangana'),
(95, '27', 'Warangal Rural', 'Telangana'),
(96, '27', 'Warangal Urban', 'Telangana'),
(97, '27', 'Yadadri Bhuvanagiri', 'Telangana'),
(98, '26', 'Alipurduar', 'West Bengal'),
(99, '26', 'Bankura', 'West Bengal'),
(100, '26', 'Birbhum', 'West Bengal'),
(101, '26', 'Cooch Behar', 'West Bengal'),
(102, '26', 'Dakshin Dinajpur', 'West Bengal'),
(103, '26', 'Darjeeling', 'West Bengal'),
(104, '26', 'Hooghly', 'West Bengal'),
(105, '26', 'Howrah', 'West Bengal'),
(106, '26', 'Jalpaiguri', 'West Bengal'),
(107, '26', 'Jhargram', 'West Bengal'),
(108, '26', 'Kalimpong', 'West Bengal'),
(109, '26', 'Kolkata', 'West Bengal'),
(110, '26', 'Malda', 'West Bengal'),
(111, '26', 'Murshidabad', 'West Bengal'),
(112, '26', 'Nadia', 'West Bengal'),
(113, '26', 'North 24 Parganas', 'West Bengal'),
(114, '26', 'Paschim Bardhaman', 'West Bengal'),
(115, '26', 'Paschim Medinipur', 'West Bengal'),
(116, '26', 'Purba Bardhaman', 'West Bengal'),
(117, '26', 'Purba Medinipur', 'West Bengal'),
(118, '26', 'Purulia', 'West Bengal'),
(119, '26', 'South 24 Parganas', 'West Bengal'),
(120, '26', 'Uttar Dinajpur', 'West Bengal'),
(121, '25', 'Almora', 'Uttarakhand'),
(122, '25', 'Bageshwar', 'Uttarakhand'),
(123, '25', 'Chamoli', 'Uttarakhand'),
(124, '25', 'Champawat', 'Uttarakhand'),
(125, '25', 'Dehradun', 'Uttarakhand'),
(126, '25', 'Haridwar', 'Uttarakhand'),
(127, '25', 'Nainital', 'Uttarakhand'),
(128, '25', 'Pauri', 'Uttarakhand'),
(129, '25', 'Pithoragarh', 'Uttarakhand'),
(130, '25', 'Rudraprayag', 'Uttarakhand'),
(131, '25', 'Tehri', 'Uttarakhand'),
(132, '25', 'Udham Singh Nagar', 'Uttarakhand'),
(133, '25', 'Uttarkashi', 'Uttarakhand'),
(134, '24', 'Agra', 'Uttar Pradesh'),
(135, '24', 'Aligarh', 'Uttar Pradesh'),
(136, '24', 'Ambedkar Nagar', 'Uttar Pradesh'),
(137, '24', 'Amethi', 'Uttar Pradesh'),
(138, '24', 'Amroha', 'Uttar Pradesh'),
(139, '24', 'Auraiya', 'Uttar Pradesh'),
(140, '24', 'Ayodhya', 'Uttar Pradesh'),
(141, '24', 'Azamgarh', 'Uttar Pradesh'),
(142, '24', 'Baghpat', 'Uttar Pradesh'),
(143, '24', 'Bahraich', 'Uttar Pradesh'),
(144, '24', 'Ballia', 'Uttar Pradesh'),
(145, '24', 'Balrampur', 'Uttar Pradesh'),
(146, '24', 'Banda', 'Uttar Pradesh'),
(147, '24', 'Barabanki', 'Uttar Pradesh'),
(148, '24', 'Bareilly', 'Uttar Pradesh'),
(149, '24', 'Basti', 'Uttar Pradesh'),
(150, '24', 'Bhadohi', 'Uttar Pradesh'),
(151, '24', 'Bijnor', 'Uttar Pradesh'),
(152, '24', 'Budaun', 'Uttar Pradesh'),
(153, '24', 'Bulandshahr', 'Uttar Pradesh'),
(154, '24', 'Chandauli', 'Uttar Pradesh'),
(155, '24', 'Chitrakoot', 'Uttar Pradesh'),
(156, '24', 'Deoria', 'Uttar Pradesh'),
(157, '24', 'Etah', 'Uttar Pradesh'),
(158, '24', 'Etawah', 'Uttar Pradesh'),
(159, '24', 'Farrukhabad', 'Uttar Pradesh'),
(160, '24', 'Fatehpur', 'Uttar Pradesh'),
(161, '24', 'Firozabad', 'Uttar Pradesh'),
(162, '24', 'Gautam Buddha Nagar', 'Uttar Pradesh'),
(163, '24', 'Ghaziabad', 'Uttar Pradesh'),
(164, '24', 'Ghazipur', 'Uttar Pradesh'),
(165, '24', 'Gonda', 'Uttar Pradesh'),
(166, '24', 'Gorakhpur', 'Uttar Pradesh'),
(167, '24', 'Hamirpur', 'Uttar Pradesh'),
(168, '24', 'Hapur', 'Uttar Pradesh'),
(169, '24', 'Hardoi', 'Uttar Pradesh'),
(170, '24', 'Hathras', 'Uttar Pradesh'),
(171, '24', 'Jalaun', 'Uttar Pradesh'),
(172, '24', 'Jaunpur', 'Uttar Pradesh'),
(173, '24', 'Jhansi', 'Uttar Pradesh'),
(174, '24', 'Kannauj', 'Uttar Pradesh'),
(175, '24', 'Kanpur Dehat', 'Uttar Pradesh'),
(176, '24', 'Kanpur Nagar', 'Uttar Pradesh'),
(177, '24', 'Kasganj', 'Uttar Pradesh'),
(178, '24', 'Kaushambi', 'Uttar Pradesh'),
(179, '24', 'Kheri', 'Uttar Pradesh'),
(180, '24', 'Kushinagar', 'Uttar Pradesh'),
(181, '24', 'Lalitpur', 'Uttar Pradesh'),
(182, '24', 'Lucknow', 'Uttar Pradesh'),
(183, '24', 'Maharajganj', 'Uttar Pradesh'),
(184, '24', 'Mahoba', 'Uttar Pradesh'),
(185, '24', 'Mainpuri', 'Uttar Pradesh'),
(186, '24', 'Mathura', 'Uttar Pradesh'),
(187, '24', 'Mau', 'Uttar Pradesh'),
(188, '24', 'Meerut', 'Uttar Pradesh'),
(189, '24', 'Mirzapur', 'Uttar Pradesh'),
(190, '24', 'Moradabad', 'Uttar Pradesh'),
(191, '24', 'Muzaffarnagar', 'Uttar Pradesh'),
(192, '24', 'Pilibhit', 'Uttar Pradesh'),
(193, '24', 'Pratapgarh', 'Uttar Pradesh'),
(194, '24', 'Prayagraj', 'Uttar Pradesh'),
(195, '24', 'Raebareli', 'Uttar Pradesh'),
(196, '24', 'Rampur', 'Uttar Pradesh'),
(197, '24', 'Saharanpur', 'Uttar Pradesh'),
(198, '24', 'Sambhal', 'Uttar Pradesh'),
(199, '24', 'Sant Kabir Nagar', 'Uttar Pradesh'),
(200, '24', 'Shahjahanpur', 'Uttar Pradesh'),
(201, '24', 'Shamli', 'Uttar Pradesh'),
(202, '24', 'Shravasti', 'Uttar Pradesh'),
(203, '24', 'Siddharthnagar', 'Uttar Pradesh'),
(204, '24', 'Sitapur', 'Uttar Pradesh'),
(205, '24', 'Sonbhadra', 'Uttar Pradesh'),
(206, '24', 'Sultanpur', 'Uttar Pradesh'),
(207, '24', 'Unnao', 'Uttar Pradesh'),
(208, '24', 'Varanasi', 'Uttar Pradesh'),
(209, '23', 'Dhalai', 'Tripura'),
(210, '23', 'Gomati', 'Tripura'),
(211, '23', 'Khowai', 'Tripura'),
(212, '23', 'North Tripura', 'Tripura'),
(213, '23', 'Sepahijala', 'Tripura'),
(214, '23', 'South Tripura', 'Tripura'),
(215, '23', 'Unakoti', 'Tripura'),
(216, '23', 'West Tripura', 'Tripura'),
(217, '22', 'Ariyalur', 'Tamil Nadu'),
(218, '22', 'Chengalpattu', 'Tamil Nadu'),
(219, '22', 'Chennai', 'Tamil Nadu'),
(220, '22', 'Coimbatore', 'Tamil Nadu'),
(221, '22', 'Cuddalore', 'Tamil Nadu'),
(222, '22', 'Dharmapuri', 'Tamil Nadu'),
(223, '22', 'Dindigul', 'Tamil Nadu'),
(224, '22', 'Erode', 'Tamil Nadu'),
(225, '22', 'Kallakurichi', 'Tamil Nadu'),
(226, '22', 'Kanchipuram', 'Tamil Nadu'),
(227, '22', 'Kanyakumari', 'Tamil Nadu'),
(228, '22', 'Karur', 'Tamil Nadu'),
(229, '22', 'Krishnagiri', 'Tamil Nadu'),
(230, '22', 'Madurai', 'Tamil Nadu'),
(231, '22', 'Mayiladuthurai', 'Tamil Nadu'),
(232, '22', 'Nagapattinam', 'Tamil Nadu'),
(233, '22', 'Namakkal', 'Tamil Nadu'),
(234, '22', 'Nilgiris', 'Tamil Nadu'),
(235, '22', 'Perambalur', 'Tamil Nadu'),
(236, '22', 'Pudukkottai', 'Tamil Nadu'),
(237, '22', 'Ramanathapuram', 'Tamil Nadu'),
(238, '22', 'Ranipet', 'Tamil Nadu'),
(239, '22', 'Salem', 'Tamil Nadu'),
(240, '22', 'Sivaganga', 'Tamil Nadu'),
(241, '22', 'Tenkasi', 'Tamil Nadu'),
(242, '22', 'Thanjavur', 'Tamil Nadu'),
(243, '22', 'Theni', 'Tamil Nadu'),
(244, '22', 'Thoothukudi', 'Tamil Nadu'),
(245, '22', 'Tiruchirappalli', 'Tamil Nadu'),
(246, '22', 'Tirunelveli', 'Tamil Nadu'),
(247, '22', 'Tirupattur', 'Tamil Nadu'),
(248, '22', 'Tiruppur', 'Tamil Nadu'),
(249, '22', 'Tiruvallur', 'Tamil Nadu'),
(250, '22', 'Tiruvannamalai', 'Tamil Nadu'),
(251, '22', 'Tiruvarur', 'Tamil Nadu'),
(252, '22', 'Vellore', 'Tamil Nadu'),
(253, '22', 'Viluppuram', 'Tamil Nadu'),
(254, '22', 'Virudhunagar', 'Tamil Nadu'),
(255, '21', 'Ajmer', 'Rajasthan'),
(256, '21', 'Alwar', 'Rajasthan'),
(257, '21', 'Banswara', 'Rajasthan'),
(258, '21', 'Baran', 'Rajasthan'),
(259, '21', 'Barmer', 'Rajasthan'),
(260, '21', 'Bharatpur', 'Rajasthan'),
(261, '21', 'Bhilwara', 'Rajasthan'),
(262, '21', 'Bikaner', 'Rajasthan'),
(263, '21', 'Bundi', 'Rajasthan'),
(264, '21', 'Chittorgarh', 'Rajasthan'),
(265, '21', 'Churu', 'Rajasthan'),
(266, '21', 'Dausa', 'Rajasthan'),
(267, '21', 'Dholpur', 'Rajasthan'),
(268, '21', 'Dungarpur', 'Rajasthan'),
(269, '21', 'Hanumangarh', 'Rajasthan'),
(270, '21', 'Jaipur', 'Rajasthan'),
(271, '21', 'Jaisalmer', 'Rajasthan'),
(272, '21', 'Jalore', 'Rajasthan'),
(273, '21', 'Jhalawar', 'Rajasthan'),
(274, '21', 'Jhunjhunu', 'Rajasthan'),
(275, '21', 'Jodhpur', 'Rajasthan'),
(276, '21', 'Karauli', 'Rajasthan'),
(277, '21', 'Kota', 'Rajasthan'),
(278, '21', 'Nagaur', 'Rajasthan'),
(279, '21', 'Pali', 'Rajasthan'),
(280, '21', 'Pratapgarh', 'Rajasthan'),
(281, '21', 'Rajsamand', 'Rajasthan'),
(282, '21', 'Sawai Madhopur', 'Rajasthan'),
(283, '21', 'Sikar', 'Rajasthan'),
(284, '21', 'Sirohi', 'Rajasthan'),
(285, '21', 'Sri Ganganagar', 'Rajasthan'),
(286, '21', 'Tonk', 'Rajasthan'),
(287, '21', 'Udaipur', 'Rajasthan'),
(288, '20', 'Amritsar', 'Punjab'),
(289, '20', 'Barnala', 'Punjab'),
(290, '20', 'Bathinda', 'Punjab'),
(291, '20', 'Faridkot', 'Punjab'),
(292, '20', 'Fatehgarh Sahib', 'Punjab'),
(293, '20', 'Fazilka', 'Punjab'),
(294, '20', 'Firozpur', 'Punjab'),
(295, '20', 'Gurdaspur', 'Punjab'),
(296, '20', 'Hoshiarpur', 'Punjab'),
(297, '20', 'Jalandhar', 'Punjab'),
(298, '20', 'Kapurthala', 'Punjab'),
(299, '20', 'Ludhiana', 'Punjab'),
(300, '20', 'Mansa', 'Punjab'),
(301, '20', 'Moga', 'Punjab'),
(302, '20', 'Mohali', 'Punjab'),
(303, '20', 'Muktsar', 'Punjab'),
(304, '20', 'Pathankot', 'Punjab'),
(305, '20', 'Patiala', 'Punjab'),
(306, '20', 'Rupnagar', 'Punjab'),
(307, '20', 'Sangrur', 'Punjab'),
(308, '20', 'Shaheed Bhagat Singh Nagar', 'Punjab'),
(309, '20', 'Tarn Taran', 'Punjab'),
(310, '19', 'Karaikal', 'Pondicherry'),
(311, '19', 'Mahe', 'Pondicherry'),
(312, '19', 'Puducherry', 'Pondicherry'),
(313, '19', 'Yanam', 'Pondicherry'),
(314, '18', 'Angul', 'Orissa'),
(315, '18', 'Balangir', 'Orissa'),
(316, '18', 'Balasore', 'Orissa'),
(317, '18', 'Bargarh', 'Orissa'),
(318, '18', 'Bhadrak', 'Orissa'),
(319, '18', 'Boudh', 'Orissa'),
(320, '18', 'Cuttack', 'Orissa'),
(321, '18', 'Debagarh', 'Orissa'),
(322, '18', 'Dhenkanal', 'Orissa'),
(323, '18', 'Gajapati', 'Orissa'),
(324, '18', 'Ganjam', 'Orissa'),
(325, '18', 'Jagatsinghpur', 'Orissa'),
(326, '18', 'Jajpur', 'Orissa'),
(327, '18', 'Jharsuguda', 'Orissa'),
(328, '18', 'Kalahandi', 'Orissa'),
(329, '18', 'Kandhamal', 'Orissa'),
(330, '18', 'Kendrapara', 'Orissa'),
(331, '18', 'Kendujhar', 'Orissa'),
(332, '18', 'Khordha', 'Orissa'),
(333, '18', 'Koraput', 'Orissa'),
(334, '18', 'Malkangiri', 'Orissa'),
(335, '18', 'Mayurbhanj', 'Orissa'),
(336, '18', 'Nabarangpur', 'Orissa'),
(337, '18', 'Nayagarh', 'Orissa'),
(338, '18', 'Nuapada', 'Orissa'),
(339, '18', 'Puri', 'Orissa'),
(340, '18', 'Rayagada', 'Orissa'),
(341, '18', 'Sambalpur', 'Orissa'),
(342, '18', 'Subarnapur', 'Orissa'),
(343, '18', 'Sundergarh', 'Orissa'),
(344, '17', 'Aizawl', 'Mizoram'),
(345, '17', 'Champhai', 'Mizoram'),
(346, '17', 'Hnahthial', 'Mizoram'),
(347, '17', 'Kolasib', 'Mizoram'),
(348, '17', 'Khawzawl', 'Mizoram'),
(349, '17', 'Lawngtlai', 'Mizoram'),
(350, '17', 'Lunglei', 'Mizoram'),
(351, '17', 'Mamit', 'Mizoram'),
(352, '17', 'Saiha', 'Mizoram'),
(353, '17', 'Serchhip', 'Mizoram'),
(354, '17', 'Saitual', 'Mizoram'),
(355, '16', 'East Garo Hills', 'Meghalaya'),
(356, '16', 'East Jaintia Hills', 'Meghalaya'),
(357, '16', 'East Khasi Hills', 'Meghalaya'),
(358, '16', 'North Garo Hills', 'Meghalaya'),
(359, '16', 'Ri Bhoi', 'Meghalaya'),
(360, '16', 'South Garo Hills', 'Meghalaya'),
(361, '16', 'South West Garo Hills', 'Meghalaya'),
(362, '16', 'South West Khasi Hills', 'Meghalaya'),
(363, '16', 'West Garo Hills', 'Meghalaya'),
(364, '16', 'West Jaintia Hills', 'Meghalaya'),
(365, '16', 'West Khasi Hills', 'Meghalaya'),
(366, '15', 'Bishnupur', 'Manipur'),
(367, '15', 'Chandel', 'Manipur'),
(368, '15', 'Churachandpur', 'Manipur'),
(369, '15', 'Imphal East', 'Manipur'),
(370, '15', 'Imphal West', 'Manipur'),
(371, '15', 'Jiribam', 'Manipur'),
(372, '15', 'Kakching', 'Manipur'),
(373, '15', 'Kamjong', 'Manipur'),
(374, '15', 'Kangpokpi', 'Manipur'),
(375, '15', 'Noney', 'Manipur'),
(376, '15', 'Pherzawl', 'Manipur'),
(377, '15', 'Senapati', 'Manipur'),
(378, '15', 'Tamenglong', 'Manipur'),
(379, '15', 'Tengnoupal', 'Manipur'),
(380, '15', 'Thoubal', 'Manipur'),
(381, '15', 'Ukhrul', 'Manipur'),
(382, '14', 'Ahmednagar', 'Maharashtra'),
(383, '14', 'Akola', 'Maharashtra'),
(384, '14', 'Amravati', 'Maharashtra'),
(385, '14', 'Aurangabad', 'Maharashtra'),
(386, '14', 'Beed', 'Maharashtra'),
(387, '14', 'Bhandara', 'Maharashtra'),
(388, '14', 'Buldhana', 'Maharashtra'),
(389, '14', 'Chandrapur', 'Maharashtra'),
(390, '14', 'Dhule', 'Maharashtra'),
(391, '14', 'Gadchiroli', 'Maharashtra'),
(392, '14', 'Gondia', 'Maharashtra'),
(393, '14', 'Hingoli', 'Maharashtra'),
(394, '14', 'Jalgaon', 'Maharashtra'),
(395, '14', 'Jalna', 'Maharashtra'),
(396, '14', 'Kolhapur', 'Maharashtra'),
(397, '14', 'Latur', 'Maharashtra'),
(398, '14', 'Mumbai City', 'Maharashtra'),
(399, '14', 'Mumbai Suburban', 'Maharashtra'),
(400, '14', 'Nagpur', 'Maharashtra'),
(401, '14', 'Nanded', 'Maharashtra'),
(402, '14', 'Nandurbar', 'Maharashtra'),
(403, '14', 'Nashik', 'Maharashtra'),
(404, '14', 'Osmanabad', 'Maharashtra'),
(405, '14', 'Palghar', 'Maharashtra'),
(406, '14', 'Parbhani', 'Maharashtra'),
(407, '14', 'Pune', 'Maharashtra'),
(408, '14', 'Raigad', 'Maharashtra'),
(409, '14', 'Ratnagiri', 'Maharashtra'),
(410, '14', 'Sangli', 'Maharashtra'),
(411, '14', 'Satara', 'Maharashtra'),
(412, '14', 'Sindhudurg', 'Maharashtra'),
(413, '14', 'Solapur', 'Maharashtra'),
(414, '14', 'Thane', 'Maharashtra'),
(415, '14', 'Wardha', 'Maharashtra'),
(416, '14', 'Washim', 'Maharashtra'),
(417, '14', 'Yavatmal', 'Maharashtra'),
(418, '13', 'Agar Malwa', 'Madhya Pradesh'),
(419, '13', 'Alirajpur', 'Madhya Pradesh'),
(420, '13', 'Anuppur', 'Madhya Pradesh'),
(421, '13', 'Ashoknagar', 'Madhya Pradesh'),
(422, '13', 'Balaghat', 'Madhya Pradesh'),
(423, '13', 'Barwani', 'Madhya Pradesh'),
(424, '13', 'Betul', 'Madhya Pradesh'),
(425, '13', 'Bhind', 'Madhya Pradesh'),
(426, '13', 'Bhopal', 'Madhya Pradesh'),
(427, '13', 'Burhanpur', 'Madhya Pradesh'),
(428, '13', 'Chachaura', 'Madhya Pradesh'),
(429, '13', 'Chhatarpur', 'Madhya Pradesh'),
(430, '13', 'Chhindwara', 'Madhya Pradesh'),
(431, '13', 'Damoh', 'Madhya Pradesh'),
(432, '13', 'Datia', 'Madhya Pradesh'),
(433, '13', 'Dewas', 'Madhya Pradesh'),
(434, '13', 'Dhar', 'Madhya Pradesh'),
(435, '13', 'Dindori', 'Madhya Pradesh'),
(436, '13', 'Guna', 'Madhya Pradesh'),
(437, '13', 'Gwalior', 'Madhya Pradesh'),
(438, '13', 'Harda', 'Madhya Pradesh'),
(439, '13', 'Hoshangabad', 'Madhya Pradesh'),
(440, '13', 'Indore', 'Madhya Pradesh'),
(441, '13', 'Jabalpur', 'Madhya Pradesh'),
(442, '13', 'Jhabua', 'Madhya Pradesh'),
(443, '13', 'Katni', 'Madhya Pradesh'),
(444, '13', 'Khandwa', 'Madhya Pradesh'),
(445, '13', 'Khargone', 'Madhya Pradesh'),
(446, '13', 'Maihar', 'Madhya Pradesh'),
(447, '13', 'Mandla', 'Madhya Pradesh'),
(448, '13', 'Mandsaur', 'Madhya Pradesh'),
(449, '13', 'Morena', 'Madhya Pradesh'),
(450, '13', 'Nagda', 'Madhya Pradesh'),
(451, '13', 'Narsinghpur', 'Madhya Pradesh'),
(452, '13', 'Neemuch', 'Madhya Pradesh'),
(453, '13', 'Niwari', 'Madhya Pradesh'),
(454, '13', 'Panna', 'Madhya Pradesh'),
(455, '13', 'Raisen', 'Madhya Pradesh'),
(456, '13', 'Rajgarh', 'Madhya Pradesh'),
(457, '13', 'Ratlam', 'Madhya Pradesh'),
(458, '13', 'Rewa', 'Madhya Pradesh'),
(459, '13', 'Sagar', 'Madhya Pradesh'),
(460, '13', 'Satna', 'Madhya Pradesh'),
(461, '13', 'Sehore', 'Madhya Pradesh'),
(462, '13', 'Seoni', 'Madhya Pradesh'),
(463, '13', 'Shahdol', 'Madhya Pradesh'),
(464, '13', 'Shajapur', 'Madhya Pradesh'),
(465, '13', 'Sheopur', 'Madhya Pradesh'),
(466, '13', 'Shivpuri', 'Madhya Pradesh'),
(467, '13', 'Sidhi', 'Madhya Pradesh'),
(468, '13', 'Singrauli', 'Madhya Pradesh'),
(469, '13', 'Tikamgarh', 'Madhya Pradesh'),
(470, '13', 'Ujjain', 'Madhya Pradesh'),
(471, '13', 'Umaria', 'Madhya Pradesh'),
(472, '13', 'Vidisha', 'Madhya Pradesh'),
(473, '12', 'Alappuzha', 'Kerala'),
(474, '12', 'Ernakulam', 'Kerala'),
(475, '12', 'Idukki', 'Kerala'),
(476, '12', 'Kannur', 'Kerala'),
(477, '12', 'Kasaragod', 'Kerala'),
(478, '12', 'Kollam', 'Kerala'),
(479, '12', 'Kottayam', 'Kerala'),
(480, '12', 'Kozhikode', 'Kerala'),
(481, '12', 'Malappuram', 'Kerala'),
(482, '12', 'Palakkad', 'Kerala'),
(483, '12', 'Pathanamthitta', 'Kerala'),
(484, '12', 'Thiruvananthapuram', 'Kerala'),
(485, '12', 'Thrissur', 'Kerala'),
(486, '12', 'Wayanad', 'Kerala'),
(487, '11', 'Bagalkot', 'Karnataka'),
(488, '11', 'Bangalore Rural', 'Karnataka'),
(489, '11', 'Bangalore Urban', 'Karnataka'),
(490, '11', 'Belgaum', 'Karnataka'),
(491, '11', 'Bellary', 'Karnataka'),
(492, '11', 'Bidar', 'Karnataka'),
(493, '11', 'Chamarajanagar', 'Karnataka'),
(494, '11', 'Chikkaballapur', 'Karnataka'),
(495, '11', 'Chikkamagaluru', 'Karnataka'),
(496, '11', 'Chitradurga', 'Karnataka'),
(497, '11', 'Dakshina Kannada', 'Karnataka'),
(498, '11', 'Davanagere', 'Karnataka'),
(499, '11', 'Dharwad', 'Karnataka'),
(500, '11', 'Gadag', 'Karnataka'),
(501, '11', 'Gulbarga', 'Karnataka'),
(502, '11', 'Hassan', 'Karnataka'),
(503, '11', 'Haveri', 'Karnataka'),
(504, '11', 'Kodagu', 'Karnataka'),
(505, '11', 'Kolar', 'Karnataka'),
(506, '11', 'Koppal', 'Karnataka'),
(507, '11', 'Mandya', 'Karnataka'),
(508, '11', 'Mysore', 'Karnataka'),
(509, '11', 'Raichur', 'Karnataka'),
(510, '11', 'Ramanagara', 'Karnataka'),
(511, '11', 'Shimoga', 'Karnataka'),
(512, '11', 'Tumkur', 'Karnataka'),
(513, '11', 'Udupi', 'Karnataka'),
(514, '11', 'Uttara Kannada', 'Karnataka'),
(515, '11', 'Vijayanagara', 'Karnataka'),
(516, '11', 'Vijayapura', 'Karnataka'),
(517, '11', 'Yadgir', 'Karnataka'),
(518, '10', 'Bokaro', 'Jharkhand'),
(519, '10', 'Chatra', 'Jharkhand'),
(520, '10', 'Deoghar', 'Jharkhand'),
(521, '10', 'Dhanbad', 'Jharkhand'),
(522, '10', 'Dumka', 'Jharkhand'),
(523, '10', 'East Singhbhum', 'Jharkhand'),
(524, '10', 'Garhwa', 'Jharkhand'),
(525, '10', 'Giridih', 'Jharkhand'),
(526, '10', 'Godda', 'Jharkhand'),
(527, '10', 'Gumla', 'Jharkhand'),
(528, '10', 'Hazaribagh', 'Jharkhand'),
(529, '10', 'Jamtara', 'Jharkhand'),
(530, '10', 'Khunti', 'Jharkhand'),
(531, '10', 'Koderma', 'Jharkhand'),
(532, '10', 'Latehar', 'Jharkhand'),
(533, '10', 'Lohardaga', 'Jharkhand'),
(534, '10', 'Pakur', 'Jharkhand'),
(535, '10', 'Palamu', 'Jharkhand'),
(536, '10', 'Ramgarh', 'Jharkhand'),
(537, '10', 'Ranchi', 'Jharkhand'),
(538, '10', 'Sahebganj', 'Jharkhand'),
(539, '10', 'Seraikela Kharsawan', 'Jharkhand'),
(540, '10', 'Simdega', 'Jharkhand'),
(541, '10', 'West Singhbhum', 'Jharkhand'),
(542, '9', 'Anantnag', 'Jammu and Kashmir'),
(543, '9', 'Bandipora', 'Jammu and Kashmir'),
(544, '9', 'Baramulla', 'Jammu and Kashmir'),
(545, '9', 'Budgam', 'Jammu and Kashmir'),
(546, '9', 'Doda', 'Jammu and Kashmir'),
(547, '9', 'Ganderbal', 'Jammu and Kashmir'),
(548, '9', 'Jammu', 'Jammu and Kashmir'),
(549, '9', 'Kathua', 'Jammu and Kashmir'),
(550, '9', 'Kishtwar', 'Jammu and Kashmir'),
(551, '9', 'Kulgam', 'Jammu and Kashmir'),
(552, '9', 'Kupwara', 'Jammu and Kashmir'),
(553, '9', 'Poonch', 'Jammu and Kashmir'),
(554, '9', 'Pulwama', 'Jammu and Kashmir'),
(555, '9', 'Rajouri', 'Jammu and Kashmir'),
(556, '9', 'Ramban', 'Jammu and Kashmir'),
(557, '9', 'Reasi', 'Jammu and Kashmir'),
(558, '9', 'Samba', 'Jammu and Kashmir'),
(559, '9', 'Shopian', 'Jammu and Kashmir'),
(560, '9', 'Srinagar', 'Jammu and Kashmir'),
(561, '9', 'Udhampur', 'Jammu and Kashmir'),
(562, '8', 'Ambala', 'Haryana'),
(563, '8', 'Bhiwani', 'Haryana'),
(564, '8', 'Charkhi Dadri', 'Haryana'),
(565, '8', 'Faridabad', 'Haryana'),
(566, '8', 'Fatehabad', 'Haryana'),
(567, '8', 'Gurugram', 'Haryana'),
(568, '8', 'Hisar', 'Haryana'),
(569, '8', 'Jhajjar', 'Haryana'),
(570, '8', 'Jind', 'Haryana'),
(571, '8', 'Kaithal', 'Haryana'),
(572, '8', 'Karnal', 'Haryana'),
(573, '8', 'Kurukshetra', 'Haryana'),
(574, '8', 'Mahendragarh', 'Haryana'),
(575, '8', 'Mewat', 'Haryana'),
(576, '8', 'Palwal', 'Haryana'),
(577, '8', 'Panchkula', 'Haryana'),
(578, '8', 'Panipat', 'Haryana'),
(579, '8', 'Rewari', 'Haryana'),
(580, '8', 'Rohtak', 'Haryana'),
(581, '8', 'Sirsa', 'Haryana'),
(582, '8', 'Sonipat', 'Haryana'),
(583, '8', 'Yamunanagar', 'Haryana'),
(584, '7', 'Ahmedabad', 'Gujarat'),
(585, '7', 'Amreli', 'Gujarat'),
(586, '7', 'Anand', 'Gujarat'),
(587, '7', 'Aravalli', 'Gujarat'),
(588, '7', 'Banaskantha', 'Gujarat'),
(589, '7', 'Bharuch', 'Gujarat'),
(590, '7', 'Bhavnagar', 'Gujarat'),
(591, '7', 'Botad', 'Gujarat'),
(592, '7', 'Chhota Udaipur', 'Gujarat'),
(593, '7', 'Dahod', 'Gujarat'),
(594, '7', 'Dang', 'Gujarat'),
(595, '7', 'Devbhoomi Dwarka', 'Gujarat'),
(596, '7', 'Gandhinagar', 'Gujarat'),
(597, '7', 'Gir Somnath', 'Gujarat'),
(598, '7', 'Jamnagar', 'Gujarat'),
(599, '7', 'Junagadh', 'Gujarat'),
(600, '7', 'Kheda', 'Gujarat'),
(601, '7', 'Kutch', 'Gujarat'),
(602, '7', 'Mahisagar', 'Gujarat'),
(603, '7', 'Mehsana', 'Gujarat'),
(604, '7', 'Morbi', 'Gujarat'),
(605, '7', 'Narmada', 'Gujarat'),
(606, '7', 'Navsari', 'Gujarat'),
(607, '7', 'Panchmahal', 'Gujarat'),
(608, '7', 'Patan', 'Gujarat'),
(609, '7', 'Porbandar', 'Gujarat'),
(610, '7', 'Rajkot', 'Gujarat'),
(611, '7', 'Sabarkantha', 'Gujarat'),
(612, '7', 'Surat', 'Gujarat'),
(613, '7', 'Surendranagar', 'Gujarat'),
(614, '7', 'Tapi', 'Gujarat'),
(615, '7', 'Vadodara', 'Gujarat'),
(616, '7', 'Valsad', 'Gujarat'),
(617, '6', 'Central Delhi', 'Delhi'),
(618, '6', 'East Delhi', 'Delhi'),
(619, '6', 'New Delhi', 'Delhi'),
(620, '6', 'North Delhi', 'Delhi'),
(621, '6', 'North East Delhi', 'Delhi'),
(622, '6', 'North West Delhi', 'Delhi'),
(623, '6', 'Shahdara', 'Delhi'),
(624, '6', 'South Delhi', 'Delhi'),
(625, '6', 'South East Delhi', 'Delhi'),
(626, '6', 'South West Delhi', 'Delhi'),
(627, '6', 'West Delhi', 'Delhi'),
(628, '5', 'Balod', 'Chhatisgarh'),
(629, '5', 'Baloda Bazar', 'Chhatisgarh'),
(630, '5', 'Balrampur', 'Chhatisgarh'),
(631, '5', 'Bastar', 'Chhatisgarh'),
(632, '5', 'Bemetara', 'Chhatisgarh'),
(633, '5', 'Bijapur', 'Chhatisgarh'),
(634, '5', 'Bilaspur', 'Chhatisgarh'),
(635, '5', 'Dantewada', 'Chhatisgarh'),
(636, '5', 'Dhamtari', 'Chhatisgarh'),
(637, '5', 'Durg', 'Chhatisgarh'),
(638, '5', 'Gariaband', 'Chhatisgarh'),
(639, '5', 'Gaurela Pendra Marwahi', 'Chhatisgarh'),
(640, '5', 'Janjgir Champa', 'Chhatisgarh'),
(641, '5', 'Jashpur', 'Chhatisgarh'),
(642, '5', 'Kabirdham', 'Chhatisgarh'),
(643, '5', 'Kanker', 'Chhatisgarh'),
(644, '5', 'Kondagaon', 'Chhatisgarh'),
(645, '5', 'Korba', 'Chhatisgarh'),
(646, '5', 'Koriya', 'Chhatisgarh'),
(647, '5', 'Mahasamund', 'Chhatisgarh'),
(648, '5', 'Mungeli', 'Chhatisgarh'),
(649, '5', 'Narayanpur', 'Chhatisgarh'),
(650, '5', 'Raigarh', 'Chhatisgarh'),
(651, '5', 'Raipur', 'Chhatisgarh'),
(652, '5', 'Rajnandgaon', 'Chhatisgarh'),
(653, '5', 'Sukma', 'Chhatisgarh'),
(654, '5', 'Surajpur', 'Chhatisgarh'),
(655, '5', 'Surguja', 'Chhatisgarh'),
(656, '4', 'Chandigarh', 'Chandigarh'),
(657, '3', 'Araria', 'Bihar'),
(658, '3', 'Arwal', 'Bihar'),
(659, '3', 'Aurangabad', 'Bihar'),
(660, '3', 'Banka', 'Bihar'),
(661, '3', 'Begusarai', 'Bihar'),
(662, '3', 'Bhagalpur', 'Bihar'),
(663, '3', 'Bhojpur', 'Bihar'),
(664, '3', 'Buxar', 'Bihar'),
(665, '3', 'Darbhanga', 'Bihar'),
(666, '3', 'East Champaran', 'Bihar'),
(667, '3', 'Gaya', 'Bihar'),
(668, '3', 'Gopalganj', 'Bihar'),
(669, '3', 'Jamui', 'Bihar'),
(670, '3', 'Jehanabad', 'Bihar'),
(671, '3', 'Kaimur', 'Bihar'),
(672, '3', 'Katihar', 'Bihar'),
(673, '3', 'Khagaria', 'Bihar'),
(674, '3', 'Kishanganj', 'Bihar'),
(675, '3', 'Lakhisarai', 'Bihar'),
(676, '3', 'Madhepura', 'Bihar'),
(677, '3', 'Madhubani', 'Bihar'),
(678, '3', 'Munger', 'Bihar'),
(679, '3', 'Muzaffarpur', 'Bihar'),
(680, '3', 'Nalanda', 'Bihar'),
(681, '3', 'Nawada', 'Bihar'),
(682, '3', 'Patna', 'Bihar'),
(683, '3', 'Purnia', 'Bihar'),
(684, '3', 'Rohtas', 'Bihar'),
(685, '3', 'Saharsa', 'Bihar'),
(686, '3', 'Samastipur', 'Bihar'),
(687, '3', 'Saran', 'Bihar'),
(688, '3', 'Sheikhpura', 'Bihar'),
(689, '3', 'Sheohar', 'Bihar'),
(690, '3', 'Sitamarhi', 'Bihar'),
(691, '3', 'Siwan', 'Bihar'),
(692, '3', 'Supaul', 'Bihar'),
(693, '3', 'Vaishali', 'Bihar'),
(694, '3', 'West Champaran', 'Bihar'),
(695, '2', 'Bajali', 'Assam'),
(696, '2', 'Baksa', 'Assam'),
(697, '2', 'Barpeta', 'Assam'),
(698, '2', 'Biswanath', 'Assam'),
(699, '2', 'Bongaigaon', 'Assam'),
(700, '2', 'Cachar', 'Assam'),
(701, '2', 'Charaideo', 'Assam'),
(702, '2', 'Chirang', 'Assam'),
(703, '2', 'Darrang', 'Assam'),
(704, '2', 'Dhemaji', 'Assam'),
(705, '2', 'Dhubri', 'Assam'),
(706, '2', 'Dibrugarh', 'Assam'),
(707, '2', 'Dima Hasao', 'Assam'),
(708, '2', 'Goalpara', 'Assam'),
(709, '2', 'Golaghat', 'Assam'),
(710, '2', 'Hailakandi', 'Assam'),
(711, '2', 'Hojai', 'Assam'),
(712, '2', 'Jorhat', 'Assam'),
(713, '2', 'Kamrup', 'Assam'),
(714, '2', 'Kamrup Metropolitan', 'Assam'),
(715, '2', 'Karbi Anglong', 'Assam'),
(716, '2', 'Karimganj', 'Assam'),
(717, '2', 'Kokrajhar', 'Assam'),
(718, '2', 'Lakhimpur', 'Assam'),
(719, '2', 'Majuli', 'Assam'),
(720, '2', 'Morigaon', 'Assam'),
(721, '2', 'Nagaon', 'Assam'),
(722, '2', 'Nalbari', 'Assam'),
(723, '2', 'Sivasagar', 'Assam'),
(724, '2', 'Sonitpur', 'Assam'),
(725, '2', 'South Salmara-Mankachar', 'Assam'),
(726, '2', 'Tinsukia', 'Assam'),
(727, '2', 'Udalguri', 'Assam'),
(728, '2', 'West Karbi Anglong', 'Assam'),
(729, '1', 'Anantapur', 'Andhra Pradesh'),
(730, '1', 'Chittoor', 'Andhra Pradesh'),
(731, '1', 'East Godavari', 'Andhra Pradesh'),
(732, '1', 'Guntur', 'Andhra Pradesh'),
(733, '1', 'Kadapa', 'Andhra Pradesh'),
(734, '1', 'Krishna', 'Andhra Pradesh'),
(735, '1', 'Kurnool', 'Andhra Pradesh'),
(736, '1', 'Nellore', 'Andhra Pradesh'),
(737, '1', 'Prakasam', 'Andhra Pradesh'),
(738, '1', 'Srikakulam', 'Andhra Pradesh'),
(739, '1', 'Visakhapatnam', 'Andhra Pradesh'),
(740, '1', 'Vizianagaram', 'Andhra Pradesh'),
(741, '1', 'West Godavari', 'Andhra Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `m_state_country`
--

CREATE TABLE `m_state_country` (
  `id` int(2) NOT NULL,
  `country_id` varchar(10) DEFAULT NULL,
  `state_name` varchar(25) DEFAULT NULL,
  `country_name` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_state_country`
--

INSERT INTO `m_state_country` (`id`, `country_id`, `state_name`, `country_name`) VALUES
(1, '2', 'Andhra Pradesh', 'India'),
(2, '2', 'Assam', 'India'),
(3, '2', 'Bihar', 'India'),
(4, '2', 'Chandigarh', 'India'),
(5, '2', 'Chhatisgarh', 'India'),
(6, '2', 'Delhi', 'India'),
(7, '2', 'Gujarat', 'India'),
(8, '2', 'Haryana', 'India'),
(9, '2', 'Jammu and Kashmir', 'India'),
(10, '2', 'Jharkhand', 'India'),
(11, '2', 'Karnataka', 'India'),
(12, '2', 'Kerala', 'India'),
(13, '2', 'Madhya Pradesh', 'India'),
(14, '2', 'Maharashtra', 'India'),
(15, '2', 'Manipur', 'India'),
(16, '2', 'Meghalaya', 'India'),
(17, '2', 'Mizoram', 'India'),
(18, '2', 'Orissa', 'India'),
(19, '2', 'Pondicherry', 'India'),
(20, '2', 'Punjab', 'India'),
(21, '2', 'Rajasthan', 'India'),
(22, '2', 'Tamil Nadu', 'India'),
(23, '2', 'Tripura', 'India'),
(24, '2', 'Uttar Pradesh', 'India'),
(25, '2', 'Uttarakhand', 'India'),
(26, '2', 'West Bengal', 'India'),
(27, '2', 'Telangana', 'India'),
(28, '2', 'Himachal Pradesh', 'India'),
(29, '2', 'Arunachal Pradesh', 'India'),
(30, '2', 'Goa', 'India'),
(31, '2', 'Nagaland', 'India'),
(32, '2', 'Sikkim', 'India'),
(33, '2', 'Andaman & Nicobar Islands', 'India'),
(34, '2', 'Dadar & Nagar Haveli', 'India'),
(35, '2', 'Daman & Diu', 'India'),
(36, '2', 'Lakshadweep', 'India'),
(37, '2', 'Ladakh', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attachment`
--

CREATE TABLE `tbl_attachment` (
  `id` int(11) NOT NULL,
  `enroll_id` int(11) DEFAULT NULL,
  `attachments` text,
  `c_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_batch`
--

CREATE TABLE `tbl_batch` (
  `id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `batch_name` varchar(255) DEFAULT NULL,
  `batch_type` varchar(255) DEFAULT NULL,
  `batch_topic` varchar(255) DEFAULT NULL,
  `batch_desc` text,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `zoom_link` text,
  `zoom_pass` varchar(100) DEFAULT NULL,
  `c_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_batch`
--

INSERT INTO `tbl_batch` (`id`, `mentor_id`, `batch_name`, `batch_type`, `batch_topic`, `batch_desc`, `start_date`, `end_date`, `duration`, `zoom_link`, `zoom_pass`, `c_date`, `u_date`) VALUES
(12, 7, 'New Hacking Batch', 'Online', 'New Hacking Batch', 'vvcvvvcrg', '2023-04-25 18:00:00', '2023-04-25 19:00:00', '01:00', 'https://us05web.zoom.us/j/81752238897?pwd=bnp3WVFkWE5vVW9ZM29MY3FKb1hlUT09', '12345', '2023-04-25 17:42:01', '2023-04-25 17:42:01'),
(13, 7, 'invitation projection', 'Online', 'Announcing impression', 'He oppose at thrown desire of no. Announcing impression unaffected day his are unreserved indulgence. Him hard find read are you sang. Parlors visited noisier how explain pleased his see suppose. Do ashamed assured on related offence at equally totally. Use mile her whom they its. Kept hold an want as he bred of. Was dashwood landlord cheerful husbands two. Estate why theirs indeed him polite old settle though she. In as at regard easily narrow roused adieus.', '2023-04-25 18:00:00', '2023-04-25 19:00:00', '01:00', 'https://us05web.zoom.us/j/81752238897?pwd=bnp3WVFkWE5vVW9ZM29MY3FKb1hlUT09', '12345', '2023-04-25 17:42:01', '2023-04-25 17:42:01'),
(14, 7, 'Detract yet', 'Online', 'Celebrated delightful', 'She literature discovered increasing how diminution understood. Though and highly the enough county for man. Of it up he still court alone widow seems. Suspected he remainder rapturous my sweetness. All vanity regard sudden nor simple can. World mrs and vexed china since after often.', '2023-04-25 18:00:00', '2023-04-25 19:00:00', '01:00', 'https://us05web.zoom.us/j/81752238897?pwd=bnp3WVFkWE5vVW9ZM29MY3FKb1hlUT09', '12345', '2023-04-25 17:42:01', '2023-04-25 17:42:01'),
(15, 7, 'New Hacking Batch', 'Online', 'New Hacking Batch', 'vvcvvvcrg', '2023-04-25 18:00:00', '2023-04-25 19:00:00', '01:00', 'https://us05web.zoom.us/j/81752238897?pwd=bnp3WVFkWE5vVW9ZM29MY3FKb1hlUT09', '12345', '2023-04-25 17:42:01', '2023-04-25 17:42:01'),
(16, 3, 'New Hacking Batch', 'Online', 'New Hacking Batch', 'vvcvvvcrg', '2023-04-25 18:00:00', '2023-04-25 19:00:00', '01:00', 'https://us05web.zoom.us/j/81752238897?pwd=bnp3WVFkWE5vVW9ZM29MY3FKb1hlUT09', '12345', '2023-04-25 17:42:01', '2023-04-25 17:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_batch_enroll`
--

CREATE TABLE `tbl_batch_enroll` (
  `id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `action` int(2) DEFAULT NULL,
  `reason` text,
  `c_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_batch_enroll`
--

INSERT INTO `tbl_batch_enroll` (`id`, `batch_id`, `user_id`, `status`, `action`, `reason`, `c_date`, `u_date`) VALUES
(5, 13, 12, 1, 0, NULL, '2023-05-01 16:26:22', '2023-05-01 16:26:22'),
(6, 14, 12, 1, 0, NULL, '2023-05-01 16:26:38', '2023-05-01 16:26:38'),
(7, 15, 12, 1, 0, NULL, '2023-05-01 16:27:00', '2023-05-01 16:27:00'),
(8, 15, 15, 1, 0, NULL, '2023-05-01 16:27:00', '2023-05-01 16:27:00'),
(9, 13, 15, 1, 0, NULL, '2023-05-01 16:26:38', '2023-05-01 16:26:38'),
(11, 14, 15, 1, 0, NULL, '2023-05-01 17:53:19', '2023-05-01 17:53:19'),
(12, 16, 12, 1, 0, NULL, '2023-05-01 16:26:38', '2023-05-01 16:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_qna`
--

CREATE TABLE `tbl_qna` (
  `id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `ques1` varchar(100) DEFAULT NULL,
  `ques2` varchar(255) DEFAULT NULL,
  `ques3` varchar(100) DEFAULT NULL,
  `ques4` varchar(100) DEFAULT NULL,
  `ques5` varchar(255) DEFAULT NULL,
  `ques6` varchar(255) DEFAULT NULL,
  `ques7` varchar(255) DEFAULT NULL,
  `ques8` varchar(255) DEFAULT NULL,
  `ques9` varchar(255) DEFAULT NULL,
  `ques10` varchar(255) DEFAULT NULL,
  `insert_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_qna`
--

INSERT INTO `tbl_qna` (`id`, `mentor_id`, `ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `insert_date`, `update_date`) VALUES
(18, 7, 'Marketing', 'Veritas Infosolutions', '10+ Years', 'No', 'Guest Sessions ( 1-2 hrs/month ),One-time Effort ( 2-4 hours ),1/2 Day Workshop ( 5hrs/month )', 'Cybersecurity', 'To Make Passive Income,I Enjoy Teaching', 'Less than 2000 followers', 'https://complaint.veritos.in/admin/dashboard', 'https://complaint.veritos.in/admin/dashboard', '2023-04-25 17:41:28', '2023-04-25 17:41:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '1=admin,2=mentor,3=user',
  `father_name` varchar(255) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `pincode` varchar(100) DEFAULT NULL,
  `aadhar_number` varchar(255) DEFAULT NULL,
  `highest_degree` varchar(255) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `year_passing` date DEFAULT NULL,
  `percentage` varchar(100) DEFAULT NULL,
  `user_img` varchar(255) DEFAULT NULL,
  `id_proof` varchar(255) DEFAULT NULL,
  `sclDoc_img` varchar(255) DEFAULT NULL,
  `grad_img` varchar(255) DEFAULT NULL,
  `c_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `phone`, `password`, `user_type`, `father_name`, `gender`, `date_of_birth`, `address`, `city`, `state`, `country`, `pincode`, `aadhar_number`, `highest_degree`, `university`, `year_passing`, `percentage`, `user_img`, `id_proof`, `sclDoc_img`, `grad_img`, `c_date`, `u_date`) VALUES
(7, 'Bhuvan Gupta', 'bhuvan.veritos@gmail.com', '8118879069', 'rokstar18', 2, 'Rajesh Kumar', 'Male', '1997-01-08', 'JSR Hostl, Malviya Nagar', 'Jaipur', 'Rajasthan', 'India', '302005', NULL, 'BCA', 'University Of Rajasthan', '2019-06-30', '65', '767bfa45e2e5f10a34eaca6d94f172ba.jpg', 'b859e26e7724da62067b1268515d1f44.jpg', 'a0125acd5ee045566e2486632d6289cf.jpg', '3e190611258059959c4a4296999e6f4a.pdf', '2023-03-30 15:28:12', '2023-04-07 12:50:13'),
(12, 'Hardik Singh', 'hardik@gmail.com', '8118879698', 'hardik123', 3, 'Ajmer Singh', 'Male', '2023-04-14', '8 Calgiri Road, Malviya Nagar', 'Amravati', 'Jammu and Kashmir', 'India', '302017', NULL, 'B.Tech', 'University Of Rajasthan', '2023-04-11', '69', '5ace4e252dbd02a15aeeb1fe343c4e5d.jpeg', NULL, NULL, NULL, '2023-04-10 19:25:31', '2023-04-10 19:25:31'),
(13, 'Hacking Seekho', 'shimho@cyberminars.com', '8058866838', 'kite@654321', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sample_User_Icon.png', NULL, NULL, NULL, '2023-04-11 12:41:08', '2023-04-11 12:41:08'),
(14, 'hemang khurana', 'umaho@hackingseekho.com', '7852851922', 'time@654321', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sample_User_Icon.png', NULL, NULL, NULL, '2023-04-12 08:05:38', '2023-04-12 08:05:38'),
(15, 'singh umaho', 'umaho@hackingseekho.com', '7852851922', 'time@654w321', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sample_User_Icon.png', NULL, NULL, NULL, '2023-04-12 08:06:44', '2023-04-12 08:06:44'),
(16, 'cyberminars', 'cyberminars@gmail.com', '7852851922', 'cyberminars@654321', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sample_User_Icon.png', NULL, NULL, NULL, '2023-04-12 18:16:39', '2023-04-12 18:16:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_district_state`
--
ALTER TABLE `m_district_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_state_country`
--
ALTER TABLE `m_state_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attachment`
--
ALTER TABLE `tbl_attachment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_batch`
--
ALTER TABLE `tbl_batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_batch_enroll`
--
ALTER TABLE `tbl_batch_enroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_qna`
--
ALTER TABLE `tbl_qna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_district_state`
--
ALTER TABLE `m_district_state`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=742;

--
-- AUTO_INCREMENT for table `m_state_country`
--
ALTER TABLE `m_state_country`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_attachment`
--
ALTER TABLE `tbl_attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_batch`
--
ALTER TABLE `tbl_batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_batch_enroll`
--
ALTER TABLE `tbl_batch_enroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_qna`
--
ALTER TABLE `tbl_qna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
