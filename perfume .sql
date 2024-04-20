-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 11:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perfume`
--

-- --------------------------------------------------------

--
-- Table structure for table `abt`
--

CREATE TABLE `abt` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `abt` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abt`
--

INSERT INTO `abt` (`id`, `title`, `abt`) VALUES
(1, 'About Us', 'Fragrance Direct is a leading beauty retailer based in the United Kingdom, stocking over 14,000 products across 600 big-name brands, designer labels and high street favourites.\r\n\r\nLaunched in 1993, we specialise in selling branded beauty products, including fragrances, makeup, skincare and haircare essentials, along with a full range of gift sets.\r\n\r\nOriginally focusing on the fragrance market (hence the name!) we went from strength to strength. We took this knowledge and expertise, listened to our customers and sought to become the obvious choice for all your beauty needs. We are forever expanding our ranges, sourcing the products you are looking for, following trends, offering luxury brands as well as making sure that we are always focused on stocking all your essential beauty items.\r\n\r\nWe regularly update our ranges, building relationships with the brands to bring you first-class ranges and brand new releases from the best-known fashion labels and beauty brands at low prices. Our huge collection is influenced by the latest shopping trends and innovations. In our online store you’ll find international names like Paco Rabanne, HUGO BOSS, Calvin Klein, Armani, Yves Saint Laurent and Marc Jacobs.\r\n\r\n \r\n\r\nWhat we do best\r\n\r\nOur website makes shopping for your products easier than ever, so you can get what you love for less, in a couple of clicks. We have focused on ease of the checkout and luxurious graphics to make the shopping experience not only pleasing to the eye, but quick and easy. Customer Service also features top of our list. A dedicated 7 days a week customer service team, fast to-your-door delivery and free delivery within United Kingdom when you spend over 25 GBP (Great British Pound), by simply using the promotional code FREEDEL at the checkout.');

-- --------------------------------------------------------

--
-- Table structure for table `allproducts`
--

