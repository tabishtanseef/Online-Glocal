-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2017 at 04:59 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineglocal`
--

-- --------------------------------------------------------

--
-- Table structure for table `computer_science`
--

CREATE TABLE `computer_science` (
  `notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `u_id` int(22) NOT NULL,
  `type` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer_science`
--

INSERT INTO `computer_science` (`notes_id`, `name`, `designation`, `sub`, `topic`, `file`, `descp`, `keywords`, `date`, `time`, `u_id`, `type`) VALUES
(1, 'ji', '', 'sub', 'topic', 'hi', 'hi', 'hi', '', '', 0, ''),
(2, 'ji', '', 'sub', 'topic', 'hi', 'hi', 'hi', '', '', 0, ''),
(3, 'ji', '', 'sub', 'topic', 'hi', 'hi', 'hi', '', '', 0, ''),
(4, 'Tabish', 'student', 'Data Structure', 'Heap', '26414-IMG_20150916_095043.jpg', 'jjj', 'kkkk', '', '', 0, ''),
(5, 'Tabish', 'student', 'Data Structure', 'Heap', '73567-IMG_20150916_095043.jpg', 'mnbvc', 'lkjh', '', '', 0, ''),
(6, 'a', 'Student', 'a', 'a', '40756-roni.pdf', 'aa', 'aa', '', '', 0, ''),
(7, 'e', 'Student', 'e', 'e', '24511-VID-20150628-WA0093.mp4', 'gjuj', 'nbjnb', '', '', 0, ''),
(8, 'ggooopnmq', 'Student', 'hgfg', 'u', '42497-VID-20150630-WA0002.mp4', 'b', 'b', '7-Jan-2017', '08:24:06 AM', 0, ''),
(9, 'bvbb', 'Student', 'bbb', 'bbb', '83238-VID-20150630-WA0002.mp4', 'vbg', 'bb', '7-Jan-2017', '09:53:17 AM', 0, ''),
(10, 'MAAZ', 'Student', 'qw', 'qw', '37182-VID-20150630-WA0002.mp4', 'ww', 'qw', '7-Jan-2017', '02:00:14 PM', 39, ''),
(11, 'MAAZ', 'Student', 'sssssss', 'sssssss', '59467-2.jpg', 'ssssss', 'sssss', '8-Jan-2017', '01:31:02 PM', 39, 'jpg'),
(12, 'MAAZ', 'Student', 'cc', 'cc', '38080-abc.jpg', 'c', 'c', '8-Jan-2017', '01:39:17 PM', 39, 'jpg'),
(13, 'MAAZ', 'Student', '2', '2', '7060-help.png', '2', '2', '8-Jan-2017', '01:39:50 PM', 39, 'png'),
(14, 'MAAZ', 'Student', 'ee', 'ee', '46122-2F.pdf', 'ee', 'ee', '8-Jan-2017', '01:42:04 PM', 39, 'pdf'),
(15, 'MAAZ', 'Student', 'ee', 'ee', '21822-flip-master.zip', 'e', 'e', '8-Jan-2017', '01:43:28 PM', 39, 'zip'),
(16, 'MAAZ', 'Student', 'sssssss', 'sssssss', '8166-UmAr.mp4', 's', 's', '8-Jan-2017', '01:44:35 PM', 39, 'mp4'),
(17, 'MAAZ', 'Student', 'heap', 'ghj', '10562-final_copy.pdf', 'djwgj', 'dbdjkbv', '9-Jan-2017', '09:47:49 AM', 39, 'pdf'),
(18, 'MAAZ', 'Student', 'wdfefe rferfeefeff', 'fefefefefef efefefefefef efee', '87269-final_copy.pdf', 'efefefefefefefgefefefe vergergergrg efegegergerg rgegregrgrgrg regrgrgrgrgr grgrgrg', 'rgrgrrg rgrgrgrgr brgrgr', '9-Jan-2017', '06:40:28 PM', 39, 'pdf'),
(19, 'MAAZ', 'Student', 'ggh', 'hhh', '41750-2.jpg', 'hh', 'ujukj', '13-Jan-2017', '11:15:23 AM', 39, 'jpg'),
(20, 'MAAZ', 'Student', 'kjgjk', 'jbgjhbhj', '83806-smtp.pdf', 'jhibhjbkh', 'hg', '16-Jan-2017', '07:30:45 AM', 39, 'pdf');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `d_id` int(20) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `d_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`d_id`, `d_name`, `d_pic`) VALUES
(1, 'School of Technology', 'technology.jpg'),
(2, 'Senior Secondary School', 'ss school.jpg'),
(3, 'School of Education', 'education.jpg'),
(4, 'School of Law', 'law.jpg'),
(5, 'School of Life Science', 'life science.jpg'),
(6, 'School of Management', 'management.jpg'),
(7, 'School of Mass Communication', 'mass.jpg'),
(8, 'Glocal Medical College', 'medical.jpg'),
(9, 'School of Pharmacy', 'pharmacy.jpg'),
(10, 'School of Polytechnic', 'polytechnic.jpg'),
(11, 'School of Computer Science', 'education.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `date` varchar(22) NOT NULL,
  `time` varchar(22) NOT NULL,
  `u_id` int(22) NOT NULL,
  `type` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `msg_id` int(22) NOT NULL,
  `u_id` int(22) NOT NULL,
  `u_pic` varchar(200) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(15) NOT NULL,
  `u_name` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`msg_id`, `u_id`, `u_pic`, `msg`, `date`, `time`, `u_name`) VALUES
