-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 12:02 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `candle`
--

-- --------------------------------------------------------

--
-- Table structure for table `candle_forgot_password`
--

CREATE TABLE `candle_forgot_password` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candle_forgot_password`
--

INSERT INTO `candle_forgot_password` (`id`, `email`, `token`, `created`) VALUES
(0, 'raihan.tusher1994@gmail.com', 'e373782fb710214a1ca039d43b97942b', '2020-11-27 04:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `candle_models`
--

CREATE TABLE `candle_models` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `master` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candle_models`
--

INSERT INTO `candle_models` (`id`, `name`, `class`, `master`) VALUES
(2, 'role', 'App\\Models\\RoleModel', 1),
(4, 'model', 'App\\Models\\CandleModel', 1),
(6, 'user', 'App\\Models\\UserModel', 0),
(10, 'role_permission', 'App\\Models\\RolePermissionModel', 0),
(12, 'admin', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `candle_role`
--

CREATE TABLE `candle_role` (
  `id` int(11) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candle_role`
--

INSERT INTO `candle_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `candle_role_permission`
--

CREATE TABLE `candle_role_permission` (
  `id` int(11) NOT NULL,
  `permission` varchar(30) NOT NULL,
  `role_id` int(11) NOT NULL,
  `can` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candle_role_permission`
--

INSERT INTO `candle_role_permission` (`id`, `permission`, `role_id`, `can`) VALUES
(153, 'browse_role', 1, 1),
(154, 'read_role', 1, 1),
(155, 'add_role', 1, 1),
(156, 'edit_role', 1, 1),
(157, 'delete_role', 1, 1),
(158, 'browse_model', 1, 1),
(159, 'read_model', 1, 1),
(160, 'add_model', 1, 1),
(161, 'edit_model', 1, 1),
(162, 'delete_model', 1, 1),
(163, 'browse_user', 1, 1),
(164, 'read_user', 1, 1),
(165, 'add_user', 1, 1),
(166, 'edit_user', 1, 1),
(167, 'delete_user', 1, 1),
(168, 'browse_role_permission', 1, 1),
(169, 'read_role_permission', 1, 1),
(170, 'add_role_permission', 1, 1),
(171, 'edit_role_permission', 1, 1),
(172, 'delete_role_permission', 1, 1),
(173, 'browse_admin', 1, 1),
(174, 'read_admin', 1, 1),
(175, 'add_admin', 1, 1),
(176, 'edit_admin', 1, 1),
(177, 'delete_admin', 1, 1),
(178, 'browse_role', 3, 1),
(179, 'read_role', 3, 1),
(180, 'add_role', 3, 1),
(181, 'edit_role', 3, 1),
(182, 'delete_role', 3, 1),
(183, 'browse_model', 3, 1),
(184, 'read_model', 3, 1),
(185, 'add_model', 3, 1),
(186, 'edit_model', 3, 1),
(187, 'delete_model', 3, 1),
(188, 'browse_user', 3, 1),
(189, 'read_user', 3, 1),
(190, 'add_user', 3, 1),
(191, 'edit_user', 3, 1),
(192, 'delete_user', 3, 1),
(193, 'browse_role_permission', 3, 1),
(194, 'read_role_permission', 3, 1),
(195, 'add_role_permission', 3, 1),
(196, 'edit_role_permission', 3, 1),
(197, 'delete_role_permission', 3, 1),
(198, 'browse_admin', 3, 1),
(199, 'read_admin', 3, 1),
(200, 'add_admin', 3, 1),
(201, 'edit_admin', 3, 1),
(202, 'delete_admin', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `candle_users`
--

CREATE TABLE `candle_users` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(191) NOT NULL,
  `token` varchar(100) DEFAULT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candle_users`
--

INSERT INTO `candle_users` (`id`, `fname`, `lname`, `email`, `password`, `token`, `role_id`) VALUES
(18, 'admin', 'ladmin', 'admin@admin.com', '$argon2i$v=19$m=1024,t=2,p=2$WXVPVUVvUFp1QktPSG8veA$im9Yk/r4HKi05wPsUgkFxz2l8y51XwFvw74pMpEasCE', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('b5neb676tnb53f7dhqh81jmo1is0s7om', '::1', 1607495406, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373439353430363b5f63695f70726576696f75735f75726c7c733a34353a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f726f6c6573223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2231223b7d),
('qclgk0a6n5l995puv7snc9vsgillqae3', '::1', 1607497179, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373439373137393b5f63695f70726576696f75735f75726c7c733a35323a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f75736572732f637265617465223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2231223b7d),
('5olionimkgscjjh1nrthjq3aie9hedpv', '::1', 1607497536, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373439373533363b5f63695f70726576696f75735f75726c7c733a35323a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f75736572732f637265617465223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2231223b7d),
('a43gtnp9ij1m31o72ul8cr5j4thse4ek', '::1', 1607498126, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373439383132363b5f63695f70726576696f75735f75726c7c733a35333a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f75736572732f656469742f3138223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2231223b7d),
('qi4j43qv98h8klt55t7lomvdnj5gdbq3', '::1', 1607498585, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373439383538353b5f63695f70726576696f75735f75726c7c733a35383a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f726f6c65732f7065726d697373696f6e2f33223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2231223b7d),
('d6820r77hk5ok58gs1q6e1tuviqv9jka', '::1', 1607498921, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373439383932313b5f63695f70726576696f75735f75726c7c733a34353a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f726f6c6573223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2231223b7d737563636573737c733a33383a225065726d697373696f6e206172652075706461746564207375636365737366756c6c79212120223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
('5t9bpl8ne8ulq8fii4mn62cl6qb6vmd7', '::1', 1607499443, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373439393434333b5f63695f70726576696f75735f75726c7c733a35383a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f726f6c65732f7065726d697373696f6e2f33223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2231223b7d),
('4uj1ek1cn2cis2fenp4umls1gmo49g6d', '::1', 1607499760, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373439393736303b5f63695f70726576696f75735f75726c7c733a35383a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f726f6c65732f7065726d697373696f6e2f33223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2231223b7d),
('u90i6t1squia61lnljqd4b8ropbnd2sa', '::1', 1607500263, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373530303236333b5f63695f70726576696f75735f75726c7c733a35333a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f75736572732f656469742f3138223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2231223b7d),
('qt9bsscvgmer8qlrj8uuj6b33dfnve27', '::1', 1607501847, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373530313834373b5f63695f70726576696f75735f75726c7c733a35333a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f75736572732f656469742f3138223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2231223b7d),
('3gmp1jpuqafcd3c5ci4h2jcf26th08fh', '::1', 1607502150, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373530323135303b5f63695f70726576696f75735f75726c7c733a35313a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f726f6c65732f696e646578223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2231223b7d),
('susrn8tn2pdgkdlne5nmjd4a0sb5ds17', '::1', 1607502710, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373530323731303b5f63695f70726576696f75735f75726c7c733a34353a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f7573657273223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2231223b7d),
('9ahm7vnooptohpn4dnfnotef79angrpb', '::1', 1607503181, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373530333138313b5f63695f70726576696f75735f75726c7c733a35333a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f75736572732f656469742f3138223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2231223b7d),
('dp8thhglh5ect17a4kcv75infjprc6v6', '::1', 1607503546, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373530333534363b5f63695f70726576696f75735f75726c7c733a34353a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f7573657273223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2231223b7d),
('q4hspgjcaho3oi443n4emlott0p8o616', '::1', 1607503757, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373530333534363b5f63695f70726576696f75735f75726c7c733a34373a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f73657474696e67223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2231223b7d),
('gjq97hqbhbu3oheags5h6sl8to6s680a', '::1', 1607579296, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373537393239363b5f63695f70726576696f75735f75726c7c733a35333a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f75736572732f656469742f3138223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2233223b7d6572726f727c733a34303a2254686520616374696f6e20796f7520726571756573746564206973206e6f7420616c6c6f7765642e223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('eb78tihkui4sjkddk2ahc96edrn3jido', '::1', 1607579676, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373537393637363b5f63695f70726576696f75735f75726c7c733a35333a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f75736572732f656469742f3138223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2233223b7d),
('pnjr47qeo2vcmc6jn0j8cnpcntno3jge', '::1', 1607580018, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373538303031383b5f63695f70726576696f75735f75726c7c733a35353a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f75736572732f7570646174652f3138223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2233223b7d),
('m207dp9rftqql3tqe8asflda336l7f9e', '::1', 1607580336, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373538303333363b5f63695f70726576696f75735f75726c7c733a35353a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f75736572732f7570646174652f3138223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2233223b7d),
('frsaggdan5s0av5h6l8qr2km0h97lelf', '::1', 1607580665, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373538303636353b5f63695f70726576696f75735f75726c7c733a35333a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f75736572732f656469742f3138223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d3224636b3561546d31355a7a5a6e526d787a6132466d565124484578746139456e636275674272766e662b697a3777364a3849686c36667562624851634c486e49685063223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2233223b7d),
('ktkcusv1rp13ctrg1g1cdl9eksr9fdes', '::1', 1607581241, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373538313234313b5f63695f70726576696f75735f75726c7c733a35393a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f75736572733f7365617263683d72616968616e223b617574687c613a373a7b733a323a226964223b733a323a223139223b733a353a22666e616d65223b733a363a2272616968616e223b733a353a226c6e616d65223b733a313a226a223b733a353a22656d61696c223b733a32373a2272616968616e2e7475736865723139393440676d61696c2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d322465477844643277754c6d5a75544777316445314d5667245541394e76456a304147795438527566474e38573763344933424e50743377482b696b5a6142556a574555223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2230223b7d),
('e84kcmf2gfh0gmuq27fvls7g0aibtpg6', '::1', 1607581653, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373538313634373b5f63695f70726576696f75735f75726c7c733a36303a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f686f6d652f666f72676f745f70617373776f7264223b),
('04bat4qr2sudae9cnof3stgp60ukl5ie', '::1', 1607659689, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373635393638393b5f63695f70726576696f75735f75726c7c733a34353a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f61646d696e223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d322464324e7965574e325546465465484e4f553264434f51245971767047763233543539564758764f66612b6c595a4f393961354834556a6c6270664155304957735534223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2233223b7d),
('nbqgt0umdmi1h5gltvjgb395ivo51t9j', '::1', 1607662014, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373636323031343b5f63695f70726576696f75735f75726c7c733a35303a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f686f6d652f696e646578223b),
('14pjmndqcli2divfu9b6h9h2crofmj0u', '::1', 1607662540, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373636323534303b5f63695f70726576696f75735f75726c7c733a35303a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f686f6d652f696e646578223b737563636573737c733a33363a22526567697374726174696f6e206973207375636365737366756c6c7920646f6e65212120223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
('ut32pqun2umdk4kdh9q9l1far0kv2brg', '::1', 1607663496, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373636333439363b5f63695f70726576696f75735f75726c7c733a35303a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f686f6d652f696e646578223b737563636573737c733a33363a22526567697374726174696f6e206973207375636365737366756c6c7920646f6e65212120223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
('mduuv25ngg19c0g11ijouhdq0qsdhc13', '::1', 1607667408, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373636373430383b5f63695f70726576696f75735f75726c7c733a35303a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f686f6d652f696e646578223b),
('dgikaoeire9el6ittb7t7k8aakspqjqs', '::1', 1607668572, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373636383537323b5f63695f70726576696f75735f75726c7c733a3133303a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f686f6d652f72657365745f70617373776f72643f746f6b656e3d613630353430326239623261383236373436383838653436333833343830396426656d61696c3d72616968616e2e7475736865722534307961686f6f2e636f6d223b),
('an7elkfjmlnbh4ktkucdgidl44o2fk3n', '::1', 1607668873, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373636383837333b5f63695f70726576696f75735f75726c7c733a35313a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f61646d696e2f696e646578223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d32245a54527153474e506344426b4f57394855445678527724495072486775727842743167723576314b687376536177587075664d416f376d6c6a3066466b7464733259223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2233223b7d),
('1uthehgimi9lia7ldgf77ulck8d8aj7g', '::1', 1607669134, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373636393133343b5f63695f70726576696f75735f75726c7c733a35303a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f686f6d652f696e646578223b),
('u8svpvth39b41fq3a0k93uv2t7p4s7gu', '::1', 1607682613, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373638323631333b5f63695f70726576696f75735f75726c7c733a34373a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f73657474696e67223b617574687c613a373a7b733a323a226964223b733a323a223138223b733a353a22666e616d65223b733a363a2252616968616e223b733a353a226c6e616d65223b733a353a2241686d6564223b733a353a22656d61696c223b733a32333a2272616968616e2e747573686572407961686f6f2e636f6d223b733a383a2270617373776f7264223b733a39353a22246172676f6e326924763d3139246d3d313032342c743d322c703d32245a54527153474e506344426b4f57394855445678527724495072486775727842743167723576314b687376536177587075664d416f376d6c6a3066466b7464733259223b733a353a22746f6b656e223b4e3b733a373a22726f6c655f6964223b733a313a2233223b7d),
('ro0g3vcj63plumobds2pc0ltrt7l6egp', '::1', 1607682771, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373638323737303b5f63695f70726576696f75735f75726c7c733a35303a22687474703a2f2f6c6f63616c686f73742f6672616d65776f726b2d342e302e342f7075626c69632f686f6d652f696e646578223b);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candle_models`
--
ALTER TABLE `candle_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candle_role`
--
ALTER TABLE `candle_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candle_role_permission`
--
ALTER TABLE `candle_role_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candle_users`
--
ALTER TABLE `candle_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candle_models`
--
ALTER TABLE `candle_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `candle_role`
--
ALTER TABLE `candle_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `candle_role_permission`
--
ALTER TABLE `candle_role_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `candle_users`
--
ALTER TABLE `candle_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;