-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 27 jan. 2023 à 23:03
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laravel_web_uni`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Reading', 'uploads/reading_4efd6e55.png', '2022-06-17 11:01:07', '2022-06-17 11:01:07'),
(4, 'grammar', 'uploads/test-english-Grammar-parent_a2_cd995616.jpg', '2022-06-14 18:09:05', '2022-06-14 18:09:05'),
(6, 'Listening', 'uploads/test-english-home-Listening_c2e4ca84.png', '2022-06-17 11:01:52', '2022-12-26 22:16:50');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idCours` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`),
  KEY `FK_COMMENTA_UTISATEUR_COURS` (`idCours`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `comment`, `created_at`, `updated_at`, `idCours`) VALUES
(2, 4, 'kqnk', '2022-06-21 01:44:43', '2022-06-21 01:44:43', NULL),
(5, 4, 'kNZk', '2022-06-21 02:40:00', '2022-06-21 02:40:00', 12),
(3, 4, 'guui', '2022-06-21 01:51:21', '2022-06-21 01:51:21', NULL),
(6, 4, 'bad lesson', '2022-06-21 12:14:37', '2022-06-21 12:14:37', 9),
(10, 6, 'mmm not bad', '2022-12-26 22:44:38', '2022-12-26 22:44:38', 9),
(9, 6, 'hahahahaha gooood', '2022-12-26 22:38:27', '2022-12-26 22:38:27', 12);

-- --------------------------------------------------------

--
-- Structure de la table `comment_replies`
--

DROP TABLE IF EXISTS `comment_replies`;
CREATE TABLE IF NOT EXISTS `comment_replies` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED NOT NULL,
  `reply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comment_replies_user_id_foreign` (`user_id`),
  KEY `comment_replies_comment_id_foreign` (`comment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `status`, `message`, `created_at`, `updated_at`) VALUES
(1, 'rajaa', 'rajaa@gmail.com', '098765432', 'seen', 'hi hi hi', '2022-06-16 23:16:33', '2022-06-17 12:22:32'),
(2, 'ASMA ASMA', 'elbalfyqyasma@gmail.com', '072345678', 'pending', 'hiiiii', '2022-12-26 22:45:36', '2022-12-26 22:45:36');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `idCours` int(11) NOT NULL AUTO_INCREMENT,
  `idNiveau` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  `titreCr` varchar(254) DEFAULT NULL,
  `dateCr` timestamp NULL DEFAULT NULL,
  `descriptionCr` text,
  `imageCr` varchar(254) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idCours`),
  KEY `FK_COURS_APPARTENI_NIVEAU` (`idNiveau`),
  KEY `FK_COURS_COMPORTER_CATEGORI` (`idCategorie`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`idCours`, `idNiveau`, `idCategorie`, `titreCr`, `dateCr`, `descriptionCr`, `imageCr`, `created_at`, `updated_at`) VALUES
(9, 25, 6, 'tobe', NULL, '<h6>To Use the Verb &ldquo;To Be&rdquo; in Present Simple Tense, Pair It with a Personal Pronoun</h6>', 'uploads/Image_78__37bec398.png', '2022-06-14 21:29:10', '2022-06-14 21:29:10'),
(10, 25, 6, 'conditional', NULL, '<p>Conditional sentences type 2 refers to an<strong>&nbsp;action in the present that could happen if the present situation were different</strong>. I don&#39;t really expect the situation to change because it is very unlikely. Example If I had a lot of money, I would travel around the world. (I can&rsquo;t do it because I don&rsquo;t have enough money.)</p>', 'uploads/Image_78__cd16d000.png', '2022-06-17 13:07:10', '2022-06-17 13:07:10'),
(11, 25, 6, 'story', NULL, '<p>Is there anyone who doesn&#39;t love listening to stories? Right from our toddler days, we humans have this insatiable craving for tales, of the known and the unknown, that is satisfied first by our parents and then a plethora of other sources. Go through a host of fascinating stories from KidsGen, including fables and fairytales, moral stories, short stories, mythological stories, classic stories and your favourite - animal stories. If you love reading these interesting stories,.</p>', 'uploads/reading_39b850c6.png', '2022-06-17 13:09:51', '2022-06-17 13:09:51'),
(12, 26, 6, 'interview', NULL, 'interview', 'uploads/test-english-home-Listening_c4f74876.png', '2022-06-17 13:12:45', '2022-06-19 12:56:58');

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(10) UNSIGNED NOT NULL,
  `instructor_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0',
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_category_id_foreign` (`category_id`),
  KEY `courses_instructor_id_foreign` (`instructor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `courses`
