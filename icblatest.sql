-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2013 at 04:54 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iutcoderblock`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpassword`
--

CREATE TABLE IF NOT EXISTS `adminpassword` (
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminpassword`
--

INSERT INTO `adminpassword` (`userName`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `adminquery`
--

CREATE TABLE IF NOT EXISTS `adminquery` (
  `contestID` varchar(50) NOT NULL,
  `To` varchar(200) NOT NULL,
  `From` varchar(200) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `query` varchar(5000) NOT NULL,
  `queryTime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminquery`
--

INSERT INTO `adminquery` (`contestID`, `To`, `From`, `topic`, `query`, `queryTime`) VALUES
('14', 'admin', '100', '', 'asdasdasda', '2013-07-23 00:25:39'),
('28', 'admin', '29', '', 'valo kisu', '2013-07-23 22:43:08'),
('28', 'admin', '29', 'asdada', 'asdadadadad', '2013-07-23 23:45:02'),
('28', 'admin', '29', 'mozilla', 'is good', '2013-07-24 02:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from` varchar(255) NOT NULL DEFAULT '',
  `to` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recd` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `to` (`to`),
  KEY `from` (`from`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `from`, `to`, `message`, `sent`, `recd`) VALUES
(1, 'ashiq', 'ferdous', 'aisi', '2013-07-23 00:14:34', 1),
(2, 'ferdous', 'ashiq', '1q1231', '2013-07-23 00:18:45', 1),
(3, 'ashiq', 'ferdous', 'asdasd', '2013-07-23 00:19:09', 1),
(4, 'ashiq', 'ferdous', 'asdadad', '2013-07-23 00:20:56', 1),
(5, 'ferdous', 'ashiq', 'vag', '2013-07-23 00:21:24', 1),
(6, 'ferdous', 'ashiq', 'ja to', '2013-07-23 00:21:58', 1),
(7, 'ashiq', 'ferdous', 'u', '2013-07-23 00:22:26', 1),
(8, 'boss', 'fedEx', 'Hello fed', '2013-07-23 23:27:06', 1),
(9, 'fedEx', 'fedEx', 'try using the brute force of problem A', '2013-07-23 23:28:25', 1),
(10, 'fedEx', 'boss', 'hello', '2013-07-23 23:28:50', 1),
(11, 'fedEx', 'fedEx', 'oi', '2013-07-23 23:29:53', 1),
(12, 'fedEx', 'boss', 'jlfkdjs', '2013-07-24 00:08:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contestinfo`
--

CREATE TABLE IF NOT EXISTS `contestinfo` (
  `contestId` int(11) NOT NULL AUTO_INCREMENT,
  `contestName` varchar(500) NOT NULL,
  `contestDate` datetime NOT NULL,
  `Duration` int(11) NOT NULL,
  `numberOfProblems` int(11) NOT NULL,
  `contestType` varchar(50) NOT NULL,
  `descForUsers` varchar(50000) NOT NULL,
  PRIMARY KEY (`contestId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `contestinfo`
--

INSERT INTO `contestinfo` (`contestId`, `contestName`, `contestDate`, `Duration`, `numberOfProblems`, `contestType`, `descForUsers`) VALUES
(14, 'C', '2013-07-26 15:00:00', 4500, 12, 'general', 'QWE	'),
(15, 'H', '2013-06-20 23:15:00', 43200, 12, 'general', 'hello there...	'),
(16, 'R', '2013-06-19 10:15:00', 43200, 12, 'general', 'hello world	'),
(17, 'U', '2013-06-18 14:59:00', 43200, 12, 'general', 'is it running now....	'),
(18, 'TTTTTTTTTTTT', '2013-06-18 13:30:00', 43200, 12, 'general', 'ytuygjhgjhg	'),
(13, '14th IUT COMPUTER PROGRAMMING CONTEST', '2013-06-18 10:15:00', 25200, 10, 'general', 'Competition details for the users from admin goes here....	'),
(11, 'CDE', '2013-01-01 12:15:00', 43200, 12, 'general', 'Hello 	'),
(10, 'ABC', '2013-07-01 10:15:00', 43200, 12, 'general', 'Competition details go here....	'),
(19, 'rrrr', '2013-07-20 23:15:00', 43200, 12, 'general', 'yyyyyyyyyyy	'),
(20, '14th IUT COMPUTER PROGRAMMING CONTEST', '2013-08-25 14:30:00', 10800, 8, 'general', 'We are going to organize the 14th IUT COMPUTER PROGRAMMING CONTEST.	'),
(21, '15th IUT COMPUTER PROGRAMMING CONTEST', '2013-08-01 10:30:00', 43200, 12, 'general', 'ABCDEF	'),
(22, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(23, 'Runner', '2013-07-22 15:59:00', 43200, 12, 'general', 'AAAA	'),
(24, 'TEST', '2013-07-22 16:15:00', 43200, 12, 'general', 'Here we go....	'),
(25, 'IUT WEEKLY COMP', '2013-07-31 10:15:00', 43200, 12, 'general', 'This is going to be an exciting competition.... :P	'),
(26, 'My comp', '2013-10-01 23:15:00', 39600, 3, 'general', 'uuu	'),
(27, 'Easy', '2013-07-23 16:15:00', 43200, 12, 'general', 'this is  a great easy	'),
(28, 'Hard', '2013-07-23 21:40:00', 43200, 12, 'general', 'lets try	'),
(29, 'AjAX', '2013-07-24 00:35:00', 43200, 12, 'general', 'Ajax rocks	');

-- --------------------------------------------------------

--
-- Table structure for table `contestproblems`
--

CREATE TABLE IF NOT EXISTS `contestproblems` (
  `contestID` varchar(50) NOT NULL,
  `problemId` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contestproblems`
--

INSERT INTO `contestproblems` (`contestID`, `problemId`) VALUES
('C-01', '500'),
('C-01', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `contestproblemssubmission`
--

CREATE TABLE IF NOT EXISTS `contestproblemssubmission` (
  `contestID` varchar(200) NOT NULL,
  `problemID` varchar(200) NOT NULL,
  `teamID` varchar(200) NOT NULL,
  `verdict` varchar(200) NOT NULL,
  `submissionTime` datetime NOT NULL,
  `runtime` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contestproblemssubmission`
--

INSERT INTO `contestproblemssubmission` (`contestID`, `problemID`, `teamID`, `verdict`, `submissionTime`, `runtime`) VALUES
('28', '25', '29', 'Rejected', '2013-07-24 01:54:58', 0.611235),
('28', '25', '29', 'Rejected', '2013-07-24 01:56:28', 0.842053);

-- --------------------------------------------------------

--
-- Table structure for table `contestranklist`
--

CREATE TABLE IF NOT EXISTS `contestranklist` (
  `contestID` varchar(200) NOT NULL,
  `TeamID` varchar(200) NOT NULL,
  `Points` double NOT NULL,
  `Runtime` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contestranklist`
--


-- --------------------------------------------------------

--
-- Table structure for table `contestteamlist`
--

CREATE TABLE IF NOT EXISTS `contestteamlist` (
  `contestID` varchar(50) NOT NULL,
  `teamID` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contestteamlist`
--

INSERT INTO `contestteamlist` (`contestID`, `teamID`) VALUES
('14', '100'),
('14', '101'),
('28', '29');

-- --------------------------------------------------------

--
-- Table structure for table `individualsubmission`
--

CREATE TABLE IF NOT EXISTS `individualsubmission` (
  `submissionID` bigint(20) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `problemId` varchar(50) NOT NULL,
  `verdict` varchar(50) NOT NULL,
  `runtime` double NOT NULL,
  `submissionTime` datetime NOT NULL,
  `lang` varchar(50) NOT NULL,
  `sourceCode` text,
  PRIMARY KEY (`submissionID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100000000000000091 ;

--
-- Dumping data for table `individualsubmission`
--

INSERT INTO `individualsubmission` (`submissionID`, `userName`, `problemId`, `verdict`, `runtime`, `submissionTime`, `lang`, `sourceCode`) VALUES
(100000000000000003, 'boss', '2001', 'Compilation Error', 0, '0000-00-00 00:00:00', '', '#include <stdio.\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n'),
(100000000000000002, 'boss', '2001', 'Compilation Error', 0, '0000-00-00 00:00:00', '', '	#incldj'),
(100000000000000004, 'boss', '2001', 'Compilation Error', 0, '0000-00-00 00:00:00', '', '#include <stdio.\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n'),
(100000000000000005, 'boss', '2001', 'Compilation Error', 0, '2013-04-18 00:00:00', '', '#include <stdio.\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n'),
(100000000000000006, 'boss', '2001', 'Compilation Error', 0, '2013-04-18 00:00:00', '', '#include <stdio.\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n'),
(100000000000000007, 'boss', '2001', 'Compilation Error', 0, '2013-04-18 00:00:00', '', '#include <stdio.\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n'),
(100000000000000008, 'boss', '2001', 'Compilation Error', 0, '2013-04-18 15:46:03', '', '#include <stdio.\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n'),
(100000000000000009, 'boss', '2001', 'Accepted', 0.110501, '2013-04-18 16:04:57', '', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n'),
(100000000000000010, 'boss', '2001', 'Wrong Answer', 0.06043, '2013-04-18 16:05:33', '', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("==\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n'),
(100000000000000011, 'boss', '2001', 'Accepted', 0.049247, '2013-04-18 17:29:34', '', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000012, 'boss', '2001', 'Accepted', 0.054858, '2013-04-18 17:32:43', '', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000013, 'boss', '2001', 'Compilation Error', 0, '2013-04-18 17:33:22', 'C', '#include <stdio.\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000014, 'boss', '2001', 'Accepted', 0.04595, '2013-04-18 17:34:43', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000015, 'boss', '2001', 'Accepted', 0.045882, '2013-04-18 17:36:18', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000016, 'boss', '2001', 'Accepted', 0.041551, '2013-04-18 17:37:00', 'C++', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000017, 'boss', '2001', 'Compilation Error', 0, '2013-04-18 19:55:15', 'C++', 'sdjkgndlkjfgnflknflk\r\ndfsgvdmnld	'),
(100000000000000018, 'boss', '2001', 'Accepted', 0.043384, '2013-04-18 19:56:38', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000019, 'boss', '2001', 'Accepted', 0.051128, '2013-04-18 19:56:56', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000020, 'boss', '2001', 'Compilation Error', 0, '2013-04-18 20:06:38', 'java', 'public class boss_icb2001 { <br>public static void main(String[] args) {\r\n        // TODO code application logic here\r\n        \r\n        System.out.println("hello there");\r\n    }	<br> }'),
(100000000000000021, 'boss', '2001', 'Compilation Error', 0, '2013-04-18 20:10:04', 'java', 'public class boss_icb2001 { <br>public static void main(String[] args) {\r\n        // TODO code application logic here\r\n        \r\n        System.out.println("hello there");\r\n    }	<br> }'),
(100000000000000022, 'boss', '2001', 'Wrong Answer', 0.19422, '2013-04-18 20:11:23', 'java', 'public class boss_icb2001  {  public static void main(String[] args) {\r\n        // TODO code application logic here\r\n        \r\n        System.out.println("hello there");\r\n    }	  } '),
(100000000000000023, 'boss', '2001', 'Compilation Error', 0, '2013-04-18 23:11:10', 'java', 'public class boss_icb2001  {   public static void main(String[] args) {\r\n        // TODO code application logic here\r\n        int a;\r\n        int num1, num2;\r\n        Scanner reader = new Scanner(System.in);\r\n        a=reader.nextInt();\r\n        for(int i=0;i<a;i++){\r\n           num1 = reader.nextInt();\r\n           num2 = reader.nextInt();\r\n           if(num1 > num2)System.out.println(">");\r\n           if(num1 == num2)System.out.println("=");\r\n           if(num1 < num2)System.out.println("<");\r\n        }\r\n    }	  } '),
(100000000000000024, 'boss', '2001', 'Compilation Error', 0, '2013-04-18 23:43:31', 'java', 'public class boss_icb2001  {   import java.util.Scanner;\r\n\r\n/**\r\n *\r\n * @author mostaeen\r\n */\r\nclass Main {\r\n    \r\n\r\n    /**\r\n     * @param args the command line arguments\r\n     */\r\n    public static void main(String[] args) {\r\n        // TODO code application logic here\r\n        int a;\r\n        int num1, num2;\r\n        Scanner reader = new Scanner(System.in);\r\n        a=reader.nextInt();\r\n        for(int i=0;i<a;i++){\r\n           num1 = reader.nextInt();\r\n           num2 = reader.nextInt();\r\n           if(num1 > num2)System.out.println(">");\r\n           if(num1 == num2)System.out.println("=");\r\n           if(num1 < num2)System.out.println(">");\r\n        }\r\n    }\r\n}\r\n  } '),
(100000000000000025, 'boss', '2001', 'Wrong Answer', 0.752805, '2013-04-18 23:44:23', 'java', ' import java.util.Scanner;\r\n\r\n/**\r\n *\r\n * @author mostaeen\r\n */\r\nclass Main {\r\n    \r\n\r\n    /**\r\n     * @param args the command line arguments\r\n     */\r\n    public static void main(String[] args) {\r\n        // TODO code application logic here\r\n        int a;\r\n        int num1, num2;\r\n        Scanner reader = new Scanner(System.in);\r\n        a=reader.nextInt();\r\n        for(int i=0;i<a;i++){\r\n           num1 = reader.nextInt();\r\n           num2 = reader.nextInt();\r\n           if(num1 > num2)System.out.println(">");\r\n           if(num1 == num2)System.out.println("=");\r\n           if(num1 < num2)System.out.println(">");\r\n        }\r\n    }\r\n}\r\n'),
(100000000000000026, 'boss', '2001', 'Wrong Answer', -0.778792, '2013-04-18 23:46:32', 'java', ' import java.util.Scanner;\r\n\r\n/**\r\n *\r\n * @author mostaeen\r\n */\r\nclass Main {\r\n    \r\n\r\n    /**\r\n     * @param args the command line arguments\r\n     */\r\n    public static void main(String[] args) {\r\n        // TODO code application logic here\r\n        int a;\r\n        int num1, num2;\r\n        Scanner reader = new Scanner(System.in);\r\n        a=reader.nextInt();\r\n        for(int i=0;i<a;i++){\r\n           num1 = reader.nextInt();\r\n           num2 = reader.nextInt();\r\n           if(num1 > num2)System.out.println(">");\r\n           if(num1 == num2)System.out.println("=");\r\n           if(num1 < num2)System.out.println(">");\r\n        }\r\n    }\r\n}\r\n'),
(100000000000000027, 'boss', '2001', 'Accepted', 0.506992, '2013-04-18 23:47:34', 'java', ' import java.util.Scanner;\r\n\r\n/**\r\n *\r\n * @author mostaeen\r\n */\r\nclass Main {\r\n    \r\n\r\n    /**\r\n     * @param args the command line arguments\r\n     */\r\n    public static void main(String[] args) {\r\n        // TODO code application logic here\r\n        int a;\r\n        int num1, num2;\r\n        Scanner reader = new Scanner(System.in);\r\n        a=reader.nextInt();\r\n        for(int i=0;i<a;i++){\r\n           num1 = reader.nextInt();\r\n           num2 = reader.nextInt();\r\n           if(num1 > num2)System.out.println(">");\r\n           if(num1 == num2)System.out.println("=");\r\n           if(num1 < num2)System.out.println("<");\r\n        }\r\n    }\r\n}\r\n'),
(100000000000000028, 'boss', '2001', 'Accepted', 0.138929, '2013-04-18 23:48:39', 'java', ' import java.util.Scanner;\r\n\r\n/**\r\n *\r\n * @author mostaeen\r\n */\r\nclass Main {\r\n    \r\n\r\n    /**\r\n     * @param args the command line arguments\r\n     */\r\n    public static void main(String[] args) {\r\n        // TODO code application logic here\r\n        int a;\r\n        int num1, num2;\r\n        Scanner reader = new Scanner(System.in);\r\n        a=reader.nextInt();\r\n        for(int i=0;i<a;i++){\r\n           num1 = reader.nextInt();\r\n           num2 = reader.nextInt();\r\n           if(num1 > num2)System.out.println(">");\r\n           if(num1 == num2)System.out.println("=");\r\n           if(num1 < num2)System.out.println("<")\r\n        }\r\n    }\r\n}\r\n'),
(100000000000000029, 'boss', '2001', 'Compilation Error', 0, '2013-04-18 23:49:22', 'java', ' import java.util.Scanner;\r\n\r\n/**\r\n *\r\n * @author mostaeen\r\n */\r\nclass Main {\r\n    \r\n\r\n    /**\r\n     * @param args the command line arguments\r\n     */\r\n    public static void main(String[] args) {\r\n        // TODO code application logic here\r\n        int a;\r\n        int num1, num2;\r\n        Scanner reader = new Scanner(System.in);\r\n        a=reader.nextInt();\r\n        for(int i=0;i<a;i++){\r\n           num1 = reader.nextInt();\r\n           num2 = reader.nextInt();\r\n           if(num1 > num2)System.out.println(">");\r\n           if(num1 == num2)System.out.println("="\r\n           if(num1 < num2)System.out.println("<")\r\n        }\r\n    }\r\n}\r\n'),
(100000000000000030, 'boss', '2001', 'Compilation Error', 0, '2013-04-18 23:56:36', 'java', 'hgfhg	'),
(100000000000000031, 'boss', '2001', 'Accepted', 0.885556, '2013-04-19 01:10:36', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000032, 'boss', '2001', 'Accepted', 0.085088, '2013-04-19 01:11:49', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000033, 'boss', '2001', 'Accepted', 0.051419, '2013-04-19 01:12:16', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000034, 'boss', '2001', 'Accepted', 0.067479, '2013-04-19 01:13:38', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000035, 'boss', '2001', 'Accepted', 0.046933, '2013-04-19 01:14:26', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000036, 'boss', '2001', 'Accepted', 0.07501, '2013-04-19 01:16:37', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000037, 'boss', '2001', 'Accepted', 0.044279, '2013-04-19 01:17:40', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000038, 'boss', '2001', 'Accepted', 0.044607, '2013-04-19 01:18:02', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000039, 'boss', '2001', 'Accepted', 0.070488, '2013-04-19 01:20:05', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000040, 'boss', '2001', 'Accepted', 0.050755, '2013-04-19 01:20:19', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000041, 'boss', '2001', 'Accepted', 0.052057, '2013-04-19 01:22:00', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000042, 'boss', '2001', 'Wrong Answer', 0.062835, '2013-04-19 01:22:43', 'C++', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf(">\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000043, 'boss', '2001', 'Accepted', 0.067137, '2013-04-19 13:34:22', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000044, 'boss', '2001', 'Accepted', 0.057718, '2013-05-29 01:33:42', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}	'),
(100000000000000045, 'fedex', '2001', 'Accepted', 0.688329, '2013-06-01 03:00:30', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}	'),
(100000000000000046, 'fedex', '2001', 'Accepted', 0.699409, '2013-06-01 03:04:25', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}	'),
(100000000000000047, 'fedex', '2001', 'Accepted', 0.15673, '2013-06-01 03:04:38', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}	'),
(100000000000000048, 'fedex', '2001', 'Accepted', 0.137121, '2013-06-01 03:05:59', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}	'),
(100000000000000049, 'fedex', '2001', 'Accepted', 0.116356, '2013-06-01 03:06:21', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\nwhile(1){\r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n }   \r\n    \r\n    \r\n    \r\n    return 0;\r\n}	'),
(100000000000000050, 'fedex', '2001', 'Accepted', 0.188778, '2013-06-01 03:07:22', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\nwhile(1){\r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n }   \r\n    \r\n    \r\n    \r\n    return 0;\r\n}	'),
(100000000000000051, 'fedex', '2001', 'Accepted', 0.133095, '2013-06-01 03:08:47', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n   while(1){\r\n};\r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000052, 'fedex', '2001', 'Accepted', 0.144511, '2013-06-01 03:09:36', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000053, 'fedex', '2001', 'Accepted', 0.660491, '2013-06-01 03:12:05', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000054, 'fedex', '2001', 'Accepted', 0.124108, '2013-06-01 03:13:17', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000055, 'fedex', '2001', 'Accepted', 0.178361, '2013-06-01 03:13:46', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n  while(1){ \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n }   \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000056, 'fedex', '2001', 'Accepted', 0.438675, '2013-06-03 13:57:50', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n\r\nwhile(1){\r\n};\r\n\r\n}	'),
(100000000000000057, 'fedex', '2001', 'Accepted', 0.61329, '2013-06-03 14:09:36', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n\r\nwhile(1){\r\n};\r\n\r\n}	'),
(100000000000000058, 'fedex', '2001', 'Compilation Error', 0, '2013-06-03 14:16:25', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n\r\nwhile(1){\r\n\r\n\r\n}	'),
(100000000000000059, 'fedex', '2001', 'Accepted', 0.140017, '2013-06-03 14:16:56', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n\r\nwhile(1){\r\n\r\n};\r\n}	'),
(100000000000000060, 'fedex', '2001', 'Accepted', 0.247079, '2013-06-03 14:20:33', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n\r\nwhile(1){\r\n\r\n};\r\n}	'),
(100000000000000061, 'fedex', '2001', 'Accepted', 0.751762, '2013-06-03 14:20:44', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n\r\nwhile(1){\r\n\r\n};\r\n}	'),
(100000000000000062, 'fedEx', '2001', 'Accepted', 0.394256, '2013-06-17 22:21:39', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n\r\nwhile(1){\r\n}\r\n\r\n\r\nreturn 0;\r\n}	'),
(100000000000000063, 'boss', '2001', 'Accepted', 0.0286, '2013-06-18 21:53:51', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000064, 'boss', '', 'Accepted', 0.723302, '2013-06-18 21:54:39', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i--){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000065, 'boss', '2001', 'Accepted', 0.587364, '2013-06-18 22:01:17', 'C++', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000066, 'boss', '2001', 'Wrong Answer', 0.125309, '2013-06-18 22:03:14', 'C++', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("===\n");\r\n      if(num1>num2)printf(">>>\n");\r\n      if(num1<num2)printf("<##\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000067, 'boss', '2001', 'Time Limit Exceeded.', 0.538607, '2013-06-18 22:12:24', 'C++', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i--){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000068, 'boss', '2001', 'Accepted', 0.127046, '2013-06-18 22:13:38', 'C++', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000069, 'boss', '2001', 'Time Limit Exceeded.', 0.422856, '2013-06-18 22:14:00', 'C++', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i--){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000070, 'boss', '2001', 'Time Limit Exceeded.', 0.534722, '2013-06-18 22:14:58', 'C++', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i--){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000071, 'boss', '2001', 'Time Limit Exceeded.', 0.744605, '2013-06-18 22:15:54', 'C++', '#include <stdio.h>\r\n#include <conio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    getch();\r\n    return 0;\r\n}\r\n	'),
(100000000000000072, 'boss', '', 'Compilation Error', 0, '2013-06-18 22:16:19', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    getch();\r\n    return 0;\r\n}\r\n	'),
(100000000000000073, 'boss', '2001', 'Compilation Error', 0, '2013-06-18 22:17:35', 'C', 'fdfd	'),
(100000000000000074, 'boss', '2001', 'Time Limit Exceeded.', 0.470316, '2013-06-18 23:18:29', 'C', '	#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i--){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n'),
(100000000000000075, 'boss', '2001', 'Accepted', 0.10107, '2013-06-18 23:18:52', 'C', '#include <stdio.h>\r\n\r\nint main(){\r\n    int testCase;\r\n    int i;\r\n    int num1, num2;\r\n    scanf("%d",&testCase);\r\n    \r\n    for(i=0;i<testCase;i++){\r\n      scanf("%d %d",&num1, &num2);\r\n      if(num1==num2)printf("=\n");\r\n      if(num1>num2)printf(">\n");\r\n      if(num1<num2)printf("<\n");\r\n    }    \r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}\r\n	'),
(100000000000000076, 'fedEx', '2001', 'Time Limit Exceeded.', 0.345817, '2013-07-16 17:32:11', 'C++', '#include <stdio.h>\r\n\r\nint main(){\r\n    \r\n    while(1){\r\n    \r\n    }\r\n    \r\n    \r\n    \r\n    \r\n    return 0;\r\n}	\r\n'),
(100000000000000077, 'fedEx', '2001', 'Compilation Error', 0, '2013-07-22 17:05:36', 'C', '	wqefsdf'),
(100000000000000078, 'boss', '2001', 'Compilation Error', 0, '2013-07-22 17:07:06', 'C', 'adfdfsfdsfdsf	'),
(100000000000000079, 'funInCode', '2001', 'Compilation Error', 0, '2013-07-22 17:33:21', 'C', 'aaaaaaaaaaaaaaaaaa	'),
(100000000000000080, 'boss', '2001', 'Compilation Error', 0, '2013-07-22 23:33:53', 'C', 'dadfadf	'),
(100000000000000081, 'boss', '2001', 'Compilation Error', 0, '2013-07-22 23:36:44', 'C', 'adfdf	'),
(100000000000000082, 'boss', '2001', 'Compilation Error', 0, '2013-07-22 23:51:29', 'C', 'afdsfadf	'),
(100000000000000083, 'boss', '2001', 'Compilation Error', 0, '2013-07-23 01:06:22', 'C', 'yyyyyyyyyyyyyyyyyyyyy	'),
(100000000000000084, 'boss', '2001', 'Compilation Error', 0, '2013-07-23 20:32:56', 'C', '#includ	'),
(100000000000000085, 'boss', '2001', 'Compilation Error', 0, '2013-07-23 20:33:48', 'C', 'adfadfda	'),
(100000000000000086, 'boss', '2001', 'Compilation Error', 0, '2013-07-23 20:35:20', 'C', 'adfadfda	'),
(100000000000000087, 'boss', '2001', 'Compilation Error', 0, '2013-07-23 20:36:42', 'C', 'adfadfda	'),
(100000000000000088, 'boss', '2001', 'Compilation Error', 0, '2013-07-23 20:39:50', 'C', 'adfadfda	'),
(100000000000000089, 'boss', '2001', 'Compilation Error', 0, '2013-07-23 20:41:07', 'C', 'adfadfda	'),
(100000000000000090, 'boss', '2001', 'Compilation Error', 0, '2013-07-23 20:41:48', 'C', 'adfadfda	');

-- --------------------------------------------------------

--
-- Table structure for table `probleminfo`
--

CREATE TABLE IF NOT EXISTS `probleminfo` (
  `problemId` int(50) NOT NULL AUTO_INCREMENT,
  `problemTitle` varchar(200) NOT NULL,
  `probDesc` varchar(9000) NOT NULL,
  `theInput` varchar(9000) NOT NULL,
  `theOutput` varchar(9000) NOT NULL,
  `sampleInput` varchar(9000) NOT NULL,
  `sampleOutput` varchar(9000) NOT NULL,
  `contestID` varchar(150) DEFAULT NULL,
  `problemSetter` varchar(200) NOT NULL,
  `problemTimeLimit` float NOT NULL,
  `problemCategory` varchar(100) NOT NULL,
  `launchingDate` date NOT NULL,
  PRIMARY KEY (`problemId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `probleminfo`
--

INSERT INTO `probleminfo` (`problemId`, `problemTitle`, `probDesc`, `theInput`, `theOutput`, `sampleInput`, `sampleOutput`, `contestID`, `problemSetter`, `problemTimeLimit`, `problemCategory`, `launchingDate`) VALUES
(19, 'Taxi meter', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', NULL, 'ps', 3, 'Math', '2013-07-17'),
(18, 'Taxi meter', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', 'There will be several test cases as input. Each case starts with an integer N () which represent number of query in that particular test case. In the next line there will be an integer B () which represent number of broken LED and next L integers will be the position of broken LEDs.\r\n\r\nNext N line will contain N query, each query starts with an integer L () which represent number of lit LED and next L integers will be the position lit LED.	', 'For each input case at first print the case number and then print the result of each query in separate lines. If there is more than one possible solution, then print them in ascending order. If there is no possible solution for any query print “Impossible Input.”.	', '3\r\n\r\n2 0 1\r\n\r\n4 5 4 6 2\r\n\r\n3 5 6 2\r\n\r\n1 2\r\n\r\n2\r\n\r\n3 5 6 2\r\n\r\n2 0 1\r\n\r\n3 0 1 4	', 'Case 1:\r\n\r\nQuery 1: 5 9\r\n\r\nQuery 2: 3\r\n\r\nQuery 3: Impossible input.\r\n\r\nCase 2:\r\n\r\nQuery 1: 1 3 7\r\n\r\nQuery 2: 4 9	', NULL, 'ps', 3, 'Math', '2013-07-17'),
(20, 'DO NOT DELETE ', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', NULL, 'ps', 3, 'Math', '2013-07-17'),
(21, 'Problem', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', NULL, 'ps', 3, 'Math', '2013-07-17'),
(22, 'MERIT', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', 'Recently me and my friends were coming to IUT by taxi cab and found that there are several LEDs not working. So when a number is displayed in the meter, it was very difficult to understand what the actual digit was. Your task is to write a program that will help us to know the currently displaying digit. You will be told what are broken LEDs and also the LEDs that are currently lit.	', '21', 'ps', 3, 'Math', '2013-07-17'),
(23, 'Mirror World', 'Imagine a world inside mirror, where everything becomes reverse. Left hand becomes right hand, right hand becomes left hand. Mirror people read Arabic from left to write but they read English from right to left. In that world they have their own way of writing numbers as well. Fortunately their numbers contains same digits (0,1,2,3,4,5,6,7,8 and 9) as our world, but they write it in a little bit different way than us. We write the digits of a number from left to right, but mirror people write it from right to left.\r\n	 <img src = "image002.jpg" width="60" height="70" />\r\nImagine a world inside mirror, where everything becomes reverse. Left hand becomes right hand, right hand becomes left hand. Mirror people read Arabic from left to write but they read English from right to left. In that world they have their own way of writing numbers as well. Fortunately their numbers contains same digits (0,1,2,3,4,5,6,7,8 and 9) as our world, but they write it in a little bit different way than us. We write the digits of a number from left to right, but mirror people write it from right to left.', 'Imagine a world inside mirror, where everything becomes reverse. Left hand becomes right hand, right hand becomes left hand. Mirror people read Arabic from left to write but they read English from right to left. In that world they have their own way of writing numbers as well. Fortunately their numbers contains same digits (0,1,2,3,4,5,6,7,8 and 9) as our world, but they write it in a little bit different way than us. We write the digits of a number from left to right, but mirror people write it', 'Imagine a world inside mirror, where everything becomes reverse. Left hand becomes right hand, right hand becomes left hand. Mirror people read Arabic from left to write but they read English from right to left. In that world they have their own way of writing numbers as well. Fortunately their numbers contains same digits (0,1,2,3,4,5,6,7,8 and 9) as our world, but they write it in a little bit different way than us. We write the digits of a number from left to right, but mirror people write it from right to left.	', '423 395\r\n\r\n423 982\r\n\r\n423 423	', '423 395\r\n\r\n423 982\r\n\r\n423 423	', '14', 'ps', 889, 'Math', '2013-07-18'),
(24, 'U R A ', 'Before sending a message, secret agencies always encrypt their messages. The receiver knows how to get back original message. I work for Bangladesh Secret Agency (BSA). My job is to decrypt all the messages that come to BSA. Yesterday I’ve got a message. The message is encrypted in a very easy way. But it will take a long time (Maybe a month!) to decrypt the message. I’m really worried about that message. I know how the encryption procedure of the message and it is explained bellow:	\r\n <img src = "image002.jpg" width="600" height="223" />', '	', '	', '	', '	', '14', 'ps', 0, 'Math', '2013-07-18'),
(25, 'HELLO', '	 <img src = "image002.jpg" width="600" height="223" />\r\nBefore sending a message, secret agencies always encrypt their messages. The receiver knows how to get back original message. I work for Bangladesh Secret Agency (BSA). My job is to decrypt all the messages that come to BSA. Yesterday I’ve got a message. The message is encrypted in a very easy way. But it will take a long time (Maybe a month!) to decrypt the message. I’m really worried about that message. I know how the encryption procedure of the message and it is explained bellow:', '	', '	', '	', '	', '28', 'ps', 7, 'Math', '2013-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `problemsetter`
--

CREATE TABLE IF NOT EXISTS `problemsetter` (
  `userName` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `fullName` varchar(500) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `startingDate` datetime NOT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problemsetter`
--

INSERT INTO `problemsetter` (`userName`, `password`, `fullName`, `details`, `startingDate`) VALUES
('ps', '123', 'I am a problem setter', 'Lecturer, Cse, iut', '2013-07-16 00:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `registeredteam`
--

CREATE TABLE IF NOT EXISTS `registeredteam` (
  `contestID` int(11) NOT NULL,
  `teamID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeredteam`
--

INSERT INTO `registeredteam` (`contestID`, `teamID`) VALUES
(14, 29),
(24, 29),
(28, 29);

-- --------------------------------------------------------

--
-- Table structure for table `teaminfo`
--

CREATE TABLE IF NOT EXISTS `teaminfo` (
  `teamID` int(200) NOT NULL AUTO_INCREMENT,
  `teamName` varchar(200) NOT NULL,
  `teamPassword` varchar(50) NOT NULL,
  `numberOfTeamMembers` int(11) NOT NULL,
  `memberId01` varchar(50) NOT NULL,
  `memberId02` varchar(50) DEFAULT NULL,
  `memberId03` varchar(50) DEFAULT NULL,
  `isOnline` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`teamID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `teaminfo`
--

INSERT INTO `teaminfo` (`teamID`, `teamName`, `teamPassword`, `numberOfTeamMembers`, `memberId01`, `memberId02`, `memberId03`, `isOnline`) VALUES
(102, 'one zero one', '123', 1, 'boss', NULL, NULL, NULL),
(101, 'Binary programmer', '123', 3, 'mehedi', 'shaon', 'rafi', 'no'),
(100, 'Matboss', '123', 3, 'mostaeen', 'ferdous', 'ashiq', 'no'),
(29, 'iut_namespace', '123', 3, 'fedEx', 'fedEx', 'boss', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teamrecordinacontest`
--

CREATE TABLE IF NOT EXISTS `teamrecordinacontest` (
  `teamName` varchar(50) NOT NULL,
  `contestId` varchar(50) NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teamrecordinacontest`
--


-- --------------------------------------------------------

--
-- Table structure for table `teamwisesubmission`
--

CREATE TABLE IF NOT EXISTS `teamwisesubmission` (
  `teamName` varchar(50) NOT NULL,
  `problemId` varchar(50) NOT NULL,
  `verdict` varchar(50) NOT NULL,
  `runtime` double DEFAULT NULL,
  `contestId` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teamwisesubmission`
--


-- --------------------------------------------------------

--
-- Table structure for table `tempprobleminfo`
--

CREATE TABLE IF NOT EXISTS `tempprobleminfo` (
  `tempProblemID` int(150) NOT NULL AUTO_INCREMENT,
  `problemTitle` varchar(300) DEFAULT NULL,
  `probCategory` varchar(150) DEFAULT NULL,
  `problemTimeLimit` double DEFAULT NULL,
  `problemDesc` varchar(9000) DEFAULT NULL,
  `theInput` varchar(500) DEFAULT NULL,
  `theOutput` varchar(5000) DEFAULT NULL,
  `sampleInput` varchar(5000) DEFAULT NULL,
  `sampleOutput` varchar(5000) DEFAULT NULL,
  `problemSetter` varchar(500) DEFAULT NULL,
  `submissionTime` datetime DEFAULT NULL,
  PRIMARY KEY (`tempProblemID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `tempprobleminfo`
--

INSERT INTO `tempprobleminfo` (`tempProblemID`, `problemTitle`, `probCategory`, `problemTimeLimit`, `problemDesc`, `theInput`, `theOutput`, `sampleInput`, `sampleOutput`, `problemSetter`, `submissionTime`) VALUES
(34, 'AAAAAAA', 'Math', 7, '	qqqqqqq', 'qqqqqqqqqqqq	', 'qqqqqqqqqqqqqqqqqqqq	', 'qqqqqqqqqqqqqqqqqqqqq	', 'qqqqqqqqqqqqqqqqqq	', 'ps', '2013-07-18 20:43:38'),
(35, 'SSSSSSSSSSSSS', 'Math', 7, 'sssssssss	 ', 'sssssssssssssssssss	', 'ssssssssssssssssssss	', 'ssssssssssssssssss	', 'ssssssssssssssssss	', 'ps', '2013-07-18 20:45:12'),
(36, 'rrrrrrrrrr', 'Math', 5.5, 'ttttt	', 'tttttttttttt	', 'ttttttttttttt	', 'tttttttttttttttttt	', 'tttttttttttttt	', 'ps', '2013-07-18 20:48:45'),
(37, 'EEEEEE', 'Math', 3, '	 <img src = "image002.jpg" width="600" height="223" />', '	', '	', '	', '	', 'ps', '2013-07-18 20:49:27'),
(43, 'My Problem', 'Math', 3, ' Recently I’ve visited a strange village where lived two kinds of peoples. One is saint, who always tells the truth and another is liar who always tells lie. While roaming around I’ve talked with two persons named “A” and “B”. But I couldn’t find out what kind of person they are (saint or liar?). But I’ve written down all of their conversations in a notebook. Your task is to write a program that will read that conversation and will display what type of person “A” and “B” are.\r\n	<b>Your task is to write a program that will read that conversation and will display what type of person “A” and “B” are.</b>\r\n\r\n<br/> <img src = "image001.png" width="300" height="223" /><br/>\r\n<u> kind of person they are (saint or liar?). But I’ve written down</u>\r\n<span style="color:red;">Recently I’ve visited a strange village where lived two kinds of peoples. One is saint, who always tells the truth and another is</span>', 'Recently I’ve visited a strange village where lived two kinds of peoples. One is saint, who always tells the truth and another is liar 	', 'Recently I’ve visited a strange village where lived two kinds of peoples. One is saint, who always tells the truth and another is liar 	', 'Recently I’ve visited a strange village where lived two kinds of peoples. One is saint, who always tells the truth and another is liar 	', 'Recently I’ve visited a strange village where lived two kinds of peoples. One is saint, who always tells the truth and another is liar 	', 'ps', '2013-07-23 01:02:08'),
(32, 'Liar Liar', 'Math', 3, 'Recently I’ve visited a strange village where lived two kinds of peoples. One is saint, who always tells the truth and another is liar who always tells lie. While roaming around I’ve talked with two persons named “A” and “B”.\r\n<img border="0" src="um.jpg" alt="Pulpit rock" width="304" height="228"> But I couldn’t find out what kind of person they are (saint or liar?). But I’ve written down all of their conversations in a notebook. Your task is to write a program that will read that conversation and will display what type of person “A” and “B” are.	', 'Recently I’ve visited a strange village where lived two kinds of peoples. One is saint, who always tells the truth and another is liar who always tells lie. While roaming around I’ve talked with two persons named “A” and “B”. But I couldn’t find out what kind of person they are (saint or liar?). But I’ve written down all of their conversations in a notebook. Your task is to write a program that will read that conversation and will display what type of person “A” and “B” are.	', 'Recently I’ve visited a strange village where lived two kinds of peoples. One is saint, who always tells the truth and another is liar who always tells lie. While roaming around I’ve talked with two persons named “A” and “B”. But I couldn’t find out what kind of person they are (saint or liar?). But I’ve written down all of their conversations in a notebook. Your task is to write a program that will read that conversation and will display what type of person “A” and “B” are.	', 'Recently I’ve visited a strange village where lived two kinds of peoples. One is saint, who always tells the truth and another is liar who always tells lie. While roaming around I’ve talked with two persons named “A” and “B”. But I couldn’t find out what kind of person they are (saint or liar?). But I’ve written down all of their conversations in a notebook. Your task is to write a program that will read that conversation and will display what type of person “A” and “B” are.	', 'Recently I’ve visited a strange village where lived two kinds of peoples. One is saint, who always tells the truth and another is liar who always tells lie. While roaming around I’ve talked with two persons named “A” and “B”. But I couldn’t find out what kind of person they are (saint or liar?). But I’ve written down all of their conversations in a notebook. Your task is to write a program that will read that conversation and will display what type of person “A” and “B” are.	', 'ps', '2013-07-17 18:09:50'),
(33, 'w', 'Math', 3, '	wwwwwwwwwww', 'wwwwwwwwwwwww	', 'wwwwwwwwwwwwwww	', 'wwwwwwwwwwwwwww	', 'wwwwwwwwwwwwwwwww	', 'ps', '2013-07-18 20:34:27'),
(41, 'Taxi Meter', 'Math', 7, 'Imagine a world inside mirror, where everything becomes reverse. Left hand becomes right hand, right hand becomes left hand. Mirror people read Arabic from left to write but they read English from right to left. In that world they have their own way of writing numbers as well. Fortunately their numbers contains same digits (0,1,2,3,4,5,6,7,8 and 9) as our world, but they write it in a little bit different way than us. We write the digits of a number from left to right, but mirror people write it from right to left.	<br/> <img src = "image002.jpg" width="600" height="223" /><br/>\r\nImagine a world inside mirror, where everything becomes reverse. Left hand becomes right hand, right hand becomes left hand. Mirror people read Arabic from left to write but they read English from right to left. In that world they have their own way of writing numbers as well. Fortunately their numbers contains same digits (0,1,2,3,4,5,6,7,8 and 9) as our world, but they write it in a little bit different way than us. We write the digits of a number from left to right, but mirror people write it from right to left.', '	', '	', '	', '	', 'ps', '2013-07-18 21:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `studentID` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `school` varchar(50) DEFAULT NULL,
  `college` varchar(50) DEFAULT NULL,
  `batch` varchar(10) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `uva` int(11) DEFAULT NULL,
  `competition` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`firstName`, `lastName`, `userName`, `studentID`, `email`, `password`, `country`, `school`, `college`, `batch`, `contact`, `uva`, `competition`) VALUES
('Golam', 'Mostaeen', 'funInCode', '104404', 'golammostaeen@gmail.com', '123', 'bangladesh', 'rcc', 'rcc', '2010', '01727179676', 246, 'yes'),
('Ferdous', 'Ahmed', 'fedEx', '104406', 'ahmded@gmail.com', '123', 'bangladesh', 'FCC', 'FCC', '2010', '017245879347', 12485, NULL),
('nayem', 'hossain', 'binary', '104413', 'nayem@gmail.com', '123', 'bangladesh', 'JCC', 'JCC', '2010', '01716912475', 102, NULL),
('mehedi', 'hassan', 'hello world', '104407', 'mehedi.iut.10@gmail.com', '123', 'india', 'rcc', 'rcc', '2010', '01719612177', 55, NULL),
('tusfiq', 'islam', 'boss', '104409', 'tusfiq@gmail.com', '123', 'aaa', 'aaaaaaaa', 'aaaaaaaaa', 'aaaaaaa', 'aaaaaaaa', 11, NULL),
('aaa', 'aaaaaaa', 'see', 'ffffffffff', 'fffffffff', '123', '', '', '', '', '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userranklist`
--

CREATE TABLE IF NOT EXISTS `userranklist` (
  `userName` varchar(50) NOT NULL,
  `totalSubmitted` int(11) NOT NULL,
  `totalAccepted` int(11) NOT NULL,
  `totalWrongAnswers` int(11) NOT NULL,
  `totalTimeLimitExceeded` int(11) NOT NULL,
  `totalRuntimeErrors` int(11) NOT NULL,
  `totalCompileTimeErrors` int(11) NOT NULL,
  `Rank` int(11) DEFAULT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userranklist`
--

INSERT INTO `userranklist` (`userName`, `totalSubmitted`, `totalAccepted`, `totalWrongAnswers`, `totalTimeLimitExceeded`, `totalRuntimeErrors`, `totalCompileTimeErrors`, `Rank`) VALUES
('boss', 72, 16, 6, 5, 0, 45, 0),
('see', 25, 8, 2, 0, 0, 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `webmaster`
--

CREATE TABLE IF NOT EXISTS `webmaster` (
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webmaster`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
