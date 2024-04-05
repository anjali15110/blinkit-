-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2024 at 09:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `token` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `localstrval` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `product_image`, `product_name`, `price`, `quantity`, `total_price`, `localstrval`, `created_at`, `updated_at`, `deleted_at`) VALUES
(59, 7, 'http://localhost:8080/admin/product_image/product1-9259.jpg', 'Table White Eggs (6 pieces)', 44, 5, 220, 9753875, '2023-11-14 00:00:00', '2023-11-14 00:00:00', '2023-11-14 00:00:00'),
(60, 12, 'http://localhost:8080/admin/product_image/product1-9440.jpg', 'Desi Tomato', 134, 1, 134, 9753875, '2023-11-14 00:00:00', '2023-11-14 00:00:00', '2023-11-14 00:00:00'),
(61, 1, 'http://localhost:8080/admin/product_image/product1-1437.jpg', 'Amul Taaza Toned Fresh Milk ', 27, 1, 27, 9753875, '2023-11-16 00:00:00', '2023-11-16 00:00:00', '2023-11-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `category_name` varchar(500) NOT NULL,
  `category_image` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `category_name`, `category_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dairy, Bread & Eggs', 'category-5250.jpg', '2023-07-26 22:17:48', '2023-07-26 22:17:48', '2023-07-26 22:17:48'),
(2, 'Fruits & Vegetables', 'category-2563.jpg', '2023-07-26 22:18:16', '2023-07-26 22:18:16', '2023-07-26 22:18:16'),
(3, 'Cold Drinks & Juices ', 'category-7603.jpg', '2023-07-26 22:18:39', '2023-07-26 22:18:39', '2023-07-26 22:18:39'),
(4, 'Snacks & Munchies ', 'category-6425.jpg', '2023-07-26 22:19:04', '2023-07-26 22:19:04', '2023-07-26 22:19:04'),
(5, 'Breakfast & Instant Food', 'category-8075.jpg', '2023-07-26 22:19:30', '2023-07-26 22:19:30', '2023-07-26 22:19:30'),
(6, 'Sweet Tooth', 'category-3770.jpg', '2023-07-26 22:20:09', '2023-07-26 22:20:09', '2023-07-26 22:20:09'),
(7, 'Bakery & Biscuits', 'category-3606.jpg', '2023-07-26 22:20:36', '2023-07-26 22:20:36', '2023-07-26 22:20:36'),
(8, 'Tea, Coffee & Health Drink ', 'category-9636.jpg', '2023-07-26 22:21:04', '2023-07-26 22:21:04', '2023-07-26 22:21:04'),
(9, 'Atta, Rice & Dal', 'category-7604.jpg', '2023-07-26 22:21:26', '2023-07-26 22:21:26', '2023-07-26 22:21:26'),
(10, 'Masala, Oil & More ', 'category-8613.jpg', '2023-07-26 22:21:48', '2023-07-26 22:21:48', '2023-07-26 22:21:48'),
(11, 'Sauces & Spreads', 'category-1199.jpg', '2023-07-26 22:22:07', '2023-07-26 22:22:07', '2023-07-26 22:22:07'),
(12, 'Chicken, Meat & Fish ', 'category-7661.jpg', '2023-07-26 22:22:43', '2023-07-26 22:22:43', '2023-07-26 22:22:43'),
(13, 'Organic & Healthy Living', 'category-7798.jpg', '2023-07-26 22:23:51', '2023-07-26 22:23:51', '2023-07-26 22:23:51'),
(14, 'Baby Care', 'category-4848.jpg', '2023-07-26 22:24:12', '2023-07-26 22:24:12', '2023-07-26 22:24:12'),
(15, 'Pharma & Wellness', 'category-8297.jpg', '2023-07-26 22:24:32', '2023-07-26 22:24:32', '2023-07-26 22:24:32'),
(16, 'Clening Essentials', 'category-8615.jpg', '2023-07-26 22:24:52', '2023-07-26 22:24:52', '2023-07-26 22:24:52'),
(17, 'Home & Office ', 'category-6803.jpg', '2023-07-26 22:25:12', '2023-07-26 22:25:12', '2023-07-26 22:25:12'),
(18, 'Personal Care', 'category-1674.jpg', '2023-07-26 22:25:34', '2023-07-26 22:25:34', '2023-07-26 22:25:34'),
(19, 'Pet Care', 'category-2575.jpg', '2023-07-26 22:25:57', '2023-07-26 22:25:57', '2023-07-26 22:25:57'),
(20, 'Paan Corner', 'category-9307.jpg', '2023-07-26 22:42:37', '2023-08-28 21:58:15', '2023-07-26 22:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `subcat` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `productimg` varchar(2000) NOT NULL,
  `features` varchar(2000) NOT NULL,
  `description` varchar(500) NOT NULL,
  `disclaimer` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `subcat`, `product_name`, `price`, `unit`, `productimg`, `features`, `description`, `disclaimer`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 1, 'Amul Taaza Toned Fresh Milk', 27, '500 ml', 'product1-1437.jpg,product2-2595.jpg,product3-7055.jpg,product4-3306.jpg', '<h2>Key Features</h2>\r\n\r\n<p>Wholesome taste<br />\r\nHealthy and nutritious milk<br />\r\nRich in calcium</p>\r\n\r\n<h2>Ingredients</h2>\r\n\r\n<p>Milk</p>\r\n\r\n<h2>Unit</h2>\r\n\r\n<p>500 ml</p>\r\n\r\n<h2>Packaging Type</h2>\r\n\r\n<p>Polypack</p>\r\n\r\n<h2>Shelf Life</h2>\r\n\r\n<p>2 days</p>\r\n\r\n<h2>FSSAI License</h2>\r\n\r\n<p>1001202100007</p>\r\n\r\n<h2>Country Of Origin</h2>\r\n\r\n<p>India</p>\r\n\r\n<h2>Customer Care Details</h2>\r\n\r\n<p>Email: info@blinkit.com</p>\r\n\r\n<h2>Return Policy</h2>\r\n\r\n<p>The product is non-returnable. For a damaged, defective, expired or incorrect item, you can request a replacement within 24 hours of delivery.<br />\r\nIn case of an incorrect item, you may raise a replacement or return request only if the item is sealed/ unopened/ unused and in original condition.</p>\r\n\r\n<h2>Expiry Date</h2>\r\n\r\n<p>Please refer to the packaging of the product for expiry date.</p>\r\n\r\n<h2>Seller</h2>\r\n\r\n<p>TAMS GLOBAL PRIVATE LIMITED</p>\r\n\r\n<h2>Seller FSSAI</h2>\r\n\r\n<p>13323999000106</p>\r\n', 'Amul Taaza Toned Milk (Polypack) is pasteurized with a great nutritional value. It can be consumed directly or can be used for preparing tea, coffee, sweets, khoya, curd, buttermilk, ghee etc.', 'Every effort is made to maintain the accuracy of all information. However, actual product packaging and materials may contain more and/or different information. It is recommended not to solely rely on the information presented.', 1, '2023-07-28 13:15:26', '2023-07-28 23:22:39', '2023-07-28 13:15:26'),
(2, '1', 1, 'Amul Gold Milk', 78, '1 l', 'product1-7371.jpg,product2-4214.jpg,product3-9497.jpg,product4-6920.jpg,product5-6869.jpg,product6-1705.jpg', '<h2>Key Features</h2>\r\n\r\n<p>Wholesome taste<br />\r\nUHT treated milk<br />\r\nRich in calcium<br />\r\nHealthy and nutritious milk</p>\r\n\r\n<h2>Ingredients</h2>\r\n\r\n<p>Standardised Milk, Milk Fat, Milk SNF</p>\r\n\r\n<h2>Unit</h2>\r\n\r\n<p>1 l</p>\r\n\r\n<h2>Packaging Type</h2>\r\n\r\n<p>Tetra Pak</p>\r\n\r\n<h2>Shelf Life</h2>\r\n\r\n<p>6 months</p>\r\n\r\n<h2>Manufacturer Details</h2>\r\n\r\n<p>Kaira District Co-operative Milk Producers&#39; Union Limited, Anand 388 001. At Food Complex Mogar, Mogar. Lic. No. - 10014021001010.</p>\r\n\r\n<h2>FSSAI License</h2>\r\n\r\n<p>10012021000071</p>\r\n\r\n<h2>Country Of Origin</h2>\r\n\r\n<p>India</p>\r\n\r\n<h2>Customer Care Details</h2>\r\n\r\n<p>Email: info@blinkit.com</p>\r\n\r\n<h2>Return Policy</h2>\r\n\r\n<p>This Item is non-returnable. For a damaged, defective, incorrect or expired item, you can request a replacement within 72 hours of delivery.<br />\r\nIn case of an incorrect item, you may raise a replacement or return request only if the item is sealed/ unopened/ unused and in original condition.</p>\r\n\r\n<h2>Expiry Date</h2>\r\n\r\n<p>Please refer to the packaging of the product for expiry date.</p>\r\n\r\n<h2>Seller</h2>\r\n\r\n<p>TAMS GLOBAL PRIVATE LIMITED</p>\r\n\r\n<h2>Seller FSSAI</h2>\r\n\r\n<p>13323999000106</p>\r\n', 'Pasteurised in state-of-the-art processing plants,Amul Gold Milk (Tetra Pak) is very rich and creamy in texture. It is ideal for preparing tea, coffee, sweets, khoya, curd, buttermilk, ghee etc.', 'Every effort is made to maintain accuracy of all information. However, actual product packaging and materials may contain more and/or different information. It is recommended not to solely rely on the information presented.', 1, '2023-07-28 22:47:46', '2023-07-28 22:47:46', '2023-07-28 22:47:46'),
(3, '1', 2, 'Harvest Gold Hearty Brown Bread', 45, '400 g', 'product1-6062.jpg,product2-5775.jpg,product3-2396.jpg,product4-5815.jpg,product5-7233.jpg,product6-1079.jpg,product7-8055.jpg', '<h2>Key Features</h2>\r\n\r\n<p>Rich in minerals, fibres and vitamins<br />\r\nWith the goodness of whole wheat flour</p>\r\n\r\n<h2>Ingredients</h2>\r\n\r\n<p>Whole Wheat Flour (Wheat Atta) (53%), Sugar, Wheat Protein (Gluten), Yeast, Malt Product, Spices &amp; Condiments, Salt, Edible Refined, Vegetable Oil, Soya Flour, Class ii preservatives(E282), Permitted emulsifier[E282], Permitted emulsifier[E4819(i)], Acidity regulator(E 260], Antioxidant(E300)</p>\r\n\r\n<h2>Unit</h2>\r\n\r\n<p>400 g</p>\r\n\r\n<h2>Shelf Life</h2>\r\n\r\n<p>5 days</p>\r\n\r\n<h2>Manufacturer Details</h2>\r\n\r\n<p>Ready Roti India Pvt. Ltd., RZ-167(1), A-Block, Road No.4, Mahipalpur Extension, Delhi-110037</p>\r\n\r\n<h2>Marketed By</h2>\r\n\r\n<p>Ready Roti India Pvt. Ltd., RZ-167(1), A-Block, Road No.4, Mahipalpur Extension, Delhi-110037</p>\r\n\r\n<h2>FSSAI License</h2>\r\n\r\n<p>10013013000537</p>\r\n\r\n<h2>Country Of Origin</h2>\r\n\r\n<p>India</p>\r\n\r\n<h2>Customer Care Details</h2>\r\n\r\n<p>Email: info@blinkit.com</p>\r\n\r\n<h2>Expiry Date</h2>\r\n\r\n<p>Please refer to the packaging of the product for expiry date.</p>\r\n\r\n<h2>Seller</h2>\r\n\r\n<p>TAMS GLOBAL PRIVATE LIMITED</p>\r\n\r\n<h2>Seller FSSAI</h2>\r\n\r\n<p>13323999000106</p>\r\n', 'Kick start your day with Harvest Gold Brown Bread. Enriched with the minerals, fibres and vitamins and goodness of whole wheat flour. Pave your way towards a healthy life with a hearty breakfast.', 'Every effort is made to maintain accuracy of all information. However, actual product packaging and materials may contain more and/or different information. It is recommended not to solely rely on the information presented.', 1, '2023-07-29 20:41:39', '2023-07-29 20:41:39', '2023-07-29 20:41:39'),
(4, '2', 6, 'Kiran Watermelon', 171, '1 piece (2 kg - 3 kg)', 'product1-1111.jpg,product2-2179.jpg,product3-1366.jpg,product4-8312.jpg', '<h2>Nutrient Value &amp; Benefits</h2>\r\n\r\n<p>Rich in water content, Contans Carotinoids, Amino acid. Watermelon has several health benefits improves insulin sensitivity and reduced muscle soreness, Keeps yuo hydrated.</p>\r\n\r\n<h2>Storage Tips</h2>\r\n\r\n<p>It can be stored at room temperature but should be refrigerated after cutting.</p>\r\n\r\n<h2>Storage Temperature (DegC)</h2>\r\n\r\n<p>10-15</p>\r\n\r\n<h2>Unit</h2>\r\n\r\n<p>1 piece (2 kg - 3 kg)</p>\r\n\r\n<h2>Ingredients</h2>\r\n\r\n<p>Kiran Watermelon</p>\r\n\r\n<h2>Shelf Life</h2>\r\n\r\n<p>Please refer product packaging for expiry.</p>\r\n\r\n<h2>FSSAI License</h2>\r\n\r\n<p>13621034000190,10019047001269,Udyam-TS-02</p>\r\n\r\n<h2>Country Of Origin</h2>\r\n\r\n<p>India</p>\r\n\r\n<h2>Customer Care Details</h2>\r\n\r\n<p>Email: info@blinkit.com</p>\r\n\r\n<h2>Expiry Date</h2>\r\n\r\n<p>Please refer to the packaging of the product for expiry date.</p>\r\n\r\n<h2>Seller</h2>\r\n\r\n<p>TAMS GLOBAL PRIVATE LIMITED</p>\r\n\r\n<h2>Seller FSSAI</h2>\r\n\r\n<p>13323999000106</p>\r\n', 'Kiran watermelon has a vibrant pink to red flesh with dark brown-black seeds. Its juicy flesh is sweet and it offers a slightly grainy texture. They can be just cut into cubes, or used to make beverages, syrups, soups and frozen desserts.', 'The image shown is a representation and may slightly vary from the actual product. Every effort is made to maintain the accuracy of all information displayed.', 1, '2023-07-30 21:34:21', '2023-07-30 21:38:46', '2023-07-30 21:34:21'),
(5, '2', 6, 'Pomegranate', 197, '4 pieces (720 g - 800 g)', 'product1-8418.jpg,product2-8681.jpg,product3-8170.jpg,product4-6505.jpg', '<h2>Nutrient Value &amp; Benefits</h2>\r\n\r\n<p>Contains Vitamin C, Folic acid, Vitamin D, Vitamin K, Amnio acid.Pomegranate has anti-oxidant, anti-viral and anti-tumor properties.</p>\r\n\r\n<h2>Unit</h2>\r\n\r\n<p>4 pieces (720 g - 800 g)</p>\r\n\r\n<h2>Ingredients</h2>\r\n\r\n<p>POMEGRANATE</p>\r\n\r\n<h2>Shelf Life</h2>\r\n\r\n<p>Please refer product packaging for expiry.</p>\r\n\r\n<h2>FSSAI License</h2>\r\n\r\n<p>13621034000190,10019047001269,Udyam-TS-02</p>\r\n\r\n<h2>Country Of Origin</h2>\r\n\r\n<p>India</p>\r\n\r\n<h2>Customer Care Details</h2>\r\n\r\n<p>Email: info@blinkit.com</p>\r\n\r\n<h2>Return Policy</h2>\r\n\r\n<p>The product is non-returnable. For a damaged, defective, expired or incorrect item, you can request a replacement within 24 hours of delivery.<br />\r\nIn case of an incorrect item, you may raise a replacement or return request only if the item is sealed/ unopened/ unused and in original condition.</p>\r\n\r\n<h2>Expiry Date</h2>\r\n\r\n<p>Please refer to the packaging of the product for expiry date.</p>\r\n\r\n<h2>Seller</h2>\r\n\r\n<p>TAMS GLOBAL PRIVATE LIMITED</p>\r\n\r\n<h2>Seller FSSAI</h2>\r\n\r\n<p>13323999000106</p>\r\n', 'Pomegranate, the rich juicy fruit is known to be one of the healthiest fruits. The inside of the fruit contains hundreds of juicy and edible seeds. Pomegranate seeds can either be eaten as is or be processed into pomegranate juice', 'Every effort is made to maintain the accuracy of all information. However, actual product packaging and materials may contain more and/or different information. It is recommended not to solely rely on the information presented.', 1, '2023-07-30 21:44:45', '2023-07-30 21:44:45', '2023-07-30 21:44:45'),
(6, '2', 7, 'Valencia Orange', 123, '3 pieces (550 g - 650 g)', 'product1-2943.jpg,product2-8538.jpg,product3-2006.jpg,product4-1362.jpg,product5-2961.jpg', '<h2>Shelf Life</h2>\r\n\r\n<p>Please refer product packaging for expiry.</p>\r\n\r\n<h2>FSSAI License</h2>\r\n\r\n<p>13621034000190,10019047001269,Udyam-TS-02</p>\r\n\r\n<h2>Country Of Origin</h2>\r\n\r\n<p>Spain</p>\r\n\r\n<h2>Customer Care Details</h2>\r\n\r\n<p>Email: info@blinkit.com</p>\r\n\r\n<h2>Return Policy</h2>\r\n\r\n<p>The product is non-returnable. For a damaged, defective, expired or incorrect item, you can request a replacement within 24 hours of delivery.<br />\r\nIn case of an incorrect item, you may raise a replacement or return request only if the item is sealed/ unopened/ unused and in original condition.</p>\r\n\r\n<h2>Expiry Date</h2>\r\n\r\n<p>Please refer to the packaging of the product for expiry date.</p>\r\n\r\n<h2>Seller</h2>\r\n\r\n<p>TAMS GLOBAL PRIVATE LIMITED</p>\r\n\r\n<h2>Seller FSSAI</h2>\r\n\r\n<p>13323999000106</p>\r\n\r\n<h2>Nutrient Value &amp; Benefits</h2>\r\n\r\n<p>Enriched with vitamin C, folate, soluble fibre and anti-oxidants, Imported Orange strengthens the immune system, regulates blood sugar, increases metabolism and is good for hair and skin.</p>\r\n\r\n<h2>Storage Tips</h2>\r\n\r\n<p>To maintain freshness, wrap in a plastic bag and store in the refrigerator or in a cool dry place.</p>\r\n\r\n<h2>Storage Temperature (DegC)</h2>\r\n\r\n<p>4-7</p>\r\n\r\n<h2>Unit</h2>\r\n\r\n<p>3 units (550 g - 650 g)</p>\r\n', 'Every effort is made to maintain the accuracy of all information. However, actual product packaging and materials may contain more and/or different information. It is recommended not to solely rely on the information presented.', 'Delicious and juicy, Imported Orange is a great addition to fruit salads. It is also used in the preparation of desserts, jellies, jams and baked goods.', 1, '2023-07-30 21:49:46', '2023-07-30 21:49:46', '2023-07-30 21:49:46'),
(7, '1', 3, 'Table White Eggs (6 pieces)', 44, '6 pieces', 'product1-9259.jpg,product2-7643.jpg,product3-6268.jpg,product4-6951.jpg,product5-9692.jpg,product6-3646.jpg', '<h2>Key Features</h2>\r\n\r\n<p>No artificial colours.<br />\r\nRich in taste.<br />\r\nCow cheese.</p>\r\n\r\n<h2>Ingredients</h2>\r\n\r\n<p>Eggs</p>\r\n\r\n<h2>Unit</h2>\r\n\r\n<p>1 pack (6 pieces)</p>\r\n\r\n<h2>Nutrition Information</h2>\r\n\r\n<p>Nutritional Value per 100 g (3.5OZ)<br />\r\nCalories 150 Kcal<br />\r\nCarbohydrates 1.02 g<br />\r\nTotal Fat 10.86 g<br />\r\nProtein 12.48 g<br />\r\nCaIciurn 74 mg<br />\r\nIron 1.8 mg<br />\r\nPhosphorus 240 mg</p>\r\n\r\n<h2>Shelf Life</h2>\r\n\r\n<p>21 days</p>\r\n\r\n<h2>Manufacturer Details</h2>\r\n\r\n<p>Tanuj Roshi Poultry Farm, Kakkar Majra, Tehsil Naraingarh, Distt. Ambala, Haryana-134203</p>\r\n\r\n<h2>Marketed By</h2>\r\n\r\n<p>Tanuj Roshi Poultry Farm, Kakkar Majra, Tehsil Naraingarh, Distt. Ambala, Haryana-134203</p>\r\n\r\n<h2>FSSAI License</h2>\r\n\r\n<p>10814001000505</p>\r\n\r\n<h2>Country Of Origin</h2>\r\n\r\n<p>India</p>\r\n\r\n<h2>Customer Care Details</h2>\r\n\r\n<p>Email: info@blinkit.com</p>\r\n\r\n<h2>Return Policy</h2>\r\n\r\n<p>This Item is non-returnable. For a damaged, defective, incorrect or expired item, you can request a replacement within 72 hours of delivery.<br />\r\nIn case of an incorrect item, you may raise a replacement or return request only if the item is sealed/ unopened/ unused and in original condition.</p>\r\n\r\n<h2>Expiry Date</h2>\r\n\r\n<p>Please refer to the packaging of the product for expiry date.</p>\r\n\r\n<h2>Seller</h2>\r\n\r\n<p>TAMS GLOBAL PRIVATE LIMITED</p>\r\n\r\n<h2>Seller FSSAI</h2>\r\n\r\n<p>13323999000106</p>\r\n', 'Quantity variations from the weight may occur, caused by loss or gain of moisture during the course of good distribution practices or by unavoidable reasons.', 'Quantity variations from the weight may occur, caused by loss or gain of moisture during the course of good distribution practices or by unavoidable reasons.', 1, '2023-07-30 21:57:51', '2023-07-30 21:59:17', '2023-07-30 21:57:51'),
(8, '1', 4, 'Kellogg\'s Chocos Cereal', 64, '7 units', 'product1-6681.jpg,product2-7832.jpg,product3-9871.jpg,product4-4283.jpg,product5-8086.jpg,product6-1532.jpg,product7-5927.jpg', '<h2>Key Features</h2>\r\n\r\n<p>Made with whole grain wheat.<br />\r\nScrumptious breakfast cereal.<br />\r\nYummy chocolaty taste .<br />\r\nHealthy and nourishing meal.<br />\r\nPerfect to kick start the day.</p>\r\n\r\n<h2>Unit</h2>\r\n\r\n<p>7 units</p>\r\n\r\n<h2>Packaging Type</h2>\r\n\r\n<p>Variety Pack</p>\r\n\r\n<h2>Box Contents</h2>\r\n\r\n<p>Net Contents: 7 units<br />\r\nKellogg&#39;s Chocos - 3 unit<br />\r\nKellogg&#39;s Chocos Moons &amp; Stars - 1 unit<br />\r\nKellogg&#39;s Chocos Crunchy Bites - 1 unit<br />\r\nKellogg&#39;s Chocos Duet - 1 unit<br />\r\nKellogg&#39;s Chocos Chhota laddoo - 1 unit</p>\r\n\r\n<h2>Shelf Life</h2>\r\n\r\n<p>8 months</p>\r\n\r\n<h2>Manufacturer Details</h2>\r\n\r\n<p>Kelloggs India Pvt Ltd, Plot No. L2 &amp; L3, Taloja MIDC, Dist. Rajgad, Maharashtra - 410208</p>\r\n\r\n<h2>Marketed By</h2>\r\n\r\n<p>Kelloggs India Pvt Ltd, Plot No. L2 &amp; L3, Taloja MIDC, Dist. Rajgad, Maharashtra - 410208</p>\r\n\r\n<h2>FSSAI License</h2>\r\n\r\n<p>10013022002031<br />\r\n10014044000876</p>\r\n\r\n<h2>Country Of Origin</h2>\r\n\r\n<p>India</p>\r\n\r\n<h2>Customer Care Details</h2>\r\n\r\n<p>Email: info@blinkit.com</p>\r\n\r\n<h2>Return Policy</h2>\r\n\r\n<p>This Item is non-returnable. For a damaged, defective, incorrect or expired item, you can request a replacement within 72 hours of delivery.<br />\r\nIn case of an incorrect item, you may raise a replacement or return request only if the item is sealed/ unopened/ unused and in original condition.</p>\r\n\r\n<h2>Expiry Date</h2>\r\n\r\n<p>Please refer to the packaging of the product for expiry date.</p>\r\n\r\n<h2>Seller</h2>\r\n\r\n<p>SUPERWELL COMTRADE PRIVATE LIMITED</p>\r\n\r\n<h2>Seller FSSAI</h2>\r\n\r\n<p>13323999000038</p>\r\n', 'Every effort is made to maintain the accuracy of all information. However, actual product packaging and materials may contain more and/or different information. It is recommended not to solely rely on the information presented.', 'Every effort is made to maintain the accuracy of all information. However, actual product packaging and materials may contain more and/or different information. It is recommended not to solely rely on the information presented.', 1, '2023-07-30 22:05:49', '2023-07-30 22:05:49', '2023-07-30 22:05:49'),
(9, '1', 5, 'Yoga Bar Choco Almond And Cranberry Muesli', 277, '350 g', 'product1-2602.jpg,product2-6128.jpg,product3-9943.jpg,product4-6782.jpg,product5-2610.jpg,product6-3256.jpg,product7-7193.jpg', '<h2>Key Features</h2>\r\n\r\n<p>High protein<br />\r\nProbiotics<br />\r\n100% Wholegrain<br />\r\n21 g Protein per serve<br />\r\nGulten-free</p>\r\n\r\n<h2>Ingredients</h2>\r\n\r\n<p>Whole Grains 48% (Rolled Oats, Brown Rice Flakes, Quinoa Flakes), Protein Blend (Soy And Whey Protein Isolate), Dehydrated Fruits, Nuts And Seeds 17% (Dates, Cranberry, Raisins, Almonds, Pumpkin And Chia Seeds), Dark Chocolate (Cocoa, Cocoa Butter, Sugar, Sunflower Lecithin), Jaggery, Rice Bran Oil, Probiotics (Bacillus Coagulans SNZ1969, 150 million CFU Per Serve).</p>\r\n\r\n<h2>Unit</h2>\r\n\r\n<p>350 g</p>\r\n\r\n<h2>Packaging Type</h2>\r\n\r\n<p>Box</p>\r\n\r\n<h2>Storage Tips</h2>\r\n\r\n<p>Transfer to an air tight container and store in a cool, dry place and away from sunlight to maintain its freshness and wholesomeness. Keep away from moisture to avoid risk of infestation.</p>\r\n\r\n<h2>Usage</h2>\r\n\r\n<p>Ready to eat.</p>\r\n\r\n<h2>Nutrition Information</h2>\r\n\r\n<p>Average Nutritional Value As Per 100g - Energy 429kcal, Protein 27g, Total Fat 11g, Sat Fat 4.5g, MUFA 4.3g, PUFA 2.7g, Omega-3 0.3g, Carbohydrates 54g, Added Sugar 9.5g, Total Sugar 16g, Dietary Fibre 6g, Sodium 245mg, Iron 8mg.</p>\r\n\r\n<h2>Shelf Life</h2>\r\n\r\n<p>6 months</p>\r\n\r\n<h2>Manufacturer Details</h2>\r\n\r\n<p>SproutLife Foods Private Ltd., No 4426/115/2B, Ground Floor K.R.Thimmaiah Estate, Kengeri, Mysore Road, Bangalore 560060, Karnataka, India.</p>\r\n\r\n<h2>Marketed By</h2>\r\n\r\n<p>SproutLife Foods Private Ltd., No 4426/115/28, Ground Floor K.R.Thimmaiah Estate, Kengeri, Mysore Road, Bangalore 560060, Karnataka, India.</p>\r\n\r\n<h2>FSSAI License</h2>\r\n\r\n<p>10020043003030</p>\r\n\r\n<h2>Country Of Origin</h2>\r\n\r\n<p>India</p>\r\n\r\n<h2>Customer Care Details</h2>\r\n\r\n<p>Email: info@blinkit.com</p>\r\n\r\n<h2>Return Policy</h2>\r\n\r\n<p>This Item is non-returnable. For a damaged, defective, incorrect or expired item, you can request a replacement within 72 hours of delivery.<br />\r\nIn case of an incorrect item, you may raise a replacement or return request only if the item is sealed/ u', 'The highest protein per serve, this Muesli provides you with 40% of your Daily Protein Needs. We have added a premium Protein Mix consisting of Whey Protein & Probiotics which boosts protein absorption and improves gut health.', 'Every effort is made to maintain accuracy of all information. However, actual product packaging and materials may contain more and/or different information. It is recommended not to solely rely on the information presented.', 1, '2023-07-30 22:13:07', '2023-07-30 22:13:07', '2023-07-30 22:13:07'),
(10, '1', 2, 'Harvest Gold Atta Burger Bun', 40, '200 g', 'product1-5222.jpg,product2-8746.jpg,product3-7225.jpg,product4-1639.jpg,product5-7268.jpg,product6-3945.jpg,product7-1106.jpg', '<h2>Key Features</h2>\r\n\r\n<p>Made from whole wheat<br />\r\nHealthy and Tasty<br />\r\nHigh in Fiber<br />\r\nPerfect to have anytime of the day</p>\r\n\r\n<h2>Unit</h2>\r\n\r\n<p>200 g</p>\r\n\r\n<h2>Shelf Life</h2>\r\n\r\n<p>5 days</p>\r\n\r\n<h2>Manufacturer Details</h2>\r\n\r\n<p>Ready Roti India Pvt. Ltd., RZ-167(1), A-Block, Road No.4, Mahipalpur Extension, Delhi-110037</p>\r\n\r\n<h2>Marketed By</h2>\r\n\r\n<p>Ready Roti India Pvt. Ltd., RZ-167(1), A-Block, Road No.4, Mahipalpur Extension, Delhi-110037</p>\r\n\r\n<h2>FSSAI License</h2>\r\n\r\n<p>10013013000537</p>\r\n\r\n<h2>Country Of Origin</h2>\r\n\r\n<p>India</p>\r\n\r\n<h2>Customer Care Details</h2>\r\n\r\n<p>Email: info@blinkit.com</p>\r\n\r\n<h2>Expiry Date</h2>\r\n\r\n<p>Please refer to the packaging of the product for expiry date.</p>\r\n\r\n<h2>Seller</h2>\r\n\r\n<p>TAMS GLOBAL PRIVATE LIMITED</p>\r\n\r\n<h2>Seller FSSAI</h2>\r\n\r\n<p>13323999000106</p>\r\n', 'High fiber cereals, contains potassium bromate and potassium iodate, these Atta Burger buns made from whole wheat are healthier, goodness of wheat and rich taste', 'Every effort is made to maintain the accuracy of all information. However, actual product packaging and materials may contain more and/or different information. It is recommended not to solely rely on the information presented.', 1, '2023-07-30 22:58:06', '2023-08-30 12:21:02', '2023-07-30 22:58:06'),
(11, '2', 9, 'Curry Leaves', 20, '100 g', 'product1-4749.jpg,product2-7270.jpg,product3-8525.jpg,product4-9251.jpg', '<h2>Nutrient Value &amp; Benefits</h2>\r\n\r\n<p>Contains Folic Acid, Vitamin K, Carotinoids.</p>\r\n\r\n<h2>Storage Tips</h2>\r\n\r\n<p>Store in an airtight container in a cool, dry place.</p>\r\n\r\n<h2>Storage Temperature (DegC)</h2>\r\n\r\n<p>5-10</p>\r\n\r\n<h2>Unit</h2>\r\n\r\n<p>100 g</p>\r\n\r\n<h2>Shelf Life</h2>\r\n\r\n<p>Please refer product packaging for expiry.</p>\r\n\r\n<h2>FSSAI License</h2>\r\n\r\n<p>13621034000190,10019047001269,Udyam-TS-02</p>\r\n\r\n<h2>Country Of Origin</h2>\r\n\r\n<p>India</p>\r\n\r\n<h2>Customer Care Details</h2>\r\n\r\n<p>Email: info@blinkit.com</p>\r\n\r\n<h2>Return Policy</h2>\r\n\r\n<p>The product is non-returnable. For a damaged, defective, expired or incorrect item, you can request a replacement within 24 hours of delivery.<br />\r\nIn case of an incorrect item, you may raise a replacement or return request only if the item is sealed/ unopened/ unused and in original condition.</p>\r\n\r\n<h2>Expiry Date</h2>\r\n\r\n<p>Please refer to the packaging of the product for expiry date.</p>\r\n\r\n<h2>Seller</h2>\r\n\r\n<p>TAMS GLOBAL PRIVATE LIMITED</p>\r\n\r\n<h2>Seller FSSAI</h2>\r\n\r\n<p>13323999000106</p>\r\n', 'Curry Leaves commonly called as Kadhi Patta, are highly aromatic and have a unique flavor with notes of citrus. They\'re used in cooking to add flavor to dishes, such as curries, rice dishes, and dals. Fresh or dried curry leaves are used whole, crushed, and chopped.', 'Every effort is made to maintain the accuracy of all information. However, actual product packaging and materials may contain more and/or different information. It is recommended not to solely rely on the information presented.', 1, '2023-07-31 21:42:43', '2023-07-31 21:43:17', '2023-07-31 21:42:43'),
(12, '2', 10, 'Desi Tomato', 134, '500 g', 'product1-9440.jpg,product2-4286.jpg,product3-2996.jpg,product4-8633.jpg', '<h2>Unit</h2>\r\n\r\n<p>500 g</p>\r\n\r\n<h2>Shelf Life</h2>\r\n\r\n<p>2 days</p>\r\n\r\n<h2>Country Of Origin</h2>\r\n\r\n<p>India</p>\r\n\r\n<h2>Customer Care Details</h2>\r\n\r\n<p>Email: info@blinkit.com</p>\r\n\r\n<h2>Seller</h2>\r\n\r\n<p>TAMS GLOBAL PRIVATE LIMITED</p>\r\n\r\n<h2>Seller FSSAI</h2>\r\n\r\n<p>13323999000106</p>\r\n', 'Tomatoes are a significant source of umami flavor.The tomato is consumed in diverse ways, raw or cooked, in many dishes, sauces, salads, and drinks. While tomatoes are fruits—botanically classified as berries—they are commonly used culinarily as a vegetable ingredient or side dish.', 'Every effort is made to maintain the accuracy of all information. However, actual product packaging and materials may contain more and/or different information. It is recommended not to solely rely on the information presented.', 1, '2023-08-04 14:22:34', '2023-08-04 14:22:34', '2023-08-04 14:22:34'),
(13, '2', 10, 'Beetroot - Organically grown', 15, '250 g', 'product1-9970.jpg,product2-9227.jpg,product3-5407.jpg,product4-5755.jpg', '<h2>Unit</h2>\r\n\r\n<p>250 g</p>\r\n\r\n<h2>Shelf Life</h2>\r\n\r\n<p>Please refer product packaging for expiry.</p>\r\n\r\n<h2>FSSAI License</h2>\r\n\r\n<p>13621034000190,10019047001269,Udyam-TS-02</p>\r\n\r\n<h2>Country Of Origin</h2>\r\n\r\n<p>India</p>\r\n\r\n<h2>Customer Care Details</h2>\r\n\r\n<p>Email: info@blinkit.com</p>\r\n\r\n<h2>Return Policy</h2>\r\n\r\n<p>The product is non-returnable. For a damaged, defective, expired or incorrect item, you can request a replacement within 24 hours of delivery.<br />\r\nIn case of an incorrect item, you may raise a replacement or return request only if the item is sealed/ unopened/ unused and in original condition.</p>\r\n\r\n<h2>Expiry Date</h2>\r\n\r\n<p>Please refer to the packaging of the product for expiry date.</p>\r\n\r\n<h2>Seller</h2>\r\n\r\n<p>TAMS GLOBAL PRIVATE LIMITED</p>\r\n\r\n<h2>Seller FSSAI</h2>\r\n\r\n<p>13323999000106</p>\r\n', 'Packed with essential nutrients, beetroots are a great source of fiber, folate (vitamin B9), manganese, potassium, iron, and vitamin C. Beetroots and beetroot juice have been associated with numerous health benefits, including improved blood flow, lower blood pressure, and increased exercise performance.', 'Image shown is a representation and may slightly vary from the actual product. Every effort is made to maintain accuracy of all information displayed.', 1, '2023-08-04 14:26:19', '2023-08-04 14:26:19', '2023-08-04 14:26:19'),
(14, '2', 9, 'Iceberg Lettuce', 89, '250 g', 'product1-3770.jpg,product2-1274.jpg,product3-7721.jpg,product4-5694.jpg', '<h2>Shelf Life</h2>\r\n\r\n<p>Please refer product packaging for expiry.</p>\r\n\r\n<h2>FSSAI License</h2>\r\n\r\n<p>13621034000190,10019047001269,Udyam-TS</p>\r\n\r\n<h2>Country Of Origin</h2>\r\n\r\n<p>India</p>\r\n\r\n<h2>Customer Care Details</h2>\r\n\r\n<p>Email: info@blinkit.com</p>\r\n\r\n<h2>Return Policy</h2>\r\n\r\n<p>The product is non-returnable. For a damaged, defective, expired or incorrect item, you can request a replacement within 24 hours of delivery.<br />\r\nIn case of an incorrect item, you may raise a replacement or return request only if the item is sealed/ unopened/ unused and in original condition.</p>\r\n\r\n<h2>Expiry Date</h2>\r\n\r\n<p>Please refer to the packaging of the product for expiry date.</p>\r\n\r\n<h2>Seller</h2>\r\n\r\n<p>TAMS GLOBAL PRIVATE LIMITED</p>\r\n\r\n<h2>Seller FSSAI</h2>\r\n\r\n<p>13323999000106</p>\r\n\r\n<h2>Nutrient Value &amp; Benefits</h2>\r\n\r\n<p>Iceberg lettuce is a great bridge food for people who don&rsquo;t eat enough other vegetables. To name a few of many benefits:<br />\r\n&bull; It is packed with Vitamin A, Vitamin K, and folate. Iceberg lettuce can offer a range of important health benefits for you and your family.<br />\r\n&bull; Iceberg lettuce is packed with Vitamin K, which has been shown to help with blood clotting.<br />\r\n&bull; Some other benefits are Support Eye Health, Help Fetal Development</p>\r\n\r\n<h2>Unit</h2>\r\n\r\n<p>250 g</p>\r\n\r\n<h2>How To Cook</h2>\r\n\r\n<p>First, cut off the base of the lettuce bulb, which is too hard to eat. After that, lettuce chops easily with a knife. Use iceberg lettuce to add a refreshing crunch to these foods:<br />\r\n&bull; Tacos<br />\r\n&bull; Burgers<br />\r\n&bull; Sandwiches<br />\r\n&bull; Wraps<br />\r\n&bull; Pasta salad</p>\r\n', 'Image shown is a representation and may slightly vary from the actual product. Every effort is made to maintain accuracy of all information displayed.', 'Iceberg lettuce, also known as crisp-head lettuce, has pale green leaves and grows in cabbage-like bulbs. Iceberg lettuce is known for having a crisp, crunchy texture and a mildly sweet flavor. This makes it a favourite in many homes and restaurants, and with children who may not like more bitter greens.', 1, '2023-08-04 14:30:35', '2023-08-30 12:21:58', '2023-08-04 14:30:35');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` varchar(100) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `sub_image` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `sub_name`, `sub_image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'Milk', 'subcategory-7009.jpg', 1, '2023-07-28 12:37:54', '2023-07-28 12:37:54', '2023-07-28 12:37:54'),
(2, '1', 'Bread & Pav', 'subcategory-2171.jpg', 1, '2023-07-28 12:38:21', '2023-07-28 12:38:21', '2023-07-28 12:38:21'),
(3, '1', 'Eggs', 'subcategory-6456.jpg', 1, '2023-07-28 12:39:00', '2023-07-28 12:39:00', '2023-07-28 12:39:00'),
(4, '1', 'Flakes & Kids Cereals', 'subcategory-9458.jpg', 1, '2023-07-28 12:40:12', '2023-07-28 12:41:05', '2023-07-28 12:40:12'),
(5, '1', 'Muesli & Granola', 'subcategory-8419.jpg', 1, '2023-07-28 12:59:10', '2023-07-28 12:59:10', '2023-07-28 12:59:10'),
(6, '2', 'Fresh Fruits', 'subcategory-6585.jpg', 1, '2023-07-30 21:26:35', '2023-07-30 21:26:35', '2023-07-30 21:26:35'),
(7, '2', 'Exotics', 'subcategory-9598.jpg', 1, '2023-07-30 21:27:10', '2023-07-30 21:27:10', '2023-07-30 21:27:10'),
(8, '2', 'Freshly Cut & Sprouts', 'subcategory-2189.jpg', 1, '2023-07-30 21:27:52', '2023-07-30 21:27:52', '2023-07-30 21:27:52'),
(9, '2', 'Leafies & Herbs', 'subcategory-9163.jpg', 1, '2023-07-31 21:38:26', '2023-07-31 21:38:26', '2023-07-31 21:38:26'),
(10, '2', 'Certified Organic', 'subcategory-7115.jpg', 1, '2023-08-04 14:19:51', '2023-08-04 14:19:51', '2023-08-04 14:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pincode` bigint(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Email`, `State`, `City`, `Mobile`, `Address`, `Pincode`, `Password`, `Status`, `Type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Anjali', 'anjali@gmail.com', 'up', 'gzb', 7875867686, 'jawahar nagar loni', 201102, 'anjali', 1, 'admin', '2023-08-04 14:37:23', '2023-08-04 14:37:23', '2023-08-04 14:37:23'),
(2, 'Rimmi', 'rimmi@gmail.com', 'up', 'gzb', 7987996969, 'jawahar nagar loni', 201102, 'rimmi', 1, 'user', '2023-08-04 14:38:08', '2023-08-04 14:38:08', '2023-08-04 14:38:08'),
(3, 'Muskan', 'muskan@gmail.com', 'up', 'gzb', 6688996969, 'jawahar nagar loni', 201102, 'muskan', 1, 'user', '2023-08-27 15:57:49', '2023-08-27 15:57:49', '2023-08-27 15:57:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