CREATE TABLE `allproducts` (
  `p_id` int(100) NOT NULL,
  `p_cat` int(100) NOT NULL,
  `p_brand` int(100) NOT NULL,
  `p_title` varchar(255) NOT NULL,
  `p_price` int(100) NOT NULL,
  `p_desc` text NOT NULL,
  `p_image` text NOT NULL,
  `p_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allproducts`
--

INSERT INTO `allproducts` (`p_id`, `p_cat`, `p_brand`, `p_title`, `p_price`, `p_desc`, `p_image`, `p_keywords`) VALUES
(1, 1, 1, 'Tomford', 8997, 'ytgyjg hghjghjy', 'img/img12.JPG', 'gyhgju ghgj'),
(2, 1, 1, 'deed', 33344, 'dedc', 'img/prada.JPG', 'scdsacdc');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Tom ford'),
(2, 'Gucci');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(1, '::1', 0),
(10, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Chanel'),
(2, 'Dior'),
(3, 'Kheil\'s');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `username` varchar(100) NOT NULL,
  `prc` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`username`, `prc`, `qty`, `contact`, `Address`) VALUES
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('hghg', '266622', '6', '897987', '876786');

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE `confirm` (
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `items` int(100) NOT NULL,
  `subtotal` varchar(100) NOT NULL,
  `c-no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirm`
--

INSERT INTO `confirm` (`name`, `address`, `items`, `subtotal`, `c-no`) VALUES
('qszju', 'swedwed', 7, '301168', 1),
('wedwju', 'asx', 7, '301168', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `S.no` int(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` int(14) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Message` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`S.no`, `Username`, `Email`, `Contact`, `Address`, `Message`) VALUES
(1, 'sde', 'ewdw@gmail.com', 3224, 'frgf', 'rafrg');

-- --------------------------------------------------------

--
-- Table structure for table `excart`
--

CREATE TABLE `excart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `excart`
--

INSERT INTO `excart` (`p_id`, `ip_add`, `qty`) VALUES
(1, '::1', 0),
(2, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `exproduct`
--

CREATE TABLE `exproduct` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(3, 1, 1, 'rag & bone', 50000, 'Genmaicha opens with notes of bergamot, mandarin and yuzu zest followed by a heart of green tea, jasmine sambac and nutmeg and a base of rice, matcha and cedarwood.', 'img/img7.PNG', 'hgfgf'),
(4, 1, 6, 'Elie Tahari', 89079, 'Elie Tahari', 'img/img5.JPG', 'ftfhf'),
(5, 1, 1, 'Amazing Grace', 5000, 'Experience the brighter side of grace. This twist on the iconic whisper-soft floral, amazing grace, sheds new light on the beloved scent. Luscious bergamot amplifies the timeless softness of the original favorite.', 'img/img6.PNG', 'ygyhgyh vhjv'),
(6, 1, 1, 'Remarkable ', 34546, 'Alternative fragrance house, Etat libre d’Orange, is a unique and respected force in the perfume industry that prides itself on pushing boundaries. Founder, Etienne de Swardt, works', 'img/prada.JPG', 'sXdsd'),
(7, 1, 676, 'DKNY', 100, 'Be Delicious begins with refreshing grapefruit and cucumber, and a sensual undertone of magnolia to deepen the bright, watery zest. A gorgeous sweet red apple note rises from a trio', 'img/dplce.JPG', 'hjfhjfy'),
(8, 1, 1, 'Silent St.', 3487667, 'Silent St. creates a feeling of total peace and purity with white musks and clean floral notes. A fragrance to calm the chaos of life in NYC – silence says it all in this exhilarating and restorative scent.', 'img/img13.JPG', 'efcec'),
(9, 1, 1, 'English Laundry', 23445, 'English Laundry', 'img/img14.JPG', 'cdcefc'),
(10, 1, 1, 'Channel', 139, 'The solar notes of GABRIELLE CHANEL Eau de Parfum in a travel-friendly format to enhance and extend your scent experience wherever you go.\r\n\r\n\r\nTo refill, twist open the spray to expose the atomizer. Pull up on the atomizer to remove the empty refill canister and replace it with a new one. Gently press the canister into the case and twist the top down to close.', 'img/channel.jpg', 'ytftyrjftf'),
(11, 1, 1, 'Juicy Couture', 13990, 'Sparkling. Charming. Exuberant. Celebrate the season with Viva la Juicy Rosé, a light-hearted toast to the forever vibrant Viva girl. Dressed in sparkling pink, she experiences the…', 'img/ab.jpg', 'inhbgvfcmdg'),
(12, 1, 1, 'Oscar de la Renta', 12300, 'Sparkling fresh grapefruit and red currant are wrapped in luminous florals of rose and jasmine, while finishing with enchanting vanilla and patchouli, Bella Essence evokes the timeless feeling of falling in love.', 'img/ab1.png', 'ygfdsa'),
(13, 1, 1, 'Malandrino', 5900, 'Style de Paris’s twin pairs of top and heart notes make this fragrance uniquely elegant and enjoyable. The citrusy powder in the orange blossom mirrors the opening Italian mandarin,…', 'img/ab2.jpg', 'hgfds'),
(14, 1, 1, 'Brit Sheer', 5500, 'Somewhere between lust and lost, peach nectar tangles with orange flower and jasmine in this tantalizing fragrance. Shaken up and just a little bit sweet, succulent apple reveals new', 'img/ab8.jpg', 'hbgvfdcs'),
(15, 1, 2, 'Love High', 0, 'Somewhere between lust and lost, peach nectar tangles with orange flower and jasmine in this tantalizing fragrance. Shaken up and just a little bit sweet, succulent apple reveals new', 'img/ab3.jpg', 'gfdsawe'),
(16, 1, 1, 'Aruba', 6000, 'The stunning brightness of Aruba’s native Wanglo flower arises from a floral infusion of natural neroli and bergamot, freesia, and rose touched with Persian lime. The smoothly sensual', 'img/ab4.jpg', 'nhbgvfdc'),
(17, 2, 1, 'London Burberry', 2900, 'London is a classic floral, with top notes of clementine and honeysuckle adding just the proper amount of citric energy to the powdered peonies and slightly green jasmine in the heart', 'img/ab5.jpg', 'jnhbgvfcd'),
(18, 1, 1, 'Versace Versense', 9000, 'Versace’s Versense features tart citrus spiked with an earthy fig accord. Green mandarin and bergamot zest sharpen the senses for a floral heart of jasmine and lily, warmed by drily-spiced', 'img/ab6.jpg', 'nhbgvfdc'),
(19, 1, 1, 'Versace', 15000, 'Bright Crystal Absolu features vivid top notes of frosted yuzu and pomegranate, that icily reflect the dark, juicy raspberry and peony notes in the heart brightly mirror the bold pomegranate', 'img/ab7.jpg', 'jhgfd'),
(20, 1, 2, 'Clive Christian', 17000, 'A unique leather fougere with aromatic notes inspired by the Queen Anne gardens. Discovered on the banks of the Mediterranean and coveted by the 18th century nobility, the complex and', 'img/ab9.png', 'fdsa'),
(21, 1, 1, 'Selva Do Brazil', 18000, 'Selva do Brazil is a green citrus-based scent, featuring a watery Paraguayan petitgrain note at the top. You can feel the moisture slowly falling from the high branches overhead as', 'img/ab10.jpg', 'gfdwasw'),
(22, 1, 1, 'Versace', 12000, 'Crystal Noir’s decadent coconut, indulgent gardenia, and ginger spice kick at the start is tailor-made for late night adventures. The dry down is equally voluptuous, with intense dollops', 'img/ab11.jpg', 'jyhtgfrew'),
(23, 2, 1, 'Arquiste L\'Etrog', 2480, 'L’Etrog, by Arquiste, is an exotic and unique style of light citrus scent. The Etrog, or citron fruit, smells like a bright, powdered lemon, and creates a perfume with an airy, clean', 'img/ab12.jpg', 'tgfhtfjn'),
(24, 1, 1, 'Eros Pour Femme', 3400, 'Versace’s Eros Femme is the top of the mountain for jasmine fans. Eros Femme gets your attention with a provocative pomegranate accord, and on to a floral heart doubly-layered in jasmine', 'img/ab13.jpg', 'ngfjgfj'),
(25, 1, 1, 'Fantasia Mermaid', 6900, 'Sparkling citrus and pepper top notes with sweet yet refreshing heart notes weave together like an adventurous symphony. Blended with a base of vanilla, honey, tonka bean and blond', 'img/ab14.jpg', 'jhgtfrdew'),
(26, 1, 1, 'Arquiste', 7800, 'Golden Hour, January 2016, Sydney. The surf crashes against the sandstone rocks. Your skin glows in the warm sun underneath a blazing Australian sky. As you climb out of the water', 'img/ab15.jpg', 'sredfgh');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(100) NOT NULL,
  `team_name` text NOT NULL,
  `team_abt` text NOT NULL,
  `team_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `team_abt`, `team_image`) VALUES
(1, 'Jakia Sultana', 'Section:A.Id:180204030', 'img/images.PNG'),
(2, 'Afsara Tasnim', 'Section:A,Id:180104141\r\n', 'img/images.png'),
(3, 'Afsara Tasnim', 'Section:A,Id:180104141\r\n', 'img/images.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `dt` datetime NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `username`, `password`, `dt`, `Name`) VALUES
(1, 'gfds', '654', '2021-10-05 09:29:53', 'tfds'),
(2, 'juthi123@gmail.com', '123', '2021-10-05 22:00:58', 'Juthi'),
(3, 'ab', '12', '2021-10-05 22:02:33', 'abc'),
(4, 'afsara@gmail.com', '123', '2021-10-06 07:59:29', 'Afsara Tasnim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abt`
--
ALTER TABLE `abt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allproducts`
--
ALTER TABLE `allproducts`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `confirm`
--
ALTER TABLE `confirm`
  ADD PRIMARY KEY (`c-no`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`S.no`);

--
-- Indexes for table `exproduct`
--
ALTER TABLE `exproduct`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abt`
--
ALTER TABLE `abt`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `allproducts`
--
ALTER TABLE `allproducts`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `confirm`
--
ALTER TABLE `confirm`
  MODIFY `c-no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `S.no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exproduct`
--
ALTER TABLE `exproduct`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
