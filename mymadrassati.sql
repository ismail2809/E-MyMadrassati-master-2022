-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 13 juil. 2022 à 15:07
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mymadrassati`
--

-- --------------------------------------------------------

--
-- Structure de la table `absences`
--

CREATE TABLE `absences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `professeur_id` bigint(20) UNSIGNED NOT NULL,
  `etudiant_id` bigint(20) UNSIGNED NOT NULL,
  `classe_id` bigint(20) UNSIGNED NOT NULL,
  `annee_id` bigint(20) UNSIGNED NOT NULL,
  `matiere_id` bigint(20) UNSIGNED NOT NULL,
  `debutseance` time NOT NULL,
  `finseance` time NOT NULL,
  `absence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-07-04 17:46:29', '2022-07-04 17:46:29'),
(3, 8, '2022-07-04 17:46:59', '2022-07-04 17:46:59');

-- --------------------------------------------------------

--
-- Structure de la table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `agents`
--

INSERT INTO `agents` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 17, '2022-07-04 18:30:49', '2022-07-04 18:30:49'),
(5, 19, '2022-07-04 18:38:56', '2022-07-04 18:38:56');

-- --------------------------------------------------------

--
-- Structure de la table `années`
--

CREATE TABLE `années` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `années`
--

INSERT INTO `années` (`id`, `titre`, `created_at`, `updated_at`) VALUES
(2, '2021/2022', NULL, NULL),
(3, '2022/2023', NULL, NULL),
(4, '2023/2024', '2022-07-10 09:14:28', '2022-07-10 09:14:28');

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `titre`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Crèche', NULL, NULL, '2022-07-04 17:08:19'),
(2, 'Maternelle ', '', NULL, NULL),
(3, 'Primaire', '', NULL, NULL),
(4, 'Collège', NULL, NULL, '2022-07-10 09:21:19'),
(5, 'Lycée', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `niveau_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`id`, `titre`, `description`, `categorie_id`, `niveau_id`, `created_at`, `updated_at`) VALUES
(1, 'classe1', NULL, 1, 1, '2022-07-03 15:14:32', '2022-07-03 15:14:32'),
(2, 'classe 2', NULL, 2, 3, '2022-07-04 17:13:17', '2022-07-04 17:13:17'),
(3, 'classe a', NULL, 1, 1, '2022-07-09 12:38:57', '2022-07-09 12:38:57'),
(4, 'classe B', 'SASAN', 5, 5, '2022-07-09 12:39:57', '2022-07-10 12:42:17');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `objet`, `email`, `telephone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ismael abounasr', 'demande informations', 'ismaelbounasr@yomp.com', '0649074204', 'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.', '2022-07-10 13:21:44', '2022-07-10 18:23:42');

-- --------------------------------------------------------

--
-- Structure de la table `demandedocuments`
--

CREATE TABLE `demandedocuments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `annee_id` bigint(20) UNSIGNED NOT NULL,
  `sujet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `prenom_tuteur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_tuteur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_tuteur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_tuteur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexe_tuteur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession_tuteur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `user_id`, `prenom_tuteur`, `nom_tuteur`, `tel_tuteur`, `email_tuteur`, `sexe_tuteur`, `profession_tuteur`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-04 17:45:32', '2022-07-04 17:45:32'),