(2, 39, '87604-The_Glocal_University-_Logo.png', 'ffgbfrbghrg', '12-Jan-2017', '04:22:40 PM', 'MAAZ'),
(3, 39, '87604-The_Glocal_University-_Logo.png', 'kbjbjkbkjb', '12-Jan-2017', '09:25:46 PM', 'MAAZ'),
(4, 39, '87604-The_Glocal_University-_Logo.png', 'helloooo', '13-Jan-2017', '08:32:40 AM', 'MAAZ'),
(5, 39, '87604-The_Glocal_University-_Logo.png', 'hello ', '13-Jan-2017', '08:34:27 AM', 'MAAZ'),
(6, 39, '87604-The_Glocal_University-_Logo.png', 'hellooo', '13-Jan-2017', '08:34:59 AM', 'MAAZ'),
(7, 39, '87604-The_Glocal_University-_Logo.png', 'hh', '13-Jan-2017', '11:37:17 AM', 'MAAZ'),
(8, 39, '87604-The_Glocal_University-_Logo.png', 'jhfhvjh', '13-Jan-2017', '11:39:07 AM', 'MAAZ'),
(9, 39, '87604-The_Glocal_University-_Logo.png', 'nnnnnn', '13-Jan-2017', '11:40:14 AM', 'MAAZ'),
(10, 39, '87604-The_Glocal_University-_Logo.png', 'kjbk', '13-Jan-2017', '11:41:16 AM', 'MAAZ'),
(11, 39, '87604-The_Glocal_University-_Logo.png', 'hvhjvjhjv', '13-Jan-2017', '11:42:06 AM', 'MAAZ'),
(12, 39, '87604-The_Glocal_University-_Logo.png', 'jbjbjjbjbjj8', '13-Jan-2017', '11:43:45 AM', 'MAAZ'),
(13, 39, '87604-The_Glocal_University-_Logo.png', 'jgjbubouo', '13-Jan-2017', '11:44:39 AM', 'MAAZ'),
(14, 39, '87604-The_Glocal_University-_Logo.png', 'gugbuk', '13-Jan-2017', '11:44:59 AM', 'MAAZ'),
(15, 39, '87604-The_Glocal_University-_Logo.png', 'FRGRG', '13-Jan-2017', '03:23:21 PM', 'MAAZ'),
(16, 39, '87604-The_Glocal_University-_Logo.png', 'dgdgdgd', '13-Jan-2017', '03:24:59 PM', 'MAAZ'),
(17, 39, '87604-The_Glocal_University-_Logo.png', 'mjvhbvhjmbjk', '13-Jan-2017', '03:25:21 PM', 'MAAZ'),
(18, 39, '87604-The_Glocal_University-_Logo.png', 'hvh', '13-Jan-2017', '03:25:57 PM', 'MAAZ'),
(19, 39, '87604-The_Glocal_University-_Logo.png', 'jhvhj h jhgh jgjhg hj gh gjhghghgjhjh hjg jhg j', '13-Jan-2017', '03:38:18 PM', 'MAAZ'),
(20, 39, '87604-The_Glocal_University-_Logo.png', 'HELP MEEE', '13-Jan-2017', '06:34:47 PM', 'MAAZ'),
(21, 39, '46630-17.jpg', 'hghghhg', '16-Jan-2017', '07:32:20 AM', 'MAAZ');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackhandling`
--

CREATE TABLE `feedbackhandling` (
  `r_id` int(22) NOT NULL,
  `u_id` int(22) NOT NULL,
  `u_name` varchar(33) NOT NULL,
  `u_pic` varchar(200) NOT NULL,
  `rep` varchar(500) NOT NULL,
  `da` varchar(20) NOT NULL,
  `ti` varchar(20) NOT NULL,
  `ref_id` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbackhandling`
