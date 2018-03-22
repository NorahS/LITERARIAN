-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 12:11 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `literarian`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `version` text,
  `owner` varchar(200) NOT NULL,
  `link` varchar(2000) NOT NULL,
  `course` varchar(400) NOT NULL,
  `uni_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `version`, `owner`, `link`, `course`, `uni_id`, `price`) VALUES
(1, 'Artificial Intelligence: A Modern Approach', '3rd', 'aziz', 'https://images-na.ssl-images-amazon.com/images/I/51JYTR9QSTL._SX258_BO1,204,203,200_.jpg', 'Artificial Intelligence', 0, 30),
(2, 'Introduction to Economic Analysis', '2nd', 'NorahSab', 'https://images-na.ssl-images-amazon.com/images/I/51GpO0uHEWL._SX258_BO1,204,203,200_.jpg', 'Macro Economy', 0, NULL),
(3, 'An Introduction to the Analysis of Algorithms', '4th', 'Norahsab', 'https://images-na.ssl-images-amazon.com/images/I/51huCT-UVlL._UY250_.jpg', 'Algorithm Analysis', 0, NULL),
(4, 'Operating System Concepts', '1st', 'Norahsab', 'http://codex.cs.yale.edu/avi/os-book/images/os9c-cover.jpg', 'Operating System', 0, NULL),
(5, 'Complex Variables', '1st', 'Norahsab', 'https://images-na.ssl-images-amazon.com/images/I/414GMxWpCXL.jpg', 'Calculus', 0, NULL),
(6, 'Introduction to Networking: How the Internet Works', '1st', 'norahsab', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1434305920i/25616802._UY500_SS500_.jpg', 'Networking', 0, NULL),
(7, 'Linear Algebra and Its Applications', '2nd', 'Norahsab', 'https://images-na.ssl-images-amazon.com/images/I/51sCBws2j7L._SX386_BO1,204,203,200_.jpg', 'Linear Algabra', 0, NULL),
(8, 'Programming Languages: Application and Interpretation', '1st', 'Norahsab', 'https://upload.wikimedia.org/wikipedia/en/thumb/a/ac/PLAI-cover.jpg/220px-PLAI-cover.jpg', 'Programming Languages', 0, NULL),
(9, 'Introduction to Financial Accounting', '1st', 'Norasab', 'http://www-fp.pearsonhighered.com/assets/hip/images/bigcovers/027377025X.jpg', 'Finance', 0, NULL),
(10, 'Physics ', '4th', 'Norahsab', 'https://images-na.ssl-images-amazon.com/images/I/41a7N4KT%2BOL.jpg', 'Physics ', 0, NULL),
(63, 'Artificial Intelligence: A Modern Approach', '3rd', 'MahaB', 'https://images-na.ssl-images-amazon.com/images/I/51JYTR9QSTL._SX258_BO1,204,203,200_.jpg', 'Artificial Intelligence', 0, 30),
(64, 'Artificial Intelligence: A Modern Approach', '3rd', 'MahaB', 'https://images-na.ssl-images-amazon.com/images/I/51JYTR9QSTL._SX258_BO1,204,203,200_.jpg', 'Artificial Intelligence', 0, NULL),
(65, 'Organic Chemistry', '', 'NorahFinal', 'https://images-na.ssl-images-amazon.com/images/I/812ciIkMwpL.jpg', 'Chemistry', 4, 20),
(66, 'Java software', '2nd', 'NorahFinal', 'https://www.pearsonhighered.com/assets/bigcovers/0/1/3/2/0132222515.jpg', 'Computer Science', 4, 10),
(67, 'Python Programming', '3rd', 'NorahFinal', 'https://images-na.ssl-images-amazon.com/images/I/61fE9l0gPIL.jpg', 'Computer Science', 4, 90),
(68, 'Algebra', '7th', 'NorahFinal', 'http://1.media.collegehumor.cvcdn.com/c/8/collegehumor.d92dfb4c8dd29dc3d678290811a920b8.jpg', '', 4, 80),
(69, 'calculus', '3rd', 'NorahFinal', 'https://www.google.com.sa/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjo3dmR_ZvYAhWIPxQKHTeNBIEQjRwIBw&url=https%3A%2F%2Fwww.amazon.ca%2FCalculus-Early-Transcendentals-James-Stewart%2Fdp%2F0495011665&psig=AOvVaw3XmcvtIaxK8JPUmrcrf6SI&ust=1513975697390408', '', 4, 60),
(70, 'calculus', '1st', 'NorahFinal', 'https://images.ezvid.com/image/upload/fl_immutable_cache/e_trim/c_pad,f_auto,h_270,q_auto/cgzsov1xq4mduuuu2f7a', '', 4, 50),
(71, 'Predict Emergency Medicine', '2nd', 'NorahFinal', 'https://cdn-tp2.mozu.com/16833-25855/cms/25855/files/b6df550f-eb72-4dd0-b661-ea9608f94ff2?max=750&_mzcb=_1512129947641', '', 4, 30),
(72, 'Predict Emergency Medicine', '2nd', 'NorahFinal', 'https://cdn-tp2.mozu.com/16833-25855/cms/25855/files/b6df550f-eb72-4dd0-b661-ea9608f94ff2?max=750&_mzcb=_1512129947641', '', 4, 30),
(73, 'Vector Mechanics for Engineering ', '3rd', 'NorahFinal', 'https://images-na.ssl-images-amazon.com/images/I/512IYDvpzvL._SX389_BO1,204,203,200_.jpg', '', 4, 55),
(74, 'discrete mathematics and its applications', '7th', 'NorahFinal', 'http://ebook-dl.com/pictures/books/discrete_mathematics_and_its_applications_kenneth_rosen(www.ebook-dl.com)_Large.jpg', '', 4, 90),
(75, 'organizational behavior', '4th', 'NorahFinal', 'https://static.cengagelearning.com.au/productresizehandler?isbn=9781111825867&width=294&height=386', '9', 4, 50),
(76, 'Financial Accounting', '5th', 'NorahFinal', 'http://valuationschool.com/wp-content/uploads/2015/06/financial-accounting.jpg', 'Accounting', 4, 60),
(77, 'human computer interaction', '1st', 'NorahFinal', 'http://www.hcibib.org/images/baeck87.jpg', 'Computer', 4, 90),
(80, 'Business Law: Text and Cases', '13th', 'NorahFinal', 'https://www.cengage.com/covers/imageServlet?image_type=LRGFC&catalog=cengage&epi=2305076269450672738776043291123798867', 'Law', 4, 90),
(81, 'Machine Learning', '1st', 'NorahFinal', 'https://www.analyticsvidhya.com/wp-content/uploads/2015/10/2.png', 'Computer', 4, 0),
(82, 'Fundamentals of Differential Equations', '8th', 'NorahFinal', 'https://images-na.ssl-images-amazon.com/images/I/41BVB2vVEnL._SX398_BO1,204,203,200_.jpg', 'Mathematics', 4, 70),
(83, 'Modeling Life: The Mathematics of Biological Systems', '1st', 'NorahFinal', 'https://images-na.ssl-images-amazon.com/images/I/51hlaYQHOwL._SX350_BO1,204,203,200_.jpg', 'Biological', 4, 0),
(84, 'The Science Of Education', '1st', 'NoufAlmoajel', 'https://www.nap.edu/cover/4962/450', 'Psychology', 3, 0),
(85, 'Calculus and Linear Algebra V.1 ', '3rd', 'Bodor', 'https://images-na.ssl-images-amazon.com/images/I/319CyOKU-PL._SX331_BO1,204,203,200_.jpg', 'Mathematics', 14, 90),
(86, 'Electromagnetic Theory', '2nd', 'najal', 'https://media.wiley.com/product_data/coverImage300/35/04701315/0470131535.jpg', 'Physics', 16, 0),
(93, 'Differential Equations and Linear Algebra ', '1st', 'reemasabti', 'https://images-na.ssl-images-amazon.com/images/I/51sKLaQrEAL._SX388_BO1,204,203,200_.jpg', 'Mathematics', 1, 0),
(94, 'Matrix Algebra & Its Applications to Statistics & Econometrics ', '1st', 'reemasabti', 'https://images-na.ssl-images-amazon.com/images/I/51vOqjJFBaL._SX345_BO1,204,203,200_.jpg', 'Mathematics', 1, 0),
(95, 'Capitalism Without Capital: The Rise of the Intangible Economy', '1st', 'NOUFSABTI', 'https://images-na.ssl-images-amazon.com/images/I/516hJ8S176L._SX322_BO1,204,203,200_.jpg', 'Business', 19, 0),
(96, 'Capitalism Without Capital: The Rise of the Intangible Economy', '1st', 'shams', 'https://images-na.ssl-images-amazon.com/images/I/516hJ8S176L._SX322_BO1,204,203,200_.jpg', 'Business', 1, 0),
(98, 'Book Art', '2nd', 'NoraAsh', 'http://www.rylandpeters.com/media/wysiwyg/2013/01/IW-CB603_BOOK_ART_JCKT_01_x-843x1024.jpg', 'Art', 4, 50);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`) VALUES
(1, 'Accounting and Finance'),
(2, 'Architecture'),
(3, 'Art and Design'),
(4, 'Biological Sciences'),
(5, 'Business and Management Studies'),
(6, 'Chemical Engineering'),
(7, 'Chemistry'),
(8, 'Civil Engineering'),
(9, 'Computer Science'),
(10, 'Dentistry'),
(11, 'Economics'),
(12, 'Electrical and Electronic Engineering'),
(13, 'English\r\n'),
(14, 'Law'),
(15, 'Linguistics'),
(16, 'Marketing'),
(17, 'Mathematics'),
(18, 'Mechanical Engineering'),
(19, 'Nursing'),
(20, 'Pharmacology and Pharmacy'),
(21, 'Physics and Astronomy'),
(22, 'Politics'),
(23, 'Psychology'),
(24, 'Robotics'),
(25, 'Shariah');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` int(11) NOT NULL,
  `name` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`) VALUES
