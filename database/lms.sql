-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 10:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `catalog_number` varchar(10) DEFAULT NULL,
  `catalog_name` varchar(255) DEFAULT NULL,
  `catalog_category` varchar(255) DEFAULT NULL,
  `book_title` varchar(255) DEFAULT NULL,
  `authors` varchar(255) DEFAULT NULL,
  `isbn` varchar(20) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `publication_date` date DEFAULT NULL,
  `place_of_publication` varchar(255) DEFAULT NULL,
  `edition` varchar(50) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `number_of_pages` int(11) DEFAULT NULL,
  `shelving_location` varchar(255) DEFAULT NULL,
  `call_number_ddc` varchar(50) DEFAULT NULL,
  `accession_number` varchar(50) DEFAULT NULL,
  `copyright_year` int(11) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `image_cover` varchar(255) DEFAULT NULL,
  `times_borrowed` int(11) DEFAULT 0,
  `status` enum('Available','Borrowed','Unavailable') DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `catalog_number`, `catalog_name`, `catalog_category`, `book_title`, `authors`, `isbn`, `publisher`, `publication_date`, `place_of_publication`, `edition`, `language`, `number_of_pages`, `shelving_location`, `call_number_ddc`, `accession_number`, `copyright_year`, `subject`, `image_cover`, `times_borrowed`, `status`) VALUES
(3, NULL, 'Bibliographies', NULL, 'wow magic', 'waw', 'dawdwd', 'wdwd', '2024-03-20', 'adwd', 'awdd', 'wadd', 12122, 'Circulation', '3123123', '23123', 23322, 'awdwd', 'a1.png', 1, 'Borrowed'),
(4, NULL, 'Library & information sciences', NULL, 'qqqqqqq', 'qqqq', 'qqq', '2qqq', '2024-03-21', 'wdadwd', 'wdadd', 'aqqqq', 2, 'Non-Fiction Section', '131312', '1312321', 2321, 'adwadwd', '65fb5e81a183a_a3.png', 1, 'Available'),
(5, NULL, 'Bibliographies', NULL, 'aaa', 'aa', 'aadad', 'adda', '2024-03-22', 'adwdw', 'dwdwd', 'wdwd', 1212, 'New Arrivals Section', '123123', '23123', 12312, 'wdwd', '65fb77a8b288c_a1.png', 1, 'Available'),
(6, NULL, 'Computer science, knowledge & systems', NULL, 'adwdawd', 'wdwdwd', 'wdadad', 'wdwdwd', '2024-03-21', 'dad', 'dwdwd', 'dwdwd', 2313, 'Non-Fiction Section', '23123', '12323', 2323, 'ewdwd', '65fb83ee964e0_bigat2.png', 1, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `borrow_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_cover` varchar(255) NOT NULL,
  `accession_number` varchar(50) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `date_borrowed` timestamp NOT NULL DEFAULT current_timestamp(),
  `due_date` date NOT NULL,
  `status` enum('Pending','Approved','Check_out','Check_in','Done','Overdue') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrow_id`, `user_id`, `image_cover`, `accession_number`, `book_title`, `date_borrowed`, `due_date`, `status`) VALUES
(1, 0, 'a1.png', '23123', 'wow magic', '2024-03-21 08:48:55', '2024-03-24', 'Check_in'),
(2, 0, 'a1.png', '23123', 'wow magic', '2024-03-21 08:54:35', '2024-03-24', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `catalog_number` varchar(10) NOT NULL,
  `catalog_name` varchar(255) DEFAULT NULL,
  `catalog_category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`catalog_number`, `catalog_name`, `catalog_category`) VALUES
