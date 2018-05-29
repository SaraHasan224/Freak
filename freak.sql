-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2018 at 10:33 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freak`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `ID` int(11) NOT NULL,
  `Image` text NOT NULL,
  `Name` text NOT NULL,
  `Designation` text NOT NULL,
  `Experience` text NOT NULL,
  `Status` int(1) NOT NULL,
  `DateAdded` datetime NOT NULL,
  `DateModified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`ID`, `Image`, `Name`, `Designation`, `Experience`, `Status`, `DateAdded`, `DateModified`) VALUES
(1, '1.jpg', 'Martin Demichelis', 'PHP Developer', '5 Years', 1, '2017-04-25 00:00:00', '2017-04-25 00:00:00'),
(2, '2.jpg', 'Luka Biglia', 'Programmer', '4 years', 1, '2017-04-25 00:00:00', '2017-04-25 00:00:00'),
(3, '3.jpg', 'Havier Macherano', 'Developer', '9 years', 1, '2017-04-25 00:00:00', '2017-04-25 00:00:00'),
(4, '4.jpg', 'Martin Demichelis', 'PHP Developer', '8 years', 1, '2017-04-25 00:00:00', '2017-04-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `EmailAddress` text NOT NULL,
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Username`, `Password`, `EmailAddress`, `Status`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `ID` int(11) NOT NULL,
  `Image` text NOT NULL,
  `Status` int(1) NOT NULL,
  `DateAdded` datetime NOT NULL,
  `DateModified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`ID`, `Image`, `Status`, `DateAdded`, `DateModified`) VALUES
(1, '1.jpg', 1, '2017-04-28 00:00:00', '2017-04-28 00:00:00'),
(2, '2.jpg', 1, '2017-04-28 00:00:00', '2017-04-28 00:00:00'),
(3, '3.jpg', 1, '2017-04-28 00:00:00', '2017-04-28 00:00:00'),
(4, '4.jpg', 1, '2017-04-28 00:00:00', '2017-04-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `ID` int(11) NOT NULL,
  `Image` text NOT NULL,
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  `Status` int(1) NOT NULL,
  `DateAdded` datetime NOT NULL,
  `DateModified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`ID`, `Image`, `Title`, `Description`, `Status`, `DateAdded`, `DateModified`) VALUES
(1, '1.jpg', 'Blog Post Dummy Title', ' <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id ultrices, finibus tortor. Mauris eu dui ut lectus fermentum</p>\n                                            <blockquote>\n                                                <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>\n                                            </blockquote>\n                                            <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>\n                                            <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>', 1, '2017-04-24 00:00:00', '2017-04-24 00:00:00'),
(2, '2.jpg', 'Blog Post Dummy Title', 'There are many variations of passages of in psum available, but the majority have...', 1, '2017-04-24 00:00:00', '2017-04-24 00:00:00'),
(3, '3.jpg', 'Blog Post Dummy Title', 'There are many variations of passages of in psum available, but the majority have...', 1, '2017-04-24 00:00:00', '2017-04-24 00:00:00'),
(4, '4.jpg', 'Blog Post Dummy Title', 'There are many variations of passages of in psum available, but the majority have...', 1, '2017-04-24 00:00:00', '2017-04-24 00:00:00'),
(5, '1.jpg', 'Blog Post Dummy Title', 'There are many variations of passages of in psum available, but the majority have...', 1, '2017-04-24 00:00:00', '2017-04-24 00:00:00'),
(6, '2.jpg', 'Blog Post Dummy Title', 'There are many variations of passages of in psum available, but the majority have...', 1, '2017-04-24 00:00:00', '2017-04-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `ID` int(11) NOT NULL,
  `ParentID` int(11) NOT NULL,
  `CategoryName` text NOT NULL,
  `Icon` text NOT NULL,
  `TopCategory` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Status` int(1) NOT NULL,
  `DateAdded` datetime NOT NULL,
  `DateModified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`ID`, `ParentID`, `CategoryName`, `Icon`, `TopCategory`, `Description`, `Status`, `DateAdded`, `DateModified`) VALUES
(1, 0, 'Dresses', 'fa-male', 0, '\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"\r\n\r\n', 1, '2017-04-24 00:00:00', '2017-04-24 00:00:00'),
(2, 0, 'Shoes', 'fa-male', 0, '\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"\r\n\r\n', 1, '2017-04-24 00:00:00', '2017-04-24 00:00:00'),
(3, 0, 'Handbags', 'fa-male', 0, '\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"\r\n\r\n', 1, '2017-04-24 00:00:00', '2017-04-24 00:00:00'),
(4, 0, 'Clothing', 'fa-male', 0, '\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"\n\n', 1, '2017-04-24 00:00:00', '2017-04-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `ID` int(11) NOT NULL,
  `Image` text NOT NULL,
  `Status` int(1) NOT NULL,
  `DateAdded` datetime NOT NULL,
  `DateModified` datetime NOT NULL,
  `BrandName` text NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`ID`, `Image`, `Status`, `DateAdded`, `DateModified`, `BrandName`, `Description`) VALUES
(1, '3.png', 1, '2017-04-24 00:00:00', '0000-00-00 00:00:00', 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, '),
(2, '2.png', 1, '2017-04-24 00:00:00', '0000-00-00 00:00:00', 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, '),
(3, '3.png', 1, '2017-04-24 00:00:00', '0000-00-00 00:00:00', 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, '),
(4, '4.png', 1, '2017-04-24 00:00:00', '0000-00-00 00:00:00', 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, '),
(5, '5.png', 1, '2017-04-24 00:00:00', '0000-00-00 00:00:00', 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, '),
(6, '6.png', 1, '2017-04-24 00:00:00', '0000-00-00 00:00:00', 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, ');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `ID` int(11) NOT NULL,
  `ParentID` int(11) NOT NULL,
  `CatagoryName` text NOT NULL,
  `Icon` text NOT NULL,
  `TopCategory` int(1) NOT NULL,
  `Image` text NOT NULL,
  `Description` text NOT NULL,
  `Status` int(1) NOT NULL,
  `DateAdded` datetime NOT NULL,
  `DateModified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`ID`, `ParentID`, `CatagoryName`, `Icon`, `TopCategory`, `Image`, `Description`, `Status`, `DateAdded`, `DateModified`) VALUES