--

INSERT INTO `feedbackhandling` (`r_id`, `u_id`, `u_name`, `u_pic`, `rep`, `da`, `ti`, `ref_id`) VALUES
(2, 39, 'MAAZ', '87604-The_Glocal_University-_Logo.png', 'jhvhjvjh', '12-Jan-2017', '08:02:12 PM', '2'),
(3, 39, 'MAAZ', '87604-The_Glocal_University-_Logo.png', 'jhfgjc', '12-Jan-2017', '08:28:01 PM', '2'),
(4, 39, 'MAAZ', '87604-The_Glocal_University-_Logo.png', 'jfjfjf', '12-Jan-2017', '08:38:17 PM', '2'),
(5, 39, 'MAAZ', '87604-The_Glocal_University-_Logo.png', 'hgchgcjjhcf', '12-Jan-2017', '08:38:43 PM', '2'),
(6, 39, 'MAAZ', '87604-The_Glocal_University-_Logo.png', 'hhhhhh', '12-Jan-2017', '08:38:56 PM', '2'),
(7, 39, 'MAAZ', '87604-The_Glocal_University-_Logo.png', 'efefef34f4', '12-Jan-2017', '09:15:25 PM', '2'),
(8, 39, 'MAAZ', '87604-The_Glocal_University-_Logo.png', 'ff', '12-Jan-2017', '09:16:48 PM', '2'),
(9, 39, 'MAAZ', '87604-The_Glocal_University-_Logo.png', 'hh', '12-Jan-2017', '09:24:57 PM', '2'),
(10, 39, 'MAAZ', '87604-The_Glocal_University-_Logo.png', 'ghjjjj', '12-Jan-2017', '09:26:39 PM', '3'),
(11, 39, 'MAAZ', '87604-The_Glocal_University-_Logo.png', 'khkjhkhj777', '12-Jan-2017', '10:25:56 PM', '3'),
(12, 39, 'MAAZ', '87604-The_Glocal_University-_Logo.png', 'hvhv', '12-Jan-2017', '10:30:53 PM', '3'),
(13, 39, 'MAAZ', '87604-The_Glocal_University-_Logo.png', 'dd', '12-Jan-2017', '10:32:43 PM', '3'),
(14, 39, 'MAAZ', '87604-The_Glocal_University-_Logo.png', 'qwer', '13-Jan-2017', '07:41:38 AM', '3'),
(15, 39, 'MAAZ', '87604-The_Glocal_University-_Logo.png', 'KGUHG', '13-Jan-2017', '06:35:29 PM', '20'),
(16, 39, 'MAAZ', '87604-The_Glocal_University-_Logo.png', 'KHGKU', '13-Jan-2017', '06:37:44 PM', '20'),
(17, 39, 'MAAZ', '87604-The_Glocal_University-_Logo.png', 'gjgjg', '13-Jan-2017', '06:38:52 PM', '20');

-- --------------------------------------------------------

--
-- Table structure for table `law`
--

