-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2022 a las 11:42:37
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `misseries`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `idg` int(11) NOT NULL,
  `genero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`idg`, `genero`) VALUES
(1, 'Comedia'),
(2, 'Aventura'),
(3, 'Thriller'),
(4, 'Terror'),
(5, 'Drama'),
(6, 'Ciencia Ficción'),
(7, 'Fantasía'),
(8, 'Animación'),
(10, 'pepe'),
(12, 'It'),
(13, 'dadafaf'),
(15, 'sfksofksofksfsfs'),
(16, 'ñpñp'),
(17, 'dfgh'),
(18, 'dfgh'),
(19, 'asdfdfghh'),
(21, 'vdvgx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pertenece`
--

CREATE TABLE `pertenece` (
  `ids` int(11) NOT NULL,
  `idg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pertenece`
--

INSERT INTO `pertenece` (`ids`, `idg`) VALUES
(1, 3),
(1, 6),
(1, 7),
(1, 10),
(1, 12),
(1, 17),
(1, 19),
(2, 2),
(2, 6),
(2, 7),
(2, 21),
(3, 5),
(3, 6),
(4, 2),
(4, 6),
(4, 7),
(5, 1),
(5, 3),
(5, 5),
(6, 1),
(6, 8),
(7, 2),
(7, 3),
(7, 4),
(7, 8),
(8, 2),
(9, 1),
(9, 5),
(10, 2),
(10, 10),
(11, 2),
(11, 10),
(12, 2),
(13, 2),
(14, 1),
(15, 1),
(15, 2),
(15, 6),
(15, 7),
(16, 1),
(17, 3),
(17, 4),
(18, 6),
(19, 6),
(20, 4),
(20, 7),
(21, 4),
(22, 4),
(23, 4),
(24, 3),
(25, 2),
(25, 3),
(26, 2),
(26, 5),
(27, 4),
(27, 5),
(28, 3),
(28, 4),
(28, 5),
(29, 7),
(30, 1),
(31, 5),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(35, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serie`
--

CREATE TABLE `serie` (
  `ids` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `fecha` date DEFAULT NULL,
  `temporadas` tinyint(4) NOT NULL DEFAULT 1,
  `puntuacion` float(6,2) NOT NULL DEFAULT 0.00,
  `argumento` text NOT NULL,
  `plataforma` varchar(100) DEFAULT NULL,
  `poster` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `serie`
--

INSERT INTO `serie` (`ids`, `titulo`, `fecha`, `temporadas`, `puntuacion`, `argumento`, `plataforma`, `poster`) VALUES
(1, 'Hunters', '2022-04-14', 12, 7.00, 'ecret group of Nazi hunters fighting a clandestine war against the cabal of high-ranking Nazi oials in hisdddddddddddddddddddddddddddddddddddddddddddddddddddddddddd\r\nasddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd\r\nasdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd\r\nasdddddddd', 'Amazon Prime Video', 'https://m.media-amazon.com/images/M/MV5BZWEwZTcyNjctMjAzZC00ZGU0LWIxYWQtMDAwMmU1NzQ1ZjQ3XkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_.jpg'),
(2, 'The Umbrella Academy', '2022-04-07', 1, 8.50, 'On the same day in October 1989, forty-three infants are inexplicably born to random, unconnected women who showed no signs of pregnancy the day before. Seven are adopted by Sir Reginald Hargreeves, a billionaire industrialkjnjjjjjjjjjjjjjjjjj', 'Netflix', 'https://m.media-amazon.com/images/M/MV5BNTFhOTk1NTgtYWM1ZS00NWI1LTgzYzAtYmE5MjZiMDE0NzlhXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SY1000_CR0,0,675,1000_AL_.jpg'),
(3, 'Star Trek: Picard', '0000-00-00', 2, 7.90, 'At the end of the 24th Century, and 14 years after his retirement from Starfleet, Jean-Luc Picard is living a quiet life on his vineyard, Chateau Picard. When he is sought out by a mysterious young woman, Dahj, in need of his help, he soon realizes she may have personal connections to his own past.', 'Amazon Prime Video', 'https://m.media-amazon.com/images/M/MV5BMjAzYmQ4NTUtMGVjOS00OWRhLTlmYjktZDlkZTk2OGQ2YjE5XkEyXkFqcGdeQXVyODkzNTgxMDg@._V1_SX704_CR0,0,704,999_AL_.jpg'),
(4, 'Silicon Valley', '0000-00-00', 1, 8.50, 'In the high-tech gold rush of modern Silicon Valley, the people most qualified to succeed are the least capable of handling success. A comedy partially inspired by Mike Judge\'s own experiences as a Silicon Valley engineer in the late 1980s', 'HBO', 'https://m.media-amazon.com/images/M/MV5BOTcwNzU2MGEtMzUzNC00MzMwLWJhZGItNDY3NDllYjU5YzAyXkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_SX675_AL_.jpg'),
(5, 'The Mandalorian', '2020-03-24', 1, 8.70, 'After the stories of Jango and Boba Fett, another warrior emerges in the Star Wars universe. The Mandalorian is set after the fall of the Empire and before the emergence of the First Order. We follow the travails of a lone gunfighter in the outer reaches of the galaxy far from the authority of the New Republic.ss', 'Disney+', 'https://m.media-amazon.com/images/M/MV5BMWI0OTJlYTItNzMwZi00YzRiLWJhMjItMWRlMDNhZjNiMzJkXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SY1000_CR0,0,675,1000_AL_.jpg'),
(6, 'Gravity Falls', '2012-06-15', 2, 8.90, 'When Dipper and Mabel Pines get sent to their great-uncle Stan\'s shop in Gravity Falls, Oregon for the summer, they think it will be boring. But when Dipper find a strange journal in the woods, they learn about some strange secrets about the town. Welcome to Gravity Falls. Just north of Normal, west of Weird.', 'Disney+', 'https://m.media-amazon.com/images/M/MV5BMTEzNDc3MDQ2NzNeQTJeQWpwZ15BbWU4MDYzMzUwMDIx._V1_SY1000_CR0,0,641,1000_AL_.jpg'),
(7, 'Castlevania', '2022-04-19', 2, 8.20, 'When Lisa Tepes, beloved wife of Vlad Tepes AKA Dracula is acused of witchcraft and burned at the stake by an overzealous bishop, Dracula declares war on the people of Wallachia and unleashes an army of murderous demonic creatures from hell. Luckily, Trevor Belmont, last survivor of the Belmont clan, a disgraced family known for hunting all kinds of monsters, is still in town and agrees to take the fight to the lord of vampires.', 'Netflix', 'https://m.media-amazon.com/images/M/MV5BYWUwN2UwYTktMDk4OC00YTg0LThmNTItNWE3ZjQxOTIxZTg3XkEyXkFqcGdeQXVyNTE1NjY5Mg@@._V1_.jpg'),
(8, 'Stranger Things', '0000-00-00', 3, 8.81, 'In a small town where everyone knows everyone, a peculiar incident starts a chain of events that leads to the disappearance of a child, which begins to tear at the fabric of an otherwise peaceful community. Dark government agencies and seemingly malevolent supernatural forces converge on the town, while a few of the locals begin to understand that there\'s more going on than meets the eye.', 'Netflix', 'https://m.media-amazon.com/images/M/MV5BMjEzMDAxOTUyMV5BMl5BanBnXkFtZTgwNzAxMzYzOTE@._V1_.jpg'),
(9, 'The Marvelous Mrs. Maisel', '2022-04-20', 5, 8.70, 'Set in 1950s Manhattan, The Marvelous Mrs. Maisel is a 60-minute dramedy that centers on Miriam \"Midge\" Maisel, a sunny, energetic, sharp, Jewish girl who had her life mapped out: go to college, find a husband, have kids, and throw the best Yom Kippur break-fasts in town. Soon enough, she finds herself exactly where she had hoped to be, living happily with her husband and two children in the Upper West Side.', 'Amazon Prime Video', 'https://m.media-amazon.com/images/M/MV5BZTFhMDdmODEtN2UwOS00ZjQwLTgxMGYtM2JlMGM3YTUyM2FjXkEyXkFqcGdeQXVyMTYzMDM0NTU@._V1_.jpg'),
(10, 'Daredevil', '2015-10-20', 3, 8.60, 'As a child Matt Murdock was blinded by a chemical spill in a freak accident. Instead of limiting him it gave him superhuman senses that enabled him to see the world in a unique and powerful way. Now he uses these powers to deliver justice, not only as a lawyer in his own law firm, but also as vigilante at night, stalking the streets of Hell\'s Kitchen as Daredevil, the man without fear', 'Netflix', 'https://m.media-amazon.com/images/M/MV5BODcwOTg2MDE3NF5BMl5BanBnXkFtZTgwNTUyNTY1NjM@._V1_SY1000_CR0,0,675,1000_AL_.jpg'),
(11, 'Iron Fist', '2017-03-17', 2, 6.50, 'Danny Rand returns to New York City after being missing for years, trying to reconnect with his past and his family legacy. He fights against the criminal element corrupting his world around him with his incredible kung-fu mastery and ability to summon the awesome power of the fiery Iron Fist.', 'Netflix', 'https://m.media-amazon.com/images/M/MV5BMjI5Mjg1NDcyOV5BMl5BanBnXkFtZTgwMjAxOTQ5MTI@._V1_SY1000_CR0,0,674,1000_AL_.jpg'),
(12, 'Jessica Jones', '2015-11-20', 3, 8.00, 'Ever since her short-lived stint as a superhero ended in tragedy, Jessica Jones has been rebuilding her personal life and career as a hot-tempered, sardonic private detective in Hell\'s Kitchen, New York City. Plagued by self-loathing and a wicked case of PTSD, Jessica battles demons from within and without, using her extraordinary abilities as an unlikely champion for those in need. Especially if they\'re willing to cut her a check.', 'Netflix', 'https://m.media-amazon.com/images/M/MV5BMjQxNzkzMzMyM15BMl5BanBnXkFtZTgwNDIyNjc3NjE@._V1_.jpg'),
(13, 'Luke Cage', '2016-09-30', 2, 7.30, 'After a sabotaged experiment leaves him with super strength and unbreakable skin, Luke Cage becomes a fugitive trying to rebuild his life in modern day Harlem, New York City. But he is soon pulled out of the shadows and must fight a battle for the heart of his city - forcing him to confront a past he had tried to bury. ', 'Netflix', 'https://m.media-amazon.com/images/M/MV5BMjAxOTM3NjEwMV5BMl5BanBnXkFtZTgwNTkyOTY4NTM@._V1_SY1000_CR0,0,675,1000_AL_.jpg'),
(14, 'The Big Bang Theory', '2007-09-24', 12, 8.10, 'Leonard Hofstadter and Sheldon Cooper are both brilliant physicists working at Cal Tech in Pasadena, California. They are colleagues, best friends, and roommates, although in all capacities their relationship is always tested primarily by Sheldon\'s regimented, deeply eccentric, and non-conventional ways. They are also friends with their Cal Tech colleagues mechanical engineer Howard Wolowitz and astrophysicist Rajesh Koothrappali. The foursome spend their time working on their individual work projects, playing video games, watching science-fiction movies, or reading comic books. As they are self-professed nerds, all have little or no luck with women. When Penny, a pretty woman and an aspiring actress from Omaha, moves into the apartment across the hall from Leonard and Sheldon\'s, Leonard has another aspiration in life, namely to get Penny to be his girlfriend. ', 'Netflix', 'https://m.media-amazon.com/images/M/MV5BY2FmZTY5YTktOWRlYy00NmIyLWE0ZmQtZDg2YjlmMzczZDZiXkEyXkFqcGdeQXVyNjg4NzAyOTA@._V1_SY1000_CR0,0,666,1000_AL_.jpg'),
(15, 'Dirk Gently', '2016-10-22', 2, 8.30, 'Centers on the titular holistic detective who investigates cases involving the supernatural. Based on the \"Dirk Gently\'s Holistic Detective Agency\" novel series, written by Douglas Adams and published by Simon and Schuster in 1987.', 'Netflix', 'https://m.media-amazon.com/images/M/MV5BMTU3MDkzNzM5NF5BMl5BanBnXkFtZTgwMzEyNTgyMDI@._V1_.jpg'),
(16, 'Brooklyn Nine-Nine', '2013-09-17', 7, 8.40, 'Captain Ray Holt takes over Brooklyn\'s 99th precinct, which includes Detective Jake Peralta, a talented but carefree detective who\'s used to doing whatever he wants. The other employees of the 99th precinct include Detective Amy Santiago, Jake\'s over achieving and competitive partner; Detective Rosa Diaz, a tough and kept to herself coworker; Detective Charles Boyle, Jake\'s best friend who also has crush on Rosa; Detective Sergeant Terry Jeffords, who was recently taken off the field after the birth of his twin girls; and Gina Linetti, the precinct\'s sarcastic administrator.', 'Netflix', 'https://m.media-amazon.com/images/M/MV5BNzVkYWY4NzYtMWFlZi00YzkwLThhZDItZjcxYTU4ZTMzMDZmXkEyXkFqcGdeQXVyODUxOTU0OTg@._V1_.jpg'),
(17, 'iZombie', '2015-03-17', 4, 7.90, 'Liv Moore, a medical student, gets invited in a party which turns into a macabre zombie arena. Liv wakes up from the dead and becomes a zombie. For maintaining her humanity she must eat human brains so she began working in coroner\'s office to access brains. Eating a brain gives her memories and traits of that person. So she helps detective Clive Babineaux to solve the murder as a psychic. ', 'Netflix', 'https://m.media-amazon.com/images/M/MV5BODdjNjRhOWUtMTA3NC00NTJmLTg4ZWUtZWJiNzNmMzZiN2NiXkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_SY1000_CR0,0,666,1000_AL_.jpg'),
(18, 'Star Trek: Discovery', '2017-09-25', 2, 7.30, 'Ten years before Kirk, Spock, and the Enterprise, the USS Discovery discovers new worlds and lifeforms as one Starfleet officer learns to understand all things alien.', 'Netflix', 'https://m.media-amazon.com/images/M/MV5BOTg5MzA1MjAwNV5BMl5BanBnXkFtZTgwNzAwMDU5NjM@._V1_SY1000_CR0,0,694,1000_AL_.jpg'),
(19, 'Lost in Space', '2018-04-13', 1, 7.30, 'Set 30 years in the future, colonization in space is now a reality, and the Robinson family is among those tested and selected to make a new life for themselves in a better world. But when the new colonists find themselves abruptly torn off course en route to their new home they must forge new alliances and work together to survive in a dangerous alien environment, light-years from their original destination. Stranded along with the Robinsons are two outsiders who find themselves thrown together by circumstance and a mutual knack for deception. The charismatic Dr. Smith is a master manipulator with an inscrutable end game. And the roguish, but charming Don West is a highly-skilled, blue collar contractor, who had no intention of joining the colony, let alone crash landing on a lost planet.', 'Netflix', 'https://m.media-amazon.com/images/M/MV5BYzZkOTY4MDgtODI5Mi00ZjA4LWJkODgtYzBiOGE3MWNhZWFmXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SY1000_CR0,0,675,1000_AL_.jpg'),
(20, 'Locke & Key', '2020-02-07', 1, 7.40, 'After their father is murdered under mysterious circumstances, the three Locke siblings and their mother move into their ancestral home, Keyhouse, which they discover is full of magical keys that may be connected to their father\'s death. As the Locke children explore the different keys and their unique powers, a mysterious demon awakens - and will stop at nothing to steal them. From Carlton Cuse and Meredith Averill, Locke and Key is a coming-of-age mystery about love, loss, and the unshakable bonds that define family.', 'Netflix', 'https://m.media-amazon.com/images/M/MV5BNjZkNzY4M2ItOWY0Ni00Y2ViLWE1NjItOTIyYzZjMzg5M2E1XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SY1000_CR0,0,675,1000_AL_.jpg'),
(21, 'Swamp Thing', '2020-01-07', 1, 7.70, 'Abby Arcane returns home to Marais, Louisiana to investigate a deadly swamp-borne virus, only to discover the dark, terrifying mysteries of the swamp.', 'Movistar+', 'https://m.media-amazon.com/images/M/MV5BNWRiZTMxZTUtYzI2NS00YTk1LWJhM2MtYzU2NGQ4YzA1MmNiXkEyXkFqcGdeQXVyMjYwNDA2MDE@._V1_.jpg'),
(22, 'Evil', '2020-01-13', 1, 7.60, 'A skeptical female clinical psychologist joins a priest-in-training and a blue-collar contractor as they investigate supposed miracles, demonic possession, and other extraordinary occurrences to see if there\'s a scientific explanation or if something truly supernatural is at work.', 'Movistar+', 'https://m.media-amazon.com/images/M/MV5BYjE5MjM5MzUtNjg4MS00ZWVkLTgyZWUtMGRjNzc1MzdiODNkXkEyXkFqcGdeQXVyMTMwNzQ2MDM@._V1_SY1000_CR0,0,666,1000_AL_.jpg'),
(23, 'The Exorcist', '2016-09-23', 2, 8.10, 'Angela, is plagued by increasingly frightening nightmares, her husband is slowly losing his mind, her older daughter spends her time locked in her room and her younger daughter hears strange noises from inside the walls. Two priests are brought together, as all their fates become entangled in a battle against an ancient force of evil.', 'Amazon Prime Video', 'https://m.media-amazon.com/images/M/MV5BMjEzNjI5Njg4MV5BMl5BanBnXkFtZTgwMjkwMjU2MzI@._V1_SY1000_CR0,0,673,1000_AL_.jpg'),
(24, 'Jack Ryan', '2018-08-31', 2, 8.10, 'When CIA analyst Jack Ryan stumbles upon a suspicious series of bank transfers his search for answers pulls him from the safety of his desk job and catapults him into a deadly game of cat and mouse throughout Europe and the Middle East, with a rising terrorist figurehead preparing for a massive attack against the US and her allies.', 'Amazon Prime Video', 'https://m.media-amazon.com/images/M/MV5BNDg1Zjc4YzktMmRmZi00ZWJmLWJiYzgtYjg3MmE0OTM1NzY5XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SY1000_CR0,0,679,1000_AL_.jpg'),
(25, 'The Boys', '2019-07-26', 1, 8.70, 'The Boys is set in a universe where superpowered people are recognized as heroes by the general public and owned by powerful corporation Vought International, which ensures that they are aggressively marketed and monetized. Outside of their heroic personas, most are arrogant and corrupt. The series primarily focuses on two groups: the titular Boys, vigilantes looking to keep the corrupted heroes under control, and the Seven, Vought International\'s premier superhero team. The Boys are led by Billy Butcher, who despises all superpowered people, and the Seven are led by the egotistical and unstable Homelander. As a conflict ensues between the two groups, the series also follows the new members of each team: Hugh \"Hughie\" Campbell of the Boys, who joins the vigilantes after his girlfriend is killed in a high speed collision by the Seven\'s A-Train, and Annie January / Starlight of the Seven, a young and hopeful heroine forced to face the truth about the heroes she admires.', 'Amazon Prime Video', 'https://m.media-amazon.com/images/M/MV5BMjdjOTliZTQtM2FhNS00Mjk3LWJiOTgtMWJlMTg4MDgyNzc1XkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_.jpg'),
(26, 'Watchmen', '2019-10-21', 1, 8.10, 'Set in an alternate history where masked vigilantes are treated as outlaws and must embrace the nostalgia, Detective Angela Abar investigates the reemergence of a white supremacist terrorist group inspired by the long-deceased moral absolutist Rorschach.', 'HBO', 'https://m.media-amazon.com/images/M/MV5BYjhhZDE3NjgtMjkzNC00NzI3LWJhOTItMWQ5ZjljODA5NWNkXkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg'),
(27, 'The Haunting of Hill House', '2018-10-12', 1, 8.70, 'Explores a group of siblings who, as children, grew up in what would go on to become the most famous haunted house in the country. Now adults, and forced back together in the face of tragedy, the family must finally confront the ghosts of their past, some of which still lurk in their minds while others may actually be stalking the shadows of Hill House.', 'Netflix', 'https://m.media-amazon.com/images/M/MV5BMTU4NzA4MDEwNF5BMl5BanBnXkFtZTgwMTQxODYzNjM@._V1_SY1000_CR0,0,674,1000_AL_.jpg'),
(28, 'Servant', '0000-00-00', 1, 7.70, 'A Philadelphia couple is in mourning after an unspeakable tragedy creates a rift in their marriage and opens the door for a mysterious force to enter their home.', 'Apple TV', 'https://m.media-amazon.com/images/M/MV5BNjQ2MzIzMGMtN2I4Yi00NzdkLWE1NTAtMTI0NWZiNzAwMDM5XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SY1000_CR0,0,666,1000_AL_.jpg'),
(29, 'Amazing Stories', '0202-03-06', 1, 6.30, 'Reimagining the anthology from visionary Steven Spielberg, \"Amazing Stories,\" executive produced by Spielberg, will transport the audience to worlds of wonder through the lens of today\'s most imaginative filmmakers, directors, and writers.', 'Apple TV', 'https://m.media-amazon.com/images/M/MV5BMzY3NGI0MWUtYTBmZC00MDEyLTgyMjItZTY5YzIzZjcxNGQ4XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SY1000_CR0,0,666,1000_AL_.jpg'),
(30, 'Mythic Quest', '2020-02-07', 1, 7.50, 'The owner of a successful video game design company and his troubled staff struggle to keep their hit game \'Mythic Quest\' on top.', 'Apple TV', 'https://m.media-amazon.com/images/M/MV5BYjUyMmJjZmUtY2VhZi00YTY0LTg5NmMtYzU3NDM4N2YzNzk3XkEyXkFqcGdeQXVyNDk3ODk4OQ@@._V1_SY1000_CR0,0,689,1000_AL_.jpg'),
(31, 'El ministerio del Tiempo', '2015-06-09', 3, 8.80, 'El Ministerio del Tiempo es una institución gubernamental secreta que depende directamente de la Presidencia del Gobierno español. Solo monarcas, presidentes y un número exclusivo de personas saben de él. El paso hacia otras épocas se realiza a través de puertas vigiladas por las patrullas del ministerio. Su objetivo: detectar e impedir que cualquier intruso del pasado llegue a nuestro presente —o viceversa— con el fin de cambiar la historia para su beneficio. Para ello, las patrullas tendrán que viajar al pasado y evitar que lo logren. En dicho Ministerio trabajan muchas personas de diversas épocas.', 'Movistar+', 'https://m.media-amazon.com/images/M/MV5BM2RlMTZkYzYtYmQ4Mi00MTFlLTgzMzItMjUzNTZiN2U2YTY2XkEyXkFqcGdeQXVyODY0OTUyOTg@._V1_.jpg'),
(32, 'Parks and Recreation', '2009-04-09', 1, 8.60, 'Leslie Knope, a mid-level bureaucrat in an Indiana Parks and Recreation Department, hopes to beautify her town (and boost her own career) by helping local nurse Ann Perkins turn an abandoned construction site into a community park. However, what should be a fairly simple project is stymied at every turn by oafish bureaucrats, selfish neighbors, governmental red tape, and a myriad of other challenges. Leslie\'s colleague Tom Haverford, who delights in exploiting his position for personal gain, is as likely to undermine her efforts as to help her, while her boss, Ron Swanson, is adamantly opposed to government in any form, even though he\'s a bureaucrat.', 'Amazon Prime Video', 'https://m.media-amazon.com/images/M/MV5BMjA5MjUxNDgwNF5BMl5BanBnXkFtZTgwMDI5NjMwNDE@._V1_.jpg'),
(33, 'Frasier', '1993-09-16', 11, 8.00, 'Dr. Frasier Crane, a successful Boston therapist, moves to Seattle to get a new start on life. He has a radio talk show, which he uses to relay his wit and wisdom to others, but at times he struggles with his own problems with his salt-of-the-earth father, his pretentious brother, and his friends and co-workers. ', NULL, 'https://m.media-amazon.com/images/M/MV5BNzViNjNkZDktMTE5Yi00NjRmLWEyYTYtZjQ5ZWM5OThlMzJlXkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_SY1000_SX746_AL_.jpg'),
(34, 'Friends', '1997-11-27', 10, 8.90, 'Rachel Green, Ross Geller, Monica Geller, Joey Tribbiani, Chandler Bing and Phoebe Buffay are six 20 something year-olds, living off of one another in the heart of New York City. Over the course of ten years, this average group of buddies goes through massive mayhem, family trouble, past and future romances, fights, laughs, tears and surprises as they learn what it really means to be a friend.', NULL, 'https://m.media-amazon.com/images/M/MV5BNDVkYjU0MzctMWRmZi00NTkxLTgwZWEtOWVhYjZlYjllYmU4XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_.jpg'),
(35, 'How I met your mother', '2005-09-19', 1, 9.00, 'Ted Mosby sits down with his kids, to tell them the story of how he met their mother. The story is told through memories of his friends Marshall, Lily, Robin, and Barney Stinson. All legendary 9 seasons lead up to the moment of Ted\'s final encounter with \"the one.\"', NULL, 'https://m.media-amazon.com/images/M/MV5BZWJjMDEzZjUtYWE1Yy00M2ZiLThlMmItODljNTAzODFiMzc2XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_SY1000_CR0,0,666,1000_AL_.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idu` int(100) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `pasword` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `perfil` tinyint(4) NOT NULL DEFAULT 0,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idu`, `usuario`, `pasword`, `email`, `nombre`, `perfil`, `imagen`) VALUES
(3, 'cesar', '81dc9bdb52d04dc20036dbd8313ed055', 'cesar@gmail.com', 'cesar julio martin gonzalez', 0, 'sfsfdfafadfsfafas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`idg`);

--
-- Indices de la tabla `pertenece`
--
ALTER TABLE `pertenece`
  ADD PRIMARY KEY (`ids`,`idg`),
  ADD KEY `fk_pertenece_genero` (`idg`);

--
-- Indices de la tabla `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`ids`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `idg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `serie`
--
ALTER TABLE `serie`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idu` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pertenece`
--
ALTER TABLE `pertenece`
  ADD CONSTRAINT `fk_pertenece_genero` FOREIGN KEY (`idg`) REFERENCES `genero` (`idg`),
  ADD CONSTRAINT `fk_pertenece_serie` FOREIGN KEY (`ids`) REFERENCES `serie` (`ids`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
