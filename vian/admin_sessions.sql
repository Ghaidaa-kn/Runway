-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 06:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marvels`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_sessions`
--

CREATE TABLE `admin_sessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `logged_in` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `login_time` varchar(255) DEFAULT NULL,
  `admin_id` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_sessions`
--

INSERT INTO `admin_sessions` (`id`, `logged_in`, `username`, `session`, `login_time`, `admin_id`) VALUES
(1, 'ef98cc3f16ec0407d55011a2a7b93df5', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'f2a88095985fad1e2a3bb5eed07ee66e', 1),
(2, '7deb9a56c343b04c908ab2f9d4a77a09', 'admin', '14e1b600b1fd579f47433b88e8d85291', '81160feeed2599709e21a3ff4b983e6b', 1),
(3, '01f917c4d8a6689b8b81cb51024cae5f', 'admin', '14e1b600b1fd579f47433b88e8d85291', '250f8db37e5271dd62c169ac181ab86d', 1),
(4, '8b53a141da8963aac629d43c17a2c7e2', 'admin', '14e1b600b1fd579f47433b88e8d85291', '780d190416d2add6d8e2c4c09ebb48e3', 1),
(5, '54d554bf61d23d6b7169989420686a0a', 'admin', '14e1b600b1fd579f47433b88e8d85291', '8fa4496693ec847653966e1694e723bb', 1),
(6, '666dc7f24020d40dad58f54adf0bb6af', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'e66c3e9f951b42784f0f63461f121bee', 1),
(7, '5b5a44458d4d3d59c6b1e73ad841c565', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'b397b65425a5f7d31d1eb7b67726835c', 1),
(8, 'd1557902dbe4065b7eb961ac2e8cae35', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'b865e15e10a292883ca5d2395a1d24fb', 1),
(9, '3de4f243e15d51a4eca1623a3ddfb7e0', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'ed37e6380b5d2911392451ac17b0e6c7', 1),
(10, '191a1acc094d8d6909397d91d3e096b9', 'admin', '14e1b600b1fd579f47433b88e8d85291', '4718021cb028e4dfdd9c8cd30d3e6a0b', 1),
(11, '11b51779481c76406f352c4ac002b606', 'admin', '14e1b600b1fd579f47433b88e8d85291', '4658cee0e529567fdeabd57becf9d5f2', 1),
(12, '4f8a0583719b2e7188e72eb8200daa31', 'admin', '14e1b600b1fd579f47433b88e8d85291', '278588ea2def6f5b3f55a9b2af698634', 1),
(13, 'b4cec5469c18a79b397bcce3876a9626', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'adfb4cad736426d3d720924b5f533079', 1),
(14, '533486f4637997dd0641d4e8dedb5731', 'admin', '14e1b600b1fd579f47433b88e8d85291', '53971090d0f94cd9b1c17fbf65acb811', 1),
(15, '5fcb505482a745c97f31d32f0f0cefd9', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'dba5ea5f2b8ecdb83876bf97d5c34bce', 1),
(16, '1ca5445d369d64490986361a43113cc6', 'admin', '14e1b600b1fd579f47433b88e8d85291', '92fb58ded32d4517205df099ab767d4e', 1),
(17, 'c1c786277b55e1aab792826c237a27c1', 'admin', '14e1b600b1fd579f47433b88e8d85291', '2a1a530e383b87ae74f7bf9abced9e20', 1),
(18, 'a1c08019cae5ce62f41868c7992ccaec', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'c28e4380ba3a7d3364e4f235d48cffd0', 1),
(19, '961ee4dd9519b9294900231113630a6f', 'admin', '14e1b600b1fd579f47433b88e8d85291', '89e071a0c5b32859e8df9b64603f1533', 1),
(20, '8cd9afa09fbac989646287801a4b4571', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'a24edce57c5cedf2f61240731371d34f', 1),
(21, '8cc03467c4c645bb886c042606ce801c', 'admin', '14e1b600b1fd579f47433b88e8d85291', '2d1cafcf49367e6f986f9936a3d56cc1', 1),
(22, '3e79e55f20b0c927824b4735f5763cd1', 'admin', '14e1b600b1fd579f47433b88e8d85291', '20ea1973530a1b0e2f914de717f860dd', 1),
(23, '4d374fb16d7b34b7a41d710c7e90e260', 'admin', '14e1b600b1fd579f47433b88e8d85291', '170646f3d632b7bfc5901939af497d33', 1),
(24, 'f8a54d4f55bfde8be951dbf8ff5bb9e9', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'e1018a14a25e57627ea9ec2395cf384f', 1),
(25, '660f2a54f19903e99f2c70f31a55112a', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'ee121964dfc4fdd11b3f04e9c3a2972d', 1),
(26, '857b247e73b70bcfd52cd36cad381a03', 'admin', '14e1b600b1fd579f47433b88e8d85291', '4dc36e487ec10f798c924c8612145e2f', 1),
(27, 'a37bf83a6e6412568c507a68abea39fe', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'd62b18ffb1ea9840c46890301f92a61d', 1),
(28, 'eb754d2551c21938bb3060281b85880f', 'admin', '14e1b600b1fd579f47433b88e8d85291', '74b7c6a741ba575aaaaa6652e5e89c9e', 1),
(29, 'a58c70f2cd173ffb278cf2d360880829', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'c45778bd290941841908746e7cbd5488', 1),
(30, '7374a4bab15347c117f97577c1f13dfd', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'bfbdc1e35a678245d669062d17fc65bc', 1),
(31, '529b83ecc1d83a7348f362477eee4336', 'admin', '14e1b600b1fd579f47433b88e8d85291', '96863d69d1e8d01dece773bc08c32a9b', 1),
(32, '35095c390568dbe448652ac252eb6f0e', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'cd15985f123e234ccc15e7a1d796e60c', 1),
(33, '0ef08a84c9704211472b5c13b05e3d76', 'admin', '14e1b600b1fd579f47433b88e8d85291', '29bf0abff69a6e55acdb5b85c445f57b', 1),
(34, 'fe0828de931346311f526157b7b33e43', 'admin', '14e1b600b1fd579f47433b88e8d85291', '27da64e7865b47b2345d6f4497f01dab', 1),
(35, '7dc6afa812df94ec6e9f6f6d03e9c8fd', 'admin', '14e1b600b1fd579f47433b88e8d85291', '6d22aed3b837efb222c15e4a22fef457', 1),
(36, '0c76feb00ca59405ad9a3119f8190157', 'admin', '14e1b600b1fd579f47433b88e8d85291', '7c90462825def80e24877ef2fee0740a', 1),
(37, 'd47c19c7e825ac26807cd2867d8800ce', 'admin', '14e1b600b1fd579f47433b88e8d85291', '7d967383468c3d012979372f7d6775b4', 1),
(38, 'd50a373aa20fa7f7b51fe74875c3ac5e', 'admin', '14e1b600b1fd579f47433b88e8d85291', '11528e14baae3fd29774e7658cc773c8', 1),
(39, 'aaf43d6cad583fd23cfee40652d2d281', 'admin', '14e1b600b1fd579f47433b88e8d85291', '7602af4437e034232c49d863b07b536c', 1),
(40, '501c0cc21c5c56192429fca7dcc8c277', 'admin', '14e1b600b1fd579f47433b88e8d85291', '5d02c912bd16aec2b2127130575b981e', 1),
(41, '0795139104bb39c82d9bc3a8c6add95d', 'admin', '14e1b600b1fd579f47433b88e8d85291', '221125c58ac1e188f82327160ead2625', 1),
(42, '44cf81ab0e57f3d74a48a5c0a4acb3fb', 'admin', '14e1b600b1fd579f47433b88e8d85291', '978c106ccc302d96a5f36e8ec4bd50cc', 1),
(43, 'b8d2c57c90b372e1d0b658135d2f8674', 'admin', '14e1b600b1fd579f47433b88e8d85291', '03b9f57c0aab21f310e2cabc65106e6d', 1),
(44, '9c0c0c7c8d073176be56405c64d57dea', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'ead483d52d0d483ae2bdc2975b0c7d87', 1),
(45, '62836dba50a70330e541959e2f187418', 'admin', '14e1b600b1fd579f47433b88e8d85291', '4b68f144550b3f1b7b3bdefcafd3f4cb', 1),
(46, '2b71860e60a517200392595e2441937e', 'admin', '14e1b600b1fd579f47433b88e8d85291', '9b07f0c58e7e537e6700ea1e505c0a87', 1),
(47, 'f82063f1988100a9f680cb7b69fd3633', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'e23b31886ee4a83ff15856815f3588f1', 1),
(48, 'a6920fb322e6a5edad0a9f3df16d5273', 'admin', '14e1b600b1fd579f47433b88e8d85291', '5bba84748df8628143ac6a52898a74fa', 1),
(49, '13b7f7c6b03ad49f816e28d0957de1a6', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'e8d7fd24678091456d2a6c7361f0e823', 1),
(50, '57cf8c2e886cebb14be9f43ddd52784a', 'admin', '14e1b600b1fd579f47433b88e8d85291', '7db727213568fbd5f8ab0751cd83898c', 1),
(51, 'caaa704627ec8872c58fb63a89e4bb89', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'd1e8996c4405a84c7d69df85e6d6633c', 1),
(52, 'ecb9cfe76411fbdc342d9ac2834ddffb', 'admin', '14e1b600b1fd579f47433b88e8d85291', '64125a17cbd87c18e4a3d3a49332c8a8', 1),
(53, 'bef68c28540bddd96c897a3389ea8090', 'admin', '14e1b600b1fd579f47433b88e8d85291', '29ac1892458f7ffd6aa07f08a643fe9c', 1),
(54, 'ec6973f9aa47b9ff48f066620cbc32f4', 'admin', '14e1b600b1fd579f47433b88e8d85291', '8cf557a1b7af24e1f184b2e457476e16', 1),
(55, '66cbd91ef281ec72acee7e315f525bfd', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'cdc4bee2b4a9ca8adf3270e919ef19c5', 1),
(56, 'fd0ee01c348eaa470c02e7d30f37a938', 'admin', '14e1b600b1fd579f47433b88e8d85291', '1489fcdb42cd5943f294c902d04a44bc', 1),
(57, '241de7bfce621e2bf1e049c714909168', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'e1fda54c6927d359d28f1f5ff254632c', 1),
(58, 'f176dea60258712c35e308277320feb8', 'admin', '14e1b600b1fd579f47433b88e8d85291', '2f8255c2ce4702bda44affa47c28ac36', 1),
(59, '175ebf1ce97f9700a68e10c9ccd25238', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'b1a02fc979cd2a6821b6e26c61ae3c7f', 1),
(60, '514a0a2c5212021f57384a0fb6ffaed8', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'ea6ba7b4d19392140b9aba3d0b99b934', 1),
(61, 'dcaf24b47673bbb0a3cb9b7f3de72ab1', 'admin', '14e1b600b1fd579f47433b88e8d85291', '0332b73e00d81ffbe7c442e657cbd3ef', 1),
(62, 'c4bef0085f798edc6b9d7c6510b44eeb', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'ad8582a92684bb29fccdca6ee70524d7', 1),
(63, 'dacc36aced41bd05df97d07bdc2cf185', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'a138229efffe28ad9f80cbf5b9f90b53', 1),
(64, '5ec1f620a4d877f9e27b3ce75a7b8c4a', 'admin', '14e1b600b1fd579f47433b88e8d85291', '63765e5163b804c877fe13b8dfbb9744', 1),
(65, '48f7464edfbf1936bdcee5d32870caef', 'admin', '14e1b600b1fd579f47433b88e8d85291', '84362308ae490f2da0620ce63bb761ca', 1),
(66, '2395420bf983ae711e71b3080b2ca167', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'a209fc99bfcaec7caf2d1b8231c22bc4', 1),
(67, 'c7afa7babd47ff2daae37030e89b850c', 'admin', '14e1b600b1fd579f47433b88e8d85291', '794a340863f988b69eb50d4d32c54444', 1),
(68, '4b756989256a29da606c57afde58dba7', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'cd12d6069e089df1ddf79ffda1c46c0e', 1),
(69, 'a7f1f0c726e52aef22851ee2c14ddefb', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'c43e8e61c0698e1e2e229f9defb4b949', 1),
(70, '24ed5bec487d11c193fd29c76c2cda61', 'admin', '14e1b600b1fd579f47433b88e8d85291', '6371073e165c4c671c7ecec4c367532c', 1),
(71, 'b117ef6cf01e197b84062d2eaa906eb4', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'f45f17470a8c1b9db31ea8ba4f9405da', 1),
(72, '2cbf3aa5db2de49ef6dcd0ff0fbd719d', 'admin', '14e1b600b1fd579f47433b88e8d85291', 'a2d9273c4c2a13df0c1e32d13dce51ce', 1),
(73, 'f23c8f9c8e3c7db7d236a27fd7e11c0a', 'admin', '14e1b600b1fd579f47433b88e8d85291', '1add6e7a60c7d97d1a7a9d40b4153faf', 1),
(74, '8d69e49bfe85726da9a1f7a283a543d7', 'admin', '9f3ce536c1ebf23a2a8371db88a9d0b9', 'be71085a9770bd3c8c3a5a9776622c40', 1),
(75, '27bfd6bfe04d5346710a1df50e3b4e70', 'admin', '9f3ce536c1ebf23a2a8371db88a9d0b9', 'a7fc7afb3271d021f97241e97ee6b608', 1),
(76, '0c69f2470038676c327b86723243b9de', 'admin', '9f3ce536c1ebf23a2a8371db88a9d0b9', '6f2d8ed6f7c8f37d32d6a7c2696416dd', 1),
(77, 'eb9f73368beaabab2db7d2c4976d38ae', 'admin', '9f3ce536c1ebf23a2a8371db88a9d0b9', '93d481af479328485185d7e75c524060', 1),
(78, 'd350d9cb523b34bd376e54ff31b0f6a3', 'admin', '8744dfc403fe5da9d231accddc968db9', '118db2229b9dfae9ef41b81efe81617a', 1),
(79, '83cdce8382ffeff0581b33da92866757', 'admin', '8744dfc403fe5da9d231accddc968db9', 'e7846fce250ecb3f17a2ddd37b4cbd54', 1),
(80, 'b890b732491c25b7b4af46cdc92a32e8', 'admin', '8744dfc403fe5da9d231accddc968db9', 'daef5569799365c2f4df66016d4b6bdd', 1),
(81, '569560b7a485302b8f694efd781ed75b', 'admin', '8744dfc403fe5da9d231accddc968db9', '8c358f402dbecd2e937ca892344bb3de', 1),
(82, '7b8c98b0f4880264f2cabb39b3bab4bd', 'admin', '8744dfc403fe5da9d231accddc968db9', '2fb73dcda41d7dc7b64660db496aa2fc', 1),
(83, '35ece7a2c192ec4025cad2ed174f2312', 'admin', '8744dfc403fe5da9d231accddc968db9', '4ccdbd316fd68b6b32c9eb449dd47fec', 1),
(84, '5afef9093c124bdc48c7ebc48496e3fa', 'admin', '8744dfc403fe5da9d231accddc968db9', '71ebd9196f9e4b08df930bf1d4766797', 1),
(85, '1eb55d153547a42c109b82714e76b26a', 'admin', '8744dfc403fe5da9d231accddc968db9', '4b6aeacdd62532db77fcbf799d83ea3a', 1),
(86, 'f63fa6922914d5c48e47db54a3e1bbcf', 'admin', '8744dfc403fe5da9d231accddc968db9', '6fc5ffa5db61053b6b528060fe9169e9', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_sessions`
--
ALTER TABLE `admin_sessions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_sessions`
--
ALTER TABLE `admin_sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