CREATE TABLE `law` (
  `notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `date` varchar(22) NOT NULL,
  `time` varchar(22) NOT NULL,
  `u_id` int(22) NOT NULL,
  `type` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `life_science`
--

CREATE TABLE `life_science` (
  `notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `date` varchar(22) NOT NULL,
  `time` varchar(22) NOT NULL,
  `u_id` int(22) NOT NULL,
  `type` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `life_science`
--

INSERT INTO `life_science` (`notes_id`, `name`, `designation`, `sub`, `topic`, `file`, `descp`, `keywords`, `date`, `time`, `u_id`, `type`) VALUES
(5, 'maaaaaa', 'Faculty', 'qqqqqqqqq', 'qqqqqqqq', '2145-fst.docx', 'qqqqqqqq', 'qqqqqqq', '8-Jan-2017', '01:29:31 PM', 40, 'docx'),
(6, 'maaaaaa', 'Faculty', 'vbvbv', '', '61035-assignment_2.pdf', 'jgkjgkhj', '', '10-Jan-2017', '10:04:00 AM', 40, 'pdf'),
(7, 'maaaaaa', 'Faculty', 'jgjbg', '', '37291-smtp.pdf', 'mknkjnkj,nknkmnknkmn', '', '10-Jan-2017', '10:06:32 AM', 40, 'pdf'),
(8, 'maaaaaa', 'Faculty', 'hghjvjvbhjbv', '', '15468-2F.pdf', 'mnkmnmkn,n kh', '', '10-Jan-2017', '10:07:31 AM', 40, 'pdf'),
(9, 'maaaaaa', 'Faculty', 'hvh', '', '60778-assignment_2.pdf', 'nvhvjmhb jhbh', '', '10-Jan-2017', '10:07:55 AM', 40, 'pdf'),
(10, 'maaaaaa', 'Faculty', 'hghj hjg ', '', '29409-Doc1.docx', 'vhb kjbjh hg h', '', '10-Jan-2017', '10:08:19 AM', 40, 'docx'),
(11, 'maaaaaa', 'Faculty', 'oihujhuihi', 'kjbjnbj', '24148-15349625_775122502636323_2543872858111123752_n.jpg', 'lknkjnkjnk', ',bbnm', '10-Jan-2017', '10:44:11 AM', 40, 'jpg'),
(12, 'maaaaaa', 'Faculty', 'rujru', 'uuii', '35007-C.M.M_MAZ.pdf', 'uii', 'ii', '10-Jan-2017', '03:13:40 PM', 40, 'pdf');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `date` varchar(22) NOT NULL,
  `time` varchar(22) NOT NULL,
  `u_id` int(22) NOT NULL,
  `type` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mass_communication`
--

CREATE TABLE `mass_communication` (
  `notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `date` varchar(22) NOT NULL,
  `time` varchar(22) NOT NULL,
  `u_Id` int(22) NOT NULL,
  `type` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `date` varchar(22) NOT NULL,
  `time` varchar(22) NOT NULL,
  `u_id` int(22) NOT NULL,
  `type` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(20) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `notice_title` varchar(100) NOT NULL,
  `notice_descp` varchar(500) NOT NULL,
  `file` varchar(300) NOT NULL,
  `fac_id` int(22) NOT NULL,
  `date` varchar(22) NOT NULL,
  `time` varchar(22) NOT NULL,
  `type` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `f_name`, `dept`, `notice_title`, `notice_descp`, `file`, `fac_id`, `date`, `time`, `type`) VALUES
