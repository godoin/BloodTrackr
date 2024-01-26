-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 10:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank`
--

CREATE TABLE `blood_bank` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `telephone_num` varchar(15) NOT NULL,
  `region` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `blood_types` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_bank`
--

INSERT INTO `blood_bank` (`id`, `name`, `location`, `telephone_num`, `region`, `time`, `blood_types`, `status`, `date`) VALUES
(1, 'NATIONAL BLOOD CENTER (PRC TOWER)', '37 EDSA corner Boni Avenue, Mandaluyong City', '(02) 790-2300', 'Northern and Central Luzon', '8:00 AM to 3:00 PM', '[\"A\", \"O\", \"AB\"]', 'Yes', '2024-02-15'),
(2, 'National Blood Center', 'Bonifacio Drive, Port Area, Manila', '(02) 527-0861', 'Northern and Central Luzon', '7:30 AM to 5:00 PM', '[\"B\", \"O\", \"AB\"]', 'No', '2024-02-18'),
(3, 'Cebu City Red Cross Chapter', 'Osmeña Blvd., Cebu City', '032-253-4611', 'Visayas', '8:30 AM to 4:30 PM', '[\"A\", \"B\", \"O\"]', 'Yes', '2024-03-05'),
(4, 'Iloilo Red Cross Chapter', 'Bonifacio Drive, Iloilo City', '033-337-2359', 'Visayas', '9:00 AM to 4:00 PM', '[\"AB\", \"O\", \"B\"]', 'No', '2024-03-10'),
(5, 'Misamis Oriental-Cagayan de Oro City Red Cross Chapter', 'Capitol Compound, Cagayan de Oro City', '(088) 856-8855', 'Mindanao', '8:00 AM to 5:00 PM', '[\"A\", \"AB\", \"O\"]', 'Yes', '2024-03-20'),
(6, 'Alaminos Red Cross', 'WPDH Compound, Sabaro, Poblacion, Alaminos City', '075-5516356', 'Northern and Central Luzon', '9:30 AM to 4:30 PM', '[\"B\", \"O\", \"A\"]', 'No', '2024-04-02'),
(7, 'Baguio Red Cross', '39 Harrison Road, Baguio City', '074-4424036', 'Northern and Central Luzon', '8:00 AM to 3:00 PM', '[\"A\", \"O\", \"AB\"]', 'Yes', '2024-04-05'),
(8, 'Bataan Red Cross', 'Capitol Drive (Back DPWH) Balanga City', '047-7914779', 'Northern and Central Luzon', '9:30 AM to 4:30 PM', '[\"AB\", \"O\", \"B\"]', 'No', '2024-04-10'),
(9, 'Benguet Red Cross', 'BeGHCompound, KM 5, La Trinidad, Benguet', '074-4222796', 'Northern and Central Luzon', '7:30 AM to 5:00 PM', '[\"A\", \"O\", \"B\"]', 'Yes', '2024-02-25'),
(10, 'Bulacan Red Cross', 'Brgy. Pagala, DRT highway, Baliwag Bulacan', '0923-303-6100', 'Northern and Central Luzon', '8:00 AM to 3:00 PM', '[\"AB\", \"O\", \"B\"]', 'No', '2024-02-28'),
(11, 'Bulacan-Malolos Red Cross', 'Capitol Center, Guinhawa, Malolos, Bulacan', '044-662-5922', 'Northern and Central Luzon', '9:00 AM to 4:00 PM', '[\"A\", \"AB\", \"O\"]', 'Yes', '2024-03-08'),
(12, 'Bulacan-Marilao Red Cross', 'Brgy. Patubig, Marilao Bulacan', '0932-487-8102', 'Northern and Central Luzon', '8:30 AM to 4:30 PM', '[\"O\", \"B\", \"A\"]', 'No', '2024-03-15'),
(13, 'Bulacan-San Rafael Red Cross', 'Brgy. Sampaloc, San Rafael Bulacan', '0932-913-3784', 'Northern and Central Luzon', '9:00 AM to 4:00 PM', '[\"A\", \"O\", \"AB\"]', 'Yes', '2024-03-22'),
(14, 'Cagayan Red Cross', 'Magallanes Street , Tuguegarao City', '078-846-2881', 'Northern and Central Luzon', '8:30 AM to 4:30 PM', '[\"B\", \"O\", \"AB\"]', 'No', '2024-04-01'),
(15, 'Ifugao Red Cross', 'Capitol Compound, Lagawe, Ifugao', '0916-422-7670', 'Northern and Central Luzon', '7:30 AM to 5:00 PM', '[\"A\", \"O\", \"B\"]', 'Yes', '2024-04-08'),
(16, 'Ilocos Norte Red Cross', 'Bonifacio Street (back Heroes Hall), Laoag City', '077-770-5615', 'Northern and Central Luzon', '8:00 AM to 3:00 PM', '[\"AB\", \"O\", \"B\"]', 'No', '2024-04-15'),
(17, 'Ilocos Sur Red Cross', 'Burgos Street, Provincial Capitol Compound, Vigan City', '077-722-2684', 'Northern and Central Luzon', '9:30 AM to 4:30 PM', '[\"A\", \"O\", \"AB\"]', 'Yes', '2024-04-22'),
(18, 'Isabela Red Cross', 'Calamangui 2nd, Ilagan, Isabela', '078-6223248', 'Northern and Central Luzon', '8:30 AM to 4:30 PM', '[\"A\", \"O\", \"AB\"]', 'Yes', '2024-02-29'),
(19, 'Kalinga Red Cross', 'DepEd Compound Brgy Bulanao, Tabuk, Kalinga', '0915-880-2243', 'Northern and Central Luzon', '9:00 AM to 4:00 PM', '[\"B\", \"O\", \"A\"]', 'No', '2024-02-20'),
(20, 'La Union-San Fernando Red Cross', 'Don Pablo Campos Bldg., Widdoes Street, Barangay 2, City of San Fernado', '072-7005161', 'Northern and Central Luzon', '8:00 AM to 3:00 PM', '[\"AB\", \"O\", \"B\"]', 'Yes', '2024-02-25'),
(21, 'Nueva Vizcaya Red Cross', 'Old Capitol Compound, Llanera Street, Cabanatuan City', '044-4631280', 'Northern and Central Luzon', '9:30 AM to 4:30 PM', '[\"A\", \"O\", \"AB\"]', 'No', '2024-03-05'),
(22, 'Olongpao Red Cross', 'Old Hospital Compound, East Tapinac, Olongapo City', '047-222-2181', 'Northern and Central Luzon', '8:30 AM to 4:30 PM', '[\"B\", \"O\", \"A\"]', 'Yes', '2024-03-10'),
(23, 'Pampanga Red Cross', 'Capitol Compound, Sto.Niño. City of San Fernando Chapter Office located at Regional Government Center Maimpis, City of San Fernando, Pampanga', '045-961-4117', 'Northern and Central Luzon', '8:00 AM to 3:00 PM', '[\"AB\", \"O\", \"B\"]', 'No', '2024-03-15'),
(24, 'Pampanga-Angeles Red Cross', 'Capitol Compound, Sto.Niño, City of San Fernando, Pampanga', '045-9614117', 'Northern and Central Luzon', '9:00 AM to 4:00 PM', '[\"A\", \"AB\", \"O\"]', 'Yes', '2024-03-20'),
(25, 'Pangasinan-Dagupan Red Cross', 'Herrero-Perez Blvd., Dagupan City', '075-6322472', 'Northern and Central Luzon', '9:30 AM to 4:30 PM', '[\"A\", \"O\", \"B\"]', 'No', '2024-03-25'),
(26, 'Pangasinan-Urdaneta Red Cross', 'Pangasinan', '075-6322472', 'Northern and Central Luzon', '8:00 AM to 3:00 PM', '[\"AB\", \"O\", \"B\"]', 'Yes', '2024-04-02'),
(27, 'Quirino Red Cross', 'Capitol Hills, Cabarroguis, Quirino', '078-692-5054', 'Northern and Central Luzon', '8:00 AM to 5:00 PM', '[\"A\", \"AB\", \"O\"]', 'Yes', '2024-02-16'),
(28, 'Santiago Red Cross', 'City Hall Compound, San Andres, Santiago City, Isabela', '078-692-5054', 'Northern and Central Luzon', '7:30 AM to 5:00 PM', '[\"A\", \"O\", \"AB\"]', 'Yes', '2024-04-10'),
(29, 'Tarlac Red Cross', 'Capitol Site, San Vicente, Tarlac City', '045-6114008', 'Northern and Central Luzon', '8:30 AM to 4:30 PM', '[\"B\", \"O\", \"AB\"]', 'No', '2024-04-15'),
(30, 'Zambales Red Cross', 'DSWD Compound, Brgy Palanginan, Iba, Zambales', '047-811-7214', 'Northern and Central Luzon', '9:00 AM to 4:00 PM', '[\"A\", \"O\", \"B\"]', 'Yes', '2024-04-22'),
(31, 'Caloocan Red Cross', '7th Ave. Grace Park, Caloocan City', '02-3660380', 'National Capital Region', '8:30 AM to 4:30 PM', '[\"A\", \"O\", \"AB\"]', 'No', '2024-02-28'),
(32, 'Makati Red Cross', 'Johnny Air Building 55 B Dian St. Cor Gil Puyat Ave. Brgy. Palanan Makati', '403-6267', 'National Capital Region', '8:00 AM to 3:00 PM', '[\"B\", \"O\", \"A\"]', 'Yes', '2024-03-08'),
(33, 'Muntinlupa Red Cross', 'Red Cross Center Centennial Lane FILINVEST, Alabang', '850-6813', 'National Capital Region', '9:30 AM to 4:30 PM', '[\"AB\", \"O\", \"B\"]', 'No', '2024-04-05'),
(34, 'Pasay Red Cross', '2354 CAA Compound, Aurora Blvd. (old Tramo), Pasay City', '854-2748', 'National Capital Region', '8:00 AM to 3:00 PM', '[\"A\", \"O\", \"AB\"]', 'Yes', '2024-02-29'),
(35, 'Quezon Red Cross', 'Quezon City Hall Compound, Kalayaan Avenue, Diliman, Quezon City', '433-6568, 433-2', 'National Capital Region', '9:00 AM to 4:00 PM', '[\"A\", \"O\", \"B\"]', 'Yes', '2024-03-07'),
(36, 'Rizal-Main Red Cross', 'Shaw Blvd., Pasig City', '631-3993', 'National Capital Region', '8:30 AM to 4:30 PM', '[\"AB\", \"O\", \"B\"]', 'No', '2024-03-14'),
(37, 'Rizal-East Red Cross', '2nd Floor Multipurpose Bldg, Brgy Muzon, Taytay Rizal', '998-4867', 'National Capital Region', '8:00 AM to 3:00 PM', '[\"A\", \"B\", \"O\"]', 'Yes', '2024-03-21'),
(38, 'Valenzuela Red Cross', 'Dahlia Street, Villa Teresa Subdivision, Marulas, Valenzuela City', '432-0273', 'National Capital Region', '9:30 AM to 4:30 PM', '[\"AB\", \"O\", \"B\"]', 'No', '2024-03-28'),
(39, 'Batangas Red Cross', 'Kumintang Ibaba, Capitol Site, Batangas City', '043 430 5712', 'Southern Tagalog', '8:30 AM to 4:30 PM', '[\"A\", \"O\", \"AB\"]', 'Yes', '2024-04-04'),
(40, 'Cavite Red Cross', 'Samonte Park, Cavite City', '', 'Southern Tagalog', '8:00 AM to 3:00 PM', '[\"B\", \"O\", \"A\"]', 'No', '2024-04-11'),
(41, 'Cavite-Da Smarinas Red Cross', 'Units 2 and 3, Amada building, Aguinaldo Highway, Barangay Zone IV, Dasmarinas, Cavite', '046-431-0562', 'Southern Tagalog', '8:30 AM to 4:30 PM', '[\"A\", \"O\", \"AB\"]', 'No', '2024-04-04'),
(42, 'Laguna Red Cross', 'Units 2 and 3, Amada building, Aguinaldo Highway, Barangay Zone IV, Dasmarinas, Cavite', '046-402-6267', 'Southern Tagalog', '9:00 AM to 4:00 PM', '[\"AB\", \"O\", \"B\"]', 'Yes', '2024-02-29'),
(43, 'Laguna-Calamba Red Cross', '2nd Floor, PRC Laguna Chapter Building J. de Leon St. corner P. Guevara Avenue, Santa Cruz, Laguna', '0939-5207898', 'Southern Tagalog', '8:30 AM to 4:30 PM', '[\"A\", \"O\", \"AB\"]', 'No', '2024-03-07'),
(44, 'Laguna-Sta. Rosa Red Cross', 'Dr. Jose P. Rizal Memorial district Hospital Compound Brgy. Bucal, Calamba City', '(049) 501-1929', 'Southern Tagalog', '8:00 AM to 3:00 PM', '[\"B\", \"O\", \"A\"]', 'Yes', '2024-03-14'),
(45, 'Laguna-Siniloan Red Cross', '2nd Floor, Municipal Government of Siniloan - Multi-Purpose Building, L. de Leon St., Brgy. Wawa, Siniloan, Laguna', '(049) 521-3488', 'Southern Tagalog', '9:30 AM to 4:30 PM', '[\"AB\", \"O\", \"B\"]', 'No', '2024-03-21'),
(46, 'Occidental Mindoro Red Cross', 'M. H. del Pilar Street, Brgy Siete, San Jose Occidental Mindoro', '043-491-4383', 'Southern Tagalog', '9:00 AM to 4:00 PM', '[\"A\", \"O\", \"AB\"]', 'Yes', '2024-03-28'),
(47, 'Palawan Red Cross', 'H. Mendoza Street, Old City Hall Site, Puerto Princesa City', '048-433-6362', 'Southern Tagalog', '8:30 AM to 4:30 PM', '[\"B\", \"O\", \"A\"]', 'No', '2024-04-04'),
(48, 'Quzon-Lucena Red Cross', 'Victoria Street, Capitol Compound, Lucena City', '042-660-4460', 'Southern Tagalog', '8:00 AM to 3:00 PM', '[\"AB\", \"O\", \"B\"]', 'Yes', '2024-04-11'),
(49, 'Romblon Red Cross', 'Capitol Site Brgy. Capaclan, Romblon, Romblon', '0908-813-6386', 'Southern Tagalog', '9:30 AM to 4:30 PM', '[\"A\", \"O\", \"B\"]', 'No', '2024-02-29'),
(50, 'San Pablo Red Cross', 'Rizal Avenue, San Pablo City', '049-562-4025', 'Southern Tagalog', '8:00 AM to 3:00 PM', '[\"AB\", \"O\", \"B\"]', 'Yes', '2024-04-18'),
(51, 'Albay-Legaspi Red Cross', 'Gov. Locsin cor. Fr. JL Bates St., Albay Legaspi', '0977-146-6761', 'Bicol', '9:00 AM to 4:00 PM', '[\"A\", \"O\", \"AB\"]', 'Yes', '2024-04-25'),
(52, 'Camarines Sur Red Cross', 'Panganiban Drive, Naga City', '054-4739-431', 'Bicol', '8:30 AM to 4:30 PM', '[\"B\", \"O\", \"A\"]', 'No', '2024-02-29'),
(53, 'Catanduanes Red Cross', 'EBMC Compound, San Isidro Village, Virac, Catanduanes', '0917-806-8528', 'Bicol', '8:00 AM to 3:00 PM', '[\"AB\", \"O\", \"B\"]', 'Yes', '2024-03-07'),
(54, 'Masbate Red Cross', 'Capitol Road, Masbate City', '056-333-2331', 'Bicol', '8:30 AM to 4:30 PM', '[\"A\", \"B\", \"O\"]', 'Yes', '2024-03-14'),
(55, 'Aklan Red Cross', 'Dr. RST Mem. Hospital Compound, F. Quimpo Street, Kalibo, Aklan', '036-2684761', 'Visayas', '9:00 AM to 4:00 PM', '[\"AB\", \"O\", \"B\"]', 'No', '2024-03-21'),
(56, 'Bohol Red Cross', 'J.A. Clarin Street, Provincial Capitol Compound, Tagbilaran City', '038-5019175', 'Visayas', '8:00 AM to 3:00 PM', '[\"A\", \"O\", \"AB\"]', 'Yes', '2024-03-28'),
(57, 'Capiz Red Cross', 'Provincial Park, Macopa Street, Roxas City', '036-6211125', 'Visayas', '8:30 AM to 4:30 PM', '[\"B\", \"O\", \"A\"]', 'No', '2024-04-04'),
(58, 'Cebu-Bogo Red Cross', 'Cebu City', '0916-398-0069', 'Visayas', '9:00 AM to 4:00 PM', '[\"AB\", \"O\", \"B\"]', 'Yes', '2024-04-11'),
(59, 'Cebu-Mandau Red Cross', 'Cebu City Red Cross Chapter, Osmeña Blvd. Cebu City 6000', '032-253-4611', 'Visayas', '8:30 AM to 4:30 PM', '[\"A\", \"O\", \"AB\"]', 'No', '2024-02-29'),
(60, 'Eastern Samar Red Cross', 'Capitol Site, Alang-alang, Borongan, Eastern Samar 6800', '055-261-3528', 'Visayas', '8:00 AM to 3:00 PM', '[\"B\", \"O\", \"A\"]', 'Yes', '2024-03-07'),
(61, 'Guimaras Red Cross', 'Museo de Guimaras, San Miguel Jordan, Guimaras', '033- 581-2020', 'Visayas', '9:30 AM to 4:30 PM', '[\"AB\", \"O\", \"B\"]', 'No', '2024-03-14'),
(62, 'Lapu-Lapu Red Cross', 'Doors 4 and 5 Hoopsdome Bldg, Lapu-Lapu City', '0917-709-3382', 'Visayas', '8:30 AM to 4:30 PM', '[\"A\", \"O\", \"AB\"]', 'Yes', '2024-03-21'),
(63, 'Leyte Red Cross', 'Magsaysay Blvd. corner M.H. del Pilar Blvd., Tacloban City', '053-321-3330', 'Visayas', '8:00 AM to 3:00 PM', '[\"B\", \"O\", \"A\"]', 'No', '2024-03-28'),
(64, 'Negros Occidental-Bacolod Red Cross', '10th Street, Lacson Capitol Subd., Capitol Shopping Center, Bacolod City', '034-4349286', 'Visayas', '9:00 AM to 4:00 PM', '[\"AB\", \"O\", \"B\"]', 'Yes', '2024-04-04'),
(65, 'Negros Oriental Red Cross', 'Legaspi Street, Dumaguete City', '035-2252835', 'Visayas', '8:30 AM to 4:30 PM', '[\"A\", \"O\", \"AB\"]', 'No', '2024-04-11'),
(66, 'Northern Samar Red Cross', 'Capitol Site, Catarman, Northern Samar', '055-2518279', 'Visayas', '9:30 AM to 4:30 PM', '[\"B\", \"O\", \"A\"]', 'Yes', '2024-04-18'),
(67, 'Ormoc Red Cross', 'San Pablo Street, Ormoc City', '053-2552911', 'Visayas', '8:00 AM to 3:00 PM', '[\"AB\", \"O\", \"B\"]', 'Yes', '2024-04-25'),
(68, 'Passi Red Cross', 'New Town Site, Brgy Sablongon, Passi City', '0997-229-5572', 'Visayas', '9:00 AM to 4:00 PM', '[\"A\", \"O\", \"AB\"]', 'No', '2024-02-29'),
(69, 'Southern Leyte Red Cross', 'Tomas Oppus Street, Brgy. Abgao, Maasin City, Southern Leyte', '053-381-0563', 'Visayas', '8:30 AM to 4:30 PM', '[\"B\", \"O\", \"A\"]', 'Yes', '2024-03-07'),
(70, 'Agusan Del Norte-Butuan Red Cross', 'Capitol Drive, Butuan City', '085-342-8521', 'Mindanao', '9:30 AM to 4:30 PM', '[\"AB\", \"O\", \"B\"]', 'No', '2024-03-14'),
(71, 'Agusan Del Sur Red Cross', 'Government Center, Patin-ay, Properidad, Agusan del Sur', '085-3437195', 'Mindanao', '8:00 AM to 3:00 PM', '[\"A\", \"O\", \"AB\"]', 'Yes', '2024-03-21'),
(72, 'Bukidnon Red Cross', 'Capitol Site, Malaybalay City, Bukidnon', '088-2213480', 'Mindanao', '8:30 AM to 4:30 PM', '[\"A\", \"B\", \"O\"]', 'Yes', '2024-03-28'),
(73, 'Cotabato Red Cross', 'Veterans Ave., PC Hill, Cotabato City', '064-4212274', 'Mindanao', '9:00 AM to 4:00 PM', '[\"AB\", \"O\", \"B\"]', 'No', '2024-04-04'),
(74, 'Davao Red Cross', 'Manuel Roxas Avenue, Davao City', '082-2240217', 'Mindanao', '8:30 AM to 4:30 PM', '[\"A\", \"O\", \"AB\"]', 'Yes', '2024-04-11'),
(75, 'Davao Del Norte Red Cross', 'Government Center, Mankilain, Tagum, Davao', '084-217-3473', 'Mindanao', '8:00 AM to 3:00 PM', '[\"B\", \"O\", \"A\"]', 'Yes', '2024-02-29'),
(76, 'Davao Del Sur Red Cross', 'Quezon Avenue, Digos City, Davao del Sur', '082-5532832', 'Mindanao', '9:30 AM to 4:30 PM', '[\"AB\", \"O\", \"B\"]', 'No', '2024-03-07'),
(77, 'Davao Oriental Red Cross', 'Hospital Drive, Matiao, Mati, Davao Oriental', '087-3884022', 'Mindanao', '8:00 AM to 3:00 PM', '[\"A\", \"O\", \"AB\"]', 'Yes', '2024-03-14'),
(78, 'General Santos Red Cross', 'City Hall Compound, General Santos City', '083-5524323', 'Mindanao', '9:00 AM to 4:00 PM', '[\"B\", \"O\", \"A\"]', 'No', '2024-03-21'),
(79, 'Gingoog Red Cross', 'Misamis Oriental Hospital Compound, Gingoog City', '088-42-7337', 'Mindanao', '8:30 AM to 4:30 PM', '[\"AB\", \"O\", \"B\"]', 'Yes', '2024-03-28'),
(80, 'Iligan Red Cross', 'Don Pedro Street, Celdren Avenue, Rosario Heights, Iligan City', '063-223-1065', 'Mindanao', '9:30 AM to 4:30 PM', '[\"A\", \"O\", \"AB\"]', 'No', '2024-04-04'),
(81, 'South Cotabato Red Cross', 'Mabini Street, Koronadal City, South Cotabato', '083-228-2414', 'Mindanao', '8:00 AM to 3:00 PM', '[\"B\", \"O\", \"A\"]', 'Yes', '2024-04-11'),
(82, 'Sultan Kudarat Red Cross', 'Bonifacio Street (beside PNP & fronting TC Health Office), Tacurong City', '064-2006652', 'Mindanao', '9:30 AM to 4:30 PM', '[\"AB\", \"O\", \"B\"]', 'No', '2024-04-18'),
(83, 'Sulu Red Cross', 'Marina Street Municipal Compound, Jolo, Sulu', '08-5341891', 'Mindanao', '8:30 AM to 4:30 PM', '[\"A\", \"O\", \"AB\"]', 'Yes', '2024-04-25'),
(84, 'Surigao Del Norte Red Cross', 'Parrucho Street Cor., Magallanes Street, Surigao City', '086-2324065', 'Mindanao', '9:00 AM to 4:00 PM', '[\"B\", \"O\", \"A\"]', 'No', '2024-02-29'),
(85, 'Surigao Del Sur Red Cross', 'Capitol Hills, Tandag, Surigao del Sur', '086-2113191', 'Mindanao', '8:00 AM to 3:00 PM', '[\"AB\", \"O\", \"B\"]', 'Yes', '2024-03-07'),
(86, 'Tangub Red Cross', 'City Hall Compound, Tangub City', '088-3953162', 'Mindanao', '9:30 AM to 4:30 PM', '[\"A\", \"O\", \"AB\"]', 'No', '2024-03-14'),
(87, 'Zamboanga Red Cross', 'Rizal Street, Pettit Barracks, Zamboanga City', '062-9921622', 'Mindanao', '8:30 AM to 4:30 PM', '[\"B\", \"O\", \"A\"]', 'Yes', '2024-03-21'),
(88, 'Zamboanga Del Norte Red Cross', 'Capitol Tourism Complex, Dipolog City', '065-212-3566', 'Mindanao', '9:00 AM to 4:00 PM', '[\"AB\", \"O\", \"B\"]', 'No', '2024-03-28'),
(89, 'Zamboanga Del Sur Red Cross', 'Provincial Government Center, Barangay Dau, Pagadian City', '062-214-1717', 'Mindanao', '8:00 AM to 3:00 PM', '[\"A\", \"O\", \"AB\"]', 'Yes', '2024-04-04'),
(90, 'Zamboanga Sibugay Red Cross', 'Climaco Street, Veterans Village, Ipil, Sibugay, Zamboanga del Sur', '062-333-5720', 'Mindanao', '9:30 AM to 4:30 PM', '[\"B\", \"O\", \"A\"]', 'No', '2024-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(50) NOT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_bank`
--
ALTER TABLE `blood_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `bank_id` (`bank_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_bank`
--
ALTER TABLE `blood_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`bank_id`) REFERENCES `blood_bank` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
