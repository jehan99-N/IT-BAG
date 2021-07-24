-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 05:35 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graduation_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Admin_Name` text NOT NULL,
  `Password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Admin_Name`, `Password`) VALUES
(1, 'Admin', 12345678);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `User_Name` text NOT NULL,
  `Email` text NOT NULL,
  `Subject` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `User_Name`, `Email`, `Subject`, `Message`) VALUES
(1, 'danasadoun', 'dana@gmail.com', 'Test', 'Test Contact From Profile'),
(2, 'test', 'test@test.com', 'Test', 'Test Contact From Public'),
(3, 'dana', 'dana@gmail.com', 'dana', 'dana'),
(4, 'danasadoun', 'dana@gmail.com', 'dana', 'vsdvvfdvzcvx'),
(5, 'doooo', 'jhu@gmail.com', 'zxcgb', 'fxvgsfbx'),
(6, 'deemash', 'alshurmand@gmail.com', 'hello', 'thx');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `ID` int(11) NOT NULL,
  `image` text NOT NULL,
  `youtube-link` text NOT NULL,
  `book-link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`ID`, `image`, `youtube-link`, `book-link`) VALUES
(1, '../GraduationProject/assets/img/obje.jfif', 'https://youtube.com/playlist?list=PLF8OvnCBlEY1LvgUqPxPGUrpGUl0jD09-', 'https://www.noor-book.com/%D9%83%D8%AA%D8%A7%D8%A8-%D9%86%D8%AD%D9%88-%D8%A7%D9%84%D8%A8%D8%B1%D9%85%D8%AC%D8%A9-%D8%A8%D9%80-Xcode-%D9%85%D8%A7-%D8%AA%D8%AD%D8%AA%D8%A7%D8%AC%D9%87-%D9%84%D8%A8%D8%B1%D9%85%D8%AC%D8%A9-%D8%A7%D9%84%D9%85%D8%A7%D9%83%D9%86%D8%AA%D9%88%D8%B4-%D8%A8%D9%84%D8%BA%D8%A9-Objective-C-pdf'),
(2, './assets/img/swift.jfif', 'https://www.youtube.com/watch?v=TD-aS6S_tHI&list=PLQaOY10EEc8bNbEBMyiJU1I-GIgs1LQfj', 'http://www.mediafire.com/file/g9f4dctefzeaht1/SHIFT_TO_SWIFT_.pdf/file'),
(3, '../GraduationProject/assets/img/java3.jfif', 'https://www.youtube.com/watch?v=yRAzlw4JM8o', 'https://www.rofofs.com/2019/06/Learn-Java-pdf.html'),
(4, '../GraduationProject/assets/img/kot.jpg', 'https://www.youtube.com/watch?v=hR3D1odn2TQ&list=PLF8OvnCBlEY2w-zdVPozupapiKzLzpyUZ', 'https://www.noor-book.com/%D9%83%D8%AA%D8%A7%D8%A8-%D9%85%D8%AE%D8%AA%D8%B5%D8%B1-%D9%84%D8%BA%D9%87-Kotlin-%D8%A7%D8%AD%D9%85%D8%AF-%D8%A7%D9%84%D8%AC%D8%B9%D9%8A%D8%AF--pdf'),
(5, '../GraduationProject/assets/img/flutter.jpg', 'https://www.youtube.com/watch?v=62NQBCmT248&list=PLZeX1aIDYSn8JisOoBDLz1AwDbv0sTGmK', 'https://www.tutorialspoint.com/flutter/flutter_tutorial.pdf'),
(6, '../GraduationProject/assets/img/courses/html.jfif', 'https://www.youtube.com/watch?v=6QAELgirvjs&list=PLDoPjvoNmBAw_t_XWUFbBX-c9MafPk9ji', 'https://www.noor-book.com/%D9%83%D8%AA%D8%A7%D8%A8-%D8%AF%D9%88%D8%B1%D8%A9-HTML5-%D8%A8%D8%A7%D9%84%D9%84%D8%BA%D8%A9-%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A%D8%A9-pdf'),
(7, '../GraduationProject/assets/img/courses/css.jfif', 'https://www.youtube.com/watch?v=X1ulCwyhCVM&list=PLDoPjvoNmBAzjsz06gkzlSrlev53MGIKe', 'https://www.noor-book.com/%D9%83%D8%AA%D8%A7%D8%A8-%D8%AA%D8%B9%D9%84%D9%85-%D9%84%D8%BA%D8%A9-css-pdf'),
(8, '../GraduationProject/assets/img/courses/boot.jfif', 'https://www.youtube.com/watch?v=auFVttzUoo8&list=PLDoPjvoNmBAw24EjNUp_88S1VeaNK8Cts', 'https://www.alarabimag.com/books/8942-%D8%A7%D8%AD%D8%AA%D8%B1%D9%81-%D8%AA%D9%82%D9%86%D9%8A%D8%A9-Bootstrap-%D9%81%D9%8A.html'),
(9, '../GraduationProject/assets/img/courses/php.jfif', 'https://m.youtube.com/playlist?list=PLDoPjvoNmBAzH72MTPuAAaYfReraNlQgM', 'https://www.noor-book.com/%D9%83%D8%AA%D8%A7%D8%A8-%D8%A7%D8%AD%D8%AA%D8%B1%D9%81-php5-pdf'),
(10, '../GraduationProject/assets/img/courses/python.jfif', 'https://www.youtube.com/watch?v=mvZHDpCHphk&list=PLDoPjvoNmBAyE_gei5d18qkfIe-Z8mocs', 'https://www.noor-book.com/%D9%83%D8%AA%D8%A7%D8%A8-%D8%A7%D9%84%D8%A8%D8%B1%D9%85%D8%AC%D9%87-%D8%A8%D9%84%D8%BA%D9%87-%D8%A7%D9%84%D8%A8%D8%A7%D9%8A%D8%AB%D9%88%D9%86-Pink-Python-pdf'),
(11, '../GraduationProject/assets/img/courses/asp.net.jfif', 'https://www.youtube.com/watch?v=Ic3IE__dLeY&list=PLlsuYV2tnQw4d69oufqfPI8tL0gx0k1gY', 'https://www.noor-book.com/%D9%83%D8%AA%D8%A7%D8%A8-%D8%B3%D9%84%D8%B3%D9%84%D8%A9-ASP-NET-%D8%AE%D8%B7%D9%88%D8%A9-%D8%A8%D8%AE%D8%B7%D9%88%D8%A9-%D8%AD%D8%AA%D9%89-%D8%A7%D9%84%D8%A7%D8%AD%D8%AA%D8%B1%D8%A7%D9%81-%D8%A7%D9%84%D9%81%D8%B5%D9%84-%D8%A7%D9%84%D8%A3%D9%88%D9%84-%D9%81%D9%8A%D8%AC%D9%88%D8%A7%D9%84-%D8%A8%D9%8A%D8%B3%D9%83-%D8%B3%D9%8A-%D8%B4%D8%A7%D8%B1%D8%A8-pdf'),
(12, '../GraduationProject/assets/img/courses/javasc.jfif', 'https://www.youtube.com/playlist?list=PLDoPjvoNmBAw6p0z0Ek0OjPzeXoqlFlCh', 'https://www.noor-book.com/%D9%83%D8%AA%D8%A7%D8%A8-%D8%AA%D8%B9%D9%84%D9%85-%D8%AC%D8%A7%D9%81%D8%A7-%D8%B3%D9%83%D8%B1%D9%8A%D8%A8%D8%AA-pdf'),
(13, '../GraduationProject/assets/img/courses/jquery.jfif', 'https://www.youtube.com/playlist?list=PLDoPjvoNmBAwXDFEEpc8TT6MFbDAC5XNB', 'https://books-library.online/free-178280169-download'),
(14, '../GraduationProject/assets/img/courses/react.jfif', 'https://youtube.com/playlist?list=PL_aOZuct6oApk0blD7LT4PtdTxCWwAlnb', 'https://books.goalkicker.com/ReactJSBook/'),
(15, '../GraduationProject/assets/img/courses/node.jfif', 'https://www.youtube.com/watch?v=2jbaDlQqcoY&list=PLGhZWewM_75LQf3KvHo6HHSclmDyDazl7', 'https://books.goalkicker.com/NodeJSBook/'),
(16, '../GraduationProject/assets/img/courses/laravel.jfif', 'https://m.youtube.com/playlist?list=PLCm7ZeRfGSP4NNEikwx3wUAskQHB3p-LK', 'https://www.noor-book.com/%D9%83%D8%AA%D8%A7%D8%A8-%D8%AF%D9%88%D8%B1%D8%A9-%D9%85%D8%AC%D8%A7%D9%86%D9%8A%D8%A9-%D9%84%D8%AA%D8%B9%D9%84%D9%85-Laravel-5-%D8%A8%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A-pdf\r\n'),
(17, '../GraduationProject/assets/img/courses/ruby.jfif', 'https://www.youtube.com/watch?v=4MpY4dpDDGY&list=PLF8OvnCBlEY0GJVVe1YquY64Ag7NBbPZq', 'https://www.noor-book.com/%D9%83%D8%AA%D8%A7%D8%A8-%D9%85%D9%82%D8%AF%D9%85%D8%A9-%D9%81%D9%8A-%D8%B1%D9%88%D8%A8%D9%8A-pdf'),
(18, '../GraduationProject/assets/img/courses/angular.jfif', 'https://www.youtube.com/watch?v=TcNyTC3kjmE&list=PLCIJjtzQPZJ9bVAyAfLFGI2bYhrsKolof', 'http://eecs.csuohio.edu/~sschung/CIS408/AngularJS%20Introduction.pdf'),
(19, '../GraduationProject/assets/img/courses/vue.jfif', 'https://www.youtube.com/watch?v=13fv-xEAFmY&list=PLDoPjvoNmBAxr5AqK3Yz4DWYKVSmIFziw', 'https://riptutorial.com/Download/vue-js.pdf'),
(20, '../GraduationProject/assets/img/CS/1.jfif', 'https://www.youtube.com/playlist?list=PLCInYL3l2AajFAiw4s1U4QbGszcQ-rAb3', 'https://web2.aabu.edu.jo/tool/course_file/lec_notes/901133_C++_Slides.pdf'),
(21, '../GraduationProject/assets/img/cs/2.jfif', 'https://www.youtube.com/playlist?list=PLCInYL3l2Aaiq1oLvi9TlWtArJyAuCVow', 'https://drive.google.com/file/d/1jOWJdi7QKGJBw-m_g0KLYvzpoLllEekE/view?usp=sharing'),
(22, '../GraduationProject/assets/img/cs/3.jfif', 'https://www.youtube.com/watch?v=6QAELgirvjs&list=PLDoPjvoNmBAw_t_XWUFbBX-c9MafPk9ji', 'https://drive.google.com/file/d/1yjl-91FTnlMZwMPSg4M0bDjLeWD2rFxg/view?usp=sharing'),
(23, '../GraduationProject/assets/img/cs/4.jfif', 'https://www.youtube.com/watch?v=Do6l420WF4E&list=PLPn4eVPZKtrI-AIET96mSMcPsKOevYnqm', 'https://www.mediafire.com/folder/nll8iea78mw3dtx,wcsw7b02860981g,61f1plw1lv61q1y,6sz3dacxg9n2vyc,b3rmwbyjos5bxh4,z5lc8pat4w6k31g,zmgeq5tnic4idlt,d4fhf14uc9id895/shared'),
(24, '../GraduationProject/assets/img/cs/5.jfif', 'https://www.youtube.com/watch?v=WnMPk6_8qDo&list=PLfay0LLBd0wg3sCvbgQ8TuGMA_H7Vg9Rf', 'https://www.mediafire.com/folder/xeyewh80y9c6mjo,h38jc1aqtz82j8m,74g20y8o72p8yax,62d63e71ylqxxaa,29djy4cq1d8w0cc,rhwvrrbthrwkoj8,sd74brf5wm8rl2a,76k6w76fs6p262w,buiz087u4rwc7vm/shared'),
(25, '../GraduationProject/assets/img/cs/6.jfif', 'https://www.youtube.com/playlist?list=PLCInYL3l2AajqOUW_2SwjWeMwf4vL4RSp', 'https://www.mediafire.com/folder/fenugj82dr9tzv4,e5a9oj35a4ap4hg,zyw4dmno5il5dyb,8jkj86sjxmxh182,2r9c9citja8gg8q,dp4tmqi5ff3c9n8,ewf8kj803bh8dl9,vtzwq2mwk1zkwbi,d8rjmvvzrf29jkk,euccrehr5vu97d3,vyqvtn5zy1ni901/shared'),
(26, '../GraduationProject/assets/img/cs/7.jfif', 'https://www.youtube.com/watch?v=mvZHDpCHphk&list=PLDoPjvoNmBAyE_gei5d18qkfIe-Z8mocs', 'https://drive.google.com/drive/mobile/folders/1Lt6OUCvMUAuMA0fADAhQx7TwqRrOSHsy?fbclid=IwAR3ht1UBylWvgaMS5gy0U184xPR_CQa4vakpBm9Rd-iNYtXQNdH4EmPgtTU'),
(27, '../GraduationProject/assets/img/cs/8.jfif', 'https://www.youtube.com/playlist?list=PLF8OvnCBlEY1bFcTW9JKKO7WJn_Bf9LZ1', 'https://www.w3schools.com/php/DEFAULT.asp'),
(28, '../GraduationProject/assets/img/cs/9.jfif', 'https://www.youtube.com/watch?v=F620ommtjqk&list=PLAwxTw4SYaPnFKojVQrmyOGFCqHTxfdv2', 'https://web2.aabu.edu.jo/faculties_site/arabic/programs/syllabus.jsp?co=901711'),
(29, '../GraduationProject/assets/img/cs/10.jfif', 'https://www.youtube.com/watch?v=qhkZRa5wKmk&list=PLPn4eVPZKtrJXMoujdxAHLW2ZMMSXG9CV', 'https://www.mediafire.com/folder/wlaq1ls34dc7p2n,daugd7xh9f5go0k,q9f000cbuaqqi6m,5vdkvvqad4vmv15,l5ikeea2vv91hie,0bwthhwrya0cu0z,zcgm2msikd82bl1,nryhka3r3243vxk,g4h4z63fmcwda2t/shared'),
(30, '../GraduationProject/assets/img/cs/11.jfif', 'https://www.youtube.com/playlist?list=PLHKTPL-jkzUrpd1zHEZEIywI5MMtOJX0R', 'https://drive.google.com/file/d/1eF2r2_nn2PyafoOIYl6ngO2pPy63lnJP/view?usp=sharing'),
(31, '../GraduationProject/assets/img/cs/12.jfif', 'https://www.youtube.com/watch?v=kv_5npzXceA&list=PLPn4eVPZKtrKfRZ73EZAqF_zJtN0RJHNX', 'https://www.mediafire.com/folder/rdkd1dj6594nyuy,t1jyybldt4lv3ik,kbz754eulf527gu,0xc5igs6zhxjf5z,gmoaa0u43hqroef,fyh6hjbb3hom5k2,s0woode4dodfjh5,igjv61m6p28b5ev/shared'),
(32, '../GraduationProject/assets/img/cs/13.jfif', 'https://www.youtube.com/watch?v=2qTJglOu55g&list=PLeDJ7sxASv3SV-F1VbF4VKoHM6nXm3m4S', 'https://drive.google.com/file/d/1SgJuvd1Vn7uX_SL3f-vx3Xs7gFomKZeU/view?usp=sharing'),
(33, '../GraduationProject/assets/img/cs/14.jfif', 'https://www.youtube.com/watch?v=pvdjg4dwtQw&list=PLrCBCI_Do84iJ-kiE1F2trKik2Ts4XelM', 'https://www.mediafire.com/folder/z9bfz0w9ri11ga5,tbzvjgmvf7w4ekj,88p81c3lrd4a853,k2ae4c6tb83fcfp,2p7uamin3h4yad4,dap32b3lyb9gt8s,5p348fixh5sda8a,k3fgdxtgt2urdlb,eipv71c8ojc5020,gfgpk57n56gwjj7,5xyyr62racjvyd0,vbc3pn8e0opnfw4,q5t10jghtagggtb,wqs3q8bwbf6vnao/shared'),
(34, '../GraduationProject/assets/img/cs/15.jfif', 'https://www.youtube.com/watch?v=YbGDR6_AHHA&list=PLWxx617EXxRie3v2mNvLxzUKbD9kWhi0S', 'https://www.mediafire.com/folder/huez96nde8owy6w,sic7jcyi599ne5a,d74sd8bu93mdo62,t32nsdzieluef52,c5re3lpedilpm7k,sl2k5ej6okuu6eq,og1fsf92xvexhvn,qglm3w5a46ltjga/shared'),
(35, '../GraduationProject/assets/img/cs/16.jfif', 'https://www.youtube.com/watch?v=nZ6IM76fA1I&list=PLOxHK3C87_TmXch6XEEkqyYrHEY6sExGN', 'https://web2.aabu.edu.jo/faculties_site/arabic/programs/syllabus.jsp?co=901200'),
(36, '../GraduationProject/assets/img/cs/17.jfif', 'https://www.youtube.com/playlist?list=PLHKTPL-jkzUqRPIzSeayjdxqXotMXK2T9', 'https://walsharafat.wixsite.com/wafa?fbclid=IwAR3kNbB3q0d4lenSDcNq6isLu0cKIZvSLMsoNCpEY9fBGx9TzorLHUc7L4M'),
(37, '../GraduationProject/assets/img/cs/18.jfif', 'https://www.youtube.com/watch?v=cU8a1mTg56I&list=PLPn4eVPZKtrLV0ogOvvwmKv2zFMFXJK87', 'https://drive.google.com/drive/folders/0B0NbV_E3ABWvbTRXSGt3SnZLRTQ'),
(38, '../GraduationProject/assets/img/cs/19.jfif', 'https://www.youtube.com/watch?v=AGsKfeHM5VI&list=PL1KA7P5hJ-obwTDetMyuMNUzkwTm-M6tG', 'https://drive.google.com/drive/folders/14HlV8uSgg3RyxiVV-bxI2TGrlGWlCy5f?fbclid=IwAR1fbEvF7RUM1x1RZA2AyBVrbNbBv3wGcQ8TarGjQeW31peYQIFqxS4FS2s'),
(39, '../GraduationProject/assets/img/cs/20.jfif', 'https://m.youtube.com/playlist?list=PL4mqzqquSRgaJ9XMQMUvMQjPyllD1xY5f', 'https://drive.google.com/file/d/14e5xha8V7D9u_via5pH_koR_52572Blb/view?usp=sharing'),
(40, '../GraduationProject/assets/img/cs/21.jfif', 'https://youtube.com/playlist?list=PLVn5UigDlJB-KmiMUznGT8pnSiX0p-uzu', 'https://l.facebook.com/l.php?u=https%3A%2F%2Fdrive.google.com%2Ffile%2Fd%2F1FDaE5Pkx6NWN47reKltb3NCYMH1nL_1K%2Fview%3Fusp%3Ddrivesdk%26fbclid%3DIwAR0O4cSKYsXIv-HLVLwhS4s_qvVsYmFsxwFaPT3IJHu1b-GM2GEFzIsbSP4&h=AT3zm5QSafa4lVZy0HBf1eymxfndsLJY6N3XIBy154s-BLp8sXWqpbBcZLiwpmJP-ZegbL9G336F4q96nSHrjgNXXkPxwAUwF2M-pAEh3cQuYtxfnabzEmmXtS4uKpDQcGLQ&__tn__=R]-R&c[0]=AT3fn3cVMs5Nrjo36kSL6zkr-RSMOBb5IOF3UC3GI43WAAbTMDMtEjrqtZE3Ha5AheSQKR8rtyZThGznQx2qeceUgWP08HV5809UTvppQz3AlPZ6FbHGW0e186kjhJ57eko35OArQx4SCGYxYqB2SbMf_F9C'),
(41, '../GraduationProject/assets/img/cs/22.jfif', 'https://www.youtube.com/watch?v=aRSo7wkV8Ks&list=PLHKTPL-jkzUqgHIBdC2I16QqZCSDN_6oS', 'https://drive.google.com/drive/folders/1C1x4zEGzJX4Cv7nuNrVJRU0k8VUJbv5l?fbclid=IwAR1neKUlnnOvbPb-adUvvFfsInPI2Fz9_dTVqyd5Sy2rR30e5xAk54MMiVs'),
(42, '../GraduationProject/assets/img/cs/23.jfif', 'https://m.youtube.com/playlist?list=PLd2pEan0ZG_Y1lTa4mXV1y0h-iJjINrqX', 'https://l.facebook.com/l.php?u=https%3A%2F%2Fdrive.google.com%2Ffile%2Fd%2F1llZSM9R8exGDG6yRzj5T6O3BKlgb8-Eq%2Fview%3Fusp%3Ddrivesdk%26fbclid%3DIwAR0b1rJKOyKvYB75jniLzYfF93oiuL0DKIzN9cBoR2qW6xrNmz3BlLauFTw&h=AT3nJOKKSmCz7DZsKPml5vs-Snbz5oovg8V4OVRLxw7Qv-_wDy7Cu5mqnl4EyMuZNlaLwWM_3-AN5qPNs-DSg9mcIw2XPikLCLzTIRF81wQ3kATf3a6CcuyxRQgnW_8OMD3W8A'),
(43, '../GraduationProject/assets/img/cs/24.jfif', '', 'https://drive.google.com/drive/folders/1-ckcLVdePjiQq9gUEWQg-yibzy9zu1zA?fbclid=IwAR3hkytIV1WR5LoGUb_0aWHcMSOVekItkffmMy1FRg-0DUBzhW4guVS4epw'),
(44, '../GraduationProject/assets/img/cs/25.jfif', 'https://m.youtube.com/playlist?list=PLfSNtamYcU70vmuPAvaFlslbJoj-YhLcA', 'https://drive.google.com/drive/folders/1KHy5gr7mRhAzWt2yfBdk6PBBYncAN3AL'),
(45, '../GraduationProject/assets/img/cs/26.jfif', 'https://m.youtube.com/playlist?list=PLoURjA1UEuTwYxkLsiEnV2-4vTy7ayqT8', 'https://l.facebook.com/l.php?u=https%3A%2F%2Fweb2.aabu.edu.jo%2Fstaff_site%2Farabic%2Findex.jsp%3Fmenu_id%3D3%26site_no%3D2123%26col_id%3D9%26dept_id%3D902%26fbclid%3DIwAR1m3TQZl1augatHINiylDEtu5sYtyOQpUgkjWD9kdzx4x6Z2HzpBEWtnsc&h=AT3iXXXGjwJertDxPbasJJPmuebfqQfjxN8ZTQALmbLz4ufB-nZfGUd0Zlr6oHJrpQMlAqrThzQ7Ymv6mU11EBYcd27_cvj5t_g7w0qi6D8mzodXpl1UkOrxJ_fyG1_hrZgh&__tn__=R]-R&c[0]=AT1X0NQ-bO4_sefNOsFC6sJkJzBXZFIFCveAbjzA8Z8f8FWOJFiNxg7vyT3gcBeKL0f3pGavHkJeGjd94VSgEQ0ZC--9PTgT-O08bi__Z1mi4ZRXemd4yaQwoEBOyZHIdTXCqiwIdWfAqs1Bis3kb70uKEnR'),
(46, '../GraduationProject/assets/img/cs/27.jfif', '', 'https://web2.aabu.edu.jo/staff_site/arabic/index.jsp?menu_id=10&site_no=2123&col_id=9&dept_id=902'),
(47, '../GraduationProject/assets/img/cs/28.jfif', 'https://www.youtube.com/watch?v=qwZjIZVYAaw&list=PLz6wgWfBR7c43BdnDnfF8UaTEeKQt0adQ', 'https://drive.google.com/file/d/1IOcuji1YFh3UbWAFITEzUlgHQS2RbjJx/view?usp=sharing'),
(48, '../GraduationProject/assets/img/cs/29.jfif', 'https://www.youtube.com/playlist?list=PLMm8EjqH1EFVEVWSiBdCoBEJHffjHUScZ', 'https://drive.google.com/drive/folders/1tj3wI1IRScqn1_BjDWFeFiKw_C71blS'),
(49, '../GraduationProject/assets/img/CIS/7.jfif', 'https://m.youtube.com/playlist?list=PLaZQkZp6WhWwoDuD6pQCmgVyDbUWl_ZUi', 'https://web2.aabu.edu.jo/faculties_site/arabic/programs/syllabus.jsp?co=902333'),
(50, '../GraduationProject/assets/img/CIS/9.jfif', 'https://www.youtube.com/playlist?list=PLMYF6NkLrdN837Uw2zwJtPSN0q5YAKY0p', 'https://l.facebook.com/l.php?u=https%3A%2F%2Fweb2.aabu.edu.jo%2Ffaculties_site%2Farabic%2Fprograms%2Fsyllabus.jsp%3Fco%3D904356%26fbclid%3DIwAR1HcQdlWTowtbAq43eH5GNliFR64hxluzFg9JNQYXa9KsRJThg4KbKzp3Y&h=AT12FYfc9arPQgO29jKAYidvCWV2Z3umGjp2POxUhpKGwOyPeaR0IttWscecB45zjw7ImAvZzK9660XeVbmRvPtEz4dyTSezoUxQO0SskK2XEo2Xc6RPw6uYD89qPbz82Rde&__tn__=R]-R&c[0]=AT2NCI-jlwNcjFW4mz0MsI-Z4s3TwEz8SK_7zmNqJxFOFvyxegPuiYBa4r2JojDvf4Z6TA_6eKQWNyghtkhXt571qRgDsqGK-8CsjaPBOu2OLR9h2pAH7ez7v-JU6F6L-Xvuuu3frGAyAdApZz10Zi7IJ87A'),
(51, '../GraduationProject/assets/img/CIS/13.jfif', 'https://m.youtube.com/playlist?list=PLDzJjUPKKyuRuiJdsg1hOem8fzvi6qpLc', 'file:///C:/Users/PC/Downloads/ilovepdf_merged-8.pdf'),
(52, '../GraduationProject/assets/img/CIS/14.jfif', 'https://youtube.com/playlist?list=PLeDJ7sxASv3SV-F1VbF4VKoHM6nXm3m4S', 'https://www.mediafire.com/folder/nz5zzm2zgk2fkfx,9jw9ivxwb24wfms,u75k9q113avtraf,3bpj6oivtmu6mre,vd3dcikfor7v5ze,s2ns8h4ri3v4ncy,8v8yvblrqnnw2f8,08ot2wm2jkj8xmd,g62e95q6z0n1d61/shared'),
(53, '../GraduationProject/assets/img/CIS/26.jfif', 'https://m.youtube.com/playlist?list=PLoURjA1UEuTwYxkLsiEnV2-4vTy7ayqT8', 'https://l.facebook.com/l.php?u=https%3A%2F%2Fweb2.aabu.edu.jo%2Fstaff_site%2Farabic%2Findex.jsp%3Fmenu_id%3D3%26site_no%3D2123%26col_id%3D9%26dept_id%3D902%26fbclid%3DIwAR1m3TQZl1augatHINiylDEtu5sYtyOQpUgkjWD9kdzx4x6Z2HzpBEWtnsc&h=AT3iXXXGjwJertDxPbasJJPmuebfqQfjxN8ZTQALmbLz4ufB-nZfGUd0Zlr6oHJrpQMlAqrThzQ7Ymv6mU11EBYcd27_cvj5t_g7w0qi6D8mzodXpl1UkOrxJ_fyG1_hrZgh&__tn__=R]-R&c[0]=AT1X0NQ-bO4_sefNOsFC6sJkJzBXZFIFCveAbjzA8Z8f8FWOJFiNxg7vyT3gcBeKL0f3pGavHkJeGjd94VSgEQ0ZC--9PTgT-O08bi__Z1mi4ZRXemd4yaQwoEBOyZHIdTXCqiwIdWfAqs1Bis3kb70uKEnR'),
(54, '../GraduationProject/assets/img/CIS/30.jfif', 'https://www.youtube.com/watch?v=52AK9DvDllM&list=PL6sBVS7Lj0MrE4Bfr9CZ4jz1c9WuYnEZZ', 'https://drive.google.com/drive/folders/1UE8qRlI8OmaN6ka7OXA83WShIUa0l3b9?fbclid=IwAR3lVJvJ2akatFkoz7xcPPF0OPYuDIXiPgvTO0e9HpiRQdbXlKCuxXalscE'),
(55, '../GraduationProject/assets/img/MIS/21.jfif', 'https://www.youtube.com/playlist?list=PL3BYO3what8qON4z2n8B1TfzEyR7U45um', 'https://l.facebook.com/l.php?u=https%3A%2F%2Fdrive.google.com%2Fdrive%2Fmobile%2Ffolders%2F1SI5VnKbuBtGzeujehkMS_yyKxH8vE6t3%3Fusp%3Ddrive_open%26fbclid%3DIwAR3p7nYFUW3VgPSsfH_nk3Sg9NVmU-BgkMMK4x15bMaDypJAnyeMDNaz3lM&h=AT0Ck0X_gOROaF1xH8S7Kdu8JDyFzf7vmjQl-RAfuekuMDLDWXGaS9U8cZ2xvIFaBu90k_LgStPh9LnPi0qRmmkrjmTn3lZ61rCgV-R9k_Pi2GO_IjLRzfDSmnjvIzYXREdH&__tn__=R]-R&c[0]=AT0e7u01mImP3V90yF3awa5hCVs0tNTsqcmfGfYS4PZgWZzsNO6ej8uV4QrvxC6KTrEdN_YY-2Nt1s_rdEGX_jYOIyJqv711OCp0jkvtrMpd-EcYJ4eKNHs79lPH4p49-VLroZ-5i0av02Uiq9i6uups8-Hu'),
(56, '../GraduationProject/assets/img/MIS/22.jfif', 'https://www.youtube.com/watch?v=PrKrcGWG5tg&list=PLO6V6DeYbPNHEqRrZbCOcFS2OwUVabaHc', 'https://web2.aabu.edu.jo/faculties_site/arabic/programs/syllabus.jsp?co=904471'),
(57, '../GraduationProject/assets/img/MIS/23.jfif', 'https://m.youtube.com/playlist?list=PLoGarqq5gpBVF5AMbs3kWoP6QLTCVSx3W', 'https://web2.aabu.edu.jo/staff_site/arabic/index.jsp?menu_id=4&site_no=2123&col_id=9&dept_id=902'),
(58, '../GraduationProject/assets/img/MIS/24.jfif', 'https://www.youtube.com/watch?v=qM_y2T8BlTU&list=PLYZrADQ1b_7mqkD4Zb8dZEwJoDYXA07iK', 'file:///C:/Users/PC/Downloads/%D8%A7%D8%AF%D8%A7%D8%B1%D8%A9-%D9%85%D8%B9%D8%B1%D9%81%D9%87.pdf'),
(59, '../GraduationProject/assets/img/MIS/25.jfif', 'https://www.youtube.com/playlist?list=PLeRlpfJzFz6__ozPVkftyKJKtRAanBvWc', 'https://msharo83.wixsite.com/alsharo/courses'),
(60, '../GraduationProject/assets/img/MIS/26.jfif', '', 'file:///C:/Users/PC/Downloads/ilovepdf_merged-3.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `favusers`
--

CREATE TABLE `favusers` (
  `ID` int(11) NOT NULL,
  `favorite` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favusers`
--

INSERT INTO `favusers` (`ID`, `favorite`, `user_id`) VALUES
(1, 16, 1),
(2, 21, 1),
(3, 2, 2),
(4, 14, 2);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`ID`, `Title`, `Description`) VALUES
(1, 'Test', 'Tesat Note'),
(2, 'tfytf', 'tuyjkn');

-- --------------------------------------------------------

--
-- Table structure for table `noteuser`
--

CREATE TABLE `noteuser` (
  `ID` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `noteuser`
--

INSERT INTO `noteuser` (`ID`, `id_user`, `id_note`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL,
  `question` text NOT NULL,
  `display_name` text NOT NULL,
  `Image_User` varchar(100) NOT NULL,
  `Bio` text NOT NULL,
  `Intersted` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `email`, `phone`, `password`, `question`, `display_name`, `Image_User`, `Bio`, `Intersted`) VALUES
(1, 'danasadoun', 'danaa@gmail.com', '0791234568', '123456789DDdd@@41', 'yes', 'danaa', 'user2.png', '23 old year', 'HTML,JAVASCRIPT,CSS'),
(2, 'jehannedal', 'jehan@gmail.com', '0796186967', '123456789DDdd@@4', 'no', 'jooj', '', '22 year', 'java and kotlen'),
(3, 'SalehQdesat', 'qqdesat96@gmail.com', '0796930922', 'SsDd123@', 'yes', 'SDAALNEAH', '', '', ''),
(5, 'demashurman', 'test@test.com', '1234567899', 'Dd1234@@', 'yes', 'shurman', 'user2.png', 'deema shurman 23 old ', 'css,html,hava'),
(6, 'testnotcopy', 'testttt@test.com', '0123456789', 'SSddSSdd1234@@@@', 'yes', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `favusers`
--
ALTER TABLE `favusers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `favorite` (`favorite`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `noteuser`
--
ALTER TABLE `noteuser`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_note` (`id_note`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `favusers`
--
ALTER TABLE `favusers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `noteuser`
--
ALTER TABLE `noteuser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favusers`
--
ALTER TABLE `favusers`
  ADD CONSTRAINT `favusers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favusers_ibfk_2` FOREIGN KEY (`favorite`) REFERENCES `favorite` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `noteuser`
--
ALTER TABLE `noteuser`
  ADD CONSTRAINT `noteuser_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `noteuser_ibfk_2` FOREIGN KEY (`id_note`) REFERENCES `notes` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