(1, 'maaaaaa', 'School of Life Science', 'ghrhr jh ', 'ghgr u', '61207-2F.pdf', 40, '10-Jan-2017', '10:09:36 AM', ''),
(3, 'maaaaaa', 'School of Life Science', 'kjbhjk', 'kjbjhbkbjkb', '30545-15349625_775122502636323_2543872858111123752_n.jpg', 40, '10-Jan-2017', '10:38:56 AM', 'jpg'),
(4, 'maaaaaa', 'School of Life Science', 'mnmn nm', 'bvhjbhjb ', '98405-s12.crash.gif', 40, '10-Jan-2017', '10:40:03 AM', 'gif'),
(5, 'maaaaaa', 'School of Life Science', 'knknk', 'bjkbh', '87169-s12.crash.gifs12.crash.gifs12.crash.gifs12.crash.gifs12.crash.gifs12.crash.gifs12.crash.gifs12.crash.gif', 40, '10-Jan-2017', '10:42:07 AM', 'gif'),
(6, 'maaaaaa', 'School of Life Science', 'kjbjn', 'mm,n mn mnmnmk', '89604-15349625_775122502636323_2543872858111123752_n.jpg', 40, '10-Jan-2017', '10:46:40 AM', 'jpg'),
(7, 'maaaaaa', 'School of Life Science', 'jhgvh', ',bn,bn,jbkj bjbj', '29765-15349625_775122502636323_2543872858111123752_n.jpg', 40, '10-Jan-2017', '10:49:42 AM', 'jpg'),
(8, 'maaaaaa', 'School of Life Science', 'efgegerg', 'efegfegege', '43086-15349625_775122502636323_2543872858111123752_n.jpg', 1, '10-Jan-2017', '10:55:37 AM', 'jpg'),
(9, 'maaaaaa', 'School of Life Science', 'sheershak', 'descripion', '87251-MAZ.pdf', 1, '10-Jan-2017', '11:11:47 AM', 'pdf'),
(10, 'MAAZ', 'School of Computer Science', 'bb', 'ggggg', '39968-C.M.M_MAZ.pdf', 39, '13-Jan-2017', '09:56:01 AM', 'pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `date` varchar(22) NOT NULL,
  `time` varchar(22) NOT NULL,
  `u_id` int(22) NOT NULL,
  `type` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `polytechnic`
--

CREATE TABLE `polytechnic` (
  `notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `date` varchar(22) NOT NULL,
  `time` varchar(22) NOT NULL,
  `u_id` int(22) NOT NULL,
  `type` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ss_school`
--

CREATE TABLE `ss_school` (
  `notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `date` varchar(22) NOT NULL,
  `time` varchar(22) NOT NULL,
  `u_id` int(22) NOT NULL,
  `type` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

CREATE TABLE `technology` (
  `notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `date` varchar(22) NOT NULL,
  `time` varchar(22) NOT NULL,
  `u_id` int(22) NOT NULL,
  `type` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technology`
--

INSERT INTO `technology` (`notes_id`, `name`, `designation`, `sub`, `topic`, `file`, `descp`, `keywords`, `date`, `time`, `u_id`, `type`) VALUES
(1, 'mji', 'Student', 'mkll', 'mlml', '58597-IMG_20150916_095043.jpg', 'mnbv', 'mkijhg', '', '', 0, ''),
(2, 'ss', 'Student', 'ss', 'ss', '42684-IMG_20150916_095043.jpg', 'hh', 'hh', '', '', 0, ''),
(3, 'nmjj', 'Student', 'hyy', 'bhhyu', '85353-IMG_20150916_095043.jpg', 'jkjh', 'jhj', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profilepic` varchar(300) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `email`, `password`, `profilepic`, `dept`, `course`, `designation`) VALUES
(22, 'Tabish Tanseef', 'tabishtanseef@gmail.com', 'tabish', '49648-t.jpg', 'School of Computer Science', 'B.tech', 'student'),
(23, 'ff', 'ff@gmail.com', 'ff', '30835-DSC_0326.JPG', 'School of Technology', 'MCA', 'student'),
(24, 'ww', 'ww@gmail.com', 'ww', '87142-DSC_0317.JPG', 'Senior Secondary School', 'BA', 'student'),
(25, 'Mohd Shahrukh', 'mohdshahrukh216@gmail.com', 'shahrukhhm', '76927-DSC_0475.JPG', 'School of Computer Science', 'MCA', 'Student'),
(26, 'gg', 'gg@gmail.com', 'gg', '18426-DSC_0333.JPG', 'School of Technology', 'None', 'Student'),
(27, 'MD Aamir', 'aamirm85@gmail.com', 'mehandi@123', '76719-20160529_171005.jpg', 'School of Technology', 'B.tech', 'Student'),
(28, 'Tab', 'tabishtanseef@gmail.com', 'tabish', '31795-20160529_131221.jpg', 'School of Computer Science', 'B.tech', 'Student'),
(29, 'nn', 'nabeelazam4321@gmail.com', 'nn', '62398-medical.sql', 'School of Technology', 'None', 'Student'),
(30, 'mn', 'Maz@gmail.com', 'mn', '44412-eclipse.exe', 'School of Technology', 'None', 'Faculty'),
(31, 'Mohd Shahrukh', 'mohd.israr.399488@facebook.com', 'mn', '29055-WIN_20150905_122547.JPG', 'School of Computer Science', 'BAMS', 'Student'),
(32, 'hgghuh', 'tabishtanseef@yahoo.in', 'm bj', '92287-WIN_20150907_102754.JPG', 'School of Technology', 'None', 'Student'),
(33, 'tab', 'tabishtanseef@yahoo.in', 'mbnm', '80468-WIN_20150930_113032.JPG', 'School of Technology', 'None', 'Student'),
(34, 'Tabish Tanseef', 'tabishtanseef@yahoo.in', 'mn', '15852-WIN_20150930_113032.JPG', 'School of Technology', 'None', 'Student'),
(35, 'cff', 'vv@gmail.com', 'aa', '26946-pim_installmgr.log.bak', 'School of Technology', 'None', 'Faculty'),
(36, 'Tabish Tanseef', 'tabishtanseef@yahoo.in', 'mnbvcxz', '38013-IMG_20150916_095043.jpg', 'School of Technology', 'B.Pharma', 'Student'),
(37, 'Mohd Shahrukh', 'tabishtanseef@gmail.com', '5555', '20976-IMG_20150916_095043.jpg', 'School of Life Science', 'D.Pharma', 'Student'),
(38, 'srk', 'srk@gmail.com', 'ss', '92357-IMG_20150916_095043.jpg', 'School of Computer Science', 'MCA', 'Student'),
(39, 'MAAZ', 'maazsofttech@gmail.com', '123', '46630-17.jpg', 'School of Computer Science', 'MCA', 'Student'),
(40, 'maaaaaa', 'm@gmail.cooom', '123', '91553-WIN_20160306_130603.JPG', 'School of Life Science', 'B.Sc', 'Faculty'),
(41, 'Maaz', 'maazsofttech@gmail.com', '122', '20559-WIN_20161217_114116.JPG', 'School of Computer Science', 'B.Pharma', 'Student'),
(42, 'qwe', 'maazsofttech@gmail.com', '123', '1564-WIN_20160306_130637.JPG', 'School of Technology', 'None', 'Student'),
(43, 'maazsofttech@gmail.com', 'maazsofttech@gmail.com', 'maazsofttech@gmail.com', '95239-WIN_20160306_130637.JPG', 'School of Technology', 'None', ''),
(44, 'maazsofttech@gmail.com', 'maazsofttech@gmail.com', 'maazsofttech@gmail.com', '76172-WIN_20160306_130637.JPG', 'School of Technology', 'None', 'Student'),
(45, 'maazsofttech@gmail.com', 'maazsofttech@gmail.com', 'maazsofttech@gmail.com', '1066-WIN_20160306_130637.JPG', 'School of Technology', 'None', 'Student'),
(46, 'maazsofttech@gmail.com', 'maech@gmail.com', 'maazsofttech@gmail.com', '85761-WIN_20160306_130637.JPG', 'School of Technology', 'None', 'Student'),
(47, 'erere', 'e@e.cpm', '45', '26442-15349625_775122502636323_2543872858111123752_n.jpg', 'School of Technology', 'None', 'Student'),
(48, 'hamza', 'm@mad.com', '123', '94444-IMG_84427749240273.jpeg', 'School of Technology', 'M.Sc', 'Student'),
(49, 'M', 'm@m.com', '123', '93601-WIN_20160308_183405.JPG', 'School of Technology', 'D.Pharma', 'Student'),
(50, 'Mohd Israr', 'misrar445@gmail.com', '123456', '83550-i.jpg', 'School of Computer Science', 'MCA', 'Student'),
(51, 'Mohammad Shahrukh', 'shahrukh216@gmail.com', 'srk', '40521-s.jpg', 'School of Computer Science', 'MCA', 'Student'),
(52, 'Rosh', 'rosh@gmail.com', '123', '8550-03072012181.jpg', 'School of Polytechnic', 'BAMS', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computer_science`
--
ALTER TABLE `computer_science`
  ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `feedbackhandling`
--
ALTER TABLE `feedbackhandling`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `law`
--
ALTER TABLE `law`
  ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `life_science`
--
ALTER TABLE `life_science`
  ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `mass_communication`
--
ALTER TABLE `mass_communication`
  ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `polytechnic`
--
ALTER TABLE `polytechnic`
  ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `ss_school`
--
ALTER TABLE `ss_school`
  ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `technology`
--
ALTER TABLE `technology`
  ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computer_science`
--
ALTER TABLE `computer_science`
  MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `d_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `msg_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `feedbackhandling`
--
ALTER TABLE `feedbackhandling`
  MODIFY `r_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `law`
--
ALTER TABLE `law`
  MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `life_science`
--
ALTER TABLE `life_science`
  MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mass_communication`
--
ALTER TABLE `mass_communication`
  MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `polytechnic`
--
ALTER TABLE `polytechnic`
  MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ss_school`
--
ALTER TABLE `ss_school`
  MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `technology`
--
ALTER TABLE `technology`
  MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
