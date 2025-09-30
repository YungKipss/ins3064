-- SQL file for PHP User Management System
-- Database: LoginReg
-- Table: table1

-- Create database
CREATE DATABASE IF NOT EXISTS `LoginReg` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `LoginReg`;

-- Create table1 for user data
CREATE TABLE IF NOT EXISTS `table1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Brand` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Quantity` varchar(150) NOT NULL,
  `Price` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample data (optional)
INSERT INTO `table1` (`Brand`, `Name`, `Quantity`, `Price`) VALUES
('Lenovo', 'Thinkbook G16', '16', '1000USD'),
('Apple', 'MacBook Air M3', '20', '2000USD'),
('Asus', 'ZenBook', '15', '800USD');