(1, 'King Saud University'),
(2, 'Princess Nora University'),
(3, 'Imam Muhammad bin Saud Islamic University'),
(4, 'Prince Sultan University'),
(6, 'Riyadh College of Dentistry and Pharmacy'),
(7, 'Al Yamamah University'),
(8, 'King Saud bin Abdulaziz University for Health Sciences'),
(9, 'Alfaisal University'),
(10, 'King Abdulaziz University'),
(11, 'Umm Al-Qura University'),
(12, 'Dar Al-Hekma College'),
(13, 'College of Business Administration (CBA)'),
(14, 'Ibn Sina National College for Medical Studies'),
(15, 'King Fahd University for Petroleum and Minerals'),
(16, 'King Khalid University	'),
(17, 'Qassim University'),
(18, 'Al Jawf University'),
(19, 'Tabuk University'),
(20, 'Fahd bin Sultan University');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `university` varchar(50) DEFAULT NULL,
  `sell` text,
  `buy` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `name`, `email`, `password`, `university`, `sell`, `buy`) VALUES
('aziz', 'Aziz Mohammad', 'azizmoh@gmail.com', 'c42fe09be347b52174fc43fe80a93eb1', 'King Saud University', NULL, NULL),
('Bodor', 'BodorSabti', 'alsabti@live.com', '2cfd4560539f887a5e420412b370b361', 'Ibn Sina National College for Medical Studies', ',85', NULL),
('MahaB', 'Maha Albluwi', 'maha@hotmail.com', 'c4efd5020cb49b9d3257ffa0fbccc0ae', 'Prince Sultan University', NULL, NULL),
('n', 'aa', 'alsabti.93@gmail.com', '4124bc0a9335c27f086f24ba207a4912', '', NULL, NULL),
('najal', 'najla', 'najal@hotmail.com', '2cfd4560539f887a5e420412b370b361', 'King Khalid University	', '86', NULL),
('nor333', '333', '32@44', '2cfd4560539f887a5e420412b370b361', 'King Saud University', NULL, NULL),
('NoraAsh', 'Nora Alshaalan', 'noraalshaalan@hotmail.com', 'a1931ec126bbad3fa7a3fc64209fd921', 'Prince Sultan University', '98', NULL),
('norah67', 'nor', 'norah-sh95@hotmail.com', '2cfd4560539f887a5e420412b370b361', '', NULL, NULL),
('norah678', '112', '11@3', '2cfd4560539f887a5e420412b370b361', 'Prince Sultan University', NULL, NULL),
('NorahFinal', 'Norah', 'alsabtiii@gmail.com', '2cfd4560539f887a5e420412b370b361', 'Prince Sultan University', '77,68,80,81,82,83', NULL),
('norahs9', 'Norah', 'alsabti.93@gmail.com', 'dbf394a311bf4e506140dff3b0f2d0da', 'PSU', NULL, NULL),
('NorahSab', 'Norah Sabti', 'sabti@gmail.com', 'a1931ec126bbad3fa7a3fc64209fd921', 'Prince Sultan University', NULL, NULL),
('Norahsabti', 'norahSab', 'alsabti.93@gmail.com', '2cfd4560539f887a5e420412b370b361', 'Prince Sultan University', NULL, NULL),
('nornor', '84', '32@44', '2cfd4560539f887a5e420412b370b361', 'King Saud University', NULL, NULL),
('NoufAlmoajel', 'Nouf', 'nouf@hotmail.com', '2cfd4560539f887a5e420412b370b361', 'Imam Muhammad bin Saud Islamic University', '84', NULL),
('NOUFSABTI', 'Nouf', 'NOUF@ALSABTI.COM', '2cfd4560539f887a5e420412b370b361', 'Tabuk University', '95', NULL),
('reemasabti', 'reemalsabti', 'r.a.s@htomail.com', '2cfd4560539f887a5e420412b370b361', 'King Saud University', '93,94', NULL),
('shams', 'shams', 'shams@mu.sa', '2cfd4560539f887a5e420412b370b361', 'King Saud University', '96', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