('000', 'Computer science, knowledge & systems', 'Computer Science, Information, and General Works'),
('010', 'Bibliographies', 'Computer Science, Information, and General Works'),
('020', 'Library & information sciences', 'Computer Science, Information, and General Works'),
('030', 'Encyclopedias & books of facts', 'Computer Science, Information, and General Works'),
('040', '[Unassigned]', 'Computer Science, Information, and General Works'),
('050', 'Magazines, journals & serials', 'Magazines, journals & serials'),
('060', 'Associations, organizations & museums', 'Associations, organizations & museums'),
('070', 'News media, journalism & publishing', 'News media, journalism & publishing'),
('080', 'Quotations', 'Quotations'),
('090', 'Manuscripts & rare books', 'Manuscripts & rare books'),
('100', 'Philosophy and Psychology', 'Philosophy'),
('110', 'Metaphysics', 'Metaphysics'),
('120', 'Epistemology', 'Epistemology'),
('130', 'Parapsychology & occultism', 'Parapsychology & occultism'),
('140', 'Philosophical schools of thought', 'Philosophical schools of thought'),
('150', 'Psychology', 'Psychology'),
('160', 'Logic', 'Logic'),
('170', 'Ethics', 'Ethics'),
('180', 'Ancient, medieval & eastern philosophy', 'Ancient, medieval & eastern philosophy'),
('190', 'Modern western philosophy', 'Modern western philosophy'),
('200', 'Religion', 'Religion'),
('210', 'Philosophy & theory of religion', 'Philosophy & theory of religion'),
('220', 'The Bible', 'The Bible'),
('230', 'Christianity & Christian theology', 'Christianity & Christian theology'),
('240', 'Christian practice & observance', 'Christian practice & observance'),
('250', 'Christian pastoral practice & religious orders', 'Christian pastoral practice & religious orders'),
('260', 'Christian organization, social work & worship', 'Christian organization, social work & worship'),
('270', 'History of Christianity', 'History of Christianity'),
('280', 'Christian denominations', 'Christian denominations'),
('290', 'Other religions', 'Other religions'),
('300', 'Social Sciences', 'Social sciences, sociology & anthropology'),
('310', 'Statistics', 'Statistics'),
('320', 'Political science', 'Political science'),
('330', 'Economics', 'Economics'),
('340', 'Law', 'Law'),
('350', 'Public administration & military science', 'Public administration & military science'),
('360', 'Social problems & social services', 'Social problems & social services'),
('370', 'Education', 'Education'),
('380', 'Commerce, communications & transportation', 'Commerce, communications & transportation'),
('390', 'Customs, etiquette & folklore', 'Customs, etiquette & folklore'),
('400', 'Language', 'Language'),
('410', 'Linguistics', 'Linguistics'),
('420', 'English & Old English languages', 'English & Old English languages'),
('430', 'German & related languages', 'German & related languages'),
('440', 'French & related languages', 'French & related languages'),
('450', 'Italian, Romanian & related languages', 'Italian, Romanian & related languages'),
('460', 'Spanish & Portuguese languages', 'Spanish & Portuguese languages'),
('470', 'Latin & Italic languages', 'Latin & Italic languages'),
('480', 'Classical & modern Greek languages', 'Classical & modern Greek languages'),
('490', 'Other languages', 'Other languages'),
('500', 'Science', 'Science'),
('510', 'Mathematics', 'Mathematics'),
('520', 'Astronomy', 'Astronomy'),
('530', 'Physics', 'Physics'),
('540', 'Chemistry', 'Chemistry'),
('550', 'Earth sciences & geology', 'Earth sciences & geology'),
('560', 'Fossils & prehistoric life', 'Fossils & prehistoric life'),
('570', 'Life sciences; biology', 'Life sciences; biology'),
('580', 'Plants (Botany)', 'Plants (Botany)'),
('590', 'Animals (Zoology)', 'Animals (Zoology)'),
('600', 'Technology', 'Technology'),
('610', 'Medicine & health', 'Medicine & health'),
('620', 'Engineering', 'Engineering'),
('630', 'Agriculture', 'Agriculture'),
('640', 'Home & family management', 'Home & family management'),
('650', 'Management & public relations', 'Management & public relations'),
('660', 'Chemical engineering', 'Chemical engineering'),
('670', 'Manufacturing', 'Manufacturing'),
('680', 'Manufacture for specific uses', 'Manufacture for specific uses'),
('690', 'Building & construction', 'Building & construction'),
('700', 'Arts and Recreation', 'Arts'),
('710', 'Landscaping & area planning', 'Landscaping & area planning'),
('720', 'Architecture', 'Architecture'),
('730', 'Sculpture, ceramics & metalwork', 'Sculpture, ceramics & metalwork'),
('740', 'Drawing & decorative arts', 'Drawing & decorative arts'),
('750', 'Painting', 'Painting'),
('760', 'Graphic arts', 'Graphic arts'),
('770', 'Photography & computer art', 'Photography & computer art'),
('780', 'Music', 'Music'),
('790', 'Sports, games & entertainment', 'Sports, games & entertainment'),
('800', 'Literature', 'Literature, rhetoric & criticism'),
('810', 'American literature in English', 'American literature in English'),
('820', 'English & Old English literatures', 'English & Old English literatures'),
('830', 'German & related literatures', 'German & related literatures'),
('840', 'French & related literatures', 'French & related literatures'),
('850', 'Italian, Romanian & related literatures', 'Italian, Romanian & related literatures'),
('860', 'Spanish & Portuguese literatures', 'Spanish & Portuguese literatures'),
('870', 'Latin & Italic literatures', 'Latin & Italic literatures'),
('880', 'Classical & modern Greek literatures', 'Classical & modern Greek literatures'),
('890', 'Other literatures', 'Other literatures'),
('900', 'History and Geography', 'History'),
('910', 'Geography & travel', 'Geography & travel'),
('920', 'Biography & genealogy', 'Biography & genealogy'),
('930', 'History of ancient world (to ca. 499)', 'History of ancient world (to ca. 499)'),
('940', 'History of Europe', 'History of Europe'),
('950', 'History of Asia', 'History of Asia'),
('960', 'History of Africa', 'History of Africa'),
('970', 'History of North America', 'History of North America'),
('980', 'History of South America', 'History of South America'),
('990', 'History of other areas', 'History of other areas');

