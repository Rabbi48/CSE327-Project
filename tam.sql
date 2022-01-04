-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 11:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tam`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `subtotal_price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `address` varchar(60) DEFAULT NULL,
  `phone_number` varchar(11) NOT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `address`, `phone_number`, `email`) VALUES
(1, 'Optimum Nutrition.', 'Square Centre 48 Mohakhali C/A, Dhaka 1212', '02-8833047', 'in23@square.com'),
(2, 'Whey Labs', '19 Dhanmondi, R/A Rd No. 7, Dhaka 1205', '02-58611001', 'info@bpl.net'),
(3, 'EVL Nutrition', '40 Shaheed Tajuddin Ahmed Ave, Dhaka 1208', '028891190', 'info@inceptapharma.com'),
(4, 'legion', 'Tejgaon Industrial Area, Dhaka-1208', '028878603', 'dggh'),
(5, 'body fortess', 'Khwaja Enayetpuri (R) Tower, 17 Green Rd, Dhaka 1205', '029662611', 'info@drug-international.com'),
(6, 'Muscle Milk', '89 Bir Uttam C.R. Datta Road, Dhaka 1205', '029632176', 'info@hpl.com.bd'),
(7, 'Garden of life', '22/1 Dhanmondi, Road 2,Dhaka 1205', '029660307', 'info@radiant.com.bd'),
(8, 'Millville', '30, Opsonin Building, New Eskaton Road, Dhaka 1000', '0248311900', 'info@opsonin.net'),
(9, 'Abott', 'Tanin center,03 Asad gate,mirpur road,mohammadpur,Dhaka-1207', '029119564', 'null'),
(10, 'BSN', 'Shaheed Tajuddin Ahmed Ave, Dhaka 1208', '01959995575', 'globeimd@globe-uro.com'),
(11, 'Quest Nutrition', 'Sadman Ahmed Ave, Dhaka 1208', '01959995575', 'globeimd@globe-uro.com'),
(12, 'Orgain', '12313233111', 'aasdasyydas', 'asdaseda@gmail.com'),
(13, 'Trader Darwin\'s', 'asdadasdasd', '12345678912', 'adasdas@gmail.com'),
(14, 'Dynamatize', 'sdasdasdasdasd', '12345678912', 'adasdas@gmail.com'),
(15, 'Designer whey', 'asdadasdasd', '12345678912', 'adasdas@gmail.com'),
(16, 'Uptimum quest', 'asdadasdasd', '12345678912', 'adasdas@gmail.com'),
(17, 'Pure Protein', 'asdadasdasd', '12345678912', 'adasdas@gmail.com'),
(18, 'Nutrition depot', 'asdadasdasd', '12345678912', 'adasdas@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `emp_id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `job` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`emp_id`, `username`, `password`, `job`) VALUES
(1, 'rabbi', 'rabbi123', 'manager'),
(2, 'rabib', 'rabib123', 'manager'),
(3, 'imran', 'imran123', 'salesman'),
(4, 'sadman', 'sadman123', 'salesman'),
(5, 'sonet', 'sonet123', 'salesman');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone_number` char(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `job` varchar(10) NOT NULL,
  `join_date` date NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `first_name`, `last_name`, `phone_number`, `dob`, `salary`, `job`, `join_date`, `email`, `address`) VALUES
(1, 'Fazle', 'Rabbi', '01898159711', '1998-05-14', 1000000, 'manager', '2022-01-01', 'asdasdaa123@gmail.com', 'adadadasdasdas'),
(2, 'Muhtasim', 'Rabib', '12345678912', '1998-05-04', 1000000, 'manager', '2021-01-01', 'asdasdasd@gmail.com', 'sdadasdasdas'),
(3, 'Shah', 'Imran', '12345678912', '1999-04-14', 1000000, 'salesman', '2022-01-01', 'asdasssdasd@gmail.com', 'asdadasdasd'),
(4, 'Sadman', 'Kabir', '12345678912', '1998-04-09', 1000000, 'salesman', '2022-01-01', 'asdad@gmail.com', 'asdasdasda');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `eid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`eid`) VALUES
(4);

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `orderitem_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal_price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`orderitem_id`, `order_id`, `emp_id`, `product_id`, `quantity`, `subtotal_price`) VALUES
(1, 1, 4, 1, 2, '2.00'),
(2, 2, 4, 3, 5, '100.00'),
(3, 3, 3, 3, 2, '9000.00'),
(4, 4, 3, 2, 1, '5460.00'),
(5, 5, 2, 3, 2, '9000.00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `total_price` decimal(6,2) NOT NULL,
  `customer_name` varchar(60) NOT NULL,
  `customer_phone` varchar(11) DEFAULT NULL,
  `payment_method` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `emp_id`, `order_date`, `total_price`, `customer_name`, `customer_phone`, `payment_method`) VALUES
(3, 3, '2022-01-04', '9000.00', 'Azfar', '01731160033', 'cash'),
(4, 3, '2022-01-04', '5460.00', 'sonet', '01731160022', 'cash'),
(5, 2, '2022-01-04', '9000.00', 'Azfar', '01731160033', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `generic_name` varchar(50) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `category` varchar(10) NOT NULL,
  `retail_price` decimal(6,2) NOT NULL,
  `purchase_price` decimal(6,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `stock_minimum` int(11) NOT NULL,
  `shelf_no` varchar(4) NOT NULL,
  `expiry_date` date NOT NULL,
  `otc` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `generic_name`, `company_name`, `category`, `retail_price`, `purchase_price`, `stock`, `stock_minimum`, `shelf_no`, `expiry_date`, `otc`) VALUES
(1, 'Soy Lecithin', 'Whey protein', 'Whey Labs', 'Tablet', '5800.00', '6000.00', 1000, 30, 'B2', '2022-11-30', 'yes'),
(2, 'Whey Protein Concentrate', 'Whey Protein', 'Whey Labs', 'Tablet', '5460.00', '600.00', 78, 20, 'A1', '2021-12-31', 'yes'),
(3, 'Sucralose', 'Whey Protein', 'Whey Labs', 'Powder', '4500.00', '6000.00', 21, 5, 'B2', '2022-09-30', 'yes'),
(4, 'Acesulfame Potassium', 'Whey Protein', 'Whey Labs', 'Powder', '5200.00', '6200.00', 65, 25, 'F1', '2022-01-31', 'no'),
(5, 'micro-nutrients', 'Microcrystalline Cellulose', 'EVL Nutrition', 'Capsule', '3110.00', '3500.00', 43, 15, 'D3', '2021-10-31', 'no'),
(6, 'micro-nutrients', 'Esomeprazole Magnesium Trihydrate', 'EVL Nutrition', 'tablets', '3245.00', '9999.99', 85, 20, 'C1', '2022-03-31', 'no'),
(7, 'whey isolate', 'Domperidone', 'legion', 'Tablet', '3.00', '2.55', 60, 20, 'A2', '2022-10-31', 'yes'),
(8, 'protein bars', 'Domperidone', 'Optimum nutrition', 'Tablet', '2310.00', '3000.00', 50, 15, 'B1', '2021-12-31', 'yes'),
(9, 'Chocolate Protein Powder', 'peanuts', 'body fortess', 'powder', '350.00', '480.00', 40, 10, 'I1', '2022-06-30', 'yes'),
(10, 'Vanilla Protein Shakes', 'Fexofenadine Hydrochloride', 'Muscle Milk', 'Creame', '3780.00', '4500.00', 40, 10, 'E2', '2022-07-31', 'no'),
(11, 'Chocolate Milkshake', 'Fexofenadine Hydrochloride', 'Garden of life ', 'Milk Shake', '1234.00', '2500.00', 35, 10, 'H1', '2021-12-31', 'no'),
(12, 'Chocolate whey protein blend', 'Losartan Potassium', 'Millville', 'Powder', '4789.00', '5000.00', 20, 30, 'C2', '2022-11-30', 'no'),
(13, 'Choclate Fudge', 'Losartan Potassium', 'Abott', 'powder', '800.00', '2350.00', 15, 20, 'H1', '2021-12-31', 'no'),
(14, 'Chocolate Milhshake', 'Losartan Potassium', 'BSN', 'Chocolate ', '250.00', '380.00', 20, 25, 'J2', '2022-09-30', 'no'),
(15, 'Raw Fit Protein Powder', 'Cefixime', 'Garden of Life', 'Powder', '4800.00', '5000.00', 100, 20, 'A2', '2022-12-01', 'No'),
(16, 'Vanilla Milkshake flavor', 'Aspirin', 'Quest Nutrition', 'Milk Shake', '2300.00', '2500.00', 150, 20, 'A1', '2022-05-25', 'Yes'),
(17, 'Organic protein plant based po', 'Ibuprofen', 'Orgain', 'Powder', '3400.00', '3500.00', 120, 20, 'E3', '2022-02-03', 'Yes'),
(19, 'Quest Protein Powder', 'Mirtazapine', 'Quest Nutrition', 'MilkShake', '345.00', '550.00', 50, 10, 'A2', '2022-12-01', 'No'),
(20, 'Complete Protein Powder', 'Mirtazapine', 'Trader Darwin\'s ', 'Vanilla Sh', '435.00', '650.00', 75, 15, 'D4', '2021-05-01', 'No'),
(21, 'Syntha-6', 'Caffeine', 'Dynamatize', 'Capsules', '450.00', '580.00', 100, 20, 'A3', '2022-12-01', 'Yes'),
(22, 'Whey Isolate ISO-1000', '2,3 di methyl pentanoic acid', 'Designer whey ', 'cookies', '2346.00', '3450.00', 75, 10, 'E2', '2022-02-03', 'Yes'),
(25, 'French Vanilla', 'Zinc Sulphate Monohydrate', 'Uptimum quest', 'steroid', '1200.00', '1350.00', 50, 20, 'A2', '2020-12-01', 'Yes'),
(26, 'Sorbic Whey ', 'Acitretin', 'Garden of Life', 'Capsule', '450.00', '500.00', 200, 20, 'Z2', '2022-12-01', 'Yes'),
(27, 'Protein Powder', 'Acitretin', 'Pure Protein', 'Cookies', '35.50', '30.00', 200, 20, 'Z2', '2023-12-01', 'Yes'),
(28, 'Deadlift Belt', 'Belt ', 'Nutrition depot', 'belt', '800.00', '900.00', 500, 20, 'Z2', '2023-12-01', 'Yes'),
(29, 'Dumbbell', 'Bell', 'Body Engineers', 'Heavy bell', '350.00', '450.00', 200, 20, 'Z2', '2023-12-11', 'Yes'),
(30, 'Muhtasim Rabib', 'The Boss', 'Athletic Metric', 'Best Categ', '9999.00', '9999.00', 9999, 9999, '9999', '2100-05-12', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `representatives`
--

CREATE TABLE `representatives` (
  `rep_id` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `phone_number` char(11) NOT NULL,
  `company_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `representatives`
--

INSERT INTO `representatives` (`rep_id`, `first_name`, `last_name`, `phone_number`, `company_name`) VALUES
(1, 'Abul', 'Kashem', '01743795642', 'Optimum Nutrition'),
(2, 'Din', 'Mohammad', '01815427953', 'Whey Labs'),
(3, 'Mithun', 'Das', '01534896248', 'EVL Nutrition'),
(4, 'Rahim', 'Ahamaed', '01634875236', 'legion'),
(5, 'Karim', 'Kour', '01516849762', 'body fortess'),
(6, 'Sakib', 'Khan', '01715214796', 'Muscle Milk'),
(7, 'Salman', 'Sha', '01912547892', 'Millville'),
(8, 'Rajni', 'Kant', '01714586235', 'Garden of life'),
(9, 'Jobair', 'Alam', '01534792587', 'Abott');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`orderitem_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `representatives`
--
ALTER TABLE `representatives`
  ADD PRIMARY KEY (`rep_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `orderitem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `representatives`
--
ALTER TABLE `representatives`
  MODIFY `rep_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