(3, 22, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-08 23:18:44', '2022-07-08 23:18:44'),
(4, 2, 'aaa', 'vvv', '0645321789', 'sana@yippmail.com', 'Femme', 'ingénieur it', '2022-07-09 22:24:12', '2022-07-10 03:26:23'),
(5, 24, 'nadia', 'saghir', '0522259534', 'nadia@gmail.com', 'Femme', 'femme au foyer', '2022-07-10 01:51:41', '2022-07-10 01:51:41'),
(6, 25, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-11 17:16:22', '2022-07-11 17:16:22'),
(7, 26, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-11 17:17:10', '2022-07-11 17:17:10'),
(8, 27, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-11 17:18:16', '2022-07-11 17:18:16');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions`
--

CREATE TABLE `inscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `num_inscription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etudiant_id` bigint(20) UNSIGNED NOT NULL,
  `classe_id` bigint(20) UNSIGNED NOT NULL,
  `annee_id` bigint(20) UNSIGNED NOT NULL,
  `tarif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modalité` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cantine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `inscriptions`
--

INSERT INTO `inscriptions` (`id`, `num_inscription`, `etudiant_id`, `classe_id`, `annee_id`, `tarif`, `modalité`, `description`, `transport`, `cantine`, `created_at`, `updated_at`) VALUES
(1, 'num88', 4, 4, 4, '32000', 'Annuel', NULL, 'Non', 'Oui', '2022-07-09 22:24:12', '2022-07-10 03:26:23'),
(2, 'num31', 5, 3, 4, '31000', 'Mensuel', NULL, 'Non', 'Oui', '2022-07-10 01:51:41', '2022-07-10 01:51:41'),
(3, 'num1', 6, 3, 4, '50000', 'Trimestriel', NULL, 'Oui', 'Non', '2022-07-11 17:16:22', '2022-07-11 17:16:22'),
(4, 'num2', 7, 3, 4, '15000', 'Annuel', NULL, 'Non', 'Non', '2022-07-11 17:17:10', '2022-07-11 17:17:10'),
(5, 'Numéro3', 8, 4, 4, '60000', 'Mensuel', NULL, 'Non', 'Oui', '2022-07-11 17:18:16', '2022-07-11 17:18:16');

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `matieres`
--

INSERT INTO `matieres` (`id`, `titre`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Math', 'Mathématique', NULL, NULL),
(2, 'Arabe', 'Langue Arabe', NULL, NULL),
(3, 'Français', 'Langue Français', NULL, NULL),
(4, 'Anglais', 'Langue Anglais', NULL, NULL),
(5, 'Sport', 'Sport', NULL, NULL),
(6, 'Education islamique', 'Education islamique', NULL, NULL),
(7, 'Physiue', 'Physiue', NULL, NULL),
(8, 'SVT', 'Science de vie et de terre', '2022-07-04 17:09:27', '2022-07-04 17:09:27');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_01_03_144514_create_etudiants_table', 1),
(4, '2020_01_03_144528_create_professeurs_table', 1),
(5, '2020_01_05_124355_create_années_table', 1),
(6, '2020_01_05_124513_create_matieres_table', 1),
(7, '2020_01_05_124606_create_categories_table', 1),
(8, '2020_01_05_124649_create_niveaus_table', 1),
(9, '2020_01_05_124709_create_classes_table', 1),
(10, '2020_01_05_124723_create_notes_table', 1),
(11, '2020_01_05_124744_create_inscriptions_table', 1),
(12, '2020_01_05_124821_create_absences_table', 1),
(13, '2020_01_05_124851_create_payments_table', 1),
(14, '2020_01_28_090445_create_blogs_table', 1),
(15, '2020_04_21_152729_create_sessions_table', 1),
(16, '2020_04_27_134122_create_demandedocuments_table', 1),
(17, '2020_08_07_084208_create_events_table', 1),
(18, '2021_07_08_152231_create_contacts_table', 1),
(19, '2021_08_01_160422_create_admins_table', 1),
(20, '2022_07_02_135438_create_renouvelements_table', 1),
(21, '2022_07_02_204018_create_products_table', 1),
(22, '2022_07_02_204154_create_agents_table', 1),
(23, '2022_07_02_204701_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Structure de la table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(1, 'App\\User', 2),
(1, 'App\\User', 8),
(2, 'App\\User', 4),
(2, 'App\\User', 17),
(2, 'App\\User', 19),
(3, 'App\\User', 5),
(3, 'App\\User', 17),
(3, 'App\\User', 19),
(4, 'App\\User', 3);

-- --------------------------------------------------------

--
-- Structure de la table `niveaus`
--

CREATE TABLE `niveaus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `niveaus`
--

INSERT INTO `niveaus` (`id`, `titre`, `description`, `created_at`, `updated_at`) VALUES
(1, 'niveau 1', 'Crèche', NULL, NULL),
(2, 'niveau 2 ', 'Crèche', NULL, NULL),
(3, 'Petite section', 'Maternelle', NULL, NULL),
(4, 'Moyenne section', 'Maternelle', NULL, NULL),
(5, 'Grande section', 'Maternelle', NULL, NULL),
(6, '1ère année (CP)', 'Primaire', NULL, NULL),
(7, '2ème année (CE1)', 'Primaire', NULL, NULL),
(8, '3ème année (CE2)', 'Primaire', NULL, NULL),
(9, '4ème année (CM1)', 'Primaire', NULL, NULL),
(10, '5ème année (CM2)', 'Primaire', NULL, NULL),
(11, '6ème année (6ème)', 'Primaire', NULL, NULL),
(12, '1ère année', 'Collège', NULL, NULL),
(13, '2ème année', 'Collège', NULL, NULL),
(14, '3ème année', 'Collège', NULL, NULL),
(15, '1ère année', 'Lycée', NULL, NULL),
(16, '2ème année', 'Lycée', NULL, NULL),
(17, '3ème année', 'Lycée', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `professeur_id` bigint(20) UNSIGNED NOT NULL,
  `etudiant_id` bigint(20) UNSIGNED NOT NULL,
  `classe_id` bigint(20) UNSIGNED NOT NULL,
  `annee_id` bigint(20) UNSIGNED NOT NULL,
  `matiere_id` bigint(20) UNSIGNED NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `etudiant_id` bigint(20) UNSIGNED NOT NULL,
  `annee_id` bigint(20) UNSIGNED NOT NULL,
  `inscription_id` bigint(20) UNSIGNED NOT NULL,
  `versement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mois` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2022-07-03 14:53:02', '2022-07-03 14:53:02'),
(2, 'role-create', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(3, 'role-edit', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(4, 'role-delete', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(5, 'product-list', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(6, 'product-create', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(7, 'product-edit', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(8, 'product-delete', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(9, 'année-list', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(10, 'année-create', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(11, 'année-edit', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(12, 'année-delete', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(13, 'absence-list', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(14, 'absence-create', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(15, 'absence-edit', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(16, 'absence-delete', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(17, 'blog-list', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(18, 'blog-create', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(19, 'blog-edit', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(20, 'blog-delete', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(21, 'categorie-list', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(22, 'categorie-create', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(23, 'categorie-edit', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(24, 'categorie-delete', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(25, 'classe-list', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(26, 'classe-create', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(27, 'classe-edit', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(28, 'classe-delete', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(29, 'demandedocument-list', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(30, 'demandedocument-create', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(31, 'demandedocument-edit', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(32, 'demandedocument-delete', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(33, 'inscription-list', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(34, 'inscription-create', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(35, 'inscription-edit', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(36, 'inscription-delete', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(37, 'renouvelment-list', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(38, 'renouvelment-create', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(39, 'renouvelment-edit', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(40, 'renouvelment-delete', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(41, 'matiere-list', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(42, 'matiere-create', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(43, 'matiere-edit', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(44, 'matiere-delete', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(45, 'niveau-list', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(46, 'niveau-create', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(47, 'niveau-edit', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(48, 'niveau-delete', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(49, 'note-list', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(50, 'note-create', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(51, 'note-edit', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(52, 'note-delete', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(53, 'payment-list', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(54, 'payment-create', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(55, 'payment-edit', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03'),
(56, 'payment-delete', 'web', '2022-07-03 14:53:03', '2022-07-03 14:53:03');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `professeurs`
--

CREATE TABLE `professeurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diplome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `professeurs`
--

INSERT INTO `professeurs` (`id`, `user_id`, `cin`, `diplome`, `promo`, `created_at`, `updated_at`) VALUES
(1, 5, 'be123456', 'master génie logiciel', '2018', '2022-07-04 17:44:37', '2022-07-04 17:44:37');

-- --------------------------------------------------------

--
-- Structure de la table `renouvelements`
--

CREATE TABLE `renouvelements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `num_inscription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etudiant_id` bigint(20) UNSIGNED NOT NULL,
  `classe_id` bigint(20) UNSIGNED NOT NULL,
  `annee_id` bigint(20) UNSIGNED NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `tarif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modalité` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cantine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super admin', 'web', '2022-07-03 14:54:06', '2022-07-03 14:54:06'),
(2, 'Agent', 'web', '2022-07-03 19:44:28', '2022-07-03 19:44:28'),
(3, 'Professeur', 'web', '2022-07-03 19:45:22', '2022-07-03 19:45:22'),
(4, 'Etudiant', 'web', '2022-07-03 19:45:56', '2022-07-03 19:45:56');

-- --------------------------------------------------------

--
-- Structure de la table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(13, 3),
(13, 4),
(14, 1),
(14, 2),
(14, 3),
(15, 1),
(15, 2),
(15, 3),
(16, 1),
(17, 1),
(17, 2),
(17, 3),
(17, 4),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(21, 1),
(21, 2),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(25, 2),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(29, 2),
(29, 4),
(30, 1),
(30, 2),
(30, 4),
(31, 1),
(31, 2),
(32, 1),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(41, 1),
(41, 2),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(45, 2),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(49, 2),
(49, 3),
(49, 4),
(50, 1),
(50, 2),
(50, 3),
(51, 1),
(51, 2),
(51, 3),
(52, 1),
(53, 1),
(53, 2),
(54, 1),
(54, 2),
(55, 1),
(55, 2),
(56, 1);

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ddn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu_naissance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `ddn`, `lieu_naissance`, `sexe`, `tel`, `adresse`, `avatar`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Prénom -Admin', 'Nom -Administrateur', '1995-09-28', 'Casablanca', 'Homme', '0649074204', 'Ain diab anfa', 'avatar/PEHhs5YFfj4MaFmh9kG2UPyCxobD5mJRbCTOsZPT.jpg', 'admin', 'admin@gmail.com', NULL, '$2y$10$9sHtSFu4V5hQkuzJTfr2Ruc.20/x2I12AXSdjrFf.p/xyxtWYG6R2', NULL, NULL, '2022-07-11 17:58:22'),
(2, 'Super', 'Admin ', '28-09-1995', 'Casablanca', 'Homme', '0649074204', 'Ain diab', 'avatar/default-avatar.png', 'etudiant', 'super-admin@gmail.com', NULL, '$2y$10$sLKFxeK2UZ5.8aJK2Ez73OPCuAAeeL/QvTzudJa1nuxMi3f4DBUhC', 'asnzUSGiJLeilK5Izr22r9bJH1JImtfPJsUyWSmxA3rnh1Ep2idOzQXD2ewn', NULL, NULL),
(3, 'lYUu3p5zrI', 'Etudiant', NULL, NULL, NULL, NULL, NULL, 'avatar/default-avatar.png', 'etudiant', 'etudiant@gmail.com', NULL, '$2y$10$khKn7YOWqzcuDRaTLg582.m./tJX/tF2mbajuOOOD8fuN6zU7hekO', NULL, NULL, NULL),
(4, 'abdel', 'ben', '1995-08-28', 'casa', 'Homme', '0612354789', 'ain diab', 'avatar/default-avatar.png', 'etudiant', 'agent@gmail.com', NULL, '$2y$10$ZaBZ6ZIQJGJGE38hYdzM2.3XBQLReV0CTZFdfDYvjRoLJ076vVLTa', NULL, '2022-07-10 04:26:59', '2022-07-10 03:26:23'),
(5, 'w0RsDpIUgA', 'Professeur', NULL, NULL, NULL, NULL, NULL, 'avatar/default-avatar.png', 'professeur', 'professeur@gmail.com', NULL, '$2y$10$8hW7TKEZnjtklVj5iWeKn.m7PJMIsR/c9xlFzzEeLrV/YxBEm3uje', NULL, NULL, NULL),
(8, 'Ismael', 'Alaoui', NULL, NULL, NULL, NULL, NULL, 'avatar/default-avatar.png', 'super-admin', 'super-admin1@gmail.com', NULL, '$2y$10$/EcP/CPjd5nLz7XSNx9EzuMZREb5B4u/BnNfONom7.S6olOrhqMJi', NULL, '2022-07-03 14:54:06', '2022-07-03 14:54:06'),
(17, 'agent', '2', '1995-08-28', 'casa', 'Homme', '0612354789', 'bourgogne', 'avatar/default-avatar.png', 'agent', 'agent2@gmail.com', NULL, '$2y$10$e5ukjwQmphVVDqjxbRPRV.g38KlhtE7N6/1kLUpzHIUzHu.TXqEty', NULL, '2022-07-04 18:30:48', '2022-07-04 18:30:48'),
(19, 'aaa', 'deee', '1996-01-28', 'casa', 'Femme', '0632145879', 'azerty', 'avatar/default-avatar.png', 'agent', 'agent4@gmail.com', NULL, '$2y$10$5W9JL8k2WnZUdsnI5dh5cuZiDjCifgzFdTjA7JVg/0an0KxNaqFYy', NULL, '2022-07-04 18:38:56', '2022-07-04 18:38:56'),
(22, 'test', 'etudian', NULL, NULL, NULL, NULL, NULL, 'default-avatar.png', 'etudiant', 'etudianttest@yopmail.com', NULL, '$2y$10$T3qs2.C7ZntbzB515UcMNeq.5qoaSDhQPn/SoSEfnXpz93xdFH9my', NULL, '2022-07-08 23:18:44', '2022-07-08 23:18:44'),
(23, 'etudiant', '88', NULL, NULL, 'Homme', NULL, NULL, 'default-avatar.png', 'etudiant', 'etudiant88@gmail.Com', NULL, '$2y$10$/4AtWS8u9KjZ2T2fC18gyuvqAgDkZfw1pGz4xcfH2.3ki2dG1WJRi', NULL, '2022-07-09 22:24:12', '2022-07-09 22:24:12'),
(24, 'youssef', 'abounasr', '1999-09-28', 'casa', 'Homme', '0649074204', 'ain diab', 'default-avatar.png', 'etudiant', 'youssefabounasr@gmail.com', NULL, '$2y$10$oVhSDLmg7gxbg2OB7YRiIOYRSourslivIWWnLKaMaY1b.9TYupXke', NULL, '2022-07-10 01:51:41', '2022-07-10 01:51:41'),
(25, 'Prénom 1', 'nom 2', '2022-07-12', 'casa', 'Femme', '0649074204', 'anfa', 'default-avatar.png', 'etudiant', 'Email1@yopmail.com', NULL, '$2y$10$mJR6Q9YyJrbZgDlv76bwE.OB2pZfmKJIR2S5BqfDEbnz.S.hV8u..', NULL, '2022-07-11 17:16:22', '2022-07-11 17:16:22'),
(26, 'Prénom 2', 'Nom 2', NULL, NULL, NULL, NULL, NULL, 'default-avatar.png', 'etudiant', 'Email2@yopmai.com', NULL, '$2y$10$Eq6xSeOBkymk6vkCkLA4Tebz1fVKIZR4HMvPK8oVNn9xHRPUhmfiK', NULL, '2022-07-11 17:17:10', '2022-07-11 17:17:10'),
(27, 'Prénom 3', 'Nom 3', '1998-07-14', 'fes', 'Homme', '0123654789', 'centre ville', 'default-avatar.png', 'etudiant', 'Email3@yopmai.com', NULL, '$2y$10$uDbxCbKqvi0AjxMIjvmrYefyLvM89HGxkUeuhvCc6.DozZeIO850W', NULL, '2022-07-11 17:18:16', '2022-07-11 17:18:16');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `absences`
--
ALTER TABLE `absences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absences_professeur_id_foreign` (`professeur_id`),
  ADD KEY `absences_etudiant_id_foreign` (`etudiant_id`),
  ADD KEY `absences_classe_id_foreign` (`classe_id`),
  ADD KEY `absences_annee_id_foreign` (`annee_id`),
  ADD KEY `absences_matiere_id_foreign` (`matiere_id`);

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_user_id_foreign` (`user_id`);

--
-- Index pour la table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agents_user_id_foreign` (`user_id`);

--
-- Index pour la table `années`
--
ALTER TABLE `années`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classes_categorie_id_foreign` (`categorie_id`),
  ADD KEY `classes_niveau_id_foreign` (`niveau_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demandedocuments`
--
ALTER TABLE `demandedocuments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `demandedocuments_user_id_foreign` (`user_id`),
  ADD KEY `demandedocuments_annee_id_foreign` (`annee_id`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `etudiants_user_id_foreign` (`user_id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inscriptions_etudiant_id_foreign` (`etudiant_id`),
  ADD KEY `inscriptions_classe_id_foreign` (`classe_id`),
  ADD KEY `inscriptions_annee_id_foreign` (`annee_id`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Index pour la table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Index pour la table `niveaus`
--
ALTER TABLE `niveaus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notes_professeur_id_foreign` (`professeur_id`),
  ADD KEY `notes_etudiant_id_foreign` (`etudiant_id`),
  ADD KEY `notes_classe_id_foreign` (`classe_id`),
  ADD KEY `notes_annee_id_foreign` (`annee_id`),
  ADD KEY `notes_matiere_id_foreign` (`matiere_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_etudiant_id_foreign` (`etudiant_id`),
  ADD KEY `payments_annee_id_foreign` (`annee_id`),
  ADD KEY `payments_inscription_id_foreign` (`inscription_id`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `professeurs`
--
ALTER TABLE `professeurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `professeurs_user_id_foreign` (`user_id`);

--
-- Index pour la table `renouvelements`
--
ALTER TABLE `renouvelements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `renouvelements_etudiant_id_foreign` (`etudiant_id`),
  ADD KEY `renouvelements_classe_id_foreign` (`classe_id`),
  ADD KEY `renouvelements_annee_id_foreign` (`annee_id`),
  ADD KEY `renouvelements_categorie_id_foreign` (`categorie_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `absences`
--
ALTER TABLE `absences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `années`
--
ALTER TABLE `années`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `demandedocuments`
--
ALTER TABLE `demandedocuments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `niveaus`
--
ALTER TABLE `niveaus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `professeurs`
--
ALTER TABLE `professeurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `renouvelements`
--
ALTER TABLE `renouvelements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `absences`
--
ALTER TABLE `absences`
  ADD CONSTRAINT `absences_annee_id_foreign` FOREIGN KEY (`annee_id`) REFERENCES `années` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `absences_classe_id_foreign` FOREIGN KEY (`classe_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `absences_etudiant_id_foreign` FOREIGN KEY (`etudiant_id`) REFERENCES `etudiants` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `absences_matiere_id_foreign` FOREIGN KEY (`matiere_id`) REFERENCES `matieres` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `absences_professeur_id_foreign` FOREIGN KEY (`professeur_id`) REFERENCES `professeurs` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `agents`
--
ALTER TABLE `agents`
  ADD CONSTRAINT `agents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `classes_niveau_id_foreign` FOREIGN KEY (`niveau_id`) REFERENCES `niveaus` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `demandedocuments`
--
ALTER TABLE `demandedocuments`
  ADD CONSTRAINT `demandedocuments_annee_id_foreign` FOREIGN KEY (`annee_id`) REFERENCES `années` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `demandedocuments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD CONSTRAINT `etudiants_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD CONSTRAINT `inscriptions_annee_id_foreign` FOREIGN KEY (`annee_id`) REFERENCES `années` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inscriptions_classe_id_foreign` FOREIGN KEY (`classe_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inscriptions_etudiant_id_foreign` FOREIGN KEY (`etudiant_id`) REFERENCES `etudiants` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_annee_id_foreign` FOREIGN KEY (`annee_id`) REFERENCES `années` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notes_classe_id_foreign` FOREIGN KEY (`classe_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notes_etudiant_id_foreign` FOREIGN KEY (`etudiant_id`) REFERENCES `etudiants` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notes_matiere_id_foreign` FOREIGN KEY (`matiere_id`) REFERENCES `matieres` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notes_professeur_id_foreign` FOREIGN KEY (`professeur_id`) REFERENCES `professeurs` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_annee_id_foreign` FOREIGN KEY (`annee_id`) REFERENCES `années` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_etudiant_id_foreign` FOREIGN KEY (`etudiant_id`) REFERENCES `etudiants` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_inscription_id_foreign` FOREIGN KEY (`inscription_id`) REFERENCES `inscriptions` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `professeurs`
--
ALTER TABLE `professeurs`
  ADD CONSTRAINT `professeurs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `renouvelements`
--
ALTER TABLE `renouvelements`
  ADD CONSTRAINT `renouvelements_annee_id_foreign` FOREIGN KEY (`annee_id`) REFERENCES `années` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `renouvelements_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `renouvelements_classe_id_foreign` FOREIGN KEY (`classe_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `renouvelements_etudiant_id_foreign` FOREIGN KEY (`etudiant_id`) REFERENCES `etudiants` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
