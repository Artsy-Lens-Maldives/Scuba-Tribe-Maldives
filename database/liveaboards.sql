-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2017 at 04:01 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scuba`
--

-- --------------------------------------------------------

--
-- Table structure for table `liveaboards`
--

CREATE TABLE `liveaboards` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `boat_features` longtext COLLATE utf8mb4_unicode_ci,
  `food_and_drinks` longtext COLLATE utf8mb4_unicode_ci,
  `diving` longtext COLLATE utf8mb4_unicode_ci,
  `gear_rental` longtext COLLATE utf8mb4_unicode_ci,
  `vessel_layout_photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boat_specifications` longtext COLLATE utf8mb4_unicode_ci,
  `other_features` longtext COLLATE utf8mb4_unicode_ci,
  `owner_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `liveaboards`
--

INSERT INTO `liveaboards` (`id`, `name`, `star`, `description`, `boat_features`, `food_and_drinks`, `diving`, `gear_rental`, `vessel_layout_photo`, `boat_specifications`, `other_features`, `owner_address`, `email`, `website`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Scubaspa Ying', 4, '<p>The 50m Scubaspa Ying is a unique liveaboard located in the Maldives and expertly combines luxury scuba diving with luxury spa treatments to create the pinnacle of luxury liveaboards and sister ship to the ScubaSpa Yang. There are 29 staff members onboard Scubaspa Ying including 6 full time spa therapists. Scubaspa Ying has a variety of cabins and suites to meet the needs and expectations of every guest. All rooms are spacious, elegant and serene. The restaurant offers fine dining with an international flair and the finest wines.</p>\r\n\r\n<p>Scubaspa Ying schedules diving cruises year round to the central atolls in the Maldives. The vessel can accommodate up to 44 passengers but only accommodates 22 divers. This allows divers personal attention from the dive crew for a fantastic dive excursion. Scuba Divers will enjoy spectacular diving on the best atolls in the Maldives. Scubaspa Ying is accompanied by its own spacious, well equipped dive boat, which serves as a floating dive centre.</p>\r\n\r\n<p>Not only a great choice for divers, Scubaspa Ying caters perfectly to non-divers also. Non-divers can choose the \'Spa Package\' which includeds 8 spa treatments, but a variety of activities are also available on board. Included in all packages is daily morning yoga, snorkeling the clear blue waters of the Maldives, BBQ on a sandy island, kayaking and stand up paddleboarding. Whether you are a scuba diver, spa lover or both, Scubaspa Ying is the perfect liveaboard holiday for you.</p>', '<li>Laundry Service</li>\r\n<li>Leisure Deck</li>\r\n<li>Shaded diving deck</li>\r\n<li>Massage</li>\r\n<li>Daily housekeeping</li>\r\n<li>Audio & video entertainment</li>\r\n<li>Free Internet</li>\r\n<li>Air Conditioned saloon</li>\r\n<li>Aircon Cabins</li>\r\n<li>Sun Deck</li>\r\n<li>Non-Diver (Snorkeler) Friendly</li>\r\n<li>Outdoor Dining</li>\r\n<li>Hot Tub</li>', '<li>Western Food</li>\r\n<li>Local Food</li>\r\n<li>Vegetarian Options</li>\r\n<li>Selection of wines</li>\r\n<li>Fine Cuisine</li>', '<li>Nitrox available</li>\r\n<li>Dive deck</li>\r\n<li>Tenders for diving</li>', '<ul>\r\n    <li><span>15L tanks:</span>USD 5 per dive   </li>\r\n    <li><span>Wetsuit:</span>USD 12 per day (USD 60 per week)   </li>\r\n    <li><span>Regulator:</span>USD 12 per day (USD 60 per week)   </li>\r\n    <li><span>BCD:</span>USD 12 per day (USD 60 per week)   </li>\r\n    <li><span>Dive Computer:</span>USD 12 per day (USD 60 per week)   </li>\r\n    <li><span>U/W photo camera rental:</span>GoPro 4 Camera USD 30 per day (USD150 per week)   </li>\r\n</ul>', 'https://d2io85bc6qsg2z.cloudfront.net/picture_library/boat/4448/ScubaSpa_Ying_deckplan.jpg', '<ul style=\"style-1 mb-0\">\r\n    <li><span>Length:</span>50 m</li>\r\n    <li><span>Beam:</span>11.2 m</li>\r\n    <li><span>Engines:</span>2 no CAT C9 Acert 503 BHP</li>\r\n    <li><span>Max guests:</span>22 (44 pax in total including spa package guests)</li>\r\n    <li><span>Number of cabins:</span>21</li>\r\n    <li><span>Number of bathrooms:</span>24</li>\r\n    <li><span>Tenders:</span>diving dhoni with CAT C7 275 BHP engine</li>\r\n    <li><span>Water capacity:</span>22540 liter</li>\r\n    <li><span>Fuel capacity:</span>19000 liters</li>\r\n    <li><span>Freshwater maker:</span>2 no Aquagiv 260 ltr/hr</li>\r\n</ul>', '<li>GPS</li>\r\n<li>Emergency Rafts</li>\r\n<li>Life Vests</li>\r\n<li>Fire Alarm & Fire Extinguishers</li>\r\n<li>Oxygen</li>\r\n<li>First Aid Kits</li>', NULL, 'email@email.com', 'website.com', 'scubaspa-ying', '2017-09-25 03:17:18', '2017-09-25 04:23:13'),
(2, 'Safari Inn', 2, '<p>The 50m Scubaspa Ying is a unique liveaboard located in the Maldives and expertly combines luxury scuba diving with luxury spa treatments to create the pinnacle of luxury liveaboards and sister ship to the ScubaSpa Yang. There are 29 staff members onboard Scubaspa Ying including 6 full time spa therapists. Scubaspa Ying has a variety of cabins and suites to meet the needs and expectations of every guest. All rooms are spacious, elegant and serene. The restaurant offers fine dining with an international flair and the finest wines.</p>\r\n\r\n<p>Scubaspa Ying schedules diving cruises year round to the central atolls in the Maldives. The vessel can accommodate up to 44 passengers but only accommodates 22 divers. This allows divers personal attention from the dive crew for a fantastic dive excursion. Scuba Divers will enjoy spectacular diving on the best atolls in the Maldives. Scubaspa Ying is accompanied by its own spacious, well equipped dive boat, which serves as a floating dive centre.</p>\r\n\r\n<p>Not only a great choice for divers, Scubaspa Ying caters perfectly to non-divers also. Non-divers can choose the \'Spa Package\' which includeds 8 spa treatments, but a variety of activities are also available on board. Included in all packages is daily morning yoga, snorkeling the clear blue waters of the Maldives, BBQ on a sandy island, kayaking and stand up paddleboarding. Whether you are a scuba diver, spa lover or both, Scubaspa Ying is the perfect liveaboard holiday for you.</p>', '<li>Laundry Service</li>\r\n<li>Leisure Deck</li>\r\n<li>Shaded diving deck</li>\r\n<li>Massage</li>\r\n<li>Daily housekeeping</li>\r\n<li>Audio & video entertainment</li>\r\n<li>Free Internet</li>\r\n<li>Air Conditioned saloon</li>\r\n<li>Aircon Cabins</li>\r\n<li>Sun Deck</li>\r\n<li>Non-Diver (Snorkeler) Friendly</li>\r\n<li>Outdoor Dining</li>\r\n<li>Hot Tub</li>', '<li>Western Food</li>\r\n<li>Local Food</li>\r\n<li>Vegetarian Options</li>\r\n<li>Selection of wines</li>\r\n<li>Fine Cuisine</li>', '<li>Nitrox available</li>\r\n<li>Dive deck</li>\r\n<li>Tenders for diving</li>', '<ul>\r\n    <li><span>15L tanks:</span>USD 5 per dive   </li>\r\n    <li><span>Wetsuit:</span>USD 12 per day (USD 60 per week)   </li>\r\n    <li><span>Regulator:</span>USD 12 per day (USD 60 per week)   </li>\r\n    <li><span>BCD:</span>USD 12 per day (USD 60 per week)   </li>\r\n    <li><span>Dive Computer:</span>USD 12 per day (USD 60 per week)   </li>\r\n    <li><span>U/W photo camera rental:</span>GoPro 4 Camera USD 30 per day (USD150 per week)   </li>\r\n</ul>', 'https://d2io85bc6qsg2z.cloudfront.net/picture_library/boat/4448/ScubaSpa_Ying_deckplan.jpg', '<ul style=\"style-1 mb-0\">\r\n    <li><span>Length:</span>50 m</li>\r\n    <li><span>Beam:</span>11.2 m</li>\r\n    <li><span>Engines:</span>2 no CAT C9 Acert 503 BHP</li>\r\n    <li><span>Max guests:</span>22 (44 pax in total including spa package guests)</li>\r\n    <li><span>Number of cabins:</span>21</li>\r\n    <li><span>Number of bathrooms:</span>24</li>\r\n    <li><span>Tenders:</span>diving dhoni with CAT C7 275 BHP engine</li>\r\n    <li><span>Water capacity:</span>22540 liter</li>\r\n    <li><span>Fuel capacity:</span>19000 liters</li>\r\n    <li><span>Freshwater maker:</span>2 no Aquagiv 260 ltr/hr</li>\r\n</ul>', '<li>GPS</li>\r\n<li>Emergency Rafts</li>\r\n<li>Life Vests</li>\r\n<li>Fire Alarm & Fire Extinguishers</li>\r\n<li>Oxygen</li>\r\n<li>First Aid Kits</li>', NULL, 'email@email.com', 'website.com', 'safari-inn', '2017-09-25 03:17:18', '2017-09-25 04:23:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `liveaboards`
--
ALTER TABLE `liveaboards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `liveaboards`
--
ALTER TABLE `liveaboards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