--

INSERT INTO `courses` (`id`, `category_id`, `instructor_id`, `title`, `description`, `image`, `view_count`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'adverbe', 'awertyuiop[', 'uploads/controller_d0cdf16c.png', 0, 1, '2022-05-28 20:57:09', '2022-05-28 20:57:09'),
(4, 1, 1, 'if conditional', '<p>if type</p>', 'uploads/form1_6d807896.png', 0, 1, '2022-05-29 12:09:12', '2022-05-29 12:09:12');

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `idRessourceC` int(11) NOT NULL AUTO_INCREMENT,
  `idSequence` int(11) DEFAULT NULL,
  `intituleRs` varchar(254) DEFAULT NULL,
  `descriptionRs` text,
  `lienRs` varchar(254) DEFAULT NULL,
  `idtype` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`idRessourceC`),
  KEY `fk` (`idtype`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `documents`
--

INSERT INTO `documents` (`idRessourceC`, `idSequence`, `intituleRs`, `descriptionRs`, `lienRs`, `idtype`, `created_at`, `updated_at`) VALUES
(1, 3, 'english conversation', '<p>&nbsp;conversation video</p>', 'https://www.youtube.com/embed/IoUQ3CvjtMU', 3, '2022-06-15', '2022-06-16'),
(2, 3, 'chickens story', '<p>chickens take a holiday</p>', '1655291493.mpga', 4, '2022-06-15', '2022-06-15'),
(3, 3, 'chickens story image', 'The sun was about to rise on Farmer Tim\'s farm. Chester Chicken woke up the cows with his important news.\r\n\r\n\"The chickens are taking a holiday today,\" Chester Chicken said.\r\n\r\n\"Is that so?\" said Daisy the cow. \"What is the special occasion?\"\r\n\r\nDaisy the Cow\r\n\r\n\"We worked too hard this week,\" Chester said.\r\n\r\n\"You did?\" asked Daisy.\r\n\r\n\"Yes! We laid ten eggs this week,\" Chester said, \"and there are only five of us.\"\r\n\r\nDaisy smiled and nodded her head. Ten was a lot of eggs for five chickens.\r\n\r\n\"Enjoy your day off,\" she said.\r\n\r\n\"But what about us?\" the other cows said to Daisy. \"We gave Farmer Tim 100 pails of milk this week. There are only ten of us!\"\r\n\r\nDaisy agreed with the cows too. 100 pails of milk would make a lot of cheese.\r\n\r\n\"But we can\'t take a holiday on the same day as the chickens,\" Daisy said. \"What would Farmer Tim say?\"\r\n\r\nDaisy and the cows moved over to a patch of grass to have their breakfast.', 'uploads/s_chickens_chickens_f2016163.jpg', 1, '2022-06-15', '2022-06-16'),
(5, 3, 'the childrens of chickens', '<p>downlod the story from hear!!</p>', '1655293241.pdf', 2, '2022-06-15', '2022-06-16'),
(15, NULL, 'english conversation', '<p>convesation</p>', '1672099882.pdf', 2, '2022-12-27', '2022-12-27'),
(10, NULL, 'listen the story', '<p>listen the story</p>', '1655728958.mpga', 4, '2022-06-20', '2022-06-20'),
(12, 4, 'the pdf story', '<p><strong>download the story from here!!</strong></p>', '1655729348.pdf', 2, '2022-06-20', '2022-06-20');

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lessons`
--

DROP TABLE IF EXISTS `lessons`;
CREATE TABLE IF NOT EXISTS `lessons` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` int(10) UNSIGNED NOT NULL,
  `instructor_id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` text COLLATE utf8mb4_unicode_ci,
  `source_code_url` text COLLATE utf8mb4_unicode_ci,
  `view_count` int(11) NOT NULL DEFAULT '0',
  `like_count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lessons_course_id_foreign` (`course_id`),
  KEY `lessons_instructor_id_foreign` (`instructor_id`),
  KEY `lessons_section_id_foreign` (`section_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lesson_views`
--

DROP TABLE IF EXISTS `lesson_views`;
CREATE TABLE IF NOT EXISTS `lesson_views` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `lesson_id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lesson_views_lesson_id_foreign` (`lesson_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `lesson_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `likes_lesson_id_foreign` (`lesson_id`),
  KEY `likes_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_163243_create_users_table', 1),
(2, '2014_10_12_170000_create_password_resets_table', 1),
(3, '2019_04_06_185350_create_categories_table', 1),
(4, '2019_04_06_190641_create_contacts_table', 1),
(5, '2019_04_06_204907_create_user_profiles_table', 1),
(6, '2019_04_06_295518_create_courses_table', 1),
(7, '2019_04_06_295922_create_sections_table', 1),
(8, '2019_04_06_300059_create_lessons_table', 1),
(9, '2019_04_06_300453_create_comments_table', 1),
(10, '2019_04_06_300823_create_ratings_table', 1),
(11, '2019_04_06_301016_create_likes_table', 1),
(12, '2019_04_11_070949_create_comment_replies_table', 1),
(13, '2019_04_16_050925_create_lesson_views_table', 1),
(14, '2019_04_17_184111_create_news_letters_table', 1),
(15, '2019_04_18_191636_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `news_letters`
--

DROP TABLE IF EXISTS `news_letters`;
CREATE TABLE IF NOT EXISTS `news_letters` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `niveaux`
--

DROP TABLE IF EXISTS `niveaux`;
CREATE TABLE IF NOT EXISTS `niveaux` (
  `idNiveau` int(11) NOT NULL AUTO_INCREMENT,
  `libelleNv` varchar(254) DEFAULT NULL,
  `image_nv` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idNiveau`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `niveaux`
--

INSERT INTO `niveaux` (`idNiveau`, `libelleNv`, `image_nv`, `created_at`, `updated_at`) VALUES
(24, 'rj', 'uploads/DEETEMODEL_b672d042.png', '2022-05-27 03:45:47', '2022-05-27 03:45:47'),
(25, 'A2', 'uploads/a1_7c89f0a0.jpg', '2022-06-17 13:02:34', '2022-06-17 13:02:34'),
(26, 'B1', 'uploads/test-english-Grammar-parent_a2_b398d976.jpg', '2022-06-17 13:03:08', '2022-06-17 13:03:08'),
(27, 'B2', 'uploads/test-english-Grammar-parent_b2_c1b96904.jpg', '2022-06-17 13:03:47', '2022-06-17 13:03:47');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rajaarabihh@gmail.com', '$2y$10$gBUWKtxuu7gtVaf8r3kbJeMR/SRkgV8M4uzFvK5vcmhL2xqqafZwC', '2022-06-20 12:18:44');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `idquestion` int(11) NOT NULL AUTO_INCREMENT,
  `question` text,
  `idCours` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`idquestion`),
  KEY `idc` (`idCours`),
  KEY `idt` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`idquestion`, `question`, `idCours`, `id`, `updated_at`, `created_at`) VALUES
(12, '3. Has your class finished?', 9, 1, '2022-06-20', '2022-06-20'),
(11, '2. Did he go to work or to school?', 9, 1, '2022-06-20', '2022-06-20'),
(10, '1. Can you swim?', 9, 1, '2022-06-20', '2022-06-20'),
(9, 'what\'s your name?', 9, 1, '2022-06-19', '2022-06-19'),
(13, 'what\'s your name?', 9, 2, '2022-06-20', '2022-06-20'),
(14, 'I\'m ................... years old', 9, 2, '2022-06-20', '2022-06-20'),
(15, 'heal the word make it a .............', 9, 2, '2022-06-20', '2022-06-20'),
(16, 'I\'m a big big ................. in a big world', 9, 2, '2022-06-20', '2022-06-20'),
(17, '......you a human?', 9, 2, '2022-12-26', '2022-12-26'),
(18, '......you a human?', 9, 1, '2022-12-26', '2022-12-26');

-- --------------------------------------------------------

--
-- Structure de la table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `rate` int(11) NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ratings_user_id_foreign` (`user_id`),
  KEY `ratings_course_id_foreign` (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

DROP TABLE IF EXISTS `reponses`;
CREATE TABLE IF NOT EXISTS `reponses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `option1` varchar(300) DEFAULT NULL,
  `option2` varchar(300) DEFAULT NULL,
  `option3` varchar(300) DEFAULT NULL,
  `option4` varchar(300) DEFAULT NULL,
  `reponse1` varchar(300) DEFAULT NULL,
  `reponse2` varchar(300) DEFAULT NULL,
  `reponse3` varchar(300) DEFAULT NULL,
  `idquestion` int(11) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idq` (`idquestion`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reponses`
--

INSERT INTO `reponses` (`id`, `option1`, `option2`, `option3`, `option4`, `reponse1`, `reponse2`, `reponse3`, `idquestion`, `updated_at`, `created_at`) VALUES
(7, 'In a pool', 'In a pool', 'Very good', NULL, 'In a pool', NULL, NULL, 10, '2022-06-20', '2022-06-20'),
(6, 'asma', 'rajaa', 'fadwa', 'omar', 'rajaa', NULL, NULL, 9, '2022-06-19', '2022-06-19'),
(8, 'At 3:00 PM', 'No, he doesn\'t', 'To work', NULL, 'To work', NULL, NULL, 11, '2022-06-20', '2022-06-20'),
(9, 'It\'s English', 'In five minutes', 'In five minutes', NULL, 'In five minutes', NULL, NULL, 12, '2022-06-20', '2022-06-20'),
(10, 'rajaa', 'asma', 'redwan', 'robert', 'rajaa', NULL, NULL, 13, '2022-06-20', '2022-06-20'),
(11, '19', '20', NULL, NULL, '19', NULL, NULL, 14, '2022-06-20', '2022-06-20'),
(12, 'bad place', 'better place', NULL, NULL, 'better place', NULL, NULL, 15, '2022-06-20', '2022-06-20'),
(13, 'girl', 'boy', NULL, NULL, 'girl', NULL, NULL, 16, '2022-06-20', '2022-06-20'),
(14, 'are', 'am', 'do', NULL, 'are', NULL, NULL, 17, '2022-12-26', '2022-12-26'),
(15, 'are', 'am', 'do', NULL, 'are', NULL, NULL, 18, '2022-12-26', '2022-12-26');

-- --------------------------------------------------------

--
-- Structure de la table `sections`
--

DROP TABLE IF EXISTS `sections`;
CREATE TABLE IF NOT EXISTS `sections` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sections_course_id_foreign` (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sequences`
--

DROP TABLE IF EXISTS `sequences`;
CREATE TABLE IF NOT EXISTS `sequences` (
  `idSequence` int(11) NOT NULL AUTO_INCREMENT,
  `intituleSq` varchar(254) DEFAULT NULL,
  `descriptionSq` text,
  `ordreSq` varchar(254) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `idCours` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSequence`),
  KEY `fkkk` (`idCours`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sequences`
--

INSERT INTO `sequences` (`idSequence`, `intituleSq`, `descriptionSq`, `ordreSq`, `created_at`, `updated_at`, `idCours`) VALUES
(3, 'Chicken 1', 'The Chickens Take a Holiday.', NULL, '2022-06-15 11:27:43', '2022-06-19 13:16:33', 9),
(4, 'checkon 2', '<p>Is there anyone who doesn&#39;t love listening to stories? Right from our toddler days, we humans have this insatiable craving for tales, of the known and the unknown, that is satisfied first by our parents and then a plethora of other sources. Go through a host of fascinating stories from KidsGen, including fables and fairytales, moral stories, short stories, mythological stories, classic stories and your favourite - animal stories. If you love reading these interesting stories for kids.</p>', NULL, '2022-06-17 14:18:57', '2022-06-19 12:20:01', 9),
(5, 'story 2', '<p>Is there anyone who doesn&#39;t love listening to stories? Right from our toddler days, we humans have this insatiable craving for tales, of the known and the unknown, that is satisfied first by our parents and then a plethora of other sources. Go through a host of fascinating stories from KidsGen, including fables and fairytales, moral stories, short stories, mythological stories, classic stories and your favourite - animal stories. If you love reading these interesting stories for kids.</p>', NULL, '2022-06-17 14:20:28', '2022-06-17 14:20:28', 9),
(6, 'checkon 3', 'jhcgb bcb hsbcxg', NULL, '2022-06-19 11:54:08', '2022-06-19 11:54:08', 9);

-- --------------------------------------------------------

--
-- Structure de la table `typeqs`
--

DROP TABLE IF EXISTS `typeqs`;
CREATE TABLE IF NOT EXISTS `typeqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libbelle` text,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `typeqs`
--

INSERT INTO `typeqs` (`id`, `libbelle`, `updated_at`, `created_at`) VALUES
(1, 'qcm', NULL, NULL),
(2, 'remplire', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `typeressources`
--

DROP TABLE IF EXISTS `typeressources`;
CREATE TABLE IF NOT EXISTS `typeressources` (
  `idtype` int(11) NOT NULL AUTO_INCREMENT,
  `libelletype` varchar(254) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idtype`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `typeressources`
--

INSERT INTO `typeressources` (`idtype`, `libelletype`, `created_at`, `updated_at`) VALUES
(1, 'image', '2022-06-15 10:35:20', '2022-06-15 10:35:20'),
(2, 'document', '2022-06-15 10:39:56', '2022-06-15 10:39:56'),
(3, 'video', '2022-06-15 10:40:10', '2022-06-15 10:40:10'),
(4, 'audio', '2022-06-15 10:40:51', '2022-06-15 10:40:51');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'student',
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `is_approved`, `is_verified`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'rajaa', 'rajaa@gmail.com', NULL, '$2y$10$bBQhYJiKuoDU2weGZ.yR4u1fadJkyINJDwZM6YgumoAn8Dbzz2to.', 'admin', 0, 0, NULL, '2022-02-28 23:00:00', '2022-03-02 23:00:00'),
(3, 'rajaa', 'raja@gmail.com', NULL, '$2y$10$bBQhYJiKuoDU2weGZ.yR4u1fadJkyINJDwZM6YgumoAn8Dbzz2to.\r\n', 'student', 0, 0, NULL, '2022-02-28 23:00:00', '2022-03-02 23:00:00'),
(5, 'asma', 'elbalfyqyasma@gmail.com', NULL, '$2y$10$M.SgXmrMkquI0QhAufdoBOY8GcXkfSELqUdzdf.OUCxMqK1iYEW7y', 'student', 0, 0, NULL, '2022-06-20 11:48:48', '2022-06-20 11:48:48'),
(6, 'asma', 'asma@gmail.com', NULL, '$2y$10$867PKMPs0xbWg1limeq7muZDi3A.f/BG/4vX0plVJPW2VkWO8qQfG', 'student', 0, 0, NULL, '2022-06-20 11:53:39', '2022-06-20 11:53:39'),
(7, 'rajaa', 'rajaarabihh@gmail.com', NULL, '$2y$10$sDmElREEFJqx01ItaxonY.lDny7Z0vrfpgX4BCNhd2qDbk/Er9Oju', 'student', 0, 0, NULL, '2022-06-20 12:14:22', '2022-06-20 12:14:22');

-- --------------------------------------------------------

--
-- Structure de la table `user_profiles`
--

DROP TABLE IF EXISTS `user_profiles`;
CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `dob` date DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_profiles_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `dob`, `photo`, `phone`, `address`, `institute`, `subject`, `created_at`, `updated_at`) VALUES
(1, 4, NULL, 'uploads/teacher_a7fce43d.jpg', NULL, NULL, NULL, NULL, '2022-06-16 22:02:20', '2022-06-16 22:15:25'),
(2, 6, NULL, 'uploads/ex4b_6e35107f.png', NULL, NULL, NULL, NULL, '2022-12-26 22:34:01', '2022-12-26 22:35:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
