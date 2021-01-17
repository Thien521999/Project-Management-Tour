-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2018 lúc 03:20 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `management-tour`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL PRIMARY KEY,
  `NameAdmin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `bookingtour` (
  `ID` int(11) NOT NULL PRIMARY KEY,
  `BookingID` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `TourID` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerID` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `NumberTicketAdult` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `NumberTicketChildren` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `NumberTicketBaby` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `NumberTicketInfant` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `TicketTotal` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `PriceTotal` int(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL PRIMARY KEY,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `detailtour` (
  `ID` int(11) NOT NULL PRIMARY KEY,
  `TourID` int(255) COLLATE utf8_unicode_ci NOT NULL,
  `Location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `PriceLocation` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `DescriptionLocation` text COLLATE utf8_unicode_ci NOT NULL,
  `ImageLocation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Vehicle` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tableprice` (
  `ID` int(11) NOT NULL PRIMARY KEY,
  `TourID` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `PriceAdult` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `PriceChildren` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `PriceBaby` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `PriceInfant` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `NumberTicketLimit` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `TypeTourID` int(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tour` (
  `TourID` int(11) NOT NULL PRIMARY KEY,
  `NameTour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Detail` text COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Day_Start` date COLLATE utf8_unicode_ci NOT NULL,
  `Day_End` date COLLATE utf8_unicode_ci NOT NULL,
  `TimeTour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `Discount` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `Place_Start` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TypeTourID` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `Vehicle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `typetour` (
  `TypeTourID` int(11) NOT NULL PRIMARY KEY,
  `NameTypeTour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Sort` int(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


