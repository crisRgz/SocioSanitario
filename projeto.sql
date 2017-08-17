-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2017 a las 17:50:18
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `projeto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empregados`
--

CREATE TABLE `empregados` (
  `id` int(10) UNSIGNED NOT NULL,
  `NIF` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apelido1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apelido2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empregados`
--

INSERT INTO `empregados` (`id`, `NIF`, `nome`, `apelido1`, `apelido2`, `direccion`, `telefono`, `idUser`, `created_at`, `updated_at`) VALUES
(1, '07327266V', 'Mertie', 'Wuckert', 'Dare', '7506 Bednar Mews Apt. 801\nNew Gay, DC 57784-5798', '899011001', 1, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(2, '40370030C', 'Henderson', 'Toy', 'Lynch', '533 Bernier Lock Apt. 917\nNorth Maudieview, VT 07643-7475', '799111110', 2, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(3, '91799885M', 'Harvey', 'Jones', 'Hegmann', '5050 Hegmann Court\nCasperport, GA 41403', '979011101', 3, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(4, '27921750W', 'Kristopher', 'Wilderman', 'Dicki', '47306 Dicki Parkway\nWisozkmouth, IL 14480-6971', '989011001', 4, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(5, '12887220X', 'Lina', 'O\'Hara', 'Howe', '512 Lee Burgs\nNew Ewellstad, AZ 21398-0407', '789000010', 5, '2017-08-17 14:46:29', '2017-08-17 14:46:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empregado_empresa`
--

CREATE TABLE `empregado_empresa` (
  `idEmpo` int(10) UNSIGNED NOT NULL,
  `idEmpa` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empregado_empresa`
--

INSERT INTO `empregado_empresa` (`idEmpo`, `idEmpa`, `created_at`, `updated_at`) VALUES
(1, 1, '2017-08-16 22:00:00', '2017-08-16 22:00:00'),
(2, 1, '2017-08-16 22:00:00', '2017-08-16 22:00:00'),
(3, 2, '2017-08-16 22:00:00', '2017-08-16 22:00:00'),
(4, 3, '2017-08-16 22:00:00', '2017-08-16 22:00:00'),
(5, 4, '2017-08-16 22:00:00', '2017-08-16 22:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(10) UNSIGNED NOT NULL,
  `CIF` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomeContacto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `CIF`, `nome`, `nomeContacto`, `direccion`, `telefono`, `lat`, `long`, `idUser`, `created_at`, `updated_at`) VALUES
(1, '97928766Z', 'esse', 'Maribel Prohaska Sr.', '996 Reece Lane\nLake Rita, OK 33364', '787111010', '43.667786', '0.705714', 15, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(2, '31927244L', 'facilis', 'Jessie Schaefer', '7322 Reichert Expressway\nPfefferfort, DE 12639-7977', '797010000', '43.385621', '-3.272875', 11, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(3, '64546143L', 'nihil', 'Carlee Ratke', '6634 Ferry Mill\nNorth Sydney, CO 42661', '998000000', '43.234405', '1.228298', 13, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(4, '31204870X', 'laudantium', 'Jules Windler Sr.', '6213 Ruecker Squares\nNew Rosamond, OH 02189-7665', '799110110', '43.727655', '1.499088', 14, '2017-08-17 14:46:29', '2017-08-17 14:46:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa_servizo`
--

CREATE TABLE `empresa_servizo` (
  `idEmpa` int(10) UNSIGNED NOT NULL,
  `idServ` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresa_servizo`
--

INSERT INTO `empresa_servizo` (`idEmpa`, `idServ`, `created_at`, `updated_at`) VALUES
(1, 1, '2017-08-16 22:00:00', '2017-08-16 22:00:00'),
(1, 5, '2017-08-16 22:00:00', '2017-08-16 22:00:00'),
(2, 4, '2017-08-16 22:00:00', '2017-08-16 22:00:00'),
(2, 5, '2017-08-16 22:00:00', '2017-08-16 22:00:00'),
(3, 3, '2017-08-16 22:00:00', '2017-08-16 22:00:00'),
(3, 1, '2017-08-16 22:00:00', '2017-08-16 22:00:00'),
(4, 5, '2017-08-16 22:00:00', '2017-08-16 22:00:00'),
(4, 4, '2017-08-16 22:00:00', '2017-08-16 22:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiares`
--

CREATE TABLE `familiares` (
  `id` int(10) UNSIGNED NOT NULL,
  `NIF` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apelido1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apelido2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CCC` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `familiares`
--

INSERT INTO `familiares` (`id`, `NIF`, `nome`, `apelido1`, `apelido2`, `direccion`, `telefono`, `CCC`, `idUser`, `created_at`, `updated_at`) VALUES
(1, '75810362J', 'Reyes', 'Gulgowski', 'Nolan', '35753 Brycen Camp\nSouth Glennie, VA 57895', '898001001', '8055-7793-66-1894-7474-', 6, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(2, '44444956D', 'Duncan', 'Koch', 'Howell', '63634 Doyle Coves\nNew Seamus, OR 00617', '897001010', '1307-4985-81-9371-3170-', 7, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(3, '71491425J', 'Rosanna', 'Berge', 'Swaniawski', '668 Weimann Villages\nSouth Maynardstad, TX 80069', '798011110', '2805-0684-38-5994-1599-', 10, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(4, '36072878K', 'Annalise', 'Runte', 'Kunde', '65699 Simone Tunnel\nSouth Glennaton, OK 40616', '979000001', '4908-7506-70-1349-2153-', 9, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(5, '72500679L', 'Amari', 'Medhurst', 'Becker', '114 Mayer Knolls\nGleichnerview, MT 94067-2229', '999011110', '7579-6711-97-1903-7589-', 8, '2017-08-17 14:46:29', '2017-08-17 14:46:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_16_083309_empregado_migration', 1),
(4, '2017_08_16_083318_familiar_migration', 1),
(5, '2017_08_16_083325_empresa_migration', 1),
(6, '2017_08_16_083335_usuario_migration', 1),
(7, '2017_08_16_083342_servizo_migration', 1),
(8, '2017_08_16_083417_tratamento_migration', 1),
(9, '2017_08_16_102542_tipo_migration', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servizos`
--

CREATE TABLE `servizos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idTipo` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servizos`
--

INSERT INTO `servizos` (`id`, `nome`, `descricion`, `idTipo`, `created_at`, `updated_at`) VALUES
(1, 'esse', 'sequi', 1, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(2, 'non', 'ea', 1, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(3, 'cupiditate', 'laboriosam', 1, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(4, 'iure', 'quasi', 2, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(5, 'velit', 'ea', 1, '2017-08-17 14:46:29', '2017-08-17 14:46:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'nesciunt', '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(2, 'itaque', '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(3, 'magni', '2017-08-17 14:46:29', '2017-08-17 14:46:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamentos`
--

CREATE TABLE `tratamentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `dateTimeIni` datetime NOT NULL,
  `dateTimeFin` datetime NOT NULL,
  `realizado` tinyint(1) NOT NULL,
  `causa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idUsu` int(10) UNSIGNED NOT NULL,
  `idServ` int(10) UNSIGNED NOT NULL,
  `idEmpo` int(10) UNSIGNED NOT NULL,
  `idEmpa` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tratamentos`
--

INSERT INTO `tratamentos` (`id`, `dateTimeIni`, `dateTimeFin`, `realizado`, `causa`, `idUsu`, `idServ`, `idEmpo`, `idEmpa`, `created_at`, `updated_at`) VALUES
(1, '2007-08-07 08:04:20', '1989-04-10 01:32:09', 1, 'Five! Always lay the blame on others!\' \'YOU\'D better not talk!\' said Five. \'I heard every word you fellows were saying.\' \'Tell us a story!\' said the.', 3, 3, 5, 3, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(2, '1970-03-13 06:50:05', '2004-08-03 14:55:37', 0, 'In another minute there was a general clapping of hands at this: it was growing, and she felt a little hot tea upon its forehead (the position in.', 5, 1, 2, 4, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(3, '2016-09-27 18:08:52', '2017-08-02 01:50:29', 0, 'Footman remarked, \'till tomorrow--\' At this moment the door and found quite a new idea to Alice, \'Have you guessed the riddle yet?\' the Hatter.', 2, 4, 3, 1, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(4, '1993-11-07 05:12:40', '2005-05-20 09:11:37', 1, 'Alice in a moment. \'Let\'s go on with the Dormouse. \'Don\'t talk nonsense,\' said Alice in a low, hurried tone. He looked at Alice. \'I\'M not a regular.', 4, 1, 5, 1, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(5, '1971-05-05 17:51:08', '2002-02-06 14:12:43', 0, 'EVEN finish, if he doesn\'t begin.\' But she waited patiently. \'Once,\' said the Mock Turtle: \'nine the next, and so on.\' \'What a curious dream!\' said.', 6, 5, 1, 2, '2017-08-17 14:46:29', '2017-08-17 14:46:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `rol`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Grayson Kris', 'wilbert.graham@yahoo.com', '0b149001d5ad0624f90fed9ca807d863', 'Empregado', NULL, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(2, 'Deontae Considine', 'keon.botsford@vonrueden.com', 'f001fbeeb0fae5cfa6044d6e0f2980c8', 'Empregado', NULL, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(3, 'Karianne Conroy', 'beatty.chanel@yahoo.com', 'e574c9d2839d2ecf084f304dd49be666', 'Empregado', NULL, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(4, 'Mrs. Lucienne Hartmann', 'reichert.adelbert@gmail.com', 'dcf79742e7634e01a6cb0472f2586329', 'Empresa', NULL, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(5, 'Samanta Schuppe MD', 'lilian96@klein.com', 'ded8fff8dce31a5d00cfd7feba8c0437', 'Empregado', NULL, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(6, 'Mr. Brandon Tillman', 'dmurray@kunze.com', 'be58aba37addd363e474f5ba3aaa2824', 'Familiar', NULL, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(7, 'Willy Zemlak', 'tierra86@hotmail.com', 'c9f61d69968d476ebdd8a36ffb37c417', 'Familiar', NULL, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(8, 'Dr. Manuel Schaefer V', 'jwolff@hotmail.com', '38d8f2e55625bee6b7a1230f05c29a2a', 'Empregado', NULL, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(9, 'Chesley Marquardt', 'bins.vella@hotmail.com', '8ddc9acfaefec76c32ba71e8fe17dd6f', 'Familiar', NULL, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(10, 'Ms. Joanie Spinka', 'oconnell.charlotte@jacobi.com', 'feada1059b7bbd17f5b521fbffd70c66', 'Empresa', NULL, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(11, 'Chaz Greenholt', 'rernser@gmail.com', '4370dbe995a2d80ec5495469cc42d77e', 'Empregado', NULL, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(12, 'Michael Lind', 'kshlerin.evie@yahoo.com', '759925a0e1bb3e6ea47d83649cca86b5', 'Familiar', NULL, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(13, 'Savannah Jones', 'carolyne.schneider@larkin.biz', 'e6c401ff8fc62edb0e154ba3099a96f2', 'Familiar', NULL, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(14, 'Whitney Lang', 'mackenzie83@miller.com', 'a4cb6d8e87587e296686b2abd2d71e67', 'Empregado', NULL, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(15, 'Marquis Corwin', 'vklein@hotmail.com', '0eee91e606e28660f2fd63c3f35f30d3', 'Empregado', NULL, '2017-08-17 14:46:29', '2017-08-17 14:46:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `NIF` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apelido1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apelido2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomeCont` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tlfCont` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idFam` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `NIF`, `nome`, `apelido1`, `apelido2`, `direccion`, `telefono`, `nomeCont`, `tlfCont`, `lat`, `long`, `idFam`, `created_at`, `updated_at`) VALUES
(1, '02886531Q', 'Brody', 'Ortiz', 'Block', '2477 Moen Dam Suite 166\nSouth Kayleyfort, RI 87766-8292', '889101101', 'Adrienne Ondricka', '878000010', '41.914777', '4.498374', 3, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(2, '34252616C', 'Omari', 'Walter', 'Raynor', '58661 Hoeger Square Suite 267\nPort Verna, NJ 98740', '777111011', 'Vernon Towne', '987010100', '42.877997', '-4.334672', 5, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(3, '29374920W', 'Felipe', 'Littel', 'Feil', '770 Margaret Mission\nLake Tommiehaven, NH 70271-8882', '989010101', 'Prof. Connor Altenwerth Sr.', '789100010', '42.365558', '3.927497', 4, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(4, '43481302W', 'Cheyanne', 'Hirthe', 'Hilpert', '9331 Abernathy Creek\nFarrellton, TX 43550', '978110100', 'Kenny Jacobs', '988001001', '42.779733', '-1.576733', 4, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(5, '08411322C', 'Trinity', 'Brakus', 'Casper', '956 Ruecker Camp\nWest Richmondstad, VT 19548', '888111011', 'Rex Nitzsche Sr.', '887111101', '43.044163', '3.554857', 3, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(6, '04543131X', 'Dejon', 'Corkery', 'West', '15097 Brekke Turnpike\nNew Isobel, AK 92668', '888010111', 'Misael Gerhold', '897111101', '43.593361', '3.470366', 2, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(7, '89344798B', 'Joesph', 'Padberg', 'Mitchell', '98169 Borer Port\nLemuelbury, MI 78254', '797101110', 'Cornelius Morar V', '977100000', '43.57375', '3.674844', 5, '2017-08-17 14:46:29', '2017-08-17 14:46:29'),
(8, '16128618Y', 'Lazaro', 'Beier', 'Kessler', '892 Ankunding Port Suite 892\nNew Josefinaview, MN 59218-6545', '997101100', 'Josefa Will', '878000001', '42.246794', '-2.085861', 4, '2017-08-17 14:46:29', '2017-08-17 14:46:29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empregados`
--
ALTER TABLE `empregados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empregados_iduser_foreign` (`idUser`);

--
-- Indices de la tabla `empregado_empresa`
--
ALTER TABLE `empregado_empresa`
  ADD KEY `empregado_empresa_idempo_index` (`idEmpo`),
  ADD KEY `empregado_empresa_idempa_index` (`idEmpa`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresas_iduser_index` (`idUser`);

--
-- Indices de la tabla `empresa_servizo`
--
ALTER TABLE `empresa_servizo`
  ADD KEY `empresa_servizo_idempa_index` (`idEmpa`),
  ADD KEY `empresa_servizo_idserv_index` (`idServ`);

--
-- Indices de la tabla `familiares`
--
ALTER TABLE `familiares`
  ADD PRIMARY KEY (`id`),
  ADD KEY `familiares_iduser_foreign` (`idUser`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `servizos`
--
ALTER TABLE `servizos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servizos_idtipo_foreign` (`idTipo`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tratamentos`
--
ALTER TABLE `tratamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tratamentos_idusu_foreign` (`idUsu`),
  ADD KEY `tratamentos_idserv_foreign` (`idServ`),
  ADD KEY `tratamentos_idempo_foreign` (`idEmpo`),
  ADD KEY `tratamentos_idempa_foreign` (`idEmpa`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarios_idfam_foreign` (`idFam`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empregados`
--
ALTER TABLE `empregados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `familiares`
--
ALTER TABLE `familiares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `servizos`
--
ALTER TABLE `servizos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tratamentos`
--
ALTER TABLE `tratamentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empregados`
--
ALTER TABLE `empregados`
  ADD CONSTRAINT `empregados_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `empregado_empresa`
--
ALTER TABLE `empregado_empresa`
  ADD CONSTRAINT `empregado_empresa_idempa_foreign` FOREIGN KEY (`idEmpa`) REFERENCES `empresas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `empregado_empresa_idempo_foreign` FOREIGN KEY (`idEmpo`) REFERENCES `empregados` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresas_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `empresa_servizo`
--
ALTER TABLE `empresa_servizo`
  ADD CONSTRAINT `empresa_servizo_idempa_foreign` FOREIGN KEY (`idEmpa`) REFERENCES `empresas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `empresa_servizo_idserv_foreign` FOREIGN KEY (`idServ`) REFERENCES `servizos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `familiares`
--
ALTER TABLE `familiares`
  ADD CONSTRAINT `familiares_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `servizos`
--
ALTER TABLE `servizos`
  ADD CONSTRAINT `servizos_idtipo_foreign` FOREIGN KEY (`idTipo`) REFERENCES `tipos` (`id`);

--
-- Filtros para la tabla `tratamentos`
--
ALTER TABLE `tratamentos`
  ADD CONSTRAINT `tratamentos_idempa_foreign` FOREIGN KEY (`idEmpa`) REFERENCES `empresas` (`id`),
  ADD CONSTRAINT `tratamentos_idempo_foreign` FOREIGN KEY (`idEmpo`) REFERENCES `empregados` (`id`),
  ADD CONSTRAINT `tratamentos_idserv_foreign` FOREIGN KEY (`idServ`) REFERENCES `servizos` (`id`),
  ADD CONSTRAINT `tratamentos_idusu_foreign` FOREIGN KEY (`idUsu`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_idfam_foreign` FOREIGN KEY (`idFam`) REFERENCES `familiares` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