-- --------------------------------------------------------

--
-- Table structure for table `ebooks`
--

CREATE TABLE `ebooks` (
  `ebook_id` int(11) NOT NULL,
  `ebook_title` varchar(255) NOT NULL,
  `authors` varchar(255) NOT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `publication_date` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `format` varchar(100) DEFAULT NULL,
  `access_url` varchar(255) DEFAULT NULL,
  `image_cover` varchar(255) DEFAULT NULL,
  `status` enum('Available','Borrowed','Unavailable') DEFAULT 'Available',
  `times_borrowed` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ebooks`
--

INSERT INTO `ebooks` (`ebook_id`, `ebook_title`, `authors`, `publisher`, `publication_date`, `description`, `language`, `subject`, `format`, `access_url`, `image_cover`, `status`, `times_borrowed`, `created_at`, `updated_at`) VALUES
(6, 'THE DREAM CHAPTER: STAR', 'TxT', 'Bang PD', '2024-03-18', 'TOMORROW X TOGETHER delivers their story through ‘The Dream Chapter’. \r\nAs they transition from childhood to adolescence, the boys have gathered together under ONE DREAM. For TOMORROW X TOGETHER, star is another name for dream: the emotions swelling up inside as you look up at the starry night sky, the growing excitement about tomorrow – chasing the stars mean you are remembering your childhood dreams. ‘The Dream Chapter’ will unfold the stories of what they encountered as they grew. ', 'English', 'Korean', 'APA', 'https://ibighit.com/txt/eng/discography/detail/the_dream_chapter-star.html', '65fbd4b79da5d_txt1.jpg', 'Available', 0, '2024-03-21 06:33:27', '2024-03-21 06:33:27'),
(7, 'THE DREAM CHAPTER: MAGIC', 'TXT', 'Bang PD', '2024-03-18', 'TOMORROW X TOGETHER unfolds their story of growth and encounters in this new journey through the album concept The Dream Chapter. While The Dream Chapter: STAR expressed the “happiness and excitement of meeting that special someone”, The Dream Chapter: MAGIC tells the story of “magical adventures” that boys encounter together with their friends who are different, yet alike. Through this adventure, the boys share their transformation, confusion and exploding emotions that arise during their transition to adolescence.', 'Korean', 'Kpop', 'APA', 'https://ibighit.com/txt/eng/discography/detail/the_dream_chapter-magic.html', '65fbd51d91ccb_txt2.jpg', 'Available', 0, '2024-03-21 06:35:09', '2024-03-21 06:35:09'),
(8, 'THE DREAM CHAPTER: ETERNITY', 'TXT', 'Bang PD', '2024-03-18', 'With ten “New Artist” awards already under its belt, TOMORROW X TOGETHER will release its second EP album on May 18.\r\n\r\n“Dream Chapter: ETERNITY”, following their debut album “Dream Chapter: STAR” and their first full-length album “Dream Chapter: MAGIC” tells the story of young boys’ experiences meeting friends who are different yet alike. While they struggle with reality and rifts sometimes appear among them, the narrative encapsulates their hope that their time together will last eternally.', 'Korean', 'Kpop', 'APA', 'https://ibighit.com/txt/eng/discography/detail/the_dream_chapter-eternity.html', '65fbd55e0411f_txt3.jpg', 'Available', 0, '2024-03-21 06:36:14', '2024-03-21 06:36:14'),
(9, 'MINISODE1 : BLUE HOUR', 'TXT', 'Bang PD', '2024-03-18', 'TOMORROW X TOGETHER (SOOBIN, YEONJUN, BEOMGYU, TAEHYUN, HUENINGKAI) are releasing their third mini-album, “minisode1 : Blue Hour” on October 26.\r\n\r\nTOMORROW X TOGETHER not only reaffirmed their skills and stunning visuals with their second mini album, “The Dream Chapter: ETERNITY”, but also cemented themselves as the new icon of growth by continuously breaking their own records in both album and song sales.\r\n', 'Korean', 'Kpop', 'APA', 'https://ibighit.com/txt/eng/discography/detail/blue_hour.html', '65fbd58c845f1_txt4.jpg', 'Available', 0, '2024-03-21 06:37:00', '2024-03-21 06:37:00'),
(10, 'THE CHAOS CHAPTER: FREEZE', 'TXT', 'Bang PD', '2024-03-18', 'Following the gradual and progressive successes of their \'Dream Chapter\' album series, TOMORROW X TOGETHER reached a new global high with their third EP, minisode1 : Blue Hour, which was released in October last year.\r\n\r\nHaving further cemented their position as ‘Leaders of K-pop’s 4th Generation’ and voices of the global teen experience, TOMORROW X TOGETHER make their return with their second studio album The Chaos Chapter: FREEZE, armed with great charm, musicality, and color.', 'Korean', 'Kpop', 'APA', 'https://ibighit.com/txt/eng/discography/detail/the_chaos_chapter_freeze.html', '65fbd5c1f3a7e_txt5.jpg', 'Available', 0, '2024-03-21 06:37:53', '2024-03-21 06:37:53'),
(11, 'THE CHAOS CHAPTER: FIGHT OR ESCAPE', 'TXT', 'Bang PD', '2024-03-18', 'K-pop’s ‘It’ Band of 2021 TOMORROW X TOGETHER continue their reign with The Chaos Chapter: FIGHT OR ESCAPE, their repackaged second studio album.\r\n\r\nThe ‘Chaos Chapter’ depicts a world in which dreams have been swept away to be replaced by the towering presence of reality. As the world he once knew crumbles away, the boy feels small, insignificant, empty, and frozen. But ‘you’ awaken the emotion of ‘love’ inside of him, and the boy now seeks to step out beyond the freeze. For ‘you,’ he wants to make a choice: to FIGHT against the world or to ESCAPE together with you.\r\n', 'Korean', 'Kpop', 'APA', 'https://ibighit.com/txt/eng/discography/detail/the_chaos_chapter-fight_escape.html', '65fbd5f1e09e4_txt6.jpg', 'Available', 0, '2024-03-21 06:38:41', '2024-03-21 06:38:41'),
(12, 'MINISODE2:\nTHURSDAY\'S CHILD', 'TXT', 'Bang PD', '2024-03-18', 'Gen Z’s ‘it’ boys TOMORROW X TOGETHER continue their journey through the newest EP, minisode 2: Thursday’s Child.\r\n\r\nIn minisode 2: Thursday’s Child, the experience of a first breakup strikes as a powerful storm mixed with denial, dejection, anger, and loss. Our protagonist fully indulges in and expresses each of these emotions as they come, until he is finally able to accept that his once treasured relationship has come to an end. Moving from adolescence to adulthood, the boy comes to better understand both himself and the world around him. Then, a question arises: on what path of growth will his feet lead him next?', 'Korean', 'Kpop', 'APA', 'https://ibighit.com/txt/eng/discography/detail/minisode-2/', '65fbd61c9930a_txt7.png', 'Available', 0, '2024-03-21 06:39:24', '2024-03-21 06:39:57'),
(13, 'THE NAME CHAPTER: TEMPTATION', 'TXT', 'Bang PD', '2024-03-18', 'Gen Z ‘it band’ TOMORROW X TOGETHER (SOOBIN, YEONJUN, BEOMGYU, TAEHYUN, and HUENINGKAI) return with their fifth EP, The Name Chapter: TEMPTATION.\r\n\r\nThe Name Chapter: TEMPTATION depicts youth on the brink of adulthood. After experiencing conflict and chaos, the boys feel a desire to postpone their growth and linger in the freedom of Neverland. Their journey forward despite this desire is a representation of today’s generation as they continue to grow through the challenges of the world.', 'Korean', 'Kpop', 'APA', 'https://ibighit.com/txt/eng/discography/detail/temptation/', '65fbd70216da9_txt8.jpg', 'Available', 0, '2024-03-21 06:43:14', '2024-03-21 06:43:14'),
(14, 'THE NAME CHAPTER: FREEFALL', 'TXT', 'Bang PD', '2024-03-18', '“Global K-Pop leader” TOMORROW X TOGETHER (SOOBIN, YEONJUN, BEOMGYU, TAEHYUN, HUENINGKAI) is releasing the third studio album The Name Chapter: FREEFALL on October 13.\r\n\r\nThe Name Chapter: FREEFALL is a story of the youth who had been delaying their adulthood and escaping from the world but finally decided to face reality. The process of freefalling into reality is tormenting, and reality bites, but they make a firm determination to go on, facing up to everything around them.', 'Korean', 'Kpop', 'APA', 'https://ibighit.com/txt/eng/discography/detail/freefall/', '65fbd72f71ead_txt9.png', 'Available', 0, '2024-03-21 06:43:59', '2024-03-21 06:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `magazines_journals`
--

CREATE TABLE `magazines_journals` (
  `magazine_journal_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `issn` varchar(20) NOT NULL,
  `frequency` varchar(50) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `publication_date` date DEFAULT NULL,
  `volume_issue` varchar(100) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `school_affiliation` varchar(255) DEFAULT NULL,
  `access_url` varchar(255) DEFAULT NULL,
  `shelving_location` varchar(255) DEFAULT NULL,
  `image_cover` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('Available','Borrowed','Unavailable') DEFAULT 'Available',
  `times_borrowed` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `magazines_journals`
--

INSERT INTO `magazines_journals` (`magazine_journal_id`, `title`, `issn`, `frequency`, `subject`, `description`, `publisher`, `publication_date`, `volume_issue`, `language`, `school_affiliation`, `access_url`, `shelving_location`, `image_cover`, `created_at`, `status`, `times_borrowed`) VALUES
(1, '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '../../../../uploads/', '2024-03-21 05:13:58', 'Available', 0),
(2, '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '65fbc3738b273_', '2024-03-21 05:19:47', 'Available', 0),
(3, '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '65fbc4a6cad43_', '2024-03-21 05:24:54', 'Available', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shelving`
--

CREATE TABLE `shelving` (
  `shelving_id` int(11) NOT NULL,
  `shelving_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shelving`
--

INSERT INTO `shelving` (`shelving_id`, `shelving_name`) VALUES
(1, 'Circulation'),
(2, 'Filipiniana'),
(3, 'History'),
(4, 'Fiction Section'),
(5, 'Non-Fiction Section'),
(6, 'Reference Section'),
(7, 'Research Section'),
(8, 'Periodicals Section'),
(9, 'Special Collections'),
(10, 'New Arrivals Section'),
(11, 'Sample');

-- --------------------------------------------------------

--
-- Table structure for table `student_logs`
--

CREATE TABLE `student_logs` (
  `logs_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `student_number` varchar(50) DEFAULT NULL,
  `strand_track` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `userType` enum('Student','Faculty','Staff') DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `log_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_logs`
--

INSERT INTO `student_logs` (`logs_id`, `first_name`, `middle_name`, `last_name`, `student_number`, `strand_track`, `email`, `username`, `password`, `userType`, `status`, `log_date`) VALUES
(1, 'bambooooo', 'bawdawd', 'awdnwadn', '29013', 'HE', NULL, NULL, NULL, NULL, NULL, '2024-03-20 05:01:24'),
(2, 'bambooooo', 'bawdawd', 'awdnwadn', '29013', 'HE', NULL, NULL, NULL, NULL, NULL, '2024-03-20 05:06:24'),
(3, 'Test', 'test', 'test', '201911133', 'HUMSS', NULL, NULL, NULL, NULL, NULL, '2024-03-20 05:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `student_number` varchar(50) NOT NULL,
  `strand_track` varchar(50) NOT NULL,
  `status` enum('Pending','Approved') NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `userType` enum('Student','Faculty','Staff') DEFAULT NULL,
  `times_borrowed` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `middle_name`, `last_name`, `student_number`, `strand_track`, `status`, `email`, `username`, `password`, `userType`, `times_borrowed`) VALUES
(1, 'Test', 'test', 'test', '201911133', 'HUMSS', 'Approved', NULL, NULL, NULL, 'Student', 0),
(5, 'last', 'last', 'last', '201821231', 'GAS', 'Approved', '', '', NULL, 'Faculty', 0),
(6, 'bambooooo', 'bawdawd', 'awdnwadn', '29013', 'HE', 'Approved', 'bamboo@gmail.com', 'bamboo', NULL, 'Student', 0),
(7, 'Yeonjun', ' ', 'Choi', '201811237', '', 'Pending', 'yeonjun@gmail.com', 'yeonjun', '1234', 'Student', 0),
(8, 'Soobin', '', 'Choi', '201811122', '', 'Pending', 'soobin@gmail.com', 'soobin', '1234', 'Student', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrow_id`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`catalog_number`);

--
-- Indexes for table `ebooks`
--
ALTER TABLE `ebooks`
  ADD PRIMARY KEY (`ebook_id`);

--
-- Indexes for table `magazines_journals`
--
ALTER TABLE `magazines_journals`
  ADD PRIMARY KEY (`magazine_journal_id`);

--
-- Indexes for table `shelving`
--
ALTER TABLE `shelving`
  ADD PRIMARY KEY (`shelving_id`);

--
-- Indexes for table `student_logs`
--
ALTER TABLE `student_logs`
  ADD PRIMARY KEY (`logs_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ebooks`
--
ALTER TABLE `ebooks`
  MODIFY `ebook_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `magazines_journals`
--
ALTER TABLE `magazines_journals`
  MODIFY `magazine_journal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shelving`
--
ALTER TABLE `shelving`
  MODIFY `shelving_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student_logs`
--
ALTER TABLE `student_logs`
  MODIFY `logs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
