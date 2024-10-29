-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3302
-- Generation Time: Jun 12, 2022 at 03:25 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guestbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `golf`
--

CREATE TABLE `golf` (
  `id` int(5) NOT NULL,
  `golfer` varchar(50) NOT NULL,
  `score` int(30) NOT NULL,
  `par` int(30) NOT NULL,
  `net` int(30) NOT NULL,
  `scoreround` int(30) NOT NULL,
  `netround` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `infofke`
--

CREATE TABLE `infofke` (
  `infoNum` int(11) NOT NULL,
  `matrik` varchar(20) NOT NULL,
  `title` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `content` varchar(50000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infofke`
--

INSERT INTO `infofke` (`infoNum`, `matrik`, `title`, `date`, `content`, `image`) VALUES
(1, 'S00227', 'WELCOME TO FKE INFORMATION SYSTEM ', '2022-06-10', 'Pelajar boleh mengakses maklumat yang disampaikan disini dengan mudah . Semua adalah dikawal oleh pihak atasan . Maka ICS ini akan menyampaikan hanya berita yang benar dan halang maklumat palsu. Segala yang disampaikan disini akan disemak dan dipost untuk mengekalkan integriti universiti. \r\n\r\n\r\nTerima Kasih . \r\nDaripada pihak ICS		', ''),
(5, 'S00227', '(NETSA Skill Challenge)', '2022-06-10', 'Assalamualaikum dan salam sejahtera kepada semua warga UTeM !\r\n Ingin mengasah skill networking anda ? NETSA SKILL CHALLENGE KINI KEMBALI. \r\nPenyertaan dibuka untuk semua warga UTeM yang berminat. Terdapat dua pertandingan \r\ndianjurkan iaitu NETWORK BASED SKILL CHALLENGE dan CTF COMPETITION.\r\n\r\nâ—ï¸Anda dikehendaki untuk bekerja dalam kumpulan seramai 3 orang. \r\nâ—ï¸Turut disediakan hadiah kepada para pemenang ðŸŽ.  \r\n\r\nðŸ¥‡Tempat pertama : RM 150\r\nðŸ¥ˆTempat kedua     : RM 100\r\nðŸ¥‰Tempat ketiga.    : RM 50\r\n\r\nNetwork Based Skill\r\nðŸ“Tarikh     : 11 Jun 2022 (Sabtu) \r\nðŸ“Tempat  : Makmal Rangkaian 1& Makmal Sistem\r\nðŸ“Masa      : 8:00 pagi - 2:00 petang.\r\n\r\nCTF COMPETITION\r\nðŸ“Tarikh.     : 12 Jun 2022 (Ahad)\r\nðŸ“Tempat    : Makmal UTeMsys & Makmal CCNA\r\nðŸ“Masa       : 8:00 pagi - 5:00 petang\r\n\r\n', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `infofkekk`
--

CREATE TABLE `infofkekk` (
  `infoNum` int(11) NOT NULL,
  `matrik` varchar(20) NOT NULL,
  `title` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `content` varchar(50000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infofkekk`
--

INSERT INTO `infofkekk` (`infoNum`, `matrik`, `title`, `date`, `content`, `image`) VALUES
(2, 'S00227', 'WELCOME TO FKEKK INFORMATION SYSTEM', '2022-06-10', 'Pelajar boleh mengakses maklumat yang disampaikan disini dengan mudah . Semua adalah dikawal oleh pihak atasan . Maka ICS ini akan menyampaikan hanya berita yang benar dan halang maklumat palsu. Segala yang disampaikan disini akan disemak dan dipost untuk mengekalkan integriti universiti. \r\n\r\nTerima Kasih \r\nDaripada pihak ICS', ''),
(5, 'S00227', '(NETSA Skill Challenge)', '2022-06-10', 'Assalamualaikum dan salam sejahtera kepada semua warga UTeM ! \r\nIngin mengasah skill networking anda ? NETSA SKILL CHALLENGE KINI KEMBALI. \r\nPenyertaan dibuka untuk semua warga UTeM yang berminat. Terdapat dua pertandingan \r\ndianjurkan iaitu NETWORK BASED SKILL CHALLENGE dan CTF COMPETITION.\r\n\r\nâ—ï¸Anda dikehendaki untuk bekerja dalam kumpulan seramai 3 orang. \r\nâ—ï¸Turut disediakan hadiah kepada para pemenang ðŸŽ.  \r\n\r\nðŸ¥‡Tempat pertama : RM 150\r\nðŸ¥ˆTempat kedua     : RM 100\r\nðŸ¥‰Tempat ketiga.    : RM 50\r\n\r\nNetwork Based Skill\r\nðŸ“Tarikh     : 11 Jun 2022 (Sabtu) \r\nðŸ“Tempat  : Makmal Rangkaian 1& Makmal Sistem\r\nðŸ“Masa      : 8:00 pagi - 2:00 petang.\r\n\r\nCTF COMPETITION\r\nðŸ“Tarikh.     : 12 Jun 2022 (Ahad)\r\nðŸ“Tempat    : Makmal UTeMsys & Makmal CCNA\r\nðŸ“Masa       : 8:00 pagi - 5:00 petang\r\n\r\n', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `infofkm`
--

CREATE TABLE `infofkm` (
  `infoNum` int(11) NOT NULL,
  `matrik` varchar(20) NOT NULL,
  `title` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `content` varchar(50000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infofkm`
--

INSERT INTO `infofkm` (`infoNum`, `matrik`, `title`, `date`, `content`, `image`) VALUES
(2, 'S00227', 'WELCOME TO FKM INFORMATION SYSTEM', '2022-06-10', 'Pelajar boleh mengakses maklumat yang disampaikan disini dengan mudah . Semua adalah dikawal oleh pihak atasan . Maka ICS ini akan menyampaikan hanya berita yang benar dan halang maklumat palsu. Segala yang disampaikan disini akan disemak dan dipost untuk mengekalkan integriti universiti. \r\n\r\nTerima Kasih \r\nDaripada pihak ICS', ''),
(5, 'S00227', '(NETSA Skill Challenge)', '2022-06-10', 'Assalamualaikum dan salam sejahtera kepada semua warga UTeM ! \r\nIngin mengasah skill networking anda ? NETSA SKILL CHALLENGE KINI KEMBALI. \r\nPenyertaan dibuka untuk semua warga UTeM yang berminat. Terdapat dua pertandingan \r\ndianjurkan iaitu NETWORK BASED SKILL CHALLENGE dan CTF COMPETITION.\r\n\r\nâ—ï¸Anda dikehendaki untuk bekerja dalam kumpulan seramai 3 orang. \r\nâ—ï¸Turut disediakan hadiah kepada para pemenang ðŸŽ.  \r\n\r\nðŸ¥‡Tempat pertama : RM 150\r\nðŸ¥ˆTempat kedua     : RM 100\r\nðŸ¥‰Tempat ketiga.    : RM 50\r\n\r\nNetwork Based Skill\r\nðŸ“Tarikh     : 11 Jun 2022 (Sabtu) \r\nðŸ“Tempat  : Makmal Rangkaian 1& Makmal Sistem\r\nðŸ“Masa      : 8:00 pagi - 2:00 petang.\r\n\r\nCTF COMPETITION\r\nðŸ“Tarikh.     : 12 Jun 2022 (Ahad)\r\nðŸ“Tempat    : Makmal UTeMsys & Makmal CCNA\r\nðŸ“Masa       : 8:00 pagi - 5:00 petang\r\n\r\n', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `infofkp`
--

CREATE TABLE `infofkp` (
  `infoNum` int(11) NOT NULL,
  `matrik` varchar(20) NOT NULL,
  `title` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `content` varchar(50000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infofkp`
--

INSERT INTO `infofkp` (`infoNum`, `matrik`, `title`, `date`, `content`, `image`) VALUES
(2, 'S00227', 'WELCOME TO FKP INFORMATION SYSTEM', '2022-06-10', 'Pelajar boleh mengakses maklumat yang disampaikan disini dengan mudah . Semua adalah dikawal oleh pihak atasan . Maka ICS ini akan menyampaikan hanya berita yang benar dan halang maklumat palsu. Segala yang disampaikan disini akan disemak dan dipost untuk mengekalkan integriti universiti. \r\n\r\nTerima Kasih  \r\nDaripada pihak ICS', ''),
(5, 'S00227', '(NETSA Skill Challenge)', '2022-06-10', 'Assalamualaikum dan salam sejahtera kepada semua warga UTeM !\r\nIngin mengasah skill networking anda ? NETSA SKILL CHALLENGE KINI KEMBALI. \r\nPenyertaan dibuka untuk semua warga UTeM yang berminat. Terdapat dua pertandingan \r\ndianjurkan iaitu NETWORK BASED SKILL CHALLENGE dan CTF COMPETITION.\r\n\r\nâ—ï¸Anda dikehendaki untuk bekerja dalam kumpulan seramai 3 orang. \r\nâ—ï¸Turut disediakan hadiah kepada para pemenang ðŸŽ.  \r\n\r\nðŸ¥‡Tempat pertama : RM 150\r\nðŸ¥ˆTempat kedua     : RM 100\r\nðŸ¥‰Tempat ketiga.    : RM 50\r\n\r\nNetwork Based Skill\r\nðŸ“Tarikh     : 11 Jun 2022 (Sabtu) \r\nðŸ“Tempat  : Makmal Rangkaian 1& Makmal Sistem\r\nðŸ“Masa      : 8:00 pagi - 2:00 petang.\r\n\r\nCTF COMPETITION\r\nðŸ“Tarikh.     : 12 Jun 2022 (Ahad)\r\nðŸ“Tempat    : Makmal UTeMsys & Makmal CCNA\r\nðŸ“Masa       : 8:00 pagi - 5:00 petang\r\n\r\n', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `infoftmk`
--

CREATE TABLE `infoftmk` (
  `infoNum` int(11) NOT NULL,
  `matrik` varchar(20) NOT NULL,
  `title` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `content` varchar(50000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infoftmk`
--

INSERT INTO `infoftmk` (`infoNum`, `matrik`, `title`, `date`, `content`, `image`) VALUES
(2, 'S00244', 'WELCOME TO FTMK INFORMATION SYSTEM', '2022-06-09', 'Pelajar boleh mengakses maklumat yang disampaikan disini dengan mudah . Semua adalah dikawal oleh pihak atasan . Maka ICS ini akan menyampaikan hanya berita yang benar dan halang maklumat palsu. Segala yang disampaikan disini akan disemak dan dipost untuk mengekalkan integriti universiti. \r\n\r\nTerima Kasih \r\nDaripada pihak ICS', ''),
(5, 'S00227', '(NETSA Skill Challenge)', '2022-06-10', 'Assalamualaikum dan salam sejahtera kepada semua warga UTeM ! \r\nIngin mengasah skill networking anda ? NETSA SKILL CHALLENGE KINI KEMBALI. \r\nPenyertaan dibuka untuk semua warga UTeM yang berminat. Terdapat dua pertandingan \r\ndianjurkan iaitu NETWORK BASED SKILL CHALLENGE dan CTF COMPETITION.\r\n\r\nâ—ï¸Anda dikehendaki untuk bekerja dalam kumpulan seramai 3 orang. \r\nâ—ï¸Turut disediakan hadiah kepada para pemenang ðŸŽ.  \r\n\r\nðŸ¥‡Tempat pertama : RM 150\r\nðŸ¥ˆTempat kedua     : RM 100\r\nðŸ¥‰Tempat ketiga.    : RM 50\r\n\r\nNetwork Based Skill\r\nðŸ“Tarikh     : 11 Jun 2022 (Sabtu) \r\nðŸ“Tempat  : Makmal Rangkaian 1& Makmal Sistem\r\nðŸ“Masa      : 8:00 pagi - 2:00 petang.\r\n\r\nCTF COMPETITION\r\nðŸ“Tarikh.     : 12 Jun 2022 (Ahad)\r\nðŸ“Tempat    : Makmal UTeMsys & Makmal CCNA\r\nðŸ“Masa       : 8:00 pagi - 5:00 petang\r\n\r\n', 'Screenshot (22).png'),
(6, 's0090', '[MAJLIS APRESIASI & ANUGERAH DEKAN SEMESTER II SESI AKADEMIK 2020/2021 & SEMESTER I SESI AKADEMIK 2021/2022]', '2022-06-08', '[FICTS UTeM]\r\nAdalah dimaklumkan satu MAJLIS APRESIASI & ANUGERAH DEKAN SEMESTER II SESI AKADEMIK 2020/2021 & SEMESTER I SESI AKADEMIK 2021/2022 anjuran FICTS akan diadakan pada masa dan ketetapan berikut:\r\n\r\nSidang 1\r\nTarikh/Hari : 1 Jun 2022 (Rabu)\r\nMasa : 2:00 petang - Semua Kursus\r\nTempat : Dewan Seminar, FTMK\r\n\r\nSidang 2\r\nTarikh/Hari : 8 Jun 2022 (Rabu)\r\nMasa (Sesi Pagi) : 8:00 pagi - BITC, BITD, BITE, BITI\r\nMasa (Sesi Petang) : 2.00 petang - BITM, BITZ, BITS, DIT\r\nTempat : Dewan Seminar, FTMK\r\n\r\nPelajar perlulah membuat pengesahan kehadiran dan HANYA PELAJAR YANG MENGESAHKAN KEHADIRAN SAHAJA DIBENARKAN MASUK KE DALAM DEWAN.\r\n\r\nLink Senarai Nama Penerima & E-flyer Majlis boleh didapatkan pada Heylink di bio kami:\r\nhttps://heylink.me/ficts_Official/\r\n\r\nSebarang pertanyaan boleh melalui En. Azman di talian 06-2702484', 'photo_2022-06-12_14-37-31.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `infojebat`
--

CREATE TABLE `infojebat` (
  `infoNum` int(11) NOT NULL,
  `matrik` varchar(20) NOT NULL,
  `title` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `content` varchar(50000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infojebat`
--

INSERT INTO `infojebat` (`infoNum`, `matrik`, `title`, `date`, `content`, `image`) VALUES
(6, 'S00227', 'WELCOME TO JEBAT INFORMATION SYSTEM', '2022-06-09', 'Pelajar boleh mengakses maklumat yang disampaikan disini dengan mudah . Semua adalah dikawal oleh pihak atasan . Maka ICS ini akan menyampaikan hanya berita yang benar dan halang maklumat palsu. Segala yang disampaikan disini akan disemak dan dipost untuk mengekalkan integriti universiti. Terima Kasih . Daripada pihak ICS	', ''),
(13, 'S00227', '(NETSA Skill Challenge)', '2022-06-09', 'Assalamualaikum dan salam sejahtera kepada semua warga UTeM ! Ingin mengasah skill networking anda ? NETSA SKILL CHALLENGE KINI KEMBALI. Penyertaan dibuka untuk semua warga UTeM yang berminat. Terdapat dua pertandingan dianjurkan iaitu NETWORK BASED SKILL CHALLENGE dan CTF COMPETITION.\r\n\r\nâ—ï¸Anda dikehendaki untuk bekerja dalam kumpulan seramai 3 orang. \r\nâ—ï¸Turut disediakan hadiah kepada para pemenang ðŸŽ.  \r\n\r\nðŸ¥‡Tempat pertama : RM 150\r\nðŸ¥ˆTempat kedua     : RM 100\r\nðŸ¥‰Tempat ketiga.    : RM 50\r\n\r\nNetwork Based Skill\r\nðŸ“Tarikh     : 11 Jun 2022 (Sabtu) \r\nðŸ“Tempat  : Makmal Rangkaian 1& Makmal Sistem\r\nðŸ“Masa      : 8:00 pagi - 2:00 petang.\r\n\r\nCTF COMPETITION\r\nðŸ“Tarikh.     : 12 Jun 2022 (Ahad)\r\nðŸ“Tempat    : Makmal UTeMsys & Makmal CCNA\r\nðŸ“Masa       : 8:00 pagi - 5:00 petang\r\n\r\n', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `infokasturi`
--

CREATE TABLE `infokasturi` (
  `infoNum` int(11) NOT NULL,
  `matrik` varchar(20) NOT NULL,
  `title` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `content` varchar(50000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infokasturi`
--

INSERT INTO `infokasturi` (`infoNum`, `matrik`, `title`, `date`, `content`, `image`) VALUES
(1, 'S00227', 'WELCOME TO KASTURI INFORMATION SYSTEM', '2022-06-09', 'Pelajar boleh mengakses maklumat yang disampaikan disini dengan mudah . Semua adalah dikawal oleh pihak atasan . Maka ICS ini akan menyampaikan hanya berita yang benar dan halang maklumat palsu. Segala yang disampaikan disini akan disemak dan dipost untuk mengekalkan integriti universiti. \r\n\r\nTerima Kasih\r\nDaripada pihak ICS	', ''),
(4, 'S00227', '(NETSA Skill Challenge)', '2022-06-10', 'Assalamualaikum dan salam sejahtera kepada semua warga UTeM !\r\nIngin mengasah skill networking anda ? NETSA SKILL CHALLENGE KINI KEMBALI. \r\nPenyertaan dibuka untuk semua warga UTeM yang berminat. Terdapat dua pertandingan \r\ndianjurkan iaitu NETWORK BASED SKILL CHALLENGE dan CTF COMPETITION.\r\n\r\nâ—ï¸Anda dikehendaki untuk bekerja dalam kumpulan seramai 3 orang. \r\nâ—ï¸Turut disediakan hadiah kepada para pemenang ðŸŽ.  \r\n\r\nðŸ¥‡Tempat pertama : RM 150\r\nðŸ¥ˆTempat kedua     : RM 100\r\nðŸ¥‰Tempat ketiga.    : RM 50\r\n\r\nNetwork Based Skill\r\nðŸ“Tarikh     : 11 Jun 2022 (Sabtu) \r\nðŸ“Tempat  : Makmal Rangkaian 1& Makmal Sistem\r\nðŸ“Masa      : 8:00 pagi - 2:00 petang.\r\n\r\nCTF COMPETITION\r\nðŸ“Tarikh.     : 12 Jun 2022 (Ahad)\r\nðŸ“Tempat    : Makmal UTeMsys & Makmal CCNA\r\nðŸ“Masa       : 8:00 pagi - 5:00 petang\r\n\r\n', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `infolekir`
--

CREATE TABLE `infolekir` (
  `infoNum` int(11) NOT NULL,
  `matrik` varchar(20) NOT NULL,
  `title` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `content` varchar(50000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infolekir`
--

INSERT INTO `infolekir` (`infoNum`, `matrik`, `title`, `date`, `content`, `image`) VALUES
(1, 'S00227', 'WELCOME TO LEKIR INFORMATION SYSTEM', '2022-06-09', 'Pelajar boleh mengakses maklumat yang disampaikan disini dengan mudah . Semua adalah dikawal oleh pihak atasan . Maka ICS ini akan menyampaikan hanya berita yang benar dan halang maklumat palsu. Segala yang disampaikan disini akan disemak dan dipost untuk mengekalkan integriti universiti. \r\n\r\nTerima Kasih\r\nDaripada pihak ICS		', ''),
(4, 'S00227', '(NETSA Skill Challenge)', '2022-06-10', 'Assalamualaikum dan salam sejahtera kepada semua warga UTeM ! \r\nIngin mengasah skill networking anda ? NETSA SKILL CHALLENGE KINI KEMBALI. \r\nPenyertaan dibuka untuk semua warga UTeM yang berminat. Terdapat dua pertandingan \r\ndianjurkan iaitu NETWORK BASED SKILL CHALLENGE dan CTF COMPETITION.\r\nâ—ï¸Anda dikehendaki untuk bekerja dalam kumpulan seramai 3 orang. \r\nâ—ï¸Turut disediakan hadiah kepada para pemenang ðŸŽ.  \r\n\r\nðŸ¥‡Tempat pertama : RM 150\r\nðŸ¥ˆTempat kedua     : RM 100\r\nðŸ¥‰Tempat ketiga.    : RM 50\r\n\r\nNetwork Based Skill\r\nðŸ“Tarikh     : 11 Jun 2022 (Sabtu) \r\nðŸ“Tempat  : Makmal Rangkaian 1& Makmal Sistem\r\nðŸ“Masa      : 8:00 pagi - 2:00 petang.\r\n\r\nCTF COMPETITION\r\nðŸ“Tarikh.     : 12 Jun 2022 (Ahad)\r\nðŸ“Tempat    : Makmal UTeMsys & Makmal CCNA\r\nðŸ“Masa       : 8:00 pagi - 5:00 petang\r\n\r\n', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `infolekiu`
--

CREATE TABLE `infolekiu` (
  `infoNum` int(11) NOT NULL,
  `matrik` varchar(20) NOT NULL,
  `title` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `content` varchar(50000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infolekiu`
--

INSERT INTO `infolekiu` (`infoNum`, `matrik`, `title`, `date`, `content`, `image`) VALUES
(1, 'S00227', 'WELCOME TO LEKIU INFORMATION SYSTEM', '2022-06-09', 'Pelajar boleh mengakses maklumat yang disampaikan disini dengan mudah . Semua adalah dikawal oleh pihak atasan .Maka ICS ini akan menyampaikan hanya berita yang benar dan halang maklumat palsu. Segala yang disampaikan disini akan disemak dan dipost untuk mengekalkan integriti universiti. \r\n\r\nTerima Kasih \r\nDaripada pihak ICS			', ''),
(4, 'S00227', '(NETSA Skill Challenge)', '2022-06-10', 'Assalamualaikum dan salam sejahtera kepada semua warga UTeM ! \r\nIngin mengasah skill networking anda ? NETSA SKILL CHALLENGE KINI KEMBALI. \r\nPenyertaan dibuka untuk semua warga UTeM yang berminat. Terdapat dua pertandingan \r\ndianjurkan iaitu NETWORK BASED SKILL CHALLENGE dan CTF COMPETITION.\r\n\r\nâ—ï¸Anda dikehendaki untuk bekerja dalam kumpulan seramai 3 orang. \r\nâ—ï¸Turut disediakan hadiah kepada para pemenang ðŸŽ.  \r\n\r\nðŸ¥‡Tempat pertama : RM 150\r\nðŸ¥ˆTempat kedua     : RM 100\r\nðŸ¥‰Tempat ketiga.    : RM 50\r\n\r\nNetwork Based Skill\r\nðŸ“Tarikh     : 11 Jun 2022 (Sabtu) \r\nðŸ“Tempat  : Makmal Rangkaian 1& Makmal Sistem\r\nðŸ“Masa      : 8:00 pagi - 2:00 petang.\r\n\r\nCTF COMPETITION\r\nðŸ“Tarikh.     : 12 Jun 2022 (Ahad)\r\nðŸ“Tempat    : Makmal UTeMsys & Makmal CCNA\r\nðŸ“Masa       : 8:00 pagi - 5:00 petang\r\n\r\n', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `infotuah`
--

CREATE TABLE `infotuah` (
  `infoNum` int(11) NOT NULL,
  `matrik` varchar(20) NOT NULL,
  `title` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `content` mediumtext NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infotuah`
--

INSERT INTO `infotuah` (`infoNum`, `matrik`, `title`, `date`, `content`, `image`) VALUES
(17, 'S00227', 'WELCOME TO TUAH INFORMATION SYSTEM', '2022-06-10', 'Pelajar boleh mengakses maklumat yang disampaikan disini dengan mudah . Semua adalah dikawal oleh pihak atasan . Maka ICS ini akan menyampaikan hanya berita yang benar dan halang maklumat palsu. Segala yang disampaikan disini akan disemak dan dipost untuk mengekalkan integriti universiti. \r\n\r\nTerima Kasih \r\n\r\nDaripada pihak ICS			', 'wel.jpg'),
(21, 'S00227', '(NETSA Skill Challenge)', '2022-06-10', 'Assalamualaikum dan salam sejahtera kepada semua warga UTeM !\r\n Ingin mengasah skill networking anda ? NETSA SKILL CHALLENGE KINI KEMBALI.\r\n Penyertaan dibuka untuk semua warga UTeM yang berminat. Terdapat dua pertandingan \r\ndianjurkan iaitu NETWORK BASED SKILL CHALLENGE dan CTF COMPETITION.\r\n\r\nâ—ï¸Anda dikehendaki untuk bekerja dalam kumpulan seramai 3 orang. \r\nâ—ï¸Turut disediakan hadiah kepada para pemenang ðŸŽ.  \r\n\r\nðŸ¥‡Tempat pertama : RM 150\r\nðŸ¥ˆTempat kedua     : RM 100\r\nðŸ¥‰Tempat ketiga.    : RM 50\r\n\r\nNetwork Based Skill\r\nðŸ“Tarikh     : 11 Jun 2022 (Sabtu) \r\nðŸ“Tempat  : Makmal Rangkaian 1& Makmal Sistem\r\nðŸ“Masa      : 8:00 pagi - 2:00 petang.\r\n\r\nCTF COMPETITION\r\nðŸ“Tarikh.     : 12 Jun 2022 (Ahad)\r\nðŸ“Tempat    : Makmal UTeMsys & Makmal CCNA\r\nðŸ“Masa       : 8:00 pagi - 5:00 petang\r\n\r\n', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `phone`, `gender`, `username`, `password`) VALUES
(10, 'Zuhaili', ' mzkstudio33@gmail.com', '01113097495', 'female', 'zul30', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `staffcomplaint`
--

CREATE TABLE `staffcomplaint` (
  `id` int(11) NOT NULL,
  `st_name` varchar(100) NOT NULL,
  `st_id` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `title` varchar(300) NOT NULL,
  `complaint` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffcomplaint`
--

INSERT INTO `staffcomplaint` (`id`, `st_name`, `st_id`, `phone`, `title`, `complaint`) VALUES
(1, 'MUHAMMAD ZUHAILI BIN SAMSUL', 'S00227', '01129344992', 'HAI', 'sjjs'),
(2, 'MUHAMMAD ZUHAILI BIN KASHIM', 'S00227', '0129344995', '', ''),
(3, 'ALI BIN ABU', 'S00244', '0123376456', 'haha', ''),
(4, 'MUHAMMAD ZUHAILI BIN KASHIM', 'S00227', '0129344995', 'njnj', 'nnn'),
(5, 'MUHAMMAD ZUHAILI BIN KASHIM', 'S00227', '0129344995', 'Tolong tambah create post untuk video', 'kekurangan ini amat menyukarkan para staff untuk menhantar video dalam web ini');

-- --------------------------------------------------------

--
-- Table structure for table `studentcomplaint`
--

CREATE TABLE `studentcomplaint` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `matric` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `faculty` varchar(10) NOT NULL,
  `prog` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `title` varchar(300) NOT NULL,
  `complaint` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentcomplaint`
--

INSERT INTO `studentcomplaint` (`id`, `name`, `matric`, `email`, `faculty`, `prog`, `year`, `title`, `complaint`) VALUES
(1, 'MUHAMMAD ZIKRI BIN KASHIM', 'D032110319', 'mzkstudio33@gmail.com', 'FTMK', 'DIT', '3', 'hahha', 'hoho'),
(2, 'MUHAMMAD ZIKRI BIN KASHIM', 'D032110319', 'mzkstudio33@gmail.com', 'FKM', 'DIT', '4', 'a', 'a'),
(3, 'MUHAMMAD ZIKRY BIN KASHIM', 'D032110318', 'muhdzikri33@gmail.com', '', '', '2', 'WEB CRASH', 'PLS FIX.'),
(4, 'MUHAMMAD ZIKRY BIN KASHIM', 'D032110318', 'muhdzikri33@gmail.com', 'FKE', 'DIT', '3', 'WEB CRASH', 'PLS FIX.'),
(5, 'MUHAMMAD ZIKRI BIN KASHIM', 'D032110318', 'muhdzikri33@gmail.com', 'FKEKK', 'DIT', '2', 'WEB CRASH AGAIN', 'PLEASE RESPONSE'),
(6, 'MUHAMMAD ZIKRI BIN KASHIM', 'D032110318', 'muhdzikri33@gmail.com', 'FKEKK', 'DIT', '2', 'HHH', ''),
(7, 'KHAIRUL AMRI BIN SAMSUL ANUAR', 'D032110067', 'amri222anuar@gmail.com', 'FTMK', 'DIT', '1', 'Saya Tertekan', 'Subjek yang terlalu banyak dalsam satu masa , dan banyak tugasan diberikan dalam tempoh masa yang singkat untuk dihantar membuatkan saya , bukan saya sahaja malah ramai pelajar tertekan , pihak universiti tolong ambil tindakan untuk kesihatan mental pelajar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `no_matrik` varchar(20) NOT NULL,
  `no_ic` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `no_matrik`, `no_ic`, `email`, `phone`, `kategori`, `password`) VALUES
(1, 'ADMINISTRATOR', 'admin01', '610628055423', 'administrator@utem.edu.my', '06-2654786', 'ADMIN', 'admin'),
(8, 'MUHAMMAD ZIKRI BIN KASHIM', 'D032110318', '030930040349', 'muhdzikri33@gmail.com', '01113097495', 'STUDENT', '12'),
(9, 'MUHAMMAD ZUHAILI BIN KASHIM', 'S00227', '971125045548', 'zuhaili97@gmail.com', '0129344995', 'STAFF', '1234'),
(10, 'ALI BIN ABAS', 'S00244', '950104042319', 'alirexy@gmail.com', '0123376456', 'STAFF', 'ali12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `golf`
--
ALTER TABLE `golf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infofke`
--
ALTER TABLE `infofke`
  ADD PRIMARY KEY (`infoNum`);

--
-- Indexes for table `infofkekk`
--
ALTER TABLE `infofkekk`
  ADD PRIMARY KEY (`infoNum`);

--
-- Indexes for table `infofkm`
--
ALTER TABLE `infofkm`
  ADD PRIMARY KEY (`infoNum`);

--
-- Indexes for table `infofkp`
--
ALTER TABLE `infofkp`
  ADD PRIMARY KEY (`infoNum`);

--
-- Indexes for table `infoftmk`
--
ALTER TABLE `infoftmk`
  ADD PRIMARY KEY (`infoNum`);

--
-- Indexes for table `infojebat`
--
ALTER TABLE `infojebat`
  ADD PRIMARY KEY (`infoNum`);

--
-- Indexes for table `infokasturi`
--
ALTER TABLE `infokasturi`
  ADD PRIMARY KEY (`infoNum`);

--
-- Indexes for table `infolekir`
--
ALTER TABLE `infolekir`
  ADD PRIMARY KEY (`infoNum`);

--
-- Indexes for table `infolekiu`
--
ALTER TABLE `infolekiu`
  ADD PRIMARY KEY (`infoNum`);

--
-- Indexes for table `infotuah`
--
ALTER TABLE `infotuah`
  ADD PRIMARY KEY (`infoNum`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffcomplaint`
--
ALTER TABLE `staffcomplaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentcomplaint`
--
ALTER TABLE `studentcomplaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `golf`
--
ALTER TABLE `golf`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `infofke`
--
ALTER TABLE `infofke`
  MODIFY `infoNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `infofkekk`
--
ALTER TABLE `infofkekk`
  MODIFY `infoNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `infofkm`
--
ALTER TABLE `infofkm`
  MODIFY `infoNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `infofkp`
--
ALTER TABLE `infofkp`
  MODIFY `infoNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `infoftmk`
--
ALTER TABLE `infoftmk`
  MODIFY `infoNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `infojebat`
--
ALTER TABLE `infojebat`
  MODIFY `infoNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `infokasturi`
--
ALTER TABLE `infokasturi`
  MODIFY `infoNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `infolekir`
--
ALTER TABLE `infolekir`
  MODIFY `infoNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `infolekiu`
--
ALTER TABLE `infolekiu`
  MODIFY `infoNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `infotuah`
--
ALTER TABLE `infotuah`
  MODIFY `infoNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `staffcomplaint`
--
ALTER TABLE `staffcomplaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `studentcomplaint`
--
ALTER TABLE `studentcomplaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