(12, 0, 'Electronics', '', 0, 'C-12.jpg', 'Electronics', 1, '2017-04-25 08:44:51', '2017-04-26 16:21:48'),
(13, 0, 'Features', '', 0, 'C-13.jpg', 'Feature', 1, '2017-04-25 08:46:09', '2017-04-26 16:22:00'),
(14, 0, 'Accessories', '', 0, 'C-14.jpg', 'Accessories', 1, '2017-04-25 09:26:43', '2017-04-26 16:22:17'),
(15, 0, 'Top Brands', '', 0, 'C-15.jpg', 'Top Brands', 1, '2017-04-25 09:27:38', '2017-04-26 16:22:35'),
(16, 0, 'Jewellery', '', 0, 'Jewellery.jpg', 'Ornaments', 1, '2017-04-25 09:28:41', '2017-04-26 02:11:47'),
(17, 0, 'Video Games', '', 0, 'C-17.jpg', 'Games', 1, '2017-04-25 09:29:20', '2017-04-26 16:26:05'),
(18, 12, 'Television', '', 0, 'C-21.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, '2017-04-25 09:42:13', '2017-04-25 10:02:59'),
(19, 12, 'Refrigerator', '', 0, 'C-19.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, '2017-04-25 09:42:44', '2017-04-26 16:27:01'),
(20, 12, 'Air Conditioner', '', 0, 'C-20.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, '2017-04-25 09:43:06', '2017-04-26 16:27:55'),
(21, 18, 'LCD', '', 0, 'C-21.jpg', 'Lorem ipsum', 1, '2017-04-26 01:51:26', '2017-04-26 02:08:19'),
(22, 18, 'LED', '', 0, 'C-22.jpg', 'Lorem ipsum', 1, '2017-04-26 01:53:28', '2017-04-26 02:15:51'),
(23, 18, 'Plasma TV', '', 0, 'C-23.jpg', 'Lorem ipsum', 0, '2017-04-26 01:54:15', '2017-04-26 02:16:08'),
(24, 14, 'Bags', '', 0, 'C-24.jpg', 'Lorem ipsum', 1, '2017-04-26 01:55:44', '2017-04-26 02:16:46'),
(25, 24, 'Female Bags', '', 0, 'C-25.jpg', 'Lorem ipsum', 1, '2017-04-26 01:57:30', '2017-04-26 02:16:59'),
(26, 24, 'Male Bags', '', 0, 'C-26.jpg', 'Lorem ipsum', 1, '2017-04-26 01:59:16', '2017-04-26 02:17:56');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `ID` int(11) NOT NULL,
  `Username` text NOT NULL,
  `Status` int(1) NOT NULL,
  `EmailAddress` text NOT NULL,
  `Subject` text NOT NULL,
  `Message` text NOT NULL,
  `DateAdded` datetime NOT NULL,
  `DateModified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`ID`, `Username`, `Status`, `EmailAddress`, `Subject`, `Message`, `DateAdded`, `DateModified`) VALUES
(1, 'Sara Hasan', 1, 'sara@gmail.com', 'Complain', 'abc.txt', '2017-04-23 00:00:00', '0000-00-00 00:00:00'),
(4, 'Sara Hasan', 0, 'sara@gmail.com', 'Change of size', 'I have ordered a shirt from your store a day back and want to change its size how can I change that any Procedure??', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'sara', 0, 'sara@gmail.com', 'testing', '23', '2017-10-17 23:20:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `UserName` text NOT NULL,
  `EmailAddress` text NOT NULL,
  `CellNumber` int(15) NOT NULL,
  `CurrentPassword` text NOT NULL,
  `Password` text NOT NULL,
  `ConfirmPassword` text NOT NULL,
  `Status` int(1) NOT NULL,
  `DateAdded` datetime NOT NULL,
  `DateModified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `UserName`, `EmailAddress`, `CellNumber`, `CurrentPassword`, `Password`, `ConfirmPassword`, `Status`, `DateAdded`, `DateModified`) VALUES
(1, 'Sara Hasan', 'sara@gmail.com', 90078601, 'qwerty', 'qwerty', 'qwerty', 0, '2017-03-02 00:00:00', '2017-03-06 00:00:00'),
(2, 'saadnaeem', 'saadnaeem@gmail.com', 3452011, '', 'qwerty', '', 0, '2017-04-23 13:40:46', '0000-00-00 00:00:00'),
(4, 'sara', 'sara@gmail.com', 3564, 'qwerty', '', '', 0, '2017-04-23 13:46:25', '0000-00-00 00:00:00'),
(14, 'Mahrukh', 'mahrukh@gmail.com', 2154688, 'mahrukh', '', '', 0, '2017-04-23 20:02:56', '0000-00-00 00:00:00'),
(15, 'Umme Kulsoom', 'umme@live.com', 51246, 'qwerty', '', '', 0, '2017-04-23 20:54:12', '0000-00-00 00:00:00'),
(16, 'Umme Kulsoom', 'umme@live.com', 51246, 'qwerty', '', '', 0, '2017-04-23 20:54:12', '0000-00-00 00:00:00'),
(17, 'Maria Zafar', 'maria@yahoo.com', 3452011, 'qwerty', '', '', 0, '2017-04-23 20:58:36', '0000-00-00 00:00:00'),
(18, 'Maria Zafar', 'maria@yahoo.com', 3452011, 'qwerty', '', '', 0, '2017-04-23 20:58:36', '0000-00-00 00:00:00'),
(19, 'Dua e Amna', 'dua@outlook.com', 345269, 'qwerty', '', '', 0, '2017-04-23 21:04:29', '0000-00-00 00:00:00'),
(20, 'Dua e Amna', 'dua@outlook.com', 345269, 'qwerty', '', '', 0, '2017-04-23 21:04:29', '0000-00-00 00:00:00'),
(21, 'Maria Zafar', 'maria@gmail.com', 34520995, 'qwerty', '', '', 0, '2017-04-25 20:55:10', '0000-00-00 00:00:00'),
(22, 'Maria Zafar', 'maria@gmail.com', 34520995, 'qwerty', '', '', 0, '2017-04-25 20:55:10', '0000-00-00 00:00:00'),
(23, 'sara', 'sarahasan@gmail.com', 3564, 'qwerty', '', '', 0, '2017-04-25 21:47:25', '0000-00-00 00:00:00'),
(24, 'sara', 'sarahasan@gmail.com', 3564, 'qwerty', '', '', 0, '2017-04-25 21:47:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customfield`
--

CREATE TABLE `customfield` (
  `ID` int(11) NOT NULL,
  `FieldName` text NOT NULL,
  `Type` int(11) NOT NULL,
  `Options` text NOT NULL,
  `Status` int(1) NOT NULL,
  `DateAdded` datetime NOT NULL,
  `DateModified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customfield`
--

INSERT INTO `customfield` (`ID`, `FieldName`, `Type`, `Options`, `Status`, `DateAdded`, `DateModified`) VALUES
(8, 'size', 2, 'small,medium,large', 1, '2017-01-26 16:15:55', '2017-01-26 22:35:10'),
(9, 'Color', 2, 'red,black', 0, '2017-02-21 15:23:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `CatIDs` text NOT NULL,
  `ProductName` text NOT NULL,
  `TopFeatured` int(1) NOT NULL,
  `Image` text NOT NULL,
  `Description` text NOT NULL,
  `SubImages` text NOT NULL,
  `Price` int(11) NOT NULL,
  `Discount` int(11) NOT NULL,
  `Status` int(1) NOT NULL,
  `DateAdded` datetime NOT NULL,
  `DateModified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `CatIDs`, `ProductName`, `TopFeatured`, `Image`, `Description`, `SubImages`, `Price`, `Discount`, `Status`, `DateAdded`, `DateModified`) VALUES
(18, '13', 'Tops', 0, '3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.', '3.jpg', 1000, 0, 1, '2017-04-25 09:35:56', '2017-04-26 20:42:00'),
(19, '13', 'MENS WHITE SHORT ITEM', 0, '2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.', 'P-19-1.jpg', 500, 0, 1, '2017-04-25 09:36:40', '2017-04-26 20:40:53'),
(20, '13', 'MENS WHITE SHORT ITEM', 0, '6.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.', 'P-20-1.jpg', 700, 0, 1, '2017-04-25 09:37:22', '2017-04-26 16:18:46'),
(21, '13', 'T-shirt', 1, '8.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.', 'P-21-1.jpg', 500, 0, 1, '2017-04-25 09:38:10', '0000-00-00 00:00:00'),
(40, '14', 'SLIM SHIRT WITH STRETCH', 0, '6.jpg', 'Lorenipsum', '1.jpg', 185, 0, 1, '2017-04-26 00:00:00', '2017-04-26 20:44:58'),
(41, '14', 'MENS WHITE SHORT ITEM', 0, '4.jpg', 'Lorem ipsum', '2.jpg', 200, 177, 1, '2017-04-26 00:00:00', '2017-04-26 19:57:09'),
(42, '14', 'MENS WHITE SHORT ITEM', 0, '1.jpg', 'MENS WHITE SHORT ITEM', '3.jpg', 22, 22, 1, '2017-04-26 00:00:00', '2017-04-26 19:57:28'),
(43, '14', 'watches', 0, 'watches.jpg', 'MENS WHITE SHORT ITEM', '4.jpg', 71, 0, 1, '2017-04-26 00:00:00', '2017-04-26 19:57:54'),
(44, '14', 'Shoes', 0, 'shoes.jpg', 'MENï¿½S WHITE SHORT ITEM', '3.jpg', 22, 22, 1, '2017-04-26 00:00:00', '2017-04-26 20:40:45'),
(45, '14', 'Fancy T-Shirt', 1, '9.jpg', 'MENS WHITE SHORT ITEM', '4.jpg', 71, 0, 1, '2017-04-26 00:00:00', '2017-04-26 20:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `RoleName` text NOT NULL,
  `Status` int(1) NOT NULL,
  `DateAdded` datetime NOT NULL,
  `DateModified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ID`, `RoleName`, `Status`, `DateAdded`, `DateModified`) VALUES
(14, 'Finance Department', 1, '2017-02-17 10:24:55', '2017-02-17 10:32:30'),
(15, 'Inventory Department', 1, '2017-02-17 10:26:40', '2017-02-19 19:03:25'),
(16, 'Customer Support', 1, '2017-02-17 10:27:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slider_main`
--

CREATE TABLE `slider_main` (
  `ID` int(11) NOT NULL,
  `Image` text NOT NULL,
  `Description` text NOT NULL,
  `Heading` text NOT NULL,
  `Year` text NOT NULL,
  `Link` text NOT NULL,
  `Status` int(1) NOT NULL,
  `DateAdded` datetime NOT NULL,
  `DateModified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_main`
--

INSERT INTO `slider_main` (`ID`, `Image`, `Description`, `Heading`, `Year`, `Link`, `Status`, `DateAdded`, `DateModified`) VALUES
(1, '1-1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ipsum dolor sit amet labore et dolore\r\n', 'BOUTIQUE SPECIAL COLLECTION', '2016', '#', 0, '2017-03-09 00:00:00', '2017-03-09 00:00:00'),
(2, '1-2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ipsum dolor sit amet labore et dolore', 'BOUTIQUE SPECIAL COLLECTION', '2016', '#', 0, '2017-03-09 00:00:00', '2017-03-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `ID` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Status` int(1) NOT NULL,
  `DateAdded` datetime NOT NULL,
  `DateModified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `RoleID` int(11) NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `EmailAddress` text NOT NULL,
  `Status` int(1) NOT NULL,
  `CellNumber` text NOT NULL,
  `Address` text NOT NULL,
  `Image` text NOT NULL,
  `NIC` int(18) NOT NULL,
  `DateAdded` datetime NOT NULL,
  `DateModified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customfield`
--
ALTER TABLE `customfield`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `slider_main`
--
ALTER TABLE `slider_main`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `customfield`
--
ALTER TABLE `customfield`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `slider_main`
--
ALTER TABLE `slider_main`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
